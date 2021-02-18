@extends('layouts.app')

@section('content')
    {{ $post->post_title }}
    {!!  $post->post_content  !!}

    <div>
        <h3> Technologies </h3>
        <p>
          @foreach ($listTechnos as $item)
              <a href="{{ get_term_link($item->slug, 'technologies') }}"> {{ $item->name }}  </a>
          @endforeach
        </p>
    </div>
@endsection