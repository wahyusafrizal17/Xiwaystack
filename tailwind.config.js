/** @type {import('tailwindcss').Config} */
export default {
  content: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
  ],
  theme: {
    extend: {
      colors: {
        xiw: {
          navy: '#0B0F1A',
          cyan: '#00D1FF',
          violet: '#7B61FF',
          gold: '#FFD166',
        },
      },
      fontFamily: {
        sans: ['Inter', 'system-ui', 'sans-serif'],
        display: ['Poppins', 'Inter', 'system-ui', 'sans-serif'],
      },
      boxShadow: {
        'neon-cyan': '0 0 20px rgba(0, 209, 255, 0.35), 0 0 40px rgba(0, 209, 255, 0.15)',
        'neon-violet': '0 0 20px rgba(123, 97, 255, 0.35), 0 0 40px rgba(123, 97, 255, 0.15)',
        'neon-gold': '0 0 16px rgba(255, 209, 102, 0.4)',
        glass: '0 8px 32px rgba(0, 0, 0, 0.35)',
      },
      backgroundImage: {
        'gradient-radial': 'radial-gradient(var(--tw-gradient-stops))',
        'hero-mesh':
          'radial-gradient(ellipse 80% 50% at 50% -20%, rgba(0, 209, 255, 0.15), transparent), radial-gradient(ellipse 60% 40% at 100% 0%, rgba(123, 97, 255, 0.12), transparent)',
        'cta-neon':
          'linear-gradient(135deg, rgba(0, 209, 255, 0.25) 0%, rgba(123, 97, 255, 0.35) 50%, rgba(0, 209, 255, 0.2) 100%)',
      },
      animation: {
        'fade-in': 'fadeIn 0.7s ease-out forwards',
        'glow-pulse': 'glowPulse 4s ease-in-out infinite',
        float: 'float 6s ease-in-out infinite',
      },
      keyframes: {
        fadeIn: {
          '0%': { opacity: '0', transform: 'translateY(12px)' },
          '100%': { opacity: '1', transform: 'translateY(0)' },
        },
        glowPulse: {
          '0%, 100%': { opacity: '0.6', filter: 'blur(40px)' },
          '50%': { opacity: '1', filter: 'blur(50px)' },
        },
        float: {
          '0%, 100%': { transform: 'translateY(0)' },
          '50%': { transform: 'translateY(-8px)' },
        },
      },
    },
  },
  plugins: [],
};
