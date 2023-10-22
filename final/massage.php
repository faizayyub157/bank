<?php
if(isset($_SESSION['status']))
{
    ?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>hey!</strong><?php echo $_SESSION['status']; ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="close">
            <span aria-hidden="true">&times;</span>
        </button>
        <?php
        unset($_SESSION['status']);
}
?>