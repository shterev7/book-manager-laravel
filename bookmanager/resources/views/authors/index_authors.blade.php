@extends('welcome')
@section('content')

    <div class="container">
        <form method="post" action="{{url('authors')}}">
            <div class="form-group row">
                {{csrf_field()}}
                <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">First Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="firstname" name="firstname">
                </div>
            </div>
            <div class="form-group row">
                <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Last Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="lastname" name="lastname">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-2"></div>
                <input type="submit" class="btn btn-primary">
            </div>
        </form>
    </div>



    <div class="container">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
            </tr>
            </thead>
            <tbody>
            @foreach($authors as $author)
                <tr>
                    <td>{{$author['id']}}</td>
                    <td>{{$author['firstname']}}</td>
                    <td>{{$author['lastname']}}</td>
                    <td><a href="{{action('AuthorsController@edit', $author['id'])}}" class="btn btn-warning">Edit</a></td>
                    <td>
                        <form action="{{action('AuthorsController@destroy', $author['id'])}}" method="post">
                            {{csrf_field()}}
                            <input name="_method" type="hidden" value="DELETE">
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection