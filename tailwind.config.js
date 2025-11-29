module.exports = {
    content: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './vendor/lunarphp/stripe-payments/resources/views/**/*.blade.php',
    ],
    theme: {
        extend: {
            fontFamily: {
                'sans': ['Lato', 'sans-serif'],
                'serif': ['Inria Serif', 'serif'],
            },
            colors: {
                'primary': '#81D8D0',
                'dark': '#404040',
                'cream': '#D8C9B9',
                'light': '#FFFCF1',
                'beige': '#F5F5DC',
            }
        },
    },
    plugins: [require('@tailwindcss/forms')],
};