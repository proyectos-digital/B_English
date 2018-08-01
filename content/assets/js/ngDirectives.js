'use strict';

app.directive('calificacionFase', function () {
  return {
    restrict: 'E',
    scope: {
      customerInfo: '=nota'
    },
    // replace: true,
    template: function template(elem, attr) {
      var nota__esperada = attr.notafinal;
      var html = '\n            <div class=\'calificacion__fase\' ng-audio=\'' + nota__esperada + '\'>\n                <span class=\'calificacion__fase--final\'>  {{customerInfo.nota}}  </span>\n                <span class=\'calificacion__fase--esperada\' data-porcent="' + nota__esperada + '">' + nota__esperada + '</span>\n            </div>\n            ';

      // html += "<div class='calificacion__fase' ng-audio='"+nota__esperada+"'>";
      //     html += "<span class='calificacion__fase--final'>  {{customerInfo.nota}}  </span>";
      //     html += "<span class='calificacion__fase--esperada' data-porcent="+nota__esperada+">"+nota__esperada+"</span>";
      // html += "</div>";

      return html;
    }
    // replace: true
  };
});