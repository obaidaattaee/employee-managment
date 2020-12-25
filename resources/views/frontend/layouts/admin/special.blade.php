<div class="section-full bg-white slider-half-part">
    <div class="container">
        <!-- IMAGE CAROUSEL START -->
        <div class="section-content">
            <div class="row">
                <?php $i=1;?>
                @foreach($services as $service)
                <div class="col-md-4 col-sm-4 m-b30">
                    <div class="half-blocks">
                        <div class="mt-icon-box-wraper center m-b30">
                            <div class="half-block-content icon-count-2 p-a30 p-tb50">
                            <span class="icon-count-number">{{$i}}</span>
                                <div class="mt-icon-box-lg radius bg-gray m-b20 scale-in-center">
                                    <span class="icon-cell"><img src="{{ $service->image}}" alt=""></span>
                                </div>
                                <div class="icon-content">
                                <h4 class="mt-tilte m-b25">{{$service->title}}</h4>
                                    <p>{{$service->summary}}</p>
                                    <a href="#" class="site-button-link" data-hover="اقرأ أكثر">اقرأ أكثر <i class="fa fa-angle-right arrow-animation"></i></a>
                                </div>
                            </div>
                            {{-- <div class="bg-cover  half-blocks-bg" style="background-image:url(images/services/1.jpg)"></div> --}}
                        </div>
                    </div>
                    <?php $i++;?>

                </div>

                @endforeach


            </div>
        </div>
    </div>
 </div>
