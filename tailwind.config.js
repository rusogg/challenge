/** @type {import('tailwindcss').Config} */
module.exports = {
  darkMode: 'class',
  content: ["./resources/**/*.blade.php",
  "./resources/**/*.js",
  "./resources/**/*.vue",
  './app/Http/Livewire/**/*Table.php',
      './vendor/power-components/livewire-powergrid/resources/views/**/*.php',
      './vendor/power-components/livewire-powergrid/src/Themes/Tailwind.php',
],
  
  theme: {
    extend: {},
  },
  plugins: [],
}
