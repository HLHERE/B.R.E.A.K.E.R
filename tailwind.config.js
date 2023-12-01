/** @type {import('tailwindcss').Config} */
export default {
  content: [],
  theme: {
    extend: {},
  },
  plugins: [],
}
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {},
  },
  plugins: [
      require('flowbite/plugin')
  ],
  theme : {
    colors: {
      transparent : 'transparent',
      current : 'currentColor',
      'navbar' : '#ED7D31',
      'coklat' : '#6C5F65B',
      'abu'    : '#4F4A45',
      'putih'  : 'F6F1EE',
    },
  },
}

