module.exports = {
    content: [
      "./bright-lives-theme/template-parts/**/*.php",
      "./bright-lives-theme/templates/**/*.php",
      "./src/blocks/**/edit.js",
    ],
    theme: {
      container: {
        center: true,
      },
      fontFamily: {
        "sans-serif": ['Lato'],
        "serif": ['Merriweather'],
        "heading": ['Baloo Bhai 2'],
        "display": ['Merriweather'],
      },
      extend: {
        colors: {
          primary: {
            100: "#F8C4E3",
            500: "#833556",
            900: "#3C1A2A",
          },
        },
        backgroundImage: {
          hero: "url('/wp-content/themes/bright-lives-theme/assets/images/backgrounds/hero-01-free-img.jpg')",
          'radial-gradient': 'radial-gradient(circle at top left, #F8C4E3, #3C1A2A)',
        }
      }
    },
    plugins: [],
}
