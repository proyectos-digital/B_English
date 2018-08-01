let app = angular.module('b_english', ['ui.router', 'ngAnimate', 'ngAudio', 'angularAudioRecorder','ngFileUpload','ngSanitize']);

app.run(['$rootScope', '$state', '$stateParams',
function ($rootScope, $state, $stateParams) {
    $rootScope.$state = $state;
    $rootScope.$stateParams = $stateParams;
}])

var rest = 'https://bbdigitaldemo.com/request/b_english/';
// var rest = '../../../back_request/b_english/';

const
      windowDOM = window
    , bodyDOM = document.body
    , selector_mainTemplate = document.querySelector('main.template')
    , selector_templateHeader = document.querySelector('template-header')

    // Añadir un objeto de atributos a un elemento
    , addAttributes = (element, attrObj) => {
        for (let attr in attrObj) {
            if (attrObj.hasOwnProperty(attr)) element.setAttribute(attr, attrObj[attr]);
        }
    } 
    // Crear elementos con atributos e hijo
    , createCustomElement = (element, attributes, children) => {
        let customElement = document.createElement(element);
        if (children !== undefined)
            children.forEach(el => {
                if (el.nodeType) {
                    if (el.nodeType === 1 || el.nodeType === 11) customElement.appendChild(el);
                } else {
                    customElement.innerHTML += el;
                }
            });
        addAttributes(customElement, attributes);
        return customElement;
    }
    // Imprimir modal
    , create_modal_welcomeSection = content => {
        // crear contenedor interno
        const modalContentEl = createCustomElement(
            "div",
            {
                id: "ed-modal-content",
                class: "ed-modal-content"
            },
            [content]
        ),
        // crear contenedor principal
        modalContainerEl = createCustomElement(
            "div",
            {
                id: "ed-modal-container",
                class: "ed-modal-container"
            },
            [modalContentEl]
        );

        let modalId = modalContainerEl.attributes.id.value;
        let FatherDOM = document.getElementById("viewApp");

        // Imprimir el modal
        if (FatherDOM) FatherDOM.appendChild(modalContainerEl);
        // Agregar clase para animar elemento
        setTimeout(function() {
            document.getElementById(modalId).classList.add("is-active");
        }, 10);

        // Remover el modal
        const removeModal = () => {
            // Remover Clase de animación el modal
            if(document.getElementById(modalId)) document.getElementById(modalId).classList.remove("is-active");
            if(document.getElementById(modalId)) document.getElementById(modalId).classList.add("is-remove");

            setTimeout(function() {
                if (modalContainerEl) {
                    if (FatherDOM) {
                        FatherDOM.removeChild(modalContainerEl)}};
            }, 330);
        };

        setTimeout(function() { removeModal() }, 2500);

        modalContainerEl.addEventListener("click", e => {
            removeModal();
        });
    }
    // Imprimir modal
    , create_modal = (content, id_container, id_content) => {
        // crear contenedor interno
        const modalContentEl = createCustomElement(
            "div",
            {
                id: id_content,
                class: "ed-modal-content"
            },
            [content]
        ),
        // crear contenedor principal
        modalContainerEl = createCustomElement(
            "div",
            {
                id: id_container,
                class: "ed-modal-container c-modalObjective"
            },
            [modalContentEl]
        );

        let modalId = modalContainerEl.attributes.id.value;
        let FatherDOM = document.getElementById("viewApp");

        // Imprimir el modal
        if (FatherDOM) FatherDOM.appendChild(modalContainerEl);
        // Agregar clase para animar elemento
        setTimeout(function() {
            document.getElementById(modalId).classList.add("is-active");
        }, 10);

        // Remover el modal
        const removeModal = () => {
            // Remover Clase de animación el modal
            if(document.getElementById(modalId)) document.getElementById(modalId).classList.remove("is-active");
            if(document.getElementById(modalId)) document.getElementById(modalId).classList.add("is-remove");

            setTimeout(function() {
                if (FatherDOM) FatherDOM.removeChild(modalContainerEl);
            }, 330);
        };

        // setTimeout(function() { removeModal() }, 2500);

        modalContainerEl.addEventListener("click", e => {
            if (e.target === modalContainerEl) removeModal();
        });
    }
    , triggerNoticesAside = (accion, options = undefined) => {
        // crea un nuevo elemento div
        const newOverlay = document.createElement("div");
        // agregar clase al nuevo elemento
        let newClassOverlay = newOverlay.classList.add("c-noticeAside-overlay");
        // Insertar nuevo elemento clase al nuevo elemento
        document.getElementById('notice').appendChild(newOverlay);

        if(accion == true ) {
            const newOverlay = document.createElement("div");
            // agregar clase al nuevo elemento
            let newClassOverlay = newOverlay.classList.add("c-noticeAside-overlay");
            // Insertar nuevo elemento clase al nuevo elemento
            document.getElementById('notice').appendChild(newOverlay);
            // Agregar clase al elemento Notice
            document.getElementById('notice').classList.add('is-visible')
        } else if(accion == false ) {
                document.getElementById('notice').classList.remove('is-visible')
                document.getElementById('notice').removeChild(document.querySelector('.c-noticeAside-overlay'));
        } else {console.log(`la acción definida ${accion} no es valida`);}
    }
    , triggerNavigationMenu = (Elm = null, accion = true) => {
        if(accion == true ) {
            if (Elm == 'navSections') {
                // Agregar clase al elemento
                if(document.getElementById('navSections')) document.getElementById('navSections').classList.add('is-visible');
                if(document.getElementById('burguerClose')) document.getElementById('burguerClose').classList.add('is-active');
                if(document.getElementById('burguerOpen')) document.getElementById('burguerOpen').classList.add('is-active');
                document.querySelector('.template-navigation--header').classList.add('is-blur');
                document.querySelector('.template-wrapper').classList.add('is-blur');

                if (document.querySelector('.template-footer')) {
                    document.querySelector('.template-footer').classList.add('no-visible');
                    document.querySelector('.template-navigation--footer ').classList.add('is-blur');
                }
            } else if (Elm == 'navModules') {

                document.getElementById('navModules').classList.add('is-visible');
                document.querySelector('.template-navigation--header').classList.add('is-blur');
                document.querySelector('.template-wrapper').classList.add('is-blur');
                document.querySelector('.template-navigation--footer ').classList.add('is-blur');

            } else if (Elm == 'endSection') {

                document.getElementById('endSection').classList.add('is-visible');
                document.querySelector('.template-navigation--header').classList.add('is-blur');
                document.querySelector('.template-wrapper').classList.add('is-blur');
                document.querySelector('.template-navigation--footer ').classList.add('is-blur');

            }else { console.log(`Se debe definir un elemento valido`);}

        } else if (accion == false) {
            if (Elm == 'navSections' || Elm == 'container_navSections') {

                if(document.getElementById('navSections')) document.getElementById('navSections').classList.remove('is-visible');
                if(document.getElementById('burguerClose')) document.getElementById('burguerClose').classList.remove('is-active')
                if(document.getElementById('burguerOpen')) document.getElementById('burguerOpen').classList.remove('is-active');

                document.querySelector('.template-navigation--header').classList.remove('is-blur');
                document.querySelector('.template-wrapper').classList.remove('is-blur');

                if (document.querySelector('.template-footer')) {
                    document.querySelector('.template-footer').classList.remove('no-visible');
                    document.querySelector('.template-navigation--footer ').classList.remove('is-blur');
                }
            } else if (Elm == 'navModules' || Elm == 'container_navModules') {

                document.getElementById('navModules').classList.remove('is-visible');
                document.querySelector('.template-navigation--header').classList.remove('is-blur');
                document.querySelector('.template-wrapper').classList.remove('is-blur');
                document.querySelector('.template-navigation--footer').classList.remove('is-blur');

            } else if (Elm == 'endSection' || Elm == 'container_endSection') {

                document.getElementById('endSection').classList.remove('is-visible');
                document.querySelector('.template-navigation--header').classList.remove('is-blur');
                document.querySelector('.template-wrapper').classList.remove('is-blur');
                document.querySelector('.template-navigation--footer').classList.remove('is-blur');

            } else { console.log(`Se debe definir un elemento valido`);}

        } else { console.log(`la acción definida ${accion} no es valida`); }

    }
    , triggerModalHello = (accion, options = undefined) => {

        if(accion == true ) {
            // Agregar clase al elemento Notice
            document.getElementById('cModalHelloSection').classList.add('is-visible')
        } else if(accion == false ) {
            setTimeout(function() {
                document.getElementById('cModalHelloSection').classList.remove('is-visible')
            }, 2000);
        } else {console.log(`la acción definida ${accion} no es valida`);}
    }
    , func_Maqueta = {
        func_triggerNotice : function(elm) {
            if (document.getElementById('notice')) {

                if (document.getElementById('notice').classList.contains('is-visible')) {
                    const newOverlay = document.createElement("div");
                    // agregar clase al nuevo elemento
                    let newClassOverlay = newOverlay.classList.add("c-noticeAside-overlay");
                    // Insertar nuevo elemento clase al nuevo elemento
                    document.getElementById('notice').appendChild(newOverlay);

                    document.querySelector('.c-noticeAside-overlay').addEventListener('click', function() {
                        triggerNoticesAside(false);
                        document.getElementById('notice').removeChild(document.querySelector('.c-noticeAside-overlay'));
                    });

                    [...document.querySelectorAll('.closeNotice')].forEach(function(elm_, indicador) {
                        elm_.addEventListener('click', function() {
                            document.getElementById('notice').classList.remove('is-visible');
                            document.getElementById('notice').removeChild(document.querySelector('.c-noticeAside-overlay'));
                        })
                    }, this);
                }

                elm.forEach(function(el, indice) {
                    el.addEventListener('click', e => {
                        const newOverlay = document.createElement("div");
                        // agregar clase al nuevo elemento
                        let newClassOverlay = newOverlay.classList.add("c-noticeAside-overlay");
                        // Insertar nuevo elemento clase al nuevo elemento
                        document.getElementById('notice').appendChild(newOverlay);
                        // Agregar clase al elemento Notice
                        document.getElementById('notice').classList.add('is-visible');

                        document.querySelector('.c-noticeAside-overlay').addEventListener('click', function() {
                            if (document.getElementById('notice').classList.contains('is-visible')) {
                                triggerNoticesAside(false);
                                document.getElementById('notice').removeChild(document.querySelector('.c-noticeAside-overlay'));
                            }
                        });
                        if (document.getElementById('notice').classList.contains('is-visible')) {

                            [...document.querySelectorAll('.closeNotice')].forEach(function(elm_, indicador) {
                                elm_.addEventListener('click', function() {
                                    document.getElementById('notice').classList.remove('is-visible');
                                    document.getElementById('notice').removeChild(document.querySelector('.c-noticeAside-overlay'));
                                })
                            }, this);
                        }
                    })
                }, this);
            }
        }
    }
    , chainableLayout = function(){
        const
            $cont                 = document.querySelector('.chainable')
            , $elsArr               = [].slice.call(document.querySelectorAll('.chainableEl'))
            , $closeBtnsArr         = [].slice.call(document.querySelectorAll('.chainableEl__close-btn'))
            , $c                    = (a) => {console.log(a)}
        ;


        setTimeout(function() {
            $cont.classList.remove('is-inactive');
        }, 200);

        $elsArr.forEach(function($el) {
            $el.addEventListener('click', function(e) {
                if(this.classList.contains('is-locked')) return;
                if(this.classList.contains('is-disabled')) return;
                if (this.classList.contains('is-active')) return;
                $cont.classList.add('is-chainableEl-active');
                this.classList.add('is-active');
                bodyDOM.style.overflow = 'hidden'
            });
        });

        $closeBtnsArr.forEach(function($btn) {
            $btn.addEventListener('click', function(e) {
                e.stopPropagation();
                $cont.classList.remove('is-chainableEl-active');
                document.querySelector('.chainableEl.is-active').classList.remove('is-active');
                bodyDOM.style.overflow = 'initial'
            });
        });
    }
    , flickitySlide = function(cellCarousel, cellSelector, cellButtonGroup, cellButtons, buttonPrevious = null, buttonNext = null, heightCellSelector = 500){

        let
              _cellCarousel     = cellCarousel
            , _cellSelector     = cellSelector
            , _cellButtonGroup  = cellButtonGroup
            , _cellButtons      = cellButtons
            , _buttonPrevious   = buttonPrevious
            , _buttonNext       = buttonNext
            , _controlsSlides   = 'c-flickity-controlsSlides'
            , _cellTotal   = 'c-flickity--cell-total'
        ;

        $(`.${_cellSelector}`).outerHeight(heightCellSelector);
        $(`.flickity-viewport`).height(heightCellSelector + 10);

        let $carousel = $(`.${_cellCarousel}`).flickity({
            prevNextButtons: false,
            pageDots: false,
            cellSelector: `.${_cellSelector}`
            , adaptiveHeight: true
            , draggable: false
        });
        // Flickity instance
        let flkty = $carousel.data('flickity');
        // elements
        let $cellButtonGroup = $(`.${_cellButtonGroup}`);
        let $cellButtons = $cellButtonGroup.find(`.${_cellButtons}`);

        // update selected cellButtons
        $carousel.on( 'select.flickity', function() {
            $cellButtons.filter('.is-selected').removeClass('is-selected');
            $cellButtons.eq( flkty.selectedIndex ).addClass('is-selected');
        });

        // select cell on button click
        $cellButtonGroup.on( 'click', `.${_cellButtons}`, function() {
            let index = $(this).index();
            $carousel.flickity( 'select', index );
        });

        if ((_buttonNext || _buttonPrevious) == null) return //console.log('no estan definidor los botones prev y next')
        // previous
        $(`.${_buttonPrevious}`).on( 'click', function() {
            $carousel.flickity('previous');
        });
        // next
        $(`.${_buttonNext}`).on( 'click', function() {
            $carousel.flickity('next');
        });
    }
    , speechRecognition = function() {
        let
            findedWord = undefined
            // Elemento contenedor principal
            , ElmRecognition = 'c-recognition'
            // Elemento titulo indicador de la palabra elegida
            , ElmRecognitionTitle = 'c-recognitionTitle'
            // Elemento boton para activar el reconocimiento de voz
            , ElmRecognitionBtnRec = 'c-recognitionRec'
            // Elemento boton para desactivar el reconocimiento de voz
            , ElmRecognitionBtnSend = 'c-recognitionCheck'
            // Elemento boton/input-label que contiene la palabra a grabar
            , ElmTagWord = 'c-recognitionWord'
                // var para asignarle el ID
                , ElmTagWord_identify
                // var para asignarle el name
                , ElmTagWord_attrName
                , wantedWord = `.${ElmTagWord}[data-verb='${findedWord}']`
            // Elemento que restaura todo el juego
            , ElmReload = 'recognitionReload'
            // Elemento textarea que guardara la palabra grabada
            , ElmTextArea = 'recognitionSaveText'
        ;

        $(`.${ElmTagWord}`).click(function(){
            $(`#${ElmTextArea}`).val('');
            findedWord = $(this).attr('data-verb').toLowerCase();
            ElmTagWord_identify = $(this).attr('id');
            ElmTagWord_attrName = $(this).attr('name');
        });

        let recognition;
        let recognizing = false;

        if (!('webkitSpeechRecognition' in window)) {
            upgrade();
        } else {
            recognition = new webkitSpeechRecognition();
            recognition.lang = "en-US";
            recognition.continuous = true;
            recognition.interimResults = true;

            //- recognition.onstart
            recognition.onstart = function(){
                recognizing = true;
                alertify.success("are you ready? start speak");

                $(`.${ElmRecognition}`).addClass("on-record");
                $(`.mal.${ElmTagWord}:checked`).removeClass('mal')
            }
            //- recognition.onresult
            recognition.onresult = function(event){
                for (var i = event.resultIndex; i < event.results.length; i++) {
                    if(event.results[i].isFinal) document.getElementById(ElmTextArea).value += event.results[i][0].transcript;
                }
            }
            //- recognition.onerror
            recognition.onerror = function(event){}
            //- recognition.onend
            recognition.onend = function(){
                recognizing = false;

                let
                    wordUser = $(`#${ElmTextArea}`).val().toLowerCase()
                    , seachUserWord = wordUser.split(' ');

                console.log(`${seachUserWord} vs ${findedWord}`)

                if(findedWord == seachUserWord){
                    alertify.success("It's ok");
                    $(`#${ElmTagWord_identify}`).removeClass("mal");
                    $(`#${ElmTagWord_identify}`).addClass("bien");
                    $(`#${ElmTagWord_identify}`).attr("checked", true);
                    $(`#${ElmTagWord_identify}`).attr("name", `${ElmTagWord_attrName}_${findedWord}`);
                    $(`#${ElmTextArea}`).val('');
                } else {
                    alertify.error("Try Again");
                    $(`#${ElmTagWord_identify}`).addClass("mal");
                    $(`#${ElmTextArea}`).val('');
                    $(`.${ElmRecognitionTitle}`).text('');

                }

                $(`.${ElmRecognition}`).removeClass("on-record");
                $(`.${ElmRecognition}`).addClass("on-pause");
            }
        };
        function procesar(action) {
            if(findedWord === undefined) {
                alertify.error("Select a verb");
            } else {
                if (recognizing == false && action == 1) {
                    recognition.start();
                    recognizing = true;
                }
                if(action == 2){
                    recognition.stop();
                    recognizing = false;
                }
            }
        };
        function upgrade(){
            alert("¡API no soportada por este navegador!");
        };
        function recognitionReload(){
            // restaurar variable
            findedWord = undefined;
            // Limpiar El titulo
            $(`.${ElmRecognitionTitle}`).text('');
            $(`#${ElmTextArea}`).val('');
            // Limpiar los input
            $(`.${ElmTagWord}:checked`).each(function(indice,campo){
                $(this).prop('checked', false);
                $(`#${ElmTagWord_identify}`).attr("name", `${ElmTagWord_attrName}`);
            })
        }
        $(`.${ElmRecognitionBtnRec}`).on('click', function(action){
            procesar(1);
        });
        $(`.${ElmRecognitionBtnSend}`).on('click', function(action){
            procesar(2);
        });
        $(`.${ElmReload}`).on('click', function(action){
            recognitionReload();
        });
    }
;

window.addEventListener('keyup', e => {
    if (document.getElementById('notice')) {
        if (document.getElementById('notice').classList.contains('is-visible')) {
            if (e.key === 'Escape') {
                triggerNoticesAside(false);
                document.getElementById('notice').removeChild(document.querySelector('.c-noticeAside-overlay'));
            }
        }
    }
    if (document.getElementById('navSections')) {
        if (document.getElementById('navSections').classList.contains('is-visible')) {
            if (e.key === 'Escape') {
                triggerNavigationMenu('navSections', false);
            }
        }
    }
    if (document.getElementById('navModules')) {
        if (document.getElementById('navModules').classList.contains('is-visible')) {
            if (e.key === 'Escape') {
                triggerNavigationMenu('navModules', false);
            }
        }
    }
})
