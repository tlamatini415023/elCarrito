<?php

namespace App\Http\Controllers\Api;

use App\Models\Person;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PersonApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $people=Person::all();
        return ($people);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $person= new Person();
        $person->type=$request->input('type');
        $person->first_name=$request->input('first_name');
        $person->last_name=$request->input('last_name');
        $person->document_type=$request->input('document_type');
        $person->document_number=$request->input('document_number');
        $person->email=$request->input('email');
        $person->phone=$request->input('phone');
        $person->address=$request->input('address');        
        $person->save();
        return $person;
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $person=Person::find($id);
        return $person;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $person=Person::find($id);
        $person->type=$request->input('type');
        $person->first_name=$request->input('first_name');
        $person->last_name=$request->input('last_name');
        $person->document_type=$request->input('document_type');
        $person->document_number=$request->input('document_number');
        $person->email=$request->input('email');
        $person->phone=$request->input('phone');
        $person->address=$request->input('address');        
        $person->save();
        return $person;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $person=Person::find($id);
        $person->delete();
        return ('Persona eliminada');
    }
}
