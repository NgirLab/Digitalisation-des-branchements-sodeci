<div class="kt-dropdown-menu w-[250px]" data-kt-dropdown-menu="true">
    <div class="flex items-center justify-between px-2.5 py-1.5 gap-1.5">
        <div class="flex items-center gap-2">
            <div id="user-avatar-icon"
                class="size-9 shrink-0 rounded-full border-2 border-green-500 bg-green-50 flex items-center justify-center text-green-600">
                <i class="ki-filled ki-user text-lg"></i>
            </div>

            <div class="flex flex-col gap-1.5">
                <span id="user-name-display" class="text-sm text-foreground font-semibold leading-none">
                    Chargement...
                </span>
                <a id="user-email-display"
                    class="text-xs text-secondary-foreground hover:text-primary font-medium leading-none"
                    href="#">
                    Chargement...
                </a>
            </div>
        </div>

    </div>
    <ul class="kt-dropdown-menu-sub">
        <li>
            <div class="kt-dropdown-menu-separator">
            </div>
        </li>
        <li>
            <a class="kt-dropdown-menu-link" href="html/demo8/public-profile/profiles/default.html">
                <i class="ki-filled ki-badge">
                </i>
                Mon profil
            </a>
        </li>
        <li>
        </li>
    </ul>
    <div class="px-2.5 pt-1.5 mb-2.5 flex flex-col gap-3.5">
        <div class="flex items-center gap-2 justify-between">
            <span class="flex items-center gap-2">
                <i class="ki-filled ki-moon text-base text-muted-foreground">
                </i>
                <span class="font-medium text-2sm">
                    Dark Mode
                </span>
            </span>
            <input class="kt-switch" data-kt-theme-switch-state="dark" data-kt-theme-switch-toggle="true" name="check"
                type="checkbox" value="1" />
        </div>
        <a class="kt-btn kt-btn-outline justify-center w-full" href="#"
            onclick="event.preventDefault(); logoutUser();">
            Log out
        </a>
    </div>
</div>
