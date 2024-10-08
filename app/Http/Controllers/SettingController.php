<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        return Setting::all();
    }

    public function store(Request $request)
    {
        $setting = Setting::create($request->all());
        return response()->json($setting, 201);
    }

    public function show(Setting $setting)
    {
        return $setting;
    }

    public function update(Request $request, Setting $setting)
    {
        $setting->update($request->all());
        return response()->json($setting, 200);
    }

    public function destroy(Setting $setting)
    {
        $setting->delete();
        return response()->json(null, 204);
    }
}