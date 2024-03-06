<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\Homepage;
use App\Models\Brand;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function about()
    {
        $page = Page::first();
        $about = json_decode($page->about, true);
        return view('admin.pages.about', compact('about'));
    }

public function saveabout(Request $request)
{
    try {
        $page = Page::first();

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('siteLogo'), $imageName);
            $data['image'] = $imageName;
        } else {
            $data['image'] = $request->imagevaluename;
        }

        $data['title'] = $request->title;
        $data['about_content'] = $request->about_content;

        $page->update([
            'about' => json_encode($data),
        ]);

        return redirect()->back()->with('success', 'About page content updated successfully');
    } catch (\Exception $e) {
        return redirect()->back()->with('error', 'Error updating content: ' . $e->getMessage());
    }
}


public function contact()
{
    $page = Homepage::first();
    $Brands = Brand::get();

    if ($page) {
        // Assuming these fields can be null in the database
        $herosection = json_decode($page->herosection, true) ?? [];
        $servicesection = json_decode($page->servicesection, true) ?? [];
        $HowitworksSection = json_decode($page->HowitworksSection, true) ?? [];
        $MeetsomeofourStarsSection = json_decode($page->MeetsomeofourStarsSection, true) ?? [];

    } else {
        $herosection =  [];
        $servicesection = '';
        $HowitworksSection = [];
        $MeetsomeofourStarsSection = '';
    }
            return view('admin.pages.contact', compact('Brands','herosection', 'servicesection', 'HowitworksSection', 'MeetsomeofourStarsSection'));

}

    public function homepagehero(Request $request)
    {
        $page = Homepage::first();
       if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('siteLogo'), $imageName);
            $data['image'] = $imageName;
        } else {
            $data['image'] = $request->imagevaluename;
        }

        $data['title'] = $request->title;
        $page->update([
            'herosection' => json_encode($data),
        ]);

        return redirect()->back()->with('success', 'page content updated successfully');
    }
    
    public function homepagemstar()
{
    $page = Homepage::first();
    
    // Assuming you have 'homepagemstar' field in your Homepage model
    $homepagemstar = json_decode($page->homepagemstar, true);
    return view('admin.pages.homepagemstars', compact('page','homepagemstar'));
}


public function homepagemstarstore(Request $request)
{
    $page = Homepage::first();
    $homepagemstar = json_decode($page->homepagemstar, true);

    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imageName = time() . '_' . $image->getClientOriginalName();
        $image->move(public_path('siteLogo'), $imageName);

        // Add a new image to the 'images' array
        $newImage = [
            'image' => $imageName,
            'text' => $request->input('text'),
        ];

        // Check if 'images' array exists, otherwise create it
        if (!isset($homepagemstar['images'])) {
            $homepagemstar['images'] = [];
        }

        // Append the new image to the 'images' array
        $homepagemstar['images'][] = $newImage;

        // Update the 'homepagemstar' field with the modified JSON data
        $page->update([
            'homepagemstar' => json_encode($homepagemstar),
        ]);

        return redirect()->back()->with('success', 'Page content updated successfully');
    }

    // Handle the case when no new image is uploaded
    // You might want to add additional logic if needed

    return redirect()->back()->with('error', 'No image uploaded');
}

public function homepagemstardestroy($key)
{
    $page = Homepage::first();
    $homepagemstar = json_decode($page->homepagemstar, true);

    if (isset($homepagemstar['images'][$key])) {
        // Remove the image with the specified key
        unset($homepagemstar['images'][$key]);

        // Update the 'homepagemstar' field with the modified JSON data
        $page->update([
            'homepagemstar' => json_encode($homepagemstar),
        ]);

        return redirect()->back()->with('success', 'Image deleted successfully');
    }

    return redirect()->back()->with('error', 'Image not found');
}

     
    
        public function homepageService(Request $request)
    {
        $page = Homepage::first();
     
        $data['title'] = $request->title;
        $page->update([
            'servicesection' => json_encode($data),
        ]);

        return redirect()->back()->with('success', 'Contact page content updated successfully');
    }
    
        public function homepagehitwork(Request $request)
    {
        $page = Homepage::first();
       if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('siteLogo'), $imageName);
            $data['image'] = $imageName;
        } else {
            $data['image'] = $request->imagevaluename;
        }

        $data['title'] = $request->title;
          $data['Description'] = $request->Description;
            $data['text1'] = $request->text1;
              $data['text2'] = $request->text2;
              $data['text3'] = $request->text3;
        $page->update([
            'HowitworksSection' => json_encode($data),
        ]);

        return redirect()->back()->with('success', 'Contact page content updated successfully');
    }
    
    
