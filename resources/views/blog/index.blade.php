@extends('main')
@section('title','| Blog')
@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <h1>Blog</h1>
    </div>
</div>
@foreach($post as $post)
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <h2>{{$post->title}}</h2>
        <h5>Published: {{ date('M j, Y', strtotime( $post->created_at)) }}</h5>
        
        <p>{{ substr($post->body,0 , 250)}}{{ strlen($post->body)>250?'....':'' }}</p>
        
        <a href="{{'blog/'.$post->slug}}">Read Only</a>
    </div>
</div>
@endforeach



@endsection
