<?php

namespace App\Http\Controllers;

use App\Models\Income_Detail;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IncomeDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $income_detail=Income_Detail::all();
        return view('dashboard.income_detail.index',['income_detail'=>$income_detail]);
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
    public function show(Income_Detail $income_Detail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Income_Detail $income_Detail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Income_Detail $income_Detail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Income_Detail $income_Detail)
    {
        //
    }
}
