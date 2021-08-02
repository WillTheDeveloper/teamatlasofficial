const colors = require('tailwindcss/colors')

module.exports = {
  purge: [
      './resources/**/*.blade.php',
      './resources/**/*.js',
      './resources/**/*.vue',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
        colors: {
            teal: colors.teal,
            cyan: colors.cyan,
            'logo-start': '#2CC6FD',
            'logo-middle': '#697EFE',
            'logo-end': '#AB2EFE'
        }
    },
  },
  variants: {
    extend: {},
  },
  plugins: [
      require('@tailwindcss/forms'), require('@tailwindcss/forms'), require('@tailwindcss/aspect-ratio'), require('@tailwindcss/aspect-ratio'),
  ],
}
