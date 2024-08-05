<?php

namespace App\Http\Controllers;

use App\Models\Sale_Detail;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SaleDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $sale_detail=Sale_Detail::all();
        return view('dashboard.sale_detail.index',['sale_detail'=>$sale_detail]);
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
    public function show(Sale_Detail $sale_Detail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sale_Detail $sale_Detail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sale_Detail $sale_Detail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sale_Detail $sale_Detail)
    {
        //
    }
}
