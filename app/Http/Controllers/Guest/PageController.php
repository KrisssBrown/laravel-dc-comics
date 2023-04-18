<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $comics = Comic::all();

        $data = [
            'comic' => $comics
        ];

        return view('comicsCrud.index', $data);
    }


    public function show(Comic $comic){
        $data = [
            'comic' => $comic
        ];

        return view('comicsCrud.show', $data);
    }


    public function create(){
        return view('comicsCrud.create');
    }

    public function store(Request $request){
        $data = $request->all();

        $newComic = new Comic();

        $newComic ->title = $data['title'];
        $newComic ->description = $data['description'];
        $newComic ->thumb = $data['thumb'];
        $newComic ->price = $data['price'];
        $newComic ->series = $data['series'];
        $newComic ->sale_date = $data['sale_date'];
        $newComic->type = $data['type'];
        
        $newComic->save();
        
        return to_route('comics.show', $newComic -> id);
    }


    public function edit($comic){
        
    }
}
