<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\KK;
use App\Model\Keluarga;
use App\Model\AllFile;
use App\Model\JnsFile;
use Auth;
use redirect;

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
            $kk->id_kk              = $request->get('id_kk');
            $kk->nik_keluarga       = $request->get('nik_keluarga');
            $kk->nama_keluarga      = $request->get('nama_keluarga');
            $kk->status_keluarga    = $request->get('status_kelarga');
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
        
    }
}
