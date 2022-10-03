@extends('layout.layout')

@section('content')

<div class="mx-auto w-9/12 mt-8">
    <h2 class="text-4xl">Welcome Subheading</h2>
    <div class="w-full rounded bg-slate-200 mt-3 p-3">Home / Welcome</div>
</div>

<div class="rounded mx-auto w-9/12 mt-8 py-10 bg-slate-200 flex flex-col items-center">
    <h2 class="text-4xl text-center">Hello {{ env('APP_TITRE') }}</h2>
    <div class="mx-auto w-4/5 text-center pb-10 mt-4 border-b-2 border-slate-300 ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi, minima.
    </div>

    <div class="mt-6">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloribus at explicabo reiciendis molestias consequatur possimus?</div>
    <div>
        <button class="mt-6 px-4 py-2 font-medium tracking-wide text-white capitalize transition-colors duration-200 transform bg-blue-600 rounded-md hover:bg-blue-500 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80">
            about
        </button>
    </div>

</div>


@endsection
