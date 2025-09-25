@extends('site.layout.main')
@section('title', 'EcoFeminino - Multimídia')
@section('content')

    <!--================= News Details Section End Here =================-->
    <div class="rts-news-details-section section-gap-2" style="background-color: #e9ecef;">
        <div class="container">
            <div class="rts-post-heading mb--50" id="imagens">
                <div class="heading-content">
                    <div class="contents">
                        <a href="#0" class="news-catagory-tag-3">EcoFeminino</a>
                        <h2 class="content-title mb--10"><a href="#">Imagens</a></h2>
                        {{-- <div class="overview-play-btn">
                            <div class="post-bottom-info">
                                <a href="author.html" class="post-author item"><img
                                        src="{{ url('assets/user/images/user.svg') }}" alt="user-icon">Ashley Graham</a>
                                <span class="post-comment item"><img src="{{ url('assets/user/images/comment.svg') }}"
                                        alt="comment-icon">January
                                    16, 2024</span>
                                <span class="post-share item"><img src="{{ url('assets/user/images/date.svg') }}"
                                        alt="share-icon">16
                                    Shares</span>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
            <!--================= Featured video 1 Section Start Here =================-->
            <div class="rts-featured_video-section section-bg ptb--60 wow fadeIn"
                data-wow-duration="1.5s"
                style="background-color: #e9ecef;">
                <div class="container">
                    <div class="swiper rts-cmmnSlider" id="imagens-swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="featured-video-card">
                                    <div class="video-thumbnail">
                                        <img src="{{ url('assets/user/images/trending/fititel.webp') }}"
                                            alt="video-thumbnail">
                                        <div class="video-tags-area">
                                            <a href="#0" class="video-tag red-tag">Sociedade</a>
                                            <a href="#0" class="video-tag red-tag">Sociedade</a>
                                        </div>
                                    </div>

                                    <div class="contents">
                                        <div class="post-info">
                                            <div class="item">
                                                <span>
                                                    <img class="span-icon" src="{{ url('assets/user/images/date.svg') }}"
                                                        alt="date-icon">
                                                    June 16, 2024
                                                </span>
                                            </div>
                                        </div>

                                        <!-- Apenas este <a> abre o popup -->
                                        <a class="card-title image-popup-vertical-fit"
                                            href="{{ url('assets/user/images/trending/fititel.webp') }}"
                                            title="<h5>Estudantes do ITEL</h5><p>Apresentaram o seu projeto inovador no Angotic.</p>">
                                            The 3 Beauty Trends That Are Taking Over London Right Now.
                                        </a>
                                    </div>

                                    <div class="card-action-bar action-bar">
                                        <span class="post-comment item">
                                            <img src="{{ url('assets/user/images/comment.svg') }}" alt="date-icon">12
                                        </span>
                                        <span class="post-heart item">
                                            <img src="{{ url('assets/user/images/heart.svg') }}" alt="date-icon">12
                                        </span>
                                        <span class="post-share item">
                                            <img src="{{ url('assets/user/images/share.svg') }}" alt="date-icon">16
                                            Partilhas
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="featured-video-card">
                                    <div class="video-thumbnail"><img
                                            src="{{ url('assets/user/images/topics/transferir (2).jfif') }}"
                                            alt="video-thumbnail">
                                        <div class="video-tags-area">
                                            <a href="#0" class="video-tag red-tag">Sociedade</a>
                                            <a href="#0" class="video-tag red-tag">História de Vida</a>
                                        </div>
                                    </div>


                                    <div class="contents">
                                        <div class="post-info">
                                            <div class="item"><span><img class="span-icon"
                                                        src="{{ url('assets/user/images/date.svg') }}" alt="date-icon">June
                                                    16,
                                                    2024</span></div>
                                        </div>
                                        <a class="card-title image-popup-vertical-fit"
                                            href="{{ url('assets/user/images/topics/transferir (2).jfif') }}"
                                            title="<h5>Estudantes do ITEL</h5><p>Apresentaram o seu projeto inovador no Angotic.</p>">The
                                            body organism sustain growth and vital
                                            processes
                                            and
                                            to furnish energy.</a>
                                    </div>
                                    <div class="card-action-bar action-bar">
                                        <span class="post-comment item"><img
                                                src="{{ url('assets/user/images/comment.svg') }}" alt="heart-icon">10</span>
                                        <span class="post-heart item"><img src="{{ url('assets/user/images/heart.svg') }}"
                                                alt="share-icon">6</span>
                                        <span class="post-share item"><img src="{{ url('assets/user/images/share.svg') }}"
                                                alt="date-icon">10
                                            Partilhas</span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="featured-video-card">
                                    <div class="video-thumbnail"><img
                                            src="{{ url('assets/user/images/topics/transferir.jfif') }}"
                                            alt="video-thumbnail">
                                        <div class="video-tags-area">
                                            <a href="#0" class="video-tag red-tag">Economia</a>
                                            <a href="#0" class="video-tag red-tag">Sociedade</a>
                                        </div>
                                    </div>


                                    <div class="contents">
                                        <div class="post-info">
                                            <div class="item"><span><img class="span-icon"
                                                        src="{{ url('assets/user/images/date.svg') }}" alt="date-icon">June
                                                    16,
                                                    2024</span></div>
                                        </div>
                                        <a class="card-title image-popup-vertical-fit"
                                            href="{{ url('assets/user/images/topics/transferir.jfif') }}"
                                            title="<h5>Estudantes do ITEL</h5><p>Apresentaram o seu projeto inovador no Angotic.</p>">Economia
                                            agencies are a need of every country
                                            and a
                                            medium
                                            of Economiaing.</a>
                                    </div>
                                    <div class="card-action-bar action-bar">
                                        <span class="post-comment item"><img
                                                src="{{ url('assets/user/images/comment.svg') }}"
                                                alt="date-icon">12</span>
                                        <span class="post-heart item"><img
                                                src="{{ url('assets/user/images/heart.svg') }}" alt="date-icon">12</span>
                                        <span class="post-share item"><img
                                                src="{{ url('assets/user/images/share.svg') }}" alt="date-icon">16
                                            Partilhas</span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="featured-video-card">
                                    <div class="video-thumbnail"><img
                                            src="{{ url('assets/user/images/topics/transferir (1).jfif') }}"
                                            alt="video-thumbnail">
                                        <div class="video-tags-area">
                                            <a href="#0" class="video-tag red-tag">Política</a>
                                            <a href="#0" class="video-tag red-tag">História de Vida</a>
                                        </div>
                                    </div>


                                    <div class="contents">
                                        <div class="post-info">
                                            <div class="item"><span><img class="span-icon"
                                                        src="{{ url('assets/user/images/date.svg') }}"
                                                        alt="date-icon">June
                                                    16,
                                                    2024</span></div>
                                        </div>
                                        <a class="card-title image-popup-vertical-fit"
                                            href="{{ url('assets/user/images/topics/transferir (1).jfif') }}"
                                            title="<h5>Estudantes do ITEL</h5><p>Apresentaram o seu projeto inovador no Angotic.</p>">According
                                            to eyewitness elephants ran for
                                            higher
                                            ground
                                            ahead.</a>
                                    </div>
                                    <div class="card-action-bar action-bar">
                                        <span class="post-comment item"><img
                                                src="{{ url('assets/user/images/comment.svg') }}"
                                                alt="date-icon">12</span>
                                        <span class="post-heart item"><img
                                                src="{{ url('assets/user/images/heart.svg') }}" alt="date-icon">12</span>
                                        <span class="post-share item"><img
                                                src="{{ url('assets/user/images/share.svg') }}" alt="date-icon">16
                                            Partilhas</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--================= Featured video 1 Section End Here =================-->

            <div class="rts-post-heading mb--50" id="videos">
                <div class="heading-content">
                    <div class="contents">
                        <h2 class="content-title mb--10"><a href="#">Videos</a></h2>
                        {{-- <div class="overview-play-btn">
                            <div class="post-bottom-info">
                                <a href="author.html" class="post-author item"><img
                                        src="{{ url('assets/user/images/user.svg') }}" alt="user-icon">Ashley Graham</a>
                                <span class="post-comment item"><img src="{{ url('assets/user/images/comment.svg') }}"
                                        alt="comment-icon">January
                                    16, 2024</span>
                                <span class="post-share item"><img src="{{ url('assets/user/images/date.svg') }}"
                                        alt="share-icon">16
                                    Shares</span>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
            <!--================= Featured video 2 Section Start Here =================-->
            <div class="rts-featured_video-section section-bg ptb--60 wow fadeIn"
                data-wow-duration="1.5s"
                style="background-color: #e9ecef;">
                <div class="container">

                    <div class="swiper rts-cmmnSlider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="featured-video-card">
                                    <div class="video-thumbnail">
                                        <img src="{{ url('assets/user/images/trending/fititel.webp') }}"
                                            alt="video-thumbnail">
                                        <div class="video-tags-area">
                                            <a href="#0" class="video-tag red-tag">Sociedade</a>
                                            <a href="#0" class="video-tag red-tag">Sociedade</a>
                                        </div>
                                    </div>

                                    <div class="contents">
                                        <div class="post-info">
                                            <div class="item">
                                                <span>
                                                    <img class="span-icon" src="{{ url('assets/user/images/date.svg') }}"
                                                        alt="date-icon">
                                                    June 16, 2024
                                                </span>
                                            </div>
                                        </div>

                                        <!-- Apenas este <a> abre o popup -->
                                        <a class="card-title image-popup-vertical-fit"
                                            href="{{ url('assets/user/images/trending/fititel.webp') }}"
                                            title="<h5>Estudantes do ITEL</h5><p>Apresentaram o seu projeto inovador no Angotic.</p>">
                                            The 3 Beauty Trends That Are Taking Over London Right Now.
                                        </a>
                                    </div>

                                    <div class="card-action-bar action-bar">
                                        <span class="post-comment item">
                                            <img src="{{ url('assets/user/images/comment.svg') }}" alt="date-icon">12
                                        </span>
                                        <span class="post-heart item">
                                            <img src="{{ url('assets/user/images/heart.svg') }}" alt="date-icon">12
                                        </span>
                                        <span class="post-share item">
                                            <img src="{{ url('assets/user/images/share.svg') }}" alt="date-icon">16
                                            Partilhas
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="featured-video-card">
                                    <div class="video-thumbnail"><img
                                            src="{{ url('assets/user/images/topics/transferir (2).jfif') }}"
                                            alt="video-thumbnail">
                                        <div class="video-tags-area">
                                            <a href="#0" class="video-tag red-tag">Sociedade</a>
                                            <a href="#0" class="video-tag red-tag">História de Vida</a>
                                        </div>
                                    </div>


                                    <div class="contents">
                                        <div class="post-info">
                                            <div class="item"><span><img class="span-icon"
                                                        src="{{ url('assets/user/images/date.svg') }}"
                                                        alt="date-icon">June
                                                    16,
                                                    2024</span></div>
                                        </div>
                                        <a class="card-title image-popup-vertical-fit"
                                            href="{{ url('assets/user/images/topics/transferir (2).jfif') }}"
                                            title="<h5>Estudantes do ITEL</h5><p>Apresentaram o seu projeto inovador no Angotic.</p>">The
                                            body organism sustain growth and vital
                                            processes
                                            and
                                            to furnish energy.</a>
                                    </div>
                                    <div class="card-action-bar action-bar">
                                        <span class="post-comment item"><img
                                                src="{{ url('assets/user/images/comment.svg') }}"
                                                alt="heart-icon">10</span>
                                        <span class="post-heart item"><img
                                                src="{{ url('assets/user/images/heart.svg') }}" alt="share-icon">6</span>
                                        <span class="post-share item"><img
                                                src="{{ url('assets/user/images/share.svg') }}" alt="date-icon">10
                                            Partilhas</span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="featured-video-card">
                                    <div class="video-thumbnail"><img
                                            src="{{ url('assets/user/images/topics/transferir.jfif') }}"
                                            alt="video-thumbnail">
                                        <div class="video-tags-area">
                                            <a href="#0" class="video-tag red-tag">Economia</a>
                                            <a href="#0" class="video-tag red-tag">Sociedade</a>
                                        </div>
                                    </div>


                                    <div class="contents">
                                        <div class="post-info">
                                            <div class="item"><span><img class="span-icon"
                                                        src="{{ url('assets/user/images/date.svg') }}"
                                                        alt="date-icon">June
                                                    16,
                                                    2024</span></div>
                                        </div>
                                        <a class="card-title image-popup-vertical-fit"
                                            href="{{ url('assets/user/images/topics/transferir.jfif') }}"
                                            title="<h5>Estudantes do ITEL</h5><p>Apresentaram o seu projeto inovador no Angotic.</p>">Economia
                                            agencies are a need of every country
                                            and a
                                            medium
                                            of Economiaing.</a>
                                    </div>
                                    <div class="card-action-bar action-bar">
                                        <span class="post-comment item"><img
                                                src="{{ url('assets/user/images/comment.svg') }}"
                                                alt="date-icon">12</span>
                                        <span class="post-heart item"><img
                                                src="{{ url('assets/user/images/heart.svg') }}" alt="date-icon">12</span>
                                        <span class="post-share item"><img
                                                src="{{ url('assets/user/images/share.svg') }}" alt="date-icon">16
                                            Partilhas</span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="featured-video-card">
                                    <div class="video-thumbnail"><img
                                            src="{{ url('assets/user/images/topics/transferir (1).jfif') }}"
                                            alt="video-thumbnail">
                                        <div class="video-tags-area">
                                            <a href="#0" class="video-tag red-tag">Política</a>
                                            <a href="#0" class="video-tag red-tag">História de Vida</a>
                                        </div>
                                    </div>


                                    <div class="contents">
                                        <div class="post-info">
                                            <div class="item"><span><img class="span-icon"
                                                        src="{{ url('assets/user/images/date.svg') }}"
                                                        alt="date-icon">June
                                                    16,
                                                    2024</span></div>
                                        </div>
                                        <a class="card-title image-popup-vertical-fit"
                                            href="{{ url('assets/user/images/topics/transferir (1).jfif') }}"
                                            title="<h5>Estudantes do ITEL</h5><p>Apresentaram o seu projeto inovador no Angotic.</p>">According
                                            to eyewitness elephants ran for
                                            higher
                                            ground
                                            ahead.</a>
                                    </div>
                                    <div class="card-action-bar action-bar">
                                        <span class="post-comment item"><img
                                                src="{{ url('assets/user/images/comment.svg') }}"
                                                alt="date-icon">12</span>
                                        <span class="post-heart item"><img
                                                src="{{ url('assets/user/images/heart.svg') }}" alt="date-icon">12</span>
                                        <span class="post-share item"><img
                                                src="{{ url('assets/user/images/share.svg') }}" alt="date-icon">16
                                            Partilhas</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--================= Featured video 2 Section End Here =================-->

            <div class="rts-post-heading mb--50" id="podcasts">
                <div class="heading-content">
                    <div class="contents">
                        <h2 class="content-title mb--10"><a href="#">Podcasts</a></h2>
                        {{-- <div class="overview-play-btn">
                            <div class="post-bottom-info">
                                <a href="author.html" class="post-author item"><img
                                        src="{{ url('assets/user/images/user.svg') }}" alt="user-icon">Ashley Graham</a>
                                <span class="post-comment item"><img src="{{ url('assets/user/images/comment.svg') }}"
                                        alt="comment-icon">January
                                    16, 2024</span>
                                <span class="post-share item"><img src="{{ url('assets/user/images/date.svg') }}"
                                        alt="share-icon">16
                                    Shares</span>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
            <!--================= Featured video 3 Section Start Here =================-->
            <div class="rts-featured_video-section section-bg ptb--60 wow fadeIn"
                data-wow-duration="1.5s"
                style="background-color: #e9ecef;">
                <div class="container">

                    <div class="swiper rts-cmmnSlider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="featured-video-card">
                                    <div class="video-thumbnail">
                                        <img src="{{ url('assets/user/images/trending/fititel.webp') }}"
                                            alt="video-thumbnail">
                                        <div class="video-tags-area">
                                            <a href="#0" class="video-tag red-tag">Sociedade</a>
                                            <a href="#0" class="video-tag red-tag">Sociedade</a>
                                        </div>
                                    </div>

                                    <div class="contents">
                                        <div class="post-info">
                                            <div class="item">
                                                <span>
                                                    <img class="span-icon" src="{{ url('assets/user/images/date.svg') }}"
                                                        alt="date-icon">
                                                    June 16, 2024
                                                </span>
                                            </div>
                                        </div>

                                        <!-- Apenas este <a> abre o popup -->
                                        <a class="card-title image-popup-vertical-fit"
                                            href="{{ url('assets/user/images/trending/fititel.webp') }}"
                                            title="<h5>Estudantes do ITEL</h5><p>Apresentaram o seu projeto inovador no Angotic.</p>">
                                            The 3 Beauty Trends That Are Taking Over London Right Now.
                                        </a>
                                    </div>

                                    <div class="card-action-bar action-bar">
                                        <span class="post-comment item">
                                            <img src="{{ url('assets/user/images/comment.svg') }}" alt="date-icon">12
                                        </span>
                                        <span class="post-heart item">
                                            <img src="{{ url('assets/user/images/heart.svg') }}" alt="date-icon">12
                                        </span>
                                        <span class="post-share item">
                                            <img src="{{ url('assets/user/images/share.svg') }}" alt="date-icon">16
                                            Partilhas
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="featured-video-card">
                                    <div class="video-thumbnail"><img
                                            src="{{ url('assets/user/images/topics/transferir (2).jfif') }}"
                                            alt="video-thumbnail">
                                        <div class="video-tags-area">
                                            <a href="#0" class="video-tag red-tag">Sociedade</a>
                                            <a href="#0" class="video-tag red-tag">História de Vida</a>
                                        </div>
                                    </div>


                                    <div class="contents">
                                        <div class="post-info">
                                            <div class="item"><span><img class="span-icon"
                                                        src="{{ url('assets/user/images/date.svg') }}"
                                                        alt="date-icon">June
                                                    16,
                                                    2024</span></div>
                                        </div>
                                        <a class="card-title image-popup-vertical-fit"
                                            href="{{ url('assets/user/images/topics/transferir (2).jfif') }}"
                                            title="<h5>Estudantes do ITEL</h5><p>Apresentaram o seu projeto inovador no Angotic.</p>">The
                                            body organism sustain growth and vital
                                            processes
                                            and
                                            to furnish energy.</a>
                                    </div>
                                    <div class="card-action-bar action-bar">
                                        <span class="post-comment item"><img
                                                src="{{ url('assets/user/images/comment.svg') }}"
                                                alt="heart-icon">10</span>
                                        <span class="post-heart item"><img
                                                src="{{ url('assets/user/images/heart.svg') }}" alt="share-icon">6</span>
                                        <span class="post-share item"><img
                                                src="{{ url('assets/user/images/share.svg') }}" alt="date-icon">10
                                            Partilhas</span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="featured-video-card">
                                    <div class="video-thumbnail"><img
                                            src="{{ url('assets/user/images/topics/transferir.jfif') }}"
                                            alt="video-thumbnail">
                                        <div class="video-tags-area">
                                            <a href="#0" class="video-tag red-tag">Economia</a>
                                            <a href="#0" class="video-tag red-tag">Sociedade</a>
                                        </div>
                                    </div>


                                    <div class="contents">
                                        <div class="post-info">
                                            <div class="item"><span><img class="span-icon"
                                                        src="{{ url('assets/user/images/date.svg') }}"
                                                        alt="date-icon">June
                                                    16,
                                                    2024</span></div>
                                        </div>
                                        <a class="card-title image-popup-vertical-fit"
                                            href="{{ url('assets/user/images/topics/transferir.jfif') }}"
                                            title="<h5>Estudantes do ITEL</h5><p>Apresentaram o seu projeto inovador no Angotic.</p>">Economia
                                            agencies are a need of every country
                                            and a
                                            medium
                                            of Economiaing.</a>
                                    </div>
                                    <div class="card-action-bar action-bar">
                                        <span class="post-comment item"><img
                                                src="{{ url('assets/user/images/comment.svg') }}"
                                                alt="date-icon">12</span>
                                        <span class="post-heart item"><img
                                                src="{{ url('assets/user/images/heart.svg') }}" alt="date-icon">12</span>
                                        <span class="post-share item"><img
                                                src="{{ url('assets/user/images/share.svg') }}" alt="date-icon">16
                                            Partilhas</span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="featured-video-card">
                                    <div class="video-thumbnail"><img
                                            src="{{ url('assets/user/images/topics/transferir (1).jfif') }}"
                                            alt="video-thumbnail">
                                        <div class="video-tags-area">
                                            <a href="#0" class="video-tag red-tag">Política</a>
                                            <a href="#0" class="video-tag red-tag">História de Vida</a>
                                        </div>
                                    </div>


                                    <div class="contents">
                                        <div class="post-info">
                                            <div class="item"><span><img class="span-icon"
                                                        src="{{ url('assets/user/images/date.svg') }}"
                                                        alt="date-icon">June
                                                    16,
                                                    2024</span></div>
                                        </div>
                                        <a class="card-title image-popup-vertical-fit"
                                            href="{{ url('assets/user/images/topics/transferir (1).jfif') }}"
                                            title="<h5>Estudantes do ITEL</h5><p>Apresentaram o seu projeto inovador no Angotic.</p>">According
                                            to eyewitness elephants ran for
                                            higher
                                            ground
                                            ahead.</a>
                                    </div>
                                    <div class="card-action-bar action-bar">
                                        <span class="post-comment item"><img
                                                src="{{ url('assets/user/images/comment.svg') }}"
                                                alt="date-icon">12</span>
                                        <span class="post-heart item"><img
                                                src="{{ url('assets/user/images/heart.svg') }}" alt="date-icon">12</span>
                                        <span class="post-share item"><img
                                                src="{{ url('assets/user/images/share.svg') }}" alt="date-icon">16
                                            Partilhas</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--================= Featured video 3 Section End Here =================-->

        </div>
    </div>
    <!--================= News Details Section End Here =================-->

    <style>
        .news-catagory-tag-3 {
            background: #ff1856 !important;
        }
    </style>

    <script>
        var swiper = new Swiper(".rts-cmmnSlider", {
            loop: true, // loop infinito
            autoplay: {
                delay: 3000, // tempo entre slides (3s)
                disableOnInteraction: false, // continua mesmo após interação
                reverseDirection: false, // false = esquerda → direita (padrão)
            },
            slidesPerView: 1, // um slide de cada vez
            spaceBetween: 20, // espaço entre slides
            speed: 1000, // velocidade da transição
        });
    </script>



@endsection
