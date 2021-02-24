@extends('layouts.app')

@section('content')
    <h1 class="text-center mb-0 font-bold titleSize mt-24"> {{ get_option('th_whotitle')  }} </h1>
    <div class="divider mx-auto mb-12"></div>
    <div class="text-justify mx-auto lg:w-1/2 sm:w-4/5 md:w-3/4 my-28">
        {!! get_option('th_presentation') !!} 
    </div>
@endsection