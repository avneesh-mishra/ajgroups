<!DOCTYPE html>
<html>
    <head>
        <title> Contact us </title>
        @section('content')
    <div>
        {!! Form::open(array('url'=>'contactUs','method'=>'post','name'=>'log','enctype'=>'multipart/form-data'))!!}
        <h1>Contact us</h1>
        <p>Fields maked withan asterix (*) are mendatory.
        </p>
        <div style="padding-top: 20px;">
            {!! Form::label('Title','First Name *',['class'=>'mini-heading'])!!}
            {!! Form::text('firstName',' ',['required'])!!}

            {{ $errors->first('title') }}
        </div>
        <div style="padding-top: 20px;">
            {!! Form::label('Title','Last Name ')!!}
            {!! Form::text('lastName',' ',['required'])!!}
            {{ $errors->first('title') }}
        </div> <div style="padding-top: 20px;">
            {!! Form::label('Title','Email *')!!}
            {!! Form::text('email',' ',['required'])!!}
            {{ $errors->first('title') }}
        </div>
        <div>
            {!! Form::label('subject','Subject *')!!}
            {!! Form::textarea('subject',' ')!!}
            {{ $errors->first('subject') }}
        </div>
        <div style=" padding-top: 50px;padding-left:310px;">
            <input style="height:50px; width:90px;" type="button" value="Save" name="save">
        </div>
        {!! Form::close() !!}
    </div>
Contact GitHub 
