<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sitesetting;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class SettingController extends Controller
{

    public function setting()
    {
        $Sitesetting = Sitesetting::where('id', 1)->first();
        return view('admin.setting.index', compact('Sitesetting'));
    }
    public function savesetting(Request $request)
    {
        $validatedData = $request->validate([
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'Title' => 'required',
            'Description' => 'required',
            'Canonical' => 'required',
            'address' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'contactusemail' => 'required',
            'FaceBook' => 'required',
            'Twiter' => 'required',
            'Instagram' => 'required',
            'Youtube' => 'required',
            'timing' => 'required',
        ]);
        $timingArray = $request->input('timing');

if (count($timingArray) == 2) {
    $start = $timingArray[0];
    $end = $timingArray[1];

    $mergedArray = [$start, $end];
}
   $validatedData['timing'] = $mergedArray;
        $logoName = null;
    
        if ($request->hasFile('logo')) {
            $image = $request->file('logo');
            $logoName = 'logo.' . $image->getClientOriginalExtension();
    
            $path = $image->move(public_path('siteLogo'), $logoName);
        }
    
        $siteSetting = Sitesetting::findOrFail(1);
    
        if ($logoName !== null) {
            $siteSetting->update(['logo' => $logoName]);
        }
    
        unset($validatedData['logo']); 
        $siteSetting->update($validatedData);
    
        return redirect()->back()->with('success', 'Record updated successfully');
    }
    public function adminsetting(Request $request)
    {
        User::where('id' , auth()->user()->id)->update([
            'name' => auth()->user()->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->back()->with('success', 'Record updated successfully');
    }
    
    
}
