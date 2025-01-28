<form action="{{ route('posts.store') }}" method="POST">
    @csrf
    <label>Title:</label>
    <input type="text" name="title" >
    @error('title')
            <div style="color: red;">{{ $message }}</div>
        @enderror
    <label>Content:</label>
    <textarea name="content" ></textarea>
    @error('content')
            <div style="color: red; font-size:17px;">{{ $message }}</div>
        @enderror
    <button type="submit">Save</button>
</form>