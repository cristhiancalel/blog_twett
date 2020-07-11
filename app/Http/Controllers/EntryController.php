<?php

namespace App\Http\Controllers;

use App\Entry;
use Illuminate\Http\Request;

class EntryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //
    public function create()
    {
        return view('entries.create');
    }

    public function store(Request $request)
    {
        //validate sirve para validar datos que vengan de un formulario se puede utilizar unicamente en laravel 
        // dd($request->all()); sirve para desplegar en pantalla lo que traiga el request
        $validateData = $request->validate([
            'title' => 'required|min:7|max:255|unique:entries',
            'content' => 'required|min:25|max:3000'
        ]);

        $entry=new Entry();
        $entry->title=$validateData['title'];
        $entry->content=$validateData['content'];
        $entry->user_id=auth()->id();
        $entry->save();
        $status='tu entrada ha sido creado correctamente';
        return back()->with(compact('status'));
    }
    public function edit(Entry $entry)
    {
        return view('entries.edit',compact('entry'));

    }
    public function update(Request $request ,Entry $entry)
    {
        //validate sirve para validar datos que vengan de un formulario se puede utilizar unicamente en laravel 
        // dd($request->all()); sirve para desplegar en pantalla lo que traiga el request
        $validateData = $request->validate([
            'title' => 'required|min:7|max:255|unique:entries,id,'.$entry->id,
            'content' => 'required|min:25|max:3000'
        ]);

        $entry->title=$validateData['title'];
        $entry->content=$validateData['content'];
        $entry->save();
        $status='tu entrada ha sido Actualizado correctamente';
        return back()->with(compact('status'));
    }
}
