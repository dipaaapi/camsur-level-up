<x-auth-portal-layout>
    <x-slot name="title">Reset Password | Camarines Sur Level-Up Portal</x-slot>
    <x-slot name="portalTitle">Account Recovery</x-slot>
    <x-slot name="portalSubtitle">Reset your password via verified email link</x-slot>

    <div class="mb-4 p-3 bg-blue-50/80 border border-blue-100 rounded-xl text-xs text-slate-600 leading-relaxed">
        <i class="fa-solid fa-circle-info text-blue-600 mr-1"></i>
        Enter your registered email below. We'll send you an official password reset link.
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-3" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}" class="space-y-3.5">
        @csrf

        <!-- Email Address -->
        <div>
            <label for="email" class="block text-[11px] font-bold uppercase tracking-wider text-slate-700 mb-1">
                Registered Email Address
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
                       class="portal-input">
            </div>
            <x-input-error :messages="$errors->get('email')" class="mt-1 text-xs" />
        </div>

        <!-- Submit Button -->
        <div class="pt-1.5">
            <button type="submit" class="portal-btn-primary" data-loading-text="Sending Link...">
                <i class="fa-solid fa-paper-plane text-xs"></i>
                <span>Email Password Reset Link</span>
            </button>
        </div>
    </form>

    <!-- Navigation Switcher to Login -->
    <div class="mt-4 pt-3 border-t border-slate-100 text-center">
        <p class="text-xs text-slate-500">
            Remembered your credentials?
            <a href="{{ route('login') }}" class="font-bold text-blue-700 hover:text-blue-900 underline ml-1 transition">
                Return to Sign In &rarr;
            </a>
        </p>
    </div>
</x-auth-portal-layout>
