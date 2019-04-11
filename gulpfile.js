var gulp = require ('gulp');
var sass = require ('gulp-sass');

gulp.task('sass', async function () {
    gulp.src('./final_site/**/*.scss')
       .pipe(sass().on('error', sass.logError))
       .pipe(gulp.dest('./final_site'));
});

gulp.task('sass:watch', function () {
   gulp.watch ('./final_site/**/*.scss', gulp.series('sass'));
});

