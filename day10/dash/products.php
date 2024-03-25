<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company | products</title>
</head>

<body>
    <div class="dashboard">
        <div class="left">
            <?php include ("sidebar.php"); ?>
        </div>
        <div class="right">
            <div class="top">
                <?php include ("header.php"); ?>
            </div>
            <div class="mainContent">
                <table border="1">
                    <tr>
                        <th>id</th>
                        <th>name</th>
                        <th>description</th>
                        <th>buying price</th>
                        <th>selling price</th>
                        <th>date added</th>
                        <th colspan="2">Operation</th>
                    </tr>
                    <tr>
                        <td>01</td>
                        <td>wilson</td>
                        <td>Thank you very much.</td>
                        <td>Thank you very much.</td>
                        <td>Thank you very much.</td>
                        <td>56456456</td>
                        <td><a href="#">update</a></td>
                        <td><a href="#">delete</a></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</body>

</html>