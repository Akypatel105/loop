<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

   <head>
      <title>LOOP</title>
      <meta charset="UTF-8">
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <link rel="stylesheet" type="text/css" href="{{ asset('css/home.css') }}">
      <link rel="stylesheet" href="{{ asset('css/styles.css') }}" />
      <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;400;500;600;700&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Signika+Negative:wght@300;400;600;700&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/12.1.6/css/intlTelInput.css">
      <link rel="icon" href="{{ asset('image/logo.png') }}">
      <meta name="viewport" content="width=device-width, initial-scale=1">
        </head>
   <body class="body">
      <header>
         <div class="container_1">
            <div class="row row1">
               <div class="col-lg-4">
                  <div class="logo_1">
                     <a href=""><img src="{{ asset('image/logo.png') }}"></a>
                  </div>
               </div>
               <div class="col-lg-8">
                  <nav class="intro-menu">
                     <div class="buttons">
                        <button class="login" data-toggle="modal" data-target="#login-page1" data-dismiss="modal">Log in</button>
                        <button class="signup" data-toggle="modal" data-target="#login-page1" data-dismiss="modal">Sign up</button>
                     </div>
                  </nav>
               </div>
            </div>
         </div>
      </header>
      <div class="heading">
         <span class="text_1">Get your Next</span>
         <div class="wrapper">
            <div class="offset">
               <h2 class="text animate-before">Game 1</h2>
            </div>
            <div class="offset">
               <h2 class="text animate-before">Game 2</h2>
            </div>
            <div class="offset">
               <h2 class="text animate-before">Game 3</h2>
            </div>
            <div class="offset">
               <h2 class="text animate-before">Game 4</h2>
            </div>
         </div>
      </div>
      <div class="grid-container">
         <div class="grid">
            <div class="column animate-before">
               <div class="item">
                  <img src="{{ asset('image/gallery-1.webp')}}">
               </div>
               <div class="item">
                  <img src="{{ asset('image/gallery-2.jpg')}}">
               </div>
               <div class="item">
                  <img src="{{ asset('image/gallery-3.jpg')}}">
               </div>
               <div class="item">
                  <img src="{{ asset('image/gallery-4.jpg')}}">
               </div>
               <div class="item">
                  <img src="{{ asset('image/gallery-5.jpg')}}">
               </div>
            </div>
            <div class="column animate-before">
               <div class="item">
                  <img src="{{ asset('image/gallery-6.jpg')}}">
               </div>
               <div class="item">
                  <img src="{{ asset('image/gallery-7.jpg')}}">
               </div>
               <div class="item">
                  <img src="{{ asset('image/gallery-8.jpg')}}">
               </div>
               <div class="item">
                  <img src="{{ asset('image/gallery-9.jpg')}}">
               </div>
               <div class="item">
                  <img src="{{ asset('image/gallery-10.webp')}}">
               </div>
            </div>
            <div class="column animate-before">
               <div class="item">
                  <img src="{{ asset('image/gallery-11.png')}}">
               </div>
               <div class="item">
                  <img src="{{ asset('image/gallery-12.webp')}}">
               </div>
               <div class="item">
                  <img src="{{ asset('image/gallery-13.jpg')}}">
               </div>
               <div class="item">
                  <img src="{{ asset('image/gallery-14.webp')}}">
               </div>
               <div class="item">
                  <img src="{{ asset('image/gallery-15.jpg')}}">
               </div>
            </div>
            <div class="column animate-before">
               <div class="item">
                  <img src="{{ asset('image/gallery-16.jpg')}}">
               </div>
               <div class="item">
                  <img src="{{ asset('image/gallery-17.jpg')}}">
               </div>
               <div class="item">
                  <img src="{{ asset('image/gallery-18.jpg')}}">
               </div>
               <div class="item">
                  <img src="{{ asset('image/gallery-19.jpg')}}">
               </div>
               <div class="item">
                  <img src="{{ asset('image/gallery-20.jpg')}}">
               </div>
            </div>
            <div class="column animate-before">
               <div class="item">
                  <img src="{{ asset('image/gallery-21.jpg')}}">
               </div>
               <div class="item">
                  <img src="{{ asset('image/gallery-22.jpg')}}">
               </div>
               <div class="item">
                  <img src="{{ asset('image/gallery-23.jpg')}}">
               </div>
               <div class="item">
                  <img src="{{ asset('image/gallery-24.jpg')}}">
               </div>
               <div class="item">
                  <img src="{{ asset('image/gallery-25.jpg')}}">
               </div>
            </div>
            <div class="column animate-before">
               <div class="item">
                  <img src="{{ asset('image/gallery-26.jpg')}}">
               </div>
               <div class="item">
                  <img src="{{ asset('image/gallery-27.jpg')}}">
               </div>
               <div class="item">
                  <img src="{{ asset('image/gallery-28.jpg')}}">
               </div>
               <div class="item">
                  <img src="{{ asset('image/gallery-29.webp')}}">
               </div>
               <div class="item">
                  <img src="{{ asset('image/gallery-30.jpg')}}">
               </div>
            </div>
            <div class="column animate-before">
               <div class="item">
                  <img src="{{ asset('image/gallery-31.jpg')}}">
               </div>
               <div class="item">
                  <img src="{{ asset('image/gallery-32.webp')}}">
               </div>
               <div class="item">
                  <img src="{{ asset('image/gallery-33.jpg')}}">
               </div>
               <div class="item">
                  <img src="{{ asset('image/gallery-4.jpg')}}">
               </div>
               <div class="item">
                  <img src="{{ asset('image/gallery-13.jpg')}}">
               </div>
            </div>
         </div>
         <div class="grid">
            <div class="column animate-before">
               <div class="item">
                  <img src="{{ asset('image/gallery-11.png') }}">
               </div>
               <div class="item">
                  <img src="{{ asset('image/gallery-12.webp') }}">
               </div>
               <div class="item">
                  <img src="{{ asset('image/gallery-13.jpg') }}">
               </div>
               <div class="item">
                  <img src="{{ asset('image/gallery-14.webp') }} ">
               </div>
               <div class="item">
                  <img src="{{ asset('image/gallery-15.jpg')}}">
               </div>
            </div>
            <div class="column animate-before">
               <div class="item">
                  <img src="{{ asset('image/gallery-16.jpg')}}">
               </div>
               <div class="item">
                  <img src="{{ asset('image/gallery-17.jpg')}}">
               </div>
               <div class="item">
                  <img src="{{ asset('image/gallery-18.jpg')}}">
               </div>
               <div class="item">
                  <img src="{{ asset('image/gallery-19.jpg')}}">
               </div>
               <div class="item">
                  <img src="{{ asset('image/gallery-20.jpg')}}">
               </div>
            </div>
            <div class="column animate-before">
               <div class="item">
                  <img src="{{ asset('image/gallery-26.jpg')}}">
               </div>
               <div class="item">
                  <img src="{{ asset('image/gallery-27.jpg')}}">
               </div>
               <div class="item">
                  <img src="{{ asset('image/gallery-28.jpg')}}">
               </div>
               <div class="item">
                  <img src="{{ asset('image/gallery-29.webp')}}">
               </div>
               <div class="item">
                  <img src="{{ asset('image/gallery-30.jpg')}}">
               </div>
            </div>
            <div class="column animate-before">
               <div class="item">
                  <img src="{{ asset('image/gallery-31.jpg')}}">
               </div>
               <div class="item">
                  <img src="{{ asset('image/gallery-32.webp')}}">
               </div>
               <div class="item">
                  <img src="{{ asset('image/gallery-33.jpg')}}">
               </div>
               <div class="item">
                  <img src="{{ asset('image/gallery-4.jpg')}}">
               </div>
               <div class="item">
                  <img src="{{ asset('image/gallery-13.jpg')}}">
               </div>
            </div>
            <div class="column animate-before">
               <div class="item">
                  <img src="{{ asset('image/gallery-1.webp')}}">
               </div>
               <div class="item">
                  <img src="{{ asset('image/gallery-2.jpg')}}">
               </div>
               <div class="item">
                  <img src="{{ asset('image/gallery-3.jpg')}}">
               </div>
               <div class="item">
                  <img src="{{ asset('image/gallery-4.jpg')}}">
               </div>
               <div class="item">
                  <img src="{{ asset('image/gallery-5.jpg')}}">
               </div>
            </div>
            <div class="column animate-before">
               <div class="item">
                  <img src="{{ asset('image/gallery-6.jpg')}}">
               </div>
               <div class="item">
                  <img src="{{ asset('image/gallery-7.jpg')}}">
               </div>
               <div class="item">
                  <img src="{{ asset('image/gallery-8.jpg')}}">
               </div>
               <div class="item">
                  <img src="{{ asset('image/gallery-9.jpg')}}">
               </div>
               <div class="item">
                  <img src="{{ asset('image/gallery-10.webp')}}">
               </div>
            </div>
            <div class="column animate-before">
               <div class="item">
                  <img src="{{ asset('image/gallery-21.jpg')}}">
               </div>
               <div class="item">
                  <img src="{{ asset('image/gallery-22.jpg')}}">
               </div>
               <div class="item">
                  <img src="{{ asset('image/gallery-23.jpg')}}">
               </div>
               <div class="item">
                  <img src="{{ asset('image/gallery-24.jpg')}}">
               </div>
               <div class="item">
                  <img src="{{ asset('image/gallery-25.jpg')}}">
               </div>
            </div>
         </div>
         <div class="grid">
            <div class="column animate-before">
               <div class="item">
                  <img src="{{ asset('image/gallery-26.jpg')}}">
               </div>
               <div class="item">
                  <img src="{{ asset('image/gallery-27.jpg')}}">
               </div>
               <div class="item">
                  <img src="{{ asset('image/gallery-28.jpg')}}">
               </div>
               <div class="item">
                  <img src="{{ asset('image/gallery-29.webp')}}">
               </div>
               <div class="item">
                  <img src="{{ asset('image/gallery-30.jpg')}}">
               </div>
            </div>
            <div class="column animate-before">
               <div class="item">
                  <img src="{{ asset('image/gallery-31.jpg')}}">
               </div>
               <div class="item">
                  <img src="{{ asset('image/gallery-32.webp')}}">
               </div>
               <div class="item">
                  <img src="{{ asset('image/gallery-33.jpg')}}">
               </div>
               <div class="item">
                  <img src="{{ asset('image/gallery-4.jpg')}}">
               </div>
               <div class="item">
                  <img src="{{ asset('image/gallery-13.jpg')}}">
               </div>
            </div>
            <div class="column animate-before">
               <div class="item">
                  <img src="{{ asset('image/gallery-16.jpg')}}">
               </div>
               <div class="item">
                  <img src="{{ asset('image/gallery-17.jpg')}}">
               </div>
               <div class="item">
                  <img src="{{ asset('image/gallery-18.jpg')}}">
               </div>
               <div class="item">
                  <img src="{{ asset('image/gallery-19.jpg')}}">
               </div>
               <div class="item">
                  <img src="{{ asset('image/gallery-20.jpg')}}">
               </div>
            </div>
            <div class="column animate-before">
               <div class="item">
                  <img src="{{ asset('image/gallery-21.jpg')}}">
               </div>
               <div class="item">
                  <img src="{{ asset('image/gallery-22.jpg')}}">
               </div>
               <div class="item">
                  <img src="{{ asset('image/gallery-23.jpg')}}">
               </div>
               <div class="item">
                  <img src="{{ asset('image/gallery-24.jpg')}}">
               </div>
               <div class="item">
                  <img src="{{ asset('image/gallery-25.jpg')}}">
               </div>
            </div>
            <div class="column animate-before">
               <div class="item">
                  <img src="{{ asset('image/gallery-1.webp')}}">
               </div>
               <div class="item">
                  <img src="{{ asset('image/gallery-2.jpg')}}">
               </div>
               <div class="item">
                  <img src="{{ asset('image/gallery-3.jpg')}}">
               </div>
               <div class="item">
                  <img src="{{ asset('image/gallery-4.jpg')}}">
               </div>
               <div class="item">
                  <img src="{{ asset('image/gallery-5.jpg')}}">
               </div>
            </div>
            <div class="column animate-before">
               <div class="item">
                  <img src="{{ asset('image/gallery-6.jpg')}}">
               </div>
               <div class="item">
                  <img src="{{ asset('image/gallery-7.jpg')}}">
               </div>
               <div class="item">
                  <img src="{{ asset('image/gallery-8.jpg')}}">
               </div>
               <div class="item">
                  <img src="{{ asset('image/gallery-9.jpg')}}">
               </div>
               <div class="item">
                  <img src="{{ asset('image/gallery-10.webp')}}">
               </div>
            </div>
            <div class="column animate-before">
               <div class="item">
                  <img src="{{ asset('image/gallery-11.png')}}">
               </div>
               <div class="item">
                  <img src="{{ asset('image/gallery-12.webp')}}">
               </div>
               <div class="item">
                  <img src="{{ asset('image/gallery-13.jpg')}}">
               </div>
               <div class="item">
                  <img src="{{ asset('image/gallery-14.webp')}}">
               </div>
               <div class="item">
                  <img src="{{ asset('image/gallery-15.jpg')}}">
               </div>
            </div>
         </div>
         <div class="grid">
            <div class="column animate-before">
               <div class="item">
                  <img src="{{ asset('image/gallery-16.jpg')}}">
               </div>
               <div class="item">
                  <img src="{{ asset('image/gallery-17.jpg')}}">
               </div>
               <div class="item">
                  <img src="{{ asset('image/gallery-18.jpg')}}">
               </div>
               <div class="item">
                  <img src="{{ asset('image/gallery-19.jpg')}}">
               </div>
               <div class="item">
                  <img src="{{ asset('image/gallery-20.jpg')}}">
               </div>
            </div>
            <div class="column animate-before">
               <div class="item">
                  <img src="{{ asset('image/gallery-21.jpg')}}">
               </div>
               <div class="item">
                  <img src="{{ asset('image/gallery-22.jpg')}}">
               </div>
               <div class="item">
                  <img src="{{ asset('image/gallery-23.jpg')}}">
               </div>
               <div class="item">
                  <img src="{{ asset('image/gallery-24.jpg')}}">
               </div>
               <div class="item">
                  <img src="{{ asset('image/gallery-25.jpg')}}">
               </div>
            </div>
            <div class="column animate-before">
               <div class="item">
                  <img src="{{ asset('image/gallery-31.jpg')}}">
               </div>
               <div class="item">
                  <img src="{{ asset('image/gallery-32.webp')}}">
               </div>
               <div class="item">
                  <img src="{{ asset('image/gallery-33.jpg')}}">
               </div>
               <div class="item">
                  <img src="{{ asset('image/gallery-4.jpg')}}">
               </div>
               <div class="item">
                  <img src="{{ asset('image/gallery-13.jpg')}}">
               </div>
            </div>
            <div class="column animate-before">
               <div class="item">
                  <img src="{{ asset('image/gallery-1.webp')}}">
               </div>
               <div class="item">
                  <img src="{{ asset('image/gallery-2.jpg')}}">
               </div>
               <div class="item">
                  <img src="{{ asset('image/gallery-3.jpg')}}">
               </div>
               <div class="item">
                  <img src="{{ asset('image/gallery-4.jpg')}}">
               </div>
               <div class="item">
                  <img src="{{ asset('image/gallery-5.jpg')}}">
               </div>
            </div>
            <div class="column animate-before">
               <div class="item">
                  <img src="{{ asset('image/gallery-11.png')}}">
               </div>
               <div class="item">
                  <img src="{{ asset('image/gallery-12.webp')}}">
               </div>
               <div class="item">
                  <img src="{{ asset('image/gallery-13.jpg')}}">
               </div>
               <div class="item">
                  <img src="{{ asset('image/gallery-14.webp')}}">
               </div>
               <div class="item">
                  <img src="{{ asset('image/gallery-15.jpg')}}">
               </div>
            </div>
            <div class="column animate-before">
               <div class="item">
                  <img src="{{ asset('image/gallery-6.jpg')}}">
               </div>
               <div class="item">
                  <img src="{{ asset('image/gallery-7.jpg')}}">
               </div>
               <div class="item">
                  <img src="{{ asset('image/gallery-8.jpg')}}">
               </div>
               <div class="item">
                  <img src="{{ asset('image/gallery-9.jpg')}}">
               </div>
               <div class="item">
                  <img src="{{ asset('image/gallery-10.webp')}}">
               </div>
            </div>
            <div class="column animate-before">
               <div class="item">
                  <img src="{{ asset('image/gallery-26.jpg')}}">
               </div>
               <div class="item">
                  <img src="{{ asset('image/gallery-27.jpg')}}">
               </div>
               <div class="item">
                  <img src="{{ asset('image/gallery-28.jpg')}}">
               </div>
               <div class="item">
                  <img src="{{ asset('image/gallery-29.webp')}}">
               </div>
               <div class="item">
                  <img src="{{ asset('image/gallery-30.jpg')}}">
               </div>
            </div>
         </div>
      </div>
     

      <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

      <div id="myID" class="bottomMenu hide">
         <!----- login-modal ------->
         <div class="modal fade modal-3" id="login-page" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
               <!--<button type="button" class="close close-modal" data-dismiss="modal" aria-hidden="true"><i class="fal fa-times"></i></button>-->
               <div class="modal-content">
                  <div class="modal-body">
                     <!---------- login-modal --------------->
                     <div class="co_thumps co_sign-in co_sign-in1">
                        <div class="signin-logo">
                           <a href="#"><img src="image/logo.png"></a>
                        </div>
                        <div class="sign-again">
                           <h2>Welcome to Loop</h2>
                           <!-- <p>welcome back, <br> you have been missed !</p> -->
                        </div>
                        <div id="errors" class="help-block"> </div>                     
                        <form  id="loginForm" class="form-horizontal" method="post" action="javascript:void(0)">
                            @csrf
                            <div class="sign-in-form1">
                            <div class="text form-group">
                                 <label class="col-xs-3 control-label"><i class="fal fa-phone-volume"></i></label>
                                 <div class="col-xs-5">
                                    <input type="number" placeholder="Mobile Number" id="customer_mobile" class="login-control" name="customer_mobile">
                                </div>
                              </div>
                              <h3 class="or-1">OR</h3>
                              <div class="text text_1 form-group">
                                 <label class="col-xs-3 control-label"> <i class="fal fa-envelope"></i></label>
                                 <div class="col-xs-5">
                                     <input type="email" placeholder="Email" id="customer_email" class="login-control"  name="customer_email">
                                 </div>
                              </div>
                                <div class="text form-group">
                                <label class="col-xs-3 control-label"> <i class="fal fa-lock-alt"></i></label>
                                <div class="col-xs-5">
                                     <input type="password" placeholder="Password" id="customer_password"  class="login-control" name="customer_password">
                                 </div>
                              </div>
                                <a class="forgot">Forgot Password ?</a>
                             
                                <button class="next" id="send_form">Log in</button>
                                <p class="or">OR Sign in With</p>
                                <div class="face-login">
                                    <div class="face face1">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    </div>
                                    <div class="face gog">
                                        <a href="#"><i class="fab fa-google"></i></a>
                                    </div>
                                </div>
                                <p class="sign-up-link con_5">Not on Loop yet? <a class="sign_link">Sign up</a></p>
                            </div>
                        </form>
                     </div>
                     
                     <!---------- sign-up-modal --------------->
                     <!-- <div class="co_thumps co_thumps1 co_sign-up">
                        <div class="section-1">
                           <div class="login-logo">
                              <a href="#"><img src="image/logo.png"></a>
                           </div>
                        </div>
                        <h3>Tagline Goes Here</h3>
                        <div class="login-section">
                           <div class="line"></div>
                              <h2>Sign Up with below options</h2>
                              <ul class="nav tab-login" role="tablist">
                                 <li class="nav-item">
                                    <div class="col-xs-5">
                                       <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">Phone Number</a>
                                    </div>
                                 </li>
                                 <li class="nav-item">
                                   <div class="col-xs-5">
                                       <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab">Email Address</a>
                                    </div>
                                 </li>
                              </ul>
                                 <div class="tab-content">
                                    <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                          <div class="form-group">
                                             <input id="cust_phone" name="cust_phone" type="tel" placeholder="Phone Number">
                                          </div>
                                    </div>
                                    <div class="tab-pane Tab2 form-group" id="tabs-2" role="tabpanel">
                                          <input type="email" placeholder="Enter Email" id="cust_email" name="cust_email">
                                    </div>
                                 </div>
                                <button id="signup-btn" class="next con_2">next</button>
                        </div>
                     </div> -->

                     <!---------- user-modal --------------->
                     <div class="co_thumps co_user">
                        <h2><i class="arrow fal fa-chevron-left"></i>Welcome to Loop</h2>
                        <div class="upload-img">
                           <input type="file" id="file-upload" multiple required />
                           <label for="file-upload"><i class="choose-img fal fa-image"></i></label>
                           <div id="file-upload-filename"></div>
                           <div class="pencial-icon">
                              <i class="fas fa-pencil-alt"></i>
                           </div>
	                  	</div>
                        <div class="user-form">
                           <form  id="signup-form" class="form-horizontal" method="post" action="javascript:void(0)">
                              @csrf
                              <div class="line"></div>
                              <div id="reg_error" class="help-block"> </div>  
                              <div class="text form-group">
                                 <label class="col-xs-3 control-label"> <i class="fal fa-user"></i></label>
                                 <div class="col-xs-5">
                                    <input type="text" class="login-control" placeholder="Name" name="cust_name" id="cust_name" >
                                 </div>   
                              </div>
                              <!-- <div class="text">
                                 <i class="fal fa-user"></i>
                                 <input type="text" placeholder="Gender" name="Gender" value="" required>
                              </div> -->
                              <div class="text form-group">
                                 <label class="col-xs-3 control-label"> <i class="fas fa-mobile-alt"></i></label>
                                 <div class="col-xs-5">
                                    <input type="number" class="login-control" placeholder="Mobile Number" name="cust_mobile" id="cust_mobile">
                                 </div>
                              </div>
                              <div class="text form-group">
                                 <label class="col-xs-3 control-label">  <i class="fal fa-envelope"></i></label>
                                 <div class="col-xs-5">
                                    <input type="email" class="login-control" placeholder="Email" name="cust_email" id="cust_email">
                                 </div>
                              </div>
                              <div class="text form-group">
                                 <label class="col-xs-3 control-label"><i class="fal fa-lock-alt"></i></label>
                                 <div class="col-xs-5">
                                    <input type="password" class="login-control" placeholder="Password" name="cust_password" id="cust_password">
                                 </div>
                              </div>
                              <div class="text form-group">
                                 <label class="col-xs-3 control-label"><i class="fal fa-lock-alt"></i></label>
                                 <div class="col-xs-5">
                                    <input type="password" class="login-control" placeholder="Confirm Password" name="confirm_password" id="confirm_password">
                                 </div>
                              </div>
                              <div class="text text1 text_gender form-group">
                                 <p>
                                    <input type="radio" id="setD_male" name="gender" value="1" checked>
                                    <label for="setD_male">Male</label>
                                 </p>
                                 <p>
                                    <input type="radio" id="setD_female" name="gender" value="0">
                                    <label for="setD_female">Female</label>
                                 </p>
	        			            </div>
                              <button id="signup-btn" class="next">Continue</button>
                           </form>

                           <p class="sign-up-link con_4">Already have an account ? <a class="sign_link">Log In</a></p>
                        </div>
                     </div>

                     <!---------- forgot password-modal --------------->
                     <div class="co_thumps co_thumps1 co_sign-in co_for">
                        <h2><i class="arrow fal fa-chevron-left"></i>Forgot Password</h2>
                        <div class="sign-again">
                           <!-- <h3>forgot your password ?</h3> -->
                           <p>Enter your register email below to receive password reset instruction</p>
                        </div>
                        <div class="sign-in-form1">
                              <form  id="forgot-password-form" class="form-horizontal" method="post" action="javascript:void(0)">
                                 @csrf
                                 <div id="fp_otp_error" class="help-block"> </div>  
                                 <div class="text form-group">
                                    <label class="col-xs-3 control-label"><i class="fal fa-phone-volume"></i></label>
                                    <div class="col-xs-5">
                                       <input type="number" placeholder="Phone Number" name="fp_mobile" id="fp_mobile" >
                                    </div>
                                 </div>
                                 <h3 class="or-1">OR</h3>
                                 <div class="text text_1">
                                    <label class="col-xs-3 control-label"> <i class="fal fa-envelope"></i></label>
                                    <div class="col-xs-5">
                                       <input type="email" placeholder="E-Mail" name="fp_email" id="fp_email" >
                                    </div>
                                 </div>
                                 <button class="next con_6">Continue</button>
                              </form>
                           <p class="or"><a>Back to Login</a></p>
                        </div>
                     </div>

                     <!---------- OTP-modal --------------->
                     <div class="co_thumps co_thumps1 co_confirm co_confirm1">
                        <h2><i class="arrow fal fa-chevron-left"></i></h2>
                        <div class="confirm-section">
                           <h6>Enter 4 digits verification code sent to your mobile/email</h6>
                           <form  id="otp-form" class="form-horizontal" method="post" action="javascript:void(0)">
                              @csrf
                              <input type="hidden" id="user_id" name="user_id">
                              <div class="form-group">
                                 <input class="otp login-control" name="access_token" id="access_token" type="text" maxlength=4 >
                              </div>
                               <div id="otp_error" class="help-block"> </div>
                              <button class='btn customBtn'>Verify OTP</button>
                           </form>
                          
                        </div>
                     </div>

                     <!---------- Forgot password OTP-modal --------------->
                     <div class="co_thumps co_thumps1 fp_co_confirm co_confirm1">
                        <h2><i class="arrow fal fa-chevron-left"></i></h2>
                        <div class="confirm-section">
                           <h6>Enter 4 digits verification code sent to your mobile/email</h6>
                           <form  id="fp-otp-form" class="form-horizontal" method="post" action="javascript:void(0)">
                              @csrf
                              <input type="hidden" id="fp_user_id" name="fp_user_id">
                              <div class="form-group">
                                 <input class="otp login-control" name="fp_access_token" id="fp_access_token" type="number" maxlength=4 >
                              </div>
                               <div id="scroll_otp_error" class="help-block"> </div>
                              <button class='btn customBtn'>Verify OTP</button>
                           </form>
                        </div>
                     </div>

                     <!---------- reset password-modal --------------->
                     <div class="co_thumps co_thumps1 co_sign-in co_reset">
                        <h2><i class="arrow fal fa-chevron-left"></i>Reset Password</h2>
                        <div class="sign-again">
                           <p>Your new password must be different from previously used password</p>
                        </div>
                        <div id="reset-error" class="help-block"> </div>
                        <div class="sign-in-form1">
                           <form id="reset-form" class="form-horizontal" method="post" action="javascript:void(0)">
                           @csrf
                           <input type="hidden" id="re_user_id" name="re_user_id">
                           
                              <div class="text form-group">
                                 <label class="col-xs-3 control-label"> <i class="fal fa-lock-alt"></i></label>
                                 <div class="col-xs-5">
                                    <input type="password" placeholder="New Password" name="reset_assword" id="reset_assword">
                                 </div>
                              </div>
                              <div class="text form-group">
                                 <label class="col-xs-3 control-label"> <i class="fal fa-lock-alt"></i></label>
                                 <div class="col-xs-5">
                                    <input type="password" placeholder="Confirm Password" name="reset_confirm_password" id="reset_confirm_password">
                                 </div>
                              </div>
                              <button class="next">Create & Save</button>
                           </form>
                           
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- <div class="modal-footer1">
            <ul>
               <li><a href="#">Terms of Service</a></li>
               <li><a href="#">Privacy Policy</a></li>
               <li><a href="#">Help</a></li>
               <li><a href="#">iPhone App</a></li>
               <li><a href="#">Android App</a></li>
               <li><a href="#">Users</a></li>
               <li><a href="#">Collections</a></li>
               <li><a href="#">Today</a></li>
               <li><a href="#">Explore</a></li>
            </ul>
         </div> -->
          <a href="javascript:" id="return-to-top" class="scroll_1"><i class="fal fa-angle-double-up"></i></a>
      </div> 
      <a href="#" class="scroll_1 scroll-down" address="true"><i class="fal fa-angle-double-down"></i></a>


 
   <!----- login-modal ------->
      <div class="modal fade modal-3" id="login-page1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
            <button type="button" class="close close-modal" data-dismiss="modal" aria-hidden="true"><i class="fal fa-times"></i></button>
            <div class="modal-content">
               <div class="modal-body">
                  <!---------- login-modal --------------->
                  <div class="co_thumps co_sign-in co_sign-in1">
                    
                       <div class="signin-logo">
                           <a href="#"><img src="image/logo.png"></a>
                        </div>

                         <div class="sign-again">
                           <h2>Welcome to Loop</h2>
                           <!-- <p>welcome back, <br> you have been missed !</p> -->
                        </div>
                     <div class="sign-in-form1">
                       <div id="head_errors" class="help-block"> </div>                     
                        <form  id="head_loginForm" class="form-horizontal" method="post" action="javascript:void(0)">
                            @csrf
                            <div class="text form-group">
                               <label class="col-xs-3 control-label"><i class="fal fa-phone-volume"></i></label>
                                <div class="col-xs-5">
                              <input type="number" placeholder="Mobile Number" id="head_customer_mobile" class="login-control" name="head_customer_mobile" >
                           </div>
                               
                            </div>
                              <h3 class="or-1">OR</h3>   

                             <div class="text text_1 form-group">
                              <label class="col-xs-3 control-label"> <i class="fal fa-envelope"></i></label>
                                <div class="col-xs-5">
                                 <input type="email" placeholder="Email" id="head_customer_email" name="head_customer_email" >
                              </div> 
                           </div>

                        
                           <div class="text form-group">
                              <label class="col-xs-3 control-label"> <i class="fal fa-lock-alt"></i></label>
                                <div class="col-xs-5">
                              <input type="password" placeholder="Password"  id="head_customer_password"  name="head_customer_password">
                           </div>
                           </div>
                           <a class="forgot">Forgot Password ?</a>

                            <button class="next" id="log_in">Log in</button>
                        </form>
                       
                        <p class="or">OR Sign in With</p>
                        <div class="face-login">
                           <div class="face face1">
                              <a href="#"><i class="fab fa-facebook-f"></i></a>
                           </div>
                           <div class="face gog">
                              <a href="#"><i class="fab fa-google"></i></a>
                           </div>
                        </div>
                        <p class="sign-up-link con_5">Not on Loop yet? <a class="sign_link">Sign-Up</a></p>
                     </div>
                  </div>
                     
                  <!---------- sign-up-modal --------------->
                  <!-- <div class="co_thumps co_thumps1 co_sign-up">
                     <div class="section-1">
                        <div class="login-logo">
                           <a href="#"><img src="image/logo.png"></a>
                        </div>
                     </div>
                     <h3>Tagline Goes Here</h3>
                     <div class="login-section">
                        <div class="line"></div>
                           <h2>Sign Up with below options</h2>
                           <ul class="nav tab-login" role="tablist">
                              <li class="nav-item">
                                 <a class="nav-link active" data-toggle="tab" href="#tabs-3" role="tab">Phone Number</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" data-toggle="tab" href="#tabs-4" role="tab">Email Address</a>
                              </li>
                           </ul>
                           <div class="tab-content">
                              <div class="tab-pane active" id="tabs-3" role="tabpanel">
                                 <form method="post" action="#" accept-charset="utf-8">
                                    <div>
                                       <input class="num_1" type="tel" placeholder="Phone Number">
                                    </div>
                                 </form>
                              </div>
                              <div class="tab-pane Tab2" id="tabs-4" role="tabpanel">
                                 <form>
                                    <input type="email" placeholder="Enter Email" name="">
                                  </form>
                              </div>
                           </div>
                        <button class="next con_2">next</button>
                     </div>
                  </div> -->

                  <!---------- user-modal --------------->
                  <div class="co_thumps co_user">
                        <h2><i class="arrow fal fa-chevron-left"></i>Welcome to Loop</h2>
                        <div class="upload-img">
                           <input type="file" id="file-upload" multiple required />
                           <label for="file-upload"><i class="choose-img fal fa-image"></i></label>
                           <div id="file-upload-filename"></div>
                           <div class="pencial-icon">
                              <i class="fas fa-pencil-alt"></i>
                           </div>
                        </div>
                        <div class="user-form">
                           <form  id="head_signup-form" class="form-horizontal" method="post" action="javascript:void(0)">
                              @csrf
                              <div class="line"></div>
                              <div id="_head_reg_error" class="help-block"> </div>  
                              <div class="text form-group">
                                 <label class="col-xs-3 control-label"> <i class="fal fa-user"></i></label>
                                 <div class="col-xs-5">
                                    <input type="text" class="login-control" placeholder="Name" name="head_cust_name" id="head_cust_name" >
                                 </div>   
                              </div>
                             
                              <div class="text form-group">
                                 <label class="col-xs-3 control-label"> <i class="fas fa-mobile-alt"></i></label>
                                 <div class="col-xs-5">
                                    <input type="number" class="login-control" placeholder="Mobile Number" name="head_cust_mobile" id="head_cust_mobile">
                                 </div>
                              </div>
                              <div class="text form-group">
                                 <label class="col-xs-3 control-label">  <i class="fal fa-envelope"></i></label>
                                 <div class="col-xs-5">
                                    <input type="email" class="login-control" placeholder="Email" name="head_cust_email" id="head_cust_email">
                                 </div>
                              </div>
                              <div class="text form-group">
                                 <label class="col-xs-3 control-label"><i class="fal fa-lock-alt"></i></label>
                                 <div class="col-xs-5">
                                    <input type="password" class="login-control" placeholder="Password" name="head_cust_password" id="head_cust_password">
                                 </div>
                              </div>
                              <div class="text form-group">
                                 <label class="col-xs-3 control-label"><i class="fal fa-lock-alt"></i></label>
                                 <div class="col-xs-5">
                                    <input type="password" class="login-control" placeholder="Confirm Password" name="head_confirm_password" id="head_confirm_password">
                                 </div>
                              </div>
                              <div class="text text1 text_gender form-group">
                                 <p>
                                    <input type="radio" id="head_setD_male" name="head_gender" value="1" checked>
                                    <label for="head_setD_male">Male</label>
                                 </p>
                                 <p>
                                    <input type="radio" id="head_setD_female" name="head_gender" value="0">
                                    <label for="head_setD_female">Female</label>
                                 </p>
                              </div>
                              <button id="head_signup-btn" class="next">Continue</button>
                           </form>

                           <p class="sign-up-link con_4">Already have an account ? <a class="sign_link">Log In</a></p>
                        </div>
                     </div>

                  <!---------- forgot password-modal --------------->
                  <div class="co_thumps co_thumps1 co_sign-in co_for">
                     <h2><i class="arrow fal fa-chevron-left"></i>Forgot Password</h2>
                     <div class="sign-again">
                        <!-- <h3>forgot your password ?</h3> -->
                        <p>Enter your register email below to receive password reset instruction</p>
                     </div>
                     <div class="sign-in-form1">
                        <form id="head_forgot-password-form" class="form-horizontal" method="post" action="javascript:void(0)">
                           @csrf
                           <div id="head_fp_otp_error" class="help-block"> </div>  
                           <div class="text form-group">
                              <label class="col-xs-3 control-label"><i class="fal fa-phone-volume"></i></label>
                              <div class="col-xs-5">
                                 <input type="number" placeholder="Phone Number" name="head_fp_mobile" id="head_fp_mobile">
                              </div>
                           </div>
                           <h3 class="or-1">OR</h3>
                           <div class="text text_1 form-group">
                              <label class="col-xs-3 control-label"> <i class="fal fa-envelope"></i></label>
                              <div class="col-xs-5">
                                 <input type="email" placeholder="E-Mail" name="head_fp_email" id="head_fp_email">
                              </div>
                           </div>
                           <button class="next con_6">Continue</button>
                        </form>
                        <p class="or"><a>Back to Login</a></p>
                     </div>
                  </div>

                  <!---------- OPT-modal --------------->
                  <div class="co_thumps co_thumps1 fp_co_confirm co_confirm1">
                     <h2><i class="arrow fal fa-chevron-left"></i></h2>
                     <div class="confirm-section">
                     <h6>Enter 4 digits verification code sent to your mobile/email</h6>
                           <form  id="head-otp-form" class="form-horizontal" method="post" action="javascript:void(0)">
                              @csrf
                              <input type="hidden" id="head_user_id" name="re_user_id">
                              <div class="form-group">
                                 <input class="otp login-control" name="head_access_token" id="head_access_token" type="number" maxlength=4 >
                              </div>
                               <div id="head_otp_error" class="help-block"> </div>
                              <button class='btn customBtn'>Verify OTP</button>
                           </form>
                     </div>
                  </div>

                  <!---------- reset password-modal --------------->
                  <div class="co_thumps co_thumps1 co_sign-in co_reset head_co_reset">
                     <h2><i class="arrow fal fa-chevron-left"></i>reset password</h2>
                    <div id="head_reset-error" class="help-block"> </div>
                     <div class="sign-again">
                        <p>Your new password must be different from previously used password</p>
                     </div>
                     <div class="sign-in-form1">
                        <form id="head_reset-form" class="form-horizontal" method="post" action="javascript:void(0)"> 

                            @csrf

                              <input type="hidden" id="head_user_id" value="" name="head_user_id">

                           <div class="text  form-group">
                                 <label class="col-xs-3 control-label"> <i class="fal fa-lock-alt"></i></label>
                            <div class="col-xs-5">
                              <input type="password" placeholder="New Password" name="head_reset_password" id="head_reset_password" required>
                           </div>
                         </div>
                           <div class="text form-group">
                            <label class="col-xs-3 control-label"> <i class="fal fa-lock-alt"></i></label>
                             <div class="col-xs-5">
                              <input type="password" placeholder="Confirm Password" name="head_reset_confirm_password" id="head_reset_confirm_password" required>
                            </div>
                           </div>
                            <button class="next">Create & Save</button>
                        </form>
                       
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   


