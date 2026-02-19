@extends('layouts.base')
@section('content')
  <!-- Début Toolbar -->
  <div class="pb-5">
    <!-- Conteneur de la toolbar -->
    <div class="kt-container-fluid flex items-center justify-between flex-wrap gap-3">
      <!-- Titre -->
      <div class="flex items-center flex-wrap gap-1.5 lg:gap-2.5">
        <h1 class="text-lg text-foreground font-semibold">
          Demandes d'intervention
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
  <div class="kt-container-fluid">
    <div class="grid gap-5 lg:gap-7.5">
      <div class="kt-card kt-card-grid min-w-full">
        <div class="kt-card-header flex-wrap gap-2 py-5 ">
          <h3 class="kt-card-title text-sm">
            Suivi des demandes d'intervention
          </h3>
          <div class="flex flex-wrap gap-2 lg:gap-5">

            <div class="flex flex-wrap gap-2.5 ">
              <select class="kt-select w-36" data-kt-select="true" data-kt-select-multiple="true"
                data-kt-select-max-selections="3" data-kt-select-remote="true"
                data-kt-select-data-url="https://jsonplaceholder.typicode.com/users" data-kt-select-data-field-value="id"
                data-kt-select-data-field-text="name" data-kt-select-debug="true"
                data-kt-select-placeholder="Etape"></select>
              <select class="kt-select w-36" data-kt-select="true" data-kt-select-remote="true"
                data-kt-select-data-url="https://jsonplaceholder.typicode.com/users" data-kt-select-data-field-value="id"
                data-kt-select-data-field-text="name" data-kt-select-debug="true"
                data-kt-select-placeholder="Statut"></select>

              <select class="kt-select w-36" data-kt-select="true" data-kt-select-remote="true"
                data-kt-select-data-url="https://jsonplaceholder.typicode.com/users" data-kt-select-data-field-value="id"
                data-kt-select-data-field-text="name" data-kt-select-debug="true"
                data-kt-select-placeholder="Agence/UO"></select>
              <select class="kt-select w-36" data-kt-select="true" data-kt-select-placeholder="Date de création">
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
              <button class="kt-btn kt-btn-outline kt-btn-primary">
                <i class="ki-filled ki-arrows-circle">
                </i>
                Réinitialiser
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
                          Numéro de demande
                        </span>
                        <span class="kt-table-col-sort">
                        </span>
                      </span>
                    </th>
                    <th class="min-w-[300px]">
                      <span class="kt-table-col">
                        <span class="kt-table-col-label">
                          Nom et prénom du client
                        </span>
                        <span class="kt-table-col-sort">
                        </span>
                      </span>
                    </th>
                    <th class="min-w-[180px]">
                      <span class="kt-table-col">
                        <span class="kt-table-col-label">
                          Etape actuelle
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
                    <th class="min-w-[180px]">
                      <span class="kt-table-col">
                        <span class="kt-table-col-label">
                          Agence/UO
                        </span>
                        <span class="kt-table-col-sort">
                        </span>
                      </span>
                    </th>
                    <th class="min-w-[180px]">
                      <span class="kt-table-col">
                        <span class="kt-table-col-label">
                          Acteur en charge
                        </span>
                        <span class="kt-table-col-sort">
                        </span>
                      </span>
                    </th>
                    <th class="min-w-[180px]">
                      <span class="kt-table-col">
                        <span class="kt-table-col-label">
                          Date de création
                        </span>
                        <span class="kt-table-col-sort">
                        </span>
                      </span>
                    </th>
                    <th class="min-w-[180px]">
                      <span class="kt-table-col">
                        <span class="kt-table-col-label">
                          Délai / retard
                        </span>
                        <span class="kt-table-col-sort">
                        </span>
                      </span>
                    </th>

                    <th class="w-[60px]">
                      <span class="kt-table-col">
                        <span class="kt-table-col-label">
                          Détails
                        </span>
                        <span class="kt-table-col-sort">
                        </span>
                      </span>
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      BAR-00123
                    </td>
                    <td class="text-foreground font-normal">
                      Kouakou jean Paul
                    </td>
                    <td>
                      Saisie CRI Métré
                    </td>
                    <td>
                      En cours
                    </td>
                    <td class="text-foreground font-normal">
                      Djorogobite Agence
                    </td>
                    <td class="text-foreground font-normal">
                      Koukougnon Marcel
                    </td>
                    <td class="text-foreground font-normal">
                      15/03/2025
                    </td>
                    <td class="text-foreground font-normal">
                      25 jours
                    </td>
                    <td class="text-center">
                      <div class="flex flex-row justify-center items-center gap-2">
                        <button class="kt-btn kt-btn-primary">
                          <a href="{{url('/detail_demande')}}">
                            <i class="ki-filled ki-search-list "></i>
                            Détails
                          </a>
                        </button>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div
              class="kt-card-footer justify-center md:justify-between flex-col md:flex-row gap-5 text-secondary-foreground text-sm font-medium">
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