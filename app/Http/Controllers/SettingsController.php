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
            $logoPath = $request->file('logo')->store('logos', 'public');
            $logoPath = 'storage/' . $logoPath;
            $logoPath = env('APP_URL') . '/' . $logoPath;
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
            if ($logoPath) {
                Storage::disk('public')->delete($logoPath);
            }
            $logoPath = $request->file('logo')->store('logos', 'public');
            $logoPath = 'storage/' . $logoPath;
            $logoPath = env('APP_URL') . '/' . $logoPath;
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
