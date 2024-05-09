@extends('website.layouts.base')
@section('content')



<form action="" method="POST">
    @csrf

    @foreach($criteres as $critere)
    <div class="criteria">
        <h2>{{ $critere->libelle }}</h2>
        <div class="star-rating">
            @for($i = 5; $i >= 1; $i--)
            <input type="radio" id="{{ $critere->slug }}-star{{ $i }}" name="{{ $critere->slug }}" value="{{ $i }}">
            <label for="{{ $critere->slug }}-star{{ $i }}">&#9733;</label>
            @endfor
        </div>
    </div>
    @endforeach

    {{-- <input type="hidden" name="university_id" value="{{ $universite->id }}"> --}}
    <button type="submit" class="btn btn-outline-success">Enregistrer</button>
    <button type="reset" class="btn btn-outline-danger">Annuler</button>
</form>


@endsection
