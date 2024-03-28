@extends('components.layout')
 
@section('title', 'Detalhes do usuário')
 
@section('content')
<div>
    <h2>Detalhes do usuário</h2>

    <form method="POST" action="/user/{{ $user->id }}">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Nome</label>
            <input
                type="text"
                class="form-control"
                id="name"
                name="name"
                value="{{ $user->name }}"
            >
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">E-mail</label>
            <input
                type="email"
                class="form-control"
                id="email"
                name="email"
                value="{{ $user->email }}"
            >
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