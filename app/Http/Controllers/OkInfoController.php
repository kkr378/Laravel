<?php

namespace App\Http\Controllers;

use App\Models\OkInfo;
use Illuminate\Http\Request;

class OkInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $okInfos = OkInfo::all();
        return view("form.input", compact("okInfos"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $okInfos = OkInfo::all();
        return view("form.inputinfo", compact("okInfos"));

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
    $okInfos = new OkInfo();
    $okInfos->full_name = $request->name;
    $okInfos->email_address = $request->email;
    $okInfos->password = $request->password;
    $okInfos->phone_number = $request->phone;
    $okInfos->save();

    return redirect()->back();
    }


    /**
     * Display the specified resource.
     */
    public function show(OkInfo $okInfo)
    {
        //
        return view('form.input');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(OkInfo $okInfo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, OkInfo $okInfo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(OkInfo $okInfo)
    {
        //
    }
}
