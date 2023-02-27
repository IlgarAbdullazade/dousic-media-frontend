/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        extend: {
            fontFamily: {
                primary: ["Poppins"],
                secondary: ["All Round Gothic"],
            },
            colors: {
                primary: "#DD1C78",
                customPink: {
                    50: "#DD1C78",
                    100: "#510026",
                    200: "#2D0D1C",
                    300: "#220915",
                    400: "#17060E",
                    500: "#0F0309",
                },
                customGray: {
                    50: "#FFFFFF",
                    100: "#F8F8F8",
                    200: "#F5F5F5",
                    300: "#E0E0E0",
                    400: "#ADADAD",
                    500: "#A8A8A8",
                    600: "#444444",
                    700: "#222222",
                },
            },
            transitionDuration: {
                DEFAULT: "300ms",
            },
            container: {
                center: true,
            },
        },
    },
    plugins: [
        require("@tailwindcss/forms"),
        require("tailwind-scrollbar"),
        require("@tailwindcss/line-clamp"),
        require("flowbite/plugin"),
    ],
};
