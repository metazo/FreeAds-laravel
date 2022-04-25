@extends('layouts.app')

@section('content')
    <div class="w-4/5 m-auto text-center">
        <div class="py-15 text-left">
            <h1 class="text-6xl">
                {{ $post->title }}
            </h1>
            <br>
            <h5 class="text-3xl">
                {{ $post->price.' €'}}
            </h5>
        </div>

        <div>
            <img src="{{ asset('images/' . $post->image_path) }}" alt="">
        </div>
    </div>
    

    <div class="w-4/5 m-auto pt-20">
        <span class="text-gray-500">
            Par <span class="font-bold italic text-gray-800">{{ $post->user->name }}</span>, Créé le
            {{ date('j M Y', strtotime($post->updated_at)) }}
        </span>

        <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
            {{ $post->description }}
        </p>
    </div>

@endsection
