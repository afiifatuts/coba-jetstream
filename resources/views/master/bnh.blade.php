<!-- resources/views/your-page.blade.php -->

<x-app-layout>
    <!-- This is the page heading section (optional) -->
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Your Page Title
        </h2>
    </x-slot>

    <!-- This is the main content section -->
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Your page-specific content goes here -->
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <!-- Your page content goes here -->
                <p>This is the content of your page.</p>
            </div>
        </div>
    </div>
</x-app-layout>
