<div>
    <form wire:submit="createNewUser">
        <input wire:model="name" type="text" placeholder="text" />
        <input wire:model="email" type="email" placeholder="email" />
        <input wire:model="password" type="password" placeholder="password" />

        <button> Create </button>
    </form>

    <hr />

    @foreach ($users as $user)
        <h3>{{ $user->name }}</h3>
    @endforeach
</div>
