/** @type {import('tailwindcss').Config} */
import daisyui from 'daisyui';

const config = {
  content: [
    './pages/**/*.{js,ts,jsx,tsx,mdx}',
    './components/**/*.{js,ts,jsx,tsx,mdx}',
    './Components/**/*.{js,ts,jsx,tsx,mdx}',
    './app/**/*.{js,ts,jsx,tsx,mdx}',
    './src/**/*.{js,ts,jsx,tsx,mdx}',
  ],
  theme: {
    extend: {
      fontFamily: {
        caveat: ['var(--font-caveat)', 'cursive'],
        handlee: ['var(--font-handlee)', 'cursive'],
      },
      fontSize: {
        'small': '14px',
        'base': '16px',
        'large': '20px',
        'xl': '24px',
        '2xl': '32px',
      },
      colors: {
        "custom-primary": '#CEEBE9',
        "custom-secondary": '#73C9C2',
        "custom-third": '#171717',
        "font-green": '#047169',

      },
      boxShadow: {
        'card': '0 4px 4px 0 rgba(0, 0, 0, 0.25), -5px 7px 4px 0 rgba(0, 0, 0, 0.25)',
      }
    },
  },
  plugins: [daisyui],

  daisyui: {
    themes: [
      {
        light: {
          "primary": "#CEEBE9",
          "secondary": "#73C9C2",
          "accent": "#171717",
          "neutral": "#171717",
          "base-100": "#ffffff",
        },
      },
    ],
    base: true,
    styled: true,
    utils: true,
    darkMod: "class",
  },
}

export default config;
