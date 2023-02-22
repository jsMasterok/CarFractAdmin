@extends('Auth.index')
@section('AuthComponent')
    <label class="w-full flex flex-col gap-2">
        <span class="font-bold text-primary-dark text-sm uppercase">
            First Name
        </span>
        <input type="text" required
            class="form-input bg-base-white border-2 border-line-light rounded-lg focus:border-primary-dark focus:ring-0 text-sm font-semibold text-text-dark placeholder:text-line-dark"
            placeholder="First Name">
    </label>
    <label class="w-full flex flex-col gap-2">
        <span class="font-bold text-primary-dark text-sm uppercase">
            Last Name
        </span>
        <input type="text" required
            class="form-input bg-base-white border-2 border-line-light rounded-lg focus:border-primary-dark focus:ring-0 text-sm font-semibold text-text-dark placeholder:text-line-dark"
            placeholder="Last Name">
    </label>
    <label class="w-full flex flex-col gap-2">
        <span class="font-bold text-primary-dark text-sm uppercase">
            Email
        </span>
        <input type="email" required
            class="form-input bg-base-white border-2 border-line-light rounded-lg focus:border-primary-dark focus:ring-0 text-sm font-semibold text-text-dark placeholder:text-line-dark"
            placeholder="Last Name">
    </label>
    <label class="w-full flex flex-col gap-2">
        <span class="font-bold text-primary-dark text-sm uppercase">
            Password
        </span>
        <input type="password" required
            class="form-input bg-base-white border-2 border-line-light rounded-lg focus:border-primary-dark focus:ring-0 text-sm font-semibold text-text-dark placeholder:text-line-dark"
            placeholder="Last Name">
    </label>
    <label class="w-full flex flex-col gap-2">
        <span class="font-bold text-primary-dark text-sm uppercase">
            Repeat Password
        </span>
        <input type="password" required
            class="form-input bg-base-white border-2 border-line-light rounded-lg focus:border-primary-dark focus:ring-0 text-sm font-semibold text-text-dark placeholder:text-line-dark"
            placeholder="Last Name">
    </label>
    <button type="submit"
        class="text-center w-fit h-fit rounded bg-primary-dark border border-1 border-primary-dark px-6 py-3 mx-auto text-sm font-bold text-base-white shadow-md hover:bg-base-white hover:text-primary-dark transition-colors">
        Sign Up
    </button>
    <p class="text-sm font-semibold text-text-dark">
        By signing up, you’re agree to our <a href="#" class="text-primary-dark">Terms & Conditions</a> and <a
            href="#" class="text-primary-dark">Privacy
            Policy</a>.
    </p>
@endsection
