@extends('layouts.app')

@section('content')
    text : {{ get_option('th_contactmessage', 'Non définie')  }} <br>
    
    <h1>Me contacter</h1>
    {!! $form->render() !!}
@endsection