// tailwind.config.js

const colors = require("tailwindcss/colors");
const defaultTheme = require("tailwindcss/defaultTheme");

const navyColor = {
  50: "#E7E9EF",
  100: "#C2C9D6",
  200: "#A3ADC2",
  300: "#697A9B",
  400: "#5C6B8A",
  450: "#465675",
  500: "#384766",
  600: "#313E59",
  700: "#26334D",
  750: "#222E45",
  800: "#202B40",
  900: "#192132",
};


const customColors = {
  navy: navyColor,
  "slate-150": "#E9EEF5",

  primary: colors.indigo["600"],
  "primary-focus": colors.indigo["700"],
  "secondary-light": "#ff57d8",
  secondary: "#F000B9",
  "secondary-focus": "#BD0090",
  "accent-light": colors.indigo["400"],
  accent: "#5f5af6",
  "accent-focus": "#4d47f5",
  info: colors.sky["500"],
  "info-focus": colors.sky["600"],
  success: colors.emerald["500"],
  "success-focus": colors.emerald["600"],
  warning: "#ff9800",
  "warning-focus": "#e68200",
  error: "#ff5724",
  "error-focus": "#f03000",
  "pg-primary": colors.gray,
};

module.exports = {
  // CORRECTION: Les deux tableaux 'content' ont été fusionnés en un seul.
  content: [
    "./src/**/*.{php,html,js,jsx,ts,tsx,vue}",
    "./resources/**/*.{php,html,js,jsx,ts,tsx,vue}",
    "./storage/framework/views/*.php",
    "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
    "./resources/views/**/*.blade.php",
    "./app/Http/Livewire/**/*Table.php",
    "./vendor/power-components/livewire-powergrid/resources/views/**/*.php",
    "./vendor/power-components/livewire-powergrid/src/Themes/Tailwind.php",
    "./vendor/wire-elements/modal/resources/views/*.blade.php",
  ],
  safelist: [
    'dark', // Force la génération de la classe .dark
    'bg-primary',
    {
      // Utilise une expression régulière pour inclure TOUTES les variantes dark:
      pattern: /^dark:/, 
    },
  ],
  // ===

  mode: "jit",
  rtl:true,

  darkMode: "class", // C'est correct, on le laisse.
  variants: {
      float: ['responsive', 'direction'],
      margin: ['responsive', 'direction'],
      padding: ['responsive', 'direction'],
  },
  theme: {
    extend: {
        width: {
            '400px': '400px',
          },
      fontFamily: {
        sans: ["Poppins", ...defaultTheme.fontFamily.sans],
        inter: ["Inter", ...defaultTheme.fontFamily.sans],
      },
      fontSize: {
        tiny: ["0.625rem", "0.8125rem"],
        "tiny+": ["0.6875rem", "0.875rem"],
        "xs+": ["0.8125rem", "1.125rem"],
        "sm+": ["0.9375rem", "1.375rem"],
      },
      colors: {   ...customColors, 'primary': {
          DEFAULT: '#0ea5e9', // Un bleu ciel vif (sky-500)
          focus: '#0284c7',   // sky-600
          content: '#ffffff', // Texte sur la couleur primaire
        },
        
        // Notre nouvelle couleur d'accent secondaire (pour les dégradés)
        'secondary': {
          DEFAULT: '#d946ef', // Un fuchsia vif (fuchsia-500)
          focus: '#c026d3',   // fuchsia-600
          content: '#ffffff',
        },

        // On peut redéfinir slate pour être un peu plus froid si on veut
        slate: colors.slate, },
      opacity: {
        15: ".15",
      },
      spacing: {
        4.5: "1.125rem",
        5.5: "1.375rem",
        18: "4.5rem",
      },
      boxShadow: {
        soft: "0 3px 10px 0 rgb(48 46 56 / 6%)",
        "soft-dark": "0 3px 10px 0 rgb(25 33 50 / 30%)",
      },
      zIndex: {
        1: "1",
        2: "2",
        3: "3",
        4: "4",
        5: "5",
      },
      keyframes: {
        "fade-out": {
          "0%": {
            opacity: 1,
            visibility: "visible",
          },
          "100%": {
            opacity: 0,
            visibility: "hidden",
          },
        },
      },
    },
  },
  corePlugins: {
    textOpacity: false,
    backgroundOpacity: false,
    borderOpacity: false,
    divideOpacity: false,
    placeholderOpacity: false,
    ringOpacity: false,
  },

    plugins: [require("@tailwindcss/forms"),   require('tailwindcss-dir')()],

};