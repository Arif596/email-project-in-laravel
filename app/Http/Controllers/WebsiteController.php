<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
class WebsiteController extends Controller
{
    //
    function index(){
        $data=['name'=>'Arif jamal','data'=>'Arif jamal chohan'];
        $user['to']='arifjamal0011@gmail.com';
        Mail::send('mail',$data, function($messages) use($user){
$messages->to( $user['to']);
$messages->subject('Hello Developer, i am laravel developer  ');
        });
    }
}
