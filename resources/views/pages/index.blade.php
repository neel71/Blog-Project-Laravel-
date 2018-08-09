@extends('main')
@section('title',' | Home')

@section('content')
            <div class="row">
                <div class="col-md-12">
                    <div class="jumbotron">
                        <h1>Welcome to My Blog!</h1>
                        <p class="lead">Thank You so much for visiting. This is my test website Built with Laravel.
                        Please read the poular post.</p>
                        <p><a class="btn btn-primary btn-lg" href="#" role="button">Popular Post</a></p>
                    </div>
                </div>
            </div><!--End of header row-->
            
            <div class="row">
                <div class="col-md-8">
                    @foreach($posts as $posts)
                    <div class="post">
                        <h3>{{$posts->title}}</h3>
                        <p> {{substr($posts->body,0,300)}}{{strlen($posts->body)>300?"....":""}}
                        </p>
                        <a href='{{url('blog/'.$posts->slug)}}' class="btn btn-primary">Read More</a>
                    </div>
                    <hr/>
                    @endforeach
                </div>
                <div class="col-md-3 col-md-offset-1">
                    Sidebar
                </div>
            </div>
            @endsection
            
     