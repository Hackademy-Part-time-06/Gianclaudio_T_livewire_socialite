
<div>
    <form class="container" wire:submit.prevent="store">
        @csrf
        @if (session()->has('tasks'))
        <div class="alert alert-success m-2">
            {{ session('tasks') }}
        </div>
        @endif
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="title" wire:model="title">
            @error('title') <span class="error text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="mb-3">
            <label for="subtitle" class="form-label">desrizione</label>
            <input type="text" class="form-control" id="desription" wire:model.lazy="description">
            @error('description') <span class="error text-danger">{{ $message }}</span> @enderror
        </div>
        
        <button type="submit" class="btn btn-primary">Salva</button>
    </form>
</div>

