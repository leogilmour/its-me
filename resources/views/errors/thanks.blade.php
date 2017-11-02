
@if (count($messages) > 0)
    <!-- Form Error List -->
    <div class="alert alert-danger">
        <strong>Success!</strong>

        <br><br>

        <ul>
            @foreach ($messages->all() as $message)
                <li>{{ $message }}</li>
            @endforeach
        </ul>
    </div>
@endif