'use strict';

function _defineProperty(obj, key, value) { if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }

// Factorias **************************************************************************
// ************************************************************************************

// UNIDADES - MODULOS
app.factory('ApiUnidades', function ($http) {

    var ApiRequest = {

        ListUnidades: function ListUnidades(variables) {
            return $http.post(rest + 'api/User/ListarUnidades', variables).success(function (data) {
                return data;
            }).error(function (err) {
                console.log(err);
            });
        },

        ListModulos: function ListModulos(variables) {
            return $http.post(rest + 'api/User/ListarModulos', variables).success(function (data) {
                return data;
            }).error(function (err) {
                console.log(err);
            });
        }

    };

    return ApiRequest;
});

// MENU - HEADER - FOOTER
app.factory('ApiStatic', function ($http) {

    var ApiRequestStatic = {

        ValidUrl: function ValidUrl(variables) {
            return $http.post(rest + 'api/Static/Url', variables).success(function (data) {
                return data;
            }).error(function (err) {
                console.log(err);
            });
        },

        MenuUser: function MenuUser(variables) {
            return $http.post(rest + 'api/Static/MenuUser', variables).success(function (data) {
                return data;
            }).error(function (err) {
                console.log(err);
            });
        },

        ListTitulo: function ListTitulo(variables) {
            return $http.post(rest + 'api/Static/ListTitulo', variables).success(function (data) {
                return data;
            }).error(function (err) {
                console.log(err);
            });
        },

        ViewNotifUser: function ViewNotifUser(variables) {
            return $http.post(rest + 'api/Static/ViewNotif', variables).success(function (data) {
                return data;
            }).error(function (err) {
                console.log(err);
            });
        },

        ListFooter: function ListFooter(variables) {
            return $http.post(rest + 'api/Static/ListarFooter', variables).success(function (data) {
                return data;
            }).error(function (err) {
                console.log(err);
            });
        },

        ListModulosFooter: function ListModulosFooter(variables) {
            return $http.post(rest + 'api/Static/ListarModulosFooter', variables).success(function (data) {
                return data;
            }).error(function (err) {
                console.log(err);
            });
        },

        ListChatUser: function ListChatUser(variables) {
            return $http.post(rest + 'api/Static/ChatUser', variables).success(function (data) {
                return data;
            }).error(function (err) {
                console.log(err);
            });
        },

        SendChat: function SendChat(variables) {
            return $http.post(rest + 'api/Static/SendChat', variables).success(function (data) {
                return data;
            }).error(function (err) {
                console.log(err);
            });
        },

        ObjectModules: function ObjectModules(variables) {
            return $http.post(rest + 'api/Static/ObjectModules', variables).success(function (data) {
                return data;
            }).error(function (err) {
                console.log(err);
            });
        }

    };

    return ApiRequestStatic;
});

// PERFIL DE USUARIO
app.factory('ApiUserPerfil', function ($http) {

    var ApiRequest = {

        ListPorcentajesMod: function ListPorcentajesMod(variables) {
            return $http.post(rest + 'api/PerfilUser/PorcentajeModulos', variables).success(function (data) {
                return data;
            }).error(function (err) {
                console.log(err);
            });
        },

        EstadisticaPerf: function EstadisticaPerf(variables) {
            return $http.post(rest + 'api/PerfilUser/EstadisticaPerfilUser', variables).success(function (data) {
                return data;
            }).error(function (err) {
                console.log(err);
            });
        },

        ListNotifUser: function ListNotifUser(variables) {
            return $http.post(rest + 'api/PerfilUser/ListNotifUsuer', variables).success(function (data) {
                return data;
            }).error(function (err) {
                console.log(err);
            });
        },

        VerNotifUser: function VerNotifUser(variables) {
            return $http.post(rest + 'api/PerfilUser/VerNotifUser', variables).success(function (data) {
                return data;
            }).error(function (err) {
                console.log(err);
            });
        },

        ProgressActividades: function ProgressActividades(variables) {
            return $http.post(rest + 'api/PerfilUser/ProgresoActividad', variables).success(function (data) {
                return data;
            }).error(function (err) {
                console.log(err);
            });
        },

        ProgressActividadesWr: function ProgressActividadesWr(variables) {
            return $http.post(rest + 'api/PerfilUser/ProgresoActividadWr', variables).success(function (data) {
                return data;
            }).error(function (err) {
                console.log(err);
            });
        },

        ProgressActividadesSp: function ProgressActividadesSp(variables) {
            return $http.post(rest + 'api/PerfilUser/ProgresoActividadSp', variables).success(function (data) {
                return data;
            }).error(function (err) {
                console.log(err);
            });
        },

        ListActividades: function ListActividades(variables) {
            return $http.post(rest + 'api/PerfilUser/ListarActividades', variables).success(function (data) {
                return data;
            }).error(function (err) {
                console.log(err);
            });
        },

        ListExpresiones: function ListExpresiones(variables) {
            return $http.post(rest + 'api/PerfilUser/ListarExpresiones', variables).success(function (data) {
                return data;
            }).error(function (err) {
                console.log(err);
            });
        },

        listarJuegoRolesPerfil: function listarJuegoRolesPerfil(variables) {
            return $http.post(rest + 'api/PerfilUser/listarJuegoRolesPerfil', variables).success(function (data) {
                return data;
            }).error(function (err) {
                console.log(err);
            });
        },

        ListVideoiframe: function ListVideoiframe(variables) {
            return $http.post(rest + 'api/PerfilUser/ListarIframeUser', variables).success(function (data) {
                return data;
            }).error(function (err) {
                console.log(err);
            });
        },

        ListPowerPoint: function ListPowerPoint(variables) {
            return $http.post(rest + '/api/Admin/Preguntas/ListPowerPoint', variables).success(function (data) {
                return data;
            }).error(function (err) {
                console.log(err);
            });
        }

    };

    return ApiRequest;
});

// ACTIVIDADES
app.factory('ApiActividades', function ($http) {

    var ApiRequest = {

        ListExpresiones: function ListExpresiones() {
            return $http.get(rest + 'api/Activities/ListExpresiones').success(function (data) {
                return data;
            }).error(function (err) {
                console.log(err);
            });
        },

        GuardaExpresiones: function GuardaExpresiones(variables) {
            return $http.post(rest + 'api/Activities/GuardarExpresiones', variables).success(function (data) {
                return data;
            }).error(function (err) {
                console.log(err);
            });
        },

        ListActividad11Modu: function ListActividad11Modu(variables) {
            return $http.post(rest + 'api/Activities/ListarAct11Modu', variables).success(function (data) {
                return data;
            }).error(function (err) {
                console.log(err);
            });
        },

        ListJuegoRoles: function ListJuegoRoles(variables) {
            return $http.post(rest + 'api/Activities/ListJuegoRoles', variables).success(function (data) {
                return data;
            }).error(function (err) {
                console.log(err);
            });
        },

        GuardaActividad11: function GuardaActividad11(variables) {
            return $http.post(rest + 'api/Activities/GuardaActividad11', variables).success(function (data) {
                return data;
            }).error(function (err) {
                console.log(err);
            });
        },
        guardarJuegoRoles: function guardarJuegoRoles(variables) {
            return $http.post(rest + 'api/Activities/guardarJuegoRoles', variables).success(function (data) {
                return data;
            }).error(function (err) {
                console.log(err);
            });
        },

        ListarPreguntasGen: function ListarPreguntasGen(variables) {
            return $http.post(rest + 'api/Activities/ListarPreguntasGen', variables).success(function (data) {
                return data;
            }).error(function (err) {
                console.log(err);
            });
        },

        ValidaPorcentaje: function ValidaPorcentaje(variables) {
            return $http.post(rest + 'api/Activities/ValidarPorcentajes', variables).success(function (data) {
                return data;
            }).error(function (err) {
                console.log(err);
            });
        }

    };

    return ApiRequest;
});

