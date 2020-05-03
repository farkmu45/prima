var gulp = require("gulp");
var concat = require("gulp-concat");

gulp.task("pack-js", function() {
    return gulp
        .src(["resources/js/*.js"])
        .pipe(concat("app.js"))
        .pipe(gulp.dest("resources/js"));
});

gulp.task("pack-css", function() {
    return gulp
        .src(["resources/css/*.css"])
        .pipe(concat("app.css"))
        .pipe(gulp.dest("resources/css"));
});

gulp.task("default", gulp.series(["pack-js", "pack-css"]));
