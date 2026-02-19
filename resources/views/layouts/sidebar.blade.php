<!-- Start Sidebar  -->
<div class="fixed top-(--header-height) bottom-0 z-20 hidden lg:flex flex-col items-stretch shrink-0 bg-muted transition-all duration-300 [--kt-drawer-enable:true] lg:[--kt-drawer-enable:false] lg:w-(--sidebar-width) sidebar-container"
    data-kt-drawer="true" data-kt-drawer-class="kt-drawer kt-drawer-start flex" id="sidebar"
    data-sidebar-collapsed="false">
    <div class="kt-scrollable-y-hover grow gap-2.5 shrink-0 flex items-stretch pt-5 lg:pt-0 ps-2 pe-2 lg:pe-0 flex-col w-full lg:w-full mx-auto sidebar-menu-wrapper"
        data-kt-scrollable="true" data-kt-scrollable-dependencies="#sidebar_header,#sidebar_footer"
        data-kt-scrollable-height="auto" data-kt-scrollable-offset="80px"
        data-kt-scrollable-wrappers="#sidebar_menu_wrapper" id="sidebar_menu_wrapper">

        <!-- Sidebar Menu -->
        <div class="kt-menu flex flex-col gap-0 w-full" data-kt-menu="true" id="sidebar_menu">

            <!-- Debut item Tableau de bord -->
            <!-- CORRECTION : Utilisation de routeIs('dashboard') car la route a pour nom 'dashboard' -->
            <div
                class="kt-menu-item {{ request()->routeIs('dashboard') ? 'kt-menu-item-active kt-menu-item-here' : '' }}">
                <a class="kt-menu-link rounded-[9px] border border-transparent kt-menu-item-active:border-border kt-menu-item-active:bg-light-primary kt-menu-link-hover:bg-background kt-menu-link-hover:border-border w-full h-[45px] flex flex-row items-center gap-2 px-4 justify-center lg:justify-start"
                    href="{{ url('/dashboard') }}">
                    <span
                        class="kt-menu-icon kt-menu-item-here:text-primary kt-menu-item-active:text-primary kt-menu-link-hover:text-primary text-secondary-foreground shrink-0">
                        <i class="ki-filled ki-chart-line-star text-xl"></i>
                    </span>
                    <span
                        class="kt-menu-title text-sm kt-menu-item-here:text-primary kt-menu-item-active:text-primary kt-menu-link-hover:text-primary text-secondary-foreground font-medium sidebar-menu-title">
                        Tableau de bord
                    </span>
                </a>
            </div>

            <!-- Start Demandes item -->
            <div
                class="kt-menu-item {{ request()->routeIs('liste_demandes*') ? 'kt-menu-item-active kt-menu-item-here' : '' }}">
                <a class="kt-menu-link rounded-[9px] border border-transparent kt-menu-item-active:border-border kt-menu-item-active:bg-light-primary kt-menu-link-hover:bg-background kt-menu-link-hover:border-border w-full h-[45px] flex flex-row items-center gap-2 px-4 justify-center lg:justify-start"
                    href="{{ url('/liste_demandes') }}">
                    <span
                        class="kt-menu-icon kt-menu-item-here:text-primary kt-menu-item-active:text-primary kt-menu-link-hover:text-primary text-secondary-foreground shrink-0">
                        <i class="ki-filled ki-chart-line-star text-xl"></i>
                    </span>
                    <span
                        class="kt-menu-title text-sm kt-menu-item-here:text-primary kt-menu-item-active:text-primary kt-menu-link-hover:text-primary text-secondary-foreground font-medium sidebar-menu-title">
                        Demandes
                    </span>
                </a>
            </div>

            <!-- Start Affectations item -->
            <div class="kt-menu-item {{ request()->is('affectation*') ? 'kt-menu-item-active kt-menu-item-here' : '' }}"
                data-kt-menu-item-offset="-10px, 14px" data-kt-menu-item-overflow="true"
                data-kt-menu-item-placement="right-start" data-kt-menu-item-toggle="dropdown"
                data-kt-menu-item-trigger="click|lg:hover">
                <div
                    class="kt-menu-link rounded-[9px] border border-transparent kt-menu-item-active:border-border kt-menu-item-active:bg-light-primary kt-menu-link-hover:bg-background kt-menu-link-hover:border-border w-full h-[45px] flex flex-row items-center gap-2 px-4 justify-center lg:justify-start">
                    <span
                        class="kt-menu-icon kt-menu-item-here:text-primary kt-menu-item-active:text-primary kt-menu-link-hover:text-primary text-secondary-foreground shrink-0">
                        <i class="ki-filled ki-briefcase text-xl"></i>
                    </span>
                    <span
                        class="kt-menu-title text-sm kt-menu-item-here:text-primary kt-menu-item-active:text-primary kt-menu-link-hover:text-primary text-secondary-foreground font-medium sidebar-menu-title">
                        Affectations et planification
                    </span>
                    <span class="kt-menu-arrow sidebar-menu-arrow">
                        <i
                            class="ki-filled ki-right text-sm kt-menu-item-here:text-primary kt-menu-item-active:text-primary kt-menu-link-hover:text-primary text-secondary-foreground font-medium rtl:translate rtl:rotate-180"></i>
                    </span>
                </div>
                <div
                    class="kt-menu-default kt-menu-dropdown gap-0.5 w-[240px] kt-scrollable-y-auto lg:overflow-visible max-h-[50vh] {{ request()->routeIs('affectation*') ? 'show' : '' }}">
                    <div
                        class="kt-menu-item {{ request()->routeIs('affectation/metre') ? 'kt-menu-item-active kt-menu-item-here' : '' }}">
                        <a class="kt-menu-link" href="{{ url('/affectation/metre') }}">
                            <span class="kt-menu-title">Affecter pour Métré</span>
                        </a>
                    </div>
                    <div
                        class="kt-menu-item {{ request()->routeIs('affectation/mise_en_service') ? 'kt-menu-item-active kt-menu-item-here' : '' }}">
                        <a class="kt-menu-link" href="{{ url('/affectation/mise_en_service') }}">
                            <span class="kt-menu-title">Affecter pour Mise en service</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Start Validations item -->
            <div class="kt-menu-item {{ request()->routeIs('validations*') ? 'kt-menu-item-active kt-menu-item-here' : '' }}"
                data-kt-menu-item-offset="-10px, 14px" data-kt-menu-item-overflow="true"
                data-kt-menu-item-placement="right-start" data-kt-menu-item-toggle="dropdown"
                data-kt-menu-item-trigger="click|lg:hover">
                <div
                    class="kt-menu-link rounded-[9px] border border-transparent kt-menu-item-active:border-border kt-menu-item-active:bg-light-primary kt-menu-link-hover:bg-background kt-menu-link-hover:border-border w-full h-[45px] flex flex-row items-center gap-2 px-4 justify-center lg:justify-start">
                    <span
                        class="kt-menu-icon kt-menu-item-here:text-primary kt-menu-item-active:text-primary kt-menu-link-hover:text-primary text-secondary-foreground shrink-0">
                        <i class="ki-filled ki-folder-added text-xl"></i>
                    </span>
                    <span
                        class="kt-menu-title text-sm kt-menu-item-here:text-primary kt-menu-item-active:text-primary kt-menu-link-hover:text-primary text-secondary-foreground font-medium sidebar-menu-title">
                        Validations
                    </span>
                    <span class="kt-menu-arrow sidebar-menu-arrow">
                        <i
                            class="ki-filled ki-right text-sm kt-menu-item-here:text-primary kt-menu-item-active:text-primary kt-menu-link-hover:text-primary text-secondary-foreground font-medium rtl:translate rtl:rotate-180"></i>
                    </span>
                </div>
                <div
                    class="kt-menu-default kt-menu-dropdown gap-0.5 w-[240px] kt-scrollable-y-auto lg:overflow-visible max-h-[50vh] {{ request()->routeIs('validations*') ? 'show' : '' }}">
                    <div
                        class="kt-menu-item {{ request()->routeIs('validations/metre') ? 'kt-menu-item-active kt-menu-item-here' : '' }}">
                        <a class="kt-menu-link" href="{{ url('/validations/metre') }}">
                            <span class="kt-menu-title">CRI métré et devis à valider</span>
                        </a>
                    </div>
                    <div
                        class="kt-menu-item {{ request()->routeIs('validations/mise_en_service') ? 'kt-menu-item-active kt-menu-item-here' : '' }}">
                        <a class="kt-menu-link" href="{{ url('/validations/mise_en_service') }}">
                            <span class="kt-menu-title">CRI mise en service à valider</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Start CRI et Devis item -->
            <div class="kt-menu-item {{ request()->routeIs('compte_rendu*') || request()->routeIs('saisis_cri_et_devis*') ? 'kt-menu-item-active kt-menu-item-here' : '' }}"
                data-kt-menu-item-offset="-10px, 14px" data-kt-menu-item-overflow="true"
                data-kt-menu-item-placement="right-start" data-kt-menu-item-toggle="dropdown"
                data-kt-menu-item-trigger="click|lg:hover">
                <div
                    class="kt-menu-link rounded-[9px] border border-transparent kt-menu-item-active:border-border kt-menu-item-active:bg-light-primary kt-menu-link-hover:bg-background kt-menu-link-hover:border-border w-full h-[45px] flex flex-row items-center gap-2 px-4">
                    <span
                        class="kt-menu-icon kt-menu-item-here:text-primary kt-menu-item-active:text-primary kt-menu-link-hover:text-primary text-secondary-foreground">
                        <i class="ki-filled ki-notepad-edit text-xl"></i>
                    </span>
                    <span
                        class="kt-menu-title text-sm kt-menu-item-here:text-primary kt-menu-item-active:text-primary kt-menu-link-hover:text-primary text-secondary-foreground font-medium">
                        CRI et Devis
                    </span>
                    <span class="kt-menu-arrow">
                        <i
                            class="ki-filled ki-right text-sm kt-menu-item-here:text-primary kt-menu-item-active:text-primary kt-menu-link-hover:text-primary text-secondary-foreground font-medium rtl:translate rtl:rotate-180"></i>
                    </span>
                </div>
                <div
                    class="kt-menu-default kt-menu-dropdown gap-0.5 w-[240px] kt-scrollable-y-auto lg:overflow-visible max-h-[50vh] {{ request()->routeIs('compte_rendu*') || request()->routeIs('saisis_cri_et_devis*') ? 'show' : '' }}">
                    <div
                        class="kt-menu-item {{ request()->routeIs('compte_rendu/metre*') || request()->routeIs('saisis_cri_et_devis/*') ? 'kt-menu-item-active kt-menu-item-here' : '' }}">
                        <a class="kt-menu-link" href="{{ url('/compte_rendu/metre') }}">
                            <span class="kt-menu-title">CRI Métré et Devis</span>
                        </a>
                    </div>
                    <div
                        class="kt-menu-item {{ request()->routeIs('compte_rendu/mise_en_service*') ? 'kt-menu-item-active kt-menu-item-here' : '' }}">
                        <a class="kt-menu-link" href="{{ url('/compte_rendu/mise_en_service') }}">
                            <span class="kt-menu-title">CRI Mise en service</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Start Paiements et contrats item -->
            <div class="kt-menu-item {{ request()->routeIs('paiements*') ? 'kt-menu-item-active kt-menu-item-here' : '' }}"
                data-kt-menu-item-offset="-10px, 14px" data-kt-menu-item-overflow="true"
                data-kt-menu-item-placement="right-start" data-kt-menu-item-toggle="dropdown"
                data-kt-menu-item-trigger="click|lg:hover">
                <div
                    class="kt-menu-link rounded-[9px] border border-transparent kt-menu-item-active:border-border kt-menu-item-active:bg-light-primary kt-menu-link-hover:bg-background kt-menu-link-hover:border-border w-full h-[45px] flex flex-row items-center gap-2 px-4">
                    <span
                        class="kt-menu-icon kt-menu-item-here:text-primary kt-menu-item-active:text-primary kt-menu-link-hover:text-primary text-secondary-foreground">
                        <i class="ki-filled ki-notepad-edit text-xl"></i>
                    </span>
                    <span
                        class="kt-menu-title text-sm kt-menu-item-here:text-primary kt-menu-item-active:text-primary kt-menu-link-hover:text-primary text-secondary-foreground font-medium">
                        Paiements et contrats
                    </span>
                    <span class="kt-menu-arrow">
                        <i
                            class="ki-filled ki-right text-sm kt-menu-item-here:text-primary kt-menu-item-active:text-primary kt-menu-link-hover:text-primary text-secondary-foreground font-medium rtl:translate rtl:rotate-180"></i>
                    </span>
                </div>
                <div
                    class="kt-menu-default kt-menu-dropdown gap-0.5 w-[240px] kt-scrollable-y-auto lg:overflow-visible max-h-[50vh] {{ request()->routeIs('paiements*') ? 'show' : '' }}">
                    <div class="kt-menu-item">
                        <a class="kt-menu-link" href="#">
                            <span class="kt-menu-title">Exemple lien 1</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Start donnees_de_reference item -->
            <div class="kt-menu-item {{ request()->routeIs('donnees_de_reference*') ? 'kt-menu-item-active kt-menu-item-here' : '' }}"
                data-kt-menu-item-offset="-10px, 14px" data-kt-menu-item-overflow="true"
                data-kt-menu-item-placement="right-start" data-kt-menu-item-toggle="dropdown"
                data-kt-menu-item-trigger="click|lg:hover">
                <div
                    class="kt-menu-link rounded-[9px] border border-transparent kt-menu-item-active:border-border kt-menu-item-active:bg-light-primary kt-menu-link-hover:bg-background kt-menu-link-hover:border-border w-full h-[45px] flex flex-row items-center gap-2 px-4">
                    <span
                        class="kt-menu-icon kt-menu-item-here:text-primary kt-menu-item-active:text-primary kt-menu-link-hover:text-primary text-secondary-foreground">
                        <i class="ki-filled ki-tablet-text-up text-xl"></i>
                    </span>
                    <span
                        class="kt-menu-title text-sm kt-menu-item-here:text-primary kt-menu-item-active:text-primary kt-menu-link-hover:text-primary text-secondary-foreground font-medium">
                        Données de référence
                    </span>
                    <span class="kt-menu-arrow">
                        <i
                            class="ki-filled ki-right text-sm kt-menu-item-here:text-primary kt-menu-item-active:text-primary kt-menu-link-hover:text-primary text-secondary-foreground font-medium rtl:translate rtl:rotate-180"></i>
                    </span>
                </div>
                <div
                    class="kt-menu-default kt-menu-dropdown gap-0.5 w-[240px] kt-scrollable-y-auto lg:overflow-visible max-h-[50vh] {{ request()->routeIs('donnees_de_reference*') ? 'show' : '' }}">

                    <div
                        class="kt-menu-item {{ request()->routeIs('donnees_de_reference/liste_agences') ? 'kt-menu-item-active kt-menu-item-here' : '' }}">
                        <a class="kt-menu-link" href="{{ url('/donnees_de_reference/liste_agences') }}">
                            <span class="kt-menu-title">Liste des UO / agences</span>
                        </a>
                    </div>

                    <div
                        class="kt-menu-item {{ request()->routeIs('donnees_de_reference/modeles_devis') ? 'kt-menu-item-active kt-menu-item-here' : '' }}">
                        <a class="kt-menu-link" href="{{ url('/donnees_de_reference/modeles_devis') }}">
                            <span class="kt-menu-title">Modèles de devis</span>
                        </a>
                    </div>

                    <div
                        class="kt-menu-item {{ request()->routeIs('donnees_de_reference/diametres_branchement') ? 'kt-menu-item-active kt-menu-item-here' : '' }}">
                        <a class="kt-menu-link" href="{{ route('donnees_de_reference.diametres_branchement') }}">
                            <span class="kt-menu-title">Diamètres branchement</span>
                        </a>
                    </div>

                    <div
                        class="kt-menu-item {{ request()->routeIs('donnees_de_reference/diametres_compteur') ? 'kt-menu-item-active kt-menu-item-here' : '' }}">
                        <a class="kt-menu-link" href="{{ route('donnees_de_reference.diametres_compteur') }}">
                            <span class="kt-menu-title">Diamètres compteur </span>
                        </a>
                    </div>

                    <div
                        class="kt-menu-item {{ request()->routeIs('donnees_de_reference/nature_conduite') ? 'kt-menu-item-active kt-menu-item-here' : '' }}">
                        <a class="kt-menu-link" href="{{ url('/donnees_de_reference/nature_conduite') }}">
                            <span class="kt-menu-title">Nature conduite</span>
                        </a>
                    </div>

                    <div
                        class="kt-menu-item {{ request()->routeIs('donnees_de_reference/types_contrat_autorises') ? 'kt-menu-item-active kt-menu-item-here' : '' }}">
                        <a class="kt-menu-link" href="{{ url('/donnees_de_reference/types_contrat_autorises') }}">
                            <span class="kt-menu-title">Types de contrat autorisés</span>
                        </a>
                    </div>

                    <div
                        class="kt-menu-item {{ request()->routeIs('donnees_de_reference/liste_bordereaux_de_prix') ? 'kt-menu-item-active kt-menu-item-here' : '' }}">
                        <a class="kt-menu-link" href="{{ route('donnees_de_reference.liste_bordereaux_de_prix') }}">
                            <span class="kt-menu-title">Bordereaux de prix</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Start Administration item -->
            <div class="kt-menu-item {{ request()->routeIs('administration*') ? 'kt-menu-item-active kt-menu-item-here' : '' }}"
                data-kt-menu-item-offset="-10px, 14px" data-kt-menu-item-overflow="true"
                data-kt-menu-item-placement="right-start" data-kt-menu-item-toggle="dropdown"
                data-kt-menu-item-trigger="click|lg:hover">
                <div
                    class="kt-menu-link rounded-[9px] border border-transparent kt-menu-item-active:border-border kt-menu-item-active:bg-light-primary kt-menu-link-hover:bg-background kt-menu-link-hover:border-border w-full h-[45px] flex flex-row items-center gap-2 px-4">
                    <span
                        class="kt-menu-icon kt-menu-item-here:text-primary kt-menu-item-active:text-primary kt-menu-link-hover:text-primary text-secondary-foreground">
                        <i class="ki-filled ki-security-user text-xl"></i>
                    </span>
                    <span
                        class="kt-menu-title text-sm kt-menu-item-here:text-primary kt-menu-item-active:text-primary kt-menu-link-hover:text-primary text-secondary-foreground font-medium">
                        Utilisateurs et habilitations
                    </span>
                    <span class="kt-menu-arrow">
                        <i
                            class="ki-filled ki-right text-sm kt-menu-item-here:text-primary kt-menu-item-active:text-primary kt-menu-link-hover:text-primary text-secondary-foreground font-medium rtl:translate rtl:rotate-180"></i>
                    </span>
                </div>
                <div
                    class="kt-menu-default kt-menu-dropdown gap-0.5 w-[240px] kt-scrollable-y-auto lg:overflow-visible max-h-[50vh] {{ request()->routeIs('administration*') ? 'show' : '' }}">
                    <div
                        class="kt-menu-item {{ request()->routeIs('administration/roles_et_habilitations') ? 'kt-menu-item-active kt-menu-item-here' : '' }}">
                        <a class="kt-menu-link" href="{{ url('/administration/roles_et_habilitations') }}">
                            <span class="kt-menu-title">Rôles & habilitations</span>
                        </a>
                    </div>
                    <div class="kt-menu-item">
                        <a class="kt-menu-link" href="#"><span class="kt-menu-title">Journaux
                                d'actions</span></a>
                    </div>
                    <div class="kt-menu-item">
                        <a class="kt-menu-link" href="#"><span class="kt-menu-title">Paramétrages
                                système</span></a>
                    </div>
                </div>
            </div>

            <!-- Start Historique/audit item -->
            <div class="kt-menu-item">
                <a class="kt-menu-link rounded-[9px] border border-transparent kt-menu-item-active:border-border kt-menu-item-active:bg-light-primary kt-menu-link-hover:bg-background kt-menu-link-hover:border-border w-full h-[45px] flex flex-row items-center gap-2 px-4"
                    href="#">
                    <span
                        class="kt-menu-icon kt-menu-item-here:text-primary kt-menu-item-active:text-primary kt-menu-link-hover:text-primary text-secondary-foreground">
                        <i class="ki-filled ki-setting-2 text-xl"></i>
                    </span>
                    <span
                        class="kt-menu-title text-sm kt-menu-item-here:text-primary kt-menu-item-active:text-primary kt-menu-link-hover:text-primary text-secondary-foreground font-medium">
                        Historique/audit
                    </span>
                </a>
            </div>

        </div>
        <!-- End of Sidebar Menu -->
    </div>
</div>

<!-- Script pour forcer l'ouverture des dropdowns si nécessaire -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Cette partie sert de sécurité si le rendu Blade ne suffit pas
        const activeItems = document.querySelectorAll('.kt-menu-item-active');

        activeItems.forEach(item => {
            // Si l'item actif est dans un dropdown, on s'assure que le dropdown a la classe 'show'
            let parent = item.closest('.kt-menu-dropdown');
            if (parent) {
                parent.classList.add('show');
            }
            // Optionnel : Activer le parent visuellement
            let parentItem = item.parentElement.closest('.kt-menu-item');
            if (parentItem && !parentItem.classList.contains('kt-menu-item-active')) {
                // parentItem.classList.add('kt-menu-item-active', 'kt-menu-item-here');
            }
        });
    });
</script>
