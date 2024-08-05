<?php

namespace App\Http\Controllers;

use App\Models\Person;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $person=Person::all();
        return view('dashboard.person.index',['person'=>$person]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $providers=Person::where('type','Proveedor');
        // $users=Auth::user();
        // return view('dashboard.person.create',['providers'=>$providers,'user'=>$users]);
        return view('dashboard.person.create',['providers'=>$providers]);
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
        return view("dashboard.person.message",['msg'=>"Persona agregada con exito"]);      
    }

    /**
     * Display the specified resource.
     */
    public function show(Person $person)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $person=Person::find($id);
        return view('dashboard.person.edit',['person'=>$person]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
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
        return view("dashboard.person.message",['msg'=>"Persona actualizada con exito"]);    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $person=Person::find($id);   
        $person->delete();
        return redirect("dashboard/person");     
    }
}
