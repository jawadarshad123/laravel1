<!DOCTYPE html>
<html>
<head>
	<title>Test-@yield('title')</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
	@section('navbar')
	<nav class="navbar navbar-expand-sm bg-dark">
		<ul class="navbar-nav">
			<li class="nav-item">
				<a id="index" class="navbar-brand" href="{{url('jawad')}}">JAWAD SAB</a>
			</li>
			<li class="nav-item">
				<a id="index" class="navbar-brand" href="{{url('about')}}">CHUTIA</a>
			</li>
			<li class="nav-item">
				<a id="index" class="navbar-brand" href="{{url('myinfo')}}">BC</a>
			</li>
			<li class="nav-item">
				<a id="index" class="navbar-brand" href="{{url('talha')}}">Talha</a>
			</li>
			
		</ul>
	</nav>
	
</body>
</html>