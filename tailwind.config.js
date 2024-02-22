/** @type {import('tailwindcss').Config} */

const plugin = require('tailwindcss/plugin');

module.exports = {
  content: ["./src/**/*.{html,js,php}"],
  theme: {
    extend: {},
  },
  plugins: [
    // require('@tailwindcss/forms'),
    plugin(function ({ addUtilities, addComponents, e, config }) {
      // Add your custom styles here
    }),],
}

