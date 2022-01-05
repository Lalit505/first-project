<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class site extends Controller
{
    public function showmessages()
    {
        return view("show-message");
    }
    public function ourservices($id)
    {
        echo "<h1>id: " . $id . "<h1/>";
        return view("services");
    }

    public function testmessage()
    {
        $name = "online web tutor";
        $email = "onlinewebtutor@gmail.com";
        return view("test-message", compact("name", "email"));
    }
    public function showdata()
    {
        $numbers = [1, 3, 6, 8, 10];
        return view('show-data', [
            'data' => $numbers
        ]);
    }
     public function aboutus(){
     echo "<h1>welcome to aboutus page</h1>";
     return view ("about-us");
     }

     public function contactus(){
         echo "<h1>welcome to contactus page</h1>";
         return view("contact-us");
     }
      public function myform(request $req) {
        if($req->ismethod("post")){
            $req->validate([
                "name"=>"required|min:3|max:10",
                "email"=>"required",
                "mobile"=>"required|digits_between:9,11"
            ]);
            print_r($req->all());
            
        }  
        return view ("my-form");  
      }
        
       
        



}
?>