@extends('layouts.app')

@section('content')
    {{ $post->post_title }}
    {!!  $post->post_content  !!}
@endsection