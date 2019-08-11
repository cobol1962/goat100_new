<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Gallery</title>
	<?php require($_SERVER["DOCUMENT_ROOT"] . "/include/database.php"); ?>
   <?php require($_SERVER["DOCUMENT_ROOT"] . "/include/css.php"); ?>
    <!-- Lato Font -->
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>

    <!-- Stylesheet -->
    <link href="css/gallery-dark-materialize.min.css" rel="stylesheet">

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
        </style>

    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  </head>

  <body class="blue-grey darken-4">

    <!-- Navbar and Header -->
    <nav class="nav-extended nav-full-header z-depth-0 blue-grey darken-3">
      <div class="nav-background">
		<div class="active"  id='bg'>
			<div id='stars'></div>
			<div id='stars2'></div>
			<div id='stars3'></div>
		</div>
      </div>
      <div class="nav-wrapper container">
        <a href="index.html" class="brand-logo"><i class="material-icons">language</i>GOAT 100</a>
        <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
          <li><a href="index.html">Gallery</a></li>
          <li class="active"><a href="index-dark.html">Dark Theme</a></li>
          <li><a href="blog.html">Blog</a></li>
          <li><a href="docs.html">Docs</a></li>
          <li><a class='dropdown-button' href='#' data-activates='feature-dropdown' data-belowOrigin="true" data-constrainWidth="false">Features<i class="material-icons right">arrow_drop_down</i></a></li>
        </ul>
        <!-- Dropdown Structure -->
        <ul id='feature-dropdown' class='dropdown-content'>
          <li><a href="full-header.html">Fullscreen Header</a></li>
          <li><a href="horizontal.html">Horizontal Style</a></li>
          <li><a href="no-image.html">No Image Expand</a></li>
        </ul>

      </div>

      <div class="nav-header valign-wrapper">
        <div class="center">
		  <img src ="images/logo_2018.png" style="width:  100%;height:  auto;"></img>
          <div class="tagline">
			<section id="section10">
			  <a href="#one!"><span></span></a>
			</section>
			</div>
        </div>
      </div>

      <!-- Fixed Masonry Filters -->
      <div class="categories-wrapper">
        <div class="categories-container">
          <ul class="categories container">
            <li class="active"><a href="#all">Hot Hip-Hop 100</a></li>
            <li><a href="#polygon">GOAT 100</a></li>
            <li><a href="#bigbang">Hot Rock 100</a></li>
            <li><a href="#sacred">Hot Dance 100</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <ul class="side-nav" id="nav-mobile">
      <li><a href="index.html"><i class="material-icons">camera</i>Gallery</a></li>
      <li class="active"><a href="index-dark.html"><i class="material-icons">brightness_3</i>Dark Theme</a></li>
      <li><a href="blog.html"><i class="material-icons">edit</i>Blog</a></li>
      <li><a href="docs.html"><i class="material-icons">school</i>Docs</a></li>
      <li><a href="full-header.html"><i class="material-icons">fullscreen</i>Fullscreen Header</a></li>
      <li><a href="horizontal.html"><i class="material-icons">swap_horiz</i>Horizontal Style</a></li>
      <li><a href="no-image.html"><i class="material-icons">texture</i>No Image Expand</a></li>
    </ul>

    <!-- Gallery -->
    <div id="portfolio" class="section gray">
      <div class="gallery row">
        <div class="col l4 m6 s12 gallery-item gallery-expand gallery-filter polygon">
          <div class="gallery-curve-wrapper">
              <a class="gallery-cover gray">
                  <p class ="gallery-name" style="position: absolute;top: 258px;left: 0;width: 100%;"><span class="waves-effect waves-light btn" >Drake</span></p>
                <img class="responsive-img" src="images/drake/artist-01.jpg" alt="placeholder">
              </a>
            <div class="gallery-body">
              <div class="title-wrapper">
			  <span class="btn-floating btn-large waves-effect waves-light">1</span>
                <h3>Drake</h3>
                <span class="price">Aubrey Drake Graham<br>
October 24, 1986 (age 31)<br>
Toronto, Ontario, Canada<br>
</span>

              </div>
              <p class="description">
			The 6 God! From smashing billboards records, creating numerous number ones and bringing light to a whole country, Drake has been a formidable force for over 8 years with over 40 million records sold, stadium tours and has been awarded some of the most precious awards across the globe. Drake is undeniably a top act that will go down in history for his game-changing approaches.   
              <p class="description">
<!-- Three Line List with secondary info and action -->             
                <ul class="collapsible">
                    <li>
                        <div class="collapsible-header">
                          <i class="material-icons">whatshot</i>
                          Notables
                          </div>
                        <div class="collapsible-body"><p> <ul class="demo-list-three mdl-list">
                            <li class="mdl-list__item mdl-list__item--three-line">
                              <span class="mdl-list__item-primary-content">
                                <i class="material-icons mdl-list__item-avatar" style="position: relative;top: 19px;left:0px;line-height: 25px;font-size:55px;">monetization_on</i>
                                <span style="font-size: 25px;">Sales</span><br>
                                <span class="mdl-list__item-text-body">
                                 Over 20 Million Albums sold & 100 Million singles including over a billion streams for "One Dance".
                                </span>
                              </span>
                            </li>
                            <li class="mdl-list__item mdl-list__item--three-line">
                              <span class="mdl-list__item-primary-content">
                                <i class="material-icons mdl-list__item-avatar" style="position: relative;top: 19px;left:0px;line-height: 25px;font-size:55px;">stars</i>
                                <span style="font-size: 25px;">Accolades</span><br>
                                <span class="mdl-list__item-text-body">
                                  Drake has won 3 of his 35 Grammy<sup>&reg;</sup> nominations, winning Best Rap Album of 2013 with "Take Care". He also celebrated a huge win of 13 Billboard Awards in 2017 including Top Male Musician.
                              </span>
                            </li>
                            <li class="mdl-list__item mdl-list__item--three-line">
                              <span class="mdl-list__item-primary-content">
                                <i class="material-icons mdl-list__item-avatar" style="position: relative;top: 19px;left:0px;line-height: 25px;font-size:55px;">public</i>
                                <span style="font-size: 25px;">Impact</span><br>
                                <span class="mdl-list__item-text-body">
                                 Drake is a global icon of the new age. He has not only possess an artitry that has taken him around the earth including 13 dates in the O2 Arena in London, UK 
                                 but also has a record label, <i>OVO Sound</i> but also has a succussful clothing brand & numerous other ventures that keep him on the pulse of the culture. 
                                </span>
                              </span>
                            </li>
                          </ul>
                        </p></div>
                      </li>
                  <li>
                    <div class="collapsible-header">
                      <i class="material-icons">library_music</i>
                      Spotify
                      </div>
                    <div class="collapsible-body"><p><iframe src="https://open.spotify.com/embed?uri=spotify:artist:3TVXtAsR1Inumwj472S9r4&theme=white" width="100%" height="380" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
                    </p></div>
                  </li>
                  <li>
                    <div class="collapsible-header">
                      <i class="material-icons">library_music</i>
                      Apple Music
                      </div>
                    <div class="collapsible-body"><p><iframe allow="autoplay *; encrypted-media *;" frameborder="0" height="450" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation-by-user-activation" src="https://embed.music.apple.com/us/playlist/drake-essentials/pl.b8afd0ec852542f785a5f7a4a9a80d6a?app=music" width="100%"></iframe>
                    </p></div>
                  </li>
                  <li>
                    <div class="collapsible-header">
                      <i class="material-icons">comment</i>
                      Comment Board
                      </div>
                    <div class="collapsible-body"><p> <div id="disqus_thread"></div>
                      <script>
                      
                      /**
                      *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                      *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
                      /*
                      var disqus_config = function () {
                      this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
                      this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                      };
                      */
                      (function() { // DON'T EDIT BELOW THIS LINE
                      var d = document, s = d.createElement('script');
                      s.src = 'https://goat100.disqus.com/embed.js';
                      s.setAttribute('data-timestamp', +new Date());
                      (d.head || d.body).appendChild(s);
                      })();
                      </script>
                      <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                    </p></div>
                  </li>
                </ul>
             
                <div class="carousel-wrapper">
                  <div class="carousel">
                    <a class="carousel-item" href="#one!"><img src="images/drake/artist-01.jpg"></a>
                    <a class="carousel-item" href="#two!"><img src="images/drake/artist-02.jpg"></a>
                    <a class="carousel-item" href="#three!"><img src="images/drake/artist-03.jpg"></a>
                    <a class="carousel-item" href="#four!"><img src="images/drake/artist-04.jpg"></a>
                    <a class="carousel-item" href="#five!"><img src="images/drake/artist-05.jpg"></a>
                  </div>
                </div>
                            
              </div>
			  <div class="gallery-action">
              <a class="btn-floating btn-large waves-effect waves-light"><i class="material-icons">thumb_up</i></a>
			    <a class="btn-floating btn-large waves-effect waves-light"><i class="material-icons">thumb_down</i></a>
            </div>
          </div>
        </div>
        <div class="col l4 m6 s12 gallery-item gallery-expand gallery-filter polygon">
          <div class="gallery-curve-wrapper">
            <a class="gallery-cover gray">
                <p class ="gallery-name" style="position: absolute;top: 258px;left: 0;width: 100%;"><span class="waves-effect waves-light btn" >Kendrick Lemar</span></p>
              <img class="responsive-img" src="images/kendricklemar/artist-01.jpg" alt="placeholder">
            </a>
            <div class="gallery-body">
              <div class="title-wrapper">
			  <span class="btn-floating btn-large waves-effect waves-light">2</span>
                <h3>Kendrick Lemar</h3>
                <span class="price">Kendrick Lamar Duckworth<br>
                  June 17, 1987 (age 30)<br>
                  Compton, California, U.S.<br>
