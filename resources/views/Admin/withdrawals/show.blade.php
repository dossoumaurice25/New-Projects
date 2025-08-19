@extends('layouts.admin.admin')


@section('title', 'Détails du Retrait #' . $withdrawal->id)
    
@section('style')

@endsection

@section('content')
      
    <div class="container-fluid">
        <!-- Header -->
        <div class="row mb-4">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('admin.withdrawals.index') }}">Retraits</a></li>
                                <li class="breadcrumb-item active">Détail #{{ $withdrawal->id }}</li>
                            </ol>
                        </nav>
                        <h2>Détails du Retrait #{{ $withdrawal->id }}</h2>
                    </div>
                    <div>
                        @if($withdrawal->status === 'pending')
                            <button class="btn btn-success me-2" onclick="approveWithdrawal()">
                                <i class="fas fa-check me-1"></i>Approuver
                            </button>
                            <button class="btn btn-danger me-2" onclick="rejectWithdrawal()">
                                <i class="fas fa-times me-1"></i>Rejeter
                            </button>
                        @elseif($withdrawal->status === 'approved')
                            <button class="btn btn-info me-2" onclick="completeWithdrawal()">
                                <i class="fas fa-flag-checkered me-1"></i>Marquer Complété
                            </button>
                        @endif
                        <a href="{{ route('admin.withdrawals.index') }}" class="btn btn-outline-secondary">
                            <i class="fas fa-arrow-left me-1"></i>Retour
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Informations principales -->
            <div class="col-lg-8">
                <div class="card mb-4">
                    <div class="card-header">
                        <h5 class="card-title mb-0">
                            <i class="fas fa-money-bill-wave me-2"></i>Informations du Retrait
                        </h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <table class="table table-borderless">
                                    <tr>
                                        <td class="fw-bold">ID de la demande:</td>
                                        <td>#{{ $withdrawal->id }}</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-bold">Date de demande:</td>
                                        <td>{{ $withdrawal->created_at->format('d/m/Y à H:i') }}</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-bold">Montant demandé:</td>
                                        <td class="text-primary fw-bold">${{ number_format($withdrawal->amount, 2) }}</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-bold">Frais (5%):</td>
                                        <td class="text-danger">${{ number_format($withdrawal->fee, 2) }}</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-bold">Montant net à payer:</td>
                                        <td class="text-success fw-bold fs-5">${{ number_format($withdrawal->net_amount, 2) }}</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-md-6">
                                <table class="table table-borderless">
                                    <tr>
                                        <td class="fw-bold">Statut:</td>
                                        <td>
                                            <span class="badge fs-6
                                                @if($withdrawal->status === 'pending') bg-warning
                                                @elseif($withdrawal->status === 'approved') bg-info
                                                @elseif($withdrawal->status === 'completed') bg-success
                                                @else bg-danger
                                                @endif">
                                                {{ ucfirst($withdrawal->status) }}
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="fw-bold">Type de retrait:</td>
                                        <td><span class="badge bg-secondary">{{ $withdrawal->withdrawal_type }}</span></td>
                                    </tr>
                                    <tr>
                                        <td class="fw-bold">Adresse:</td>
                                        <td>
                                            <code class="bg-light p-2 rounded">{{ $withdrawal->withdrawal_address }}</code>
                                            <button class="btn btn-sm btn-outline-primary ms-1" onclick="copyToClipboard('{{ $withdrawal->withdrawal_address }}')">
                                                <i class="fas fa-copy"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    @if($withdrawal->processed_at)
                                    <tr>
                                        <td class="fw-bold">Date de traitement:</td>
                                        <td>{{ $withdrawal->processed_at->format('d/m/Y à H:i') }}</td>
                                    </tr>
                                    @endif
                                </table>
                            </div>
                        </div>

                        @if($withdrawal->admin_notes)
                        <div class="row mt-3">
                            <div class="col-12">
                                <div class="alert alert-info">
                                    <h6><i class="fas fa-sticky-note me-2"></i>Notes Administrateur:</h6>
                                    <p class="mb-0">{{ $withdrawal->admin_notes }}</p>
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>

            <!-- Informations utilisateur -->
            <div class="col-lg-4">
                <div class="card mb-4">
                    <div class="card-header">
                        <h5 class="card-title mb-0">
                            <i class="fas fa-user me-2"></i>Informations Utilisateur
                        </h5>
                    </div>
                    <div class="card-body">
                        <div class="text-center mb-3">
                            <div class="avatar-placeholder bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center" 
                                style="width: 60px; height: 60px; font-size: 24px;">
                                {{ strtoupper(substr($withdrawal->user->name, 0, 2)) }}
                            </div>
                        </div>
                        <table class="table table-sm table-borderless">
                            <tr>
                                <td class="fw-bold">Nom:</td>
                                <td>{{ $withdrawal->user->name }}</td>
                            </tr>
                            <tr>
                                <td class="fw-bold">Email:</td>
                                <td>{{ $withdrawal->user->email }}</td>
                            </tr>
                            <tr>
                                <td class="fw-bold">Profits actuels:</td>
                                <td class="text-success fw-bold">${{ number_format($userTotalProfit, 2) }}</td>
                            </tr>
                            <tr>
                                <td class="fw-bold">Membre depuis:</td>
                                <td>{{ $withdrawal->user->created_at->format('d/m/Y') }}</td>
                            </tr>
                        </table>
                        <div class="d-grid gap-2">
                            <a href="{{ route('admin.users.show', $withdrawal->user->id) }}" class="btn btn-outline-primary btn-sm">
                                <i class="fas fa-user-circle me-1"></i>Voir Profil Complet
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Statistiques utilisateur -->
                <div class="card mb-4">
                    <div class="card-header">
                        <h5 class="card-title mb-0">
                            <i class="fas fa-chart-bar me-2"></i>Statistiques de Retrait
                        </h5>
                    </div>
                    <div class="card-body">
                        @php
                            $userStats = [
                                'total' => \App\Models\WithdrawalRequest::where('user_id', $withdrawal->user_id)->count(),
                                'pending' => \App\Models\WithdrawalRequest::where('user_id', $withdrawal->user_id)->where('status', 'pending')->count(),
                                'completed' => \App\Models\WithdrawalRequest::where('user_id', $withdrawal->user_id)->where('status', 'completed')->count(),
                                'total_amount' => \App\Models\WithdrawalRequest::where('user_id', $withdrawal->user_id)->where('status', 'completed')->sum('net_amount')
                            ];
                        @endphp
                        
                        <div class="row text-center">
                            <div class="col-6 mb-3">
                                <div class="border rounded p-2">
                                    <h6 class="text-muted mb-1">Total Demandes</h6>
                                    <h4 class="text-primary mb-0">{{ $userStats['total'] }}</h4>
                                </div>
                            </div>
                            <div class="col-6 mb-3">
                                <div class="border rounded p-2">
                                    <h6 class="text-muted mb-1">En Attente</h6>
                                    <h4 class="text-warning mb-0">{{ $userStats['pending'] }}</h4>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="border rounded p-2">
                                    <h6 class="text-muted mb-1">Complétées</h6>
                                    <h4 class="text-success mb-0">{{ $userStats['completed'] }}</h4>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="border rounded p-2">
                                    <h6 class="text-muted mb-1">Total Payé</h6>
                                    <h5 class="text-success mb-0">${{ number_format($userStats['total_amount'], 2) }}</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Historique des retraits de l'utilisateur -->
        @if($userWithdrawals->count() > 0)
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">
                            <i class="fas fa-history me-2"></i>Historique Récent (5 dernières demandes)
                        </h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-sm">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Date</th>
                                        <th>Montant</th>
                                        <th>Net</th>
                                        <th>Statut</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($userWithdrawals as $pastWithdrawal)
                                    <tr>
                                        <td>#{{ $pastWithdrawal->id }}</td>
                                        <td>{{ $pastWithdrawal->created_at->format('d/m/Y') }}</td>
                                        <td>${{ number_format($pastWithdrawal->amount, 2) }}</td>
                                        <td>${{ number_format($pastWithdrawal->net_amount, 2) }}</td>
                                        <td>
                                            <span class="badge 
                                                @if($pastWithdrawal->status === 'pending') bg-warning
                                                @elseif($pastWithdrawal->status === 'approved') bg-info
                                                @elseif($pastWithdrawal->status === 'completed') bg-success
                                                @else bg-danger
                                                @endif">
                                                {{ ucfirst($pastWithdrawal->status) }}
                                            </span>
                                        </td>
                                        <td>
                                            <a href="{{ route('admin.withdrawals.show', $pastWithdrawal) }}" 
                                            class="btn btn-sm btn-outline-primary">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
    </div>

    <!-- Modal pour les notes admin -->
    <div class="modal fade" id="adminNotesModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Notes Administrateur</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <textarea class="form-control" id="adminNotes" rows="4" 
                            placeholder="Ajoutez vos commentaires..."></textarea>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                    <button type="button" class="btn btn-primary" id="confirmAction">Confirmer</button>
                </div>
            </div>
        </div>
    </div>
    
