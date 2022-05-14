"use strict";

import gulp from 'gulp';
import imagemin from 'gulp-imagemin';
import browserSync from 'browser-sync';
// import sass from 'gulp-sass';
import cleanCSS from 'gulp-clean-css';
import autoprefixer from 'gulp-autoprefixer';
import rename from "gulp-rename"
import htmlmin from 'gulp-htmlmin';
import webpack from "webpack-stream";
import dartSass from 'sass';
import gulpSass from 'gulp-sass';
const sass = gulpSass(dartSass);
// const browserSync = require('browser-sync');

// const gulp        = require('gulp');
// const browserSync = require('browser-sync');
// const sass        = require('gulp-sass')(require('sass'));
// const cleanCSS = require('gulp-clean-css');
// const autoprefixer = require('gulp-autoprefixer');
// const rename = require("gulp-rename");
// const imagemin = require('gulp-imagemin');
// const htmlmin = require('gulp-htmlmin');
// const webpack = require("webpack-stream");

const dist = "./dist/";


gulp.task('server', function() {
    browserSync({
        server: {
            baseDir: "dist"
        }
    });

    gulp.watch("src/*.html").on('change', browserSync.reload);
});

gulp.task("build-js", () => {
  return gulp.src("./src/js/main.js")
              .pipe(webpack({
                  mode: 'development',
                  output: {
                      filename: 'script.js'
                  },
                  watch: false,
                  devtool: "source-map",
                  module: {
                      rules: [
                        {
                          test: /\.m?js$/,
                          exclude: /(node_modules|bower_components)/,
                          use: {
                            loader: 'babel-loader',
                            options: {
                              presets: [['@babel/preset-env', {
                                  debug: true,
                                  corejs: 3,
                                  useBuiltIns: "usage"
                              }]]
                            }
                          }
                        }
                      ]
                    }
              }))
              .pipe(gulp.dest(dist))
              .on("end", browserSync.reload);
});

gulp.task("build-prod-js", () => {
    return gulp.src("./src/js/main.js")
                .pipe(webpack({
                    mode: 'production',
                    output: {
                        filename: 'script.js'
                    },
                    module: {
                        rules: [
                          {
                            test: /\.m?js$/,
                            exclude: /(node_modules|bower_components)/,
                            use: {
                              loader: 'babel-loader',
                              options: {
                                presets: [['@babel/preset-env', {
                                    corejs: 3,
                                    useBuiltIns: "usage"
                                }]]
                              }
                            }
                          }
                        ]
                      }
                }))
                .pipe(gulp.dest(dist))
                .on("end", browserSync.reload);
});

gulp.task('styles', function() {
    return gulp.src("src/sass/**/*.+(scss|sass)")
        .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
        .pipe(rename({suffix: '', prefix: ''}))
        .pipe(autoprefixer())
        .pipe(cleanCSS({compatibility: 'ie8'}))
        .pipe(gulp.dest("dist/"))
        .pipe(browserSync.reload({ stream: true }));
});

gulp.task('watch', function() {
    browserSync.init({
    server: "./dist/",
    port: 4000,
    notify: true
    });
    
    gulp.watch("src/sass/**/*.+(scss|sass|css)", gulp.parallel('styles'));
    gulp.watch("src/*.html").on('change', gulp.parallel('html'));
    gulp.watch("src/js/**/*.js").on('change', gulp.parallel('build-prod-js'));
    gulp.watch("src/fonts/**/*").on('all', gulp.parallel('fonts'));
    gulp.watch("src/icons/**/*").on('all', gulp.parallel('icons'));
    gulp.watch("src/img/**/*").on('all', gulp.parallel('images'));
});

gulp.task('html', function () {
    return gulp.src("src/*.html")
        .pipe(htmlmin({ collapseWhitespace: true }))
        .pipe(gulp.dest("dist/"));
});

gulp.task('fonts', function () {
    return gulp.src("src/fonts/**/*")
        .pipe(gulp.dest("dist/fonts"))
        .pipe(browserSync.reload({ stream: true }));
});

gulp.task('icons', function () {
    return gulp.src("src/icons/**/*")
        .pipe(gulp.dest("dist/icons"))
        .pipe(browserSync.reload({ stream: true }));
});

gulp.task('images', function () {
    return gulp.src("src/img/**/*")
        .pipe(imagemin())
        .pipe(gulp.dest("dist/img"))
        .pipe(browserSync.reload({ stream: true }));
});

gulp.task('default', gulp.parallel('watch', 'server', 'styles', 'fonts', 'icons', 'html', 'images', "build-prod-js"));