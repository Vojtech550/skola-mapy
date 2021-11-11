<div class="container">
    <div class="row">
        <div class="col-12 col-md-12 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h4>Edituj školu<a href="<?= base_url() ?>" class="btn btn-danger float-right">Back</a></h4>
                </div>
            

        </div>
    </div>

    <div class="card-body">
        <form action="<?= base_url('Pages/school_edit') ?>" method="POST">
        <div class="row">

            <div class="col-12 col-md-6 col-sm-12">
                <div class="form-group mb-3">
                    <label>Název školy</label>
                    <input type="text" name="nazev_skola" class="form-control" placeholder="Zadejte název školy" value="<?= $row['nazev_skola'];?>">
                </div>
            </div>
            
            <div class="col-12 col-md-6 col-sm-12">
                <label>Vyberte obec:</label>
                <select name="mesto" class="form-control">
                    <?php
                    foreach($select_mesto as $row)
                    {
                        echo '<option value="'.$row->mesto.'">'.$row->nazev_mesto.'</option>';
                    }
                    ?>
                    </select>
                </div>

            <div class="col-12 col-md-6 col-sm-12">
                <div class="form-group mb-3">
                    <label>Geo_lattitude</label>
                    <input type="text" name="geo_lat" class="form-control" placeholder="Zadejte zeměpisnou šířku" value="<?= $data['geo_lat']; ?>">
                    <?php var_dump($row); ?>
                </div>
            </div>
            
            <div class="col-12 col-md-6 col-sm-12">
                <div class="form-group mb-3">
                    <label>Geo_longtitude</label>
                    <input type="text" name="geo_long" class="form-control" placeholder="Zadejte zeměpisnou délku" value="<?php echo $data->geo_longtitude ?>">
                    <?php var_dump($row); ?>
                </div>
            </div>
            
            <div class="col">
                <div class="form-group">
                    <button type="submit" class=" col-12 btn btn-primary btn-lg">Uložit</button>
                </div>
            </div>
        </form>
            </div>
        </div>
    </div>
</div>