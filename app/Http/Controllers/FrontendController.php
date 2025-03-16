<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\ProjectPath;
use App\Models\Service;
use App\Models\ServiceDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class FrontendController extends Controller
{

    public function index(){
        return view('frontend.index');
    }

    public function return(){
        return view('auth.login');
    }

    public function services()
    {
        $services = [
            'interiorDesign' => Service::where('id', 10)->first(),
            'landscapeDesign' => Service::where('id', 11)->first(),
            'architectureDesign' => Service::where('id', 12)->first(),
            'floorPlan' => Service::where('id', 13)->first()
        ];

        return view('frontend.services', $services);
    }

    public function service_details($slug)
    {
        // Preset services for inclusion
        $services = [
            'interiorDesign' => Service::find(10),
            'landscapeDesign' => Service::find(11),
            'architectureDesign' => Service::find(12),
            'floorPlan' => Service::find(13)
        ];

        // Find the specific service based on the slug
        $service = Service::whereRaw("LOWER(REPLACE(main_title, ' ', '-')) = ?", [$slug])->first();

        if (!$service) {
            abort(404);
        }

        // Get the related service details
        $serviceServiceInclude = ServiceDetail::where('service_id', $service->id)->where('type','service_include')->get();
        $serviceProcess = ServiceDetail::where('service_id', $service->id)->where('type','process')->get();
        $serviceSampleProject = ServiceDetail::where('service_id', $service->id)->where('type','sample_project')->get();

        // Merge the new variables with the existing services array
        $data = array_merge($services, [
            'service' => $service,
            'serviceServiceInclude' => $serviceServiceInclude,
            'serviceProcess' => $serviceProcess,
            'serviceSampleProject' => $serviceSampleProject
        ]);

        return view('frontend.service_details', $data);
    }

    public function about(){

        $services = [
            'interiorDesign' => Service::where('id', 10)->first(),
            'landscapeDesign' => Service::where('id', 11)->first(),
            'architectureDesign' => Service::where('id', 12)->first(),
            'floorPlan' => Service::where('id', 13)->first()
        ];

        return view('frontend.about',$services);
    }

    public function contact(){
        return view('frontend.contact');
    }

    public function project(){

        $services = [
            'interiorDesign' => Service::where('id', 10)->first(),
            'landscapeDesign' => Service::where('id', 11)->first(),
            'architectureDesign' => Service::where('id', 12)->first(),
            'floorPlan' => Service::where('id', 13)->first()
        ];

        return view('frontend.projects',$services);
    }

    public function project_details($slug) {
        $project = Project::whereRaw("LOWER(REPLACE(title, ' ', '-')) = ?", [strtolower($slug)])->firstOrFail();
        $projectPath = ProjectPath::where('project_id', $project->id)->orderBy('id', 'asc')->get();
        return view('frontend.project_details', compact('project', 'projectPath'));
    }



}
