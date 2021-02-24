@extends('layouts.app')

@section('content')

<h1 class="text-center mb-0 font-bold titleSize mt-20"> {{ get_option('th_contacttitle', 'Contact') }} </h1>
<div class="divider mx-auto mb-14"></div>

<div class="flex justify-center">
    <div class="md:mr-10 lg:w-2/6 md:w-3/6 md:ml-6 sm:w-9/12 bg-gray-600 p-4 rounded rounded-lg text-white sm:text-black sm:bg-white">
        <h4 class="mb-4 text-center font-bold">{{ get_option('th_contactmessage', 'Non définie')  }}</h4>
        {!! $form->render() !!}
    </div>

    <div class="bg-gray-400 lg:w-4/12 md:w-3/6 md:mr-6 hidden md:block">
        image
    </div>
</div>
@endsection