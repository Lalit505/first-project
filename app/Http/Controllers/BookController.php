<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Book;

class BookController extends Controller
{
    public function getBooks()
    {
        $book=Book::all();
        return view ("book",compact('book'));
    } 
    public function addBook(Request $request)
    {
        $this->validate($request,[
             "title"=>"required|min:3|max:10",
             "writer_name"=>"required|min:3|max:12",
             "price"=>"required",
             "publication"=>"required"
             
        ]);
        
        $book=new Book;
        $book->title=$request->title;
        $book->writter_name=$request->writer_name;
        $book->price=$request->price;
        $book->publication=$request->publication;
        $book->save();
        $book=Book::all();
        return view ("book",compact('book'));
    }
      public function update(request $request,$id){
          $book=book::find($id);
          $book->title=$request->title;
          $book->writter_name=$request->writter_name;
          $book->price=$request->price;
          $book->publication=$request->publication;
          $book->save();
          $book=Book::all();
        return view ("book",compact('book'));
      }
      public function delete($id)
      {
        Book::find($id)->delete();
          $book=Book::all();

        return view ("book",compact('book'));
      }




}
