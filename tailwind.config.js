/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        fontFamily: {
            Montserat: ["Montserrat", "sans-serif"],
            Roboto: ["Roboto", "sans-serif"],
        },
        extend: {},
        screens: {
            sm: "640px",
            md: "768px",
            lg: "1024px",
            xl: "1280px",
            "2xl": "1536px",
        },
        colors: {
            "base-white": "#fff",
            "background-light": "#F5F5F9",
            "line-dark": "#CED4DA",
            "line-light": "#ECEEF0",
            "primary-dark": "#4250CE",
            "primary-medium": "#E8ECFF",
            "primary-light": "#F2F5FF",
            "text-dark": "#4A5663",
            "text-medium": "#8A97A6",
            "blue-dark": "#689FF1",
            "blue-light": "#EEF4FF",
            "green-dark": "#4CAC8F",
            "green-medium": "#EBFFFD",
            "green-light": "#F3FFFD",
            "yellow-dark": "#E4B200",
            "yellow-light": "#FFF8E9",
            "red-dark": "#E4187A",
            "red-medium": "#FFF1F8",
            "red-light": "#FFF1F8",
        },
    },
    plugins: [
        require("@tailwindcss/forms")({
            strategy: "class", // only generate classes
        }),
    ],
};
