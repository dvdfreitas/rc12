<div>
    <div class="text-2xl mx-16">
        <label for="contador">Contador</label>
        <input 
                wire:model="counter"
                type="text"
                name="contador"
                class="mx-8 my-4 rounded w-1/2 bg-green-100"
            >
            {{ $counter*2 }}
    </div>
</div>
