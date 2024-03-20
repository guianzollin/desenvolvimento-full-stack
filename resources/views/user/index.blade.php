@extends('components.layout')
 
@section('title', 'Usuários')
 
@section('content')
<div>
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
        <td>
            <a
                class="btn btn-primary"
                href="/user/{{ $user->id }}"
            >
                Detalhes
            </a>
        </td>
        </tr>
        @endforeach
    </tbody>
    </table>

</div>
@endsection