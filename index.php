<?php
require_once "core/init.php";

$task = new Task();
$tasks = $task->get();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Tasks</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="panel panel-default">
                <div class="panel-body">
                    <form action="add.php" method="post" class="form-horizontal">
                        <div class="form-group">
                            <label for="name" class="col-sm-3 control-label">Task</label>
                            <div class="col-sm-6">
                                <input type="text" name="name" id="name" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button type="submit" class="btn btn-default">Add task</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <?php if($tasks): ?>
            <div class="panel panel-default">
                <div class="panel-heading">
                    Current tasks
                </div>
                <div class="panel-body">
                    <table class="table table-striped">
                        <thead>
                            <th>Task</th>
                        </thead>
                        <tbody>
                            <?php foreach($tasks as $t): ?>
                                <tr>
                                    <td><?php echo $t->name?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </body>
</html>