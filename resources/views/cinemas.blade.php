@extends('layout')

@section('title', 'Cinemas')

@section('content')

<div class="relative flex items-top justify-center min-height bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        <h2>{{ $header }}</h2>
        <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
            <ul>
                <li>
                    Kinepolis
                </li>
                <li>
                    studio Skoop
                </li>
                <li>
                    Sphinx
                </li>
            </ul>
        </div>
    </div>
</div>

@endsection
