<?php
    $d->reset();
    $sql = "select photo_vi as photo, mota_$lang, link,ten_vi from #_photo where hienthi=1 and com='slider' order by stt asc,id desc";
    $d->query($sql);
    $slider = $d->result_array();
?>
<script type="text/javascript" src="js/jssor.slider.mini.js"></script>
    <!-- use jssor.slider.debug.js instead for debug -->

<script>

    jQuery(document).ready(function ($) {
        var jssor_1_SlideshowTransitions = [
              // {$Duration:1200,x:0.2,y:-0.1,$Delay:20,$Cols:8,$Rows:4,$Clip:15,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Assembly:260,$Easing:{$Left:$Jease$.$InWave,$Top:$Jease$.$InWave,$Clip:$Jease$.$OutQuad},$Outside:true,$Round:{$Left:1.3,$Top:2.5}},
              // {$Duration:1500,x:0.3,y:-0.3,$Delay:20,$Cols:8,$Rows:4,$Clip:15,$During:{$Left:[0.1,0.9],$Top:[0.1,0.9]},$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Assembly:260,$Easing:{$Left:$Jease$.$InJump,$Top:$Jease$.$InJump,$Clip:$Jease$.$OutQuad},$Outside:true,$Round:{$Left:0.8,$Top:2.5}},
              // {$Duration:1500,x:0.2,y:-0.1,$Delay:20,$Cols:8,$Rows:4,$Clip:15,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Assembly:260,$Easing:{$Left:$Jease$.$InWave,$Top:$Jease$.$InWave,$Clip:$Jease$.$OutQuad},$Outside:true,$Round:{$Left:0.8,$Top:2.5}},
              // {$Duration:1500,x:0.3,y:-0.3,$Delay:80,$Cols:8,$Rows:4,$Clip:15,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$Easing:{$Left:$Jease$.$InJump,$Top:$Jease$.$InJump,$Clip:$Jease$.$OutQuad},$Outside:true,$Round:{$Left:0.8,$Top:2.5}},
              // {$Duration:1800,x:1,y:0.2,$Delay:30,$Cols:10,$Rows:5,$Clip:15,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$SlideOut:true,$Reverse:true,$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Assembly:2050,$Easing:{$Left:$Jease$.$InOutSine,$Top:$Jease$.$OutWave,$Clip:$Jease$.$InOutQuad},$Outside:true,$Round:{$Top:1.3}},
              // {$Duration:1000,$Delay:30,$Cols:8,$Rows:4,$Clip:15,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Assembly:2049,$Easing:$Jease$.$OutQuad},
              // {$Duration:1000,$Delay:80,$Cols:8,$Rows:4,$Clip:15,$SlideOut:true,$Easing:$Jease$.$OutQuad},
              // {$Duration:1000,y:-1,$Cols:12,$Formation:$JssorSlideshowFormations$.$FormationStraight,$ChessMode:{$Column:12}},
              // {$Duration:1000,x:-0.2,$Delay:40,$Cols:12,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationStraight,$Assembly:260,$Easing:{$Left:$Jease$.$InOutExpo,$Opacity:$Jease$.$InOutQuad},$Opacity:2,$Outside:true,$Round:{$Top:0.5}},
              // {$Duration:2000,y:-1,$Delay:60,$Cols:15,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationStraight,$Easing:$Jease$.$OutJump,$Round:{$Top:1.5}}
            ];
        var _CaptionTransitions = [];
        _CaptionTransitions["L"] = {$Duration:900,x:0.6,$Easing:{$Left:$JssorEasing$.$EaseInOutSine},$Opacity:2};
        _CaptionTransitions["T"] = {$Duration:900,y:0.6,$Easing:{$Top:$JssorEasing$.$EaseInOutSine},$Opacity:2};
        _CaptionTransitions["BL"] = {$Duration:900,x:0.6,y:-0.6,$Easing:{$Left:$JssorEasing$.$EaseInOutSine,$Top:$JssorEasing$.$EaseInOutSine},$Opacity:2};


        var options = {
            $AutoPlay: true, 
            $AutoPlaySteps: 1, 
            $AutoPlayInterval: 4000, 
            $PauseOnHover: 1,
            $ArrowKeyNavigation: true, 
            $SlideDuration: 500, 
            $MinDragOffsetToSlide: 20,
            $SlideSpacing: 0,
            $DisplayPieces: 1,
            $ParkingPosition: 0, 
            $UISearchMode: 1,   
            $PlayOrientation: 1,
            $DragOrientation: 3,   
            $SlideshowOptions: {
                $Class: $JssorSlideshowRunner$,
                $Transitions: jssor_1_SlideshowTransitions,
                $TransitionsOrder: 1
              },
            $CaptionSliderOptions: {
                $Class: $JssorCaptionSlider$,
                $Transitions: _CaptionTransitions,
                $PlayInMode: 1,
                $PlayOutMode: 3  
              },

            $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$, 
                $ChanceToShow: 1,
                $AutoCenter: 2, 
                $Steps: 1
            },

            $ThumbnailNavigatorOptions: {
                $Class: $JssorThumbnailNavigator$, 
                $ChanceToShow: 2,

                $ActionMode: 1,
                $AutoCenter: 3,
                $Lanes: 1, 
                $SpacingX: 3,
                $SpacingY: 3,
                $DisplayPieces: 9,
                $ParkingPosition: 260,
                $Orientation: 1, 
                $DisableDrag: false
            }
        };

        var jssor_slider2 = new $JssorSlider$("slider2_container", options);
        //responsive code begin
        //you can remove responsive code if you don't want the slider scales while window resizes
        function ScaleSlider() {
            var parentWidth = jssor_slider2.$Elmt.parentNode.clientWidth;
            if (parentWidth)
                jssor_slider2.$ScaleWidth(Math.min(parentWidth, 605));
            else
                window.setTimeout(ScaleSlider, 30);
        }
        ScaleSlider();

        $(window).bind("load", ScaleSlider);
        $(window).bind("resize", ScaleSlider);
        $(window).bind("orientationchange", ScaleSlider);
        //responsive code end
    });
