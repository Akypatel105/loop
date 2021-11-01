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
                     <a href="home.html"><img src="{{ asset('image/logo.png') }}"></a>
                  </div>
               </div>
               <div class="col-lg-8">
                  <nav class="intro-menu">
                     <div class="buttons">
                        <button class="login" data-toggle="modal" data-target="#login-page1" data-dismiss="modal">Log in</button>
                        <button data-toggle="modal" data-target="#exampleModalCenter" data-dismiss="modal">Sign up</button>
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
                              <div class="text text_1 form-group">
                                 <label class="col-xs-3 control-label"> <i class="fal fa-envelope"></i></label>
                                 <div class="col-xs-5">
                                     <input type="email" placeholder="Email" id="customer_email" class="login-control"  name="customer_email">
                                 </div>
                              </div>
                              <h3 class="or-1">OR</h3>
                              <div class="text form-group">
                              <label class="col-xs-3 control-label"><i class="fal fa-phone-volume"></i></label>
                                 <div class="col-xs-5">
                                    <input type="number" placeholder="Mobile Number" id="customer_mobile" class="login-control" name="customer_mobile">
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
                     <div class="co_thumps co_thumps1 co_sign-up">
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
                                    <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">Phone Number</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab">Email Address</a>
                                 </li>
                              </ul><!-- Tab panes -->
                              <div class="tab-content">
                                 <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                    <form method="post" action="#" accept-charset="utf-8">
                                       <div>
                                          <input id="phone" type="tel" placeholder="Phone Number">
                                       </div>
                                    </form>
                                 </div>
                                 <div class="tab-pane Tab2" id="tabs-2" role="tabpanel">
                                    <form>
                                       <input type="email" placeholder="Enter Email" name="">
                                     </form>
                                 </div>
                              </div>
                           <button class="next con_2">next</button>
                        </div>
                     </div>

                     <!---------- user-modal --------------->
                     <div class="co_thumps co_user">
                        <h2><i class="arrow fal fa-chevron-left"></i>Profile Page</h2>
                        <div class="upload-img">
                           <i class="fal fa-image"></i>
                           <h3>Upload photo</h3>
                        </div>
                        <div class="user-form">
                           <div class="line"></div>
                           <form>
                              <div class="text">
                                 <i class="fal fa-envelope"></i>
                                 <input type="email" placeholder="User Id" name="user id" value="" required>
                              </div>
                              <div class="text">
                                 <i class="fal fa-user"></i>
                                 <input type="text" placeholder="Name" name="name" value="" required>
                              </div>
                              <div class="text">
                                 <i class="fal fa-user"></i>
                                 <input type="text" placeholder="Gender" name="Gender" value="" required>
                              </div>
                              <div class="text">
                                 <i class="fas fa-mobile-alt"></i>
                                 <input type="text" placeholder="Contact Details" name="contact Details" value="" required>
                              </div>
                              <div class="text">
                                 <i class="fal fa-envelope"></i>
                                 <input type="email" placeholder="Email Address" name="email" value="" required>
                              </div>
                              <div class="text">
                                 <i class="fal fa-lock-alt"></i>
                                 <input type="text" placeholder="Password" name="Password" value="" required>
                              </div>
                           </form>
                           <button class="next">Sign - Up</button>
                           <p class="sign-up-link con_4">Don't have an account ? <a class="sign_link">Sign-In</a></p>
                        </div>
                     </div>

                     <!---------- forgot password-modal --------------->
                     <div class="co_thumps co_thumps1 co_sign-in co_for">
                        <h2><i class="arrow fal fa-chevron-left"></i>forgot password</h2>
                        <div class="sign-again">
                           <h3>forgot your password ?</h3>
                           <p>Enter your register email below to receive password reset instruction</p>
                        </div>
                        <div class="sign-in-form1">
                           <form>
                              <div class="text">
                                 <i class="fal fa-phone-volume"></i>
                                 <input type="number" placeholder="Phone Number" name="number" value="" required>
                              </div>
                              <h3 class="or-1">Or</h3>
                              <div class="text text_1">
                                 <i class="fal fa-envelope"></i>
                                 <input type="email" placeholder="E-Mail" name="email" value="" required>
                              </div>
                           </form>
                           <button class="next con_6">next</button>
                           <p class="or"><a>Back to Login</a></p>
                        </div>
                     </div>

                     <!---------- OPT-modal --------------->
                     <div class="co_thumps co_thumps1 co_confirm">
                        <h2><i class="arrow fal fa-chevron-left"></i></h2>
                        <div class="confirm-section">
                           <h6>Enter 6 digit verification code sent to your number</h6>
                           <div class="container1"></div>
                               <p> Resend OTP in <span id="countdowntimer">30 </span> Seconds</p>
                           <button class="next con_3">next</button>
                           <button class="next con_7">next</button>
                        </div>
                     </div>

                     <!---------- reset password-modal --------------->
                     <div class="co_thumps co_thumps1 co_sign-in co_reset">
                        <h2><i class="arrow fal fa-chevron-left"></i>reset password</h2>
                        <div class="sign-again">
                           <p>Your new password must be different from previously used password</p>
                        </div>
                        <div class="sign-in-form1">
                           <form>
                              <div class="text">
                                 <i class="fal fa-lock-alt"></i>
                                 <input type="text" placeholder="New Password" name="Password" value="" required>
                              </div>
                              <div class="text">
                                 <i class="fal fa-lock-alt"></i>
                                 <input type="text" placeholder="Confirm Password" name="Password" value="" required>
                              </div>
                           </form>
                           <button class="next">Create & Save</button>
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
                     <h2>sign in</h2>
                     <div class="sign-again">
                        <h3>let's sign you again.</h3>
                        <p>welcome back, <br> you have been missed !</p>
                     </div>
                     <div class="sign-in-form1">
                        <form>
                           <div class="text text_1">
                              <i class="fal fa-envelope"></i>
                              <input type="email" placeholder="E-Mail" name="email" value="" required>
                           </div>
                           <h3 class="or-1">or</h3>
                           <div class="text">
                              <i class="fal fa-phone-volume"></i>
                              <input type="number" placeholder="Phone Number" name="number" value="" required>
                           </div>
                           <div class="text">
                              <i class="fal fa-lock-alt"></i>
                              <input type="text" placeholder="Password" name="Password" value="" required>
                           </div>
                           <a class="forgot">Forgot Password ?</a>
                        </form>
                        <button class="next">Sign - in</button>
                        <p class="or">or, sign - in with</p>
                        <div class="face-login">
                           <div class="face face1">
                              <a href="#"><i class="fab fa-facebook-f"></i></a>
                           </div>
                           <div class="face gog">
                              <a href="#"><i class="fab fa-google"></i></a>
                           </div>
                        </div>
                        <p class="sign-up-link con_5">Don't have an account ? <a class="sign_link">Sign-Up</a></p>
                     </div>
                  </div>
                     
                  <!---------- sign-up-modal --------------->
                  <div class="co_thumps co_thumps1 co_sign-up">
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
                           </ul><!-- Tab panes -->
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
                  </div>

                  <!---------- user-modal --------------->
                  <div class="co_thumps co_user">
                     <h2><i class="arrow fal fa-chevron-left"></i>Profile Page</h2>
                     <div class="upload-img">
                        <i class="fal fa-image"></i>
                        <h3>Upload photo</h3>
                     </div>
                     <div class="user-form">
                        <div class="line"></div>
                        <form>
                           <div class="text">
                              <i class="fal fa-envelope"></i>
                              <input type="email" placeholder="User Id" name="user id" value="" required>
                           </div>
                           <div class="text">
                              <i class="fal fa-user"></i>
                              <input type="text" placeholder="Name" name="name" value="" required>
                           </div>
                           <div class="text">
                              <i class="fal fa-user"></i>
                              <input type="text" placeholder="Gender" name="Gender" value="" required>
                           </div>
                           <div class="text">
                              <i class="fas fa-mobile-alt"></i>
                              <input type="text" placeholder="Contact Details" name="contact Details" value="" required>
                           </div>
                           <div class="text">
                              <i class="fal fa-envelope"></i>
                              <input type="email" placeholder="Email Address" name="email" value="" required>
                           </div>
                           <div class="text">
                              <i class="fal fa-lock-alt"></i>
                              <input type="text" placeholder="Password" name="Password" value="" required>
                           </div>
                        </form>
                        <button class="next">Sign - Up</button>
                        <p class="sign-up-link con_4">Don't have an account ? <a class="sign_link">Sign-In</a></p>
                     </div>
                  </div>

                  <!---------- forgot password-modal --------------->
                  <div class="co_thumps co_thumps1 co_sign-in co_for">
                     <h2><i class="arrow fal fa-chevron-left"></i>forgot password</h2>
                     <div class="sign-again">
                        <h3>forgot your password ?</h3>
                        <p>Enter your register email below to receive password reset instruction</p>
                     </div>
                     <div class="sign-in-form1">
                        <form>
                           <div class="text">
                              <i class="fal fa-phone-volume"></i>
                              <input type="number" placeholder="Phone Number" name="number" value="" required>
                           </div>
                           <h3 class="or-1">Or</h3>
                           <div class="text text_1">
                              <i class="fal fa-envelope"></i>
                              <input type="email" placeholder="E-Mail" name="email" value="" required>
                           </div>
                        </form>
                        <button class="next con_6">next</button>
                        <p class="or"><a>Back to Login</a></p>
                     </div>
                  </div>

                  <!---------- OPT-modal --------------->
                  <div class="co_thumps co_thumps1 co_confirm">
                     <h2><i class="arrow fal fa-chevron-left"></i></h2>
                     <div class="confirm-section">
                        <h6>Enter 6 digit verification code sent to your number</h6>
                        <div class="container2"></div>
                            <p> Resend OTP in <span id="countdowntimer2">30 </span> Seconds</p>
                        <button class="next con_3">next</button>
                        <button class="next con_7">next</button>
                     </div>
                  </div>

                  <!---------- reset password-modal --------------->
                  <div class="co_thumps co_thumps1 co_sign-in co_reset">
                     <h2><i class="arrow fal fa-chevron-left"></i>reset password</h2>
                     <div class="sign-again">
                        <p>Your new password must be different from previously used password</p>
                     </div>
                     <div class="sign-in-form1">
                        <form>
                           <div class="text">
                              <i class="fal fa-lock-alt"></i>
                              <input type="text" placeholder="New Password" name="Password" value="" required>
                           </div>
                           <div class="text">
                              <i class="fal fa-lock-alt"></i>
                              <input type="text" placeholder="Confirm Password" name="Password" value="" required>
                           </div>
                        </form>
                        <button class="next">Create & Save</button>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>


      <!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <h1>Tests shjkhkjhkjhkjhk</h1>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
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

   
</style>     
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/12.1.6/js/intlTelInput.min.js"></script>
      <script src="{{ asset('js/script.js') }}"></script>
      <script type="text/javascript">
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
            $('.co_sign-up').show();
            $('.co_sign-in1').hide();
            $('.con_7').hide();
         });

         $('.con_2').click(function(){
            $('.co_confirm').show();
            $('.co_sign-up').hide();
            $('.con_7').hide();
         });

         $('.con_3').click(function(){
            $('.co_user').show();
            $('.co_confirm').hide();
         });

         $('.con_4').click(function(){
            $('.co_sign-in1').show();
            $('.co_user').hide();
         });

         $('.con_6').click(function(){
            $('.co_confirm').show();
            $('.co_for').hide();
            $('.con_3').hide();
            $('.con_7').show();
         });

         $('.con_7').click(function(){
            $('.co_reset').show();
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
            $('.co_sign-up').show();
            $('.co_sign-in1').hide();
            $('.co_user').hide();
            $('.co_for').hide();
            $('.co_reset').hide();
            $('.co_confirm').hide();
         });



         let telInput = $("#phone")

