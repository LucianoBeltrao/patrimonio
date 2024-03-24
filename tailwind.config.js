import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors:{
                'primary':{
                    '100': '#ffc966',
                    '200': '#ffc14d',
                    '300': '#ffb833',
                    '400': '#ffaf1a',
                    '500': '#ffa500',
                },
                'secondary':{
                    '100': '#c5ccd3',
                    '100': '#b7bfc8',
                    '100': '#a9b3bc',
                    '100': '#9aa6b1',
                    '100': '#8c99a6',

                }
            }
        },
    },

    plugins: [forms, typography],
};
