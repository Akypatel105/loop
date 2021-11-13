@include('layouts.header') 
	<div class="main-body">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 co_left">
					<ul class="left-sider-main">
						<li class="left-sider">
						    <div class="icon-1">
						    	<i class="fas fa-tv-retro"></i>
						    </div>
						    <div class="icon-name">
						    	<h6>Latest news</h6>
						    </div>
						</li>
						<li class="left-sider">
						    <div class="icon-1">
						    	<i class="fal fa-user-friends"></i>
						    </div>
						    <div class="icon-name">
						    	<h6>friends</h6>
						    </div>
						</li>
						<li class="left-sider">
						    <div class="icon-1">
						    	<i class="fal fa-users"></i>
						    </div>
						    <div class="icon-name">
						    	<h6>groups</h6>
						    </div>
						</li>
						<li class="left-sider">
						    <div class="icon-1">
						    	<i class="far fa-desktop"></i>
						    </div>
						    <div class="icon-name">
						    	<h6>watch</h6>
						    </div>
						</li>
					</ul>
				</div>
				<div class="col-lg-6">
					<div class="co_middle-section">
					
						<div class="m_section1">
							<div class="slider slider-nav">
								<div>
								    <div class="story-1 buttons active" data-filter="all">
								    	<div class="your">
								    	</div>
								    	<h6>All</h6>
								    </div>
								</div>
								<div>
								    <div class="story-1 buttons" data-filter="pubg">
								    	<div type="button">
								    		<img src="{{ asset('image/status-1.png')}}">
								    	</div>
								    	<h6>PUBG</h6>
								    </div>
								</div>
								<div>
								    <div class="story-1 buttons" data-filter="chess">
								    	<img src="{{ asset('image/status-2.png')}}">
								    	<h6>Chess</h6>
								    </div>
								</div>
								<div>
								    <div class="story-1 buttons" data-filter="goose">
								    	<img src="{{ asset('image/status-3.jpg')}}">
								    	<h6>Goose</h6>
								    </div>
								</div>
								<div>
								    <div class="story-1 buttons" data-filter="ludo">
								    	<img src="{{ asset('image/status-4.png')}}">
								    	<h6>Ludo</h6>
								    </div>
								</div>
								<div>
								    <div class="story-1 buttons" data-filter="free-fire">
								    	<img src="{{ asset('image/status-5.jpg')}}">
								    	<h6>Free fire</h6>
								    </div>
								</div>
								<div>
								    <div class="story-1 buttons" data-filter="counter-strike">
								    	<img src="{{ asset('image/status-6.jpg')}}">
								    	<h6>Counter-Strike</h6>
								    </div>
								</div>
								<div>
								    <div class="story-1 buttons" data-filter="mine-craft">
								    	<img src="{{ asset('image/status-7.jpg')}}">
								    	<h6>Mine Craft</h6>
								    </div>
								</div>
								<div>
								    <div class="story-1 buttons" data-filter="checkers">
								    	<img src="{{ asset('image/status-8.jpg')}}">
								    	<h6>Checkers</h6>
								    </div>
								</div>
                            </div>
						</div>
						<div class="m_section2">
							@foreach($post as $p)
							<div class="set-section2 image pubg mine-craft">
								<div class="main-user-image">
									<div class="user-image">
										@if($p['user']['profile_image']=='')
										<img src="{{ asset('profile_images/default.png')}}">
										@else
										<img src="{{ asset('profile_images/'.$p['user']['profile_image']) }}">
										@endif
										<h3>{{$p['user']['name']}}</h3>
									</div>
									<div class="user-dots" data-toggle="modal" data-target="#form">
										<i class="fal fa-ellipsis-h"></i>
									</div>
								</div>
								<div class="slider slider-nav1">
									@if($p['post_type']==1)
									@if(count($p['post_image']) != 0)
									@foreach($p['post_image'] as $image)
									<div>
										<div class="feed-image">
										<img src="{{ asset('post_assets/image/'.$image['post_image']) }}">
										</div>
									</div>
									@endforeach 
									@else
									<div>
										<div class="feed-image">
										<img src="{{ asset('post_assets/image/dummypost.jpg')}}">
										</div>
									</div>
									@endif
									@else
									@if(count($p['post_video']) != 0)
									@foreach($p['post_video'] as $video)
									<div>
										<div class="feed-image">
										<video autoplay="" loop="" controls="" >
											<source type="video/mp4"src="{{ asset('post_assets/video/'.$video['post_video']) }}">
										</video>
										</div>
									</div>
									@endforeach
									@endif
									@endif
								</div>
								<div class="caption-section">
									<div class="inner-caption">
										<div class="like-section">
										<ul>
											<li><i class="far fa-heart"></i> @if(!empty(count($p['post_likes'])))<span>{{count($p['post_likes'])}}</span> @endif</li>
											<li><i class="far fa-comment-dots">@if(!empty(count($p['post_comments'])))<span>{{count($p['post_comments'])}}</span>@endif</i></li>
										</ul>
										</div>
										<div class="caption-text">
										<a href="#">{{$p['user']['name']}}</a>
										<span data-collapse-limit="70">{{$p['post_caption']}}</span>
										</div>
										<div class="total-comment">
										<a href="{{url('Home/comment')}}/{{$p['post_id']}}">View all <span>{{count($p['post_comments'])}}</span> comments </a>
										</div>
										@php
										$post_comments_array1=array_reverse($p['post_comments']);
										$post_comments_array=array_slice($post_comments_array1, -2, 2, true);
										@endphp
										@foreach($post_comments_array as $p)
										<div class="caption-text caption-text1">
										<div class="col-md-12">
											<a href="#">{{$p['user']['name']}}</a>
											<span>{{$p['post_comment']}}</span>
										</div>
										<div>
											<i class="far fa-heart"></i>
										</div>
										</div>
										@endforeach
									</div>
									<div class="comment-fillup">
										<form>
										<div class="emoji-section">
											<i class="far fa-smile"></i>
										</div>
										<textarea placeholder="Add a comments..."></textarea>
										<input type="submit" value="post">	
										</form>
									</div>
								</div>
							</div>
							@endforeach
						</div>
					</div>
				</div>
				<div class="col-lg-3 co_right">
					<div class="right-side-main">
						<div class="right-section1">
							<div class="sidebar-title">
				            	<h4>Events</h4>
				            	<a href="#">See All</a>
				            </div>
				            <div class="event">
					            <div class="left-event">
					            	<h3>18</h3>
					            	<span>March</span>
					            </div>
					            <div class="right-event">
					            	<h4>Social Media</h4>
					            	<p>
					            		<i class="fa fa-map-marker"></i>
							            Willson Tech Park
				                    </p>
				                    <a href="#">More Info</a>
				                </div>
				            </div>
				            <div class="event">
					            <div class="left-event">
					            	<h3>22</h3>
					            	<span>June</span>
					            </div>
					            <div class="right-event">
					            	<h4>Mobile Marketing</h4>
					            	<p>
					            		<i class="fa fa-map-marker"></i>
							            Willson Tech Park
				                    </p>
				                    <a href="#">More Info</a>
				                </div>
				            </div>
						</div>
						<div class="right-section1 right-section2">
							<div class="sidebar-title">
				            	<h4>Advertisement</h4>
				            	<a href="#">Close</a>
				            </div>
				            <img src="{{ asset('image/advertisement.png')}}">
						</div>
						<div class="right-section1 right-section3">
							<div class="sidebar-title">
				            	<h4>Conversation</h4>
				            	<a href="#">Hide Chat</a>
				            </div>
				            <div class="online-list">
				                <div class="online">
				                	<img src="{{ asset('image/status-2.png')}}">
				                </div>
				                <p>Esther</p>
				            </div>
				            <div class="online-list">
				                <div class="online">
				                	<img src="{{ asset('image/status-3.png')}}">
				                </div>
				                <p>jacob@123</p>
				            </div>
				            <div class="online-list">
				                <div class="online">
				                	<img src="{{ asset('image/status-4.png')}}">
				                </div>
				                <p>Brayden</p>
				            </div>
				            <div class="online-list">
				                <div class="online">
				                	<img src="{{ asset('image/status-5.png')}}">
				                </div>
				                <p>Coinneach</p>
				            </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	

