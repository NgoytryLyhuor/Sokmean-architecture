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

    public function service_details($slug){

        if($slug === 'interior-design'){
            return view('frontend.service_details_1');
        }
        if($slug === 'landscape-design'){
            return view('frontend.service_details_2');
        }
        if($slug === 'architecture-design'){
            return view('frontend.service_details_3');
        }
        if($slug === 'floor-plan'){
            return view('frontend.service_details_4');
        }

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
