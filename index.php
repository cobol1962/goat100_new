<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
		<meta name="author" content="">
		<title>GOAT 100 - Greatest Of All Time 100</title>
		<link rel="apple-touch-icon" sizes="57x57" href="favicons/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="favicons/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="favicons/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="favicons/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="favicons/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="favicons/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="favicons/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="favicons/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="favicons/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="favicons/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicons/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="favicons/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicons/favicon-16x16.png">
<link rel="manifest" href="favicons/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="favicons/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">


    <!-- Lato Font -->
	<?php require($_SERVER["DOCUMENT_ROOT"] . "/include/database.php"); ?>
   <?php require($_SERVER["DOCUMENT_ROOT"] . "/include/css.php"); ?>
   <script type="text/javascript">

      </script>
<style>
	.demo-list-three {
		width: 77%;
		text-indent: -1.9em;
		padding-left: 51px!important;
		list-style-type: none;
	}

	span.btn-floating.btn-large.waves-effect.waves-light {
		width: 100px;
		height: 100px;
		line-height: 98px;
		font-size: 48px;

	}

	@media screen
		and (min-device-width: 1200px)
		and (max-device-width: 1600px)
		and (-webkit-min-device-pixel-ratio: 1) {
			span.btn-floating.btn-large.waves-effect.waves-light {
			margin-bottom: 8px;
			margin-top: -111px;
		}
	}

	@media only screen and (max-width: 992px){
			.gallery .gallery-action {
			right: -43px;
		}
	}

	.btn, .btn-large {
    background-color: #713e2ac4;

}
</style>
  </head>

  <body class="blue-grey darken-4">

    <!-- Navbar and Avatar -->

    <nav class="nav-extended nav-full-Avatar z-depth-0 blue-grey darken-3">
	 <div class="nav-background">
		<div class="active"  id='bg'>
			<div id='stars'></div>
			<div id='stars2'></div>
			<div id='stars3'></div>
		</div>
      </div>
      <div class="nav-background">

      </div>
      <div class="nav-wrapper container">

        <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
	      <li><a class="waves-effect waves-light btn modal-trigger" href="#loginModal">Login</a></li>
					<li><a class="waves-effect waves-light btn modal-trigger" href="#registerModalForm">Register</a></li>
					<li><a class='dropdown-button btn' href='#' data-activates='about-dropdown' data-belowOrigin="true" data-constrainWidth="false">About</a></li>

          <li profile style="display:none;"><a class="waves-effect waves-light btn modal-trigger" href="#profileForm"><img style="width:40px;height:40px;" src="" />&nbsp;<span></span></a></li>
        </ul>
        <!-- Dropdown Structure -->
        <ul id='about-dropdown' class='dropdown-content'>
          <li><a href="https://www.instagram.com/goat_100_"><img src="images/instagram.png" style="width:33%;height:auto;margin-left:10%;"></img></a></li>
          <li><a href="https://www.twitter.com/goat_100_"><img src="images/twitter-box.png" style="width:33%;height:auto;margin-left:10%;"></img></a></li>
        </ul>


      </div>
	   <div class="nav-header valign-wrapper" style="padding:70px 0;">
        <div class="center">
		  <img src ="images/logo_2018.png" style="width:  100%;height:  auto;"></img>
          <div class="tagline">
			<section id="section10">
			  <a href="#one!"><span style="margin-top:50px;"></span></a>
			</section></div>
        </div>
      </div>


      <div class="categories-wrapper" style="background-color:black;">
          <div class="categories-container pin-top" style="top: 0px;">
            <ul class="categories container">

              <li><a c="hottest" onclick="showCat(this);return false;" style="cursor:pointer;">🔥</a></li>
              <li><a c="goat" onclick="showCat(this);return false;" style="cursor:pointer;">🐐</a></li>
              <li><a c="uk"  onclick="showCat(this);return false;"  style="cursor:pointer;">🇬🇧</a></li>
              <li  class="active"><a c="all" onclick="showCat(this);return false;" style="cursor:pointer;">ALL</a></li>
            </ul>
          </div>
        </div>
    </nav>
    <ul class="side-nav" id="nav-mobile">
      <li><a class="waves-effect waves-light btn modal-trigger" href="#loginModal">Login</a></li>
	  <li><a class="waves-effect waves-light btn modal-trigger" href="#registerModalForm">Register</a></li>
	   <li profile style="display:none;"><a class="waves-effect waves-light btn modal-trigger" href="#profileForm"><img style="widrth:40px;height:40px;" src="" />&nbsp;<span></span></a></li>

    </ul>

    <!-- Gallery -->
    <div id="portfolio" class="section gray">

      <div class="gallery row" id="rows">

      </div>
    </div><!-- /.container -->
</div>
	</div>
