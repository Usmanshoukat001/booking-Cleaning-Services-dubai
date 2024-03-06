<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\User;
use App\Models\Extra;
use App\Models\Assigned;
class BookingController extends Controller
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
        $data = Booking::where('status' , 'new')->latest()->get();
               $employe = User::where('role', 'employee')
                 ->where(function ($query) {
                     $query->whereNull('blocked')
                           ->orWhere('blocked', 0);
                 })
                 ->latest()
                 ->get();


        return view('admin.booking.index', compact('data','employe'));
    }
    public function assignedBooking()
    {
        $data = Assigned::with('user','booking')->where('status' , 'assigned')->orwhere('status' , 'start')->latest()->get();
       
        $employe = User::where('role', 'employee')
                 ->where(function ($query) {
                     $query->whereNull('blocked')
                           ->orWhere('blocked', 0);
                 })
                 ->latest()
                 ->get();
                 
      
        return view('admin.booking.assigned', compact('data','employe'));
    }
    public function completeBooking()
    {
        $data = Assigned::with('user','booking')->where('status' , 'complete')->latest()->get();
      $employe = User::where('role', 'employee')
                 ->where(function ($query) {
                     $query->whereNull('blocked')
                           ->orWhere('blocked', 0);
                 })
                 ->latest()
                 ->get();
        return view('admin.booking.complete', compact('data','employe'));
    }
    public function rejectedBooking()
    {
        $data = Booking::where('status' , 'rejected')->latest()->get();
        // dd($data);
        return view('admin.booking.rejected', compact('data'));
    }
    
    public function updateAssignment(Request $request)
    {
        // dd($request);
        $booking = Assigned::findOrFail($request->assignedid);
        
        $booking->sname = $request->input('sname');
        $booking->userid = json_encode($request->userid[0]);
        $booking->save();
        
        
            $booking2 = Booking::findOrFail($booking->serviceid);
        
        // Update the status based on the value passed in the request
      $booking->user_id = json_encode($request->userid[0]);
        $booking2->save();
        
        return redirect()->route('assigned.Booking')
            ->with('success', 'booking created successfully');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.booking.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function bookingsassign(Request $request)
    {
       
        $validatedData = $request->validate([
            'sname' => 'required|string|max:255',
            'serviceid' => 'required|string|max:255',
             'userid' => 'required',
             'status' => 'pending'
        ]);
        
        $validatedData[ 'status'] = 'assigned';
        $userIds = explode(',', $request->userid[0]);
        
        
       
        
        foreach($userIds as $id){
            
          $User =   User::findOrFail($id);
           $User->status = 1;
        $User->save();
        }
        
         // Update the booking for each user
        $booking = Booking::findOrFail($validatedData['serviceid']);
        $booking->user_id = json_encode($request->userid[0]);
        $booking->status = 'assigned';
        $booking->save();
           
        Assigned::create([
            'sname' => $validatedData['sname'],
            'serviceid' => $validatedData['serviceid'],
            'userid' => json_encode($request->userid[0]),
            'status' => $validatedData['status'],
        ]);
        
       
    
        
       
        return redirect()->route('booking.index', $booking->id)
            ->with('success', 'booking created successfully');
    }
    
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'qname' => 'required|string|max:255',
        ]);

        $booking = Booking::create($validatedData);

        return redirect()->route('booking.index', $booking->id)
            ->with('success', 'booking created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(booking $booking)
    {
       
       $idsArray = explode(',', $booking->extra);

$Extra = Extra::whereIn('id', $idsArray)->get();
         
        return view('admin.booking.show', compact('booking','Extra'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(booking $booking)
    {
        return view('admin.booking.edit', compact('booking'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, booking $booking)
    {
        $validatedData = $request->validate([
            'status' => 'required|string|max:255',
        ]);

        $booking->update($validatedData);

        return redirect()->route('booking.show', $booking->id)
            ->with('success', 'booking updated successfully');
    }
  public function bookingsupdate($id, $status)
    {
        // Retrieve the booking record
        $booking = Booking::findOrFail($id);
        
        // Update the status based on the value passed in the request
        $booking->status = $status;
        $booking->save();
        
        // Redirect back or do whatever is appropriate after updating
        return redirect()->back()->with('success', 'Booking status updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(booking $booking)
    {
        $booking->delete();

        return redirect()->route('booking.index')
            ->with('success', 'booking deleted successfully');
    }
}
