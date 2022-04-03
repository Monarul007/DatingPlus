const { delay } = require('lodash');
const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
        './node_modules/flowbite/**/*.js',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            keyframes: {
                'fade-in-up': {
                    'from': {
                        animationdelay: '5000ms',
                        opacity: '0',
                        transform: 'translate3d(0,100%,0)'
                    },
                    'to': {
                        opacity: '1',
                        transform: 'translate3d(0,0,0)'
                    },
                },
                'fade-in-left': {
                    'from': {
                        opacity: '0',
                        transform: 'translate3d(100%,0,0)'
                    },
                    'to': {
                        opacity: '1',
                        transform: 'translate3d(0,0,0)'
                    },
                },
                'zoomIn': {
                    '0%': {
                        transform: 'scale(1)'
                    },
                    '100%': {
                        transform: 'scale(1)'
                    }
                }
            },
            animation: {
                'fade-in-left': 'fade-in-left 0.5s ease-out',
                // 'fade-out-down': 'fade-out-down 0.5s ease-out',
                'fade-in-up': 'fade-in-up 1s ease-out',
                // 'fade-out-up': 'fade-out-up 0.5s ease-out',
                'zoomIn': 'zoomIn 0.5s ease-in'
            },
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography'), require('flowbite/plugin'), require("tailwindcss-animation-delay")],
};
