<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\ServiceDetail;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $service_data = Service::orderBy('id','desc')->get();
        return view('admin.service.index',compact('service_data'));
    }
    public function insert()
    {
        return view('admin.service.insert');
    }

    public function insertCover(Request $request)
    {
        $request->validate([
            'main_title' => 'required|string|max:255',
            'banner_description' => 'required|string',
            'banner' => 'nullable|image|mimes:jpeg,png,jpg|max:50000',
        ]);

        $serviceData = new Service;
        $serviceData->main_title = $request->main_title;
        $serviceData->banner_description = $request->banner_description;

        if ($request->hasFile('banner')) {
            $banner = time() . '_' . $request->file('banner')->getClientOriginalName();
            $request->file('banner')->move(public_path('backend/assets/images/service/'), $banner);
            $serviceData->banner = $banner;
        }

        $serviceData->save();
        $serviceId = $serviceData->id;

        return redirect()->route('service-pages.edit', ['id' => $serviceId]);
    }

    public function edit($id)
    {
        $service = Service::findOrFail($id);
        $serviceInclude = ServiceDetail::where('service_id',$id)->where('type','service_include')->orderBy('id','asc')->get();
        $process = ServiceDetail::where('service_id',$id)->where('type','process')->orderBy('number','asc')->get();
        $sampleProject = ServiceDetail::where('service_id',$id)->where('type','sample_project')->orderBy('id','asc')->get();
        return view('admin.service.edit', compact('service','serviceInclude','process','sampleProject'));
    }

    public function delete(Request $request){
        $id = $request->id;
        $service = Service::findOrFail($id);
        if ($service->banner && file_exists(public_path('backend/assets/images/service/' . $service->banner))) {
            unlink(public_path('backend/assets/images/service/' . $service->banner));
        }

        // sample_project
        $serviceSampleProject = ServiceDetail::where('service_id',$id)->where('type','sample_project')->get();
        foreach ($serviceSampleProject as $data) {
            if ($data->image && file_exists(public_path('backend/assets/images/service/' . $data->image))) {
                unlink(public_path('backend/assets/images/service/' . $data->image));
            }
            $data->delete();
        }

        // process
        $serviceProcess = ServiceDetail::where('service_id',$id)->where('type','process')->get();
        foreach ($serviceProcess as $data) {
            $data->delete();
        }

        // service_include
        $serviceInclude = ServiceDetail::where('service_id',$id)->where('type','service_include')->get();
        foreach ($serviceInclude as $data) {
            $data->delete();
        }

        if ($service->delete()) {
            session()->flash('success', 'Deleted successfully!');
            return response()->json(['success' => true]);
        }
    }

    public function updateCover(Request $request, $id)
    {
        $service = Service::find($id);

        $request->validate([
            'main_title' => 'nullable|string',
            'banner_description' => 'nullable|string',
            'banner' => 'nullable|image|mimes:jpeg,png,jpg|max:50000',
            'title' => 'nullable|string',
            'description' => 'nullable|string',
        ]);

        if ($request->hasFile('banner')) {
            $oldBanner = public_path('backend/assets/images/service/' . $service->banner);
            if ($service->banner && file_exists($oldBanner)) {
                unlink($oldBanner);
            }
            $banner = time() . '_' . $request->file('banner')->getClientOriginalName();
            $request->file('banner')->move(public_path('backend/assets/images/service/'), $banner);
            $service->banner = $banner;
        }

        // Only update the fields that are present in the request
        if ($request->filled('main_title')) {
            $service->main_title = $request->main_title;
        }
        if ($request->filled('banner_description')) {
            $service->banner_description = $request->banner_description;
        }
        if ($request->filled('title')) {
            $service->title = $request->title;
        }
        if ($request->filled('description')) {
            $service->description = $request->description;
        }

        $service->save();

        session()->flash('success', 'Updated successfully!');
        return redirect()->back();
    }

    // -- Service Details --
    public function insertServiceDetails(Request $request)
    {

        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $data = new ServiceDetail();
        $data->service_id = $request->service_id;
        $data->title = $request->title;
        $data->description = $request->description;
        $data->type = $request->type;

        $data->save();
        session()->flash('success', 'Insert Service Details successfully!');
        return redirect()->back();
    }

    public function editServiceDetails(Request $request)
    {
        $data = ServiceDetail::findOrFail($request->id);
        return response()->json($data);
    }

    public function updateServiceDetails(Request $request)
    {
        $data = ServiceDetail::findOrFail($request->id);
        $data->title = $request->title;
        $data->save();
        session()->flash('success', 'Update Service Details successfully!');
        return response()->json(['success' => true, 'message' => 'Updated successfully!']);
    }

    public function deleteServiceDetails(Request $request)
    {
        $id = $request->id;
        $data = ServiceDetail::findOrFail($id);

        if ($data->delete()) {
            session()->flash('success', 'Service Details Deleted successfully!');
            return response()->json(['success' => true]);
        }
    }
    // -- Service Details --


    // -- Process --
    public function insertProcess(Request $request)
    {

        $request->validate([
            'number' => 'required|string',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $data = new ServiceDetail();
        $data->service_id = $request->service_id;
        $data->title = $request->title;
        $data->number = $request->number;
        $data->description = $request->description;
        $data->type = $request->type;

        $data->save();
        session()->flash('success', 'Insert Design Process successfully!');
        return redirect()->back();
    }

    public function editProcess(Request $request)
    {
        $data = ServiceDetail::findOrFail($request->id);
        return response()->json($data);
    }

    public function updateProcess(Request $request)
    {
        $data = ServiceDetail::findOrFail($request->id);
        $data->number = $request->number;
        $data->title = $request->title;
        $data->description = $request->description;
        $data->save();
        session()->flash('success', 'Update Design Process successfully!');
        return response()->json(['success' => true, 'message' => 'Updated successfully!']);
    }

    public function deleteProcess(Request $request)
    {
        $id = $request->id;
        $data = ServiceDetail::findOrFail($id);

        if ($data->delete()) {
            session()->flash('success', 'Design Process Deleted successfully!');
            return response()->json(['success' => true]);
        }
    }
    // -- Process --


    // -- SampleProject --
    public function insertSampleProject(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:50000',
        ]);

        $data = new ServiceDetail();
        $data->service_id = $request->service_id;
        $data->title = $request->title;
        $data->description = $request->description;
        $data->type = $request->type;

        if ($request->hasFile('image')) {
            $image = time() . '_' . $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('backend/assets/images/service/'), $image);
            $data->image = $image;
        }

        $data->save();
        session()->flash('success', 'Insert Sample Project successfully!');
        return redirect()->back();
    }

    public function editSampleProject(Request $request)
    {
        $data = ServiceDetail::findOrFail($request->id);
        return response()->json($data);
    }

    public function updateSampleProject(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:50000',
        ]);

        $data = ServiceDetail::findOrFail($request->id);
        $data->title = $request->title;
        $data->description = $request->description;
        $data->type = $request->type;

        if ($request->hasFile('image')) {
            $oldImage = public_path('backend/assets/images/service/' . $data->image);
            if ($data->image && file_exists($oldImage)) {
                unlink($oldImage);
            }

            $image = time() . '_' . $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('backend/assets/images/service/'), $image);
            $data->image = $image;
        }

        $data->save();
        session()->flash('success', 'Update Sample Project successfully!');
        return response()->json(['success' => true, 'message' => 'Updated successfully!']);
    }

    public function deleteSampleProject(Request $request)
    {
        $id = $request->id;
        $data = ServiceDetail::findOrFail($id);

        if ($data->delete()) {
            session()->flash('success', 'Sample Project Deleted successfully!');
            return response()->json(['success' => true]);
        }
    }
    // -- SampleProject --



}
