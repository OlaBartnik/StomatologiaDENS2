const path = require("path");

module.exports = {
    entry: './src/js/app.js',
    output: {
        filename: "scripts.js",
        path: path.resolve(__dirname, "wordpress/wp-content/themes/DENS2/js")
    },
    watch: true,
    mode: 'production',
    devtool: "source-map",
    module: {
        rules: [{
            test: /\.m?js$/,
            exclude: /(node_modules|bower_components)/,
            use: {
                loader: 'babel-loader',
                options: {
                    presets: ['@babel/preset-env']
                }
            }
        }]
    }
}