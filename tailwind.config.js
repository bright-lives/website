module.exports = {
    content: [
      "./bright-lives-theme/**/*.php",
      "./src/blocks/**/edit.js",
      "./src/blocks/**/save.js",
      "./src/blocks/**/style.js",
      "./src/blocks/__components__/**/*.js",
    ],
    theme: {
      container: {
        center: true,      // centers the container horizontally
        padding: '1rem',   // adds horizontal padding inside container
        screens: {         // define max-width aka container queries breakpoints
          sm: '640px',
          md: '768px',
          lg: '1024px',
          xl: '1280px',
          '2xl': '1536px',
        },
      },
      extend: {
        height: {
          '80vh': '80vh',
          '60vh': '60vh',
        },
        minHeight: {
          '4rem': '4rem',
          '5rem': '5rem',
          '7rem': '7rem',
        },
        gridAutoRows: {
          '2fr': 'minmax(0, 2fr)',
        },
        typography: {
          DEFAULT: {
            css: {
              h1: {
                fontSize: '2.25rem', // text-4xl
                lineHeight: '1.5', // leading-normal
                fontFamily: 'Merriweather', // font-serif
                marginBottom: '1.5rem', // mb-6
              },
              h2: {
                fontSize: '1.5rem', // text-2xl
                lineHeight: '1.5', // leading-normal
                fontFamily: 'Merriweather', // font-serif
                marginBottom: '1.5rem', // mb-6
              },
              p: {
                fontFamily: 'Lato', // font-sans
              },
            }
          }
        }
      },
    },
    plugins: [
      require('@tailwindcss/typography'),
    ],
    safelist: [
      'md:grid-cols-3',
      'md:grid-cols-4',
      'md:grid-cols-5',
    ],
}
