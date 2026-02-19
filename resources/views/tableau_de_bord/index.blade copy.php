<!-- Add more dashboard content here -->
@extends('layouts.base')
@section('content')

 <!-- Debut du tableau de bord -->
<div class="grid grid-cols-1 lg:grid-cols-3 gap-5 lg:gap-7.5">
  <div class="col-span-1 lg:col-span-3">
      <!-- Début des élements du tableau de bord -->
            <div class="kt-card-content p-5 lg:p-7.5 lg:pb-7">
             <div class="flex gap-5 kt-scrollable-x">
              <!-- debut élements du dashboard KPIs -->
               <!-- début element 1-->
              <div class="kt-card rounded-xl shadow-none w-[320px] border-0 mb-4">
                <div class="kt-card-border w-[320px] grid gap-4 px-5 pt-3.5 pb-3 mb-4 rounded-lg ">
                  <div class="flex items-center gap-2.5">
                          <div class="grid grid-cols-1 gap-1">
                              <a class="text-mono hover:text-primary text-base font-medium mb-px" href="#">
                                  Nombre total de demandes
                              </a>
                              <time class="flex items-center gap-1.5 text-xs text-secondary-foreground">
                                  <div class="rounded-full w-1.5 h-1.5 bg-destructive">
                                  </div>
                                  EN RETARD : 12
                              </time>
                          </div>
                      </div>
                      <div class="grid gap-3">
                          <div class="text-3xl font-bold text-foreground">
                              450
                          </div>
                          <p class="text-sm text-secondary-foreground">
                              Total des demandes en cours sur le mois.
                          </p>
                      </div>

                      <div class="grid grid-cols-2 gap-3 text-sm">
                          <div class="flex items-center justify-between">
                              <span class="text-secondary-foreground">Qualification :</span>
                              <span class="font-medium text-foreground">150</span>
                          </div>
                          <div class="flex items-center justify-between">
                              <span class="text-secondary-foreground">Métré :</span>
                              <span class="font-medium text-foreground">85</span>
                          </div>
                          <div class="flex items-center justify-between">
                              <span class="text-secondary-foreground">Validation :</span>
                              <span class="font-medium text-foreground">75</span>
                          </div>
                          <div class="flex items-center justify-between">
                              <span class="text-secondary-foreground">Mise en service :</span>
                              <span class="font-medium text-primary">140</span>
                          </div>
                      </div>

                      <div class="grid gap-1.5 mb-0.5">
                          <div class="kt-progress h-1.5 progress-primary">
                              <div class="kt-progress-indicator" style="width: 90%">
                              </div>
                          </div>
                          <div class="flex items-center place-content-between">
                              <span class="text-secondary-foreground text-xs">
                                  Objectif : 500
                              </span>
                              <span class="text-secondary-foreground text-xs">
                                  90% Atteint
                              </span>
                          </div>
                      </div>
               </div>
              </div>
              <!-- Fin élement 1-->

              <!-- debut élement 2-->
              <div class="kt-card rounded-xl shadow-none w-[320px] border-0 mb-4">
                <div class="kt-card-border w-[320px] grid gap-4 px-5 pt-3.5 pb-3 mb-4 rounded-lg ">
                  <div class="flex items-center gap-2.5">
                          <div class="grid grid-cols-1 gap-1">
                              <a class="text-mono hover:text-primary text-base font-medium mb-px" href="#">
                                  Tâches à réaliser (En Attente)
                              </a>
                              <time class="flex items-center gap-1.5 text-xs text-secondary-foreground">
                                  <div class="rounded-full w-1.5 h-1.5 bg-destructive">
                                  </div>
                                  CRITIQUES : 10
                              </time>
                          </div>
                      </div>
                      <div class="grid gap-3">
                          <div class="text-3xl font-bold text-foreground">
                              32
                          </div>
                          <p class="text-sm text-secondary-foreground">
                              Total des actions requises(CRI / Validations).
                          </p>
                      </div>

                      <div class="grid grid-cols-2 gap-3 text-sm">
                          <div class="flex items-center justify-between">
                              <span class="text-secondary-foreground">CRI Métré:</span>
                              <span class="font-medium text-foreground">15</span>
                          </div>
                          <div class="flex items-center justify-between">
                              <span class="text-secondary-foreground">CRI Mise en service:</span>
                              <span class="font-medium text-foreground">9</span>
                          </div>
                          <div class="flex items-center justify-between">
                              <span class="text-secondary-foreground">Devis à relancer:</span>
                              <span class="font-medium text-foreground">4</span>
                          </div>
                          <div class="flex items-center justify-between">
                              <span class="text-secondary-foreground">Formulaires:</span>
                              <span class="font-medium text-primary">6</span>
                          </div>
                      </div>

                      <div class="grid gap-1.5 mb-0.5">
                          <div class="kt-progress h-1.5 progress-primary">
                              <div class="kt-progress-indicator" style="width: 90%">
                              </div>
                          </div>
                          <div class="flex items-center place-content-between">
                              <span class="text-secondary-foreground text-xs">
                                 Taux d'urgence :
                              </span>
                              <span class="text-secondary-foreground text-xs">
                                  15% Critiques
                              </span>
                          </div>
                      </div>
               </div>
              </div>
              <!-- Fin element 2-->
            </div>
       <!-- Fin élements du dashboard KPIs -->
 
