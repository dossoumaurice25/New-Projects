@extends('layouts.admin.admin')


@section('titre', 'Utilisateurs')
    
@section('style')

@endsection

@section('content')
    <div class="container mt-4">
        <h2>Investissements en attente de validation</h2>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table table-bordered mt-3">
            <thead>
                <tr>
                    <th>Utilisateur</th>
                    <th>Email</th>
                    <th>Montant</th>
                    <th>Source</th>
                    <th>Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse($investments as $investment)
                    <tr>
                        <td>{{ $investment->user->username }}</td> 
                        <td>{{ $investment->user->email}}</td>
                        <td>${{ number_format($investment->amount, 2) }}</td>
                        <td>{{ ucfirst($investment->source) }}</td>
                        <td>{{ $investment->created_at->format('d/m/Y H:i') }}</td>
                        <td>
                            <form method="POST" action="{{ route('admin.investments.validate', $investment->id) }}">
                                @csrf
                                <button type="submit" class="btn btn-success btn-sm">Valider</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr><td colspan="5">Aucun investissement en attente.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection

@section('script')
    
@endsection


