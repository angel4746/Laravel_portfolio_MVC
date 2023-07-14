<?php

namespace App\Http\Controllers;

use App\Models\Email;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    
    public function index(){
        $emails = Email::all();
        return view('backend.email.manage');
}
    public function store(Request $request){
        $email = new Email();  
        $email->desc =$request->desc;    
        
        return back()->with('massage','pic and title added done!!');

    }
}