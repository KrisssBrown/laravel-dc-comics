<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function validation(Request $request)
    {
        return $request->validate([
            'title' => 'required|max:150|min:3',
            'description' =>'nullable|max:2000|string',
            'thumb'=>'required|url|max:500',
            'price'=>'required|numeric|max:5',
            'series'=>'required|string|max:30',
            'sale_date'=>'required|string|max:20',
            'type'=>'required|string|max:25'
        ]);
    }









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
        
        return to_route('comics.show', $newComic);
    }


    public function edit(Comic $comic){
        return view('comicsCrud.edit', compact('comic'));
    }

    public function update(Request $request, Comic $comic){
        $data = $request->all();

        

        $comic->title = $data['title'];
        $comic->description = $data['description'];
        $comic->thumb = $data['thumb'];
        $comic->price = $data['price'];
        $comic->series = $data['series'];
        $comic->sale_date = $data['sale_date'];
        $comic->type = $data['type'];

        $comic->save();

        return to_route('comics.show', $comic);
    }


    public function destroy(Comic $comic)
    {

        
        $comic->delete();

        return to_route('comics.index');
    }
}
