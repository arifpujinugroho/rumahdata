<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\KK;
use App\Model\Keluarga;
use App\Model\AllFile;
use App\Model\JnsFile;
use Auth;
use redirect;

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
        
        view('admin.allkk', compact('allkk'));
    }
    public function KK($id)
    {
        $kk = KK::whereid($id)->first();

        $file = AllFile::whereid_kk($id)->get();
        $keluarga = Keluarga::whereid_kk($id)->get();
        $jns_file = JnsFile::all();

        return view('admin.kk', compact('kk','file','keluarga','jns_file'));
    }
}
