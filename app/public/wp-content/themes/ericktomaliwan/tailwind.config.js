/** @type {import('tailwindcss').Config} config */
import daisyui from "daisyui"

const config = {
  content: ['./app/**/*.php', './resources/**/*.{php,vue,js}'],
  theme: {
    extend: {
      colors: {}, // Extend Tailwind's default colors
    },
  },
  plugins: [
    daisyui,
  ],
};

export default config;
