<div>
  <div class="kt-modal" data-kt-modal="true" id="modal_affectation_metre">
    <div class="kt-modal-content max-w-[300px] top-[10%]">
      <div class="kt-modal-header">
        <h3 class="kt-modal-title">Détails de l'affectation pour métrage</h3>
        <button type="button" class="kt-modal-close" aria-label="Close modal"
          data-kt-modal-dismiss="#modal_affectation_metre">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
            class="lucide lucide-x" aria-hidden="true">
            <path d="M18 6 6 18"></path>
            <path d="m6 6 12 12"></path>
          </svg>
        </button>
      </div>
      <div class="kt-modal-body ">
        <!-- Début bloc vue  -->
        <div class="kt-card w-[90%] lg:w-[40%] mx-auto">
          <div class="kt-card-content grid gap-5 py-7.5">
            <div class="grid place-items-center gap-4">
              <div class="grid place-items-center">
                <span class="text-base font-medium text-mono mb-px">
                  Demande N°BRA1372025000045
                </span>
                <span class="text-sm text-secondary-foreground text-center">
                  Details de la demande
                </span>
              </div>
            </div>
            <div class="grid">
              <div class="flex items-center justify-between flex-wrap mb-3.5 gap-2">
                <span class="text-xs text-secondary-foreground uppercase">
                  <i class="ki-solid ki-user "></i>
                  Nom et prénoms du client:
                </span>
                <div class="flex flex-wrap gap-1.5">
                  <span class="text-xs text-secondary-foreground uppercase">
                    KOUAKOU BI GILBERT
                  </span>
                </div>
              </div>
              <div class="border-t border-input border-dashed">
              </div>
              <div class="flex items-center justify-between flex-wrap my-2.5 gap-2">
                <span class="text-xs text-secondary-foreground uppercase">
                  <i class="ki-solid ki-autobrightness "></i>
                  Référence de la demande:
                </span>
                <div class="flex flex-wrap gap-1.5">
                  <span class="text-xs text-secondary-foreground uppercase">
                    BRQ1372025000045
                  </span>
                </div>
              </div>
              <div class="border-t border-input border-dashed mb-3.5">
              </div>
              <div class="flex items-center justify-between flex-wrap mb-3.5 gap-2">
                <span class="text-xs text-secondary-foreground uppercase">
                  <i class="ki-solid ki-calendar "></i>
                  Date d'inititiation de la demande:
                </span>
                <div class="flex flex-wrap gap-1.5">
                  <span class="text-xs text-secondary-foreground uppercase">
                    25/03/2025
                  </span>
                </div>
              </div>
              <div class="border-t border-input border-dashed">
              </div>
              <div class="flex items-center justify-between flex-wrap my-2.5 gap-2">
                <span class="text-xs text-secondary-foreground uppercase">
                  <i class="ki-solid ki-user-tick "></i>
                  Nom et Prénom du métreur affecté:
                </span>
                <div class="flex flex-wrap w-[280px]">
                  <select class="kt-select w-full" data-kt-select="true" data-kt-select-remote="true"
                    data-kt-select-data-url="https://jsonplaceholder.typicode.com/users"
                    data-kt-select-data-field-value="id" data-kt-select-data-field-text="name"
                    data-kt-select-enable-search="true" data-kt-select-search-param="q"
                    data-kt-select-search-min-length="2" data-kt-select-search-debounce="300"
                    data-kt-select-debug="true" data-kt-select-placeholder="Rechercher un agent...">
                  </select>
                </div>
              </div>
              <div class="border-t border-input border-dashed mb-3.5">
              </div>

            </div>
          </div>
        </div>
        <!-- Fin bloc vue  -->
      </div>
      <div class="kt-modal-footer">
        <div></div>
        <div class="flex gap-4">
          <button class="kt-btn kt-btn-secondary" data-kt-modal-dismiss="#modal_affectation_metre">
            Annuler
          </button>
          <button class="kt-btn" id="btn_valider_affectation_metre">
            Valider le choix
          </button>
        </div>
      </div>
    </div>
  </div>
</div>