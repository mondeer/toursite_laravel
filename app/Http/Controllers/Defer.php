<?php

namespace tours\Http\Controllers;

use Illuminate\Http\Request;
use tours\Book;
use tours\Defer;


class Defer extends Controller
{
    public function delete($id) {
      $book = Book::find($id);

      $books = array(
       'name'=>$book->name,
       'tourtype'=>$book->tourtype,
       'tourdate'=>$book->tourdate,
       'created_at'=> $now,
       'updated_at'=> $now
    );

      Deferals::insert($books);

      $book->delete();

      return redirect('/home');
    }
}
