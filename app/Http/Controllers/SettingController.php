<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $setting = Setting::find($id);
        return view('admin.setting.setting', compact('setting'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $setting = Setting::find($id);

        if ($request->hasFile('logo')) {
            $logo = $request->file('logo');
            $logo_name = time() . '.' . $logo->getClientOriginalExtension();
            $logo->move(public_path('uploads/setting'), $logo_name);
            $setting->logo = $logo_name;
        }

        if ($request->hasFile('favicon')) {
            $favicon = $request->file('favicon');
            $favicon_name = time() . '.' . $favicon->getClientOriginalExtension();
            $favicon->move(public_path('uploads/setting'), $favicon_name);
            $setting->favicon = $favicon_name;
        }

        if ($request->hasFile('footerlogo')) {
            $footerlogo = $request->file('footerlogo');
            $footerlogo_name = time() . '.' . $footerlogo->getClientOriginalExtension(); // Fixed typo
            $footerlogo->move(public_path('uploads/setting'), $footerlogo_name);
            $setting->footerlogo = $footerlogo_name;
        }

        $setting->title = $request->title;
        $setting->email = $request->email;
        $setting->phone = $request->phone;
        $setting->address = $request->address;
        $setting->linkedin = $request->linkedin;
        $setting->facebook = $request->facebook;
        $setting->twitter = $request->twitter;
        $setting->instagram = $request->instagram;
        $setting->description = $request->description;

        $setting->save();

        return redirect()->back()->with('success', 'Setting updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
