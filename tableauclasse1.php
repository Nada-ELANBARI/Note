
<!DOCTYPE html>
<html>
<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default" style=" box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);">
					<div class="panel-heading">Eleves</div>
					<div class="panel-body">
						<table data-toggle="table"   data-search="true"  data-pagination="true"  >
						    <thead>
						    <tr>
						                

						        <th  data-sortable="true" ><h3><center>Id Eleve</center></h3></th>
						        <th   data-sortable="true"><h3><center>Nom</center></h3></th>
						        <th data-sortable="true"><h3><center>Prenom</center></h3></th>
							<th data-sortable="true"><h3><center>Niveau</center></h3></th>
							<th  data-sortable="true" ><h3><center>Password</center></h3></th>


							</tr>
						    </thead>
							<tbody>
							<?php 
							$q =  "select * from eleves where niveau= '1ere annee'";
							$r = $db -> query($q) ;
							while ($c = $r -> fetch())
							{
							?>
							<tr>
							<td> 
							<?php echo $c['id_user'] ; ?>
							</td>
							<td> 
							<?php echo $c['nom']; ?>
							</td>
							<td> 
							<?php echo $c['prenom'] ; ?>
							</td>
							<td> 
							<?php echo $c['niveau'] ; ?>
							</td>
							<td> 
							<?php echo $c['password'] ; ?>
							</td>
							
                            
							<td style = "text-align:center;">
							<?php 
						echo "<a href=\"modifier_eleve.php?id=".$c['nom']."\" class=\"btn btn-warning\">Modifier</span>" ;
							?>
							</td>
					

						
							<td style = "text-align:center;"> 
							<?php 
			
	
			echo "<a href=\"supprimer_eleve.php?id=".$c['nom']."\" class=\"btn btn-danger\">Supprimer</span>" ;
		
		
							?>
							</td>
							</tr>	
							<?php
							}
							?>
							</tbody>
						</table>

					</div>
				</div>
			</div>
		</div>		
		<span><a href="ajouter_eleve.php" class="btn btn-info col-xs-6 col-sm-4 col-lg-2" >Ajouter Eleve</a></span>
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	
	</html>