<!-- Toast Notification Container -->
<!-- Mobile: center-top below navbar, Desktop: right-top below navbar -->
<div id="toast-container" class="fixed top-20 left-1/2 -translate-x-1/2 md:left-auto md:right-6 md:translate-x-0 z-[200] flex flex-col gap-2 pointer-events-none w-[calc(100%-1.5rem)] max-w-xs md:max-w-md"></div>

<script>
    function showToast(message, type = 'success', persist = false) {
        // If persist is true, save to sessionStorage and reload
        if (persist) {
            sessionStorage.setItem('pendingToast', JSON.stringify({
                message,
                type
            }));
            window.location.reload();
            return;
        }

        const container = document.getElementById('toast-container');
        const isMobile = window.innerWidth < 768;

        const toast = document.createElement('div');
        // Mobile: smaller, slide from top. Desktop: larger, slide from right
        toast.className = isMobile ?
            `pointer-events-auto flex items-center gap-2 px-3 py-2.5 rounded-lg shadow-lg transform -translate-y-full opacity-0 transition-all duration-300 backdrop-blur-md border relative overflow-hidden` :
            `pointer-events-auto flex items-center gap-4 px-5 py-4 rounded-xl shadow-2xl transform translate-x-full opacity-0 transition-all duration-300 backdrop-blur-sm border relative overflow-hidden`;

        // Progress bar color based on type
        const progressColors = {
            success: 'bg-emerald-400',
            error: 'bg-red-400',
            warning: 'bg-amber-400',
            info: 'bg-blue-400'
        };
        const progressColor = progressColors[type] || progressColors.info;
        const progressBar = `<div class="absolute bottom-0 left-0 h-1 bg-white/20 w-full rounded-b-xl overflow-hidden"><div class="toast-progress h-full ${progressColor} w-full"></div></div>`;

        // All toasts use same dark slate background, only icons are colored
        toast.className += ' bg-gradient-to-r from-slate-700/95 to-slate-800/95 text-white border-slate-600/30';

        if (type === 'success') {
            toast.innerHTML = isMobile ? `
                <div class="w-6 h-6 rounded-full bg-emerald-500/20 flex items-center justify-center flex-shrink-0">
                    <i class="fas fa-check text-xs text-emerald-400"></i>
                </div>
                <div class="flex-1 min-w-0">
                    <div class="text-xs font-medium truncate">${escapeHtml(message)}</div>
                </div>
                <button onclick="closeToast(this.parentElement)" class="text-white/70 hover:text-white p-0.5 flex-shrink-0">
                    <i class="fas fa-times text-xs"></i>
                </button>
                ${progressBar}
            ` : `
                <div class="w-10 h-10 rounded-full bg-emerald-500/20 flex items-center justify-center flex-shrink-0">
                    <i class="fas fa-check text-base text-emerald-400"></i>
                </div>
                <div class="flex-1 min-w-0">
                    <div class="font-semibold text-sm">Berhasil!</div>
                    <div class="text-white/90 text-sm">${escapeHtml(message)}</div>
                </div>
                <button onclick="closeToast(this.parentElement)" class="text-white/70 hover:text-white transition-colors p-1">
                    <i class="fas fa-times text-sm"></i>
                </button>
                ${progressBar}
            `;
        } else if (type === 'error') {
            toast.innerHTML = isMobile ? `
                <div class="w-6 h-6 rounded-full bg-red-500/20 flex items-center justify-center flex-shrink-0">
                    <i class="fas fa-times text-xs text-red-400"></i>
                </div>
                <div class="flex-1 min-w-0">
                    <div class="text-xs font-medium truncate">${escapeHtml(message)}</div>
                </div>
                <button onclick="closeToast(this.parentElement)" class="text-white/70 hover:text-white p-0.5 flex-shrink-0">
                    <i class="fas fa-times text-xs"></i>
                </button>
                ${progressBar}
            ` : `
                <div class="w-10 h-10 rounded-full bg-red-500/20 flex items-center justify-center flex-shrink-0">
                    <i class="fas fa-times text-base text-red-400"></i>
                </div>
                <div class="flex-1 min-w-0">
                    <div class="font-semibold text-sm">Gagal!</div>
                    <div class="text-white/90 text-sm">${escapeHtml(message)}</div>
                </div>
                <button onclick="closeToast(this.parentElement)" class="text-white/70 hover:text-white transition-colors p-1">
                    <i class="fas fa-times text-sm"></i>
                </button>
                ${progressBar}
            `;
        } else if (type === 'warning') {
            toast.innerHTML = isMobile ? `
                <div class="w-6 h-6 rounded-full bg-amber-500/20 flex items-center justify-center flex-shrink-0">
                    <i class="fas fa-exclamation text-xs text-amber-400"></i>
                </div>
                <div class="flex-1 min-w-0">
                    <div class="text-xs font-medium truncate">${escapeHtml(message)}</div>
                </div>
                <button onclick="closeToast(this.parentElement)" class="text-white/70 hover:text-white p-0.5 flex-shrink-0">
                    <i class="fas fa-times text-xs"></i>
                </button>
                ${progressBar}
            ` : `
                <div class="w-10 h-10 rounded-full bg-amber-500/20 flex items-center justify-center flex-shrink-0">
                    <i class="fas fa-exclamation text-base text-amber-400"></i>
                </div>
                <div class="flex-1 min-w-0">
                    <div class="font-semibold text-sm">Perhatian!</div>
                    <div class="text-white/90 text-sm">${escapeHtml(message)}</div>
                </div>
                <button onclick="closeToast(this.parentElement)" class="text-white/70 hover:text-white transition-colors p-1">
                    <i class="fas fa-times text-sm"></i>
                </button>
                ${progressBar}
            `;
        } else {
            toast.innerHTML = isMobile ? `
                <div class="w-6 h-6 rounded-full bg-blue-500/20 flex items-center justify-center flex-shrink-0">
                    <i class="fas fa-info text-xs text-blue-400"></i>
                </div>
                <div class="flex-1 min-w-0">
                    <div class="text-xs font-medium truncate">${escapeHtml(message)}</div>
                </div>
                <button onclick="closeToast(this.parentElement)" class="text-white/70 hover:text-white p-0.5 flex-shrink-0">
                    <i class="fas fa-times text-xs"></i>
                </button>
                ${progressBar}
            ` : `
                <div class="w-10 h-10 rounded-full bg-blue-500/20 flex items-center justify-center flex-shrink-0">
                    <i class="fas fa-info text-base text-blue-400"></i>
                </div>
                <div class="flex-1 min-w-0">
                    <div class="font-semibold text-sm">Info</div>
                    <div class="text-white/90 text-sm">${escapeHtml(message)}</div>
                </div>
                <button onclick="closeToast(this.parentElement)" class="text-white/70 hover:text-white transition-colors p-1">
                    <i class="fas fa-times text-sm"></i>
                </button>
                ${progressBar}
            `;
        }

        container.appendChild(toast);

        // Animate in
        requestAnimationFrame(() => {
            if (isMobile) {
                toast.classList.remove('-translate-y-full', 'opacity-0');
                toast.classList.add('translate-y-0', 'opacity-100');
            } else {
                toast.classList.remove('translate-x-full', 'opacity-0');
                toast.classList.add('translate-x-0', 'opacity-100');
            }
            // Animate progress bar from 100% to 0% over 6 seconds
            const progress = toast.querySelector('.toast-progress');
            if (progress) {
                progress.style.transition = 'width 6s linear';
                requestAnimationFrame(() => {
                    progress.style.width = '0%';
                });
            }
        });

        // Auto remove after 6 seconds
        setTimeout(() => {
            closeToast(toast, isMobile);
        }, 6000);
    }

    function closeToast(toast, isMobile = window.innerWidth < 768) {
        if (isMobile) {
            toast.classList.remove('translate-y-0', 'opacity-100');
            toast.classList.add('-translate-y-full', 'opacity-0');
        } else {
            toast.classList.remove('translate-x-0', 'opacity-100');
            toast.classList.add('translate-x-full', 'opacity-0');
        }
        setTimeout(() => toast.remove(), 300);
    }

    function escapeHtml(text) {
        const div = document.createElement('div');
        div.textContent = text;
        return div.innerHTML;
    }

    // Check for pending toast on page load
    document.addEventListener('DOMContentLoaded', function() {
        const pending = sessionStorage.getItem('pendingToast');
        if (pending) {
            sessionStorage.removeItem('pendingToast');
            const {
                message,
                type
            } = JSON.parse(pending);
            // Small delay to ensure page is fully loaded
            setTimeout(() => showToast(message, type), 100);
        }
    });
</script>