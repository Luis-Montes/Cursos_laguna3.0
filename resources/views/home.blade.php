@extends('layouts.header')

@section('contenido')

<section class="hero" id="hero">
  

    <video autoplay loop muted>
      <source src="{{ asset('video/The River (Loop Animation).mp4') }}" type="video/mp4">
    </video>

    <div class="container">
      <div class="row">
        <div class="col-lg-10">
          <h2 data-aos="fade-up" data-aos-delay="100">Bienvenido a Cursos Laguna</h2>
          <p data-aos="fade-up" data-aos-delay="200">Certifícate y valida tus conocimientos</p>
        </div>
        <div class="col-lg-5">
          <form action="#" class="sign-up-form d-flex" data-aos="fade-up" data-aos-delay="300">
            <input type="text" class="form-control">
            <input type="submit" class="btn btn-primary" value="Buscar">
          </form>
        </div>
      </div>
    </div>
</section>
<!-- Inicio Informacion -->

<section class="info-contenedor sombra-info">
    <div class="informacion">
        <section class="info">
            <h3>¿POR QUÉ CERTIFICARTE EN CURSOS LAGUNA?</h3>
            <p>
                <li>15 años de experiencia instruyendo profecionistas de la comarca lagunera.</li>
                <li>instructores certificados a nivel internacional y con una amplia experiencia en su ramo.</li>
                <li>Centro dertificador avalado por:</li>
            </p>
            <ul class="lista1">
                <li>
                    <img id="imag"
                        src="https://static.wixstatic.com/media/d638e4_8b342df0f3584a338b6e9ce89331d613~mv2.png/v1/crop/x_4,y_0,w_1076,h_271/fill/w_217,h_56,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/d638e4_8b342df0f3584a338b6e9ce89331d613~mv2.png"
                        alt="">
                </li>
                <li>
                    <img id="imag2"
                        src="https://static.wixstatic.com/media/d638e4_46c3e39366e4403b9503b478fab2b2c2~mv2.png/v1/fill/w_172,h_85,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/d638e4_46c3e39366e4403b9503b478fab2b2c2~mv2.png"
                        alt="">
                </li>
            </ul>

        </section>

        <section class="info">
            <img src="https://definicion.de/wp-content/uploads/2008/09/escuela-1.jpg" alt="">
        </section>
    </div>
</section>



<section class="contenedor sombra">
    <div class="servicios">
        <section class="servicio">

            <div class="iconos">
                <img class="capimg" src="{{ asset('img/Pantalla principal/capacitacion2.png') }}" alt="">
            </div>
            <h3>Capacitación</h3>
            <p>
                Nos enfocamos en fortalecer las habilidades esenciales que son relevantes en una amplia gama de campos y
                situaciones.
            <p>Los participantes podran:</p>
            <li>
                Aprender las habilidades de comunicación efectiva, tanto oral como escrita,
                para transmitir
                ideas de manera clara y persuasiva.</li>
            <li>Desarrollar habilidades
                de resolución de problemas y toma de decisiones,
                fundamentales para abordar desafíos
                profesionales y personales.</li>
            <li>Mejorar su capacidad para trabajar en equipo y liderar grupos de manera efectiva.</li>
            <li>Adquirir competencias digitales, incluyendo el manejo de herramientas y
                tecnologías relevantes.</li>
            </p>
        </section>

        <section class="servicio">

            <div class="iconos">
                <img class="capimg" src="{{ asset('img/Pantalla principal/certificado2.png') }}" alt="">
            </div>
            <h3>Certificación</h3>
            <p>Lleva tu curriculum al siguiente nivel con una de las certificaciones oficiales que tenemos para ti como
                Certiport Authorized Training Center.</p>
            <p>¿Qué ventajas profesionales obtengo?</p>
            <li>
                Destacarte de la competencia.</li>
            <li>
                Llevar tu curriculum al siguiente nivel con una certificación de validez internacional.</li>
            <li>
                Atraer nuevas y mejores oportunidades laborales.</li>
            <li>
                Obtener un reconocimiento oficial directamente de Adobe y Microsost y aprovechar los beneficios que te
                brindan. .</li>
        </section>
    </div>
</section>

<!-- Fin Informacion -->
<!-- Stats Section - Home Page -->
<section id="stats" class="stats">

    <img src="https://www.holajapones.com/wp-content/uploads/2020/12/saladeclases.png" alt=""
        data-aos="fade-in">

    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">

        <div class="contador row gy-4">

            <div class="col-lg-3 col-md-6">
                <div class="stats-item text-center w-100 h-100">
                    <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1"
                        class="purecounter"></span>
                    <p>Graduados</p>
                </div>
            </div><!-- End Stats Item -->

            <div class="col-lg-3 col-md-6">
                <div class="stats-item text-center w-100 h-100">
                    <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1"
                        class="purecounter"></span>
                    <p>Inscritos</p>
                </div>
            </div><!-- End Stats Item -->
        </div>
    </div>

</section><!-- End Stats Section -->
<!-- Muestrario de cursos -->
<section class="muestrario-contenedor">
    <div class="muestrario">
        <section class="muestras">
            <h2>Empieza Tu Viaje de Aprendizaje</h2>
            <p class="text-muest">¡Comienza a explorar y a aprender con nosotros hoy mismo!</p>
            <section class="wrapper">
                <div class="container-fostrap">
                    <div class="content">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12 col-sm-4">
                                    <div class="card">
                                        <a class="img-card"
                                            href="#">
                                            <img
                                                src="{{ asset('img/Pantalla principal/excel.jpg') }}" />
                                        </a>
                                        <div class="card-content">
                                            <h4 class="card-title">
                                                <a
                                                    href="#">
                                                    CURSO AVANZADO DE EXCEL
                                                </a>
                                            </h4>
                                        </div>
                                        <div class="card-read-more">
                                            <a href="#"
                                                class="btn btn-link btn-block">
                                                Read More
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-4">
                                    <div class="card">
                                        <a class="img-card"
                                            href="#">
                                            <img
                                                src="{{ asset('img/Pantalla principal/mysql.jpg') }}" />
                                        </a>
                                        <div class="card-content">
                                            <h4 class="card-title">
                                                <a
                                                    href="#">
                                                    CURSO DE MYSQL BASICO
                                                </a>
                                            </h4>
                                        </div>
                                        <div class="card-read-more">
                                            <a href="#"
                                                class="btn btn-link btn-block">
                                                Read More
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-4">
                                    <div class="card">
                                        <a class="img-card"
                                            href="#">
                                            <img
                                                src="{{ asset('img/Pantalla principal/photoshop.jpg') }}" />
                                        </a>
                                        <div class="card-content">
                                            <h4 class="card-title">
                                                <a
                                                    href="#">CURSO DE PHOTOSHOP BASICO
                                                </a>
                                            </h4>
                                        </div>
                                        <div class="card-read-more">
                                            <a href="#"
                                                class="btn btn-link btn-block">
                                                Read More
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </section>
    </div>
</section>
<!-- Redes Sociales -->

<section class="redes borde-redes">
    <h1 style="text-align: center;">NUESTRAS REDES SOCIALES</h1>
    <div class="socials">
        <a href="" class="link">
            <i class="fa-brands fa-twitter twitter"></i>
        </a>
        <a href="" class="link">
            <i class="fa-brands fa-youtube youtube"></i>
        </a>
        <a href="" class="link">
            <i class="fa-brands fa-facebook facebook"></i>
        </a>
    </div>
</section>
@endsection
