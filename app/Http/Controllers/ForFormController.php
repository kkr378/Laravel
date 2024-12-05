<?php

namespace App\Http\Controllers;

use App\Models\Demo;
use App\Models\ForFom;
use App\Models\ForForm;
use Illuminate\Http\Request;

class ForFormController extends Controller
{
    /**
     * Display a listing of the resource.
     */
     public function index()
    {
        //
        $form1 = ForFom::all();
        return view("form.index", compact("form1"));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
       //
       $form1 = ForFom::all();
        return view("form.registerview", compact("form1"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        // Validate the incoming data
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'password' => 'required|string|min:6',
        'phone' => 'required|numeric|max_digits:10',
    ]);

    // Create a new ForFom entry
    $forFom = new ForFom();
    $forFom->full_name = $request->name;
    $forFom->email_address = $request->email;
    $forFom->password = $request->password;
    $forFom->phone_number = $request->phone;
    $forFom->save();

    return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        //
        return view('form.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $forFom = ForFom::findOrFail($id);
        return view('form.edit', compact('forFom'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,string $id)
    {
        //
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'password' => 'required|string|min:6',
            'phone' => 'required|numeric|max_digits:10',
        ]);

        $forFom = ForFom::findOrFail($id);
        $forFom->full_name = $request->name;
        $forFom->email_address = $request->email;
        $forFom->password = $request->password;
        $forFom->phone_number = $request->phone;
        $forFom->save();

        return redirect()->route('form.create');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $forFom = ForFom::findOrFail($id);
        $forFom->delete();

        return redirect()->route('form.create');
    }



}
