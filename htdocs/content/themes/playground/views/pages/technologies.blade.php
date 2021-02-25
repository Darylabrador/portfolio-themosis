@extends('layouts.app')

@section('content')
    <h1 class="text-center mb-0 font-bold titleSize mt-14"> {{ ucfirst($techno) }} </h1>
    <div class="divider mx-auto mb-14"></div>


       <div class="container my-12 mx-auto px-4 md:px-12 mb-14">
            <div class="flex flex-wrap -mx-1 lg:-mx-4">
            @foreach ($dataPost as $item)
                <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/4">
                    <article class="overflow-hidden rounded-lg shadow-lg bg-gray-700 h-80" style="background-image: url('{!! get_the_post_thumbnail_url (($item->ID), 'large') !!}'); background-size: cover;">
                        <header class="flex items-center justify-center leading-tight p-2 md:p-4">
                            <h1 class="text-lg text-center">
                                <a class="text-white hover:text-white visited:text-white focus:text-white" href="/{{ $item->post_type }}/{{ $item->post_name }}">
                                    {!!  ucfirst($item->post_title) !!}
                                </a>
                            </h1>
                        </header>
                        <footer class="flex flex-wrap h-4/6 content-end justify-center leading-none p-2 md:p-4">
                            <a href="/{{ $item->post_type }}/{{ $item->post_name }}" class="rounded-full bg-gray-500 text-white mx-2 px-4 py-1 hover:bg-gray-900 hover:text-white visited:text-white focus:text-white"> Détails  </a>
                        </footer>
                    </article>
                </div>
            @endforeach
            </div>
        </div>
@endsection