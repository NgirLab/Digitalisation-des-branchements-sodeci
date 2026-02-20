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
