<?php

namespace App\Http\Controllers\Api;

use App\Models\Sale;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SaleApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $sales=Sale::all();
        return ($sales);
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
        return $sale;
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $sale=sale::find($id);
        return $sale;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
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
        return $sale;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $sale=sale::find($id);
        $sale->delete();
        return ('Venta eliminada');
    }
}
