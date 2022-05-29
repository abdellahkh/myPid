@extends('layouts.app')

@section('title', 'Localité d\'un artiste')

@section('content')
    <h1>{{ ucfirst($locality->locality) }} {{ ucfirst($locality->postal_code) }}</h1>

    <ul>
        @foreach($locality->locations as $locations)
        <li>{{$locations->designation}}</li>
        @endforeach
    </ul>

    <nav><a href="{{ route('locality_index') }}">Retour à l'index</a></nav>
@endsection

