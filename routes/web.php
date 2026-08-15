<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Paramètres (frontend preview routes)
|--------------------------------------------------------------------------
|
| These routes render the "Paramètres" screens with hardcoded mock data
| so the UI can be previewed without the backend/database being ready.
| Replace the closures with real controllers once users/backups are
| wired up to the database.
|
*/

Route::prefix('parametres')->name('settings.')->group(function () {

    $mockUsers = [
        [
            'id' => 1,
            'name' => 'Administrateur',
            'email' => 'admin@cantine-bamako.ml',
            'phone' => '(+223) 70 00 00 00',
            'role' => 'gerant',
            'active' => true,
            'is_you' => true,
            'avatar_class' => 'bg-green-100 text-green-700',
        ],
        [
            'id' => 2,
            'name' => 'Seydou Traoré',
            'email' => 'seydou.caisse@cantine-bamako.ml',
            'phone' => '(+223) 76 89 02 26',
            'role' => 'caissier',
            'active' => true,
            'is_you' => false,
            'avatar_class' => 'bg-blue-100 text-blue-700',
        ],
        [
            'id' => 3,
            'name' => 'Fatoumata Diallo',
            'email' => 'fatoumata@cantine-bamako.ml',
            'phone' => '(+223) 78 98 09 12',
            'role' => 'caissier',
            'active' => false,
            'is_you' => false,
            'avatar_class' => 'bg-gray-100 text-gray-500',
        ],
    ];

    $mockBackups = [
        [
            'file' => 'backup_2024-08-13_22-05-42.sql',
            'date' => '13/08/2024',
            'time' => '22:05:43',
            'size' => '37,0 Ko',
            'type' => 'manuelle',
        ],
        [
            'file' => 'avant_restauration_2024-08-13_22-12-28.sql',
            'date' => '13/08/2024',
            'time' => '22:12:29',
            'size' => '33,0 Ko',
            'type' => 'securite',
        ],
        [
            'file' => 'backup_auto_2024-08-12_00-00-01.sql',
            'date' => '12/08/2024',
            'time' => '00:00:01',
            'size' => '36,5 Ko',
            'type' => 'automatique',
        ],
    ];

    Route::get('/utilisateurs', function () use ($mockUsers) {
        return view('settings.users.index', ['users' => $mockUsers]);
    })->name('users.index');

    Route::get('/utilisateurs/creer', function () {
        return view('settings.users.create');
    })->name('users.create');

    Route::post('/utilisateurs', function () {
        return redirect()->route('settings.users.index');
    })->name('users.store');

    Route::get('/utilisateurs/{id}/modifier', function ($id) use ($mockUsers) {
        $user = collect($mockUsers)->firstWhere('id', (int) $id);
        abort_if(! $user, 404);

        return view('settings.users.edit', ['user' => $user]);
    })->name('users.edit');

    Route::put('/utilisateurs/{id}', function ($id) {
        return redirect()->route('settings.users.index');
    })->name('users.update');

    Route::get('/sauvegardes', function () use ($mockBackups) {
        return view('settings.backups.index', ['backups' => $mockBackups]);
    })->name('backups.index');

    Route::post('/sauvegardes', function () {
        return redirect()->route('settings.backups.index');
    })->name('backups.store');

    Route::post('/sauvegardes/restaurer-derniere', function () {
        return redirect()->route('settings.backups.index');
    })->name('backups.restoreLatest');
});
