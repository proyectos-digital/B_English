const selectorElem = (element, attr) => {
    if( attr == 'id' ){
       return document.getElementById(`${element}`)
    }
    if( attr == 'class' ){
       return document.querySelector(`.${element}`)
    }
    if( attr == 'clases' ){
       return [...document.querySelectorAll(`.${element}`)]
    }
};

(function ( $ ) {
    $.fn.game_howIsIt = function(arrPistas) {
        let 
            iter = 0, 
            puntos = 100,
            leftUser = 0,
            leftRunner = 0,
            avatarSRC,
            nameGame = 'HowIsIt',
            elementos = {
                game                            : selectorElem('c-game', 'class')
                , gameBody                      : selectorElem('js-game--body', 'class')
                , gameFeedBack                  : selectorElem('js-game--feedBack', 'class')
                    , gameFeedBack_welcome          : selectorElem('js-game--welcome', 'class')
                    , gameFeedBack_selectAvatar       : selectorElem('js-game--selectAvatar', 'class')
                        , gameFeedBack_selectAvatar_imagen       : selectorElem('js-game--selectImage', 'class')
                    , gameFeedBack_instructions     : selectorElem('js-game--instructions', 'class')
                , gameNotices                   : selectorElem('js-game--notices', 'class')
                    , gameNoticesWin                : selectorElem('c-game--notices-youWin', 'class')
                    , gameNoticesStalemate          : selectorElem('c-game--notices-youStalemate', 'class')
                    , gameNoticesLose               : selectorElem('c-game--notices-youLose', 'class')
                , gameContent                   : selectorElem('js-game--content', 'class')
                , gameScenes                    : selectorElem('js-game--scene', 'class')
                    , gameScenes_one                : selectorElem('js-game--scene-one', 'class')
                    , gameScenes_two                : selectorElem('js-game--scene-two', 'class')
                    , gameScenes_three              : selectorElem('js-game--scene-three', 'class')
                , gameFooter                    : selectorElem('js-game--footer', 'class')
                    , gameBtn_one                    : selectorElem('js-game--btn-one', 'class')
                    , gameBtn_two                    : selectorElem('js-game--btn-two', 'class')
                    , gameBtn_three                  : selectorElem('js-game--btn-three', 'class')
                , gameInputName                  : selectorElem('js-game--inputName', 'class')
                , gameUserName                    : selectorElem('js-game--nameUser', 'clases')
                , gameUserAvatar                    : selectorElem('js-game--avatarSelected', 'class')
                , gamePistaKarem                : selectorElem('js-game--pista-karem', 'class')
                    , gamePistaKarem_frase                : selectorElem('js-game--pista-karem_frase', 'class')
                , gamePistaUser                 : selectorElem('js-game--pista-user', 'class')
                    , gamePistaUser_frase                 : selectorElem('js-game--pista-user_frase', 'class')
            }
        ;
        //--------------------------
        //addAttributes(elementos.game, {id: nameGame} )
        //--------------------------
        let
            scoreUser = 0,
            scoreRunner = 0,
            preguntas = arrPistas.map((op, index) => op[iter] ),
            pregunta_Iter = preguntas,
            fnGenerarPreguntas = () => {
                if(elementos.gamePistaKarem){
                    let todaslasPistas = arrPistas[0].length;
                    let btnOptiones = (q) =>  createCustomElement('button', {
                        class: 'js-game--pista',
                        game: 'game--pista-opcion',
                      }, [q]);
                    
                    for(let i = 0; i < todaslasPistas; i++){
                        elementos.gamePistaKarem.appendChild(btnOptiones(i+1));
                        elementos.gamePistaUser.appendChild(btnOptiones(i+1));
                    }
                    [...elementos.gamePistaKarem.children].forEach((elm, idx) => {
                        elm.addEventListener('click', e =>{
                            elementos.gamePistaKarem_frase.textContent = arrPistas[0][idx];
                        });
                    });
                    [...elementos.gamePistaUser.children].forEach((elm, idx) => {
                        elm.addEventListener('click', e =>{
                            elementos.gamePistaUser_frase.textContent = arrPistas[1][idx];
                        });
                    });
                }
             },
            fnInit = (e) => {
                fnGenerarPreguntas()
                if(elementos.gameFeedBack_selectAvatar) {
                    if ( !elementos.gameFeedBack_selectAvatar.classList.contains('is-hidden') ) {
                        elementos.gameFeedBack_selectAvatar.classList.add('is-hidden');
                        if(elementos.gameFeedBack) elementos.gameFeedBack.classList.add('is-hidden'); }
                }
                if(elementos.gameBody) {
                    if ( elementos.gameBody.classList.contains('is-hidden') ) {
                        
                        elementos.gameBody.classList.remove('is-hidden');
                        
                        [...elementos.gameUserName].forEach((elm, idx) => {
                            elm.textContent = elementos.gameInputName.value;
                        });
                        setTimeout( () => {
                            if(elementos.gameContent) elementos.gameContent.classList.remove('is-hidden');
                        },2000);
                        
                        [...elementos.gameScenes.children].forEach((el, indice) => { 
                            el.classList.add('is-hidden');
                            if(indice == 0) el.classList.remove('is-hidden');
                        });
                        [...elementos.gameFooter.children].forEach((el, indice) => { 
                            el.addEventListener('click', e => {
                                if(el.classList == "js-game--btn-one") {
                                    if(elementos.gameScenes_one.classList.contains('is-hidden')){
                                       elementos.gameScenes_one.classList.remove('is-hidden')
                                       elementos.gameScenes_two.classList.add('is-hidden')
                                       elementos.gameScenes_three.classList.add('is-hidden')
                                    }
                                }
                                if(el.classList == "js-game--btn-two") {
                                    if(elementos.gameScenes_two.classList.contains('is-hidden')){
                                       elementos.gameScenes_one.classList.add('is-hidden')
                                       elementos.gameScenes_two.classList.remove('is-hidden')
                                       elementos.gameScenes_three.classList.add('is-hidden')
                                    }
                                }
                                if(el.classList == "js-game--btn-three") {
                                    if(elementos.gameScenes_three.classList.contains('is-hidden')){
                                       elementos.gameScenes_one.classList.add('is-hidden')
                                       elementos.gameScenes_two.classList.add('is-hidden')
                                       elementos.gameScenes_three.classList.remove('is-hidden')
                                    }
                                }
                            })
                        });
                    } 
                }
            },
            fnReset = (e=false) => {
                if(elementos.game) elementos.game.classList.remove('no-init');
                if(elementos.gameBody) elementos.gameBody.classList.add('is-hidden');
                if(elementos.gameNotices) elementos.gameNotices.classList.add('is-hidden');
                if(elementos.gameNotices) elementos.gameNotices.classList.add('is-hidden');
                if(elementos.gameContent) elementos.gameContent.classList.add('is-hidden'); 
                if(elementos.gameFeedBack_instructions) elementos.gameFeedBack_instructions.classList.add('is-hidden'); 
                if(elementos.gameFeedBack_selectAvatar) elementos.gameFeedBack_selectAvatar.classList.add('is-hidden');
                if(e === true)  fnInit(); 

            },
            fnFinJuego = () => {
                elementos.gameContent.classList.add('is-hidden');

                setTimeout(()=>{
                    if ( elementos.gameNotices.classList.contains('is-hidden') ) {
                        elementos.gameNotices.classList.remove('is-hidden'); 
                    }
                    elementos.gameNotices.addEventListener('click', function(e){
                        fnReset(true)
                    })
                },2000)
            },
            fnWelcome = (e) => {

                if ( !elementos.gameFeedBack_welcome.classList.contains('is-hidden') ) {
                    elementos.gameFeedBack_welcome.classList.add('is-hidden');
                    elementos.gameFeedBack_instructions.classList.remove('is-hidden');
                }

            },
            fnInstructions = (e) => {
                if ( !elementos.gameFeedBack_instructions.classList.contains('is-hidden') ) { 
                    elementos.gameFeedBack_instructions.classList.add('is-hidden');
                    elementos.gameFeedBack_selectAvatar.classList.remove('is-hidden');
                } 
            }
         ;
        //--------------------------
        fnReset();
        //--------------------------
        elementos.gameFeedBack.addEventListener('click', function(e){
            if ( e.target === elementos.gameFeedBack) return
        });
        //--------------------------
        elementos.gameFeedBack_welcome.addEventListener('click', fnWelcome);
        //--------------------------
        elementos.gameFeedBack_instructions.addEventListener('click', fnInstructions);
        //--------------------------
        [...elementos.gameFeedBack_selectAvatar_imagen.children].forEach((el, indice) => {
            el.addEventListener('click', e => {
                if(el.nodeName == "LABEL") {
                    if(el.children[0].nodeName == "IMG") {
                        avatarSRC = el.children[0].getAttribute('src');
                        addAttributes(elementos.gameUserAvatar,{
                            src: avatarSRC
                        });
                    }
                }
            })
        });
        //--------------------------
        document.querySelector('.js-game--selectAvatar .js-game--imageSection').addEventListener('click', e => {
            if ( elementos.gameInputName.value === '' ) {
                    alert('Input your name') 
            } else {
                fnInit()
            }
        });

    };
}( jQuery ));