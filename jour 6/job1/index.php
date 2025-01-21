<?php
$selectedStyle = isset($_POST['style']) ? $_POST['style'] : 'style1';

$styles = [
    'style1' => '
        body {
            background-color: lightblue;
            font-family: Arial, sans-serif;
        }
        form {
            padding: 10px;
            background-color: white;
            border: 1px solid blue;
        }
    ',
    'style2' => '
        body {
            background-color: lightgreen;
            font-family: "Courier New", Courier, monospace;
        }
        form {
            padding: 10px;
            background-color: beige;
            border: 2px dashed green;
        }
    ',
    'style3' => '
        body {
            background-color: lightcoral;
            font-family: Georgia, serif;
        }
        form {
            padding: 10px;
            background-color: lavender;
            border: 3px dotted red;
        }
    ',
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Styling Form</title>
    <style>
        <?= $styles[$selectedStyle] ?>
    </style>
</head>
<body>
    <form method="POST">
        <label for="style">Choose a style:</label>
        <select name="style" id="style">
            <option value="style1" <?= $selectedStyle == 'style1' ? 'selected' : '' ?>>Style 1</option>
            <option value="style2" <?= $selectedStyle == 'style2' ? 'selected' : '' ?>>Style 2</option>
            <option value="style3" <?= $selectedStyle == 'style3' ? 'selected' : '' ?>>Style 3</option>
        </select>
        <button type="submit">Apply</button>
    </form>
</body>
</html>
