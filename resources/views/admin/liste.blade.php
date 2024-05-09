@extends('admin.dashboard')
@section('content')
<div class="container">
    <h1>Universite</h1>
    @if(session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif
    <div>
        <a href="{{ route('universite.create') }}" class="btn btn-primary mb-3">Create a University</a>
    </div>
    <table class="table table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Adresse</th>
                <th>Description</th>
                <th>Contact</th>
                <th>Infrastructure</th>
                <th>Programs</th>
                <th>Photo</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach($universites as $universite)
                <tr>
                    <td>{{ $universite->id }}</td>
                    <td>{{ $universite->name }}</td>
                    <td>{{ $universite->adresse }}</td>
                    <td>{{ $universite->description }}</td>
                    <td>{{ $universite->contact }}</td>
                    <td>{{ $universite->infrastructure }}</td>
                    <td>{{ $universite->programs }}</td>
                    <td>
                        <div>
                            <img src="{{ asset( $universite->photo) }}" class="img-fluid" alt="University Photo">
                        </div>
                    </td>
                    <td>
                        <a href="{{ route('universite.edit', ['universite' => $universite]) }}" class="btn btn-primary">Edit</a>
                    </td>
                    <td>
                        <form method="post" action="{{ route('universite.destroy', ['universite' => $universite]) }}">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this university?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
