<x-auth-portal-layout>
    <x-slot name="title">Create Account | Camarines Sur Level-Up Portal</x-slot>
    <x-slot name="portalTitle">Register Account</x-slot>
    <x-slot name="portalSubtitle">Create your citizen account for Level-Up services</x-slot>

    <form method="POST" action="{{ route('register') }}" class="space-y-3">
        @csrf

        <!-- Full Name -->
        <div>
            <label for="name" class="block text-[11px] font-bold uppercase tracking-wider text-slate-700 mb-1">
                Full Name
            </label>
            <div class="portal-input-group">
                <span class="portal-input-icon"><i class="fa-solid fa-user"></i></span>
                <input id="name" 
                       name="name" 
                       type="text" 
                       value="{{ old('name') }}" 
                       placeholder="Juan Dela Cruz" 
                       required 
                       autofocus 
                       autocomplete="name" 
                       class="portal-input">
            </div>
            <x-input-error :messages="$errors->get('name')" class="mt-1 text-xs" />
        </div>

        <!-- Email Address -->
        <div>
            <label for="email" class="block text-[11px] font-bold uppercase tracking-wider text-slate-700 mb-1">
                Email Address
            </label>
            <div class="portal-input-group">
                <span class="portal-input-icon"><i class="fa-solid fa-envelope"></i></span>
                <input id="email" 
                       name="email" 
                       type="email" 
                       value="{{ old('email') }}" 
                       placeholder="juan.delacruz@example.com" 
                       required 
                       autocomplete="username" 
                       class="portal-input">
            </div>
            <x-input-error :messages="$errors->get('email')" class="mt-1 text-xs" />
        </div>

        <!-- 2-Column Password Fields to save vertical height -->
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
            <!-- Password -->
            <div>
                <label for="password" class="block text-[11px] font-bold uppercase tracking-wider text-slate-700 mb-1">
                    Password
                </label>
                <div class="portal-input-group">
                    <span class="portal-input-icon"><i class="fa-solid fa-lock"></i></span>
                    <input id="password" 
                           name="password" 
                           type="password" 
                           placeholder="Min. 8 chars" 
                           required 
                           autocomplete="new-password" 
                           class="portal-input">
                    <button type="button" class="portal-eye-btn" data-toggle="password" data-target="password" title="Show or hide password">
                        <i class="fa-solid fa-eye"></i>
                    </button>
                </div>
                <x-input-error :messages="$errors->get('password')" class="mt-1 text-xs" />
            </div>

            <!-- Confirm Password -->
            <div>
                <label for="password_confirmation" class="block text-[11px] font-bold uppercase tracking-wider text-slate-700 mb-1">
                    Confirm Password
                </label>
                <div class="portal-input-group">
                    <span class="portal-input-icon"><i class="fa-solid fa-shield-check"></i></span>
                    <input id="password_confirmation" 
                           name="password_confirmation" 
                           type="password" 
                           placeholder="Repeat password" 
                           required 
                           autocomplete="new-password" 
                           class="portal-input">
                    <button type="button" class="portal-eye-btn" data-toggle="password" data-target="password_confirmation" title="Show or hide password">
                        <i class="fa-solid fa-eye"></i>
                    </button>
                </div>
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-1 text-xs" />
            </div>
        </div>

        <!-- Submit Button -->
        <div class="pt-1.5">
            <button type="submit" class="portal-btn-primary" data-loading-text="Creating Account...">
                <i class="fa-solid fa-user-plus text-xs"></i>
                <span>Complete Registration</span>
            </button>
        </div>
    </form>

    <!-- Navigation Switcher to Login -->
    <div class="mt-4 pt-3 border-t border-slate-100 text-center">
        <p class="text-xs text-slate-500">
            Already have an account?
            <a href="{{ route('login') }}" class="font-bold text-blue-700 hover:text-blue-900 underline ml-1 transition">
                Sign In Here &rarr;
            </a>
        </p>
    </div>
</x-auth-portal-layout>
