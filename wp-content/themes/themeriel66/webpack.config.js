const path = require('path');
const ExtractTextPlugin = require('extract-text-webpack-plugin');
const BrowserSyncPlugin = require('browser-sync-webpack-plugin');

const jsBundleName = 'bundle.js', cssBundleName = 'styles.css';
const phpServerHost = 'http://localhost:8080/';
const syncHost = 'localhost', syncPort = '3000';

let conf = {
    entry: {
        main: './src/index.js',  // исходник
    },
    output: {
        path: path.resolve(__dirname, 'assets'),  // выходная папка
        filename: 'js/' + jsBundleName,  // название выходного скрипта
    },
    module: {
        rules: [
            {
                test: /\.scss$/,
                use: ExtractTextPlugin.extract({
                    fallback: 'style-loader',
                    use: ['css-loader', 'sass-loader']
                })
            },
            {
                test: /\.(woff(2)?|ttf|eot|svg)(\?v=\d+\.\d+\.\d+)?$/,
                use: [
                    {
                      loader: 'file-loader',
                      options: {
                        name: '[name].[ext]',
                        outputPath: 'fonts/'
                      }
                    }
                  ]
            },
            {
                test: /\.css$/,
                use: ExtractTextPlugin.extract({
                    fallback: 'style-loader',
                    use: 'css-loader'
                })
            },
            {
                test: /\.js$/,
                loader: 'babel-loader',
                exclude: '/node_modules/'
            }
        ]
    },
    plugins: [
        new ExtractTextPlugin('css/' + cssBundleName),
        new BrowserSyncPlugin({
            host: syncHost,
            port: syncPort,
            proxy: phpServerHost,
            files: [
                './**/*.html',
                './**/*.php',
                './src/*.js',
                './src/scss/*.scss'
            ],
        }),
    ],
};

module.exports = (env, options) => {
    const isDev = options.mode !== 'production';

    conf.devtool = isDev 
        ? 'eval-sourcemap' 
        : 'source-map';

    conf.watch = isDev ? true : false;

    return conf;
}