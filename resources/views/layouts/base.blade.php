<!---->
<!--BASE DU PROJET BRANCHEMENTS ABONNEMENTS DIGITALISES-->
<!DOCTYPE html>
<html class="h-full" data-kt-theme="true" data-kt-theme-mode="light" dir="ltr" lang="en">
<!--Debut encodage-->

<head>
    <base href="../../">
    <title>
        Backoffice digitalisation des branchements SODECI
    </title>
    <meta charset="utf-8" />
    <meta content="follow, index" name="robots" />
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport" />
    <meta content="" name="description" />
    <meta content="Metronic - Tailwind CSS " name="twitter:title" />
    <meta content="" name="twitter:description" />
    <meta content="assets/media/app/og-image.png" name="twitter:image" />
    <meta content="https://127.0.0.1:8001/metronic-tailwind-html/demo8/index.html" property="og:url" />
    <meta content="en_US" property="og:locale" />
    <meta content="website" property="og:type" />
    <meta content="Metronic - Tailwind CSS " property="og:title" />
    <meta content="" property="og:description" />
    <meta content="assets/media/app/og-image.png" property="og:image" />
    <link href="{{ URL::asset('assets/media/app/apple-touch-icon.png') }}" rel="apple-touch-icon" sizes="180x180" />
    <link href="{{ URL::asset('assets/media/app/favicon-32x32.png') }}" rel="icon" sizes="32x32"
        type="image/png" />
    <link href="{{ URL::asset('assets/media/app/favicon-16x16.png') }}" rel="icon" sizes="16x16"
        type="image/png" />
    <link href="{{ URL::asset('assets/media/app/favicon.ico') }}" rel="shortcut icon" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet" />
    <link href="{{ URL::asset('assets/vendors/apexcharts/apexcharts.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('assets/vendors/keenicons/styles.bundle.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('assets/css/styles.css') }}" rel="stylesheet" />

</head>
<!--Fin encodage-->

<!--Debut du body-->

