<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
        <title><?=$PageTitle?></title>
        <link rel="icon" type="image/png" href="<?=base_url()?>Asset/img/tbl.jpg">
        <link rel="stylesheet" href="<?=base_url()?>Asset/fonts/fontawesome/css/all.min.css">
        <link rel="stylesheet" href="<?=base_url()?>Asset/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?=base_url()?>Asset/style.css">
        <link rel="stylesheet" href="<?=base_url()?>Asset/css/modal-video.min.css">
        <script src="<?=base_url()?>Asset/js/jquery-3.2.1.min.js"></script>
        <script src="<?=base_url()?>Asset/js/bootstrap.min.js"></script>
        <script src="<?=base_url()?>Asset/js/lazysizes.min.js"></script>
        <script src="<?=base_url()?>Asset/js/widgets.js"></script>
        <script src="<?=base_url()?>Asset/js/jquery-modal-video.min.js"></script>
        <script src="<?=base_url()?>Asset/js/modal-video.min.js"></script>
    </head>
    <body oncontextmenu='return false' onselectstart='return false'>
        <button id="btntop" title="Go to top"><i class="fas fa-chevron-up fa-lg"></i></button>

        <nav class="navbar navbar-expand-lg fixed-top">
            <div class="container-fluid">
                <a href="<?=base_url()?>" class="navbar-brand">
                    <img src="<?=base_url()?>Asset/img/logo-black.png">
                </a>
                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar top-bar"></span>
                    <span class="icon-bar middle-bar"></span>
                    <span class="icon-bar bottom-bar"></span>			
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="<?php echo $active == "About" ? "nav-item active" : ""; ?>">
                            <a class="nav-link" href="<?=base_url('About')?>">ABOUT</a>
                        </li>
                        <li class="<?php echo $active == "Artists" ? "nav-item active" : ""; ?>">
                            <a class="nav-link" href="<?=base_url('Artists')?>">ARTISTS</a>
                        </li>
                        <li class="<?php echo $active == "Multimedia" ? "nav-item active" : ""; ?>">
                            <a class="nav-link" href="<?=base_url()?>Multimedia/1">MULTIMEDIA</a>
                        </li>
                        <li class="<?php echo $active == "Audition" ? "nav-item active" : ""; ?>">
                            <a class="nav-link" href="https://www.instagram.com/theblacklabel_audition" target="_blank">AUDITION</a>
                        </li>
                    </ul>
                    <div class="theme-switch-wrapper">
                        <a>DARK MODE</a>
                        <label class="theme-switch" for="checkbox">
                            <input type="checkbox" id="checkbox" />
                            <div class="slider round"></div>
                        </label>
                    </div>
                </div>
            </div>
        </nav>

        <?php $this->load->view($content);?>
        
        <div class="page-footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-md-5">
                        <div class="dropup">
                            <div class="dropdown">
                                <div class="row">
                                    <div class="col-sm-9 col-10">YG Family Site</div>
                                    <div class="col-sm-3 col-2"><span class="fas fa-caret-up"></span></div>
                                </div>
                            </div>
                            <ul class="dropdown-menu">
                                <li><a href="https://ygfamily.com" target="_blank">YG Entertainment</a></li>
                                <li><a href="https://yg-life.com/?lang=ko" target="_blank">YG Life</a></li>
                                <li><a href="https://www.ygselect.com/" target="_blank">YG Select</a></li>
                                <li><a href="https://ygx.co.kr" target="_blank">YGX Entertainment</a></li>
                                <li><a href="https://ygfamily.com/artist/Actors.asp?LANGDIV=K&ATYPE=1" target="_blank">YG Stage</a></li>
                                <li><a href="https://ygkplus.com/" target="_blank">YG KPlus</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-7">
                        <h5>Copyright &copy; 2021 The Black Label. All rights reserved</h5>
                    </div>
                </div>
            </div>
        </div>
        <script>
            //Twitter Custom CSS
            $('.twitter-feed').delegate('#twitter-widget-0', 'DOMSubtreeModified propertychange', function () {
                customizeTweetMedia();
            });
            var customizeTweetMedia = function () {
                $('.twitter-feed').find('.twitter-timeline').contents().find('.timeline-Tweet').hover(function(){$(this).css("background-color", "rgb(20,20,20)");}, function(){$(this).css("background-color", "rgb(30,30,30)");});
                $('.twitter-feed').find('.twitter-timeline').contents().find('.timeline-Tweet').css('background-color', 'rgb(40,40,40)');
                $('.twitter-feed').find('.twitter-timeline').contents().find('.timeline-Tweet').css('padding', '21px');
                $('.twitter-feed').find('.twitter-timeline').contents().find('.timeline-Tweet').css('border-bottom', '1px solid rgb(73,73,73)');
                $('.twitter-feed').find('.twitter-timeline').contents().find('.timeline-Tweet-media').css('display', 'none');
                $('.twitter-feed').find('.twitter-timeline').contents().find('span.TweetAuthor-name').css('color', 'rgb(245,245,245)'); 
                $('.twitter-feed').find('.twitter-timeline').contents().find('span.TweetAuthor-screenName').css('display', 'none');
                $('.twitter-feed').find('.twitter-timeline').contents().find('p.timeline-tweet-text').css('margin-top', '21px');
                $('.twitter-feed').find('.twitter-timeline').contents().find('p.timeline-tweet-text').css('font-family', 'Roboto');
                $('.twitter-feed').find('.twitter-timeline').contents().find('p.timeline-tweet-text').css('font-size', '14px');
                $('.twitter-feed').find('.twitter-timeline').contents().find('p.timeline-tweet-text').css('color', 'rgb(245,245,245)');
                $('.twitter-feed').find('.twitter-timeline').contents().find('ul.timeline-tweet-actions').css('display', 'none');

                $('.twitter-feed').find('.twitter-timeline').contents().find('.timeline-TweetList').bind('DOMSubtreeModified propertychange', function () {
                    customizeTweetMedia(this);
                });
            }
            
            //Go to top
            $(document).ready(function() {
                $('#btntop').click(function() {
                    $("html, body").animate({scrollTop: 0}, 300);
                });
            }); 
            var mybutton = document.getElementById("btntop");
            window.onscroll = function() {scrollFunction()};
            function scrollFunction() {
                if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
                    mybutton.style.display = "block";
                } else {
                    mybutton.style.display = "none";
                }
            }
            
            //Switch to dark mode
            const toggleSwitch = document.querySelector('.theme-switch input[type="checkbox"]');
            function switchTheme(e) {
                if (e.target.checked) {
                    document.documentElement.setAttribute('data-theme', 'dark');
                }
                else {
                    document.documentElement.setAttribute('data-theme', 'light');
                }    
            }
            toggleSwitch.addEventListener('change', switchTheme, false);
            function switchTheme(e) {
                if (e.target.checked) {
                    document.documentElement.setAttribute('data-theme', 'dark');
                    localStorage.setItem('theme', 'dark'); //add this
                }
                else {
                    document.documentElement.setAttribute('data-theme', 'light');
                    localStorage.setItem('theme', 'light'); //add this
                }    
            }
            const currentTheme = localStorage.getItem('theme') ? localStorage.getItem('theme') : null;
            if (currentTheme) {
                document.documentElement.setAttribute('data-theme', currentTheme);

                if (currentTheme === 'dark') {
                    toggleSwitch.checked = true;
                }
            }

            //Load more album
            $(document).ready(function() {
                var url = window.location.href;
                var idx = url.indexOf("Artist_Detail");
                var id = url.substring(idx).split("/")[1];
                var limit = 4;
                var start = 0;
                var action = 'inactive';
                function load_album_data(limit, start, id) {
                    $.ajax({
                        url: "<?=base_url('TBLController/loadalbum')?>",
                        method: "POST",
                        data: {limit:limit, start:start, id:id},
                        cache: false,
                        success:function(data) {
                            $('#loadalbum').append(data);
                            if(data == '') {
                                action = 'active';
                            }
                            else {
                                action = 'inactive';
                            }
                        }
                    });
                }
                if(action == 'inactive') {
                    action = 'active';
                    load_album_data(limit, start, id);
                }
                $(window).scroll(function() {
                    if($(window).scrollTop() + $(window).height() > $("#loadalbum").height() && action == 'inactive') {
                        action = 'active';
                        start = start + limit;
                        setTimeout(function() {
                            load_album_data(limit, start, id);
                        }, 1000);
                    }
                });
            });

            //See credit song
            function Open(id) {
                $('#rowcredit'+id).slideToggle();
            }

            //Autoplay video
            $(".playbtn").modalVideo();

            //Change video
            function myFunction(imgs) {
                var expandImg = document.getElementById("expandedImg");
                var imgText = document.getElementById("imgtext");
                expandImg.src = imgs.alt;
                imgText.innerHTML = imgs.id;
                $("html, body").animate({scrollTop: 0}, 300);
            }
        </script>
    </body>
</html>     