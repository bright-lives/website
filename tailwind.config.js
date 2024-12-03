module.exports = {
    content: [
      "./bright-lives-theme/template-parts/**/*.php",
      "./bright-lives-theme/templates/**/*.php",
      "./bright-lives-theme/functions/**/*.php",
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
          '7rem': '7rem',
        },
        boxShadow: {
          'custom-inset': 'inset 0 0 0 1px #1e1e1e',
        },
        gridAutoRows: {
          '2fr': 'minmax(0, 2fr)',
        }
      }
    },
    plugins: [
      require('@tailwindcss/typography'),
    ],
}
