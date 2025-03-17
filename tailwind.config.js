/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily: {
        header: ["Audiowide", "sans-serif"],
        paragraph: ["Exo", "sans-serif"],
        navbar: ["Space Grotesk", "sans-serif"],
      },
    },
  },
  plugins: [],
}