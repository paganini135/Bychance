<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function Contacts(){
        $Contacts = \App\Models\contacts::all();
        return view('admin/contact',compact('Contacts'));
    }

    public function index(){
        
        return view('contacts.index');
        
    }

    public function create(){

        return view('contacts.create');

    }

    
}
