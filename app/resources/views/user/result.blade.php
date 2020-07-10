@extends('user.layout.app')
@section('title', 'Result')
@section('nav')
@endsection
@section('body')
        <section class="container mx-auto bg-white rounded-lg shadow-md p-4 mt-24">
            <p class="font-bold text-5xl ml-2 text-center">Result</p>
            <p class="font-bold text-6xl ml-2 text-center mt-5">80%</p>
            <p class="font-bold text-3xl ml-2 text-center mt-5">32 of 40</p>
            <p class="font-bold text-3xl ml-2 text-center underline text-purple-600">Almost! Study a little more and take this test again</p>
            <p class="font-bold text-xl ml-2 text-center mt-10 text-gray-600">Time spend</p>
            <p class="font-bold text-xl ml-2 text-center text-gray-600">7:40</p>

            <div class="text-center mt-4 pb-2">
			  <a href="#" class="bg-white hover:bg-gray-100 text-gray-800 font-bold py-3 px-6 border border-gray-400 rounded shadow text-xl mt-2 ml-2">
			    Check answers
			  </a>
			  <a href="#" class="bg-white hover:bg-gray-100 text-gray-800 font-bold py-3 px-6 border border-gray-400 rounded shadow text-xl mt-2 ml-2">
			    Try again
			  </a>
			  <a href="#" class="bg-white hover:bg-gray-100 text-gray-800 font-bold py-3 px-6 border border-gray-400 rounded shadow text-xl mt-2 ml-2">
			    Back to Dasboard
			  </a>
			</div>
        </section>
@endsection