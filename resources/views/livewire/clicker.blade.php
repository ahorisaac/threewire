<div>
    @if (session()->has('success'))
        <span class="py-3 px-3 bg-green-600 text-white rounded">{{ session()->get('success') }}</span>
    @endif

    <form class="p-5" wire:submit="createNewUser">
        <input class="block rounded border border-gray-100 px-3 py-1 mt-1" wire:model="name" type="text"
            placeholder="text" />
        @error('name')
            <span class="text-red-500 text-xs">
                {{ $message }}
            </span>
        @enderror

        <input class="block rounded border border-gray-100 px-3 py-1 mt-1" wire:model="email" type="email"
            placeholder="email" />
        @error('email')
            <span class="text-red-500 text-xs">
                {{ $message }}
            </span>
        @enderror

        <input class="block rounded border border-gray-100 px-3 py-1 mt-1" wire:model="password" type="password"
            placeholder="password" />
        @error('password')
            <span class="text-red-500 text-xs">
                {{ $message }}
            </span>
        @enderror

        <button class="block rounded px-3 py-1 bg-gray-400 text-white mt-1"> Create </button>
    </form>

    <hr />

    @foreach ($users as $user)
        <h3>{{ $user->name }}</h3>
    @endforeach
</div>
