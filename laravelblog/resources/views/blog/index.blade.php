@extends('layouts.app')

@section('content')


<div class="container-fluid text-center">
    <div class="row text-align-center ">
        <h1 class="">Blog Posts</h1>

    </div>
    <br>
    @if (session()->has('message'))
    <div class="bg-success">
        <p>
            {{ session()->get('message')}}

        </p>

    </div>
        
    @endif

    @if (Auth::check())
    <div class="btn btn-success px-4">
        <a href="/blog/create" class="text-white">
        Create new post</a>

    </div>
        
    @endif


   @foreach ($posts as $post)

        <div class="row pt-3">
                
            <div class="col">
                <img src="{{ asset('images/' .$post->image_path)}}" style="width: 600px" alt="">
            </div> 


        <div class="col">
            <h2 class="font-bold pb-4">
            {{ $post->title }}
            </h2>
            <span>
                BY <span class="font-bold italic">{{ $post->user->name }}</span>, Created on {{ date('jS M Y',strtotime($post->update_at))}}
            </span>

            
            
            <p>{{ $post->description}}</p>
            <a href="/blog/{{ $post->slug }}" class="btn btn-primary">Keep Reading</a>


            @if (isset(Auth::user()->id) && Auth::user()->id ==$post->user_id)
                
            <span>
                <a class="btn btn-primary" href="/blog/{{ $post->slug }}/edit">Edit</a>
            </span>

            <span>
                <form action="/blog/{{ $post->slug }}" method="POST">
                

                    @csrf
                    @method('delete')

                    <button class="btn btn-danger" type="submit">
                        Delete

                    </button>
                </form>
            </span>
            @endif


        </div>


        </div>
       
   @endforeach

      
    

</div>
    
@endsection