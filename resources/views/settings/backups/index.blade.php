<x-admin-layout>

    <p class="text-gray-500 mb-6">Utilisateurs, sauvegarde et restauration</p>

    <x-settings-tabs active="backups" />

    <div class="bg-white rounded-2xl border border-gray-100 shadow-sm">
        <div class="flex items-center justify-between gap-6 px-6 py-5 border-b border-gray-100">
            <div class="flex items-start gap-3">
                <x-icon name="database" class="w-5 h-5 text-green-700 mt-0.5" />
                <div>
                    <h2 class="font-semibold text-gray-900">Sauvegarde et restauration</h2>
                    <p class="text-sm text-gray-500 mt-1 max-w-xl">
                        Chaque sauvegarde est un fichier .sql complet, importable directement depuis phpMyAdmin en cas de besoin.
                    </p>
                </div>
            </div>
            <div class="flex items-center gap-3 shrink-0">
                <form method="POST" action="{{ route('settings.backups.store') }}">
                    @csrf
                    <button type="submit"
                            class="inline-flex items-center gap-2 bg-green-700 hover:bg-green-800 text-white text-sm font-medium px-4 py-2.5 rounded-lg transition-colors">
                        <x-icon name="save" class="w-4 h-4" />
                        Sauvegarder maintenant
                    </button>
                </form>
                <form method="POST" action="{{ route('settings.backups.restoreLatest') }}">
                    @csrf
                    <button type="submit"
                            class="inline-flex items-center gap-2 border border-red-200 text-red-600 hover:bg-red-50 text-sm font-medium px-4 py-2.5 rounded-lg transition-colors">
                        <x-icon name="undo" class="w-4 h-4" />
                        Restaurer la dernière sauvegarde
                    </button>
                </form>
            </div>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-sm">
                <thead>
                    <tr class="text-xs uppercase tracking-wide text-gray-400 text-left">
                        <th class="px-6 py-3 font-medium">Fichier</th>
                        <th class="px-6 py-3 font-medium">Date</th>
                        <th class="px-6 py-3 font-medium">Taille</th>
                        <th class="px-6 py-3 font-medium">Type</th>
                        <th class="px-6 py-3 font-medium text-right">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($backups as $backup)
                        <tr class="border-t border-gray-100 hover:bg-gray-50/60">
                            <td class="px-6 py-4 text-gray-700">{{ $backup['file'] }}</td>
                            <td class="px-6 py-4">
                                <div class="font-semibold text-gray-900">{{ $backup['date'] }}</div>
                                <div class="text-gray-400 text-xs">{{ $backup['time'] }}</div>
                            </td>
                            <td class="px-6 py-4 text-gray-500">{{ $backup['size'] }}</td>
                            <td class="px-6 py-4">
                                @switch($backup['type'])
                                    @case('manuelle')
                                        <span class="text-xs font-semibold bg-green-700 text-white px-2.5 py-1 rounded-full">MANUELLE</span>
                                        @break
                                    @case('securite')
                                        <span class="text-xs font-semibold bg-gray-100 text-gray-600 px-2.5 py-1 rounded-full">SÉCURITÉ (AVANT RESTAURATION)</span>
                                        @break
                                    @case('automatique')
                                        <span class="text-xs font-semibold bg-amber-400 text-white px-2.5 py-1 rounded-full">AUTOMATIQUE</span>
                                        @break
                                @endswitch
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center justify-end gap-2">
                                    <button type="button"
                                            class="w-9 h-9 flex items-center justify-center rounded-lg border border-gray-200 text-green-700 hover:bg-gray-50">
                                        <x-icon name="download" class="w-4 h-4" />
                                    </button>
                                    <button type="button"
                                            class="w-9 h-9 flex items-center justify-center rounded-lg border border-gray-200 text-red-500 hover:bg-red-50">
                                        <x-icon name="undo" class="w-4 h-4" />
                                    </button>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</x-admin-layout>
