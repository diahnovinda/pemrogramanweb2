<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('Home');
    }

    public function Chart(){
        return view('Chart');
    }

    public function checkout(){
        return view('checkout');
    }

    public function search(){
        return view ('search');
    }

    public function submit(){
        return view('submit');
    }

    public function image($file){
        return $this->response->download(WRITEPATH . 'uploads/image' . $file, null);
    }
}
