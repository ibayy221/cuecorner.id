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
        'primary': '#180d05',
        'secondary': '#301c0d',
        'border-accent': '#644a30',
        'text-muted': '#917b59',
        'accent-gold': '#c7a061',
        'accent-glow': '#fdce7e',
        'accent-soft': '#cbbe90',
        'text-light': '#e5e5e7',
      },
      fontFamily: {
        serif: ['"Playfair Display"', 'Georgia', 'serif'],
        sans: ['Montserrat', 'Inter', 'sans-serif'],
      },
      boxShadow: {
        'luxury-glow': '0 0 35px -5px rgba(253, 206, 126, 0.25)',
        'card-glow': '0 10px 30px -10px rgba(0, 0, 0, 0.5), 0 0 20px 0 rgba(199, 160, 97, 0.1)',
        'gold-border': 'inset 0 0 0 1px rgba(199, 160, 97, 0.3)',
      },
      backgroundImage: {
        'hero-radial': 'radial-gradient(circle at 50% 30%, #301c0d 0%, #180d05 70%)',
        'gold-gradient': 'linear-gradient(135deg, #fdce7e 0%, #c7a061 50%, #917b59 100%)',
        'dark-card-gradient': 'linear-gradient(180deg, rgba(48, 28, 13, 0.8) 0%, rgba(24, 13, 5, 0.95) 100%)',
      }
    },
  },
  plugins: [],
}