// initialize
// telInput.intlTelInput({
//     initialCountry: 'auto',
//     preferredCountries: ['us','gb','br','ru','cn','es','it'],
//     autoPlaceholder: 'aggressive',
//     utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/12.1.6/js/utils.js",
//     geoIpLookup: function(callback) {
//         fetch('https://ipinfo.io/json', {
//             cache: 'reload'
//         }).then(response => {
//             if ( response.ok ) {
//                  return response.json()
//             }
//             throw new Error('Failed: ' + response.status)
//         }).then(ipjson => {
//             callback(ipjson.country)
//         }).catch(e => {
//             callback('us')
//         })
//     }
// });

let telInput2 = $("#phone2")

// initialize
telInput2.intlTelInput({
    initialCountry: 'br',
    preferredCountries: ['us','gb','br','ru','cn','es','it'],
    autoPlaceholder: 'aggressive',
    utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/12.1.6/js/utils.js"
});


var timeleft = 30;
        var downloadTimer = setInterval(function(){
        timeleft--;
        document.getElementById("countdowntimer").textContent = timeleft;
        if(timeleft <= 0)
            clearInterval(downloadTimer);
        },1000);



const result = document.querySelector('.result'); // Built n inputs dynamically

const times = () => {
  let inputTemplates = [];

  for (let i = 0; i < 6; i++) {
    inputTemplates[i] = '<input type="text" onchange="isComplete()" maxlength="1" oninput="goToNextInput()">';
  }

  let inputCollection = inputTemplates.join('');
  return inputCollection;
}; // Mount html template


