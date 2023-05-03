@extends('layouts.default')

@section('content')
    <main>
        <h1 class="text-3xl text-red-500">Hello worlld</h1>
        <div class="ml-4 text-center text-sm text-gray-500 dark:text-gray-400 sm:text-right sm:ml-0">
            Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
        </div>
    </main>
@endsection
