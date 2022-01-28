@extends('layouts.app')

@section('content')
    <!--/ Intro Skew Star /-->
    <div id="home" class="intro route bg-image" style="background-image: url({{ asset('assets/img/fondo.jpeg') }})">
        <div class="overlay-itro"></div>
        <div class="intro-content display-table">
            <div class="table-cell">
                <div class="container">
                    <h1 class="intro-title mb-4"> Desarrollor Web </h1>
                    <p class="intro-subtitle"><span class="text-slider-items">HTML, CSS3, bootstrap, Laravel, PHP, JavaScript
                        </span><strong class="text-slider"></strong></p>
                    <p class="pt-3"><a class="btn btn-primary btn js-scroll px-4" href="#about" role="button">Leer
                            mas</a></p>
                </div>
            </div>
        </div>
    </div>
    <!--/ Intro Skew End /-->

    <!--/ About me /-->
    <section id="about" class="about-mf sect-pt4 route">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="box-shadow-full">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-sm-6 col-md-5">
                                        <div class="about-img">
                                            <img src="{{ asset('assets/img/12.jpg') }}" class="img-fluid rounded b-shadow-a"
                                                alt="">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-7">
                                        <div class="about-info">
                                            <p><span class="title-s">Nombre: </span> <span>Oscar Ruiz</span></p>
                                            <p><span class="title-s">Perfil: </span> <span>Desarrollador Web</span>
                                            </p>
                                            <p><span class="title-s">Correo: </span>
                                                <span>oscarruiz2614@gmail.com</span></p>
                                            <p><span class="title-s">Telefono: </span> <span>(+57)
                                                    311-652-4263</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="skill-mf">
                                    {{-- <p class="title-s">Habilidades</p> --}}
                                    <h5 class="title-left habilidades-title">
                                        Habilidades
                                    </h5>

                                    <div class="habilidades row">
                                        <div class="habilidades-icon">
                                            <img src="https://www.vectorlogo.zone/logos/w3_html5/w3_html5-ar21.svg" alt="">
                                        </div>
                                        <div class="habilidades-icon">
                                            <img src="https://www.vectorlogo.zone/logos/getbootstrap/getbootstrap-ar21.svg" alt="">
                                        </div>
                                        <div class="habilidades-icon">
                                            <img src="https://www.vectorlogo.zone/logos/laravel/laravel-ar21.svg" alt="">
                                        </div>
                                        <div class="habilidades-icon">
                                            <img src="https://www.vectorlogo.zone/logos/git-scm/git-scm-ar21.svg" alt="">
                                        </div>
                                        <div class="habilidades-icon">
                                            <img src="https://www.vectorlogo.zone/logos/javascript/javascript-horizontal.svg" alt="">
                                        </div>
                                        <div class="habilidades-icon">
                                            <img src="https://www.vectorlogo.zone/logos/apache/apache-official.svg" alt="">
                                        </div>
                                        <div class="habilidades-icon">
                                            <img src="https://www.vectorlogo.zone/logos/digitalocean/digitalocean-ar21.svg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="about-me pt-4 pt-md-0">
                                    <div class="title-box-2">
                                        <h5 class="title-left">
                                            Sobre mi
                                        </h5>
                                    </div>
                                    <p class="lead">
                                        Persona organizada, seria y comprometida, con conocimientos en el manejo de
                                        herramientas ofimáticas.
                                        En búsqueda de experiencia laboral, apasionado por los retos y la tecnologia.
                                        Trabajador, obediente con capacidad de brindar un buen servicio y atención al
                                        cliente,
                                        con habilidades de trabajo en equipo, buenas relaciones interpersonales,
                                        comunicación asertiva y aprendizaje rápido,
                                        persona responsable y puntual.
                                    </p>
                                </div>
                                <a href="{{asset('assets/pdf/cv-oscar.pdf')}}" download>
                                    <button class="btn btn-primary float-right mt-5" id="download_cv">
                                        Descargar CV
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ About me end /-->

    <!--/ Section Services Star /-->
    <section id="service" class="services-mf route">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="title-box text-center">
                        <h3 class="title-a">
                            Servicios
                        </h3>
                        <!-- <p class="subtitle-a">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                    </p> -->
                        <div class="line-mf"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="service-box">
                        <div class="service-ico">
                            <span class="ico-circle"><i class="ion-chatbubbles"></i></span>
                        </div>
                        <div class="service-content">
                            <h2 class="s-title">Soporte</h2>
                            <p class="s-description text-center">
                                Con la mejor atención al cliente, sin salir de casa.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-box">
                        <div class="service-ico">
                            <span class="ico-circle"><i class="ion-code-working"></i></span>
                        </div>
                        <div class="service-content">
                            <h2 class="s-title">Desarrollo Web</h2>
                            <p class="s-description text-center">
                                con la con una excelente infraesctructura de back end.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-md-4">
                <div class="service-box">
                    <div class="service-ico">
                    <span class="ico-circle"><i class="ion-camera"></i></span>
                    </div>
                    <div class="service-content">
                    <h2 class="s-title">Photography</h2>
                    <p class="s-description text-center">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni adipisci eaque autem fugiat! Quia,
                        provident vitae! Magni
                        tempora perferendis eum non provident.
                    </p>
                    </div>
                </div>
                </div> -->
                <div class="col-md-4">
                <div class="service-box">
                    <div class="service-ico">
                    <span class="ico-circle"><i class="ion-android-phone-portrait"></i></span>
                    </div>
                    <div class="service-content">
                        <h2 class="s-title">Responsive Design</h2>
                        <p class="s-description text-center">
                            Sitios Web adaptables en todos los dispositivos.
                        </p>
                    </div>
                </div>
                </div>
                <!-- <div class="col-md-4">
                <div class="service-box">
                    <div class="service-ico">
                    <span class="ico-circle"><i class="ion-paintbrush"></i></span>
                    </div>
                    <div class="service-content">
                    <h2 class="s-title">Graphic Design</h2>
                    <p class="s-description text-center">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni adipisci eaque autem fugiat! Quia,
                        provident vitae! Magni
                        tempora perferendis eum non provident.
                    </p>
                    </div>
                </div>
                </div> -->
                <!--<div class="col-md-4">
                    <div class="service-box">
                        <div class="service-ico">
                            <span class="ico-circle"><i class="ion-stats-bars"></i></span>
                        </div>
                        <div class="service-content">
                            <h2 class="s-title">Marketing Services</h2>
                            <p class="s-description text-center">
                                posiciona en los mejores buscadores, e implentación de google ads.
                            </p>
                        </div>
                    </div>
                </div>-->
            </div>
        </div>
    </section>
    <!--/ Section Services End /-->

    <!--/ Section Portfolio Star /-->
    <section id="work" class="portfolio-mf sect-pt4 route">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="title-box text-center">
                        <h3 class="title-a">
                            Portafolio
                        </h3>
                        <p class="subtitle-a">
                            Algunos de mis proyectos!!
                        </p>
                        <div class="line-mf"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($proyectos as $proyecto)
                    <div class="col-md-4">
                        <div class="work-box">
                            <a href="{{ \Storage::url($proyecto->imagen) }}" data-lightbox="gallery-mf">
                                <div class="work-img">
                                    <img src="{{ \Storage::url($proyecto->imagen) }}" alt="" class="img-fluid">
                                </div>
                            </a>
                            <div class="work-content">
                                <div class="row">
                                    <div class="col-sm-10">
                                        <h2 class="w-title">{{ $proyecto->nombre }}</h2>
                                        <div class="w-more">
                                            <a href="{{ $proyecto->link }}" target="blank"><span
                                                    class="w-ctegory">{{ $proyecto->link }}</span></a>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="w-like">
                                            <span class="ion-ios-plus-outline"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
            {{ $proyectos->links() }}
        </div>
    </section>
    <!--/ Section Portfolio End /-->

@endsection
