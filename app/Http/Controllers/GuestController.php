<?php

namespace App\Http\Controllers;

use App\Entry;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index()
    {
        $entries = Entry::with('user')->orderBy('created_at','ASC')->orderBy('id','ASC')->paginate(10);
         return view('welcome',compact('entries'));
    }
    public function show(Entry $entry){
        return view('entries.show',compact('entry'));
    }
}
