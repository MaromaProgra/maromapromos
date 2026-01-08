const Forms = {
    init() {
        this.setupFormValidation();
    },
    
    setupFormValidation() {
        const form = document.querySelector('#agendarModal form');
        if (form) {
            form.addEventListener('submit', (e) => {
                e.preventDefault();
                this.handleSubmit(form);
            });
        }
    },
    
    async handleSubmit(form) {
        const formData = new FormData(form);
        const data = Object.fromEntries(formData);
        
        // Validación
        if (!this.validate(data)) {
            return;
        }
        
        // Mostrar loader
        this.showLoader();
        
        try {
            // Enviar a API
            // const response = await fetch('/api/contact', {
            //     method: 'POST',
            //     headers: { 'Content-Type': 'application/json' },
            //     body: JSON.stringify(data)
            // });
            
            // Simular envío
            await new Promise(resolve => setTimeout(resolve, 1500));
            
            this.showSuccess('¡Mensaje enviado con éxito!');
            form.reset();
            setTimeout(() => {
                closeAgendarModal();
            }, 2000);
            
        } catch (error) {
            this.showError('Error al enviar el mensaje. Intenta de nuevo.');
        } finally {
            this.hideLoader();
        }
    },
    
    validate(data) {
        // Validaciones básicas
        if (!data.nombre || data.nombre.trim() === '') {
            this.showError('El nombre es requerido');
            return false;
        }
        
        if (!this.isValidEmail(data.email)) {
            this.showError('Email inválido');
            return false;
        }
        
        return true;
    },
    
    isValidEmail(email) {
        return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
    },
    
    showLoader() {
        // Implementar loader
    },
    
    hideLoader() {
        // Ocultar loader
    },
    
    showSuccess(message) {
        alert(message); // Cambiar por notificación personalizada
    },
    
    showError(message) {
        alert(message); // Cambiar por notificación personalizada
    }
};