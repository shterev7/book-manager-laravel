@extends('base')
@section('content')
    <div class="container">
        <form method="post" action="{{action('AuthorsController@update', $id)}}">
            <div class="form-group row">
                {{csrf_field()}}
                <input name="_method" type="hidden" value="PATCH">
                <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">First Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="firstname" name="firstname" value="{{$author->firstname}}">
                </div>
            </div>
            <div class="form-group row">
                <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Last Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="lastname" name="lastname" value="{{$author->lastname}}">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-2"></div>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
@endsection