@extends('layouts.app')

@section('content')
    @if(have_posts())

        <h1 class="text-center mb-0 font-bold titleSize mt-14"> {{ ucfirst($titlePostType) }} </h1>
        <div class="divider mx-auto mb-14"></div>

        <div class="container my-12 mx-auto px-4 md:px-12 mb-14">
            <div class="flex flex-wrap -mx-1 lg:-mx-4">
            @foreach ($dataPost as $item)
                <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/4">
                    @if (get_the_terms($item, 'technologies'))
                    <article class="overflow-hidden rounded-lg shadow-lg bg-gray-700 h-80" style="background-image: url('{!! get_the_post_thumbnail_url (($item->ID), 'large') !!}'); background-size: cover;">
                    @else
                    <article class="overflow-hidden rounded-lg shadow-lg bg-gray-700 h-80">
                    @endif
                        <header class="flex items-center justify-center leading-tight p-2 md:p-4 bg-white h-1/4 m-1 rounded-lg">
                            <h1 class="text-lg text-center">
                                <a class="text-black hover:text-black visited:text-black focus:text-black font-bold" href="/{{ $item->post_type }}/{{ $item->post_name }}">
                                    {!!  ucfirst($item->post_title) !!}
                                </a>
                            </h1>
                        </header>
                        <footer class="flex flex-wrap h-4/6 content-end justify-center leading-none p-2 md:p-4">
                        @if (get_the_terms($item, 'technologies'))
                            @foreach (get_the_terms($item, 'technologies') as $techno)
                            <a href="{{ get_term_link($techno->slug, 'technologies') }}" class="rounded-full bg-gray-500 text-white mx-2 px-2 py-1 hover:bg-gray-900 hover:text-white visited:text-white focus:text-white"> {{ $techno->name }}  </a>
                            @endforeach
                        @else
                            <a href="/{{ $item->post_type }}/{{ $item->post_name }}" class="rounded-full bg-gray-500 text-white mx-2 px-4 py-1 hover:bg-gray-900 hover:text-white visited:text-white focus:text-white"> Détails  </a>
                        @endif
                        </footer>
                    </article>
                </div>
            @endforeach
            </div>
        </div>
        {!! get_the_posts_navigation() !!}
    @else
    <div class="h-full flex flex-col justify-center content-center">
        <h1 class="text-center"> Aucun contenu pour le moment ! </h1>
    </div>
    @endif
@endsection