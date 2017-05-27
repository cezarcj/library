@extends('layouts.app')

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
                Current Book
          </div>

            <div class="panel-body">
                <table class="table table-striped book-table">

        <!-- Table Headings -->
            <thead>
                <th>Title</th>
                <th>Author</th>
            </thead>
        <!-- Table Body -->
             <tbody>
              @foreach ($books as $book)
              <tr>
        <!-- Task Name -->
		<tr>
		<td>{{ $book->title }}</td>
		<td>{{ $book->author }}</td>
		<td>
        <form action="/book/{{ $book->id }}" method="POST">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}

            <button>Delete Book</button>
        </form>
    </td>
		</tr>
             @endforeach
             </tbody>
             </table>
           </div>
    </div>
    @endif
    @endsection
	
	
	
	</br></br></br>
	Dodawnie</br>
	 <div class="panel-body">
        <!-- Display Validation Errors -->
        @include('common.errors')

        <!-- New Task Form -->
        <form action="/book" method="POST" class="form-horizontal">
            {{ csrf_field() }}

            <!-- Task Name -->
            <div class="form-group">
                <label for="task" class="col-sm-3 control-label">Task</label>

                <div class="col-sm-6">
                    <input type="text" name="title" id="task-name" class="form-control">
					<input type="text" name="author" id="task-name" class="form-control">
                </div>
            </div>

            <!-- Add Task Button -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Add Task
                    </button>
                </div>
            </div>
        </form>
    </div>