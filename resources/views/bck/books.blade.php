//resources/views/books.blade.php

@extends('layouts.app')

@section('content')

    <!-- Bootstrap Boilerplate... -->

    <div class="panel-body">
        <!-- Display Validation Errors -->
        @include('common.errors')

        <!-- New Task Form -->
        <form action="/book" method="POST" class="form-horizontal">
            {{ csrf_field() }}

            <!-- Task Name -->
            <div class="form-group">
                <label for="book" class="col-sm-3 control-label">Book</label>

                <div class="col-sm-6">
                    <input type="text" name="title" id="title" class="form-control">
    		    <input type="text" name="author" id="author" class="form-control">

                </div>
            </div>

            <!-- Add Book Add Button -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Add Book
                    </button>
                </div>
            </div>
        </form>
    </div>

    <!-- TODO: Current Books -->
@endsection
