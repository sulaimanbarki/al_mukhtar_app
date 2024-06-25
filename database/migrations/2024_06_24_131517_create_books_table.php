<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->unsignedBigInteger('user_id'); // Author
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('category_id'); // Category
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->string('isbn')->nullable();
            $table->date('publication_date')->nullable();
            $table->text('summary')->nullable();
            $table->string('cover_image')->nullable();
            $table->string('file_path')->nullable(); // PDF or any other file
            $table->unsignedInteger('pages')->nullable();
            $table->string('publisher')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
};
