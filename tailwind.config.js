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
        center: true,
      },
      fontFamily: {
        "sans-serif": ['Lato'],
        "serif": ['Merriweather'],
        "heading": ['Merriweather'],
        "display": ['Merriweather'],
        "mono": ['ui-monospace', 'SFMono-Regular', 'Menlo', 'Monaco', 'Consolas'],
      },
      extend: {
        colors: {
          primary: {
            100: "#F8C4E3",
            400: '#8e4865',
            500: "#833556",
            600: "#6F2A47",
            700: "#5A1E38",
            800: "#461229",
            900: "#3C1A2A",
          },
          secondary: {
            100: "#C4D0D8",
            200: "#A0B2C4",
            300: "#7D96A8",
            400: "#4D6678",
            500: "#3D5466",
            600: "#2A4254",
            700: "#1E3642",
            800: "#122A36",
            900: "#1A2A32",
          }
        },
        backgroundImage: {
          'hero-home': "url('/wp-content/themes/bright-lives-theme/assets/images/backgrounds/hero-01-free-img.jpg')",
          'hero-projects': "url('/wp-content/themes/bright-lives-theme/assets/images/content/PA230074.jpg')",
          'hero-donate': "url('/wp-content/themes/bright-lives-theme/assets/images/content/PA230280-slim.jpg')",
          'home-tile-1': "url('/wp-content/themes/bright-lives-theme/assets/images/backgrounds/eten-tafel.jpeg')",
          'home-tile-2': "url('/wp-content/themes/bright-lives-theme/assets/images/backgrounds/jongens-stoep.png')",
          'home-tile-3': "url('/wp-content/themes/bright-lives-theme/assets/images/backgrounds/klaslokaal.jpeg')",
          'radial-gradient': 'radial-gradient(circle at top left, #F8C4E3, #3C1A2A)',
          'radial-gradient-opacity': 'radial-gradient(circle at top left, rgba(248, 196, 227, 0.5), rgba(60, 26, 42, 0.5))',
        },
        height: {
          '80vh': '80vh',
          '60vh': '60vh',
        },
        minHeight: {
          '4rem': '4rem',
          '5rem': '5rem',
          '7rem': '7rem',
        },
        boxShadow: {
          'custom-inset': 'inset 0 0 0 1px #1e1e1e',
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
