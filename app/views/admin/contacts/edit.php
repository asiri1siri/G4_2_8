<?php
include(APPDIR.'views/layouts/header.php');
include(APPDIR.'views/layouts/nav.php');
include(APPDIR.'views/layouts/errors.php');
?>

<h1>Edit Contact</h1>

<form method="post">

    <div class="row">

        <div class="col-md-6">

            <div class="control-group">
                <label class="control-label" for="ENABLED"> ENABLED</label>
                <input class="form-control" id="ENABLED" name="ENABLED" value="<?=$contact->ENABLED;?>" required />
            </div>

            <div class="control-group">
                <label class="control-label" for="ID"> ID</label>
                <input class="form-control" id="ID" name="ID" value="<?=$contact->ID;?>" required />
            </div>

            <div class="control-group">
                <label class="control-label" for="NAME"> NAME</label>
                <input class="form-control" id="NAME" name="NAME" value="<?=$contact->NAME;?>" required />
            </div>

            <div class="control-group">
                <label class="control-label" for="USERNAME"> USERNAME</label>
                <input class="form-control" id="USERNAME" name="USERNAME" value="<?=$contact->USERNAME;?>" required />
            </div>

            <div class="control-group">
                <label class="control-label" for="USERTYPE"> USERTYPE</label>
                <input class="form-control" id="USERTYPE" name="USERTYPE" value="<?=$contact->USERTYPE;?>" required />
            </div>

            <div class="control-group">
                <label class="control-label" for="EMAIL"> EMAIL</label>
                <input class="form-control" id="EMAIL" name="EMAIL" value="<?=$contact->EMAIL;?>" required />
            </div>

        </div>

    </div>

    <p><button type="submit" class="btn btn-success" name="submit"><i class="fa fa-check"></i> Submit</button></p>

</form>

<?php include(APPDIR.'views/layouts/footer.php');?>
