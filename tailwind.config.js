/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                primary: "rgb(239 68 68)",
            },
            animation: {
                fadeIn: "fadeIn 0.7s ease-in-out forwards",
            },
            keyframes: {
                fadeIn: {
                    "0%": { opacity: 0, transform: "translateY(20px)" },
                    "100%": { opacity: 1, transform: "translateY(0px)" },
                },
            },
        },
    },
    plugins: [require("tailwindcss-animation-delay")],
};
