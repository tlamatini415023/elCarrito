<?php

namespace App\Http\Controllers\Api;

use App\Models\Article;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class ArticleApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $articles = Article::all();
        return ($articles);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $article= new Article();
        $article->category_id='1';
        $article->code=$request->input('code');
        $article->name=$request->input('name');
        $article->sale_price=$request->input('sale_price');
        $article->stock=$request->input('stock');
        $article->description=$request->input('description');
        $article->state=$request->input('state');
        $article->category_id=$request->input('category_id');
        $article->save();
        return $article;
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $article=Article::find($id);   
        return $article;     
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $article=Article::find($id);
        $article->category_id='1';
        $article->code=$request->input('code');
        $article->name=$request->input('name');
        $article->sale_price=$request->input('sale_price');
        $article->stock=$request->input('stock');
        $article->description=$request->input('description');
        $article->state=$request->input('state');
        $article->category_id=$request->input('category_id');
        $article->save();
        return $article;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $article=Article::find($id);
        $article->delete();
        return ('Articulo eliminado');
    }
}
