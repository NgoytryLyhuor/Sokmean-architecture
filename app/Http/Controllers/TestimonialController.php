<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function index()
    {
        $testimonial = Team::orderBy('id','desc')->Where('role','testimonial')->get();
        return view('admin.testimonial.index',compact('testimonial'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:50000',
        ]);

        $team = new Team();

        // Handle Image Upload
        if ($request->hasFile('image')) {
            $imageName = time() . '_' . $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('backend/assets/images/testimonial/'), $imageName);
            $team->image = $imageName;
        }

        // Assign other fields
        $team->name = $request->name;
        $team->position = $request->position;
        $team->description = $request->description;
        $team->role = 'testimonial';


        $team->save();

        session()->flash('success', 'Updated successfully!');

        return redirect()->back();
    }

    public function edit(Request $request)
    {
        $id = $request->input('id');
        $data = Team::find($id); // Fetch the record by ID

        if ($data) {
            return response()->json([
                'status' => 'success',
                'data' => $data
            ]);
        } else {
            return response()->json([
                'status' => 'error',
                'message' => 'Record not found.'
            ]);
        }
    }


    public function update(Request $request, $id)
    {
        $team = Team::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:50000',
        ]);

        // Handle Image Upload
        if ($request->hasFile('image')) {
            // Delete old image if it exists
            if ($team->image && file_exists(public_path('backend/assets/images/testimonial/' . $team->image))) {
                unlink(public_path('backend/assets/images/testimonial/' . $team->image));
            }

            // Store new image
            $imageName = time() . '_' . $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('backend/assets/images/testimonial/'), $imageName);
            $team->image = $imageName;
        }

        // Update fields
        $team->name = $request->name;
        $team->position = $request->position;
        $team->description = $request->description;

        $team->save();

        session()->flash('success', 'Updated successfully!');
        return redirect()->back();
    }


    public function destroy($id)
    {
        $team = Team::findOrFail($id);

        if ($team->image) {
            $imagePath = public_path('backend/assets/images/testimonial/' . $team->image);

            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        $team->delete();

        session()->flash('success', 'Testimonial deleted successfully');

        return response()->json(['message' => 'Testimonial deleted successfully']);
    }
}
