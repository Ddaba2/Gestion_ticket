@props(['active' => 'users'])

<div class="border-b border-gray-200 flex items-center gap-8 mb-6">
    <a href="{{ route('settings.users.index') }}"
       class="flex items-center gap-2 pb-3 text-sm font-medium border-b-2 -mb-px
              {{ $active === 'users' ? 'border-green-700 text-green-800' : 'border-transparent text-gray-500 hover:text-gray-700' }}">
        <x-icon name="users" class="w-4.5 h-4.5" />
        Utilisateurs
    </a>
    <a href="{{ route('settings.backups.index') }}"
       class="flex items-center gap-2 pb-3 text-sm font-medium border-b-2 -mb-px
              {{ $active === 'backups' ? 'border-green-700 text-green-800' : 'border-transparent text-gray-500 hover:text-gray-700' }}">
        <x-icon name="database" class="w-4.5 h-4.5" />
        Sauvegarde et restauration
    </a>
</div>
