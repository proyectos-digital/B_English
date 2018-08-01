import gulp from 'gulp';
import babel from 'gulp-babel';
import pug from 'gulp-pug';
import sass from 'gulp-sass';
import postcss from 'gulp-postcss';
import cssnano from 'cssnano';
import cssbeautify from 'gulp-cssbeautify';
import rename from 'gulp-rename';
import errorNotifier from 'gulp-error-notifier';

const postCSSPlugins = [
    cssnano({
            autoprefixer: {
                add: true /* Agrega los prefijos de compatibilidad en navegadores  */
            }
            , rawCache: false
            , calc: false
            , colormin:  false
            , convertValues: false
            , discardComments: true /* Elimina comentarios que no tengan el signo ! con la siguiente sintaxis '/*! ...... '  */
            , discardDuplicates: true /* Elimina los valores duplicados  */
            , discardEmpty: true /* Elimina las declaraciones vacias  */
            , discardOverridden: false
            , discardUnused: false
            , mergeIdents: false
            , mergeIdents: {
                add: false
            }
            , mergeLonghand: false
            , mergeRules: false /* Unifica las propiedades y valores de los selectores cercanos  */
            , minifyFontValues: true /* Organiza y redefine los valores en declaradas tipo font....  */
            , minifyParams: false
            , minifyGradients: false
            , minifySelectors: false
            , normalizeCharset: true /* Organiza o define un charset utf-8  */
            , normalizeDisplayValues: true /* Normaliza los valores de la propiedad display a 1 solo, si se escriben 2 erroneamente  */
            , normalizePositions: true /* Normaliza las declaraciones de posición en el background, background-position, -webkit-perspective-origin and perspective-origin properties.  */
            , normalizeRepeatStyle: true /* reduce los valores en el background-repeat  */
            , normalizeString: false
            , normalizeTimingFunctions: false
            , normalizeUnicode: false
            , normalizeUrl: false
            , normalizeWhitespace: false
            , orderedValues: true /* -----  */
            , reduceIdents: false
            , reduceInitial: false
            , reduceTransforms: false
            , svgo: true /* -----  */
            , uniqueSelectors: true /* -----  */
            , zindex: false
            // preset: ['default', {} ]
    })]
;
let	folderDev = '_dev/'
    , folderPublic = ''
    , devTarget = 'fullSections'
    , folderLevel = 'C1'
    , folderUnit = 'unit_1'
    , folderModule = 'module_1'
    , folderSection = 'activities'
    , folderDevActual = devTarget
;

