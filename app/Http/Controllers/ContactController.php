<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use LDAP\Result;

class ContactController extends Controller
{
    public function index(){
        return 'Ini Halaman Contact Us';
    }
    public function show(){
        return view('contact-us');
    }
    public function store(Request $request){
        $result=[
            'name' => $request['name'],
            'email' => $request['email'],
            'subject' => $request['subject'],
            'message' => $request['message']
        ];
        return view('comment',['comment' => (object)$result]);
    }
}
