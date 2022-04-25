@extends('layouts.app')

@section('content')
    <div class="background-image grid grid-cols-1 m-auto">
        <div class="flex text-gray-100 pt-12">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <h1 class="sm:text-gray text-5xl uppercase font-bold text-shadow-md pb-14">
                    Publier votre annonce
                </h1>
                <a href="/blog" class="text-center bg-gray-50 text-gray-700 py-2 px-4 font-bold text-xl uppercase">
                    En savoir plus
                </a>
            </div>
        </div>
    </div>
    
    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
        <div>
            <img src="https://cdn.pixabay.com/photo/2016/11/19/12/34/apple-1839046_960_720.jpg" width="700" alt="">
        </div>
        <div class="m-auto sm:auto text-left w-4/5 block">
            <h2 class="texr-4xl font-extrabold text-gray-600">
                Envie de devenir un meilleur développeur ?
            </h2>
            <p class="py-8 text-gray-500 text-l">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam fugiat culpa incidunt, delectus quas fuga recusandae quos necessitatibus eos est aperiam quo. Cupiditate voluptatum voluptatibus dolorem quasi sequi temporibus harum!
            </p>
            <p class="font-extrabold text-gray-600 text-l pb-9">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore earum eaque consectetur totam tempora harum quo, aspernatur explicabo aut officiis sed optio perspiciatis quam impedit veritatis quia, hic quos. Excepturi?
            </p>
            <a href="/blog" class="uppercase bg-blue-500 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl">
            En savoir plus
            </a>
        </div>
    </div>
@endsection