@extends('layouts.app')

@section('content')
    email : {{ get_option('th_email', 'Non définie')  }} <br>
    phone : {{ get_option('th_phone', 'Non définie')  }} <br>
    
    <h1>Me contacter</h1>
    {!! $form->render() !!}
@endsection