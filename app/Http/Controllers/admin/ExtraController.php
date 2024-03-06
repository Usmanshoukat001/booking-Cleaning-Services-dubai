<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Extra;
use Illuminate\Support\Facades\Hash;

class ExtraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data = Extra::latest()->get();
        return view('admin.Extra.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.Extra.create');
    }

    /**
     * Store a newly created resource in storage.
     */
public function store(Request $request)
{
    
    // Check if an image file is uploaded
    if ($request->hasFile('image')) {
        $file = $request->file('image');
        $filename = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path('service'), $filename);
        $newServiceData['image'] = $filename; // Store the filename in the database
    }
// dd($filename);
    // Create a new service record
    $service = Extra::create([
        'name' => $request->name,
        'price' => $request->price,
        'image' => $filename ?? null, 
    ]);

    // Redirect back with a success message
    return redirect()->route('Extra.index')->with('success', 'Extra created successfully');
}



    /**
     * Display the specified resource.
     */
    public function show(User $Extra)
    {
        return view('admin.Extra.show', compact('Extra'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $Extra)
    {
        return view('admin.Extra.edit', compact('Extra'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $Extra)
    {
        $Extra->update([
            'blocked' => $Extra->blocked == 1 ? 0 : 1,
        ]);

        return redirect()->route('Extra.index')
            ->with('success', 'Employee Blocked successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // dd($id);
        $Extra = Extra::find($id);
        $Extra->delete();

        return redirect()->route('Extra.index')
            ->with('success', 'employee deleted successfully');
    }
}