/** @type {import('tailwindcss').Config} */
const colors = require('tailwindcss/colors');

export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],

  theme: {
    colors: {
      transparent: 'transparent',
      current: 'currentColor',
      primary: '#3B3A5D',
      secondary: '#FFBB50',
      content: '#8F8F8F',
      link: '#B16642',
      border:'#B16642',
      black: colors.black,
      white: colors.white,
      rose: colors.rose,
      pink: colors.pink,
      fuchsia: colors.fuchsia,
      gray: colors.gray,
      red: colors.red,
      yellow:colors.yellow,
    },
    extend: {},
  },
  plugins: [],
}

