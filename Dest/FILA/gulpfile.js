let gulp = require("gulp");
let babel = require("gulp-babel");
let uglify = require("gulp-uglify");
let rename = require("gulp-rename");
let imagemin = require("gulp-imagemin");
let minifyCss = require("gulp-minify-css");
let htmlmin = require('gulp-htmlmin');



// gulp.task("_uglify",function(){
// 	gulp.src("js/**/*ajax.js").pipe(uglify()).pipe(gulp.dest("D:/Dest"));
// })
gulp.task("_uglify",function(){
	gulp.src("js/**/*").pipe(babel({presets: ['es2015']})).pipe(uglify()).pipe(gulp.dest("D:/Dest"));
});
gulp.task("_minifyCss",function(){
	gulp.src("css/**/*").pipe(minifyCss()).pipe(gulp.dest("D:/Dest"));
});
gulp.task("_imagemin",function(){
	gulp.src("img/**/*").pipe(imagemin()).pipe(gulp.dest("D:/Dest"));
});
gulp.task("_htmlmin",function(){
	gulp.src("./**/*.html").pipe(htmlmin()).pipe(gulp.dest("D:/Dest"));
});