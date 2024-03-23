<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Modificar') }}
        </h2>
    </x-slot>
    <form method="POST" action="{{ route('modificar') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('ID Article')" />
            <x-text-input id="email" class="block mt-1 w-full" type="text" name="email" required/>
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div>
            <x-input-label for="article" :value="__('Article')" />
            <x-text-input id="article" class="block mt-1 w-full" type="text" name="article" required/>
            <x-input-error :messages="$errors->get('article')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">


            <x-primary-button class="ms-3">
                {{ __('Modificar') }}
            </x-primary-button>
        </div>
    </form>

</x-app-layout>