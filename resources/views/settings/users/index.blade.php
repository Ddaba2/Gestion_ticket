<x-admin-layout>

    <p class="text-gray-500 mb-6">Gérez les utilisateurs et les paramètres de votre établissement.</p>

    <x-settings-tabs active="users" />

    <div class="bg-white rounded-2xl border border-gray-100 shadow-sm">
        <div class="flex items-center justify-between px-6 py-5 border-b border-gray-100">
            <h2 class="flex items-center gap-2 font-semibold text-gray-900">
                <x-icon name="users" class="w-5 h-5 text-green-700" />
                Utilisateurs ({{ count($users) }})
            </h2>
            <a href="{{ route('settings.users.create') }}"
               class="inline-flex items-center gap-2 bg-green-700 hover:bg-green-800 text-white text-sm font-medium px-4 py-2.5 rounded-lg transition-colors">
                <x-icon name="plus" class="w-4 h-4" />
                Nouvel utilisateur
            </a>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-sm">
                <thead>
                    <tr class="text-xs uppercase tracking-wide text-gray-400 text-left">
                        <th class="px-6 py-3 font-medium">Nom</th>
                        <th class="px-6 py-3 font-medium">Email</th>
                        <th class="px-6 py-3 font-medium">Rôle</th>
                        <th class="px-6 py-3 font-medium">Statut</th>
                        <th class="px-6 py-3 font-medium text-right">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr class="border-t border-gray-100 hover:bg-gray-50/60">
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-3">
                                    <div class="w-9 h-9 shrink-0 rounded-full flex items-center justify-center font-semibold text-sm {{ $user['avatar_class'] }}">
                                        {{ mb_substr($user['name'], 0, 1) }}
                                    </div>
                                    <div>
                                        <div class="flex items-center gap-2">
                                            <span class="font-semibold text-gray-900">{{ $user['name'] }}</span>
                                            @if ($user['is_you'])
                                                <span class="text-[10px] font-semibold tracking-wide bg-green-700 text-white px-2 py-0.5 rounded-full">VOUS</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 text-gray-500">{{ $user['email'] }}</td>
                            <td class="px-6 py-4">
                                @if ($user['role'] === 'gerant')
                                    <span class="text-xs font-semibold bg-purple-100 text-purple-700 px-2.5 py-1 rounded-full">GÉRANT</span>
                                @else
                                    <span class="text-xs font-semibold bg-blue-100 text-blue-700 px-2.5 py-1 rounded-full">CAISSIER</span>
                                @endif
                            </td>
                            <td class="px-6 py-4">
                                @if ($user['active'])
                                    <span class="text-xs font-semibold bg-green-100 text-green-700 px-2.5 py-1 rounded-full">ACTIF</span>
                                @else
                                    <span class="text-xs font-semibold bg-gray-100 text-gray-500 px-2.5 py-1 rounded-full">INACTIF</span>
                                @endif
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center justify-end gap-2">
                                    <a href="{{ route('settings.users.edit', $user['id']) }}"
                                       class="w-9 h-9 flex items-center justify-center rounded-lg border border-gray-200 text-gray-500 hover:bg-gray-50">
                                        <x-icon name="pencil" class="w-4 h-4" />
                                    </a>
                                    <button type="button"
                                            class="w-9 h-9 flex items-center justify-center rounded-lg border border-red-200 text-red-500 hover:bg-red-50">
                                        <x-icon name="ban" class="w-4 h-4" />
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
