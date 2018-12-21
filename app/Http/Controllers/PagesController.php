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
        $title = 'Admin Pannel';
        return view('pages.admin')->with('title',$title);
    }
    public function user(){
        $title = 'User Pannel';
        return view('pages.user')->with('title',$title);
    }
    public function createNewElection(){
        $title = 'START NEW ELECTION ';
        return view('pages.createNewElection')->with('title',$title);
    }
    public function adminLogin(){
        $title = 'Login Only For Admin ';
        return view('pages.adminLogin')->with('title',$title);
    }
    public function successElection(){
        $title = 'New Election Created Successfully!!!!!';
        return view('pages.successElection')->with('title',$title);
    }
    public function successVote(){
        $title = 'Your vote has been submitted. You have 0 votes left for this election';
        return view('pages.successVote')->with('title',$title);
    }
    public function result(){
        $title = 'Result Section';
        return view('pages.result')->with('title',$title);
    }
}