// app.services
app.service("funcionesGeneral", function ($http, Upload) {

    var ApiRequest = {

        completarTexto: function completarTexto(arreglo, arreglodos, arreglotres, cantPregunta, preguntaid, categoriaid, usu_id, clase) {

            $("." + clase).each(function (indice, campo) {

                var txtinput = $(this).val();
                var text = txtinput.toString().toLowerCase();
                var texval = text.replace(/([\'\´\′\’\\&])/gi, "'");

                if (arreglo[indice] == texval || arreglodos[indice] == texval || arreglotres[indice] == texval) {

                    if (categoriaid == 3) {
                        $(this).addClass('js-correct');
                        $(this).removeClass('js-wrong');
                    } else {
                        $(this).addClass('bien');
                        $(this).removeClass('mal');
                    }
                } else {

                    if (categoriaid == 3) {
                        $(this).addClass('js-wrong');
                        $(this).removeClass('js-correct');
                    } else {
                        $(this).addClass('mal');
                        $(this).removeClass('bien');
                    }
                }
            });

            var k = 0,
                completado;

            if (categoriaid == 3) {
                k = $('.js-correct').length;
            } else {
                k = $('.bien').length;
            }

            if (k == cantPregunta) {
                completado = 1;
            } else {
                completado = 0;
            }

            var variables = {
                cantPregunta: cantPregunta,
                correctas: k,
                completado: completado,
                preguntaid: preguntaid,
                usu_id: usu_id

                // console.log(variables);

            };return $http.post(rest + 'api/Registros/InsertRespuestas', variables).success(function (data) {
                alertify.success('Saved !!');
                return data;
            }).error(function (err) {
                console.log(err);
            });
        },

        completarTextoAct14: function completarTextoAct14(arreglo1, arreglo2, arreglo3, arreglo4, arreglo5, arreglo6, arreglo7, arreglo8, arreglo9, arreglo10, arreglo11, cantPregunta, preguntaid, categoriaid, usu_id, clase) {

            $("." + clase).each(function (indice, campo) {

                var txtinput = $(this).val();
                var text = txtinput.toString().toLowerCase();
                var texval = text.replace(/([\'\´\′\’\\&])/gi, "'");

                if (arreglo1[indice] == texval || arreglo2[indice] == texval || arreglo3[indice] == texval || arreglo4[indice] == texval || arreglo5[indice] == texval || arreglo6[indice] == texval || arreglo7[indice] == texval || arreglo8[indice] == texval || arreglo9[indice] == texval || arreglo10[indice] == texval || arreglo11[indice] == texval) {

                    if (categoriaid == 3) {
                        $(this).addClass('js-correct');
                        $(this).removeClass('js-wrong');
                    } else {
                        $(this).addClass('bien');
                        $(this).removeClass('mal');
                    }
                } else {

                    if (categoriaid == 3) {
                        $(this).addClass('js-wrong');
                        $(this).removeClass('js-correct');
                    } else {
                        $(this).addClass('mal');
                        $(this).removeClass('bien');
                    }
                }
            });

            var k = 0,
                completado;

            if (categoriaid == 3) {
                k = $('.js-correct').length;
            } else {
                k = $('.bien').length;
            }

            if (k == cantPregunta) {
                completado = 1;
            } else {
                completado = 0;
            }

            var variables = {
                cantPregunta: cantPregunta,
                correctas: k,
                completado: completado,
                preguntaid: preguntaid,
                usu_id: usu_id

                // console.log(variables);

            };return $http.post(rest + 'api/Registros/InsertRespuestas', variables).success(function (data) {
                alertify.success('Saved !!');
                return data;
            }).error(function (err) {
                console.log(err);
            });
        },

        unirColumnas: function unirColumnas(cantPregunta, preguntaid, usu_id) {
            // Validar unir
            $('*[js-bien="jsbien"]').click(function () {

                $('*[jsblock="jsblock"]').each(function (ind, camp) {
                    $(this).removeAttr('jsblock');
                });

                $('*[jsvalida="jsvalida"]').each(function (ind, camp) {
                    $('*[jsvalida="jsvalida"]').attr('jsblock', 'jsblock');
                });
            });

            $('*[jsvalidb="jsvalidb"]').click(function () {

                $('*[jsvalidb="jsvalidb"]').each(function (ind, camp) {
                    $('*[jsvalidb="jsvalidb"]').attr('jsblock', 'jsblock');
                });

                $('*[jsvalida="jsvalida"]').each(function (ind, camp) {
                    $('*[jsvalida="jsvalida"]').removeAttr('jsblock');
                });
            });
            // END Validar unir

            var t = 0,
                completado;

            $('.treeItem').click(function () {
                $('*[seleccion=0]').removeAttr("correcta");
                $(this).attr("seleccion", 1);
                var contador = $('*[seleccion=1]').length;
                // console.log(contador);
                if (contador == 2) {
                    seleccionados();
                }
            });

            function seleccionados() {

                var i = 0;
                var seleccionadouno = "";
                var seleccionadodos = "";

                $('*[seleccion=1]').each(function (indice, campo) {
                    i++;
                    if (i == 1) {
                        seleccionadouno = $(this).attr('valor');
                    }
                    if (i == 2) {
                        seleccionadodos = $(this).attr('valor');
                    }
                });

                if (seleccionadouno == seleccionadodos) {

                    $('*[seleccion=1]').attr("seleccion", 2);
                    $('*[seleccion=2]').attr("correcta", "bien");
                    t = $('*[seleccion=2]').attr("correcta", "bien").length;
                } else {
                    $('*[seleccion=1]').each(function (indice, campo) {
                        $('*[seleccion=1]').attr("correcta", "mal");
                        $('*[seleccion=1]').attr("seleccion", 0);
                    });
                }

                var k = t / 2;

                if (k == cantPregunta) {
                    completado = 1;
                } else {
                    completado = 0;
                }

                $('.u-bgIconCheck').click(function () {

                    var variables = {
                        cantPregunta: cantPregunta,
                        correctas: k,
                        completado: completado,
                        preguntaid: preguntaid,
                        usu_id: usu_id,
                        control: 'SI'
                    };

                    alertify.confirm("Are you sure ?", function () {

                        return $http.post(rest + 'api/Registros/InsertRespuestas', variables).success(function (data) {
                            alertify.success('Saved !!');
                            return data;
                        }).error(function (err) {
                            console.log(err);
                        });
                    }, function () {
                        alertify.error('Canceled');
                    });
                });
            }
        }

        // Jh***************************************
        , unirColumnasEsc: function unirColumnasEsc(arreglo, cantPregunta, preguntaid, categoriaid, usu_id) {

            // Validar unir
            $('*[js-bien="jsbien"]').click(function () {

                $('*[jsblock="jsblock"]').each(function (ind, camp) {
                    $(this).removeAttr('jsblock');
                });

                $('*[jsvalida="jsvalida"]').each(function (ind, camp) {
                    $('*[jsvalida="jsvalida"]').attr('jsblock', 'jsblock');
                });
            });

            $('*[jsvalidb="jsvalidb"]').click(function () {

                $('*[jsvalidb="jsvalidb"]').each(function (ind, camp) {
                    $('*[jsvalidb="jsvalidb"]').attr('jsblock', 'jsblock');
                });

                $('*[jsvalida="jsvalida"]').each(function (ind, camp) {
                    $('*[jsvalida="jsvalida"]').removeAttr('jsblock');
                });
            });
            // END Validar unir


            var t = 0,
                completado;
            var js = 0;
            var totalBien = 0;

            $('.treeItem').click(function () {
                $('*[seleccion=0]').removeAttr("correcta");
                $(this).attr("seleccion", 1);
                var contador = $('*[seleccion=1]').length;
                // console.log(contador);
                if (contador == 2) {
                    seleccionados();
                }
            });

            function seleccionados() {

                var i = 0;
                var seleccionadouno = "";
                var seleccionadodos = "";

                $('*[seleccion=1]').each(function (indice, campo) {
                    i++;
                    if (i == 1) {
                        seleccionadouno = $(this).attr('valor');
                    }
                    if (i == 2) {
                        seleccionadodos = $(this).attr('valor');
                    }
                });

                if (seleccionadouno == seleccionadodos) {

                    $('*[seleccion=1]').attr("seleccion", 2);
                    $('*[seleccion=2]').attr("correcta", "bien");
                    t = $('*[seleccion=2]').attr("correcta", "bien").length;
                } else {
                    $('*[seleccion=1]').each(function (indice, campo) {
                        $('*[seleccion=1]').attr("correcta", "mal");
                        $('*[seleccion=1]').attr("seleccion", 0);
                    });
                }

                var k = t / 2;

                $('.u-bgIconCheck').click(function () {

                    var classEsc = '.js-escribir';

                    $(classEsc).each(function (indice, campo) {

                        var txtinput = $(this).val();
                        var text = txtinput.toString().toLowerCase();
                        var texval = text.replace(/([\’\'\´\′\\&])/gi, "'");

                        if (arreglo[indice] == texval) {

                            if (categoriaid == 3) {
                                $(this).addClass('js-correct');
                                $(this).removeClass('js-wrong');
                            } else {
                                $(this).addClass('bien');
                                $(this).removeClass('mal');
                            }
                        } else {

                            if (categoriaid == 3) {
                                $(this).addClass('js-wrong');
                                $(this).removeClass('js-correct');
                            } else {
                                $(this).addClass('mal');
                                $(this).removeClass('bien');
                            }
                        }
                    });

                    if (categoriaid == 3) {
                        js = $('.js-correct').length;
                    } else {
                        js = $('.bien').length;
                    }

                    totalBien = js + k;

                    if (totalBien == cantPregunta) {
                        completado = 1;
                    } else {
                        completado = 0;
                    }

                    var variables = {
                        cantPregunta: cantPregunta,
                        correctas: totalBien,
                        completado: completado,
                        preguntaid: preguntaid,
                        usu_id: usu_id,
                        control: 'SI'

                        // console.log(variables)

                    };alertify.confirm("Are you sure ?", function () {

                        return $http.post(rest + 'api/Registros/InsertRespuestas', variables).success(function (data) {
                            alertify.success('Saved !!');
                            return data;
                        }).error(function (err) {
                            console.log(err);
                        });
                    }, function () {
                        alertify.error('Canceled');
                    });
                });
            }
        },

        unirColumnasDrag: function unirColumnasDrag(arreglo, cantPregunta, preguntaid, categoriaid, usu_id) {
            // Validar unir
            $('*[js-bien="jsbien"]').click(function () {

                $('*[jsblock="jsblock"]').each(function (ind, camp) {
                    $(this).removeAttr('jsblock');
                });

                $('*[jsvalida="jsvalida"]').each(function (ind, camp) {
                    $('*[jsvalida="jsvalida"]').attr('jsblock', 'jsblock');
                });
            });

            $('*[jsvalidb="jsvalidb"]').click(function () {

                $('*[jsvalidb="jsvalidb"]').each(function (ind, camp) {
                    $('*[jsvalidb="jsvalidb"]').attr('jsblock', 'jsblock');
                });

                $('*[jsvalida="jsvalida"]').each(function (ind, camp) {
                    $('*[jsvalida="jsvalida"]').removeAttr('jsblock');
                });
            });
            // END Validar unir

            var t = 0,
                completado;
            var totalBien = 0;
            var jdrop = 0;
            var acciondrag = 0;

            $('.drag').each(function (indice, campo) {
                $(this).attr('valordrag', indice);
            });

            $('.drop').each(function (indice, campo) {
                $(this).attr('posicion', indice);
            });

            $(".drag").draggable(_defineProperty({
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

            $('.drop').droppable({
                drop: function drop(event, ui) {

                    $(ui.draggable).data('hasBeenDropped', true);
                    var respuestacaja = ui.draggable.text();
                    var dt = $(this).text();
                    var valordrag = ui.draggable.attr('valordrag');
                    var po = $(this).attr("posicion");
                    var rescon = ui.draggable.attr('rescon');
                    var clasedrag = ui.draggable.attr('class');

                    $(this).html('<div class="' + clasedrag + ' dragM2" valordrag="' + valordrag + '" rescon="' + rescon + '">' + respuestacaja + '</div>');

                    var aa = $(this).children('div').attr("valordrag");

                    $(".dragM2").draggable(_defineProperty({
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
                                acciondrag = 2;
                                return true;
                            } else {
                                return true;
                            }
                        }
                    }));

                    setTimeout(function () {
                        $('.drop').each(function (indice, campo) {
                            var validaTexto = $(this).text();
                            // console.log(validaTexto)
                            if (validaTexto == '') {
                                $(this).droppable('enable');
                            } else {
                                $(this).droppable('disable');
                            }
                        });
                    }, 500);
                }, over: function over(event, ui) {
                    var respuestacaja = ui.draggable.text();
                    var valordrag = ui.draggable.attr('valordrag');
                    var po = $(this).attr("posicion");
                    var aa = $('.drop').eq(po).children('div').attr("valordrag");
                    var txtdr = $('.drop').eq(po).children('div').text();
                    var rescon = $('.drop').eq(po).children('div').attr('rescon');
                    var clasedrag = $('.drop').eq(po).children('div').attr('class');

                    $(".drop").eq(po).mouseup(function () {

                        //    $('.dragCont').eq(aa).html('<div class="'+clasedrag+' drag2" valordrag="'+aa+'" rescon="'+rescon+'">'+txtdr+'</div>');

                        //    $(".drag2").draggable({
                        //         revert: true,
                        //         containment: ".contenedorcentral",
                        //         revert:  function(dropped) {
                        //             var $draggable = $(this);
                        //             var hasBeenDroppedBefore = $draggable.data('hasBeenDropped');
                        //             var wasJustDropped = dropped && dropped[0].id == "droppable";
                        //             if(wasJustDropped) {
                        //                   return false;
                        //             } else {
                        //                 if (hasBeenDroppedBefore) {
                        //                     $draggable.remove();
                        //                     return true;
                        //                 } else {
                        //                     return true;
                        //                 }
                        //             }
                        //         }

                        //     });
                    });
                }
            });

            $('.treeItem').click(function () {
                $('*[seleccion=0]').removeAttr("correcta");
                $(this).attr("seleccion", 1);
                var contador = $('*[seleccion=1]').length;
                // console.log(contador);
                if (contador == 2) {
                    seleccionados();
                }
            });

            function seleccionados() {

                var i = 0;
                var seleccionadouno = "";
                var seleccionadodos = "";

                $('*[seleccion=1]').each(function (indice, campo) {
                    i++;
                    if (i == 1) {
                        seleccionadouno = $(this).attr('valor');
                    }
                    if (i == 2) {
                        seleccionadodos = $(this).attr('valor');
                    }
                });

                if (seleccionadouno == seleccionadodos) {

                    $('*[seleccion=1]').attr("seleccion", 2);
                    $('*[seleccion=2]').attr("correcta", "bien");
                    t = $('*[seleccion=2]').attr("correcta", "bien").length;
                } else {
                    $('*[seleccion=1]').each(function (indice, campo) {
                        $('*[seleccion=1]').attr("correcta", "mal");
                        $('*[seleccion=1]').attr("seleccion", 0);
                    });
                }

                var k = t / 2;

                $('.u-bgIconCheck').click(function () {

                    $('.drop').each(function () {

                        var pos = $(this).attr('posicion');
                        var texto = $(this).children('div').attr('rescon');
                        //  console.log(texto)

                        if (arreglo[pos] == texto) {

                            if (categoriaid == 3) {
                                $(this).addClass('js-correct');
                                $(this).removeClass('js-wrong');
                            } else {
                                $(this).addClass('bien');
                                $(this).removeClass('mal');
                            }
                        } else {
                            if (categoriaid == 3) {
                                $(this).addClass('js-wrong');
                                $(this).removeClass('js-correct');
                            } else {
                                $(this).addClass('mal');
                                $(this).removeClass('bien');
                            }
                        }

                        if (categoriaid == 3) {
                            jdrop = $('.js-correct').length;
                        } else {
                            jdrop = $('.bien').length;
                        }
                    });

                    totalBien = jdrop + k;
                    // console.log(totalBien)

                    if (totalBien == cantPregunta) {
                        completado = 1;
                    } else {
                        completado = 0;
                    }

                    var variables = {
                        cantPregunta: cantPregunta,
                        correctas: totalBien,
                        completado: completado,
                        preguntaid: preguntaid,
                        usu_id: usu_id,
                        control: 'SI'
                    };

                    alertify.confirm("Are you sure ?", function () {

                        return $http.post(rest + 'api/Registros/InsertRespuestas', variables).success(function (data) {
                            alertify.success('Saved !!');
                            return data;
                        }).error(function (err) {
                            console.log(err);
                        });
                    }, function () {
                        alertify.error('Canceled');
                    });
                });
            }
        },

        seleccion: function seleccion(arreglo, cantPregunta, preguntaid, categoriaid, usu_id) {

            // console.log(arreglo);

            var variables;

            $('input[type="radio"]:checked').each(function (indice, campo) {

                var valor = $(this).val(),
                    k = 0,
                    completado;
                var id = $(this).attr('name');
                var text = id.slice(-2);
                var pos = text.replace("_", "");

                if (valor == arreglo[pos - 1]) {
                    if (categoriaid == 3) {
                        $(this).addClass('js-correct');
                        $(this).removeClass('js-wrong');
                    } else {
                        $(this).addClass('bien');
                        $(this).removeClass('mal');
                    }
                } else {
                    if (categoriaid == 3) {
                        $(this).addClass('js-wrong');
                        $(this).removeClass('js-correct');
                    } else {
                        $(this).addClass('mal');
                        $(this).removeClass('bien');
                    }
                }

                if (categoriaid == 3) {
                    k = $('.js-correct').length;
                } else {
                    k = $('.bien').length;
                }

                if (k == cantPregunta) {
                    completado = 1;
                } else {
                    completado = 0;
                }

                variables = {
                    cantPregunta: cantPregunta,
                    correctas: k,
                    completado: completado,
                    preguntaid: preguntaid,
                    usu_id: usu_id,
                    control: 'SI'

                    // console.log(variables)

                };
            }); //end each

            return $http.post(rest + 'api/Registros/InsertRespuestas', variables).success(function (data) {
                alertify.success('Saved !!');
                return data;
            }).error(function (err) {
                console.log(err);
            });
        },

        seleccionSelf: function seleccionSelf(arreglo, cantPregunta, preguntaid, categoriaid, usu_id, val) {

            var variables;

            $('input[type="radio"]:checked').each(function (indice, campo) {

                var valor = $(this).val(),
                    k = 0,
                    completado;
                var id = $(this).attr('name');
                var text = id.slice(-2);
                var pos = text.replace("_", "");

                if (valor == arreglo[pos - 1]) {
                    if (categoriaid == 3) {
                        $(this).addClass('js-correct');
                        $(this).removeClass('js-wrong');
                    } else {
                        $(this).addClass('bien');
                        $(this).removeClass('mal');
                    }
                } else {
                    if (categoriaid == 3) {
                        $(this).addClass('js-wrong');
                        $(this).removeClass('js-correct');
                    } else {
                        $(this).addClass('mal');
                        $(this).removeClass('bien');
                    }
                }

                if (categoriaid == 3) {
                    k = $('.js-correct').length;
                } else {
                    k = $('.bien').length;
                }

                // SELF CHECK
                if (k > val) {
                    alertify.alert('<strong>Great!</strong>');
                }

                if (k == cantPregunta) {
                    completado = 1;
                } else {
                    completado = 0;
                }

                variables = {
                    cantPregunta: cantPregunta,
                    correctas: k,
                    completado: completado,
                    preguntaid: preguntaid,
                    usu_id: usu_id,
                    control: 'SI'

                    // console.log(variables)

                };
            }); //end each

            return $http.post(rest + 'api/Registros/InsertRespuestas', variables).success(function (data) {
                alertify.success('Saved !!');
                return data;
            }).error(function (err) {
                console.log(err);
            });
        },
        grabarAudio: function grabarAudio(preguntaid, usu_id, audio_file, aud_titulo, nivel_id) {

            var variables = {
                file: audio_file,
                preguntaid: preguntaid,
                aud_titulo: aud_titulo,
                usu_id: usu_id,
                nivel_id: nivel_id,
                control: 'SI'

                // console.log(variables)

            };return $http.post(rest + 'api/Registros/InsertAudios', variables).success(function (data) {
                alertify.success('Saved !!');
                // console.log(data);
                return data;
            }).error(function (err) {
                console.log(err);
            });
        },
        draganddrop: function draganddrop(arreglo, arreglodos, cantPregunta, preguntaid, categoriaid, usu_id) {

            $('.drag').each(function (indice, campo) {
                $(this).attr('valordrag', indice);
            });

            $('.drop').each(function (indice, campo) {
                $(this).attr('posicion', indice);
            });

            $(".drag").draggable(_defineProperty({
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

            $('.drop').droppable({

                drop: function drop(event, ui) {

                    $(ui.draggable).data('hasBeenDropped', true);
                    var respuestacaja = ui.draggable.text();
                    var respuestacajamin = respuestacaja.toString().toLowerCase();
                    var dt = $(this).text();
                    var valordrag = ui.draggable.attr('valordrag');
                    var po = $(this).attr("posicion");

                    $(this).html('<div class="drag dragM2" valordrag="' + valordrag + '">' + respuestacajamin + '</div>');

                    var aa = $(this).children('div').attr("valordrag");

                    $(".dragM2").draggable(_defineProperty({
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
                                acciondrag = 2;
                                return true;
                            } else {
                                return true;
                            }
                        }
                    }));

                    setTimeout(function () {
                        $('.drop').each(function (indice, campo) {
                            var validaTexto = $(this).text();
                            // console.log(validaTexto)
                            if (validaTexto == '') {
                                $(this).droppable('enable');
                            } else {
                                $(this).droppable('disable');
                            }
                        });
                    }, 500);
                }, over: function over(event, ui) {

                    var respuestacajamin = ui.draggable.text();
                    var valordrag = ui.draggable.attr('valordrag');
                    var po = $(this).attr("posicion");
                    var aa = $('.drop').eq(po).children('div').attr("valordrag");
                    var txtdr = $('.drop').eq(po).children('div').text();

                    $(".drop").eq(po).mouseup(function () {

                        //    $('.dragCont').eq(aa).html('<div class="drag drag2" valordrag="'+aa+'">'+txtdr+'</div>');

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
                }
            });

            var k = 0,
                completado;
            var variables;

            $('.u-bgIconCheck').click(function () {

                alertify.confirm("Are you sure ?", function () {

                    $('.drop').each(function () {

                        var pos = $(this).attr('posicion');
                        var texto = $(this).text();
                        // console.log(texto)

                        if (arreglo[pos] == texto || arreglodos[pos] == texto) {

                            if (categoriaid == 3) {
                                $(this).addClass('js-correct');
                                $(this).removeClass('js-wrong');
                            } else {
                                $(this).addClass('bien');
                                $(this).removeClass('mal');
                            }
                        } else {

                            if (categoriaid == 3) {
                                $(this).addClass('js-wrong');
                                $(this).removeClass('js-correct');
                            } else {
                                $(this).addClass('mal');
                                $(this).removeClass('bien');
                            }
                        }

                        if (categoriaid == 3) {
                            k = $('.js-correct').length;
                        } else {
                            k = $('.bien').length;
                        }

                        if (k == cantPregunta) {
                            completado = 1;
                        } else {
                            completado = 0;
                        }

                        variables = {
                            cantPregunta: cantPregunta,
                            correctas: k,
                            completado: completado,
                            preguntaid: preguntaid,
                            usu_id: usu_id,
                            control: 'SI'
                        };
                    }); //end each

                    return $http.post(rest + 'api/Registros/InsertRespuestas', variables).success(function (data) {
                        alertify.success('Saved !!');
                        return data;
                    }).error(function (err) {
                        console.log(err);
                    });
                }, function () {
                    alertify.error('Canceled');
                });
            }); //end click
        },
        draganddropImg: function draganddropImg(arreglo, arreglodos, cantPregunta, preguntaid, categoriaid, usu_id) {

            $('.drag').each(function (indice, campo) {
                $(this).attr('valordrag', indice);
            });

            $('.drop').each(function (indice, campo) {
                $(this).attr('posicion', indice);
            });

            $(".drag").draggable(_defineProperty({
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

            $('.drop').droppable({

                drop: function drop(event, ui) {

                    $(ui.draggable).data('hasBeenDropped', true);
                    var respuestacaja = ui.draggable.text();
                    var dt = $(this).text();
                    var valordrag = ui.draggable.attr('valordrag');
                    var po = $(this).attr("posicion");
                    var rutaimg = ui.draggable.children('img').attr('src');
                    var claseImg = ui.draggable.children('img').attr('class');
                    var rescon = ui.draggable.attr('rescon');

                    //  console.log(rutaimg);

                    $(this).html('<div class="drag" valordrag="' + valordrag + '" rescon="' + rescon + '"><img class="' + claseImg + '" src=' + rutaimg + '></div>');

                    var aa = $(this).children('div').attr("valordrag");
                }, over: function over(event, ui) {
                    var respuestacaja = ui.draggable.text();
                    var valordrag = ui.draggable.attr('valordrag');
                    var po = $(this).attr("posicion");
                    var aa = $('.drop').eq(po).children('div').attr("valordrag");
                    var txtdr = $('.drop').eq(po).children('div').text();
                    var rutaimg = $('.drop').eq(po).children('div').children('img').attr('src');
                    var rescon = $('.drop').eq(po).children('div').attr('rescon');
                    var claseImg = $('.drop').eq(po).children('div').children('img').attr('class');

                    $(".drop").eq(po).mouseup(function () {

                        $('.dragCont').eq(aa).html('<div class="drag drag2" valordrag="' + aa + '" rescon="' + rescon + '"><img class="' + claseImg + '" src=' + rutaimg + '></div>');

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
                }
            });

            var k = 0,
                completado;
            var variables;

            $('.u-bgIconCheck').click(function () {

                alertify.confirm("Are you sure ?", function () {

                    $('.drop').each(function () {

                        var pos = $(this).attr('posicion');
                        var texto = $(this).children('div').attr('rescon');
                        //  console.log(texto)

                        if (arreglo[pos] == texto || arreglodos[pos] == texto) {
                            if (categoriaid == 3) {
                                $(this).addClass('js-correct');
                                $(this).removeClass('js-wrong');
                            } else {
                                $(this).addClass('bien');
                                $(this).removeClass('mal');
                            }
                        } else {
                            if (categoriaid == 3) {
                                $(this).addClass('js-wrong');
                                $(this).removeClass('js-correct');
                            } else {
                                $(this).addClass('mal');
                                $(this).removeClass('bien');
                            }
                        }

                        if (categoriaid == 3) {
                            k = $('.js-correct').length;
                        } else {
                            k = $('.bien').length;
                        }

                        if (k == cantPregunta) {
                            completado = 1;
                        } else {
                            completado = 0;
                        }

                        variables = {
                            cantPregunta: cantPregunta,
                            correctas: k,
                            completado: completado,
                            preguntaid: preguntaid,
                            usu_id: usu_id,
                            control: 'SI'
                        };
                    }); //end each

                    return $http.post(rest + 'api/Registros/InsertRespuestas', variables).success(function (data) {
                        alertify.success('Saved !!');
                        return data;
                    }).error(function (err) {
                        console.log(err);
                    });
                }, function () {
                    alertify.error('Canceled');
                });
            }); //end click
        },
        draganddropmultiple: function draganddropmultiple(arreglo, arreglodos, cantPregunta, preguntaid, categoriaid, usu_id) {

            $('.drag').each(function (indice, campo) {
                $(this).attr('valordrag', indice);
            });

            $('.drop').each(function (indice, campo) {
                $(this).attr('posicion', indice);
            });

            $(".drag").draggable(_defineProperty({
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

            $('.drop').droppable({
                drop: function drop(event, ui) {

                    $(ui.draggable).data('hasBeenDropped', true);
                    var respuestacaja = ui.draggable.text();
                    var dt = $(this).text();
                    var valordrag = ui.draggable.attr('valordrag');
                    var po = $(this).attr("posicion");
                    var rescon = ui.draggable.attr('rescon');
                    var clasedrag = ui.draggable.attr('class');

                    $(this).html('<div class="' + clasedrag + ' dragM2" valordrag="' + valordrag + '" rescon="' + rescon + '">' + respuestacaja + '</div>');

                    var aa = $(this).children('div').attr("valordrag");

                    $(".dragM2").draggable(_defineProperty({
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
                                acciondrag = 2;
                                return true;
                            } else {
                                return true;
                            }
                        }
                    }));

                    setTimeout(function () {
                        $('.drop').each(function (indice, campo) {
                            var validaTexto = $(this).text();
                            // console.log(validaTexto)
                            if (validaTexto == '') {
                                $(this).droppable('enable');
                            } else {
                                $(this).droppable('disable');
                            }
                        });
                    }, 500);
                }, over: function over(event, ui) {
                    var respuestacaja = ui.draggable.text();
                    var valordrag = ui.draggable.attr('valordrag');
                    var po = $(this).attr("posicion");
                    var aa = $('.drop').eq(po).children('div').attr("valordrag");
                    var txtdr = $('.drop').eq(po).children('div').text();
                    var rescon = $('.drop').eq(po).children('div').attr('rescon');
                    var clasedrag = $('.drop').eq(po).children('div').attr('class');

                    $(".drop").eq(po).mouseup(function () {

                        // $('.dragCont').eq(aa).html('<div class="'+clasedrag+' drag2" valordrag="'+aa+'" rescon="'+rescon+'">'+txtdr+'</div>');

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
                }
            });

            var k = 0,
                completado;
            var variables;

            $('.u-bgIconCheck').click(function () {

                alertify.confirm("Are you sure ?", function () {

                    $('.drop').each(function () {

                        var pos = $(this).attr('posicion');
                        var texto = $(this).children('div').attr('rescon');
                        //  console.log(texto)

                        if (arreglo[pos] == texto || arreglodos[pos] == texto) {

                            if (categoriaid == 3) {
                                $(this).addClass('js-correct');
                                $(this).removeClass('js-wrong');
                            } else {
                                $(this).addClass('bien');
                                $(this).removeClass('mal');
                            }
                        } else {
                            if (categoriaid == 3) {
                                $(this).addClass('js-wrong');
                                $(this).removeClass('js-correct');
                            } else {
                                $(this).addClass('mal');
                                $(this).removeClass('bien');
                            }
                        }

                        if (categoriaid == 3) {
                            k = $('.js-correct').length;
                        } else {
                            k = $('.bien').length;
                        }

                        if (k == cantPregunta) {
                            completado = 1;
                        } else {
                            completado = 0;
                        }

                        variables = {
                            cantPregunta: cantPregunta,
                            correctas: k,
                            completado: completado,
                            preguntaid: preguntaid,
                            usu_id: usu_id,
                            control: 'SI'
                            //  console.log(variables)

                        };
                    }); //end each

                    return $http.post(rest + 'api/Registros/InsertRespuestas', variables).success(function (data) {
                        alertify.success('Saved !!');
                        return data;
                    }).error(function (err) {
                        console.log(err);
                    });
                }, function () {
                    alertify.error('Canceled');
                });
            }); //end click
        },
        draganddropclonable: function draganddropclonable(arreglo, arreglodos, arreglotres, cantPregunta, preguntaid, categoriaid, usu_id) {

            $('.drag').each(function (indice, campo) {
                $(this).attr('valordrag', indice);
            });

            $('.drop').each(function (indice, campo) {
                $(this).attr('posicion', indice);
            });

            $(".drag").draggable(_defineProperty({
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
                        //   $draggable.remove();
                        return true;
                    } else {
                        return true;
                    }
                }
            }));

            $('.drop').droppable({
                drop: function drop(event, ui) {

                    $(ui.draggable).data('hasBeenDropped', true);
                    var respuestacaja = ui.draggable.text();
                    var dt = $(this).text();
                    var valordrag = ui.draggable.attr('valordrag');
                    var po = $(this).attr("posicion");

                    $(this).html('<div class="drag" valordrag="' + valordrag + '">' + respuestacaja + '</div>');

                    var aa = $(this).children('div').attr("valordrag");
                }, over: function over(event, ui) {
                    var respuestacaja = ui.draggable.text();
                    var valordrag = ui.draggable.attr('valordrag');
                    var po = $(this).attr("posicion");
                    var aa = $('.drop').eq(po).children('div').attr("valordrag");
                    var txtdr = $('.drop').eq(po).children('div').text();

                    $(".drop").eq(po).mouseup(function () {

                        $('.dragCont').eq(aa).html('<div class="drag drag2" valordrag="' + aa + '">' + txtdr + '</div>');

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
                }
            });

            var k = 0,
                completado;
            var variables;
            $('.u-bgIconCheck').click(function () {

                alertify.confirm("Are you sure ?", function () {

                    // console.log("categoria es-> "+categoriaid);
                    $('.drop').each(function () {
                        var pos = $(this).attr('posicion');
                        var texto = $(this).text();
                        //  console.log(texto)

                        if (arreglo[pos] == texto || arreglodos[pos] == texto || arreglotres[pos] == texto) {
                            if (categoriaid == 3) {
                                $(this).addClass('js-correct');
                                $(this).removeClass('js-wrong');
                            } else {
                                $(this).addClass('bien');
                                $(this).removeClass('mal');
                            }
                        } else {
                            if (categoriaid == 3) {
                                $(this).addClass('js-wrong');
                                $(this).removeClass('js-correct');
                            } else {
                                $(this).addClass('mal');
                                $(this).removeClass('bien');
                            }
                        }

                        if (categoriaid == 3) {
                            k = $('.js-correct').length;
                        } else {
                            k = $('.bien').length;
                        }

                        if (k == cantPregunta) {
                            completado = 1;
                        } else {
                            completado = 0;
                        }

                        variables = {
                            cantPregunta: cantPregunta,
                            correctas: k,
                            completado: completado,
                            preguntaid: preguntaid,
                            usu_id: usu_id,
                            control: 'SI'
                        };
                    }); //end each

                    return $http.post(rest + 'api/Registros/InsertRespuestas', variables).success(function (data) {
                        alertify.success('Saved !!');
                        return data;
                    }).error(function (err) {
                        console.log(err);
                    });
                }, function () {
                    alertify.error('Canceled');
                });
            }); //end click
        },
        enviotexto: function enviotexto(preguntaid, textousu, usu_id) {

            var variables = {
                preguntaid: preguntaid,
                textousu: textousu,
                usu_id: usu_id,
                control: 'SI'
            };

            return $http.post(rest + 'api/Registros/InsertTextos', variables).success(function (data) {
                alertify.success('Saved !!');
                return data;
            }).error(function (err) {
                console.log(err);
            });
        },

        enviotextomultiple: function enviotextomultiple(preguntaid, textousu, textousub, textousuc, textousud, textousue, textousuf, textousug, usu_id) {

            var variables = {
                preguntaid: preguntaid,
                textousu: textousu,
                textousub: textousub,
                textousuc: textousuc,
                textousud: textousud,
                textousue: textousue,
                textousuf: textousuf,
                textousug: textousug,
                usu_id: usu_id,
                control: 'SI'
            };

            return $http.post(rest + 'api/Registros/InsertTextosMultiple', variables).success(function (data) {
                alertify.success('Saved !!');
                return data;
            }).error(function (err) {
                console.log(err);
            });
        },

        girarcartas: function girarcartas(cantPregunta, preguntaid, usu_id) {

            var t = 0,
                completado;
            var flip_card = 'flip_card';
            var classBien = 'is-good';
            var classMal = 'is-wrong';
            var preventClick = 'is-prevDefault';

            /*Validar las parejas*/
            $('.' + flip_card).click(function () {
                if ($('.' + flip_card).hasClass(classBien)) {
                    $(this).removeClass(classBien);
                }if ($('.' + flip_card).hasClass(classMal)) {
                    $(this).removeClass(classMal);
                }
                $(this).attr("seleccion", 1);

                $(this).flip(true);
                var contador = $('.' + flip_card + '[seleccion=1]').length;
                if (contador == 2) {
                    seleccionados();
                }
            });

            $('.' + classBien).hide();
            $('.' + classMal).hide();

            function seleccionados() {

                var i = 0;
                var seleccionadouno = "";
                var seleccionadodos = "";

                $('.' + flip_card + '[seleccion=1]').each(function (indice, campo) {
                    i++;
                    if (i == 1) {
                        seleccionadouno = $(this).attr('pareja');
                    }
                    if (i == 2) {
                        seleccionadodos = $(this).attr('pareja');
                    }
                });

                if (seleccionadouno == seleccionadodos) {

                    setTimeout(function () {
                        $('.' + flip_card + '[seleccion=2]').addClass(classBien + ' ' + preventClick);
                    }, 700);

                    $('.' + flip_card + '[seleccion=1]').attr("seleccion", 2);
                    t = $('.' + flip_card + '[seleccion=2]').length;
                } else {

                    $('.' + flip_card + '[seleccion=1]').each(function (indice, campo) {

                        $('.' + flip_card + '[seleccion=1]').addClass(classMal);
                        $('.' + flip_card + '[seleccion=1]').attr("seleccion", 0);

                        setTimeout(function () {
                            $('.' + flip_card + '[seleccion=0]').flip(false);
                            $('.' + flip_card + '[seleccion=0]').css("background", "tranparent");
                        }, 1000);
                    });
                }
                var k = t / 2;

                if (k == cantPregunta) {
                    completado = 1;
                } else {
                    completado = 0;
                }

                $('.u-bgIconCheck').click(function () {

                    alertify.confirm("Are you sure ?", function () {

                        var variables = {
                            cantPregunta: cantPregunta,
                            correctas: k,
                            completado: completado,
                            preguntaid: preguntaid,
                            usu_id: usu_id,
                            control: 'SI'

                            // console.log(variables)

                        };return $http.post(rest + 'api/Registros/InsertRespuestas', variables).success(function (data) {
                            alertify.success('Saved !!');
                            return data;
                        }).error(function (err) {
                            console.log(err);
                        });
                    }, function () {
                        alertify.error('Canceled');
                    });
                });
            }
        },
        selectoption: function selectoption(arreglo, cantPregunta, preguntaid, categoriaid, usu_id) {

            var variables;

            $('.c-select').each(function (indice, campo) {

                $(this).attr("pos", indice);
                var valor = $(this).val(),
                    k = 0,
                    completado;
                var pos = $(this).attr("pos");

                if (valor == arreglo[pos]) {
                    if (categoriaid == 3) {
                        $(this).addClass('js-correct');
                        $(this).removeClass('js-wrong');
                    } else {
                        $(this).addClass('bien');
                        $(this).removeClass('mal');
                    }
                } else {
                    if (categoriaid == 3) {
                        $(this).addClass('js-wrong');
                        $(this).removeClass('js-correct');
                    } else {
                        $(this).addClass('mal');
                        $(this).removeClass('bien');
                    }
                }

                if (categoriaid == 3) {
                    k = $('.js-correct').length;
                } else {
                    k = $('.bien').length;
                }

                if (k == cantPregunta) {
                    completado = 1;
                } else {
                    completado = 0;
                }

                variables = {
                    cantPregunta: cantPregunta,
                    correctas: k,
                    completado: completado,
                    preguntaid: preguntaid,
                    usu_id: usu_id,
                    control: 'SI'
                };
            }); // end each

            return $http.post(rest + 'api/Registros/InsertRespuestas', variables).success(function (data) {
                alertify.success('Saved !!');
                return data;
            }).error(function (err) {
                console.log(err);
            });
        },

        sortable: function sortable(arreglo, arreglodos, cantPregunta, preguntaid, categoriaid, usu_id) {

            var variables;
            $('.js-sortdrag').each(function (indice, campo) {

                var texto = $(this).text(),
                    k = 0,
                    completado;;
                // console.log(texto);
                // console.log(arreglo);
                if (arreglo[indice] == texto || arreglodos[indice] == texto) {

                    if (categoriaid == 3) {
                        $(this).addClass('js-correct');
                        $(this).removeClass('js-wrong');
                    } else {
                        $(this).addClass('bien');
                        $(this).removeClass('mal');
                    }
                } else {
                    if (categoriaid == 3) {
                        $(this).addClass('js-wrong');
                        $(this).removeClass('js-correct');
                    } else {
                        $(this).addClass('mal');
                        $(this).removeClass('bien');
                    }
                }

                if (categoriaid == 3) {
                    k = $('.js-correct').length;
                } else {
                    k = $('.bien').length;
                }

                if (k == cantPregunta) {
                    completado = 1;
                } else {
                    completado = 0;
                }

                variables = {
                    cantPregunta: cantPregunta,
                    correctas: k,
                    completado: completado,
                    preguntaid: preguntaid,
                    usu_id: usu_id,
                    control: 'SI'

                    // alertify.confirm("Are you sure ?",
                    // function(){

                    // },
                    // function(){
                    //     alertify.error('Canceled');
                    // });


                };
            }); // end each

            return $http.post(rest + 'api/Registros/InsertRespuestas', variables).success(function (data) {
                alertify.success('Saved !!');
                return data;
            }).error(function (err) {
                console.log(err);
            });
        },
        juegocompletarTexto: function juegocompletarTexto(arreglo, cantPregunta, preguntaid, usu_id) {

            var valor = "";
            var pos;
            var contbien = 0;

            $('.js-CompletePhrase').click(function () {
                $(this).addClass('is-hidden');
                pos = $(this).attr("data-pos");
                valor = String(valor) + String($(this).text());
                $('.js-escribir').val(valor);
            });

            $('.js-validar').click(function () {

                var txt = $('.js-escribir').val();

                if (txt == arreglo[pos]) {

                    alertify.success('Good');

                    contbien++;
                    var posSig = parseInt(pos) + 1;
                    $('.js-escribir').val('');
                    valor = "";
                    $('.c-gameCompletePhrase--Phrases').eq(pos).addClass('is-hidden');
                    $('.c-gameCompletePhrase--Phrases').eq(posSig).removeClass('is-hidden');
                } else {
                    alertify.error('Wrong');
                    $('.js-CompletePhrase').removeClass('is-hidden');
                    $('.js-escribir').val('');
                    valor = "";
                }
            });
        },

        // Jh
        // ****************************************************************************

        compTextSeleccion: function compTextSeleccion(arreglo, arreglodos, arreglotres, cantPregunta, preguntaid, categoriaid, usu_id, classEsc, classSel) {

            var cantElement1 = arreglo.length;
            var cantElement2 = arreglodos.length;
            var cantElement3 = arreglotres.length;
            // console.log(cantElement1);

            var cantSelect = 0;
            var cantEscr = 0;
            var totalSelect = 0;
            var totalEscr = 0;

            $('.' + classSel).each(function (indSelect, campo) {
                cantSelect = indSelect;
            });

            totalSelect = parseInt(cantSelect) + 1;
            // console.log('Total hay SELECT: ' + totalSelect);

            $('.' + classEsc).each(function (indEscr, campo) {
                cantEscr = indEscr;
            });

            totalEscr = parseInt(cantEscr) + 1;
            // console.log('Total hay ESCRIBIR: ' + totalEscr);

            $("." + classEsc).each(function (indice, campo) {

                var arrayEscr = arreglo.slice(totalSelect);
                var arrayEscrdos = arreglodos.slice(totalSelect);
                var arrayEscrtres = arreglotres.slice(totalSelect);

                // console.log(arrayEscr);

                var txtinput = $(this).val();
                var text = txtinput.toString().toLowerCase();
                var texval = text.replace(/([\’\'\´\′\\&])/gi, "'");
                // console.log(arrayEscr);

                if (arrayEscr[indice] == texval || arrayEscrdos[indice] == texval || arrayEscrtres[indice] == texval) {

                    if (categoriaid == 3) {
                        $(this).addClass('js-correct');
                        $(this).removeClass('js-wrong');
                    } else {
                        $(this).addClass('bien');
                        $(this).removeClass('mal');
                    }
                } else {

                    if (categoriaid == 3) {
                        $(this).addClass('js-wrong');
                        $(this).removeClass('js-correct');
                    } else {
                        $(this).addClass('mal');
                        $(this).removeClass('bien');
                    }
                }
            });

            var variables;

            $('input[type="radio"]:checked').each(function (indice, campo) {

                var arraySelect = arreglo.slice(0, totalSelect);

                // console.log(arraySelect);

                var valor = $(this).val(),
                    k = 0,
                    completado;
                var id = $(this).attr('name');
                var text = id.slice(-2);
                var pos = text.replace("_", "");

                if (valor == arraySelect[pos - 1]) {
                    if (categoriaid == 3) {
                        $(this).addClass('js-correct');
                        $(this).removeClass('js-wrong');
                    } else {
                        $(this).addClass('bien');
                        $(this).removeClass('mal');
                    }
                } else {
                    if (categoriaid == 3) {
                        $(this).addClass('js-wrong');
                        $(this).removeClass('js-correct');
                    } else {
                        $(this).addClass('mal');
                        $(this).removeClass('bien');
                    }
                }

                if (categoriaid == 3) {
                    k = $('.js-correct').length;
                } else {
                    k = $('.bien').length;
                }

                if (k == cantPregunta) {
                    completado = 1;
                } else {
                    completado = 0;
                }

                variables = {
                    cantPregunta: cantPregunta,
                    correctas: k,
                    completado: completado,
                    preguntaid: preguntaid,
                    usu_id: usu_id,
                    control: 'SI'
                };
            }); // End each

            return $http.post(rest + 'api/Registros/InsertRespuestas', variables).success(function (data) {
                alertify.success('Saved !!');
                return data;
            }).error(function (err) {
                console.log(err);
            });
        },

        // Jh
        // ****************************************************************************

        compTextSeleccionDrag: function compTextSeleccionDrag(arreglo, arreglodos, cantPregunta, preguntaid, categoriaid, usu_id, classEsc, classSel, classDrop) {

            alertify.confirm("Are you sure ?", function () {

                var cantElement1 = arreglo.length;
                var cantElement2 = arreglodos.length;
                // console.log(cantElement1);

                var cantSelect = 0;
                var cantEscr = 0;
                var cantDrop = 0;

                var totalSelect = 0;
                var totalEscr = 0;
                var totalDrop = 0;

                //********************* */
                $('.' + classSel).each(function (indSelect, campo) {
                    cantSelect = indSelect;
                });
                totalSelect = parseInt(cantSelect) + 1;
                // console.log('Total hay SELECT: ' + totalSelect);

                //********************* */
                $('.' + classEsc).each(function (indEscr, campo) {
                    cantEscr = indEscr;
                });
                totalEscr = parseInt(cantEscr) + 1;
                // console.log('Total hay ESCRIBIR: ' + totalEscr);

                //********************* */
                $('.' + classDrop).each(function (indDrop, campo) {
                    cantDrop = indDrop;
                });
                totalDrop = parseInt(cantDrop) + 1;
                // console.log('Total hay DROP: ' + totalDrop);

                var posEscribir = totalSelect + totalEscr;
                // alert(posEscribir);
                var arraySelect = arreglo.slice(0, totalSelect);
                var arrayEscr = arreglo.slice(totalSelect, posEscribir);
                var arrayEscrdos = arreglodos.slice(totalSelect, posEscribir);
                var arrayDrop = arreglo.slice(-totalDrop);

                // console.log(arraySelect);
                // console.log(arrayEscr);
                // console.log(arrayDrop);

                $('.' + classDrop).each(function () {

                    var pos = $(this).attr('posicion');
                    var texto = $(this).children('div').attr('rescon');
                    //  console.log(texto)

                    if (arrayDrop[pos] == texto) {

                        if (categoriaid == 3) {
                            $(this).addClass('js-correct');
                            $(this).removeClass('js-wrong');
                        } else {
                            $(this).removeClass('mal');
                            $(this).addClass('bien');
                        }
                    } else {

                        if (categoriaid == 3) {
                            $(this).addClass('js-wrong');
                            $(this).removeClass('js-correct');
                        } else {
                            $(this).addClass('mal');
                            $(this).removeClass('bien');
                        }
                    }
                });

                $("." + classEsc).each(function (indice, campo) {

                    var txtinput = $(this).val();
                    var text = txtinput.toString().toLowerCase();
                    var texval = text.replace(/([\’\'\´\′\\&])/gi, "'");

                    // console.log(texval);

                    if (arrayEscr[indice] == texval || arrayEscrdos[indice] == texval) {

                        if (categoriaid == 3) {
                            $(this).addClass('js-correct');
                            $(this).removeClass('js-wrong');
                        } else {
                            $(this).addClass('bien');
                            $(this).removeClass('mal');
                        }
                    } else {

                        if (categoriaid == 3) {
                            $(this).addClass('js-wrong');
                            $(this).removeClass('js-correct');
                        } else {
                            $(this).addClass('mal');
                            $(this).removeClass('bien');
                        }
                    }
                });

                var variables;

                $('input[type="radio"]:checked').each(function (indice, campo) {

                    var valor = $(this).val(),
                        k = 0,
                        completado;
                    var id = $(this).attr('name');
                    var text = id.slice(-2);
                    var pos = text.replace("_", "");

                    if (valor == arraySelect[pos - 1]) {
                        if (categoriaid == 3) {
                            $(this).addClass('js-correct');
                            $(this).removeClass('js-wrong');
                        } else {
                            $(this).addClass('bien');
                            $(this).removeClass('mal');
                        }
                    } else {
                        if (categoriaid == 3) {
                            $(this).addClass('js-wrong');
                            $(this).removeClass('js-correct');
                        } else {
                            $(this).addClass('mal');
                            $(this).removeClass('bien');
                        }
                    }

                    if (categoriaid == 3) {
                        k = $('.js-correct').length;
                    } else {
                        k = $('.bien').length;
                    }

                    if (k == cantPregunta) {
                        completado = 1;
                    } else {
                        completado = 0;
                    }

                    variables = {
                        cantPregunta: cantPregunta,
                        correctas: k,
                        completado: completado,
                        preguntaid: preguntaid,
                        usu_id: usu_id,
                        control: 'SI'
                    };
                }); // end each

                return $http.post(rest + 'api/Registros/InsertRespuestas', variables).success(function (data) {
                    alertify.success('Saved !!');
                    return data;
                }).error(function (err) {
                    console.log(err);
                });
            }, function () {
                alertify.error('Canceled');
            });
        },
        UploadIframe: function UploadIframe(iframevideo, preguntaid, usu_id) {

            var variables = {
                preguntaid: preguntaid,
                iframevideo: iframevideo,
                usu_id: usu_id
            };

            return $http.post(rest + 'api/Registros/InsertIframe', variables).success(function (data) {
                alertify.success('Saved !!');
                // console.log(data)
                return data;
            }).error(function (err) {
                console.log(err);
            });
        },

        MostrarIframe: function MostrarIframe(preguntaid, usu_id) {

            var variables = {
                preguntaid: preguntaid,
                usu_id: usu_id
            };

            return $http.post(rest + 'api/Registros/ListarIframe', variables).success(function (data) {
                // console.log(data)
                return data;
            }).error(function (err) {
                console.log(err);
            });
        },
        ForosGrupo: function ForosGrupo(preguntaid, usu_id) {

            var variables = {
                preguntaid: preguntaid,
                usu_id: usu_id
            };

            return $http.post(rest + 'api/Registros/ForosGrupo', variables).success(function (data) {
                return data;
            }).error(function (err) {
                console.log(err);
            });
        },
        EnviarForoUser: function EnviarForoUser(preguntaid, usu_id, textoforo) {

            var variables = {
                preguntaid: preguntaid,
                usu_id: usu_id,
                textoforo: textoforo
            };

            return $http.post(rest + 'api/Registros/EnviarForoUser', variables).success(function (data) {
                return data;
            }).error(function (err) {
                console.log(err);
            });
        },

        ListarGrupoForo: function ListarGrupoForo(usu_id) {

            var variables = {
                usu_id: usu_id
            };

            return $http.post(rest + 'api/Registros/ListarGrupoForo', variables).success(function (data) {
                return data;
            }).error(function (err) {
                console.log(err);
            });
        },

        EstadoForoGrupo: function EstadoForoGrupo(preguntaid, usu_id) {

            var variables = {
                preguntaid: preguntaid,
                usu_id: usu_id
            };

            return $http.post(rest + 'api/Registros/EstadoForoGrupo', variables).success(function (data) {
                return data;
            }).error(function (err) {
                console.log(err);
            });
        }

    };

    return ApiRequest;
});

app.filter('unsafe', function ($sce) {
    return $sce.trustAsHtml;
});

app.factory('authorization', ['$rootScope', '$state', '$stateParams', function ($rootScope, $state, $stateParams) {
    return {
        authorize_Level: function authorize_Level() {
            var pathname = window.location.pathname;
            var hash = window.location.hash;
            var separar = pathname.split('/');
            var nivUrl = separar[3];
            var idNivel = void 0;
            var nivelid = $('#nivel_usu_id').val();

            if (nivelid == 4) {
                idNivel = 'B2';
            }
            if (nivelid == 5) {
                idNivel = 'C1';
            }

            if (nivUrl != idNivel) {
                var r = confirm("You do not have active this level");
                if (r == true) {
                    return window.location = '../../content/' + idNivel + '/' + hash;
                } else {
                    return window.location = "../../content/" + idNivel + "/#/units";
                }
            }
        },
        authorize_Rol: function authorize_Rol() {}
    };
}]);