@extends('admin.dashboard')

@section('content')
    <div class="container">
        <h2>Modifier Critère</h2>
        <form method="POST" action="{{ route('admin.criteres.update', ['critere' => $critere->id]) }}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="libelle">Libellé</label>
                <input type="text" class="form-control" id="libelle" name="libelle" value="{{ $critere->libelle }}">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description">{{ $critere->description }}</textarea>
            </div>
            <div class="form-group">
                <label for="statut">Statut</label><br>
                <select class="form-control" id="statut" name="statut">
                    <option value="1" {{ $critere->statut === '1' ? 'selected' : '' }}>Actif</option>
                    <option value="0" {{ $critere->statut === '0' ? 'selected' : '' }}>Inactif</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Enregistrer</button>
        </form>
    </div>
@endsection
