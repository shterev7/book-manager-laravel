@extends('welcome')
@section('content')



    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h3 class="reviews-title"> {{$book->reviews()->count()}} Reviews</h3>
            <h4 class="book-title"> <strong>Book Title:</strong> {{$book->title}}</h4>
            <br>
            @foreach($book->reviews as $review)
                <div class="review">
                    {{--<p><strong>Book Title:</strong> {{$book->title}}</p>--}}
                    <p><strong>Name:</strong> {{$review->name}}</p>
                    <p><strong>Email:</strong>{{$review->email}}</p>
                    <p><strong>Review:</strong><br> {{$review->review}}</p>
                    <p><strong>Created at:</strong> {{$review->created_at}}</p>
                    <br><br>
                </div>

            @endforeach
        </div>
    </div>

    <div class="row">
        <div id="review-form" class="col-md-8 col-md-offset-2" style="margin-top: 50px;">
            {{ Form::open(['route' => ['reviews.store', $book->id], 'method' => 'POST']) }}

            <div class="row">
                <div class="col-md-6">
                    {{ Form::label('name', "Name:") }}
                    {{ Form::text('name', null, ['class' => 'form-control']) }}
                </div>

                <div class="col-md-6">
                    {{ Form::label('email', 'Email:') }}
                    {{ Form::text('email', null, ['class' => 'form-control']) }}
                </div>

                <div class="col-md-12">
                    {{ Form::label('review', "Review:") }}
                    {{ Form::textarea('review', null, ['class' => 'form-control', 'rows' => '5']) }}

                    {{ Form::submit('Add Review', ['class' => 'btn btn-success btn-block', 'style' => 'margin-top:15px;']) }}
                </div>
            </div>

            {{ Form::close() }}
        </div>
    </div>

@endsection