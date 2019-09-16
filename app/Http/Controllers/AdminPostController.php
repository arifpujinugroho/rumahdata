<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\KK;
use App\Model\Keluarga;
use App\Model\AllFile;
use App\Model\JnsFile;
use Auth;
use redirect;
use Crypt;

class AdminPostController extends Controller
{
    //
    public function AddKK(Request $request)
    {
        $cek = (KK::whereno_kk($request->get('no_kk'))->count() == 0) ? true : false ;
        if ($cek) {
            $kk = new KK();
            $kk->no_kk       = $request->get('no_kk');
            $kk->nama_kk     = $request->get('nama_kk');
            $kk->rt          = $request->get('rt');
            $kk->rw          = $request->get('rw');
            $kk->kel         = $request->get('kel');
            $kk->kec         = $request->get('kec');
            $kk->kota        = $request->get('kota');
            $kk->provinsi    = $request->get('provinsi');
            $kk->kodepos     = $request->get('kodepos');
            $kk->save();

            return redirect('admin/kk/'.$kk->id);
        } else {
            return redirect()->back()->with('addkk','error');
        }
        
    }
    public function AddKeluarga(Request $request)
    {
        $cek = (Keluarga::wherenik_keluarga($request->get('nik'))->count() == 0) ? true : false ;
        if ($cek) {
            $id_kk = Crypt::decrypt($request->get('kode'));
            $kk = new Keluarga();
            $kk->id_kk              = $id_kk;
            $kk->nik_keluarga       = $request->get('nik_keluarga');
            $kk->nama_keluarga      = $request->get('nama_keluarga');
            $kk->status_keluarga    = $request->get('status_keluapemilikrga');
            $kk->jns_kel            = $request->get('jns_kel');
            $kk->tempatlahir        = $request->get('tempatlahir');
            $kk->tanggallahir       = $request->get('tanggallahir');
            $kk->agama              = $request->get('agama');
            $kk->pendidikan         = $request->get('pendidikan');
            $kk->jns_kerja          = $request->get('jns_kerja');
            $kk->warganegara        = $request->get('warganegara');
            $kk->status_perkawinan  = $request->get('status_perkawinan');
            $kk->save();

            return redirect('admin/kk/'.$id_kk)->with('addkeluarga','success');
        } else {
            return redirect()->back()->with('addkeluarga','error');
        }
    }
    public function AddFile(Request $request)
    {
        $id_kk = Crypt::decrypt($request->get('kode'));
        $jenisfile = $request->get('jns_file');
        $pemilik = $request->get('pemilik');
        $file = $request->file('file');
        $extensi = $file->getClientOriginalExtension();
        $pin = mt_rand(00, 999);
        $nama_file = $id_kk.'-'.$pemilik.'-'.$jenisfile.'-'.$pin.'.'.$extensi;
        $destinasi = storage_path().'/files/';
    
        if (!File::isDirectory($destinasi)) {
            File::makeDirectory($destinasi, 0775, true);
        }
        $file->move($destinasi, $nama_file);
        
        $f = new AllFile();
        $f->id_kk = $id_kk;
        $f->jns_file = $jenisfile;
        $f->nama_file = $nama_file;
        $f->tipe_file = $request->get('tipe');
        $f->save();

        return redirect()->back()->with('file','success');
    }
}
