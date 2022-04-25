@extends('layouts.app')

@section('content')
    <div class="w-4/5 m-auto text-center">
        <div class="py-15 text-left">
            <h1 class="text-6xl">Publier une annonce</h1>
        </div>
    </div>

    @if ($errors->any())
        <div class="w-4/5 m-auto">
            <ul>
                @foreach ($errors->all() as $error)
                <li class="w-1/5 mb-4 text-gray-50 bg-red-700 rounded-2xl py-4">
                    {{ $error }}
                </li>
            @endforeach
            </ul>
        </div> 
    @endif

    <div class="w-4/5 m-auto pt-20">
        <form 
                action="/blog" 
                method="POST" 
                enctype="multipart/form-data">
                @csrf

            <input 
                type="text" 
                name="title"
                placeholder="Titre..."
                class="bg-transparent block border-b-2 w-full h-20 text-3xl outline-none">
            
            <input 
                type="text"
                name="price"
                placeholder="Prix"
                class="bg-transparent block border-b-2 w-full h-10 text-2xl outline-none">    

            <textarea 
                name="description"
                placeholder="Description"
                class="py-20 bg-transparent block border-b-2 w-full h-60 text-xl outline-none">
            </textarea>
            
            <div class="bg-grey-lighter pt-15">
                <label class="w-40 flex flex-col items-center px-10 py-1 bg-white-rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer">
                    <span class="mt-2 text-base leading-normal" style="font-size: 14px">Sélectionner un fichier</span>
                    <input 
                    type="file"
                    name="image"
                    class="hidden">
                </label>
            </div>

            <button
                type="submit"
                class="uppercase mt-15 bg-blue-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl">
                Publier
            </button>
        </form>
    </div>

@endsection
