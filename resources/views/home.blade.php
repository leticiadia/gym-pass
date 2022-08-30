@extends('layouts.index')

@section('content')
<section>
  <div class="content-left">
    <div class="title">
      <span>GymPass</span>
    </div>
    <div class="description">
      <p>
        Agende o seu horário conosco e aproveite um espaço totalmente preparado para você cuidar da sua saúde.
      </p>
    </div>

    <div class="button">
      <a href="/agendar-aula">Agendar aula</a>
    </div>
  </div>

  <div class="content-right">
    <div class="image">
      <img src="/images/gym-01.png" alt="">
      <img src="/images/gym-02.png" alt="">
      <img src="/images/gym-03.png" alt="">
    </div>
  </div>
</section>
@endsection