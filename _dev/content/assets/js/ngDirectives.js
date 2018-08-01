app.directive('calificacionFase', function() {
	return {
		restrict: 'E',
		scope: {
        	customerInfo: '=nota'
		},
        // replace: true,
		template:function(elem,attr){
			var nota__esperada = attr.notafinal;
            var html = `
            <div class='calificacion__fase' ng-audio='${nota__esperada}'>
                <span class='calificacion__fase--final'>  {{customerInfo.nota}}  </span>
                <span class='calificacion__fase--esperada' data-porcent="${nota__esperada}">${nota__esperada}</span>
            </div>
            `;
			
            // html += "<div class='calificacion__fase' ng-audio='"+nota__esperada+"'>";
            //     html += "<span class='calificacion__fase--final'>  {{customerInfo.nota}}  </span>";
            //     html += "<span class='calificacion__fase--esperada' data-porcent="+nota__esperada+">"+nota__esperada+"</span>";
			// html += "</div>";

			return html;
		}
        // replace: true
	};
});