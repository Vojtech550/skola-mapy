<div class="container">
<div class="row">
	<div class="col-md-12 mt-5">
		<div class="card">
			<div class="card-header">
		<h4>Přidej informace<a href="<?= base_url('pages/index') ?>" class="btn btn-danger float-right">Back</a></h4>
	        </div>
        </div>
    </div>
</div>
<div class="card-body">
    <form action="<?= base_url('Pages/school_add') ?>" method="POST">
    <div class="row">
        <!-- <div class="col col-md-6 col-sm-12">
            <div class="form-group mb-3">
                <label>Město ID</label>
                <input type="text" name="mesto_id" class="form-control" placeholder="Zadejte ID města">
            </div>
        </div> -->
        <div class="col col-md-6 col-sm-12">
            <div class="form-group mb-3">
                <label>Název města</label>
                <input type="text" name="nazev_mesto" class="form-control" placeholder="Zadejte název města">
            </div>
        </div>
        <select class="form-control">
            <?php 
            foreach($select_menu as $row)
            { 
              echo '<option value="'.$row->id.'">'.$row->nazev_obor.'</option>';
            }
            ?>
            </select>
        <div class="col col-md-6 col-sm-12">
            <div class="form-group mb-3">
                <label>Obor</label>
                <input type="text" name="nazev_obor" class="form-control" placeholder="IT nebo OA (ID 2 a ID 1)">
            </div>
        </div>
        <div class="col col-md-6 col-sm-12">
            <div class="form-group mb-3">
                <label>Rok přijetí</label>
                <input type="text" name="rok" class="form-control" placeholder="Zadejte datum přijetí např. 2020">
            </div>
        </div>
        <div class="col col-md-6 col-sm-12">
            <div class="form-group mb-3">
                <label>Počet přijatých</label>
                <input type="text" name="pocet" class="form-control" placeholder="Počet přijatých">
            </div>
        </div>
        
        <div class="col col-md-6 col-sm-12">
            <div class="form-group mb-3">
                <label>Název školy</label>
                <input type="text" name="nazev_skola" class="form-control" placeholder="Zadejte název školy">
            </div>
        </div>
        <div class="col col-md-6 col-sm-12">
            <div class="form-group mb-3">
                <label>Geo_lattitude</label>
                <input type="text" name="geo_lat" class="form-control" placeholder="Zadejte zeměpisnou šířku">
            </div>
        </div>
        <div class="col col-md-6 col-sm-12">
            <div class="form-group mb-3">
                <label>Geo_longtitude</label>
                <input type="text" name="geo_long" class="form-control" placeholder="Zadejte zeměpisnou délku">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-lg">Uložit</button>
            </div>
        </div>
    </form>
</div>
</div>
</div>