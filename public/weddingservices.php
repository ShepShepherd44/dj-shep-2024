<!doctype html>
<html lang="en">
    <head>
        <title>Biography</title>
        <?php include "head.php"; ?>
    </head>
    <body>
        <?php include "header.php"; ?>
        <!-- =============== START PLAYER ================ -->
        <div class="main-music-player hide-player">
            <a class="hide-player-button">
                <i class="fa fa-plus"></i>
                <i class="fa fa-minus"></i>
            </a>
            <div
                id="mesh-main-player"
                class="jp-jplayer"
                data-audio-src="assets/audio/flute.mp3"
                data-title="See right through ft. Fiora"
                data-artist="Tensnake"
            ></div>

            <div
                id="mesh-main-player-content"
                class="mesh-main-player"
                role="application"
                aria-label="media player"
            >
                <div class="container">
                    <div class="row">
                        <div class="left-player-side">
                            <div class="mesh-prev">
                                <i class="fa fa-step-backward"></i>
                            </div>
                            <div class="mesh-play">
                                <i class="fa fa-play"></i>
                            </div>
                            <div class="mesh-pause">
                                <i class="fa fa-pause"></i>
                            </div>
                            <div class="mesh-next">
                                <i class="fa fa-step-forward"></i>
                            </div>
                            <button id="playlist-toggle" class="jplayerButton">
                                <span class="span-1"></span>
                                <span class="span-2"></span>
                                <span class="span-3"></span>
                            </button>
                        </div>
                        <div class="center-side">
                            <div class="mesh-current-time"></div>
                            <div class="mesh-seek-bar">
                                <div class="mesh-play-bar"></div>
                            </div>
                            <div class="mesh-duration"></div>
                        </div>
                        <div class="right-player-side">
                            <div class="mesh-thumbnail">
                                <img
                                    src="assets/img/player/thumbnail.jpg"
                                    alt=""
                                />
                            </div>
                            <div class="mesh-title"></div>
                            <div class="mesh-artist"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- =============== END PLAYER ================ -->

        <!-- =============== START PLAYLIST ================ -->
        <div class="playlist-wrapper" id="playlist-wrapper">
            <div class="jp-playlist container">
                <div class="about-list clearfix">
                    <span class="about-name">NAME</span>
                    <span class="about-length">LENGTH</span>
                    <span class="about-available">AVAILABLE ON</span>
                </div>
                <div
                    class="trak-item"
                    data-audio="assets/audio/flute.mp3"
                    data-artist="Tensnake"
                    data-thumbnail="assets/img/player/thumbnail.png"
                    data-id="trak-200"
                >
                    <audio
                        preload="metadata"
                        src="assets/audio/flute.mp3"
                        title="See right through ft. Fiora"
                    ></audio>
                    <div class="additional-button">
                        <div class="center-y-table">
                            <a href="#">
                                <i class="fa fa-apple"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-soundcloud"></i>
                            </a>
                        </div>
                    </div>
                    <div class="play-pause-button">
                        <div class="center-y-table">
                            <i class="fa fa-play"></i>
                        </div>
                    </div>
                    <div class="name-artist">
                        <div class="center-y-table">
                            <h2>Tensnake - See Right Through Ft. Fiora</h2>
                        </div>
                    </div>
                    <time class="trak-duration"> 00:00 </time>
                </div>
                <div
                    class="trak-item"
                    data-audio="assets/audio/2.mp3"
                    data-artist="Jack U ft. Kiesza"
                    data-thumbnail="assets/img/player/thumbnail.png"
                    data-id="trak-201"
                >
                    <audio
                        preload="metadata"
                        src="assets/audio/2.mp3"
                        title="Take You There"
                    ></audio>
                    <div class="additional-button">
                        <div class="center-y-table">
                            <a href="#">
                                <i class="fa fa-apple"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-soundcloud"></i>
                            </a>
                        </div>
                    </div>
                    <div class="play-pause-button">
                        <div class="center-y-table">
                            <i class="fa fa-play"></i>
                        </div>
                    </div>
                    <div class="name-artist">
                        <div class="center-y-table">
                            <h2>Jack U ft. Kiesza - Take You There</h2>
                        </div>
                    </div>
                    <time class="trak-duration"> 00:00 </time>
                </div>
                <div
                    class="trak-item"
                    data-audio="assets/audio/3.mp3"
                    data-artist="Bob Sinclair"
                    data-thumbnail="assets/img/player/thumbnail.png"
                    data-id="trak-201"
                >
                    <audio
                        preload="metadata"
                        src="assets/audio/3.mp3"
                        title="Cinderella"
                    ></audio>
                    <div class="additional-button">
                        <div class="center-y-table">
                            <a href="#">
                                <i class="fa fa-apple"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-soundcloud"></i>
                            </a>
                        </div>
                    </div>
                    <div class="play-pause-button">
                        <div class="center-y-table">
                            <i class="fa fa-play"></i>
                        </div>
                    </div>
                    <div class="name-artist">
                        <div class="center-y-table">
                            <h2>Bob Sinclair - Cinderella</h2>
                        </div>
                    </div>
                    <time class="trak-duration"> 00:00 </time>
                </div>
                <div
                    class="trak-item"
                    data-audio="assets/audio/4.mp3"
                    data-artist="Yuna"
                    data-thumbnail="assets/img/player/thumbnail.png"
                    data-id="trak-201"
                >
                    <audio
                        preload="metadata"
                        src="assets/audio/4.mp3"
                        title="Lullabies"
                    ></audio>
                    <div class="additional-button">
                        <div class="center-y-table">
                            <a href="#">
                                <i class="fa fa-apple"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-soundcloud"></i>
                            </a>
                        </div>
                    </div>
                    <div class="play-pause-button">
                        <div class="center-y-table">
                            <i class="fa fa-play"></i>
                        </div>
                    </div>
                    <div class="name-artist">
                        <div class="center-y-table">
                            <h2>Yuna - Lullabies</h2>
                        </div>
                    </div>
                    <time class="trak-duration"> 00:00 </time>
                </div>
            </div>
        </div>
        <!-- =============== END PLAYLIST ================ -->

        <!-- =============== START BREADCRUMB ================ -->
        <section class="no-mb">
            <div class="row">
                <div class="col-sm-12">
                    <div class="before-FullscreenSlider"></div>
                    <div class="breadcrumb-fullscreen-parent phone-menu-bg">
                        <div
                            class="breadcrumb breadcrumb-fullscreen alignleft small-description overlay almost-black-overlay"
                            style="
                                background-image: url(&quot;assets/img/header/weddingheader1.png&quot;);
                            "
                            data-stellar-background-ratio="0.5"
                            data-stellar-vertical-offset="0"
                        >
                            <div
                                class="breadTxt"
                                style="
                                    background: rgba(0, 0, 0, 0.7);
                                    display: inline-block;
                                    padding: 20px;
                                    border-radius: 10px;
                                    color: #fff;
                                "
                            >
                                <h1>WEDDING SERVICES</h1>
                                <p>
                                    Ready to make your wedding a party to
                                    remember? <br />
                                    With over two decades of spinning tunes, I
                                    blend classic vinyl vibes<br />with modern
                                    beats to keep the celebration alive From the
                                    first dance to the last, <br />
                                    I'll create a soundtrack that makes everyone
                                    hit the dance floor and have an epic time!
                                </p>
                                <a
                                    href="#content"
                                    data-easing="easeInOutQuint"
                                    data-scroll=""
                                    data-speed="900"
                                    data-url="false"
                                >
                                    View More <i class="fa fa-angle-down"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- =============== END BREADCRUMB ================ -->

        <!-- =============== START BIOGRAPHY SECTION ================ -->
        <section
            style="
                background-image: url(assets/img/subHeader/weddingheader2.jpg);
            "
            class="biography padding background-properties"
            id="content"
        >
            <div class="container">
                <div class="sectionTitle paddingBottom">
                    <span class="heading-t3"></span>
                    <h2><a href="albums.html">WEDDINGS</a></h2>
                    <span class="heading-b3"></span>
                </div>
                <!-- end sectionTitle -->
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <div
                            style="
                                background: rgba(0, 0, 0, 0.7);
                                display: inline-block;
                                padding: 20px;
                                border-radius: 10px;
                                color: #fff;
                                text-align: center;
                                max-width: 100%;
                            "
                        >
                            <p style="font-size: 1.9em; color: #fff">
                                Ready to make your wedding a party to
                                remember?<br />
                                With over two decades of spinning tunes, I blend
                                classic vinyl vibes with modern beats to keep
                                the celebration alive.<br />
                                From the first dance to the last,<br />
                                I'll create a soundtrack that makes everyone hit
                                the dance floor and have an epic time!
                            </p>
                            <p style="font-size: 1.9em; color: #fff">
                                I understand that your wedding day is one of the
                                most important days of your life. With over two
                                decades of experience, I bring the perfect blend
                                of traditional vinyl and cutting-edge technology
                                to create a unique and unforgettable experience
                                for you and your guests.
                            </p>

                            <p style="font-size: 1.9em; color: #fff">
                                <strong
                                    >Wedding DJ and Entertainment, Perfectly
                                    Sorted</strong
                                >
                            </p>
                            <p style="font-size: 1.9em; color: #fff">
                                I specialize in providing top-notch
                                entertainment for weddings, ensuring every
                                moment is magical and every guest has a great
                                time. From the first dance to the last song, I
                                tailor the music to your unique tastes and the
                                vibe of your special day. No two couples are the
                                same, and no two playlists are either. I meet
                                with couples to get to know them and understand
                                their musical tastes and cultural traditions to
                                ensure I provide the perfect soundtrack for your
                                event.
                            </p>

                            <p style="font-size: 1.9em; color: #fff">
                                <strong
                                    >Personalized Touches for an Unforgettable
                                    Event</strong
                                >
                            </p>
                            <p style="font-size: 1.9em; color: #fff">
                                My services go beyond just playing music. I work
                                closely with you to understand your vision and
                                bring it to life. Whether it's custom playlists,
                                seamless coordination with other vendors, or
                                creating the perfect atmosphere with
                                state-of-the-art sound systems and lighting, I
                                ensure your wedding day is nothing short of
                                spectacular.
                            </p>

                            <p style="font-size: 1.9em; color: #fff">
                                <strong>A Day to Remember</strong>
                            </p>
                            <p style="font-size: 1.9em; color: #fff">
                                With a commitment to excellence and a passion
                                for creating memorable moments, my goal is to
                                make your wedding the event that everyone talks
                                about for years to come. From intimate
                                gatherings to grand celebrations, I provide a
                                versatile and dynamic performance that keeps the
                                dance floor alive and your guests entertained.
                            </p>

                            <p style="font-size: 1.9em; color: #fff">
                                <strong>Why Choose DJ Shep?</strong>
                            </p>
                            <p style="font-size: 1.9em; color: #fff">
                                With over 20 years of experience DJing at
                                weddings and special events, I bring extensive
                                expertise to ensure your day is perfect. As a
                                vinyl DJ, I offer the authentic feel of vinyl
                                and the performance element of turntables,
                                adding a unique touch to your event.
                            </p>

                            <p style="font-size: 1.9em; color: #fff">
                                I pride myself on punctuality, professionalism,
                                and the ability to read and adapt to any crowd,
                                making sure every moment runs smoothly.
                                Combining the best of traditional vinyl with
                                modern sound systems and lighting, I deliver an
                                unparalleled experience that blends classic and
                                contemporary elements seamlessly.
                            </p>

                            <p style="font-size: 1.9em; color: #fff">
                                My tailored entertainment services include
                                custom playlists and personalized touches to
                                match your wedding’s unique vibe, ensuring every
                                detail is just right.
                            </p>

                            <p style="font-size: 1.9em; color: #fff">
                                Let me help you make your wedding day
                                extraordinary with a touch of class, a lot of
                                fun, and memories that will last a lifetime.
                            </p>

                            <p style="font-size: 1.9em; color: #fff">
                                <strong
                                    >Ready to make your wedding unforgettable?
                                    Let's create magic together. Contact DJ Shep
                                    today!</strong
                                >
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end container -->
        </section>
        <!-- =============== END BIOGRAPHY SECTION ================ -->

        <!-- =============== START FOOTER ================ -->
        <section style="background-color: #eeeeee">
            <div class="footer footerPadding">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="copyFooter">
                                <a href="#">&copy; Aqura 2016</a>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <nav class="social-icons">
                                <ul class="clearfix">
                                    <li>
                                        <a href="#" class="icon-button shopIcon"
                                            ><i class="fa fa-twitter"></i
                                            ><span></span
                                        ></a>
                                    </li>
                                    <li>
                                        <a href="#" class="icon-button shopIcon"
                                            ><i class="fa fa-facebook"></i
                                            ><span></span
                                        ></a>
                                    </li>
                                    <li>
                                        <a href="#" class="icon-button shopIcon"
                                            ><i class="fa fa-apple"></i
                                            ><span></span
                                        ></a>
                                    </li>
                                    <li>
                                        <a href="#" class="icon-button shopIcon"
                                            ><i class="fa fa-lastfm"></i
                                            ><span></span
                                        ></a>
                                    </li>
                                    <li>
                                        <a href="#" class="icon-button shopIcon"
                                            ><i class="fa fa-soundcloud"></i
                                            ><span></span
                                        ></a>
                                    </li>
                                    <li>
                                        <a href="#" class="icon-button shopIcon"
                                            ><i class="fa fa-youtube-play"></i
                                            ><span></span
                                        ></a>
                                    </li>
                                    <li>
                                        <a href="#" class="icon-button shopIcon"
                                            ><i class="fa fa-vimeo"></i
                                            ><span></span
                                        ></a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="col-sm-4">
                            <div class="goTop" id="back-to-top">
                                <i class="fa fa-angle-up"></i>
                                <a href="#">Go Top</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- =============== END FOOTER ================ -->

        <!-- ================================================== -->
        <!-- =============== START JQUERY SCRIPTS ================ -->
        <!-- ================================================== -->

        <script src="assets/js/jquery.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/plugins.js"></script>
        <script
            type="text/javascript"
            src="assets/jplayer/jplayer/jquery.jplayer.js"
        ></script>
        <script src="assets/js/jPlayer.js"></script>
        <script src="assets/js/mainVideo.js"></script>

        <!--[if lte IE 9]>
            <script src="assets/js/placeholder.js"></script>
            <script>
                jQuery(function () {
                    jQuery("input, textarea").placeholder();
                });
            </script>
        <![endif]-->

        <!-- ================================================== -->
        <!-- =============== END JQUERY SCRIPTS ================ -->
        <!-- ================================================== -->
    </body>
</html>