<body
    class="antialiased flex h-full text-base text-foreground bg-background [--header-height:54px] [--sidebar-width:290px] bg-muted">
    <!-- Script de sécurité 1 -->
    <script>
        // On sauvegarde la fonction fetch originale
        const originalFetch = window.fetch;

        // On surcharge fetch
        window.fetch = function(url, options) {
            return originalFetch(url, options)
                .then(response => {
                    // Si la réponse est 401 (Unauthorized) ou 419 (Token Mismatch)
                    if (response.status === 401 || response.status === 419) {
                        console.error('Session expirée (401), déconnexion...');
                        localStorage.clear(); // On nettoie le localStorage
                        window.location.href = '/'; // On redirige
                    }
                    return response; // On continue normalement si tout va bien
                });
        };
    </script>
    <!-- Debut Theme Mode -->
    <script>
        const defaultThemeMode = 'light'; // light|dark|system
        let themeMode;

        if (document.documentElement) {
            if (localStorage.getItem('kt-theme')) {
                themeMode = localStorage.getItem('kt-theme');
            } else if (
                document.documentElement.hasAttribute('data-kt-theme-mode')
            ) {
                themeMode =
                    document.documentElement.getAttribute('data-kt-theme-mode');
            } else {
                themeMode = defaultThemeMode;
            }

            if (themeMode === 'system') {
                themeMode = window.matchMedia('(prefers-color-scheme: dark)').matches ?
                    'dark' :
                    'light';
            }

            document.documentElement.classList.add(themeMode);
        }
    </script>
    <!-- Fin Theme Mode -->

    <!--Debut de la page-->
    <!-- Debut base -->
    <div class="flex grow">
        <!-- Debut du Header -->
        @include('partials.header')
        <!-- Fin du Header -->

        <!-- Debut Wrapper -->
        <div class="flex flex-col lg:flex-row grow pt-(--header-height)">
            <!-- Debut de sidebar -->
            @include('layouts.sidebar')
            <!-- Fin de Sidebar -->
            <!-- Debut Main -->
            <div id="main_content"
                class="flex flex-col grow rounded-xl bg-background border border-input lg:ms-(--sidebar-width) mt-0 lg:mt-2 m-5 lg:ml-0 sidebar-main">
                <div class="flex flex-col grow kt-scrollable-y-auto lg:[--scrollbar-width:auto] pt-5"
                    id="scrollable_content">
                    <main class="grow" role="content">
                        <!-- Debut Toolbar du main -->
                        <!--A ajouter si necessaire-->
                        <!-- Fin Toolbar du main-->
                        <!-- Container -->
                        @yield('content')
                        <!-- End of Container -->
                    </main>

                </div>
                <!--Debut du Footer -->
                @include('partials.footer')
                <!-- Fin du Footer -->
            </div>
            <!-- Fin Main -->
        </div>
        <!-- Fin du Wrapper -->
    </div>
    <!-- Fin de la Base -->
    <!-- End of Page -->
    <!-- Debut Scripts -->
    @yield('scripts')
    <script src="assets/js/core.bundle.js"></script>
    <script src="assets/vendors/ktui/ktui.min.js"></script>
    <script src="assets/vendors/apexcharts/apexcharts.min.js"></script>
    <script src="assets/js/widgets/general.js"></script>
    <script src="assets/js/sidebar-toggle.js"></script>
    <script>
        // Préserver les classes actives du menu après l'initialisation de kt-menu
        document.addEventListener('DOMContentLoaded', function() {
            // Attendre que kt-menu soit initialisé
            setTimeout(function() {
                var currentPath = window.location.pathname;
                var menuItems = document.querySelectorAll('#sidebar_menu .kt-menu-item');

                menuItems.forEach(function(item) {
                    var link = item.querySelector('a.kt-menu-link');
                    if (!link) {
                        // Pour les items avec dropdown, vérifier les liens dans le dropdown
                        var dropdownLinks = item.querySelectorAll(
                            '.kt-menu-dropdown a.kt-menu-link');
                        dropdownLinks.forEach(function(dropdownLink) {
                            var href = dropdownLink.getAttribute('href');
                            if (href && (currentPath === href || currentPath.startsWith(
                                    href + '/'))) {
                                item.classList.add('kt-menu-item-active',
                                    'kt-menu-item-here');
                                // Activer aussi le parent si c'est un dropdown
                                var parentItem = item.closest('.kt-menu-item');
                                if (parentItem) {
                                    parentItem.classList.add('kt-menu-item-active',
                                        'kt-menu-item-here');
                                }
                            }
                        });
                    } else {
                        var href = link.getAttribute('href');
                        if (href && (currentPath === href || currentPath.startsWith(href + '/'))) {
                            item.classList.add('kt-menu-item-active', 'kt-menu-item-here');
                            // Activer aussi le parent si c'est un dropdown
                            var parentItem = item.closest('.kt-menu-item');
                            if (parentItem && parentItem !== item) {
                                parentItem.classList.add('kt-menu-item-active',
                                    'kt-menu-item-here');
                            }
                        }
                    }
                });
            }, 100);
        });
    </script>

    <!-- Scripts de chargement des données du dropdown user -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {

            const userDataJson = localStorage.getItem('user_data');

            if (userDataJson) {
                try {
                    const user = JSON.parse(userDataJson);

                    const nameEl = document.getElementById('user-name-display');
                    const emailEl = document.getElementById('user-email-display');
                    const avatarEl = document.getElementById('user-avatar-icon');

                    if (nameEl && user.first_name) {
                        nameEl.innerText = user.first_name;
                    }

                    if (emailEl && user.email) {
                        emailEl.innerText = user.email;
                        emailEl.href = 'mailto:' + user.email;
                    }

                } catch (e) {
                    console.error("Erreur lors de la lecture des données utilisateur", e);
                }
            }
        });
    </script>
    <!-- Script de déconnexion -->
    <script>
        function logoutUser() {
            // 1. Récupérer le token
            const token = localStorage.getItem('api_token');

            // URL de l'API distante pour la déconnexion
            // Vous pouvez aussi utiliser {{ env('API_URL') }}/auth/logout pour la flexibilité
            const REMOTE_API_LOGOUT = 'http://10.10.145.96/backend/public/index.php/api/v1/auth/logout';

            // 2. Préparer la requête
            const options = {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                    'Authorization': 'Bearer ' + token
                }
            };

            // 3. Appeler l'API distante
            fetch(REMOTE_API_LOGOUT, options)
                .then(response => {
                    // On essaie de lire la réponse même si c'est une erreur (ex: token déjà expiré)
                    return response.json();
                })
                .then(data => {
                    console.log('Réponse Déconnexion API:', data.message);
                })
                .catch(error => {
                    console.error('Erreur:', error);
                })
                .finally(() => {
                    // 4. Nettoyage complet du LocalStorage (Quoi qu'il arrive)
                    localStorage.removeItem('api_token');
                    localStorage.removeItem('user_name');
                    localStorage.removeItem('user_data'); // On oublie pas les données du profil

                    // 5. Redirection vers la page de connexion
                    window.location.href = '/';
                });
        }
    </script>
    <!-- Script de sécurité 2 -->
    <!-- Script de Sécurité (Garde du corps) -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {

            // 1. Liste des pages accessibles SANS connexion (Pages Publiques)
            // J'ai ajouté l'inscription et la réinitialisation de mot de passe pour éviter de bloquer l'accès
            const publicPaths = ['/', '/authentification/inscription', '/authentification/reinitialisation_mdp'];

            // Récupérer l'URL actuelle (ex: /dashboard ou /authentification/inscription)
            const currentPath = window.location.pathname;

            // Vérifier si l'URL actuelle fait partie des pages publiques
            // .some() vérifie si l'URL commence par l'un des chemins publics
            const isPublic = publicPaths.some(path => currentPath.startsWith(path));

            // 2. Si ce n'est PAS une page publique, on lance la vérification de sécurité
            if (!isPublic) {

                const token = localStorage.getItem('api_token');

                // CAS 1 : Pas de token du tout -> Redirection immédiate
                if (!token) {
                    // On évite l'alert() pour une UX plus fluide, mais on peut le décommenter si voulu
                    // alert("Accès refusé. Veuillez vous connecter.");
                    window.location.href = '/';
                    return;
                }

                // CAS 2 : Token présent -> Vérification optionnelle via l'API distante
                // Cela permet de savoir si le token est expiré (Token Expiry).
                // Attention : Cela ajoute un petit délai au chargement de chaque page.
                // Si vous avez un endpoint '/me' ou '/user' sur votre API distante, décommentez le bloc ci-dessous.
                /*
                fetch('http://10.10.145.96/backend/public/index.php/api/v1/me', {
                    method: 'GET',
                    headers: {
                        'Authorization': 'Bearer ' + token,
                        'Accept': 'application/json'
                    }
                })
                .then(response => {
                    // Si le serveur renvoie une erreur 401 (Unauthorized)
                    if (!response.ok) {
                        throw new Error('Token expiré');
                    }
                })
                .catch(error => {
                    console.warn('Session expirée ou invalide, déconnexion forcée.');
                    // On nettoie tout et on renvoie à l'accueil
                    localStorage.clear(); 
                    window.location.href = '/';
                });
                */
            }
        });
    </script>
    <!-- Fin des Scripts -->
</body>
<!--Fin du body-->

</html>
