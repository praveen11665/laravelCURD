<!DOCTYPE html>
<html>
<head>
	<title><?php echo (isset($title))? $title : 'Latavel CURD';?></title>

	<!---Js, CSS files-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

	<!--Datatables-->
	<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
	<script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

	<!--Sweet Alert-->
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

	<style>
    /* Stackoverflow preview fix, please ignore */
    .navbar-nav {
      flex-direction: row;
    }
    
    .nav-link {
      padding-right: .5rem !important;
      padding-left: .5rem !important;
    }
    
    /* Fixes dropdown menus placed on the right side */
    .ml-auto .dropdown-menu {
      left: auto !important;
      right: 0px;
    }

    .mandatory, .help-block{
    	color: red;
    }
  </style>
</head>
<body>
	<!--Nav Bar-->
	<nav class="navbar navbar-expand-lg navbar-light bg-warning">
		<a class="navbar-brand" href="/tableView">Laravel Project</a>
    	<ul class="navbar-nav">		    
		    <li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle navbar-brand" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Masters  </a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					<a class="dropdown-item" href="/tableView">Users</a>
				</div>
		    </li>
		</ul>
      	<ul class="navbar-nav ml-auto">		    
		    <li class="nav-item dropdown">
		      <a class="nav-link dropdown-toggle navbar-brand" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> {{ Auth::user()->name }}  </a>
		      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
		      	<a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
		            @csrf
		        </form>
		      </div>
		    </li>
		  </ul>
    </nav><br>

	@if (Session::has('message'))
	        <div class="alert alert-{!! session('alertType') !!}" id="alert-message"> {!! session('message') !!} </div>
   	@endif

   	<!-- To be view the content-->
   	<?php echo (isset($content)?$content:''); ?>
</body>
</html>
<script type="text/javascript">

	//$("#alert-message").hide('4000').slideup('400');

	$(document).ready( function () {
	    $('#myTable').DataTable();
	} );
	//swal("Hello world!");
</script>