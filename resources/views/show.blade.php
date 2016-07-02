
@extends('layoute')
@section('content')

     @foreach($result as $newresult)
    <div class="col-sm-6">
        <div class="panel panel-project ">
            <div class="panel-body">

                <div class="col-sm-10 short-info">
                    <h2 style="text-align: center">{{ $newresult->title }}</h2>

                    <div class="{{ $newresult->id}}wrapper">
                        <div id="clock-a"></div>
                        <!-- <div id="clock-b"></div>
                        <div id="clock-c"></div> -->
                    </div>
                    <table class="project-table">
                        <tr>
                            <th> Month</th>
                            <th> Week</th>
                            <th> Days</th>
                            <th> Hours</th>
                        </tr>
                        <tr>
                            <td><div id="{{$newresult->id}}clock-month"></div></td>
                            <td><div id="{{$newresult->id}}clock-week"></div></td>
                            <td><div id="{{$newresult->id}}clock-day"></div></td>
                            <td><div id="{{$newresult->id}}clock-hour"></div></td>
                        </tr>
                    </table>
                </div>
                <div class="col-sm-2">
                    <img src="{{asset('images/logo.png')}}" class="img-circle" data-toggle="tooltip" data-placement="left" title="Project">
                </div>
                <div class="clearfix"></div>
                <div class="col-sm-12">
                    <a class="btn btn-info btn-block read-more" data-toggle="modal" href='#{{$newresult->id}}'>Read more...</a>
                </div>
            </div>
        </div>
    </div>
 

 <div class="modal fade" id="{{$newresult->id}}">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" style="text-align:center">{!! $newresult->title !!}</h4>
			</div>
			<div class="modal-body">
				{!! $newresult->details!!}
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
				
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
$(document).ready(function(){
        // Bootstrap Tooltip
        $('[data-toggle="tooltip"]').tooltip();
        var month = $('#{{$newresult->id}}clock-month');
        var week = $('#{{$newresult->id}}clock-week');
        var day = $('#{{$newresult->id}}clock-day');
        var hour = $('#{{$newresult->id}}clock-hour');
        $('#{{$newresult->id}}wrapper')
            .countdown('{{ date("Y/m/d H:m:s", strtotime($newresult->date)) }}', 
        function(event) {
            month.html(event.strftime('%m'));
            week .html(event.strftime('%n')/7 >= 1 ? (event.strftime('%n')/7)|0 : 0);
            day  .html(event.strftime('%n')%7);
            hour .html(event.strftime('%H:%M:%S'));
            // $('#clock-b').html(event.strftime('%m months and %n days'));
            // $('#clock-c').html(event.strftime('%D days'));
        });
});
</script>
 
@endforeach
@endsection