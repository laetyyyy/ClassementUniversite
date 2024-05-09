@extends('admin.dashboard')

@section('content')
    <div class="container">
        <h2>Ajouter un Critère</h2>
        <form method="POST" action="{{ route('criteres.store') }}">
            @csrf
            <div class="form-group">
                <label for="libelle">Libellé</label>
                <input type="text" class="form-control" id="libelle" name="libelle">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description"></textarea>
            </div>
            <div class="form-group">
                <label for="statut">Statut</label><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="statut" id="actif" value="1" checked>
                    <label class="form-check-label" for="actif">Actif</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="statut" id="inactif" value="0">
                    <label class="form-check-label" for="inactif">Inactif</label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Ajouter</button>
        </form>
    </div>
@endsection
