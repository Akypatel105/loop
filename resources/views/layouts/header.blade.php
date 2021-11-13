
<!DOCTYPE html>
<html>
<head>
	<title>LOOP</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/home.css')}}">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;400;500;600;700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Signika+Negative:wght@300;400;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick-theme.min.css">
	<link rel="icon" href="{{ asset('image/logo.png')}}">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<style type="text/css">
/*.your i{
	color: white;
}
.your i:hover{
	color: white;s
	text-decoration: none;
}*/
</style>
</head>
<body class="body">
	<div class="co_header">
		<div class="container">
			<div class="row row1">
				<div class="col-lg-6">
				    <div class="row row1">
				        <div class="col-lg-4">
				        	<div class="logo">
				        		<a href="{{url('/index')}}"><img src="{{ asset('image/logo.png')}}"></a>
				        	</div>
				        </div>
				        <div class="col-lg-8">
				        	<ul class="menu">
				        		<li><a href="home.html"><i class="fas fa-home"></i></a></li>
				        		<li><a href="#"><i class="fab fa-facebook-messenger"></i></a></li>
						        <li><a href="#"><i class="fas fa-tv"></i></a></li>
					        </ul>
				        </div>
				    </div>
				</div>
				<div class="col-lg-6">
					<div class="row row1">
				        <div class="col-lg-8">
				        	<div class="search-box">
				            	<i class="far fa-search"></i>
				            	<input type="text" placeholder="Search">
				            </div>
				        </div>
				        <div class="col-lg-1">
				        	<div class="notification" data-toggle="modal" data-target="#form1">
				        		<i class="far fa-bell"></i>
				        	</div>
				        </div>
				        <div class="col-lg-3">
				        	<div class="user-profile">
								<div class="dropdown">
                                    <div type="button" class="dropdown-toggle" data-toggle="dropdown">
                                        <img src="{{ asset('image/user.jpg')}}">
                                    </div>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="user-profile.html"><span><i class="far fa-user"></i> profile</span></a>
                                        <a class="dropdown-item" href="#"><span><i class="fal fa-cog"></i>setting</span></a>
                                        <a class="dropdown-item" href="#"><span><i class="far fa-bookmark"></i> saved</span></a>
                                        <div class="dropdown-divider"><span><i class="far fa-sync-alt"></i> switch accounts</span></div>
                                        <form id="form1" action="{{ url('/logout') }}" method="post">
                                        @csrf
                                            <a href="javascript:;" class="dropdown-item" onclick="document.getElementById('form1').submit();">log out</a>
                                        </form>
                                        <!-- <a class="dropdown-item" href="{{ url('/logout') }}"><span>log out</span></a> -->
                                    </div>
                                </div>
						    </div>
				        </div>
				    </div>
			    </div>
		    </div>
	    </div>
	</div>