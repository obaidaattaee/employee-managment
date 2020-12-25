<div id="welcome_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="goodnews-header" dir="ltr">
    <div id="rev_slider_one" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.3.1">
        <ul>
            <!-- SLIDE 1 -->
            @php
                $i=1;
                $a=1;
                $b=1;
                $c=1;
                $d=1;
                $e=1;

            @endphp
            @foreach($slides as $slide)
        <li data-index=<?php if ($i=1){"rs-901";}elseif ($i=2) {"rs-902";}elseif ($i=3) {"rs-903";}else{"rs-904";}?>
            <?php $i++; ?>
            data-transition="fade"
            data-slotamount="default"
            data-hideafterloop="0"
            data-hideslideonmobile="off"
            data-easein="default"
            data-easeout="default"
            data-masterspeed="default"
            data-thumb="{{$slide->image}}"
            data-rotate="0"
            data-fstransition="fade"
            data-fsmasterspeed="300"
            data-fsslotamount="7"
            data-saveperformance="off"
            data-title=""
            data-param1=""
            data-param2=""
            data-param3=""
            data-param4=""
            data-param5=""
            data-param6=""
            data-param7=""
            data-param8=""
            data-param9=""
            data-param10=""
            data-description="">
                <!-- MAIN IMAGE -->
                <img src="{{$slide->image}}" alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10" data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina=""/>
                <!-- LAYERS -->
                <!-- LAYER NR. 1 [ for overlay ] -->
            <div class="tp-caption tp-shape tp-shapewrapper "
                id=<?php if ($a=1){"slide-901-layer-0";}elseif ($a=2) {"slide-902-layer-0";}elseif ($a=3) {"slide-903-layer-0";}else{"slide-904-layer-0";}?>
                <?php
                    $a++;
                ?>
                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                data-width="full"
                data-height="full"
                data-whitespace="nowrap"
                data-type="shape"
                data-basealign="slide"
                data-responsive_offset="off"
                data-responsive="off"
                data-frames='[
                {"from":"opacity:0;","speed":1000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},
                {"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power4.easeOut"}
                ]'
                data-textAlign="['left','left','left','left']"
                data-paddingtop="[0,0,0,0]"
                data-paddingright="[0,0,0,0]"
                data-paddingbottom="[0,0,0,0]"
                data-paddingleft="[0,0,0,0]"

                style="z-index: 1;background-color:rgba(0, 0, 0, 0.0);border-color:rgba(0, 0, 0, 0);border-width:0px;">
            </div>




                <!-- LAYER NR. 4 [ for title ] -->
                <div class="tp-caption   tp-resizeme"
                id=<?php if ($b=1){"slide-901-layer-2";}elseif ($b=2) {"slide-902-layer-2";}elseif ($b=3) {"slide-903-layer-2";}else{"slide-904-layer-2";}?>
                <?php
                    $a++;
                ?>                data-x="['right','right','right','right']" data-hoffset="['50','130','130','130']"
                data-y="['top','top','top','top']" data-voffset="['200','200','140','160']"
                data-fontsize="['72','72','62','52']"
                data-lineheight="['82','82','72','62']"
                data-width="['700','700','700','96%']"
                data-height="['none','none','none','none']"
                data-whitespace="['normal','normal','normal','normal']"

                data-type="text"
                data-responsive_offset="on"
               data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                data-textAlign="['right','right','right','right']"
                data-paddingtop="[5,5,5,5]"
                data-paddingright="[0,0,0,0]"
                data-paddingbottom="[0,0,0,0]"
                data-paddingleft="[0,0,0,0]"

                style="z-index: 13;
                white-space: normal;
                font-weight: 700;
                color:#111;
                border-width:0px;font-family: 'Poppins', sans-serif; text-transform:uppercase ;">
                 {{$slide->title}} </div>

                <!-- LAYER NR. 5 [ for block] -->




                <!-- LAYER NR. 5 [ for block] -->
                <div class="tp-caption   tp-resizeme"
                id=<?php if ($c=1){"slide-901-layer-4";}elseif ($c=2) {"slide-902-layer-4";}elseif ($c=3) {"slide-903-layer-4";}else{"slide-904-layer-4";} ?>
                <?php
                    $a++;
                ?>
                data-x="['right','right','right','right']" data-hoffset="['50','130','130','130']"
                data-y="['top','top','top','top']" data-voffset="['310','310','260','260']"
                data-fontsize="['20','20','38','28']"
                data-lineheight="['28','28','48','38']"
                data-width="['600','600','700','600']"
                data-height="['none','none','none','none']"
                data-whitespace="['normal','normal','normal','normal']"

                data-type="text"
                data-responsive_offset="on"
                data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                data-textAlign="['right','right','right','right']"
                data-paddingtop="[5,5,5,5]"
                data-paddingright="[0,0,0,0]"
                data-paddingbottom="[0,0,0,0]"
                data-paddingleft="[0,0,0,0]"

                style="z-index: 13;
                white-space: normal;
                font-weight: 500;
                color:#111;
                 border-width:0px;font-family: 'Poppins', sans-serif;">
                        {{$slide->summary}}
                </div>

                <!-- LAYER NR. 5 [ for see all service botton ] -->
                <div class="tp-caption tp-resizeme"
                id=<?php if ($d=1){"slide-901-layer-5";}elseif ($d=2) {"slide-902-layer-5";}elseif ($d=3) {"slide-903-layer-5";}else{"slide-904-layer-5";}?>
                <?php
                    $a++;
                ?>
                data-x="['right','right','right','right']" data-hoffset="['50','130','130','130']"

                data-y="['top','top','top','top']" data-voffset="['390','390','400','400']"
                data-lineheight="['none','none','none','none']"
                data-width="['300','300','300','300']"
                data-height="['none','none','none','none']"
                data-whitespace="['normal','normal','normal','normal']"

                data-type="text"
                data-responsive_offset="on"
                data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                data-textAlign="['right','right','right','right']"
                data-paddingtop="[0,0,0,0]"
                data-paddingright="[0,0,0,0]"
                data-paddingbottom="[0,0,0,0]"
                data-paddingleft="[0,0,0,0]"

                style="z-index:100; text-transform:uppercase; margin:10px">
                <a href="javascript:;" class="site-button-secondry btn-effect">المزيد عن</a>
                </div>


                <!-- LAYER NR. 6 [ for see all service botton ] -->
                <div class="tp-caption tp-resizeme"
                id=<?php if ($e=1){"slide-901-layer-6";}elseif ($e=2) {"slide-902-layer-6";}elseif ($e=3) {"slide-903-layer-6";}else{"slide-904-layer-6";}?>
                <?php
                    $a++;
                ?>

                data-x="['right','right','right','right']" data-hoffset="['260','330','330','330']"

                data-y="['top','top','top','top']" data-voffset="['390','390','400','400']"
                data-lineheight="['none','none','none','none']"
                data-width="['300','300','300','300']"
                data-height="['none','none','none','none']"
                data-whitespace="['normal','normal','normal','normal']"

                data-type="text"
                data-responsive_offset="on"
                data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                data-textAlign="['right','right','right','right']"
                data-paddingtop="[0,0,0,0]"
                data-paddingright="[0,0,0,0]"
                data-paddingbottom="[0,0,0,0]"
                data-paddingleft="[0,0,0,0]"

                style="z-index:100; text-transform:uppercase; margin:10px; margin-left: 300px;">
                <a href="javascript:;" class="site-button btn-effect">اتصل بنا</a>
                </div>
            </li>

@endforeach


        </ul>
        <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;">
        </div>
    </div>
</div>
