@extends('Accounts.index')
@section('content')
    <section class="flex flex-col flex-1 font-Montserat">
        @include('Accounts.components.GarageFilter')
        <div class="flex items-center justify-between px-4">
            <h2 class="text-2xl font-bold text text-text-dark">
                Garage
            </h2>
            <span class="text-xs font-semibold text-primary-dark">
                31 oct 2022
            </span>
        </div>
        {{--  --}}
        <div class=" flex flex-col  gap-1 w-full h-full py-6 bg-base-white rounded-t-lg shadow-md mt-2 px-4">
            <div class="flex items-center relative border-b border-b-line-dark">
                <a href="#"
                    class="w-32 py-3 text-center transition-all duration-100  border-b border-b-primary-dark text-primary-dark text-sm font-bold hover:text-primary-dark hover:border-b hover:border-b-primary-dark">
                    Cars
                </a>
                <a href="#"
                    class="w-32 py-3 text-center transition-all duration-100  border-b-0 text-text-medium text-sm font-bold hover:text-primary-dark hover:border-b hover:border-b-primary-dark">
                    Shares
                </a>
                <button class="ml-auto w-8 h-8 p-1 rounded  hover:bg-line-dark bg-opacity-50 transition-colors"
                    id="openGarageFilter">
                    <img src="{{ asset('Assets/svg/Tune.svg') }}" alt="Filter" class="w-full h-full block object-cover">
                </button>
            </div>
        </div>
        {{-- @include('Accounts.components.GarageCarsList') --}}
        @include('Accounts.components.GarageShareList')
    </section>
@endsection
