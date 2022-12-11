<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    public function login(Request $request)
    {


        $username=$request->username;
        $password=$request->password;

    //    echo "name:". $username."<br>";
    //    echo "password:". $password."<br>";
    //    die();

        $result=DB::select("select * from users where (name='$username' or email='$username') and password='$password'");


// print_r($result);
// die();


        if(count($result)==1){

           // print_r($result);
            $user_id= $result[0]->id;
            $user_name= $result[0]->name;
            $user_email= $result[0]->email;
            $user_password= $result[0]->password;
            $user_type= $result[0]->type;


             $session_id=session()->getId();
            session(["sess_id"=>$session_id,"sess_user_id"=>$user_id,"sess_user_name"=>$user_name,"sess_user_email"=>$user_email,"sess_user_passowrd"=>$user_password,"sess_type"=>$user_type]);

            return view('admin.content');


        }else{

            echo "invalid password or email";
        }




     //  return view('layout.profile');
    }
    public function logout()
    {
        //

        session()->forget(["sess_id","sess_user_id","sess_user_name","sess_user_email","sess_user_passowrd"]);

        session()->flush();
        session()->regenerate();


        return redirect('/');
       // return view('login.login');

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
