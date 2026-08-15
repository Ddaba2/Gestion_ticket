<x-admin-layout title="Ajouter un utilisateur" subtitle="Configurer l'accès pour un utilisateur">

    <form method="POST" action="{{ route('settings.users.store') }}" class="bg-white rounded-2xl border border-gray-100 shadow-sm p-8">
        @csrf

        {{-- Nouvel utilisateur --}}
        <div class="flex items-center gap-2 pb-4 mb-6 border-b border-gray-100">
            <x-icon name="user" class="w-5 h-5 text-green-700" />
            <h2 class="font-semibold text-gray-900">Nouvel utilisateur</h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Nom Complet</label>
                <div class="relative">
                    <x-icon name="user" class="w-4.5 h-4.5 text-gray-400 absolute left-3 top-1/2 -translate-y-1/2" />
                    <input type="text" id="name" name="name" value="{{ old('name') }}" placeholder="Oumar Kone"
                           class="w-full pl-10 pr-3 py-2.5 border border-gray-200 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-green-600/25 focus:border-green-600">
                </div>
            </div>
            <div>
                <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">Téléphone</label>
                <div class="relative">
                    <x-icon name="phone" class="w-4.5 h-4.5 text-gray-400 absolute left-3 top-1/2 -translate-y-1/2" />
                    <input type="text" id="phone" name="phone" value="{{ old('phone') }}" placeholder="(+223) 76 89 02 26"
                           class="w-full pl-10 pr-3 py-2.5 border border-gray-200 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-green-600/25 focus:border-green-600">
                </div>
            </div>
        </div>

        {{-- Rôle --}}
        <div class="flex items-center gap-2 pb-4 mb-6 mt-10 border-b border-gray-100">
            <x-icon name="shield" class="w-5 h-5 text-green-700" />
            <h2 class="font-semibold text-gray-900">Rôle</h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <label for="role" class="block text-sm font-medium text-gray-700 mb-2">Sélectionner un rôle</label>
                <div class="relative">
                    <x-icon name="briefcase" class="w-4.5 h-4.5 text-gray-400 absolute left-3 top-1/2 -translate-y-1/2" />
                    <select id="role" name="role"
                            class="w-full appearance-none pl-10 pr-9 py-2.5 border border-gray-200 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-green-600/25 focus:border-green-600">
                        <option value="caissier">Caissier</option>
                        <option value="gerant">Gérant</option>
                    </select>
                    <x-icon name="chevron-down" class="w-4 h-4 text-gray-400 absolute right-3 top-1/2 -translate-y-1/2 pointer-events-none" />
                </div>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Account Status</label>
                <label class="relative inline-flex items-center gap-3 cursor-pointer h-[42px]">
                    <input type="checkbox" name="is_active" value="1" checked class="sr-only peer">
                    <span class="w-11 h-6 bg-gray-300 peer-checked:bg-green-700 rounded-full transition-colors"></span>
                    <span class="absolute left-1 w-4 h-4 bg-white rounded-full shadow transition-transform peer-checked:translate-x-5"></span>
                    <span class="inline-flex items-center gap-1.5 text-green-700 font-medium text-sm">
                        <x-icon name="check-circle" class="w-4 h-4" />
                        Active
                    </span>
                </label>
            </div>
        </div>

        {{-- Security --}}
        <div class="flex items-center gap-2 pb-4 mb-6 mt-10 border-b border-gray-100">
            <x-icon name="lock" class="w-5 h-5 text-green-700" />
            <h2 class="font-semibold text-gray-900">Security</h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700 mb-2">Mot de passe</label>
                <div class="relative">
                    <x-icon name="key" class="w-4.5 h-4.5 text-gray-400 absolute left-3 top-1/2 -translate-y-1/2" />
                    <input type="password" id="password" name="password" placeholder="••••••••"
                           class="w-full pl-10 pr-3 py-2.5 border border-gray-200 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-green-600/25 focus:border-green-600">
                </div>
            </div>
            <div>
                <label for="password_confirmation" class="block text-sm font-medium text-gray-700 mb-2">Confirmer mot de passe</label>
                <div class="relative">
                    <x-icon name="eye" class="w-4.5 h-4.5 text-gray-400 absolute left-3 top-1/2 -translate-y-1/2" />
                    <input type="password" id="password_confirmation" name="password_confirmation" placeholder="••••••••"
                           class="w-full pl-10 pr-3 py-2.5 border border-gray-200 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-green-600/25 focus:border-green-600">
                </div>
            </div>
        </div>

        <div class="border-t border-gray-100 mt-10 pt-6 flex items-center justify-end gap-3">
            <a href="{{ route('settings.users.index') }}"
               class="px-5 py-2.5 rounded-lg border border-gray-200 text-gray-600 text-sm font-medium hover:bg-gray-50">
                Annuler
            </a>
            <button type="submit"
                    class="inline-flex items-center gap-2 bg-green-700 hover:bg-green-800 text-white text-sm font-medium px-5 py-2.5 rounded-lg transition-colors">
                <x-icon name="user-plus" class="w-4.5 h-4.5" />
                Ajouter l'utilisateur
            </button>
        </div>
    </form>

</x-admin-layout>
