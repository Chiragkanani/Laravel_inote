<?php

namespace App\Http\Controllers;

use App\Models\inote;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InoteController extends Controller
{
   
    public function index()
    {
       
        return view('index')->with('data',inote::all());
        
    }

   
    public function create()
    {
        //
    }

  
    public function insert(Request $request)
    {
        $result=new inote;
        $result->title=$request->title; 
        $result->description=$request->desc; 
        $result->save();
        $request->session()->flash('alert','Your Note added succesfully');
        return redirect('index'); 
    }

    
   
    public function show(inote $inote)
    {
        //
    }

   
    public function edit(inote $inote,$id)
    {
        return view('edit')->with('data',inote::find($id));
    }

   
    public function update(Request $request, inote $inote)
    {
        $result=inote::find($request->id);
        $result->title=$request->title; 
        $result->description=$request->desc; 
        $result->save();
        $request->session()->flash('update','Your Note added succesfully');
        return redirect('index'); 
    }

    
   
    public function delete(inote $inote,$id)
    {
        $result=inote::find($id);
         $result->delete();
        session()->flash('error','Your Note added succesfully');

         return redirect('index'); 
    }


    public function login_post(Request $request)
    {
                        $request->validate([
                        
                            'email'=>'required|email',
                            'password'=>'required',
                    ]);
                    
                $email=$request->email;
                $password=$request->password;

                    if (Auth::attempt(['email' => $email, 'password' => $password])) {

                        session()->flash('login','Your account created succesfully you logged  now');

                            return redirect()->route('index');

                    }
                            
                    
       
    }

   
   

    public function register_post(Request $request)
    {

        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'password'=>'required',
    ]);



        $res=new \App\Models\User;
        $res->email=$request->email;
        $res->name=$request->name;
        $res->password=\Hash::make($request->password);
        $res->save();
        session()->flash('register','Your account created succesfully you logged  now');
        return redirect()->route('index');
    }

   public function login()
   {

    return view('login');


   }
  
   public function register()
   {

    return view('register');


   }

   public function logout()
   {


    Auth::logout();
    return view('login');


   }

}
