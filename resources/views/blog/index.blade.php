@extends('welcome')
@section('content')

@if (session('message'))
<div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
 <span>{{session('message')}} </span>
</div>
@endif
<div class="px-10">
<div class="container m-auto text-center pt-10 pb-5">
    <h1 class="font-bold text-6xl ">All Posts</h1>
</div>
<!-- زر اضافة مقال جديد -->
 @if(Auth::check())
<div class="container sm:grid mx-auto p-5 border-b border-gray-300">
<a class="place-self-start bg-gray-700 font-bold py-4 px-5 uppercase rounded-lg text-l text-gray-100" href="/blog/create">Add New Post</a>
</div>
@endif
@foreach ($posts as $post)

<div class="container sm:grid grid-cols-2 mx-auto py-10 px-10 gap-8 border-b border-gray-300">
    
<div class="flex">
    <img class="object-cover"  src="/images/{{$post->image_path}}" alt="gg">

</div>
<div class="px-5">
    <h2 class="text-gray-700 font-bold text-4xl py-5 md:pt-0" >
        {{$post->title}}
    </h2>
    <span>
        By: <span class=" text-gray-500 italic">{{$post->user->name}}</span>
        on: <span class=" text-gray-500 italic">{{date('d-m-Y',strtotime($post->updated_at))}}</span>

        <p class="text-gray-700 py-4 text-l py-8 leading-6">
            {{$post->description}}
        </p>
        <a class="bg-gray-700 font-bold py-4 px-5 uppercase rounded-lg text-l text-gray-100 place-self-start" href="/blog/{{$post->slug}}">Read more</a>

    </span>
</div>

</div>
</div>
@endforeach

@endsection