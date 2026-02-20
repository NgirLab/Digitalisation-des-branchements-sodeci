@extends('layouts.base')
@section('content')
    <!-- Debut du tableau de bord -->
    <!-- Toolbar -->
    <div class="pb-5">
        <!-- Container -->
        <div class="kt-container-fixed flex items-center justify-between flex-wrap gap-3">
            <!-- Début section gauche toolbar -->
            <div class="flex items-center flex-wrap gap-1 lg:gap-5">
                <h1 class="font-medium text-base text-mono">
                    Tableau de bord
                </h1>
                <div class="flex items-center flex-wrap gap-1 text-sm">
                    <a class="text-secondary-foreground hover:text-primary" href="#">
                        link1
                    </a>
                    <span class="text-muted-foreground text-sm">
                        /
                    </span>
                    <span class="text-secondary-foreground">
                        <a class="text-secondary-foreground hover:text-primary" href="#">
                            link2
                        </a>
                    </span>
                    <span class="text-muted-foreground text-sm">
                        /
                    </span>
                    <span class="text-secondary-foreground">
                        <a class="text-secondary-foreground hover:text-primary" href="#">
                            link3
                        </a>
                    </span>
                    <span class="text-muted-foreground text-sm">
                        /
                    </span>
                    <span class="text-mono">
                        <a class="text-secondary-foreground hover:text-primary" href="#">
                            link4
                        </a>
                    </span>
                </div>
            </div>
            <!-- Fin section gauche toolbar -->
            <!-- Début section droite toolbar -->
            <div class="flex items-center flex-wrap gap-1.5 lg:gap-2.5">
            </div>
            <!-- Fin section droite toolbar -->
        </div>
        <!-- End of Container -->
    </div>
    <!-- End of Toolbar -->
    <style>
        .hero-bg {
            background-image: url('assets/media/images/2600x1200/bg-1.png');
        }

        .dark .hero-bg {
            background-image: url('assets/media/images/2600x1200/bg-1-dark.png');
        }
    </style>

    <div class="bg-center bg-cover bg-no-repeat hero-bg">

    </div>

    <!-- Container -->
    <div class="kt-container-fixed">
        <!-- Debut grid principale-->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-5 lg:gap-7.5">
            <!-- Debut KPIs -->
            <div class="col-span-1 lg:col-span-3">
                <div class="flex gap-5 kt-scrollable-x">
                    <!-- début element 1-->
                    <div class="kt-card rounded-xl shadow-none w-[256px] border-0 mb-4">
                        <div class="kt-card-border w-[256px] grid gap-4 px-5 pt-3 pb-3 mb-4 rounded-lg ">
                            <div class="flex items-center gap-2.5">
                                <div class="grid grid-cols-1 gap-1">
                                    <a class="text-mono hover:text-primary text-base font-medium mb-px" href="#">
                                        Toutes les demandes
                                    </a>
                                </div>
                            </div>
                            <div class="grid gap-3">
                                <div class="text-2xl font-bold text-foreground">
                                    450
                                </div>
                                <p class="text-sm text-secondary-foreground">
                                    +12% vs semaine dernière
                                </p>
                            </div>

                            <a class="kt-link kt-link-underlined kt-link-dashed" href="#">
                                Voir les demandes
                            </a>
                        </div>
                    </div>
                    <!-- Fin élement 1-->
                    <!-- début element 2-->
                    <div class="kt-card rounded-xl shadow-none w-[256px] border-0 mb-4">
                        <div class="kt-card-border w-[256px] grid gap-4 px-5 pt-3 pb-3 mb-4 rounded-lg ">
                            <div class="flex items-center gap-2.5">
                                <div class="grid grid-cols-1 gap-1">
                                    <a class="text-mono hover:text-primary text-base font-medium mb-px" href="#">
                                        Demandes d'aujourd'hui
                                    </a>
                                </div>
                            </div>
                            <div class="grid gap-3">
                                <div class="text-2xl font-bold text-foreground">
                                    13
                                </div>
                                <p class="text-sm text-secondary-foreground">
                                    Nouvelles demandes
                                </p>
                            </div>

                            <a class="kt-link kt-link-underlined kt-link-dashed" href="#">
                                Voir les demandes
                            </a>
                        </div>
                    </div>
                    <!-- Fin élement 2-->
                    <!-- début element 3-->
                    <div class="kt-card rounded-xl shadow-none w-[256px] border-0 mb-4">
                        <div class="kt-card-border w-[256px] grid gap-4 px-5 pt-3 pb-3 mb-4 rounded-lg ">
                            <div class="flex items-center gap-2.5">
                                <div class="grid grid-cols-1 gap-1">
                                    <a class="text-mono hover:text-primary text-base font-medium mb-px" href="#">
                                        Demandes en traitement
                                    </a>
                                </div>
                            </div>
                            <div class="grid gap-3">
                                <div class="text-2xl font-bold text-foreground">
                                    23
                                </div>
                                <p class="text-sm text-secondary-foreground">
                                    Demandes en traitement
                                </p>
                            </div>

                            <a class="kt-link kt-link-underlined kt-link-dashed" href="#">
                                Continuer le traitement
                            </a>
                        </div>
                    </div>
                    <!-- Fin élement 3-->
                    <!-- début element 4-->
                    <div class="kt-card rounded-xl shadow-none w-[256px] border-0 mb-4">
                        <div class="kt-card-border w-[256px] grid gap-4 px-5 pt-3 pb-3 mb-4 rounded-lg ">
                            <div class="flex items-center gap-2.5">
                                <div class="grid grid-cols-1 gap-1">
                                    <a class="text-mono hover:text-primary text-base font-medium mb-px" href="#">
                                        Demandes refusées
                                    </a>
                                </div>
                            </div>
                            <div class="grid gap-3">
                                <div class="text-2xl font-bold text-foreground">
                                    42
                                </div>
                                <p class="text-sm text-secondary-foreground">
                                    +7 demandes cette semaine
                                </p>
                            </div>

                            <a class="kt-link kt-link-underlined kt-link-dashed" href="#">
                                Voir les détails
                            </a>
                        </div>
                    </div>
                    <!-- Fin élement 4-->

                </div>
            </div>
            <!-- Fin  KPIs -->
            <!-- Debut contenu principal -->
            <!-- Debut colonne 1 -->
            <div class="col-span-1">
                <div class="flex flex-col gap-5 lg:gap-7.5">

                    <!-- Debut Bloc 1 - colonne 1 -->
                    <div class="kt-card">
                        <div class="kt-card-header">
                            <h3 class="kt-card-title">
                                Agenda
                            </h3>
                            <a class="kt-link kt-link-underlined kt-link-dashed"
                                href="html/demo8/public-profile/works.html">
                                View All
                            </a>
                        </div>

                        <div class="kt-card-content">
                            <div class="grid gap-6">

                                <!-- Item -->
                                <div class="flex flex-col gap-4">
                                    <div class="flex items-start gap-4">

                                        <!-- Date -->
                                        <div class="border border-orange-200 dark:border-orange-950 rounded-lg shrink-0">
                                            <div
                                                class="flex items-center justify-center border-b border-orange-200 bg-orange-100 dark:border-orange-950 dark:bg-orange-950/30 rounded-t-lg">
                                                <span class="text-sm text-orange-400 fw-medium px-3 py-1">
                                                    Feb
                                                </span>
                                            </div>
                                            <div class="flex items-center justify-center size-12">
                                                <span class="font-medium text-foreground text-lg tracking-tight">
                                                    21
                                                </span>
                                            </div>
                                        </div>

                                        <!-- Image -->
                                        <img alt="" class="rounded-lg w-20 h-20 object-cover shrink-0"
                                            src="assets/media/images/600x400/7.jpg" />
                                    </div>

                                    <!-- Content -->
                                    <div class="flex flex-col gap-1 pl-[68px]">
                                        <a class="text-sm font-medium text-primary hover:text-primary">
                                            Webinar Series
                                        </a>
                                        <a class="text-base font-medium hover:text-primary text-mono">
                                            Digital Marketing Mastery Series
                                        </a>
                                        <p class="text-sm text-foreground leading-relaxed">
                                            Join our comprehensive webinars to master the art of digital marketing
                                            strategies.
                                        </p>
                                    </div>
                                </div>

                                <div class="border-b border-border"></div>

                                <!-- Dupliquer exactement la même structure pour les autres items -->
                                <!-- Item -->
                                <div class="flex flex-col gap-4">
                                    <div class="flex items-start gap-4">
                                        <div class="border border-orange-200 dark:border-orange-950 rounded-lg shrink-0">
                                            <div
                                                class="flex items-center justify-center border-b border-orange-200 bg-orange-100 dark:border-orange-950 dark:bg-orange-950/30 rounded-t-lg">
                                                <span class="text-sm text-orange-400 fw-medium px-3 py-1">
                                                    Apr
                                                </span>
                                            </div>
                                            <div class="flex items-center justify-center size-12">
                                                <span class="font-medium text-foreground text-lg tracking-tight">
                                                    02
                                                </span>
                                            </div>
                                        </div>

                                        <img alt="" class="rounded-lg w-20 h-20 object-cover shrink-0"
                                            src="assets/media/images/600x400/8.jpg" />
                                    </div>

                                    <div class="flex flex-col gap-1 pl-[68px]">
                                        <a class="text-sm font-medium text-primary hover:text-primary">
                                            Photo Workshop
                                        </a>
                                        <a class="text-base font-medium hover:text-primary text-mono">
                                            Nature Photography Immersion
                                        </a>
                                        <p class="text-sm text-foreground leading-relaxed">
                                            Enhance your nature photography skills in a hands-on workshop guided by
                                            experienced photographers.
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- Fin Bloc 1 - colonne 1 -->


                    <!-- Debut Bloc a - colonne 1 -->
                    <div class="kt-card">
                        <div class="kt-card-header">
                            <h3 class="kt-card-title">
                                Highlights
                            </h3>
                        </div>
                        <div class="kt-card-content pt-3.5 pb-3.5">
                            <table class="kt-table-auto">
                                <tbody>
                                    <tr>
                                        <td class="text-sm text-secondary-foreground pb-3 pe-4 lg:pe-10">
                                            Locations:
                                        </td>
                                        <td class="text-sm ext-mono pb-3">
                                            79
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-sm text-secondary-foreground pb-3 pe-4 lg:pe-10">
                                            Founded:
                                        </td>
                                        <td class="text-sm ext-mono pb-3">
                                            2011
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-sm text-secondary-foreground pb-3 pe-4 lg:pe-10">
                                            Status:
                                        </td>
                                        <td class="text-sm ext-mono pb-3">
                                            <span class="kt-badge kt-badge-sm kt-badge-success kt-badge-outline">
                                                Subscribed
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-sm text-secondary-foreground pb-3 pe-4 lg:pe-10">
                                            Area:
                                        </td>
                                        <td class="text-sm ext-mono pb-3">
                                            Worldwide
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-sm text-secondary-foreground pb-3 pe-4 lg:pe-10">
                                            CEO:
                                        </td>
                                        <td class="text-sm ext-mono pb-3">
                                            <a class="kt-link" href="#">
                                                Luis von Ahn
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-sm text-secondary-foreground pb-3 pe-4 lg:pe-10">
                                            Sector:
                                        </td>
                                        <td class="text-sm ext-mono pb-3">
                                            Online Education
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- Fin Bloc a - colonne 1 -->
                    <!-- Debut Bloc 2 - colonne 1 -->
                    <div class="kt-card">
                        <div class="kt-card-header">
                            <h3 class="kt-card-title">
                                Open Jobs
                            </h3>
                        </div>
                        <div class="kt-card-content">
                            <div class="grid gap-5">
                                <div class="flex align-start gap-3.5">
                                    <div
                                        class="flex items-center justify-center w-[1.875rem] h-[1.875rem] bg-accent/60 rounded-lg border border-input">
                                        <i class="ki-filled ki-chart-line-star text-base text-secondary-foreground">
                                        </i>
                                    </div>
                                    <div class="flex flex-col justify-start gap-1">
                                        <a class="text-sm font-semibold leading-none kt-link" href="#">
                                            Data Science
                                        </a>
                                        <span class="text-sm font-medium text-mono">
                                            Data Science Ninja
                                        </span>
                                        <span class="text-xs text-secondary-foreground">
                                            $80,000 - $110,000
                                        </span>
                                    </div>
                                </div>
                                <div class="flex align-start gap-3.5">
                                    <div
                                        class="flex items-center justify-center w-[1.875rem] h-[1.875rem] bg-accent/60 rounded-lg border border-input">
                                        <i class="ki-filled ki-rocket text-base text-secondary-foreground">
                                        </i>
                                    </div>
                                    <div class="flex flex-col justify-start gap-1">
                                        <a class="text-sm font-semibold leading-none kt-link" href="#">
                                            Exploration
                                        </a>
                                        <span class="text-sm font-medium text-mono">
                                            Galactic Guide Writer
                                        </span>
                                        <span class="text-xs text-secondary-foreground">
                                            $45,000 - $60,000
                                        </span>
                                    </div>
                                </div>
                                <div class="flex align-start gap-3.5">
                                    <div
                                        class="flex items-center justify-center w-[1.875rem] h-[1.875rem] bg-accent/60 rounded-lg border border-input">
                                        <i class="ki-filled ki-milk text-base text-secondary-foreground">
                                        </i>
                                    </div>
                                    <div class="flex flex-col justify-start gap-1">
                                        <a class="text-sm font-semibold leading-none kt-link" href="#">
                                            Drinking Arts
                                        </a>
                                        <span class="text-sm font-medium text-mono">
                                            Taste
                                        </span>
                                        <span class="text-xs text-secondary-foreground">
                                            $40,000 - $55,000
                                        </span>
                                    </div>
                                </div>
                                <div class="flex align-start gap-3.5">
                                    <div
                                        class="flex items-center justify-center w-[1.875rem] h-[1.875rem] bg-accent/60 rounded-lg border border-input">
                                        <i class="ki-filled ki-abstract-44 text-base text-secondary-foreground">
                                        </i>
                                    </div>
                                    <div class="flex flex-col justify-start gap-1">
                                        <a class="text-sm font-semibold leading-none kt-link" href="#">
                                            Film Production
                                        </a>
                                        <span class="text-sm font-medium text-mono">
                                            Zombie Makeup Artist
                                        </span>
                                        <span class="text-xs text-secondary-foreground">
                                            $55,000 - $75,000
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="kt-card-footer justify-center">
                            <a class="kt-link kt-link-underlined kt-link-dashed"
                                href="html/demo8/public-profile/works.html">
                                View & Apply
                            </a>
                        </div>
                    </div>
                    <!-- Fin Bloc 2 - colonne 1 -->
                    <div class="kt-card">
                        <div class="kt-card-header">
                            <h3 class="kt-card-title">
                                Network
                            </h3>
                        </div>
                        <div class="kt-card-content pt-4">
                            <div class="grid gap-2.5 mb-1">
                                <div class="flex items-center gap-2.5">
                                    <span class="">
                                        <i class="ki-filled ki-dribbble text-lg text-muted-foreground">
                                        </i>
                                    </span>
                                    <a class="text-mono hover:text-primary text-sm" href="#">
                                        https://duolingo.com
                                    </a>
                                </div>
                                <div class="flex items-center gap-2.5">
                                    <span class="">
                                        <i class="ki-filled ki-sms text-lg text-muted-foreground">
                                        </i>
                                    </span>
                                    <a class="text-mono hover:text-primary text-sm" href="#">
                                        info@duolingo.com
                                    </a>
                                </div>
                                <div class="flex items-center gap-2.5">
                                    <span class="">
                                        <i class="ki-filled ki-facebook text-lg text-muted-foreground">
                                        </i>
                                    </span>
                                    <a class="text-mono hover:text-primary text-sm" href="#">
                                        duolingo
                                    </a>
                                </div>
                                <div class="flex items-center gap-2.5">
                                    <span class="">
                                        <i class="ki-filled ki-twitter text-lg text-muted-foreground">
                                        </i>
                                    </span>
                                    <a class="text-mono hover:text-primary text-sm" href="#">
                                        duolingo-news
                                    </a>
                                </div>
                                <div class="flex items-center gap-2.5">
                                    <span class="">
                                        <i class="ki-filled ki-youtube text-lg text-muted-foreground">
                                        </i>
                                    </span>
                                    <a class="text-mono hover:text-primary text-sm" href="#">
                                        duolingo-tuts
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Debut Bloc 3 - colonne 1 -->
                    <div class="kt-card">
                        <div class="kt-card-header">
                            <h3 class="kt-card-title">
                                Tags
                            </h3>
                        </div>
                        <div class="kt-card-content">
                            <div class="flex flex-wrap gap-2.5 mb-2">
                                <span class="kt-badge kt-badge-outline">
                                    Web Design
                                </span>
                                <span class="kt-badge kt-badge-outline">
                                    Code Review
                                </span>
                                <span class="kt-badge kt-badge-outline">
                                    Figma
                                </span>
                                <span class="kt-badge kt-badge-outline">
                                    Product Development
                                </span>
                                <span class="kt-badge kt-badge-outline">
                                    Webflow
                                </span>
                                <span class="kt-badge kt-badge-outline">
                                    AI
                                </span>
                                <span class="kt-badge kt-badge-outline">
                                    noCode
                                </span>
                                <span class="kt-badge kt-badge-outline">
                                    Management
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- Fin Bloc 3 - colonne 1 -->
                </div>
            </div>
            <!-- Fin colonne 1 -->
            <!-- Debut colonne 2 -->
            <div class="col-span-1 lg:col-span-2">
                <div class="flex flex-col gap-5 lg:gap-7.5">
                    <!-- Debut Bloc 1 - colonne 2 -->
                    <div class="kt-card">
                        <div class="kt-card-header">
                            <h3 class="kt-card-title">
                                Historique des actions
                            </h3>
                            <div class="flex items-center gap-2">
                                <label class="group text-2sm font-medium inline-flex items-center gap-2">
                                    <span class="inline-flex items-center gap-2">
                                        Mise à jour auto:
                                        <span class="group-has-checked:hidden">
                                            Off
                                        </span>
                                        <span class="hidden group-has-checked:inline">
                                            On
                                        </span>
                                    </span>
                                    <input checked="" class="kt-switch kt-switch-sm" name="check" type="checkbox"
                                        value="1" />
                                </label>
                            </div>
                        </div>
                        <div class="kt-card-content">
                            <div class="flex flex-col">
                                <div class="flex items-start relative">
                                    <div
                                        class="w-9 start-0 top-9 absolute bottom-0 rtl:-translate-x-1/2 translate-x-1/2 border-s border-s-input">
                                    </div>
                                    <div
                                        class="flex items-center justify-center shrink-0 rounded-full bg-accent/60 border border-input size-9 text-secondary-foreground">
                                        <i class="ki-filled ki-people text-base">
                                        </i>
                                    </div>
                                    <div class="ps-2.5 mb-7 text-base grow">
                                        <div class="flex flex-col">
                                            <div class="text-sm text-foreground">
                                                Posted a new article
                                                <a class="text-sm font-medium kt-link"
                                                    href="html/demo8/public-profile/profiles/blogger.html">
                                                    Top 10 Tech Trends
                                                </a>
                                            </div>
                                            <span class="text-xs text-secondary-foreground">
                                                Today, 9:00 AM
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex items-start relative">
                                    <div
                                        class="w-9 start-0 top-9 absolute bottom-0 rtl:-translate-x-1/2 translate-x-1/2 border-s border-s-input">
                                    </div>
                                    <div
                                        class="flex items-center justify-center shrink-0 rounded-full bg-accent/60 border border-input size-9 text-secondary-foreground">
                                        <i class="ki-filled ki-entrance-left text-base">
                                        </i>
                                    </div>
                                    <div class="ps-2.5 mb-7 text-base grow">
                                        <div class="flex flex-col">
                                            <div class="text-sm text-foreground">
                                                I had the privilege of interviewing an industry expert for an
                                                <a class="text-sm kt-link"
                                                    href="html/demo8/public-profile/profiles/blogger.html">
                                                    upcoming blog post
                                                </a>
                                            </div>
                                            <span class="text-xs text-secondary-foreground">
                                                2 days ago, 4:07 PM
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex items-start relative">
                                    <div
                                        class="w-9 start-0 top-9 absolute bottom-0 rtl:-translate-x-1/2 translate-x-1/2 border-s border-s-input">
                                    </div>
                                    <div
                                        class="flex items-center justify-center shrink-0 rounded-full bg-accent/60 border border-input size-9 text-secondary-foreground">
                                        <i class="ki-filled ki-share text-base">
                                        </i>
                                    </div>
                                    <div class="ps-2.5 mb-7 text-base grow">
                                        <div class="flex flex-col">
                                            <div class="text-sm text-foreground">
                                                I couldn't resist sharing a sneak peek of our
                                                <a class="text-sm kt-link"
                                                    href="html/demo8/public-profile/profiles/blogger.html">
                                                    upcoming content
                                                </a>
                                            </div>
                                            <span class="text-xs text-secondary-foreground">
                                                5 days ago, 4:07 PM
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex items-start relative">
                                    <div
                                        class="w-9 start-0 top-9 absolute bottom-0 rtl:-translate-x-1/2 translate-x-1/2 border-s border-s-input">
                                    </div>
                                    <div
                                        class="flex items-center justify-center shrink-0 rounded-full bg-accent/60 border border-input size-9 text-secondary-foreground">
                                        <i class="ki-filled ki-directbox-default text-base">
                                        </i>
                                    </div>
                                    <div class="ps-2.5 mb-7 text-base grow">
                                        <div class="flex flex-col pb-2.5">
                                            <span class="text-sm text-foreground">
                                                Attending the virtual blogging conference was an enriching experience
                                            </span>
                                            <span class="text-xs text-secondary-foreground">
                                                2 days ago, 4:07 PM
                                            </span>
                                        </div>
                                        <div class="kt-card shadow-none">
                                            <div class="kt-card-content lg:py-4">
                                                <div class="flex justify-center py-4">
                                                    <img alt="image" class="dark:hidden max-h-[160px]"
                                                        src="assets/media/illustrations/3.svg" />
                                                    <img alt="image" class="light:hidden max-h-[160px]"
                                                        src="assets/media/illustrations/3-dark.svg" />
                                                </div>
                                                <div class="flex flex-col gap-1">
                                                    <div class="text-base font-medium text-mono text-center">
                                                        Blogging Conference
                                                    </div>
                                                    <div class="flex items-center justify-center gap-1">
                                                        <a class="text-sm font-semibold link"
                                                            href="html/demo8/public-profile/profiles/company.html">
                                                            Axio new release
                                                        </a>
                                                        <span class="text-sm text-secondary-foreground me-2">
                                                            email campaign
                                                        </span>
                                                        <span
                                                            class="kt-badge kt-badge-sm kt-badge-success kt-badge-outline">
                                                            Public
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex items-start relative">
                                    <div
                                        class="w-9 start-0 top-9 absolute bottom-0 rtl:-translate-x-1/2 translate-x-1/2 border-s border-s-input">
                                    </div>
                                    <div
                                        class="flex items-center justify-center shrink-0 rounded-full bg-accent/60 border border-input size-9 text-secondary-foreground">
                                        <i class="ki-filled ki-coffee text-base">
                                        </i>
                                    </div>
                                    <div class="ps-2.5 mb-7 text-base grow">
                                        <div class="flex flex-col">
                                            <div class="text-sm text-mono">
                                                Reaching the milestone of
                                                <a class="text-sm font-medium kt-ink"
                                                    href="html/demo8/public-profile/profiles/feeds.html">
                                                    10,000 followers
                                                </a>
                                                on the blog was a dream come true
                                            </div>
                                            <span class="text-xs text-secondary-foreground">
                                                5 days ago, 4:07 PM
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex items-start relative">
                                    <div
                                        class="flex items-center justify-center shrink-0 rounded-full bg-accent/60 border border-input size-9 text-secondary-foreground">
                                        <i class="ki-filled ki-cup text-base">
                                        </i>
                                    </div>
                                    <div class="ps-2.5 text-base grow">
                                        <div class="flex flex-col">
                                            <div class="text-sm text-foreground">
                                                We recently
                                                <a class="text-sm font-medium kt-link"
                                                    href="html/demo8/public-profile/profiles/nft.html">
                                                    celebrated
                                                </a>
                                                the blog's 1-year anniversary
                                            </div>
                                            <span class="text-xs text-secondary-foreground">
                                                3 months ago, 4:07 PM
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="kt-card-footer justify-center">
                            <a class="kt-link kt-link-underlined kt-link-dashed" href="#">
                                Voir plus
                            </a>
                        </div>
                    </div>
                    <!-- Fin Bloc 1 - colonne 2 -->

                    <!-- Debut Bloc 2 - colonne 2 -->
                    <div class="kt-card">
                        <div class="kt-card-header">
                            <h3 class="kt-card-title">
                                Locations
                            </h3>
                            <button class="kt-btn kt-btn-primary">
                                <i class="ki-filled ki-geolocation">
                                </i>
                                Offer Location
                            </button>
                        </div>
                        <div class="kt-card-content p-5 lg:p-7.5 lg:pb-7">
                            <div class="flex gap-5 kt-scrollable-x">
                                <div class="kt-card shadow-none w-[280px] border-0 mb-4">
                                    <img alt="" class="rounded-t-xl max-w-[280px] shrink-0"
                                        src="assets/media/images/600x400/10.jpg" />
                                    <div class="kt-card-border kt-card-rounded-b px-3.5 h-full pt-3 pb-3.5">
                                        <a class="font-medium block text-mono hover:text-primary text-base mb-2"
                                            href="#">
                                            Duolingo Tech Hub
                                        </a>
                                        <p class="text-sm text-secondary-foreground">
                                            456 Innovation Street, Floor 6, Techland, New York 54321
                                        </p>
                                    </div>
                                </div>
                                <div class="kt-card shadow-none w-[280px] border-0 mb-4">
                                    <img alt="" class="rounded-t-xl max-w-[280px] shrink-0"
                                        src="assets/media/images/600x400/11.jpg" />
                                    <div class="kt-card-border kt-card-rounded-b px-3.5 h-full pt-3 pb-3.5">
                                        <a class="font-medium block text-mono hover:text-primary text-base mb-2"
                                            href="#">
                                            Duolingo Language Lab
                                        </a>
                                        <p class="text-sm text-secondary-foreground">
                                            789 Learning Lane, 3rd Floor, Lingoville, Texas 98765
                                        </p>
                                    </div>
                                </div>
                                <div class="kt-card shadow-none w-[280px] border-0 mb-4">
                                    <img alt="" class="rounded-t-xl max-w-[280px] shrink-0"
                                        src="assets/media/images/600x400/12.jpg" />
                                    <div class="kt-card-border kt-card-rounded-b px-3.5 h-full pt-3 pb-3.5">
                                        <a class="font-medium block text-mono hover:text-primary text-base mb-2"
                                            href="#">
                                            Duolingo Research Institute
                                        </a>
                                        <p class="text-sm text-secondary-foreground">
                                            246 Innovation Road, Research Wing, Innovacity, Arizona 13579
                                        </p>
                                    </div>
                                </div>
                                <div class="kt-card shadow-none w-[280px] border-0 mb-4">
                                    <img alt="" class="rounded-t-xl max-w-[280px] shrink-0"
                                        src="assets/media/images/600x400/7.jpg" />
                                    <div class="kt-card-border kt-card-rounded-b px-3.5 h-full pt-3 pb-3.5">
                                        <a class="font-medium block text-mono hover:text-primary text-base mb-2"
                                            href="#">
                                            Duolingo Research Institute
                                        </a>
                                        <p class="text-sm text-secondary-foreground">
                                            246 Innovation Road, Research Wing, Innovacity, Arizona 13579
                                        </p>
                                    </div>
                                </div>
                                <div class="kt-card shadow-none w-[280px] border-0 mb-4">
                                    <img alt="" class="rounded-t-xl max-w-[280px] shrink-0"
                                        src="assets/media/images/600x400/8.jpg" />
                                    <div class="kt-card-border kt-card-rounded-b px-3.5 h-full pt-3 pb-3.5">
                                        <a class="font-medium block text-mono hover:text-primary text-base mb-2"
                                            href="#">
                                            Duolingo Research Institute
                                        </a>
                                        <p class="text-sm text-secondary-foreground">
                                            246 Innovation Road, Research Wing, Innovacity, Arizona 13579
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Fin Bloc 2 - colonne 2 -->
                    <!-- Debut Bloc 3 - colonne 2 -->
                    <!-- Projects Table -->
                    <div class="kt-card">
                        <div class="kt-card-header">
                            <h3 class="kt-card-title">
                                Projects
                            </h3>
                            <div class="kt-menu" data-kt-menu="true">
                                <div class="kt-menu-item" data-kt-menu-item-offset="0, 10px"
                                    data-kt-menu-item-placement="bottom-end"
                                    data-kt-menu-item-placement-rtl="bottom-start" data-kt-menu-item-toggle="dropdown"
                                    data-kt-menu-item-trigger="click">
                                    <button class="kt-menu-toggle kt-btn kt-btn-sm kt-btn-icon kt-btn-ghost">
                                        <i class="ki-filled ki-dots-vertical text-lg">
                                        </i>
                                    </button>
                                    <div class="kt-menu-dropdown kt-menu-default w-full max-w-[175px]"
                                        data-kt-menu-dismiss="true">
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
                                        <div class="kt-menu-item" data-kt-menu-item-offset="-15px, 0"
                                            data-kt-menu-item-placement="right-start" data-kt-menu-item-toggle="dropdown"
                                            data-kt-menu-item-trigger="click|lg:hover">
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
                                                    <a class="kt-menu-link"
                                                        href="html/demo8/account/home/settings-sidebar.html">
                                                        <span class="kt-menu-title">
                                                            PDF
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="kt-menu-item">
                                                    <a class="kt-menu-link"
                                                        href="html/demo8/account/home/settings-sidebar.html">
                                                        <span class="kt-menu-title">
                                                            CVS
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="kt-menu-item">
                                                    <a class="kt-menu-link"
                                                        href="html/demo8/account/home/settings-sidebar.html">
                                                        <span class="kt-menu-title">
                                                            Excel
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="kt-menu-item">
                                            <a class="kt-menu-link"
                                                href="html/demo8/account/security/privacy-settings.html">
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
                                                        <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-background size-6"
                                                            src="assets/media/avatars/300-4.png" />
                                                    </div>
                                                    <div class="flex">
                                                        <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-background size-6"
                                                            src="assets/media/avatars/300-1.png" />
                                                    </div>
                                                    <div class="flex">
                                                        <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-background size-6"
                                                            src="assets/media/avatars/300-2.png" />
                                                    </div>
                                                    <div class="flex">
                                                        <span
                                                            class="relative inline-flex items-center justify-center shrink-0 rounded-full ring-1 font-semibold leading-none text-2xs size-6 text-white ring-background bg-green-500">
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
                                                <div class="kt-menu-item" data-kt-menu-item-offset="0, 10px"
                                                    data-kt-menu-item-placement="bottom-end"
                                                    data-kt-menu-item-placement-rtl="bottom-start"
                                                    data-kt-menu-item-toggle="dropdown" data-kt-menu-item-trigger="click">
                                                    <button
                                                        class="kt-menu-toggle kt-btn kt-btn-sm kt-btn-icon kt-btn-ghost">
                                                        <i class="ki-filled ki-dots-vertical text-lg">
                                                        </i>
                                                    </button>
                                                    <div class="kt-menu-dropdown kt-menu-default w-full max-w-[175px]"
                                                        data-kt-menu-dismiss="true">
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
                                                        <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-background size-6"
                                                            src="assets/media/avatars/300-1.png" />
                                                    </div>
                                                    <div class="flex">
                                                        <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-background size-6"
                                                            src="assets/media/avatars/300-2.png" />
                                                    </div>
                                                    <div class="flex">
                                                        <span
                                                            class="hover:z-5 relative inline-flex items-center justify-center shrink-0 rounded-full ring-1 font-semibold leading-none text-2xs size-6 text-white ring-background bg-destructive">
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
                                                <div class="kt-menu-item" data-kt-menu-item-offset="0, 10px"
                                                    data-kt-menu-item-placement="bottom-end"
                                                    data-kt-menu-item-placement-rtl="bottom-start"
                                                    data-kt-menu-item-toggle="dropdown" data-kt-menu-item-trigger="click">
                                                    <button
                                                        class="kt-menu-toggle kt-btn kt-btn-sm kt-btn-icon kt-btn-ghost">
                                                        <i class="ki-filled ki-dots-vertical text-lg">
                                                        </i>
                                                    </button>
                                                    <div class="kt-menu-dropdown kt-menu-default w-full max-w-[175px]"
                                                        data-kt-menu-dismiss="true">
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
                                                        <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-background size-6"
                                                            src="assets/media/avatars/300-20.png" />
                                                    </div>
                                                    <div class="flex">
                                                        <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-background size-6"
                                                            src="assets/media/avatars/300-7.png" />
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-sm font-medium text-secondary-foreground text-end">
                                            19 Sep, 2024
                                        </td>
                                        <td class="text-start">
                                            <div class="kt-menu" data-kt-menu="true">
                                                <div class="kt-menu-item" data-kt-menu-item-offset="0, 10px"
                                                    data-kt-menu-item-placement="bottom-end"
                                                    data-kt-menu-item-placement-rtl="bottom-start"
                                                    data-kt-menu-item-toggle="dropdown" data-kt-menu-item-trigger="click">
                                                    <button
                                                        class="kt-menu-toggle kt-btn kt-btn-sm kt-btn-icon kt-btn-ghost">
                                                        <i class="ki-filled ki-dots-vertical text-lg">
                                                        </i>
                                                    </button>
                                                    <div class="kt-menu-dropdown kt-menu-default w-full max-w-[175px]"
                                                        data-kt-menu-dismiss="true">
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
                                                        <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-background size-6"
                                                            src="assets/media/avatars/300-6.png" />
                                                    </div>
                                                    <div class="flex">
                                                        <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-background size-6"
                                                            src="assets/media/avatars/300-23.png" />
                                                    </div>
                                                    <div class="flex">
                                                        <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-background size-6"
                                                            src="assets/media/avatars/300-12.png" />
                                                    </div>
                                                    <div class="flex">
                                                        <span
                                                            class="relative inline-flex items-center justify-center shrink-0 rounded-full ring-1 font-semibold leading-none text-2xs size-6 text-primary-foreground ring-background bg-primary">
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
                                                <div class="kt-menu-item" data-kt-menu-item-offset="0, 10px"
                                                    data-kt-menu-item-placement="bottom-end"
                                                    data-kt-menu-item-placement-rtl="bottom-start"
                                                    data-kt-menu-item-toggle="dropdown" data-kt-menu-item-trigger="click">
                                                    <button
                                                        class="kt-menu-toggle kt-btn kt-btn-sm kt-btn-icon kt-btn-ghost">
                                                        <i class="ki-filled ki-dots-vertical text-lg">
                                                        </i>
                                                    </button>
                                                    <div class="kt-menu-dropdown kt-menu-default w-full max-w-[175px]"
                                                        data-kt-menu-dismiss="true">
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
                                                        <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-background size-6"
                                                            src="assets/media/avatars/300-2.png" />
                                                    </div>
                                                    <div class="flex">
                                                        <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-background size-6"
                                                            src="assets/media/avatars/300-15.png" />
                                                    </div>
                                                    <div class="flex">
                                                        <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-background size-6"
                                                            src="assets/media/avatars/300-18.png" />
                                                    </div>
                                                    <div class="flex">
                                                        <span
                                                            class="relative inline-flex items-center justify-center shrink-0 rounded-full ring-1 font-semibold leading-none text-2xs size-6 text-white ring-background bg-green-500">
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
                                                <div class="kt-menu-item" data-kt-menu-item-offset="0, 10px"
                                                    data-kt-menu-item-placement="bottom-end"
                                                    data-kt-menu-item-placement-rtl="bottom-start"
                                                    data-kt-menu-item-toggle="dropdown" data-kt-menu-item-trigger="click">
                                                    <button
                                                        class="kt-menu-toggle kt-btn kt-btn-sm kt-btn-icon kt-btn-ghost">
                                                        <i class="ki-filled ki-dots-vertical text-lg">
                                                        </i>
                                                    </button>
                                                    <div class="kt-menu-dropdown kt-menu-default w-full max-w-[175px]"
                                                        data-kt-menu-dismiss="true">
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
                            <a class="kt-link kt-link-underlined kt-link-dashed"
                                href="html/demo8/public-profile/projects/3-columns.html">
                                All Projects
                            </a>
                        </div>
                    </div>
                    <!-- End of Projects Table -->
                    <!-- Fin Bloc 3 - colonne 2 -->

                    <!-- Debut Bloc double - colonne 2 -->
                    <div class="grid grid-cols-1 xl:grid-cols-2 gap-5 lg:gap-7.5">
                        <div class="kt-card">
                            <div class="kt-card-header gap-2">
                                <h3 class="kt-card-title">
                                    Members
                                </h3>
                                <div class="kt-menu" data-kt-menu="true">
                                    <div class="kt-menu-item" data-kt-menu-item-offset="0, 10px"
                                        data-kt-menu-item-placement="bottom-end"
                                        data-kt-menu-item-placement-rtl="bottom-start" data-kt-menu-item-toggle="dropdown"
                                        data-kt-menu-item-trigger="click">
                                        <button class="kt-menu-toggle kt-btn kt-btn-sm kt-btn-icon kt-btn-ghost">
                                            <i class="ki-filled ki-dots-vertical text-lg">
                                            </i>
                                        </button>
                                        <div class="kt-menu-dropdown kt-menu-default w-full max-w-[200px]"
                                            data-kt-menu-dismiss="true">
                                            <div class="kt-menu-item">
                                                <a class="kt-menu-link" href="html/demo8/account/activity.html">
                                                    <span class="kt-menu-icon">
                                                        <i class="ki-filled ki-cloud-change">
                                                        </i>
                                                    </span>
                                                    <span class="kt-menu-title">
                                                        Activity
                                                    </span>
                                                </a>
                                            </div>
                                            <div class="kt-menu-item">
                                                <a class="kt-menu-link" data-kt-modal-toggle="#share_profile_modal"
                                                    href="#">
                                                    <span class="kt-menu-icon">
                                                        <i class="ki-filled ki-share">
                                                        </i>
                                                    </span>
                                                    <span class="kt-menu-title">
                                                        Share
                                                    </span>
                                                </a>
                                            </div>
                                            <div class="kt-menu-item" data-kt-menu-item-offset="-15px, 0"
                                                data-kt-menu-item-placement="right-start"
                                                data-kt-menu-item-toggle="dropdown"
                                                data-kt-menu-item-trigger="click|lg:hover">
                                                <div class="kt-menu-link">
                                                    <span class="kt-menu-icon">
                                                        <i class="ki-filled ki-notification-status">
                                                        </i>
                                                    </span>
                                                    <span class="kt-menu-title">
                                                        Notifications
                                                    </span>
                                                    <span class="kt-menu-arrow">
                                                        <i class="ki-filled ki-right text-xs rtl:transform rtl:rotate-180">
                                                        </i>
                                                    </span>
                                                </div>
                                                <div class="kt-menu-dropdown kt-menu-default w-full max-w-[175px]">
                                                    <div class="kt-menu-item">
                                                        <a class="kt-menu-link"
                                                            href="html/demo8/account/home/settings-sidebar.html">
                                                            <span class="kt-menu-icon">
                                                                <i class="ki-filled ki-sms">
                                                                </i>
                                                            </span>
                                                            <span class="kt-menu-title">
                                                                Email
                                                            </span>
                                                        </a>
                                                    </div>
                                                    <div class="kt-menu-item">
                                                        <a class="kt-menu-link"
                                                            href="html/demo8/account/home/settings-sidebar.html">
                                                            <span class="kt-menu-icon">
                                                                <i class="ki-filled ki-message-notify">
                                                                </i>
                                                            </span>
                                                            <span class="kt-menu-title">
                                                                SMS
                                                            </span>
                                                        </a>
                                                    </div>
                                                    <div class="kt-menu-item">
                                                        <a class="kt-menu-link"
                                                            href="html/demo8/account/home/settings-sidebar.html">
                                                            <span class="kt-menu-icon">
                                                                <i class="ki-filled ki-notification-status">
                                                                </i>
                                                            </span>
                                                            <span class="kt-menu-title">
                                                                Push
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="kt-menu-item">
                                                <a class="kt-menu-link" data-kt-modal-toggle="#report_user_modal"
                                                    href="#">
                                                    <span class="kt-menu-icon">
                                                        <i class="ki-filled ki-dislike">
                                                        </i>
                                                    </span>
                                                    <span class="kt-menu-title">
                                                        Report
                                                    </span>
                                                </a>
                                            </div>
                                            <div class="kt-menu-separator">
                                            </div>
                                            <div class="kt-menu-item">
                                                <a class="kt-menu-link"
                                                    href="html/demo8/account/home/settings-enterprise.html">
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
                            <div class="kt-card-content">
                                <div class="flex flex-col gap-2 lg:gap-5">
                                    <div class="flex items-center gap-2">
                                        <div class="flex items-center grow gap-2.5">
                                            <img alt="" class="rounded-full size-9 shrink-0"
                                                src="assets/media/avatars/300-3.png">
                                            <div class="flex flex-col">
                                                <a class="text-sm font-medium text-mono hover:text-primary mb-px"
                                                    href="#">
                                                    Tyler Hero
                                                </a>
                                                <span class="text-xs text-secondary-foreground">
                                                    6 connections
                                                </span>
                                            </div>
                                            </img>
                                        </div>
                                        <button
                                            class="kt-btn kt-btn-sm kt-btn-icon kt-btn-primary kt-btn-outline rounded-full">
                                            <i class="ki-filled ki-plus">
                                            </i>
                                        </button>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <div class="flex items-center grow gap-2.5">
                                            <img alt="" class="rounded-full size-9 shrink-0"
                                                src="assets/media/avatars/300-1.png">
                                            <div class="flex flex-col">
                                                <a class="text-sm font-medium text-mono hover:text-primary mb-px"
                                                    href="#">
                                                    Esther Howard
                                                </a>
                                                <span class="text-xs text-secondary-foreground">
                                                    29 connections
                                                </span>
                                            </div>
                                            </img>
                                        </div>
                                        <button
                                            class="kt-btn kt-btn-sm kt-btn-icon kt-btn-primary kt-btn-outline rounded-full active">
                                            <i class="ki-filled ki-check">
                                            </i>
                                        </button>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <div class="flex items-center grow gap-2.5">
                                            <img alt="" class="rounded-full size-9 shrink-0"
                                                src="assets/media/avatars/300-14.png">
                                            <div class="flex flex-col">
                                                <a class="text-sm font-medium text-mono hover:text-primary mb-px"
                                                    href="#">
                                                    Cody Fisher
                                                </a>
                                                <span class="text-xs text-secondary-foreground">
                                                    34 connections
                                                </span>
                                            </div>
                                            </img>
                                        </div>
                                        <button
                                            class="kt-btn kt-btn-sm kt-btn-icon kt-btn-primary kt-btn-outline rounded-full">
                                            <i class="ki-filled ki-plus">
                                            </i>
                                        </button>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <div class="flex items-center grow gap-2.5">
                                            <img alt="" class="rounded-full size-9 shrink-0"
                                                src="assets/media/avatars/300-7.png">
                                            <div class="flex flex-col">
                                                <a class="text-sm font-medium text-mono hover:text-primary mb-px"
                                                    href="#">
                                                    Arlene McCoy
                                                </a>
                                                <span class="text-xs text-secondary-foreground">
                                                    1 connections
                                                </span>
                                            </div>
                                            </img>
                                        </div>
                                        <button
                                            class="kt-btn kt-btn-sm kt-btn-icon kt-btn-primary kt-btn-outline rounded-full active">
                                            <i class="ki-filled ki-check">
                                            </i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="kt-card-footer justify-center">
                                <a class="kt-link kt-link-underlined kt-link-dashed"
                                    href="html/demo8/public-profile/network.html">
                                    All Contributors
                                </a>
                            </div>
                        </div>
                        <div class="kt-card">
                            <div class="kt-card-header">
                                <h3 class="kt-card-title">
                                    Investments
                                </h3>
                                <div class="kt-menu" data-kt-menu="true">
                                    <div class="kt-menu-item" data-kt-menu-item-offset="0, 10px"
                                        data-kt-menu-item-placement="bottom-end"
                                        data-kt-menu-item-placement-rtl="bottom-start" data-kt-menu-item-toggle="dropdown"
                                        data-kt-menu-item-trigger="click">
                                        <button class="kt-menu-toggle kt-btn kt-btn-sm kt-btn-icon kt-btn-ghost">
                                            <i class="ki-filled ki-dots-vertical text-lg">
                                            </i>
                                        </button>
                                        <div class="kt-menu-dropdown kt-menu-default w-full max-w-[200px]"
                                            data-kt-menu-dismiss="true">
                                            <div class="kt-menu-item">
                                                <a class="kt-menu-link"
                                                    href="html/demo8/account/home/settings-enterprise.html">
                                                    <span class="kt-menu-icon">
                                                        <i class="ki-filled ki-setting-3">
                                                        </i>
                                                    </span>
                                                    <span class="kt-menu-title">
                                                        Settings
                                                    </span>
                                                </a>
                                            </div>
                                            <div class="kt-menu-item">
                                                <a class="kt-menu-link"
                                                    href="html/demo8/account/members/import-members.html">
                                                    <span class="kt-menu-icon">
                                                        <i class="ki-filled ki-some-files">
                                                        </i>
                                                    </span>
                                                    <span class="kt-menu-title">
                                                        Import
                                                    </span>
                                                </a>
                                            </div>
                                            <div class="kt-menu-item">
                                                <a class="kt-menu-link" href="html/demo8/account/activity.html">
                                                    <span class="kt-menu-icon">
                                                        <i class="ki-filled ki-cloud-change">
                                                        </i>
                                                    </span>
                                                    <span class="kt-menu-title">
                                                        Activity
                                                    </span>
                                                </a>
                                            </div>
                                            <div class="kt-menu-item">
                                                <a class="kt-menu-link" data-kt-modal-toggle="#report_user_modal"
                                                    href="#">
                                                    <span class="kt-menu-icon">
                                                        <i class="ki-filled ki-dislike">
                                                        </i>
                                                    </span>
                                                    <span class="kt-menu-title">
                                                        Report
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="kt-card-content flex justify-center items-center px-3 py-1">
                                <div id="contributions_chart">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Fin Bloc double - colonne 2 -->
                </div>
            </div>
            <!-- Fin colonne 2 -->
            <!-- Fin contenu principal -->
        </div>
        <!-- Fin grid principle -->
    </div>
    <!-- End of Container -->
    <!-- Fin du tableau de bord -->

    <!-- Script d'affichage du message de succès (VERSION HYBRIDE FIABLE) -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {

            const message = localStorage.getItem('toast_message');

            if (message) {
                const toast = document.createElement('div');
                toast.style.display = 'flex';
                toast.style.alignItems = 'center';
                toast.style.position = 'fixed';
                toast.style.top = '20px';
                toast.style.right = '20px';
                toast.style.zIndex = '99999';
                toast.style.transition = 'all 0.3s ease';
                toast.style.transform = 'translateX(100%)';
                toast.style.opacity = '0';
                toast.className =
                    'gap-3 px-4 py-4 bg-green-50 text-green-700 border border-green-200 rounded-lg shadow-xl max-w-[600px]';

                toast.innerHTML = `
                    <div class="flex-shrink-0">
                        <i class="ki-filled ki-check text-2xl text-green-600"></i>
                    </div>
                    <div class="text-sm font-medium leading-snug">
                        ${message}
                    </div>
                `;


                document.body.appendChild(toast);
                localStorage.removeItem('toast_message');
                setTimeout(() => {
                    toast.style.transform = 'translateX(0)';
                    toast.style.opacity = '1';
                }, 50);

                setTimeout(() => {
                    toast.style.transform = 'translateX(100%)';
                    toast.style.opacity = '0';
                    setTimeout(() => {
                        if (toast.parentNode) {
                            toast.remove();
                        }
                    }, 500);
                }, 4000);
            }
        });
    </script>
@endsection
