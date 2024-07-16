/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        container: {
            center: true,
            padding: {
                DEFAULT: "1rem",
                sm: "3rem",
                lg: "6rem",
                xl: "8rem",
            },
        },
        extend: {},
    },
    plugins: [require("daisyui")],
};
