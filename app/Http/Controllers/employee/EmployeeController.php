<?php

namespace App\Http\Controllers\employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Booking;
use App\Models\Assigned;
use Illuminate\Support\Facades\Hash;
class EmployeeController extends Controller
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
       $bookingcount = Booking::get();
$userIds = [];
foreach ($bookingcount as $bookingassigns) {
    $ids = json_decode($bookingassigns->user_id, true);
    if (isset($ids)) {
        $ids = explode(',', $ids);
        if (is_array($ids)) {
            $userIds = array_merge($userIds, $ids);
        }
    }
}

// Count occurrences of the current user's ID in $userIds
$bookingcount = array_count_values($userIds)[auth()->user()->id] ?? 0;



         $bookingassign = Assigned::where('status','assigned')->get();
         
        //  dd($bookingassign);
        return view('employee.index',compact('bookingcount','bookingassign'));
    }

 public function checkAndUpdateStatus(Request $request)
    {
        $user = $request->user(); // Assuming you're using Laravel's authentication
        $lastUpdate = $user->updated_at;

        // Calculate the time difference
        $now = now();
        $diffInHours = $now->diffInHours($lastUpdate);

        // Update the status if necessary
        if ($diffInHours >= 2 && $user->status == 1) {
            $user->status = 0;
            $user->save();
        }

        return response()->json(['message' => 'Status updated successfully']);
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
         dd($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        dd($id);
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
                         $bookingassign = Assigned::where('userid',auth()->user()->id)->where('status','assigned')->get();

       return view('employee.setting', compact('bookingassign'));
    }
}
