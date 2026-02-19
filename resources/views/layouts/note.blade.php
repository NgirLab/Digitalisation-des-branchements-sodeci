 <!-- Sidebar -->
 <div class="fixed top-(--header-height) bottom-0 z-20 hidden lg:flex flex-col items-stretch shrink-0 bg-muted [--kt-drawer-enable:true] lg:[--kt-drawer-enable:false] lg:w-(--sidebar-width) overflow-x-hidden min-w-0" data-kt-drawer="true" data-kt-drawer-class="kt-drawer kt-drawer-start flex" id="sidebar">
     <div class="kt-scrollable-y-hover grow gap-2.5 shrink-0 flex items-stretch pt-5 lg:pt-0 ps-1 pe-1 lg:pe-0 flex-col overflow-x-hidden min-w-0 w-full" data-kt-scrollable="true" data-kt-scrollable-dependencies="#sidebar_header,#sidebar_footer" data-kt-scrollable-height="auto" data-kt-scrollable-offset="80px" data-kt-scrollable-wrappers="#sidebar_menu_wrapper" id="sidebar_menu_wrapper">
      <!-- Sidebar Menu -->
      <div class="kt-menu flex flex-col gap-2.5 grow w-full min-w-0" data-kt-menu="true" id="sidebar_menu">
       <div class="kt-menu-item w-full min-w-0">
        <a class="kt-menu-link rounded-[9px] border border-transparent kt-menu-item-active:border-border kt-menu-item-active:bg-background kt-menu-link-hover:bg-background kt-menu-link-hover:border-border w-full max-w-full h-[52px] flex items-center justify-center px-2 py-2 overflow-hidden" href="{{url('/')}}" data-kt-tooltip="true" data-kt-tooltip-placement="bottom">
         <span class="kt-menu-icon kt-menu-item-here:text-primary kt-menu-item-active:text-primary kt-menu-link-hover:text-primary text-secondary-foreground flex justify-center shrink-0">
          <i class="ki-filled ki-chart-line-star text-xl">
          </i>
         </span>
         <span class="kt-tooltip sidebar-tooltip" data-kt-tooltip-content="true">Tableau de bord</span>
        </a>
       </div>
       
       <div class="kt-menu-item w-full min-w-0">
        <a class="kt-menu-link rounded-[9px] border border-transparent kt-menu-item-active:border-border kt-menu-item-active:bg-background kt-menu-link-hover:bg-background kt-menu-link-hover:border-border w-full max-w-full h-[52px] flex items-center justify-center px-2 py-2 overflow-hidden" href="{{url('/liste_demandes')}}" data-kt-tooltip="true" data-kt-tooltip-placement="bottom">
         <span class="kt-menu-icon kt-menu-item-here:text-primary kt-menu-item-active:text-primary kt-menu-link-hover:text-primary text-secondary-foreground flex justify-center shrink-0">
          <i class="ki-filled ki-chart-line-star text-xl">
          </i>
         </span>
         <span class="kt-tooltip sidebar-tooltip" data-kt-tooltip-content="true">Demandes</span>
        </a>
       </div>
       <div class="kt-menu-item w-full min-w-0" data-kt-menu-item-offset="-10px, 14px" data-kt-menu-item-overflow="true" data-kt-menu-item-placement="right-start" data-kt-menu-item-toggle="dropdown" data-kt-menu-item-trigger="click|lg:hover">
        <div class="kt-menu-link rounded-[9px] border border-transparent kt-menu-item-here:border-border kt-menu-item-here:bg-background kt-menu-link-hover:bg-background kt-menu-link-hover:border-border w-full max-w-full h-[52px] flex items-center justify-center px-2 py-2 overflow-hidden grow" data-kt-tooltip="true" data-kt-tooltip-placement="bottom">
         <span class="kt-menu-icon kt-menu-item-here:text-primary kt-menu-item-active:text-primary kt-menu-link-hover:text-primary text-secondary-foreground flex justify-center shrink-0">
          <i class="ki-filled ki-briefcase text-xl">
          </i>
         </span>
         <span class="kt-tooltip sidebar-tooltip" data-kt-tooltip-content="true">Affectations</span>
        </div>
        <div class="kt-menu-default kt-menu-dropdown gap-0.5 w-[220px] kt-scrollable-y-auto lg:overflow-visible max-h-[50vh]">
         <div class="kt-menu-item">
          <a class="kt-menu-link" href="{{url('/affectation/metre')}}">
           <span class="kt-menu-title">
            Affecter pour Métré
           </span>
          </a>
         </div>
         <div class="kt-menu-item">
          <a class="kt-menu-link" href="{{url('/affectation/mise en service')}}">
           <span class="kt-menu-title">
            Affecter pour Mise en service
           </span>
          </a>
         </div>
        
        </div>
       </div>
       <div class="kt-menu-item w-full min-w-0" data-kt-menu-item-offset="-10px, 14px" data-kt-menu-item-overflow="true" data-kt-menu-item-placement="right-start" data-kt-menu-item-toggle="dropdown" data-kt-menu-item-trigger="click|lg:hover">
        <div class="kt-menu-link rounded-[9px] border border-transparent kt-menu-item-here:border-border kt-menu-item-here:bg-background kt-menu-link-hover:bg-background kt-menu-link-hover:border-border w-full max-w-full h-[52px] flex items-center justify-center px-2 py-2 overflow-hidden grow" data-kt-tooltip="true" data-kt-tooltip-placement="bottom">
         <span class="kt-menu-icon kt-menu-item-here:text-primary kt-menu-item-active:text-primary kt-menu-link-hover:text-primary text-secondary-foreground flex justify-center shrink-0">
          <i class="ki-filled ki-folder-added text-xl">
          </i>
         </span>
         <span class="kt-tooltip sidebar-tooltip" data-kt-tooltip-content="true">Validations</span>
        </div>
        <div class="kt-menu-default kt-menu-dropdown gap-0.5 w-[220px] kt-scrollable-y-auto lg:overflow-visible max-h-[50vh]">
         <div class="kt-menu-item">
          <a class="kt-menu-link" href="{{url('/validations/metre')}}">
           <span class="kt-menu-title">
            CRI métré et devis à valider
           </span>
          </a>
         </div>
         <div class="kt-menu-item">
          <a class="kt-menu-link" href="{{url('/validations/mise en service')}}">
           <span class="kt-menu-title">
            CRI mise en service à valider
           </span>
          </a>
         </div>
 
        </div>
       </div>
       
       <div class="kt-menu-item w-full min-w-0" data-kt-menu-item-offset="-10px, 14px" data-kt-menu-item-overflow="true" data-kt-menu-item-placement="right-start" data-kt-menu-item-toggle="dropdown" data-kt-menu-item-trigger="click|lg:hover">
        <div class="kt-menu-link rounded-[9px] border border-transparent kt-menu-item-here:border-border kt-menu-item-here:bg-background kt-menu-link-hover:bg-background kt-menu-link-hover:border-border w-full max-w-full h-[52px] flex items-center justify-center px-2 py-2 overflow-hidden grow" data-kt-tooltip="true" data-kt-tooltip-placement="bottom">
         <span class="kt-menu-icon kt-menu-item-here:text-primary kt-menu-item-active:text-primary kt-menu-link-hover:text-primary text-secondary-foreground flex justify-center shrink-0">
          <i class="ki-filled ki-notepad-edit text-xl">
          </i>
         </span>
         <span class="kt-tooltip sidebar-tooltip" data-kt-tooltip-content="true">CRI et Devis</span>
        </div>
        <div class="kt-menu-default kt-menu-dropdown gap-0.5 w-[220px] kt-scrollable-y-auto lg:overflow-visible max-h-[50vh]">
         <div class="kt-menu-item">
          <a class="kt-menu-link" href="{{url('/compte_rendu/metre')}}">
           <span class="kt-menu-title">
            CRI Métré et Devis
           </span>
          </a>
         </div>
         <div class="kt-menu-item">
          <a class="kt-menu-link" href="{{url('/compte_rendu/mise_en_service')}}">
           <span class="kt-menu-title">
            CRI Mise en service
           </span>
          </a>
         </div>
        
        </div>
       </div>
       <div class="kt-menu-item w-full min-w-0" data-kt-menu-item-offset="-10px, 14px" data-kt-menu-item-overflow="true" data-kt-menu-item-placement="right-start" data-kt-menu-item-toggle="dropdown" data-kt-menu-item-trigger="click|lg:hover">
        <div class="kt-menu-link rounded-[9px] border border-transparent kt-menu-item-here:border-border kt-menu-item-here:bg-background kt-menu-link-hover:bg-background kt-menu-link-hover:border-border w-full max-w-full h-[52px] flex items-center justify-center px-2 py-2 overflow-hidden grow" data-kt-tooltip="true" data-kt-tooltip-placement="bottom">
         <span class="kt-menu-icon kt-menu-item-here:text-primary kt-menu-item-active:text-primary kt-menu-link-hover:text-primary text-secondary-foreground flex justify-center shrink-0">
          <i class="ki-filled ki-tablet-text-up text-xl">
          </i>
         </span>
         <span class="kt-tooltip sidebar-tooltip" data-kt-tooltip-content="true">Données de référence</span>
        </div>
        <div class="kt-menu-default kt-menu-dropdown gap-0.5 w-[220px] kt-scrollable-y-auto lg:overflow-visible max-h-[50vh]">
         <div class="kt-menu-item">
          <a class="kt-menu-link" href="{{url('/referentiels/liste_agents')}}">
           <span class="kt-menu-title">
            Liste des agents
           </span>
          </a>
         </div>
        
         <div class="kt-menu-item">
          <a class="kt-menu-link" href="{{url('/referentiels/liste_agences')}}">
           <span class="kt-menu-title">
            Liste des agences
           </span>
          </a>
         </div>
         <div class="kt-menu-item">
          <a class="kt-menu-link" href="{{url('')}}">
           <span class="kt-menu-title">
            Découpages géographiques
           </span>
          </a>
         </div>
         <div class="kt-menu-item">
          <a class="kt-menu-link" href="{{url('')}}">
           <span class="kt-menu-title">
            Quartiers
           </span>
          </a>
         </div>
         <div class="kt-menu-separator">
         </div>
         <div class="kt-menu-item" data-kt-menu-item-placement="right-start" data-kt-menu-item-toggle="accordion|lg:dropdown" data-kt-menu-item-trigger="click|lg:hover">
          <div class="kt-menu-link grow cursor-pointer">
           <span class="kt-menu-title">
            Voir plus
           </span>
           <span class="kt-menu-arrow">
            <i class="ki-filled ki-right text-xs rtl:translate rtl:rotate-180">
            </i>
           </span>
          </div>
          <div class="kt-menu-default kt-menu-dropdown gap-0.5 w-[220px]">
           <div class="kt-menu-item">
            <a class="kt-menu-link" href="{{url('')}}">
             <span class="kt-menu-title">
              Catégories contractuelles
             </span>
            </a>
           </div>
           <div class="kt-menu-item">
            <a class="kt-menu-link" href="{{url('')}}">
             <span class="kt-menu-title">
              Genres clients
             </span>
            </a>
           </div>
           <div class="kt-menu-item">
            <a class="kt-menu-link" href="{{url('')}}">
             <span class="kt-menu-title">
              Usages
             </span>
            </a>
           </div>
          </div>
          </div>
        </div>
       </div>

       <div class="kt-menu-item w-full min-w-0" data-kt-menu-item-offset="-10px, 14px" data-kt-menu-item-overflow="true" data-kt-menu-item-placement="right-start" data-kt-menu-item-toggle="dropdown" data-kt-menu-item-trigger="click|lg:hover">
        <div class="kt-menu-link rounded-[9px] border border-transparent kt-menu-item-here:border-border kt-menu-item-here:bg-background kt-menu-link-hover:bg-background kt-menu-link-hover:border-border w-full max-w-full h-[52px] flex items-center justify-center px-2 py-2 overflow-hidden grow" data-kt-tooltip="true" data-kt-tooltip-placement="bottom">
         <span class="kt-menu-icon kt-menu-item-here:text-primary kt-menu-item-active:text-primary kt-menu-link-hover:text-primary text-secondary-foreground flex justify-center shrink-0">
          <i class="ki-filled ki-security-user text-xl">
          </i>
         </span>
         <span class="kt-tooltip sidebar-tooltip" data-kt-tooltip-content="true">Administration</span>
        </div>
        <div class="kt-menu-default kt-menu-dropdown gap-0.5 w-[220px] kt-scrollable-y-auto lg:overflow-visible max-h-[50vh]">
         <div class="kt-menu-item">
          <a class="kt-menu-link" href="{{url('/administration/roles_et_habilitations')}}">
           <span class="kt-menu-title">
            Rôles & habilitations
           </span>
          </a>
         </div>
         <div class="kt-menu-item">
          <a class="kt-menu-link" href="{{url('')}}">
           <span class="kt-menu-title">
            Journaux d'actions
           </span>
          </a>
         </div>
         <div class="kt-menu-item">
          <a class="kt-menu-link" href="{{url('')}}">
           <span class="kt-menu-title">
            Données de référence
           </span>
          </a>
         </div>
         <div class="kt-menu-item">
          <a class="kt-menu-link" href="{{url('')}}">
           <span class="kt-menu-title">
            Paramétrages système
           </span>
          </a>
         </div>
         <div class="kt-menu-item" data-kt-menu-item-placement="right-start" data-kt-menu-item-toggle="accordion|lg:dropdown" data-kt-menu-item-trigger="click|lg:hover">
          <div class="kt-menu-link grow cursor-pointer">
           <span class="kt-menu-title">
            Voir plus
           </span>
           <span class="kt-menu-arrow">
            <i class="ki-filled ki-right text-xs rtl:translate rtl:rotate-180">
            </i>
           </span>
          </div>
          <div class="kt-menu-default kt-menu-dropdown gap-0.5 w-[220px]">
           <div class="kt-menu-item">
            <a class="kt-menu-link" href="{{url('')}}">
             <span class="kt-menu-title">
              add
             </span>
            </a>
           </div>
           <div class="kt-menu-item">
            <a class="kt-menu-link" href="{{url('')}}">
             <span class="kt-menu-title">
              add
             </span>
            </a>
           </div>
          </div>
         </div>
        </div>
       </div>

       <div class="kt-menu-item w-full min-w-0">
        <a class="kt-menu-link rounded-[9px] border border-transparent kt-menu-item-active:border-border kt-menu-item-active:bg-background kt-menu-link-hover:bg-background kt-menu-link-hover:border-border w-full max-w-full h-[52px] flex items-center justify-center px-2 py-2 overflow-hidden" href="html/demo8.html" data-kt-tooltip="true" data-kt-tooltip-placement="bottom">
         <span class="kt-menu-icon kt-menu-item-here:text-primary kt-menu-item-active:text-primary kt-menu-link-hover:text-primary text-secondary-foreground flex justify-center shrink-0">
          <i class="ki-filled ki-setting-2 text-xl">
          </i>
         </span>
         <span class="kt-tooltip sidebar-tooltip" data-kt-tooltip-content="true">Paramètres</span>
        </a>
       </div>
      </div>
      <!-- End of Sidebar Menu -->
     </div>
     </div>
    <!-- End of Sidebar -->