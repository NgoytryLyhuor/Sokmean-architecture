<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the teams.
     */
    public function index()
    {
        $teams = Team::orderBy('id','desc')->Where('role','member')->get();
        return view('admin.team.index',compact('teams'));
    }

    /**
     * Store a newly created team.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:50000',
            'social' => 'nullable|array',
            'social.*.name' => 'nullable|string|max:255',
            'social.*.url' => 'nullable|url|max:255',
        ]);

        $team = new Team();

        // Handle Image Upload
        if ($request->hasFile('image')) {
            $imageName = time() . '_' . $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('backend/assets/images/team/'), $imageName);
            $team->image = $imageName;
        }

        $socialLinks = [];
        if ($request->has('social')) {
            foreach ($request->social as $social) {
                if (!empty($social['name']) && !empty($social['url'])) {
                    $socialLinks[] = [
                        'name' => $social['name'],
                        'url' => $social['url'],
                    ];
                }
            }
        }

        // Convert the array to JSON before saving
        $team->social = !empty($socialLinks) ? json_encode($socialLinks) : null;

        // Assign other fields
        $team->name = $request->name;
        $team->position = $request->position;
        $team->description = $request->description;
        $team->role = 'member';

        $team->save();

        session()->flash('success', 'Updated successfully!');

        return redirect()->back();
    }

    public function edit(Request $request)
    {
        $id = $request->input('id');
        $data = Team::find($id); // Fetch the record by ID

        if ($data) {
            // Decode the JSON stored in the social field
            if ($data->social) {
                $data->social = json_decode($data->social, true);
            } else {
                $data->social = [];
            }

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



    /**
     * Update the specified team.
     */
    public function update(Request $request, $id)
    {
        $team = Team::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:50000',
            'social' => 'nullable|array',
            'social.*.name' => 'nullable|string|max:255',
            'social.*.url' => 'nullable|url|max:255',
        ]);

        // Handle Image Upload
        if ($request->hasFile('image')) {
            // Delete old image if it exists
            if ($team->image && file_exists(public_path('backend/assets/images/team/' . $team->image))) {
                unlink(public_path('backend/assets/images/team/' . $team->image));
            }

            // Store new image
            $imageName = time() . '_' . $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('backend/assets/images/team/'), $imageName);
            $team->image = $imageName;
        }

        $socialLinks = [];
        if ($request->has('social')) {
            foreach ($request->social as $social) {
                if (!empty($social['name']) && !empty($social['url'])) {
                    $socialLinks[] = [
                        'name' => $social['name'],
                        'url' => $social['url'],
                    ];
                }
            }
        }

        $team->social = !empty($socialLinks) ? $socialLinks : null;

        // Update fields
        $team->name = $request->name;
        $team->position = $request->position;
        $team->description = $request->description;

        $team->save();

        session()->flash('success', 'Updated successfully!');
        return redirect()->back();
    }


    /**
     * Remove the specified team.
     */
    public function destroy($id)
    {
        // Find the team record
        $team = Team::findOrFail($id);

        // Check if the team has an associated image
        if ($team->image) {
            // Define the full path to the image
            $imagePath = public_path('backend/assets/images/team/' . $team->image);

            // Delete the image file if it exists
            if (file_exists($imagePath)) {
                unlink($imagePath); // Use PHP's unlink() to delete the file
            }
        }

        // Delete the team record from the database
        $team->delete();

        // Add a success message to the session
        session()->flash('success', 'Team deleted successfully');

        // Return a JSON response
        return response()->json(['message' => 'Team deleted successfully']);
    }
}