<style type="text/css">
   .bottomMenu.show+ a.scroll_1.scroll-down {
      opacity: 0;
   }
   .scroll_1 i {
      bottom: 10px;
      left: 50%;
      transform: translateY(-50%);
      display: block;
      width: 50px;
      height: 50px;
      line-height: 50px;
      overflow: hidden;
      position: fixed;
      text-decoration: none;
      font-size: 29px;
      z-index: 9;
      color: white;
      background: #ff9400;
      opacity: 1;
      text-align: center;
      font-weight: 500;
      animation: mover 1s infinite alternate;
      box-shadow: 0 1px 4px rgb(0 0 0 / 30%), 0 0 40px rgb(0 0 0 / 10%) inset;
   }
   @keyframes mover {
      0% { transform: translateY(0); }
      100% { transform: translateY(-15px); }
   }
   .body {
      height: 70%;
   }
   .bottomMenu {
      position: fixed;
      bottom: 0;
      width: 100%;
      z-index: 1;
      transition: all .5s;
   }
   .show .modal-3{
      display: block!important;
      opacity: 1!important;
   }
   .hide .modal{
      display: none!important;
   }
   .hide {
      opacity:0;   
   }
   .show {
      opacity:1; 
   }
   .modal-footer1 {
      background: #ff9400;
      height: 50px;
      text-align: center;
      line-height: 50px;
      position: relative;
      z-index: 99999;
   }
   .modal-footer1 ul{
      padding: 0;
      margin: 0;
   }
   .modal-footer1 li{
      display: inline-block;
      margin: 0px 10px;
   }
   .modal-footer1 li a {
      color: white;
      font-size: 15px;
      font-weight: 400;
   }
   .modal-footer1 li a:hover {
      color: white;
      text-decoration: none;
   }
   .bottomMenu.hide #return-to-top {
      opacity: 0;
   }
   .bottomMenu.show #return-to-top {
      opacity: 1;
      position: relative;
      z-index: 999999;
   }
   #return-to-top i {
      z-index: 9999999!important;
      bottom: 42px;
   }
   .bottomMenu .modal{
      background: rgb(0 0 0 / 70%);
   }
   #myID .modal .close-modal{
      z-index: 9999999!important;
   }
   .sign_link{
      color: #ff9400;
      cursor: pointer;
   }
   .forgot, .or{
      cursor: pointer;
   }
   #user-page-1 .co_sign-up {
      display: block;
   } 
   #login-page1 .co_sign-in1 {
      display: none;
   } 
   .login-section .num_1 {
       width: 76%;
       margin-left: 1px!important;
   }
   .container2 {
       margin-bottom: 31px;
   }
   .fp_co_confirm {
      display :none;
   }

   