</span>

              </div>
              <p class="description">
                Hailing from Compton, Kendrick Lemar has arguably taken the crown of king of rap with critically acclaimed albums, each winning prestigious awards. His latest album “<strong>DAMN</strong>” won 5 Grammys<sup>&reg;</sup> in 2018 including Best Rap Album. Back by the ecchloen of labels, <i>TDE</i>, the whole team are provided amazing works that not only push the culture forward yet make us remember why we are great.
              <p class="description">
<!-- Three Line List with secondary info and action -->             
                <ul class="collapsible">
                    <li>
                        <div class="collapsible-header">
                          <i class="material-icons">whatshot</i>
                          Notables
                          </div>
                        <div class="collapsible-body"><p> <ul class="demo-list-three mdl-list">
                            <li class="mdl-list__item mdl-list__item--three-line">
                              <span class="mdl-list__item-primary-content">
                                <i class="material-icons mdl-list__item-avatar" style="position: relative;top: 19px;left:0px;line-height: 25px;font-size:55px;">monetization_on</i>
                                <span style="font-size: 25px;">Sales</span><br>
                                <span class="mdl-list__item-text-body">
                                 Over 4 Million Albums sold in the US with each of his albums charting in numerous other countries. <i>"Humble"</i> is the only rap song in 2017 to sell over 1,000,000 digital copies and is eligible for 7x platinum certification in the United States.
                                </span>
                              </span>
                            </li>
                            <li class="mdl-list__item mdl-list__item--three-line">
                              <span class="mdl-list__item-primary-content">
                                <i class="material-icons mdl-list__item-avatar" style="position: relative;top: 19px;left:0px;line-height: 25px;font-size:55px;">stars</i>
                                <span style="font-size: 25px;">Accolades</span><br>
                                <span class="mdl-list__item-text-body">
