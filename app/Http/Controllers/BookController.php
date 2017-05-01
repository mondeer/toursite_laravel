<?php

namespace tours\Http\Controllers;

use Illuminate\Http\Request;
use tours\Book;
use tours\Defer;
use tours\Approve;

class BookController extends Controller
{
    public function Create() {
      return view('client.book');
    }

    public function postCreate(Request $request) {
      $books = new Book;

      $books->name = $request->input('name');
      $books->tourtype = $request->input('tourtype');
      $books->tourdate = $request->input('tourdate');
      $books->phone = $request->input('phone');
      $books->email = $request->input('email');
      $books->save();

      return redirect('/client/success');
    }

    public function viewBookings() {
      $books = Book::all();

      return view('admin.approve')->with('books', $books);
    }
}
