<?php

namespace App\Http\Controllers;
use App\Models\ForFom;
use App\Models\Contact;


use Illuminate\Http\Request;

class ContactController extends Controller
{
    // Show the contact form
    public function showForm()
    {
        return view('form.contact');
    }
    public function create(Request $request)
    {
       //
       $contacts = Contact::all();
        return view("form.contactinfo", compact("contacts"));
    }

    // Handle form submission (if you want to process data)
    public function submitForm(Request $request)
    {
        // You can validate the form data here
        $validated= $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:1000',
            'image' => 'nullable|image',
        ]);
       $contact = new Contact();
       $contact->name = $request->name;
       $contact->email = $request->email;
       $contact->message = $request->message;

       if ($request->hasFile('image')) {
        $picture = $request->file('image');

        // Generate a unique filename
        // $fileName = time() . '_' . $picture->getCli∑entOriginalName();

        $fileName = $picture->hashName();
        // Move the file to the public/assets folder
        $filePath = public_path('assets');
        $picture->move($filePath, $fileName);

        // Save the relative file path in the database (if required)
        $contact->image = 'assets/' . $fileName;
    }


       $contact->save();



        // Process the form data here (for now, just return success message)
        return back()->with('success', 'Your message has been sent successfully!');
    }
}


