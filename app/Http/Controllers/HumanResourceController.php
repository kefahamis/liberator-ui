<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HumanResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('backend.hr.training-programs');

    }
    public function profile(){
        return view('backend.hr.hr-profile');
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
    public function enroll(){
        return view('backend.hr.enroll');
    }
    public function enrolment_option(){
        return view('backend.hr.enrollment-options');
    }
    public function download(){
        return view('backend.hr.download');
    }
    public function team(){
        return view('backend.hr.onboard');
    }
    public function list(){
        return view('backend.hr.team');
    }
    public function program(){
        return view('backend.hr.single-program');
    }
    public function employee_selection(){
        return view('backend.hr.employee-selection');
    }
    public function employee_profile(){
        return view('backend.hr.employee-profile');
    }
    public function confirmation(){
        return view('backend.hr.confirmation');
    }
    public function payment(){
        return view('backend.hr.payment');
    }
    public function license(){
        return view('backend.hr.license');
    }
    public function license_details(){
        return view('backend.hr.single-license');
    }
    public function reminders(){
        return view('backend.hr.notification');
    }
    public function catalog(){
        return view('backend.hr.instructor-catalog');
    }
    public function instructor(){
        return view('backend.hr.single-instructor');
    }
}
