<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add FAQ Item to Category') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-md mx-auto bg-white p-8 shadow-md rounded-md">
            <form action="{{ route('faq.store-item', $category) }}" method="POST">
                @csrf

                <div class="mb-4">
                    <label for="question" class="block text-sm font-medium text-gray-600">Question:</label>
                    <input type="text" name="question" id="question" class="mt-1 p-2 w-full border rounded-md" required>
                </div>

                <div class="mb-4">
                    <label for="answer" class="block text-sm font-medium text-gray-600">Answer:</label>
                    <textarea name="answer" id="answer" class="mt-1 p-2 w-full border rounded-md" rows="4"
                        required></textarea>
                </div>

                <button type="submit"
                    class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:border-blue-700 focus:ring focus:ring-blue-200 active:bg-blue-800">
                    Add Question & Answer
                </button>
            </form>
        </div>
    </div>
</x-app-layout>