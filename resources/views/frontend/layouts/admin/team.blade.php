<div class="section-full p-t80 p-b50 square_shape1 bg-parallax bg-cover "  data-stellar-background-ratio="0.5" style="background-image:url(images/background/bg5.jpg);">
    <div class="container">

        <!-- TITLE START -->
        <div class="section-head text-center text-white ">
            <div class="mt-separator-outer separator-center">
                <div class="mt-separator">
                    <h2 class="text-white text-uppercase sep-line-one "><span class="font-weight-300 text-primary" >فريقنا  </span></h2>
                </div>
            </div>
            <h2>اكتشف فريق الثقة وخبرائنا</h2>
        </div>
        <!-- TITLE END -->

        <!-- IMAGE CAROUSEL START -->
        <div class="section-content">
            <div class="row">
                    @foreach($teams as $team)
                <div class="col-md-3 col-sm-6 col-xs-6 col-xs-100pc m-b30   ">
                    <div class="our-team-2 ">
                      <div class="profile-image scale-in-center"><img src="{{ $team->image}}" alt="" /></div>
                          <div class="figcaption text-black">
                             <h4>{{ $team->name}}</h4>
                             <h5>{{ $team->job}} </h5>

                             <div class="icons">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"> <i class="fa fa-twitter"></i></a>
                                <a href="#"> <i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-rss"></i></a>
                                <a href="#"> <i class="fa fa-youtube"></i></a>
                                <a href="#"> <i class="fa fa-linkedin"></i></a>
                            </div>
                          </div>
                      </div>
                </div>

                @endforeach


            </div>
        </div>

    </div>
 </div>
