<x-auth-portal-layout>
    <x-slot name="title">Sign In | Camarines Sur Level-Up Portal</x-slot>
    <x-slot name="portalTitle">Sign In</x-slot>
    <x-slot name="portalSubtitle">Enter your credentials to access your Level-Up account</x-slot>

    <!-- Session Status -->
    <x-auth-session-status class="mb-3" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}" class="space-y-3.5">
        @csrf

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
                       autofocus 
                       autocomplete="username" 
                       class="portal-input">
            </div>
            <x-input-error :messages="$errors->get('email')" class="mt-1 text-xs" />
        </div>

        <!-- Password -->
        <div>
            <div class="flex justify-between items-center mb-1">
                <label for="password" class="block text-[11px] font-bold uppercase tracking-wider text-slate-700">
                    Password
                </label>
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="text-[11px] font-semibold text-blue-600 hover:text-blue-800 transition">
                        Forgot Password?
                    </a>
                @endif
            </div>
            <div class="portal-input-group">
                <span class="portal-input-icon"><i class="fa-solid fa-lock"></i></span>
                <input id="password" 
                       name="password" 
                       type="password" 
                       placeholder="••••••••" 
                       required 
                       autocomplete="current-password" 
                       class="portal-input">
                <button type="button" class="portal-eye-btn" data-toggle="password" data-target="password" title="Show or hide password">
                    <i class="fa-solid fa-eye"></i>
                </button>
            </div>
            <x-input-error :messages="$errors->get('password')" class="mt-1 text-xs" />
        </div>

        <!-- Remember Me Checkbox -->
        <div class="flex items-center justify-between">
            <label for="remember_me" class="inline-flex items-center cursor-pointer select-none">
                <input id="remember_me" 
                       type="checkbox" 
                       name="remember" 
                       class="w-3.5 h-3.5 rounded border-slate-300 text-blue-600 focus:ring-blue-500 focus:ring-offset-0 transition">
                <span class="ms-2 text-xs font-medium text-slate-600">Keep me logged in</span>
            </label>
        </div>

        <!-- Sign In Action Button -->
        <div class="pt-1">
            <button type="submit" class="portal-btn-primary" data-loading-text="Signing in...">
                <i class="fa-solid fa-arrow-right-to-bracket text-xs"></i>
                <span>Sign In</span>
            </button>
        </div>
    </form>

    <!-- Navigation Switcher to Register -->
    <div class="mt-4 pt-3 border-t border-slate-100 text-center">
        <p class="text-xs text-slate-500">
            Don't have an account?
            <a href="{{ route('register') }}" class="font-bold text-blue-700 hover:text-blue-900 underline ml-1 transition">
                Register New Account &rarr;
            </a>
        </p>
    </div>
</x-auth-portal-layout>