</script>
<div id="tt-slider">
  <div id="slider2_container" style="position: relative; width: 605px; height: 96px; overflow: hidden; visibility: visible; margin: 0 auto;margin-top: 5px;">

      <!-- Loading Screen -->
      <div u="loading" style="position: absolute; top: 0px; left: 0px;">
          <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
              background-color: #000000; top: 0px; left: 0px;width: 100%;height:100%;">
          </div>
          <div style="position: absolute; display: block; background: url(images/loading.gif) no-repeat center center;
              top: 0px; left: 0px;width: 100%;height:100%;">
          </div>
      </div>
      
      
      <!-- Slides Container -->
      <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 605px; height: 96px; overflow: hidden;">
          <?php for($i=0;$i<count($slider);$i++){ ?>
          <div>
              <img u="image" src="thumb/605x96/1/<?=_upload_hinhanh_l.$slider[$i]['photo']?>" />
              <?php /*?>
              <div u="caption" t="T" style="position: absolute; top: 80px; left: 100px; width: 340px; font-size: 40px; color: #479f00;text-align: center;font-family: 'UTMWeddingK_T'; line-height: 50px;"><?=$slider[$i]['ten_vi']?></div>
              
              <div u="caption" t="L" style="position: absolute; top: 130px; left: 100px; width: 340px; height: 160px; font-size: 16px; color: #333333; line-height: 20px; text-align: center;" >
                    <?=$slider[$i]['mota_vi']?>
              </div>
             <div u="caption" t="BL" style="position:absolute; left:100px; top: 265px; width:340px;text-align: center;"> 
                  <a href="<?=$slider[$i]['link']?>" title="<?=$slider[$i]['ten_vi']?>" style="background: url(images/xemthem.png); display: inline-block; padding: 6px 15px 6px 15px;font-size: 15px; color: #FFF;" target="_blank">
                    Xem thêm
                  </a>
              </div>
              <img u="thumb" src="<?=_upload_hinhanh_l.$slider[$i]['photo']?>" />
               <?php */?>
          </div>
          <?php } ?>
      </div>
     
     
      <style>
          .jssora02l, .jssora02r {
              display: block;
              position: absolute;
              /* size of arrow element */
              width: 55px;
              height: 55px;
              cursor: pointer;
              background: url(images/a02.png) no-repeat;
              overflow: hidden;
          }
          .jssora02l { background-position: -3px -33px; }
          .jssora02r { background-position: -63px -33px; }
          .jssora02l:hover { background-position: -123px -33px; }
          .jssora02r:hover { background-position: -183px -33px; }
          .jssora02l.jssora02ldn { background-position: -3px -33px; }
          .jssora02r.jssora02rdn { background-position: -63px -33px; }
      </style>
      <span u="arrowleft" class="jssora02l" style="top: 123px; left: 8px;">
      </span>
     
      <span u="arrowright" class="jssora02r" style="top: 123px; right: 8px;">
      </span>
   
  </div>
</div>
