<?php

namespace App\Http\Controllers\employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Assigned;
use App\Models\Booking;
use App\Models\User;
use App\Models\Extra;
use Illuminate\Support\Facades\Hash;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function activejob()
    {
        $data = Assigned::with('user','employeebooking')->where('status' , 'assigned')->orwhere('status' , 'start')->latest()->get();
                 $bookingassign = Assigned::where('status','assigned')->get();

        return view('employee.activejobs' , compact('data','bookingassign'));
    } 
    public function completedjob()
    {
            $data = Booking::latest()->get();
                     $bookingassign = Assigned::where('status','assigned')->get();

        return view('employee.alljobs' , compact('data','bookingassign'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function bookingsetAssigned($id , $status)
    {
        // dd($id , $status);
        $booking = Booking::where('id',$id)->update(['status' => $status]);
        Assigned::where('serviceid',$id)->update(['status' => $status]);
        $checkremoainingbooking = Assigned::where('userid',auth()->user()->id)->where('status' , 'assigned')->orwhere('status' , 'start')->get();
       
       if ($checkremoainingbooking->isEmpty()) {
    User::where('id', auth()->user()->id)->update(['status' => 0]);
       }else{
         User::where('id', auth()->user()->id)->update(['status' => 1]);  
       }
       
      

        return redirect()->route('employee.activejob')
            ->with('success', 'Status Update successfully');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
                  
        
    }

    /**
     * Display the specified resource.
     */
    public function viewjob(string $id)
    {
        $bookingassign = Assigned::where('status','assigned')->get();

        $booking = Booking::where('id' , $id)->first();
        $idsArray = explode(',', $booking->extra);
        $Extra = Extra::whereIn('id', $idsArray)->get();

        return view('employee.show' , compact('booking','bookingassign','Extra'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }
public function updatestatus()
{
    $user = User::find(auth()->user()->id);

    // Retrieve the current status
    $currentStatus = $user->status;

    // Toggle the status (if 1, set to 0; if 0, set to 1)
    $newStatus = $currentStatus == 1 ? 0 : 1;

    // Update the user's status
    $user->update(['status' => $newStatus]);

    return redirect()->back();
}


    /**
     * Update the specified resource in storage.
     */
public function updatepass(Request $request)
{
   
    $user = User::find(auth()->user()->id);

    $dataToUpdate = [
        'name' => auth()->user()->name,
        'email' => $request->email,
    ];

    // Check if a new password is provided
    if ($request->filled('password')) {
        $dataToUpdate['password'] = Hash::make($request->password);
    }

    $user->update($dataToUpdate);

    return redirect()->back()->with('success', 'Record updated successfully');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
     public function setting()
    {
       return view('employee.setting');
    }
}
