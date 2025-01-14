const path = require('path');
const HtmlWebpackPlugin = require('html-webpack-plugin');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const BrowserSyncPlugin = require('browser-sync-webpack-plugin');

const isProduction = process.env.NODE_ENV === 'production';

const stylesHandler = MiniCssExtractPlugin.loader;

module.exports = () => {
    const config = {
        entry: './src/index.js', 
        output: {
            path: path.resolve(__dirname, 'dist'),
            filename: 'js/main.js',
            chunkFormat: 'array-push', 
        },
        devServer: {
            open: true,
            host: 'localhost',
        },
        plugins: [
            new HtmlWebpackPlugin({
                template: path.resolve(__dirname, 'src', 'index.html'), // Check this path
            }),
            new MiniCssExtractPlugin({
                filename: 'css/styles.css',
            }),
            new BrowserSyncPlugin({
                proxy: 'http://localhost/wordpress',
                port: 3005, 
                files: ["./**/*.{html,css,js}"],
            }),
        ],
        module: {
            rules: [
                {
                    test: /\.(js|jsx)$/i,
                    loader: 'babel-loader',
                },
                {
                    test: /\.css$/i,
                    use: [stylesHandler, 'css-loader'],
                },
                {
                    test: /\.s[ac]ss$/i,
                    use: [stylesHandler, 'css-loader', 'sass-loader'],
                },
                {
                    test: /\.(eot|svg|ttf|woff|woff2|png|jpg|gif)$/i,
                    type: 'asset',
                },
            ],
        },
    };

    if (isProduction) {
        config.mode = 'production';
    } else {
        config.mode = 'development';
    }

    return config;
};
