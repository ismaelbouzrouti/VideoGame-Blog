<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create FAQ Category') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-md mx-auto bg-white p-8 shadow-md rounded-md">
            <form action="{{ route('faq.store-category') }}" method="POST">
                @csrf

                <div class="mb-4">
                    <label for="categoryName" class="block text-sm font-medium text-gray-600">Category Name:</label>
                    <input type="text" name="categoryName" id="categoryName" class="mt-1 p-2 w-full border rounded-md"
                        required>
                </div>

                <button type="submit"
                    class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:border-blue-700 focus:ring focus:ring-blue-200 active:bg-blue-800">
                    Create Category
                </button>

                @if(session('success'))
                <div class="mt-4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative"
                    role="alert">
                    <strong class="font-bold">Success!</strong>
                    <span class="block sm:inline">{{ session('success') }}</span>
                </div>
                @endif
            </form>
        </div>
    </div>
</x-app-layout>