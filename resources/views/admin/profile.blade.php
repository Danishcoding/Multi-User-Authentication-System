<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('My Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">

                    <div class="flex items-center space-x-6">
                        <img src="https://ui-avatars.com/api/?name={{ urlencode($admin->name) }}&background=0D8ABC&color=fff&size=128"
                            alt="Avatar" class="w-24 h-24 rounded-full border-2 border-gray-300">
                        <div class="ml-4">
                            <h3 class="text-2xl font-bold text-gray-900">{{ $admin->name }}</h3>
                            <p class="mt-1 text-md text-gray-600">{{ $admin->email }}</p>
                            <p class="mt-0.5 text-sm text-gray-500">Joined {{ $admin->created_at->format('d M, Y') }}
                            </p>
                        </div>
                    </div>

                    <div class="mt-8 border-t border-gray-200">
                        <dl class="divide-y divide-gray-200">
                            <div class="py-4 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">Full Name</dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:col-span-2">{{ $admin->name }}</dd>
                            </div>
                            <div class="py-4 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">Email Address</dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:col-span-2">{{ $admin->email }}</dd>
                            </div>
                            <div class="py-4 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">Role</dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:col-span-2">Administrator</dd>
                            </div>
                            <div class="py-4 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">Status</dt>
                                <dd class="mt-1 text-sm font-medium text-green-600 sm:col-span-2">Active</dd>
                            </div>
                        </dl>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
