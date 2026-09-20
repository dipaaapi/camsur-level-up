<x-auth-portal-layout>
    <x-slot name="title">Set New Password | Camarines Sur Level-Up Portal</x-slot>
    <x-slot name="portalTitle">Create New Password</x-slot>
    <x-slot name="portalSubtitle">Enter your email and define a new secure password</x-slot>

    <form method="POST" action="{{ route('password.store') }}" class="space-y-4">
        @csrf

        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <!-- Email Address -->
        <div>
            <label for="email" class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1.5">
                Email Address
            </label>
            <div class="portal-input-group">
                <span class="portal-input-icon"><i class="fa-solid fa-envelope"></i></span>
                <input id="email" 
                       name="email" 
                       type="email" 
                       value="{{ old('email', $request->email) }}" 
                       required 
                       autofocus 
                       autocomplete="username" 
                       class="portal-input">
            </div>
            <x-input-error :messages="$errors->get('email')" class="mt-1.5" />
        </div>

        <!-- Password -->
        <div>
            <label for="password" class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1.5">
                New Password
            </label>
            <div class="portal-input-group">
                <span class="portal-input-icon"><i class="fa-solid fa-lock"></i></span>
                <input id="password" 
                       name="password" 
                       type="password" 
                       placeholder="Minimum 8 characters" 
                       required 
                       autocomplete="new-password" 
                       class="portal-input">
                <button type="button" class="portal-eye-btn" data-toggle="password" data-target="password" title="Show or hide password">
                    <i class="fa-solid fa-eye"></i>
                </button>
            </div>
            <x-input-error :messages="$errors->get('password')" class="mt-1.5" />
        </div>

        <!-- Confirm Password -->
        <div>
            <label for="password_confirmation" class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1.5">
                Confirm New Password
            </label>
            <div class="portal-input-group">
                <span class="portal-input-icon"><i class="fa-solid fa-shield-check"></i></span>
                <input id="password_confirmation" 
                       name="password_confirmation" 
                       type="password" 
                       placeholder="Repeat your new password" 
                       required 
                       autocomplete="new-password" 
                       class="portal-input">
                <button type="button" class="portal-eye-btn" data-toggle="password" data-target="password_confirmation" title="Show or hide password">
                    <i class="fa-solid fa-eye"></i>
                </button>
            </div>
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-1.5" />
        </div>

        <!-- Submit Button -->
        <div class="pt-2">
            <button type="submit" class="portal-btn-primary" data-loading-text="Updating Password...">
                <i class="fa-solid fa-key text-sm"></i>
                <span>Reset Password</span>
            </button>
        </div>
    </form>
</x-auth-portal-layout>
