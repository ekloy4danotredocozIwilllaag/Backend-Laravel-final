@extends('pages.base')


@section('content')

<div class="jumbotron">
    <div class="category">
        <h1 class="display-3">Hello Vlog Welcome to my Guys</h1>
        <p class="lead">Justine Bajenting the son of the Lord.</p>
    </div>
</div>

<style>
    body {
        font-family: 'Arial', sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f8f9fa;
    }

    .jumbotron {
        background-image: url('https://example.com/your-background-image.jpg'); /* Replace with your image URL */
        background-size: cover;
        background-position: center;
        color: #ffffff;
        padding: 100px;
        text-align: center;
        margin-bottom: 30px;
        border-radius: 15px;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
    }

    .category {
        background-color: rgba(255, 255, 255, 0.9);
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
    }

    .category h1 {
        color: #007bff;
        font-size: 3em;
        margin-bottom: 20px;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
    }

    .category p {
        color: #333;
        font-size: 1.2em;
    }
</style>


@endsection