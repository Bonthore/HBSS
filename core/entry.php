<?php
$id = "6757";
$ep = "12";
$var = "$id-$ep";
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Simple To-Do List</title>
    <link rel="stylesheet" href="/todo/style.css">
</head>
<body>
<div class="wrap">
    <div class="task-list">
        <ul>
            <li>
                <span><a href="#" style="text-decoration: none;">Some series </a></span>
                <img id="<?php echo $var; ?>" class="delete-button" width="10px" src="/assets/images/close.svg" />
            </li>
        </ul>
    </div>
</div><!-- #wrap -->
</body>
<!-- JavaScript Files Go Here -->
<script src="/assets/js/jquery.min.js"></script>



<script>
    delete_task(); // Call the delete_task function
    function delete_task() {

            $('.delete-button').click(function(){

                var current_element = $(this);

                var id = $(this).attr('id');

                $.post('add-task.php', { task_id: id }, function() {

                    current_element.parent().fadeOut("fast", function() { $(this).remove(); });
                });
            });
        }
</script>