</style>     
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/12.1.6/js/intlTelInput.min.js"></script>
      <script src="{{ asset('js/script.js') }}"></script>
      <script type="text/javascript">
//       let digitValidate = function(ele){
//   console.log(ele.value);
//   ele.value = ele.value.replace(/[^0-9]/g,'');
// }

// let tabChange = function(val){
//     let ele = document.querySelectorAll('input');
//     if(ele[val-1].value != ''){
//       ele[val].focus()
//     }else if(ele[val-1].value == ''){
//       ele[val-2].focus()
//     }   
//  } 
         $(function() {
            $('.scroll-down').click (function() {
               $('html, body').animate({scrollTop: $(this).offset().top }, 'slow');
               return false;
            });
         });

         $(window).scroll(function() {
            if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
               $('#return-to-top').fadeIn(200);    // Fade in the arrow
            } 
            else {
               $('#return-to-top').fadeOut(200);   // Else fade out the arrow
            }
         });
         $('#return-to-top').click(function() {      // When arrow is clicked
            $('body,html').animate({
               scrollTop : 0                       // Scroll to top of body
            }, 500);
         });

         myID = document.getElementById("myID");
         var myScrollFunc = function () {
             var y = window.scrollY;
             if (y >= 800) {
                 myID.className = "bottomMenu show"
             } else {
                 myID.className = "bottomMenu hide"
             }
         };
         window.addEventListener("scroll", myScrollFunc);

         $(document).ready(function(){
            $('.close').click(function(){
               $('.modal').hide();
            });
         });

         $('.forgot').click(function(){
            $('.co_for').show();
            $('.co_sign-in1').hide();
         });

         $('.user-icon i').click(function(){
            $('.co_sign-in1').show();
            $('.co_user').hide();
            $('.co_for').hide();
            $('.co_reset').hide();
         });

         $('.or a').click(function(){
            $('.co_sign-in1').show();
            $('.co_for').hide();
         });

         $('.con_5').click(function(){
            // $('.co_sign-up').show();
            $('.co_user').show();
            $('.co_sign-in1').hide();
            $('.con_7').hide();
         });

         // $('.con_2').click(function(){
         //    $('.co_confirm').show();
         //    $('.co_sign-up').hide();
         //    $('.con_7').hide();
         // });

         $('.con_3').click(function(){
            $('.co_user').show();
            $('.co_confirm').hide();
         });

         $('.con_4').click(function(){
            $('.co_sign-in1').show();
            $('.co_user').hide();
         });

         $('.con_6').click(function(){
            // $('.co_confirm').show();
            $('.co_for').hide();
            $('.con_3').hide();
            $('.con_7').show();
         });

         $('.con_7').click(function(){
            // $('.co_reset').show();
            $('.co_confirm').hide();
         });

         $('.login').click(function(){
            // alert('huuuu');
            $('.co_sign-in1').show();
            $('.co_sign-up').hide();
            $('.co_user').hide();
            $('.co_for').hide();
            $('.co_reset').hide();
            $('.co_confirm').hide();
            $("#myID").removeClass("bottomMenu hide");
         });

         $('.signup').click(function(){
            // $('.co_sign-up').show();
            $('.co_user').show();
            $('.co_sign-in1').hide();
            // $('.co_user').hide();
            $('.co_for').hide();
            $('.co_reset').hide();
            $('.co_confirm').hide();
         });



         let telInput = $("#phone")