<div id="loginModal" class="modal" style="background:transparent !important;border:none !important;box-shadow:none !important;">

    <div class="modal-content">

      <div class="modal-body">
		 <div class="omb_login">
		<center>
    	<h4 class="omb_authTitle">Login using</h4>
        <div class="row  omb_socialButtons">
    	    <div class="col-md-offset-3 col-xs-4 col-sm-2">
		        <a href="javascript:authentificate('facebook',checkFBlogin);" class="btn btn-lg btn-block omb_btn-facebook">
			        <i class="fa fa-facebook"></i>

		        </a>
	        </div>
        	<div class="col-xs-4 col-sm-2">
		        <a href="javascript:authentificate('twitter', checkTWlogin);" class="btn btn-lg btn-block omb_btn-twitter">
			        <i class="fa fa-twitter"></i>

		        </a>
	        </div>
        	<div class="col-xs-4 col-sm-2">
		        <a href="javascript:authentificate('google', checkGGlogin);" class="btn btn-lg btn-block omb_btn-google">
			        <i class="fa fa-google-plus"></i>

		        </a>
	        </div>
		</div>
		<div class="row omb_loginOr">
			<div class="col-md-offset-3 col-xs-12 col-sm-6">
				<hr class="omb_hrOr">
				<span class="omb_spanOr">or</span>
			</div>
		</div>

		<div class="row">
			<div class="col-md-offset-3 col-xs-12 col-sm-6">
			    <form class="omb_loginForm" action="" id="login_form" autocomplete="off" method="POST">
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-user"></i></span>
						<input type="text" class="form-control" name="email" id="email" placeholder="Email">
					</div>
					<span class="help-block"></span>

					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-lock"></i></span>
						<input  type="password" class="form-control" name="password" id="password" placeholder="Password">
					</div>
				</form>
				 <button class="btn btn-lg btn-primary btn-block" id="resetPassword" onclick="resetPassword();" style="margin-top:20px;">Forgot password</button>
                <button class="btn btn-lg btn-primary btn-block" id="login" onclick="loginEmail();" style="margin-top:20px;">Login</button>

			</div>
    	</div>

      </div>

    </div>

  </div>
  </center>

</div>
<div id="registerModalForm" class="modal" style="background:transparent !important;border:none !important;box-shadow:none !important;">


    <!-- Modal content-->
    <div class="modal-content">

      <div class="modal-body">
		 <div class="omb_login">
		<center>
    	<h4 class="omb_authTitle">Register using</h4>
        <div class="row  omb_socialButtons">
    	    <div class="col-md-offset-3 col-xs-4 col-sm-2">
		        <a href="javascript:authentificate('facebook',registerFB);" class="btn btn-lg btn-block omb_btn-facebook">
			        <i class="fa fa-facebook"></i>

		        </a>
	        </div>
        	<div class="col-xs-4 col-sm-2">
		        <a href="javascript:authentificate('twitter', registerTW);" class="btn btn-lg btn-block omb_btn-twitter">
			        <i class="fa fa-twitter"></i>

		        </a>
	        </div>
        	<div class="col-xs-4 col-sm-2">
		        <a href="javascript:authentificate('google', registerGG);" class="btn btn-lg btn-block omb_btn-google">
			        <i class="fa fa-google-plus"></i>

		        </a>
	        </div>
		</div>
		<div class="row omb_loginOr">
			<div class="col-md-offset-3 col-xs-12 col-sm-6">
				<hr class="omb_hrOr">
				<span class="omb_spanOr">or</span>
			</div>
		</div>

		<div class="row">
			<div class="col-md-offset-3 col-xs-12 col-sm-6">
			    <form class="omb_loginForm" action="" id="register_form" autocomplete="off" method="POST">
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-user"></i></span>
						<input type="text" class="form-control" name="email_register" id="email_register" placeholder="Email">
					</div>
					<span class="help-block"></span>

					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-lock"></i></span>
						<input  type="password" class="form-control" name="password_register" id="password_register" placeholder="Password">
					</div>
				</form>
                <button class="btn btn-lg btn-primary btn-block" id="login" onclick="registerEmail();" style="margin-top:20px;">Register</button>

			</div>
    	</div>

      </div>



  </div>
  </center>
  </div>
