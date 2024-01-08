@extends('layouts.header')

@section('contenido')

<section class="rmaestros" id="rmaestros">
    <video autoplay loop muted>
        <source src="{{ asset('video/Room(Loop Animation).mp4') }}" type="video/mp4">
    </video>
    <div class="container">
        <div class="row">
          <div class="col-lg-10">
            <h2 data-aos="fade-up" data-aos-delay="100">Unete a Cursos Laguna
            </h2>
          </div>
          <div class="col-lg-5">
            <form action="#" class="sign-up-form d-flex" data-aos="fade-up" data-aos-delay="300">
              <input type="submit" class="btn btn-primary" value="EMPEZAR">
            </form>
          </div>
        </div>
      </div>
</section>

@endsection