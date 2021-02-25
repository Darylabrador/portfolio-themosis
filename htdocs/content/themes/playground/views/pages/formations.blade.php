@extends('layouts.app')

@section('content')
    <h1 class="text-center mb-0 font-bold titleSize mt-14"> {{ $post->post_title }} </h1>
    <div class="divider mx-auto mb-12"></div>
    
    {!!  $post->post_content  !!}
@endsection