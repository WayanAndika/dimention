/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {},
    colors:{
      first:{
        '100':'#E2C47B',
      },
      second:{
        '100':'#FFFFFF',
      },
      third:{
        '100':'#282726',
      }
    }
  },
  plugins: [require("daisyui")],
  daisyui:{
    themes:[]
  },
}