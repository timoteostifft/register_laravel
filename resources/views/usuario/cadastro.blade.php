@extends('layout.base')

@section('title', 'Cadastro de usuário')

@section('content')
  <form action="{{route('salvar')}}"></form>
@endsection