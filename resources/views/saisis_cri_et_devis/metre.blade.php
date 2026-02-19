@extends('layouts.base')
@section('content')
  <!---->
  <div class="kt-container-fluid">
    <!-- begin: works -->
    <div class="flex flex-col items-stretch gap-5 lg:gap-7.5">
      <!-- Début Toolbar -->
      <div class="pb-5">
        <!-- Conteneur de la toolbar -->
        <div class="kt-container-fluid flex items-center justify-between flex-wrap gap-3">
          <!-- Titre -->
          <div class="flex items-center flex-wrap gap-1.5 lg:gap-2.5">
            <h1 class="text-lg text-foreground font-semibold">
              Compte rendu de métré
            </h1>
          </div>
          <div class="flex items-center flex-wrap gap-1.5 lg:gap-2.5">
            <!-- Barre de recherche -->
            <div class="flex items-center gap-3 grow max-w-[600px]">
              <div class="kt-input w-full">
                <i class="ki-filled ki-magnifier"></i>
                <input type="text" placeholder="Rechercher" />
              </div>
              <button class="kt-btn kt-btn-primary" data-kt-drawer-toggle="#drawers_shop_filter">
                Rechercher
              </button>
            </div>

          </div>
        </div>
        <!-- Fin conteneur -->
      </div>
      <!-- Fin Toolbar -->

      <div id="teams_cards" class="" style="">
        <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-5 lg:gap-7.5">

          <!-- Début kanban vue 1 -->
          <div class="kt-card">
            <div class="kt-card-content grid gap-7 py-7.5">
              <div class="grid place-items-center gap-4">
                <div class="grid place-items-center">
                  <a class="text-base font-medium text-mono hover:text-primary mb-px" href="{{url(' ')}}">
                    Compte rendu de Métré
                  </a>
                  <span class="text-sm text-secondary-foreground text-center">
                    Details de la demande
                  </span>
                </div>
              </div>
              <div class="grid">
                <div class="flex items-center justify-between flex-wrap mb-3.5 gap-2">
                  <span class="text-xs text-secondary-foreground uppercase">
                    <i class="ki-solid ki-user "></i>
                    Client:
                  </span>
                  <div class="flex flex-wrap gap-1.5">
                    <span class="text-xs text-secondary-foreground uppercase">
                      <!--Nom du client-->
                    </span>
                  </div>
                </div>
                <div class="border-t border-input border-dashed">
                </div>
                <div class="flex items-center justify-between flex-wrap my-2.5 gap-2">
                  <span class="text-xs text-secondary-foreground uppercase">
                    <i class="ki-solid ki-question "></i>
                    Demande:
                  </span>
                  <div class="flex flex-wrap gap-1.5">
                    <span class="text-xs text-secondary-foreground uppercase">
                      <!--Numéro de la demande-->
                    </span>
                  </div>
                </div>
                <div class="border-t border-input border-dashed mb-3.5">
                </div>
                <div class="flex items-center justify-between flex-wrap mb-3.5 gap-2">
                  <span class="text-xs text-secondary-foreground uppercase">
                    <i class="ki-solid ki-calendar "></i>
                    Date de demande:
                  </span>
                  <div class="flex flex-wrap gap-1.5">
                    <span class="text-xs text-secondary-foreground uppercase">
                      <!--Date d'emission de la demande-->
                    </span>
                  </div>
                </div>
                <div class="border-t border-input border-dashed">
                </div>
              </div>
            </div>
            <div class="kt-card-footer justify-center gap-5">
              <button class="kt-btn" data-kt-modal-toggle="#modal_formulaire_metre">
                <i class="ki-filled ki-pencil "></i>
                CRI Métré
              </button>
              @include('saisis_cri_et_devis.form_metre')
              <button class="kt-btn kt-btn-outline">
                <a href="{{url(' ')}}">
                  <i class="ki-filled ki-cheque"></i>
                  Devis
                </a>
              </button>
            </div>
          </div>
          <!-- Fin kanban vue 1 -->

          <!-- Début kanban vue 2 -->
          <div class="kt-card">
            <div class="kt-card-content grid gap-7 py-7.5">
              <div class="grid place-items-center gap-4">
                <div class="grid place-items-center">
                  <a class="text-base font-medium text-mono hover:text-primary mb-px" href="{{url(' ')}}">
                    Compte rendu de Métré
                  </a>
                  <span class="text-sm text-secondary-foreground text-center">
                    Details de la demande
                  </span>
                </div>
              </div>
              <div class="grid">
                <div class="flex items-center justify-between flex-wrap mb-3.5 gap-2">
                  <span class="text-xs text-secondary-foreground uppercase">
                    <i class="ki-solid ki-user "></i>
                    Client:
                  </span>
                  <div class="flex flex-wrap gap-1.5">
                    <span class="text-xs text-secondary-foreground uppercase">
                      <!--Nom du client-->
                    </span>
                  </div>
                </div>
                <div class="border-t border-input border-dashed">
                </div>
                <div class="flex items-center justify-between flex-wrap my-2.5 gap-2">
                  <span class="text-xs text-secondary-foreground uppercase">
                    <i class="ki-solid ki-question "></i>
                    Demande:
                  </span>
                  <div class="flex flex-wrap gap-1.5">
                    <span class="text-xs text-secondary-foreground uppercase">
                      <!--Numéro de la demande-->
                    </span>
                  </div>
                </div>
                <div class="border-t border-input border-dashed mb-3.5">
                </div>
                <div class="flex items-center justify-between flex-wrap mb-3.5 gap-2">
                  <span class="text-xs text-secondary-foreground uppercase">
                    <i class="ki-solid ki-calendar "></i>
                    Date de demande:
                  </span>
                  <div class="flex flex-wrap gap-1.5">
                    <span class="text-xs text-secondary-foreground uppercase">
                      <!--Date d'emission de la demande-->
                    </span>
                  </div>
                </div>
                <div class="border-t border-input border-dashed">
                </div>
              </div>
            </div>
            <div class="kt-card-footer justify-center gap-5">
              <a class="kt-btn kt-btn-primary">
                <i class="ki-filled ki-check-circle"></i>
                Terminé
              </a>
              <a class="kt-btn kt-btn-outline ">
                <i class="ki-filled ki-cheque"></i>
                Devis
              </a>
            </div>
          </div>
          <!-- Fin kanban vue 2 -->

          <!-- Début kanban vue  -->

          <!-- Fin kanban vue  -->

        </div>
        <!-- end: cards -->

@endsection