<div>
    <h2>{{ $username }}</h2>

    <h1> {{ $title }} </h1>

    {{ count($users) }}

    <button wire:click="createNewUser">
        Create New User
    </button>
</div>
