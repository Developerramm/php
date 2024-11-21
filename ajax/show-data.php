<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jquery</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h3 class="text-center">PHP AJAX</h3>
            </div>
        </div>
        <div class="row">
            <div class="col d-flex align-items-center justify-content-center">
                <input class="btn btn-primary" type="button" id="load-button" value="Load Data">
            </div>
        </div>

        <div id="table-data">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Age</th>
                        <th>City</th>
                    </tr>
                </thead>
               
            </table>
        </div>

        <script type="text/javascript" src="jquery.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {

                console.log("maniyari")
               $("#load-button").on('click',function(e){
                    $.ajax({
                        url : "ajaxload.php",
                        type : "POST",
                        success : function(data){
                            $("#table-data").html(data);
                        }
                    });
               });

               
            });
        </script>

</body>

</html>