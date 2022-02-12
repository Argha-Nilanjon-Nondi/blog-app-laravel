module.exports = {
  content: ["./resources/**/*.blade.php",
    "./resources/**/*.js"],
  theme: {
    screens: {
      "log": { "min": "200px", "max": "452px" },
      "navbar-head-text":{"max":"333px"},
      "blog-card-min":{"min":"666px"},
      "blog-card-max": { "max": "665px" },
      'sm': '640px',

      'md': '768px',

      'lg': '1024px',

      'xl': '1280px',

      '2xl': '1536px',
    },
    extend: {},
  },
  plugins: [
   
  ],
}
