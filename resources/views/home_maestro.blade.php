@extends('layouts.header')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
@section('contenido')

<section class="rmaestros" id="rmaestros">
    <video autoplay loop muted>
        <source src="{{ asset('video/Room(Loop Animation).mp4') }}" type="video/mp4">
    </video>
    <div class="container">
        <div class="row">
          <div class="col-lg-10">
            <h2 data-aos="fade-up" data-aos-delay="100">¡Bienvenido a Cursos Laguna!</h2>
            <p data-aos="fade-up" data-aos-delay="200">En cursos laguna, creemos en el poder transformador de la educación y
                                                       valoramos profundamente el papel crucial que desempeñan los maestros en la
                                                       formación de mentes brillantes. Estamos emocionados de que estés consideando
                                                       unirte a nuestr comunidad de educadores apacionados.

                                                       Al unirte a nosotros, tendrás la oportunidad de compartir tu conocimiento, inspirar a
                                                       estudiantes y contribuir al crecimiento continuo de la educación. Nuestra plataforma
                                                       esta diseñada para conectar a maestros dedicados con estudiantes ávidos de aprender,
                                                       brindadndo un espacio donde la enseñanza se convirte en una experiensia enriquecedora
                                                       para ambas partes.
            </p>
          </div>
          <div class="col-lg-5">
            {{-- <form action="#" class="sign-up-form d-flex" data-aos="fade-up" data-aos-delay="300">
              <input type="button" class="btsn btn-danger" value="Registrate" data-target="modal" data-target="#modalRegistro">
            </form> --}}
            <form action="#" class="sign-up-form d-flex" data-aos="fade-up" data-aos-delay="300">
              <input type="button" class="btn btn-danger" value="Regístrate" data-toggle="modal" data-target="#modalRegistro">
            </form>
          
            <!-- Modal -->
            <div class="modal fade" id="modalRegistro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Formulario de Registro</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <!-- Aquí puedes poner tu formulario -->
                    <form action="#" method="post">
                      <!-- Tus campos y etiquetas de formulario aquí -->
                      <label for="nombre">Nombre:</label>
                      <input type="text" name="nombre" id="nombre" required>
                      <!-- Otros campos del formulario -->
          
                      <button type="submit" class="btn btn-primary">Enviar</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
</section>

@endsection