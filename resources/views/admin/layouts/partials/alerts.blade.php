@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        </ul>
    </div>
@endif

@if (session('success'))
    <div class="alert alert-success">
        <strong><i class="bi bi-check-circle"></i> {{ session('success') }}</strong>
    </div>
@endif
