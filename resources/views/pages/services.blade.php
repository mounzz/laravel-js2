@extends('layout.layout')
@section('content')
<div class="mx-auto w-9/12 mt-8">
    <h2 class="text-4xl">Services Subheading</h2>
    <div class="w-full rounded bg-slate-200 mt-3 p-3">Home / Services</div>
</div>


<div class="mx-auto w-9/12">
    <div class="mt-5 text-4xl text-slate-600/25 h-[10rem] bg-gradient-to-r from-purple-500 to-pink-500 flex items-center justify-center">
        Taille de l'image
    </div>
    <div class="grid gap-4 grid-cols-3 p-4">
        <div class="max-w-xs mx-auto overflow-hidden bg-white rounded-lg shadow-lg dark:bg-gray-800">
            <img class="object-cover w-full h-56" src="https://images.unsplash.com/photo-1542156822-6924d1a71ace?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="avatar">

            <div class="py-5 text-center">
                <a href="#" class="block text-2xl font-bold text-gray-800 dark:text-white">John Doe</a>
                <span class="text-sm text-gray-700 dark:text-gray-200">Software Engineer</span>
            </div>
        </div>

        <div class="max-w-xs mx-auto overflow-hidden bg-white rounded-lg shadow-lg dark:bg-gray-800">
            <img class="object-cover w-full h-56" src="https://images.unsplash.com/photo-1542156822-6924d1a71ace?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="avatar">

            <div class="py-5 text-center">
                <a href="#" class="block text-2xl font-bold text-gray-800 dark:text-white">John Doe</a>
                <span class="text-sm text-gray-700 dark:text-gray-200">Software Engineer</span>
            </div>
        </div>

        <div class="max-w-xs mx-auto overflow-hidden bg-white rounded-lg shadow-lg dark:bg-gray-800">
            <img class="object-cover w-full h-56" src="https://images.unsplash.com/photo-1542156822-6924d1a71ace?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="avatar">

            <div class="py-5 text-center">
                <a href="#" class="block text-2xl font-bold text-gray-800 dark:text-white">John Doe</a>
                <span class="text-sm text-gray-700 dark:text-gray-200">Software Engineer</span>
            </div>
        </div>
    </div>

</div>

@endsection
