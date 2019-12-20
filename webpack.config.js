const currentTask = process.env.npm_lifecycle_event

const path = require('path')
const {CleanWebpackPlugin} = require('clean-webpack-plugin')
const MiniCssExtractPlugin = require('mini-css-extract-plugin')
const postCSSPlugins = [
    require('postcss-import'),
    require('postcss-mixins'),
    require('postcss-simple-vars'),
    require('postcss-nested'),
    require('autoprefixer')
]
let cssConfig = {
    test: /\.css$/i,
    use: [
        'css-loader',
        {
            loader:'postcss-loader',
            options:{
                plugins: postCSSPlugins
            }
        }
    ]
}
let config = {
    entry: './js/scripts.js',
    module: {
        rules: [
            cssConfig
        ]
    }
}

if(currentTask == 'dev'){
    cssConfig.use.unshift('style-loader')
    config.output = {
        filename:'./js/scripts-bundled.js',
        path: path.resolve(__dirname,'../claustra-theme')
    }
    config.mode= 'development'
}

if(currentTask == 'build'){
    cssConfig.use.unshift(MiniCssExtractPlugin.loader)
    //postCSSPlugins.push(require('cssnano'))
    config.output = {
        filename:'./js/scripts-bundled.js',
        path: path.resolve(__dirname, '../dist-claustra')
    },
    config.mode= 'production',
    config.plugins= [
        new MiniCssExtractPlugin({filename: 'style.css'})
    ]
}


module.exports = config