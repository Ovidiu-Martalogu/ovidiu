<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreteamRequest;
use App\Http\Requests\UpdateteamRequest;
use App\Models\Team;
use Illuminate\Support\Facades\DB;

class HomepageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
//        $data=DB::table('team')->orderBy('id')->get();
//        return view('team', compact('data'))->with('i', (request()->input('page', 1) - 1 * 10));

        $team_members = Team::all();
        return view('homepage', compact('team_members'));
    }


    public function oxfordreference()
    {
        return view('/oxfordreference');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreteamRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(team $team)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateteamRequest $request, team $team)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(team $team)
    {
        //
    }
}
