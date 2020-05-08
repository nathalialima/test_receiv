<?php
$message = new \App\Helpers\Messages();
if($message->has('messageError')){
    ?>
    <div class="row">
        <div class="col-md-12 alert alert-danger" role="alert">
            <?=$message->getMessageError()?>
        </div>
    </div>
    <?php
}

if($message->has('message')){
    ?>
    <div class="row">
        <div class="col-md-12 alert alert-info" role="alert">
            <?=$message->get()?>
        </div>
    </div>
    <?php
}
?>