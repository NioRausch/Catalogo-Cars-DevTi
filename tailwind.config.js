/** @type {import('tailwindcss').Config} */
module.exports = {

  darkMode: 'class',

  content: [
    "./resources/**/*.blade.php",
    "./resources/*/*/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors:{
        "red_t": "#ef233c",
        "dark-blue": "#2b2d42",
        "light-blue": "#edf2f4"
      }
    },
  },
  plugins: [require('tailwind-scrollbar')({ nocompatible: true })],
}
