@extends('layouts.app')

@section('content')
    @if(have_posts())
        @foreach ($dataPost as $item)
            <header class="page-header">
                <h1 class="page-title">
                    <a href="/{{ $item->post_type }}/{{ $item->post_name }}"> {!!  $item->post_title !!} </a> 
                </h1>
                <h3 class="page-title">{!!  $item->post_content !!}</h3>
                <div class="archive-technos">
                    @if (get_the_terms($item, 'technologies'))
                        @foreach (get_the_terms($item, 'technologies') as $techno)
                            <a href="{{ get_term_link($techno->slug, 'technologies') }}"> {{ $techno->name }}  </a>
                        @endforeach
                    @endif
                </div>
            </header>
        @endforeach
        {!! get_the_posts_navigation() !!}
    @else
        @template('parts.content', 'none')
    @endif
@endsection