<div class="section-full text-center bg-gray bg-no-repeat p-t80 p-b50 bg-top-right mobile-page-padding" style="background-image:url(images/background/bg-4.png)">
    <div class="container">

        <!-- TITLE START -->
        <div class="section-head">
            <div class="mt-separator-outer separator-center">
                <div class="mt-separator">
                    <h2 class="text-uppercase sep-line-one "><span class="font-weight-300 text-primary" >لنا </span> التسعير</h2>
                </div>
            </div>

        </div>
        <!-- TITLE END -->

        <div class="section-content">
            <div class="pricingtable-row">
                <div class="row">
                    @foreach($packages as $package)
                    <div class="col-lg-4  col-md-4 col-sm-4  col-xs-6 col-xs-100pc  m-b30">
                        <div class="pricingtable-wrapper pricing-table-style-5 bg-white overflow-hide hover-shadow bdr-t-4 bdr-solid bdr-primary">
                            <div class="pricingtable-inner">
                                <div class="pricingtable-title">
                                    <h4>{{$package->name}}</h4>
                                </div>

                                <div class="pricingtable-price">
                                <span class="pricingtable-bx">{{$package->price}}</span>
                                    <span class="pricingtable-type">{{$package->long}}</span>
                                </div>

                                {{-- <ul class="pricingtable-features text-black">
                                    <?php $j=$package->prop; ?>
                                        <?php for($b=0; $b<$j.length; $b++){?>
                                    <li> {{ $j[$b]}} </li>
                                    <?php } ?>

                                </ul> --}}

                                <div class="pricingtable-footer">
                                    <a href="javascript:void(0);" class="site-button btn-effect">عملية الشراء</a>
                                </div>

                                <div class="overlay-main bg-white opacity-07"></div>
                            </div>

                        </div>
                    </div>
        @endforeach
                </div>
            </div>
        </div>

    </div>
</div>
