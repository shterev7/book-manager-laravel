@extends('welcome')
@section('content')

<!DOCTYPE html>
<html>
<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
    .mySlides {display:none}
</style>
<body>

<div class="w3-container">
    <h2>Welcome to bookmanager</h2>
    <p>Check our type of books below.</p>
</div>

<div class="w3-content" style="max-width:800px">
    <img class="mySlides" src="{{  asset('/img/book1.png')}}" style="width:100%">
    <img class="mySlides" src="{{  asset('/img/book3.png')}}" style="width:100%">
    <img class="mySlides" src="{{  asset('/img/book4.png')}}" style="width:100%">
</div>

<div class="w3-center">

    <button class="w3-button demo" onclick="currentDiv(1)">1</button>
    <button class="w3-button demo" onclick="currentDiv(2)">2</button>
    <button class="w3-button demo" onclick="currentDiv(3)">3</button>
</div>

<script>
    var slideIndex = 1;
    showDivs(slideIndex);

    function currentDiv(n) {
        showDivs(slideIndex = n);
    }

    function showDivs(n) {
        var i;
        var x = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("demo");
        if (n > x.length) {slideIndex = 1}
        if (n < 1) {slideIndex = x.length}
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" w3-red", "");
        }
        x[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " w3-red";
    }
</script>

</body>
</html>

    @endsection