'use strict';

function _defineProperty(obj, key, value) { if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }

function _toConsumableArray(arr) { if (Array.isArray(arr)) { for (var i = 0, arr2 = Array(arr.length); i < arr.length; i++) { arr2[i] = arr[i]; } return arr2; } else { return Array.from(arr); } }

// app.controller

// Controllador global
app.controller('CtrlActivities', ['$scope', '$state', '$stateParams', 'ngAudio', '$timeout', '$http', 'funcionesGeneral', 'Upload', 'ApiActividades', 'ApiUnidades', function ($scope, $state, $stateParams, ngAudio, $timeout, $http, funcionesGeneral, Upload, ApiActividades, ApiUnidades) {
    /*
     *
     * Variables declaradas por maquetación
     *
    */
    var
    // establece una conección con el gestor de rutas y captura la información del estado
    estadoRuta = $scope.state = $state.current
    // establece una conección con el gestor de rutas y captura los parametros parados en la ruta URL
    ,
        parametrosRuta = $scope.params = $stateParams,
        globalNotice = document.getElementById('notice'),
        closeNotice = [].concat(_toConsumableArray(document.querySelectorAll('.closeNotice'))),
        open_Notice = [].concat(_toConsumableArray(document.querySelectorAll('.openNotice'))),
        closeNoticeOverlay = document.querySelector('.c-noticeAside-overlay'),
        windowDOM = window,
        bodyDOM = document.body;
    /**
     * quitar el attributo style con valor overflow:hidden
     * que se agrego en el home unit
    */
    if (document.body.hasAttribute('style')) {
        bodyDOM.attributes.removeNamedItem('style');
        /**
         * en el caso de que llegue a las
         * actividades por la URL
        */
    }

    /*
     *
     * Funciones declaradas por maquetación
     * - Estas funciones estan fuera del controlador
     *
    */
    $scope.func_triggerNotice = func_Maqueta.func_triggerNotice(open_Notice);
    $scope.triggerNoticesAside = function (accion) {
        var options = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : undefined;
        triggerNoticesAside(accion, options = undefined);
    };

    $scope.idNotice = 1;

    $scope.unidadid = $stateParams.Unidad_id;
    $scope.moduloid = $stateParams.Module_id;
    $scope.actividadid = $stateParams.Activity_id;

    if (estadoRuta.name == 'activities') {
        $scope.categoriaid = 1;
    }
    if (estadoRuta.name == 'selfcheck') {
        $scope.categoriaid = 2;
    }
    if (estadoRuta.name == 'test') {
        $scope.categoriaid = 3;
        if (document.querySelectorAll('.u-bgIconRefresh')) document.querySelectorAll('.u-bgIconRefresh').forEach(function (elm, i) {
            return elm.classList.add('is-hidden');
        });
    }
    if (estadoRuta.name == 'grammar') {
        $scope.categoriaid = 4;
    }
    if (estadoRuta.name == 'mycolombia') {
        $scope.categoriaid = 5;
    }

    var usu_id = $('#usu_id').val();
    var nivel_id = $('#nivel_usu_id').val();

    var variables = {
        unidadid: $scope.unidadid,
        moduloid: $scope.moduloid,
        actividadid: $scope.actividadid,
        categoriaid: $scope.categoriaid,
        usuid: usu_id,
        nivelid: nivel_id,
        control: "SI"
    };

    $scope.agregaAttrUnir = function () {
        $('#sourceElements [seleccion]').each(function (indice, val) {
            $('#sourceElements [seleccion]').attr('js-bien', 'jsbien');
            $('#sourceElements [seleccion]').attr('jsvalida', 'jsvalida');
        });

        $('#targetElements [seleccion]').each(function (indice, val) {
            $('#targetElements [seleccion]').attr('jsblock', 'jsblock');
            $('#targetElements [seleccion]').attr('jsvalidb', 'jsvalidb');
        });
    };

    $scope.agregaAttrUnir();

    // LISTA EXPRESSIONES mYCOLOMBIA MODULO 1 EJERCICIO # 2 - C1
    $scope.listarExpresiones = function () {

        ApiActividades.ListExpresiones().then(function (data) {

            // console.log(data.data);
            var respuesta = data.data;
            $scope.expresiones = respuesta;
        });
    };

    $scope.guardarExpresiones = function () {

        setTimeout(function () {

            alertify.confirm("Are you sure ?", function () {

                alertify.success('Saved !!');

                for (var i = 0; i < 9; i++) {

                    var tot = i + 1;
                    var textouser = $('#text_' + tot).val();
                    var preguntaid = $('#text_' + tot).attr('expresionid');

                    var variables = {
                        textouser: textouser,
                        usuid: usu_id,
                        preguntaid: preguntaid,
                        control: "SI"
                    };

                    ApiActividades.GuardaExpresiones(variables).then(function (data) {

                        // console.log(data.data);

                    });
                }
            }, function () {
                alertify.error('Canceled');
            });
        }, 1000);
    };

    // preguntas actividad 11 modulo 1 C1
    $scope.listaractividadmodulo = function (idejercicio) {

        var variables = {
            idejercicio: idejercicio
        };

        ApiActividades.ListActividad11Modu(variables).then(function (data) {

            // console.log(data.data);
            var respuesta = data.data;

            if (idejercicio == 2) $scope.palabras = respuesta;
            if (idejercicio == 3) $scope.palabrasdos = respuesta;
        });
    };

    //guardar actividad actividad 11 modulo 1 C1
    $scope.guardarActividad = function () {

        setTimeout(function () {

            alertify.confirm("Are you sure ?", function () {

                alertify.success('Saved !!');

                for (var i = 0; i < 27; i++) {

                    var tot = i + 1;
                    var song = $('#song_' + tot).val();
                    var explanation = $('#explanation_' + tot).val();
                    var preguntaid = $('#song_' + tot).attr('preguntaid');

                    var variables = {
                        song: song,
                        explanation: explanation,
                        usuid: usu_id,
                        preguntaid: preguntaid
                    };

                    ApiActividades.GuardaActividad11(variables).then(function (data) {

                        // console.log(data.data);

                    });
                }
            }, function () {
                alertify.error('Canceled');
            });
        }, 1000);
    };

    $scope.listarJuegoRoles = function () {
        // console.log("llega")
        ApiActividades.ListJuegoRoles().then(function (data) {

            // console.log(data.data);
            var respuesta = data.data;
            $scope.habitaciones = respuesta;
        });
    };

    // Guardar juego de roles MODULO1 C1 MYCOLOMBIA
    $scope.guardarJuegoRoles = function () {
        $scope.validarCompletartxt();

        setTimeout(function () {

            // alertify.confirm("Are you sure ?",

            // function(){

            //     alertify.success('Saved !!');

            for (var i = 0; i < 8; i++) {

                var tot = i + 1;
                var names = $('#names_' + tot).val();
                var origin = $('#origin_' + tot).val();
                var occupation = $('#occupation_' + tot).val();
                var preguntaid = $('#names_' + tot).attr('preguntaid');

                var variables = {
                    names: names,
                    origin: origin,
                    occupation: occupation,
                    usuid: usu_id,
                    preguntaid: preguntaid

                    // console.log(variables)
                };ApiActividades.guardarJuegoRoles(variables).then(function (data) {

                    // console.log(data.data)
                });
            }
            // },

            // function(){
            //     alertify.error('Canceled');
            // });
        }, 1000);
    };

    // console.log(variables);

    //// Reestablecer ejercicios /////////////
    $scope.reloadClass = function () {
        var clase = 'js-escribir';
        $("." + clase).each(function (indice, campo) {
            $(this).removeClass("mal");
            $(this).removeClass("bien");
            $("." + clase).val('');
        });
    };

    $scope.reloadClassMultiple = function () {
        $(".c-inputRadio").each(function (indice, campo) {
            $(this).removeClass("mal");
            $(this).removeClass("bien");
            $('input[type="radio"]:checked').each(function (indice, campo) {
                $(this).prop('checked', false);
            });
        });
    };

    $scope.reloadDragandDrop = function () {

        $(".drop").each(function (indice, campo) {
            var po = $(this).attr("posicion");
            var aa = $('.drop').eq(po).children('div').attr("valordrag");
            var txtdr = $('.drop').eq(po).children('div').text();
            $('.dragCont').eq(aa).html('<div class="drag drag2" valordrag="' + aa + '">' + txtdr + '</div>');
            $(this).removeClass("mal");
            $(this).removeClass("bien");
            $(this).html('');
            $(this).droppable('enable');

            $(".drag2").draggable(_defineProperty({
                revert: true,
                containment: ".contenedorcentral"
            }, 'revert', function revert(dropped) {
                var $draggable = $(this);
                var hasBeenDroppedBefore = $draggable.data('hasBeenDropped');
                var wasJustDropped = dropped && dropped[0].id == "droppable";
                if (wasJustDropped) {
                    return false;
                } else {
                    if (hasBeenDroppedBefore) {
                        $draggable.remove();
                        return true;
                    } else {
                        return true;
                    }
                }
            }));
        });
    };

    $scope.reloadDragandDropClonable = function () {

        $(".drop").each(function (indice, campo) {
            var po = $(this).attr("posicion");
            var aa = $('.drop').eq(po).children('div').attr("valordrag");
            var txtdr = $('.drop').eq(po).children('div').text();
            $('.dragCont').eq(aa).html('<div class="drag drag2" valordrag="' + aa + '">' + txtdr + '</div>');
            $(this).removeClass("mal");
            $(this).removeClass("bien");
            $(this).html('');

            $(".drag2").draggable(_defineProperty({
                revert: true,
                containment: ".contenedorcentral"
            }, 'revert', function revert(dropped) {
                var $draggable = $(this);
                var hasBeenDroppedBefore = $draggable.data('hasBeenDropped');
                var wasJustDropped = dropped && dropped[0].id == "droppable";
                if (wasJustDropped) {
                    return false;
                } else {
                    if (hasBeenDroppedBefore) {
                        // $draggable.remove();
                        return true;
                    } else {
                        return true;
                    }
                }
            }));
        });
    };

    $scope.reloadDragandDropMultiple = function () {

        $(".drop").each(function (indice, campo) {

            var po = $(this).attr("posicion");
            var aa = $('.drop').eq(po).children('div').attr("valordrag");
            var txtdr = $('.drop').eq(po).children('div').text();
            var rescon = $('.drop').eq(po).children('div').attr("rescon");
            var clasedrag = $('.drop').eq(po).children('div').attr("class");
            $('.dragCont').eq(aa).html('<div class="' + clasedrag + ' drag2" valordrag="' + aa + '" rescon="' + rescon + '">' + txtdr + '</div>');
            $(this).removeClass("mal");
            $(this).removeClass("bien");
            $(this).html('');
            $(this).droppable('enable');

            $(".drag2").draggable(_defineProperty({
                revert: true,
                containment: ".contenedorcentral"
            }, 'revert', function revert(dropped) {
                var $draggable = $(this);
                var hasBeenDroppedBefore = $draggable.data('hasBeenDropped');
                var wasJustDropped = dropped && dropped[0].id == "droppable";
                if (wasJustDropped) {
                    return false;
                } else {
                    if (hasBeenDroppedBefore) {
                        $draggable.remove();
                        return true;
                    } else {
                        return true;
                    }
                }
            }));
        });
    };

    $scope.reloadDragandDropImg = function () {

        $(".drop").each(function (indice, campo) {
            var po = $(this).attr("posicion");
            var aa = $('.drop').eq(po).children('div').attr("valordrag");
            var txtdr = $('.drop').eq(po).children('div').text();
            var rutaimg = $('.drop').eq(po).children('div').children('img').attr('src');
            var claseImg = $('.drop').eq(po).children('div').children('img').attr('class');
            var rescon = $('.drop').eq(po).children('div').attr('rescon');
            $('.dragCont').eq(aa).html('<div class="drag drag2" valordrag="' + aa + '" rescon="' + rescon + '"><img class="' + claseImg + '" src=' + rutaimg + '></div>');
            $(this).removeClass("mal");
            $(this).removeClass("bien");
            $(this).html('');

            $(".drag2").draggable(_defineProperty({
                revert: true,
                containment: ".contenedorcentral"
            }, 'revert', function revert(dropped) {
                var $draggable = $(this);
                var hasBeenDroppedBefore = $draggable.data('hasBeenDropped');
                var wasJustDropped = dropped && dropped[0].id == "droppable";
                if (wasJustDropped) {
                    return false;
                } else {
                    if (hasBeenDroppedBefore) {
                        $draggable.remove();
                        return true;
                    } else {
                        return true;
                    }
                }
            }));
        });
    };

    $scope.reloadCartas = function () {

        $('.flip_card').flip(false);
        $('.flip_card').removeClass('is-good');
        $('.flip_card').removeClass('is-wrong');
        $('.flip_card').removeClass('is-prevDefault');
        $('.flip_card').attr('seleccion', '');
    };

    $scope.reloadSelectOption = function () {

        $('.c-select').each(function (indc, camp) {
            $(this).removeClass("bien");
            $(this).removeClass("mal");
            $(this).val('');
        });

        $('.opc').css('display', 'block');
    };

    $scope.reloadSortable = function () {
        $(".sortreload").sortable('cancel');
        $(".js-sortdrag").removeClass("mal");
        $(".js-sortdrag").removeClass("bien");
    };
    ////////////// Fin /////////////////


    // Jh
    //// Reestablecer ejercicios SELECT _ ESCRIBIR /////////////
    $scope.reloadEscribSelect = function () {

        var classEsc = 'js-escribir';
        var classSelect = 'c-inputRadio';

        $("." + classEsc).each(function (indice, campo) {
            $(this).removeClass("mal");
            $(this).removeClass("bien");
            $("." + classEsc).val('');
        });

        $("." + classSelect).each(function (indice, campo) {
            $(this).removeClass("mal");
            $(this).removeClass("bien");
            $('input[type="radio"]:checked').each(function (indice, campo) {
                $(this).prop('checked', false);
            });
        });
    };

    //// Reestablecer ejercicios SELECT _ ESCRIBIR - DRAG /////////////
    $scope.reloadEscribSelectDrag = function () {

        var classEsc = 'js-escribir';
        var classSelect = 'c-inputRadio';
        var classDrop = 'js-drop';

        $("." + classEsc).each(function (indice, campo) {
            $(this).removeClass("mal");
            $(this).removeClass("bien");
            $("." + classEsc).val('');
        });

        $("." + classSelect).each(function (indice, campo) {
            $(this).removeClass("mal");
            $(this).removeClass("bien");
            $('input[type="radio"]:checked').each(function (indice, campo) {
                $(this).prop('checked', false);
            });
        });

        $("." + classDrop).each(function (indice, campo) {

            var po = $(this).attr("posicion");
            var aa = $('.drop').eq(po).children('div').attr("valordrag");
            var txtdr = $('.drop').eq(po).children('div').text();
            var rescon = $('.drop').eq(po).children('div').attr("rescon");
            var clasedrag = $('.drop').eq(po).children('div').attr("class");
            $('.dragCont').eq(aa).html('<div class="' + clasedrag + ' drag2" valordrag="' + aa + '" rescon="' + rescon + '">' + txtdr + '</div>');
            $(this).removeClass("mal");
            $(this).removeClass("bien");
            $(this).html('');

            $(".drag2").draggable(_defineProperty({
                revert: true,
                containment: ".contenedorcentral"
            }, 'revert', function revert(dropped) {
                var $draggable = $(this);
                var hasBeenDroppedBefore = $draggable.data('hasBeenDropped');
                var wasJustDropped = dropped && dropped[0].id == "droppable";
                if (wasJustDropped) {
                    return false;
                } else {
                    if (hasBeenDroppedBefore) {
                        $draggable.remove();
                        return true;
                    } else {
                        return true;
                    }
                }
            }));
        });
    };

    // Funciones Generales
    $scope.guardarRecord = function (aud_titulo, audio_id) {

        var audio_file = audio_id == 1 ? $('#recorded-audio-mainAudio').attr('src') : audio_id == 2 ? $('#recorded-audio-mainAudio2').attr('src') : audio_id == 3 ? $('#recorded-audio-mainAudio3').attr('src') : audio_id == 4 ? $('#recorded-audio-mainAudio4').attr('src') : audio_id == 5 ? $('#recorded-audio-mainAudio5').attr('src') : audio_id == 6 ? $('#recorded-audio-mainAudio6').attr('src') : audio_id == 7 ? $('#recorded-audio-mainAudio7').attr('src') : audio_id == 8 ? $('#recorded-audio-mainAudio8').attr('src') : audio_id == 9 ? $('#recorded-audio-mainAudio9').attr('src') : audio_id == 10 ? $('#recorded-audio-mainAudio10').attr('src') : '';

        // var audio_file = $('#recorded-audio-mainAudio').attr('src');

        ApiActividades.ListarPreguntasGen(variables).then(function (data) {

            var nivel;
            var respuesta = data.data;
            var preguntaid = respuesta[0].id;
            if (nivel_id == 4) {
                nivel = 'B2';
            }
            if (nivel_id == 5) {
                nivel = 'C1';
            }
            funcionesGeneral.grabarAudio(preguntaid, usu_id, audio_file, aud_titulo, nivel).success(function (resaudio) {});
        });
    };

    $scope.validarCompletartxt = function () {

        var clase = 'js-escribir';

        alertify.confirm("Are you sure ?", function () {

            ApiActividades.ListarPreguntasGen(variables).then(function (data) {

                // console.log(data.data);
                var respuesta = data.data;

                var arreglodos = void 0;
                var arreglotres = void 0;
                var arreglo = respuesta[0].respuestas.split("|");
                var cantPregunta = respuesta[0].cantidad_pre;
                var preguntaid = respuesta[0].id;
                var categoriaid = respuesta[0].categoria_id;

                if (respuesta[0].respuestas_dos != null) {
                    arreglodos = respuesta[0].respuestas_dos.split("|");
                } else {
                    arreglodos = respuesta[0].respuestas.split("|");
                }

                if (respuesta[0].respuestas_tres != null) {
                    arreglotres = respuesta[0].respuestas_tres.split("|");
                } else {
                    arreglotres = respuesta[0].respuestas.split("|");
                }

                funcionesGeneral.completarTexto(arreglo, arreglodos, arreglotres, cantPregunta, preguntaid, categoriaid, usu_id, clase);
            });
        }, function () {
            alertify.error('Canceled');
        });
    };

    $scope.validarCompletartxtB2_U2_M8_ACT14 = function () {

        var clase = 'js-escribir';

        alertify.confirm("Are you sure ?", function () {

            ApiActividades.ListarPreguntasGen(variables).then(function (data) {

                // console.log(data.data);
                var respuesta = data.data;
                var arreglo1 = ['nice', 'nice', 'nice', 'excellent', 'excellent', 'excellent', 'horrible', 'horrible', 'horrible'];
                var arreglo2 = ['lovely', 'lovely', 'lovely', 'warm', 'warm', 'warm', 'very loud', 'very loud', 'very loud'];
                var arreglo3 = ['delicious', 'delicious', 'delicious', 'helpful', 'helpful', 'helpful', 'average', 'average', 'average'];
                var arreglo4 = ['too sweet', 'too sweet', 'too sweet', 'good', 'good', 'good', 'tasty', 'tasty', 'tasty'];
                var arreglo5 = ['cold', 'cold', 'cold', 'interesting', 'interesting', 'interesting', 'too sour', 'too sour', 'too sour'];
                var arreglo6 = ['relaxing', 'relaxing', 'relaxing', 'delicious', 'delicious', 'delicious', 'not expensive', 'not expensive', 'not expensive'];
                var arreglo7 = ['quite good', 'quite good', 'quite good', 'nice', 'nice', 'nice', 'not great', 'not great', 'not great', 'not great'];
                var arreglo8 = ['good', 'good', 'good', 'black and white', 'black and white', 'black and white', 'not great', 'not great', 'not great'];
                var arreglo9 = ['enjoyable', 'enjoyable', 'enjoyable', 'famous', 'famous', 'famous', 'not great', 'not great', 'not great'];
                var arreglo10 = ['enjoyable', 'enjoyable', 'enjoyable', 'not cheap', 'not cheap', 'not cheap', 'not great', 'not great', 'not great'];
                var arreglo11 = ['enjoyable', 'enjoyable', 'enjoyable', 'not expensive', 'not expensive', 'not expensive', 'not great', 'not great', 'not great'];

                var cantPregunta = respuesta[0].cantidad_pre;
                var preguntaid = respuesta[0].id;
                var categoriaid = respuesta[0].categoria_id;

                funcionesGeneral.completarTextoAct14(arreglo1, arreglo2, arreglo3, arreglo4, arreglo5, arreglo6, arreglo7, arreglo8, arreglo9, arreglo10, arreglo11, cantPregunta, preguntaid, categoriaid, usu_id, clase);
            });
        }, function () {
            alertify.error('Canceled');
        });
    };

    $scope.unirColumnasFuncion = function () {

        ApiActividades.ListarPreguntasGen(variables).then(function (data) {

            // console.log(data.data);
            var respuesta = data.data;

            var cantPregunta = respuesta[0].cantidad_pre;
            var preguntaid = respuesta[0].id;
            funcionesGeneral.unirColumnas(cantPregunta, preguntaid, usu_id);
        });
    };

    // JH***********************************
    $scope.unirColumnasEscrFuncion = function () {

        ApiActividades.ListarPreguntasGen(variables).then(function (data) {

            // console.log(data.data);
            var respuesta = data.data;

            var arreglo = respuesta[0].respuestas.split("|");
            var cantPregunta = respuesta[0].cantidad_pre;
            var preguntaid = respuesta[0].id;
            var categoriaid = respuesta[0].categoria_id;
            funcionesGeneral.unirColumnasEsc(arreglo, cantPregunta, preguntaid, categoriaid, usu_id);
        });
    };

    $scope.unirColumnasDragFuncion = function () {

        ApiActividades.ListarPreguntasGen(variables).then(function (data) {

            // console.log(data.data);
            var respuesta = data.data;

            var arreglo = respuesta[0].respuestas.split("|");
            var cantPregunta = respuesta[0].cantidad_pre;
            var preguntaid = respuesta[0].id;
            var categoriaid = respuesta[0].categoria_id;
            funcionesGeneral.unirColumnasDrag(arreglo, cantPregunta, preguntaid, categoriaid, usu_id);
        });
    };

    $scope.seleccionMulti = function () {

        alertify.confirm("Are you sure ?", function () {

            ApiActividades.ListarPreguntasGen(variables).then(function (data) {

                // console.log(data.data);
                var respuesta = data.data;

                var arreglo = respuesta[0].respuestas.split("|");
                var cantPregunta = respuesta[0].cantidad_pre;
                var preguntaid = respuesta[0].id;
                var categoriaid = respuesta[0].categoria_id;

                funcionesGeneral.seleccion(arreglo, cantPregunta, preguntaid, categoriaid, usu_id);
            });
        }, function () {
            alertify.error('Canceled');
        });
    };

    $scope.seleccionMultiSelf = function (val) {

        alertify.confirm("Are you sure ?", function () {

            ApiActividades.ListarPreguntasGen(variables).then(function (data) {

                // console.log(data.data);
                var respuesta = data.data;

                var arreglo = respuesta[0].respuestas.split("|");
                var cantPregunta = respuesta[0].cantidad_pre;
                var preguntaid = respuesta[0].id;
                var categoriaid = respuesta[0].categoria_id;

                funcionesGeneral.seleccionSelf(arreglo, cantPregunta, preguntaid, categoriaid, usu_id, val);
            });
        }, function () {
            alertify.error('Canceled');
        });
    };

    $scope.DragandDrop = function () {

        ApiActividades.ListarPreguntasGen(variables).then(function (data) {

            // console.log(data.data);
            var respuesta = data.data;

            var arreglodos = void 0;
            var arreglo = respuesta[0].respuestas.split("|");
            // console.log(arreglo);
            var cantPregunta = respuesta[0].cantidad_pre;
            var preguntaid = respuesta[0].id;
            var categoriaid = respuesta[0].categoria_id;

            if (respuesta[0].respuestas_dos != null) {
                arreglodos = respuesta[0].respuestas_dos.split("|");
            } else {
                arreglodos = respuesta[0].respuestas.split("|");
            }

            funcionesGeneral.draganddrop(arreglo, arreglodos, cantPregunta, preguntaid, categoriaid, usu_id);
        });
    };

    $scope.DragandDropImg = function () {

        ApiActividades.ListarPreguntasGen(variables).then(function (data) {

            // console.log(data.data);
            var respuesta = data.data;
            var arreglodos = void 0;
            var arreglo = respuesta[0].respuestas.split("|");
            var cantPregunta = respuesta[0].cantidad_pre;
            var preguntaid = respuesta[0].id;
            var categoriaid = respuesta[0].categoria_id;

            if (respuesta[0].respuestas_dos != null) {
                arreglodos = respuesta[0].respuestas_dos.split("|");
            } else {
                arreglodos = respuesta[0].respuestas.split("|");
            }

            funcionesGeneral.draganddropImg(arreglo, arreglodos, cantPregunta, preguntaid, categoriaid, usu_id);
        });
    };

    $scope.DragandDropMultiple = function () {

        ApiActividades.ListarPreguntasGen(variables).then(function (data) {

            // console.log(data.data);
            var respuesta = data.data;

            var arreglodos = void 0;
            var arreglo = respuesta[0].respuestas.split("|");
            var cantPregunta = respuesta[0].cantidad_pre;
            var preguntaid = respuesta[0].id;
            var categoriaid = respuesta[0].categoria_id;
            if (respuesta[0].respuestas_dos != null) {
                arreglodos = respuesta[0].respuestas_dos.split("|");
            } else {
                arreglodos = respuesta[0].respuestas.split("|");
            }
            funcionesGeneral.draganddropmultiple(arreglo, arreglodos, cantPregunta, preguntaid, categoriaid, usu_id);
        });
    };

    $scope.DragandDropClonable = function () {

        ApiActividades.ListarPreguntasGen(variables).then(function (data) {

            // console.log(data.data);
            var respuesta = data.data;

            var arreglodos = void 0;
            var arreglotres = void 0;
            var arreglo = respuesta[0].respuestas.split("|");
            var cantPregunta = respuesta[0].cantidad_pre;
            var preguntaid = respuesta[0].id;
            var categoriaid = respuesta[0].categoria_id;

            if (respuesta[0].respuestas_dos != null) {
                arreglodos = respuesta[0].respuestas_dos.split("|");
            } else {
                arreglodos = respuesta[0].respuestas.split("|");
            }

            if (respuesta[0].respuestas_tres != null) {
                arreglotres = respuesta[0].respuestas_tres.split("|");
            } else {
                arreglotres = respuesta[0].respuestas.split("|");
            }

            funcionesGeneral.draganddropclonable(arreglo, arreglodos, arreglotres, cantPregunta, preguntaid, categoriaid, usu_id);
        });
    };

    $scope.enviarTexto = function () {

        var textousu = $scope.textousuario;

        if (textousu == '' || textousu == null || textousu == undefined) {
            alertify.warning('There is no text');
        } else {

            alertify.confirm("Are you sure you want to send the text?", function () {

                ApiActividades.ListarPreguntasGen(variables).then(function (data) {

                    // console.log(data.data);
                    var respuesta = data.data;

                    var preguntaid = respuesta[0].id;
                    funcionesGeneral.enviotexto(preguntaid, textousu, usu_id);
                });
            }, function () {
                alertify.error('Canceled');
            });
        }
    };

    $scope.enviarTextoMultiple = function () {

        var textousu = $scope.textousuario;
        var textousub = $scope.textousuariob;
        var textousuc = $scope.textousuarioc;
        var textousud = $scope.textousuariod;
        var textousue = $scope.textousuarioe;
        var textousuf = $scope.textousuariof;
        var textousug = $scope.textousuariog;

        alertify.confirm("Are you sure you want to send the text?", function () {

            ApiActividades.ListarPreguntasGen(variables).then(function (data) {

                // console.log(data.data);
                var respuesta = data.data;

                var preguntaid = respuesta[0].id;
                funcionesGeneral.enviotextomultiple(preguntaid, textousu, textousub, textousuc, textousud, textousue, textousuf, textousug, usu_id);
            });
        }, function () {
            alertify.error('Canceled');
        });
    };

    $scope.girarCartas = function () {

        $(document).ready(function () {

            $(".flip_card").flip({
                axis: 'y',
                trigger: 'manual',
                reverse: true
            });
        });

        ApiActividades.ListarPreguntasGen(variables).then(function (data) {

            // console.log(data.data);
            var respuesta = data.data;

            if (respuesta == '') {
                // console.log(respuesta)
                respuesta = [{
                    'cantidad_pre': 0,
                    'id': 0
                }];
            }

            var cantPregunta = respuesta[0].cantidad_pre;
            var preguntaid = respuesta[0].id;
            funcionesGeneral.girarcartas(cantPregunta, preguntaid, usu_id);
        });
    };

    $scope.selectOption = function () {

        alertify.confirm("Are you sure ?", function () {

            ApiActividades.ListarPreguntasGen(variables).then(function (data) {

                // console.log(data.data);
                var respuesta = data.data;

                var arreglo = respuesta[0].respuestas.split("|");
                var cantPregunta = respuesta[0].cantidad_pre;
                var preguntaid = respuesta[0].id;
                var categoriaid = respuesta[0].categoria_id;
                funcionesGeneral.selectoption(arreglo, cantPregunta, preguntaid, categoriaid, usu_id);
            });
        }, function () {
            alertify.error('Canceled');
        });
    };

    $scope.sortable = function () {

        alertify.confirm("Are you sure ?", function () {

            ApiActividades.ListarPreguntasGen(variables).then(function (data) {

                // console.log(data.data);
                var respuesta = data.data;

                var arreglodos = void 0;
                var arreglo = respuesta[0].respuestas.split("|");
                var cantPregunta = respuesta[0].cantidad_pre;
                var preguntaid = respuesta[0].id;
                var categoriaid = respuesta[0].categoria_id;

                if (respuesta[0].respuestas_dos != null) {
                    arreglodos = respuesta[0].respuestas_dos.split("|");
                } else {
                    arreglodos = respuesta[0].respuestas.split("|");
                }

                funcionesGeneral.sortable(arreglo, arreglodos, cantPregunta, preguntaid, categoriaid, usu_id);
            });
        }, function () {
            alertify.error('Canceled');
        });
    };

    $scope.JuegoCompletartxt = function () {

        ApiActividades.ListarPreguntasGen(variables).then(function (data) {

            // console.log(data.data);
            var respuesta = data.data;

            var arreglo = respuesta[0].respuestas.split("|");
            funcionesGeneral.juegocompletarTexto(arreglo);
        });
    };

    $scope.validarPorcentaje = function () {

        ApiActividades.ValidaPorcentaje(variables).then(function (data) {

            // console.log(data.data);

        });
    };

    $scope.validarPorcentaje();

    // funcion ahorcado
    $scope.juegoHangman = function (aRta, nom) {

        // Jquery Como dependencia
        var inicio = 1,
            name_game = 'game__hangman',
            name_instruccion = 'instruccion',
            name_pista = 'pista',
            name_frase = 'phrase',
            name_palabra = 'Word',
            name_letra = 'letter',
            name_espacio = 'space',
            name_tecla = 'key',
            name_reset = 'reset',
            elm_reset = $('.js-' + name_game + '--' + name_reset),
            elm_tecla = $('.js-' + name_game + '--' + name_tecla),
            elm_instruccion = $('.' + name_game + '--' + name_instruccion),
            elm_pista = $('.' + name_game + '--' + name_pista),
            elm_frase = $('.' + name_game + '--' + name_frase),
            elm_palabra = $('.' + name_game + '--' + name_palabra),
            elm_letra = $('.' + name_game + '--' + name_letra),
            calcular = 0,
            perdiste = 0,
            iniciar = function iniciar(a) {

            var texto_elm_pista = elm_pista;
            texto_elm_pista.text(aRta[a][1]);

            elm_instruccion.empty();
            elm_instruccion.append(texto_elm_pista);
            elm_frase.empty();

            for (var i = 0; i < aRta[a][0].length; i++) {

                var casilla = $('<div>');

                casilla.addClass(name_game + '--' + name_letra).attr('id', name_letra + '_' + i);

                if (aRta[a][0].charAt(i) === ' ') {
                    casilla.addClass(name_game + '--' + name_espacio);
                    calcular++;
                }

                elm_frase.append(casilla);
            };

            $('.game__hangman--scoreContar').text(inicio);
        },
            pulsarTecla = function pulsarTecla() {
            //console.log($(this).text().toLowerCase());

            var temp = 0;
            for (var i = 0; i < aRta[inicio][0].length; i++) {
                if (aRta[inicio][0].charAt(i).toLowerCase() === $(this).text().toLowerCase()) {
                    $('#letter_' + i).text($(this).text().toLowerCase());
                    temp++;
                }
            }

            $(this).addClass('is-prevDefault');

            if (temp === 0) {

                perdiste++;

                $('.lingote_' + perdiste).hide();
                $(this).addClass('mal');

                // Maximo Intentos
                if (perdiste === 6) {

                    alert('Sorry try again');

                    elm_tecla.removeClass('is-prevDefault');
                    elm_tecla.removeClass('mal');
                    elm_tecla.removeClass('bien');
                    $('.game__hangman--Img').show();
                    elm_tecla.prop("disabled", false);

                    calcular = 0;
                    perdiste = 0;
                    iniciar(inicio);
                }
            } else {

                calcular = calcular + temp;
                $(this).addClass('bien');

                if (calcular === aRta[inicio][0].length) {

                    alertify.confirm("Very well, keep it up", function () {

                        elm_tecla.removeClass('is-prevDefault');
                        elm_tecla.removeClass('mal');
                        elm_tecla.removeClass('bien');
                        $('.game__hangman--Img').show();
                        elm_tecla.prop("disabled", false);

                        calcular = 0;
                        perdiste = 0;
                        inicio++;

                        if (inicio > nom) {
                            alertify.success('Congratulations, you have completed all');
                        } else {
                            iniciar(inicio);
                        }
                    }, function () {
                        return alertify.error('Canceled', reset());
                    });
                }
            }
        },
            reset = function reset() {

            elm_tecla.removeClass('is-prevDefault');
            elm_tecla.removeClass('mal');
            elm_tecla.removeClass('bien');
            $('.game__hangman--Img').show();
            elm_tecla.prop("disabled", false);

            calcular = 0;
            perdiste = 0;
            inicio = 1;

            iniciar(inicio);
            alertify.error('the game hangman is reset');
        };

        elm_tecla.click(pulsarTecla);
        elm_reset.click(reset);
        iniciar(inicio);
    };
    // End funcion ahorcado

    // Jh
    // *****************************************************************

    // Funcion unidad - Completar texto y selección multiple

    $scope.CompTxt_SelectMult = function (tipoAct) {

        var classEsc = 'js-escribir';
        var classSel = 'js-select';

        alertify.confirm("Are you sure ?", function () {

            ApiActividades.ListarPreguntasGen(variables).then(function (data) {

                // console.log(data.data);
                var respuesta = data.data;

                var arreglodos = void 0;
                var arreglotres = void 0;
                var arreglo = respuesta[0].respuestas.split("|");
                var cantPregunta = respuesta[0].cantidad_pre;
                var preguntaid = respuesta[0].id;
                var categoriaid = respuesta[0].categoria_id;

                if (respuesta[0].respuestas_dos != null) {
                    arreglodos = respuesta[0].respuestas_dos.split("|");
                } else {
                    arreglodos = respuesta[0].respuestas.split("|");
                }

                if (respuesta[0].respuestas_tres != null) {
                    arreglotres = respuesta[0].respuestas_tres.split("|");
                } else {
                    arreglotres = respuesta[0].respuestas.split("|");
                }

                funcionesGeneral.compTextSeleccion(arreglo, arreglodos, arreglotres, cantPregunta, preguntaid, categoriaid, usu_id, classEsc, classSel);
            });
        }, function () {
            alertify.error('Canceled');
        });
    };

    // Funcion unidad - Completar texto y selección multiple - DRAG

    $scope.CompTxt_SelectMult_Drag = function (tipoAct) {

        var classEsc = 'js-escribir';
        var classSel = 'js-select';
        var classDrop = 'js-drop';

        ApiActividades.ListarPreguntasGen(variables).then(function (data) {

            // console.log(data.data);
            var respuesta = data.data;

            var arreglodos = void 0;
            var arreglo = respuesta[0].respuestas.split("|");
            var cantPregunta = respuesta[0].cantidad_pre;
            var preguntaid = respuesta[0].id;
            var categoriaid = respuesta[0].categoria_id;

            if (respuesta[0].respuestas_dos != null) {
                arreglodos = respuesta[0].respuestas_dos.split("|");
            } else {
                arreglodos = respuesta[0].respuestas.split("|");
            }

            funcionesGeneral.compTextSeleccionDrag(arreglo, arreglodos, cantPregunta, preguntaid, categoriaid, usu_id, classEsc, classSel, classDrop);
        });
    };

    $scope.MostrarIframe = function () {

        ApiActividades.ListarPreguntasGen(variables).then(function (data) {

            // console.log(data.data);
            var respuesta = data.data;
            var preguntaid = respuesta[0].id;

            funcionesGeneral.MostrarIframe(preguntaid, usu_id).then(function (data) {

                var respuesta2 = data.data;
                if (respuesta2 == '' || respuesta2 == null || respuesta2 == 'null' || respuesta2 === 'undefined') {} else {
                    $scope.veriframe = respuesta2[0].iframe_video;
                    // console.log($scope.veriframe)
                }
            });
        });
    };

    $scope.UploadIframe = function () {

        alertify.confirm("Are you sure ?", function () {

            ApiActividades.ListarPreguntasGen(variables).then(function (data) {

                // console.log(data.data);
                var respuesta = data.data;
                var preguntaid = respuesta[0].id;
                var iframevideo = $scope.iframevideo;

                funcionesGeneral.UploadIframe(iframevideo, preguntaid, usu_id);
                $scope.MostrarIframe();
            });
        }, function () {
            alertify.error('Canceled');
        });
    };

    $scope.ListPowerPointAct4MyCol = function (mod_id) {

        if (mod_id == 4) {

            var parametros = {
                usu_id: usu_id
            };

            // console.log(parametros);

            ApiAdmin.ListPowerPoint(parametros).then(function (data) {

                // console.log(data.data);
                var res = data.data;

                if (res == '') {
                    // console.log('No ha subido el power Point');
                    $scope.NoPoint = true;
                    $scope.OkPoint = false;
                } else {
                    $scope.NoPoint = false;
                    $scope.OkPoint = true;
                    $scope.powerpoint = res;
                }
            });
        } else {
            // console.log('Este MODULO No tiene esta actividad');
        }
    };

    $scope.NewDoc = function () {

        var nomDoc = $('#documentos').val();
        var ext_Doc = nomDoc.substr(-3);
        var preguntaid, nivel;

        ApiActividades.ListarPreguntasGen(variables).then(function (data) {

            // console.log(data.data);
            var respuesta = data.data;
            preguntaid = respuesta[0].id;
            if (nivel_id == 4) {
                nivel = 'B2';
            }
            if (nivel_id == 5) {
                nivel = 'C1';
            }
        });

        if (nomDoc == '') {

            alertify.warning("<b>Alert!</b> You must upload a PowerPoint document");
        } else if (ext_Doc === 'ppt' || ext_Doc === 'ptx') {

            alertify.confirm("Do you want to send the document?", function () {

                $scope.importFileDoc = true;

                nivel_id;
                var formData = new FormData(document.getElementById("formdata"));
                formData.append('usu_id', usu_id);
                formData.append('preguntaid', preguntaid);
                formData.append('nivel_id', nivel);

                $.ajax({
                    url: rest + 'api/Registros/InsertFile',
                    type: "post",
                    dataType: "html",
                    data: formData,
                    cache: false,
                    contentType: false,
                    processData: false
                }).done(function (res) {

                    var resconfig = res;
                    // console.log(resconfig);

                    if (resconfig == 1) {
                        alertify.success('Saved !!');
                        $scope.importFileDoc = false;
                    }

                    if (resconfig == 2) {
                        alertify.success('Updated !!');
                        $scope.importFileDoc = false;
                    }
                }); //end done
            }, function () {
                alertify.error('Canceled');
            });
        } else {
            alertify.error("<b>Alert!</b> It must be a power point file");
        }
    };

    $scope.FuncionFormMod10_mycol1 = function (idtext) {

        $(".textg" + idtext).keyup(function () {
            var result = [];
            $(".textg" + idtext).each(function (index, key) {
                result[index] = $(".textg" + idtext).eq(index).val().toString().replace(",", " ");
            });
            $("#grupo" + idtext).val(result);
        });
    };

    $scope.EnviarFormMod10_mycol1 = function () {

        var textousu = $('#grupo2').val();
        var textousub = $('#grupo3').val();
        var textousuc = $('#grupo4').val();
        var textousud = $('#grupo5').val();
        var textousue = $('#grupo6').val();
        var textousuf = '';

        if (textousu == '' || textousub == '' || textousuc == '' || textousud == '' || textousue == '') {
            alertify.error('There is no text');
        } else {
            alertify.confirm("Are you sure you want to send the text?", function () {

                ApiActividades.ListarPreguntasGen(variables).then(function (data) {

                    // console.log(data.data);
                    var respuesta = data.data;

                    var preguntaid = respuesta[0].id;
                    funcionesGeneral.enviotextomultiple(preguntaid, textousu, textousub, textousuc, textousud, textousue, textousuf, usu_id);
                });
            }, function () {
                alertify.error('Canceled');
            });
        }
    };

    $scope.ListarGrupoForo = function () {

        funcionesGeneral.ListarGrupoForo(usu_id).then(function (data) {
            var respuesta = data.data;
            $scope.grupodocente = data.data;
            $scope.nomdocente = respuesta[0].nomdocente;
            $scope.apedocente = respuesta[0].apedocente;
            // console.log(data.data)
        });
    };
    $scope.FuncionForos = function () {
        $scope.EstadoForos();
        $scope.ListarGrupoForo();
        $scope.loadForo = true;

        ApiActividades.ListarPreguntasGen(variables).then(function (data) {

            var respuesta = data.data;
            var preguntaid = respuesta[0].id;

            funcionesGeneral.ForosGrupo(preguntaid, usu_id).then(function (data) {
                var respuesta2 = data.data;
                $scope.tema = respuesta2[0].tema;
                $scope.respforo = data.data;
                $scope.loadForo = false;
            });
        });
    };

    $scope.EnviarForo = function () {
        ApiActividades.ListarPreguntasGen(variables).then(function (data) {

            var respuesta = data.data;
            var preguntaid = respuesta[0].id;
            var textoforo = $('.c-foro__text-box').val();

            if (textoforo == '' || textoforo == null || textoforo == 'null') {} else {

                funcionesGeneral.EnviarForoUser(preguntaid, usu_id, textoforo).then(function (data) {
                    $scope.FuncionForos();
                });
                $('.c-foro__text-box').val('');
            }
        });
    };

    $scope.EstadoForos = function () {

        ApiActividades.ListarPreguntasGen(variables).then(function (data) {
            var respuesta = data.data;
            var preguntaid = respuesta[0].id;

            funcionesGeneral.EstadoForoGrupo(preguntaid, usu_id).then(function (data) {

                var respuesta = data.data;
                if (respuesta == '') {} else {
                    var estadovisual = respuesta[0].estado_visual;
                    var estadocomentario = respuesta[0].estado_comentario;

                    if (estadovisual == 0) {
                        $scope.mensajeinactivo = true;
                    } else {
                        $scope.mensajeinactivo = false;
                        $scope.foroactivo = true;
                    }

                    if (estadocomentario == 1) {
                        $scope.comentarioforo = true;
                    } else {
                        $scope.comentarioforo = false;
                    }
                }
            });
        });
    };

    $scope.ContadorPalabras = function (numeropalabras) {
        $scope.limitePalabras = ' / ' + numeropalabras;
        $scope.enviarMensaje_minPalabras = false;

        $(document).ready(function () {
            $('.campo').keyup(function () {
                $(this).val(limitar_palabras($(this).val(), numeropalabras));
            });
        });
        function limitar_palabras(texto, limite) {
            var palabras = texto.split(/\b[\s,\.\-:;]*/, limite);
            // texto=palabras.join(" ");
            var total = palabras.length;
            $("#contador").html(total + " ");

            if (total >= numeropalabras) {
                $scope.enviarMensaje_minPalabras = true;
            } else if (total < numeropalabras) {
                $scope.enviarMensaje_minPalabras = false;
            }
            return texto;
        }
    };

    $scope.ContadorPalabras2 = function (numeropalabras) {
        $scope.limitePalabras2 = ' / ' + numeropalabras;
        $scope.enviarMensaje_minPalabras = false;

        $(document).ready(function () {
            $('.campo2').keyup(function () {
                $(this).val(limitar_palabras($(this).val(), numeropalabras));
            });
        });
        function limitar_palabras(texto, limite) {
            var palabras = texto.split(/\b[\s,\.\-:;]*/, limite);
            // texto=palabras.join(" ");
            var total = palabras.length;
            $("#contador2").html(total + " ");

            if (total < numeropalabras) {
                // $("#alertamensaje").html(" Minimum "+numeropalabras+" words.")
            } else {
                    //$("#alertamensaje").html("")
                }
            return texto;
        }
    };

    $scope.validarListadoSelect = function () {

        var opciones = '.c-select';

        $(opciones).each(function (index, val) {

            var option = $('option:selected', this).attr('data');
            // console.log(option)

            if (option != null) {
                if (option == 1) {
                    $('.opc1').css('display', 'none');
                }
                if (option == 2) {
                    $('.opc2').css('display', 'none');
                }
                if (option == 3) {
                    $('.opc3').css('display', 'none');
                }
                if (option == 4) {
                    $('.opc4').css('display', 'none');
                }
                if (option == 5) {
                    $('.opc5').css('display', 'none');
                }
                if (option == 6) {
                    $('.opc6').css('display', 'none');
                }
                if (option == 7) {
                    $('.opc7').css('display', 'none');
                }
                if (option == 8) {
                    $('.opc8').css('display', 'none');
                }
            }
        });
    };
}]); //End controller