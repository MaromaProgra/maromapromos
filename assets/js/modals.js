const Modals = {
    init() {
        this.setupEventListeners();
    },
    
    open(modalId) {
        const modal = document.getElementById(modalId);
        if (modal) {
            modal.classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        }
    },
    
    close(modalId) {
        const modal = document.getElementById(modalId);
        if (modal) {
            modal.classList.add('hidden');
            document.body.style.overflow = 'auto';
        }
    },
    
    setupEventListeners() {
        // Cerrar con ESC
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') {
                this.closeAll();
            }
        });
        
        // Cerrar al hacer click fuera
        document.querySelectorAll('.modal').forEach(modal => {
            modal.addEventListener('click', (e) => {
                if (e.target === modal) {
                    this.close(modal.id);
                }
            });
        });
    },
    
    closeAll() {
        document.querySelectorAll('.modal').forEach(modal => {
            this.close(modal.id);
        });
    }
};

// Funciones globales para usar en HTML onclick
function openAgendarModal() {
    Modals.open('agendarModal');
}

function closeAgendarModal() {
    Modals.close('agendarModal');
}