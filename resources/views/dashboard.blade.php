<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('User Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-8 bg-gray-50 min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <!-- Welcome Card -->
            <div class="bg-white shadow rounded-lg p-6 mb-6">
                <h3 class="text-lg font-semibold text-gray-900">Welcome, {{ Auth::user()->name }} 🎉</h3>
                <p class="text-gray-600 mt-1">You are logged in as a normal user.</p>
            </div>

            <!-- Quick Stats -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

                <div class="bg-white p-6 rounded-lg shadow text-center">
                    <p class="text-sm text-gray-500">Account Status</p>
                    <p class="text-lg font-bold text-green-600">Active</p>
                </div>

                <div class="bg-white p-6 rounded-lg shadow text-center">
                    <p class="text-sm text-gray-500">Joined</p>
                    <p class="text-lg font-bold text-gray-800">
                        {{ Auth::user()->created_at->format('d M, Y') }}
                    </p>
                </div>

                <div class="bg-white p-6 rounded-lg shadow text-center">
                    <p class="text-sm text-gray-500">Last Login</p>
                    <p class="text-lg font-bold text-gray-800">
                        {{ Auth::user()->updated_at->diffForHumans() }}
                    </p>
                </div>

            </div>

        </div>
    </div>
</x-app-layout>