public function homepagembrand(Request $request)
{
    $uploadedPhotos = [];

    if ($request->hasFile('Photo')) {
        foreach ($request->file('Photo') as $photo) {
            $originalFileName = $photo->getClientOriginalName();
            $fileName = $this->getUniqueFileName($originalFileName, public_path('siteLogo'));
            $photo->move(public_path('siteLogo'), $fileName);

            // Add the uploaded file names to the array
            $uploadedPhotos[] = $fileName;
        }
    }

    // Create a new Brand record for each uploaded photo
    foreach ($uploadedPhotos as $uploadedPhoto) {
        Brand::create([
            'brand' => $uploadedPhoto,
        ]);
    }

    return redirect()->back()->with('success', 'Contact page content updated successfully');
}

private function getUniqueFileName($originalFileName, $filePath)
{
    $extension = pathinfo($originalFileName, PATHINFO_EXTENSION);
    $filename = pathinfo($originalFileName, PATHINFO_FILENAME);
    $counter = 1;

    while (file_exists($filePath . '/' . $originalFileName)) {
        $originalFileName = $filename . '_' . $counter . '.' . $extension;
        $counter++;
    }

    return $originalFileName;
}

    
    
    
            public function homepagemsomeostar(Request $request)
    {
        $page = Homepage::first();
     
        $data['title'] = $request->title;
        $page->update([
            'MeetsomeofourStarsSection' => json_encode($data),
        ]);

        return redirect()->back()->with('success', 'Contact page content updated successfully');
    }
    
       public function deletebrand(Request $request,$id)
    {

       
 $image = Brand::find($id);

        if ($image) {
            // Delete the image from the database
            $image->delete();

            return response()->json(['success' => true]);
        }

        return response()->json(['success' => false]);    }
    
    
    
    
//  public function savecontact(Request $request)
//     {
//         $page = Page::first();
//       if ($request->hasFile('image')) {
//             $image = $request->file('image');
//             $imageName = time() . '_' . $image->getClientOriginalName();
//             $image->move(public_path('siteLogo'), $imageName);
//             $data['image'] = $imageName;
//         } else {
//             $data['image'] = $request->imagevaluename;
//         }

//         $data['title'] = $request->title;
//         $data['about_content'] = $request->contact_content;
//         $page->update([
//             'contact' => json_encode($data),
//         ]);

//         return redirect()->back()->with('success', 'Contact page content updated successfully');
//     }

    public function terms()
    {
        $page = Page::first();
        $terms = 
        json_decode($page->terms, true);
        return view('admin.pages.terms', compact('terms'));
    }

    public function saveterms(Request $request)
    {
        $page = Page::first();
if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('siteLogo'), $imageName);
            $data['image'] = $imageName;
        } else {
            $data['image'] = $request->imagevaluename;
        }

        $data['title'] = $request->title;
        $data['terms_content'] = $request->terms_content;
        $page->update([
            'terms' => json_encode($data),
        ]);

        return redirect()->back()->with('success', 'Terms page content updated successfully');
    }

    public function privacy()
    {
        $page = Page::first();
        $privacy = 
         json_decode($page->privacy, true);
        return view('admin.pages.privacy', compact('privacy'));
    }

    public function saveprivacy(Request $request)
    {
        $page = Page::first();
if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('siteLogo'), $imageName);
            $data['image'] = $imageName;
        } else {
            $data['image'] = $request->imagevaluename;
        }

        $data['title'] = $request->title;
        $data['privacy_content'] = $request->privacy_content;
        $page->update([
            'privacy' => json_encode($data),
        ]);

        return redirect()->back()->with('success', 'Privacy page content updated successfully');
    }



}
