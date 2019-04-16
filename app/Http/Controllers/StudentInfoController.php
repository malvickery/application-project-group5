<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Http\Middleware\Authenticate;
use App\StudentInfo;
use App\User;
use App\UserAddress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentInfoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

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
        return view('pages/student-info/register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'address_line_one' => 'required',
            'address_line_two' => 'required',
            'city' => 'required',
            'province' => 'required',
            'postal_code' => 'required',
            'phone' => 'required',
            'alt_phone' => 'required',
            'emergency_contact' => 'required',
            'emergency_phone' => 'required',
            'emergency_alt_phone' => 'required',
            'relationship' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'gender' => 'required',
            'weight' => 'required',
            'height_feet' => 'required',
            'height_inch' => 'required',
            'date_of_birth' => 'required',
            'years_experience' => 'required',
            'years_in_program' => 'required',
            'special_instruction' => 'required',
            'ski_type' => 'required',
            'preferred_day' => 'required',
            'alternate_day' => 'required',
            'preferred_instructor' => 'required',
        ]);

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

        /* Create the Student Info entry */
        $studentInfo = StudentInfo::create([
            'first_name' => $request->get('first_name'),
            'last_name' => $request->get('last_name'),
            'email' => $request->get('email'),
            'gender' => $request->get('gender'),
            'weight' => $request->get('weight'),
            'height_feet' => $request->get('height_feet'),
            'height_inch' => $request->get('height_inch'),
            'date_of_birth' => $request->get('date_of_birth'),
            'years_experience' => $request->get('years_experience'),
            'years_in_program' => $request->get('years_in_program'),
            'emergency_contact' => $contact->emergency_contact,
            'relationship' => $contact->relationship,
            'photo_release' => $request->get('photo_release'),
            'special_instruction' => $request->get('special_instruction'),
            'preferred_day' => $request->get('preferred_day'),
            'alternate_day' => $request->get('alternate_day'),
            'ski_type' => $request->get('ski_type'),
            'preferred_instructor' => $request->get('preferred_instructor'),
            'address_ID' => $userAddress->id,
            'contact_ID' => $contact->id,
            'user_ID' => Auth::user()->id
        ]);

        return back()->with('message', 'Thank you for registering');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }
}
