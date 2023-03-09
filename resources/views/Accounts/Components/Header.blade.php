<header class="w-full fixed top-0 left-0 right-0 flex items-center p-4 gap-7 bg-base-white shadow-sm z-10">
    <a href="/" class="w-28 h-7 relative overflow-hidden flex items-center justify-center">
        <img src="{{ asset('Assets/svg/Logo.svg') }}" alt="Logo" class="object-cover block w-full h-full">
    </a>
    <button type="button"
        class="relative w-6 ml-auto h-fit p-1 rounded-sm hover:bg-line-dark bg-opacity-50 transition-colors flex items-center justify-center">
        {{-- Indicator --}}
        <span
            class="absolute w-3 h-3 top-0 right-0 flex items-center justify-center rounded-full bg-green-dark font-Montserat text-sm font-medium text-base-white">
            1
        </span>
        {{--  --}}
        <img src="{{ asset('Assets/svg/Alert.svg') }}" alt="Alert" class="block w-full h-full object-cover">
    </button>
    <button type="button" id="openBurger"
        class="w-8 h-fit relative overflow-hidden flex items-end justify-center p-1 rounded-sm hover:bg-line-dark bg-opacity-50 transition-colors">
        <img src="{{ asset('Assets/svg/Menu.svg') }}" alt="Menu" class="w-full h-full block object-cover">
    </button>
</header>
@include('Accounts.Components.AsideMenu')
