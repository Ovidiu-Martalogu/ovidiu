<?php

namespace App\Http\Controllers;

class AdminController extends Controller
{
    public function admin()
    {
        return view('/admin');
    }

    public function adminSave()
    {
        // here we are not going to return a view, because the view is already returned from the admin function
        // so we will receive the user values from the request, a global variable from raw php ($_REQUEST)
        // that in laravel is obtained from a general helper function called request()

        // to see what's coming from the user interaction (all html form elements), we will use the following functions php functions
        dump($_REQUEST); // displays all data as an array: key => value; here you can use print_r($_REQUEST), var_dump($_REQUEST)
        die; // to halt the code execution: stopping here

        // or in laravel:
        dd(request()->all()); // dd is the acronym from dump and die

        // after commenting dump and die, and dd, then the code below will be executed

        if (!empty(request('about_description'))) {
            $success = "The infos have been successfully saved";
            return redirect()->route('admin')->with('message', $success);
        } else {
            $error = "The description for the about section is mandatory";
            return redirect()->route('admin')->with('error', $error)->withInput(); // ->withInput() ensures the old input values are flashed to the session:
            // meaning filled with the values the input already introduced before save, if the fields have old_value added
        }
    }

    /*
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
    */
}
