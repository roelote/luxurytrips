/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./*.php",
    "./template-parts/**/*.php",
    "./inc/**/*.php",
    "./src/**/*.js",
  ],
  theme: {
     container: {
    center: true,
    },
    extend: {
    fontFamily: {
        montserrat: ['Montserrat', 'sans-serif'],

      },
     
    },
  },
  plugins: [],
}
