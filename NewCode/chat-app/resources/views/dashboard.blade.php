<x-app-layout>
    <!-- HEADER SLOT -->
    <x-slot name="header">
        <!-- Horizontal navigation bar -->
        <div class="flex items-center space-x-6 bg-gray-100 p-3 rounded-lg shadow">
            <!-- Server Button (Darker Blue) with black text -->
            <button class="bg-blue-700 text-black py-2 px-5 rounded-lg hover:bg-blue-600 transition duration-200">
                My Server
            </button>

            <!-- Private conversations (Lighter Blue) with black text -->
            <div class="flex space-x-4 overflow-x-auto scrollbar-hide">
                <button class="bg-blue-500 text-black py-2 px-4 rounded-lg hover:bg-blue-400 transition duration-200">
                    John Doe
                </button>
                <button class="bg-blue-500 text-black py-2 px-4 rounded-lg hover:bg-blue-400 transition duration-200">
                    Alice Smith
                </button>
                <button class="bg-blue-500 text-black py-2 px-4 rounded-lg hover:bg-blue-400 transition duration-200">
                    Michael Brown
                </button>
                <button class="bg-blue-500 text-black py-2 px-4 rounded-lg hover:bg-blue-400 transition duration-200">
                    Emily Johnson
                </button>
                <button class="bg-blue-500 text-black py-2 px-4 rounded-lg hover:bg-blue-400 transition duration-200">
                    David Wilson
                </button>
            </div>
        </div>
    </x-slot>

    <!-- MAIN CONTENT -->
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-xl font-bold">Welcome to your Dashboard</h3>
                    <p>Select a private conversation from the top bar.</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
