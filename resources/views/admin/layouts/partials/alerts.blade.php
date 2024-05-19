@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
        @foreach($errors->all() as $error)
                <li><span class="bi bi-exclamation-circle"></span> {{ $error }}</li>
        @endforeach
        </ul>
    </div>
@endif

@if (session('success'))
    <div class="alert alert-success d-flex justify-content-between" role="alert">
        <div class="content">
            <strong><i class="bi bi-check-circle"></i> {{ session('success') }}</strong>
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
