@extends('main')
@section('title','| All Posts')
@section('content')
<div class="row">
    <div class="col-md-10">
        <h1>All Posts</h1> 
    </div>
    <div class="col-md-2">
        <a href='{{url('posts/create')}}' class="btn btn-lg btn-primary" style="margin-top: 18px;">Create New Post</a> 
    </div>
    
</div>
<hr/>
<div class="row">
    <div class="col-md-12">
        <table class="table ">
            <thread>
                <tr>
                   <th>#</th>
                <th>Title</th>
                <th>Body</th>
                <th>Created At</th>
                <th></th> 
                </tr>
                
            </thread>
            <tbody>
                @foreach($posts as $posts)
                <tr>
                    <th>{{$posts->id}}</th>
            <td>{{$posts->title}}</td>
            <td>{{substr($posts->body,0,50)}} {{strlen($posts->body)>50?"...":""}}</td>
            <td>{{date('M j, Y',strtotime($posts->created_at))}}</td>
            <td>
                <a href="{{url('posts/show/'.$posts->id)}}" class="btn btn-warning btn-sm">
                    <span class="glyphicon glyphicon-eye-open"></span>View</a>
                <a href="{{url('posts/edit/'.$posts->id)}}" class="btn btn-success btn-sm">
                    <span class="glyphicon glyphicon-edit"></span>Edit</a>
            </td>
                </tr>
            
            @endforeach
            </tbody>
        </table>
        <div class="text-center">

        </div>
    </div>
</div>

@endsection
