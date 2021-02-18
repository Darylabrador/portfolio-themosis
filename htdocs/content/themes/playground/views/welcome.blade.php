@extends('layouts.app')

@section('content')
    <h1> toto testt </h1>
    
    <p>
        Contenu page themosis <br>
        {{ get_option('th_comment')  }}
    </p>
@endsection