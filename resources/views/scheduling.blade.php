@extends('layouts.index')

@section('content')
<section>
  <form action="/agendar-aula" method="POST">
    @method('POST')
    <div class="student-name">
      <label for="name">Nome do Aluno:</label>
      <input type="text" placeholder="Nome do aluno" id="name">
    </div>

    <div class="datetime">
      <div class="calendar">
        <label for="calendar">Calendário:</label>
        <input type="date" name="calendar" id="calendar">
      </div>

      <div class="time">
        <label for="time">Horário:</label>
        <input type="time" id="time">
      </div>
    </div>

    <div class="selects">
      <div class="instructors">
        <label for="instructors">Instrutores:</label>
        <select name="instructors" id="instructors">
          <option value="#">Instrutores</option>
          <option value="rafael">Rafael</option>
          <option value="rafael">Gabriela</option>
          <option value="rafael">Mikael</option>
          <option value="rafael">Leyla</option>
        </select>
      </div>

      <div class="places">
        <label for="places">Local:</label>
        <select name="places" id="places">
          <option value="#">Local</option>
          <option value="rafael">Av. Algum Lugar</option>
          <option value="rafael">Av. Rua Feliz</option>
          <option value="rafael">Av. Direção</option>
          <option value="rafael">Av. Rua vencendores</option>
        </select>
      </div>
    </div>

    <div class="button">
      <button class="btn-schedule">Agendar</button>
      <button class="btn-cancel">Cancelar</button>
    </div>
  </form>
</section>
@endsection