<!--modal-dots -->
    <div class="modal fade modal-1" id="form" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <!-- <div class="modal-header border-bottom-0">
                   
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                </div> -->
                <div class="modal-body">
                	<div class="r-button"><a href="#" data-toggle="modal" data-target="#unfollow" data-dismiss="modal">Unfollow</a></div>
                	<div class="r-button repot-button"><a href="#" data-toggle="modal" data-target="#report" data-dismiss="modal">report</a></div>
                	<div class="r-button"><a href="#" data-toggle="modal" data-target="#share-to" data-dismiss="modal">Share to...</a></div>
                	<div class="r-button"><a href="#">Hide</a></div>
                </div>
            </div>
        </div>
    </div>

<!-------- modal-report ---------------->
    <div class="modal fade modal-report" id="report" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <!-- <div class="modal-header border-bottom-0">
                   
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                </div> -->
                <div class="modal-body">
                	<div class="co_report">
                		<h3>report</h3>
                		<div id="accordion" class="report-accordion">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Why are you reporting this post ?</button>
                                    </h5>
                                </div>
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                    <div class="card-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. 
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">It's Spam ?</button>
                                    </h5>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                    <div class="card-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">I just don't like it ?</button>
                                    </h5>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                    <div class="card-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                                    </div>
                                </div>
                            </div>
                        </div>
                	</div>
                </div>
            </div>
        </div>
    </div>

