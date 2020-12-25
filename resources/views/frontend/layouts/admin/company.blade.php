<div class="section-full " style="background-image:url(images/background/bg-map.png)">
    <div class="services-half-section-top " >
        <div class="container">
            <!-- TITLE START -->
            <div class="section-head">
                <div class="mt-separator-outer separator-left text-wh">
                    <div class="mt-separator">
                        <h2 class="text-uppercase sep-line-one "><span class="font-weight-300 text-primary">حول</span> شركة</h2>
                    </div>

                </div>
            </div>
            <!-- TITLE END -->

                <div class="section-content">
                    <div class="row">
                        @foreach($abouts as $about)

                        <div class="col-lg-8 col-md-12 col-sm-12">
                            <div class="owl-carousel about-home about-home-v2 owl-dots-bottom-left">
                                <!-- COLUMNS 1 -->

                                <div class="item ">

                                    <div class="mt-img-effect zoom-slow">
                                        <a href="javascript:void(0);"><img src="{{$about->image}}" alt=""></a>
                                   </div>
                                </div>
                           </div>
                        </div>

                        <div class="col-lg-4 col-md-12 col-sm-12">
                            <div class="about-home-right about-right-v2 bg-primary text-black p-a30">
                            <h3 class="m-t0"><span class="font-weight-100">{{$about->title}}</span></h3>
                                <p><strong>{{$about->summary}}</strong></p>

                                <div class="text-left">
                                    <a href="#" class="site-button-secondry btn-effect">اقرأ أكثر</a>
                                </div>
                            </div>
                        </div>

                        @endforeach
                    </div>
               </div>
         </div>
    </div>

    <div class="services-half-section-bottom p-t80 p-b50  bg-secondry bg-cover bg-center bg-no-repeat" style="background-image:url(images/background/bg5.jpg)">
        <div class="container">
            <div class="section-content">
                <div class="row">

                    <div class="col-md-3 col-sm-6">
                        <div class="text-primary mt-icon-box-wraper left m-b30">
                            <span class="icon-md p-t10">
                                <i class="flaticon-city"></i>
                            </span>
                            <div class="icon-content text-white">
                                <div class="counter font-50 font-weight-800 m-b5">2500</div>
                                <span class="font-16">المشاريع المنجزة</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="text-primary mt-icon-box-wraper left m-b30">
                            <span class="icon-md p-t10">
                                <i class="flaticon-worker"></i>
                            </span>
                            <div class="icon-content text-white">
                                <div class="counter font-50 font-weight-800 m-b5">1500</div>
                                <span class="font-16">عميل سعيد</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="text-primary mt-icon-box-wraper left m-b30">
                            <span class="icon-md p-t10">
                                <i class="flaticon-crane"></i>
                            </span>
                            <div class="icon-content text-white">
                                <div class="counter font-50 font-weight-800 m-b5">840</div>
                                <span class="font-16">خدم الصناعات</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="text-primary mt-icon-box-wraper left m-b0">
                            <span class="icon-md p-t10">
                                <i class="flaticon-art-and-design"></i>
                            </span>
                            <div class="icon-content text-white">
                                <div class="counter font-50 font-weight-800 m-b5">180</div>
                                <span class="font-16">ترميم</span>
                            </div>
                        </div>
                    </div>

               </div>
            </div>
        </div>

    </div>
</div>
