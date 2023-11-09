<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Bank</title>
    <?php
        require('components/linker.html');
    ?>
</head>
<body>
    <table border="3" align="center" width="100%">

   
    <?php
        require('components/header.html');
        for($i=0;$i<=100;$i++){
            ?>
                <tr>
                    <td>121</td>
                    <td>212</td>
                    <td>212</td>
                </tr>            
            <?php
        }
    ?>
     </table>
</body>
</html>