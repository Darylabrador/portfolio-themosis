@extends('layouts.app')

@section('content')
    <h1> {{ get_option('th_nom')  }} {{ get_option('th_prenom')  }}</h1>
    <h4> {{ get_option('th_titre')  }}</h4>
    
    <p>
        Contenu page themosis <br>
        {{ get_option('th_accroche')  }}
    </p>
@endsection