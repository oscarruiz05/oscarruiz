@extends('layouts.app')

@section('content')
    <!--/ Intro Skew Star /-->
    <div id="home" class="intro route bg-image" style="background-image: url(img/1.jpeg)">
        <div class="overlay-itro"></div>
        <div class="intro-content display-table">
            <div class="table-cell">
                <div class="container">
                    <!--<p class="display-6 color-d">Hello, world!</p>-->
                    <h1 class="intro-title mb-4"> Desarrollor Web  </h1>
                    <p class="intro-subtitle"><span class="text-slider-items">HTML, CSS3, bootstrap, AJAX, PHP, JavaScript </span><strong class="text-slider"></strong></p>
                    <p class="pt-3"><a class="btn btn-primary btn js-scroll px-4" href="#about" role="button">Leer mas</a></p>
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
                          <img src="img/2.jpeg" class="img-fluid rounded b-shadow-a" alt="">
                        </div>
                      </div>
                      <div class="col-sm-6 col-md-7">
                        <div class="about-info">
                          <p><span class="title-s">Nombre: </span> <span>Oscar Ruiz</span></p>
                          <p><span class="title-s">Perfil: </span> <span>Desarrollador Web</span></p>
                          <p><span class="title-s">Correo: </span> <span>oscarruiz2614@gmail.com</span></p>
                          <p><span class="title-s">Telefono: </span> <span>(+57) 311-652-4263</span></p>
                        </div>
                      </div>
                    </div>
                    <div class="skill-mf">
                      <p class="title-s">Habilidades</p>
                      <span>HTML</span> <span class="pull-right">85%</span>
                      <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 85%;" aria-valuenow="85" aria-valuemin="0"
                          aria-valuemax="100"></div>
                      </div>
                      <span>Laravel</span> <span class="pull-right">15%</span>
                      <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="75" aria-valuemin="0"
                          aria-valuemax="100"></div>
                      </div>
                      <span>PHP</span> <span class="pull-right">50%</span>
                      <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                          aria-valuemax="100"></div>
                      </div>
                      <span>JAVASCRIPT</span> <span class="pull-right">40%</span>
                      <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 40%" aria-valuenow="90" aria-valuemin="0"
                          aria-valuemax="100"></div>
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
                        Persona organizada, seria y comprometida, con conocimientos en el manejo de herramientas ofimáticas.
                        En búsqueda de experiencia laboral, apasionado por los retos y la tecnologia. Trabajador, obediente con capacidad de brindar un buen servicio y atención al cliente,
                        con habilidades de trabajo en equipo, buenas relaciones interpersonales, comunicación asertiva y aprendizaje rápido,
                        persona responsable y puntual.
                      </p>
                    </div>
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
                <span class="ico-circle"><i class="ion-monitor"></i></span>
                </div>
                <div class="service-content">
                <h2 class="s-title">Web Design</h2>
                <p class="s-description text-center">
                Diseña tu pagina web a tu estilo, con una interfaz profesional.
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
                <h2 class="s-title">Web Development</h2>
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
            <!-- <div class="col-md-4">
            <div class="service-box">
                <div class="service-ico">
                <span class="ico-circle"><i class="ion-android-phone-portrait"></i></span>
                </div>
                <div class="service-content">
                    <h2 class="s-title">Responsive Design</h2>
                    <p class="s-description text-center">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni adipisci eaque autem fugiat! Quia,
                        provident vitae! Magni
                        tempora perferendis eum non provident.
                    </p>
                </div>
            </div>
            </div> -->
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
            <div class="col-md-4">
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
            </div>
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
            <div class="col-md-4">
            <div class="work-box">
                <a href="{{asset('assets/img/work-1.jpg')}}" data-lightbox="gallery-mf">
                <div class="work-img">
                    <img src="{{asset('assets/img/work-1.jpg')}}" alt="" class="img-fluid">
                </div>
                </a>
                <div class="work-content">
                    <div class="row">
                    <div class="col-sm-8">
                        <a href=""><h2 class="w-title">Lorem impsum dolor</h2></a>
                        <div class="w-more">
                        <span class="w-ctegory">Web Design</span> / <span class="w-date">18 Sep. 2018</span>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="w-like">
                        <span class="ion-ios-plus-outline"></span>
                        </div>
                    </div>
                    </div>
                </div>
                {{-- </a> --}}
            </div>
            </div>
            <div class="col-md-4">
            <div class="work-box">
                <a href="img/work-2.jpg" data-lightbox="gallery-mf">
                <div class="work-img">
                    <img src="img/work-2.jpg" alt="" class="img-fluid">
                </div>
                <div class="work-content">
                    <div class="row">
                    <div class="col-sm-8">
                        <h2 class="w-title">Loreda Cuno Nere</h2>
                        <div class="w-more">
                        <span class="w-ctegory">Web Design</span> / <span class="w-date">18 Sep. 2018</span>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="w-like">
                        <span class="ion-ios-plus-outline"></span>
                        </div>
                    </div>
                    </div>
                </div>
                </a>
            </div>
            </div>
            <div class="col-md-4">
            <div class="work-box">
                <a href="img/work-3.jpg" data-lightbox="gallery-mf">
                <div class="work-img">
                    <img src="img/work-3.jpg" alt="" class="img-fluid">
                </div>
                <div class="work-content">
                    <div class="row">
                    <div class="col-sm-8">
                        <h2 class="w-title">Mavrito Lana Dere</h2>
                        <div class="w-more">
                        <span class="w-ctegory">Web Design</span> / <span class="w-date">18 Sep. 2018</span>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="w-like">
                        <span class="ion-ios-plus-outline"></span>
                        </div>
                    </div>
                    </div>
                </div>
                </a>
            </div>
            </div>
            <div class="col-md-4">
            <div class="work-box">
                <a href="img/work-4.jpg" data-lightbox="gallery-mf">
                <div class="work-img">
                    <img src="img/work-4.jpg" alt="" class="img-fluid">
                </div>
                <div class="work-content">
                    <div class="row">
                    <div class="col-sm-8">
                        <h2 class="w-title">Bindo Laro Cado</h2>
                        <div class="w-more">
                        <span class="w-ctegory">Web Design</span> / <span class="w-date">18 Sep. 2018</span>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="w-like">
                        <span class="ion-ios-plus-outline"></span>
                        </div>
                    </div>
                    </div>
                </div>
                </a>
            </div>
            </div>
            <div class="col-md-4">
            <div class="work-box">
                <a href="img/work-5.jpg" data-lightbox="gallery-mf">
                <div class="work-img">
                    <img src="img/work-5.jpg" alt="" class="img-fluid">
                </div>
                <div class="work-content">
                    <div class="row">
                    <div class="col-sm-8">
                        <h2 class="w-title">Studio Lena Mado</h2>
                        <div class="w-more">
                        <span class="w-ctegory">Web Design</span> / <span class="w-date">18 Sep. 2018</span>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="w-like">
                        <span class="ion-ios-plus-outline"></span>
                        </div>
                    </div>
                    </div>
                </div>
                </a>
            </div>
            </div>
            <div class="col-md-4">
            <div class="work-box">
                <a href="img/work-6.jpg" data-lightbox="gallery-mf">
                <div class="work-img">
                    <img src="img/work-6.jpg" alt="" class="img-fluid">
                </div>
                <div class="work-content">
                    <div class="row">
                    <div class="col-sm-8">
                        <h2 class="w-title">Studio Big Bang</h2>
                        <div class="w-more">
                        <span class="w-ctegory">Web Design</span> / <span class="w-date">18 Sep. 2017</span>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="w-like">
                        <span class="ion-ios-plus-outline"></span>
                        </div>
                    </div>
                    </div>
                </div>
                </a>
            </div>
            </div>
            
        </div>
        </div>
    </section>
    <!--/ Section Portfolio End /-->

@endsection