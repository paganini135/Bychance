<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contacts;

class ContactController extends Controller
{

    public function Contacts(){
        $Contacts = \App\Models\Contacts::all();
        return view('admin/contact',compact('Contacts'));
    }

    public function store(Request $Request){
        $Contacts = \App\Models\contacts::all();
        Contacts::create([
            'type'=>$Request->input('type'),
            'pro_start'=>$Request->input('pro_start'),
            'pro_end'=>$Request->input('pro_end'),
            'project'=>$Request->input('project'),
            'cname'=>$Request->input('cname'),
            'name'=>$Request->input('name'),
            'phone'=>$Request->input('phone'),
            'email'=>$Request->input('email'),
            'contents'=>$Request->input('contents'),
            'file'=>$Request->file('file')
        ]);
        return redirect()->back();
    }

    public function detail__contact($id){
        $data = Contacts::where('id',$id)->get();
        
        
        return view('admin/detail__contact',compact('data'));
    }

    public function delete(Request $request){
        foreach ($request->check_id as $id){
            Contacts::where('id',$id)->delete();
        }

        return 200;
    }

    // public function index(){
        
    //     return view('contacts.index');
        
    // }

    // public function create(){

    //     return view('contacts.create');

    // }

    
}
