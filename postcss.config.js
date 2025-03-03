module.exports = {
    plugins: [
        //require('autoprefixer'),
        require('cssnano')({
            preset: 'advanced', // o advanced si quieres una minificación más agresiva
            autoprefixer: false, // ya tengo el otro plugin autoprefixer
        }),
    ],
};
