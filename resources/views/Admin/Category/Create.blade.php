<form action="{{ route('admin.category.store') }}" method="POST">
    @csrf
    <div>
        <label for="name">Category Name:</label>
        <input type="text" id="name" name="name" required>
    </div>
    <div>
        <button type="submit">Create Category</button>
    </div>
</form>
