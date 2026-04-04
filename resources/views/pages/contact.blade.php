@extends('layout.master')

@section('title', 'Contact Me')


@section('sidebar')
    @parent
@endsection

@section('content')
    <div class="container">
        This is text from contact me page
        {{--  <h1>{!! $the_id !!}</h1>
         <p>{{ $the_post_id }}</p> --}}
    </div>
@endsection

