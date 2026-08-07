<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="rounded-3xl border border-blue-100 bg-blue-50 p-6 shadow-sm">
                <h3 class="text-xl font-semibold text-slate-900">{{ __('Complete your profile') }}</h3>
                <p class="mt-2 text-sm text-slate-700">
                    {{ __('Update your profile information and email to make your account current. Your account becomes verified automatically after saving your profile details.') }}
                </p>

                <div class="mt-4 grid gap-4 sm:grid-cols-2">
                    <div class="rounded-3xl border border-slate-200 bg-white p-4 shadow-sm">
                        <p class="text-xs font-semibold uppercase text-slate-500">{{ __('Account') }}</p>
                        <p class="mt-2 text-lg font-semibold text-slate-900">{{ $user->name }}</p>
                        <p class="text-sm text-slate-600">{{ $user->email }}</p>
                    </div>
                    <div class="rounded-3xl border border-slate-200 bg-white p-4 shadow-sm">
                        <p class="text-xs font-semibold uppercase text-slate-500">{{ __('Verification status') }}</p>
                        <p class="mt-2 text-lg font-semibold {{ $user->hasVerifiedEmail() ? 'text-emerald-700' : 'text-amber-700' }}">
                            {{ $user->hasVerifiedEmail() ? __('Verified') : __('Pending verification') }}
                        </p>
                        <p class="mt-2 text-sm text-slate-600">
                            {{ $user->hasVerifiedEmail() ? __('Your profile is up to date and your account is active.') : __('Save your profile information to verify your account.') }}
                        </p>
                    </div>
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
