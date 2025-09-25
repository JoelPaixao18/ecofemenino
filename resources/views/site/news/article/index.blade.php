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
                        src="{{ asset('assets/user/images/vice.jpg') }}" alt="author-profile-picture">
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
                <h2 class="section-title">Debate Feminino</h2>
                <div class="wide-border" style="background: #a09797 !important;"></div>
                <div class="slider-navigation">
                    <div class="swiper-button-prev navigation-btn"><i class="far fa-chevron-left"></i></div>
                    <div class="swiper-button-next navigation-btn"><i class="far fa-chevron-right"></i></div>
                </div>
            </div>

            <!--================= Read Section Start Here =================-->
            <div class="rts-read-section1 section-gap-2 wow fadeIn" data-wow-duration="1.5s">
                <div class="container">
                    <div class="row no-gutters3">
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                            <div class="rts-post1 rts-post-medium1">
                                <div class="post-picture">
                                    <div class="overlay"></div>

                                    <!-- Aqui: link da imagem com popup -->
                                    <a href="{{ url('assets/user/images/more/image1.png') }}"
                                        class="image-popup-vertical-fit"
                                        title="<h5>Post Title</h5><p>Descrição ou resumo do post.</p>">
                                        <img src="{{ url('assets/user/images/more/image1.png') }}" alt="main-post-image">
                                    </a>

                                    <div class="section-content">
                                        <a href="catagory-details.html" class="news-catagory-tag">FASHION</a>
                                        <div class="contents">
                                            <div class="post-title"><a
                                                    href="{{ url('assets/user/images/more/image1.png') }}"
                                                    class="image-popup-vertical-fit"
                                                    title="<h5>Post Title</h5><p>Descrição ou resumo do post.</p>">Postpones
                                                    tour after
                                                    syndrome leaves</a></div>
                                            <div class="post-bottom-info">
                                                <a href="author.html" class="post-author item1">Alan Fresco</a>
                                                <div class="post-bottom">
                                                    <span class="post-date item1">April 03, 2024</span>
                                                    <span class="post-time">1 day ago</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                            <div class="rts-post1 rts-post-medium1">
                                <div class="post-picture">
                                    <div class="overlay"></div>
                                    <a href="{{ url('assets/user/images/more/image2.png') }}"
                                        class="image-popup-vertical-fit"
                                        title="<h5>Post Title</h5><p>Descrição ou resumo do post.</p>"><img
                                            src="{{ url('assets/user/images/more/image2.png') }}" alt="main-post-image"></a>
                                    <div class="section-content">
                                        <a href="catagory-details.html" class="news-catagory-tag">MUSIC</a>
                                        <div class="contents">
                                            <div class="post-title"><a
                                                    href="{{ url('assets/user/images/more/image2.png') }}"
                                                    class="image-popup-vertical-fit"
                                                    title="<h5>Post Title</h5><p>Descrição ou resumo do post.</p>">With
                                                    ‘Jurassic World’
                                                    ending,
                                                    Bryce Dallas</a></div>
                                            <div class="post-bottom-info">
                                                <a href="author.html" class="post-author item1">Barry Tone</a>
                                                <div class="post-bottom">
                                                    <span class="post-date item1">April
                                                        03, 2024</span>
                                                    <span class="post-time">1 day ago</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                            <div class="rts-post1 rts-post-medium1">
                                <div class="post-picture">
                                    <div class="overlay"></div>
                                    <a href="{{ url('assets/user/images/more/image3.png') }}"
                                        class="image-popup-vertical-fit"
                                        title="<h5>Post Title</h5><p>Descrição ou resumo do post.</p>"><img
                                            src="{{ url('assets/user/images/more/image3.png') }}"
                                            alt="main-post-image"></a>
                                    <div class="section-content">
                                        <a href="catagory-details.html" class="news-catagory-tag">LIFESTYLE</a>
                                        <div class="contents">
                                            <div class="post-title"><a
                                                    href="{{ url('assets/user/images/more/image3.png') }}"
                                                    class="image-popup-vertical-fit"
                                                    title="<h5>Post Title</h5><p>Descrição ou resumo do post.</p>">‘The
                                                    Bachelor’ made a
                                                    ‘sideshow’</a></div>
                                            <div class="post-bottom-info">
                                                <a href="author.html" class="post-author item1">Hilari Ouse</a>
                                                <div class="post-bottom">
                                                    <span class="post-date item1">April
                                                        03, 2024</span>
                                                    <span class="post-time">1 day ago</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                            <div class="rts-post1 rts-post-medium1">
                                <div class="post-picture">
                                    <div class="overlay"></div>
                                    <a href="{{ url('assets/user/images/more/image4.png') }}"
                                        class="image-popup-vertical-fit"
                                        title="<h5>Post Title</h5><p>Descrição ou resumo do post.</p>"><img
                                            src="{{ url('assets/user/images/more/image4.png') }}"
                                            alt="main-post-image"></a>
                                    <div class="section-content">
                                        <a href="catagory-details.html" class="news-catagory-tag">SPORTS</a>
                                        <div class="contents">
                                            <div class="post-title"><a
                                                    href="{{ url('assets/user/images/more/image4.png') }}"
                                                    class="image-popup-vertical-fit"
                                                    title="<h5>Post Title</h5><p>Descrição ou resumo do post.</p>">Curry
                                                    exploits help
                                                    Warriors
                                                    level Finals</a></div>
                                            <div class="post-bottom-info">
                                                <a href="author.html" class="post-author item1">Norman Gordon</a>
                                                <div class="post-bottom">
                                                    <span class="post-date item1">April
                                                        03, 2024</span>
                                                    <span class="post-time">1 day ago</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--================= Read Section End Here =================-->
        </div>
    </div>
    <!--================= Featured video Section End Here =================-->

    <!--================= Featured video Section Start Here =================-->
    <div class="rts-featured_video-section section-bg ptb--60 wow fadeIn" style="background: #e9ecef !important;"
        id="direitos-humanos" data-wow-duration="1.5s">
        <div class="container">
        <div class="news-topbar news-topbar-2">
                <h2 class="section-title">Direitos Humanos</h2>
                <div class="wide-border" style="background: #a09797 !important;"></div>
                <div class="slider-navigation">
                    <div class="swiper-button-prev navigation-btn"><i class="far fa-chevron-left"></i></div>
                    <div class="swiper-button-next navigation-btn"><i class="far fa-chevron-right"></i></div>
                </div>
        </div>
        </div>
        <div class="rts-read-section1 section-gap-2 wow fadeIn" data-wow-duration="1.5s">
                <div class="container">
                    <div class="row no-gutters3">
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                            <div class="rts-post1 rts-post-medium1">
                                <div class="post-picture">
                                    <div class="overlay"></div>

                                    <!-- Aqui: link da imagem com popup -->
                                    <a href="{{ url('assets/user/images/more/image1.png') }}"
                                        class="image-popup-vertical-fit"
                                        title="<h5>Post Title</h5><p>Descrição ou resumo do post.</p>">
                                        <img src="{{ url('assets/user/images/more/image1.png') }}" alt="main-post-image">
                                    </a>

                                    <div class="section-content">
                                        <a href="catagory-details.html" class="news-catagory-tag">FASHION</a>
                                        <div class="contents">
                                            <div class="post-title"><a
                                                    href="{{ url('assets/user/images/more/image1.png') }}"
                                                    class="image-popup-vertical-fit"
                                                    title="<h5>Post Title</h5><p>Descrição ou resumo do post.</p>">Postpones
                                                    tour after
                                                    syndrome leaves</a></div>
                                            <div class="post-bottom-info">
                                                <a href="author.html" class="post-author item1">Alan Fresco</a>
                                                <div class="post-bottom">
                                                    <span class="post-date item1">April 03, 2024</span>
                                                    <span class="post-time">1 day ago</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                            <div class="rts-post1 rts-post-medium1">
                                <div class="post-picture">
                                    <div class="overlay"></div>
                                    <a href="{{ url('assets/user/images/more/image2.png') }}"
                                        class="image-popup-vertical-fit"
                                        title="<h5>Post Title</h5><p>Descrição ou resumo do post.</p>"><img
                                            src="{{ url('assets/user/images/more/image2.png') }}" alt="main-post-image"></a>
                                    <div class="section-content">
                                        <a href="catagory-details.html" class="news-catagory-tag">MUSIC</a>
                                        <div class="contents">
                                            <div class="post-title"><a
                                                    href="{{ url('assets/user/images/more/image2.png') }}"
                                                    class="image-popup-vertical-fit"
                                                    title="<h5>Post Title</h5><p>Descrição ou resumo do post.</p>">With
                                                    ‘Jurassic World’
                                                    ending,
                                                    Bryce Dallas</a></div>
                                            <div class="post-bottom-info">
                                                <a href="author.html" class="post-author item1">Barry Tone</a>
                                                <div class="post-bottom">
                                                    <span class="post-date item1">April
                                                        03, 2024</span>
                                                    <span class="post-time">1 day ago</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                            <div class="rts-post1 rts-post-medium1">
                                <div class="post-picture">
                                    <div class="overlay"></div>
                                    <a href="{{ url('assets/user/images/more/image3.png') }}"
                                        class="image-popup-vertical-fit"
                                        title="<h5>Post Title</h5><p>Descrição ou resumo do post.</p>"><img
                                            src="{{ url('assets/user/images/more/image3.png') }}"
                                            alt="main-post-image"></a>
                                    <div class="section-content">
                                        <a href="catagory-details.html" class="news-catagory-tag">LIFESTYLE</a>
                                        <div class="contents">
                                            <div class="post-title"><a
                                                    href="{{ url('assets/user/images/more/image3.png') }}"
                                                    class="image-popup-vertical-fit"
                                                    title="<h5>Post Title</h5><p>Descrição ou resumo do post.</p>">‘The
                                                    Bachelor’ made a
                                                    ‘sideshow’</a></div>
                                            <div class="post-bottom-info">
                                                <a href="author.html" class="post-author item1">Hilari Ouse</a>
                                                <div class="post-bottom">
                                                    <span class="post-date item1">April
                                                        03, 2024</span>
                                                    <span class="post-time">1 day ago</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                            <div class="rts-post1 rts-post-medium1">
                                <div class="post-picture">
                                    <div class="overlay"></div>
                                    <a href="{{ url('assets/user/images/more/image4.png') }}"
                                        class="image-popup-vertical-fit"
                                        title="<h5>Post Title</h5><p>Descrição ou resumo do post.</p>"><img
                                            src="{{ url('assets/user/images/more/image4.png') }}"
                                            alt="main-post-image"></a>
                                    <div class="section-content">
                                        <a href="catagory-details.html" class="news-catagory-tag">SPORTS</a>
                                        <div class="contents">
                                            <div class="post-title"><a
                                                    href="{{ url('assets/user/images/more/image4.png') }}"
                                                    class="image-popup-vertical-fit"
                                                    title="<h5>Post Title</h5><p>Descrição ou resumo do post.</p>">Curry
                                                    exploits help
                                                    Warriors
                                                    level Finals</a></div>
                                            <div class="post-bottom-info">
                                                <a href="author.html" class="post-author item1">Norman Gordon</a>
                                                <div class="post-bottom">
                                                    <span class="post-date item1">April
                                                        03, 2024</span>
                                                    <span class="post-time">1 day ago</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </div>
    <!--================= Featured video Section End Here =================-->

    <!--================= Featured video Section Start Here =================-->
    <div class="rts-featured_video-section section-bg ptb--60 wow fadeIn"
        id="coluna-internacional" data-wow-duration="1.5s">
        <div class="container">
        <div class="news-topbar news-topbar-2">
                <h2 class="section-title">Coluna Internacional</h2>
                <div class="wide-border" style="background: #a09797 !important;"></div>
                <div class="slider-navigation">
                    <div class="swiper-button-prev navigation-btn"><i class="far fa-chevron-left"></i></div>
                    <div class="swiper-button-next navigation-btn"><i class="far fa-chevron-right"></i></div>
                </div>
        </div>
        </div>
        <div class="rts-read-section1 section-gap-2 wow fadeIn" data-wow-duration="1.5s">
                <div class="container">
                    <div class="row no-gutters3">
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                            <div class="rts-post1 rts-post-medium1">
                                <div class="post-picture">
                                    <div class="overlay"></div>

                                    <!-- Aqui: link da imagem com popup -->
                                    <a href="{{ url('assets/user/images/more/image1.png') }}"
                                        class="image-popup-vertical-fit"
                                        title="<h5>Post Title</h5><p>Descrição ou resumo do post.</p>">
                                        <img src="{{ url('assets/user/images/more/image1.png') }}" alt="main-post-image">
                                    </a>

                                    <div class="section-content">
                                        <a href="catagory-details.html" class="news-catagory-tag">FASHION</a>
                                        <div class="contents">
                                            <div class="post-title"><a
                                                    href="{{ url('assets/user/images/more/image1.png') }}"
                                                    class="image-popup-vertical-fit"
                                                    title="<h5>Post Title</h5><p>Descrição ou resumo do post.</p>">Postpones
                                                    tour after
                                                    syndrome leaves</a></div>
                                            <div class="post-bottom-info">
                                                <a href="author.html" class="post-author item1">Alan Fresco</a>
                                                <div class="post-bottom">
                                                    <span class="post-date item1">April 03, 2024</span>
                                                    <span class="post-time">1 day ago</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                            <div class="rts-post1 rts-post-medium1">
                                <div class="post-picture">
                                    <div class="overlay"></div>
                                    <a href="{{ url('assets/user/images/more/image2.png') }}"
                                        class="image-popup-vertical-fit"
                                        title="<h5>Post Title</h5><p>Descrição ou resumo do post.</p>"><img
                                            src="{{ url('assets/user/images/more/image2.png') }}" alt="main-post-image"></a>
                                    <div class="section-content">
                                        <a href="catagory-details.html" class="news-catagory-tag">MUSIC</a>
                                        <div class="contents">
                                            <div class="post-title"><a
                                                    href="{{ url('assets/user/images/more/image2.png') }}"
                                                    class="image-popup-vertical-fit"
                                                    title="<h5>Post Title</h5><p>Descrição ou resumo do post.</p>">With
                                                    ‘Jurassic World’
                                                    ending,
                                                    Bryce Dallas</a></div>
                                            <div class="post-bottom-info">
                                                <a href="author.html" class="post-author item1">Barry Tone</a>
                                                <div class="post-bottom">
                                                    <span class="post-date item1">April
                                                        03, 2024</span>
                                                    <span class="post-time">1 day ago</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                            <div class="rts-post1 rts-post-medium1">
                                <div class="post-picture">
                                    <div class="overlay"></div>
                                    <a href="{{ url('assets/user/images/more/image3.png') }}"
                                        class="image-popup-vertical-fit"
                                        title="<h5>Post Title</h5><p>Descrição ou resumo do post.</p>"><img
                                            src="{{ url('assets/user/images/more/image3.png') }}"
                                            alt="main-post-image"></a>
                                    <div class="section-content">
                                        <a href="catagory-details.html" class="news-catagory-tag">LIFESTYLE</a>
                                        <div class="contents">
                                            <div class="post-title"><a
                                                    href="{{ url('assets/user/images/more/image3.png') }}"
                                                    class="image-popup-vertical-fit"
                                                    title="<h5>Post Title</h5><p>Descrição ou resumo do post.</p>">‘The
                                                    Bachelor’ made a
                                                    ‘sideshow’</a></div>
                                            <div class="post-bottom-info">
                                                <a href="author.html" class="post-author item1">Hilari Ouse</a>
                                                <div class="post-bottom">
                                                    <span class="post-date item1">April
                                                        03, 2024</span>
                                                    <span class="post-time">1 day ago</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                            <div class="rts-post1 rts-post-medium1">
                                <div class="post-picture">
                                    <div class="overlay"></div>
                                    <a href="{{ url('assets/user/images/more/image4.png') }}"
                                        class="image-popup-vertical-fit"
                                        title="<h5>Post Title</h5><p>Descrição ou resumo do post.</p>"><img
                                            src="{{ url('assets/user/images/more/image4.png') }}"
                                            alt="main-post-image"></a>
                                    <div class="section-content">
                                        <a href="catagory-details.html" class="news-catagory-tag">SPORTS</a>
                                        <div class="contents">
                                            <div class="post-title"><a
                                                    href="{{ url('assets/user/images/more/image4.png') }}"
                                                    class="image-popup-vertical-fit"
                                                    title="<h5>Post Title</h5><p>Descrição ou resumo do post.</p>">Curry
                                                    exploits help
                                                    Warriors
                                                    level Finals</a></div>
                                            <div class="post-bottom-info">
                                                <a href="author.html" class="post-author item1">Norman Gordon</a>
                                                <div class="post-bottom">
                                                    <span class="post-date item1">April
                                                        03, 2024</span>
                                                    <span class="post-time">1 day ago</span>
                                                </div>
                                            </div>
                                        </div>
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
