<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function search(Request $request){
        $keyword=$request->search;
         $mahasiswas = Mahasiswa::where('nama','like',"%". $keyword."%")->paginate(5);
         return view('mahasiswas.index', data: compact( 'mahasiswas'));
    }
}
