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
        $Contacts = \App\Models\Contacts::all();

        if ($Request->hasFile('file')) {
            $file = $Request->file('file');
            $fileName = time().'.'.$file->getClientOriginalExtension();
            $file->storeAs('public/contacts', $fileName);
        } else {
            $fileName = null;
        }
        
        Contacts::create([
            'type'=>$Request->input('type'),
            'pro_start'=>$Request->input('pro_start',null),
            'pro_end'=>$Request->input('pro_end',null),
            'project'=>$Request->input('project'),
            'cname'=>$Request->input('cname'),
            'name'=>$Request->input('name'),
            'phone'=>$Request->input('phone'),
            'email'=>$Request->input('email'),
            'contents'=>$Request->input('contents'),
            'file' => $fileName
        ]);
        return redirect()->back();
    }

    public function download($id) {
        $contact = Contacts::find($id);
        if (!$contact) {
            abort(404);
        }
        $filePath = storage_path('app/public/contacts/'.$contact->file);
        return response()->download($filePath);
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
