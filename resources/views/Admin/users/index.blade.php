@extends('layouts.admin.admin')

@section('titre', 'Gestion des Utilisateurs')
    
@section('style')
<style>
    .card-shadow {
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
    }
    
    .btn-gradient {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        transition: all 0.3s ease;
    }
    
    .btn-gradient:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(102, 126, 234, 0.3);
    }
    
    .table-hover-effect:hover {
        background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
        transform: scale(1.002);
        transition: all 0.2s ease;
    }
    
    .badge-role {
        background: linear-gradient(135deg, #4f46e5 0%, #7c3aed 100%);
        color: white;
        padding: 0.25rem 0.75rem;
        border-radius: 9999px;
        font-size: 0.75rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.05em;
    }
    
    .action-btn {
        transition: all 0.2s ease;
        border-radius: 0.5rem;
        padding: 0.5rem 1rem;
        font-weight: 500;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
    }
    
    .action-btn:hover {
        transform: translateY(-1px);
        text-decoration: none;
    }
    
    .edit-btn {
        background: linear-gradient(135deg, #10b981 0%, #059669 100%);
        color: white;
    }
    
    .edit-btn:hover {
        box-shadow: 0 4px 12px rgba(16, 185, 129, 0.3);
        color: white;
    }
    
    .delete-btn {
        background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%);
        color: white;
        border: none;
        cursor: pointer;
    }
    
    .delete-btn:hover {
        box-shadow: 0 4px 12px rgba(239, 68, 68, 0.3);
        color: white;
    }
    
    .header-gradient {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
    }
    
    .stats-card {
        background: linear-gradient(135deg, #ffffff 0%, #f8fafc 100%);
        border: 1px solid #e2e8f0;
        transition: all 0.3s ease;
    }
    
    .stats-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
    }
</style>
@endsection

@section('content')
<div class="container-fluid px-4 py-6">
    <!-- En-tête avec gradient -->
    <div class="header-gradient rounded-2xl p-8 mb-8 card-shadow">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h6 class="display-4 fw-bold mb-2">
                    <i class="fas fa-users me-3"></i>Gestion des Utilisateurs
                </h6>
                <p class="lead mb-0 opacity-90">
                    Gérez efficacement tous les utilisateurs de votre plateforme
                </p>
            </div>
           
        </div>
    </div>

    <!-- Statistiques rapides -->
    <div class="row mb-6">
        <div class="col-md-3 mb-4">
            <div class="stats-card rounded-xl p-4 text-center">
                <div class="text-primary mb-2">
                    <i class="fas fa-users fa-2x"></i>
                </div>
                <h3 class="fw-bold text-dark">{{ $users->total() ?? count($users) }}</h3>
                <p class="text-muted small mb-0">Total Utilisateurs</p>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="stats-card rounded-xl p-4 text-center">
                <div class="text-success mb-2">
                    <i class="fas fa-user-check fa-2x"></i>
                </div>
                <h3 class="fw-bold text-dark">{{ $users->where('status', 'active')->count() ?? 0 }}</h3>
                <p class="text-muted small mb-0">Utilisateurs Actifs</p>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="stats-card rounded-xl p-4 text-center">
                <div class="text-warning mb-2">
                    <i class="fas fa-crown fa-2x"></i>
                </div>
                <h3 class="fw-bold text-dark">{{ $users->where('role', 'admin')->count() ?? 0 }}</h3>
                <p class="text-muted small mb-0">Administrateurs</p>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="stats-card rounded-xl p-4 text-center">
                <div class="text-info mb-2">
                    <i class="fas fa-user-plus fa-2x"></i>
                </div>
                <h3 class="fw-bold text-dark">{{ $users->where('created_at', '>=', now()->subDays(7))->count() ?? 0 }}</h3>
                <p class="text-muted small mb-0">Nouveaux (7j)</p>
            </div>
        </div>
    </div>

    <!-- Filtres et recherche -->
    <div class="bg-white rounded-2xl p-4 mb-6 card-shadow">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="input-group">
                    <span class="input-group-text bg-light border-0">
                        <i class="fas fa-search text-muted"></i>
                    </span>
                    <input type="text" class="form-control border-0 bg-light" placeholder="Rechercher un utilisateur...">
                </div>
            </div>
            
        </div>
    </div>

    <!-- Tableau des utilisateurs -->
    <div class="bg-white rounded-2xl card-shadow overflow-hidden">
        <div class="table-responsive">
            <table class="table table-hover mb-0">
                <thead class="bg-gradient-to-r from-gray-50 to-gray-100">
                    <tr>
                        <th class="border-0 py-4 px-4 fw-600 text-gray-700">
                            <i class="fas fa-hashtag me-2 text-muted"></i>#
                        </th>
                        <th class="border-0 py-4 px-4 fw-600 text-gray-700">
                            <i class="fas fa-user me-2 text-muted"></i>Utilisateur
                        </th>
                        <th class="border-0 py-4 px-4 fw-600 text-gray-700">
                            <i class="fas fa-envelope me-2 text-muted"></i>Email
                        </th>
                        <th class="border-0 py-4 px-4 fw-600 text-gray-700">
                            <i class="fas fa-user-tag me-2 text-muted"></i>Rôle
                        </th>
                        <th class="border-0 py-4 px-4 fw-600 text-gray-700">
                            <i class="fas fa-calendar me-2 text-muted"></i>Inscription
                        </th>
                        <th class="border-0 py-4 px-4 fw-600 text-gray-700 text-center">
                            <i class="fas fa-cogs me-2 text-muted"></i>Actions
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $index => $user)
                    <tr class="table-hover-effect">
                        <td class="border-0 py-4 px-4">
                            <span class="badge bg-light text-black rounded-pill px-3 py-2">
                                {{ $loop->iteration }}
                            </span>
                        </td>
                        <td class="border-0 py-4 px-4">
                            <div class="d-flex align-items-center">
                                <div class="avatar-circle bg-gradient-to-br from-blue-400 to-purple-500 rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 45px; height: 45px;">
                                    <span class="text-black fw-bold">
                                        {{ strtoupper(substr($user->username, 0, 2)) }}
                                    </span>
                                </div>
                                <div>
                                    <h6 class="mb-0 fw-600 text-dark">{{ $user->username }}</h6>
                                </div>
                            </div>
                        </td>
                        <td class="border-0 py-4 px-4">
                            <span class="text-gray-600">{{ $user->email }}</span>
                        </td>
                        <td class="border-0 py-4 px-4">
                            <span class="badge-role">
                                @if($user->role === 'admin')
                                    <i class="fas fa-crown me-1"></i>
                                @elseif($user->role === 'moderator')
                                    <i class="fas fa-shield-alt me-1"></i>
                                @else
                                    <i class="fas fa-user me-1"></i>
                                @endif
                                {{ ucfirst($user->role) }}
                            </span>
                        </td>
                        <td class="border-0 py-4 px-4">
                            <small class="text-muted">
                                <i class="fas fa-calendar-alt me-1"></i>
                                {{ $user->created_at ? $user->created_at->format('d/m/Y') : 'N/A' }}
                            </small>
                        </td>
                        <td class="border-0 py-4 px-4">
                            <div class="d-flex justify-content-center gap-2">
                                <a href="{{ route('admin.users.edit', $user->id) }}" 
                                   class="action-btn edit-btn" 
                                   title="Modifier">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ route('admin.users.destroy', $user->id) }}" 
                                      method="POST" 
                                      class="d-inline"
                                      onsubmit="return confirm('⚠️ Êtes-vous sûr de vouloir supprimer cet utilisateur ? Cette action est irréversible.')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" 
                                            class="action-btn delete-btn" 
                                            title="Supprimer">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                    
                    @if($users->isEmpty())
                    <tr>
                        <td colspan="6" class="text-center py-8">
                            <div class="text-muted">
                                <i class="fas fa-users fa-3x mb-3 opacity-50"></i>
                                <h5 class="mb-2">Aucun utilisateur trouvé</h5>
                                <p class="mb-0">Commencez par ajouter votre premier utilisateur</p>
                            </div>
                        </td>
                    </tr>
                    @endif
                </tbody>
            </table>
        </div>

        <!-- Pagination moderne -->
        @if(method_exists($users, 'links'))
        <div class="p-4 bg-gray-50 border-top">
            <div class="d-flex justify-content-between align-items-center">
                <div class="text-muted small">
                    <i class="fas fa-info-circle me-1"></i>
                    Affichage de {{ $users->firstItem() ?? 1 }} à {{ $users->lastItem() ?? $users->count() }} 
                    sur {{ $users->total() }} utilisateurs
                </div>
                <div class="pagination-wrapper">
                    {{ $users->links('pagination::bootstrap-4') }}
                </div>
            </div>
        </div>
        @endif
    </div>

    <!-- Actions rapides flottantes -->
    <div class="position-fixed bottom-0 end-0 m-4">
        <div class="dropdown dropup">
            <button class="btn btn-gradient rounded-circle p-3 shadow-lg" 
                    type="button" 
                    data-bs-toggle="dropdown" 
                    aria-expanded="false"
                    style="width: 60px; height: 60px;">
                <i class="fas fa-plus fa-lg"></i>
            </button>
            <ul class="dropdown-menu shadow-lg border-0 rounded-3">
                <li>
                    <a class="dropdown-item py-3 px-4" href="#">
                        <i class="fas fa-user-plus text-primary me-3"></i>
                        Ajouter un utilisateur
                    </a>
                </li>
                <li>
                    <a class="dropdown-item py-3 px-4" href="#">
                        <i class="fas fa-file-import text-success me-3"></i>
                        Importer des utilisateurs
                    </a>
                </li>
                <li>
                    <a class="dropdown-item py-3 px-4" href="#">
                        <i class="fas fa-download text-info me-3"></i>
                        Exporter la liste
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
    // Animation d'apparition progressive des lignes
    document.addEventListener('DOMContentLoaded', function() {
        const rows = document.querySelectorAll('tbody tr');
        rows.forEach((row, index) => {
            row.style.opacity = '0';
            row.style.transform = 'translateY(20px)';
            
            setTimeout(() => {
                row.style.transition = 'all 0.5s ease';
                row.style.opacity = '1';
                row.style.transform = 'translateY(0)';
            }, index * 100);
        });
    });

    // Confirmation de suppression améliorée
    document.querySelectorAll('.delete-btn').forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            
            const form = this.closest('form');
            const username = this.closest('tr').querySelector('h6').textContent;
            
            // Utilisation de SweetAlert2 si disponible, sinon confirm classique
            if (typeof Swal !== 'undefined') {
                Swal.fire({
                    title: 'Confirmer la suppression',
                    html: `Êtes-vous sûr de vouloir supprimer l'utilisateur <strong>${username}</strong> ?`,
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#ef4444',
                    cancelButtonColor: '#6b7280',
                    confirmButtonText: 'Oui, supprimer',
                    cancelButtonText: 'Annuler',
                    reverseButtons: true
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                    }
                });
            } else {
                if (confirm(`⚠️ Êtes-vous sûr de vouloir supprimer l'utilisateur "${username}" ?\n\nCette action est irréversible.`)) {
                    form.submit();
                }
            }
        });
    });

    // Recherche en temps réel
    const searchInput = document.querySelector('input[placeholder*="Rechercher"]');
    if (searchInput) {
        searchInput.addEventListener('input', function() {
            const searchTerm = this.value.toLowerCase();
            const rows = document.querySelectorAll('tbody tr');
            
            rows.forEach(row => {
                const text = row.textContent.toLowerCase();
                const isVisible = text.includes(searchTerm);
                row.style.display = isVisible ? '' : 'none';
                
                if (isVisible) {
                    row.style.animation = 'fadeIn 0.3s ease';
                }
            });
        });
    }

    // Animation au survol des cartes statistiques
    document.querySelectorAll('.stats-card').forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-8px) scale(1.02)';
        });
        
        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0) scale(1)';
        });
    });
</script>

<style>
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(10px); }
        to { opacity: 1; transform: translateY(0); }
    }
    
    /* Styles pour la pagination Bootstrap */
    .pagination .page-link {
        color: #667eea;
        border: none;
        border-radius: 0.5rem;
        margin: 0 0.25rem;
        padding: 0.5rem 0.75rem;
        transition: all 0.3s ease;
    }
    
    .pagination .page-link:hover {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(102, 126, 234, 0.3);
    }
    
    .pagination .page-item.active .page-link {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        border: none;
        box-shadow: 0 4px 12px rgba(102, 126, 234, 0.3);
    }
    
    /* Responsive amélioré */
    @media (max-width: 768px) {
        .header-gradient {
            text-align: center;
        }
        
        .header-gradient .col-md-4 {
            margin-top: 1rem;
            text-align: center !important;
        }
        
        .action-btn {
            padding: 0.4rem;
            font-size: 0.875rem;
        }
        
        .stats-card {
            margin-bottom: 1rem;
        }
    }
</style>
@endsection