@extends('layouts.index')

@section('content')
<section class="flex items-center justify-center md:flex-wrap" id="content">
  <div class="content-left flex flex-col justify-center w-3/12">
    <div class="title">
      <span class="font-semibold text-6xl text-transparent tracking-tight text-white bg-clip-text bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500">GymPass</span>
    </div>
    <div class="description my-4">
      <p class="text-white text-justify w-96">
        Agende o seu horário conosco e aproveite um espaço totalmente preparado para você cuidar da sua saúde.
      </p>
    </div>

    <div class="button">
      <button class="bg-transparent hover:bg-purple-500 text-purple-700 font-semibold hover:text-white py-2 px-4 border border-purple-500 hover:border-transparent rounded">Agendar aula</button>
    </div>
  </div>

  <div class="content-right">
    <div class="image flex items-center justify-center">
      <img src="/images/gym-01.png" alt="" class="w-3/12 rounded-xl bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500">
      <img src="/images/gym-02.png" alt="" class="w-3/12 rounded-xl bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500">
      <img src="/images/gym-03.png" alt="" class="w-3/12 rounded-xl bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500">
    </div>
  </div>
</section>
@endsection