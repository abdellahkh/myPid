@extends('layouts.app')

@section('title', 'Role d\'un artiste')

@section('content')
    <h1>{{ ucfirst($role->role) }}</h1>
    <nav><a href="{{ route('role_index') }}">Retour à l'index</a></nav>
@endsection

