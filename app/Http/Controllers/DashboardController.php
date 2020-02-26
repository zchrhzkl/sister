<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
  public function home(){
    return view('home');
  }

  public function createIncoming(){
    return view('createIncoming');
  }

  public function createOutgoing(){
    return view('createOutgoing');
  }


}
