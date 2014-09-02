<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Jugadas del Partido</h1>
                </div>
					 <form id="frmJuego" name="frmjuego" role="form">	
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-18">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Equipo 1 VS Equipo 2
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-3">
                                     <div class="form-group">
                                         <label>Equipo 1</label> <br/>
													  <label>Puntos: </label><h4><label id="puntos1">0</label></h4>		
                                         <div class="radio">
                                             <label>
                                                 <input type="radio" name="jugador" id="jugador1" value="1" checked>Portero
                                             </label>
                                         </div>
                                         <div class="radio">
                                             <label>
                                                 <input type="radio" name="jugador" id="jugador2" value="2">Defensa lateral izquiera
                                             </label>
                                         </div>
                                         <div class="radio">
                                             <label>
                                                 <input type="radio" name="jugador" id="jugador3" value="3">Defensa lateral derecha
                                             </label>
                                         </div>
													  <div class="radio">
                                             <label>
                                                 <input type="radio" name="jugador" id="jugador4" value="4">Defensa Central 
                                             </label>
                                         </div>
													  <div class="radio">
                                             <label>
                                                 <input type="radio" name="jugador" id="jugador5" value="5">Delantero
                                             </label>
                                         </div>
													  <div class="radio">
                                             <label>
                                                 <input type="radio" name="jugador" id="jugador6" value="6">Centrodelantero
                                             </label>
                                         </div>
													  <div class="radio">
                                             <label>
                                                 <input type="radio" name="jugador" id="jugador7" value="7">Medio campista Defensivo
                                             </label>
                                         </div>
													  <div class="radio">
                                             <label>
                                                 <input type="radio" name="jugador" id="jugador8" value="8">Medio campista Ofensivo
                                             </label>
                                         </div>
													  <div class="radio">
                                             <label>
                                                 <input type="radio" name="jugador" id="jugador9" value="9">Medio Campista Interior
                                             </label>
                                         </div>
													  <div class="radio">
                                             <label>
                                                 <input type="radio" name="jugador" id="jugador10" value="10">Carrilero Derecho
                                             </label>
                                         </div>
													  <div class="radio">
                                             <label>
                                                 <input type="radio" name="jugador" id="jugador11" value="11">Carrilero Izquierdo
                                             </label>
                                         </div>								
                                     </div>
                                </div>
										  <!-- /.col-lg-6 (nested) -->
                                <div class="col-lg-6">
										  <h4>Jugadas</h4>
												<div class="form-group">
                                         <label>Ofensiva</label>
                                         <select name="ddlOfensiva" id="ddlOfensiva" class="slt form-control">
															<option value="">---</option>
															<?php foreach($jugada_ofensiva as $ofensiva){?>
                                             	<option value="<?php echo $ofensiva->ID;?>"><?php echo $ofensiva->jugada;?></option>
															<?php } ?>
                                         </select>
                                     </div>
												 <div class="form-group">
                                         <label>Defensiva</label>
                                         <select name="ddlDefensiva" id="ddlDefensiva" class="slt form-control">
                                             <option value="">---</option>
															<?php foreach($jugada_defensiva as $defensiva){?>
                                             	<option value="<?php echo $defensiva->ID;?>"><?php echo $defensiva->jugada;?></option>
															<?php } ?>
                                         </select>
                                     </div>
												 <div class="form-group">
                                         <label>Penalidad</label>
                                         <select name="ddlPenalidad" id="ddlPenalidad" class="slt form-control">
                                             <option value="">---</option>
															<?php foreach($jugada_penalidad as $penalidad){?>
                                             	<option value="<?php echo $penalidad->ID;?>"><?php echo $penalidad->jugada;?></option>
															<?php } ?>
                                         </select>
                                     </div>
												 <button name="btnAddMove" id="btnAddMove" type="button" class="btn btn-default">agregar jugada</button>
                                </div>
                                <!-- /.col-lg-6 (nested) -->	
                                <!-- /.col-lg-3 (nested) -->
                                <div class="col-lg-3">
												<div class="form-group">
                                         <label>Equipo 2</label> <br/>
													  <label>Puntos: </label><h4><label id="puntos2">0</label></h4>	
                                         <div class="radio">
                                             <label>
                                                 <input type="radio" name="jugador" id="jugador12" value="12">Portero
                                             </label>
                                         </div>
                                         <div class="radio">
                                             <label>
                                                 <input type="radio" name="jugador" id="jugador13" value="13">Defensa lateral izquiera
                                             </label>
                                         </div>
													  <div class="radio">
                                             <label>
                                                 <input type="radio" name="jugador" id="jugador14" value="14">Defensa lateral derecha
                                             </label>
                                         </div>
													  <div class="radio">
                                             <label>
                                                 <input type="radio" name="jugador" id="jugador15" value="15">Defensa Central
                                             </label>
                                         </div>
													  <div class="radio">
                                             <label>
                                                 <input type="radio" name="jugador" id="jugador16" value="16">Delantero
                                             </label>
                                         </div>
													  <div class="radio">
                                             <label>
                                                 <input type="radio" name="jugador" id="jugador17" value="17">Centrodelantero
                                             </label>
                                         </div>
													  <div class="radio">
                                             <label>
                                                 <input type="radio" name="jugador" id="jugador18" value="18">Medio campista Defensivo
                                             </label>
                                         </div>
													  <div class="radio">
                                             <label>
                                                 <input type="radio" name="jugador" id="jugador19" value="19">Medio campista Ofensivo
                                             </label>
                                         </div>
													  <div class="radio">
                                             <label>
                                                 <input type="radio" name="jugador" id="jugador20" value="20">Medio Campista Interior
                                             </label>
                                         </div>
													  <div class="radio">
                                             <label>
                                                 <input type="radio" name="jugador" id="jugador21" value="21">Carrilero Derecho
                                             </label>
                                         </div>
                                         <div class="radio">
                                             <label>
                                                 <input type="radio" name="jugador" id="jugador22" value="22">Carrilero Izquierdo
                                             </label>
                                         </div>					
                                    </div>
                                </div>
                                <!-- /.col-lg-3 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
					 <button type="button" id="btnGrabar" class="btn btn-default">Terminar Partida</button>
					 </form>
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
	
	<!-- partida js -->
	<script src="<?php echo $this->config->item('jquery');?>partidos.js"></script>

