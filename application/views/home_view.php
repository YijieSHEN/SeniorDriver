

    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide">
      <div class="carousel-inner">
        <div class="item">
          <img src="<?php echo asset_url(); ?>img/homePage/Older_family.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>Do you care about older driver in your family?</h1>
              <p class="lead">Set your destination and start tracking.</p>
              <!--<a class="btn btn-large btn-primary" href="#">More Info</a>-->
            </div>
          </div>
        </div>
        <div class="item active">
          <img src="<?php echo asset_url(); ?>img/homePage/Car_safety.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>How safe is your car?</h1>
              <p class="lead">Enter the car info and check safety rating .</p>
              <!--<a class="btn btn-large btn-primary" href="#">More</a>-->
            </div>
          </div>
        </div>
        <div class="item">
          <img src="<?php echo asset_url(); ?>img/homePage/Journey_Plan.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>Do you want to plan a journey?</h1>
              <p class="lead">Check dangerous spots on your route</p>
              <!--<a class="btn btn-large btn-primary" href="#">Let's start!</a>-->
            </div>
          </div>
        </div>   
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
    </div><!-- /.carousel -->

<div class="container marketing">
    <div class="row">
      <div class="span4">
      </div>
      <!--<div class="col-md-2 col-md-offset-5">-->
      <div class="span4">
      <form name="postcodeForm" action="data_submitted" onsubmit="return postcode_validate()" method="post" class="centerText">
          <div class="form-group">
          <span id="status">Please enter Victoria Postcode and Year:</span><br/><br/>
          <input id="postcode" type="text" class="form-control" name="postcode" onkeyup="keyupFunction()" placeholder="3000"/>
          <select name="period">
              <option value="2017">2017</option>
              <option value="2016" selected="selected">2016</option>
              <option value="2015">2015</option>
              <option value="all">All(From 2006)</option>
          </select><br/>
          <button class="btn btn-secondary" type="submit" value="Submit">Search</button><br>
          <span id="errorField"> </span><br>
          </br>       
          </div>
      </form>
      </div>
      <div class="span4">
      </div>
    </div>
    </div>

    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

  <!--<div class="container marketing">
      <div class="row">
        <div class="span4">
          <div class="numberCircle">15</div>
          <h2>Crashes number</h2>
          <p>There are 15 accidents happened in this area during last month concerned with people over 65.</p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
        </div>
        <div class="span4">
          <div class="numberCircle">5</div>
          <h2>People injured</h2>
          <p>There are 5 people injured in these accidents.</p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
        </div>
        <div class="span4">
          <div class="numberCircle">+</div>
          <h2>Main Cause</h2>
          <p>The main cause is missing the sign of intersections.</p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
        </div>
      </div>
   </div>-->

<!--testing-->

   
   <!--<div class="container">
      <div class="row">
          <div class="col-xs-12">
            <div id="itemCarousel" class="carousel slide" data-interval="2000" 
                 data-ride="carousel" data-pause="hover" data-wrap="true">
            <ol class="carousel-indicators">
                <li data-target="#itemCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#itemCarousel" data-slide-to="1" ></li>
            </ol>

            <div class="carousel-inner">
                <div class="item">
                    <div class="row">
                          <div class="col-xs-4">
                            <div class="span4">
                              <div class="numberCircle">15</div>
                              <h2>Crashes number</h2>
                              <p>There are 15 accidents happened in this area during last month concerned with people over 65.</p>
                              <p><a class="btn" href="#">View details &raquo;</a></p>
                            </div>
                          </div>
                          <div class="col-xs-4">
                            <div class="span4">
                              <div class="numberCircle">5</div>
                              <h2>People injured</h2>
                              <p>There are 5 people injured in these accidents.</p>
                              <p><a class="btn" href="#">View details &raquo;</a></p>
                            </div>
                          </div>
                          <div class="col-xs-4">
                            <div class="span4">
                              <div class="numberCircle">+</div>
                              <h2>Main Cause</h2>
                              <p>The main cause is missing the sign of intersections.</p>
                              <p><a class="btn" href="#">View details &raquo;</a></p>
                            </div>
                          </div>
                    </div>
                </div>

                <div class="item">
                    <div class="row">
                          <div class="col-xs-4">
                            <div class="span4">
                              <div class="numberCircle">+</div>
                              <h2>Main Cause</h2>
                              <p>The main cause is missing the sign of intersections.</p>
                              <p><a class="btn" href="#">View details &raquo;</a></p>
                            </div>
                          </div>
                          <div class="col-xs-4">
                            <div class="span4">
                              <div class="numberCircle">+</div>
                              <h2>Main Cause</h2>
                              <p>The main cause is missing the sign of intersections.</p>
                              <p><a class="btn" href="#">View details &raquo;</a></p>
                            </div>
                          </div>
                          <div class="col-xs-4">
                            <div class="span4">
                              <div class="numberCircle">+</div>
                              <h2>Main Cause</h2>
                              <p>The main cause is missing the sign of intersections.</p>
                              <p><a class="btn" href="#">View details &raquo;</a></p>
                            </div>                                                                                                                                                                                                                                                                                                                                                                    
                          </div>
                    </div>
                </div>
            </div>

                  <a class="left carousel-control" href="#itemCarousel" data-slide="prev">&lsaquo;</a>
                  <a class="right carousel-control" href="#itemCarousel" data-slide="next">&rsaquo;</a>

            </div>
          </div>
      </div>
   </div> 


    <!-- START THE FEATURETTES -->
<!--  
      <hr class="featurette-divider">

      <div class="featurette">
        <img class="featurette-image pull-right" src="../../assets/img/examples/browser-icon-chrome.png">
        <h2 class="featurette-heading">First featurette headling. <span class="muted">It'll blow your mind.</span></h2>
        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
      </div>

      <hr class="featurette-divider">

      <div class="featurette">
        <img class="featurette-image pull-left" src="../../assets/img/examples/browser-icon-firefox.png">
        <h2 class="featurette-heading">Oh yeah, it's that good. <span class="muted">See for yourself.</span></h2>
        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
      </div>

      <hr class="featurette-divider">

      <div class="featurette">
        <img class="featurette-image pull-right" src="../../assets/img/examples/browser-icon-safari.png">
        <h2 class="featurette-heading">And lastly, this one. <span class="muted">Checkmate.</span></h2>
        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
      </div>

      <hr class="featurette-divider">
-->
      <!-- /END THE FEATURETTES -->


      <!-- FOOTER -->
      