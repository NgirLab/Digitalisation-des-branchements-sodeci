<div>
  <div class="kt-modal" data-kt-modal="true" id="modal_formulaire_mise_en_service">
    <div class="kt-modal-content max-w-auto top-[10%]">
      <div class="kt-modal-header">
        <h3 class="kt-modal-title">Saisie de compte rendu de mise en service</h3>
        <button
          type="button"
          class="kt-modal-close"
          aria-label="Close modal"
          data-kt-modal-dismiss="#modal_formulaire_mise_en_service">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-x" aria-hidden="true">
            <path d="M18 6 6 18"></path>
            <path d="m6 6 12 12"></path>
          </svg>
        </button>
      </div>

      <form action="#" method="post" data-kt-stepper="true" class="flex flex-col">
        <div class="kt-modal-body max-h-[400px] overflow-y-auto pe-2">
            <div class="kt-card border-0 shadow-none"> <div class="kt-card-header h-auto px-5 py-5 flex-wrap gap-10 justify-center">
                    <div data-kt-stepper-item="#stepper_1" class="active flex gap-2.5 items-center">
                        <div class="shrink-0 rounded-full size-8 flex items-center justify-center text-sm font-semibold bg-muted text-muted-foreground kt-stepper-item-active:bg-primary kt-stepper-item-active:text-primary-foreground kt-stepper-item-completed:bg-green-500 kt-stepper-item-completed:text-white">
                            <span data-kt-stepper-number="true" class="kt-stepper-item-completed:hidden">1</span> 
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check size-4 hidden kt-stepper-item-completed:inline" aria-hidden="true"><path d="M20 6 9 17l-5-5"></path></svg>
                        </div>
                        <div class="flex flex-col gap-0.5">
                            <h4 class="text-sm font-medium text-mono kt-stepper-item-completed:opacity-70">Etape 1</h4>
                            <span class="text-xs text-muted-foreground kt-stepper-item-completed:opacity-70">Enquête terrain</span>
                        </div>
                    </div>
                    <div data-kt-stepper-item="#stepper_2" class="flex gap-2.5 items-center">
                        <div class="shrink-0 rounded-full size-8 flex items-center justify-center text-sm font-semibold bg-muted text-muted-foreground kt-stepper-item-active:bg-primary kt-stepper-item-active:text-primary-foreground kt-stepper-item-completed:bg-green-500 kt-stepper-item-completed:text-white">
                            <span data-kt-stepper-number="true" class="kt-stepper-item-completed:hidden">2</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check size-4 hidden kt-stepper-item-completed:inline" aria-hidden="true"><path d="M20 6 9 17l-5-5"></path></svg>
                        </div>
                        <div class="flex flex-col gap-0.5">
                            <h4 class="text-sm font-medium text-mono kt-stepper-item-completed:opacity-70">Etape 2</h4>
                            <span class="text-xs text-muted-foreground kt-stepper-item-completed:opacity-70">Informations compteur </span>
                        </div>
                    </div>
                </div>

                <div class="kt-card-content px-5 py-10">
                    <div class="" id="stepper_1">
                        <div class="flex items-center justify-center text-lg font-semibold text-mono">
                          <div class="kt-card-content grid gap-5">
                            <div class="flex items-baseline justify-center flex-wrap lg:flex-nowrap gap-2.5 py-2.5">
                              <h3 class="kt-card-title">
                                ENQUETE TERRAIN
                              </h3>
                            </div>
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
                        </div>
                    </div>
                    <div class="hidden" id="stepper_2">
                        <div class="flex items-center justify-center text-lg font-semibold text-mono">
                          <div class="kt-card-content grid gap-5">
                              <div class="flex items-baseline justify-center flex-wrap lg:flex-nowrap gap-2.5 py-2.5">
                                <h3 class="kt-card-title">
                                 INFORMATIONS COMPTEUR
                                </h3>
                              </div>
                              <!-- Détails formulaire  -->
                          
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
                         
                          <!-- Fin détails formulaire -->  
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="kt-card-footer justify-between p-5 border-t">
            <div>
                <button type="button" class="kt-btn kt-btn-secondary kt-stepper-first:hidden" data-kt-stepper-back="true">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-left" aria-hidden="true"><path d="m12 19-7-7 7-7"></path><path d="M19 12H5"></path></svg>
                    Back
                </button>
            </div>
            <div class="flex gap-2">
                <button type="button" class="kt-btn kt-btn-secondary kt-stepper-last:hidden" data-kt-stepper-next="true">
                    Next
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right" aria-hidden="true"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg>
                </button>
                <button type="submit" class="kt-btn kt-btn-primary hidden kt-stepper-last:inline-flex">
                    Submit
                </button>
            </div>
        </div>
      </form>
    </div>
  </div>
</div>