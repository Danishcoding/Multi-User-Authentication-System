<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <!-- Welcome message -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-6">
                <div class="p-6 text-gray-900">
                    🎉 Welcome back, {{ Auth::guard('admin')->user()->name }}!
                </div>
            </div>

            <!-- Dashboard cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Users -->
                <div class="bg-white p-6 rounded-2xl shadow">
                    <h3 class="text-lg font-semibold">Users</h3>
                    <p class="text-2xl mt-2">{{ \App\Models\User::count() }}</p>
                </div>

                <!-- Admins -->
                <div class="bg-white p-6 rounded-2xl shadow">
                    <h3 class="text-lg font-semibold">Admins</h3>
                    <p class="text-2xl mt-2">{{ \App\Models\Admin::count() }}</p>
                </div>
            </div>

        </div>
    </div>
</x-admin-layout>