const container1 = document.querySelector('.container1');
container1.innerHTML = times(); // Collect the inputs

const inputsList = document.querySelectorAll('input'); // onchange setDisabledAttribute

const isComplete = () => {
  for (const [i, inputElement] of inputsList.entries()) {
    if (inputElement.value.length === 1) {
      // setDisabledAttribute(inputsList[i]);
      inputsList[i].classList.add('paintOrangeLine');
    } else {
      inputsList[i].classList.remove('paintOrangeLine');
    }
  }
};

const goToNextInput = () => {
  for (const [i, inputElement] of inputsList.entries()) {
    if (inputElement.value.length === 1 && i !== 5) {
      removeDisabledAttribute(inputsList[i + 1]);
      inputsList[i + 1].focus();
    }

    if (inputElement.value.length === 1 && i === 5) {
      inputElement.parentElement.nextElementSibling.focus();
      areAllFilled(inputsList) ? setDisabledAttributeForAll(inputsList) : '';
    }
  }
}; // Get all values from inputs


const sendValues = () => {
  let inputValues = [];

  for (let inputValue of inputsList) {
    if (inputValue.value.length === 1) {
      inputValues.push(inputValue.value);
    }
  }

  result.innerHTML = inputValues.join('');
}; // Show result in screen after button clicked


