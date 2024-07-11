<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class SettingsController extends Controller
{
    public function index()
    {
        $settings = Setting::all();
        return view('admin.settings.index', compact('settings'));
    }

    public function create()
    {
        return view('admin.settings.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'key' => 'required|unique:settings,key',
            'value' => 'required',
        ]);

        $logoPath = null;
        if ($request->hasFile('logo')) {
            $file = $request->file('logo');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = 'logos/' . $fileName;
            $file->move(public_path('logos'), $fileName);
            $logoPath = env('APP_URL') . '/' . $filePath;
        }

        Setting::create([
            'key' => $request->key,
            'value' => $request->value,
            'logo_path' => $logoPath,
        ]);

        return redirect()->route('settings.index')->with('success', 'Setting created successfully.');
    }


    public function edit($id)
    {
        $setting = Setting::findOrFail(decrypt($id));
        return view('admin.settings.edit', compact('setting'));
    }

    public function update(Request $request, $id)
    {
        $setting = Setting::findOrFail(decrypt($id));

        $request->validate([
            'key' => 'required|unique:settings,key,' . $setting->id,
            'value' => 'required',
        ]);

        $logoPath = $setting->logo_path;
        if ($request->hasFile('logo')) {
            // Delete the old logo if it exists
            if ($logoPath) {
                $oldLogoPath = public_path(str_replace(env('APP_URL') . '/', '', $logoPath));
                if (file_exists($oldLogoPath)) {
                    unlink($oldLogoPath);
                }
            }

            // Store the new logo
            $file = $request->file('logo');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = 'logos/' . $fileName;
            $file->move(public_path('logos'), $fileName);
            $logoPath = env('APP_URL') . '/' . $filePath;
        }

        $setting->update([
            'key' => $request->key,
            'value' => $request->value,
            'logo_path' => $logoPath,
        ]);

        return redirect()->route('settings.index')->with('success', 'Setting updated successfully.');
    }


    public function destroy($id)
    {
        $setting = Setting::findOrFail(decrypt($id));
        $setting->delete();

        return redirect()->route('settings.index')->with('success', 'Setting deleted successfully.');
    }
}
