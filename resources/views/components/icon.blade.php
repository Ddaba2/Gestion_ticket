@props(['name', 'class' => 'w-5 h-5'])

@php($base = 'stroke-current fill-none stroke-[1.6] ' . $class)

@switch($name)
    @case('logo')
        <svg viewBox="0 0 24 24" class="{{ $class }}" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
            <path d="M4 10.5 12 5l8 5.5" />
            <path d="M5.5 9.5V18a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1V9.5" />
            <path d="M9.5 19v-4.5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1V19" />
        </svg>
        @break

    @case('register')
        <svg viewBox="0 0 24 24" class="{{ $base }}" stroke-linecap="round" stroke-linejoin="round">
            <rect x="3.5" y="9" width="17" height="11" rx="1.5" />
            <path d="M7.5 9V6.5a4.5 4.5 0 0 1 9 0V9" />
            <path d="M3.5 13.5h17" />
        </svg>
        @break

    @case('clock-doc')
        <svg viewBox="0 0 24 24" class="{{ $base }}" stroke-linecap="round" stroke-linejoin="round">
            <path d="M7 3.5h7l4 4V19a1.2 1.2 0 0 1-1.2 1.2H7A1.2 1.2 0 0 1 5.8 19V4.7A1.2 1.2 0 0 1 7 3.5Z" />
            <path d="M14 3.5V7a1 1 0 0 0 1 1h3.3" />
            <path d="M8.5 12h4M8.5 15h7M8.5 9h2" />
        </svg>
        @break

    @case('box')
        <svg viewBox="0 0 24 24" class="{{ $base }}" stroke-linecap="round" stroke-linejoin="round">
            <path d="M12 3.5 20 7.5 12 11.5 4 7.5 12 3.5Z" />
            <path d="M4 7.5v9L12 20l8-3.5v-9" />
            <path d="M12 11.5V20" />
        </svg>
        @break

    @case('coins')
        <svg viewBox="0 0 24 24" class="{{ $base }}" stroke-linecap="round" stroke-linejoin="round">
            <ellipse cx="9" cy="7" rx="5.5" ry="3" />
            <path d="M3.5 7v4c0 1.66 2.46 3 5.5 3s5.5-1.34 5.5-3V7" />
            <path d="M9 14v3c0 1.66 2.46 3 5.5 3s5.5-1.34 5.5-3v-8c0-1.1-1.06-2.05-2.6-2.55" />
        </svg>
        @break

    @case('cog')
        <svg viewBox="0 0 24 24" class="{{ $base }}" stroke-linecap="round" stroke-linejoin="round">
            <path d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.324.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 0 1 1.37.49l1.296 2.247a1.125 1.125 0 0 1-.26 1.431l-1.003.827c-.293.24-.438.613-.43.992a7.723 7.723 0 0 1 0 .255c-.008.378.137.75.43.991l1.004.827c.424.35.534.955.26 1.43l-1.298 2.247a1.125 1.125 0 0 1-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.47 6.47 0 0 1-.22.128c-.331.183-.581.495-.644.869l-.213 1.28c-.09.543-.56.941-1.11.941h-2.594c-.55 0-1.019-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 0 1-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 0 1-1.369-.49l-1.297-2.247a1.125 1.125 0 0 1 .26-1.431l1.004-.827c.292-.24.437-.613.43-.992a7.688 7.688 0 0 1 0-.255c.007-.378-.138-.75-.43-.991l-1.004-.827a1.125 1.125 0 0 1-.26-1.43l1.297-2.247a1.125 1.125 0 0 1 1.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.087.22-.128.332-.183.582-.495.644-.869l.214-1.28Z" />
            <circle cx="12" cy="12" r="2.6" />
        </svg>
        @break

    @case('bell')
        <svg viewBox="0 0 24 24" class="{{ $base }}" stroke-linecap="round" stroke-linejoin="round">
            <path d="M12 3.5a5 5 0 0 0-5 5v2.3c0 .77-.28 1.51-.79 2.09L5 14.5h14l-1.21-1.6a3.3 3.3 0 0 1-.79-2.1V8.5a5 5 0 0 0-5-5Z" />
            <path d="M10 17a2 2 0 0 0 4 0" />
        </svg>
        @break

    @case('help')
        <svg viewBox="0 0 24 24" class="{{ $base }}" stroke-linecap="round" stroke-linejoin="round">
            <circle cx="12" cy="12" r="8.25" />
            <path d="M9.7 9.2a2.3 2.3 0 1 1 3.3 2.07c-.72.36-1 .78-1 1.48" />
            <circle cx="12" cy="16.2" r=".1" fill="currentColor" />
        </svg>
        @break

    @case('user')
        <svg viewBox="0 0 24 24" class="{{ $base }}" stroke-linecap="round" stroke-linejoin="round">
            <circle cx="12" cy="8" r="3.4" />
            <path d="M4.8 19.4a7.2 7.2 0 0 1 14.4 0" />
        </svg>
        @break

    @case('phone')
        <svg viewBox="0 0 24 24" class="{{ $base }}" stroke-linecap="round" stroke-linejoin="round">
            <path d="M5 4.5h2.7l1.1 3.6-1.7 1.4a11 11 0 0 0 5.5 5.5l1.4-1.7 3.6 1.1V17a1.5 1.5 0 0 1-1.6 1.5A14.5 14.5 0 0 1 3.5 6.1 1.5 1.5 0 0 1 5 4.5Z" />
        </svg>
        @break

    @case('briefcase')
        <svg viewBox="0 0 24 24" class="{{ $base }}" stroke-linecap="round" stroke-linejoin="round">
            <rect x="3.5" y="7.5" width="17" height="11" rx="1.5" />
            <path d="M8.5 7.5V6a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v1.5" />
            <path d="M3.5 12.5h17" />
        </svg>
        @break

    @case('shield')
        <svg viewBox="0 0 24 24" class="{{ $base }}" stroke-linecap="round" stroke-linejoin="round">
            <path d="M12 3.75c-2.1 1.6-4.2 2.35-6.25 2.35A11.6 11.6 0 0 0 5 9.75c0 5.2 3.3 9 7 10.5 3.7-1.5 7-5.3 7-10.5 0-1.3-.15-2.55-.75-3.65-2.05 0-4.15-.75-6.25-2.35Z" />
            <path d="m9.3 12.4 1.9 1.9 3.5-3.9" />
        </svg>
        @break

    @case('lock')
        <svg viewBox="0 0 24 24" class="{{ $base }}" stroke-linecap="round" stroke-linejoin="round">
            <rect x="5.5" y="10.5" width="13" height="9.5" rx="1.5" />
            <path d="M8 10.5V7.75a4 4 0 0 1 8 0v2.75" />
        </svg>
        @break

    @case('key')
        <svg viewBox="0 0 24 24" class="{{ $base }}" stroke-linecap="round" stroke-linejoin="round">
            <circle cx="15.5" cy="8.5" r="3" />
            <path d="M13.3 10.7 5 19v2h2l1-1h1.5v-1.5H11V17h1.5l1.2-1.2" />
        </svg>
        @break

    @case('eye')
        <svg viewBox="0 0 24 24" class="{{ $base }}" stroke-linecap="round" stroke-linejoin="round">
            <path d="M2.5 12S6 5.5 12 5.5 21.5 12 21.5 12 18 18.5 12 18.5 2.5 12 2.5 12Z" />
            <circle cx="12" cy="12" r="2.6" />
        </svg>
        @break

    @case('user-plus')
        <svg viewBox="0 0 24 24" class="{{ $base }}" stroke-linecap="round" stroke-linejoin="round">
            <circle cx="10" cy="8" r="3.2" />
            <path d="M3.8 19.2a6.2 6.2 0 0 1 12.4 0" />
            <path d="M18.5 8v4.5M20.75 10.25h-4.5" />
        </svg>
        @break

    @case('users')
        <svg viewBox="0 0 24 24" class="{{ $base }}" stroke-linecap="round" stroke-linejoin="round">
            <circle cx="9" cy="8" r="3.1" />
            <path d="M3.3 19a5.9 5.9 0 0 1 11.4 0" />
            <path d="M15.3 5.3a3 3 0 0 1 0 5.8" />
            <path d="M17.5 13.7a5.2 5.2 0 0 1 3.2 4.8" />
        </svg>
        @break

    @case('database')
        <svg viewBox="0 0 24 24" class="{{ $base }}" stroke-linecap="round" stroke-linejoin="round">
            <ellipse cx="12" cy="5.5" rx="7" ry="2.5" />
            <path d="M5 5.5v6c0 1.38 3.13 2.5 7 2.5s7-1.12 7-2.5v-6" />
            <path d="M5 11.5v6c0 1.38 3.13 2.5 7 2.5s7-1.12 7-2.5v-6" />
        </svg>
        @break

    @case('save')
        <svg viewBox="0 0 24 24" class="{{ $base }}" stroke-linecap="round" stroke-linejoin="round">
            <path d="M5 4.5h11.5L19 7v12a.5.5 0 0 1-.5.5h-13A.5.5 0 0 1 5 19V5a.5.5 0 0 1 0-.5Z" />
            <path d="M8 4.5V9h7V4.5" />
            <path d="M8 14h8" />
        </svg>
        @break

    @case('undo')
        <svg viewBox="0 0 24 24" class="{{ $base }}" stroke-linecap="round" stroke-linejoin="round">
            <path d="M8.5 5 4.5 9l4 4" />
            <path d="M4.5 9h9a5.5 5.5 0 0 1 0 11h-3" />
        </svg>
        @break

    @case('download')
        <svg viewBox="0 0 24 24" class="{{ $base }}" stroke-linecap="round" stroke-linejoin="round">
            <path d="M12 3.5v11" />
            <path d="M7.5 10.5 12 15l4.5-4.5" />
            <path d="M4.5 16.5V19a1 1 0 0 0 1 1h13a1 1 0 0 0 1-1v-2.5" />
        </svg>
        @break

    @case('pencil')
        <svg viewBox="0 0 24 24" class="{{ $base }}" stroke-linecap="round" stroke-linejoin="round">
            <path d="M14.5 5.5 18 9l-9 9-4 1 1-4 8.5-8.5Z" />
            <path d="M12.5 7.5 16 11" />
        </svg>
        @break

    @case('ban')
        <svg viewBox="0 0 24 24" class="{{ $base }}" stroke-linecap="round" stroke-linejoin="round">
            <circle cx="12" cy="12" r="8" />
            <path d="M6.3 6.3 17.7 17.7" />
        </svg>
        @break

    @case('chevron-down')
        <svg viewBox="0 0 24 24" class="{{ $base }}" stroke-linecap="round" stroke-linejoin="round">
            <path d="m6 9 6 6 6-6" />
        </svg>
        @break

    @case('check')
        <svg viewBox="0 0 24 24" class="{{ $base }}" stroke-linecap="round" stroke-linejoin="round">
            <path d="m4.5 12.5 5 5 10-10" />
        </svg>
        @break

    @case('check-circle')
        <svg viewBox="0 0 24 24" class="{{ $class }}" fill="currentColor">
            <path fill-rule="evenodd" d="M12 21a9 9 0 1 0 0-18 9 9 0 0 0 0 18Zm4.28-11.03a.75.75 0 0 0-1.06-1.06l-4.72 4.72-1.72-1.72a.75.75 0 0 0-1.06 1.06l2.25 2.25c.3.3.77.3 1.06 0l5.25-5.25Z" clip-rule="evenodd" />
        </svg>
        @break

    @case('plus')
        <svg viewBox="0 0 24 24" class="{{ $base }}" stroke-linecap="round" stroke-linejoin="round">
            <path d="M12 4.5v15M4.5 12h15" />
        </svg>
        @break
@endswitch
