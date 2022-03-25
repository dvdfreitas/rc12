<div class="m-auto max-w-3xl border pg px-8 py-4 rounded my-8">
    <div>
        <label for="title">Título</label>
        <input wire:change="slugify()" wire:model="title" type="text" class="bg-blue-50 px-2 py-1 border rounded">
        @error('title') <div class="text-red-800 text-sm">{{ $message }}</div> @enderror
    <div class="my-4">
        <label for="slug">Slug</label>
        <input wire:model="slug" type="text" class="bg-blue-50 px-2 py-1 border rounded">
        @error('slug') <div class="text-red-800 text-sm">{{ $message }}</div> @enderror
    </div>
    <div class="my-4">
        <input name="photo" wire:model="photo" type="file"/>
        @error('photo') <div class="text-red-800 text-sm">{{ $message }}</div> @enderror
        @if ($photo)
            <img class="h-48" src="{{ $photo->temporaryUrl() }}"/>
        @endif
        <div wire:loading wire:target="photo" class="bg-blue-900">
            <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
            </svg>
        </div>
    </div>
    <button wire:click="create()" class="bg-blue-600 hover:bg-blue-700 text-white p-4 border rounded">Criar</button>
</div>
