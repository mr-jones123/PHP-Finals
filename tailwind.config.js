module.exports = {
  content: ["./src/*.html", "./src/*.php"],
  theme: {
    extend: {
      colors: {
        text: "#061003",
        background: "#f2feee",
        primary: "#71d047",
        secondary: "#79f4a2",
        accent: "#56d6e5",
      },
      fontSize: {
        sm: "0.750rem",
        base: "1rem",
        xl: "1.333rem",
        "2xl": "1.777rem",
        "3xl": "2.369rem",
        "4xl": "3.158rem",
        "5xl": "4.210rem",
      },
      fontFamily: {
        inter: "Inter"
      },
      fontWeight: {
        normal: "400",
        bold: "700",
      },
    },
    plugins: [],
  },
};
