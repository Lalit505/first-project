<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\controllers\Fruitcontroller;
use App\Http\controllers\furniturecontroller;
use App\Http\controllers\user;
use App\Http\Controllers\Teachercontroller;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/contact', function () {
//     return view('contact');
// });
// Route::get('/products', function () {
//     return view('products');
// });

// Route::get('/show-messages',[App\Http\Controllers\site::class,'showmessages']);
// // Route::view('/services','services');
// Route::get("/services/{id}", [App\Http\Controllers\site::class, "ourservices"]);
// // route::get("products",function () {
//     // echo"<h2>welcome to my products</h2>";
// // });
// Route::get("add-form", function (){
//     echo"<h2>welcome to my add form</h2>";
//     return redirect('/contact');
// });
// Route::get("works/{id}/{name}", function ($id,$name){
//     echo"id:".$id."name:".$name;
// });

// Route::get("call", function (){
//     $data =["name" =>"sanjay", "email"=> "sanjay@gmail.com"];
// return view ("call", $data);
// });

route::get("test-message",[App\Http\controllers\site:: class, "testmessage"]);
Route::get("/show-data",[App\Http\controllers\site::class, "showdata"]);

Route::get("about-us",[App\Http\controllers\site::class, "aboutus"]);
Route::get("contact-us", [App\Http\controllers\site::class,"contactus"]);
route::get("/my-form",[App\Http\controllers\site::class,"myform"]);
route::post("/my-form",[App\Http\controllers\site::class,"myform"])->name("my-form");

Route::get("/book",[App\Http\controllers\BookController::class,"getBooks"]);
 Route::post("/book",[BookController::class,"addBook"])->name("book");
 Route::put("/book/{id}",[Bookcontroller::class,"update"]);
 Route::get("/delete/{id}",[Bookcontroller::class,"delete"])->name("delete-book");
 Route::get("/fruit",[App\Http\controllers\FruitController::class,"getFruit"]);
 Route::get("edit/{id}",[App\Http\controllers\FruitController::class,"editFruit"])->name('edit-fruit');

 Route::post("/fruit",[FruitController::class,"addFruit"])->name("Fruit");
 Route::put("/fruit/{id}",[Fruitcontroller::class,"update"])->name('update-fruit');
 Route::get("/delete/{id}",[Fruitcontroller::class,"delete"])->name("delete-fruit");
Route::get("/furniture",[furniturecontroller::class,"getfurniture"]);
Route::post("/furniture",[FurnitureController::class,"addfurniture"])->name("Furniture");
Route::put("/furniture/{id}",[Furniturecontroller::class,"update"])->name('update-furniture');
Route::get("/delete/{id}",[Furniturecontroller::class,"delete"])->name("delete-furniture");
Route::get("edit/{id}",[App\Http\controllers\FurnitureController::class,"editfurniture"])->name('edit-furniture');
Route::post("/user",[user::class,"userlogin"]);
Route::view("login","login");
Route::get("data",[Fruitcontroller::class,"index"]);
Route::get("data",[Teachercontroller::class,"index"]);

