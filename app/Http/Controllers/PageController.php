<?php
  namespace App\Http\Controllers;
  use Illuminate\Http\Request;
  
  class PageController extends Controller{
    public function pegawai (Request $request){
      return view('pegawai');
    }

  }

?>