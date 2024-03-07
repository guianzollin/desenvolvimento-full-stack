<div>
    @foreach ($users as $user)
        <p>
            {{ $user->name }}
            <a href="/user/{{ $user->id }}">detalhes</a>
        </p>
    @endforeach
</div>
