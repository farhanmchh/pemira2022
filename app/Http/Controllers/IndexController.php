<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        return view("index");
    }

    public function login(){
        return view("login");
    }
    public function dashboard(){
        return view("dashboard/index");
    }
    public function user(){
        return view("user/index");
    }
    public function kelas(){
        return view("kelas/index");
    }
    public function vote(){
        return view("vote/index");
    }
    public function kandidat(){
        return view("kandidat/index");
    }
    public function logout(Request $request){
        $request->session()->invalidate();
        return redirect("/login");
    }
}
