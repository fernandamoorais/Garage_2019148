<!DOCTYPE html>
<html lang="en">
<!--ERROR- ideia quando eu insiro um produto e a quantidade no invoice é possivel ja subtrair automaticamente da tabela produtos?-->

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
    <div class="btn_return">
        <button onclick="window.location.href='../admin/stock.php';">
        Go back
      </button>
    </div>

    <form class="product">
        <fieldset>
            <!-- Form Name -->
            <h1>New product</h1>

            <!-- Select Basic -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="product_id">Product ID</label>
                <div class="col-md-4">
                    <select id="product_id" name="product_id" class="form-control">
                            <option value="1">Option one</option>
                            <option value="2">Option two</option>
                        </select>
                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="product_name">Product name</label>
                <div class="col-md-4">
                    <input id="product_name" name="product_name" type="text" placeholder="Product name" class="form-control input-md" style="width: 50%;">

                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="product_quantity">Product quantity</label>
                <div class="col-md-4">
                    <input id="product_quantity" name="product_quantity" type="text" placeholder="quantity" class="form-control input-md">

                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="product_price">Price</label>
                <div class="col-md-4">
                    <input id="product_price" name="product_price" type="text" placeholder="€ 00,00" class="form-control input-md">

                </div>
            </div>

            <!-- Select Multiple -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="product_type">Product type</label>
                <div class="col-md-4">
                    <select id="product_type" name="product_type" class="form-control" multiple="multiple">
                            <option value="1">Mechanical</option>
                            <option value="2">Eletric</option>
                            <option value="">painting</option>
                            <option value="">Option two</option>
                        </select>
                </div>
            </div>

            <!-- Textarea -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="product_description">Description or extra info</label>
                <div class="col-md-4">
                    <textarea class="form-control" id="product_description" name="product_description">.....</textarea>
                </div>
            </div>

            <!-- Button -->
            <div class="btn_return">
                <label class="col-md-4 control-label" for="save"></label>
                <div class="col-md-4">
                    <button id="save" name="save" class="btn btn-info">Save</button>
                </div>
            </div>
        </fieldset>
    </form>

</body>

</html>