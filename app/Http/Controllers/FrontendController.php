<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\ProjectPath;
use Illuminate\Http\Request;

class FrontendController extends Controller
{

    public function index(){
        return view('frontend.index');
    }

    public function services(){
        return view('frontend.services');
    }

    public function about(){
        return view('frontend.about');
    }

    public function contact(){
        return view('frontend.contact');
    }

    public function project(){
        return view('frontend.projects');
    }

    public function project_details($slug) {
        $project = Project::whereRaw("LOWER(REPLACE(title, ' ', '-')) = ?", [strtolower($slug)])->firstOrFail();
        $projectPath = ProjectPath::where('project_id', $project->id)->orderBy('id', 'asc')->get();
        return view('frontend.project_details', compact('project', 'projectPath'));
    }



}
