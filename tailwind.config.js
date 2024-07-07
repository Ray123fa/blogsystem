/** @type {import('tailwindcss').Config} */
export default {
    darkMode: ["selector", '[data-theme="dark"]'],
    content: ["./resources/**/*.blade.php"],
    theme: {
        extend: {},
    },
    plugins: [require("daisyui")],
    daisyui: {
        themes: false,
    },
};
