<!--/ Section Contact-Footer Star /-->
<section class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url({{asset('assets/img/overlay-bg.jpg')}})">
    <div class="overlay-mf"></div>
    <div class="container">
    <div class="row">
        <div class="col-sm-12">
        <div class="contact-mf">
            <div id="contact" class="box-shadow-full">
            <div class="row">
                <div class="col-md-6">
                <div class="title-box-2">
                    <h5 class="title-left">
                    Contacto
                    </h5>
                </div>
                <div>
                    <form action="{{route('contacto')}}" method="post" role="form" class="contactForm">
                        @csrf
                        <div id="sendmessage" >Tu mensaje se ha enviado corectamente. Gracias por cantartarnos!!.. </div>
                        <div id="errormessage"></div>
                        <div class="row">
                            <div class="col-md-12 mb-3">
                            <div class="form-group">
                                <input type="text" name="nombre" class="form-control" id="name" placeholder="Nombre" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                <div class="validation"></div>
                            </div>
                            </div>
                            <div class="col-md-12 mb-3">
                            <div class="form-group">
                                <input type="email" class="form-control" name="correo" id="email" placeholder="Correo" data-rule="email" data-msg="Please enter a valid email" />
                                <div class="validation"></div>
                            </div>
                            </div>
                            <div class="col-md-12 mb-3">
                                <div class="form-group">
                                <input type="text" class="form-control" name="asunto" id="subject" placeholder="Asunto" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                                <div class="validation"></div>
                                </div>
                            </div>
                            <div class="col-md-12 mb-3">
                            <div class="form-group">
                                <textarea class="form-control" name="mensaje" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Mensaje"></textarea>
                                <div class="validation"></div>
                            </div>
                            </div>
                            <div class="col-md-12">
                            <button type="submit" class="button button-a button-big button-rouded">Enviar Mensaje</button>
                            </div>
                        </div>
                    </form>
                </div>
                </div>
                <div class="col-md-6">
                <div class="title-box-2 pt-4 pt-md-0">
                    <h5 class="title-left">
                    Ponerse en contacto
                    </h5>
                </div>
                <div class="more-info">
                    <p class="lead">
                    Deja tu mensaje para poder ayudarte!!
                    </p>
                    <ul class="list-ico">
                    <li><span class="ion-ios-location"></span> Neiva - Huila, Colombia</li>
                    <li><span class="ion-ios-telephone"></span> (+57) 311-652-4263</li>
                    <li><span class="ion-email"></span> oscarruiz2614@gmail.com</li>
                    </ul>
                </div>
                <div class="socials">
                    <ul>
                    <li><a href="https://www.facebook.com/profile.php?id=100007085074863" target="blank"><span class="ico-circle"><i class="ion-social-facebook"></i></span></a></li>
                    <li><a href="https://www.instagram.com/oscar_ruiz0502/?hl=es-la" target="blank"><span class="ico-circle"><i class="ion-social-instagram"></i></span></a></li>
                    <li><a href="https://twitter.com/oscarruiz05" target="blank"><span class="ico-circle"><i class="ion-social-twitter"></i></span></a></li>
                    <li><a href="https://www.linkedin.com/in/oscar-daniel-ruiz-a340521a0/" target="blank"><span class="ico-circle"><i class="ion-social-linkedin"></i></span></a></li>
                    <li><a href="https://github.com/oscarruiz05" target="blank"><span class="ico-circle"><i class="ion-social-github"></i></span></a></li>
                    </ul>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
    <footer>
    <div class="container">
        <div class="row">
        <div class="col-sm-12">
            <div class="copyright-box">
            <p class="copyright">&copy; Copyright <strong>Oscar Ruiz</strong>. Todos los derechos reservados</p>
            {{-- <div class="credits">
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div> --}}
            </div>
        </div>
        </div>
    </div>
    </footer>
</section>
<!--/ Section Contact-footer End /-->