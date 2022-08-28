const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*show.blade.php',
        './vendor/laravel/jetstream/**/*show.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*show.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [],
};
