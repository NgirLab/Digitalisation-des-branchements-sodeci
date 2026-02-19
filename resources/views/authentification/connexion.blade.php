<!DOCTYPE html>
<html class="h-full" data-kt-theme="true" data-kt-theme-mode="light" dir="ltr" lang="fr">

<head>
    <base href="../../../../../">
    <meta charset="UTF-8">
    <title>Connexion</title>
    <meta charset="utf-8" />
    <meta content="follow, index" name="robots" />
    <link href="https://127.0.0.1:8001/metronic-tailwind-html/demo8/authentication/classic/sign-in/index.html"
        rel="canonical" />
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport" />
    <meta content="Sign in page using Tailwind CSS" name="description" />
    <meta content="Change password page, powered by Tailwind CSS" name="description" />
    <meta content="@keenthemes" name="twitter:site" />
    <meta content="@keenthemes" name="twitter:creator" />
    <meta content="summary_large_image" name="twitter:card" />
    <meta content="Metronic - Tailwind CSS Sign In" name="twitter:title" />
    <meta content="Sign in page using Tailwind CSS" name="twitter:description" />
    <meta content="Sign up page, powered by Tailwind CSS" name="twitter:description" />
    <!-- LIEN MODIFIÉ -->
    <meta content="{{ URL::asset('assets/media/app/og-image.png') }}" name="twitter:image" />

    <meta content="https://127.0.0.1:8001/metronic-tailwind-html/demo8/authentication/classic/sign-in/index.html"
        property="og:url" />
    <meta content="en_US" property="og:locale" />
    <meta content="website" property="og:type" />
    <meta content="@keenthemes" property="og:site_name" />
    <meta content="Metronic - Tailwind CSS Sign In" property="og:title" />
    <meta content="Sign in page using Tailwind CSS" property="og:description" />
    <meta content="Sign up page, powered by Tailwind CSS" property="og:description" />
    <meta content="{{ URL::asset('assets/media/app/og-image.png') }}" property="og:image" />
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

