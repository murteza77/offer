@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html>
	<head>
		<title>Datatable </title>
		<script   src="https://code.jquery.com/jquery-2.2.4.min.js"   integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="   crossorigin="anonymous"></script>
		<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">
		<script type="text/javascript" src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>

		<script type="text/javascript">
			$(document).ready( function () {
    			$('#users-table').DataTable();
	});
		</script>
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
    <table class="table table-bordered projects">
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Deadline</th>
                	
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>

        <tbody>
        @foreach($ProjectList as $List)
        	<tr>
        	<td>{{$List->id}}</td>
        	<td>{{$List->title}}</td>
        	<td>{{$List->date}}</td>
        	


        	<td><a href="{!! URL::to("project/$List->id/edit") !!}" class="btn btn-xs btn-primary">Edit</a></td>

        	<td>
        		{!! Form::open(array('route' => array('deleteProject', $List->id), 'method' => 'delete')) !!}
 				<button class="btn btn-xs btn-danger" type="submit">Delete List</button>
 				{!! Form::close() !!}
        	</td>
        	</tr>
		@endforeach
        </tbody>
    </table>

	</body>
	<script type="text/javascript">
		$('.projects').DataTable({
			select:true,
			"order": [[0, "desc"]],
			"scrollY": "380px",
			"scrollCollapse": true,
			"paging" : true,
			"bProccessing": true
		});
	</script>
</html>

@stop