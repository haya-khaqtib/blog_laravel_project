@extends('welcome')
@section('content')
    <div class="container m-auto text-center pt-10 pb-5">
        <h1 class="font-bold text-6xl ">Add New Posts</h1>
    </div>
    <div class="container mx-auto p-8 bg-white shadow-2xl rounded-lg max-w-lg mt-10 mb-10">
        <form action="/blog" method="post"
        enctype="multipart/form-data"
        
        >
        @csrf
            <input type="text" name="title" placeholder="enter post title"
                class="w-full h-12 px-4 text-lg border border-gray-300 rounded-lg mb-6 focus:outline-none focus:ring-2 focus:ring-blue-100">
            <textarea
                name="description" placeholder="enter post description"
                class="w-full h-60 px-4 text-lg border border-gray-300 rounded-lg mb-6 focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
            <div class="py-10">

                <label class="bg-gray-200 hover:bg-gray-500 text-gray-700 hover:text-gray-200
 transition duration-300 cursor-pointer p-5 rounded-lg font-bold uppercase
 ">
                    <span>Select an image to upload</span>
                    <input type="file" name="image" class="hidden">
                </label>
            </div>
            <button type="submit"
                class="
 bg-gray-700 
 text-gray-200 
 transition duration-300 cursor-pointer p-5  rounded-lg font-bold uppercase
 ">Submit the post</button>



        </form>



    </div>
    <div class="container"></div>
    @endsection

