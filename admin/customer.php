<!DOCTYPE html>
<html lang="en">
<!--ERROr: restringir acesso , somente ADM
    FAZER A MESMA COISA COM A TABELA que no do staff, sempre visivel e depois mostrra somente resultado
    é possivel contar e mostrar quantos vehicle estão cadastrados ?
    COMO SALVAR e mostrar ultimo invoice pelo menos que é requisito.-->
<head>
    <meta charset="utf-8">
    <!--characther set -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--setting scale for mabile devices-->

    <title>Ger's Garage ADM</title>

    <!--ERROR: não ets ainportando -->
    <!--<link href="../css/admin.css" rel="stylesheet" type="text/css">-->

    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/10f8e7de20.js" crossorigin="anonymous"></script>
    <link href="../css/admin.css" rel="stylesheet" type="text/css">
    <!-- style-->

    <script type="text/javascript" src="../js/main.js"></script>
    <script type="text/javascript" src="../js/jquery.js"></script>
    <script type="text/javascript" src="../js/jquery.min.js"></script>

</head>

<body>

    <div class="customer">
        <div class="btn_return">
            <button onclick="window.location.href='../admin/dashboard.php';">Go back
        </button>
        </div>

        <div class="search">
            <form class="search" action="/action_page.php">
                <input type="text" placeholder="Search.." name="search">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>

        <table class="table table-striped table-class" id="table-id" style="padding-left:150px;">
            <thead>
                <tr>
                    <th>User ID</th>
                    <th>E-mail</th>
                    <th>First name</th>
                    <th>Surname</th>
                    <th>Phone</th>
                    <th>Birthday</th>
                    <th>Adress </th>
                    <th>Adress</th>
                    <th>Eircode</th>
                    <th>Extra info</th>
                </tr>
            </thead>
            <!--  <tfoot>
                <tr>
                    <td colspan="10">
                        <div class="links"><a href="#">&laquo;</a> <a class="active" href="#">1</a> <a href="#">2</a> <a href="#">3</a> <a href="#">4</a> <a href="#">&raquo;</a></div>
                    </td>
                </tr>
            </tfoot>-->
            <tbody>
                <tr>
                    <td>cell1_1</td>
                    <td>cell2_1</td>
                    <td>cell3_1</td>
                    <td>cell4_1</td>
                    <td>cell5_1</td>
                    <td>cell6_1</td>
                    <td>cell7_1</td>
                    <td>cell8_1</td>
                    <td>cell9_1</td>
                    <td>cell10_1</td>
                </tr>
                <tr>
                    <td>cell1_2</td>
                    <td>cell2_2</td>
                    <td>cell3_2</td>
                    <td>cell4_2</td>
                    <td>cell5_2</td>
                    <td>cell6_2</td>
                    <td>cell7_2</td>
                    <td>cell8_2</td>
                    <td>cell9_2</td>
                    <td>cell10_2</td>
                </tr>
                <tr>
                    <td>cell1_3</td>
                    <td>cell2_3</td>
                    <td>cell3_3</td>
                    <td>cell4_3</td>
                    <td>cell5_3</td>
                    <td>cell6_3</td>
                    <td>cell7_3</td>
                    <td>cell8_3</td>
                    <td>cell9_3</td>
                    <td>cell10_3</td>
                </tr>
            </tbody>
            </tr>
        </table>
    </div>
</body>

</html>