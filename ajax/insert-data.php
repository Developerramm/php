<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jquery</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        #modal {
            background: rgba(0, 0, 0, 0.7);
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            z-index: 100;
            display: none;
        }

        #modal-form {
            background: white;
            width: 40%;
            position: relative;
            top: 20%;
            left: 30%;
            padding: 15px;
            border-radius: 4px;
        }

        #close-btn {
            background: red;
            color: white;
            width: 30px;
            height: 30px;
            line-height: 30px;
            text-align: center;
            position: absolute;
            top: -15px;
            right: -15px;
            cursor: pointer;
            border-radius: 50%;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3 class="text-center">PHP AJAX INSERT DATA </h3>
            </div>
            <div class="col-md-6">
                <label class="form-label">Search</label>
                <input type="text" id="search" autocomplete="off" class="form-control">
            </div>
        </div>

        <div class="row">
            <div class="col">
                <h3 class="text-center my-3 text-success">Insert data in database </h3>
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
                            <td></td>
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

        <div id="modal">
            <div id="modal-form">
                <h3 class="text-center">Edit Form</h3>
                <table class="table table-borderless">

                </table>
                <div id="close-btn">X</div>
            </div>
        </div>

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
                });


                $(document).on('click', ".delete-btn", function() {
                    var studentId = $(this).data('id');

                    if (confirm("Do You want to delete record")) {
                        var element = this;

                        $.ajax({
                            url: "ajax-delete.php",
                            type: "POST",
                            data: {
                                id: studentId
                            },

                            success: function(data) {
                                if (data == 1) {
                                    $(element).closest("tr").fadeOut();
                                } else {
                                    $("#error-message").html("Can't Delete").slideDown();
                                    $("#success-message").slideUp();
                                }
                            }
                        });
                    }

                });



                $(document).on('click', ".edit-btn", function() {
                    $("#modal").show();

                    var studentId = $(this).data('eid');

                    $.ajax({
                        url: "load-update-form.php",
                        type: "POST",
                        data: {
                            id: studentId
                        },
                        success: function(data) {
                            $("#modal-form table").html(data);
                        }
                    });

                });

                // hide modal box
                $("#close-btn").on('click', function() {
                    $("#modal").hide();
                })

                // save update form

                $(document).on("click", '.edit-submit', function() {
                    var stuId = $("#edit-id").val();
                    var name = $("#edit-name").val();
                    var age = $("#edit-age").val();
                    var city = $("#edit-city").val();

                    $.ajax({
                        url: "ajax-update-form.php",
                        type: "POST",
                        data: {
                            stuId,
                            name,
                            age,
                            city
                        },
                        success: function(data) {
                            if (data == 1) {
                                $("#modal").hide();
                                loadData();
                            }
                        }
                    });
                });

                // search bar functionality
                $("#search").on("keyup",function(){
                    var searchTerm = $(this).val();

                    $.ajax({
                        url : "ajax-live-search.php",
                        type : "POST",
                        data : {search : searchTerm},
                        success : function(data){
                            $("#table-data").html(data);
                        }
                    });

                });

            });
        </script>

</body>

</html>