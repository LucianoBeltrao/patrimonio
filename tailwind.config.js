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
                    '100': '#ebf0fa',
                    '200': '#d4d9de',
                    '300': '#c5ccd3',
                    '400': '#b7bfc8',
                    '500': '#979da1',

                },
                'tertiary':{
                    '900': '#ebf0fa',
                    '800': '#d6e0f5',
                }
            }
        },
    },

    plugins: [forms, typography],
};
