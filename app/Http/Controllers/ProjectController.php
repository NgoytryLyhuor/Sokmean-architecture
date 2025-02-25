<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\ProjectPath;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $project_data = Project::orderBy('id','desc')->get();

        return view('admin.project.index',compact('project_data'));
    }

    public function insert()
    {
        return view('admin.project.insert');
    }

    public function insertCover(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'cover' => 'nullable|image|mimes:jpeg,png,jpg|max:50000',
        ]);

        // Insert into projects table
        $coverPath = new Project;
        $coverPath->title = $request->title;
        $coverPath->description = $request->description;

        if ($request->hasFile('cover')) {
            // Store new banner
            $cover = time() . '_' . $request->file('cover')->getClientOriginalName();
            $request->file('cover')->move(public_path('backend/assets/images/project/'), $cover);
            $coverPath->cover = $cover;
        }

        $coverPath->save();
        $projectId = $coverPath->id;

        // Redirect to the edit page with the project_id
        return redirect()->route('project-pages.edit', ['id' => $projectId]);
    }

    public function edit($id)
    {
        $project = Project::findOrFail($id);
        $projectPath = ProjectPath::where('project_id',$id)->get();
        return view('admin.project.edit', compact('project','projectPath'));
    }

    public function insertProjectPath(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'cover' => 'nullable|image|mimes:jpeg,png,jpg|max:50000',
        ]);

        // Insert into project_paths table with project_id
        $projectPath = new ProjectPath;
        $projectPath->title = $request->title;
        $projectPath->project_id = $request->project_id;
        $projectPath->description = $request->description;
        if ($request->hasFile('cover')) {
            $cover = time() . '_' . $request->file('cover')->getClientOriginalName();
            $request->file('cover')->move(public_path('backend/assets/images/project/'), $cover);
            $projectPath->cover = $cover;
        }
        $projectPath->save();

        return redirect()->back();
    }

    public function update(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'cover' => 'nullable|image|mimes:jpeg,png,jpg|max:50000',
        ]);

        $project = Project::find($request->id);

        if ($request->hasFile('cover')) {
            $oldCover = public_path('backend/assets/images/project/' . $project->cover);
            if ($project->cover && file_exists($oldCover)) {
                unlink($oldCover);
            }
            $cover = time() . '_' . $request->file('cover')->getClientOriginalName();
            $request->file('cover')->move(public_path('backend/assets/images/project/'), $cover);
            $project->cover = $cover;
        }

        $project->title = $request->title;
        $project->description = $request->description;

        $project->save();

        session()->flash('success', 'Updated successfully!');

        return redirect()->back();
    }

    public function editProjectPath(Request $request)
    {
        $data = ProjectPath::findOrFail($request->id);
        return response()->json($data);
    }

    public function updateProjectPath(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'cover' => 'nullable|image|mimes:jpeg,png,jpg|max:50000',
        ]);

        try {
            $project = ProjectPath::findOrFail($request->id);

            if ($request->hasFile('cover')) {
                $oldCover = public_path('backend/assets/images/project/' . $project->cover);
                if ($project->cover && file_exists($oldCover)) {
                    unlink($oldCover);
                }

                $cover = time() . '_' . $request->file('cover')->getClientOriginalName();
                $request->file('cover')->move(public_path('backend/assets/images/project/'), $cover);
                $project->cover = $cover;
            }

            $project->title = $request->title;
            $project->description = $request->description;

            $project->save();

            return response()->json(['success' => true, 'message' => 'Updated successfully!']);

        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => 'Error updating project path.', 'error' => $e->getMessage()], 500);
        }
    }


    public function destroy(Request $request)
    {

        $id = $request->id;
        $project = Project::findOrFail($id);

        $oldCover = public_path('backend/assets/images/project/' . $project->cover);
        if ($project->cover && file_exists($oldCover)) {
            unlink($oldCover);
        }

        $allProjects = ProjectPath::where('project_id', $id)->get();

        foreach ($allProjects as $relatedProject) {
            if ($relatedProject->cover && file_exists(public_path('backend/assets/images/project/' . $relatedProject->cover))) {
                unlink(public_path('backend/assets/images/project/' . $relatedProject->cover));
            }
            $relatedProject->delete();
        }

        if ($project->delete()) {
            session()->flash('success', 'Deleted successfully!');
            return response()->json(['success' => true]);
        }
    }


    public function destroyProjectPath(Request $request)
    {
        $id = $request->id;
        $project = ProjectPath::findOrFail($id);
        $oldCover = public_path('backend/assets/images/project/' . $project->cover);
        if ($project->cover && file_exists($oldCover)) {
            unlink($oldCover);
        }

        if ($project->delete()) {
            session()->flash('success', 'Deleted successfully!');
            return response()->json(['success' => true]);
        }
    }
}
