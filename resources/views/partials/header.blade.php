<!-- Debut du Header Unique Responsive -->
<header class="fixed z-10 top-0 start-0 end-0 shrink-0 bg-muted h-(--header-height)" id="header">
    <div class="kt-container-fluid flex items-center justify-between h-full gap-3">
        <!-- Section de gauche  -->
        <div class="flex items-center gap-2 lg:gap-3 shrink-0">
            <button class="kt-btn kt-btn-ghost kt-btn-icon size-8 lg:hidden" data-kt-drawer-toggle="#sidebar">
                <i class="ki-filled ki-menu"></i>
            </button>
            <button class="kt-btn kt-btn-ghost kt-btn-icon hidden lg:flex size-9" type="button" data-sidebar-toggle
                aria-label="Basculer la sidebar">
                <i class="ki-filled ki-menu text-lg"></i>
            </button>
            <a href="{{ url('') }}" class="flex items-center justify-center sidebar-logo-full">
                <img src="{{ URL::asset('assets/media/app/logo-sodeci.png') }}"
                    class="h-10 lg:h-12 max-w-[120px] lg:max-w-[160px] w-auto object-contain" alt="Logo SODECI" />
            </a>
        </div>
        <!-- Section de droite -->
        <div class="flex items-center gap-1.5 lg:gap-3 shrink-0">
            <button class="kt-btn kt-btn-ghost kt-btn-icon size-8 lg:size-9"
                data-kt-drawer-toggle="#notifications_drawer">
                <i class="ki-filled ki-notification text-lg"></i>
            </button>
            <button class="kt-btn kt-btn-ghost kt-btn-icon size-8 lg:size-9" data-kt-drawer-toggle="#chat_drawer">
                <i class="ki-filled ki-messages text-lg"></i>
            </button>
            <div data-kt-dropdown="true" data-kt-dropdown-placement="bottom-end">
                <div id="user-avatar-icon"
                    class="cursor-pointer size-8 lg:size-9 shrink-0 rounded-full border-2 border-green-500 bg-green-50 flex items-center justify-center text-green-600"
                    data-kt-dropdown-toggle="true">
                    <i class="ki-filled ki-user text-lg"></i>
                </div>
                @include('partials.user_dropdown')
            </div>
        </div>
    </div>
</header>
<!-- Fin du Header Unique Responsive -->
