@extends('layouts.base')
@section('content')
  <!-- Début Toolbar -->
    <div class="pb-5">
      <!-- Conteneur de la toolbar -->
      <div class="kt-container-fixed flex items-center justify-between flex-wrap gap-3">
        <!-- Titre -->
        <div class="flex items-center flex-wrap gap-1.5 lg:gap-2.5">
            <h1 class="text-lg text-foreground font-semibold">
                Liste des agents
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
      <!-- Fin conteneur de la toolbar -->
    </div>
  <!-- Fin Toolbar -->
<!-- Debut du bloc contenant tableau -->
 <!-- Container -->
       <div class="kt-container-fixed">
        <div class="grid gap-5 lg:gap-7.5">
         <div class="kt-card kt-card-grid min-w-full">
          <div class="kt-card-header flex-wrap gap-2 py-5 ">
           <div class="flex flex-wrap gap-2 lg:gap-5">
            <div class="flex flex-wrap gap-2.5">
             <select class="kt-select w-36" data-kt-select="true" data-kt-select-placeholder="Par rôle">
              <option value="1">
              Métreur
              </option>
              <option value="2">
              Responsable technique
              </option>
              <option value="2">
               Chef d'équipe
              </option>
             </select>
             <button class="kt-btn kt-btn-outline kt-btn-primary">
              <i class="ki-filled ki-setting-4">
              </i>
              Trier
             </button>
            </div>
           </div>
          </div>
          <!-- Fin Titre + boutons en-tête tableau-->
          <div class="kt-card-content">
           <div data-kt-datatable="true" data-kt-datatable-state-save="false" id="team_crew_table">
            <div class="kt-scrollable-x-auto">
             <table class="kt-table table-auto kt-table-border" data-kt-datatable-table="true">
              <thead>
               <tr>
                <th class="min-w-[180px]">
                 <span class="kt-table-col">
                  <span class="kt-table-col-label">
                  Id agent
                  </span>
                  <span class="kt-table-col-sort">
                  </span>
                 </span>
                </th>
                <th class="min-w-[300px]">
                 <span class="kt-table-col">
                  <span class="kt-table-col-label">
                   Nom et prénom 
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
                 statut
                  </span>
                  <span class="kt-table-col-sort">
                  </span>
                 </span>
                </th>
                <th class="w-[60px]">
                </th>
               </tr>
              </thead>
              <tbody>
               <tr> 
                <td>
                 2025ID0001
                </td>
                <td class="text-foreground font-normal">
                Kouadio Kouassi Jean
                </td>
                <td>
                  Métreur
                </td>
                <td>
                 <span class="kt-badge kt-badge-success kt-badge-outline rounded-[30px]">
                  <span class="kt-badge-dot size-1.5">
                  </span>
                  Actif
                 </span>
                </td>
                <td class="text-center">
                  <button class="kt-btn kt-btn-primary">
                      <a href="{{url('')}}">
                      <i class="ki-filled ki-search-list "></i>
                       Détails
                      </a>
                  </button>
                </td>
               </tr>
               <tr>
                <td>
                 <!--Numero de demande-->
                </td>
                <td class="text-foreground font-normal">
                 <!--Nom et prenoms-->
                </td>
                <td>
                 <!--Etape-->
                </td>
                <td>
                <!--Responsable-->
                </td>
                
                <td class="text-center">
                 <!--bouton-->
                </td>
               </tr>
               <tr>
                <td>
                 <!--Numero de demande-->
                </td>
                <td class="text-foreground font-normal">
                 <!--Nom et prenoms-->
                </td>
                <td>
                 <!--Etape-->
                </td>
                <td>
                <!--Responsable-->
                </td>
                
                <td class="text-center">
                 <!--bouton-->
                </td>
               </tr>
               <tr>
                <td>
                 <!--Numero de demande-->
                </td>
                <td class="text-foreground font-normal">
                 <!--Nom et prenoms-->
                </td>
                <td>
                 <!--Etape-->
                </td>
                <td>
                <!--Responsable-->
                </td>
                <td class="text-center">
                  <!--bouton-->
                </td>
               </tr>
               <tr>
                <td>
                 <!--Numero de demande-->
                </td>
                <td class="text-foreground font-normal">
                 <!--Nom et prenoms-->
                </td>
                <td>
                 <!--Etape-->
                </td>
                <td>
                <!--Responsable-->
                </td>
                <td class="text-center">
                  <!--bouton-->
                </td>
               </tr>
              </tbody>
             </table>
            </div>
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
       
       <!--Grid pour ajouter des composants plus tard-->
         <!--<div class="grid lg:grid-cols-2 gap-5 lg:gap-7.5">  
         </div>-->

        </div>
       </div>
       <!-- End of Container -->
  
@endsection