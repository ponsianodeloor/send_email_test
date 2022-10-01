<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Mail;
use App\Mail\MailNotify;


class EmailController extends Controller
{
    public function index(){
        return view('email.type_email');
    }

    public function send(Request $request){
        $email = $request->email;
        $asunto = $request->asunto;
        $mensaje = $request->mensaje;

        $data = [
            'subject' =>   $asunto,
            'body' => $mensaje
        ];

        try {
            Mail::to($email)->send(new MailNotify($data));
            return view('email.sent_successfully');

        } catch (\Exception $exception){
            return view('email.error_send');
        }
    }

    public function create(){

    }

    public function store(Request $request){

    }

    public function show($id){

    }

    public function edit($id){

    }

    public function update(Request $request, $id){

    }

    public function destroy($id){

    }
}
