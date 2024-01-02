<form action="{{ route('faq.store-item', $category) }}" method="POST">
    @csrf

    <div class="form-group">
        <label for="question">Question:</label>
        <input type="text" name="question" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="answer">Answer:</label>
        <textarea name="answer" class="form-control" rows="4" required></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Add Question & Answer</button>
</form>