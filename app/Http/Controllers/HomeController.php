<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Serie;

class HomeController extends Controller
{
    public function home(){

        $series = Serie::all();

        return view('pages.home', compact('series'));
    }

    public function show($id){

        $serie = Serie::findOrFail($id);

        return view('pages.show', compact('serie'));
    }
//create
    public function create(){
        return view('pages.create');
    }
    public function store(Request $request){
        $data = $request->validate([
            'title' => 'required|string|max:60',
            'author' => 'required|string|max:70',
            'release_date' => 'required|date'
        ]);
        $newserie = Serie::create($data);
        return redirect() -> route('show', $newserie -> id);
        
    }
//edit

    public function edit($id){
        $serie = Serie::findOrFail($id);

        return view('pages.edit', compact('serie'));
    }

    public function update(Request $request, $id){
        $data = $request->validate([
            'title' => 'required|string|max:60',
            'author' => 'required|string|max:70',
            'release_date' => 'required|date'
        ]);
        $serie = Serie::findOrFail($id);
        $serie -> update($data);
        return redirect() -> route('show', $serie -> id);
    }
//delete

    public function delete($id){
        $serie = Serie::findOrFail($id);
        $serie -> delete();
        return redirect() -> route('home');
    }
}
