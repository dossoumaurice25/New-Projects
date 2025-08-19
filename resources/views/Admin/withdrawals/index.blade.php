@extends('layouts.admin.admin')


@section('title', 'Gestion des Retraits')
    
@section('style')

@endsection

@section('content')
     <div class="container-fluid">
        <!-- Header avec statistiques -->
        <div class="row mb-4">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center">
                    <h2><i class="fas fa-money-bill-wave me-2"></i>Withdrawal management</h2>
                    <div class="d-flex gap-2">
                        <button class="btn btn-success" onclick="bulkApprove()">
                            <i class="fas fa-check me-1"></i>Approve Selection
                        </button>
                        <button class="btn btn-danger" onclick="bulkReject()">
                            <i class="fas fa-times me-1"></i>Reject Selection
                        </button>
                    </div>
                </div>
            </div>
        </div>


        <!-- Statistiques -->
        <div class="row mb-4">
            <div class="col-md-3">
                <div class="card text-white bg-warning">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h5 class="card-title">Pending</h5>
                                <h3>{{ $stats['pending'] }}</h3>
                            </div>
                            <div class="align-self-center">
                                <i class="fas fa-clock fa-2x"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-white bg-info">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h5 class="card-title">Approved</h5>
                                <h3>{{ $stats['approved'] }}</h3>
                            </div>
                            <div class="align-self-center">
                                <i class="fas fa-thumbs-up fa-2x"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-white bg-success">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h5 class="card-title">Completed</h5>
                                <h3>{{ $stats['completed'] }}</h3>
                            </div>
                            <div class="align-self-center">
                                <i class="fas fa-check-circle fa-2x"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-white bg-danger">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h5 class="card-title">Rejected</h5>
                                <h3>{{ $stats['rejected'] }}</h3>
                            </div>
                            <div class="align-self-center">
                                <i class="fas fa-times-circle fa-2x"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Filtres -->
        <div class="card mb-4">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-md-4">
                        <label class="form-label">Filtrer par statut :</label>
                        <select class="form-select" onchange="filterByStatus(this.value)">
                            <option value="pending" {{ $status === 'pending' ? 'selected' : '' }}>En Attente</option>
                            <option value="approved" {{ $status === 'approved' ? 'selected' : '' }}>Approuvées</option>
                            <option value="completed" {{ $status === 'completed' ? 'selected' : '' }}>Complétées</option>
                            <option value="rejected" {{ $status === 'rejected' ? 'selected' : '' }}>Rejetées</option>
                            <option value="all" {{ $status === 'all' ? 'selected' : '' }}>Toutes</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Actions en lot :</label>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="selectAll" onchange="toggleSelectAll()">
                            <label class="form-check-label" for="selectAll">
                                Sélectionner tout
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tableau des retraits -->
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead class="table-dark">
                            <tr>
                                <th><input type="checkbox" id="masterCheckbox" onchange="toggleSelectAll()"></th>
                                <th>ID</th>
                                <th>Utilisateur</th>
                                <th>Montant Demandé</th>
                                <th>Frais</th>
                                <th>Montant Net</th>
                                <th>Type</th>
                                <th>Adresse</th>
                                <th>Statut</th>
                                <th>Date</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($withdrawalRequests as $withdrawal)
                            <tr>
                                <td>
                                    <input type="checkbox" class="withdrawal-checkbox" value="{{ $withdrawal->id }}">
                                </td>
                                <td>#{{ $withdrawal->id }}</td>
                                <td>
                                    <div>
                                        <strong>{{ $withdrawal->user->name }}</strong><br>
                                        <small class="text-muted">{{ $withdrawal->user->email }}</small>
                                    </div>
                                </td>
                                <td><span class="fw-bold text-primary">${{ number_format($withdrawal->amount, 2) }}</span></td>
                                <td><span class="text-danger">${{ number_format($withdrawal->fee, 2) }}</span></td>
                                <td><span class="fw-bold text-success">${{ number_format($withdrawal->net_amount, 2) }}</span></td>
                                <td>
                                    <span class="badge bg-secondary">{{ $withdrawal->withdrawal_type }}</span>
                                </td>
                                <td>
                                    <small class="font-monospace">{{ Str::limit($withdrawal->withdrawal_address, 20) }}</small>
                                </td>
                                <td>
                                    <span class="badge 
                                        @if($withdrawal->status === 'pending') bg-warning
                                        @elseif($withdrawal->status === 'approved') bg-info
                                        @elseif($withdrawal->status === 'completed') bg-success
                                        @else bg-danger
                                        @endif">
                                        {{ ucfirst($withdrawal->status) }}
                                    </span>
                                </td>
                                <td>
                                    <small>{{ $withdrawal->created_at->format('d/m/Y H:i') }}</small>
                                </td>
                                <td>
                                    <div class="btn-group btn-group-sm" role="group">
                                        <a href="{{ route('admin.withdrawals.show', $withdrawal) }}" 
                                        class="btn btn-outline-primary" title="Voir détails">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        @if($withdrawal->status === 'pending')
                                            <button class="btn btn-outline-success" 
                                                    onclick="approveWithdrawal({{ $withdrawal->id }})" 
                                                    title="Approuver">
                                                <i class="fas fa-check"></i>
                                            </button>
                                            <button class="btn btn-outline-danger" 
                                                    onclick="rejectWithdrawal({{ $withdrawal->id }})" 
                                                    title="Rejeter">
                                                <i class="fas fa-times"></i>
                                            </button>
                                        @elseif($withdrawal->status === 'approved')
                                            <button class="btn btn-outline-info" 
                                                    onclick="completeWithdrawal({{ $withdrawal->id }})" 
                                                    title="Marquer comme complété">
                                                <i class="fas fa-flag-checkered"></i>
                                            </button>
                                        @endif
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="11" class="text-center py-4">
                                    <i class="fas fa-inbox fa-3x text-muted mb-3"></i>
                                    <p class="text-muted">Aucune demande de retrait trouvée.</p>
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                <!-- Pagination -->
                <div class="d-flex justify-content-center mt-4">
                    {{ $withdrawalRequests->links() }}
                </div>
            </div>
        </div>
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
                            placeholder="Ajoutez vos commentaires (optionnel)..."></textarea>
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
        let currentWithdrawalId = null;

        function filterByStatus(status) {
            window.location.href = `{{ route('admin.withdrawals.index') }}?status=${status}`;
        }

        function toggleSelectAll() {
            const masterCheckbox = document.getElementById('masterCheckbox');
            const checkboxes = document.querySelectorAll('.withdrawal-checkbox');
            
            checkboxes.forEach(checkbox => {
                checkbox.checked = masterCheckbox.checked;
            });
        }

        function approveWithdrawal(id) {
            currentAction = 'approve';
            currentWithdrawalId = id;
            
            const modal = new bootstrap.Modal(document.getElementById('adminNotesModal'));
            document.querySelector('#adminNotesModal .modal-title').textContent = 'Approuver le retrait';
            document.getElementById('adminNotes').placeholder = 'Commentaires sur l\'approbation (optionnel)...';
            modal.show();
        }

        function rejectWithdrawal(id) {
            currentAction = 'reject';
            currentWithdrawalId = id;
            
            const modal = new bootstrap.Modal(document.getElementById('adminNotesModal'));
            document.querySelector('#adminNotesModal .modal-title').textContent = 'Rejeter le retrait';
            document.getElementById('adminNotes').placeholder = 'Raison du rejet...';
            modal.show();
        }

        function completeWithdrawal(id) {
            currentAction = 'complete';
            currentWithdrawalId = id;
            
            const modal = new bootstrap.Modal(document.getElementById('adminNotesModal'));
            document.querySelector('#adminNotesModal .modal-title').textContent = 'Compléter le retrait';
            document.getElementById('adminNotes').placeholder = 'Confirmez que le paiement a été effectué...';
            modal.show();
        }

        function bulkApprove() {
            const selectedIds = getSelectedIds();
            if (selectedIds.length === 0) {
                Swal.fire('Erreur', 'Veuillez sélectionner au moins une demande', 'error');
                return;
            }
            
            Swal.fire({
                title: `Approuver ${selectedIds.length} demande(s) ?`,
                text: 'Cette action ne peut pas être annulée',
                icon: 'question',
                showCancelButton: true,
                confirmButtonText: 'Oui, approuver',
                cancelButtonText: 'Annuler'
            }).then((result) => {
                if (result.isConfirmed) {
                    processBulkAction('approve', selectedIds);
                }
            });
        }

        function bulkReject() {
            const selectedIds = getSelectedIds();
            if (selectedIds.length === 0) {
                Swal.fire('Erreur', 'Veuillez sélectionner au moins une demande', 'error');
                return;
            }
            
            Swal.fire({
                title: `Rejeter ${selectedIds.length} demande(s) ?`,
                text: 'Les fonds seront remboursés aux utilisateurs',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Oui, rejeter',
                cancelButtonText: 'Annuler'
            }).then((result) => {
                if (result.isConfirmed) {
                    processBulkAction('reject', selectedIds);
                }
            });
        }

        function getSelectedIds() {
            const checkboxes = document.querySelectorAll('.withdrawal-checkbox:checked');
            return Array.from(checkboxes).map(cb => cb.value);
        }

        function processBulkAction(action, ids) {
            fetch(`{{ route('admin.withdrawals.bulk') }}`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                },
                body: JSON.stringify({
                    action: action,
                    withdrawal_ids: ids
                })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    Swal.fire('Succès', data.message, 'success').then(() => {
                        location.reload();
                    });
                } else {
                    Swal.fire('Erreur', data.message, 'error');
                }
            })
            .catch(error => {
                Swal.fire('Erreur', 'Une erreur est survenue', 'error');
            });
        }

        // Gestionnaire pour le bouton de confirmation du modal
        document.getElementById('confirmAction').addEventListener('click', function() {
            const notes = document.getElementById('adminNotes').value;
            
            if (currentAction && currentWithdrawalId) {
                processAction(currentAction, currentWithdrawalId, notes);
                bootstrap.Modal.getInstance(document.getElementById('adminNotesModal')).hide();
            }
        });

        function processAction(action, id, notes) {
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
                    Swal.fire('Succès', data.message, 'success').then(() => {
                        location.reload();
                    });
                } else {
                    Swal.fire('Erreur', data.message, 'error');
                }
            })
            .catch(error => {
                Swal.fire('Erreur', 'Une erreur est survenue', 'error');
            });
        }
    </script>
@endsection



































