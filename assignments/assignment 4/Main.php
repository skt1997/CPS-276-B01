<?php
$output = "";
if(count($_POST) > 0){
    require_once 'addNameProc.php';
    $addName = new AddNamesProc();
    $output = $addName->addClearNames();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Names</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            width: 50%;
            margin: auto;
            padding-top: 5%;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        label {
            margin-bottom: 10px;
        }

        input[type="text"], textarea {
            padding: 10px;
            width: 100%;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        textarea {
            height: 200px;
        }

        .buttons {
            display: flex;
            gap: 20px;
        }
    </style>
</head>
<body>

<h1>Add Names</h1>
<form method="post" action="">
    <div class="buttons">
        <input type="submit" name="addName" value="Add Name">
        <input type="submit" name="clearNames" value="Clear Names">
    </div>
    <label for="nameInput">Enter Name</label>
    <input type="text" id="nameInput" name="nameInput">
    <label for="namelist">List of Names</label>
    <textarea id="namelist" name="namelist"><?php echo $output ?></textarea>
</form>

</body>
</html>