@extends('main')
@section('title',' | Contact')
@section('content')
            <div class="row">
                <div class="col-md-offset-2 col-md-8">
                    <h1>Contact Me</h1>
                    <form class="form-horizontal">
                        <div class="form-group">
                            <label name="email">Email:</label>
                            <input id="email" name="email" class="form-control" type="email"/>
                        </div>
                        
                        <div class="form-group">
                            <label name="sub">Subject:</label>
                            <input id="sub" name="subject" class="form-control" type="text"/>
                        </div>
                        
                        <div class="form-group">
                            <label name="tarea">Message:</label>
                            <textarea id="tarea" name="message" class="form-control"
                                      placeholder="Type Your Message here..."></textarea>
                        </div>
                        
                        <input type="submit" value="Send Message" class="btn btn-success"/>
                        
                    </form>
                </div>
            </div><!--End of header row-->
       @endsection