const btn = document.querySelector('button');
btn.addEventListener('click', sendValues, true); // Remove disabled attribute from input

const removeDisabledAttribute = elem => {
  elem.removeAttribute("disabled");
  ;
}; // Set disabled attribute from input


const setDisabledAttribute = elem => {
  elem.setAttribute("disabled", '');
};

const setDisabledAttributeForAll = arr => {
  for (let input of arr) {
    input.setAttribute('disabled', '');
  }
}; // Remove disabled from the first input
// to be called in connectedCallback()


removeDisabledAttribute(inputsList[0]);

const fill = currentValue => {
  return currentValue.value.length === 1;
}; // Check if all fields are filled


const areAllFilled = arr => {
  let newArray = Array.from(arr);
  return newArray.every(input => input.value.length === 1);
};




var timeleft = 30;
        var downloadTimer = setInterval(function(){
        timeleft--;
        document.getElementById("countdowntimer2").textContent = timeleft;
        if(timeleft <= 0)
            clearInterval(downloadTimer);
        },1000);



const result1 = document.querySelector('.result'); // Built n inputs dynamically

const times1 = () => {
  let inputTemplates = [];

  for (let i = 0; i < 6; i++) {
    inputTemplates[i] = '<input type="text" onchange="isComplete()" maxlength="1" oninput="goToNextInput()">';
  }

  let inputCollection = inputTemplates.join('');
  return inputCollection;
}; // Mount html template


const container2 = document.querySelector('.container2');
container2.innerHTML = times1(); // Collect the inputs

const inputsList1 = document.querySelectorAll('input'); // onchange setDisabledAttribute

const isComplete1 = () => {
  for (const [i, inputElement] of inputsList1.entries()) {
    if (inputElement.value.length === 1) {
      // setDisabledAttribute(inputsList[i]);
      inputsList1[i].classList.add('paintOrangeLine');
    } else {
      inputsList1[i].classList.remove('paintOrangeLine');
    }
  }
};

const goToNextInput1 = () => {
  for (const [i, inputElement] of inputsList1.entries()) {
    if (inputElement.value.length === 1 && i !== 5) {
      removeDisabledAttribute(inputsList1[i + 1]);
      inputsList1[i + 1].focus();
    }

    if (inputElement.value.length === 1 && i === 5) {
      inputElement.parentElement.nextElementSibling.focus();
      areAllFilled(inputsList1) ? setDisabledAttributeForAll(inputsList1) : '';
    }
  }
}; // Get all values from inputs


const sendValues1 = () => {
  let inputValues = [];

  for (let inputValue of inputsList1) {
    if (inputValue.value.length === 1) {
      inputValues.push(inputValue.value);
    }
  }

  result1.innerHTML = inputValues.join('');
}; // Show result1 in screen after button clicked


const btn1 = document.querySelector('button');
btn.addEventListener('click', sendValues, true); // Remove disabled attribute from input

const removeDisabledAttribute1 = elem => {
  elem.removeAttribute("disabled");
  ;
}; // Set disabled attribute from input


const setDisabledAttribute1 = elem => {
  elem.setAttribute("disabled", '');
};

const setDisabledAttributeForAll1 = arr => {
  for (let input of arr) {
    input.setAttribute('disabled', '');
  }
}; // Remove disabled from the first input
// to be called in connectedCallback()


removeDisabledAttribute(inputsList1[0]);

const fill1 = currentValue => {
  return currentValue.value.length === 1;
}; // Check if all fields are filled


const areAllFilled1 = arr => {
  let newArray = Array.from(arr);
  return newArray.every(input => input.value.length === 1);
};
     
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

});

      </script>
   </body>
</html>
