<?php

function media ($entrada){


        $mediaArr = array();
        $mediaArr[] = $_POST['entrada'];

        $media = array_sum($mediaArr)/array_count_values($mediaArr)

}       echo($media)

?>

<?php require 'layout/header.php'; ?>

<div class="container">
    <div class="row">
        <div class="col-xs-6">
            <h1>Add your Pet! Squirrel!</h1>

            <form action="/ex1.php" method="POST">
                <div class="form-group">
                    <label for="pet-name" class="control-label">Pet Name</label>
                    <input type="text" name="entrada" id="pet-name" class="form-control" />
                </div>
                <button type="submit" class="btn btn-primary">Media</button>
            </form>

        </div>
    </div>
</div>

<?php require 'layout/footer.php'; ?>