@endsection

@section('script')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        let currentAction = null;

        function approveWithdrawal() {
            currentAction = 'approve';
            
            const modal = new bootstrap.Modal(document.getElementById('adminNotesModal'));
            document.querySelector('#adminNotesModal .modal-title').textContent = 'Approuver le retrait';
            document.getElementById('adminNotes').placeholder = 'Commentaires sur l\'approbation (optionnel)...';
            modal.show();
        }

        function rejectWithdrawal() {
            currentAction = 'reject';
            
            const modal = new bootstrap.Modal(document.getElementById('adminNotesModal'));
            document.querySelector('#adminNotesModal .modal-title').textContent = 'Rejeter le retrait';
            document.getElementById('adminNotes').placeholder = 'Raison du rejet...';
            modal.show();
        }

        function completeWithdrawal() {
            currentAction = 'complete';
            
            const modal = new bootstrap.Modal(document.getElementById('adminNotesModal'));
            document.querySelector('#adminNotesModal .modal-title').textContent = 'Compléter le retrait';
            document.getElementById('adminNotes').placeholder = 'Confirmez que le paiement a été effectué...';
            modal.show();
        }

        function copyToClipboard(text) {
            navigator.clipboard.writeText(text).then(function() {
                Swal.fire({
                    icon: 'success',
                    title: 'Copié!',
                    text: 'Adresse copiée dans le presse-papier',
                    timer: 1500,
                    showConfirmButton: false
                });
            });
        }

        // Gestionnaire pour le bouton de confirmation du modal
        document.getElementById('confirmAction').addEventListener('click', function() {
            const notes = document.getElementById('adminNotes').value;
            
            if (currentAction) {
                processAction(currentAction, {{ $withdrawal->id }}, notes);
                bootstrap.Modal.getInstance(document.getElementById('adminNotesModal')).hide();
            }
        });

        function processAction(action, id, notes) {
            // Afficher loader
            Swal.fire({
                title: 'Traitement en cours...',
                allowOutsideClick: false,
                showConfirmButton: false,
                didOpen: () => {
                    Swal.showLoading();
                }
            });

            fetch(`{{ url('/admin/withdrawals') }}/${id}/${action}`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                },
                body: JSON.stringify({
                    admin_notes: notes
                })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Succès!',
                        text: data.message,
                        timer: 2000,
                        showConfirmButton: false
                    }).then(() => {
                        location.reload();
                    });
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Erreur',
                        text: data.message
                    });
                }
            })
            .catch(error => {
                Swal.fire({
                    icon: 'error',
                    title: 'Erreur',
                    text: 'Une erreur est survenue'
                });
            });
        }
    </script>
@endsection

