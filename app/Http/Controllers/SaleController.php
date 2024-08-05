<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $sale=Sale::all();
        return view('dashboard.sale.index',['sale'=>$sale]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('dashboard.sale.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $sale= new Sale();
        $sale->client_id=$request->input('client_id');
        $sale->user_id=$request->input('user_id');        
        $sale->receipt_type=$request->input('receipt_type');        
        $sale->receipt_series=$request->input('receipt_series');        
        $sale->receipt_number=$request->input('receipt_number');        
        $sale->date=$request->input('date');
        $sale->tax=$request->input('tax');
        $sale->total=$request->input('total');
        $sale->status=$request->input('status');        
        $sale->save();
        return view("dashboard.sale.message",['msg'=>"Venta agregada con exito"]);       
    }

    /**
     * Display the specified resource.
     */
    public function show(Sale $sale)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $sale=sale::find($id);
        return view('dashboard.sale.edit',['sale'=>$sale]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $sale=sale::find($id);
        $sale->client_id='1';
        $sale->user_id='1';        
        $sale->receipt_type=$request->input('receipt_type');        
        $sale->receipt_series=$request->input('receipt_series');        
        $sale->receipt_number=$request->input('receipt_number');        
        $sale->date=$request->input('date');
        $sale->tax=$request->input('tax');
        $sale->total=$request->input('total');
        $sale->status=$request->input('status');        
        $sale->save();
        return view("dashboard.sale.message",['msg'=>"Venta actualizada con exito"]);       
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $sale=Sale::find($id);   
        $sale->delete();
        return redirect("dashboard/sale"); 
    }
}
