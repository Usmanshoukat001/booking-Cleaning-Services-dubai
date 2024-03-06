<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use Illuminate\Support\Facades\Storage;
class servicesController extends Controller
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
        $data = Service::latest()->get();
        return view('admin.services.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.services.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $existingService = Service::where('servicename', $request->input('servicename'))->first();

        if ($existingService) {
            // Service with the same name already exists, return a message
            return response()->json(['message' => 'Service with the same name already exists.'], 422);
        }

        // Store the data in an array or save it in the database
        // You can adjust this part based on your requirements
        $newServiceData = [
            'servicename' => $request->input('servicename'),
            'shortDescription' => $request->input('shortDescription'),
            'longDescription' => $request->input('longDescription'),
            'modelDescription' => $request->input('modelDescription'),
            'PRICE' => $request->input('PRICE'),
            'VAT' => $request->input('VAT'),
            'professionalsPRICE' => $request->input('professionalsPRICE'),
            'professionalsVAT' => $request->input('professionalsVAT'),
            'HoursPRICE' => $request->input('HoursPRICE'),
            'HoursVAT' => $request->input('HoursVAT'),
            'MaterialPRICE' => $request->input('MaterialPRICE'),
            'MaterialVAT' => $request->input('MaterialVAT'),
        ];

        // Handle file upload for serviceimage
        if ($request->hasFile('serviceimage')) {
            $file = $request->file('serviceimage');
            $filename = time() . '_' . $file->getClientOriginalName();
              $file->move(public_path('service'), $filename);
            $newServiceData['serviceimage'] = $filename;
        }else{
             $newServiceData['serviceimage'] = null;
        }

        // Handle file upload for serviceicon
        if ($request->hasFile('serviceicon')) {
            $file = $request->file('serviceicon');
            $filename = time() . '_' . $file->getClientOriginalName();
              $file->move(public_path('service'), $filename);
            $newServiceData['serviceicon'] = $filename;
        }else{
            $newServiceData['serviceicon'] = null;
        }

         $jsonString = json_encode($newServiceData);


       $newService = Service::create([
           'servicename' => $request->input('servicename'),
            'pjson' => $jsonString,
        ]);


    return response()->json(['message' => 'Service added.'], 200);

    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        return view('admin.services.show', compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        return view('admin.services.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {    
      
        $newServiceData = [
            'servicename' => $request->input('servicename'),
            'shortDescription' => $request->input('shortDescription'),
            'longDescription' => $request->input('longDescription'),
            'modelDescription' => $request->input('modelDescription'),
            'PRICE' => $request->input('PRICE'),
            'VAT' => $request->input('VAT'),
            'professionalsPRICE' => $request->input('professionalsPRICE'),
            'professionalsVAT' => $request->input('professionalsVAT'),
            'HoursPRICE' => $request->input('HoursPRICE'),
            'HoursVAT' => $request->input('HoursVAT'),
            'MaterialPRICE' => $request->input('MaterialPRICE'),
            'MaterialVAT' => $request->input('MaterialVAT'),
        ];
        // Handle file upload for serviceimage
        if ($request->hasFile('serviceimage')) {
            $file = $request->file('serviceimage');
            $filename = time() . '_' . $file->getClientOriginalName();
              $file->move(public_path('service'), $filename);
            $newServiceData['serviceimage'] = $filename;
        }else{
             $newServiceData['serviceimage'] = $request->serviceimage;
        }

        // Handle file upload for serviceicon
        if ($request->hasFile('serviceicon')) {
            $file = $request->file('serviceicon');
            $filename = time() . '_' . $file->getClientOriginalName();
              $file->move(public_path('service'), $filename);
            $newServiceData['serviceicon'] = $filename;
        }else{
            $newServiceData['serviceicon'] = $request->serviceicon;
        }

         $jsonString = json_encode($newServiceData);
         
         
       $newService = Service::where('id',$id)->update([
           'servicename' => $request->input('servicename'),
            'pjson' => $jsonString,
        ]);


    return response()->json(['message' => 'Service update.'], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(service $service)
    {
        $service->delete();

        return redirect()->route('service.index')
            ->with('success', 'service deleted successfully');
    }
}
