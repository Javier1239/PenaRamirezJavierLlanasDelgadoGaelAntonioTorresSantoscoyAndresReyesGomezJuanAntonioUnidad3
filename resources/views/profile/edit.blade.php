@extends('layouts.user')
 
@section('title', 'Edit')
 
@section('contents')
<section class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
        <div class="flex items-center mb-4">
            <a href="/" class="text-gray-600 hover:text-gray-900 flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M3.707 9.293a1 1 0 0 1 0-1.414l6-6a1 1 0 0 1 1.414 0l6 6a1 1 0 1 1-1.414 1.414L11 4.414V17a1 1 0 1 1-2 0V4.414L5.707 9.707a1 1 0 0 1-1.414 0z" clip-rule="evenodd" />
                </svg>
                Back to Home
            </a>
            <span class="mx-2 text-gray-400">/</span>
            <span class="text-gray-900">{{ __('Profile') }}</span>
        </div>

        <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
            <div class="max-w-xl">
                <h2 class="text-2xl font-semibold text-gray-800 mb-4">{{ __('Profile') }}</h2>
                @include('profile.partials.update-profile-information-form')
            </div>
        </div>

        <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
            <div class="max-w-xl">
                <h2 class="text-2xl font-semibold text-gray-800 mb-4">{{ __('Update Password') }}</h2>
                @include('profile.partials.update-password-form')
            </div>
        </div>

        <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
            <div class="max-w-xl">
                <h2 class="text-2xl font-semibold text-gray-800 mb-4">{{ __('Delete Account') }}</h2>
                @include('profile.partials.delete-user-form')
            </div>
        </div>
    </div>
</section>

@endsection

