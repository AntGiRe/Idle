import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        'vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        'storage/framework/views/*.php',
        'resources/views/**/*.blade.php',
    ],
    theme: {
        extend: {
            animation: {
                border: 'border 4s ease infinite',
            },
            keyframes: {
                border: {
                    '0%, 100%': { backgroundPosition: '0% 50%' },
                    '50%': { backgroundPosition: '100% 50%' },
                },
            },
        },
    },
    plugins: [forms],
};
