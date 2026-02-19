@extends('layouts.base')
@section('content')
 <!-- bouton test  -->
<button class="group kt-btn kt-btn-ghost kt-btn-icon size-9 hover:bg-primary/10 hover:[&_i]:text-primary" data-kt-modal-toggle="#search_modal">
<i class="ki-filled ki-magnifier text-lg group-hover:text-primary">
</i>
</button>
<!-- Fin bouton test --> 

<!-- Début modal  -->
<div class="kt-modal" data-kt-modal="true" id="search_modal">
  <div class="kt-modal-content max-w-[90%] top-[15%] flex flex-col gap-5">
    <!-- Début barre de recherche -->
    <div class="kt-modal-header py-4 px-5">
            <i class="ki-filled ki-magnifier text-muted-foreground text-xl"></i>
            <input class="kt-input kt-input-ghost" name="query" placeholder="Taper pour initier une recherche" type="text" value="">
            <button class="kt-btn kt-btn-sm kt-btn-icon kt-btn-dim shrink-0" data-kt-modal-dismiss="true">
            <i class="ki-filled ki-cross"></i>
            </button>
            </input>
    </div>
    <!-- Fin barre de recherche --> 

    <!-- Début Tableau -->
    <div class="kt-modal-body p-0 pb-0">
      <div class="kt-tabs kt-tabs-line justify-between px-5 py-5 mb-2.5" data-kt-tabs="true">
        <!-- Début Tableau -->
        <div class="kt-card kt-card-grid min-w-full">
          <!-- Titre + boutons en-tête tableau-->
          <div class="kt-card-header flex-wrap gap-2">
              <h3 class="kt-card-title text-sm">
              Sélectionner un agent
              </h3>
              <div class="flex flex-wrap gap-2 lg:gap-5">
              
              <div class="flex flex-wrap gap-2.5">
              <select class="kt-select w-36" data-kt-select="true" data-kt-select-placeholder="Trier par statut">
                <option value="1">
                Actif
                </option>
                <option value="2">
                Inactif
                </option>
              </select>
              <select class="kt-select w-36" data-kt-select="true" data-kt-select-placeholder="Trier par date d'ajout">
              <option value="1">
              Plus récent
              </option>
              <option value="2">
              Plus ancien
              </option>
              </select>
              <button class="kt-btn kt-btn-outline kt-btn-primary">
              <i class="ki-filled ki-setting-4">
              </i>
              Trier
              </button>
              <button id="validateAgentBtn" class="kt-btn kt-btn-outline kt-btn-primary" disabled>
                Valider
              </button>
              </div>
              </div>
          </div>
          <!-- Fin Titre + boutons en-tête tableau-->
          <div class="kt-card-content">
            <div data-kt-datatable="true" data-kt-datatable-state-save="false" id="team_crew_table">
              <div class="kt-scrollable-x-auto">
                  <table class="kt-table table-auto kt-table-border" data-kt-datatable-table="true">
                    <!-- En-tête tableau-->
                    <thead>
                      <tr>
                        <th class="min-w-[180px]">
                          <span class="kt-table-col">
                          <span class="kt-table-col-label">
                          Matricule
                          </span>
                          <span class="kt-table-col-sort">
                          </span>
                          </span>
                        </th>
                        <th class="min-w-[300px]">
                          <span class="kt-table-col">
                          <span class="kt-table-col-label">
                          Nom & Prénoms
                          </span>
                          <span class="kt-table-col-sort">
                          </span>
                          </span>
                        </th>
                        <th class="min-w-[180px]">
                          <span class="kt-table-col">
                          <span class="kt-table-col-label">
                          Agence
                          </span>
                          <span class="kt-table-col-sort">
                          </span>
                          </span>
                        </th>
                        <th class="min-w-[180px]">
                          <span class="kt-table-col">
                          <span class="kt-table-col-label">
                          Rôle
                          </span>
                          <span class="kt-table-col-sort">
                          </span>
                          </span>
                        </th>
                        <th class="min-w-[180px]">
                          <span class="kt-table-col">
                          <span class="kt-table-col-label">
                          Statut
                          </span>
                          <span class="kt-table-col-sort">
                          </span>
                          </span>
                        </th>
                        <th class="min-w-[120px]">
                          <span class="kt-table-col">
                          <span class="kt-table-col-label">
                          Actions
                          </span>
                          <span class="kt-table-col-sort">
                          </span>
                          </span>
                        </th>
                      </tr>
                    </thead>
                    <!--Contenu tableau-->
                    <tbody>
                      <tr> 
                        <td> 
                          MAT2025001
                        </td>
                        <td class="text-foreground font-normal">
                          <div class="flex flex-col">
                          <span class="text-sm  font-normal text-mono mb-px" href="#">
                          Koukougnon Jean Paul 
                          </span>
                          </div>
                        </td>
                        <td>
                          SODECI-COCODY
                        </td>
                        <td>
                          Metreur
                        </td>
                        <td class="text-foreground font-normal">
                          <span class="kt-badge kt-badge-success kt-badge-outline rounded-[30px]">
                          <span class="kt-badge-dot size-1.5">
                          </span>
                          Actif
                          </span>
                        </td>
                        <td class="text-center">
                          <input type="checkbox" class="kt-checkbox kt-checkbox-sm agent-checkbox"
                          value="id_agent">
                        </td>
                      </tr>
                      <tr> 
                        <td> 
                          MAT2025002
                        </td>
                        <td class="text-foreground font-normal">
                          <div class="flex flex-col">
                          <span class="text-sm  font-normal text-mono mb-px" href="#">
                          Kouassi Jean Luc
                          </span>
                          </div>
                        </td>
                        <td>
                          SODECI-YOPOUGON
                        </td>
                        <td>
                          Metreur
                        </td>
                        <td class="text-foreground font-normal">
                          <span class="kt-badge kt-badge-destructive kt-badge-outline rounded-[30px]">
                          <span class="kt-badge-dot size-1.5">
                          </span>
                          Inactif
                          </span>
                        </td>
                        <td class="text-center">
                          <input type="checkbox" class="kt-checkbox kt-checkbox-sm agent-checkbox"
                          value="id_agent">
                        </td>
                      </tr>
                      <tr> 
                        <td> 
                          <!--Ajouter element-->
                        </td>
                        <td class="text-foreground font-normal">
                          <div class="flex flex-col">
                          <span class="text-sm  font-normal text-mono mb-px" href="#">
                          <!--Ajouter element-->
                          </span>
                          </div>
                        </td>
                        <td>
                          <!--Ajouter element-->
                        </td>
                        <td>
                          <!--Ajouter element-->
                        </td>
                        <td class="text-foreground font-normal">
                          <!--Ajouter element-->
                        </td>
                        <td class="text-center">
                          <input type="checkbox" class="kt-checkbox kt-checkbox-sm agent-checkbox"
                          value="id_agent">
                        </td>
                      </tr>
                      <tr> 
                        <td> 
                          <!--Ajouter element-->
                        </td>
                        <td class="text-foreground font-normal">
                          <div class="flex flex-col">
                          <span class="text-sm  font-normal text-mono mb-px" href="#">
                          <!--Ajouter element-->
                          </span>
                          </div>
                        </td>
                        <td>
                          <!--Ajouter element-->
                        </td>
                        <td>
                          <!--Ajouter element-->
                        </td>
                        <td class="text-foreground font-normal">
                          <!--Ajouter element-->
                        </td>
                        <td class="text-center">
                          <input type="checkbox" class="kt-checkbox kt-checkbox-sm agent-checkbox"
                          value="id_agent">
                        </td>
                      </tr>
                      <tr> 
                        <td> 
                          <!--Ajouter element-->
                        </td>
                        <td class="text-foreground font-normal">
                          <div class="flex flex-col">
                          <span class="text-sm  font-normal text-mono mb-px" href="#">
                          <!--Ajouter element-->
                          </span>
                          </div>
                        </td>
                        <td>
                          <!--Ajouter element-->
                        </td>
                        <td>
                          <!--Ajouter element-->
                        </td>
                        <td class="text-foreground font-normal">
                          <!--Ajouter element-->
                        </td>
                        <td class="text-center">
                          <input type="checkbox" class="kt-checkbox kt-checkbox-sm agent-checkbox"
                          value="id_agent">
                        </td>
                      </tr>
                    </tbody>
                  </table>
              </div>
              <!--Pied de page-->
              <div class="kt-card-footer justify-center md:justify-between flex-col md:flex-row gap-5 text-secondary-foreground text-sm font-medium">
                <div class="flex items-center gap-2 order-2 md:order-1">
                  Afficher
                  <select class="kt-select w-16" data-kt-datatable-size="true" data-kt-select="" name="perpage">
                  </select>
                  par page
                </div>
                <div class="flex items-center gap-4 order-1 md:order-2">
                  <span data-kt-datatable-info="true">
                  </span>
                  <div class="kt-datatable-pagination" data-kt-datatable-pagination="true">
                  </div>
                </div>
              </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Fin Tableau -->
      </div>
    </div>
    <!-- Fin Tableau -->
  </div>
</div>
<!-- Fin modal  -->
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

  @endsection