<!-------- modal-share-to -------------->
    <div class="modal fade modal-report" id="share-to" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <!-- <div class="modal-header border-bottom-0">
                   
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                </div> -->
                <div class="modal-body">
                	<div class="co_report co_report1">
                		<div class="line"></div>
                		<P>https://www.google.com/search?q=ui+design&oq=ui+design&aqs=chrome..69i57j0i512j0i433i457i512j0i51212j69i61j69i6512.5046j0j7&sourceid=chrome&ie=UTF-8</P>
                		<div class="share-all">
                			<h2>Share via</h2>
                			<ul>
                				<li>
                					<a href="#"><i class="fc fab fa-facebook-f"></i>
                					<p>facebook</p></a>
                				</li>
                				<li>
                					<a href="#"><i class="tw fab fa-twitter"></i>
                					<p>twitter</p></a>
                				</li>
                				<li>
                					<a href="#"><i class="ws fab fa-whatsapp"></i>
                					<p>whatsapp</p></a>
                				</li>
                				<li>
                					<a href="#"><i class="insta fab fa-instagram"></i>
                					<p>instagram</p></a>
                				</li>
                			</ul>
                		</div>
                	</div>
                </div>
            </div>
        </div>
    </div>

<!----- Notification-modal ------->
    <div class="modal fade modal-2" id="form1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-body">
                	<div class="main-search">
                        <div class="inner-search">
	                        <div class="search-box1">
		                        <div class="row row1">
			                        <div class="col-lg-6">
                                        <div class="noti">Notification</div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="noti-search">
                                        	<i class="far fa-search"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="search-input"><input type="text" placeholder="search."><i class="fal fa-times"></i></div>
                        </div>
                        <div class="co_new">
                        	<h2>New</h2>
                        	<div class="inner-new">
                        		<img src="{{ asset('image/status-2.png')}}">
                        		<div class="new-user">
                        			<p><a href="#">Esther</a> requested to follow you</p>
                        			<div class="inner-accept">
                        			    <button>Accept</button>
                        			    <button class="reject">reject</button>
                        			</div>
                        		</div>
                        	</div>
                        	<div class="inner-new">
                        		<div class="noti-icon">
                        			<i class="fal fa-comment-dots"></i>
                        		</div>
                        		<div class="new-user">
                        			<p><a href="#">Esther</a> commented on your post</p>
                        		</div>
                        	</div>
                        	<div class="inner-new">
                        		<div class="noti-icon">
                        			<i class="fal fa-heart"></i>
                        		</div>
                        		<div class="new-user">
                        			<p><a href="#">Esther</a> liked your post</p>
                        		</div>
                        	</div>
                        </div>
                        <div class="co_new">
                        	<h2>This week</h2>
                        	<div class="inner-new">
                        		<img src="{{ asset('image/status-2.png')}}">
                        		<div class="new-user">
                        			<p><a href="#">Esther</a> requested to follow you</p>
                        			<div class="inner-accept">
                        			    <button>Accept</button>
                        			    <button class="reject">reject</button>
                        			</div>
                        		</div>
                        	</div>
                        	<div class="inner-new">
                        		<div class="noti-icon">
                        			<i class="fal fa-comment-dots"></i>
                        		</div>
                        		<div class="new-user">
                        			<p><a href="#">Esther</a> commented on your post</p>
                        		</div>
                        	</div>
                        	<div class="inner-new">
                        		<div class="noti-icon">
                        			<i class="fal fa-heart"></i>
                        		</div>
                        		<div class="new-user">
                        			<p><a href="#">Esther</a> liked your post</p>
                        		</div>
                        	</div>
                        </div>
                        <div class="co_new">
                        	<h2>This Month</h2>
                        	<div class="inner-new">
                        		<img src="{{ asset('image/status-2.png')}}">
                        		<div class="new-user">
                        			<p><a href="#">Esther</a> requested to follow you</p>
                        			<div class="inner-accept">
                        			    <button>Accept</button>
                        			    <button class="reject">reject</button>
                        			</div>
                        		</div>
                        	</div>
                        	<div class="inner-new">
                        		<div class="noti-icon">
                        			<i class="fal fa-comment-dots"></i>
                        		</div>
                        		<div class="new-user">
                        			<p><a href="#">Esther</a> commented on your post</p>
                        		</div>
                        	</div>
                        	<div class="inner-new">
                        		<div class="noti-icon">
                        			<i class="fal fa-heart"></i>
                        		</div>
                        		<div class="new-user">
                        			<p><a href="#">Esther</a> liked your post</p>
                        		</div>
                        	</div>
                        </div>
                        <div class="co_new">
                        	<h2>Earlier</h2>
                        	<div class="inner-new">
                        		<div class="noti-icon">
                        			<i class="fal fa-comment-dots"></i>
                        		</div>
                        		<div class="new-user">
                        			<p><a href="#">Esther</a> commented on your post</p>
                        		</div>
                        	</div>
                        </div>
                        <div class="co_new">
                        	<h2>suggestions for you</h2>
                        	<div class="inner-new">
                        		<img src="{{ asset('image/status-2.png')}}">
                        		<div class="new-user">
                        			<p><a href="#">Esther</a> requested to follow you</p>
                        			<div class="inner-accept">
                        			    <button>Accept</button>
                        			    <button class="reject">reject</button>
                        			</div>
                        		</div>
                        	</div>
                        	<div class="inner-new">
                        		<img src="{{ asset('image/status-4.png')}}">
                        		<div class="new-user">
                        			<p><a href="#">Brayden</a> requested to follow you</p>
                        			<div class="inner-accept">
                        			    <button>Accept</button>
                        			    <button class="reject">reject</button>
                        			</div>
                        		</div>
                        	</div>
                        	<div class="inner-new">
                        		<img src="{{ asset('image/status-3.png')}}">
                        		<div class="new-user">
                        			<p><a href="#">jacob@123</a> requested to follow you</p>
                        			<div class="inner-accept">
                        			    <button>Accept</button>
                        			    <button class="reject">reject</button>
                        			</div>
                        		</div>
                        	</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!------- Unfollow-modal --------->
    <div class="modal fade modal-report" id="unfollow" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <!-- <div class="modal-header border-bottom-0">
                   
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                </div> -->
                <div class="modal-body">
                	<div class="co_report co_report1 co_unf">
                		<div class="line"></div>
                		<img src="{{ asset('image/unfollow.png')}}">
                		<h4>Don't want to see this ?</h4>
                		<p>Lorem Ipsum is simply dummy text of the printing and typesetting indusstry. </p>
                		<button>Unfollow jane</button>
                	</div>
                </div>
            </div>
        </div>
    </div>



  

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.js"></script>
    <script type="text/javascript">
    	$('.search-box1').click(function(){
            $('.search-input').addClass('open');
            $('.search-input').removeClass('removeicon');
        });

        $('.search-input i').click(function(){
            $('.search-input').addClass('removeicon');
        });

    	
    	$('.slider-nav').slick({
            slidesToShow: 6,
            slidesToScroll: 1,
            dots: false,
            infinite: false,
            focusOnSelect: true
        });

        $('.slider-nav1').slick({
   slidesToShow: 1,
   slidesToScroll: 1,
   dots: false,
   infinite: false,
   focusOnSelect: true,
    prevArrow: '<div class="section2-arrow slide-arrow prev-arrow"><i class="fal fa-angle-left"></i></div>',
    nextArrow: '<div class="section2-arrow slide-arrow next-arrow"><i class="fal fa-angle-right"></i></div>'
 });

      $(document).ready(function() {
  var ellipsesText = "...";
  var expandText = "Read more";
  var collapseText ="Read less";
  $('.caption-text span').each(function() {
    var content = $(this).html();
    var collapseLimit = $(this).data('collapse-limit');
    if(content.length > collapseLimit) {
      var collapsedContent = content.substr(0, collapseLimit);
      var expandedContent = content.substr(collapseLimit, content.length - collapseLimit);
      $(this).empty();
      $(this).append($('<span />').addClass('collapsed-content').html(collapsedContent));
      $(this).append($('<span />').addClass('ellipses').html(ellipsesText));
      $(this).append($('<span />').addClass('expanded-content').html(expandedContent));
      $(this).append($('<button />').addClass('trigger').html(expandText));
    }
  });

  $(".caption-text span .trigger").click(function(){
    if($('.expanded-content').is(":visible")) {
      $(this).html(expandText);
    } else {
      $(this).html(collapseText);
    }
    $(this).siblings('.ellipses').toggle();
    $(this).siblings('.expanded-content').toggle();
  });
});

      $(document).ready(function(){
            $('.buttons').click(function(){
                $(this).addClass('active').siblings().removeClass('active');
                var filter = $(this).attr('data-filter')
                if(filter == 'all'){
                    $('.image').show(400);
                }else{
                    $('.image').not('.'+filter).hide(200);
                    $('.image').filter('.'+filter).show(400);
                }
            });
        });
    </script>

</body>
</html>