<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Jugadas del Partido</h1>
                </div>
					 <form role="form">	
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
                                         <label>Equipo 1</label>
                                         <div class="radio">
                                             <label>
                                                 <input type="radio" name="jugador" id="jugador1" value="option1" checked>Radio 1
                                             </label>
                                         </div>
                                         <div class="radio">
                                             <label>
                                                 <input type="radio" name="jugador" id="jugador2" value="option2">Radio 2
                                             </label>
                                         </div>
                                         <div class="radio">
                                             <label>
                                                 <input type="radio" name="jugador" id="jugador3" value="option3">Radio 3
                                             </label>
                                         </div>
													  <div class="radio">
                                             <label>
                                                 <input type="radio" name="jugador" id="jugador4" value="option3">Radio 3
                                             </label>
                                         </div>
													  <div class="radio">
                                             <label>
                                                 <input type="radio" name="jugador" id="jugador5" value="option3">Radio 3
                                             </label>
                                         </div>
													  <div class="radio">
                                             <label>
                                                 <input type="radio" name="jugador" id="jugador6" value="option3">Radio 3
                                             </label>
                                         </div>
													  <div class="radio">
                                             <label>
                                                 <input type="radio" name="jugador" id="jugador7" value="option3">Radio 3
                                             </label>
                                         </div>
													  <div class="radio">
                                             <label>
                                                 <input type="radio" name="jugador" id="jugador8" value="option3">Radio 3
                                             </label>
                                         </div>
													  <div class="radio">
                                             <label>
                                                 <input type="radio" name="jugador" id="jugador9" value="option3">Radio 3
                                             </label>
                                         </div>
													  <div class="radio">
                                             <label>
                                                 <input type="radio" name="jugador" id="jugador10" value="option3">Radio 3
                                             </label>
                                         </div>
													  <div class="radio">
                                             <label>
                                                 <input type="radio" name="jugador" id="jugador11" value="option3">Radio 3
                                             </label>
                                         </div>								
                                     </div>
                                </div>
										  <!-- /.col-lg-6 (nested) -->
                                <div class="col-lg-6">
										  <label>Jugadas</label>
												<div class="form-group">
                                         <label>Ofensiva</label>
                                         <select class="form-control">
															<option value="">---</option>
															<?php foreach($jugada_ofensiva as $ofensiva){?>
                                             	<option value="<?php echo $ofensiva->ID;?>"><?php echo $ofensiva->jugada;?></option>
															<?php } ?>
                                         </select>
                                     </div>
												 <div class="form-group">
                                         <label>Defensiva</label>
                                         <select class="form-control">
                                             <option value="">---</option>
															<?php foreach($jugada_defensiva as $defensiva){?>
                                             	<option value="<?php echo $defensiva->ID;?>"><?php echo $defensiva->jugada;?></option>
															<?php } ?>
                                         </select>
                                     </div>
												 <div class="form-group">
                                         <label>Penalidad</label>
                                         <select class="form-control">
                                             <option value="">---</option>
															<?php foreach($jugada_penalidad as $penalidad){?>
                                             	<option value="<?php echo $penalidad->ID;?>"><?php echo $penalidad->jugada;?></option>
															<?php } ?>
                                         </select>
                                     </div>	
                                </div>
                                <!-- /.col-lg-6 (nested) -->	
                                <!-- /.col-lg-3 (nested) -->
                                <div class="col-lg-3">
												<div class="form-group">
                                         <label>Equipo 2</label>
                                         <div class="radio">
                                             <label>
                                                 <input type="radio" name="jugador" id="jugador12" value="option2">Radio 2
                                             </label>
                                         </div>
                                         <div class="radio">
                                             <label>
                                                 <input type="radio" name="jugador" id="jugador13" value="option3">Radio 3
                                             </label>
                                         </div>
													  <div class="radio">
                                             <label>
                                                 <input type="radio" name="jugador" id="jugador14" value="option3">Radio 3
                                             </label>
                                         </div>
													  <div class="radio">
                                             <label>
                                                 <input type="radio" name="jugador" id="jugador15" value="option3">Radio 3
                                             </label>
                                         </div>
													  <div class="radio">
                                             <label>
                                                 <input type="radio" name="jugador" id="jugador16" value="option3">Radio 3
                                             </label>
                                         </div>
													  <div class="radio">
                                             <label>
                                                 <input type="radio" name="jugador" id="jugador17" value="option3">Radio 3
                                             </label>
                                         </div>
													  <div class="radio">
                                             <label>
                                                 <input type="radio" name="jugador" id="jugador18" value="option3">Radio 3
                                             </label>
                                         </div>
													  <div class="radio">
                                             <label>
                                                 <input type="radio" name="jugador" id="jugador19" value="option3">Radio 3
                                             </label>
                                         </div>
													  <div class="radio">
                                             <label>
                                                 <input type="radio" name="jugador" id="jugador20" value="option3">Radio 3
                                             </label>
                                         </div>
													  <div class="radio">
                                             <label>
                                                 <input type="radio" name="jugador" id="jugador21" value="option3">Radio 3
                                             </label>
                                         </div>
                                         <div class="radio">
                                             <label>
                                                 <input type="radio" name="jugador" id="jugador22" value="option1" checked>Radio 1
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
					 <button type="submit" class="btn btn-default">Submit Button</button>
                <button type="reset" class="btn btn-default">Reset Button</button>
					 </form>
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
	
	<!-- partida js -->
	<script src="<?php echo $this->config->item('jquery');?>partidos.js"></script>

