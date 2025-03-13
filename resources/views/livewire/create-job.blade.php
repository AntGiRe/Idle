<form class="md:w-1/2 space-y-5" wire:submit.prevent='createJob'>
    <div>
        <x-input-label for="title" :value="__('Titulo vacante')" />
        <x-text-input id="title" class="block mt-1 w-full" type="text" wire:model="title" :value="old('title')" required
            autofocus autocomplete="username" placeholder="Titulo vacante" />
        <x-input-error :messages="$errors->get('title')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="salary" :value="__('Salario')" />
        <select wire:model="salary" id="salary" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 w-full">
            <option value="">-- Seleccione --</option>
            @foreach ($salaries as $salary)
                <option value="{{ $salary->id }}">{{ $salary->salary }}</option>
            @endforeach
        </select>
        <x-input-error :messages="$errors->get('salary')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="category" :value="__('Categoría')" />
        <select wire:model="category" id="category" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 w-full">
            <option value="">-- Seleccione --</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->category }}</option>
            @endforeach
        </select>
        <x-input-error :messages="$errors->get('category')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="company" :value="__('Empresa')" />
        <x-text-input id="company" class="block mt-1 w-full" type="text" wire:model="company" :value="old('company')" required
            autofocus autocomplete="username" placeholder="Titulo vacante" />
        <x-input-error :messages="$errors->get('company')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="last_day" :value="__('Último día')" />
        <x-text-input id="last_day" class="block mt-1 w-full" type="date" wire:model="last_day" :value="old('last_day')" required
            autofocus autocomplete="username" placeholder="Titulo vacante" />
        <x-input-error :messages="$errors->get('last_day')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="description" :value="__('Descripción')" />
        <textarea wire:model="description" placeholder="Descripción general" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 w-full h-72"></textarea>
    </div>

    <div>
        <x-input-label for="image" :value="__('Imagen')" />
        <x-text-input id="image" class="block mt-1 w-full" type="file" wire:model="image" required
            autofocus autocomplete="username" />

        <div class="my-5 w-80">
            @if ($image)
                <img src="{{ $image->temporaryUrl() }}" alt="Imagen de la vacante" class="w-40 h-40 object-cover">
            @endif
        </div>

        <x-input-error :messages="$errors->get('image')" class="mt-2" />
    </div>

    <x-primary-button class="w-full justify-center py-4 text-xl">
        {{ __('Publicar vacante') }}
    </x-primary-button>
</form>
