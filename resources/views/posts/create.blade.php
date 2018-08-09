@extends('main')

@section('title','| Create New Post')


@section('content')
<div class="row">
    <div class="col-md-offset-2 col-md-8">
        <h1>Create New Post</h1>
        <hr/>
        {!! Form::open(['url' => 'posts/store','method'=>'POST' ]) !!}
        
        <div class="form-group">
            <label class='control-label'>Title</label>
            <input name='title' class="form-control" maxlength="255" required autofocus/>       
        </div>
        <div class="form-group">
            <label class='control-label'>Slug</label>
            <input name='slug' class="form-control" minlength="5" maxlength="255" required autofocus/>       
        </div>
        <div class="form-group">
            <label class='control-label'>Body</label>
            <textarea name='body' rows="8" class="form-control" 
                   required autofocus> </textarea>
           
        </div>
 
        {{Form::submit('Create Post',['class' => 'btn btn-block btn-md btn-info','style'=>'margin-top:20px'])}}
        {!! Form::close() !!}

    </div>

</div>
@endsection

