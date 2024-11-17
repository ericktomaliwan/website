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
  themes: [
    {
      'et' : {
        'primary': '#182F4E', //Prussian Blue
        'primary-focus': '#0D1B2A', //Rich Black
        'primary-content': '#ffffff',
        'secondary': '#2D3F62', //Oxford Blue
        'secondary-focus': '#0D1B2A', //Deft Blue 
        'secondary-content': '#ffffff',
        'accent': '#506E91', //True Blue
        'accent-focus': '#415A77', //YinMin Blue
        'accent-content': '#ffffff',
        'neutral': '#CECFC9', //Timberwolf
        'neutral-focus': '#E0E1DD', //Platinum
        'neutral-content': '#ffffff',
        'base-100': '#ffffff',
        'base-200': '#f9fafb', //Seasalt
        'base-300': '#d1d5db', //French Gray
        'base-content': '#343434', //Jet / 222222Eerie Black
        'info': '#2094f3', //Dodger Blue
        'success': '#009485', //Persian Green
        'warning': '#ff9900', //Orange Peel
        'error': '#ff5724', //Giants Orange
      }
    }
  ]
};

export default config;
