<x-app-layout>
    <x-slot name="header">
        <h1>FAQ</h1>
    </x-slot>

    <div class="container mx-auto mt-8">
        @foreach ($categories as $category)
        <div class="bg-white shadow-md p-6 mb-6 rounded-md">
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-xl font-semibold">{{ $category->categoryName }}</h2>

                <!-- Only the admin can see this button -->
                @auth
                @if(auth()->user()->isAdmin)
                <div>
                    <a href="{{ route('faq.create-item', ['category' => $category->categoryId]) }}"
                        class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600">Add Question & Answer</a>

                    <!-- Delete category button -->
                    <form action="{{ route('faq.delete-category', ['category' => $category->categoryId]) }}"
                        method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                            class="ml-4 px-4 py-2 bg-red-500 text-white rounded-md hover:bg-red-600">Delete
                            Category</button>
                    </form>
                </div>
                @endif
                @endauth
            </div>

            <ul>
                @forelse ($category->faqItems as $item)
                <li class="mb-2">
                    <strong class="text-blue-500">{{ $item->question }}</strong><br>
                    {{ $item->answer }}
                </li>
                <!-- Delete question & answer button -->
                @auth
                @if(auth()->user()->isAdmin)
                <form action="{{ route('faq.delete-item', ['item' => $item->itemId]) }}" method="POST" class="inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit"
                        class="ml-4 px-4 py-2 bg-red-500 text-white rounded-md hover:bg-red-600">Delete Question &
                        Answer</button>
                </form>
                @endif
                @endauth
                @empty
                <li class="text-gray-500">No FAQs available for this category.</li>
                @endforelse
            </ul>
        </div>
        @endforeach

        <!-- Only the admin can see this button -->
        @auth
        @if(auth()->user()->isAdmin)
        <a href="{{ route('faq.create-category') }}"
            class="px-4 py-2 bg-green-500 text-white rounded-md hover:bg-green-600">Add FAQ Category</a>
        @endif
        @endauth
    </div>
</x-app-layout>