<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Contact;
use App\Http\Requests\SaveContactRequest;
use App\Models\Team;
use Illuminate\Support\Facades\DB;



class AdminController extends Controller
{
    
    public function index()
    {
        $team_members = Team::all();
        return view('admin', compact('team_members'));
        $contact_data = Contact::all();
        return view('admin_save', compact('contact_data'));
    }

    public function admin()
    {
        $team_members = Team::all();
        return view('admin', compact('team_members'));
        //return view('/admin');
    }
    public function admin_save()
    {
        $contact_data = Contact::all();
        return view('admin_save', compact('contact_data'));
        //return view('/admin');
    }

    public function save(AdminController $request)
    {
       
    $request->validate(
        [
            //"home_description"=>"required",
            //"about_description"=>"required",
            //"service_description"=>"required",
            "address"=>"required",
            "email"=>"required",
            "telephone"=>"required"
        ]
    );


    $contact = new Contact();
    //$contact->home_description = $request->home_description;
    //$contact->about_description = $request->about_description;
    //$contact->service_description = $request->service_description;
    $contact->address = $request->address;
    $contact->email = $request->email;
    $contact->telephone = $request->telephone;
    $contact->save();

    return redirect()->route('admin_save')->with('success');

}

}
