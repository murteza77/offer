@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Edit Project</title>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ui-timepicker-addon/1.6.1/i18n/jquery-ui-timepicker-addon-i18n.min.js"></script>
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/jquery.ui.timepicker.addon/1.4.5/jquery-ui-timepicker-addon.min.css">
        <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
        <script>
        $(function() {
        $( "#date" ).datepicker();
        });
        </script>
        <script>
        $(document).ready(function() {
        $('#details').summernote();
        });
        </script>
        <style type="text/css">
        h2{
        font-size: 20px;
        text-align: center;
        }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-offset-2">
                    
                    <h2>Project Submission Form</h2>
                    
                    {!! Form::model($project, array('method' => 'put', 'route' => ['updateProject', $project->id], 'class' => 'form')) !!}
                    @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        There were some problems adding the project.<br />
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <div class="form-group">
                        {!! Form::label('Project Name', 'Project Name') !!}
                        {!! Form::text('title', old('title'),['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                      
                        
                    </div>
                    <div class="form-group">
                        {!! Form::label('Project Detials', 'Project Detials') !!}
                        {!! Form::textarea('details', old('details'),['class' => 'form-control', 'id'=>'details','name'=>'details']) !!}
                        <!-- <div id="summernote" name="summernote"> Add Details of your project here</div>
                        -->
                    </div>
                    <div class="form-group">
                        {!! Form::label('Deadline ', 'Deadline') !!}
                        <!-- {{ Form::date('deadline',date('d-M-Y', strtotime($project->date)), ['class' => 'form-control']) }} -->
                        {!! Form::text('date', old('date'),['class' => 'form-control', 'id'=>'date','name'=>'date']) !!}
                    </div>
                    {!! Form::submit('Save', ['class' => 'btn btn-primary   ']) !!}
                    {!! Form::close() !!}
                    <script>
                    $(document).ready(function() {
                    $('#details').summernote();
                    });
                    </script>
                </div>
            </div>
        </div>
    </body>
</html>
@stop