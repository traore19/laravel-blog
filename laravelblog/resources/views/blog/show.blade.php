@extends('layouts.app')

@section('content')


<div class="container ">
    <div class="row text-align-center ">
        <h1 class="">{{ $post->title }}</h1>

    </div>
    <br>

    
    <div class="row">
        <div class="col-md-7">
            <span>
                BY <span>{{ $post->user->name }}</span>,Created on {{ date('jS M Y',strtotime($post->update_at))}}
            </span>
            <p>
                {{ $post->description }}
            </p>


            

        </div>
    </div>

    


      
    

</div>
    
@endsection