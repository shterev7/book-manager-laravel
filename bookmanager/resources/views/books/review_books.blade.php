@extends('welcome')
@section('content')



    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h3 class="reviews-title"> {{$book->reviews()->count()}} Reviews</h3>
            @foreach($book->reviews as $review)
                <div class="review">
                    <p><strong>Name:</strong> {{$review->name}}</p>
                    <p><strong>Email:</strong><br/> {{$review->review}}</p>
                </div>

            @endforeach
        </div>
    </div>

    <div class="row">
        <div id="review-form" class="col-md-8 col-md-offset-2" style="margin-top: 50px;">
            {{ Form::open(['url' => ['reviews.store', $book->id], 'method' => 'POST']) }}

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