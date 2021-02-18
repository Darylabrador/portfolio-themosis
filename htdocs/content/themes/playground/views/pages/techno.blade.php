@extends('layouts.app')

@section('content')
    @foreach ($dataPost as $item)
    <hr>
        <h6> title :</h6>
        <p>
            <a href="/{{ $item->post_type }}/{{ $item->post_name }}">  {{ $item->post_title }} </a>
          
        </p>
        <h6> content : </h6>
        {!! $item->post_content !!}
    @endforeach
@endsection