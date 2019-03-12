<?php

namespace App\Http\Controllers;

use App\InstructorExperience;
use App\InstructorInfo;
use Illuminate\Http\Request;

class InstructorInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages/instructor-info/register');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        /* Create the user address entry */
        $userAddress = UserAddress::create([
            'address_line_one' => $request->get('address_line_one'),
            'address_line_two' => $request->get('address_line_two'),
            'city' => $request->get('city'),
            'province' => $request->get('province'),
            'postal_code' => $request->get('postal_code'),
        ]);

        /* Create Emergency Contact Entry */
        $contact = Contact::create([
            'phone' => $request->get('phone'),
            'alt_phone' => $request->get('alt_phone'),
            'emergency_contact' => $request->get('emergency_contact'),
            'emergency_phone' => $request->get('emergency_phone'),
            'emergency_alt_phone' => $request->get('emergency_alt_phone'),
            'relationship' => $request->get('relationship'),
        ]);

        /*Create instructor experience entry*/

        $instructorExperience = InstructorExperience::create([
           'is_'
        ]);
        /* Create the Student Info entry */
        $instructorInfo = InstructorInfo::create([
            'first_name' => $request->get('first_name'),
            'last_name' => $request->get('last_name'),
            'email' => $request->get('email'),
            'gender' => $request->get('gender'),
            'weight' => $request->get('weight'),
            'height_feet' => $request->get('height_feet'),
            'height_inch' => $request->get('height_inch'),
            'date_of_birth' => $request->get('date_of_birth'),
            'emergency_contact' => $contact->emergency_contact,
            'relationship' => $contact->relationship,
            'preferred_day' => $request->get('preferred_day'),
            'alternate_day' => $request->get('alternate_day'),
            'ski_type' => $request->get('ski_type'),
            'address_ID' => $userAddress->id,
            'contact_ID' => $contact->id,
            'user_ID' => Auth::user()->id
        ]);

        return back()->with('message', 'Thank you for registering');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
