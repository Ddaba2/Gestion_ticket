@props(['title' => null, 'subtitle' => null])

@php
    $navItems = [
        ['label' => 'Commandes', 'icon' => 'register', 'route' => 'settings.users.index', 'active' => true],
        ['label' => 'Historiques', 'icon' => 'clock-doc', 'route' => 'settings.users.index', 'active' => false],
        ['label' => 'Produits', 'icon' => 'box', 'route' => 'settings.users.index', 'active' => false],
        ['label' => 'Revenus', 'icon' => 'coins', 'route' => 'settings.users.index', 'active' => false],
    ];
@endphp

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ? $title . ' · ' : '' }}CanteenManager</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#f2f8ef] text-gray-900 antialiased">
    <div class="flex min-h-screen">
        {{-- Sidebar --}}
        <aside class="w-64 shrink-0 bg-white border-r border-gray-100 flex flex-col">
            <div class="px-5 py-5 flex items-center gap-3">
                <div class="w-10 h-10 rounded-xl bg-green-700 text-white flex items-center justify-center font-bold text-sm">
                    CM
                </div>
                <div class="leading-tight">
                    <p class="font-bold text-green-800 text-[15px]">CanteenManager</p>
                    <p class="text-xs text-gray-500">Admin Console</p>
                </div>
            </div>

            <nav class="mt-2 px-3 flex-1">
                <ul class="space-y-1">
                    @foreach ($navItems as $item)
                        <li>
                            <a href="{{ route($item['route']) }}"
                               class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-sm transition-colors
                                      {{ $item['active']
                                            ? 'bg-green-50 text-green-800 font-medium border-l-4 border-green-700 -ml-[1px] pl-[11px]'
                                            : 'text-gray-600 hover:bg-gray-50' }}">
                                <x-icon :name="$item['icon']" class="w-5 h-5 {{ $item['active'] ? 'text-green-700' : 'text-gray-400' }}" />
                                {{ $item['label'] }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </nav>

            <div class="px-3 pb-5 pt-3 border-t border-gray-100">
                <a href="{{ route('settings.users.index') }}" class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-sm text-gray-600 hover:bg-gray-50">
                    <x-icon name="cog" class="w-5 h-5 text-gray-400" />
                    Settings
                </a>
            </div>
        </aside>

        {{-- Main --}}
        <div class="flex-1 flex flex-col min-w-0">
            <header class="h-16 shrink-0 bg-white border-b border-gray-100 flex items-center justify-between px-8">
                <p class="text-green-700 font-medium">Paramètres</p>
                <div class="flex items-center gap-4">
                    <button type="button" class="text-gray-400 hover:text-gray-600">
                        <x-icon name="bell" class="w-5 h-5" />
                    </button>
                    <button type="button" class="text-gray-400 hover:text-gray-600">
                        <x-icon name="help" class="w-5 h-5" />
                    </button>
                    <div class="w-9 h-9 rounded-full bg-green-100 text-green-800 flex items-center justify-center font-semibold text-sm">
                        A
                    </div>
                </div>
            </header>

            <main class="flex-1 px-8 py-8">
                <div class="max-w-5xl">
                    @if ($title)
                        <h1 class="text-3xl font-bold text-gray-900">{{ $title }}</h1>
                        @if ($subtitle)
                            <p class="text-gray-500 mt-1">{{ $subtitle }}</p>
                        @endif
                        <div class="mt-8">
                            {{ $slot }}
                        </div>
                    @else
                        {{ $slot }}
                    @endif
                </div>
            </main>
        </div>
    </div>
</body>
</html>
