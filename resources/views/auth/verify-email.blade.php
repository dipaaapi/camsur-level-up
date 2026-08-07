<x-guest-layout>
    <div class="w-full mb-8">
        <div class="bg-blue-950 border-b-4 border-amber-400 py-10">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-white">
                <h1 class="text-3xl sm:text-4xl font-bold">Verify Your Email</h1>
                <p class="mt-3 text-slate-200 max-w-3xl">A verification link has been sent to your email address. Click the link to finish setting up your account.</p>
            </div>
        </div>
    </div>

    <div class="mb-4 text-sm text-gray-600">
        {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
    </div>

    @if (session('status') == 'verification-link-sent')
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ __('A new verification link has been sent to the email address you provided during registration.') }}
        </div>
    @endif

    <div class="mt-4 flex items-center justify-between">
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf

            <div>
                <x-primary-button>
                    {{ __('Resend Verification Email') }}
                </x-primary-button>
            </div>
        </form>

        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                {{ __('Log Out') }}
            </button>
        </form>
    </div>
</x-guest-layout>
