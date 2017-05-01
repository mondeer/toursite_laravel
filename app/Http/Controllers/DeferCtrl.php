<?php

namespace tours\Http\Controllers;

use Illuminate\Http\Request;
use tours\Book;
use tours\Deferals;

class DeferCtrl extends Controller
{
  public function deferred() {
    $defers = Deferals::all();

    return view('admin.deferals')->with('defers', $defers);
  }

  public function destroy($id) {
    $book = Book::find($id);

    $books = array(
     'name'=>$book->name,
     'tourtype'=>$book->tourtype,
     'tourdate'=>$book->tourdate,
     'phone'=>$book->phone,
     'email'=>$book->email,
     );

     Deferals::insert($books);

    $book->delete();

    return redirect('/home');
  }
}
