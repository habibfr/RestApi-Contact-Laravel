<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // view all contacts
        $contacts = Contact::paginate(10);
        return response()->json([
            "message" => "success",
            "data" => $contacts
        ]);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // add new contact
        $contact = Contact::create([
            "firstName" => $request->firstName,
            "lastName" => $request->lastName,
            "numberPhone" => $request->numberPhone,
            "address" => $request->address
        ]);

        return response()->json([
            "message" => "success",
            "data" => $contact
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        // view contact
        return response()->json([
            "message" => "success",
            "data" => $contact
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact $contact)
    {
        // update contact
        // $contact->update([
        //     "firstName" => $request->firstName,
        //     "lastName" => $request->lastName,
        //     "numberPhone" => $request->numberPhone,
        //     "address" => $request->address
        // ]);
        $contact->firstName = $request->firstName;
        $contact->lastName = $request->lastName;
        $contact->numberPhone = $request->numberPhone;
        $contact->address = $request->address;
        $contact->save();

        return response()->json([
            "message" => "success",
            "data" => $contact
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        // hapus contact
        $contact->delete();

        return response()->json([
            "message" => "success",
            "data" => null
        ]);
    }
}
