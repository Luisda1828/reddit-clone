/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      backgroundColor: {
        'white2': 'rgba(255, 255, 255, 0.1)',
      }

    },
  },
  plugins: [],
}

