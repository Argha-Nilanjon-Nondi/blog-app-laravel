module.exports = {
  content: ["./resources/**/*.blade.php",
    "./resources/**/*.js"],
  theme: {
    screens: {
      "log": { "min": "200px", "max": "452px" },
      "navbar-head-text": { "max": "333px" },
      "blog-card-min": { "min": "666px" },
      "blog-card-max": { "max": "665px" },
      "header": { "max": "767px" },
      "header-btn-sm":{"max":"243px"},
      "banner-text-b":{"min":"290px","max":"349px"},
      "banner-text-a": { "max": "289px" },
      "about-box-a": { "max":"1124px"},
      "about-box-b": { "max": "350px" },
      "about-box-c": { "min": "350px" ,"max":"454px" },
      "contact-form-a": { "max":"436px"},
      'sm': '640px',

      'md': '768px',

      'lg': '1024px',

      'xl': '1280px',

      '2xl': '1536px',
    },
    extend: {
      height:{
        "inherit":"inherit",
        "100":"29rem"
      },
      width:{
        "166":"64rem"
      }
    },
  },
  plugins: [

  ],
}
