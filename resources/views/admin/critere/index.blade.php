@extends('admin.dashboard')

@section('content')
    <div class="container">
        <h2>Liste des Critères</h2>
        <a href="{{ route('criteres.create') }}" class="btn btn-primary mb-2">Ajouter un critère</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Libellé</th>
                    <th>Description</th>
                    <th>Statut</th>
                    <th>Modifier</th>
                    <th>Supprimer</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($criteres as $critere)
                    <tr>
                        <td>{{ $critere->libelle }}</td>
                        <td>{{ $critere->description }}</td>
                        <td>{{ $critere->statut }}</td>
                        <td>
                            <a href="{{ route('admin.criteres.edit', ['critere' => $critere->id]) }}" class="btn btn-primary">Modifier</a>
                        </td>
                        <td>
                            <form method="post" action="{{ route('admin.criteres.destroy', ['critere' => $critere->id]) }}">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce critère?')">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
