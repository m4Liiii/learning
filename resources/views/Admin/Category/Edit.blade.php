<form action="{{ route('admin.category.update', $category->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div>
        <label for="name">Category Name:</label>
        <input type="text" id="name" name="name" value="{{ $category->name }}" required>
    </div>
    <div>
        <button type="submit">Update Category</button>
    </div>
</form>
