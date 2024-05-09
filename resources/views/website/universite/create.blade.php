@extends('admin.dashboard')

@section('content')
<div class="container mt-5">
    <h2 style="color: burlywood">Creer une nouvelle université</h2>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form method="post" action="{{ route('universite.store') }}" enctype="multipart/form-data">
        @csrf
        @method('post')

        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="name" class="form-label">Nom</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                </div>

                <div class="mb-3">
                    <label for="adresse" class="form-label">Addresse</label>
                    <input type="text" class="form-control" id="adresse" name="adresse" placeholder="Address" required>
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="3" placeholder="Description" required></textarea>
                </div>

                <div class="mb-3">
                    <label for="contact" class="form-label">Contact</label>
                    <input type="text" class="form-control" id="contact" name="contact" placeholder="Contact" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="infrastructure" class="form-label">Infrastructure</label>
                    <textarea class="form-control" id="infrastructure" name="infrastructure" rows="3" placeholder="Infrastructure" required></textarea>
                </div>

                <div class="mb-3">
                    <label for="programs" class="form-label">Programme</label>
                    <textarea class="form-control" id="programs" name="programs" rows="3" placeholder="Programs (comma-separated)" required></textarea>
                </div>

                <div class="mb-3">
                    <label for="photo" class="form-label">Photo</label>
                    <input type="file" class="form-control" id="photo" name="photo" accept="image/*">
                </div>
            </div>
        </div>

        <hr>

        <button type="submit" class="btn btn-primary">Enregistrer l'Université</button>
        <hr>

    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-glZKQVjq3zDfQ/ljuA8bC0L7FqCUuRxqySH6B4iAfIpz4J4gIq3Ju6mLmJ6ELnk" crossorigin="anonymous"></script>
@endsection
