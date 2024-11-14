/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{html,js}"],
  theme: {
    extend: {
        colors: {
          customColor: {
            home: '#5e17eb',
          },
        },

        spacing: {
          '128': '128px',
          '-384': '-384px'
        }
    },
  },
  plugins: [],
}

