@extends('layouts.base')
@section('content')
    <!-- Début Toolbar -->
    <div class="pb-5">
        <div class="kt-container-fluid flex items-center justify-between flex-wrap gap-3">
            <!-- Titre & Fil d'ariane -->
            <div class="flex flex-col flex-wrap gap-1">
                <h1 class="text-lg text-foreground font-semibold flex items-center gap-2">
                    Détail de la demande
                    <span class="text-gray-500 fs-6 fw-normal">#<span id="header_demande_id">Loading...</span></span>
                </h1>
                <ul class="flex items-center gap-1 text-sm text-gray-600">
                    <li><a href="{{ url('/liste_demandes') }}" class="text-gray-600 hover:text-primary">Demandes</a></li>
                    <li><i class="ki-filled ki-right text-xs"></i></li>
                    <li class="text-gray-900 fw-bold">Fiche détail</li>
                </ul>
            </div>

            <!-- Actions Fixes (Top Right) -->
            <div class="flex items-center gap-2" id="top_actions_container">
                <!-- Skeleton Actions -->
                <div class="skeleton-action h-10 w-32 bg-gray-200 rounded animate-pulse"></div>
                <!-- Les boutons seront injectés ici via JS selon permissions -->
            </div>
        </div>
    </div>
    <!-- Fin Toolbar -->

    <!-- Container Principal -->
    <div class="kt-container-fluid">
        <!-- HEADER DEMANDE (Card Compacte) -->
        <div class="kt-card mb-5 mb-xl-8">
            <div class="kt-card-body pt-9 pb-0">
                <!-- Détails Header -->
                <div class="d-flex flex-wrap flex-sm-nowrap">
                    <!-- Icone / Image -->
                    <div class="me-7 mb-4">
                        <div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
                            <div
                                class="d-flex align-items-center justify-content-center bg-light-primary rounded w-100px h-100px">
                                <i class="ki-filled ki-file-added text-primary fs-1 text-5xl"></i>
                            </div>
                            <div class="position-absolute translate-middle bottom-0 start-100 mb-6 bg-success rounded-circle border border-4 border-body h-20px w-20px"
                                title="Synchronisé"></div>
                        </div>
                    </div>

                    <!-- Info -->
                    <div class="flex-grow-1">
                        <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
                            <div class="d-flex flex-col">
                                <div class="d-flex align-items-center mb-2">
                                    <span class="text-gray-900 text-hover-primary fs-2 fw-bold me-1"
                                        id="header_client_name">Chargement...</span>
                                    <span class="badge badge-light-warning fw-bold ms-2 fs-8 py-1 px-3"
                                        id="header_status_badge">
                                        <span
                                            class="spinner-border spinner-border-sm w-15px h-15px align-middle text-gray-400"></span>
                                    </span>
                                </div>

                                <div class="d-flex flex-wrap fw-semibold fs-6 mb-4 pe-2 gap-4 text-gray-500">
                                    <span class="d-flex align-items-center gap-1">
                                        <i class="ki-filled ki-profile-circle text-gray-400 fs-4"></i>
                                        <span id="header_actor">...</span>
                                    </span>
                                    <span class="d-flex align-items-center gap-1">
                                        <i class="ki-filled ki-geolocation text-gray-400 fs-4"></i>
                                        <span id="header_agency">...</span>
                                    </span>
                                    <span class="d-flex align-items-center gap-1">
                                        <i class="ki-filled ki-calendar text-gray-400 fs-4"></i>
                                        <span id="header_date">...</span>
                                    </span>
                                </div>
                            </div>

                            <!-- Indicateurs Dropdown ou Status -->
                            <div class="d-flex my-4">
                                <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                    <div class="d-flex align-items-center">
                                        <div class="fs-2 fw-bold counted" id="header_step_code">...</div>
                                    </div>
                                    <div class="fw-semibold fs-6 text-gray-400">Étape Actuelle</div>
                                </div>

                                <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 mb-3">
                                    <div class="d-flex align-items-center">
                                        <span class="fs-2 fw-bold text-danger" id="header_delay">--</span>
                                    </div>
                                    <div class="fw-semibold fs-6 text-gray-400">Retard (Jours)</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Tabs de navigation (Optionnel, si on veut filtrer la vue) -->
                <div class="d-flex overflow-auto h-55px">
                    <ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bold flex-nowrap">
                        <li class="nav-item">
                            <a class="nav-link text-active-primary me-6 active" href="#section_general">Vue d'ensemble</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-active-primary me-6" href="#section_history">Historique</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- CONTENU PRINCIPAL (GRID) -->
        <div class="grid grid-cols-1 xl:grid-cols-3 gap-5 gap-xl-8">

            <!-- COLONNE GAUCHE (2/3) -->
            <div class="xl:col-span-2 flex flex-col gap-5 gap-xl-8">

                <!-- SECTION 1: Informations Client -->
                <div class="kt-card card-flush h-full" id="card_client_info">
                    <div class="kt-card-header pt-5">
                        <div class="kt-card-title flex items-center gap-2">
                            <i class="ki-filled ki-user text-xl text-primary"></i>
                            <span class="card-label fw-bold text-gray-900">Informations Client</span>
                        </div>
                    </div>
                    <div class="kt-card-body pt-0">
                        <!-- Loading State -->
                        <div class="loading-skeleton py-5">
                            <div class="h-4 bg-gray-200 rounded w-3/4 mb-3 animate-pulse"></div>
                            <div class="h-4 bg-gray-200 rounded w-1/2 mb-3 animate-pulse"></div>
                            <div class="h-4 bg-gray-200 rounded w-full animate-pulse"></div>
                        </div>
                        <!-- Content injected via JS -->
                        <div class="content-data hidden grid grid-cols-1 md:grid-cols-2 gap-4">
                            <!-- Dynamic fields -->
                        </div>
                    </div>
                </div>

                <!-- SECTION 2: Données de la demande -->
                <div class="kt-card card-flush" id="card_demande_data">
                    <div class="kt-card-header pt-5">
                        <div class="kt-card-title flex items-center gap-2">
                            <i class="ki-filled ki-notepad-edit text-xl text-primary"></i>
                            <span class="card-label fw-bold text-gray-900">Détails Techniques</span>
                        </div>
                    </div>
                    <div class="kt-card-body pt-0">
                        <div class="loading-skeleton py-5">
                            <div class="h-4 bg-gray-200 rounded w-full mb-3 animate-pulse"></div>
                            <div class="h-4 bg-gray-200 rounded w-full mb-3 animate-pulse"></div>
                        </div>
                        <div class="content-data hidden"></div>
                    </div>
                </div>

                <!-- SECTION 4: Interventions Terrain -->
                <div class="kt-card card-flush" id="card_interventions">
                    <div class="kt-card-header pt-5">
                        <div class="kt-card-title flex items-center gap-2">
                            <i class="ki-filled ki-wrench text-xl text-primary"></i>
                            <span class="card-label fw-bold text-gray-900">Interventions Terrain</span>
                        </div>
                    </div>
                    <div class="kt-card-body pt-0">
                        <div class="notice d-flex bg-light-primary rounded border-primary border border-dashed mb-9 p-6">
                            <i class="ki-filled ki-information-5 fs-2tx text-primary me-4"></i>
                            <div class="d-flex flex-stack flex-grow-1">
                                <div class="fw-semibold">
                                    <h4 class="text-gray-900 fw-bold">Compte Rendu d'Intervention</h4>
                                    <div class="fs-6 text-gray-700">Aucune intervention planifiée pour le moment.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- SECTION 5: Devis -->
                <div class="kt-card card-flush" id="card_devis">
                    <div class="kt-card-header pt-5">
                        <div class="kt-card-title flex items-center gap-2">
                            <i class="ki-filled ki-calculator text-xl text-primary"></i>
                            <span class="card-label fw-bold text-gray-900">Devis & Chiffrage</span>
                        </div>
                        <div class="card-toolbar">
                            <span class="badge badge-light-secondary" id="devis_status">Non émis</span>
                        </div>
                    </div>
                    <div class="kt-card-body pt-0">
                        <!-- Table Devis Placeholder -->
                        <div class="table-responsive">
                            <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
                                <thead>
                                    <tr class="fw-bold text-muted">
                                        <th class="min-w-150px">Libellé</th>
                                        <th class="min-w-100px text-end">Montant HT</th>
                                        <th class="min-w-100px text-end">TVA</th>
                                        <th class="min-w-100px text-end">Total TTC</th>
                                    </tr>
                                </thead>
                                <tbody id="devis_table_body">
                                    <!-- Rows -->
                                </tbody>
                            </table>
                            <div class="text-center py-5 text-gray-500 empty-state">Aucun devis disponible</div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- COLONNE DROITE (1/3) -->
            <div class="xl:col-span-1 flex flex-col gap-5 gap-xl-8">

                <!-- SECTION 3: Documents -->
                <div class="kt-card card-flush" id="card_documents">
                    <div class="kt-card-header pt-5">
                        <div class="kt-card-title flex items-center gap-2">
                            <i class="ki-filled ki-file text-xl text-primary"></i>
                            <span class="card-label fw-bold text-gray-900">Pièces Jointes</span>
                        </div>
                    </div>
                    <div class="kt-card-body pt-0">
                        <div class="d-flex flex-col gap-3" id="documents_list">
                            <!-- Document Item Placeholder -->
                            <div
                                class="d-flex flex-stack bg-light-success rounded p-2 mb-2 bg-opacity-10 border border-success border-dashed">
                                <div class="d-flex align-items-center">
                                    <i class="ki-filled ki-file-up text-success fs-2 me-3"></i>
                                    <div class="fs-6 fw-bold text-gray-800">Scan_CNI.pdf</div>
                                </div>
                                <button class="btn btn-sm btn-icon btn-active-light-primary">
                                    <i class="ki-filled ki-arrow-down fs-5"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- SECTION 8: Sync Mobile -->
                <div class="kt-card card-flush" id="card_sync">
                    <div class="kt-card-header pt-5">
                        <div class="kt-card-title flex items-center gap-2">
                            <i class="ki-filled ki-phone text-xl text-gray-600"></i>
                            <span class="card-label fw-bold text-gray-900">Mobile Sync</span>
                        </div>
                    </div>
                    <div class="kt-card-body pt-0">
                        <div class="d-flex flex-column gap-2">
                            <div class="d-flex justify-content-between">
                                <span class="text-gray-500">Dernière synchro:</span>
                                <span class="text-gray-800 fw-bold" id="sync_date">--/--/--</span>
                            </div>
                            <div class="d-flex justify-content-between">
                                <span class="text-gray-500">Statut:</span>
                                <span class="badge badge-light-success" id="sync_status">OK</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- SECTION 7: Historique (Timeline) -->
                <div class="kt-card card-flush" id="card_history">
                    <div class="kt-card-header pt-5">
                        <div class="kt-card-title flex items-center gap-2">
                            <i class="ki-filled ki-time text-xl text-primary"></i>
                            <span class="card-label fw-bold text-gray-900">Historique</span>
                        </div>
                    </div>
                    <div class="kt-card-body pt-0">
                        <div class="timeline-label md-5" id="history_timeline">
                            <!-- Timeline Items will be injected here -->
                            <div class="timeline-item">
                                <div class="timeline-label fw-bold text-gray-800 fs-6">Now</div>
                                <div class="timeline-badge">
                                    <i class="fa fa-genderless text-warning fs-1"></i>
                                </div>
                                <div class="timeline-content">
                                    <span class="fw-bold text-gray-800 ps-3">Chargement de l'historique...</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Toolbar Bas de page (Actions Flottantes ou Fixes) -->
        <div class="d-flex justify-content-end py-6 gap-3" id="bottom_actions_container">
            <!-- Replicaté depuis le top via JS ou placeholders -->
        </div>

        <!-- ================= MODALES ================= -->

        <!-- Modale de Rejet -->
        <div class="modal fade" tabindex="-1" id="modal_reject">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title text-danger">Rejeter la demande</h3>
                        <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                            aria-label="Close">
                            <i class="ki-filled ki-cross fs-1"></i>
                        </div>
                    </div>
                    <div class="modal-body">
                        <p>Veuillez indiquer le motif du rejet :</p>
                        <textarea class="form-control form-control-solid" rows="4"
                            placeholder="Motif obligatoire..."></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Annuler</button>
                        <button type="button" class="btn btn-danger">Confirmer le rejet</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modale Retour Etape -->
        <div class="modal fade" tabindex="-1" id="modal_return">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title text-warning">Retourner à une étape précédente</h3>
                        <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                            aria-label="Close">
                            <i class="ki-filled ki-cross fs-1"></i>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label required">Sélectionner l'étape</label>
                            <select class="form-select form-select-solid" aria-label="Select Step">
                                <option value="">Choisir...</option>
                                <option value="1">Revue Documentaire</option>
                                <option value="2">Métré Terrain</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label required">Motif</label>
                            <textarea class="form-control form-control-solid" rows="3"
                                placeholder="Pourquoi ce retour ?"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Annuler</button>
                        <button type="button" class="btn btn-warning">Confirmer le retour</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // --- 1. CONFIGURATION & STATE ---
            const DEMANDE_ID = 123; // ID from URL in real app
            const API_BASE_URL = '/api/v1/demandes/' + DEMANDE_ID;

            // --- 2. INIT LOADING ---
            initPage();

            function initPage() {
                // Afficher les skeletons
                // fetchDemandeDetails();

                // Simulation API Call
                setTimeout(() => {
                    mockApiLoadSuccess();
                }, 1000);
            }

            // --- 3. MOCK DATA RENDERER (To be replaced by real axios calls) ---
            function mockApiLoadSuccess() {
                // Header Data
                document.getElementById('header_demande_id').innerText = 'BAR-00123';
                document.getElementById('header_client_name').innerText = 'Kouakou Jean Paul';

                const badge = document.getElementById('header_status_badge');
                badge.className = 'badge badge-light-info fw-bold ms-2 fs-8 py-1 px-3';
                badge.innerText = 'EN COURS';

                document.getElementById('header_actor').innerText = 'Koukougnon Marcel';
                document.getElementById('header_agency').innerText = 'Djorogobite';
                document.getElementById('header_date').innerText = '15/03/2025';
                document.getElementById('header_step_code').innerText = 'CRI';
                document.getElementById('header_delay').innerText = '25';

                // Hide Skeletons & Show Content (Generic approach)
                document.querySelectorAll('.loading-skeleton').forEach(el => el.classList.add('hidden'));
                document.querySelectorAll('.content-data').forEach(el => el.classList.remove('hidden'));

                // Client Info Injection
                const clientContainer = document.querySelector('#card_client_info .content-data');
                clientContainer.innerHTML = `
                                                                            <div class="d-flex flex-col mb-3">
                                                                                <span class="text-gray-500 fs-7">Téléphone</span>
                                                                                <span class="text-gray-800 fw-bold">+225 07 07 07 07 07</span>
                                                                            </div>
                                                                            <div class="d-flex flex-col mb-3">
                                                                                <span class="text-gray-500 fs-7">Email</span>
                                                                                <span class="text-gray-800 fw-bold">jean.kouakou@email.com</span>
                                                                            </div>
                                                                            <div class="d-flex flex-col mb-3 col-span-2">
                                                                                <span class="text-gray-500 fs-7">Adresse Branchement</span>
                                                                                <span class="text-gray-800 fw-bold">Cocody Riviera 3, Rue des Jardins, Villa 124</span>
                                                                            </div>
                                                                        `;

                // Render Actions based on permissions
                renderActions({
                    canValidate: true,
                    canReject: true,
                    canReturn: true,
                    canViewCRI: false
                });

                // History mock
                renderHistory();
            }

            function renderActions(permissions) {
                const containerTop = document.getElementById('top_actions_container');
                const containerBottom = document.getElementById('bottom_actions_container');
                let html = '';

                if (permissions.canReject) {
                    html += `<button class="btn btn-sm btn-danger me-2" data-bs-toggle="modal" data-bs-target="#modal_reject">Rejeter</button>`;
                }
                if (permissions.canReturn) {
                    html += `<button class="btn btn-sm btn-warning me-2" data-bs-toggle="modal" data-bs-target="#modal_return">Retour étape</button>`;
                }
                if (permissions.canValidate) {
                    html += `<button class="btn btn-sm btn-success">Valider la demande</button>`;
                }

                containerTop.innerHTML = html;
                containerBottom.innerHTML = html; // Duplicate for ease of access
            }

            function renderHistory() {
                const timeline = document.getElementById('history_timeline');
                timeline.innerHTML = `
                                                                            <div class="timeline-item">
                                                                                <div class="timeline-label fw-bold text-gray-800 fs-6">10:00</div>
                                                                                <div class="timeline-badge">
                                                                                    <i class="ki-filled ki-check-circle text-success fs-1"></i>
                                                                                </div>
                                                                                <div class="timeline-content d-flex flex-column ps-3">
                                                                                    <span class="fw-bold text-gray-800">Dossier Validé</span>
                                                                                    <span class="text-gray-500 fs-7">Par Admin Système</span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="timeline-item">
                                                                                <div class="timeline-label fw-bold text-gray-800 fs-6">09:15</div>
                                                                                <div class="timeline-badge">
                                                                                    <i class="ki-filled ki-file text-primary fs-1"></i>
                                                                                </div>
                                                                                <div class="timeline-content d-flex flex-column ps-3">
                                                                                    <span class="fw-bold text-gray-800">Pièce jointe ajoutée</span>
                                                                                    <span class="text-gray-500 fs-7">Scan_Mise_Service.pdf</span>
                                                                                </div>
                                                                            </div>
                                                                        `;
            }

            // --- 4. EVENT LISTENERS ---
            // Add listeners for dynamic buttons here
        });
    </script>
    <style>
        /* Custom Styling Fixes for Timeline if Metronic CSS is not fully governing this version */
        .timeline-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 1.5rem;
        }

        .timeline-label {
            width: 60px;
            flex-shrink: 0;
        }

        .timeline-badge {
            flex-shrink: 0;
            background: transparent;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 30px;
        }

        .timeline-content {
            flex-grow: 1;
        }
    </style>
@endpush