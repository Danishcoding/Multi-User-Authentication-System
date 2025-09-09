<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12 flex justify-center"> <!-- Added flex and justify-center -->
        <div class="w-full max-w-3xl space-y-6"> <!-- Control width here -->
            
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl mx-auto"> <!-- mx-auto centers content -->
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl mx-auto">
                    @include('profile.partials.update-password-form')
                </div>
            </div>    

        </div>
    </div>
</x-app-layout>
