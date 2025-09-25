@extends('site.layout.main')
@section('title', 'EcoFeminino - Perfil Inspirador')
@section('content')

    <!--================= News Details Section End Here =================-->
    <div class="rts-news-details-section section-gap-2" style="background-color: #e9ecef;">
        <div class="container">
            <div class="rts-post-heading mb--50">
                <div class="heading-content">
                    <div class="contents">
                        <a href="#0" class="news-catagory-tag-3">EcoFeminino</a>
                        <h2 class="content-title mb--10"><a href="news-details.html">Perfil Inspirador</a></h2>
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
            <!--================= Author Profile Section Start Here =================-->
            <div class="rts-author-profile-area section-gap-2">
                <div class="container">
                    {{-- <div class="news-topbar news-topbar-2">
                        <h2 class="section-title">Primeira Dama</h2>
                        <div class="wide-border" style="width: 55rem !important"></div>
                    </div> --}}

                    <div class="author-profile-box" style="background: #e9ecef; margin-top: -5rem !important">
                        <div class="author-profile-picture"><img
                                src="{{ asset('assets/user/images/PRIMEIRA-DAMA-DE-ANGOLA-8850-scaled.jpg') }}"
                                alt="author-profile-picture">
                        </div>

                        <div class="author-information" {{-- style="margin-top: -10rem !important" --}}>
                            {{-- <span class="author-level">Senior Author</span> --}}
                            <h2 class="author-name mb--20">Ana Dias Lourenço</h2>
                            <p class="mb--50">Ana Afonso Dias Lourenço (Luanda, 13 de abril de 1957) é uma economista e
                                política
                                angolana, primeira-dama de Angola desde 2017 como esposa do presidente João Lourenço e
                                deputada
                                desde 2008. Ela possui ampla experiência na administração pública, destacando-se em
                                planeamento
                                económico, investimento e análise de projetos. <br> <br>

                                Desde 2019, participa ativamente em iniciativas internacionais e nacionais, como o Grupo de
                                Mulheres
                                Líderes pela Igualdade de Género da ONU, a Fundação Ngana Zanza e o Fórum de Parceiros da
                                UNESCO
                                (Bienal de Luanda). Seu trabalho é voltado para o empoderamento feminino e o desenvolvimento
                                sustentável, em parceria com figuras como a ativista indiana Licypriya Kangujam.</p>
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
                                <div class="articles-published"><span class="article-value">44</span>Articles Published
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--================= Author Profile Section End Here =================-->

             <!--================= Featured video Section Start Here =================-->
    <div class="rts-featured_video-section section-bg ptb--60 wow fadeIn" id="debate-femenino" data-wow-duration="1.5s" style="background: #e9ecef !important;" >
        <div class="container">
            <div class="news-topbar news-topbar-2">
                <h2 class="section-title">Mais Perfis</h2>
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
                                            src="{{ url('assets/user/images/more/image2.png') }}"
                                            alt="main-post-image"></a>
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
