<!-- resources/views/generate-description.blade.php -->

<form action="{{ url('/generate-description') }}" method="post">
    @csrf
    <label for="title">Product Title:</label>
    <input type="text" name="title" required>
    <button type="submit">Generate Description</button>
</form>

@isset($description)
    <div>
        <strong>Generated Description:</strong>
        <p>{{ $description }}</p>
    </div>
@endisset
