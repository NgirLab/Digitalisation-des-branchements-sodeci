@extends('layouts.base')
@section('content')
  <div class="kt-container-fluid">
    <div class="flex flex-col items-stretch gap-5 lg:gap-4">
      <!-- Début Toolbar -->
      <div class="pb-5">
        <!-- Conteneur de la toolbar -->
        <div class="kt-container-fluid flex items-center justify-between flex-wrap gap-3">
          <!-- Titre -->
          <div class="flex items-center flex-wrap gap-1.5 lg:gap-2.5">
            <h1 class="text-lg text-foreground font-semibold">
              Affecter pour Métré
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
            <!-- Bouton d'enregistrement final -->
            <div class="flex items-center gap-2 grow max-w-[600px]">
              <button id="saveAffectation" class="kt-btn kt-btn-primary" disabled>
                Enregistrer les affectations
              </button>
            </div>
          </div>
        </div>
        <!-- Fin conteneur de la toolbar -->
      </div>
      <!-- Fin Toolbar -->
      <!-- Début conteneur cards -->
      <div id="teams_cards" class="" style="">
        <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-5 lg:gap-7.5">
          <!-- Début bloc vue  -->
          <div class="kt-card">
            <div class="kt-card-content grid gap-7 py-7.5">
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
                    Client:
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
                    <i class="ki-solid ki-calendar "></i>
                    Date de demande:
                  </span>
                  <div class="flex flex-wrap gap-1.5">
                    <span class="text-xs text-secondary-foreground uppercase">
                      25/03/2025
                    </span>
                  </div>
                </div>
                <div class="border-t border-input border-dashed mb-3.5">
                </div>
                <div class="flex items-center justify-between flex-wrap mb-3.5 gap-2">
                  <span class="text-xs text-secondary-foreground uppercase">
                    <i class="ki-solid ki-user-tick "></i>
                    Metreur :
                  </span>
                  <div class="flex flex-wrap gap-1.5">
                    <span class="text-xs text-secondary-foreground uppercase">
                      KOUAKOU KOUASSI MARC
                    </span>
                  </div>
                </div>
                <div class="border-t border-input border-dashed">
                </div>
              </div>
            </div>
            <div class="kt-card-footer justify-center">
              <button class="kt-btn kt-btn-primary" data-kt-modal-toggle="#modal_affectation_metre">
                <i class="ki-filled ki-user-edit"></i>
                Affecter à un agent
              </button>
              <button class="kt-btn kt-btn-primary" data-kt-modal-toggle="#modal_affectation_metre" style="display:none;">
                <i class="ki-filled ki-user-edit"></i>
                Modifier l'affectation
              </button>

            </div>
          </div>
          <!-- Fin bloc vue  -->
        </div>
      </div>
      <!-- Fin conteneur cards -->
    </div>
  </div>
@endsection
@include('affectations.details_affectation_metre')
<!-- Debut script  -->
<script>
  document.addEventListener('change', function (e) {
    if (e.target.classList.contains('agent-checkbox')) {

      const checkboxes = document.querySelectorAll('.agent-checkbox');
      let isChecked = false;

      checkboxes.forEach(cb => {
        if (cb !== e.target) {
          cb.checked = false;
        }
        if (cb.checked) {
          isChecked = true;
        }
      });

      document.getElementById('validateAgentBtn').disabled = !isChecked;
    }
  });

  // Handle affectation validation
  document.addEventListener('click', function (e) {
    if (e.target.id === 'btn_valider_affectation_metre') {
      // Find the first card's affectation button
      const firstCard = document.querySelector('#teams_cards .kt-card');
      const affectButton = firstCard.querySelector('button[data-kt-modal-toggle="#modal_affectation_metre"]:not([style*="display:none"])');
      const modifyButton = firstCard.querySelector('button[data-kt-modal-toggle="#modal_affectation_metre"][style*="display:none"]');

      if (affectButton) {
        // Change the affect button to modify button
        affectButton.innerHTML = '<i class="ki-filled ki-user-edit"></i> Modifier l\'affectation';
        affectButton.setAttribute('data-kt-modal-toggle', '#affectations_modal');
      }

      // Close the modal using KT modal's dismissal mechanism
      const dismissBtn = document.querySelector('[data-kt-modal-dismiss="#modal_affectation_metre"]');
      if (dismissBtn) {
        dismissBtn.click();
      }
    }
  });
</script>
<!--<script>
  document.getElementById('validateAgentBtn').addEventListener('click', () => {
    const selected = document.querySelector('.agent-checkbox:checked');

    if (!selected) return;

    const agentId = selected.value;
    console.log('Agent sélectionné :', agentId);
    // ici : submit form, ajax, modal suivante, etc.
  });
</script>-->
<!-- Fin script  -->