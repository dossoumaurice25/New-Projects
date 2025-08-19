@extends('layouts.admin.admin')


@section('titre', 'Dépôts en attente')
    
@section('style')

@endsection

@section('content')

    <div class="container py-4">
        <h2>Dépôts en attente</h2>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @if($deposits->count())
            <table class="table table-bordered mt-3">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Utilisateur</th>
                        <th>Email</th>
                        <th>Montant ($)</th>
                        <th>Méthode</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($deposits as $deposit)
                    <tr>
                        <td>{{ $deposit->created_at->format('d/m/Y H:i') }}</td>
                        <td>{{ $deposit->user->username }}</td>
                        <td>{{ $deposit->user->email }}</td>
                        <td>${{ number_format($deposit->amount_usd, 2) }}</td>
                        <td>{{ strtoupper($deposit->method) }}</td>
                        <td>
                            <form method="POST" action="{{ route('admin.deposits.validate', $deposit->id) }}">
                                @csrf
                                @method('PUT')
                                <button class="btn btn-success btn-sm">Reçu</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>Aucun dépôt en attente.</p>
        @endif
    </div>

@endsection

@section('script')
    
@endsection
