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
            animation: {
                marquee: 'marquee 20s linear infinite',
                marquee2: 'marquee2 20s linear infinite',
            },
            keyframes: {
                marquee: {
                    '0%' :{transform: 'translateX(100%)'},
                    '100%' :{transform: 'translateX(-100%)'},
                },
                marquee2: {
                    '0%' :{transform: 'translateX(100%)'},
                    '100%' :{transform: 'translateX(0%)'},
                }
            },
            boxShadow: {
                '3xl':'0 15px 50px 15px #a0abab',
            },

        },
    },

    plugins: [forms, typography],
};
