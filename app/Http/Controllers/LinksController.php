<?php

namespace App\Http\Controllers;

use App\Http\Requests\LinksFormRequest;
use App\Models\Link;
use Illuminate\Http\Request;

class LinksController extends Controller
{
    public function index()
    {
        $links = Link::query()->orderBy('title', 'asc')->get();

        $messageSuccess = session('message.success');

        return view("links.index")->with("links", $links)
            ->with('messageSuccess', $messageSuccess);
    }

    public function indexPublic()
    {
        $links = Link::query()->orderBy('title', 'asc')->get();

        return view("linksPublic.index")->with("links", $links);
    }


    public function create()
    {
        return view("links.create");
    }

    public function store(LinksFormRequest $request)
    {
        $link = Link::create($request->all());

        return to_route("links.index")
            ->with('message.success', "Link '{$link->title}' adicionado com sucesso!");
    }

    public function destroy(int $id)
    {

        $link = Link::find($id);

        $link->delete();

        return to_route("links.index")
            ->with('message.success', "Link '{$link->title}' removido com sucesso!");
    }

    public function edit(int $id)
    {
        $link = Link::find($id);

        return view('links.edit')->with('link', $link);
    }

    public function update(int $id, LinksFormRequest $request)
    {
        $link = Link::find($id);
        $link->fill($request->all());
        $link->save();

        return to_route('links.index')
        ->with('message.success', "Link '{$link->title}' atualizado com sucesso!");
    }
}
