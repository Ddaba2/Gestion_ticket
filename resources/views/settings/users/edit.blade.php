<x-admin-layout title="Modifier l'utilisateur" :subtitle="$user['name']">

    <div class="bg-white rounded-2xl border border-gray-100 shadow-sm overflow-hidden">
        <div class="bg-green-50 px-8 py-5 flex items-center gap-2">
            <x-icon name="pencil" class="w-5 h-5 text-green-700" />
            <h2 class="font-semibold text-gray-900">Modifier : {{ $user['name'] }}</h2>
        </div>

        <form method="POST" action="{{ route('settings.users.update', $user['id']) }}" class="p-8">
            @csrf
            @method('PUT')

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Nom complet *</label>
                    <input type="text" id="name" name="name" value="{{ old('name', $user['name']) }}" required
                           class="w-full px-3 py-2.5 border border-gray-200 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-green-600/25 focus:border-green-600">
                </div>
                <div>
                    <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">Téléphone *</label>
                    <input type="text" id="phone" name="phone" value="{{ old('phone', $user['phone']) }}" required
                           class="w-full px-3 py-2.5 border border-gray-200 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-green-600/25 focus:border-green-600">
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                <div>
                    <label for="role" class="block text-sm font-medium text-gray-700 mb-2">Rôle *</label>
                    <div class="relative">
                        <select id="role" name="role" required
                                class="w-full appearance-none pr-9 px-3 py-2.5 border border-gray-200 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-green-600/25 focus:border-green-600">
                            <option value="caissier" @selected($user['role'] === 'caissier')>Caissier</option>
                            <option value="gerant" @selected($user['role'] === 'gerant')>Gérant</option>
                        </select>
                        <x-icon name="chevron-down" class="w-4 h-4 text-gray-400 absolute right-3 top-1/2 -translate-y-1/2 pointer-events-none" />
                    </div>
                </div>
                <div>
                    <label for="status" class="block text-sm font-medium text-gray-700 mb-2">Statut</label>
                    <div class="relative">
                        <select id="status" name="status"
                                class="w-full appearance-none pr-9 px-3 py-2.5 border border-gray-200 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-green-600/25 focus:border-green-600">
                            <option value="actif" @selected($user['active'])>Actif</option>
                            <option value="inactif" @selected(!$user['active'])>Inactif</option>
                        </select>
                        <x-icon name="chevron-down" class="w-4 h-4 text-gray-400 absolute right-3 top-1/2 -translate-y-1/2 pointer-events-none" />
                    </div>
                </div>
            </div>

            <div class="border-t border-gray-100 mt-8 pt-6">
                <div class="flex items-center gap-2 mb-1">
                    <x-icon name="lock" class="w-5 h-5 text-green-700" />
                    <h3 class="font-semibold text-gray-900">Sécurité</h3>
                </div>
                <p class="text-sm text-gray-500 mb-4">Laissez vide pour ne pas changer le mot de passe</p>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700 mb-2">Nouveau mot de passe</label>
                        <input type="password" id="password" name="password"
                               class="w-full px-3 py-2.5 border border-gray-200 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-green-600/25 focus:border-green-600">
                    </div>
                    <div>
                        <label for="password_confirmation" class="block text-sm font-medium text-gray-700 mb-2">Confirmer</label>
                        <input type="password" id="password_confirmation" name="password_confirmation"
                               class="w-full px-3 py-2.5 border border-gray-200 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-green-600/25 focus:border-green-600">
                    </div>
                </div>
            </div>

            <div class="border-t border-gray-100 mt-8 pt-6 flex items-center gap-3">
                <button type="submit"
                        class="inline-flex items-center gap-2 bg-green-700 hover:bg-green-800 text-white text-sm font-medium px-5 py-2.5 rounded-lg transition-colors">
                    <x-icon name="save" class="w-4.5 h-4.5" />
                    Mettre à jour
                </button>
                <a href="{{ route('settings.users.index') }}"
                   class="px-5 py-2.5 rounded-lg border border-gray-200 text-gray-600 text-sm font-medium hover:bg-gray-50">
                    Annuler
                </a>
            </div>
        </form>
    </div>

</x-admin-layout>
