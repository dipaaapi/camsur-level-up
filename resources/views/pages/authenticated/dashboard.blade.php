<x-app-layout>
    <x-loading-screen />

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Camsur Portal Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">

            <x-alert type="success">
                Welcome back, <strong>{{ Auth::user()->name }}</strong>! You are successfully logged into Camsur Level-Up.
            </x-alert>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <x-stat-box title="Total Users" value="1,248" icon="👥" color="blue" />
                <x-stat-box title="Active Requests" value="42" icon="📄" color="emerald" />
                <x-stat-box title="System Status" value="Online" icon="⚡" color="amber" />
            </div>

            <x-card title="Recent Activities">
                <p class="text-slate-600 dark:text-slate-400 text-sm">
                    No recent activity logs available yet. Stay tuned for future updates on your portal!
                </p>
            </x-card>

        </div>
    </div>
</x-app-layout>
