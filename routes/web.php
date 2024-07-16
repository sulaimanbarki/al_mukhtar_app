<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\UsersController;
use Spatie\Backup\Tasks\Backup\BackupJob;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\MultimediaController;
use Spatie\Backup\BackupDestination\BackupDestinationFactory;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/optimize', function () {
    // run optimize command
    \Artisan::call('optimize');
    // clear cache
    \Artisan::call('cache:clear');
    // config cache
    \Artisan::call('config:clear');

    return 'DONE'; // return results
});

// execute storage link
Route::get('/command/{command}', function ($command) {
    \Artisan::call($command);
    return 'DONE'; // return results
});

// Route::redirect('/', 'login');

Route::get('/dashboard', [PagesController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/', [PagesController::class, 'books'])->name('front.home');
Route::get('/contact-Us', [PagesController::class, 'contactUs'])->name('front.contact.us');
Route::get('/books-filter', [PagesController::class, 'books'])->name('front.books');
Route::get('/book-details/{slug}', [PagesController::class, 'bookDetails'])->name('book-details');








Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('users', UsersController::class);
    Route::resource('categories', CategoriesController::class);
    Route::resource('books', BooksController::class);
    Route::resource('multimedia', MultimediaController::class);
    Route::resource('settings', SettingsController::class);
});


require __DIR__ . '/auth.php';


Route::get('/backupdb', function () {
    try {
        $tables = DB::select('SHOW TABLES');

        $output = '';
        foreach ($tables as $table) {
            $table = get_object_vars($table);
            $tableName = current($table);

            $showTableQuery = "SHOW CREATE TABLE $tableName";
            $createTable = DB::select($showTableQuery)[0]->{'Create Table'};
            $output .= "\n\n" . $createTable . ";\n\n";

            $selectRowsQuery = "SELECT * FROM $tableName";
            $rows = DB::select($selectRowsQuery);

            foreach ($rows as $row) {
                $row = (array)$row;
                $values = implode("', '", array_map('addslashes', $row));
                $output .= "INSERT INTO $tableName VALUES ('$values');\n";
            }
        }

        // Set file name and path
        $fileName = 'database_backup_' . date('Y-m-d_H-i-s') . '.sql';
        $filePath = storage_path('app/' . $fileName);

        // Write output to the backup file
        file_put_contents($filePath, $output);

        // Set headers for file download
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="' . $fileName . '"');
        header('Content-Length: ' . filesize($filePath));
        header('Pragma: no-cache');
        header('Cache-Control: must-revalidate');
        header('Expires: 0');
        readfile($filePath);

        // Delete the backup file after download
        unlink($filePath);

        exit;
    } catch (\Exception $e) {
        return response()->json(['error' => $e->getMessage()], 500);
    }
});

