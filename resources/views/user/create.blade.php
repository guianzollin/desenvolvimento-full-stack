@extends('components.layout')
 
@section('title', 'Novo usuário')
 
@section('content')
<div>
    <h2>Novo usuário</h2>

    <form method="POST" action="/users/store">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nome</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">E-mail</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
    <a
        class="btn btn-primary"
        href="/users"
    >
        voltar
    </a>
</div>
@endsection