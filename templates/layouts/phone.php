<a href="tel:<?php echo str_replace(' ','',$row_setting['hotline'])?>" id="IMAGE2961" class="ladi-element ladi-animation">
	<div class="ladi-image ladi-transition">
		<div class="ladi-image-background"></div>
	</div>
</a>
<a href="https://zalo.me/<?php echo str_replace(' ','',$row_setting['zalo'])?>" target="_blank" id="IMAGE2933" class="ladi-element ladi-animation" data-replace-href="https://zalo.me/https://zalo.me/<?php echo $row_setting['zalo']?>">
	<div class="ladi-image ladi-transition">
		<div class="ladi-image-background"></div>
	</div>
</a>

<a href="<?php echo $row_setting['fanpage']?>" target="_blank" id="IMAGE2934" class="ladi-element ladi-animation" data-replace-href="<?php echo $row_setting['fanpage']?>"><div class="ladi-image ladi-transition"><div class="ladi-image-background"></div></div></a>
<style>
	.ladi-transition {
     transition: all 150ms linear 0s;
    }
    .ladi-image {
    position: absolute;
    width: 100%;
    height: 100%;
    overflow: hidden;
    pointer-events: none;
   }
   .ladi-image .ladi-image-background {
    background-repeat: no-repeat;
    background-position: left top;
    background-size: cover;
    background-attachment: scroll;
    background-origin: content-box;
    position: absolute;
    margin: 0 auto;
    width: 100%;
    height: 100%;
    pointer-events: none;
    }
    #IMAGE2961 > .ladi-image > .ladi-image-background {
    width: 62px;
    height: 62px;
    top: 0px;
    left: 0px;
    background-image: url(images/icon-hotline-2020.gif);
    }

    #IMAGE2933 > .ladi-image > .ladi-image-background {
    width: 60px;
    height: 60px;
    top: 0px;
    left: 0px;
    background-image: url(images/zalo-2020.png);
    } 
	#IMAGE2961 {
	    width: 62px;
	    height: 62px;
	    top: auto;
	    left: 13px;
	    bottom: 214px;
	    right: auto;
	    position: fixed;
	    z-index: 90000050;
	}

#IMAGE2961.ladi-animation > .ladi-image ,#IMAGE2933.ladi-animation > .ladi-image{
	 animation-name: swing;
     -webkit-animation-name: swing;
	animation-delay: 1s;
    -webkit-animation-delay: 1s;
	 animation-duration: 1s;
	-webkit-animation-duration: 1s;
	 animation-iteration-count: infinite;
	-webkit-animation-iteration-count: infinite;
}
#IMAGE2933 {
    width: 60px;
    height: 60px;
    top: auto;
    left: 13px;
    bottom: 137px;
    right: auto;
    position: fixed;
    z-index: 90000050;
}

#IMAGE2934 {
    width: 60px;
    height: 60px;
    top: auto;
    left: 13px;
    bottom: 60px;
    right: auto;
    position: fixed;
    z-index: 90000050;
}

#IMAGE2934.ladi-animation > .ladi-image {
    animation-name: swing;
    -webkit-animation-name: swing;
    animation-delay: 1s;
    -webkit-animation-delay: 1s;
    animation-duration: 1s;
    -webkit-animation-duration: 1s;
    animation-iteration-count: infinite;
    -webkit-animation-iteration-count: infinite;
}
.ladi-image-background {
    width: 60px;
    height: 60px;
    top: 0px;
    left: 0px;
    background-image: url(images/mess-2020.png);
}
@-webkit-keyframes swing{20%{-webkit-transform:rotate(15deg);transform:rotate(15deg)}40%{-webkit-transform:rotate(-10deg);transform:rotate(-10deg)}60%{-webkit-transform:rotate(5deg);transform:rotate(5deg)}80%{-webkit-transform:rotate(-5deg);transform:rotate(-5deg)}100%{-webkit-transform:rotate(0);transform:rotate(0)}}@keyframes swing{20%{-webkit-transform:rotate(15deg);-ms-transform:rotate(15deg);transform:rotate(15deg)}40%{-webkit-transform:rotate(-10deg);-ms-transform:rotate(-10deg);transform:rotate(-10deg)}60%{-webkit-transform:rotate(5deg);-ms-transform:rotate(5deg);transform:rotate(5deg)}80%{-webkit-transform:rotate(-5deg);-ms-transform:rotate(-5deg);transform:rotate(-5deg)}100%{-webkit-transform:rotate(0);-ms-transform:rotate(0);transform:rotate(0)}}
@media (max-width:500px){
    #IMAGE2934,#IMAGE2933,#IMAGE2961,#IMAGE2933 > .ladi-image > .ladi-image-background,#IMAGE2961 > .ladi-image > .ladi-image-background{
        width:30px;
        height:30px;
    }
    #IMAGE2933{
        bottom:105px;
    }
    #IMAGE2961{
        bottom:150px;
    }
    #IMAGE2961,#IMAGE2933,#IMAGE2934{
        left:3px;
    }

}
</style>