// initialize
telInput.intlTelInput({
    initialCountry: 'auto',
    preferredCountries: ['us','gb','br','ru','cn','es','it'],
    autoPlaceholder: 'aggressive',
    utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/12.1.6/js/utils.js",
    geoIpLookup: function(callback) {
        fetch('https://ipinfo.io/json', {
            cache: 'reload'
        }).then(response => {
            if ( response.ok ) {
                 return response.json()
            }
            throw new Error('Failed: ' + response.status)
        }).then(ipjson => {
            callback(ipjson.country)
        }).catch(e => {
            callback('us')
        })
    }
});

let telInput2 = $("#country_code")

// initialize
telInput2.intlTelInput({
    initialCountry: 'br',
    preferredCountries: ['us','gb','br','ru','cn','es','it'],
    autoPlaceholder: 'aggressive',
    utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/12.1.6/js/utils.js"
});



     
$(document).ready(function() {

$('#loginForm').validate({
    rules: {
        customer_email: {
          required: '#customer_mobile:blank'
         },
        customer_mobile: {
            required: '#customer_email:blank'
        },
        customer_password: {
            minlength: 3,
            maxlength: 15,
            required: true
        }
    },
    highlight: function(element) {
        $(element).closest('.form-group').addClass('has-error');
    },
    unhighlight: function(element) {
        $(element).closest('.form-group').removeClass('has-error');
    },
    errorElement: 'span',
    errorClass: 'help-block',
    errorPlacement: function(error, element) {
        if (element.parent('.input-group').length) {
            error.insertAfter(element.parent());
        } else {
            error.insertAfter(element);
        }
    },
    submitHandler: function (form) {
        $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });
      $('#send_form').html('Sending..');
        // var param = $("#sendmessage").serialize();

        // let name = $('#name').val();
        // let email = $('#email').val();
        // let mobile_number = $('#mobile_number').val();
        // let subject = $('#subject').val();
        // let message = $('#message').val();

            $.ajax({
            url: "/Customer/login",
            type:"POST",
            data: $('#loginForm').serialize(),
            async: true,
          cache: false,
            success:function(response){
                if(response.status == 1) {
                  //  alert(response.status);
                    document.getElementById("loginForm").reset();
                    window.location.href = "<?php echo URL::to('Home/index'); ?>";
                } else {
                    
                    $('#errors').html(response.Message);
                    $('#errors').fadeIn().delay(3000).fadeOut();

                    document.getElementById("loginForm").reset();

                }
                $('#send_form').html('Log In');
            },
            error:function (err) {
                if (err.status == 422) { // when status code is 422, it's a validation issue
            console.log(err.responseJSON);
                // $('#errors').fadeIn().html(err.responseJSON.message);
                // you can loop through the errors object and show it to the user
                // console.warn(err.responseJSON.errors);
                // display errors on each form field
                $.each(err.responseJSON.errors, function (i, error) {
                    var el = $(document).find('[name="'+i+'"]');
                    el.after($('<span class="filed-error" style="color: #a94442;">'+error[0]+'</span>'));
                });
                $('.filed-error').fadeIn().delay(3000).fadeOut();

             
                document.getElementById("loginForm").reset();
                // $("#loginForm").validate().resetForm();

                // $("#loginForm").find('.filed-error').removeClass("filed-error");
                // $("#loginForm").find('.has-success').removeClass("has-success");
                // $('#loginForm').find('.form-control-feedback').remove()
                $('#send_form').html('Log In');

        }
           }
            });
          }
    });
    //upload image jquery

      var input = document.getElementById( 'file-upload' );
      var infoArea = document.getElementById( 'file-upload-filename' );

      input.addEventListener( 'change', showFileName );

      function showFileName( event ) {
      
      // the change event gives us the input it occurred in 
      var input = event.srcElement;
      
      // the input has an array of files in the `files` property, each one has a name that you can use. We're just using the name here.
      var fileName = input.files[0].name;
      
      // use fileName however fits your app best, i.e. add it into a div
      infoArea.textContent = 'File name: ' + fileName;
      }


    /** sign up form  */

    $('#signup-form').validate({
    rules: {
      cust_name : {
         required: true
        },
        cust_mobile: {
          required: '#cust_email:blank'
         },
         cust_email: {
            required: '#cust_mobile:blank',
            email: true
        },
        cust_password : {
         required: true,
         minlength:6
        },
        confirm_password :{
            required: true,
            minlength: 6,
            equalTo: "#cust_password"
        },
        messages: {
         confirm_password : {
            equalTo: "Please enter the same password"
         }
        }
       
   
    },
    highlight: function(element) {
        $(element).closest('.form-group').addClass('has-error');
    },
    unhighlight: function(element) {
        $(element).closest('.form-group').removeClass('has-error');
    },
    errorElement: 'span',
    errorClass: 'help-block',
    errorPlacement: function(error, element) {
        if (element.parent('.input-group').length) {
            error.insertAfter(element.parent());
        } else {
            error.insertAfter(element);
        }
    },
    submitHandler: function (form) {
        $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });
      $('#signup-btn').html('Sending..');
         $.ajax({
            url: "/Customer/register",
            type:"POST",
            data: $('#signup-form').serialize(),
            async: true,
          cache: false,
            success:function(response){
               console.log(response);
                if(response.status == 1) {
                    document.getElementById("signup-form").reset();
                    var user_id = response.data.id;
                    console.log(user_id);
                    $('.co_confirm').show();
                    $("#user_id").val( user_id );
                    $('.co_user').hide();
                    
                } else {
                    
                    $('#reg_error').html(response.Message);
                    $('#reg_error').fadeIn().delay(3000).fadeOut();

                    document.getElementById("signup-form").reset();

                }
                $('#signup-btn').html('Next');
            },
            error:function (err) {
                if (err.status == 422) {
                      console.log(err.responseJSON);
            
                $.each(err.responseJSON.errors, function (i, error) {
                    var el = $(document).find('[name="'+i+'"]');
                    el.after($('<span class="filed-error" style="color: #a94442;">'+error[0]+'</span>'));
                });
                $('.filed-error').fadeIn().delay(3000).fadeOut();
                document.getElementById("signup-form").reset();
                $('#signup-btn').html('Continue');

               }
           }
            });
          }
    });


    /** OTP Form */
    $('#otp-form').validate({
    rules: {
      access_token : {
         required: true,
         minlength:4
        }   
    },
    highlight: function(element) {
        $(element).closest('.form-group').addClass('has-error');
    },
    unhighlight: function(element) {
        $(element).closest('.form-group').removeClass('has-error');
    },
    errorElement: 'span',
    errorClass: 'help-block',
    errorPlacement: function(error, element) {
        if (element.parent('.input-group').length) {
            error.insertAfter(element.parent());
        } else {
            error.insertAfter(element);
        }
    },
    submitHandler: function (form) {
        $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });
      // $('#signup-btn').html('Sending..');
         $.ajax({
            url: "/Customer/verifyOTP",
            type:"POST",
            data: $('#otp-form').serialize(),
            async: true,
          cache: false,
            success:function(response){
               console.log(response);
                if(response.status == 1) {
                    document.getElementById("otp-form").reset();
                    var user_id = response.data.id;
                    $("#user_id").val( user_id );
                    window.location.href = "<?php echo URL::to('Home/index'); ?>";
                    
                } else {
                    
                    $('#otp_error').html(response.Message);
                    $('#otp_error').fadeIn().delay(3000).fadeOut();

                    document.getElementById("otp-form").reset();

                }
            },
            error:function (err) {
                if (err.status == 422) {
                      console.log(err.responseJSON);
            
                $.each(err.responseJSON.errors, function (i, error) {
                    var el = $(document).find('[name="'+i+'"]');
                    el.after($('<span class="filed-error" style="color: #a94442;">'+error[0]+'</span>'));
                });
                $('.filed-error').fadeIn().delay(3000).fadeOut();
                document.getElementById("otp-form").reset();

               }
           }
            });
          }
    });
    /**
     * sign in from header 
     * 
     */
    $('#head_loginForm').validate({
    

    rules: {
        head_customer_email: {
          required: '#head_customer_mobile:blank'
         },
        head_customer_mobile: {
            required: '#head_customer_email:blank'
        },
        head_customer_password: {
            minlength: 3,
            maxlength: 15,
            required: true
        }

    },
    highlight: function(element) {
        $(element).closest('.form-group').addClass('has-error');
    },
    unhighlight: function(element) {
        $(element).closest('.form-group').removeClass('has-error');
    },
    errorElement: 'span',
    errorClass: 'help-block',
    errorPlacement: function(error, element) {
        if (element.parent('.input-group').length) {
            error.insertAfter(element.parent());
        } else {
            error.insertAfter(element);
        }
    },
    submitHandler: function (from) {
        $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });
      $('#log_in').html('Sending..');
        // var param = $("#sendmessage").serialize();

        let customer_email = $('#head_customer_email').val();
        let customer_mobile = $('#head_customer_mobile').val();
        let customer_password = $('#head_customer_password').val();
       /* let subject = $('#subject').val();
        let message = $('#message').val();
   */
            $.ajax({
            url: "/Customer/login",
            type:"POST",
            data:


            {
               'customer_email': customer_email,
                'customer_mobile': customer_mobile,
                 'customer_password': customer_password,

            },
            async: true,
          cache: false,
            success:function(response){
                if(response.status == 1) {
                  //  alert(response.status);
                    document.getElementById("loginForm").reset();
                    window.location.href = "<?php echo URL::to('Home/index'); ?>";
                } else {
                    
                    $('#head_errors').html(response.Message);
                    $('#head_errors').fadeIn().delay(3000).fadeOut();

                    document.getElementById("head_loginForm").reset();

                }
                $('#log_in').html('Log In');
            },
            error:function (err) {
                if (err.status == 422) { // when status code is 422, it's a validation issue
            console.log(err.responseJSON);

           document.getElementById("head_loginForm").reset();

        
                // $('#errors').fadeIn().html(err.responseJSON.message);
                // you can loop through the errors object and show it to the user
                // console.warn(err.responseJSON.errors);
                // display errors on each form field
                $.each(err.responseJSON.errors, function (i, error) {
                    var el = $(document).find('[name="'+i+'"]');
                    el.after($('<span class="filed-error" style="color: #a94442;">'+error[0]+'</span>'));
                });
                $('.filed-error').fadeIn().delay(3000).fadeOut();

              
                /*document.getElementById("head_loginForm").reset();*/
                /* $("#head_loginForm").validate().resetForm();*/

                 $('#head_loginForm').trigger("reset");

                // $("#loginForm").find('.filed-error').removeClass("filed-error");
                // $("#loginForm").find('.has-success').removeClass("has-success");
                // $('#loginForm').find('.form-control-feedback').remove()
                $('#log_in').html('Log In');

        }
           }
            });
          }
    });

    /***
     * Signup From Header
     * 
     */
    $('#head_signup-form').validate({
    rules: {
      head_cust_name : {
         required: true
        },
        head_cust_mobile: {
          required: '#head_cust_email:blank'
         },
         head_cust_email: {
            required: '#head_cust_mobile:blank',
            email: true
        },
        head_cust_password : {
         required: true,
         minlength:6
        },
        head_confirm_password :{
            required: true,
            minlength: 6,
            equalTo: "#head_cust_password"
        },
        messages: {
         head_confirm_password : {
            equalTo: "Please enter the same password"
         }
        }
       
   
    },
    highlight: function(element) {
        $(element).closest('.form-group').addClass('has-error');
    },
    unhighlight: function(element) {
        $(element).closest('.form-group').removeClass('has-error');
    },
    errorElement: 'span',
    errorClass: 'help-block',
    errorPlacement: function(error, element) {
        if (element.parent('.input-group').length) {
            error.insertAfter(element.parent());
        } else {
            error.insertAfter(element);
        }
    },
    submitHandler: function (form) {
        $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });
      $('#head_signup-btn').html('Sending..');

        let cust_name = $('#head_cust_name').val();
        let cust_email = $('#head_cust_email').val();
        let cust_mobile = $('#head_cust_mobile').val();
        let cust_password = $('#head_cust_password').val();
        let gender = $("input[name='head_gender']:checked").val();


         $.ajax({
            url: "/Customer/register",
            type:"POST",
           data:
            {
                'cust_name': cust_name,
                'cust_email': cust_email,
                'cust_mobile': cust_mobile,
                'cust_password': cust_password,
                'gender': gender,

            },
            async: true,
          cache: false,
            success:function(response){
               console.log(response);
                if(response.status == 1) {
                    document.getElementById("head_signup-form").reset();
                    var user_id = response.data.id;
                    console.log(user_id);
                    $('.co_confirm').show();
                    $("#head_user_id").val( user_id );
                    $('.co_user').hide();
                    
                } else {
                    
                    $('#_head_reg_error').html(response.Message);
                    $('#_head_reg_error').fadeIn().delay(3000).fadeOut();

                    document.getElementById("head_signup-form").reset();

                }
                $('#head_signup-btn').html('Next');
            },
            error:function (err) {
                if (err.status == 422) {
                      console.log(err.responseJSON);
            
                $.each(err.responseJSON.errors, function (i, error) {
                    var el = $(document).find('[name="'+i+'"]');
                    el.after($('<span class="filed-error" style="color: #a94442;">'+error[0]+'</span>'));
                });
                $('.filed-error').fadeIn().delay(3000).fadeOut();
                document.getElementById("signup-form").reset();
                $('#head_signup-btn').html('Continue');

               }
           }
            });
          }
    });


    /** HEAD OTP Form */
    $('#head-otp-form').validate({
    rules: {
      head_access_token : {
         required: true,
         minlength:4
        }   
    },
    highlight: function(element) {
        $(element).closest('.form-group').addClass('has-error');
    },
    unhighlight: function(element) {
        $(element).closest('.form-group').removeClass('has-error');
    },
    errorElement: 'span',
    errorClass: 'help-block',
    errorPlacement: function(error, element) {
        if (element.parent('.input-group').length) {
            error.insertAfter(element.parent());
        } else {
            error.insertAfter(element);
        }
    },
    submitHandler: function (form) {
        $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });
      // $('#signup-btn').html('Sending..');

         let head_user_id = $('#head_user_id').val();
         let head_access_token = $('#head_access_token').val();
      

         $.ajax({
            url: "/Customer/verifyOTP",
            type:"POST",
            data: {
               'user_id' : head_user_id,
               'access_token' : head_access_token
            },
            async: true,
          cache: false,
            success:function(response){
               console.log(response);
                if(response.status == 1) {
                    document.getElementById("head-otp-form").reset();
                  
                    $('.co_confirm1').hide();
                    $("#head_user_id").val( head_user_id );
                    $('.head_co_reset').show();
                    
                } else {
                    
                    $('#head_otp_error').html(response.Message);
                    $('#head_otp_error').fadeIn().delay(3000).fadeOut();

                    document.getElementById("head-otp-form").reset();

                }
            },
            error:function (err) {
                if (err.status == 422) {
                      console.log(err.responseJSON);
            
                $.each(err.responseJSON.errors, function (i, error) {
                    var el = $(document).find('[name="'+i+'"]');
                    el.after($('<span class="filed-error" style="color: #a94442;">'+error[0]+'</span>'));
                });
                $('.filed-error').fadeIn().delay(3000).fadeOut();
                document.getElementById("head-otp-form").reset();

               }
           }
            });
          }
    });

      /*header reset password*/

      $('#head_reset-form').validate({
    rules: {
      head_reset_password : {
         required: true,
         minlength:6
        },   
        head_reset_confirm_password :{
            required: true,
            minlength: 6,
            equalTo: "#head_reset_password"
        },
    },
    highlight: function(element) {
        $(element).closest('.form-group').addClass('has-error');
    },
    unhighlight: function(element) {
        $(element).closest('.form-group').removeClass('has-error');
    },
    errorElement: 'span',
    errorClass: 'help-block',
    errorPlacement: function(error, element) {
        if (element.parent('.input-group').length) {
            error.insertAfter(element.parent());
        } else {
            error.insertAfter(element);
        }
    },
    submitHandler: function (form) {
        $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });

         let re_user_id = $('#head_user_id').val();
         let reset_assword = $('#head_reset_password').val();
      

         $.ajax({
            url: "/Customer/resetPassword",
            type:"POST",
            data: {
               'user_id' : re_user_id,
               'password' : reset_assword
            },
            async: true,
          cache: false,
            success:function(response){
               console.log(response);
                if(response.status == 1){
                  //   $('.co_reset').hide();
                  //   $('.fp_co_confirm').hide();
                  //   $('.co_sign-in').show();
                    document.getElementById("head_reset-form").reset();

                     window.location.href = "<?php echo URL::to('/'); ?>";

                    
                } else {
                    
                    $('#head_reset-error').html(response.Message);
                    $('#head_reset-error').fadeIn().delay(3000).fadeOut();
                    document.getElementById("head_reset-form").reset();

                }
            },
            error:function (err) {
                if (err.status == 422) {
                      console.log(err.responseJSON);
            
                $.each(err.responseJSON.errors, function (i, error) {
                    var el = $(document).find('[name="'+i+'"]');
                    el.after($('<span class="filed-error" style="color: #a94442;">'+error[0]+'</span>'));
                });
                $('.filed-error').fadeIn().delay(3000).fadeOut();
                document.getElementById("fp-otp-form").reset();

               }
           }
            });
          }
    });



       /** forgot - password */
       $('#forgot-password-form').validate({
         rules: {
            fp_mobile: {
               required: '#fp_email:blank'
            },
            fp_email: {
               required: '#fp_mobile:blank',
               email: true
            },
    },
    highlight: function(element) {
        $(element).closest('.form-group').addClass('has-error');
    },
    unhighlight: function(element) {
        $(element).closest('.form-group').removeClass('has-error');
    },
    errorElement: 'span',
    errorClass: 'help-block',
    errorPlacement: function(error, element) {
        if (element.parent('.input-group').length) {
            error.insertAfter(element.parent());
        } else {
            error.insertAfter(element);
        }
    },
    submitHandler: function (form) {
        $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });
      // $('#signup-btn').html('Sending..');

         let fp_mobile = $('#fp_mobile').val();
         let fp_email = $('#fp_email').val();
      

         $.ajax({
            url: "/Customer/forgotPassword",
            type:"POST",
            data: {
               'mobile' : fp_mobile,
               'email' : fp_email
            },
            async: true,
          cache: false,
            success:function(response){
                if(response.status == 1) {
                   console.log(response);
                    document.getElementById("forgot-password-form").reset();
                    var user_id = response.data[0]['id'];
                    console.log(user_id);
                    $('.fp_co_confirm').show();
                    $("#fp_user_id").val( user_id );
                    $('.co_confirm').hide();
                    $('.co_for').hide();

                } else {
                    
                    $('#fp_otp_error').html(response.Message);
                    $('#fp_otp_error').fadeIn().delay(3000).fadeOut();
                    document.getElementById("forgot-password-form").reset();
                }
            },
            error:function (err) {
                if (err.status == 422) {
                  $.each(err.responseJSON.errors, function (i, error) {
                     var el = $(document).find('[name="'+i+'"]');
                     el.after($('<span class="filed-error" style="color: #a94442;">'+error[0]+'</span>'));
                  });
                  $('.filed-error').fadeIn().delay(3000).fadeOut();
                  document.getElementById("forgot-password-form").reset();
               }
           }
            });
          }
    });

    /** forgot password scroll*/

    $('#fp-otp-form').validate({
    rules: {
      fp_access_token : {
         required: true,
         minlength:4
        }   
    },
    highlight: function(element) {
        $(element).closest('.form-group').addClass('has-error');
    },
    unhighlight: function(element) {
        $(element).closest('.form-group').removeClass('has-error');
    },
    errorElement: 'span',
    errorClass: 'help-block',
    errorPlacement: function(error, element) {
        if (element.parent('.input-group').length) {
            error.insertAfter(element.parent());
        } else {
            error.insertAfter(element);
        }
    },
    submitHandler: function (form) {
        $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });

         let fp_user_id = $('#fp_user_id').val();
         let fp_access_token = $('#fp_access_token').val();
      

         $.ajax({
            url: "/Customer/verifyOTP",
            type:"POST",
            data: {
               'user_id' : fp_user_id,
               'access_token' : fp_access_token
            },
            async: true,
          cache: false,
            success:function(response){
               console.log(response);
                if(response.status == 1) {
                    document.getElementById("fp-otp-form").reset();
                    $('.fp_co_confirm').hide();
                    $("#re_user_id").val( fp_user_id );
                    $('.co_reset').show();
                   // window.location.href = "<?php //echo URL::to('Home/index');?>";
                    
                } else {
                    
                    $('#scroll_otp_error').html(response.Message);
                    $('#scroll_otp_error').fadeIn().delay(3000).fadeOut();

                    document.getElementById("fp-otp-form").reset();

                }
            },
            error:function (err) {
                if (err.status == 422) {
                      console.log(err.responseJSON);
            
                $.each(err.responseJSON.errors, function (i, error) {
                    var el = $(document).find('[name="'+i+'"]');
                    el.after($('<span class="filed-error" style="color: #a94442;">'+error[0]+'</span>'));
                });
                $('.filed-error').fadeIn().delay(3000).fadeOut();
                document.getElementById("fp-otp-form").reset();

               }
           }
            });
          }
    });

    /**
    Scroll Reset Passsword
    
     */
    $('#reset-form').validate({
    rules: {
      reset_assword : {
         required: true,
         minlength:6
        },   
        reset_confirm_password :{
            required: true,
            minlength: 6,
            equalTo: "#reset_assword"
        },
    },
    highlight: function(element) {
        $(element).closest('.form-group').addClass('has-error');
    },
    unhighlight: function(element) {
        $(element).closest('.form-group').removeClass('has-error');
    },
    errorElement: 'span',
    errorClass: 'help-block',
    errorPlacement: function(error, element) {
        if (element.parent('.input-group').length) {
            error.insertAfter(element.parent());
        } else {
            error.insertAfter(element);
        }
    },
    submitHandler: function (form) {
        $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });

         let re_user_id = $('#re_user_id').val();
         let reset_assword = $('#reset_assword').val();
      

         $.ajax({
            url: "/Customer/resetPassword",
            type:"POST",
            data: {
               'user_id' : re_user_id,
               'password' : reset_assword
            },
            async: true,
          cache: false,
            success:function(response){
               console.log(response);
                if(response.status == 1) {
                  //   $('.co_reset').hide();
                  //   $('.fp_co_confirm').hide();
                  //   $('.co_sign-in').show();
                    document.getElementById("reset-form").reset();

                     window.location.href = "<?php echo URL::to('/'); ?>";

                    
                } else {
                    
                    $('#reset-error').html(response.Message);
                    $('#reset-error').fadeIn().delay(3000).fadeOut();
                    document.getElementById("reset-form").reset();

                }
            },
            error:function (err) {
                if (err.status == 422) {
                      console.log(err.responseJSON);
            
                $.each(err.responseJSON.errors, function (i, error) {
                    var el = $(document).find('[name="'+i+'"]');
                    el.after($('<span class="filed-error" style="color: #a94442;">'+error[0]+'</span>'));
                });
                $('.filed-error').fadeIn().delay(3000).fadeOut();
                document.getElementById("fp-otp-form").reset();

               }
           }
            });
          }
    });
      /***
    
    Header Fogot Password Form
     */
    $('#head_forgot-password-form').validate({

rules:{
  head_fp_mobile: {
      required:'#head_fp_email:blank',
     },
     head_fp_email: {
        required:'#head_fp_mobile:blank',
        email: true
    },
},
highlight: function(element) {
    $(element).closest('.form-group').addClass('has-error');
},
unhighlight: function(element) {
    $(element).closest('.form-group').removeClass('has-error');
},


errorElement: 'span',
errorClass: 'help-block',


errorPlacement: function(error, element) {
    if (element.parent('.input-group').length) {
        error.insertAfter(element.parent());
    } else {
        error.insertAfter(element);
    }
},
submitHandler: function (form) {
    $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
      }
  });
  // $('#signup-btn').html('Sending..');

     let fp_mobile = $('#head_fp_mobile').val();
     let fp_email = $('#head_fp_email').val();
  

     $.ajax({
        url: "/Customer/forgotPassword",
        type:"POST",
        data: {
           'mobile' : fp_mobile,
           'email' : fp_email
        },
        async: true,
      cache: false,
        success:function(response){
            if(response.status == 1) {
              /*  document.getElementById("head_forgot-password-form").reset();*/

                 console.log(response);
                document.getElementById("head_forgot-password-form").reset();
                var user_id = response.data[0]['id'];
                console.log(user_id);
              
                $("#head_user_id").val( user_id ); 
                $('.co_confirm1').show();


              //   window.location.href = "<?php //echo URL::to('Home/index');?>";
            } else {
                
                $('#head_fp_otp_error').html(response.Message);
                $('#head_fp_otp_error').fadeIn().delay(3000).fadeOut();
                console.log('1234');
                document.getElementById("head_forgot-password-form").reset();
            }
        },
       error:function (err) {
            if (err.status == 422) {
                  console.log(err.responseJSON);

                 //   $('.co_for').show();
        
            $.each(err.responseJSON.errors, function (i, error) {
                var el = $(document).find('[name="'+i+'"]');
                el.after($('<span class="filed-error" style="color: #a94442;">'+error[0]+'</span>'));
            });

            
          
            $('.filed-error').fadeIn().delay(3000).fadeOut();
            document.getElementById("head_forgot-password-form").reset();

           }
        }
        });
      }
});

