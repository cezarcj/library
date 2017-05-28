@section('content')

    <!-- Bootstrap Boilerplate... -->

    <div class="panel-body">
        <!-- Display Validation Errors -->
        @include('common.errors')
	@extends('layouts.app')

        

        <!-- New Book Form --> 

 	<!-- Current Book -->
    	  @if (count($books) > 0) 
          <div class="panel panel-default">
          <div class="panel-heading">
                Edit Book
          </div>

            <div class="panel-body">
                <table class="table table-striped book-table">

        <!-- Table Headings -->
            <thead>
                <th>Title</th>
				<th></th><th></th><th></th><th>
                <th>Author</th>
            </thead>
        <!-- Table Body -->
             <tbody>
              @foreach ($books as $book)
              <tr>
        <!-- Book Name -->
		<tr>
		<td>{{ str_limit($book->title,10),"..." }}</td>
		<td></td><td></td><td></td><td></td>
		<td>{{ $book->author }}</td>
		<td>
        <form action="/book/{{ $book->id }}" method="POST">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
			
           <td> <button>Delete Book</button> </td>
           </td>
		</tr>
            
						  </form>
						  </tbody>
			<form action="/book/edit/{{ $book->id }}" method="POST">
            {{ csrf_field() }}
        		
         <td> <td> <button>Edit Book</button> </td> 
           </td>
		</tr>
             @endforeach
			 
			 <div class="col-sm-6">
                    <input type="text" name="title" value="new title" id="book-name" class="form-control">
					<input type="text" name="author" value="new author" id="book-name" class="form-control">
                </div>
            </div>
						  </form>
						
			            </div>
    </div>
    @endif
    @endsection
		
	
	</br></br></br>
	Add Book</br>
	 <div class="panel-body">
        <!-- Display Validation Errors -->
        @include('common.errors')
		
        <!-- New Book Form -->
        <form action="/book" method="POST" class="form-horizontal">
            {{ csrf_field() }}
	
            <!-- Book Name -->
            <div class="form-group">
               

                <div class="col-sm-6">
                    <input type="text" name="title" value="title" id="book-name" class="form-control">
					<input type="text" name="author" value="author" id="book-name" class="form-control">
                </div>
            </div>

            <!-- Add book Button -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Add Book
                    </button>
                </div>
            </div>
        </form>
    </div>
