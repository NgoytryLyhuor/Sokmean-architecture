<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;



class AboutController extends Controller
{
    public function index()
    {
        $about = About::Where('id',1)->first();
        return view('admin.about.index',compact('about'));
    }

    public function update(Request $request){
        $request->validate([
            'title' => 'required|string',
            'banner_title' => 'required|string',
            'banner' => 'nullable|image|mimes:jpeg,png,jpg|max:10000',
            'description' => 'required|string',
        ]);

        $about = About::findOrFail(1);

        if ($request->hasFile('banner')) {
            $oldBannerPath = public_path('backend/assets/images/about/' . $about->banner);

            if ($about->banner && file_exists($oldBannerPath)) {
                unlink($oldBannerPath);
            }

            $bannerName = time() . '_' . $request->file('banner')->getClientOriginalName();
            $request->file('banner')->move(public_path('backend/assets/images/about/'), $bannerName);
            $about->banner = $bannerName;
        } else {
            $about->banner = $request->old_banner;
        }

        $about->title = $request->title;
        $about->banner_title = $request->banner_title;
        $about->description = $request->description;
        $about->save();

        return response()->json([
            'success' => true,
            'message' => 'Updated successfully!',
            'new_banner' => asset('backend/assets/images/about/' . $about->banner),
            'title' => $about->title,
            'banner_title' => $about->banner_title,
            'description' => $about->description,
        ]);
    }

}