/***
    
    Header Fogot Password Form
     */
    $('#head_forgot-password-form').validate({

rules:{
  head_fp_mobile: {
      required:'#head_fp_email:blank',
     },
     head_fp_email: {
        required:'#head_fp_mobile:blank',
        email: true
    },
},
highlight: function(element) {
    $(element).closest('.form-group').addClass('has-error');
},
unhighlight: function(element) {
    $(element).closest('.form-group').removeClass('has-error');
},


errorElement: 'span',
errorClass: 'help-block',


errorPlacement: function(error, element) {
    if (element.parent('.input-group').length) {
        error.insertAfter(element.parent());
    } else {
        error.insertAfter(element);
    }
},
submitHandler: function (form) {
    $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
      }
  });
  // $('#signup-btn').html('Sending..');

     let fp_mobile = $('#head_fp_mobile').val();
     let fp_email = $('#head_fp_email').val();
  

     $.ajax({
        url: "/Customer/forgotPassword",
        type:"POST",
        data: {
           'mobile' : fp_mobile,
           'email' : fp_email
        },
        async: true,
      cache: false,
        success:function(response){
            if(response.status == 1) {
              /*  document.getElementById("head_forgot-password-form").reset();*/

                 console.log(response);
                document.getElementById("head_forgot-password-form").reset();
                var user_id = response.data[0]['id'];
                console.log(user_id);
              
                $("#head_user_id").val( user_id ); 
                $('.co_confirm1').show();


              //   window.location.href = "<?php //echo URL::to('Home/index');?>";
            } else {
                
                $('#head_fp_otp_error').html(response.Message);
                $('#head_fp_otp_error').fadeIn().delay(3000).fadeOut();
                console.log('1234');
                document.getElementById("head_forgot-password-form").reset();
            }
        },
       error:function (err) {
            if (err.status == 422) {
                  console.log(err.responseJSON);

                 //   $('.co_for').show();
        
            $.each(err.responseJSON.errors, function (i, error) {
                var el = $(document).find('[name="'+i+'"]');
                el.after($('<span class="filed-error" style="color: #a94442;">'+error[0]+'</span>'));
            });

            
          
            $('.filed-error').fadeIn().delay(3000).fadeOut();
            document.getElementById("head_forgot-password-form").reset();

           }
        }
        });
      }
});





});

      </script>
   </body>
</html>
