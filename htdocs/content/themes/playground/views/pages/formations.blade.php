@extends('layouts.app')

@section('content')
    <h1 class="text-center mb-0 font-bold titleSize mt-14"> {{ ucfirst($post->post_title) }} </h1>
    <div class="divider mx-auto mb-14"></div>
    
    <div class="mx-auto text-justify w-11/12 px-4 md:w-11/12 lg:w-8/12 xl:w-8/12 2xl:w-8/12 mb-4">
        {!!  $post->post_content  !!}
    </div>
@endsection