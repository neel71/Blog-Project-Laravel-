@extends('main')

@section('title','| View Post')

@section('content')
<div class="row">
    <div class="col-md-8">
        <h3>{{$posts->title}}</h3>
        <p > {{$posts->body}}</p>
    </div>

    <div class="col-md-4">
        <div class="well">
            <dl class="dl-horizontal">
                <label>Url:</label>
                <p><a href="{{ url('blog/'.$posts->slug) }}">{{url($posts->slug)}}</a></p>
            </dl>
            <dl class="dl-horizontal">
                <dt>Created At:</dt>
                <dd>{{ date('M j, Y h:ia',strtotime($posts->created_at)) }}</dd>
            </dl>
            <dl class="dl-horizontal">
                <dt>Last Updated:</dt>
                <dd>{{ date('M j, Y h:ia',strtotime($posts->updated_at)) }}</dd>
            </dl>
            <hr/>
            <div class="row">
                <div class="col-md-6">
                    <a href="{{url('posts/edit/'.$posts->id)}}" class="btn btn-block btn-info">Edit</a>               
                </div>
                <div class="col-md-6">        
                    <a href="{{url('posts/delete/'.$posts->id)}}" class="btn btn-block btn-danger">Delete</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <a href="{{url('posts')}}" class="btn btn-block btn-default" style="margin-top: 15px;">See All Posts</a>
                   
                </div>

            </div>
        </div>
    </div>

</div>




@endsection

