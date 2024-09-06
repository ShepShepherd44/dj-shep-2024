<!DOCTYPE html>
<html lang="en">
<head>
    <title>Private Events</title>
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
                            background-image: url(&quot;assets/img/header/eventsrecordsheader.jpg&quot;);
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
                            "
                        >
                            <h1 style="font-size: 2.5em">
                                DJ SHEP PRIVATE EVENTS
                            </h1>
                            <p style="font-size: 1.5em">
                                "Transforming private events into legendary
                                parties! With over two decades of DJ
                                mastery, <br />
                                I blend vinyl classics and cutting-edge
                                mixes to keep your guests vibing all night.
                                <br />
                                Let's create unforgettable memories and a
                                dance floor <br />
                                that never quits!"
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
        style="background-image: url(assets/img/subHeader/eventsheader.png)"
        class="biography padding background-properties"
        id="content"
    >
        <div class="container">
            <div class="sectionTitle paddingBottom">
                <span class="heading-t3"></span>
                <h2>
                    <a href="albums.html"
                        ><strong style="color: #fff">LET'S PARTY</strong></a
                    >
                </h2>
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
                            I specialize in creating unforgettable
                            experiences for private parties and events. With
                            over two decades of experience, I bring a blend
                            of traditional vinyl and cutting-edge technology
                            to ensure your event has the perfect soundtrack
                            and atmosphere.
                        </p>

                        <p style="font-size: 1.9em; color: #fff">
                            <strong>CUSTOMIZED ENTERTAINMENT</strong>
                        </p>
                        <p style="font-size: 1.9em; color: #fff">
                            Every event is unique, and the playlist should
                            suit it. With my extensive music knowledge and
                            personalized playlists tailored to your event's
                            unique vibe and audience preferences, I ensure a
                            versatile and dynamic performance on the
                            turntables that keeps the dance floor energized
                            and guests entertained. Whether you're hosting
                            an intimate gathering or a grand celebration,
                            entertainment satisfaction is my first priority.
                        </p>

                        <p style="font-size: 1.9em; color: #fff">
                            <strong>EVENT COORDINATION</strong>
                        </p>
                        <p style="font-size: 1.9em; color: #fff">
                            From the initial consultation to the final song,
                            I manage all aspects of your event's
                            entertainment. My comprehensive services include
                            seamless integration with your event timeline,
                            coordination with other vendors, and real-time
                            adaptability to ensure a smooth and stress-free
                            experience. With two decades of experience in
                            event management, no event is too big or too
                            small.
                        </p>

                        <p style="font-size: 1.9em; color: #fff">
                            <strong>EQUIPMENT</strong>
                        </p>
                        <p style="font-size: 1.9em; color: #fff">
                            I provide only the best equipment, using
                            state-of-the-art sound systems, wireless
                            microphones, and Technics 1200 turntables
                            alongside the innovative Pioneer S series mixer.
                            I combine the best of the old with the best of
                            the new to give you an authentic experience
                            paired with the best sound modern systems can
                            provide.
                        </p>

                        <p style="font-size: 1.9em; color: #fff">
                            <strong>PROFESSIONALISM AND RELIABILITY</strong>
                        </p>
                        <p style="font-size: 1.9em; color: #fff">
                            With a commitment to excellence, I pride myself
                            on punctuality, professionalism, and the ability
                            to read and adapt to any crowd. Your event's
                            success is my top priority, and I measure it by
                            the joy and satisfaction of you and your guests.
                        </p>

                        <p style="font-size: 1.9em; color: #fff">
                            Whether it's a birthday, anniversary, or any
                            special occasion, I deliver an exceptional
                            entertainment experience that will leave lasting
                            memories. Let me help you make your next private
                            event extraordinary with a touch of class and a
                            lot of fun.
                        </p>
                        <p style="font-size: 1.9em; color: #fff">
                            <strong>LET'S PARTY</strong>
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
