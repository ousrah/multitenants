// assets/js/app.js

import Alpine from 'alpinejs';
import persist from '@alpinejs/persist';
import Tom from "tom-select";

window.Tom = Tom;
window.Alpine = Alpine;

Alpine.plugin(persist);

document.addEventListener('alpine:init', () => {
  Alpine.store('app', {
    // Initialise l'état depuis le localStorage.
    isDarkMode: localStorage.getItem('darkMode') === 'true',
    isSidebarOpen: false,

    toggleSidebar() { this.isSidebarOpen = !this.isSidebarOpen; },

    // Cette fonction est correcte.
    toggleDarkMode() {
      // 1. Inverse la valeur de isDarkMode.
      this.isDarkMode = !this.isDarkMode;
      // 2. Sauvegarde la nouvelle valeur dans le localStorage.
      localStorage.setItem('darkMode', this.isDarkMode);
      // 3. Ajoute ou retire la classe 'dark' sur la balise <html>.
      document.documentElement.classList.toggle('dark', this.isDarkMode);
    }
  });
});

Alpine.start();