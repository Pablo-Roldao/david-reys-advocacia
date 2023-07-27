<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticlesFormRequest;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index()
    {
        $articles = Article::query()->orderBy('title', 'asc')->get();

        $messageSuccess = session('message.success');

        return view("articles.index")->with("articles", $articles)
            ->with('messageSuccess', $messageSuccess);
    }

    public function indexPublic()
    {
        $articles = Article::query()->orderBy('title', 'asc')->get();

        return view("articlesPublic.index")->with("articles", $articles);
    }

    public function create()
    {
        return view("articles.create");
    }

    public function store(ArticlesFormRequest $request)
    {
        $article = Article::create($request->all());

        return to_route("articles.index")
            ->with('message.success', "Artigo '{$article->title}' adicionado com sucesso!");
    }

    public function destroy(int $id)
    {

        $article = Article::find($id);

        $article->delete();

        return to_route("articles.index")
            ->with('message.success', "Artigo '{$article->title}' removido com sucesso!");
    }

    public function edit(int $id)
    {
        $article = Article::find($id);

        return view('articles.edit')->with('article', $article);
    }

    public function update(int $id, ArticlesFormRequest $request)
    {
        $article = Article::find($id);
        $article->fill($request->all());
        $article->save();

        return to_route('articles.index')
        ->with('message.success', "Artigo '{$article->title}' atualizado com sucesso!");
    }
}
