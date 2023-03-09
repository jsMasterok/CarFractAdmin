<aside id="garageFilter"
    class="fixed top-0 left-0 -left-full overflow-auto w-52 flex flex-col  p-8 pt-20 h-full z-30 bg-base-white font-Montserat transition-all ease-linear duration-150  shadow-2xl">
    <button id="closeGarageFilter"
        class="w-6 absolute h-6 top-4 right-4  overflow-hidden p-1 hover:bg-line-dark bg-opacity-50 transition-colors">
        <img src="{{ asset('Assets/svg/Clear.svg') }}" alt="Close" class="w-full h-full block object-cover">
    </button>
    <h3 class="text-lg text-text-dark font-bold">
        Filter
    </h3>
    <form class="flex flex-col gap-4 mt-6">
        @csrf
        {{-- Location --}}
        <div class="flex flex-col gap-4 pb-4 border-b border-b-line-light">
            <h4 class="text-xs text-text-medium font-bold uppercase">Location</h4>
            <label class="flex items-center gap-2 text-xs font-bold text-text-dark">
                <input type="checkbox" class=" form-checkbox w-4 h-4 rounded-sm text-primary-dark">
                <span>Bulgaria</span>
            </label>
            <label class="flex items-center gap-2 text-xs font-bold text-text-dark">
                <input type="checkbox" class=" form-checkbox w-4 h-4 rounded-sm text-primary-dark">
                <span>Greece</span>
            </label>
        </div>
        {{-- Status --}}
        <div class="flex flex-col gap-4 pb-4 border-b border-b-line-light">
            <h4 class="text-xs text-text-medium font-bold uppercase">Status</h4>
            <label class="flex items-center gap-2 text-xs font-bold text-text-dark">
                <input type="checkbox" class=" form-checkbox w-4 h-4 rounded-sm text-primary-dark">
                <span>in move</span>
            </label>
            <label class="flex items-center gap-2 text-xs font-bold text-text-dark">
                <input type="checkbox" class=" form-checkbox w-4 h-4 rounded-sm text-primary-dark">
                <span>in parking</span>
            </label>
            <label class="flex items-center gap-2 text-xs font-bold text-text-dark">
                <input type="checkbox" class=" form-checkbox w-4 h-4 rounded-sm text-primary-dark">
                <span>service</span>
            </label>
            <label class="flex items-center gap-2 text-xs font-bold text-text-dark">
                <input type="checkbox" class=" form-checkbox w-4 h-4 rounded-sm text-primary-dark">
                <span>accident</span>
            </label>
            <label class="flex items-center gap-2 text-xs font-bold text-text-dark">
                <input type="checkbox" class=" form-checkbox w-4 h-4 rounded-sm text-primary-dark">
                <span>sales</span>
            </label>
        </div>
        {{-- Income --}}
        <div class="flex flex-col gap-4 pb-4 border-b border-b-line-light">
            <h4 class="text-xs text-text-medium font-bold uppercase">Income</h4>
            <label class="flex items-center gap-2 text-xs font-bold text-text-dark">
                <input type="radio" name="income" class=" form-radio rounded-full w-4 h-4 text-primary-dark">
                <span>ascending</span>
            </label>
            <label class="flex items-center gap-2 text-xs font-bold text-text-dark">
                <input type="radio" name="income" class=" form-radio rounded-full w-4 h-4 text-primary-dark">
                <span>descending</span>
            </label>
        </div>
        <label class="flex items-center gap-2 text-xs font-bold text-text-dark">
            <input type="checkbox" class=" form-checkbox w-4 h-4 rounded-sm text-primary-dark">
            <span>reservation</span>
        </label>
        <label class="flex items-center gap-2 text-xs font-bold text-text-dark">
            <input type="checkbox" class=" form-checkbox w-4 h-4 rounded-sm text-primary-dark">
            <span>per month</span>
        </label>
        <button type="submit"
            class="w-fit h-fit px-6 py-3 bg-primary-dark text-base-white text-sm font-bold shadow-md rounded mt-10">
            Apply
        </button>
    </form>
</aside>
