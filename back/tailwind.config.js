/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./assets/**/*.js",
    "./templates/**/*.html.twig",
  ],
  theme: {
    extend: {      
      fontFamily: {
        caveat: 'var(--font-caveat)',
        handlee: 'var(--font-handlee)'
      },},
  },
  plugins: [],
}
