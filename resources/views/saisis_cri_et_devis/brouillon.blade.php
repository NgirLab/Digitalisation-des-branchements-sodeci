@extends('layouts.base')
@section('content')
<!-- Début du Main -->
   <div class="kt-container-fixed">
    <!-- Début Toolbar -->
    <div class="pb-5">
      <!-- Conteneur de la toolbar -->
      <div class="kt-container-fixed flex items-center justify-between flex-wrap gap-3">
        <!-- Titre -->
        <div class="flex items-center flex-wrap gap-1.5 lg:gap-2.5">
            <h1 class="text-lg text-foreground font-semibold">
                Saisie de compte rendu de mise en service
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

    <!-- Conteneur du menu des étapes -->
   
    <!-- Fin conteneur du menu des étapes  -->
      <div class="grid gap-5 lg:gap-7.5">
        <!-- Debut conteneur formulaire - accordéon -->
        <div class="kt-card">
            <div class="kt-card-header">
              <h3 class="kt-card-title">
              Informations de la mise en service
              </h3>
            </div>
              <div class="kt-card-content py-3">
                <div data-kt-accordion="true" data-kt-accordion-expand-all="true">
                  <div class="kt-accordion-item not-last:border-b border-b-border" data-kt-accordion-item="true">
                      <button aria-controls="faq_1_content" class="kt-accordion-toggle py-4" data-kt-accordion-toggle="#faq_1_content">
                      <span class="text-base text-mono">
                       Enquête terrain
                      </span>
                      <span class="kt-accordion-active:hidden inline-flex">
                        <i class="ki-filled ki-up text-muted-foreground text-sm">
                        </i>
                      </span>
                      <span class="kt-accordion-active:inline-flex hidden">
                        <i class="ki-filled ki-down text-muted-foreground text-sm">
                        </i>
                      </span>
                      </button>
                    <div class="kt-accordion-content hidden" id="faq_1_content">
                      <div class="text-secondary-foreground text-base pb-4">
                        <!--Début contenu accordéon-->
                          <!-- Détails formulaire  -->
                          <div class="kt-card-content grid gap-5">
                              <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
                                <label class="kt-form-label max-w-56">
                                Client présent  
                                </label>
                                <input class="kt-input" placeholder="" type="text" value=""/>
                              </div>
                              <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
                                <label class="kt-form-label max-w-56">
                                Branchement conforme 
                                </label>
                                <input class="kt-input" placeholder="" type="text" value=""/>
                              </div>
                              <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
                                <label class="kt-form-label max-w-56">
                                 Abonnement conforme 
                                </label>
                                <input class="kt-input" type="text" value=""/>
                              </div>     
                          </div>
                          <!-- Fin détails formulaire --> 
                        <!--Fin contenu accordéon-->
                      </div>
                    </div>  
                  </div>
                </div>
              </div>
              <div class="kt-card-content py-3">
                <div data-kt-accordion="true" data-kt-accordion-expand-all="true">
                  <div class="kt-accordion-item not-last:border-b border-b-border" data-kt-accordion-item="true">
                      <button aria-controls="faq_2_content" class="kt-accordion-toggle py-4" data-kt-accordion-toggle="#faq_2_content">
                      <span class="text-base text-mono">
                       Informations compteur
                      </span>
                      <span class="kt-accordion-active:hidden inline-flex">
                        <i class="ki-filled ki-up text-muted-foreground text-sm">
                        </i>
                      </span>
                      <span class="kt-accordion-active:inline-flex hidden">
                        <i class="ki-filled ki-down text-muted-foreground text-sm">
                        </i>
                      </span>
                      </button>
                    <div class="kt-accordion-content hidden" id="faq_2_content">
                      <div class="text-secondary-foreground text-base pb-4">
                        <!--Début contenu accordéon-->
                          <!-- Détails formulaire  -->
                          <div class="kt-card-content grid gap-5">
                              <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
                                <label class="kt-form-label max-w-56">
                                 Compteur scellé 
                                </label>
                                <input class="kt-input" type="text" value=" "/>
                              </div>
                              <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
                                <label class="kt-form-label max-w-56">
                                 Code Article*   
                                </label>
                                <input class="kt-input" placeholder="" type="text" value=""/>
                              </div>
                              <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
                                <label class="kt-form-label max-w-56">
                                   Modèle du compteur  
                                </label>
                                <input class="kt-input" type="text" value=""/>
                              </div>
                              <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
                                <label class="kt-form-label max-w-56">
                                 Nom Matériel 
                                </label>
                                <input class="kt-input" placeholder="" type="text" value=""/>
                              </div>
                              <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
                                <label class="kt-form-label max-w-56">
                                  Numéro Matériel* 
                                </label>
                                <input class="kt-input" placeholder="" type="text" value=""/>
                              </div>  
                              <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
                                <label class="kt-form-label max-w-56">
                                  Technologie*  
                                </label>
                                <input class="kt-input" placeholder="" type="text" value=""/>
                              </div>  
                              <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
                                <label class="kt-form-label max-w-56">
                                  Date d'entrée en stock *
                                </label>
                                <input class="kt-input" placeholder="" type="text" value=""/>
                              </div>   
                              <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
                                <label class="kt-form-label max-w-56">
                                  Diamètre du nouveau compteur  *
                                </label>
                                <input class="kt-input" placeholder="" type="text" value=""/>
                              </div>   
                              <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
                                <label class="kt-form-label max-w-56">
                                  Nom du constructeur 
                                </label>
                                <input class="kt-input" placeholder="" type="text" value=""/>
                              </div>  
                              <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
                                <label class="kt-form-label max-w-56">
                                  Nombre de rouleaux *
                                </label>
                                <input class="kt-input" placeholder="" type="text" value=""/>
                              </div>  
                              <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
                                <label class="kt-form-label max-w-56">
                                  Coefficient de lecture 
                                </label>
                                <input class="kt-input" placeholder="" type="text" value=""/>
                              </div>  
                              <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
                                <label class="kt-form-label max-w-56">
                                  Mode de lecture 
                                </label>
                                <input class="kt-input" placeholder="" type="text" value=""/>
                              </div>
                              <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
                                <label class="kt-form-label max-w-56">
                                  Etat du système de mesure *
                                </label>
                                <input class="kt-input" placeholder="" type="text" value=""/>
                              </div> 
                              <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
                                <label class="kt-form-label max-w-56">
                                  Année de fabrication *
                                </label>
                                <input class="kt-input" placeholder="" type="text" value=""/>
                              </div> 
                              <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
                                <label class="kt-form-label max-w-56">
                                  Index*
                                </label>
                                <input class="kt-input" placeholder="" type="text" value=""/>
                              </div> 
                              <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
                                <label class="kt-form-label max-w-56">
                                  Type de point de lecture *
                                </label>
                                <input class="kt-input" placeholder="" type="text" value=""/>
                              </div> 
                              <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
                                <label class="kt-form-label max-w-56">
                                  Genre du compteur
                                </label>
                                <input class="kt-input" placeholder="" type="text" value=""/>
                              </div>
                              <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
                                <label class="kt-form-label max-w-56">
                                  Créer le nouveau compteur
                                </label>
                                <input class="kt-input" placeholder="" type="text" value=""/>
                              </div>   
                          </div>
                          <!-- Fin détails formulaire --> 
                        <!--Fin contenu accordéon-->
                      </div>
                    </div>  
                  </div>
                </div>
              </div>
        </div>
        <!-- Fin conteneur formulaire - accordéon  --> 
        <!-- Boutons fin Formulaire -->
        <div class="flex justify-end items-center flex-wrap gap-3">
            <a class="kt-btn kt-btn-outline" href="{{url('/compte_rendu/mise_en_service')}}">
               Annuler
            </a>
            <button class="kt-btn kt-btn-primary" href="{{url('')}}">
            Terminer
            <i class="ki-filled ki-file-right text-base">
            </i>
            </button>
        </div>
      </div>    

<!-- Fin du Main -->

<!-- Scripts -->
<script src="assets/js/core.bundle.js">
</script>
<script src="assets/vendors/ktui/ktui.min.js">
</script>
<script src="assets/vendors/apexcharts/apexcharts.min.js">
</script>
<!-- End of Scripts -->
@endsection
