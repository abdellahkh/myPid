@extends('layouts.app')

@section('title', 'Liste des types')

@section('content')
    <h1>Liste des {{ $resource }}</h1>

    <table>
        <thead>
            <tr>
                <th>type</th>
            </tr>
        </thead>
        <tbody>
        @foreach($type as $type)
            <tr>
                <td>{{ $type->type }}</td>
                <td>
                    <a href="{{ route('type_show', $type->id) }}">{{ $type->type }}</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
