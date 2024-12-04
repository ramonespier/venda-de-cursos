/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{html,js,php}"],
  theme: {
    extend: {
      colors: {
        customColor: {
          home: '#110d29',
          logoCor: '#ffec40',
          menuhov: '#200b46',
          faixa: '#2e1065',
          fundoTransparente: 'rgba(0, 0, 0, 0.5);',
          fundoLer: 'rgba(0, 0, 0, 0.7);'
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

      gridRowStart: {
        '14': '14',
        '15': '15',
        '16': '16',
      },

      fontSize: {
        'xs': '0.75rem', // 12px 
        'sm': '0.875rem', // 14px 
        'base': '1rem', // 16px 
        'lg': '1.125rem', // 18px 
        'xl': '1.25rem', // 20px 
        '2xl': '1.5rem', // 24px 
        '3xl': '1.875rem', // 30px 
        '4xl': '2.25rem', // 36px 
        '5xl': '3rem', // 48px 
        '6xl': '3.75rem', // 60px 
        '7xl': '4.5rem', // 72px 
        '8xl': '6rem', // 96px 
        '9xl': '8rem', // 128px 
        '10xl': '10rem',
      },
      plugins: [],
    }
  }
}