if(devTarget == 'content'){
    let
        desarrollo = folderDev+folderDevActual+'/'+folderLevel
        , destino = folderPublic+folderDevActual+'/'+folderLevel
    ;
    /* ======================================
    Configuración errorNotifier ↓↓↓↓↓
    ====================================== */
    gulp.task('error', function(){
        gulp.src('./'+desarrollo+'/*.pug')
            .pipe(errorNotifier())
            .pipe(pug())
            .pipe(gulp.dest('./'+destino+'/'));
        gulp.src('./'+folderDev+folderDevActual+'/assets/scss/*.scss')
            .pipe(errorNotifier.handleError(sass()))
            .pipe(gulp.dest('./'+folderPublic+folderDevActual+'/assets/css'));
    });
    /* ======================================
    Configuración scripts ↓↓↓↓↓
    ====================================== */
    // Scripts principales
    gulp.task('globalScript', () =>
        gulp.src('./'+folderDev+folderDevActual+'/assets/js/*.js')
            .pipe(babel())
            .pipe(gulp.dest('./'+folderPublic+folderDevActual+'/assets/js'))
    );
    // Scripts principales
    gulp.task('unitScript', () =>
        gulp.src('./'+desarrollo+'/assets/js/*.js')
            .pipe(babel())
            .pipe(gulp.dest('./'+destino+'/assets/js'))
    );
    /* ======================================
    Configuración estilos ↓↓↓↓↓
    ====================================== */
    // Estilos principales
    gulp.task('sassApp', () =>
        gulp.src('./'+folderDev+folderDevActual+'/assets/scss/*.scss')
            .pipe(sass({
                // pretty: true,
                outputStyle: 'expanded'
            }).on('error', sass.logError))
            .pipe(postcss(postCSSPlugins))

            .pipe(cssbeautify({
                indent: '	',
                openbrace: 'end-of-line',
                autosemicolon: true
            }))
            .pipe(gulp.dest('./'+folderPublic+folderDevActual+'/assets/css/'))
    );
    // Estilos por Modulo
    gulp.task('sassLevel', () =>
        gulp.src('./'+desarrollo+'/'+folderUnit+'/'+folderModule+'/assets/*.scss')
            .pipe(sass({
                // pretty: true,
                outputStyle: 'expanded'
            }).on('error', sass.logError))
            .pipe(postcss(postCSSPlugins))
            .pipe(cssbeautify({
                indent: '	',
                openbrace: 'end-of-line',
                autosemicolon: true
            }))
            .pipe(gulp.dest('./'+destino+'/'+folderUnit+'/'+folderModule+'/assets/css/'))
    );
    /* ======================================
    Configuración vistas ↓↓↓↓↓
    ====================================== */
    // vista principal - index
    gulp.task('index', () =>
        gulp.src('./'+desarrollo+'/*.pug')
            .pipe(pug({
                pretty: true
            }))
            .pipe(rename({ extname: ".php" }))
            .pipe(gulp.dest('./'+destino))
    );
    // vista seccion - index
    gulp.task('unit', () =>
        gulp.src('./'+desarrollo+'/'+folderUnit+'/*.pug')
            .pipe(pug({
                pretty: true
            }))
            .pipe(rename({ extname: ".php" }))
            .pipe(gulp.dest('./'+destino+'/'+folderUnit+'/'))
    );
    gulp.task('modules', () =>
        gulp.src('./'+desarrollo+'/'+folderUnit+'/'+folderModule+'/*.pug')
            .pipe(pug({
                pretty: true
            }))
            .pipe(rename({ extname: ".php" }))
            .pipe(gulp.dest('./'+destino+'/'+folderUnit+'/'+folderModule+'/'))
    );
    gulp.task('sections', () =>
        gulp.src('./'+desarrollo+'/'+folderUnit+'/'+folderModule+'/'+folderSection+'/*.pug')
            .pipe(pug({
                pretty: true
            }))
            .pipe(rename({ extname: ".php" }))
            .pipe(gulp.dest('./'+destino+'/'+folderUnit+'/'+folderModule+'/'+folderSection+'/'))
    );
    // templates - index
    gulp.task('templates', () =>
        gulp.src('./'+folderDev+folderDevActual+'/ngMaster/*.pug')
            .pipe(pug({
                pretty: true
            }))
            .pipe(rename({ extname: ".php" }))
            .pipe(gulp.dest('./'+folderPublic+folderDevActual+'/ngMaster/'))
    );
    /* ======================================
    Configuración default ↓↓↓↓↓
    ====================================== */
    gulp.task('default', function() {

        gulp.watch('./'+folderDev+folderDevActual+'/assets/js/*.js', ['globalScript']);
        gulp.watch('./'+desarrollo+'/assets/js/*.js', ['unitScript']);


        gulp.watch('./'+desarrollo+'/*.pug', ['index']); // index

        gulp.watch('./'+folderDev+folderDevActual+'/ngMaster/*.pug', ['templates']); // ngMaster

        gulp.watch('./'+desarrollo+'/'+folderUnit+'/*.pug', ['unit']);
        gulp.watch('./'+desarrollo+'/'+folderUnit+'/'+folderModule+'/*.pug', ['modules']); // modules
        gulp.watch('./'+desarrollo+'/'+folderUnit+'/'+folderModule+'/'+folderSection+'/*.pug', ['sections']); // sections


        gulp.watch('./'+folderDev+folderDevActual+'/assets/scss/*.scss', ['sassApp']);
        gulp.watch('./'+folderDev+folderDevActual+'/assets/scss/**/*.scss', ['sassApp']);
        gulp.watch('./'+desarrollo+'/'+folderUnit+'/'+folderModule+'/assets/*.scss', ['sassLevel']);
    });
}
if (devTarget == 'login') {
    // --------
    let
        desarrollo = folderDev+folderDevActual
        , destino = folderPublic+folderDevActual
    ;
    /* ======================================
    Configuración scripts ↓↓↓↓↓
    ====================================== */
    // Scripts principales
    gulp.task('globalScript', () =>
        gulp.src('./'+desarrollo+'/js/*.js')
            .pipe(babel())
            .pipe(gulp.dest('./'+destino+'/js'))
    );
    /* ======================================
    Configuración estilos ↓↓↓↓↓
    ====================================== */
    // Estilos principales
    gulp.task('sassLogin', () =>
        gulp.src('./'+folderDev+'/content/assets/scss/app_login.scss')
            .pipe(sass({
                outputStyle: 'expanded'
            }).on('error', sass.logError))

            .pipe(postcss(postCSSPlugins))
            .pipe(cssbeautify())

            .pipe(gulp.dest('./'+destino+'/css/'))
    );
    gulp.task('sassApp', () =>
        gulp.src('./'+folderDev+'/content/assets/scss/*.scss')
            .pipe(sass({
                outputStyle: 'expanded'
            }).on('error', sass.logError))

            .pipe(postcss(postCSSPlugins))
            .pipe(cssbeautify())

            .pipe(gulp.dest('./'+folderPublic+'/content/assets/css/'))
    );
    /* ======================================
    Configuración vistas ↓↓↓↓↓
    ====================================== */
    // vista principal - index
    gulp.task('index', () =>
        gulp.src('./'+folderDev+'/*.pug')
            .pipe(pug({
                pretty: true
            }))
            .pipe(rename({ extname: ".php" }))
            .pipe(gulp.dest('./'+folderPublic))
    );
    gulp.task('login', () =>
        gulp.src('./'+desarrollo+'/*.pug')
            .pipe(pug({
                pretty: true
            }))
            .pipe(rename({ extname: ".php" }))
            .pipe(gulp.dest('./'+destino))
    );
    /* ======================================
    Configuración default ↓↓↓↓↓
    ====================================== */
    gulp.task('default', function() {

        gulp.watch('./'+desarrollo+'/js/*.js', ['globalScript']);

        gulp.watch('./'+folderDev+'/*.pug', ['index']); // index
        gulp.watch('./'+desarrollo+'/*.pug', ['login']); // index

        gulp.watch('./'+folderDev+'/content/assets/scss/app_login.scss', ['sassLogin']);
        gulp.watch('./'+folderDev+'/content/assets/scss/*.scss', ['sassApp']);
        gulp.watch('./'+folderDev+'/content/assets/scss/**/*.scss', ['sassApp']);
        gulp.watch('./'+folderDev+'/content/assets/scss/**/**/*.scss', ['sassApp']);
    });
}
if (devTarget == 'fullSections') {
    let
        desarrollo = folderDev+'content/'+folderLevel
        , destino = folderPublic+'content/'+folderLevel
    ;
    gulp.task('sections', () => {
        // -------- ACTITITES
        gulp.src('./'+desarrollo+'/'+folderUnit+'/'+folderModule+'/activities/*.pug')
            .pipe(pug({
                pretty: true
            }))
            .pipe(rename({ extname: ".php" }))
            .pipe(gulp.dest('./'+destino+'/'+folderUnit+'/'+folderModule+'/activities/'));
        // -------- SELFCHECK
        gulp.src('./'+desarrollo+'/'+folderUnit+'/'+folderModule+'/selfcheck/*.pug')
            .pipe(pug({
                pretty: true
            }))
            .pipe(rename({ extname: ".php" }))
            .pipe(gulp.dest('./'+destino+'/'+folderUnit+'/'+folderModule+'/selfcheck/'));
        // -------- GRAMMAR
        gulp.src('./'+desarrollo+'/'+folderUnit+'/'+folderModule+'/grammar/*.pug')
            .pipe(pug({
                pretty: true
            }))
            .pipe(rename({ extname: ".php" }))
            .pipe(gulp.dest('./'+destino+'/'+folderUnit+'/'+folderModule+'/grammar/'));
        // -------- MYCOLOMBIA
        gulp.src('./'+desarrollo+'/'+folderUnit+'/'+folderModule+'/myColombia/*.pug')
            .pipe(pug({
                pretty: true
            }))
            .pipe(rename({ extname: ".php" }))
            .pipe(gulp.dest('./'+destino+'/'+folderUnit+'/'+folderModule+'/myColombia/'));
        // -------- TEST
        gulp.src('./'+desarrollo+'/'+folderUnit+'/'+folderModule+'/test/*.pug')
            .pipe(pug({
                pretty: true
            }))
            .pipe(rename({ extname: ".php" }))
            .pipe(gulp.dest('./'+destino+'/'+folderUnit+'/'+folderModule+'/test/'));
        // -------- SCSS por Modulo
        gulp.src('./'+desarrollo+'/'+folderUnit+'/'+folderModule+'/assets/*.scss')
            .pipe(sass({
                // pretty: true,
                outputStyle: 'expanded'
            }).on('error', sass.logError))
            .pipe(postcss(postCSSPlugins))
            .pipe(cssbeautify({
                indent: '	',
                openbrace: 'end-of-line',
                autosemicolon: true
            }))
            .pipe(gulp.dest('./'+destino+'/'+folderUnit+'/'+folderModule+'/assets/css/'))
    });
    /* ======================================
    Configuración default ↓↓↓↓↓
    ====================================== */
    gulp.task('default', function() {
        gulp.watch('./'+desarrollo+'/'+folderUnit+'/'+folderModule+'/activities/*.pug', ['sections']);
        gulp.watch('./'+desarrollo+'/'+folderUnit+'/'+folderModule+'/selfcheck/*.pug', ['sections']);
        gulp.watch('./'+desarrollo+'/'+folderUnit+'/'+folderModule+'/grammar/*.pug', ['sections']);
        gulp.watch('./'+desarrollo+'/'+folderUnit+'/'+folderModule+'/myColombia/*.pug', ['sections']);
        gulp.watch('./'+desarrollo+'/'+folderUnit+'/'+folderModule+'/test/*.pug', ['sections']);

        gulp.watch('./'+desarrollo+'/'+folderUnit+'/'+folderModule+'/assets/*.scss', ['sections']);
    });
}
