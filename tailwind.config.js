module.exports = {
    content: [
      "./bright-lives-theme/template-parts/**/*.php",
      "./bright-lives-theme/templates/**/*.php",
      "./bright-lives-theme/functions/**/*.php",
      "./src/blocks/**/edit.js",
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
        // Replace these with content images in Wordpress
        backgroundImage: {
          'hero-home': "url('/wp-content/themes/bright-lives-theme/assets/images/backgrounds/hero-01-free-img.jpg')",
          'hero-projects': "url('/wp-content/themes/bright-lives-theme/assets/images/content/PA230074.jpg')",
          'home-tile-1': "url('/wp-content/themes/bright-lives-theme/assets/images/backgrounds/eten-tafel.jpeg')",
          'home-tile-2': "url('/wp-content/themes/bright-lives-theme/assets/images/backgrounds/jongens-stoep.png')",
          'home-tile-3': "url('/wp-content/themes/bright-lives-theme/assets/images/backgrounds/klaslokaal.jpeg')",
          'radial-gradient': 'radial-gradient(circle at top left, #F8C4E3, #3C1A2A)',
          'radial-gradient-opacity': 'radial-gradient(circle at top left, rgba(248, 196, 227, 0.5), rgba(60, 26, 42, 0.5))',
        },
        height: {
          '80vh': '80vh',
          '60vh': '60vh'
        }
      }
    },
    plugins: [],
}
