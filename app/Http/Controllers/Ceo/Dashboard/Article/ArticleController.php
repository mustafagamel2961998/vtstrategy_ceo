<?php

namespace App\Http\Controllers\Ceo\Dashboard\Article;

use App\Http\Controllers\Controller;
use App\Http\Requests\Ceo\Web\Dashboard\Articale\ArticleRequest;
use App\Models\Ceo\Article;
use App\Models\Ceo\Service;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::with('service','media')->latest()->paginate(10);
        return view('Dashboard.Article.index',compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $article = new Article();
        $services = Service::latest()->get();
        return view('Dashboard.Article.create',compact('article','services'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ArticleRequest $request)
    {
        $store = Article::create($request->all());
        if($request->hasFile('article')){

            $store->addMedia($request->file('article'))
                    ->usingName($request->title)
                    ->toMediaCollection('article');
        }

        return redirect()->route('articles.index')->with('success','تم إضافة المقالة بنجاح');
    }
 
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // $article = Article::with('media')->find($id);
        // return $article;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $article = Article::with('media')->find($id);
        $services = Service::latest()->get();
        return view('Dashboard.Article.edit',compact('article','services'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ArticleRequest $request, string $id)
    {
        $update = Article::find($id);

        $update->update($request->all());

        if($request->hasFile('article')){

            $update->clearMediaCollection('article');
            $update->addMedia($request->file('article'))
                    ->usingName($request->title)
                    ->toMediaCollection('article');
        }

        return redirect()->route('articles.index')->with('success','تم تعديل المقالة بنجاح');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $delete = Article::find($id);
            $delete->clearMediaCollection('article');
        $delete->delete();
       return redirect()->route('articles.store')->with('success','تم حذف المقالة بنجاح');

    }
}
