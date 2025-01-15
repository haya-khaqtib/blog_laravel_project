@extends('welcome')
@section('content')
<!-- heroImg -->
<div class="hero-bg-image flex flex-col items-center justify-center h-screen">
    <p class="text-white text-6xl uppercase font-bold pb-10 text-center">Welcome to my blog</p>
    <a href="{{ url('/blog') }}" class="text-gray-700 bg-gray-100 py-4 px-5 rounded-lg uppercase font-bold text-lg">Start reading</a>
</div>
<!-- blog -->

<div class="container sm:grid grid-cols-2 gap-4 mx-auto py-4">

    <div class="mx-2 ">
        <img class="sm:rounded-lg " src="https://picsum.photos/id/239/960/620" alt="">
    </div>

    <div class="flex flex-col items-left justify-center m-10 sm:m-0">
        <h2 class="font-bold text-4xl uppercase text-gray-700">
            How to be an expert in 2024?
        </h2>
        <p class="font-bold text-xl  text-gray-600 pt-2">
            11 Steps To Become an Expert in Your Field
        </p>
        <p class="font-bold text-sm leading-6  text-gray-500  py-4">
            Becoming an expert in your field can fast-track your status
            and increase your earning potential in your industry.
            Your expertise has the potential to make you more desirable as a job candidate or more valuable
            within your current company.


        </p>

        <a class="bg-gray-700 font-bold py-4 px-5 uppercase rounded-lg text-l text-gray-100 place-self-start" href="{{ url('/blog') }}">Read more</a>
    </div>
</div>

<!--category-->
<div class="text-center bg-gray-700 text-gray-100 p-10">
    <h2 class="text-2xl">Blog Categories</h2>
    <div class="container mx-auto pt-10 sm:grid grid-cols-4">
        <div class="font-bold text-3xl py-2 pb-5">UX designer</div>
        <div class="font-bold text-3xl py-2 pb-5">Programming</div>
        <div class="font-bold text-3xl py-2 pb-5">Graphic design</div>
        <div class="font-bold text-3xl py-2 pb-5">Front-End</div>
        <div class="font-bold text-3xl py-2 pb-5">Mobiel Devlop</div>
        <div class="font-bold text-3xl py-2 pb-5">UI Ux</div>
    </div>
</div>
<!--Recent post-->
<div class="container mx-auto text-center py-15">
    <h2 class="font-bold text-6xl py-10">Recent Posts</h2>
    <p class="text-gray-400 leading-6 px-5 py-4">
        PHP is an open-source,
        server-side programming language that can be used to
        create websites, applications,
        customer relationship management systems and more.
        It is a widely-used general-purpose language that
        can be embedded into HTML
    </p>
</div>

<div class="sm:grid grid-cols-2 w-4/5 mx-auto pb-10">
    <div class="flex bg-yellow-700 text-gray-100 pt-10">
        <div class="block m-auto pt-4 pb-15 w-4/5">
            <ul class="md:flex text-xs gap-2">
                <li class="bg-yellow-100 text-yellow-700 py-2 rounded inline-block my-1 md:my-0 hover:text-yellow-100 hover:bg-yellow-500"><a href="#" class="px-1">PHP</a></li>
                <li class="bg-yellow-100 text-yellow-700 py-2 rounded inline-block my-1 md:my-0 hover:text-yellow-100 hover:bg-yellow-500"><a href="#"class="px-1">Programming</a></li>
                <li class="bg-yellow-100 text-yellow-700 py-2 rounded inline-block my-1 md:my-0 hover:text-yellow-100 hover:bg-yellow-500"><a href="#"class="px-1">UIUX</a></li>
                <li class="bg-yellow-100 text-yellow-700 py-2 rounded inline-block my-1 md:my-0 hover:text-yellow-100 hover:bg-yellow-500"><a href="#"class="px-1">Backend</a></li>
            </ul>


            <h3 class="text-l py-10 leading-6">
                PHP is an open-source,
                server-side programming language that can be used to
                create websites, applications,
                customer relationship management systems and more.
                It is a widely-used general-purpose language that
                can be embedded into HTML..
            </h3>



            <a href="{{ url('/blog') }}" class="bg-transparent border-2 text-gray-100 py-4 px-5 rounded-lg font-bold uppercase text-l inline-block "> Read More</a>
        </div>
    </div>
    <div class="flex">
        <img class="object-cover " src="https://picsum.photos/id/242/960/620" alt="">
    </div>
</div>

@endsection