The only non-classical artist to win the prestious Pultizer Prize for "<strong>DAMN</strong>". Kendrick Lamar has won 96 awards, including 12 Grammy<sup>&reg;</sup> Awards, 6 Billboard Music Awards, and the ASCAP Vanguard Award.
                                </span>
                            </li>
                            <li class="mdl-list__item mdl-list__item--three-line">
                              <span class="mdl-list__item-primary-content">
                                <i class="material-icons mdl-list__item-avatar" style="position: relative;top: 19px;left:0px;line-height: 25px;font-size:55px;">public</i>
                                <span style="font-size: 25px;">Impact</span><br>
                                <span class="mdl-list__item-text-body">
                                 
                                  Time<sup>&reg;</sup> named him one of the 100 most influential people in the world in 2016. His songs have transcended to millions, inspiring and thought provoking minds across the nation. His hit song <i>"Alright"</i> was a socially aware record that was used by activists calling for change.

                                </span>
                              </span>
                            </li>
                          </ul>
                        </p></div>
                      </li>
                  <li>
                    <div class="collapsible-header">
                      <i class="material-icons">library_music</i>
                      Spotify
                      </div>
                    <div class="collapsible-body"><p><iframe src="https://open.spotify.com/embed?uri=spotify:artist:2YZyLoL8N0Wb9xBt1NhZWg&theme=white" width="100%" height="380" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
                    </p></div>
                  </li>
                  <li>
                    <div class="collapsible-header">
                      <i class="material-icons">library_music</i>
                      Apple Music
                      </div>
                    <div class="collapsible-body"><p><iframe allow="autoplay *; encrypted-media *;" frameborder="0" height="450" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation-by-user-activation" src="https://embed.music.apple.com/us/playlist/kendrick-lamar-essentials/pl.8155ebe08de7423ca2b29929c8adeebd?app=music" width="100%"></iframe>
                    </p></div>
                  </li>
                  <li>
                    <div class="collapsible-header">
                      <i class="material-icons">comment</i>
                      Comment Board
                      </div>
                    <div class="collapsible-body"><p> 
                        <div id="disqus_thread"></div>
                        <script>
                        
                        /**
                        *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                        *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
                        /*
                        var disqus_config = function () {
                        this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
                        this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                        };
                        */
                        (function() { // DON'T EDIT BELOW THIS LINE
                        var d = document, s = d.createElement('script');
                        s.src = 'https://goat100-1.disqus.com/embed.js';
                        s.setAttribute('data-timestamp', +new Date());
                        (d.head || d.body).appendChild(s);
                        })();
                        </script>
                        <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                                                    
                    </p></div>
                  </li>
                </ul>
             
                <div class="carousel-wrapper">
                  <div class="carousel">
                    <a class="carousel-item" href="#one!"><img src="images/kendricklemar/artist-01.jpg"></a>
                    <a class="carousel-item" href="#two!"><img src="images/kendricklemar/artist-02.jpg"></a>
                    <a class="carousel-item" href="#three!"><img src="images/kendricklemar/artist-03.jpg"></a>
                    <a class="carousel-item" href="#four!"><img src="images/kendricklemar/artist-04.jpg"></a>
                    <a class="carousel-item" href="#five!"><img src="images/kendricklemar/artist-05.jpg"></a>
                  </div>
                </div>
                            
              </div>
			  <div class="gallery-action">
              <a class="btn-floating btn-large waves-effect waves-light"><i class="material-icons">thumb_up</i></a>
			    <a class="btn-floating btn-large waves-effect waves-light"><i class="material-icons">thumb_down</i></a>
            </div>
          </div>
        </div>
  
        <div class="col l4 m6 s12 gallery-item gallery-expand gallery-filter polygon">
            <div class="gallery-curve-wrapper">
              <a class="gallery-cover gray">
                  <p class ="gallery-name" style="position: absolute;top: 258px;left: 0;width: 100%;"><span class="waves-effect waves-light btn" >J.Cole</span></p>
                <img class="responsive-img" src="images/jcole/artist-01.jpg" alt="placeholder">
              </a>
              <div class="gallery-body">
                <div class="title-wrapper">
          <span class="btn-floating btn-large waves-effect waves-light">3</span>
                  <h3>J.Cole</h3>
                  <span class="price">Jermaine Lamarr Cole<br>
                    January 28, 1985 (age 33)<br>
                    Raleigh, North Carolina, U.S<br>
  </span>
  
                </div>
                <p class="description">
                  Hailing from Compton, Kendrick Lemar has arguably taken the crown of king of rap with critically acclaimed albums, each winning prestigious awards. His latest album “<strong>DAMN</strong>” won 5 Grammys<sup>&reg;</sup> in 2018 including Best Rap Album. Back by the ecchloen of labels, <i>TDE</i>, the whole team are provided amazing works that not only push the culture forward yet make us remember why we are great.
                <p class="description">
  <!-- Three Line List with secondary info and action -->             
                  <ul class="collapsible">
                      <li>
                          <div class="collapsible-header">
                            <i class="material-icons">whatshot</i>
                            Notables
                            </div>
                          <div class="collapsible-body"><p> <ul class="demo-list-three mdl-list">
                              <li class="mdl-list__item mdl-list__item--three-line">
                                <span class="mdl-list__item-primary-content">
                                  <i class="material-icons mdl-list__item-avatar" style="position: relative;top: 19px;left:0px;line-height: 25px;font-size:55px;">monetization_on</i>
                                  <span style="font-size: 25px;">Sales</span><br>
                                  <span class="mdl-list__item-text-body">
                                   Over 4 Million Albums sold in the US with each of his albums charting in numerous other countries. <i>"Humble"</i> is the only rap song in 2017 to sell over 1,000,000 digital copies and is eligible for 7x platinum certification in the United States.
                                  </span>
                                </span>
                              </li>
                              <li class="mdl-list__item mdl-list__item--three-line">
                                <span class="mdl-list__item-primary-content">
                                  <i class="material-icons mdl-list__item-avatar" style="position: relative;top: 19px;left:0px;line-height: 25px;font-size:55px;">stars</i>
                                  <span style="font-size: 25px;">Accolades</span><br>
                                  <span class="mdl-list__item-text-body">
  The only non-classical artist to win the prestious Pultizer Prize for "<strong>DAMN</strong>". Kendrick Lamar has won 96 awards, including 12 Grammy<sup>&reg;</sup> Awards, 6 Billboard Music Awards, and the ASCAP Vanguard Award.
                                  </span>
                              </li>
                              <li class="mdl-list__item mdl-list__item--three-line">
                                <span class="mdl-list__item-primary-content">
                                  <i class="material-icons mdl-list__item-avatar" style="position: relative;top: 19px;left:0px;line-height: 25px;font-size:55px;">public</i>
                                  <span style="font-size: 25px;">Impact</span><br>
                                  <span class="mdl-list__item-text-body">
                                   
                                    Time<sup>&reg;</sup> named him one of the 100 most influential people in the world in 2016. His songs have transcended to millions, inspiring and thought provoking minds across the nation. His hit song <i>"Alright"</i> was a socially aware record that was used by activists calling for change.
  
                                  </span>
                                </span>
                              </li>
                            </ul>
                          </p></div>
                        </li>
                    <li>
                      <div class="collapsible-header">
                        <i class="material-icons">library_music</i>
                        Spotify
                        </div>
                      <div class="collapsible-body"><p><iframe src="https://open.spotify.com/embed?uri=spotify:artist:2YZyLoL8N0Wb9xBt1NhZWg&theme=white" width="100%" height="380" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
                      </p></div>
                    </li>
                    <li>
                      <div class="collapsible-header">
                        <i class="material-icons">library_music</i>
                        Apple Music
                        </div>
                      <div class="collapsible-body"><p><iframe allow="autoplay *; encrypted-media *;" frameborder="0" height="450" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation-by-user-activation" src="https://embed.music.apple.com/us/playlist/kendrick-lamar-essentials/pl.8155ebe08de7423ca2b29929c8adeebd?app=music" width="100%"></iframe>
                      </p></div>
                    </li>
                    <li>
                      <div class="collapsible-header">
                        <i class="material-icons">comment</i>
                        Comment Board
                        </div>
                      <div class="collapsible-body"><p> 
                          <div id="disqus_thread"></div>
                          <script>
                          
                          /**
                          *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                          *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
                          /*
                          var disqus_config = function () {
                          this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
                          this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                          };
                          */
                          (function() { // DON'T EDIT BELOW THIS LINE
                          var d = document, s = d.createElement('script');
                          s.src = 'https://goat100-1.disqus.com/embed.js';
                          s.setAttribute('data-timestamp', +new Date());
                          (d.head || d.body).appendChild(s);
                          })();
                          </script>
                          <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                                                      
                      </p></div>
                    </li>
                  </ul>
               
                  <div class="carousel-wrapper">
                    <div class="carousel">
                      <a class="carousel-item" href="#one!"><img src="images/jcole/artist-01.jpg"></a>
                      <a class="carousel-item" href="#two!"><img src="images/jcole/artist-02.jpg"></a>
                      <a class="carousel-item" href="#three!"><img src="images/jcole/artist-03.jpg"></a>
                      <a class="carousel-item" href="#four!"><img src="images/jcole/artist-04.jpg"></a>
                      <a class="carousel-item" href="#five!"><img src="images/jcole/artist-05.jpg"></a>
                    </div>
                  </div>
  
                  

                  
                </div>
          <div class="gallery-action">
                <a class="btn-floating btn-large waves-effect waves-light"><i class="material-icons">thumb_up</i></a>
            <a class="btn-floating btn-large waves-effect waves-light"><i class="material-icons">thumb_down</i></a>
              </div>
            </div>
          </div>


          <div class="col l4 m6 s12 gallery-item gallery-expand gallery-filter polygon">
            <div class="gallery-curve-wrapper">
              <a class="gallery-cover gray">
                <img class="responsive-img" src="images/kanyewest/artist-01.jpg" alt="placeholder">
              </a>
              <div class="gallery-body">
                <div class="title-wrapper">
          <span class="btn-floating btn-large waves-effect waves-light">4</span>
                  <h3>Kanye West</h3>
                  <span class="price">
                    Kanye Omari West<br>
                    June 8, 1977 (age 40)<br>
                    Chicago, Illinois, US.
                    
  </span>
  
                </div>
                <p class="description">
                  Hailing from Compton, Kendrick Lemar has arguably taken the crown of king of rap with critically acclaimed albums, each winning prestigious awards. His latest album “<strong>DAMN</strong>” won 5 Grammys<sup>&reg;</sup> in 2018 including Best Rap Album. Back by the ecchloen of labels, <i>TDE</i>, the whole team are provided amazing works that not only push the culture forward yet make us remember why we are great.
                <p class="description">
  <!-- Three Line List with secondary info and action -->             
                  <ul class="collapsible">
                      <li>
                          <div class="collapsible-header">
                            <i class="material-icons">whatshot</i>
                            Notables
                            </div>
                          <div class="collapsible-body"><p> <ul class="demo-list-three mdl-list">
                              <li class="mdl-list__item mdl-list__item--three-line">
                                <span class="mdl-list__item-primary-content">
                                  <i class="material-icons mdl-list__item-avatar" style="position: relative;top: 19px;left:0px;line-height: 25px;font-size:55px;">monetization_on</i>
                                  <span style="font-size: 25px;">Sales</span><br>
                                  <span class="mdl-list__item-text-body">
                                   Over 4 Million Albums sold in the US with each of his albums charting in numerous other countries. <i>"Humble"</i> is the only rap song in 2017 to sell over 1,000,000 digital copies and is eligible for 7x platinum certification in the United States.
                                  </span>
                                </span>
                              </li>
                              <li class="mdl-list__item mdl-list__item--three-line">
                                <span class="mdl-list__item-primary-content">
                                  <i class="material-icons mdl-list__item-avatar" style="position: relative;top: 19px;left:0px;line-height: 25px;font-size:55px;">stars</i>
                                  <span style="font-size: 25px;">Accolades</span><br>
                                  <span class="mdl-list__item-text-body">
  The only non-classical artist to win the prestious Pultizer Prize for "<strong>DAMN</strong>". Kendrick Lamar has won 96 awards, including 12 Grammy<sup>&reg;</sup> Awards, 6 Billboard Music Awards, and the ASCAP Vanguard Award.
                                  </span>
                              </li>
                              <li class="mdl-list__item mdl-list__item--three-line">
                                <span class="mdl-list__item-primary-content">
                                  <i class="material-icons mdl-list__item-avatar" style="position: relative;top: 19px;left:0px;line-height: 25px;font-size:55px;">public</i>
                                  <span style="font-size: 25px;">Impact</span><br>
                                  <span class="mdl-list__item-text-body">
                                   
                                    Time<sup>&reg;</sup> named him one of the 100 most influential people in the world in 2016. His songs have transcended to millions, inspiring and thought provoking minds across the nation. His hit song <i>"Alright"</i> was a socially aware record that was used by activists calling for change.
  
                                  </span>
                                </span>
                              </li>
                            </ul>
                          </p></div>
                        </li>
                    <li>
                      <div class="collapsible-header">
                        <i class="material-icons">library_music</i>
                        Spotify
                        </div>
                      <div class="collapsible-body"><p><iframe src="https://open.spotify.com/embed?uri=spotify:artist:2YZyLoL8N0Wb9xBt1NhZWg&theme=white" width="100%" height="380" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
                      </p></div>
                    </li>
                    <li>
                      <div class="collapsible-header">
                        <i class="material-icons">library_music</i>
                        Apple Music
                        </div>
                      <div class="collapsible-body"><p><iframe allow="autoplay *; encrypted-media *;" frameborder="0" height="450" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation-by-user-activation" src="https://embed.music.apple.com/us/playlist/kendrick-lamar-essentials/pl.8155ebe08de7423ca2b29929c8adeebd?app=music" width="100%"></iframe>
                      </p></div>
                    </li>
                    <li>
                      <div class="collapsible-header">
                        <i class="material-icons">comment</i>
                        Comment Board
                        </div>
                      <div class="collapsible-body"><p> 
                          <div id="disqus_thread"></div>
                          <script>
                          
                          /**
                          *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                          *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
                          /*
                          var disqus_config = function () {
                          this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
                          this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                          };
                          */
                          (function() { // DON'T EDIT BELOW THIS LINE
                          var d = document, s = d.createElement('script');
                          s.src = 'https://goat100-1.disqus.com/embed.js';
                          s.setAttribute('data-timestamp', +new Date());
                          (d.head || d.body).appendChild(s);
                          })();
                          </script>
                          <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                                                      
                      </p></div>
                    </li>
                  </ul>
               
                  <div class="carousel-wrapper">
                    <div class="carousel">
                      <a class="carousel-item" href="#one!"><img src="images/kanyewest/artist-01.jpg"></a>
                      <a class="carousel-item" href="#two!"><img src="images/kanyewest/artist-02.jpg"></a>
                      <a class="carousel-item" href="#three!"><img src="images/kanyewest/artist-03.jpg"></a>
                      <a class="carousel-item" href="#four!"><img src="images/kanyewest/artist-04.jpg"></a>
                      <a class="carousel-item" href="#five!"><img src="images/kanyewest/artist-05.jpg"></a>
                    </div>
                  </div>
  
                  

                  
                </div>
          <div class="gallery-action">
                <a class="btn-floating btn-large waves-effect waves-light"><i class="material-icons">thumb_up</i></a>
            <a class="btn-floating btn-large waves-effect waves-light"><i class="material-icons">thumb_down</i></a>
              </div>
            </div>
          </div>


          <div class="col l4 m6 s12 gallery-item gallery-expand gallery-filter polygon">
              <div class="gallery-curve-wrapper">
                <a class="gallery-cover gray">
                  <img class="responsive-img" src="images/pushat/artist-01.jpg" alt="placeholder">
                </a>
                <div class="gallery-body">
                  <div class="title-wrapper">
            <span class="btn-floating btn-large waves-effect waves-light">5</span>
                    <h3>Pusha T</h3>
                    <span class="price">
                      Terrence LeVarr Thornton<br>
                      May 13, 1977 (age 41)<br>
                      Virginia Beach, Virginia, United States
                      
    </span>
    
                  </div>
                  <p class="description">
                    Hailing from Compton, Kendrick Lemar has arguably taken the crown of king of rap with critically acclaimed albums, each winning prestigious awards. His latest album “<strong>DAMN</strong>” won 5 Grammys<sup>&reg;</sup> in 2018 including Best Rap Album. Back by the ecchloen of labels, <i>TDE</i>, the whole team are provided amazing works that not only push the culture forward yet make us remember why we are great.
                  <p class="description">
    <!-- Three Line List with secondary info and action -->             
                    <ul class="collapsible">
                        <li>
                            <div class="collapsible-header">
                              <i class="material-icons">whatshot</i>
                              Notables
                              </div>
                            <div class="collapsible-body"><p> <ul class="demo-list-three mdl-list">
                                <li class="mdl-list__item mdl-list__item--three-line">
                                  <span class="mdl-list__item-primary-content">
                                    <i class="material-icons mdl-list__item-avatar" style="position: relative;top: 19px;left:0px;line-height: 25px;font-size:55px;">monetization_on</i>
                                    <span style="font-size: 25px;">Sales</span><br>
                                    <span class="mdl-list__item-text-body">
                                     Over 4 Million Albums sold in the US with each of his albums charting in numerous other countries. <i>"Humble"</i> is the only rap song in 2017 to sell over 1,000,000 digital copies and is eligible for 7x platinum certification in the United States.
                                    </span>
                                  </span>
                                </li>
                                <li class="mdl-list__item mdl-list__item--three-line">
                                  <span class="mdl-list__item-primary-content">
                                    <i class="material-icons mdl-list__item-avatar" style="position: relative;top: 19px;left:0px;line-height: 25px;font-size:55px;">stars</i>
                                    <span style="font-size: 25px;">Accolades</span><br>
                                    <span class="mdl-list__item-text-body">
    The only non-classical artist to win the prestious Pultizer Prize for "<strong>DAMN</strong>". Kendrick Lamar has won 96 awards, including 12 Grammy<sup>&reg;</sup> Awards, 6 Billboard Music Awards, and the ASCAP Vanguard Award.
                                    </span>
                                </li>
                                <li class="mdl-list__item mdl-list__item--three-line">
                                  <span class="mdl-list__item-primary-content">
                                    <i class="material-icons mdl-list__item-avatar" style="position: relative;top: 19px;left:0px;line-height: 25px;font-size:55px;">public</i>
                                    <span style="font-size: 25px;">Impact</span><br>
                                    <span class="mdl-list__item-text-body">
                                     
                                      Time<sup>&reg;</sup> named him one of the 100 most influential people in the world in 2016. His songs have transcended to millions, inspiring and thought provoking minds across the nation. His hit song <i>"Alright"</i> was a socially aware record that was used by activists calling for change.
    
                                    </span>
                                  </span>
                                </li>
                              </ul>
                            </p></div>
                          </li>
                      <li>
                        <div class="collapsible-header">
                          <i class="material-icons">library_music</i>
                          Spotify
                          </div>
                        <div class="collapsible-body"><p><iframe src="https://open.spotify.com/embed?uri=spotify:artist:2YZyLoL8N0Wb9xBt1NhZWg&theme=white" width="100%" height="380" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
                        </p></div>
                      </li>
                      <li>
                        <div class="collapsible-header">
                          <i class="material-icons">library_music</i>
                          Apple Music
                          </div>
                        <div class="collapsible-body"><p><iframe allow="autoplay *; encrypted-media *;" frameborder="0" height="450" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation-by-user-activation" src="https://embed.music.apple.com/us/playlist/kendrick-lamar-essentials/pl.8155ebe08de7423ca2b29929c8adeebd?app=music" width="100%"></iframe>
                        </p></div>
                      </li>
                      <li>
                        <div class="collapsible-header">
                          <i class="material-icons">comment</i>
                          Comment Board
                          </div>
                        <div class="collapsible-body"><p> 
                            <div id="disqus_thread"></div>
                            <script>
                            
                            /**
                            *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                            *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
                            /*
                            var disqus_config = function () {
                            this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
                            this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                            };
                            */
                            (function() { // DON'T EDIT BELOW THIS LINE
                            var d = document, s = d.createElement('script');
                            s.src = 'https://goat100-1.disqus.com/embed.js';
                            s.setAttribute('data-timestamp', +new Date());
                            (d.head || d.body).appendChild(s);
                            })();
                            </script>
                            <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                                                        
                        </p></div>
                      </li>
                    </ul>
                 
                    <div class="carousel-wrapper">
                      <div class="carousel">
                        <a class="carousel-item" href="#one!"><img src="images/pushat/artist-01.jpg"></a>
                        <a class="carousel-item" href="#two!"><img src="images/pushat/artist-02.jpg"></a>
                        <a class="carousel-item" href="#three!"><img src="images/pushat/artist-03.jpg"></a>
                        <a class="carousel-item" href="#four!"><img src="images/pushat/artist-04.jpg"></a>
                        <a class="carousel-item" href="#five!"><img src="images/pushat/artist-05.jpg"></a>
                      </div>
                    </div>
    
                    
  
                    
                  </div>
            <div class="gallery-action">
                  <a class="btn-floating btn-large waves-effect waves-light"><i class="material-icons">thumb_up</i></a>
              <a class="btn-floating btn-large waves-effect waves-light"><i class="material-icons">thumb_down</i></a>
                </div>
              </div>
            </div>

            
          <div class="col l4 m6 s12 gallery-item gallery-expand gallery-filter bigbang">
              <div class="gallery-curve-wrapper">
                <a class="gallery-cover gray">
                  <img class="responsive-img" src="images/migos/artist-01.jpg" alt="placeholder">
                </a>
                <div class="gallery-body">
                  <div class="title-wrapper">
            <span class="btn-floating btn-large waves-effect waves-light">6</span>
                    <h3>Migos</h3>
                    <span class="price">
                      Quavo | Offset | Takeoff<br>
                      May 13, 1977 (age 41)<br>
                      Gwinnett County, Georgia, United States
                      
    </span>
    
                  </div>
                  <p class="description">
                    Hailing from Compton, Kendrick Lemar has arguably taken the crown of king of rap with critically acclaimed albums, each winning prestigious awards. His latest album “<strong>DAMN</strong>” won 5 Grammys<sup>&reg;</sup> in 2018 including Best Rap Album. Back by the ecchloen of labels, <i>TDE</i>, the whole team are provided amazing works that not only push the culture forward yet make us remember why we are great.
                  <p class="description">
    <!-- Three Line List with secondary info and action -->             
                    <ul class="collapsible">
                        <li>
                            <div class="collapsible-header">
                              <i class="material-icons">whatshot</i>
                              Notables
                              </div>
                            <div class="collapsible-body"><p> <ul class="demo-list-three mdl-list">
                                <li class="mdl-list__item mdl-list__item--three-line">
                                  <span class="mdl-list__item-primary-content">
                                    <i class="material-icons mdl-list__item-avatar" style="position: relative;top: 19px;left:0px;line-height: 25px;font-size:55px;">monetization_on</i>
                                    <span style="font-size: 25px;">Sales</span><br>
                                    <span class="mdl-list__item-text-body">
                                     Over 4 Million Albums sold in the US with each of his albums charting in numerous other countries. <i>"Humble"</i> is the only rap song in 2017 to sell over 1,000,000 digital copies and is eligible for 7x platinum certification in the United States.
                                    </span>
                                  </span>
                                </li>
                                <li class="mdl-list__item mdl-list__item--three-line">
                                  <span class="mdl-list__item-primary-content">
                                    <i class="material-icons mdl-list__item-avatar" style="position: relative;top: 19px;left:0px;line-height: 25px;font-size:55px;">stars</i>
                                    <span style="font-size: 25px;">Accolades</span><br>
                                    <span class="mdl-list__item-text-body">
    The only non-classical artist to win the prestious Pultizer Prize for "<strong>DAMN</strong>". Kendrick Lamar has won 96 awards, including 12 Grammy<sup>&reg;</sup> Awards, 6 Billboard Music Awards, and the ASCAP Vanguard Award.
                                    </span>
                                </li>
                                <li class="mdl-list__item mdl-list__item--three-line">
                                  <span class="mdl-list__item-primary-content">
                                    <i class="material-icons mdl-list__item-avatar" style="position: relative;top: 19px;left:0px;line-height: 25px;font-size:55px;">public</i>
                                    <span style="font-size: 25px;">Impact</span><br>
                                    <span class="mdl-list__item-text-body">
                                     
                                      Time<sup>&reg;</sup> named him one of the 100 most influential people in the world in 2016. His songs have transcended to millions, inspiring and thought provoking minds across the nation. His hit song <i>"Alright"</i> was a socially aware record that was used by activists calling for change.
    
                                    </span>
                                  </span>
                                </li>
                              </ul>
                            </p></div>
                          </li>
                      <li>
                        <div class="collapsible-header">
                          <i class="material-icons">library_music</i>
                          Spotify
                          </div>
                        <div class="collapsible-body"><p><iframe src="https://open.spotify.com/embed?uri=spotify:artist:2YZyLoL8N0Wb9xBt1NhZWg&theme=white" width="100%" height="380" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
                        </p></div>
                      </li>
                      <li>
                        <div class="collapsible-header">
                          <i class="material-icons">library_music</i>
                          Apple Music
                          </div>
                        <div class="collapsible-body"><p><iframe allow="autoplay *; encrypted-media *;" frameborder="0" height="450" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation-by-user-activation" src="https://embed.music.apple.com/us/playlist/kendrick-lamar-essentials/pl.8155ebe08de7423ca2b29929c8adeebd?app=music" width="100%"></iframe>
                        </p></div>
                      </li>
                      <li>
                        <div class="collapsible-header">
                          <i class="material-icons">comment</i>
                          Comment Board
                          </div>
                        <div class="collapsible-body"><p> 
                            <div id="disqus_thread"></div>
                            <script>
                            
                            /**
                            *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                            *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
                            /*
                            var disqus_config = function () {
                            this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
                            this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                            };
                            */
                            (function() { // DON'T EDIT BELOW THIS LINE
                            var d = document, s = d.createElement('script');
                            s.src = 'https://goat100-1.disqus.com/embed.js';
                            s.setAttribute('data-timestamp', +new Date());
                            (d.head || d.body).appendChild(s);
                            })();
                            </script>
                            <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                                                        
                        </p></div>
                      </li>
                    </ul>
                 
                    <div class="carousel-wrapper">
                      <div class="carousel">
                        <a class="carousel-item" href="#one!"><img src="images/migos/artist-01.jpg"></a>
                        <a class="carousel-item" href="#two!"><img src="images/migos/artist-02.jpg"></a>
                        <a class="carousel-item" href="#three!"><img src="images/migos/artist-03.jpg"></a>
                        <a class="carousel-item" href="#four!"><img src="images/migos/artist-04.jpg"></a>
                        <a class="carousel-item" href="#five!"><img src="images/migos/artist-05.jpg"></a>
                      </div>
                    </div>
    
                    
  
                    
                  </div>
            <div class="gallery-action">
                  <a class="btn-floating btn-large waves-effect waves-light"><i class="material-icons">thumb_up</i></a>
              <a class="btn-floating btn-large waves-effect waves-light"><i class="material-icons">thumb_down</i></a>
                </div>
              </div>
            </div>

            <div class="col l4 m6 s12 gallery-item gallery-expand gallery-filter bigbang">
              <div class="gallery-curve-wrapper">
                <a class="gallery-cover gray">
                  <img class="responsive-img" src="images/lilbaby/artist-01.jpg" alt="placeholder">
                </a>
                <div class="gallery-body">
                  <div class="title-wrapper">
            <span class="btn-floating btn-large waves-effect waves-light">7</span>
                    <h3>Lil Baby</h3>
                    <span class="price">
                      Dominique Jones<br>
                      December 3, 1994 (age 23)<br>
                      Atlanta, Georgia, U.S.
                      
    </span>
    
                  </div>
                  <p class="description">
                    Hailing from Compton, Kendrick Lemar has arguably taken the crown of king of rap with critically acclaimed albums, each winning prestigious awards. His latest album “<strong>DAMN</strong>” won 5 Grammys<sup>&reg;</sup> in 2018 including Best Rap Album. Back by the ecchloen of labels, <i>TDE</i>, the whole team are provided amazing works that not only push the culture forward yet make us remember why we are great.
                  <p class="description">
    <!-- Three Line List with secondary info and action -->             
                    <ul class="collapsible">
                        <li>
                            <div class="collapsible-header">
                              <i class="material-icons">whatshot</i>
                              Notables
                              </div>
                            <div class="collapsible-body"><p> <ul class="demo-list-three mdl-list">
                                <li class="mdl-list__item mdl-list__item--three-line">
                                  <span class="mdl-list__item-primary-content">
                                    <i class="material-icons mdl-list__item-avatar" style="position: relative;top: 19px;left:0px;line-height: 25px;font-size:55px;">monetization_on</i>
                                    <span style="font-size: 25px;">Sales</span><br>
                                    <span class="mdl-list__item-text-body">
                                     Over 4 Million Albums sold in the US with each of his albums charting in numerous other countries. <i>"Humble"</i> is the only rap song in 2017 to sell over 1,000,000 digital copies and is eligible for 7x platinum certification in the United States.
                                    </span>
                                  </span>
                                </li>
                                <li class="mdl-list__item mdl-list__item--three-line">
                                  <span class="mdl-list__item-primary-content">
                                    <i class="material-icons mdl-list__item-avatar" style="position: relative;top: 19px;left:0px;line-height: 25px;font-size:55px;">stars</i>
                                    <span style="font-size: 25px;">Accolades</span><br>
                                    <span class="mdl-list__item-text-body">
    The only non-classical artist to win the prestious Pultizer Prize for "<strong>DAMN</strong>". Kendrick Lamar has won 96 awards, including 12 Grammy<sup>&reg;</sup> Awards, 6 Billboard Music Awards, and the ASCAP Vanguard Award.
                                    </span>
                                </li>
                                <li class="mdl-list__item mdl-list__item--three-line">
                                  <span class="mdl-list__item-primary-content">
                                    <i class="material-icons mdl-list__item-avatar" style="position: relative;top: 19px;left:0px;line-height: 25px;font-size:55px;">public</i>
                                    <span style="font-size: 25px;">Impact</span><br>
                                    <span class="mdl-list__item-text-body">
                                     
                                      Time<sup>&reg;</sup> named him one of the 100 most influential people in the world in 2016. His songs have transcended to millions, inspiring and thought provoking minds across the nation. His hit song <i>"Alright"</i> was a socially aware record that was used by activists calling for change.
    
                                    </span>
                                  </span>
                                </li>
                              </ul>
                            </p></div>
                          </li>
                      <li>
                        <div class="collapsible-header">
                          <i class="material-icons">library_music</i>
                          Spotify
                          </div>
                        <div class="collapsible-body"><p><iframe src="https://open.spotify.com/embed?uri=spotify:artist:2YZyLoL8N0Wb9xBt1NhZWg&theme=white" width="100%" height="380" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
                        </p></div>
                      </li>
                      <li>
                        <div class="collapsible-header">
                          <i class="material-icons">library_music</i>
                          Apple Music
                          </div>
                        <div class="collapsible-body"><p><iframe allow="autoplay *; encrypted-media *;" frameborder="0" height="450" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation-by-user-activation" src="https://embed.music.apple.com/us/playlist/kendrick-lamar-essentials/pl.8155ebe08de7423ca2b29929c8adeebd?app=music" width="100%"></iframe>
                        </p></div>
                      </li>
                      <li>
                        <div class="collapsible-header">
                          <i class="material-icons">comment</i>
                          Comment Board
                          </div>
                        <div class="collapsible-body"><p> 
                            <div id="disqus_thread"></div>
                            <script>
                            
                            /**
                            *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                            *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
                            /*
                            var disqus_config = function () {
                            this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
                            this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                            };
                            */
                            (function() { // DON'T EDIT BELOW THIS LINE
                            var d = document, s = d.createElement('script');
                            s.src = 'https://goat100-1.disqus.com/embed.js';
                            s.setAttribute('data-timestamp', +new Date());
                            (d.head || d.body).appendChild(s);
                            })();
                            </script>
                            <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                                                        
                        </p></div>
                      </li>
                    </ul>
                 
                    <div class="carousel-wrapper">
                      <div class="carousel">
                        <a class="carousel-item" href="#one!"><img src="images/lilbaby/artist-01.jpg"></a>
                        <a class="carousel-item" href="#two!"><img src="images/lilbaby/artist-02.jpg"></a>
                        <a class="carousel-item" href="#three!"><img src="images/lilbaby/artist-03.jpg"></a>
                        <a class="carousel-item" href="#four!"><img src="images/lilbaby/artist-04.jpg"></a>
                        <a class="carousel-item" href="#five!"><img src="images/lilbaby/artist-05.jpg"></a>
                      </div>
                    </div>
    
                    
  
                    
                  </div>
            <div class="gallery-action">
                  <a class="btn-floating btn-large waves-effect waves-light"><i class="material-icons">thumb_up</i></a>
              <a class="btn-floating btn-large waves-effect waves-light"><i class="material-icons">thumb_down</i></a>
                </div>
              </div>
            </div>


            <div class="col l4 m6 s12 gallery-item gallery-expand gallery-filter bigbang">
              <div class="gallery-curve-wrapper">
                <a class="gallery-cover gray">
                  <img class="responsive-img" src="images/nickiminaj/artist-01.jpg" alt="placeholder">
                </a>
                <div class="gallery-body">
                  <div class="title-wrapper">
            <span class="btn-floating btn-large waves-effect waves-light">8</span>
                    <h3>Nicki Minaj</h3>
                    <span class="price">
                      Dominique Jones<br>
                      December 3, 1994 (age 23)<br>
                      Atlanta, Georgia, U.S.
                      
    </span>
    
                  </div>
                  <p class="description">
                    Hailing from Compton, Kendrick Lemar has arguably taken the crown of king of rap with critically acclaimed albums, each winning prestigious awards. His latest album “<strong>DAMN</strong>” won 5 Grammys<sup>&reg;</sup> in 2018 including Best Rap Album. Back by the ecchloen of labels, <i>TDE</i>, the whole team are provided amazing works that not only push the culture forward yet make us remember why we are great.
                  <p class="description">
    <!-- Three Line List with secondary info and action -->             
                    <ul class="collapsible">
                        <li>
                            <div class="collapsible-header">
                              <i class="material-icons">whatshot</i>
                              Notables
                              </div>
                            <div class="collapsible-body"><p> <ul class="demo-list-three mdl-list">
                                <li class="mdl-list__item mdl-list__item--three-line">
                                  <span class="mdl-list__item-primary-content">
                                    <i class="material-icons mdl-list__item-avatar" style="position: relative;top: 19px;left:0px;line-height: 25px;font-size:55px;">monetization_on</i>
                                    <span style="font-size: 25px;">Sales</span><br>
                                    <span class="mdl-list__item-text-body">
                                     Over 4 Million Albums sold in the US with each of his albums charting in numerous other countries. <i>"Humble"</i> is the only rap song in 2017 to sell over 1,000,000 digital copies and is eligible for 7x platinum certification in the United States.
                                    </span>
                                  </span>
                                </li>
                                <li class="mdl-list__item mdl-list__item--three-line">
                                  <span class="mdl-list__item-primary-content">
                                    <i class="material-icons mdl-list__item-avatar" style="position: relative;top: 19px;left:0px;line-height: 25px;font-size:55px;">stars</i>
                                    <span style="font-size: 25px;">Accolades</span><br>
                                    <span class="mdl-list__item-text-body">
    The only non-classical artist to win the prestious Pultizer Prize for "<strong>DAMN</strong>". Kendrick Lamar has won 96 awards, including 12 Grammy<sup>&reg;</sup> Awards, 6 Billboard Music Awards, and the ASCAP Vanguard Award.
                                    </span>
                                </li>
                                <li class="mdl-list__item mdl-list__item--three-line">
                                  <span class="mdl-list__item-primary-content">
                                    <i class="material-icons mdl-list__item-avatar" style="position: relative;top: 19px;left:0px;line-height: 25px;font-size:55px;">public</i>
                                    <span style="font-size: 25px;">Impact</span><br>
                                    <span class="mdl-list__item-text-body">
                                     
                                      Time<sup>&reg;</sup> named him one of the 100 most influential people in the world in 2016. His songs have transcended to millions, inspiring and thought provoking minds across the nation. His hit song <i>"Alright"</i> was a socially aware record that was used by activists calling for change.
    
                                    </span>
                                  </span>
                                </li>
                              </ul>
                            </p></div>
                          </li>
                      <li>
                        <div class="collapsible-header">
                          <i class="material-icons">library_music</i>
                          Spotify
                          </div>
                        <div class="collapsible-body"><p><iframe src="https://open.spotify.com/embed?uri=spotify:artist:2YZyLoL8N0Wb9xBt1NhZWg&theme=white" width="100%" height="380" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
                        </p></div>
                      </li>
                      <li>
                        <div class="collapsible-header">
                          <i class="material-icons">library_music</i>
                          Apple Music
                          </div>
                        <div class="collapsible-body"><p><iframe allow="autoplay *; encrypted-media *;" frameborder="0" height="450" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation-by-user-activation" src="https://embed.music.apple.com/us/playlist/kendrick-lamar-essentials/pl.8155ebe08de7423ca2b29929c8adeebd?app=music" width="100%"></iframe>
                        </p></div>
                      </li>
                      <li>
                        <div class="collapsible-header">
                          <i class="material-icons">comment</i>
                          Comment Board
                          </div>
                        <div class="collapsible-body"><p> 
                            <div id="disqus_thread"></div>
                            <script>
                            
                            /**
                            *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                            *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
                            /*
                            var disqus_config = function () {
                            this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
                            this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                            };
                            */
                            (function() { // DON'T EDIT BELOW THIS LINE
                            var d = document, s = d.createElement('script');
                            s.src = 'https://goat100-1.disqus.com/embed.js';
                            s.setAttribute('data-timestamp', +new Date());
                            (d.head || d.body).appendChild(s);
                            })();
                            </script>
                            <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                                                        
                        </p></div>
                      </li>
                    </ul>
                 
                    <div class="carousel-wrapper">
                      <div class="carousel">
                        <a class="carousel-item" href="#one!"><img src="images/nickiminaj/artist-01.jpg"></a>
                        <a class="carousel-item" href="#two!"><img src="images/nickiminaj/artist-02.jpg"></a>
                        <a class="carousel-item" href="#three!"><img src="images/nickiminaj/artist-03.jpg"></a>
                        <a class="carousel-item" href="#four!"><img src="images/nickiminaj/artist-04.jpg"></a>
                        <a class="carousel-item" href="#five!"><img src="images/nickiminaj/artist-05.jpg"></a>
                      </div>
                    </div>
    
                    
  
                    
                  </div>
            <div class="gallery-action">
                  <a class="btn-floating btn-large waves-effect waves-light"><i class="material-icons">thumb_up</i></a>
              <a class="btn-floating btn-large waves-effect waves-light"><i class="material-icons">thumb_down</i></a>
                </div>
              </div>
            </div>


            <div class="col l4 m6 s12 gallery-item gallery-expand gallery-filter bigbang">
              <div class="gallery-curve-wrapper">
                <a class="gallery-cover gray">
                  <img class="responsive-img" src="images/6ix9ine/artist-01.jpg" alt="placeholder">
                </a>
                <div class="gallery-body">
                  <div class="title-wrapper">
            <span class="btn-floating btn-large waves-effect waves-light">9</span>
                    <h3>6ix9ine</h3>
                    <span class="price">
                      Dominique Jones<br>
                      December 3, 1994 (age 23)<br>
                      Atlanta, Georgia, U.S.
                      
    </span>
    
                  </div>
                  <p class="description">
                    Hailing from Compton, Kendrick Lemar has arguably taken the crown of king of rap with critically acclaimed albums, each winning prestigious awards. His latest album “<strong>DAMN</strong>” won 5 Grammys<sup>&reg;</sup> in 2018 including Best Rap Album. Back by the ecchloen of labels, <i>TDE</i>, the whole team are provided amazing works that not only push the culture forward yet make us remember why we are great.
                  <p class="description">
    <!-- Three Line List with secondary info and action -->             
                    <ul class="collapsible">
                        <li>
                            <div class="collapsible-header">
                              <i class="material-icons">whatshot</i>
                              Notables
                              </div>
                            <div class="collapsible-body"><p> <ul class="demo-list-three mdl-list">
                                <li class="mdl-list__item mdl-list__item--three-line">
                                  <span class="mdl-list__item-primary-content">
                                    <i class="material-icons mdl-list__item-avatar" style="position: relative;top: 19px;left:0px;line-height: 25px;font-size:55px;">monetization_on</i>
                                    <span style="font-size: 25px;">Sales</span><br>
                                    <span class="mdl-list__item-text-body">
                                     Over 4 Million Albums sold in the US with each of his albums charting in numerous other countries. <i>"Humble"</i> is the only rap song in 2017 to sell over 1,000,000 digital copies and is eligible for 7x platinum certification in the United States.
                                    </span>
                                  </span>
                                </li>
                                <li class="mdl-list__item mdl-list__item--three-line">
                                  <span class="mdl-list__item-primary-content">
                                    <i class="material-icons mdl-list__item-avatar" style="position: relative;top: 19px;left:0px;line-height: 25px;font-size:55px;">stars</i>
                                    <span style="font-size: 25px;">Accolades</span><br>
                                    <span class="mdl-list__item-text-body">
    The only non-classical artist to win the prestious Pultizer Prize for "<strong>DAMN</strong>". Kendrick Lamar has won 96 awards, including 12 Grammy<sup>&reg;</sup> Awards, 6 Billboard Music Awards, and the ASCAP Vanguard Award.
                                    </span>
                                </li>
                                <li class="mdl-list__item mdl-list__item--three-line">
                                  <span class="mdl-list__item-primary-content">
                                    <i class="material-icons mdl-list__item-avatar" style="position: relative;top: 19px;left:0px;line-height: 25px;font-size:55px;">public</i>
                                    <span style="font-size: 25px;">Impact</span><br>
                                    <span class="mdl-list__item-text-body">
                                     
                                      Time<sup>&reg;</sup> named him one of the 100 most influential people in the world in 2016. His songs have transcended to millions, inspiring and thought provoking minds across the nation. His hit song <i>"Alright"</i> was a socially aware record that was used by activists calling for change.
    
                                    </span>
                                  </span>
                                </li>
                              </ul>
                            </p></div>
                          </li>
                      <li>
                        <div class="collapsible-header">
                          <i class="material-icons">library_music</i>
                          Spotify
                          </div>
                        <div class="collapsible-body"><p><iframe src="https://open.spotify.com/embed?uri=spotify:artist:2YZyLoL8N0Wb9xBt1NhZWg&theme=white" width="100%" height="380" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
                        </p></div>
                      </li>
                      <li>
                        <div class="collapsible-header">
                          <i class="material-icons">library_music</i>
                          Apple Music
                          </div>
                        <div class="collapsible-body"><p><iframe allow="autoplay *; encrypted-media *;" frameborder="0" height="450" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation-by-user-activation" src="https://embed.music.apple.com/us/playlist/kendrick-lamar-essentials/pl.8155ebe08de7423ca2b29929c8adeebd?app=music" width="100%"></iframe>
                        </p></div>
                      </li>
                      <li>
                        <div class="collapsible-header">
                          <i class="material-icons">comment</i>
                          Comment Board
                          </div>
                        <div class="collapsible-body"><p> 
                            <div id="disqus_thread"></div>
                            <script>
                            
                            /**
                            *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                            *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
                            /*
                            var disqus_config = function () {
                            this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
                            this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                            };
                            */
                            (function() { // DON'T EDIT BELOW THIS LINE
                            var d = document, s = d.createElement('script');
                            s.src = 'https://goat100-1.disqus.com/embed.js';
                            s.setAttribute('data-timestamp', +new Date());
                            (d.head || d.body).appendChild(s);
                            })();
                            </script>
                            <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                                                        
                        </p></div>
                      </li>
                    </ul>
                 
                    <div class="carousel-wrapper">
                      <div class="carousel">
                        <a class="carousel-item" href="#one!"><img src="images/6ix9ine/artist-01.jpg"></a>
                        <a class="carousel-item" href="#two!"><img src="images/6ix9ine/artist-02.jpg"></a>
                        <a class="carousel-item" href="#three!"><img src="images/6ix9ine/artist-03.jpg"></a>
                        <a class="carousel-item" href="#four!"><img src="images/6ix9ine/artist-04.jpg"></a>
                        <a class="carousel-item" href="#five!"><img src="images/6ix9ine/artist-05.jpg"></a>
                      </div>
                    </div>
    
                    
  
                    
                  </div>
            <div class="gallery-action">
                  <a class="btn-floating btn-large waves-effect waves-light"><i class="material-icons">thumb_up</i></a>
              <a class="btn-floating btn-large waves-effect waves-light"><i class="material-icons">thumb_down</i></a>
                </div>
              </div>
            </div>



            <div class="col l4 m6 s12 gallery-item gallery-expand gallery-filter bigbang">
              <div class="gallery-curve-wrapper">
                <a class="gallery-cover gray">
                  <img class="responsive-img" src="images/childishgambino/artist-01.jpg" alt="placeholder">
                </a>
                <div class="gallery-body">
                  <div class="title-wrapper">
            <span class="btn-floating btn-large waves-effect waves-light">10</span>
                    <h3>Childish Gambino</h3>
                    <span class="price">
                      Dominique Jones<br>
                      December 3, 1994 (age 23)<br>
                      Atlanta, Georgia, U.S.
                      
    </span>
    
                  </div>
                  <p class="description">
                    Hailing from Compton, Kendrick Lemar has arguably taken the crown of king of rap with critically acclaimed albums, each winning prestigious awards. His latest album “<strong>DAMN</strong>” won 5 Grammys<sup>&reg;</sup> in 2018 including Best Rap Album. Back by the ecchloen of labels, <i>TDE</i>, the whole team are provided amazing works that not only push the culture forward yet make us remember why we are great.
                  <p class="description">
    <!-- Three Line List with secondary info and action -->             
                    <ul class="collapsible">
                        <li>
                            <div class="collapsible-header">
                              <i class="material-icons">whatshot</i>
                              Notables
                              </div>
                            <div class="collapsible-body"><p> <ul class="demo-list-three mdl-list">
                                <li class="mdl-list__item mdl-list__item--three-line">
                                  <span class="mdl-list__item-primary-content">
                                    <i class="material-icons mdl-list__item-avatar" style="position: relative;top: 19px;left:0px;line-height: 25px;font-size:55px;">monetization_on</i>
                                    <span style="font-size: 25px;">Sales</span><br>
                                    <span class="mdl-list__item-text-body">
                                     Over 4 Million Albums sold in the US with each of his albums charting in numerous other countries. <i>"Humble"</i> is the only rap song in 2017 to sell over 1,000,000 digital copies and is eligible for 7x platinum certification in the United States.
                                    </span>
                                  </span>
                                </li>
                                <li class="mdl-list__item mdl-list__item--three-line">
                                  <span class="mdl-list__item-primary-content">
                                    <i class="material-icons mdl-list__item-avatar" style="position: relative;top: 19px;left:0px;line-height: 25px;font-size:55px;">stars</i>
                                    <span style="font-size: 25px;">Accolades</span><br>
                                    <span class="mdl-list__item-text-body">
    The only non-classical artist to win the prestious Pultizer Prize for "<strong>DAMN</strong>". Kendrick Lamar has won 96 awards, including 12 Grammy<sup>&reg;</sup> Awards, 6 Billboard Music Awards, and the ASCAP Vanguard Award.
                                    </span>
                                </li>
                                <li class="mdl-list__item mdl-list__item--three-line">
                                  <span class="mdl-list__item-primary-content">
                                    <i class="material-icons mdl-list__item-avatar" style="position: relative;top: 19px;left:0px;line-height: 25px;font-size:55px;">public</i>
                                    <span style="font-size: 25px;">Impact</span><br>
                                    <span class="mdl-list__item-text-body">
                                     
                                      Time<sup>&reg;</sup> named him one of the 100 most influential people in the world in 2016. His songs have transcended to millions, inspiring and thought provoking minds across the nation. His hit song <i>"Alright"</i> was a socially aware record that was used by activists calling for change.
    
                                    </span>
                                  </span>
                                </li>
                              </ul>
                            </p></div>
                          </li>
                      <li>
                        <div class="collapsible-header">
                          <i class="material-icons">library_music</i>
                          Spotify
                          </div>
                        <div class="collapsible-body"><p><iframe src="https://open.spotify.com/embed?uri=spotify:artist:2YZyLoL8N0Wb9xBt1NhZWg&theme=white" width="100%" height="380" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
                        </p></div>
                      </li>
                      <li>
                        <div class="collapsible-header">
                          <i class="material-icons">library_music</i>
                          Apple Music
                          </div>
                        <div class="collapsible-body"><p><iframe allow="autoplay *; encrypted-media *;" frameborder="0" height="450" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation-by-user-activation" src="https://embed.music.apple.com/us/playlist/kendrick-lamar-essentials/pl.8155ebe08de7423ca2b29929c8adeebd?app=music" width="100%"></iframe>
                        </p></div>
                      </li>
                      <li>
                        <div class="collapsible-header">
                          <i class="material-icons">comment</i>
                          Comment Board
                          </div>
                        <div class="collapsible-body"><p> 
                            <div id="disqus_thread"></div>
                            <script>
                            
                            /**
                            *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                            *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
                            /*
                            var disqus_config = function () {
                            this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
                            this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                            };
                            */
                            (function() { // DON'T EDIT BELOW THIS LINE
                            var d = document, s = d.createElement('script');
                            s.src = 'https://goat100-1.disqus.com/embed.js';
                            s.setAttribute('data-timestamp', +new Date());
                            (d.head || d.body).appendChild(s);
                            })();
                            </script>
                            <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                                                        
                        </p></div>
                      </li>
                    </ul>
                 
                    <div class="carousel-wrapper">
                      <div class="carousel">
                        <a class="carousel-item" href="#one!"><img src="images/6ix9ine/artist-01.jpg"></a>
                        <a class="carousel-item" href="#two!"><img src="images/6ix9ine/artist-02.jpg"></a>
                        <a class="carousel-item" href="#three!"><img src="images/6ix9ine/artist-03.jpg"></a>
                        <a class="carousel-item" href="#four!"><img src="images/6ix9ine/artist-04.jpg"></a>
                        <a class="carousel-item" href="#five!"><img src="images/6ix9ine/artist-05.jpg"></a>
                      </div>
                    </div>
    
                    
  
                    
                  </div>
            <div class="gallery-action">
                  <a class="btn-floating btn-large waves-effect waves-light"><i class="material-icons">thumb_up</i></a>
              <a class="btn-floating btn-large waves-effect waves-light"><i class="material-icons">thumb_down</i></a>
                </div>
              </div>
            </div>
            
    </div><!-- /.container -->

<script>

$(function() {
  $('a[href*=#]').on('click', function(e) {
    e.preventDefault();
    $('html, body').animate({ scrollTop: $($(this).attr('href')).offset().top}, 500, 'linear');
  });
});



</script>
    <!-- Core Javascript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/masonry.pkgd.min.js"></script>
    <script src="https://cdn.jsdelivr.net/materialize/0.98.0/js/materialize.min.js"></script>
    <script src="js/color-thief.min.js"></script>
    <script src="js/galleryExpand.js"></script>
    <script src="js/init.js"></script>

  </body>
</html>
