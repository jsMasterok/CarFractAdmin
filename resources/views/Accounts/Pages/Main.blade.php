@extends('Accounts.index')
@section('content')
    <section class="flex flex-col gap-3 w-full h-full flex-1 font-Montserat">
        {{-- Wallet --}}
        <div class="w-full bg-base-white rounded-lg shadow-md p-4 flex flex-col gap-5">
            <h2 class="text-sm font-bold font-Montserat text-text-dark uppercase">
                WALLET : <b>32 246.00€</b>
            </h2>
            <div class="w-full flex items-center justify-between gap-1">
                <div class="w-full flex items-center gap-2">
                    <span class="text-xs text-primary-dark font-bold">230 881.00€</span>
                    <img src="{{ asset('Assets/svg/ArrowUp.svg') }}" alt="Up">
                </div>
                <div class="w-full flex items-center gap-2">
                    <span class="text-xs text-blue-dark font-bold">230 881.00€</span>
                    <img src="{{ asset('Assets/svg/ArrowDown.svg') }}" alt="Down">
                </div>
                <a href="#"
                    class="w-full text-center px-4 py-2 bg-primary-dark rounded shadow-sm font-Montserat text-xs font-bold text-base-white">
                    Replenish
                </a>
            </div>
        </div>
        {{-- SHARES --}}
        <div class="w-full bg-base-white rounded-lg shadow-md p-4 flex flex-col gap-3">
            <h2 class="text-sm font-bold font-Montserat text-text-dark uppercase">
                Shares
            </h2>
            <div class="w-full grid grid-cols-2">
                <div class="w-full h-fit p-2 flex items-center justify-start">
                    {{-- Placeholder --}}
                    <img src="{{ asset('Assets/charts-placeholder/SharePlaceholderChart.svg') }}" alt="Placeholder"
                        class="block object-contain  w-28 h-28">
                    {{--  --}}
                </div>
                <div class="w-full flex items-start justify-center flex-col gap-3">
                    <label class="flex items-center gap-1 text-xs text-text-dark font-bold uppercase">
                        <input type="checkbox" class="form-checkbox w-4 h-4 rounded-sm text-primary-dark" checked>
                        <span>Owned</span>
                    </label>
                    <label class="flex items-center gap-1 text-xs text-text-dark font-bold uppercase">
                        <input type="checkbox" class="form-checkbox w-4 h-4 rounded-sm text-blue-dark" checked>
                        <span>In sale</span>
                    </label>
                </div>
            </div>
        </div>
        {{-- OCCUPANCY --}}
        <div class="w-full bg-base-white rounded-lg shadow-md p-4 flex flex-col gap-3">
            <h2 class="text-sm font-bold font-Montserat text-text-dark uppercase">
                Occupancy
            </h2>
            <div class="w-full grid grid-cols-2">
                <div class="w-full h-full p-2 flex items-center justify-start">
                    {{-- Placeholder --}}
                    <img src="{{ asset('Assets/charts-placeholder/OccupancyPlaceholderChart.svg') }}" alt="Placeholder"
                        class="block object-contain  w-28 h-28">
                    {{--  --}}
                </div>
                <div class="w-full flex flex-col gap-2">
                    <div class="flex items-center justify-between text-xs font-bold text-text-dark uppercase">
                        <span class="px-2 py-1 col-span-2 bg-green-medium rounded text-green-dark">
                            In Move
                        </span>
                        <b class="col-span-1">21</b>
                    </div>
                    <div class="flex items-center justify-between text-xs font-bold text-text-dark uppercase">
                        <span class="px-2 py-1 col-span-2 bg-line-light rounded text-text-medium">
                            In Parking
                        </span>
                        <b>16</b>
                    </div>
                    <div class="flex items-center justify-between text-xs font-bold text-text-dark uppercase">
                        <span class="px-2 py-1 bg-yellow-light rounded text-yellow-dark">
                            Service
                        </span>
                        <b>2</b>
                    </div>
                    <div class="flex items-center justify-between text-xs font-bold text-text-dark uppercase">
                        <span class="px-2 py-1 bg-red-medium rounded text-red-dark">
                            Accident
                        </span>
                        <b>2</b>
                    </div>
                    <div class="flex items-center justify-between text-xs font-bold text-text-dark uppercase">
                        <span class="px-2 py-1 bg-primary-medium rounded text-primary-dark">
                            Sales
                        </span>
                        <b>1</b>
                    </div>
                </div>
            </div>
        </div>
        {{-- INCOME AND EPXENSES --}}
        <div class="w-full bg-base-white rounded-lg shadow-md p-4 flex flex-col gap-3">
            <div class="flex items-center justify-between">
                <h2 class="text-sm font-bold font-Montserat text-text-dark uppercase">
                    Income and expenses:
                </h2>
                <select class="form-select rounded border-2 border-primary-dark text-xs font-bold text-primary-dark">
                    <option value="Year">Year</option>
                    <option value="Month">Month</option>
                    <option value="Day">Day</option>
                </select>
            </div>
            <img src="{{ asset('Assets/charts-placeholder/IncomePlaceholderChart.svg') }}" alt="Placeholder"
                class="block object-contain w-full">
            <div class="flex items-center justify-center gap-3">
                <label class="flex items-center gap-1 text-xs text-text-dark font-bold uppercase">
                    <input type="checkbox" class="form-checkbox w-4 h-4 rounded-sm text-green-dark" checked>
                    <span>Income</span>
                </label>
                <label class="flex items-center gap-1 text-xs text-text-dark font-bold uppercase">
                    <input type="checkbox" class="form-checkbox w-4 h-4 rounded-sm text-blue-dark" checked>
                    <span>Expenses</span>
                </label>
            </div>
        </div>
        {{-- RESERVATION --}}
        <div class="w-full bg-base-white rounded-lg shadow-md p-4 flex flex-col gap-3">
            <div class="flex items-center justify-between">
                <h2 class="text-sm font-bold font-Montserat text-text-dark uppercase">
                    Reservation: <b class="text-primary-dark">1786</b>
                </h2>
                <select class="form-select rounded border-2 border-primary-dark text-xs font-bold text-primary-dark">
                    <option value="Year" class="flex items-center gap-2 w-full">Last</option>
                    <option value="Month">New</option>
                </select>
            </div>
            <ul class="flex flex-col gap-5">
                <li class="flex flex-col gap-1">
                    <div class="flex items-center justify-between">
                        <span class="text-text-dark text-sm font-bold uppercase  truncate w-2/3">
                            Audi A8
                        </span>
                        <div class="flex items-center gap-1">
                            <span class="text-primary-dark text-sm font-bold uppercase">
                                CB 2601 AA
                            </span>
                            <div class="w-5 h-3 relative flex items-center overflow-hidden rounded-sm">
                                <img src="{{ asset('Assets/Flags/Flag_of_Bulgaria.svg') }}" alt="Flag"
                                    class="w-full h-full block object-cover">
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center w-fit gap-2">
                        <img src="{{ asset('Assets/svg/DateRange.svg') }}" alt="Date" class="block w-3 h-3">
                        <span class="font-semibold text-text-dark text-xs">
                            07.10.2022 - 11.10.2022
                        </span>
                        <span class="font-bold text-green-dark text-xs">
                            +122.00€
                        </span>
                    </div>
                    <div class="flex items-center gap-2">
                        <div class="overflow-hidden w-full h-1 bg-line-light rounded-full relative">
                            <span class="h-full absolute top-o left-0 bg-primary-dark" style="width: 38%"></span>
                        </div>
                        <div class="w-fit flex items-center gap-1 text-sm font-bold">
                            <span class="text-primary-dark">
                                38%
                            </span>
                            <span class="text-text-dark">/</span>
                            <span class="text-text-dark">356</span>
                        </div>
                    </div>
                </li>
                <li class="flex flex-col gap-1">
                    <div class="flex items-center justify-between">
                        <span class="text-text-dark text-sm font-bold uppercase truncate w-2/3">
                            Mercedes-Benz CLS AMG 53 AMG III
                        </span>
                        <div class="flex items-center gap-1">
                            <span class="text-primary-dark text-sm font-bold uppercase">
                                CB 7777 AA
                            </span>
                            <div class="w-5 h-3 relative flex items-center overflow-hidden rounded-sm">
                                <img src="{{ asset('Assets/Flags/Flag_of_Bulgaria.svg') }}" alt="Flag"
                                    class="w-full h-full block object-cover">
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center w-fit gap-2">
                        <img src="{{ asset('Assets/svg/DateRange.svg') }}" alt="Date" class="block w-3 h-3">
                        <span class="font-semibold text-text-dark text-xs">
                            07.10.2022 - 11.10.2022
                        </span>
                        <span class="font-bold text-green-dark text-xs">
                            +122.00€
                        </span>
                    </div>
                    <div class="flex items-center gap-2">
                        <div class="overflow-hidden w-full h-1 bg-line-light rounded-full relative">
                            <span class="h-full absolute top-o left-0 bg-primary-dark" style="width: 77%"></span>
                        </div>
                        <div class="w-fit flex items-center gap-1 text-sm font-bold">
                            <span class="text-primary-dark">
                                77%
                            </span>
                            <span class="text-text-dark">/</span>
                            <span class="text-text-dark">356</span>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        {{-- shares in sale in owned car --}}
        <div class="w-full bg-base-white rounded-lg shadow-md p-4 flex flex-col gap-3">
            <h2 class="text-sm font-bold font-Montserat text-text-dark uppercase">
                Shares in sale in owned car
            </h2>
            <ul class="flex flex-col gap-3 font-Montserat">
                <li class="flex flex-col gap-3 border-b border-b-line-light pb-3">
                    <div class="flex items-center gap-2">
                        <div class="w-20 h-12 overflow-hidden relative rounded-lg flex items-center justify-center">
                            <img src="{{ asset('Assets/img/Audi.png') }}" alt="Car"
                                class="w-full h-full block object-cover">
                        </div>
                        <div class="w-fit flex flex-col gap-1">
                            <div class="flex items-center gap-1 text-xs font-bold text-text-dark">
                                <span class="truncate">
                                    Audi A8
                                </span>
                                <span>
                                    2020
                                </span>
                            </div>
                            <div class="flex items-center gap-1 text-xs font-bold text-primary-dark">
                                <span>
                                    CB 0001 AA
                                </span>
                                <div class="w-5 h-3 relative flex items-center overflow-hidden rounded-sm">
                                    <img src="{{ asset('Assets/Flags/Flag_of_Bulgaria.svg') }}" alt="Flag"
                                        class="w-full h-full block object-cover">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center gap-2 text-xs font-bold">
                        <span class="uppercase text-text-dark">shares in sale: </span>
                        <div class="flex items-center gap-1">
                            <span class="text-blue-dark">42</span>
                            <span class="text-text-dark">/</span>
                            <span class="text-text-dark">60</span>
                        </div>
                        <b class="text-green-dark">450.00€</b>
                    </div>
                </li>
                <li class="flex flex-col gap-3 border-b border-b-line-light pb-3">
                    <div class="flex items-center gap-2">
                        <div class="w-20 h-12 overflow-hidden relative rounded-lg flex items-center justify-center">
                            <img src="{{ asset('Assets/img/Audi.png') }}" alt="Car"
                                class="w-full h-full block object-cover">
                        </div>
                        <div class="w-fit flex flex-col gap-1">
                            <div class="flex items-center gap-1 text-xs font-bold text-text-dark">
                                <span class="truncate">
                                    Audi A8
                                </span>
                                <span>
                                    2020
                                </span>
                            </div>
                            <div class="flex items-center gap-1 text-xs font-bold text-primary-dark">
                                <span>
                                    CB 0001 AA
                                </span>
                                <div class="w-5 h-3 relative flex items-center overflow-hidden rounded-sm">
                                    <img src="{{ asset('Assets/Flags/Flag_of_Bulgaria.svg') }}" alt="Flag"
                                        class="w-full h-full block object-cover">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center gap-2 text-xs font-bold">
                        <span class="uppercase text-text-dark">shares in sale: </span>
                        <div class="flex items-center gap-1">
                            <span class="text-blue-dark">42</span>
                            <span class="text-text-dark">/</span>
                            <span class="text-text-dark">60</span>
                        </div>
                        <b class="text-green-dark">450.00€</b>
                    </div>
                </li>
            </ul>
        </div>
    </section>
@endsection
