@extends('components.layout')
 
@section('title', 'Detalhes do usuário')
 
@section('content')
<div>
    <h1>{{ $user->name }}</h1>
    <h2>{{ $user->email }}</h2>
    <a
        class="btn btn-primary"
        href="/users"
    >
        voltar
    </a>
</div>
@endsection