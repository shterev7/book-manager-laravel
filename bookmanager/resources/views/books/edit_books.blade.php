@extends('welcome')
@section('content')
    <div class="container">
        <form method="post" action="{{action('BooksController@update', $id)}}">
            <div class="form-group row">
                {{csrf_field()}}
                <input name="_method" type="hidden" value="PATCH">
                <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Title</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="title" name="title" value="{{$book->title}}">
                </div>
            </div>
            <div class="form-group row">
                <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Author</label>
                <div class="col-sm-10">
                    <select id="author_id" name="author_id">
                        <option value="Z">Select an author</option>
                        @foreach ($authors as $author)
                            <option value="{{$author->id}}">{{$author->firstname}} {{$author->lastname}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-2"></div>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
@endsection