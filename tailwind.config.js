const colors = require('tailwindcss/colors')
const plugin = require('tailwindcss/plugin')

module.exports = {
  purge: {
    content: [
      './resources/**/*.blade.php',
      './resources/**/**/*.blade.php',
      './resources/**/*.js',
      './resources/**/*.vue',
    ]
  },
  darkMode: false, // or 'media' or 'class'
  theme: {
    fontFamily : {
      'sans': ['Poppins'],
    },
    extend: {
      screens: {
        'lg': '1170px'
      },
      colors: {
        primary : {
          '50': '#D1F9FC',
          '100': '#B9F6FA',
          '200': '#89F0F7',
          '300': '#59EAF4',
          '400': '#2AE3F0',
          '500': '#0FCBD8',
          '600': '#0C9EA8',
          '700': '#087179',
          '800': '#054549',
          '900': '#021819'
        }
      }
    },
  },
  variants: {
    extend: {
      textColor: ['light'],
      position: ['light'],
      visibility: ['light'],
      display: ['light'],
    },
  },
  plugins: [
    plugin(function({ addVariant, e }) {
      addVariant('light', ({ modifySelectors, separator }) => {
          modifySelectors(({ className }) => {
              return `.light .${e(`light${separator}${className}`)}`
          })
        })
    }),
    plugin(function({ addBase, theme }) {
      addBase({
        '[x-cloak]': { display: "none !important" },
      })
    })
  ],
}
