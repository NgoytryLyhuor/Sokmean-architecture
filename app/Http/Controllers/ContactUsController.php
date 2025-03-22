<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\QuestionAnswer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContactUsController extends Controller
{
    /**
     * Display the contact us information.
     */
    public function index()
    {
        $contact = Contact::find(1);
        $QA = QuestionAnswer::orderBy('id','asc')->get();
        return view('admin.contact_us.index', compact('contact','QA'));
    }

    /**
     * Show the form for editing the contact us information.
     */
    public function edit()
    {
        $contact = Contact::find(1);
        return view('admin.contact_us.edit', compact('contact'));
    }

    /**
     * Update the header information
     */
    public function updateHeader(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $contact = Contact::find(1);

        $contact->title = $request->title;
        $contact->description = $request->description;

        if ($request->hasFile('image')) {
            $oldImagePath = public_path('backend/assets/images/' . $contact->image);
            if ($contact->image && file_exists($oldImagePath)) {
                unlink($oldImagePath);
            }

            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('backend/assets/images'), $imageName);
            $contact->image = $imageName;
        }

        $contact->save();

        return redirect()->back()->with('success', 'Header information updated successfully!');
    }

    /**
     * Update the social media information
     */
    public function updateSocial(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'nullable|email',
            'phone' => 'nullable|string|max:20',
            'social' => 'nullable|array',
            'social.*.name' => 'nullable|string|max:255',
            'social.*.url' => 'nullable|url|max:255',
        ]);

        $contact = Contact::find(1);

        $contact->email = $request->email;
        $contact->phone = $request->phone;

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

        $contact->social = !empty($socialLinks) ? $socialLinks : null;
        $contact->save();
        return redirect()->back()->with('success', 'Contact information updated successfully!');
    }
}
