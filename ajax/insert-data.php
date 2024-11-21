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
                <h3 class="text-center">PHP AJAX INSERT DATA </h3>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <form id="addform">
                    <table class="table table-borderless">
                        <tr>
                            <td>Name</td>
                            <td><input class="form-control w-100" type="text" name="name" id="name"></td>
                        </tr>
                        <tr>
                            <td>Age</td>
                            <td><input class="form-control" type="text" name="age" id="age"></td>
                        </tr>
                        <tr>
                            <td>City</td>
                            <td><input class="form-control" type="text" name="city" id="city"></td>
                        </tr>
                        <tr>
                            <td>
                                <input type="button" id="save-button" value="Save data" class="btn btn-primary">
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>


        <div id="table-data">
        </div>

        <div id="error-message"></div>
        <div id="success-message"></div>

        <script type="text/javascript" src="jquery.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {

                function loadData() {
                    $.ajax({
                        url: "ajaxload.php",
                        type: "POST",
                        success: function(data) {
                            $("#table-data").html(data);
                        }
                    });
                }

                loadData();

                $("#save-button").on("click", function(e) {
                    e.preventDefault();

                    var name = $("#name").val();
                    var age = $("#age").val();
                    var city = $("#city").val();

                    if (name == "" || age == "" || city == "") {
                        $("#error-message").html("All fields are required").slideDown();
                        $("#success-message").slideUp();
                    } else {
                        $.ajax({
                            url: "ajax-insert.php",
                            type: "POST",
                            data: {
                                name,
                                age,
                                city
                            },
                            success: function(data) {
                                if (data == 1) {
                                    loadData();
                                    $("#addform").trigger("reset");
                                    $("#success-message").html("Data Insert successfully").slideDown();
                                    $("#error-message").slideUp();
                                } else {
                                    $("#error-message").html("can't save record").slideDown();
                                    $("#success-message").slideUp();
                                }
                            }
                        });
                    }
                })

            });
        </script>

</body>

</html>