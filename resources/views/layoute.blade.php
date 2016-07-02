<!DOCTYPE html>
<html>
<head>
<title>MEW project announcement</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content=" Mew Project offering, Ministry of energy and water, Aghanistan project, Energy and Electricity project" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<!-- js -->
<script type="text/javascript" src="{{asset("js/jquery-2.1.4.min.js")}}"></script>
<!-- <script   src="https://code.jquery.com/jquery-1.12.4.min.js"   integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="   crossorigin="anonymous"></script> -->
<!-- //js -->
<link href="{{asset("css/style.css")}}" rel="stylesheet" type="text/css" media="all" />
<!-- <link href='//fonts.googleapis.com/css?family=Quicksand:400,300,700' rel='stylesheet' type='text/css'> -->

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="{{asset("css/bootstrap.min.css")}}">
<link rel="stylesheet" href="{{asset("css/font-awesome.min.css")}}">
<link rel="stylesheet" href="{{asset("css/project.css")}}">
<!-- data table assets -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/u/dt/dt-1.10.12/datatables.min.css"/>
 
<script type="text/javascript" src="https://cdn.datatables.net/u/dt/dt-1.10.12/datatables.min.js"></script>

<script type="text/javascript" src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>



<!-- Latest compiled and minified JavaScript -->
<script type="text/javascript" src="{{asset("js/bootstrap.min.js")}}"></script>
<script type="text/javascript" src="{{asset("js/jquery.countdown.min.js")}}"></script>
<style type="text/css">
/*@import url(http://fonts.googleapis.com/css?family=Lato:100,300,400,700);
@import url(https://raw.github.com/FortAwesome/Font-Awesome/master/docs/assets/css/font-awesome.min.css);*/

body {
	background: #DDD;
	font-size: 15px;
}
#wrap {
  margin: 50px 100px;
  display: inline-block;
  position: relative;
  height: 60px;
  float: right;
  padding: 0;
  margin-top: -36px;
  position: relative;
}

input[type="text"] {
  height: 60px;
  font-size: 55px;
  display: inline-block;
  font-family: "Lato";
  font-weight: 100;
  border: none;
  outline: none;
  color: #555;
  padding: 3px;
  padding-right: 60px;
  width: 0px;
  position: absolute;
  top: 0;
  right: 0;
  background: none;
  z-index: 3;
  transition: width .4s cubic-bezier(0.000, 0.795, 0.000, 1.000);
  cursor: pointer;
}

input[type="text"]:focus:hover {
  border-bottom: 1px solid #BBB;
}

input[type="text"]:focus {
  width: 960px;
  z-index: 1;
  border-bottom: 1px solid #BBB;
  cursor: text;
}
input[type="submit"] {
  height: 67px;
  width: 63px;
  display: inline-block;
  color:red;
  float: right;
  background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAMAAABg3Am1AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAADNQTFRFU1NT9fX1lJSUXl5e1dXVfn5+c3Nz6urqv7+/tLS0iYmJqampn5+fysrK39/faWlp////Vi4ZywAAABF0Uk5T/////////////////////wAlrZliAAABLklEQVR42rSWWRbDIAhFHeOUtN3/ags1zaA4cHrKZ8JFRHwoXkwTvwGP1Qo0bYObAPwiLmbNAHBWFBZlD9j0JxflDViIObNHG/Do8PRHTJk0TezAhv7qloK0JJEBh+F8+U/hopIELOWfiZUCDOZD1RADOQKA75oq4cvVkcT+OdHnqqpQCITWAjnWVgGQUWz12lJuGwGoaWgBKzRVBcCypgUkOAoWgBX/L0CmxN40u6xwcIJ1cOzWYDffp3axsQOyvdkXiH9FKRFwPRHYZUaXMgPLeiW7QhbDRciyLXJaKheCuLbiVoqx1DVRyH26yb0hsuoOFEPsoz+BVE0MRlZNjGZcRQyHYkmMp2hBTIzdkzCTc/pLqOnBrk7/yZdAOq/q5NPBH1f7x7fGP4C3AAMAQrhzX9zhcGsAAAAASUVORK5CYII=) center center no-repeat;
  text-indent: -10000px;
  border: none;
  position: absolute;
  top: 0;
  right: 0;
  z-index: 2;
  cursor: pointer;
  opacity: 0.4;
  cursor: pointer;
  transition: opacity .4s ease;
}

input[type="submit"]:hover {
  opacity: 0.8;
}

</style>



</head>
<body>
@yield('content')

<script type="text/javascript">
   $(document).ready(function(){
   		// Bootstrap Tooltip
   		$('[data-toggle="tooltip"]').tooltip(); 
   		
	   	$('#wrapper').countdown('2020/10/10', function(event) {
		   $('#clock-month').html(event.strftime('%m'));
		   $('#clock-week').html(event.strftime('%w'));
		   $('#clock-day').html(event.strftime('%D'));
		   $('#clock-hour').html(event.strftime('%H: %M : %S '));
		   // $('#clock-b').html(event.strftime('%m months and %n days'));
		   // $('#clock-c').html(event.strftime('%D days'));
		 });
   });

 </script>
</body>
</html>