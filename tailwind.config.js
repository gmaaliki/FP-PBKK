import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            left: {
                '120': '30rem',
                '180': '45rem',
                '270': '53rem',
                'custom-1': '70rem',
            },
            width: {
                '120': '30rem',
                '150': '40rem',
                '180': '45rem',
                '240': '60rem',
                'custom-1': '70rem',
            },
            margin: {
                '120': '30rem',
                '180': '45rem',
            },
            height: {
                '120': '30rem',
                '150': '38rem',
                '180': '45rem',
            },
        },
    },

    plugins: [forms],

};

