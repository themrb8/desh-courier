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
                sans: ['Helvitica Neue', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary: '#5329FF',
            },
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
