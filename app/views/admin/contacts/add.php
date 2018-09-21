<?php
include(APPDIR.'views/layouts/header.php');
include(APPDIR.'views/layouts/nav.php');
include(APPDIR.'views/layouts/errors.php');
?>

<h1>Add Contact</h1>

<form method="post">

    <div class="row">

        <div class="col-md-6">

            <div class="control-group">
                <label class="control-label" for="ENABLED"> ENABLED</label>
                <input class="form-control" id="ENABLED" NAME="ENABLED" value="<?=(isset($_POST['ENABLED']) ? $_POST['ENABLED'] : '');?>" required  />
            </div>

            <div class="control-group">
                <label class="control-label" for="ID"> ID</label>
                <input class="form-control" id="ID" NAME="ID" value="<?=(isset($_POST['ID']) ? $_POST['ID'] : '');?>"  required  />
            </div>

            <div class="control-group">
                <label class="control-label" for="NAME"> NAME</label>
                <input class="form-control" id="NAME" NAME="NAME" value="<?=(isset($_POST['NAME']) ? $_POST['NAME'] : '');?>" required  />
            </div>

            <div class="control-group">
                <label class="control-label" for="USERNAME"> USERNAME</label>
                <input class="form-control" id="USERNAME" NAME="USERNAME" value="<?=(isset($_POST['USERNAME']) ? $_POST['USERNAME'] : '');?>"  required  />
            </div>

            <div class="control-group">
                <label class="control-label" for="USERTYPE"> USERTYPE</label>
                <input class="form-control" id="USERTYPE" NAME="USERTYPE" value="<?=(isset($_POST['USERTYPE']) ? $_POST['USERTYPE'] : '');?>" required  required  />
            </div>

            <div class="control-group">
                <label class="control-label" for="EMAIL"> EMAIL</label>
                <input class="form-control" id="EMAIL" NAME="EMAIL" value="<?=(isset($_POST['EMAIL']) ? $_POST['EMAIL'] : '');?>"  required  />
            </div>

        </div>

    </div>

    <br>

    <p><button type="submit" class="btn btn-success" NAME="submit"><i class="fa fa-check"></i> Submit</button></p>

</form>

<?php include(APPDIR.'views/layouts/footer.php');?>
