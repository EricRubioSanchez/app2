<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Articles') }}
        </h2>
    </x-slot>

    <ul role="list" class="divide-y divide-gray-100">
                @forelse($articles as $article)
                <li class="flex justify-between gap-x-6 py-5">
                    <div class="flex min-w-0 gap-x-4">
                        <div class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <p class="text-sm font-semibold leading-6 text-gray-900 dark:text-white">{{ $article->article }}</p>
                            <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">id:{{ $article->id }}</p>
                        </div>
                    </div>
                </li>
                @empty
                <li>Cap article a mostrar!!!</li> 
                @endforelse
            </ul>
            {{ $articles->links() }}
</x-app-layout> 