<body class="antialiased flex h-full text-base text-foreground bg-background">

    <!-- Theme Mode -->
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

    <!-- Page -->
    <style>
        .page-bg {
            background-image: url('{{ URL::asset('assets/media/images/2600x1200/bg-7.png') }}');
        }

        .dark .page-bg {
            background-image: url('{{ URL::asset('assets/media/images/2600x1200/bg-10-dark.png') }}');
        }
    </style>

    <div class="flex items-center justify-center grow bg-center bg-no-repeat page-bg">
        <div class="kt-card max-w-[370px] w-full opacity-50">

            <form action="#" class="kt-card-content flex flex-col gap-5 p-10" id="sign_in_form" method="get">
                <div class="text-center mb-2.5">
                    <h3 class="text-lg font-medium text-mono leading-none mb-2.5">
                        Connexion
                    </h3>

                    <div class="flex items-center justify-center font-medium">
                        <span class="text-sm text-secondary-foreground me-1.5">
                            Besoin d'un compte?
                        </span>
                        <a class="text-sm link" href="{{ url('/authentification/inscription') }}">
                            S'inscrire
                        </a>
                    </div>
                </div>

                <!--Inserer les messages d'erreurs ou alertes ici -->
                <!-- Début Zone d'alerte ajoutée -->
                <div id="auth-alert"
                    class="hidden rounded-lg p-4 mb-2 text-sm flex items-center gap-3 border transition-all">
                    <span id="auth-alert-icon"></span>
                    <span id="auth-alert-text"></span>
                </div>
                <!-- Fin Zone d'alerte ajoutée -->

                <div class="grid grid-cols-2 gap-2.5">
                    <a class="kt-btn kt-btn-outline justify-center" href="#">
                        <img alt="" class="size-3.5 shrink-0"
                            src="{{ URL::asset('assets/media/brand-logos/google.svg') }}" />
                        avec Google
                    </a>

                    <a class="kt-btn kt-btn-outline justify-center" href="#">
                        <img alt="" class="size-3.5 shrink-0 dark:hidden"
                            src="{{ URL::asset('assets/media/brand-logos/apple-black.svg') }}" />
                        <img alt="" class="size-3.5 shrink-0 light:hidden"
                            src="{{ URL::asset('assets/media/brand-logos/apple-white.svg') }}" />
                        Avec Apple
                    </a>

                </div>

                <div class="flex items-center gap-2">
                    <span class="border-t border-border w-full"></span>
                    <span class="text-xs text-muted-foreground font-medium uppercase">Ou</span>
                    <span class="border-t border-border w-full"></span>
                </div>

                <div class="flex flex-col gap-1">
                    <label class="kt-form-label font-normal text-mono">Email</label>
                    <input name="email" class="kt-input" placeholder="email@email.com" type="text" />
                </div>

                <div class="flex flex-col gap-1">
                    <div class="flex items-center justify-between gap-1">
                        <label class="kt-form-label font-normal text-mono">Mot de passe</label>
                        <a class="text-sm kt-link shrink-0"
                            href="{{ url('/authentification/reinitialisation_mdp') }}">
                            Mot de passe oublié?
                        </a>
                    </div>

                    <div class="kt-input" data-kt-toggle-password="true">
                        <input name="password" placeholder="Enter Password" type="password" />
                        <button class="kt-btn kt-btn-sm kt-btn-ghost kt-btn-icon bg-transparent! -me-1.5"
                            data-kt-toggle-password-trigger="true" type="button">
                            <span class="kt-toggle-password-active:hidden">
                                <i class="ki-filled ki-eye text-muted-foreground"></i>
                            </span>
                            <span class="hidden kt-toggle-password-active:block">
                                <i class="ki-filled ki-eye-slash text-muted-foreground"></i>
                            </span>
                        </button>
                    </div>
                </div>

                <label class="kt-label">
                    <input class="kt-checkbox kt-checkbox-sm" name="check" type="checkbox" value="1" />
                    <span class="kt-checkbox-label">Se souvenir de moi</span>
                </label>

                <button type="submit" class="kt-btn kt-btn-primary flex justify-center grow">
                    Se connecter
                </button>

            </form>

        </div>
    </div>
    <!-- End of Page -->

    <script src="{{ URL::asset('assets/js/core.bundle.js') }}"></script>
    <script src="{{ URL::asset('assets/vendors/ktui/ktui.min.js') }}"></script>
    <script src="{{ URL::asset('assets/vendors/apexcharts/apexcharts.min.js') }}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {

            // On cible le formulaire avec l'ID 'sign_in_form'
            const form = document.getElementById('sign_in_form');

            // Elements pour l'affichage des messages
            const alertBox = document.getElementById('auth-alert');
            const alertText = document.getElementById('auth-alert-text');
            const alertIcon = document.getElementById('auth-alert-icon');

            // --- CONFIGURATION API DISTANTE ---
            // URL complète de l'endpoint distant
            const REMOTE_API_URL = 'http://10.10.145.96/backend/public/index.php/api/v1/auth/login';

            // Fonction utilitaire pour afficher les messages
            function afficherMessage(message, type) {
                // On réinitialise les classes
                alertBox.className = 'rounded-lg p-4 mb-2 text-sm flex items-center gap-3 border';

                if (type === 'error') {
                    // Style Erreur (Rouge)
                    alertBox.classList.add('bg-red-50', 'text-red-700', 'border-red-200');
                    alertIcon.innerHTML = '<i class="ki-filled ki-information text-xl"></i>';
                } else {
                    // Style Succès (Vert)
                    alertBox.classList.add('bg-green-50', 'text-green-700', 'border-green-200');
                    alertIcon.innerHTML = '<i class="ki-filled ki-check text-xl"></i>';
                }

                alertText.innerText = message;
                alertBox.classList.remove('hidden');
            }

            function cacherMessage() {
                alertBox.classList.add('hidden');
            }

            if (form) {
                form.addEventListener('submit', function(e) {
                    e.preventDefault();
                    cacherMessage();

                    const formData = new FormData(form);

                    // Préparation du payload pour l'API distante
                    // On envoie 'email' car le champ input s'appelle 'email'
                    const payload = {
                        email: formData.get('email'),
                        password: formData.get('password')
                    };

                    // Indicateur de chargement
                    const submitBtn = form.querySelector('button[type="submit"]');
                    const originalText = submitBtn.innerText;
                    submitBtn.innerText = 'Connexion...';
                    submitBtn.disabled = true;

                    // Appel API DISTANTE
                    fetch(REMOTE_API_URL, {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'Accept': 'application/json'
                            },
                            body: JSON.stringify(payload)
                        })
                        .then(response => {
                            if (!response.ok) {
                                throw new Error('Erreur réseau');
                            }
                            return response.json();
                        })
                        .then(data => {
                            // Nouvelle structure de réponse : { success: true, data: { access_token: "...", user: {...} } }

                            if (data.success && data.data && data.data.access_token) {
                                // Succès : Récupération des données
                                const token = data.data.access_token;
                                const user = data.data.user;

                                // Sauvegarde dans localStorage
                                localStorage.setItem('api_token', token);

                                // Sauvegarde des infos utilisateur complètes (optionnel)
                                localStorage.setItem('user_data', JSON.stringify(user));

                                // Récupération du prénom pour l'affichage (la réponse JSON fourni 'first_name')
                                const userName = user.first_name || user.email || 'Utilisateur';
                                localStorage.setItem('user_name', userName);

                                afficherMessage('Connexion réussie ! Bienvenue ' + userName, 'success');

                                submitBtn.innerText = 'Redirection...';

                                setTimeout(() => {
                                    window.location.href = '/dashboard';
                                }, 1000);

                            } else {
                                // Erreur renvoyée par l'API
                                const msg = data.message || 'Identifiants incorrects.';
                                afficherMessage(msg, 'error');

                                submitBtn.innerText = originalText;
                                submitBtn.disabled = false;
                            }
                        })
                        .catch(error => {
                            console.error('Erreur:', error);
                            // Note: Si vous avez une erreur "Failed to fetch", c'est souvent un problème CORS côté serveur distant.
                            afficherMessage(
                                'Erreur de connexion au serveur. Vérifiez l\'URL ou les CORS.',
                                'error');
                            submitBtn.innerText = originalText;
                            submitBtn.disabled = false;
                        });
                });
            }
        });
    </script>
</body>

</html>
