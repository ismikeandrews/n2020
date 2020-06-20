<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Newsletter;

class NewsletterController extends Controller
{
    public function store(Request $request){
        $this->validate($request, [
    		'nome' => 'max:10|string',
    		'email' => 'required|email',
    		'telefone' => 'max:10|min:9|string'
    	]);

    	$newsletter = Newsletter::create([
    		'nome' => $request->input('nome'),
    		'email' => $request->input('email'),
    		'telefone' => $request->input('telefone')
    	]);

    	return view('welcome')->with('ok', $newsletter->save());
    }
}
