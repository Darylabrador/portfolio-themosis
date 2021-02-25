@extends('layouts.app')

@section('content')
    <h1 class="text-center mb-0 font-bold titleSize mt-14"> {{ $post->post_title }} </h1>
    <div class="divider mx-auto mb-4"></div>

    <div class="flex justify-center mb-14">
        @foreach ($listTechnos as $item)
        <div class="mx-2">
            <a href="{{ get_term_link($item->slug, 'technologies') }}" class="rounded-full bg-gray-600 text-white px-4 py-1 hover:bg-gray-800 hover:text-white visited:text-white focus:text-white"> {{ $item->name }}  </a>
        </div>
        @endforeach
    </div>

    <div class="flex pl-4 justify-center flex-col content-center lg:justify-center lg:flex-row md:justify-center md:flex-row  xl:justify-center xl:flex-row 2xl:justify-center 2xl:flex-row  mb-4">
        {!!  $post->post_content  !!}
    </div>

@endsection