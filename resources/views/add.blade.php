@extends('layout')

@section('title', "Visit")

@section('content')

    <div class="relative flex items-top justify-center min-height bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">

            @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            @error('message')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <form method="POST" action="">
                @csrf
                <div>
                    <label for="name">Enter pony name:</label>
                    <input id="name" name='name' type="text"/>
                </div>


                <button type="submit">Add Pony</button>


            </form>
        </div>
    </div>

@endsection
