module.exports = {
  purge: [],
  darkMode: false, // or 'media' or 'class'
  theme: {
    fontFamily: {
      'sen': ['"Sen"', 'sans-serif'],
    },
    extend:{
          backgroundImage: theme => ({
            'spacex': "url('img/background.jpg')",
          }),
          colors: {
            'spacex' : '#005288',
          },
          padding: {
            '1/4': '25%',
           }
      },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
