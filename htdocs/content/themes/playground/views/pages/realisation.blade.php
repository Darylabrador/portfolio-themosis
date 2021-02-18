@extends('layouts.app')

@section('content')
    {{ $post->post_title }}
    {!!  $post->post_content  !!}

    <div>
        <h3> Technologies </h3>
        <p>
          @foreach ($listTechnos as $item)
              {{ $item->name }}  <br>
          @endforeach
        </p>
    </div>
@endsection