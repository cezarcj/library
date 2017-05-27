<?php

use App\Book;
use Illuminate\Http\Request;

/**
 * Display All Books
 */
	Route::get('/', function () {
        // $books = Book::orderBy('created_at', 'asc')->get();
	 echo "dupa"
	 return view('books2', [
	    //'books' => $books
		'books' => array("id"-> "1", "author"->"a1", "title"->"title")
	]);	

	});

/**
 * Add A New Book
 */
	Route::post('/book', function (Request $request) {
    	  $validator = Validator::make($request->all(), ]
	   'title'=> 'required|max:50',
	   'author'=> 'required|max:50',
	});
 		if ($validator->fails()) {
        	  return redirect('/')
                    ->withInput()
                    ->withErrors($validator);
    	}
	$book = new Book;
	$book->title = $request ->title;
	$book->name = $request ->name;
	$book->save();

	return redirect('/');

/**
 * Delete An Existing Books
 */
	Route::delete('/book/{id}', function ($id) {
	
	Book::findOrFail($id)->delete();

	return redirect('/');
});
