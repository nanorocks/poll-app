@extends('user.layout.app')
@section('title', 'Dashboard')
@section('nav')
@parent
@endsection
@section('body')
        <section class="container mt-10 mx-auto bg-white rounded-lg shadow-md p-4">
            <p class="font-bold text-3xl ml-2">Active Polls</p>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-1">

                <x-test-component background='bg-white' link='#' btn-name='Start poll'/>
                <x-test-component background='bg-white' link='#' btn-name='Start poll'/>
                <x-test-component background='bg-white' link='#' btn-name='Start poll'/>
                <x-test-component background='bg-white' link='#' btn-name='Start poll'/>

            </div>
             <div class="flex flex-row bg-gray-200 mt-4 text-center rounded-lg">
                <a href="#" class="text-gray-700 text-center hover:bg-gray-300 bg-white px-4 py-2 m-2 rounded-lg text-white font-extrabold">1</a>
                <a href="#" class="text-gray-700 text-center hover:bg-gray-300 bg-white px-4 py-2 m-2 rounded-lg text-white font-extrabold">2</a>
                <a href="#" class="text-gray-700 text-center hover:bg-gray-300 bg-white px-4 py-2 m-2 rounded-lg text-white font-extrabold">3</a>
            </div>
        </section>

        <section class="container mt-10 mx-auto bg-white rounded-lg shadow-md p-4 mb-16">
            <p class="font-bold text-3xl ml-2">Previous Polls</p>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-1">
                <x-test-component background='bg-gray-100' link='#' btn-name='Results'/>
                <x-test-component background='bg-gray-100' link='#' btn-name='Results'/>
                <x-test-component background='bg-gray-100' link='#' btn-name='Results'/>
            </div>

            <div class="flex flex-row bg-gray-200 mt-4 text-center rounded-lg">
                <a href="#" class="text-gray-700 text-center hover:bg-gray-300 bg-white px-4 py-2 m-2 rounded-lg text-white font-extrabold">1</a>
                <a href="#" class="text-gray-700 text-center hover:bg-gray-300 bg-white px-4 py-2 m-2 rounded-lg text-white font-extrabold">2</a>
                <a href="#" class="text-gray-700 text-center hover:bg-gray-300 bg-white px-4 py-2 m-2 rounded-lg text-white font-extrabold">3</a>
            </div>
        </section>
@endsection