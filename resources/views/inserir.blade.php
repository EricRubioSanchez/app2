<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Inserir') }}
        </h2>
    </x-slot>
    <form method="POST" action="{{ route('inserir') }}">
        @csrf
 
        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Article')" />
            <x-text-input id="email" class="block mt-1 w-full" type="text" name="email"  required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
        <div class="flex items-center justify-end mt-4">

            <x-primary-button class="ms-3">
                {{ __('Inserir') }}
            </x-primary-button>
        </div>
    </form>

</x-app-layout> 