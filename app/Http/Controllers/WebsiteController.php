<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Sitesetting;
use App\Models\Page;
use App\Models\Homepage;
use App\Models\Brand;
use App\Models\Service;
use App\Models\Booking;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use App\Models\Extra;
class WebsiteController extends Controller
{
    public function welcome()
    {
        $Sitesetting = Sitesetting::where('id', 1)->first();
         $page = Homepage::first();
         $herosection = json_decode($page->herosection, true) ?? [];
        $servicesection = json_decode($page->servicesection, true) ?? [];
        $HowitworksSection = json_decode($page->HowitworksSection, true) ?? [];
        $MeetsomeofourStarsSection = json_decode($page->MeetsomeofourStarsSection, true) ?? [];
        $homepagemstar = json_decode($page->homepagemstar, true);
         $Brands = Brand::get();
         $servics = Service::latest()->get();
        return view('welcome', compact('homepagemstar','servics','Sitesetting','Brands','herosection', 'servicesection', 'HowitworksSection', 'MeetsomeofourStarsSection'));
    }
    
     public function service($service)
    {
        
       $service = str_replace('-', ' ', $service);
       $firstservics = Service::where('servicename',$service)->first();
         $servics = Service::latest()->get();
        $Sitesetting = Sitesetting::where('id', 1)->first();
        return view('service', compact('firstservics','servics','Sitesetting'));
    }
     public function about()
    {
         $servics = Service::latest()->get();
        $Sitesetting = Sitesetting::where('id', 1)->first();
         $page = Page::first();
        $about = json_decode($page->about, true);
        return view('about', compact('servics','Sitesetting','about'));
    }
     public function terms()
    {
         $servics = Service::latest()->get();
        $Sitesetting = Sitesetting::where('id', 1)->first();
        $page = Page::first();
        $terms = 
        json_decode($page->terms, true);
        return view('terms', compact('servics','Sitesetting','terms'));
    }
        public function privacy()
    {
         $servics = Service::latest()->get();
        $Sitesetting = Sitesetting::where('id', 1)->first();
        $page = Page::first();
        $privacy = 
         json_decode($page->privacy, true);
        return view('privacy', compact('servics','Sitesetting','privacy'));
    }

    public function contact()
    {
         $servics = Service::latest()->get();
    $Sitesetting = Sitesetting::where('id', 1)->first();

        return view('contacts', compact('servics','Sitesetting'));
    }
       public function booking($service)
    {
         $Extra = Extra::latest()->get();
         $servics = Service::latest()->get();
          $service = str_replace('-', ' ', $service);
       $firstservics = Service::where('servicename',$service)->first();
    $Sitesetting = Sitesetting::where('id', 1)->first();
        return view('booking', compact('firstservics','servics','Sitesetting','Extra'));
    }
    
     public function getbookings()
    {
         $servics =Service::latest()->get();
        $Extra = Extra::latest()->get();
       $firstservics =null;
    $Sitesetting = Sitesetting::where('id', 1)->first();
        return view('booking', compact('firstservics','servics','Sitesetting','Extra'));
    }
public function getTimeSlot(Request $request){
    // Step 1: Get the desired date from the request
    $date = $request->input('date'); // Assuming the date is passed as a parameter in the request

    // Step 2: Fetch all bookings for that date and address
    $bookings = Booking::where('Date', $request->fulldate)
                       ->where('ADDRESS', $request->address)
                       ->get();

    // Step 3: Parse the office timing
    $sitesetting = Sitesetting::findOrFail(1);
    $officeTiming = json_decode($sitesetting->timing);

    // Step 4: Calculate the available slots based on office timing and existing bookings
    $availableSlots = [];
    $currentTime = strtotime($officeTiming[0]);
    $endTime = strtotime($officeTiming[1]);

    // Create an array to store existing time slots
    $existingSlots = [];
    // Populate existing slots array with the start times from the database
    foreach ($bookings as $booking) {
        $existingSlots[] = strtotime($booking->StartTime);
    }

    // Iterate through each time slot within office hours
    while ($currentTime < $endTime) {
        // Check if the current time slot exists in the database
        if (!in_array($currentTime, $existingSlots)) {
            // If the time slot is not booked, add its start time to the list of available slots
            $slotStart = date('H:i', $currentTime);
            $availableSlots[] = ["fromTime" => $slotStart];
        }

        $currentTime = $currentTime + 3600; // Move to the next time slot
    }

    // Step 5: Return the remaining slots
    return response()->json($availableSlots);
}


  public function savebooking(Request $request)
    {
        $validatedData = $request->validate([
            'sname' => 'required',
            'Duration' => 'required',
            'NoP' => 'required',
            'Material' => 'required',
            'Frequency' => 'required',
            'Date' => 'required',
            'StartTime' => 'required',
            'ADDRESS' => 'required',
            'Total' => 'required',
            'extra' => '',
            'buildingType' => 'required',
            
        ]);
        
       $bookingsSum = Booking::where('Date', $request->Date)
                      ->where('status', '!=', 'complete')
                      ->sum('NoP');

        if ($bookingsSum >= 12) {
    return response()->json(['error' => 'No professionals available for the selected date.'], 422);
}else{
    $avalaiblenowprofessional = 12 -  $bookingsSum;
    if ($request->NoP > $avalaiblenowprofessional) {
        return response()->json(['error' => 'required number of professionals are not available.'], 422);
    }
}   
       
        $validatedData[ 'status'] = 'new' ;    
        $booking = Booking::create($validatedData);
        $msg = "successfully";
           return response()->json($msg);

        
    }




     public function contactsave(Request $request)
    {
        // Validate the form data
        $request->validate([
            'email' => 'required|email',
            'phone' => 'required',
            'service' => 'required',
            'attachment' => 'required|mimes:pdf,docx|max:2048', // Adjust file types and size as needed
            'message' => 'required',
        ]);

        // Handle file upload
        $attachmentPath = $request->file('attachment')->store('attachments');

        // Send email
        Mail::to('recipient@example.com')->send(new ContactMail($request->all(), $attachmentPath));

        // Additional logic if needed (e.g., redirect back with success message)
        return redirect()->back()->with('success', 'Message sent successfully!');
    }
    
    public function paymentlink(Request $request)
{
    $client = new \GuzzleHttp\Client();

    $response = $client->request('POST', 'https://sandbox.dev.business.mamopay.com/manage_api/v1/links', [
        'json' => [
            'title' => $request->sname,
            'description' => '',
            'capacity' => 1,
            'active' => true,
            'return_url' => 'https://myawesomewebsite.com/paymentSuccess',
            'failure_return_url' => 'https://failureurl.com/paymentFailure',
            'processing_fee_percentage' => 3,
            'amount' => $request->sname,
            'amount_currency' => 'AED',
            'link_type' => 'modal',
            'enable_tabby' => false,
            'enable_message' => false,
            'enable_tips' => false,
            'save_card' => 'off',
            'enable_customer_details' => false,
            'enable_quantity' => false,
            'enable_qr_code' => false,
            'send_customer_receipt' => false,
        ],
        'headers' => [
             'Authorization' => 'Bearer sk-511be167-cda6-4950-91df-e5b85f9fd324',
            'Accept' => 'application/json',
            'Content-Type' => 'application/json',
            
        ],
    ]);

    dd($response->getBody());
    return redirect()->back()->with('success', 'Message sent successfully!');
}

    
    
    
    
    
    
    
    
    
    
}