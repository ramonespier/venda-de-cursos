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
    },
  },
  plugins: [],
}

