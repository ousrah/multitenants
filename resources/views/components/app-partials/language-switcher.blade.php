@props(['currentLocale' => null])

@php
    $currentLocale = $currentLocale ?? app()->getLocale();
    $languages = [
        'fr' => ['name' => 'Français', 'flag' => '🇫🇷'],
        'ar' => ['name' => 'العربية', 'flag' => '🇸🇦'],
        'en' => ['name' => 'English', 'flag' => '🇺🇸'],
        'es' => ['name' => 'Español', 'flag' => '🇪🇸'],
        'nl' => ['name' => 'Nederlands', 'flag' => '🇳🇱'],
    ];
@endphp

<div class="relative inline-block text-left" dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}">
    <div>
        <button type="button"
                class="inline-flex justify-center w-full rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 font-emoji"
                id="language-menu-button"
                aria-expanded="true"
                aria-haspopup="true"
                onclick="toggleLanguageDropdown()">
            <span class="mr-2 rtl:ml-2">{{ $languages[$currentLocale]['flag'] }}</span>
            &nbsp;&nbsp;{{ $languages[$currentLocale]['name'] }}&nbsp;&nbsp;
            <svg class="-mr-1 ml-2 rtl:mr-2 rtl:ml-1 h-5 w-5 rtl:scale-x-[-1]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
        </button>
    </div>

    <div class="hidden origin-top-right absolute right-0 mt-2 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none z-50"
         role="menu"
         aria-orientation="vertical"
         aria-labelledby="language-menu-button"
         id="language-dropdown">
        <div class="py-1" role="none">
            @foreach($languages as $code => $language)
                <a href="{{ url()->current() }}?lang={{ $code }}"
                   class="group flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900 {{ $code === $currentLocale ? 'bg-slate-100' : '' }}"
                   role="menuitem">
                    <span class="mr-3 rtl:ml-3">{{ $language['flag'] }}</span>
                    &nbsp;{{ $language['name'] }}
                    @if($code === $currentLocale)
                        <svg class="ml-auto h-5 w-5 text-indigo-600 rtl:ml-0 rtl:mr-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                        </svg>
                    @endif
                </a>
            @endforeach
        </div>
    </div>
</div>

<style>
/* Font pour afficher les emojis sur tous les navigateurs */
.font-emoji {
    font-family: 'Segoe UI Emoji', 'Noto Color Emoji', 'Apple Color Emoji', sans-serif;
}
</style>

<script>
function toggleLanguageDropdown() {
    const dropdown = document.getElementById('language-dropdown');
    dropdown.classList.toggle('hidden');
}

// Ferme le dropdown quand on clique en dehors
document.addEventListener('click', function(event) {
    const button = document.getElementById('language-menu-button');
    const dropdown = document.getElementById('language-dropdown');

    if (!button.contains(event.target) && !dropdown.contains(event.target)) {
        dropdown.classList.add('hidden');
    }
});
</script>
