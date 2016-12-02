<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
		   <div class="modal-content">
		      	<div class="modal-header">
		        	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        	<h4 class="modal-title" id="myModalLabel">Cambio #223 </h4>
		      	</div>
		    	<div class="modal-body">
					<div class="row">
						<div class="col-md-5">
							<p class="text-info">SOLICITANTE</p>
							<p class="text-info">TIEMPO ESTIMADO</p>
							<p class="text-info">VENCIMIENTO</p>
							<p class="text-info">EQUIPO</p>
							<p class="text-info">IMPACTO</p>
							<p class="text-info">PRIORIDAD</p>
							<p class="text-info">CATEGORIA</p>
						</div>
						<form action="panelAdministrador.php" method="post">
							<input type="hidden" id="idCambio" name="idCambio">
							<div class="col-md-5 col-md-offset-1">
								<p class="text-right">	
									//Luna, Sixto
								<?php 
			        				echo "<p cla>".$arrayCambios[0]->getNombreSolicitante()."</p>"; 
								?>
								</p>
								<p class="text-right">
									5 dias
									<?php  ?>
								</p>
								<p class="text-right">
									30/10/16
									<?php  ?>
								</p>
								<p class="text-right">
									<?php  ?>
								</p>
								<p class="text-right">
									PC001
									<?php  ?>
								</p>
								<p class="text-right">
									BAJA
									<?php  ?>
								</p>
								<p class="text-right text-danger">
									ALTA
									<?php  ?>
								</p>
								<p class="text-right">
									Sin asignar
								</p>
							</div>
						</div>
						<br>
					    <p  class="text-info">DESCRIPCION</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipiselit. Officiis dolore excepturi earum vitae qui a at provident recusandae repellendus fuga rem aliquid voluptates quod ea fugit harum, labore assumenda. Vip
						<p class="text-info">MOTIVO</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum deserunt facere, accusamus magni voluptatem rem placeat quidem laborum iusto expedita, a odio quasi aliquid eius perspiciatis error modi hic </p>
						<p class="text-info">PROPOSITO</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur enim deleniti vero provident harum iste quae, et blanditiis, tempora laudantium quis cupiditate dolor. Odit ullam quisquam voluptatibus praesentium, repellendus ex!</p>
		    	</div>
			    <div class="modal-footer">
			    	<?php 
			    		if(isset($_GET['estado'])){
			    			switch ($_GET['estado']) {
			    				case 'aceptado':
			    					echo "<button type='submit' class='btn btn-default' >ANULAR</button>";
			    					echo "<button type='submit' class='btn btn-primary'>APROBAR</button>";
			    					break;
			    				case 'aprobado':
			    					echo "<div class='input-group'><span class='input-group-addon'><i class='fa fa-user-circle' aria-hidden='true'></i></span>";
			    					echo "<input type='text' placeholder='Encargado...' class='form-control'>";
			    					echo "</div>";
			    					echo "<div class='input-group'><span class='input-group-addon'><i class='fa fa-calendar' aria-hidden='true'></i></span>";
			    					echo "<input type='date' class='form-control'>";
			    					echo "</div>";
			    					echo "<br><button type='submit' class='btn btn-primary'>CONFIRMAR</button>";
			    					break;
			    				case 'planificado':
			    					echo "<button type='button' class='btn btn-primary' data-dismiss='modal'>CERRAR</button>";
			    					break;
			    				case 'realizado':
									echo "<button type='button' class='btn btn-primary' data-dismiss='modal'>CERRAR</button>";
			    					break;
			    				case 'cerrado':
									echo "<button type='submit' class='btn btn-default'>REPLANIFICAR</button>";
			    					echo "<button type='submit' class='btn btn-primary'>CERRAR CAMBIO</button>";
			    					break;
			    				default:
			    					echo "<button type='submit' class='btn btn-default' >ANULAR</button>";
			    					echo "<button type='submit' class='btn btn-primary'>APROBAR</button>";
			    					break;
			    				}
			    			}
			    		else {
			    			echo "<button type='submit' class='btn btn-default' >ANULAR</button>";
			    			echo "<button type='submit' class='btn btn-primary'>APROBAR</button>";	
			    		}

			    	 ?>
			    	 </form>
			    </div>
			</div>	
	</div>
</div>