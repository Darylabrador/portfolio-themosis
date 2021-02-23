@extends('layouts.welcome-layout')

@section('content')
    <div style="min-height: 70vh;" class="flex align-center justify-center flex-col" >
        <h1 class="text-center mb-0" id="welcome"> {{ get_option('th_welcomemessage')  }} </h1>
        <div class="divider mx-auto mb-12"></div>
        

        <div class="flex justify-center">
            <div class="w-full lg:w-1/2 md:px-4 lg:px-6 py-5">
                <div class="bg-gray-700 rounded">
                    <div class="px-4 py-4 md:px-10">
                        {!! get_option('th_welcomecontent')  !!}
                        <div class="flex justify-center">
                            <a href="{{ route('quisuisje') }}" class="bg-gray-600 text-white hover:bg-gray-500 hover:text-white px-3 py-2 rounded-full text-sm font-medium ">Qui suis je  ? </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
      
@endsection