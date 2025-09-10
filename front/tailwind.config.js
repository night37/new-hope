/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './pages/**/*.{js,ts,jsx,tsx,mdx}',
    './components/**/*.{js,ts,jsx,tsx,mdx}',
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
        primary: '#CEEBE9',
        secondary: '#73C9C2', 
        third: '#171717',
      }
    },
  },
  plugins: [
    require('daisyui')
  ],
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
  },
}
