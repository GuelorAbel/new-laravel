/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
    ],
    theme: {
        extend: {},
    },
    plugins: [require("@tailwindcss/typography"), require("daisyui")],
    // personnalisation des couleurs du projet
    daisyui: {
        themes: [
            {
                mytheme: {
                    primary: "#f97316",
                    secondary: "#e4d1ca",
                    info: "#00b5ff",
                    warning: "#ffbe00",
                    success: "#00a96e",
                    error: "#ff5861",
                    black: "#1F2937",
                    neutral: "#3d4451",
                    white: "#ffffff",
                    gray: "#f2f2f2",
                },
            },
        ],
    },
};
