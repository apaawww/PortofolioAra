<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portofolio;

class PortofolioController extends Controller
{
    function add(){
        $data = [
            'action'=> url('portofolio/create'),
            'tombol'=> 'SIMPAN',
            'portofolio'=>(object)[
                'namaporto' => '',
                'kategori' => '',
                'deskripsi' =>'',
            ]
            ];
        return view('form_portofolio',$data);
    }

    function create(Request $request){
        $validate = $this->validate($request, [
            'namaporto' => 'required|string|max:35',
            'kategori' => 'required|string|max:30',
            'deskripsi' => 'required|string',
            'foto' => 'required|mimes:jpg,png',
            ]);
            $namaFile = $request->namaporto.".".$request->file('foto')->getClientOriginalExtension();
            $validate['foto'] =  $request->file('foto')->storeAs('foto',$namaFile);
            Portofolio::create($validate);
        return redirect ('portofolio');
    }
    function show(){
        $data['portofolio'] = Portofolio::all();
        return view('portofolio',$data);
    }

    function edit($id){
        $data['portofolio'] = Portofolio::find($id);
        $data['action'] = url('portofolio/update').'/'.$data['portofolio']->id;
        $data['tombol'] = "update";
        return view('form_portofolio',$data);
    }
    function update(Request $request){
        Portofolio::where('id',$request->id)->update([
            'namaporto' => $request->namaporto,
            'kategori' => $request->kategori,
            'deskripsi' => $request->deskripsi,
            'foto' => $request->file('foto')->store('foto')
        ]);
        return redirect ('portofolio');
    }

    function hapus($id){
        Portofolio::where('id',$id)->delete();
        return redirect('portofolio');
    }
}
