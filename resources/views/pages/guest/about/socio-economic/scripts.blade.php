<script>
    document.addEventListener('DOMContentLoaded', () => {
        // Socio-Economic Suggestion Modal Handlers
        const socioSugModal = document.getElementById('socioSuggestionModal');
        const openSocioSugBtn = document.getElementById('openSocioSuggestionBtn');
        const closeSocioSugBtn = document.getElementById('closeSocioSuggestionModal');
        const cancelSocioSugBtn = document.getElementById('cancelSocioSuggestionBtn');
        const socioSugForm = document.getElementById('socioSuggestionForm');
        const socioSugSuccessMsg = document.getElementById('socioSuggestionSuccessMsg');

        function openSocioModal() {
            if (!socioSugModal) return;
            socioSugModal.classList.remove('hidden');
            socioSugModal.classList.add('flex');
            document.body.style.overflow = 'hidden';
        }

        function closeSocioModal() {
            if (!socioSugModal) return;
            socioSugModal.classList.add('hidden');
            socioSugModal.classList.remove('flex');
            document.body.style.overflow = '';
            if (socioSugSuccessMsg) socioSugSuccessMsg.classList.add('hidden');
        }

        if (openSocioSugBtn) openSocioSugBtn.addEventListener('click', openSocioModal);
        if (closeSocioSugBtn) closeSocioSugBtn.addEventListener('click', closeSocioModal);
        if (cancelSocioSugBtn) cancelSocioSugBtn.addEventListener('click', closeSocioModal);

        if (socioSugModal) {
            socioSugModal.addEventListener('click', (e) => {
                if (e.target === socioSugModal) closeSocioModal();
            });
        }

        if (socioSugForm) {
            socioSugForm.addEventListener('submit', (e) => {
                e.preventDefault();
                if (socioSugSuccessMsg) {
                    socioSugSuccessMsg.classList.remove('hidden');
                }
                socioSugForm.reset();
                setTimeout(() => {
                    closeSocioModal();
                }, 2200);
            });
        }

        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') {
                if (socioSugModal && !socioSugModal.classList.contains('hidden')) {
                    closeSocioModal();
                }
            }
        });
    });
</script>
