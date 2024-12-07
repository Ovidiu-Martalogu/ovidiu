<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Http\Requests\SaveContactRequest;
use App\Http\Requests\UpdateContactRequest;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       // return view('/admin');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function save(SaveContactRequest $request)
    {
        $request->validate(
            [
                "address" => "required",
                "email" => "required",
                "telephone" => "required"
            ]
        );
    
         
        $contact = new ContactModel();
        $contact->address = $request->address;
        $contact->email = $request->email;
        $contact->telephone = $request->telephone;
        $contact->save();
    
        return redirect()->route('admin')->with('success', 'Wellcome');
    }

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        return view('/admin');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateContactRequest $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
