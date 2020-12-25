<div class="section-full p-t80 p-b30 square_shape2 mobile-page-padding" >
    <div class="container">
        <!-- TITLE START -->
        <div class="section-head">
            <div class="mt-separator-outer separator-center">
                <div class="mt-separator">
                    <h2 class="text-uppercase sep-line-one "><span class="font-weight-300 text-primary">لنا</span> مشروع</h2>
                </div>
            </div>
        </div>
        <!-- TITLE END -->
            {{-- <div class="section-content">

                {{-- <div class="filter-wrap text-center">
                    <ul class="filter-navigation inline-navigation masonry-filter link-style  text-uppercase">
                        <li class="active"><a data-filter="*" href="#" data-hover="الكل">الكل</a></li>
                        <li><a data-filter=".cat-1" href="#" data-hover="اعمال بناء">اعمال بناء</a></li>
                        <li><a data-filter=".cat-2" href="#" data-hover="تجديد">تجديد</a></li>
                        <li><a data-filter=".cat-3" href="#" data-hover="في الخارج">في الخارج</a></li>
                        <li><a data-filter=".cat-4" href="#" data-hover="الداخلية">الداخلية </a></li>
                    </ul>
                </div> --}}

            {{-- </div>  --}}
            <div class="section-content">

                 <div class="portfolio-wrap row mfp-gallery product-stamp clearfix">
                    <!-- COLUMNS 1 -->
                    @foreach($projects as $project)
                    <div class="masonry-item  cat-1 col-md-4 col-sm-6 m-b30">
                        <div class="image-effect-one hover-shadow">
                            <img src="{{ $project->image}}" alt="" />
                            <div class="figcaption">
                                <h4>{{ $project->title}}</h4>
                                <p>{{ $project->service->title}}</p>
                                <a href="#"><i class="link-plus bg-primary"></i></a>
                            </div>
                        </div>
                    </div>

                    @endforeach

                 </div>

            </div>

    </div>

</div>
