<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profil;


class ProfilController extends Controller
{
    function show(){
        $data['profil'] = Profil::all();
        return view('profil',$data);
    }

    function profil(){
        $profil = Profil::first();
        if ($profil){
            $data = [
                'nisn' => $profil->nisn,
                'namalengkap' => $profil->namalengkap,
                'status' => $profil->status,
                'ttl' => $profil->ttl,
                'alamat' => $profil->alamat,
                'sekolah' => $profil->sekolah,
                'nohp' => $profil->nohp,
                'email' => $profil->email,
                'about' => $profil->about,
                'foto' => $profil->foto,
                'action' => 'setprofil/update/'.$profil->nisn
            ];
            return view ('settingprofil',$data);
        }else{
            $data = [
                'nisn' => '',
                'namalengkap' => '',
                'status' => '',
                'ttl' => '',
                'alamat' => '',
                'sekolah' => '',
                'nohp' => '',
                'email' => '',
                'about' => '',
                'foto' => '',
                'action' => 'setprofil/create',
                // 'tombol' => 'simpan'

            ];
            return view ('settingprofil',$data);
        }
    }

    function create(Request $request){
        Profil::create([
            'nisn' => $request->nisn,
            'namalengkap' => $request->namalengkap,
            'status' => $request->status,
            'ttl' => $request->ttl,
            'alamat' => $request->alamat,
            'sekolah' => $request->sekolah,
            'nohp' => $request->nohp,
            'email' => $request->email,
            'about' => $request->about,
            'foto' => $request->file('foto')->store('foto')
        ]);
        return redirect('setprofil');
    }

    function edit($id){
        $data['profil'] = Profil::find($id);
        $data['action'] = url('setprofil/update').'/'.$data['profil']->nisn;
        $data['tombol'] = "Update";
        return view ('profil',$data);
    }
    
    function update(Request $request){
        $data = Profil::where('nisn',$request->nisn)->first();
        if($request->foto==''){
            $foto = $data->foto;

        }else{
            $foto = $request->file('foto')->store('foto');
        }
        
        Profil:: where('nisn',$request->id)->update([
            'nisn' => $request->nisn,
            'namalengkap' => $request->namalengkap,
            'status' => $request->status,
            'ttl' => $request->ttl,
            'alamat' => $request->alamat,
            'sekolah' => $request->sekolah,
            'nohp' => $request->nohp,
            'email' => $request->email,
            'about' => $request->about,
            'foto' => $foto,
        ]);
        return redirect('setprofil');
    }



}
