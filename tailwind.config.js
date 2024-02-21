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
            
            colors: {
                principal: '#1af1f5',
                segundario: ' #0fce81',
              },

            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },

            components: {
                '.custom-link': {
                  'font-weight': '600',
                  'color': '#4B5563',
                  '&:hover': {
                    'color': '#4A5568',
                  },
                  '&:focus': {
                    'outline': '2px solid #F56565',
                    'outline-offset': '2px',
                    'border-radius': '.125rem',
                  },
                },
              },
        },
    },


    plugins: [forms],
};
