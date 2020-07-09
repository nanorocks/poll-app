@extends('user.layout.app')
@section('title', 'Dashboard')
@section('body')
        <section class="container mt-10 mx-auto bg-white rounded-lg shadow-md p-4">
            <p class="font-bold text-3xl ml-2">Active Polls</p>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-1">
                <div class="flex-1 border p-4 rounded-lg m-2">
                    <h1 class="text-purple-600 font-bold text-lg text-justify">Category name</h1>
                    <p class="mb-3 text-gray-600 font-light text-sm text-justify">category description ...</p>
                    <a href="#" class="bg-white hover:bg-gray-100 text-gray-800 font-bold py-1 px-4 border border-gray-400 rounded shadow text-sm mt-2">Start poll</a>
                </div>
               
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
                <div class="flex-1 border p-4 rounded-lg m-2 bg-gray-100">
                    <h1 class="text-purple-600 font-bold text-lg text-justify">Category name</h1>
                    <p class="mb-3 text-gray-600 font-light text-sm text-justify">category description ...</p>
                    <a href="#" class="bg-white hover:bg-gray-100 text-gray-800 font-bold py-1 px-4 border border-gray-400 rounded shadow text-sm mt-2">Results</a>
                </div>
            </div>
            <div class="flex flex-row bg-gray-200 mt-4 text-center rounded-lg">
                <a href="#" class="text-gray-700 text-center hover:bg-gray-300 bg-white px-4 py-2 m-2 rounded-lg text-white font-extrabold">1</a>
                <a href="#" class="text-gray-700 text-center hover:bg-gray-300 bg-white px-4 py-2 m-2 rounded-lg text-white font-extrabold">2</a>
                <a href="#" class="text-gray-700 text-center hover:bg-gray-300 bg-white px-4 py-2 m-2 rounded-lg text-white font-extrabold">3</a>
            </div>
        </section>
@endsection