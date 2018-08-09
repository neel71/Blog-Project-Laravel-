@extends('main')
@section('title','| Edit Blog Post')
@section('content')
<div class="row">
    {!! Form::open(['url' => 'posts/update','method'=>'POST']) !!}

    <div class="col-md-8">
        <div class="form-group">
            <label class='control-label'>Title</label>
            <input name='title' class="form-control" value="{{$posts->title}}"  autofocus/>
            <input type="hidden" name='postId' class="form-control" value="{{$posts->id}}"  autofocus/>
        </div>
        <div class="form-group">
            <label class='control-label'>Slug</label>
            <input name='slug' class="form-control" value="{{$posts->slug}}" readonly autofocus/>
            
        </div>
        <div class="form-group">
            <label class='control-label'>Body</label>
            <textarea name='body' rows="8" class="form-control" 
                      required autofocus> {{$posts->body}} </textarea>

        </div>
    </div>

    <div class="col-md-4">
        <div class="well">
            <dl class="dl-horizontal">
                <dt>Created At:</dt>
                <dd>{{ date('M j, Y h:ia',strtotime($posts->created_at)) }}</dd>
            </dl>
            <dl class="dl-horizontal">
                <dt>Last Updated:</dt>
                <dd>{{ date('M j, Y h:ia',strtotime($posts->updated_at)) }}</dd>
            </dl>

            <div class="row">
                <div class="col-md-6">
                    <a href="{{url('posts/show/'.$posts->id)}}" class="btn btn-block btn-danger">Cancel</a>

                </div>
                <div class="col-md-6">
                   
                    {{Form::submit('Save Changes',['class'=>'btn btn-block btn-success'])}}
                </div>
            </div>
        </div>

    </div>
    {!! Form::close() !!}
</div>

@endsection