jQuery(document).ready(function($) {
	var jugadas = [];
	var puntos1 = 0;
	var puntos2	= 0;
	$("#ddlOfensiva").change(function(){
		if($("#ddlOfensiva") != ""){
			$("#ddlDefensiva").val("");
			$("#ddlPenalidad").val("");		
		}
	});
	
	$("#ddlDefensiva").change(function(){
		if($("#ddlDefensiva") != ""){
			$("#ddlOfensiva").val("");
			$("#ddlPenalidad").val("");		
		}
	});

	$("#ddlPenalidad").change(function(){
		if($("#ddlPenalidad") != ""){
			$("#ddlOfensiva").val("");
			$("#ddlDefensiva").val("");		
		}
	});
	
	$("#btnAddMove").click(function(){		
		if($("#ddlOfensiva").val() == "" && $("#ddlDefensiva").val() == "" && $("#ddlPenalidad").val() == ""){
			alert("debe seleccionar una jugada");
			return false;	
		}else{
			/*jugadas*/
			$(".slt").each(function(){
				if($(this).val() != ""){
					var move = [];
					var equipo = 1;
					move.push($(this).val());
					/*jugador*/					
					$("input:radio").each(function(){
						if($(this).is(":checked")){
							if($(this).val() > 11) equipo = 2;
							move.push($(this).val());
						}			
					});
					jugadas.push(move);
					move = [];
				if($(this).val() == 1)
				{
					if(equipo > 1){
						puntos2++;
						$("#puntos2").text(puntos2);
					}else{
						puntos1++;
						$("#puntos1").text(puntos1);
					}				
				} 	
				}
				
			});
			alert("se agrego la jugada");
		}		
	
	});

	$("#btnGrabar").click(function(e){
		$.ajax({
        url:_base_url+"partida/grabar_partida",
        type:'POST',
        dataType: "json",
        data:{jugadas:jugadas,puntos1:puntos1,puntos2:puntos2},
        success:function(data){
            console.log(data);
				alert('se termino la partida');
				window.location.href = _base_url;
        },
        error: function (request, status, error) {
            console.log(request);
            console.log(status);
            console.log(error);
				alert('se termino la partida');
				window.location.href = _base_url;
        }
    });
	});

});
