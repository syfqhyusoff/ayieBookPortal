<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function index(){
       
        //
      
    }

    public function services(){
     $data = array(
        'title' => 'Services',
        'services' => ['Web Design', 'Programming', 'SEO']
     );
        return view ('pages.services')->with($data); 
    }
}
