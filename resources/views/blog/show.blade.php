@extends('welcome')
@section('content')
 
@if (session('message'))
<div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
 <span>{{session('message')}} </span>
</div>
@endif


<div class="container m-auto text-center pt-10 pb-5">

    <h1 class="font-bold text-6xl ">{{$post->title}}</h1>

    <div class="mt-5">

    By: <span class=" text-gray-500 italic">{{$post->user->name}}</span>
     on: <span class=" text-gray-500 italic">{{date('d-m-Y',strtotime($post->updated_at))}}</span>

    </div>
</div>
<div class=" container w-1/2 m-auto pt-8 pb-5">
  
<div class="flex h-96">
    <img class="object-contain w-full"  src="/images/{{$post->image_path}}" alt="gg">

</div>
<div class="text-l text-gray-700 py-8 leading-6">
{{$post->description}}
</div>
 @if (Auth::check() && 
 Auth::user()->id == $post->user_id)
 <a class="bg-green-700 text-gray-100
          py-4 px-5 mt-5 inline-block rounded-lg
          font-bold uppercase 
          text-l place-self-start"
 href="/blog/{{$post->slug}}/edit">Edit Post</a>

 <form action="/blog/{{$post->slug}}" method="post" 
 class="inline-block">
    @csrf
    @method('DELETE')
 <button type="submit" 
 class="bg-red-700 text-red-100
          py-4 px-5 mt-5 inline-block rounded-lg
          font-bold uppercase 
          text-l place-self-start"
 href="/blog/{{$post->slug}}/edit">Delete Post</b>

 @endif 


</div>


    @endsection