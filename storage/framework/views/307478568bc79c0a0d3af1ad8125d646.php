<div x-data="{
        isOpen: false,
        fontSize: localStorage.getItem('camsur_accessibility_font') || 'normal',
        contrast: localStorage.getItem('camsur_accessibility_contrast') || 'normal',
        dyslexic: localStorage.getItem('camsur_accessibility_dyslexic') === 'true',

        canScrollTop: false,

        init() {
            this.applySettings();
            window.addEventListener('scroll', () => {
                this.canScrollTop = window.scrollY > 300;
            }, { passive: true });
        },

        scrollToTop() {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        },

        setFont(size) {
            this.fontSize = size;
            localStorage.setItem('camsur_accessibility_font', size);
            this.applySettings();
        },

        setContrast(mode) {
            this.contrast = mode;
            localStorage.setItem('camsur_accessibility_contrast', mode);
            this.applySettings();
        },

        toggleDyslexic() {
            this.dyslexic = !this.dyslexic;
            localStorage.setItem('camsur_accessibility_dyslexic', this.dyslexic);
            this.applySettings();
        },

        resetDefaults() {
            this.fontSize = 'normal';
            this.contrast = 'normal';
            this.dyslexic = false;
            localStorage.removeItem('camsur_accessibility_font');
            localStorage.removeItem('camsur_accessibility_contrast');
            localStorage.removeItem('camsur_accessibility_dyslexic');
            this.applySettings();
        },

        applySettings() {
            const root = document.documentElement;

            // Font sizing
            root.classList.remove('font-size-md', 'font-size-lg');
            if (this.fontSize === 'md') root.classList.add('font-size-md');
            if (this.fontSize === 'lg') root.classList.add('font-size-lg');

            // Contrast modes
            root.classList.remove('contrast-high', 'contrast-inverted', 'contrast-grayscale');
            if (this.contrast === 'high') root.classList.add('contrast-high');
            if (this.contrast === 'grayscale') root.classList.add('contrast-grayscale');

            // Dyslexic font
            if (this.dyslexic) {
                root.classList.add('dyslexic-font');
            } else {
                root.classList.remove('dyslexic-font');
            }
        }
    }"
    class="print:hidden">

    
    <div class="fixed bottom-6 right-6 z-50 flex items-center gap-2 bg-slate-900/90 backdrop-blur-md border border-slate-700/80 shadow-2xl rounded-full p-1.5 transition-all duration-300 hover:shadow-blue-950/40 hover:border-slate-600">
        
        
        <div class="relative group flex items-center justify-center">
            <button type="button"
                    @click="isOpen = !isOpen"
                    :class="isOpen ? 'bg-amber-400 text-slate-950 ring-2 ring-amber-300 ring-offset-2 ring-offset-slate-900 shadow-amber-500/30' : 'bg-amber-500/20 text-amber-300 hover:bg-amber-500 hover:text-slate-950 border border-amber-400/30'"
                    class="flex h-10 w-10 items-center justify-center rounded-full shadow-md transition-all duration-200 hover:scale-105 active:scale-95 focus:outline-none"
                    aria-label="Toggle Accessibility Toolbar">
                
                <svg class="w-5 h-5 flex-shrink-0" viewBox="0 0 24 24" fill="currentColor">
                    <!-- Head -->
                    <circle cx="12" cy="4.5" r="2.25"/>
                    <!-- Torso, Arms and Legs -->
                    <path d="M4 8.5c0-.414.336-.75.75-.75h14.5c.414 0 .75.336.75.75s-.336.75-.75.75h-5.25v4.5l3.24 6.48a.75.75 0 1 1-1.34.67L12.5 14.15V11h-1v3.15l-3.4 6.75a.75.75 0 1 1-1.34-.67l3.24-6.48V9.25H4.75A.75.75 0 0 1 4 8.5z"/>
                </svg>
            </button>

            
            <div class="absolute -top-10 left-1/2 -translate-x-1/2 pointer-events-none opacity-0 group-hover:opacity-100 group-hover:-top-11 transition-all duration-200 ease-out whitespace-nowrap z-50">
                <div class="bg-slate-900 text-white text-[11px] font-semibold tracking-wide py-1 px-2.5 rounded-lg shadow-xl border border-slate-700/80 flex items-center gap-1">
                    <span>Accessibility Options</span>
                </div>
                
                <div class="w-2 h-2 bg-slate-900 border-r border-b border-slate-700/80 rotate-45 mx-auto -mt-1"></div>
            </div>
        </div>

        
        <div x-show="canScrollTop"
             x-transition:enter="transition ease-out duration-300 transform"
             x-transition:enter-start="opacity-0 translate-x-2 scale-90"
             x-transition:enter-end="opacity-100 translate-x-0 scale-100"
             x-transition:leave="transition ease-in duration-200 transform"
             x-transition:leave-start="opacity-100 translate-x-0 scale-100"
             x-transition:leave-end="opacity-0 translate-x-2 scale-90"
             class="relative group flex items-center justify-center"
             style="display: none;">
            <button type="button"
                    @click="scrollToTop()"
                    class="flex h-10 w-10 items-center justify-center rounded-full bg-blue-600 hover:bg-blue-500 text-white shadow-md shadow-blue-600/30 transition-all duration-200 hover:scale-105 active:scale-95 focus:outline-none"
                    aria-label="Scroll to top">
                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="m5 15 7-7 7 7"/>
                </svg>
            </button>

            
            <div class="absolute -top-10 left-1/2 -translate-x-1/2 pointer-events-none opacity-0 group-hover:opacity-100 group-hover:-top-11 transition-all duration-200 ease-out whitespace-nowrap z-50">
                <div class="bg-slate-900 text-white text-[11px] font-semibold tracking-wide py-1 px-2.5 rounded-lg shadow-xl border border-slate-700/80 flex items-center gap-1">
                    <span>Scroll to Top</span>
                </div>
                
                <div class="w-2 h-2 bg-slate-900 border-r border-b border-slate-700/80 rotate-45 mx-auto -mt-1"></div>
            </div>
        </div>

    </div>

    
    <div x-show="isOpen"
         @click.away="isOpen = false"
         x-transition:enter="transition ease-out duration-200 transform"
         x-transition:enter-start="opacity-0 translate-y-4 scale-95"
         x-transition:enter-end="opacity-100 translate-y-0 scale-100"
         x-transition:leave="transition ease-in duration-150 transform"
         x-transition:leave-start="opacity-100 translate-y-0 scale-100"
         x-transition:leave-end="opacity-0 translate-y-4 scale-95"
         x-cloak
         class="fixed bottom-20 right-6 z-50 w-72 bg-white rounded-2xl shadow-2xl border border-slate-200 p-4 text-slate-800">
        
        <div class="flex items-center justify-between pb-3 border-b border-slate-100 mb-3">
            <div class="flex items-center gap-2">
                <span class="p-1.5 bg-blue-100 text-blue-900 rounded-lg">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd" />
                    </svg>
                </span>
                <span class="font-extrabold text-sm text-slate-900">Accessibility Tools</span>
            </div>
            <button @click="isOpen = false" class="text-slate-400 hover:text-slate-700">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
            </button>
        </div>

        
        <div class="mb-3">
            <label class="block text-xs font-bold text-slate-600 mb-1.5">Text Size</label>
            <div class="grid grid-cols-3 gap-1.5 bg-slate-100 p-1 rounded-xl">
                <button type="button" @click="setFont('normal')"
                        :class="fontSize === 'normal' ? 'bg-white font-bold text-blue-900 shadow-sm' : 'text-slate-600 hover:text-slate-900'"
                        class="py-1.5 text-xs rounded-lg transition text-center">
                    Default
                </button>
                <button type="button" @click="setFont('md')"
                        :class="fontSize === 'md' ? 'bg-white font-bold text-blue-900 shadow-sm' : 'text-slate-600 hover:text-slate-900'"
                        class="py-1.5 text-xs rounded-lg transition text-center font-medium">
                    Medium (A+)
                </button>
                <button type="button" @click="setFont('lg')"
                        :class="fontSize === 'lg' ? 'bg-white font-bold text-blue-900 shadow-sm' : 'text-slate-600 hover:text-slate-900'"
                        class="py-1.5 text-xs rounded-lg transition text-center font-semibold">
                    Large (A++)
                </button>
            </div>
        </div>

        
        <div class="mb-3">
            <label class="block text-xs font-bold text-slate-600 mb-1.5">Display Contrast</label>
            <div class="grid grid-cols-3 gap-1.5 bg-slate-100 p-1 rounded-xl">
                <button type="button" @click="setContrast('normal')"
                        :class="contrast === 'normal' ? 'bg-white font-bold text-blue-900 shadow-sm' : 'text-slate-600 hover:text-slate-900'"
                        class="py-1.5 text-xs rounded-lg transition text-center">
                    Normal
                </button>
                <button type="button" @click="setContrast('high')"
                        :class="contrast === 'high' ? 'bg-yellow-400 font-extrabold text-slate-950 shadow-sm' : 'text-slate-600 hover:text-slate-900'"
                        class="py-1.5 text-xs rounded-lg transition text-center">
                    High
                </button>
                <button type="button" @click="setContrast('grayscale')"
                        :class="contrast === 'grayscale' ? 'bg-slate-700 font-bold text-white shadow-sm' : 'text-slate-600 hover:text-slate-900'"
                        class="py-1.5 text-xs rounded-lg transition text-center">
                    Mono
                </button>
            </div>
        </div>

        
        <div class="mb-4">
            <button type="button" @click="toggleDyslexic()"
                    :class="dyslexic ? 'bg-blue-50 border-blue-400 text-blue-900' : 'bg-slate-50 border-slate-200 text-slate-700'"
                    class="w-full flex items-center justify-between p-2 rounded-xl border text-xs font-medium transition">
                <span>Reading Font Mode</span>
                <span :class="dyslexic ? 'bg-blue-600 text-white' : 'bg-slate-300 text-slate-700'"
                      class="px-2 py-0.5 text-[10px] rounded-full uppercase font-bold"
                      x-text="dyslexic ? 'Active' : 'Off'"></span>
            </button>
        </div>

        
        <button type="button" @click="resetDefaults()"
                class="w-full py-1.5 text-xs font-semibold text-slate-500 hover:text-red-600 hover:bg-red-50 rounded-lg transition text-center">
            Reset to Standard
        </button>
    </div>
</div>

<style>
/* Accessibility Global Styles */
html.font-size-md {
    font-size: 110% !important;
}
html.font-size-lg {
    font-size: 120% !important;
}
html.contrast-high body {
    background-color: #0b0f19 !important;
    color: #ffff00 !important;
}
html.contrast-high a {
    color: #00ffff !important;
}
html.contrast-high .bg-white,
html.contrast-high .bg-gray-50,
html.contrast-high .bg-slate-50 {
    background-color: #111827 !important;
    color: #ffff00 !important;
    border-color: #374151 !important;
}
html.contrast-grayscale {
    filter: grayscale(100%) !important;
}
html.dyslexic-font body {
    font-family: Arial, "Helvetica Neue", sans-serif !important;
    letter-spacing: 0.05em !important;
    word-spacing: 0.1em !important;
    line-height: 1.8 !important;
}
</style>
<?php /**PATH /var/www/resources/views/components/guest/panels/accessibility-toolbar.blade.php ENDPATH**/ ?>