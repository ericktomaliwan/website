/** @type {import('tailwindcss').Config} config */
import daisyui from "daisyui"

const config = {
  content: ['./app/**/*.php', './resources/**/*.{php,vue,js}'],
  theme: {
    extend: {
      colors: {
        burgundy: {
          100: '#f6f6e9',
          200: '#f7acaa',
          300: '#e88684',
          400: '#cd4b4b',
          500: '#ba1b1b',
        },
      }, // Extend Tailwind's default colors
    },
  },
  screens: {
    'sm': '640px',
    'md': '768px',
    'lg': '1024px',
    'xl': '1280px',
    '2xl': '1536px',
  },
  plugins: [
    daisyui,
  ]
};

export default config;
