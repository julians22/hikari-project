/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
      ],
    theme: {
        extend: {
            colors: {
                'primary-yellow': '#fcea00',
                'primaruy-gray': '#e4e4e2'
            }
        },
    },
    plugins: [
        require('tailwindcss-motion')
    ],
}

