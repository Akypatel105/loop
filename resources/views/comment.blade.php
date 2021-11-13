<!DOCTYPE html>
<html>

<head>
    <title>LOOP</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="/css/home.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="icon" href="image/logo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">


</head>

<body class="body">
    <div class="co_header">
        <div class="container">
            <div class="row row1">
                <div class="col-lg-6">
                    <div class="row row1">
                        <div class="col-lg-4">
                            <div class="logo">
                                <a href="{{ url('/index') }}"><img src="image/logo.png"></a>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <ul class="menu">
                                <li><a href="{{ url('/index') }}"><i class="fas fa-home"></i></a></li>
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
                                        <img src="image/user.jpg">
                                    </div>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="user-profile.html"><span><i
                                                    class="far fa-user"></i> profile</span></a>
                                        <a class="dropdown-item" href="#"><span><i
                                                    class="fal fa-cog"></i>setting</span></a>
                                        <a class="dropdown-item" href="#"><span><i class="far fa-bookmark"></i>
                                                saved</span></a>
                                        <div class="dropdown-divider"><span><i class="far fa-sync-alt"></i> switch
                                                accounts</span></div>
                                        <a class="dropdown-item" href="#"><span>log out</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
                    <div class="main-user-profile">
                        <div class="inner-post">
                            <div class="inner-post comment-post">
                                <div class="post-section1">
                                    <div class="row row1">
                                        <div class="col-lg-12">
                                            <div class="new-post">
                                                <a href="{{ url('/index') }}"><i
                                                        class="post-left far fa-long-arrow-left"></i>
                                                </a> Comment
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="comment-section2">
                                    @foreach ($postCaption as $p)
                                        <div class="caption-text">
                                            <a href="#">{{ $p['user']['name'] }}</a>
                                            <span data-collapse-limit="70">{{ $p['post_caption'] }}</span>
                                        </div>
                                        <div class="all-comment">
                                    @endforeach




                                    @foreach ($postComment as $pc)
                                        <div class="cm-1">
                                            <div class="user-image">
                                                @if ($pc['user']['profile_image'] == '')
                                                    <img src="{{ asset('profile_images/default.png') }}">
                                                @else
                                                    <img
                                                        src="{{ asset('profile_images/' . $pc['user']['profile_image']) }}">
                                                @endif
                                            </div>
                                            <div class="caption-text">
                                                <a href="#">{{ $pc['user']['name'] }}</a>
                                                <span data-collapse-limit="70">{{ $pc['post_comment'] }}</span>
                                            </div>
                                            <time class="timeago" datetime="2021-07-17T09:24:17Z"></time>
                                        </div>

                                    @endforeach

                                    <!-- <div class="cm-1">
                                <div class="user-image">
                                <img src="image/status-2.png">
                                </div>
                                <div class="caption-text">
                                <a href="#">Chess</a>
                                <span data-collapse-limit="70">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</span>
                                </div>
                                <p>10 minutes ago</p>
                                </div>
                                <div class="cm-1">
                                <div class="user-image">
                                <img src="image/status-3.jpg">
                                </div>
                                <div class="caption-text">
                                <a href="#">Goose</a>
                                <span data-collapse-limit="70">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</span>
                                </div>
                                <p>10 minutes ago</p>
                                </div>
                                <div class="cm-1">
                                <div class="user-image">
                                <img src="image/status-5.jpg">
                                </div>
                                <div class="caption-text">
                                <a href="#">Free Fire</a>
                                <span data-collapse-limit="70">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</span>
                                </div>
                                <p>10 minutes ago</p>
                                </div>
                                <div class="cm-1">
                                <div class="user-image">
                                <img src="image/status-8.jpg">
                                </div>
                                <div class="caption-text">
                                <a href="#">Checkers</a>
                                <span data-collapse-limit="70">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</span>
                                </div>
                                <p>10 minutes ago</p>
                                </div> -->
                                </div>
                                <div class="comment-fillup">
                                    <form>
                                        <div class="user-image">
                                            @foreach ($postCaption as $p)
                                                @if ($p['user']['profile_image'] == '')
                                                    <img src="{{ asset('profile_images/default.png') }}">
                                                @else
                                                    <img
                                                        src="{{ asset('profile_images/' . $p['user']['profile_image']) }}">
                                                @endif

                                            @endforeach

                                        </div>
                                        <textarea placeholder="Add a comments..."></textarea>
                                        <input type="submit" value="post">
                                    </form>
                                </div>

                            </div>
                        </div>
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
                        <img src="image/advertisement.png">
                    </div>
                    <div class="right-section1 right-section3">
                        <div class="sidebar-title">
                            <h4>Conversation</h4>
                            <a href="#">Hide Chat</a>
                        </div>
                        <div class="online-list">
                            <div class="online">
                                <img src="image/status-2.png">
                            </div>
                            <p>Esther</p>
                        </div>
                        <div class="online-list">
                            <div class="online">
                                <img src="image/status-3.png">
                            </div>
                            <p>jacob@123</p>
                        </div>
                        <div class="online-list">
                            <div class="online">
                                <img src="image/status-4.png">
                            </div>
                            <p>Brayden</p>
                        </div>
                        <div class="online-list">
                            <div class="online">
                                <img src="image/status-5.png">
                            </div>
                            <p>Coinneach</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>


    <!----- Notification-modal ------->
    <div class="modal fade modal-2" id="form1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
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
                            <div class="search-input"><input type="text" placeholder="search."><i
                                    class="fal fa-times"></i></div>
                        </div>
                        <div class="co_new">
                            <h2>New</h2>
                            <div class="inner-new">
                                <img src="image/status-2.png">
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
                                <img src="image/status-2.png">
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
                                <img src="image/status-2.png">
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
                                <img src="image/status-2.png">
                                <div class="new-user">
                                    <p><a href="#">Esther</a> requested to follow you</p>
                                    <div class="inner-accept">
                                        <button>Accept</button>
                                        <button class="reject">reject</button>
                                    </div>
                                </div>
                            </div>
                            <div class="inner-new">
                                <img src="image/status-4.png">
                                <div class="new-user">
                                    <p><a href="#">Brayden</a> requested to follow you</p>
                                    <div class="inner-accept">
                                        <button>Accept</button>
                                        <button class="reject">reject</button>
                                    </div>
                                </div>
                            </div>
                            <div class="inner-new">
                                <img src="image/status-3.png">
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




    <script src="jquery.min.js" type="text/javascript"></script>
    <script src=" https://cdnjs.cloudflare.com/ajax/libs/timeago.js/4.0.2/timeago.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        $('.inner-search .search-box1').click(function() {
            $('.search-input').addClass('open');
            $('.search-input').removeClass('removeicon');
        });

        $('.search-input i').click(function() {
            $('.search-input').addClass('removeicon');
        });

        $('.inner-search1 .search-box1').click(function() {
            $('.search-input1').addClass('open');
            $('.search-input1').removeClass('removeicon');
        });

        $('.search-input1 i').click(function() {
            $('.search-input1').addClass('removeicon');
        });

        jQuery(document).ready(function() {

            jQuery("time.timeago").timeago();

        });

        $(document).ready(function() {
            var ellipsesText = "...";
            var expandText = "Read more";
            var collapseText = "Read less";
            $('.caption-text span').each(function() {
                var content = $(this).html();
                var collapseLimit = $(this).data('collapse-limit');
                if (content.length > collapseLimit) {
                    var collapsedContent = content.substr(0, collapseLimit);
                    var expandedContent = content.substr(collapseLimit, content.length - collapseLimit);
                    $(this).empty();
                    $(this).append($('<span />').addClass('collapsed-content').html(collapsedContent));
                    $(this).append($('<span />').addClass('ellipses').html(ellipsesText));
                    $(this).append($('<span />').addClass('expanded-content').html(expandedContent));
                    $(this).append($('<button />').addClass('trigger').html(expandText));
                }
            });
            $(".caption-text span .trigger").click(function() {
                if ($('.expanded-content').is(":visible")) {
                    $(this).html(expandText);
                } else {
                    $(this).html(collapseText);
                }
                $(this).siblings('.ellipses').toggle();
                $(this).siblings('.expanded-content').toggle();
            });
        });
    </script>
</body>

</html>
