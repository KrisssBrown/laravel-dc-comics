<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function list(){
        $comics = Comic::all();

        $data = [
            'comic' => $comics
        ];

        return view('welcome', $data);
    }
}
