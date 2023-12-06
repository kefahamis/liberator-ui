<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function profile()
    {
        $user = Auth::user()->name;
        return view('profile',compact('user'));
    }
    public function learn(){
        return view('backend.learn');
    }

    public function download(){
        return view('download');
    }
    public function settings(){
        return view('backend.settings');
    }
    public function program(){
        return view('backend.program');
    }
    public function book(){
        return view('book');
    }
    public function explore(){
        return view('explore');
    }
    public function auth(){
        return view('signin');
    }


}
