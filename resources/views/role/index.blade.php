@extends('layouts.app')

@section('title', 'Liste des roles')

@section('content')
    <h1>Liste des {{ $resource }}</h1>

    <table>
        <thead>
            <tr>
                <th>Role</th>
            </tr>
        </thead>
        <tbody>
        @foreach($role as $role)
            <tr>
                <td>{{ $role->role }}</td>
                <td>
                    <a href="{{ route('role_show', $role->id) }}">{{ $role->role }}</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
