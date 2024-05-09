@extends('admin.dashboard')

@section('content')
<div class="container mt-5">
    <h1>Modifier Université</h1>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('universite.update', ['universite' => $universite->id]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')

        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="name" class="form-label">Nom</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="{{ $universite->name }}" required>
                </div>

                <div class="mb-3">
                    <label for="adresse" class="form-label">Addresse</label>
                    <input type="text" class="form-control" id="adresse" name="adresse" placeholder="Address" value="{{ $universite->adresse }}" required>
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="3" placeholder="Description" required>{{ $universite->description }}</textarea>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="contact" class="form-label">Contact</label>
                    <input type="text" class="form-control" id="contact" name="contact" placeholder="Contact" value="{{ $universite->contact }}" required>
                </div>

                <div class="mb-3">
                    <label for="infrastructure" class="form-label">Infrastructure</label>
                    <textarea class="form-control" id="infrastructure" name="infrastructure"  placeholder="Infrastructure" required>{{ $universite->infrastructure }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="programs" class="form-label">Programmr</label>
                    <textarea class="form-control" id="programs" name="programs"  placeholder="Programs (comma-separated)" required>{{ $universite->programs }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="photo" class="form-label">Photo</label>
                    <input type="file" class="form-control" id="photo" name="photo" placeholder="Photo" required>
                    <img src="{{ asset($universite->photo) }}" alt="University Photo" class="mt-2" style="max-width: 100%;">
                </div>
            </div>
        </div>

        <hr>

        <button type="submit" class="btn btn-primary">Update</button>
        <hr>
    </form>
</div>
@endsection
