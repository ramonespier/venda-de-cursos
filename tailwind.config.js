/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{html,js,php}"],
  theme: {
    extend: {
      colors: {
        customColor: {
          home: '#5e17eb',
          logoCor: '#ffec40'
        },
      },

      fontFamily: {
        josefin: ['Josefin Sans', 'sans-serif'],
      },

      spacing: {
        '128': '128px',
        '-384': '-384px',
        '768': '768px',
        '-1921': '-1921px'
      },

      gridTemplateRows: {
        '13': 'repeat(13, minmax(0, 1fr))',
        '14': 'repeat(14, minmax(0, 1fr))',
        '15': 'repeat(15, minmax(0, 1fr))',
        '16': 'repeat(16, minmax(0, 1fr))',
        '17': 'repeat(17, minmax(0, 1fr))',
        '18': 'repeat(18, minmax(0, 1fr))',
        '19': 'repeat(19, minmax(0, 1fr))',
        '20': 'repeat(20, minmax(0, 1fr))'
      },
    },
    plugins: [],
  }
}

