<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    function add(){
        $data = [
            
                'nama' => '',
                'email' => '',
                'pesan' =>'',
        ];
            
        return view('welcome',$data);
    }
    function create(Request $request){
        Contact::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'pesan' => $request->pesan

        ]);
        return redirect ('/');
    }
    function show(){
        $data['contact'] = Contact::all();
        return view('contact',$data);
    }
    
    function hapus($id){
        Contact::where('id',$id)->delete();
        return redirect('contact');
    }

}
