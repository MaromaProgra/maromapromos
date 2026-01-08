/* ========================================
   MARO//A - JAVASCRIPT PRINCIPAL
   ======================================== */

// CONFIGURACIÓN GLOBAL
const CONFIG = {
    apiEndpoint: 'https://api.ejemplo.com/contact',
    animationDuration: 300,
    scrollOffset: 80,
    videoAutoplay: false,
    debugMode: false
};

// LOG DE DEBUG
const log = (message, type = 'info') => {
    if (CONFIG.debugMode) {
        console[type](`[MAROMA] ${message}`);
    }
};

// INICIALIZACIÓN
document.addEventListener('DOMContentLoaded', function() {
    log('Maroma Landing - Inicializado');
    
    try {
        // Inicializar módulos
        Navigation.init();
        Modals.init();
        VideoPlayer.init();
        Forms.init();
        
        // Inicializar animaciones al scroll
        initScrollAnimations();
        
        // Inicializar lazy loading de imágenes
        initLazyLoading();
        
        log('Todos los módulos inicializados correctamente');
    } catch (error) {
        log(`Error en la inicialización: ${error.message}`, 'error');
    }
});

// ==================== SCROLL ANIMATIONS ====================
function initScrollAnimations() {
    const observerOptions = {
        threshold: 0.15,
        rootMargin: '0px 0px -50px 0px'
    };
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('fade-in-up');
                observer.unobserve(entry.target);
                log(`Animación activada para: ${entry.target.className}`);
            }
        });
    }, observerOptions);
    
    // Observar todos los elementos con clase animate-on-scroll
    document.querySelectorAll('.animate-on-scroll').forEach(el => {
        observer.observe(el);
    });
}

// ==================== LAZY LOADING IMAGES ====================
function initLazyLoading() {
    if ('IntersectionObserver' in window) {
        const imageObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    if (img.dataset.src) {
                        img.src = img.dataset.src;
                        img.removeAttribute('data-src');
                        imageObserver.unobserve(img);
                        log(`Imagen cargada: ${img.alt}`);
                    }
                }
            });
        });
        
        document.querySelectorAll('img[data-src]').forEach(img => {
            imageObserver.observe(img);
        });
    }
}

// ==================== UTILIDADES ====================
const Utils = {
    // Debounce para optimizar eventos
    debounce(func, wait) {
        let timeout;
        return function executedFunction(...args) {
            const later = () => {
                clearTimeout(timeout);
                func(...args);
            };
            clearTimeout(timeout);
            timeout = setTimeout(later, wait);
        };
    },
    
    // Throttle para scroll events
    throttle(func, limit) {
        let inThrottle;
        return function(...args) {
            if (!inThrottle) {
                func.apply(this, args);
                inThrottle = true;
                setTimeout(() => inThrottle = false, limit);
            }
        };
    },
    
    // Validar email
    isValidEmail(email) {
        const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return re.test(email);
    },
    
    // Validar teléfono mexicano
    isValidPhone(phone) {
        const re = /^[\d\s\-\+\(\)]{10,}$/;
        return re.test(phone);
    },
    
    // Scroll suave a elemento
    smoothScrollTo(element, offset = CONFIG.scrollOffset) {
        const targetPosition = element.offsetTop - offset;
        window.scrollTo({
            top: targetPosition,
            behavior: 'smooth'
        });
    },
    
    // Obtener parámetros URL
    getUrlParams() {
        return new URLSearchParams(window.location.search);
    }
};

// ==================== PERFORMANCE MONITORING ====================
if (CONFIG.debugMode) {
    window.addEventListener('load', () => {
        const perfData = window.performance.timing;
        const pageLoadTime = perfData.loadEventEnd - perfData.navigationStart;
        log(`Tiempo de carga total: ${pageLoadTime}ms`, 'info');
    });
}

// ==================== ERROR HANDLING GLOBAL ====================
window.addEventListener('error', (event) => {
    log(`Error global capturado: ${event.message}`, 'error');
});

window.addEventListener('unhandledrejection', (event) => {
    log(`Promise rechazada: ${event.reason}`, 'error');
});

// Exportar para uso global
window.MaromaUtils = Utils;
window.MaromaConfig = CONFIG;