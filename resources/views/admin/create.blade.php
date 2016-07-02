@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Add Project</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script type="text/javascript" src=""></script>
<!-- <link rel="stylesheet" type="text/css" href="js/datetime/timepicker.css"> -->

    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  

    <script>
    $(function() {
    $( "#date" ).datepicker();
    });
    </script>

    <script type="text/javascript">
      $(function){
        $('#date').datetimepicker();
      }

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
    <script type="text/javascript">
      window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove(); 
    });
}, 5000);

    </script>
  </head>
  <body>
 @if(Session::has('message'))
<p id='alert' class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
@endif


    <div class="container">
      <div class="row">
        <div class="col-md-8 col-sm-offset-2">
          <h2>Project Submission Form</h2>
          {!! Form::open(array('route' => 'storeProject')) !!}
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
            {!! Form::label('Project Detials', 'Project Detials') !!}
            
            {!! Form::textarea('details', old('details'),['class' => 'form-control', 'id'=>'details','name'=>'details']) !!}
            
            <!-- <div id="summernote" name="summernote"> Add Details of your project here</div>
            -->
          </div>
          <div class="form-group">
            {!! Form::label('Deadline ', 'Deadline') !!}

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