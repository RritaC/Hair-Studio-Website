/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
    ],
    theme: {
        extend: {

            fontFamily: {

                "be": ["Ysabeau SC", "sans-serif"]

            },

            gridTemplateRows: {
                '[auto,auto,1fr]': 'auto auto 1fr',
            },
        },
    },
    plugins: [
        require('@tailwindcss/aspect-ratio'),
    ],
}
