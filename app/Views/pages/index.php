<div class="container">
	<div class="row">
		<div class="col-12 col-md-12 col-sm-12"> <!-- col-lg-12 col-md-12 col-sm-6-->
		<?php
		if (session()->getFlashdata('status'))
		{
			echo "<h4>".session()->getFlashdata('status')."</h4>";
		}
		?>
		
		<div class="card">
			<div class="card-header">
				<h4>Přidej školu<a href="<?= base_url('school_add') ?>" class="btn btn-primary float-right">Přidej školu</a></h4>
			</div>
		</div>
		</div>

		<div class="col-12 col-md-12 col-sm-12">
			<table id="table_id" class="display table striped table-bordered">
				<thead class='thead thead-dark'>
					<tr>
						<th scope="col">ID Škola</th>
						<th scope="col">Obor</th>
						<th scope="col">Počet přijatých žáků</th>
						<th scope="col">Město</th>
						<th scope="col">Škola</th> 
						<th scope="col">Rok přijetí</th> 
						<th scope="col">Lattitude</th> 
						<th scope="col">Longtitude</th> 
						<th scope="col">Akce</th>
					</tr>
				</thead>
				
				<tbody class='tbody'>
					<?php foreach ($get_data as $row): ?>
					<tr>
						<td><?php echo $row->skola_id ?></td>
						<td><?php echo $row->nazev_obor ?></td>
						<td><?php echo $row->prijatych ?></td>
						<td><?php echo $row->nazev_mesto ?></td>
						<td><?php echo $row->nazev_skola ?></td>
						<td><?php echo $row->rok_prijeti ?></td>
						<td><?php echo $row->geo_lattitude ?></td>
						<td><?php echo $row->geo_longtitude ?></td>
						<td>
							<a href="<?php echo base_url('school_edit/'.$row->skola_id) ?>" class="btn btn-success btn-sm">Edit</a>
							<a href="" class="btn btn-danger btn-sm">Delete</a>
						</td>
					</tr>
			 		<?php endforeach; ?>
				</tbody>
			</table>
			</form>
		</div>
	</div>
</div>

	<script type="text/javascript">
	$(document).ready( function () {
    $('#table_id').DataTable({
		"lengthMenu": [ 5, 10, 15, 30, 60 ]
	});
	
} );
</script>

