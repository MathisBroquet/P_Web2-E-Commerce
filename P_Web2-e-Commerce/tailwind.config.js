module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        ored: {
          DEFAULT: '#F75100',
          50: '#FFCAB0',
          100: '#FFBC9B',
          200: '#FFA172',
          300: '#FF854A',
          400: '#FF6A21',
          500: '#F75100',
          600: '#BF3F00',
          700: '#872C00',
          800: '#4F1A00',
          900: '#170700',
        },
        whitesmoke:{
          default: '#F5F5F5'
        }

      },
      backgroundImage: theme => ({
        'amongus': "url('/images/games/amogus.png')" ,
        'minecraft' : "url ('/images/games/Minecraft.png')"       
      })
    },
    plugins: [],
  }
}