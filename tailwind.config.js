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
            500: "#833556",
            600: "#6F2A47",
            700: "#5A1E38",
            800: "#461229",
            900: "#3C1A2A",
          },
        },
        backgroundImage: {
          hero: "url('/wp-content/themes/bright-lives-theme/assets/images/backgrounds/hero-01-free-img.jpg')",
          'eten-tafel': "url('/wp-content/themes/bright-lives-theme/assets/images/backgrounds/eten-tafel.jpeg')",
          'jongens-stoep': "url('/wp-content/themes/bright-lives-theme/assets/images/backgrounds/jongens-stoep.png')",
          'klaslokaal': "url('/wp-content/themes/bright-lives-theme/assets/images/backgrounds/klaslokaal.jpeg')",
          'radial-gradient': 'radial-gradient(circle at top left, #F8C4E3, #3C1A2A)',
        },
        height: {
          '80vh': '80vh'
        }
      }
    },
    plugins: [],
}
