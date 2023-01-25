const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
                montserrat: ['Montserrat'],
            },
            backgroundImage: {
                'default-pattern': "url('../public/img/bg.svg')",
            },
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
