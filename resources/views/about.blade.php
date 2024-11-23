@extends("layouts.app")

@section("title","Tentang Kami")

@section("content")
    <div class="container1">
            <div class="title">
                <h1>Tentang Kami</h1>
                <p>Kenali lebih dekat apa itu Belajar Laravel dan bagaimana kami dapat membantu Anda.</p>
            </div>
            <a href="{{ route('home') }}">Back</a>
    </div>

@endsection