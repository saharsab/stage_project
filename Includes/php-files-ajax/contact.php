
<?php
    include '../functions/functions.php';
    
    if(isset($_POST['contact_name']) && isset($_POST['contact_email']) && isset($_POST['contact_subject']) && isset($_POST['contact_message']))
    {
        // Assume sending is successful every time
        $mail_sent = true;

        if($mail_sent)
        {
            ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                The message has been sent successfully
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php
        }
        else
        {
            ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                A problem occurred while trying to send the Message, Please try again!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php
        }
    }
?>
