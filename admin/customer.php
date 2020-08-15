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
    <div class="billing">
        <div class="grid-container">
            <div class="btn_return"><button onclick="window.location.href='../admin/dashboard.php';"> Go back </button>
            </div>
            <!--btn_return-->
            <div class="skip"></div>

            <div class="btn_add"> <button onclick="window.location.href='../admin/receipts.php';">Create a invoice</button>
            </div>
            <!--btn_invoice-->
        </div>
        <!--grid-->

        <div class="header_wrap">
            <div class="num_rows">
                <div class="form-group">
                    <!--		Show Numbers Of Rows 		-->
                    <select class="form-control" name="state" id="maxRows" style="margin-left: 30px;">


                        <option value="10 ">10</option>
                        <option value="15 ">15</option>
                        <option value="20 ">20</option>
                        <option value="50 ">50</option>
                        <option value="70 ">70</option>
                        <option value="100 ">100</option>
                        <option value="5000 ">Show ALL Rows</option>
                    </select>

                </div>
                <!--Form-group-->
            </div>
            <!--num_rows-->
            <div class="tb_search"><input type="text " id="search_input_all " onkeyup="FilterkeyWord_all_table() " placeholder="Search.. " class="form-control " style="width: 50%;"></div>
            <!--./tb search-->

        </div>
        <!--./"header_wrap "-->

        <table class="table center table-striped table-class " id="table-id" style="center" ;>

            <tr>
                <th>User ID</th>
                <th>E-mail</th>
                <th>First Nmae</th>
                <th>Surname</th>
                <th>Phone</th>
                <th>Birthday</th>
                <th>Address</th>
                <th>Eircode</th>
                <th>Info</th>        

            </tr>


            <!--header-->


        </table>
    </div>
</body>
</html>