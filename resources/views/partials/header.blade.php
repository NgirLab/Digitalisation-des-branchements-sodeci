 <!-- Debut du Header -->
            <header class="fixed z-10 top-0 start-0 end-0 shrink-0 bg-muted h-(--header-height) " id="header">
                <!-- Debut header version mobile -->
                <div class="flex lg:hidden items-center h-full">
                    <div class="kt-container-fixed flex items-center justify-between flex-wrap gap-2 w-full">
                        <div class="flex items-center gap-3 shrink-0">
                            <!-- Bouton menu sidebar  -->
                         <button class="kt-btn kt-btn-ghost kt-btn-icon size-8" data-kt-drawer-toggle="#sidebar">
                                <i class="ki-filled ki-menu"></i>
                            </button>
                        <!-- Logo -->
                        <a href="#" class="flex items-center justify-center">
                            <img src="{{ URL::asset('assets/media/app/logo-sodeci.png') }}" class="h-10 max-w-[120px] w-auto object-contain" alt="Logo SODECI" />
                        </a>
                    </div>
                        <!-- Boutons actions droite -->
                        <div class="flex items-center gap-1.5 shrink-0">
                            <!-- Notifications -->
                            <button class="kt-btn kt-btn-ghost kt-btn-icon size-8" data-kt-drawer-toggle="#notifications_drawer">
                                <i class="ki-filled ki-notification text-lg"></i>
                            </button>
                            @include('partials.notifications_drawer')
                            <!-- Chat -->
                            <button class="kt-btn kt-btn-ghost kt-btn-icon size-8" data-kt-drawer-toggle="#chat_drawer">
                                <i class="ki-filled ki-messages text-lg"></i>
                            </button>
                             @include('partials.chat')
                            <!-- User -->
                            <div data-kt-dropdown="true" data-kt-dropdown-placement="bottom-end">
                                <div class="cursor-pointer" data-kt-dropdown-toggle="true">
                                    <img class="size-8 rounded-full" src="assets/media/avatars/300-2.png"/>
                                </div>
                                @include('partials.user_dropdown')
                            </div>
                           
                        </div>
                    </div>
                </div>
                <!-- Fin header version mobile -->

                <!-- Header version desktop -->
                <div class="hidden lg:flex items-center h-full w-full">
                    <div class="flex items-center justify-between w-full px-5 gap-5">
                        <!-- Elements gauche -->
                        <div class="flex items-center gap-3 shrink-0">
                            <!-- toggle element -->
                            <button class="kt-btn kt-btn-ghost kt-btn-icon size-9" type="button" data-sidebar-toggle aria-label="Basculer la sidebar">
                                <i class="ki-filled ki-menu text-lg"></i>
                            </button>
                            <!-- Logo sodeci -->
                            <a href="{{url('')}}" class="flex items-center justify-center sidebar-logo-full">
                                <img src="{{ URL::asset('assets/media/app/logo-sodeci.png') }}" class="h-12 max-w-[160px] w-auto object-contain" alt="Logo SODECI" />
                            </a>  
                        </div>

                        <!-- Boutons d'action (à droite) -->
                        <div class="flex items-center gap-3 shrink-0">
                            <!-- Notifications -->
                            <button class="kt-btn kt-btn-ghost kt-btn-icon size-9"
                                    data-kt-drawer-toggle="#notifications_drawer">
                                <i class="ki-filled ki-notification text-lg"></i>
                            </button>
                            <!-- Chat -->
                            <button class="kt-btn kt-btn-ghost kt-btn-icon size-9" data-kt-drawer-toggle="#chat_drawer">
                                <i class="ki-filled ki-messages text-lg"></i>
                            </button>
                            <!-- User -->
                            <div data-kt-dropdown="true" data-kt-dropdown-placement="bottom-end">
                                <div class="cursor-pointer" data-kt-dropdown-toggle="true">
                                    <img class="size-9 rounded-full" src="assets/media/avatars/300-2.png"/>
                                </div>
                                @include('partials.user_dropdown')
                            </div>
                        </div>

                    </div>
                </div>
                <!-- Fin Header version desktop -->
            </header>
            <!-- Fin du Header -->
             