<?php 
    include 'views/header.php'; 
    ?>

<div class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4">
    <div class="row my-4 justify-content-center">
        <div class="justify-content-center">
        <h1>Administrator Accounts</h1>
          <?php  var_dump($_SESSION['adm_id']); ?>
        </div>
    </div>
</div>


<?php include 'views/footer.php'; ?>