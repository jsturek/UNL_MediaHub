<div class="wdn-band">
    <div class="parallax-container">
        <div class="parallax-image band-020">
            <div id="video-container">
                <video id="video-player" preload="metadata" autoplay="autoplay" loop="" class="fillWidth">
                    <source src="http://admissions.unl.edu/includes/videos/why-unl/why-unl.mp4" type="video/mp4">
                    <source src="http://admissions.unl.edu/includes/videos/why-unl/why-unl.webm" type="video/webm">
                    <source src="http://admissions.unl.edu/includes/videos/why-unl/why-unl.ogg" type="video/ogg">
                    Your browser does not support the video tag. I suggest you upgrade your browser.
                </video>
            </div>
        </div>
        <div class="parallax-content">
            <div id="wdn_app_search" class="wdn-band">
                <div class="wdn-inner-wrapper wdn-inner-padding-sm ">
                    <form method="get" action="'.UNL_MediaHub_Controller::getURL().'search/">
                        <div class="wdn-input-group bp3-wdn-col-one-third centered" style="position:relative;">
                            <label for="q_app">Search MediaHub</label>
                            <input id="q_app" name="q" type="text" />
                            <span class="wdn-input-group-btn ">
                                <input type="submit" class="search_submit_button" value="Go" />
                            </span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="wdn-band">
    <div class="wdn-inner-wrapper">
        <div class="bp2-wdn-grid-set-thirds wdn-center">
            <div class="wdn-col">
                <div class="mh-featured-icon centered" style="background-color:#D00000;">
                    <a href="#">
                        <div class="wdn-icon-wrench"></div>
                    </a>
                </div>
                <h3 class="wdn-brand">
                    <a href="#">MANAGE MEDIA</a>
                </h3>
                <p> 
                    <em>
                        Channels are groups of related media. Any media can be part of any channel. Create your own.
                    </em> 
                </p>
            </div>
            <div class="wdn-col">
                <div class="mh-featured-icon centered" style="background-color:#00BD3C;">
                    <a href="#">
                        <div class="wdn-icon-search"></div>
                    </a>
                </div>
                <h3 class="wdn-brand">
                    <a href="#">BROWSE VIDEOS</a>
                </h3>
                <p> 
                    <em>
                        Channels are groups of related media. Any media can be part of any channel. Create your own.
                    </em> 
                </p>
            </div>
            <div class="wdn-col">
                <div class="mh-featured-icon centered" style="background-color:#1B9AE8;">
                    <a href="#">
                        <div class="wdn-icon-info"></div>
                    </a>
                </div>
                <h3 class="wdn-brand">
                    <a href="#">EXPLORE CHANNELS</a>
                </h3>
                <p>
                    <em>
                        Channels are groups of related media. Any media can be part of any channel. Create your own.
                    </em>
                </p>
            </div>

        </div>
    </div>
</div>

<div class="wdn-band wdn-light-neutral-band">
    <div class="wdn-inner-wrapper">
        <h3 class="wdn-brand wdn-center">
            <span class="wdn-subhead">Latest Video</span>
        </h3>
        <div class="bp2-wdn-grid-set-thirds">
            <div class="wdn-col">
                <a href="#">
                    <div class="mh-video-thumb wdn-center">
                        <img src="http://localhost:8007/channels/620/image">
                        <div class="mh-play-button"></div>
                        <div class="mh-video-label">
                            <h6 class="wdn-brand">
                                <a href="#">Video Title</a>
                                <span class="wdn-subhead">September 19, 2014, 8:33 am</span>
                            </h6>
                        </div>
                    </div>
                </a>
            </div>
            <div class="wdn-col">
                <a href="#">
                    <div class="mh-video-thumb wdn-center">
                        <img src="http://localhost:8007/channels/620/image">
                        <div class="mh-play-button"></div>
                        <div class="mh-video-label">
                            <h6 class="wdn-brand">
                                <a href="#">Video Title</a>
                                <span class="wdn-subhead">September 19, 2014, 8:33 am</span>
                            </h6>
                        </div>
                    </div>
                </a>
            </div>
            <div class="wdn-col">
                <a href="#">
                    <div class="mh-video-thumb wdn-center">
                        <img src="http://localhost:8007/channels/620/image">
                        <div class="mh-play-button"></div>
                        <div class="mh-video-label">
                            <h6 class="wdn-brand">
                                <a href="#">Video Title</a>
                                <span class="wdn-subhead">September 19, 2014, 8:33 am</span>
                            </h6>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">

    var vid = document.getElementById("video-player"); // run main video at half speed
    vid.playbackRate = 0.25;


</script>