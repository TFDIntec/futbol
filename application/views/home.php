<div id="page-wrapper">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Tables</h1>
		</div>
		<!-- /.col-lg-12 -->
	</div>
	<!-- /.row -->
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					DataTables Advanced Tables
				</div>
				<!-- /.panel-heading -->
				<div class="panel-body">
					<div class="table-responsive">
						<table class="table table-striped table-bordered table-hover" id="dataTables-example">
							<thead>
								<tr>
									<th>Partidos</th>
									<th>equipos</th>
									<th>puntuacion</th>
									<th>ver</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach($partidos as $partido){ ?>
								<tr class="odd gradeX">
									<td><?php echo $partido->ID; ?></td>
									<td><?php echo $partido->equipo_1; ?></td>
									<td class="center"><?php echo $partido->equipo_1_puntos; ?></td>
									<td class="center"><button>VER</button></td>
								</tr>
								<?php } ?>
							</tbody>
						</table>
					</div>
					<!-- /.table-responsive -->
				<!-- /.panel-body -->
			</div>
			<!-- /.panel -->
		</div>
		<!-- /.col-lg-12 -->
	</div>
</div>
<!-- /#page-wrapper -->