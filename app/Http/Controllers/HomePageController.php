<?php

namespace App\Http\Controllers;

use App\Models\HomePage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomePageController extends Controller
{
    public function section_one()
    {
        $data = HomePage::FindOrFail(1);
        return view('admin.home.section_one', compact('data'));
    }

    public function section_one_update(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'banner_title' => 'required|string',
            'banner' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'video_url' => 'nullable|mimes:mp4,mov,avi,wmv|max:100000', // Max size in kilobytes (100MB)
        ]);

        try {
            $homePage = HomePage::findOrFail(1);

            // Handle Banner Image Upload
            if ($request->hasFile('banner')) {
                $oldBannerPath = public_path('backend/assets/images/homePage/' . $homePage->banner);
                if ($homePage->banner && file_exists($oldBannerPath)) {
                    unlink($oldBannerPath);
                }

                $bannerName = time() . '_' . $request->file('banner')->getClientOriginalName();
                $request->file('banner')->move(public_path('backend/assets/images/homePage/'), $bannerName);
                $homePage->banner = $bannerName;
            } else {
                $homePage->banner = $request->old_banner;
            }

            // Handle Video Upload
            if ($request->hasFile('video_url')) {
                $videoFile = $request->file('video_url');
                $videoSizeInMB = $videoFile->getSize() / 1024 / 1024; // Convert bytes to MB

                if ($videoSizeInMB > 100) {
                    return response()->json(['status' => 'error', 'message' => 'The video file is too large. Maximum allowed size is 100MB.'], 400);
                }

                $oldVideoPath = public_path('backend/assets/images/homePage/' . $homePage->video_url);
                if ($homePage->video_url && file_exists($oldVideoPath)) {
                    unlink($oldVideoPath);
                }

                $videoName = time() . '_' . $videoFile->getClientOriginalName();
                $videoFile->move(public_path('backend/assets/images/homePage/'), $videoName);
                $homePage->video_url = $videoName;
            } else {
                $homePage->video_url = $request->old_video_url;
            }

            // Update other fields
            $homePage->title = $request->title;
            $homePage->banner_title = $request->banner_title;
            $homePage->save();

            return response()->json([
                'status' => 'success',
                'message' => 'Updated successfully!',
                'data' => $homePage
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Something went wrong!',
                'error' => $e->getMessage()
            ], 500);
        }
    }




    public function section_two()
    {
        $data = HomePage::FindOrFail(2);
        return view('admin.home.section_two', compact('data'));
    }

    public function section_two_update(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'banner_title' => 'required|string',
            'banner' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $homePage = HomePage::findOrFail(2);

        // Handle Banner Image Upload (if provided)
        if ($request->hasFile('banner')) {
            // Define the correct path
            $oldBannerPath = public_path('backend/assets/images/homePage/' . $homePage->banner);

            // Delete old banner if it exists
            if ($homePage->banner && file_exists($oldBannerPath)) {
                unlink($oldBannerPath);
            }

            // Store the new banner image
            $bannerName = time() . '_' . $request->file('banner')->getClientOriginalName();
            $request->file('banner')->move(public_path('backend/assets/images/homePage/'), $bannerName);
            $homePage->banner = $bannerName; // Update the banner column
        } else {
            // Keep the old banner if no new file is uploaded
            $homePage->banner = $request->old_banner;
        }

        // Update other fields
        $homePage->title = $request->title;
        $homePage->banner_title = $request->banner_title;
        $homePage->save();

        // Return success message as part of the response
        return response()->json([
            'success' => true,
            'message' => 'Updated successfully!',
            'new_banner' => asset('backend/assets/images/homePage/' . $homePage->banner),
            'title' => $homePage->title,
            'banner_title' => $homePage->banner_title,
        ]);
    }







    public function section_three()
    {
        $data = HomePage::FindOrFail(3);
        return view('admin.home.section_three', compact('data'));
    }

    public function section_three_update(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'banner_title' => 'required|string',
            'banner' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $homePage = HomePage::findOrFail(3);
        $newBannerPath = null;

        // Handle Banner Image Upload
        if ($request->hasFile('banner')) {
            $oldBannerPath = public_path('backend/assets/images/homePage/' . $homePage->banner);

            // Delete old banner if it exists
            if ($homePage->banner && file_exists($oldBannerPath)) {
                unlink($oldBannerPath);
            }

            // Store new banner
            $bannerName = time() . '_' . $request->file('banner')->getClientOriginalName();
            $request->file('banner')->move(public_path('backend/assets/images/homePage/'), $bannerName);
            $homePage->banner = $bannerName;

            // Return the new image path for AJAX update
            $newBannerPath = asset('backend/assets/images/homePage/' . $bannerName);
        }

        // Update other fields
        $homePage->title = $request->title;
        $homePage->banner_title = $request->banner_title;
        $homePage->save();

        // Return JSON response instead of redirect
        return response()->json([
            'success' => true,
            'message' => 'Updated successfully!',
            'title' => $homePage->title,
            'banner_title' => $homePage->banner_title,
            'new_banner' => $newBannerPath, // Send new image path if updated
        ]);
    }




    public function section_four()
    {
        $data = HomePage::findOrFail(4);
        $drop_down_data = HomePage::whereNotIn('id', [1, 2, 3, 4])->get();

        return view('admin.home.section_four', compact('data', 'drop_down_data'));
    }


    public function section_four_update(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'banner_title' => 'required|string',
        ]);

        $homePage = HomePage::findOrFail(4);

        // Update other fields
        $homePage->title = $request->title;
        $homePage->banner_title = $request->banner_title;
        $homePage->save();

        // Flash success message
        session()->flash('success', 'Updated successfully!');

        // Redirect back to the previous page
        return redirect()->back();
    }

    public function section_four_drop_down_insert(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'banner_title' => 'required|string',
            'banner' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $homePage = new HomePage(); // Create a new instance

        // Handle Banner Image Upload
        if ($request->hasFile('banner')) {
            // Store new banner
            $bannerName = time() . '_' . $request->file('banner')->getClientOriginalName();
            $request->file('banner')->move(public_path('backend/assets/images/homePage/'), $bannerName);
            $homePage->banner = $bannerName;
        }

        // Assign other fields
        $homePage->title = $request->title;
        $homePage->banner_title = $request->banner_title;

        // Save the new record
        $homePage->save();

        // Flash success message
        session()->flash('success', 'Inserted successfully!');

        // Redirect back to the previous page
        return redirect()->back();
    }

    public function section_four_drop_down_edit(Request $request)
    {
        $data = HomePage::findOrFail($request->id);
        return response()->json($data);
    }

    public function section_four_drop_down_update(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'title' => 'required|string',
            'banner_title' => 'required|string',
            'banner' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',  // Banner is optional
        ]);

        // Find the HomePage record
        $homePage = HomePage::find($request->id);

        // Handle Banner Image Upload (if provided)
        if ($request->hasFile('banner')) {
            // Define the old banner path
            $oldBannerPath = public_path('backend/assets/images/homePage/' . $homePage->banner);

            // Delete the old banner image if it exists
            if ($homePage->banner && file_exists($oldBannerPath)) {
                unlink($oldBannerPath);
            }

            // Store the new banner image
            $bannerName = time() . '_' . $request->file('banner')->getClientOriginalName();
            $request->file('banner')->move(public_path('backend/assets/images/homePage/'), $bannerName);
            $homePage->banner = $bannerName; // Update the banner column
        }

        // Update other fields
        $homePage->title = $request->title;
        $homePage->banner_title = $request->banner_title;

        // Save the updated data
        $homePage->save();

        // Flash success message
        session()->flash('success', 'Updated successfully!');

        // Return success response
        return response()->json(['success' => true, 'message' => 'Updated successfully!']);
    }


    public function section_four_drop_down_delete(Request $request)
    {
        $id = $request->id;

        // Find the HomePage record
        $homePage = HomePage::findOrFail($id);

        // Get the image path
        $oldBannerPath = public_path('backend/assets/images/homePage/' . $homePage->banner);

        // Check if file exists and delete it
        if (file_exists($oldBannerPath) && !empty($homePage->banner)) {
            unlink($oldBannerPath);
        }

        // Delete the record
        if ($homePage->delete()) {
            // Flash success message
            session()->flash('success', 'Deleted successfully!');

            return response()->json(['success' => true]);
        } else {
            return response()->json(['success' => false]);
        }
    }










}
