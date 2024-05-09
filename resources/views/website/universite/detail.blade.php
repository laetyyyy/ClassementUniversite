@extends('website.layouts.base')

@section('content')
<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,700|Open+Sans" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('assets/css/styles-merged.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/style.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/styles-merged.css.map') }}">
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
<link rel="stylesheet" href="{{ asset('assets/scss/styles.scss') }}">
<link rel="stylesheet" href="{{ asset('assets/scss/_custom-settings.scss') }}">

<section class="probootstrap-section probootstrap-bg-white probootstrap-border-top">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="probootstrap-heading">
                    <h2 class="primary-heading">{{ $university->name }}</h2>
                    <h3 class="secondary-heading">{{ $university->adresse }}</h3>
                </div>
                <p>{{ $university->description }}</p>
                <h4>Contact Information:</h4>
                <ul class="probootstrap-contact-info">
                    <li><span class="text-uppercase">{{ $university->contact }}</span></li>
                </ul>
                <h4>Infrastructure:</h4>
                <p>{{ $university->infrastructure }}</p>
                <h4>Programmes</h4>
                <p>{{ $university->programs }}</p>

                <!-- Comment Form -->
                <h4>Commentaire</h4>
                <form action="{{ route('commentaires.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="universite_id" value="{{ $university->id }}">
                    <div class="form-group">
                        <label for="comment">Nos Commentaires:</label>
                        <textarea class="form-control" id="contenu" name="contenu" rows="3" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

                <div class="comments">
                    <h4>Comments:</h4>
                    @foreach ($commentaires as $commentaire)
                        <div class="comment">
                            <p>{{ $commentaire->contenu }}</p>
                         </div>
                    @endforeach
                </div>
            </div>
            <div class="col-md-4">
                <img src="{{ asset($university->photo) }}" alt="{{ $university->name }}" class="img-responsive">
            </div>

            <div class="col-md-3">
                <a href="{{ route('notes.create') }}" class="btn btn-success">Noter</a>
            </div>
        </div>
    </div>
</section>

@endsection
