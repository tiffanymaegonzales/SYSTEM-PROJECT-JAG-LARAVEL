<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
class HomeController extends Controller
{

    public function search(){
        return view('search');
    }


    public function delete(){
        return view('delete');
    }

    public function result(){
        return view('result');
    }


    public function product(){
        return view('product');
    }

    public function register(){
        return view('register');
    }


     public function insertData(Request $request){
        
        $fname = $request->input('firstname');
        $lname = $request->input('lastname');
        $uname = $request->input('username');
        $email = $request->input('email');
        $mobile = $request->input('mobile');
        $pass = $request->input('password');
        
        DB::INSERT("INSERT into users(firstname,lastname,username,email,mobile,password)VALUES(?,?,?,?,?,?)", [$fname,$lname,$uname,$email,$mobile,$pass]);

        return view('register');
    }



        public function dashboard(){
        return view('dashboard');
    }


     public function inserData(Request $request){
        
        $prod = $request->input('prod_name');
        $price = $request->input('price');
        $quantity = $request->input('quantity');
        $description = $request->input('description');
        $location = $request->input('location');
        $_date = $request->input('_date');
        
        DB::INSERT("INSERT into additems(prod_name,price,quantity,description,location,_date)VALUES(?,?,?,?,?,?)", [$prod,$price,$quantity,$description,$location,$_date]);

        return view('dashboard');
    }


 public function login(){
        return view('login');
    }

    public function displayData(Request $request){
        //initialization

        $username = $request->input('user');
        $password = $request->input('pass');

       $data= DB::SELECT('SELECT username from users where username=? and password=?' , [$username,$password]);

       if (count($data))

       {
        return view('dashboard');
       }
       else {
        return view('login');
       }



    }
    
}

