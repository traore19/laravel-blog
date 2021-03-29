@extends('layouts.app')

@section('content')


<div class="container ">
    <div class="row text-align-center ">
        <h1 class="">Update Post</h1>

    </div>
    <br>

    @if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)

            <li>
                {{ $error }}
            </li>
                
            @endforeach
        </ul>
    </div>
        
    @endif
    <div class="row">
        <div class="col-md-7">
            

            <form action="/blog/{{ $post->slug}}" method="POST" enctype="multipart/form-data">
                @csrf

                @method('PUT')


                <div class="form-group">
                    
                    <input name="title"
                    value="{{ $post->title }}"
                    class="form-control bg-transparent">
                  </div>

                  <div class="form-group">
                    
                    <textarea  name="description" id="" cols="80" rows="10" placeholder="Description..."
                    class="bg-transparent">{{ $post->description}}</textarea>
                  </div>
                  
                  <button class="btn btn-success" type="submit">
                      Submit Post

                  </button>
            
            </form>
            

        </div>
    </div>

    


      
    

</div>
    
@endsection