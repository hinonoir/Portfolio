var gulp = require('gulp');
var rename = require('gulp-rename');
var sass = require('gulp-sass');
var plumber = require('gulp-plumber');
var sassGlob = require('gulp-sass-glob');
var postCss = require('gulp-postcss');
var autoPrefixer = require('autoprefixer');
var cssDeclSort = require( 'css-declaration-sorter' );
var cleanCss = require('gulp-clean-css');
var mmq = require( 'gulp-merge-media-queries' );
var uglify = require('gulp-uglify');
var imagemin = require("gulp-imagemin");
var imageminPngquant = require("imagemin-pngquant");
var imageminMozjpeg = require("imagemin-mozjpeg");
var connect = require('gulp-connect-php');
var browserSync = require('browser-sync');

// Sassのコンパイル //
gulp.task('sass', function () {
  return gulp.src('./sass/style.scss')
    .pipe(plumber(function(err) {console.log(err.messageFormatted);this.emit('end');}))
    .pipe(sassGlob())
    .pipe(sass({ outputStyle: 'expanded' }))
    .pipe(postCss([ autoPrefixer() ]))
    .pipe(postCss([ cssDeclSort({ order: 'alphabetically' }) ]) )
    .pipe( mmq() )
    .pipe(gulp.dest('./css/'));
});

// CSSの圧縮 //
gulp.task('mincss', function () {
  return gulp.src('./css/style.css')
    .pipe(cleanCss())
    .pipe(rename({ suffix: '.min'}))
    .pipe(gulp.dest('./css/'));
});

// JavaScriptの圧縮 //
gulp.task('minjs', function(){
  return gulp.src('./js/main.js')
    .pipe(uglify())
    .pipe(rename({ suffix: '.min'}))
    .pipe(gulp.dest('./js/'));
});

// 画像圧縮オプション //
var imageminOption = [
  imageminPngquant({ quality: [.65 , .85]}),
  imageminMozjpeg({ quality: 85}),
  imagemin.gifsicle({
    interlaced: false,
    optimizationLevel: 1,
    colors: 256
  }),
  imagemin.jpegtran(),
  imagemin.optipng(),
  imagemin.svgo()
];

// 画像圧縮処理 //
gulp.task('minimage', function(){
  return gulp.src('./img/base/*.{png,jpg,gif,svg}')
    .pipe( imagemin( imageminOption))
    .pipe( gulp.dest('./img'));
});

// ========== 【HTML】ブラウザの自動更新 ========== //
gulp.task('html', function(){
  browserSync.init({
    server: {
      baseDir: './'
    }
  });
  // 上記のタスクを常に監視 //
  gulp.watch('./sass/*.scss', gulp.task('sass'));
  gulp.watch('./sass/base/*.scss', gulp.task('sass'));
  gulp.watch('./sass/mixin/*.scss', gulp.task('sass'));
  gulp.watch('./sass/module/*.scss', gulp.task('sass'));
  gulp.watch('./sass/page/*.scss', gulp.task('sass'));
  gulp.watch('./sass/page/common/*.scss', gulp.task('sass'));
  gulp.watch('./sass/setting/*.scss', gulp.task('sass'));
  gulp.watch('./css/stylesheet.css', gulp.task('mincss'));
  gulp.watch('./js/main.js', gulp.task('minjs'));
  gulp.watch('./img/base/*.{png,jpg,gif,svg}', gulp.task('minimage'));
  gulp.watch('./*.html').on('change', browserSync.reload);
  gulp.watch('./css/*.css').on('change', browserSync.reload);
  gulp.watch('./js/*.js').on('change', browserSync.reload);
});
// ========== /【HTML】ブラウザの自動更新 ========== //


// ========== 【PHP】ブラウザの自動更新 ========== //
gulp.task('php', function(){
  connect.server({
    port:8001,
    baseDir:'./',
    bin: 'C:/xampp/php/php.exe',
    ini: 'C:/xampp/php/php.ini'
  }, function (){
    browserSync({
      proxy: 'localhost:8001'
    });
  });
  // 上記のタスクを常に監視 //
  gulp.watch('./sass/*.scss', gulp.task('sass'));
  gulp.watch('./sass/base/*.scss', gulp.task('sass'));
  gulp.watch('./sass/mixin/*.scss', gulp.task('sass'));
  gulp.watch('./sass/module/*.scss', gulp.task('sass'));
  gulp.watch('./sass/page/*.scss', gulp.task('sass'));
  gulp.watch('./sass/page/common/*.scss', gulp.task('sass'));
  gulp.watch('./sass/setting/*.scss', gulp.task('sass'));
  gulp.watch('./css/stylesheet.css', gulp.task('mincss'));
  gulp.watch('./js/main.js', gulp.task('minjs'));
  gulp.watch('./img/base/*.{png,jpg,gif,svg}', gulp.task('minimage'));
  gulp.watch('./*.php').on('change', browserSync.reload);
  gulp.watch('./function_php/*.php').on('change', browserSync.reload);
  gulp.watch('./css/*.css').on('change', browserSync.reload);
  gulp.watch('./js/*.js').on('change', browserSync.reload);
});
// ========== /【PHP】ブラウザの自動更新 ========== //
