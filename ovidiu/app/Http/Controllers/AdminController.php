<?php

namespace App\Http\Controllers;

use App\Models\Description;

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
        //dump($_REQUEST); // displays all data as an array: key => value; here you can use print_r($_REQUEST), var_dump($_REQUEST)
        //die; // to halt the code execution: stopping here

        // or in laravel:
        //dd(request()->all()); // dd is the acronym from dump and die

        // after commenting dump and die, and dd, then the code below will be executed

        // get description from database through model
        $description = Description::firstOrNew(); // we should have one record in the database because there is only one site,
        // so apply first() instead of get() to get all

        // initialize string variables
        $success = $error = "";

        $services = request('services_description');
        if(!empty($services)) {
//             dd($services);
            $description->service_description = json_encode($services);
            $success = "The infos have been successfully saved";
        }

        $description->home_description = " ";
        $description->about_description = " ";
        $description->save();

//        if (!empty(request('about_description'))) {
//            $success = "The infos have been successfully saved";
//            return redirect()->route('admin')->with('message', $success);
//        } else {
//            $error = "The description for the about section is mandatory";
//            return redirect()->route('admin')->with('error', $error)->withInput(); // ->withInput() ensures the old input values are flashed to the session:
//            // meaning filled with the values the input already introduced before save, if the fields have old_value added
//        }

        return redirect()->route('admin')
            ->with('message', $success)
            ->with('error', $error)->withInput();
    }
}
