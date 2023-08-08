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
                marquee: "marquee 30s linear infinite",
                marquee2: "marquee2 30s linear infinite",
            },
            keyframes: {
                fadeIn: {
                    "0%": { opacity: 0, transform: "translateY(30%)" },
                    "100%": { opacity: 1, transform: "translateY(0px)" },
                },
                marquee: {
                    "0%": { transform: "translateX(0%)" },
                    "100%": { transform: "translateX(-100%)" },
                },
                marquee2: {
                    "0%": { transform: "translateX(100%)" },
                    "100%": { transform: "translateX(0%)" },
                },
            },
        },
    },
    plugins: [require("tailwindcss-animation-delay")],
};
