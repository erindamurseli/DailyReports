module.exports = {
  purge: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  darkMode: false, // or 'media' or 'class'
  
    theme: {
      // screenns: {
      //   'sm': {'min': '640px', 'max': '767px'},
      // },
     

    extend: {
      colors:{
        blue:"#2e8cff",
        yellow:"#fff008",
       bblack:"#1e1e1e",
      blackk:"#222222",
     grayyy:"#f8f6f6",
      
     gray:"#9f9e9e",
     grayy:"#d4d4d4",
     green:"#08a200",
     whitee:"#fdfaf6",
       
      }

    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
