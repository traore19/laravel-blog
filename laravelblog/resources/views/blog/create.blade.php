@extends('layouts.app')

@section('content')


<div class="container ">
    <div class="row text-align-center ">
        <h1 class="">Create Post</h1>

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
            

            <form action="/blog" method="POST" enctype="multipart/form-data">
                @csrf


                <div class="form-group">
                    
                    <input name="title"
                    placeholder="Title"
                    class="form-control bg-transparent">
                  </div>

                  <div class="form-group">
                    
                    <textarea  name="description" id="" cols="80" rows="10" placeholder="Description..."
                    class="bg-transparent"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="" class="cursor-pointer">
                        <input type="file"
                        name="image"
                        class="hidden"
                        
                        >
                    </label>

                  </div>
                  <button class="btn btn-success" type="submit">
                      Submit Post

                  </button>
            
            </form>
            

        </div>
    </div>

    


      
    

</div>
    
@endsection