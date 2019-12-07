<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Massege;
use Illuminate\Support\Facades\Redirect;

class MessagesController extends Controller
{
    public function submit(Request $request){
        // return $request->input('name');
        $this->validate($request,
        [
            'name'=>'required',
            'email'=>'required',
        ]

        );

        //create a new message
        //create an object of Massage model class
         $message=new Massege;
         //asaign the value database
         // $message->name  //name of the field   //name of the input field  $request->input('name')
         $message->name=$request->input('name');
         $message->email=$request->input('email');
         $message->messages=$request->input('message');

         //save message
         $message->save();

         //redirect to another page
         //with functon can give acces to the message
         return Redirect('/')->with('success','Message send');

        //return 'validarion successfull';
    }
    //get data from database
    public function getMEssages(){
       //get all meaasges from the table
       $messages = Massege::all();
       //send the data to another page
       return view('messages')->with('messages',$messages);
    }
}
