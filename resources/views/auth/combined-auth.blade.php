<x-guest-layout>
    <div class="min-h-[80vh] flex flex-col justify-center items-center bg-slate-50">
        <div class="w-full">
            <div class="bg-blue-950 border-b-4 border-amber-400 py-10">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-white">
                    <h1 class="text-3xl sm:text-4xl font-bold">Camarines Sur Level-Up Portal</h1>
                    <p class="mt-3 text-slate-200 max-w-3xl">Register, log in, or reset your password with a secure account. Complete your account details after login to keep your profile current and access the dashboard.</p>
                </div>
            </div>
        </div>

        <div class="w-full sm:max-w-md bg-white border border-slate-200 shadow-sm p-8 rounded-3xl">
            @auth
                <div class="space-y-4">
                    <x-auth-session-status class="mb-4" :status="session('status')" />

                    <div class="rounded-3xl border border-slate-200 bg-slate-50 p-6 text-sm text-gray-700">
                        {{ __('You are already signed in. Visit your dashboard or update your profile to continue.') }}
                    </div>

                    <div class="mt-4 flex items-center justify-end gap-3">
                        <a href="{{ route('dashboard') }}" class="inline-flex items-center justify-center rounded-xl border border-transparent bg-blue-600 px-4 py-2 text-sm font-semibold text-white shadow-sm hover:bg-blue-700">
                            {{ __('Go to Dashboard') }}
                        </a>

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                {{ __('Log Out') }}
                            </button>
                        </form>
                    </div>
                </div>
            @else
                @php $mode = $mode ?? request('mode', 'login'); @endphp

                <div class="max-w-md mx-auto">
                    <nav class="flex justify-between mb-4">
                        <a href="?mode=login" class="underline {{ $mode=='login' ? 'font-semibold' : '' }}">{{ __('Log in') }}</a>
                        <a href="?mode=register" class="underline {{ $mode=='register' ? 'font-semibold' : '' }}">{{ __('Register') }}</a>
                        <a href="?mode=forgot" class="underline {{ $mode=='forgot' ? 'font-semibold' : '' }}">{{ __('Forgot Password') }}</a>
                    </nav>

                    <div class="rounded-3xl border border-slate-200 bg-slate-50 p-4 mb-4 text-sm text-slate-700">
                        {{ __('Create an account to access local jobs, press releases, and portal services. After registering, return here to log in and complete your profile.') }}
                    </div>

                    @if (session('status'))
                        <x-auth-session-status class="mb-4" :status="session('status')" />
                    @endif

                    {{-- Login --}}
                    @if($mode === 'login')
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div>
                                <x-input-label for="email" :value="__('Email')" />
                                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>

                            <div class="mt-4">
                                <x-input-label for="password" :value="__('Password')" />

                                <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />

                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>

                            <div class="block mt-4">
                                <label for="remember_me" class="inline-flex items-center">
                                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                                    <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                </label>
                            </div>

                            <div class="flex items-center justify-end mt-4">
                                @if (Route::has('password.request'))
                                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="?mode=forgot">
                                        {{ __('Forgot your password?') }}
                                    </a>
                                @endif

                                <x-primary-button class="ms-3">
                                    {{ __('Log in') }}
                                </x-primary-button>
                            </div>
                        </form>
                    @endif

                    {{-- Register --}}
                    @if($mode === 'register')
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div>
                                <x-input-label for="name" :value="__('Name')" />
                                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                            </div>

                            <div class="mt-4">
                                <x-input-label for="email" :value="__('Email')" />
                                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>

                            <div class="mt-4">
                                <x-input-label for="password" :value="__('Password')" />
                                <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>

                            <div class="mt-4">
                                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                                <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />

                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                            </div>

                            <div class="flex items-center justify-end mt-4">
                                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="?mode=login">
                                    {{ __('Already registered?') }}
                                </a>

                                <x-primary-button class="ms-4">
                                    {{ __('Register') }}
                                </x-primary-button>
                            </div>
                        </form>
                    @endif

                    {{-- Forgot Password --}}
                    @if($mode === 'forgot')
                        <div class="mb-4 text-sm text-gray-600">
                            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                        </div>

                        <x-auth-session-status class="mb-4" :status="session('status')" />

                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf

                            <div>
                                <x-input-label for="email" :value="__('Email')" />
                                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>

                            <div class="flex items-center justify-end mt-4">
                                <x-primary-button>
                                    {{ __('Email Password Reset Link') }}
                                </x-primary-button>
                            </div>
                        </form>
                    @endif

                    {{-- Reset & Confirm are route-specific; if provided, show minimal forms --}}
                    @if($mode === 'reset')
                        <form method="POST" action="{{ route('password.store') }}">
                            @csrf
                            <input type="hidden" name="token" value="{{ $request->route('token') ?? '' }}">

                            <div>
                                <x-input-label for="email" :value="__('Email')" />
                                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email ?? '')" required autofocus autocomplete="username" />
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>

                            <div class="mt-4">
                                <x-input-label for="password" :value="__('Password')" />
                                <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>

                            <div class="mt-4">
                                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                                <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />

                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                            </div>

                            <div class="flex items-center justify-end mt-4">
                                <x-primary-button>
                                    {{ __('Reset Password') }}
                                </x-primary-button>
                            </div>
                        </form>
                    @endif

                    @if($mode === 'confirm')
                        <div class="mb-4 text-sm text-gray-600">
                            {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
                        </div>

                        <form method="POST" action="{{ route('password.confirm') }}">
                            @csrf

                            <div>
                                <x-input-label for="password" :value="__('Password')" />

                                <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />

                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>

                            <div class="flex justify-end mt-4">
                                <x-primary-button>
                                    {{ __('Confirm') }}
                                </x-primary-button>
                            </div>
                        </form>
                    @endif
                </div>
            @endauth
        </div>
    </div>
</x-guest-layout>
