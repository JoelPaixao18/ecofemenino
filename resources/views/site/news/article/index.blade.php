@extends('site.layout.main')
@section('title', 'Ecofemenino - Artigos de Notícias')
@section('content')

    <!--================= Author Profile Section Start Here =================-->
    <div class="rts-author-profile-area section-gap-2" style="background: #e9ecef !important;" id="editorial">
        <div class="container">
            <div class="news-topbar news-topbar-2">
                <h2 class="section-title">Editorial</h2>
                <div class="wide-border" style="background: #a09797 !important;width: 55rem !important"></div>
            </div>

            <div class="author-profile-box" style="background: #e9ecef !important;">
                <div class="author-profile-picture"><img style="height: 40rem"
                        src="{{ asset('assets/user/images/vice.jpeg') }}" alt="author-profile-picture">
                </div>

                <div class="author-information" {{-- style="margin-top: -10rem !important" --}}>
                    {{-- <span class="author-level">Senior Author</span> --}}
                    <h2 class="author-name mb--20">Esperança Maria Eduardo Francisco da Costa</h2>
                    <p class="mb--50">Bióloga e política angolana filiada ao partido MPLA e actual Vice-Presidente da
                        República de Angola, mandato iniciado a 15 de Setembro de
                        2022, após tomada de posse, na Praça da República, Luanda. <br> <br>

                        Desenvolveu um intenso trabalho para a
                        promoção da investigação científica com ajuda de referenciados acadêmicos. Mais tarde, faria parte
                        do Colégio Reitoral da Universidade Agostinho Neto, na qualidade de vice-reitora para a expansão
                        universitária, cujo papel era a coordenação da expansão do ensino nas várias regiões do país e
                        conseguir uma investigação científica com grande impacto na qualidade de ensino.</p>
                    <div class="author-achives">
                        <div class="author-follow">
                            <span class="follow-title">Follow:</span>
                            <ul class="social-links">
                                <li> <a href="#" class="platform"><i class="fab fa-facebook-f"></i></a></li>
                                <li> <a href="#" class="platform"><i class="fab fa-pinterest-p"></i></a>
                                </li>
                                <li><a href="#" class="platform"><i class="fab fa-linkedin-in"></i></a></li>
                                <li> <a href="#" class="platform"><i class="fab fa-vimeo-v"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="articles-published"><span class="article-value">44</span>Articles Published</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--================= Author Profile Section End Here =================-->

    <!--================= Featured video Section Start Here =================-->
    <div class="rts-featured_video-section section-bg ptb--60 wow fadeIn" id="debate-femenino" data-wow-duration="1.5s">
        <div class="container">
            <div class="news-topbar news-topbar-2">
                <h2 class="section-title">Debate Femenino</h2>
                <div class="wide-border" style="background: #a09797 !important;"></div>
                <div class="slider-navigation">
                    <div class="swiper-button-prev navigation-btn"><i class="far fa-chevron-left"></i></div>
                    <div class="swiper-button-next navigation-btn"><i class="far fa-chevron-right"></i></div>
                </div>
            </div>
            <div class="swiper rts-cmmnSlider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="featured-video-card">
                            <div class="video-thumbnail"><img src="{{ url('assets/user/images/trending/fititel.webp') }}"
                                    alt="video-thumbnail">
                                <div class="video-tags-area">
                                    <a href="#0" class="video-tag red-tag">Sociedade</a>
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
                                <a href="#0" class="card-title">The 3
                                    Beauty Trends That Are Taking Over
                                    London Right
                                    Now.</a>
                            </div>
                            <div class="card-action-bar action-bar">
                                <span class="post-comment item"><img src="{{ url('assets/user/images/comment.svg') }}"
                                        alt="date-icon">12</span>
                                <span class="post-heart item"><img src="{{ url('assets/user/images/heart.svg') }}"
                                        alt="date-icon">12</span>
                                <span class="post-share item"><img src="{{ url('assets/user/images/share.svg') }}"
                                        alt="date-icon">16
                                    Partilhas</span>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="featured-video-card">
                            <div class="video-thumbnail"><img
                                    src="{{ url('assets/user/images/topics/transferir (2).jfif') }}" alt="video-thumbnail">
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
                                <a href="#0" class="card-title">The body organism sustain growth and vital processes
                                    and
                                    to furnish energy.</a>
                            </div>
                            <div class="card-action-bar action-bar">
                                <span class="post-comment item"><img src="{{ url('assets/user/images/comment.svg') }}"
                                        alt="heart-icon">10</span>
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
                                    src="{{ url('assets/user/images/topics/transferir.jfif') }}" alt="video-thumbnail">
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
                                <a href="#0" class="card-title">Economia agencies are a need of every country and a
                                    medium
                                    of Economiaing.</a>
                            </div>
                            <div class="card-action-bar action-bar">
                                <span class="post-comment item"><img src="{{ url('assets/user/images/comment.svg') }}"
                                        alt="date-icon">12</span>
                                <span class="post-heart item"><img src="{{ url('assets/user/images/heart.svg') }}"
                                        alt="date-icon">12</span>
                                <span class="post-share item"><img src="{{ url('assets/user/images/share.svg') }}"
                                        alt="date-icon">16
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
                                                src="{{ url('assets/user/images/date.svg') }}" alt="date-icon">June
                                            16,
                                            2024</span></div>
                                </div>
                                <a href="#0" class="card-title">According to eyewitness elephants ran for higher
                                    ground
                                    ahead.</a>
                            </div>
                            <div class="card-action-bar action-bar">
                                <span class="post-comment item"><img src="{{ url('assets/user/images/comment.svg') }}"
                                        alt="date-icon">12</span>
                                <span class="post-heart item"><img src="{{ url('assets/user/images/heart.svg') }}"
                                        alt="date-icon">12</span>
                                <span class="post-share item"><img src="{{ url('assets/user/images/share.svg') }}"
                                        alt="date-icon">16
                                    Partilhas</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--================= Featured video Section End Here =================-->

    <!--================= Featured video Section Start Here =================-->
    <div class="rts-featured_video-section section-bg ptb--60 wow fadeIn" style="background: #e9ecef !important;"
        id="direitos-humanos" data-wow-duration="1.5s">
        <div class="container">
            <div class="news-topbar news-topbar-2">
                <h2 class="section-title">Direitos Humanos e Género</h2>
                <div class="wide-border" style="background: #a09797 !important;"></div>
                <div class="slider-navigation">
                    <div class="swiper-button-prev navigation-btn"><i class="far fa-chevron-left"></i></div>
                    <div class="swiper-button-next navigation-btn"><i class="far fa-chevron-right"></i></div>
                </div>
            </div>
            <div class="swiper rts-cmmnSlider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="featured-video-card">
                            <div class="video-thumbnail"><img src="{{ url('assets/user/images/trending/fititel.webp') }}"
                                    alt="video-thumbnail">
                                <div class="video-tags-area">
                                    <a href="#0" class="video-tag red-tag">Sociedade</a>
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
                                <a href="#0" class="card-title">The 3
                                    Beauty Trends That Are Taking Over
                                    London Right
                                    Now.</a>
                            </div>
                            <div class="card-action-bar action-bar">
                                <span class="post-comment item"><img src="{{ url('assets/user/images/comment.svg') }}"
                                        alt="date-icon">12</span>
                                <span class="post-heart item"><img src="{{ url('assets/user/images/heart.svg') }}"
                                        alt="date-icon">12</span>
                                <span class="post-share item"><img src="{{ url('assets/user/images/share.svg') }}"
                                        alt="date-icon">16
                                    Partilhas</span>
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
                                <a href="#0" class="card-title">The body organism sustain growth and vital processes
                                    and
                                    to furnish energy.</a>
                            </div>
                            <div class="card-action-bar action-bar">
                                <span class="post-comment item"><img src="{{ url('assets/user/images/comment.svg') }}"
                                        alt="heart-icon">10</span>
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
                                    src="{{ url('assets/user/images/topics/transferir.jfif') }}" alt="video-thumbnail">
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
                                <a href="#0" class="card-title">Economia agencies are a need of every country and a
                                    medium
                                    of Economiaing.</a>
                            </div>
                            <div class="card-action-bar action-bar">
                                <span class="post-comment item"><img src="{{ url('assets/user/images/comment.svg') }}"
                                        alt="date-icon">12</span>
                                <span class="post-heart item"><img src="{{ url('assets/user/images/heart.svg') }}"
                                        alt="date-icon">12</span>
                                <span class="post-share item"><img src="{{ url('assets/user/images/share.svg') }}"
                                        alt="date-icon">16
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
                                                src="{{ url('assets/user/images/date.svg') }}" alt="date-icon">June
                                            16,
                                            2024</span></div>
                                </div>
                                <a href="#0" class="card-title">According to eyewitness elephants ran for higher
                                    ground
                                    ahead.</a>
                            </div>
                            <div class="card-action-bar action-bar">
                                <span class="post-comment item"><img src="{{ url('assets/user/images/comment.svg') }}"
                                        alt="date-icon">12</span>
                                <span class="post-heart item"><img src="{{ url('assets/user/images/heart.svg') }}"
                                        alt="date-icon">12</span>
                                <span class="post-share item"><img src="{{ url('assets/user/images/share.svg') }}"
                                        alt="date-icon">16
                                    Partilhas</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--================= Featured video Section End Here =================-->

    <!--================= Featured video Section Start Here =================-->
    <div class="rts-featured_video-section section-bg ptb--60 wow fadeIn" id="coluna-internacional"
        data-wow-duration="1.5s">
        <div class="container">
            <div class="news-topbar news-topbar-2">
                <h2 class="section-title">Coluna Internacional</h2>
                <div class="wide-border" style="background: #a09797 !important;"></div>
                <div class="slider-navigation">
                    <div class="swiper-button-prev navigation-btn"><i class="far fa-chevron-left"></i></div>
                    <div class="swiper-button-next navigation-btn"><i class="far fa-chevron-right"></i></div>
                </div>
            </div>
            <div class="swiper rts-cmmnSlider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="featured-video-card">
                            <div class="video-thumbnail"><img src="{{ url('assets/user/images/trending/fititel.webp') }}"
                                    alt="video-thumbnail">
                                <div class="video-tags-area">
                                    <a href="#0" class="video-tag red-tag">Sociedade</a>
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
                                <a href="#0" class="card-title">The 3
                                    Beauty Trends That Are Taking Over
                                    London Right
                                    Now.</a>
                            </div>
                            <div class="card-action-bar action-bar">
                                <span class="post-comment item"><img src="{{ url('assets/user/images/comment.svg') }}"
                                        alt="date-icon">12</span>
                                <span class="post-heart item"><img src="{{ url('assets/user/images/heart.svg') }}"
                                        alt="date-icon">12</span>
                                <span class="post-share item"><img src="{{ url('assets/user/images/share.svg') }}"
                                        alt="date-icon">16
                                    Partilhas</span>
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
                                <a href="#0" class="card-title">The body organism sustain growth and vital processes
                                    and
                                    to furnish energy.</a>
                            </div>
                            <div class="card-action-bar action-bar">
                                <span class="post-comment item"><img src="{{ url('assets/user/images/comment.svg') }}"
                                        alt="heart-icon">10</span>
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
                                    src="{{ url('assets/user/images/topics/transferir.jfif') }}" alt="video-thumbnail">
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
                                <a href="#0" class="card-title">Economia agencies are a need of every country and a
                                    medium
                                    of Economiaing.</a>
                            </div>
                            <div class="card-action-bar action-bar">
                                <span class="post-comment item"><img src="{{ url('assets/user/images/comment.svg') }}"
                                        alt="date-icon">12</span>
                                <span class="post-heart item"><img src="{{ url('assets/user/images/heart.svg') }}"
                                        alt="date-icon">12</span>
                                <span class="post-share item"><img src="{{ url('assets/user/images/share.svg') }}"
                                        alt="date-icon">16
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
                                    <a href="#0" class="video-tag red-tag">História da Vida</a>
                                </div>
                            </div>
                            

                            <div class="contents">
                                <div class="post-info">
                                    <div class="item"><span><img class="span-icon"
                                                src="{{ url('assets/user/images/date.svg') }}" alt="date-icon">June
                                            16,
                                            2024</span></div>
                                </div>
                                <a href="#0" class="card-title">According to eyewitness elephants ran for higher
                                    ground
                                    ahead.</a>
                            </div>
                            <div class="card-action-bar action-bar">
                                <span class="post-comment item"><img src="{{ url('assets/user/images/comment.svg') }}"
                                        alt="date-icon">12</span>
                                <span class="post-heart item"><img src="{{ url('assets/user/images/heart.svg') }}"
                                        alt="date-icon">12</span>
                                <span class="post-share item"><img src="{{ url('assets/user/images/share.svg') }}"
                                        alt="date-icon">16
                                    Partilhas</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--================= Featured video Section End Here =================-->

    <style>
        html {
            scroll-behavior: smooth;
        }

        /* Ou se quiser mais controle */
        .rts-sports-section {
            scroll-margin-top: 100px;
            /* Ajuste conforme a altura do seu header */
        }
    </style>

@endsection
