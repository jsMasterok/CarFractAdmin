<aside
    class="fixed overflow-auto top-0 right-0 -right-full w-full h-full max-w-lg bg-base-white z-20 flex flex-col p-4 gap-2 transition-all ease-linear duration-150 shadow-2xl"
    id="burgerMenu">
    <button id="closeBurger"
        class="w-6 absolute h-6 top-4 right-4  overflow-hidden p-1 hover:bg-line-dark bg-opacity-50 transition-colors">
        <img src="{{ asset('Assets/svg/Clear.svg') }}" alt="Close" class="w-full h-full block object-cover">
    </button>
    {{-- UserInfo --}}
    <div class="w-full flex items-center justify-between bg-primary-light rounded-lg p-4 mt-8">
        <div class="flex items-center gap-1">
            <div class="relative w-8 h-8 rounded-full flex items-center justify-center">
                <img src="{{ asset('Assets/svg/AvaPlaceholder.svg') }}" alt="Avatar"
                    class="w-full h-full block object-cover rounded-full">
                {{-- indicator --}}
                <span class="w-2 h-2 rounded-full bg-green-dark absolute bottom-0 right-0">
                </span>
                {{--  --}}
            </div>
            <h3 class="font-Montserat text-text-dark text-xs font-bold">
                User Name
            </h3>
        </div>
        <span class="w-1 h-full bg-base-white">
        </span>
        <div class="flex items-center gap-1">
            <div class="flex items-center justify-start gap-2">
                <img src="{{ asset('Assets/svg/Wallet.svg') }}" alt="Wallet" class="block w-4 h-4">
                <span class="font-Montserat text-primary-dark text-xs font-bold uppercase">Wallet</span>
            </div>
            <span class="font-Montserat text-text-dark text-xs font-bold">
                32 246.00€
            </span>
        </div>
    </div>
    {{-- Money Stats --}}
    <div class="w-full flex items-center justify-between bg-primary-light rounded-lg p-4">
        <div class="flex flex-col gap-2">
            <div class="flex items-center gap-2">
                <img src="{{ asset('Assets/svg/Chart.svg') }}" alt="Wallet" class="block w-4 h-4">
                <span class="font-Montserat text-primary-dark text-sm font-bold uppercase">Month</span>
            </div>
            <div class="flex items-center gap-1 font-Montserat text-xs font-bold text-text-dark">
                <span class="text-green-dark">
                    + 12 246.00€
                </span>
                <span>/</span>
                <span class="text-blue-dark">
                    - 2 246.00€
                </span>
            </div>
        </div>
        <span class="w-1 h-full bg-base-white">
        </span>
        <div class="flex flex-col gap-2">
            <div class="flex items-center gap-2">
                <img src="{{ asset('Assets/svg/ChartPie.svg') }}" alt="Wallet" class="block w-4 h-4">
                <span class="font-Montserat text-primary-dark text-sm font-bold uppercase">Balance</span>
            </div>
            <div class="flex items-center gap-1 font-Montserat font-bold text-text-dark text-xs">
                <span class="">
                    + 12 246.00€
                </span>
                <span>/</span>
                <span class="">
                    - 2 246.00€
                </span>
            </div>
        </div>
    </div>
    {{--  --}}
    {{-- Routes List --}}
    <ul class="flex flex-col gap-y-3 text-sm font-bold font-Montserat text-text-dark">
        <li>
            <a href="/"
                class="w-full relative flex items-center px-6 py-3 gap-2 hover:bg-primary-light transition-colors cursor-pointer hover:text-primary-dark after:w-1 after:h-full hover:after:bg-primary-dark hover:after:right-0 hover:after:absolute hover:after:rounded-tl-lg hover:after:rounded-bl-lg">
                <img src="{{ asset('Assets/svg/DashBoard.svg') }}" alt="DashBoard" class="block w-4 h-4">
                Dashboard
            </a>
        </li>
        <li>
            <a href="/Garage"
                class="w-full relative flex items-center px-6 py-3 gap-2 hover:bg-primary-light transition-colors cursor-pointer hover:text-primary-dark after:w-1 after:h-full hover:after:bg-primary-dark hover:after:right-0 hover:after:absolute hover:after:rounded-tl-lg hover:after:rounded-bl-lg">
                <img src="{{ asset('Assets/svg/Garage.svg') }}" alt="DashBoard" class="block w-4 h-4">
                Garage
            </a>
        </li>
        <li>
            <a href="#"
                class="w-full relative flex items-center px-6 py-3 gap-2 hover:bg-primary-light transition-colors cursor-pointer hover:text-primary-dark after:w-1 after:h-full hover:after:bg-primary-dark hover:after:right-0 hover:after:absolute hover:after:rounded-tl-lg hover:after:rounded-bl-lg">
                <img src="{{ asset('Assets/svg/Market.svg') }}" alt="DashBoard" class="block w-4 h-4">
                Market
            </a>
        </li>
        <li>
            <a href="#"
                class="w-full relative flex items-center px-6 py-3 gap-2 hover:bg-primary-light transition-colors cursor-pointer hover:text-primary-dark after:w-1 after:h-full hover:after:bg-primary-dark hover:after:right-0 hover:after:absolute hover:after:rounded-tl-lg hover:after:rounded-bl-lg">
                <img src="{{ asset('Assets/svg/GreyPie.svg') }}" alt="DashBoard" class="block w-4 h-4">
                Finance
            </a>
        </li>
        <li>
            <a href="#"
                class="w-full relative flex items-center px-6 py-3 gap-2 hover:bg-primary-light transition-colors cursor-pointer hover:text-primary-dark after:w-1 after:h-full hover:after:bg-primary-dark hover:after:right-0 hover:after:absolute hover:after:rounded-tl-lg hover:after:rounded-bl-lg">
                <img src="{{ asset('Assets/svg/GreyWallet.svg') }}" alt="DashBoard" class="block w-4 h-4">
                Wallet
            </a>
        </li>
        <li>
            <a href="#"
                class="w-full relative flex items-center px-6 py-3 gap-2 hover:bg-primary-light transition-colors cursor-pointer hover:text-primary-dark after:w-1 after:h-full hover:after:bg-primary-dark hover:after:right-0 hover:after:absolute hover:after:rounded-tl-lg hover:after:rounded-bl-lg">
                <img src="{{ asset('Assets/svg/News.svg') }}" alt="DashBoard" class="block w-4 h-4">
                News
            </a>
        </li>
        <span class="h-px w-full bg-line-light"></span>
        <li>
            <a href="#"
                class="w-full relative flex items-center px-6 py-3 gap-2 hover:bg-primary-light transition-colors cursor-pointer hover:text-primary-dark after:w-1 after:h-full hover:after:bg-primary-dark hover:after:right-0 hover:after:absolute hover:after:rounded-tl-lg hover:after:rounded-bl-lg">
                <img src="{{ asset('Assets/svg/Settings.svg') }}" alt="DashBoard" class="block w-4 h-4">
                Settings
            </a>
        </li>
        <li>
            <a href="#"
                class="w-full relative flex items-center px-6 py-3 gap-2 hover:bg-primary-light transition-colors cursor-pointer hover:text-primary-dark after:w-1 after:h-full hover:after:bg-primary-dark hover:after:right-0 hover:after:absolute hover:after:rounded-tl-lg hover:after:rounded-bl-lg">
                <img src="{{ asset('Assets/svg/Language.svg') }}" alt="DashBoard" class="block w-4 h-4">
                English
            </a>
        </li>
        <li>
            <a href="#"
                class="w-full relative flex items-center px-6 py-3 gap-2 hover:bg-primary-light transition-colors cursor-pointer hover:text-primary-dark after:w-1 after:h-full hover:after:bg-primary-dark hover:after:right-0 hover:after:absolute hover:after:rounded-tl-lg hover:after:rounded-bl-lg">
                <img src="{{ asset('Assets/svg/Logout.svg') }}" alt="DashBoard" class="block w-4 h-4">
                Log out
            </a>
        </li>
    </ul>
    {{--  --}}
</aside>
