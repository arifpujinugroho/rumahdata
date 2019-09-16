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

class AdminGetController extends Controller
{
    //
    public function Home()
    {
        return view('admin.home');
    }

    public function AllKK()
    {
        $allkk = KK::all();
        
        return view('admin.allkk', compact('allkk'));
    }
    public function KK($id)
    {

        $kk = KK::whereid($id)->first();

        $file = AllFile::whereid_kk($id)->get();
        $keluarga = Keluarga::whereid_kk($id)->get();
        $jmlkeluarga = Keluarga::whereid_kk($id)->count();
        $jns_file = JnsFile::all();

        return view('admin.kk', compact('kk','file','keluarga','jns_file','jmlkeluarga'));
    }
}
