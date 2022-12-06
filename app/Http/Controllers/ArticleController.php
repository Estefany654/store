<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::orderBy('id', 'DESC')->paginate(10);
        return view('articles.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:articles|max:100',
            'presentation'=> 'max:200',
            'puu' ,
            'puc' ,
            'number' ,
        ]);
        
        $article = Article::create([
            'name' => $request->name,
            'presentation' => $request->presentation,
            'puu' => $request->puu,
            'puc' => $request->puc,
            'number' => $request->number,
        ]);
       
        $article->save();

        return redirect()->route('articles.index')->with('success', 'Item added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        return view('articles.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        $request->validate([
            'name' => 'required|unique:articles|max:100',
            'presentation'=> 'max:200',
            'puu' ,
            'puc' ,
            'number' ,
        ]);
        $article->fill([
            'name' => $request->name,
            'presentation' => $request->presentation,
            'puu' => $request->puu,
            'puc' => $request->puc,
            'number' => $request->number,

        ]);
        $article->save();
        return redirect()->route('articles.index')->with('success', 'Item updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        $article->delete();
        return redirect()->route('articles.index')->with('success', 'Item deleted');
    }
}
