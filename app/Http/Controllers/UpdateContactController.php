<?php

namespace App\Http\Controllers;

use App\Contact;
use App\StudentInfo;
use Illuminate\Http\Request;
use App\Http\Controllers\StudentInfoController;
use Illuminate\Support\Facades\Auth;

class UpdateContactController extends Controller
{
    /**
     * StudentContactUpdateController constructor.
     */
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
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contact = Contact::findOrFail($id);
        return view('pages/contact/edit', [
            'contact' => $contact
        ]);
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
//        dd($request->get('relationship'));
        $contact = Contact::findOrFail($id)->update([
            'phone' => $request->get('phone'),
            'alt_phone' => $request->get('alt_phone'),
            'emergency_contact' => $request->get('emergency_contact'),
            'emergency_phone' => $request->get('emergency_phone'),
            'emergency_alt_phone' => $request->get('emergency_alt_phone'),
            'relationship' => $request->post('relationship'),
        ]);
        dd($contact);
        return redirect()->action(
            'UpdateContactController@edit', ['id' => $id]
        )->with('message', 'Contact Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
