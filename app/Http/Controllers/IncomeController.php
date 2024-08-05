<?php

namespace App\Http\Controllers;

use App\Models\Income;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class IncomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $income=Income::all();
        return view('dashboard.income.index',['income'=>$income]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('dashboard.income.create'); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $income= new Income();
        $income->provider_id='1';
        $income->user_id='1';
        $income->receipt_type=$request->input('receipt_type');
        $income->receipt_series=$request->input('receipt_series');
        $income->receipt_number=$request->input('receipt_number');
        $income->date=$request->input('date');
        $income->tax=$request->input('tax');
        $income->total=$request->input('total');
        $income->status=$request->input('status');
        $income->save();
        return view("dashboard.income.message",['msg'=>"Ingreso agregado con exito"]);      
    }

    /**
     * Display the specified resource.
     */
    public function show(Income $income)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $income=Income::find($id);
        return view('dashboard.income.edit',['income'=>$income]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $income=Income::find($id);
        $income->provider_id='1';
        $income->user_id='1';
        $income->receipt_type=$request->input('receipt_type');
        $income->receipt_series=$request->input('receipt_series');
        $income->receipt_number=$request->input('receipt_number');
        $income->date=$request->input('date');
        $income->tax=$request->input('tax');
        $income->total=$request->input('total');
        $income->status=$request->input('status');
        $income->save();
        return view("dashboard.income.message",['msg'=>"Ingreso actualizado con exito"]); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $income=Income::find($id);
        $income->delete();
        return redirect("dashboard/income");
    }
}
