<form action="{{ route('faq.store-category') }}" method="POST">
    @csrf

    <div class="form-group">
        <label for="categoryName">Category Name:</label>
        <input type="text" name="categoryName" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-primary">Create Category</button>
    @if(session('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
        <strong class="font-bold">Success!</strong>
        <span class="block sm:inline">{{ session('success') }}</span>
    </div>
    @endif
</form>