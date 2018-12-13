<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome to the Online Voting System';
        return view('pages.index')->with('title',$title);
    }
    public function register(){
        $title = 'Rgesiter Here';
        return view('pages.register')->with('title',$title);
    }
    public function login(){
        $data = array(
            'title'=> 'Login window',
            //'login'=>['Result of the Previous Election','Create a new Election','Name of the Election : ', 'Set Candidates : ']
        );
        return view('pages.login')->with($data);
    }
    public function admin(){
        $title = 'Admin page here';
        return view('pages.admin')->with('title',$title);
    }
    public function user(){
        $title = 'User page';
        return view('pages.user')->with('title',$title);
    }
}