<!-- Début du bloc Projets-->
<div class="kt-card">
            <div class="kt-card-header">
             <h3 class="kt-card-title">
             Activites recentes
             </h3>
             <div class="kt-menu" data-kt-menu="true">
              <div class="kt-menu-item kt-menu-item-dropdown" data-kt-menu-item-offset="0, 10px" data-kt-menu-item-placement="bottom-end" data-kt-menu-item-placement-rtl="bottom-start" data-kt-menu-item-toggle="dropdown" data-kt-menu-item-trigger="click">
               <button class="kt-menu-toggle kt-btn kt-btn-sm kt-btn-icon kt-btn-ghost">
                <i class="ki-filled ki-dots-vertical text-lg">
                </i>
               </button>
               <div class="kt-menu-dropdown kt-menu-default w-full max-w-[175px]" data-kt-menu-dismiss="true">
                <div class="kt-menu-item">
                 <a class="kt-menu-link" href="html/demo8/account/home/settings-plain.html">
                  <span class="kt-menu-icon">
                   <i class="ki-filled ki-add-files">
                   </i>
                  </span>
                  <span class="kt-menu-title">
                   Add
                  </span>
                 </a>
                </div>
                <div class="kt-menu-item">
                 <a class="kt-menu-link" href="html/demo8/account/members/import-members.html">
                  <span class="kt-menu-icon">
                   <i class="ki-filled ki-file-down">
                   </i>
                  </span>
                  <span class="kt-menu-title">
                   Import
                  </span>
                 </a>
                </div>
                <div class="kt-menu-item kt-menu-item-dropdown" data-kt-menu-item-offset="-15px, 0" data-kt-menu-item-placement="right-start" data-kt-menu-item-toggle="dropdown" data-kt-menu-item-trigger="click|lg:hover">
                 <div class="kt-menu-link">
                  <span class="kt-menu-icon">
                   <i class="ki-filled ki-file-up">
                   </i>
                  </span>
                  <span class="kt-menu-title">
                   Export
                  </span>
                  <span class="kt-menu-arrow">
                   <i class="ki-filled ki-right text-xs rtl:transform rtl:rotate-180">
                   </i>
                  </span>
                 </div>
                 <div class="kt-menu-dropdown kt-menu-default w-full max-w-[125px]">
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="html/demo8/account/home/settings-sidebar.html">
                    <span class="kt-menu-title">
                     PDF
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="html/demo8/account/home/settings-sidebar.html">
                    <span class="kt-menu-title">
                     CVS
                    </span>
                   </a>
                  </div>
                  <div class="kt-menu-item">
                   <a class="kt-menu-link" href="html/demo8/account/home/settings-sidebar.html">
                    <span class="kt-menu-title">
                     Excel
                    </span>
                   </a>
                  </div>
                 </div>
                </div>
                <div class="kt-menu-item">
                 <a class="kt-menu-link" href="html/demo8/account/security/privacy-settings.html">
                  <span class="kt-menu-icon">
                   <i class="ki-filled ki-setting-3">
                   </i>
                  </span>
                  <span class="kt-menu-title">
                   Settings
                  </span>
                 </a>
                </div>
               </div>
              </div>
             </div>
            </div>
            <div class="kt-card-table kt-scrollable-x-auto">
             <table class="kt-table table-fixed">
              <thead>
               <tr>
                <th class="text-start w-52">
                 Project Name
                </th>
                <th class="w-56 text-end">
                 Progress
                </th>
                <th class="w-36 text-end">
                 People
                </th>
                <th class="w-36 text-end">
                 Due Date
                </th>
                <th class="w-16">
                </th>
               </tr>
              </thead>
              <tbody>
               <tr>
                <td class="text-start">
                 <a class="text-sm font-medium text-mono hover:text-primary" href="#">
                  Acme software development
                 </a>
                </td>
                <td>
                 <div class="kt-progress kt-progress-primary h-[4px]">
                  <div class="kt-progress-indicator" style="width: 60%">
                  </div>
                 </div>
                </td>
                <td>
                 <div class="flex justify-end rtl:justify-start shrink-0">
                  <div class="flex -space-x-2">
                   <div class="flex">
                    <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-background size-6" src="assets/media/avatars/300-4.png">
                   </div>
                   <div class="flex">
                    <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-background size-6" src="assets/media/avatars/300-1.png">
                   </div>
                   <div class="flex">
                    <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-background size-6" src="assets/media/avatars/300-2.png">
                   </div>
                   <div class="flex">
                    <span class="relative inline-flex items-center justify-center shrink-0 rounded-full ring-1 font-semibold leading-none text-2xs size-6 text-white ring-background bg-green-500">
                     +3
                    </span>
                   </div>
                  </div>
                 </div>
                </td>
                <td class="text-sm font-medium text-secondary-foreground text-end">
                 24 Aug, 2024
                </td>
                <td class="text-start">
                 <div class="kt-menu" data-kt-menu="true">
                  <div class="kt-menu-item kt-menu-item-dropdown" data-kt-menu-item-offset="0, 10px" data-kt-menu-item-placement="bottom-end" data-kt-menu-item-placement-rtl="bottom-start" data-kt-menu-item-toggle="dropdown" data-kt-menu-item-trigger="click">
                   <button class="kt-menu-toggle kt-btn kt-btn-sm kt-btn-icon kt-btn-ghost">
                    <i class="ki-filled ki-dots-vertical text-lg">
                    </i>
                   </button>
                   <div class="kt-menu-dropdown kt-menu-default w-full max-w-[175px]" data-kt-menu-dismiss="true">
                    <div class="kt-menu-item">
                     <a class="kt-menu-link" href="#">
                      <span class="kt-menu-icon">
                       <i class="ki-filled ki-search-list">
                       </i>
                      </span>
                      <span class="kt-menu-title">
                       View
                      </span>
                     </a>
                    </div>
                    <div class="kt-menu-item">
                     <a class="kt-menu-link" href="#">
                      <span class="kt-menu-icon">
                       <i class="ki-filled ki-file-up">
                       </i>
                      </span>
                      <span class="kt-menu-title">
                       Export
                      </span>
                     </a>
                    </div>
                    <div class="kt-menu-separator">
                    </div>
                    <div class="kt-menu-item">
                     <a class="kt-menu-link" href="#">
                      <span class="kt-menu-icon">
                       <i class="ki-filled ki-pencil">
                       </i>
                      </span>
                      <span class="kt-menu-title">
                       Edit
                      </span>
                     </a>
                    </div>
                    <div class="kt-menu-item">
                     <a class="kt-menu-link" href="#">
                      <span class="kt-menu-icon">
                       <i class="ki-filled ki-copy">
                       </i>
                      </span>
                      <span class="kt-menu-title">
                       Make a copy
                      </span>
                     </a>
                    </div>
                    <div class="kt-menu-separator">
                    </div>
                    <div class="kt-menu-item">
                     <a class="kt-menu-link" href="#">
                      <span class="kt-menu-icon">
                       <i class="ki-filled ki-trash">
                       </i>
                      </span>
                      <span class="kt-menu-title">
                       Remove
                      </span>
                     </a>
                    </div>
                   </div>
                  </div>
                 </div>
                </td>
               </tr>
               <tr>
                <td class="text-start">
                 <a class="text-sm font-medium text-mono hover:text-primary" href="#">
                  Strategic Partnership Deal
                 </a>
                </td>
                <td>
                 <div class="kt-progress h-[4px]">
                  <div class="kt-progress-indicator" style="width: 100%">
                  </div>
                 </div>
                </td>
                <td>
                 <div class="flex justify-end rtl:justify-start shrink-0">
                  <div class="flex -space-x-2">
                   <div class="flex">
                    <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-background size-6" src="assets/media/avatars/300-1.png">
                   </div>
                   <div class="flex">
                    <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-background size-6" src="assets/media/avatars/300-2.png">
                   </div>
                   <div class="flex">
                    <span class="hover:z-5 relative inline-flex items-center justify-center shrink-0 rounded-full ring-1 font-semibold leading-none text-2xs size-6 text-white ring-background bg-destructive">
                     M
                    </span>
                   </div>
                  </div>
                 </div>
                </td>
                <td class="text-sm font-medium text-secondary-foreground text-end">
                 10 Sep, 2024
                </td>
                <td class="text-start">
                 <div class="kt-menu" data-kt-menu="true">
                  <div class="kt-menu-item kt-menu-item-dropdown" data-kt-menu-item-offset="0, 10px" data-kt-menu-item-placement="bottom-end" data-kt-menu-item-placement-rtl="bottom-start" data-kt-menu-item-toggle="dropdown" data-kt-menu-item-trigger="click">
                   <button class="kt-menu-toggle kt-btn kt-btn-sm kt-btn-icon kt-btn-ghost">
                    <i class="ki-filled ki-dots-vertical text-lg">
                    </i>
                   </button>
                   <div class="kt-menu-dropdown kt-menu-default w-full max-w-[175px]" data-kt-menu-dismiss="true">
                    <div class="kt-menu-item">
                     <a class="kt-menu-link" href="#">
                      <span class="kt-menu-icon">
                       <i class="ki-filled ki-search-list">
                       </i>
                      </span>
                      <span class="kt-menu-title">
                       View
                      </span>
                     </a>
                    </div>
                    <div class="kt-menu-item">
                     <a class="kt-menu-link" href="#">
                      <span class="kt-menu-icon">
                       <i class="ki-filled ki-file-up">
                       </i>
                      </span>
                      <span class="kt-menu-title">
                       Export
                      </span>
                     </a>
                    </div>
                    <div class="kt-menu-separator">
                    </div>
                    <div class="kt-menu-item">
                     <a class="kt-menu-link" href="#">
                      <span class="kt-menu-icon">
                       <i class="ki-filled ki-pencil">
                       </i>
                      </span>
                      <span class="kt-menu-title">
                       Edit
                      </span>
                     </a>
                    </div>
                    <div class="kt-menu-item">
                     <a class="kt-menu-link" href="#">
                      <span class="kt-menu-icon">
                       <i class="ki-filled ki-copy">
                       </i>
                      </span>
                      <span class="kt-menu-title">
                       Make a copy
                      </span>
                     </a>
                    </div>
                    <div class="kt-menu-separator">
                    </div>
                    <div class="kt-menu-item">
                     <a class="kt-menu-link" href="#">
                      <span class="kt-menu-icon">
                       <i class="ki-filled ki-trash">
                       </i>
                      </span>
                      <span class="kt-menu-title">
                       Remove
                      </span>
                     </a>
                    </div>
                   </div>
                  </div>
                 </div>
                </td>
               </tr>
               <tr>
                <td class="text-start">
                 <a class="text-sm font-medium text-mono hover:text-primary" href="#">
                  Client Onboarding
                 </a>
                </td>
                <td>
                 <div class="kt-progress kt-progress-primary h-[4px]">
                  <div class="kt-progress-indicator" style="width: 20%">
                  </div>
                 </div>
                </td>
                <td>
                 <div class="flex justify-end rtl:justify-start shrink-0">
                  <div class="flex -space-x-2">
                   <div class="flex">
                    <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-background size-6" src="assets/media/avatars/300-20.png">
                   </div>
                   <div class="flex">
                    <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-background size-6" src="assets/media/avatars/300-7.png">
                   </div>
                  </div>
                 </div>
                </td>
                <td class="text-sm font-medium text-secondary-foreground text-end">
                 19 Sep, 2024
                </td>
                <td class="text-start">
                 <div class="kt-menu" data-kt-menu="true">
                  <div class="kt-menu-item kt-menu-item-dropdown" data-kt-menu-item-offset="0, 10px" data-kt-menu-item-placement="bottom-end" data-kt-menu-item-placement-rtl="bottom-start" data-kt-menu-item-toggle="dropdown" data-kt-menu-item-trigger="click">
                   <button class="kt-menu-toggle kt-btn kt-btn-sm kt-btn-icon kt-btn-ghost">
                    <i class="ki-filled ki-dots-vertical text-lg">
                    </i>
                   </button>
                   <div class="kt-menu-dropdown kt-menu-default w-full max-w-[175px]" data-kt-menu-dismiss="true">
                    <div class="kt-menu-item">
                     <a class="kt-menu-link" href="#">
                      <span class="kt-menu-icon">
                       <i class="ki-filled ki-search-list">
                       </i>
                      </span>
                      <span class="kt-menu-title">
                       View
                      </span>
                     </a>
                    </div>
                    <div class="kt-menu-item">
                     <a class="kt-menu-link" href="#">
                      <span class="kt-menu-icon">
                       <i class="ki-filled ki-file-up">
                       </i>
                      </span>
                      <span class="kt-menu-title">
                       Export
                      </span>
                     </a>
                    </div>
                    <div class="kt-menu-separator">
                    </div>
                    <div class="kt-menu-item">
                     <a class="kt-menu-link" href="#">
                      <span class="kt-menu-icon">
                       <i class="ki-filled ki-pencil">
                       </i>
                      </span>
                      <span class="kt-menu-title">
                       Edit
                      </span>
                     </a>
                    </div>
                    <div class="kt-menu-item">
                     <a class="kt-menu-link" href="#">
                      <span class="kt-menu-icon">
                       <i class="ki-filled ki-copy">
                       </i>
                      </span>
                      <span class="kt-menu-title">
                       Make a copy
                      </span>
                     </a>
                    </div>
                    <div class="kt-menu-separator">
                    </div>
                    <div class="kt-menu-item">
                     <a class="kt-menu-link" href="#">
                      <span class="kt-menu-icon">
                       <i class="ki-filled ki-trash">
                       </i>
                      </span>
                      <span class="kt-menu-title">
                       Remove
                      </span>
                     </a>
                    </div>
                   </div>
                  </div>
                 </div>
                </td>
               </tr>
               <tr>
                <td class="text-start">
                 <a class="text-sm font-medium text-mono hover:text-primary" href="#">
                  Widget Supply Agreement
                 </a>
                </td>
                <td>
                 <div class="kt-progress kt-progress-success h-[4px]">
                  <div class="kt-progress-indicator" style="width: 100%">
                  </div>
                 </div>
                </td>
                <td>
                 <div class="flex justify-end rtl:justify-start shrink-0">
                  <div class="flex -space-x-2">
                   <div class="flex">
                    <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-background size-6" src="assets/media/avatars/300-6.png">
                   </div>
                   <div class="flex">
                    <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-background size-6" src="assets/media/avatars/300-23.png">
                   </div>
                   <div class="flex">
                    <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-background size-6" src="assets/media/avatars/300-12.png">
                   </div>
                   <div class="flex">
                    <span class="relative inline-flex items-center justify-center shrink-0 rounded-full ring-1 font-semibold leading-none text-2xs size-6 text-primary-foreground ring-background bg-primary">
                     +1
                    </span>
                   </div>
                  </div>
                 </div>
                </td>
                <td class="text-sm font-medium text-secondary-foreground text-end">
                 5 May, 2024
                </td>
                <td class="text-start">
                 <div class="kt-menu" data-kt-menu="true">
                  <div class="kt-menu-item kt-menu-item-dropdown" data-kt-menu-item-offset="0, 10px" data-kt-menu-item-placement="bottom-end" data-kt-menu-item-placement-rtl="bottom-start" data-kt-menu-item-toggle="dropdown" data-kt-menu-item-trigger="click">
                   <button class="kt-menu-toggle kt-btn kt-btn-sm kt-btn-icon kt-btn-ghost">
                    <i class="ki-filled ki-dots-vertical text-lg">
                    </i>
                   </button>
                   <div class="kt-menu-dropdown kt-menu-default w-full max-w-[175px]" data-kt-menu-dismiss="true">
                    <div class="kt-menu-item">
                     <a class="kt-menu-link" href="#">
                      <span class="kt-menu-icon">
                       <i class="ki-filled ki-search-list">
                       </i>
                      </span>
                      <span class="kt-menu-title">
                       View
                      </span>
                     </a>
                    </div>
                    <div class="kt-menu-item">
                     <a class="kt-menu-link" href="#">
                      <span class="kt-menu-icon">
                       <i class="ki-filled ki-file-up">
                       </i>
                      </span>
                      <span class="kt-menu-title">
                       Export
                      </span>
                     </a>
                    </div>
                    <div class="kt-menu-separator">
                    </div>
                    <div class="kt-menu-item">
                     <a class="kt-menu-link" href="#">
                      <span class="kt-menu-icon">
                       <i class="ki-filled ki-pencil">
                       </i>
                      </span>
                      <span class="kt-menu-title">
                       Edit
                      </span>
                     </a>
                    </div>
                    <div class="kt-menu-item">
                     <a class="kt-menu-link" href="#">
                      <span class="kt-menu-icon">
                       <i class="ki-filled ki-copy">
                       </i>
                      </span>
                      <span class="kt-menu-title">
                       Make a copy
                      </span>
                     </a>
                    </div>
                    <div class="kt-menu-separator">
                    </div>
                    <div class="kt-menu-item">
                     <a class="kt-menu-link" href="#">
                      <span class="kt-menu-icon">
                       <i class="ki-filled ki-trash">
                       </i>
                      </span>
                      <span class="kt-menu-title">
                       Remove
                      </span>
                     </a>
                    </div>
                   </div>
                  </div>
                 </div>
                </td>
               </tr>
               <tr>
                <td class="text-start">
                 <a class="text-sm font-medium text-mono hover:text-primary" href="#">
                  Project X Redesign
                 </a>
                </td>
                <td>
                 <div class="kt-progress kt-progress-primary h-[4px]">
                  <div class="kt-progress-indicator" style="width: 80%">
                  </div>
                 </div>
                </td>
                <td>
                 <div class="flex justify-end rtl:justify-start shrink-0">
                  <div class="flex -space-x-2">
                   <div class="flex">
                    <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-background size-6" src="assets/media/avatars/300-2.png">
                   </div>
                   <div class="flex">
                    <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-background size-6" src="assets/media/avatars/300-15.png">
                   </div>
                   <div class="flex">
                    <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-background size-6" src="assets/media/avatars/300-18.png">
                   </div>
                   <div class="flex">
                    <span class="relative inline-flex items-center justify-center shrink-0 rounded-full ring-1 font-semibold leading-none text-2xs size-6 text-white ring-background bg-green-500">
                     +2
                    </span>
                   </div>
                  </div>
                 </div>
                </td>
                <td class="text-sm font-medium text-secondary-foreground text-end">
                 1 Feb, 2025
                </td>
                <td class="text-start">
                 <div class="kt-menu" data-kt-menu="true">
                  <div class="kt-menu-item kt-menu-item-dropdown" data-kt-menu-item-offset="0, 10px" data-kt-menu-item-placement="bottom-end" data-kt-menu-item-placement-rtl="bottom-start" data-kt-menu-item-toggle="dropdown" data-kt-menu-item-trigger="click">
                   <button class="kt-menu-toggle kt-btn kt-btn-sm kt-btn-icon kt-btn-ghost">
                    <i class="ki-filled ki-dots-vertical text-lg">
                    </i>
                   </button>
                   <div class="kt-menu-dropdown kt-menu-default w-full max-w-[175px]" data-kt-menu-dismiss="true">
                    <div class="kt-menu-item">
                     <a class="kt-menu-link" href="#">
                      <span class="kt-menu-icon">
                       <i class="ki-filled ki-search-list">
                       </i>
                      </span>
                      <span class="kt-menu-title">
                       View
                      </span>
                     </a>
                    </div>
                    <div class="kt-menu-item">
                     <a class="kt-menu-link" href="#">
                      <span class="kt-menu-icon">
                       <i class="ki-filled ki-file-up">
                       </i>
                      </span>
                      <span class="kt-menu-title">
                       Export
                      </span>
                     </a>
                    </div>
                    <div class="kt-menu-separator">
                    </div>
                    <div class="kt-menu-item">
                     <a class="kt-menu-link" href="#">
                      <span class="kt-menu-icon">
                       <i class="ki-filled ki-pencil">
                       </i>
                      </span>
                      <span class="kt-menu-title">
                       Edit
                      </span>
                     </a>
                    </div>
                    <div class="kt-menu-item">
                     <a class="kt-menu-link" href="#">
                      <span class="kt-menu-icon">
                       <i class="ki-filled ki-copy">
                       </i>
                      </span>
                      <span class="kt-menu-title">
                       Make a copy
                      </span>
                     </a>
                    </div>
                    <div class="kt-menu-separator">
                    </div>
                    <div class="kt-menu-item">
                     <a class="kt-menu-link" href="#">
                      <span class="kt-menu-icon">
                       <i class="ki-filled ki-trash">
                       </i>
                      </span>
                      <span class="kt-menu-title">
                       Remove
                      </span>
                     </a>
                    </div>
                   </div>
                  </div>
                 </div>
                </td>
               </tr>
              </tbody>
             </table>
            </div>
            <div class="kt-card-footer justify-center">
             <a class="kt-link kt-link-underlined kt-link-dashed" href="html/demo8/public-profile/projects/3-columns.html">
              All Projects
             </a>
            </div>
           </div>
           <!-- Fin du bloc projet -->
        
 </div>

</div>

 <!-- Fin du tableau de bord -->
@endsection