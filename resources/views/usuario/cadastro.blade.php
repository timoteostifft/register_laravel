@extends('layout.base')

@section('title', 'Cadastro de usuário')

@section('content')
  <form action="{{route('salvar')}}" method="post">
    {{csrf_field()}}

    <div class="field">
      <label for="nome">Nome:</label>
      <input type="text" name="nome" id="nome">
    </div>

    <div class="field">
      <label for="email">E-mail:</label>
      <input type="text" name="email" id="email">
    </div>

    <div class="field">
      <label for="nome">Senha:</label>
      <input type="text" name="senha" id="senha">
    </div>

    <div class="btn">
      <button type="submit">Salvar</button>
    </div>

  </form>
@endsection