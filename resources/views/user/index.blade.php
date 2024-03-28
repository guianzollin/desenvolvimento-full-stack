@extends('components.layout')
 
@section('title', 'Usuários')
 
@section('content')
<div>
    <div class="d-flex justify-content-end">
        <a
            class="btn btn-primary"
            href="/users/create"
        >
            novo usuário
        </a>
    </div>
    <table class="table">
    <thead>
        <tr>
        <th scope="col">Id</th>
        <th scope="col">Nome</th>
        <th scope="col">E-mail</th>
        <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
        <tr>
        <th scope="row">
            {{ $user->id }}
        </th>
        <td>
            {{ $user->name }}
        </td>
        <td>
            {{ $user->email }}
        </td>
        <td
            class="d-flex justify-content-end"
        >
            <a
                class="btn btn-primary"
                href="/user/{{ $user->id }}"
            >
                Detalhes
            </a>
            <form method="POST" action="/user/{{ $user->id }}">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Excluir</button>
            </form>
        </td>
        </tr>
        @endforeach
    </tbody>
    </table>

</div>
@endsection