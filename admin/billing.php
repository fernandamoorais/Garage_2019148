<!DOCTYPE html>
<html lang="en">

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
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Invoice</th>
                <th>Date of payment</th>
               

            </tr>


            <!--header-->



            <tr>
                <td>1</td>
                <td>Rajah Armstrong</td>
                <td>erat.neque@noncursusnon.ca</td>
                <td>1-636-140-1210</td>
                <td>Oct 26, 2015</td>
                <td>586159</td>
                <td></td>


            </tr>
            <tr>
                <td>3</td>
                <td>Rajah Armstrong</td>
                <td>erat.neque@noncursusnon.ca</td>
                <td>1-636-140-1210</td>
                <td>Oct 26, 2015</td>
                <td>586159</td>
                <td></td>


            </tr>
            <tr>
                <td>2</td>
                <td>Rajah Armstrong</td>
                <td>erat.neque@noncursusnon.ca</td>
                <td>1-636-140-1210</td>
                <td>Oct 26, 2015</td>
                <td>586159</td>
                <td></td>


            </tr>

        </table>
        <!--table table-striped table-class-->

        <!--		Start Pagination -->
        <div class='pagination-container'>
            <nav>
                <ul class="pagination ">
                    <!-- the JS Function Will Add the Rows here -->
                </ul>
            </nav>
        </div>
        <!--pagination-container-->

        <div class="rows_count ">Showing 11 to 20 of 91 entries</div>
        <!--rows_count-->

    </div>
    <!--Container -->


    <!-- getPagination( '#table-id'); $( '#maxRows').trigger( 'change'); function getPagination(table) { $( '#maxRows').on( 'change', function() { $( '.pagination').html( ''); // reset pagination div var trnum=0 ; // reset tr counter var maxRows=p arseInt($(this).val());
    // get Max Rows from select option var totalRows=$ (table + ' tbody tr').length; // numbers of rows $(table + ' tr:gt(0)').each(function() { // each TR in table and not the header trnum++; // Start Counter if (trnum> maxRows) { // if tr number gt maxRows $(this).hide(); // fade it out } if (trnum
        <=m axRows) { $(this).show(); } // else fade in Important in case if it .. }); // was fade out to fade it in if (totalRows> maxRows) { // if tr total rows gt max rows option var pagenum = Math.ceil(totalRows / maxRows); // ceil total(rows/maxrows) to get .. // numbers of pages for (var i = 1; i
            <=p agenum;) { // for each page append pagination li $( '.pagination').append( '<li data-page=" ' + i + ' ">\
								      <span>' + i++ + '<span class="sr-only ">(current)</span></span>\
								    </li>').show(); } // end for i } // end if row count> max rows $('.pagination li:first-child').addClass('active'); // add active class to the first li //SHOWING ROWS NUMBER OUT OF TOTAL DEFAULT showig_rows_count(maxRows, 1, totalRows); //SHOWING ROWS NUMBER OUT OF TOTAL DEFAULT $('.pagination
                li').on('click', function(e) { // on click each page e.preventDefault(); var pageNum = $(this).attr('data-page'); // get it's number var trIndex = 0; // reset tr counter $('.pagination li').removeClass('active'); // remove active class
                from all li $(this).addClass('active'); // add active class to the clicked //SHOWING ROWS NUMBER OUT OF TOTAL showig_rows_count(maxRows, pageNum, totalRows); //SHOWING ROWS NUMBER OUT OF TOTAL $(table + ' tr:gt(0)').each(function() { //
                each tr in table not the header trIndex++; // tr index counter // if tr index gt maxRows*pageNum or lt maxRows*pageNum-maxRows fade if out if (trIndex > (maxRows * pageNum) || trIndex
                <=( (maxRows * pageNum) - maxRows)) { $(this).hide(); } else { $(this).show(); } //else fade in }); // end of for each tr in table }); // end of on click pagination list }); // end of on select change // END OF PAGINATION } // SI SETTING $(function()
                    { // Just to append id number for each row default_index(); }); //ROWS SHOWING FUNCTION function showig_rows_count(maxRows, pageNum, totalRows) { //Default rows showing var end_index=m axRows * pageNum; var start_index=( (maxRows * pageNum)
                    - maxRows) + parseFloat(1); var string='Showing ' + start_index + ' to ' + end_index + ' of ' + totalRows + ' entries'; $( '.rows_count').html(string); } // CREATING INDEX function default_index() { $( 'table tr:eq(0)').prepend(
                    '<th> ID </th>') var id=0 ; $( 'table tr:gt(0)').each(function() { id++ $(this).prepend( '<td>' + id + '</td>'); }); } // All Table search script function FilterkeyWord_all_table() { // Count td if you want to search on all table instead of specific
                    column var count=$ ( '.table').children( 'tbody').children( 'tr:first-child').children( 'td').length; // Declare variables var input, filter, table, tr, td, i; input=d ocument.getElementById( "search_input_all "); var input_value=d ocument.getElementById(
                    "search_input_all ").value; filter=i nput.value.toLowerCase(); if (input_value !='' ) { table=d ocument.getElementById( "table-id "); tr=t able.getElementsByTagName( "tr "); // Loop through all table rows, and hide those who don 't match the search query
                for (i = 1; i < tr.length; i++) {

                    var flag = 0;

                    for (j = 0; j < count; j++) {
                        td = tr[i].getElementsByTagName("td ")[j];
                        if (td) {

                            var td_text = td.innerHTML;
                            if (td.innerHTML.toLowerCase().indexOf(filter) > -1) {
                                //var td_text = td.innerHTML;  
                                //td.innerHTML = 'shaban ';
                                flag = 1;
                            } else {
                                //DO NOTHING
                            }
                        }
                    }
                    if (flag == 1) {
                        tr[i].style.display = " ";
                    } else {
                        tr[i].style.display = "none ";
                    }
                }
            } else {
                //RESET TABLE
                $('#maxRows ').trigger('change ');
            }
        }
    </script>

-->


</body>

</html>