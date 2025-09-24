@extends('site.layout.main')
@section('content-home')
    <!--================= Banner Section Start Here =================-->
    <div class="banner-2">
        <div class="swiper bannerSlide">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="banner-single banner-single1">
                        <div class="container">
                            <div class="banner-content">
                                <a href="#" class="content-catagory-tag">Mundo
                                    Feminino</a>
                                <div class="contents">
                                    <div class="content-title"><a href="news-details.html">A ministra das Finanças,
                                            Vera Daves de Sousa fala sobre gestão da dívida pública.</a></div>
                                    <div class="post-bottom-info content-bottom-info mb--25">
                                        <a href="author.html" class="content-author item"><img
                                                src="assets/user/images/user.svg" alt="user-icon">Mauro
                                            Oliveira</a>
                                        <span class="content-date item"><img src="assets/user/images/date.svg"
                                                alt="date-icon">Januário
                                            16, 2024</span>
                                        <span
                                            class="content-comment
                                                    item"><img
                                                src="assets/user/images/comment.svg" alt="date-icon">7
                                            comentários</span>
                                    </div>
                                </div>
                                <a href="#0" class="border-btn">Ler
                                    Mais</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="swiper-slide">
                    <div class="banner-single banner-single2">
                        <div class="container">
                            <div class="banner-content">
                                <a href="#" class="content-catagory-tag">Esportes</a>
                                <div class="contents">
                                    <div class="content-title">
                                        <a href="news-details.html">Angola vence campeonato regional de basquete.</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="swiper-slide">
                    <div class="banner-single banner-single3">
                        <div class="container">
                            <div class="banner-content">
                                <a href="#" class="content-catagory-tag">Política</a>
                                <div class="contents">
                                    <div class="content-title">
                                        <a href="news-details.html">Primeira dama de angola,
                                            Ana Dias Lourenço visita Serra Leoa</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="banner-slider-navigation">
            <div class="swiper-button-prev nav-btn"><i class="fal
                            fa-angle-left"></i></div>
            <div class="swiper-button-next nav-btn"><i class="fal
                            fa-angle-right"></i></div>
        </div>
    </div>
    <!--================= Banner Section End Here =================-->

    <!--================= Topics Section Start Here =================-->
    <div class="topics">
        <div class="container">
            <div class="topics-inner">
                <div class="row justify-content-between align-items-center">
                    <div class="col-xl-3">
                        <div class="action">
                            <h2 class="topics-title">Melhores
                                Tópicos da Atualidade</h2>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                    <div class="col-xl-9">
                        <div class="slider-area">
                            <div class="swiper noGapSlide">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <a href="#" class="topic">
                                            <div class="topic-picture"><img src="assets/user/images/trending/fititel.webp"
                                                    alt="topic-picture"></div>
                                            <div class="content">
                                                <h3 class="item-title">TI
                                                    Notícias</h3>
                                                <p>7 postagens</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href="#" class="topic">
                                            <div class="topic-picture"><img src="assets/user/images/topics/afro-moda2.jpg"
                                                    alt="topic-picture"></div>
                                            <div class="content">
                                                <h3 class="item-title">Moda</h3>
                                                <p>6 postagens</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href="#" class="topic">
                                            <div class="topic-picture"><img src="assets/user/images/trending/tecno.jfif"
                                                    alt="topic-picture"></div>
                                            <div class="content">
                                                <h3 class="item-title">Tecnologia</h3>
                                                <p>3 postagens</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href="#" class="topic">
                                            <div class="topic-picture"><img src="assets/user/images/trending/magazine.jpg"
                                                    alt="topic-picture"></div>
                                            <div class="content">
                                                <h3 class="item-title">Magazine</h3>
                                                <p>5 postagens</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href="#" class="topic">
                                            <div class="topic-picture"><img src="assets/user/images/trending/sport.webp"
                                                    alt="topic-picture"></div>
                                            <div class="content">
                                                <h3 class="item-title">Sports</h3>
                                                <p>4 postagens</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <br>
    </div>
    <!--================= Topics Section End Here =================-->

    <!--================= Author Profile Section Start Here =================-->
    <div class="rts-author-profile-area section-gap-2">
        <div class="container">
            <div class="news-topbar news-topbar-2">
                <h2 class="section-title">Primeira Dama</h2>
                <div class="wide-border" style="width: 55rem !important"></div>
            </div>

            <div class="author-profile-box">
                <div class="author-profile-picture"><img
                        src="{{ asset('assets/user/images/PRIMEIRA-DAMA-DE-ANGOLA-8850-scaled.jpg') }}"
                        alt="author-profile-picture">
                </div>

                <div class="author-information" {{-- style="margin-top: -10rem !important" --}}>
                    {{-- <span class="author-level">Senior Author</span> --}}
                    <h2 class="author-name mb--20">Ana Dias Lourenço</h2>
                    <p class="mb--50">Ana Afonso Dias Lourenço (Luanda, 13 de abril de 1957) é uma economista e política
                        angolana, primeira-dama de Angola desde 2017 como esposa do presidente João Lourenço e deputada
                        desde 2008. Ela possui ampla experiência na administração pública, destacando-se em planeamento
                        económico, investimento e análise de projetos. <br> <br>

                        Desde 2019, participa ativamente em iniciativas internacionais e nacionais, como o Grupo de Mulheres
                        Líderes pela Igualdade de Género da ONU, a Fundação Ngana Zanza e o Fórum de Parceiros da UNESCO
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
                        <div class="articles-published"><span class="article-value">44</span>Articles Published</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--================= Author Profile Section End Here =================-->

    <!--================= Trending Section Start Here =================-->
    <div class="rts-trending-section section-gap-2 wow fadeIn" data-wow-duration="1.5s">
        <div class="container">
            <div class="news-topbar news-topbar-2">
                <h2 class="section-title">Notícias em alta</h2>
                <div class="wide-border"></div>
                <div class="filter-buttons">
                    <div class="filter-btn filter-navigation-btn active" data-show=".technology">Tecnologia</div>
                    <div class="filter-btn filter-navigation-btn" data-show=".technology">Atuação</div>
                    <div class="filter-btn filter-navigation-btn" data-show=".technology">Corrida</div>
                    <div class="filter-btn filter-navigation-btn" data-show=".technology">Música</div>
                    <div class="filter-btn filter-navigation-btn" data-show=".technology">TI</div>
                </div>
            </div>
            <div class="rts-post-area technology">
                <div class="row">
                    <div class="col-xl-8 col-lg-8">
                        <div class="rts-main-post rts-post-2 rts-post-2-large rts-post-2-inside">
                            <div class="post-picture"><a href="news-details.html"><img
                                        src="assets/user/images/oma-2.webp" alt="main-post-image"></a>
                            </div>
                            <div class="contents">
                                <a href="#0" class="news-catagory-tag-2">Política</a>
                                <div class="post-title"><a href="news-details.html">A Organização da Mulher Angolana (OMA)
                                        anunciou hoje, em Luanda, a convocação do seu 8.º Congresso Ordinário.</a></div>
                                <div class="post-bottom-info">
                                    <a href="author.html"
                                        class="post-author
                                            item"><img
                                            src="assets/user/images/user.svg" alt="user-icon">Ashley Graham</a>
                                    <span class="post-date item"><img src="assets/user/images/date.svg"
                                            alt="date-icon">16 Janeiro, 2025</span>
                                    <span class="post-date item"><img src="assets/user/images/share.svg"
                                            alt="date-icon">16
                                        Partilhas</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-sm-12">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-6 col-sm-12">
                                <div
                                    class="rts-post-2 rts-post-2-medium
                                    rts-post-2-inside mb--20">
                                    <div class="post-picture"><a href="news-details.html"><img
                                                src="assets/user/images/trending/fititel.webp" alt="main-post-image"></a>
                                    </div>
                                    <div class="contents">
                                        <a href="#0" class="news-catagory-tag-2">Tecnologia</a>
                                        <div class="post-title"><a href="news-details.html">Estudantes do ITEL expõe seu
                                                Projeto no Angotic</a></div>
                                        <div class="post-bottom-info">
                                            <a href="author.html"
                                                class="post-author
                                                item"><img
                                                    src="assets/user/images/user.svg" alt="user-icon">Penny Tool</a>
                                            <span class="post-date item"><img src="assets/user/images/date.svg"
                                                    alt="date-icon">16 Janeiro, 2025</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-6 col-sm-12">
                                <div
                                    class="rts-post-2 rts-post-2-medium
                                    rts-post-2-inside">
                                    <div class="post-picture"><a href="news-details.html"><img
                                                src="assets/user/images/trending/afro-moda.jpg" alt="main-post-image"></a>
                                    </div>
                                    <div class="contents">
                                        <a href="#0" class="news-catagory-tag-2">Moda</a>
                                        <div class="post-title"><a href="news-details.html">Georgina De Almeida realiza
                                                novo desfile de moda</a></div>
                                        <div class="post-bottom-info">
                                            <a href="author.html"
                                                class="post-author
                                                item"><img
                                                    src="assets/user/images/user.svg" alt="user-icon">Hans Down</a>
                                            <span class="post-date item"><img src="assets/user/images/date.svg"
                                                    alt="date-icon">16 Setembro, 2025</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="rts-post-area action hide">
                <div class="row">
                    <div class="col-xl-8 col-lg-8">
                        <div class="rts-main-post rts-post-2 rts-post-2-large rts-post-2-inside">
                            <div class="post-picture"><a href="news-details.html"><img
                                        src="assets/user/images/trending/1.jpg" alt="main-post-image"></a></div>
                            <div class="contents">
                                <a href="#0" class="news-catagory-tag-2">Jogos</a>
                                <div class="post-title"><a href="news-details.html">Kanye west
                                        on why he bought house
                                        across from kim kardashian</a></div>
                                <div class="post-bottom-info">
                                    <a href="author.html"
                                        class="post-author
                                            item"><img
                                            src="assets/user/images/user.svg" alt="user-icon">Ashley Graham</a>
                                    <span class="post-date item"><img src="assets/user/images/date.svg"
                                            alt="date-icon">16 Setembro, 2025</span>
                                    <span class="post-date item"><img src="assets/user/images/share.svg"
                                            alt="date-icon">16
                                        Partilhas</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-sm-12">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-6 col-sm-12">
                                <div
                                    class="rts-post-2 rts-post-2-medium
                                    rts-post-2-inside mb--20">
                                    <div class="post-picture"><a href="news-details.html"><img
                                                src="assets/user/images/trending/3.jpg" alt="main-post-image"></a></div>
                                    <div class="contents">
                                        <a href="#0" class="news-catagory-tag-2">Tecnologia</a>
                                        <div class="post-title"><a href="news-details.html">Zayn malik returns instagram
                                                new selfie afterlong hiatus</a></div>
                                        <div class="post-bottom-info">
                                            <a href="author.html"
                                                class="post-author
                                                item"><img
                                                    src="assets/user/images/user.svg" alt="user-icon">Penny Tool</a>
                                            <span class="post-date item"><img src="assets/user/images/date.svg"
                                                    alt="date-icon">January 16, 2024</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-6 col-sm-12">
                                <div
                                    class="rts-post-2 rts-post-2-medium
                                    rts-post-2-inside">
                                    <div class="post-picture"><a href="news-details.html"><img
                                                src="assets/user/images/trending/1.jpg" alt="main-post-image"></a></div>
                                    <div class="contents">
                                        <a href="#0" class="news-catagory-tag-2">IT
                                            News</a>
                                        <div class="post-title"><a href="news-details.html">The coach who gave Valieva a
                                                'chilling' reception</a></div>
                                        <div class="post-bottom-info">
                                            <a href="author.html"
                                                class="post-author
                                                item"><img
                                                    src="assets/user/images/user.svg" alt="user-icon">Hans Down</a>
                                            <span class="post-date item"><img src="assets/user/images/date.svg"
                                                    alt="date-icon">January 16, 2024</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="rts-post-area racing hide">
                <div class="row">
                    <div class="col-xl-8 col-lg-8">
                        <div class="rts-main-post rts-post-2 rts-post-2-large rts-post-2-inside">
                            <div class="post-picture"><a href="news-details.html"><img
                                        src="assets/user/images/trending/1.jpg" alt="main-post-image"></a></div>
                            <div class="contents">
                                <a href="#0" class="news-catagory-tag-2">Games</a>
                                <div class="post-title"><a href="news-details.html">Kanye west
                                        on why he bought house
                                        across from kim kardashian</a></div>
                                <div class="post-bottom-info">
                                    <a href="author.html"
                                        class="post-author
                                            item"><img
                                            src="assets/user/images/user.svg" alt="user-icon">Ashley Graham</a>
                                    <span class="post-date item"><img src="assets/user/images/date.svg"
                                            alt="date-icon">January 16, 2024</span>
                                    <span class="post-date item"><img src="assets/user/images/share.svg"
                                            alt="date-icon">16
                                        Shares</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-sm-12">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-6 col-sm-12">
                                <div
                                    class="rts-post-2 rts-post-2-medium
                                    rts-post-2-inside mb--20">
                                    <div class="post-picture"><a href="news-details.html"><img
                                                src="assets/user/images/trending/3.jpg" alt="main-post-image"></a></div>
                                    <div class="contents">
                                        <a href="#0" class="news-catagory-tag-2">Technology</a>
                                        <div class="post-title"><a href="news-details.html">Zayn malik returns instagram
                                                new selfie afterlong hiatus</a></div>
                                        <div class="post-bottom-info">
                                            <a href="author.html"
                                                class="post-author
                                                item"><img
                                                    src="assets/user/images/user.svg" alt="user-icon">Penny Tool</a>
                                            <span class="post-date item"><img src="assets/user/images/date.svg"
                                                    alt="date-icon">January 16, 2024</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-6 col-sm-12">
                                <div
                                    class="rts-post-2 rts-post-2-medium
                                    rts-post-2-inside">
                                    <div class="post-picture"><a href="news-details.html"><img
                                                src="assets/user/images/trending/1.jpg" alt="main-post-image"></a></div>
                                    <div class="contents">
                                        <a href="#0" class="news-catagory-tag-2">IT
                                            News</a>
                                        <div class="post-title"><a href="news-details.html">The coach who gave Valieva a
                                                'chilling' reception</a></div>
                                        <div class="post-bottom-info">
                                            <a href="author.html"
                                                class="post-author
                                                item"><img
                                                    src="assets/user/images/user.svg" alt="user-icon">Hans Down</a>
                                            <span class="post-date item"><img src="assets/user/images/date.svg"
                                                    alt="date-icon">January 16, 2024</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="rts-post-area music hide">
                <div class="row">
                    <div class="col-xl-8 col-lg-8">
                        <div class="rts-main-post rts-post-2 rts-post-2-large rts-post-2-inside">
                            <div class="post-picture"><a href="news-details.html"><img
                                        src="assets/user/images/trending/1.jpg" alt="main-post-image"></a></div>
                            <div class="contents">
                                <a href="#0" class="news-catagory-tag-2">Games</a>
                                <div class="post-title"><a href="news-details.html">Kanye west
                                        on why he bought house
                                        across from kim kardashian</a></div>
                                <div class="post-bottom-info">
                                    <a href="author.html"
                                        class="post-author
                                            item"><img
                                            src="assets/user/images/user.svg" alt="user-icon">Ashley Graham</a>
                                    <span class="post-date item"><img src="assets/user/images/date.svg"
                                            alt="date-icon">January 16, 2024</span>
                                    <span class="post-date item"><img src="assets/user/images/share.svg"
                                            alt="date-icon">16
                                        Shares</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-sm-12">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-6 col-sm-12">
                                <div
                                    class="rts-post-2 rts-post-2-medium
                                    rts-post-2-inside mb--20">
                                    <div class="post-picture"><a href="news-details.html"><img
                                                src="assets/user/images/trending/3.jpg" alt="main-post-image"></a></div>
                                    <div class="contents">
                                        <a href="#0" class="news-catagory-tag-2">Technology</a>
                                        <div class="post-title"><a href="news-details.html">Zayn malik returns instagram
                                                new selfie afterlong hiatus</a></div>
                                        <div class="post-bottom-info">
                                            <a href="author.html"
                                                class="post-author
                                                item"><img
                                                    src="assets/user/images/user.svg" alt="user-icon">Penny Tool</a>
                                            <span class="post-date item"><img src="assets/user/images/date.svg"
                                                    alt="date-icon">January 16, 2024</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-6 col-sm-12">
                                <div
                                    class="rts-post-2 rts-post-2-medium
                                    rts-post-2-inside">
                                    <div class="post-picture"><a href="news-details.html"><img
                                                src="assets/user/images/trending/1.jpg" alt="main-post-image"></a></div>
                                    <div class="contents">
                                        <a href="#0" class="news-catagory-tag-2">IT
                                            News</a>
                                        <div class="post-title"><a href="news-details.html">The coach who gave Valieva a
                                                'chilling' reception</a></div>
                                        <div class="post-bottom-info">
                                            <a href="author.html"
                                                class="post-author
                                                item"><img
                                                    src="assets/user/images/user.svg" alt="user-icon">Hans Down</a>
                                            <span class="post-date item"><img src="assets/user/images/date.svg"
                                                    alt="date-icon">January 16, 2024</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="rts-post-area itnews hide">
                <div class="row">
                    <div class="col-xl-8 col-lg-8">
                        <div class="rts-main-post rts-post-2 rts-post-2-large rts-post-2-inside">
                            <div class="post-picture"><a href="news-details.html"><img
                                        src="assets/user/images/trending/1.jpg" alt="main-post-image"></a></div>
                            <div class="contents">
                                <a href="#0" class="news-catagory-tag-2">Games</a>
                                <div class="post-title"><a href="news-details.html">Kanye west
                                        on why he bought house
                                        across from kim kardashian</a></div>
                                <div class="post-bottom-info">
                                    <a href="author.html"
                                        class="post-author
                                            item"><img
                                            src="assets/user/images/user.svg" alt="user-icon">Ashley Graham</a>
                                    <span class="post-date item"><img src="assets/user/images/date.svg"
                                            alt="date-icon">January 16, 2024</span>
                                    <span class="post-date item"><img src="assets/user/images/share.svg"
                                            alt="date-icon">16
                                        Shares</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-sm-12">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-6 col-sm-12">
                                <div
                                    class="rts-post-2 rts-post-2-medium
                                    rts-post-2-inside mb--20">
                                    <div class="post-picture"><a href="news-details.html"><img
                                                src="assets/user/images/trending/3.jpg" alt="main-post-image"></a></div>
                                    <div class="contents">
                                        <a href="#0" class="news-catagory-tag-2">Technology</a>
                                        <div class="post-title"><a href="news-details.html">Zayn malik returns instagram
                                                new selfie afterlong hiatus</a></div>
                                        <div class="post-bottom-info">
                                            <a href="author.html"
                                                class="post-author
                                                item"><img
                                                    src="assets/user/images/user.svg" alt="user-icon">Penny Tool</a>
                                            <span class="post-date item"><img src="assets/user/images/date.svg"
                                                    alt="date-icon">January 16, 2024</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-6 col-sm-12">
                                <div
                                    class="rts-post-2 rts-post-2-medium
                                    rts-post-2-inside">
                                    <div class="post-picture"><a href="news-details.html"><img
                                                src="assets/user/images/trending/1.jpg" alt="main-post-image"></a></div>
                                    <div class="contents">
                                        <a href="#0" class="news-catagory-tag-2">IT
                                            News</a>
                                        <div class="post-title"><a href="news-details.html">The coach who gave Valieva a
                                                'chilling' reception</a></div>
                                        <div class="post-bottom-info">
                                            <a href="author.html"
                                                class="post-author
                                                item"><img
                                                    src="assets/user/images/user.svg" alt="user-icon">Hans Down</a>
                                            <span class="post-date item"><img src="assets/user/images/date.svg"
                                                    alt="date-icon">January 16, 2024</span>
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
    <!--================= Trending Section End Here =================-->

    <!--================= Gallery Section Start Here =================-->
    <div class="rts-gallery-section gallary-page-section pt--40 mb--40">
        <div class="container">
            <div class="news-topbar news-topbar-2">
                <h2 class="section-title">Perfis Inspiradores</h2>
                <div class="wide-border" style="width: 55rem !important"></div>
            </div>

            <div class="row">
                <div class="col-xl-4 col-md-4 col-sm-6">
                    <div class="gallery-item">
                        <a class="image-popup-vertical-fit"
                            href="{{ url('assets/user/images/gallery/popup/Auria Machado, Rainha dos Porcos.jpg') }}"
                            style="height: 350px !important" title="1.jpg">
                            <img src="{{ url('assets/user/images/gallery/Auria Machado, Rainha dos Porcos.jpg') }}"
                                alt="9.jpg" />
                        </a>
                        <div class="contents">
                            <h5 class="member-role">Rainha dos Porcos</h5>
                            <a href="#" class="member-name">Auria Machados</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4 col-sm-6">
                    <div class="gallery-item">
                        <a class="image-popup-vertical-fit"
                            href="{{ url('assets/user/images/gallery/popup/Ana Lemos Apresentadora..jpg') }}"
                            style="height: 350px !important" title="2.jpg">
                            <img src="{{ url('assets/user/images/gallery/Ana Lemos Apresentadora..jpg') }}"
                                alt="9.jpg" />
                        </a>
                        <div class="contents">
                            <h5 class="member-role">Apresentadora</h5>
                            <a href="#" class="member-name">Ana Lemos</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4 col-sm-6">
                    <div class="gallery-item">
                        <a class="image-popup-vertical-fit"
                            href="{{ url('assets/user/images/gallery/popup/Yola Semedo Cantora.jpg') }}"
                            style="height: 350px !important" title="3.jpg">
                            <img src="{{ url('assets/user/images/gallery/Yola Semedo Cantora.jpg') }}" alt="9.jpg" />
                        </a>
                        <div class="contents">
                            <h5 class="member-role">Cantora</h5>
                            <a href="#" class="member-name">Yola Semedo</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4 col-sm-6">
                    <div class="gallery-item">
                        <a class="image-popup-vertical-fit"
                            href="{{ url('assets/user/images/gallery/popup/Silvia Lutucuta Ministra da Saude.jpg') }}"
                            style="height: 350px !important" title="4.jpg">
                            <img src="{{ url('assets/user/images/gallery/Silvia Lutucuta Ministra da Saude.jpg') }}"
                                alt="9.jpg" />
                        </a>
                        <div class="contents">
                            <h5 class="member-role">Ministra da Saúde</h5>
                            <a href="#" class="member-name">Silvia Lutucuta</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4 col-sm-6">
                    <div class="gallery-item">
                        <a class="image-popup-vertical-fit"
                            href="{{ url('assets/user/images/gallery/popup/Leila Lopes Miss.jpg') }}" title="5.jpg">
                            <img src="{{ url('assets/user/images/gallery/Leila Lopes Miss.jpg') }}"
                                style="height: 350px !important" alt="9.jpg" />
                        </a>
                        <div class="contents">
                            <h5 class="member-role">Miss</h5>
                            <a href="#" class="member-name">Leila Lopes</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4 col-sm-6">
                    <div class="gallery-item">
                        <a class="image-popup-vertical-fit"
                            href="{{ url('assets/user/images/gallery/popup/Vera Daves Ministra das Financas.jpeg') }}"
                            title="6.jpg">
                            <img src="{{ url('assets/user/images/gallery/Vera Daves Ministra das Financas.jpeg') }}"
                                alt="9.jpg" />
                        </a>
                        <div class="contents">
                            <h5 class="member-role">Ministra das Finanças</h5>
                            <a href="#" class="member-name">Vera Daves</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 mx-auto">
                    <a class="view-more-news" href="#0">Ver Mais<i class="far fa-long-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!--================= Gallery Section End Here =================-->

    <!--================= Updates Section Start Here =================-->
    <div class="rts-updates-section section-gap-2 wow fadeIn" data-wow-duration="1.5s">
        <div class="container">
            <div class="col-xl-">
                <div class="news-topbar news-topbar-2">
                    <h2 class="section-title">Novidades</h2>
                    <div class="wide-border"></div>
                    <a href="#0" class="border-btn">View Archive <i class="far fa-long-arrow-right"></i></a>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-5 col-md-7">
                    <div class="rts-post-2 mb--30">
                        <div class="post-picture"><a href="news-details.html"><img
                                    src="assets/user/images/trending/afro-moda2.jpg" alt="main-post-image"></a></div>
                        <div class="contents">
                            <a href="#0" class="news-catagory-tag-2">Photography</a>
                            <div class="post-title"><a href="news-details.html">Kanye west on
                                    why he bought house
                                    across from kim kardashian</a></div>
                            <div class="post-bottom-info">
                                <a href="author.html"
                                    class="post-author
                                        item"><img
                                        src="assets/user/images/user.svg" alt="user-icon">Ashley Graham</a>
                                <span class="post-date item"><img src="assets/user/images/date.svg"
                                        alt="date-icon">January
                                    16, 2024</span>
                                <span class="post-date item"><img src="assets/user/images/share.svg" alt="date-icon">16
                                    Shares</span>
                            </div>
                            <p>Ipsam justo impedit! Sagittis quos culpa.
                                Dictum esse eligendi ultrices, incididunt
                                mollit sociosqu, dapibus quisque. asperiores
                                metus autem quos sodales sagittis.</p>
                            <a href="#0" class="read-more-btn">Read more</a>
                        </div>
                    </div>
                    <div class="rts-post-2 mb--30">
                        <div class="contents">
                            <a href="#0" class="news-catagory-tag-2">Photography</a>
                            <div class="post-title"><a href="news-details.html">City barbecue joint tells customers:
                                    Don’t buy the brisket.</a></div>
                            <div class="post-bottom-info">
                                <a href="author.html"
                                    class="post-author
                                        item"><img
                                        src="assets/user/images/user.svg" alt="user-icon">Ashley Graham</a>
                                <span class="post-date item"><img src="assets/user/images/date.svg"
                                        alt="date-icon">January
                                    16, 2024</span>
                                <span class="post-date item"><img src="assets/user/images/share.svg" alt="date-icon">16
                                    Shares</span>
                            </div>
                            <p>Ipsam justo impedit! Sagittis quos culpa.
                                Dictum esse eligendi ultrices, incididunt
                                mollit sociosqu, dapibus quisque. asperiores
                                metus autem quos sodales sagittis.</p>
                            <a href="#0" class="read-more-btn">Read more</a>
                        </div>
                    </div>
                    <div class="rts-post-2 mb--30">
                        <div class="contents">
                            <a href="#0" class="news-catagory-tag-2">Photography</a>
                            <div class="post-title"><a href="news-details.html">Kanye west on
                                    why he bought house
                                    across from kim kardashian</a></div>
                            <div class="post-bottom-info">
                                <a href="author.html"
                                    class="post-author
                                        item"><img
                                        src="assets/user/images/user.svg" alt="user-icon">Ashley Graham</a>
                                <span class="post-date item"><img src="assets/user/images/date.svg"
                                        alt="date-icon">January
                                    16, 2024</span>
                                <span class="post-date item"><img src="assets/user/images/share.svg" alt="date-icon">16
                                    Shares</span>
                            </div>
                            <p>Ipsam justo impedit! Sagittis quos culpa.
                                Dictum esse eligendi ultrices, incididunt
                                mollit sociosqu, dapibus quisque. asperiores
                                metus autem quos sodales sagittis.</p>
                            <a href="#0" class="read-more-btn">Read more</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-5 col-sm-12">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-6">
                            <div class="rts-post-2 rts-post-medium rts-post-2-medium mb--30">
                                <div class="post-picture"><a href="news-details.html"><img
                                            src="assets/user/images/trending/evaDiva.jfif" alt="main-post-image"></a>
                                </div>
                                <div class="contents">
                                    <a href="#0" class="news-catagory-tag-2">Photography</a>
                                    <div class="post-title"><a href="news-details.html">The New York Times faces 'cancel
                                            culture' for 'telling the truth'</a></div>
                                    <div class="post-bottom-info">
                                        <a href="author.html"
                                            class="post-author
                                                item"><img
                                                src="assets/user/images/user.svg" alt="user-icon">Ashley
                                            Graham</a>
                                        <span class="post-date item"><img src="assets/user/images/date.svg"
                                                alt="date-icon">January
                                            16, 2024</span>
                                        <span class="post-date item"><img src="assets/user/images/share.svg"
                                                alt="date-icon">16
                                            Shares</span>
                                    </div>
                                    <p>Ipsam justo impedit! Sagittis quos culpa.
                                        Dictum esse eligendi ultrices, incididunt
                                        mollit sociosqu, dapibus quisque. asperiores
                                        metus autem quos sodales sagittis.</p>
                                    <a href="#0" class="read-more-btn">Read more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-6">
                            <div class="rts-post-2 rts-post-medium rts-post-2-medium">
                                <div class="post-picture"><a href="news-details.html"><img
                                            src="assets/user/images/trending/orange_girl.jfif" alt="main-post-image"></a>
                                </div>
                                <div class="contents">
                                    <a href="#0" class="news-catagory-tag-2">Photography</a>
                                    <div class="post-title"><a href="news-details.html">We know Van Gogh’s face from his
                                            self-portraits.</a></div>
                                    <div class="post-bottom-info">
                                        <a href="author.html"
                                            class="post-author
                                                item"><img
                                                src="assets/user/images/user.svg" alt="user-icon">Ashley
                                            Graham</a>
                                        <span class="post-date item"><img src="assets/user/images/date.svg"
                                                alt="date-icon">January
                                            16, 2024</span>
                                        <span class="post-date item"><img src="assets/user/images/share.svg"
                                                alt="date-icon">16
                                            Shares</span>
                                    </div>
                                    <p>Ipsam justo impedit! Sagittis quos culpa.
                                        Dictum esse eligendi ultrices, incididunt
                                        mollit sociosqu, dapibus quisque. asperiores
                                        metus autem quos sodales sagittis.</p>
                                    <a href="#0" class="read-more-btn">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3">
                    <div class="side-content sticky-content">
                        <div class="row">

                            <div class="col-xl-12 col-md-6">
                                <div class="popular-stories mb--50">
                                    <h3 class="side-content-title">Histórias Populares</h3>
                                    <div class="rts-post rts-post-small">
                                        <div class="post-picture"><a href="news-details.html"><img
                                                    src="assets/user/images/trending/evaDiva.jfif"
                                                    alt="main-post-image"></a></div>
                                        <div class="contents">
                                            <div class="news-catagory-tag">Moda</div>
                                            <div class="post-title"><a href="news-details.html">Eva Rap Diva
                                                    exibindo um visual mais formal</a></div>
                                            <div class="post-bottom-info">
                                                <span class="post-date item"><img class="span-icon"
                                                        src="assets/user/images/date.svg" alt="date-icon">
                                                    October 16, 2024</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="rts-post rts-post-small">
                                        <div class="post-picture"><a href="news-details.html"><img
                                                    src="assets/user/images/trending/tecno.jfif"
                                                    alt="main-post-image"></a></div>
                                        <div class="contents">
                                            <div class="news-catagory-tag">Tecnologia</div>
                                            <div class="post-title"><a href="news-details.html">Explore
                                                    novos dispositivos eletrônicos</a></div>
                                            <div class="post-bottom-info">
                                                <span class="post-date item"><img class="span-icon"
                                                        src="assets/user/images/date.svg" alt="date-icon">
                                                    November 16, 2024</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="rts-post rts-post-small">
                                        <div class="post-picture"><a href="news-details.html"><img
                                                    src="assets/user/images/trending/images.jfif"
                                                    alt="main-post-image"></a></div>
                                        <div class="contents">
                                            <div class="news-catagory-tag">TI</div>
                                            <div class="post-title"><a href="news-details.html">Exposição
                                                    de projetos na FITITEL</a></div>
                                            <div class="post-bottom-info">
                                                <span class="post-date item"><img class="span-icon"
                                                        src="assets/user/images/date.svg" alt="date-icon">
                                                    January 16, 2024</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="rts-post rts-post-small">
                                        <div class="post-picture"><a href="news-details.html"><img
                                                    src="assets/user/images/trending/transferir (2).jfif"
                                                    alt="main-post-image"></a></div>
                                        <div class="contents">
                                            <div class="news-catagory-tag">Cultura</div>
                                            <div class="post-title"><a href="news-details.html">Celebração
                                                    do povo no Moxico</a></div>
                                            <div class="post-bottom-info">
                                                <span class="post-date item"><img class="span-icon"
                                                        src="assets/user/images/date.svg" alt="date-icon">
                                                    January 16, 2024</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-md-6">
                                <ul class="social-popularity mb--50">
                                    <li><a href="#" class="platform">
                                            <i class="fab fa-facebook-f facebook"></i>
                                            <span>347 Fans</span>
                                        </a></li>
                                    <li><a href="#" class="platform">
                                            <i class="fab fa-pinterest-p"></i>
                                            <span>174 Followers</span>
                                        </a></li>
                                    <li><a href="#" class="platform">
                                            <i class="fab fa-linkedin-in linkedin"></i>
                                            <span>126 Linkedin</span>
                                        </a></li>
                                    <li><a href="#" class="platform">
                                            <i class="fab fa-dribbble dribbble"></i>
                                            <span>403 Followers</span>
                                        </a></li>
                                    <li><a href="#" class="platform">
                                            <i class="fab fa-youtube youtube"></i>
                                            <span>214 Subscribers</span>
                                        </a></li>
                                </ul>
                            </div>
                            <div class="col-xl-12 col-md-6">
                                <div class="rts-tags">
                                    <h3 class="side-content-title">Tags</h3>
                                    <ul>
                                        <li><a class="tag-item" href="#0">Techology</a></li>
                                        <li><a class="tag-item" href="#0">Travel</a></li>
                                        <li><a class="tag-item" href="#0">Community</a></li>
                                        <li><a class="tag-item" href="#0">Canada</a></li>
                                        <li><a class="tag-item" href="#0">Accessories</a></li>
                                        <li><a class="tag-item" href="#0">Beauty</a></li>
                                        <li><a class="tag-item" href="#0">Chemical</a></li>
                                        <li><a class="tag-item" href="#0">Business</a></li>
                                        <li><a class="tag-item" href="#0">IT Solution</a></li>
                                        <li><a class="tag-item" href="#0">Food</a></li>
                                        <li><a class="tag-item" href="#0">Painting</a></li>
                                        <li><a class="tag-item" href="#0">Personality</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9">
                    <a class="view-more-news" href="#0">Ver Mais<i class="far fa-long-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!--================= Updates Section End Here =================-->


    <!--================= Ad Section Start Here =================-->
    <div class="rts-ad-section wow fadeIn" data-wow-duration="1.5s">
        <div class="container">
            <div class="ad"><img src="assets/user/images/items/ad-banner1.png" alt="ad-banner"></div>
        </div>
    </div>
    <!--================= Ad Section End Here =================-->


    <!--================= Featured video Section Start Here =================-->
    <div class="rts-featured_video-section section-bg ptb--60 wow fadeIn" data-wow-duration="1.5s">
        <div class="container">
            <div class="news-topbar news-topbar-2">
                <h2 class="section-title">Vídeos em Destaque</h2>
                <div class="wide-border"></div>
                <div class="slider-navigation">
                    <div class="swiper-button-prev navigation-btn"><i class="far fa-chevron-left"></i></div>
                    <div class="swiper-button-next navigation-btn"><i class="far fa-chevron-right"></i></div>
                </div>
            </div>
            <div class="swiper rts-cmmnSlider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="featured-video-card">
                            <div class="video-thumbnail"><img src="assets/user/images/trending/fititel.webp"
                                    alt="video-thumbnail">
                                <div class="video-tags-area">
                                    <a href="#0" class="video-tag red-tag">Fashion</a>
                                    <a href="#0" class="video-tag red-tag">Fashion</a>
                                </div>
                            </div>
                            <div class="play-btn play-video"><a class="popup-video"
                                    href="https://www.youtube.com/watch?v=hQ41QrQE_iE"
                                    data-effect="mfp-move-horizontal"><img src="assets/user/images/play-btn-2.svg"
                                        alt="play-btn"></a></div>

                            <div class="contents">
                                <div class="post-info">
                                    <div class="item"><span><img class="span-icon" src="assets/user/images/date.svg"
                                                alt="date-icon">June
                                            16,
                                            2024</span></div>
                                </div>
                                <a href="#0" class="card-title">The 3
                                    Beauty Trends That Are Taking Over
                                    London Right
                                    Now.</a>
                            </div>
                            <div class="card-action-bar action-bar">
                                <span class="post-comment item"><img src="assets/user/images/comment.svg"
                                        alt="date-icon">12</span>
                                <span class="post-heart item"><img src="assets/user/images/heart.svg"
                                        alt="date-icon">12</span>
                                <span class="post-share item"><img src="assets/user/images/share.svg" alt="date-icon">16
                                    Shares</span>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="featured-video-card">
                            <div class="video-thumbnail"><img src="assets/user/images/topics/transferir (2).jfif"
                                    alt="video-thumbnail">
                                <div class="video-tags-area">
                                    <a href="#0" class="video-tag red-tag">Fashion</a>
                                    <a href="#0" class="video-tag red-tag">Life Style</a>
                                </div>
                            </div>
                            <div class="play-btn play-video"><a class="popup-video"
                                    href="https://www.youtube.com/watch?v=hQ41QrQE_iE"
                                    data-effect="mfp-move-horizontal"><img src="assets/user/images/play-btn-2.svg"
                                        alt="play-btn"></a></div>

                            <div class="contents">
                                <div class="post-info">
                                    <div class="item"><span><img class="span-icon" src="assets/user/images/date.svg"
                                                alt="date-icon">June
                                            16,
                                            2024</span></div>
                                </div>
                                <a href="#0" class="card-title">The body organism sustain growth and vital processes
                                    and
                                    to furnish energy.</a>
                            </div>
                            <div class="card-action-bar action-bar">
                                <span class="post-comment item"><img src="assets/user/images/comment.svg"
                                        alt="heart-icon">10</span>
                                <span class="post-heart item"><img src="assets/user/images/heart.svg"
                                        alt="share-icon">6</span>
                                <span class="post-share item"><img src="assets/user/images/share.svg" alt="date-icon">10
                                    Shares</span>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="featured-video-card">
                            <div class="video-thumbnail"><img src="assets/user/images/topics/transferir.jfif"
                                    alt="video-thumbnail">
                                <div class="video-tags-area">
                                    <a href="#0" class="video-tag red-tag">Travel</a>
                                    <a href="#0" class="video-tag red-tag">Fashion</a>
                                </div>
                            </div>
                            <div class="play-btn play-video"><a class="popup-video"
                                    href="https://www.youtube.com/watch?v=hQ41QrQE_iE"
                                    data-effect="mfp-move-horizontal"><img src="assets/user/images/play-btn-2.svg"
                                        alt="play-btn"></a></div>

                            <div class="contents">
                                <div class="post-info">
                                    <div class="item"><span><img class="span-icon" src="assets/user/images/date.svg"
                                                alt="date-icon">June
                                            16,
                                            2024</span></div>
                                </div>
                                <a href="#0" class="card-title">Travel agencies are a need of every country and a
                                    medium
                                    of traveling.</a>
                            </div>
                            <div class="card-action-bar action-bar">
                                <span class="post-comment item"><img src="assets/user/images/comment.svg"
                                        alt="date-icon">12</span>
                                <span class="post-heart item"><img src="assets/user/images/heart.svg"
                                        alt="date-icon">12</span>
                                <span class="post-share item"><img src="assets/user/images/share.svg" alt="date-icon">16
                                    Shares</span>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="featured-video-card">
                            <div class="video-thumbnail"><img src="assets/user/images/topics/transferir (1).jfif"
                                    alt="video-thumbnail">
                                <div class="video-tags-area">
                                    <a href="#0" class="video-tag red-tag">Animal</a>
                                    <a href="#0" class="video-tag red-tag">Life History</a>
                                </div>
                            </div>
                            <div class="play-btn play-video"><a class="popup-video"
                                    href="https://www.youtube.com/watch?v=hQ41QrQE_iE"
                                    data-effect="mfp-move-horizontal"><img src="assets/user/images/play-btn-2.svg"
                                        alt="play-btn"></a></div>

                            <div class="contents">
                                <div class="post-info">
                                    <div class="item"><span><img class="span-icon" src="assets/user/images/date.svg"
                                                alt="date-icon">June
                                            16,
                                            2024</span></div>
                                </div>
                                <a href="#0" class="card-title">According to eyewitness elephants ran for higher
                                    ground
                                    ahead.</a>
                            </div>
                            <div class="card-action-bar action-bar">
                                <span class="post-comment item"><img src="assets/user/images/comment.svg"
                                        alt="date-icon">12</span>
                                <span class="post-heart item"><img src="assets/user/images/heart.svg"
                                        alt="date-icon">12</span>
                                <span class="post-share item"><img src="assets/user/images/share.svg" alt="date-icon">16
                                    Shares</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--================= Featured video Section End Here =================-->


    <!--================= News Section Start Here =================-->
    <div class="rts-news-two-section section-gap-2 wow fadeIn" data-wow-duration="1.5s">
        <div class="container">
            <div class="news-topbar news-topbar-2">
                <h2 class="section-title">Últimas Notícias</h2>
                <div class="wide-border"></div>
                <div class="filter-buttons">
                    <div class="filter-btn filter-navigation-btn active" data-show=".trendingnews">Notícias em destaque
                    </div>
                    <div class="filter-btn filter-navigation-btn" data-show=".recentsnews">Notícias Recentes</div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-9 col-md-12 col-sm-12">
                    <div class="rts-post-area trendingnews">
                        <div class="row">
                            <div class="col-xl-12 col-md-12">
                                <div class="rts-post-2 rts-post-2-wide mb--20">
                                    <div class="post-picture"><a href="news-details.html"><img
                                                src="assets/user/images/trending/finance.jfif" alt="main-post-image"></a>
                                    </div>
                                    <div class="contents">
                                        <div class="post-title"><a href="news-details.html">5 Personal Finance Tips
                                                Every
                                                Freelancer Should Know</a></div>
                                        <p>Tenetur culpa, senectus inceptos porttitor dictumst animi at? Laoreet
                                            sagittis
                                            bibendum quisque turpis placerat.</p>
                                        <div class="post-bottom-info">
                                            <a href="author.html"
                                                class="post-author
                                                            item"><img
                                                    src="assets/user/images/user.svg" alt="user-icon">By
                                                Jenny
                                                Wilson</a>
                                            <span class="post-date item"><img src="assets/user/images/date.svg"
                                                    alt="date-icon">January
                                                16, 2024</span>
                                        </div>
                                        <a href="#0" class="read-more-btn">Read more</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-md-12">
                                <div class="rts-post-2 rts-post-2-wide mb--20">
                                    <div class="post-picture"><a href="news-details.html"><img
                                                src="assets/user/images/trending/afro-moda.jpg" alt="main-post-image"></a>
                                    </div>
                                    <div class="contents">
                                        <div class="post-title"><a href="news-details.html">5 Personal Finance Tips
                                                Every
                                                Freelancer Should Know</a></div>
                                        <p>Tenetur culpa, senectus inceptos porttitor dictumst animi at? Laoreet
                                            sagittis
                                            bibendum quisque turpis placerat.</p>
                                        <div class="post-bottom-info">
                                            <a href="author.html"
                                                class="post-author
                                                            item"><img
                                                    src="assets/user/images/user.svg" alt="user-icon">By
                                                Jenny
                                                Wilson</a>
                                            <span class="post-date item"><img src="assets/user/images/date.svg"
                                                    alt="date-icon">January
                                                16, 2024</span>
                                        </div>
                                        <a href="#0" class="read-more-btn">Read more</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-md-12">
                                <div class="rts-post-2 rts-post-2-wide mb--20">
                                    <div class="post-picture"><a href="news-details.html"><img
                                                src="assets/user/images/trending/primeiraDama.jfif"
                                                alt="main-post-image"></a></div>
                                    <div class="contents">
                                        <div class="post-title"><a href="news-details.html">5 Personal Finance Tips
                                                Every
                                                Freelancer Should Know</a></div>
                                        <p>Tenetur culpa, senectus inceptos porttitor dictumst animi at? Laoreet
                                            sagittis
                                            bibendum quisque turpis placerat.</p>
                                        <div class="post-bottom-info">
                                            <a href="author.html"
                                                class="post-author
                                                            item"><img
                                                    src="assets/user/images/user.svg" alt="user-icon">By
                                                Jenny
                                                Wilson</a>
                                            <span class="post-date item"><img src="assets/user/images/date.svg"
                                                    alt="date-icon">January
                                                16, 2024</span>
                                        </div>
                                        <a href="#0" class="read-more-btn">Read more</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-md-12">
                                <div class="rts-post-2 rts-post-2-wide">
                                    <div class="post-picture"><a href="news-details.html"><img
                                                src="assets/user/images/trending/bodiva.jfif" alt="main-post-image"></a>
                                    </div>
                                    <div class="contents">
                                        <div class="post-title"><a href="news-details.html">5 Personal Finance Tips
                                                Every
                                                Freelancer Should Know</a></div>
                                        <p>Tenetur culpa, senectus inceptos porttitor dictumst animi at? Laoreet
                                            sagittis
                                            bibendum quisque turpis placerat.</p>
                                        <div class="post-bottom-info">
                                            <a href="author.html"
                                                class="post-author
                                                            item"><img
                                                    src="assets/user/images/user.svg" alt="user-icon">By
                                                Jenny
                                                Wilson</a>
                                            <span class="post-date item"><img src="assets/user/images/date.svg"
                                                    alt="date-icon">January
                                                16, 2024</span>
                                        </div>
                                        <a href="#0" class="read-more-btn">Read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="rts-post-area recentsnews hide">
                        <div class="rts-post-2 rts-post-2-wide mb--20">
                            <div class="post-picture"><a href="news-details.html"><img
                                        src="assets/user/images/trending/7.jpg" alt="main-post-image"></a></div>
                            <div class="contents">
                                <div class="post-title"><a href="news-details.html">5 Personal Finance Tips Every
                                        Freelancer Should Know</a></div>
                                <p>Tenetur culpa, senectus inceptos porttitor dictumst animi at? Laoreet sagittis
                                    bibendum quisque turpis placerat.</p>
                                <div class="post-bottom-info">
                                    <a href="author.html"
                                        class="post-author
                                                    item"><img
                                            src="assets/user/images/user.svg" alt="user-icon">By Jenny
                                        Wilson</a>
                                    <span class="post-date item"><img src="assets/user/images/date.svg"
                                            alt="date-icon">January
                                        16, 2024</span>
                                </div>
                                <a href="#0" class="read-more-btn">Read more</a>
                            </div>
                        </div>
                        <div class="rts-post-2 rts-post-2-wide mb--20">
                            <div class="post-picture"><a href="news-details.html"><img
                                        src="assets/user/images/trending/8.jpg" alt="main-post-image"></a></div>
                            <div class="contents">
                                <div class="post-title"><a href="news-details.html">5 Personal Finance Tips Every
                                        Freelancer Should Know</a></div>
                                <p>Tenetur culpa, senectus inceptos porttitor dictumst animi at? Laoreet sagittis
                                    bibendum quisque turpis placerat.</p>
                                <div class="post-bottom-info">
                                    <a href="author.html"
                                        class="post-author
                                                    item"><img
                                            src="assets/user/images/user.svg" alt="user-icon">By Jenny
                                        Wilson</a>
                                    <span class="post-date item"><img src="assets/user/images/date.svg"
                                            alt="date-icon">January
                                        16, 2024</span>
                                </div>
                                <a href="#0" class="read-more-btn">Read more</a>
                            </div>
                        </div>
                        <div class="rts-post-2 rts-post-2-wide mb--20">
                            <div class="post-picture"><a href="news-details.html"><img
                                        src="assets/user/images/trending/9.png" alt="main-post-image"></a></div>
                            <div class="contents">
                                <div class="post-title"><a href="news-details.html">5 Personal Finance Tips Every
                                        Freelancer Should Know</a></div>
                                <p>Tenetur culpa, senectus inceptos porttitor dictumst animi at? Laoreet sagittis
                                    bibendum quisque turpis placerat.</p>
                                <div class="post-bottom-info">
                                    <a href="author.html"
                                        class="post-author
                                                    item"><img
                                            src="assets/user/images/user.svg" alt="user-icon">By Jenny
                                        Wilson</a>
                                    <span class="post-date item"><img src="assets/user/images/date.svg"
                                            alt="date-icon">January
                                        16, 2024</span>
                                </div>
                                <a href="#0" class="read-more-btn">Read more</a>
                            </div>
                        </div>
                        <div class="rts-post-2 rts-post-2-wide">
                            <div class="post-picture"><a href="news-details.html"><img
                                        src="assets/user/images/trending/10.jpg" alt="main-post-image"></a></div>
                            <div class="contents">
                                <div class="post-title"><a href="news-details.html">5 Personal Finance Tips Every
                                        Freelancer Should Know</a></div>
                                <p>Tenetur culpa, senectus inceptos porttitor dictumst animi at? Laoreet sagittis
                                    bibendum quisque turpis placerat.</p>
                                <div class="post-bottom-info">
                                    <a href="author.html"
                                        class="post-author
                                                    item"><img
                                            src="assets/user/images/user.svg" alt="user-icon">By Jenny
                                        Wilson</a>
                                    <span class="post-date item"><img src="assets/user/images/date.svg"
                                            alt="date-icon">January
                                        16, 2024</span>
                                </div>
                                <a href="#0" class="read-more-btn">Ler mais</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3">
                    <div class="row">
                        <div class="col-xl-12 col-md-6">
                            <div class="rts-post-2 rts-post-2-small rts-post-2-inside">
                                <div class="post-picture"><img src="assets/user/images/trending/tecno.jfif"
                                        alt="post-picture">
                                </div>
                                <div class="contents">
                                    <div class="news-catagory-tag-2">Fashion</div>
                                    <div class="post-title"><a href="news-details.html">Marta ceo after stepping in
                                            Suicide
                                            front of train</a>
                                    </div>
                                    <div class="post-bottom-info">
                                        <span class="post-date item"><img class="span-icon"
                                                src="assets/user/images/date.svg" alt="date-icon">
                                            October 16, 2024</span>
                                    </div>
                                </div>
                            </div>
                            <div class="rts-post-2 rts-post-2-small">
                                <div class="contents">
                                    <div class="news-catagory-tag-2-2">Travel</div>
                                    <div class="post-title"><a href="news-details.html">Marta ceo after stepping in
                                            Suicide
                                            front of train</a><a href="#" class="go-icon"><i
                                                class="far fa-arrow-right"></i></a>
                                    </div>
                                    <div class="post-bottom-info">
                                        <span class="post-date item"><img class="span-icon"
                                                src="assets/user/images/date.svg" alt="date-icon">
                                            October 16, 2024</span>
                                    </div>
                                </div>
                            </div>
                            <div class="rts-post-2 rts-post-2-small">
                                <div class="contents">
                                    <div class="news-catagory-tag-2-2">Technology</div>
                                    <div class="post-title"><a href="news-details.html">Marta ceo after stepping in
                                            Suicide
                                            front of train</a><a href="#" class="go-icon"><i
                                                class="far fa-arrow-right"></i></a>
                                    </div>
                                    <div class="post-bottom-info">
                                        <span class="post-date item"><img class="span-icon"
                                                src="assets/user/images/date.svg" alt="date-icon">
                                            October 16, 2024</span>
                                    </div>
                                </div>
                            </div>
                            <div class="rts-post-2 rts-post-2-small mb--20">
                                <div class="contents">
                                    <div class="news-catagory-tag-2-2">Robot</div>
                                    <div class="post-title"><a href="news-details.html">Marta ceo after stepping in
                                            Suicide
                                            front of train</a><a href="#" class="go-icon"><i
                                                class="far fa-arrow-right"></i></a>
                                    </div>
                                    <div class="post-bottom-info">
                                        <span class="post-date item"><img class="span-icon"
                                                src="assets/user/images/date.svg" alt="date-icon">
                                            October 16, 2024</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-md-6">
                            <div class="newsletter">
                                <h2 class="newsletter-title">Get Newsletter</h2>
                                <p>Notification products, updates.</p>
                                <form class="form">
                                    <div class="input-div">
                                        <input type="email" placeholder="Enter email...">
                                    </div>
                                    <button class="subscribe-btn">Subscribe</button>
                                </form>
                                <div class="foating-elements">
                                    <div class="item1"><img src="assets/user/images/icons/floating-dots.svg"
                                            alt="floating-element">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9">
                    <a class="view-more-news" href="#0">Read More Stories<i
                            class="far fa-long-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!--================= News Section End Here =================-->


    <!--================= Gallery Section Start Here =================-->
    <div class="rts-gallery-section wow fadeIn" data-wow-duration="1.5s">
        <div class="container">
            <div class="row">
                <div class="col-xl-2 col-md-4 col-sm-4 col-6">
                    <div class="gallery-item">
                        <a class="image-popup-vertical-fit" href="assets/user/images/gallery/popup/1.jpg"
                            title="1.jpg">
                            <img src="assets/user/images/gallery/1.jpg" alt="9.jpg" />
                        </a>
                    </div>
                </div>
                <div class="col-xl-2 col-md-4 col-sm-4 col-6">
                    <div class="gallery-item">
                        <a class="image-popup-vertical-fit" href="assets/user/images/gallery/popup/2.jpg"
                            title="2.jpg">
                            <img src="assets/user/images/gallery/2.jpg" alt="9.jpg" />
                        </a>
                    </div>
                </div>
                <div class="col-xl-2 col-md-4 col-sm-4 col-6">
                    <div class="gallery-item">
                        <a class="image-popup-vertical-fit" href="assets/user/images/gallery/popup/3.jpg"
                            title="3.jpg">
                            <img src="assets/user/images/gallery/3.jpg" alt="9.jpg" />
                        </a>
                    </div>
                </div>
                <div class="col-xl-2 col-md-4 col-sm-4 col-6">
                    <div class="gallery-item">
                        <a class="image-popup-vertical-fit" href="assets/user/images/gallery/popup/4.jpg"
                            title="4.jpg">
                            <img src="assets/user/images/gallery//4.png" alt="9.jpg" />
                        </a>
                    </div>
                </div>
                <div class="col-xl-2 col-md-4 col-sm-4 col-6">
                    <div class="gallery-item">
                        <a class="image-popup-vertical-fit" href="assets/user/images/gallery/popup/5.jpg"
                            title="5.jpg">
                            <img src="assets/user/images/gallery/5.jpg" alt="9.jpg" />
                        </a>
                    </div>
                </div>
                <div class="col-xl-2 col-md-4 col-sm-4 col-6">
                    <div class="gallery-item">
                        <a class="image-popup-vertical-fit" href="assets/user/images/gallery/popup/6.jpg"
                            title="6.jpg">
                            <img src="assets/user/images/gallery/6.jpg" alt="9.jpg" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--
                                                                   Color switcher
                                                                -->
    <div class="modal-sidebar-scroll rts-dark-light">
        <ul>
            <li><span>Dark</span><i class="rts-go-dark fal fa-moon"></i></li>
            <li><span>Light</span><i class="rts-go-light far fa-sun"></i></li>
        </ul>
    </div>
@endsection
