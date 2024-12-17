/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        primary: {
          100: '#EEE7DE',
          150: '#EEE7DE',
          200: '#C4D1E3',
          300: '#A6B9D7',
          400: '#89A3CA',
          500: '#6B8CBE',
          600: '#5570A0',
          700: '#3E5482',
          800: '#293861',
          900: '#131B41',
        },
        secondary: {
          '100': '#484848'
        },
        brown: {
          '100': '#88511D',
          '200': '#8B5E3C',
          '300': '#784e2f'
        },
        blue: {
          '10': '#dce5fa'
        },
        footer: {
          '100': '#efefef'
        },
        gray: {
          '10': '#49494a',
          '20': '#e3e3e3',
          '30': '#cfcfcf'
        }
      },
      fontFamily: {
        roboto: ['Roboto', 'sans-serif'],
        'cormorant-infant': ['"Cormorant Infant"', 'serif'],
        'mr-dafoe': ['"Mr Dafoe"', 'cursive'],
        'caudex': ['"Caudex"', 'serif'],
        'montserrat': ['"Montserrat"', 'sans-serif']
      },
      fontSize: {
        'xxs': '0.625rem'
      },
      width: {
        '19': '1.188rem',
        '60%': '60%',
        '40%': '40%'
      },
      height: {
        '0.5': '0.063rem',
        '100': '28.125rem'
      },
      maxHeight: {
        '365': '22.813rem',
        '500': '31.25rem'
      },
      boxShadow: {
        'custom-light': '0px 1px 4px 0px rgba(0,0,0,0.3)',
        'custom-dark': '0px 3px 6px 0px rgba(0,0,0,0.3)',
        'custom-xl': '0 10px 15px rgba(0, 0, 0, 0.3)',
        'custom-show-products': '0px 3px 8px 0px rgba(0, 0, 0, 0.1)',
        'custom-social': '1px 0px 4px 0px rgba(0, 0, 0, 0.2)',
        'wishlist': '0px 0px 10px 0px rgba(0,0,0,0.2)'
      },
    },
  },
  plugins: [],
}

