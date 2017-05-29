<?php

use App\Book;
use Illuminate\Http\Request;

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

//Route::get('/', function () {
 //   return view('books2');
//});

Route::get('/', function () {
	$books = Book::all();//->get();
 return view('books', [
	'books' => $books
	
]);	

});


Route::post('/book', function (Request $request) {
    	  $validator = Validator::make($request->all(), [
	   'title' => 'required|max:50',
	   'author' => 'required|max:50',
	]);
 		if ($validator->fails()) {
        	  return redirect('/')
                    ->withInput()
                    ->withErrors($validator);
    	}
	$book = new Book;
	$book->title = $request ->title;
	$book->author = $request ->author;
	$book->save();

	return redirect('/');
});

Route::post('book/{id}/edit', function (Request $request) {
    	  $validator = Validator::make($request->all(), [
	   'title' => 'required|max:50',
	   'author' => 'required|max:50',
	]);
 		if ($validator->fails()) {
        	  return redirect('/')
                    ->withInput()
                    ->withErrors($validator);
    	}

#	$book->id = $request ->id;
	$book->title = $request ->input('title');
	$book->author = $request ->input('author');
	$book->save();
	#Book::findOrFail($id)->edit();
	
	
	return redirect('/');
});


Route::delete('/book/{id}', function ($id) {
    Book::findOrFail($id)->delete();

    return redirect('/');
});