</div>
<div id="disqus_thread"></div>
<div id="profileForm" class="modal" style="background:transparent !important;border:none !important;box-shadow:none !important;">

	<div class="modal-content">
		<center>
			<div class="modal-body">
				<div class="row">
					<div class="col-md-4">
						<div class="row" style="margin-top:10px;">
							<div style="width:100%;text-align:center;">
								<div id="picture_container_avatar" style="min-height:155px;margin-top:5px;width:100%;margin:0px auto;">
								  <img class="picture_avatar" style="max-width:80px;width:80px;height:auto;" id="picture_avatar" src=''>
							   </div>

							</div>
						 </div>
						 <div class="row">
							<div class="col-md-12" id="croppie_container_avatar" style="display:none;min-height:150px;margin:10px auto;">
							   <div class="text-center" style="width:100%;">
								  <div id="upload_avatar"></div>
							   </div>
							</div>
						 </div>
						 <div class="row" style="margin-top: 10px;">
							<div class="btn-group">
								  <input type="file" accept=".gif,.png,.jpg,.jpeg" style="display:none;" id="images_avatar" />
								  <button type="button" id="setAvatar" onclick="$('#images_avatar').trigger('click');" class="btn btn-primary" style="min-width:118px;margin-bottom:0px;margin-top:0px;">New</button>
								  <button type="button" id="resetAvatar" onclick="resetAvatar();" class="btn btn-danger" style="min-width:118px;margin-bottom:0px;margin-top:0px;">Reset</button>
								  <button type="button" id="saveAvatar" style="display:none;min-width:118px;" class="btn btn-success">Set</button>
								  <button type="button" id="cancelAvatar" onclick="cancelAvatar();" class="btn btn-danger" style="display:none;min-width:118px;margin-bottom:0px;margin-top:0px;">Cancel</button>
							   </div>
						 </div>
				 </div>
				 <div class="col-md-8">

					<form id="profileForm">
					  <div class="form-group">
						<input type="text" class="form-control" id="inputNick"  name="inputNick" placeholder="Enter nick name">

					  </div>
					   <div class="form-group">
						<input type="text" class="form-control" email id="inputFullName"  name="fullName" placeholder="Enter full name.">

					  </div>
					   <div class="form-group">
						<input type="password" email class="form-control" name="inputPassword" id="inputPassword" placeholder="If you wish to change password, enter new one.">

					  </div>
					</form>
					 <button type="button" onclick="saveProfile();" class="btn btn-danger">Save profile</button>
				</div>
			 </div>
			</div>
	  </center>
	</div>
</div>
    <!-- Core Javascript -->
	<?php require($_SERVER["DOCUMENT_ROOT"] . "/include/js.php"); ?>
  </body>
  <script type="text/javascript">
var $masonry = null;
$(document).ready(function() {
  var ww = setInterval(function() {

    if ($("#disqus_thread").length > 0) {
      clearInterval(ww);
      $("#disqus_thread").hide();
    }
  }, 100);
  (function() { // DON'T EDIT BELOW THIS LINE
    var d = document, s = d.createElement('script');
    s.src = 'https://goat100.disqus.com/embed.js';
    s.setAttribute('data-timestamp', +new Date());
    (d.head || d.body).appendChild(s);
  })();
  alert("111111");
  $.ajax({
    url: "http://goat100.com/ajax/getRecords.php",
    type: "POST",
    async: false,
    success: function(res) {
        $("#rows").html(res);
    }
  })
  setTimeout(function() {
    $.each($(".gallery-cover").find(".btn-floating.btn-large.waves-effect.waves-light").eq(0), function(ind) {
      this.innerHTML = ind + 1;
    });
  }, 1000);

  $masonry = $('.gallery');
  $masonry.masonry({
    // set itemSelector so .grid-sizer is not used in layout
    itemSelector: '.gallery-item',
    // use element for option
    columnWidth: '.gallery-item',
    // no transitions
    transitionDuration: 0
  });

// layout Masonry after each image loads
  $masonry.imagesLoaded(function() {
    $masonry.masonry('layout');
  });
  setTimeout(function() {
        $(".gallery-cover").bind("click", function(e) {
          var $el = $(this).closest(".gallery-item").find(".gallery-body").find(".btn-floating.btn-large.waves-effect.waves-light");
          $el.html($(this).closest(".gallery-item").attr("order"));
          $("div[id='disqus_thread']").remove();
          var t = $(e.target);

          t.closest(".gallery-curve-wrapper").find("[target='disqus']").append("<div id='disqus_thread'></div>");
          var pid = t.closest(".gallery-curve-wrapper").attr("pageid");
        
          setTimeout(function() {
            DISQUS.reset({
                  reload: true,
                  config: function () {
                      this.page.identifier = pid;
                      this.page.title = pid;
                      this.page.url = "http://goat100.com/#!" + pid;
                      this.language = "en";
                  }
              });

            }, 1000);

        });
      }, 2000);
});
	function showCat(obj) {
    var cat = $(obj).attr("c");
    if (cat == "all") {
			$("[category]").removeAttr("hidden");
		} else {
			$.each($("[category]"), function() {
				var cc = $(this).attr("category").split(",");
				var ss = cc.indexOf(cat);
      	if (ss == -1) {
          $(this).attr("hidden", "");
				} else {
					$(this).removeAttr("hidden");
				}
			});
		}

    $masonry.masonry('layout');
    $.each($("[order]:visible"), function(ind) {
      $(this).attr("order", ind + 1);
    });
	}

  </script>
  <script src="js/init.js?v=<?=time()?>"></script>
</html>
