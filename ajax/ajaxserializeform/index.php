<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ajax serialize form</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="text-center text-success my-3">PHP & Ajax Serialize Form</h2>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <form id='submit_form'>
                    <table class="table table-borderless">
                        <tr>
                            <td>Name</td>
                            <td><input type="text" id="fname" class="form-control" autocomplete="off"></td>
                        </tr>
                        <tr>
                            <td>Age</td>
                            <td><input type="number" id="fage" class="form-control" autocomplete="off"></td>
                        </tr>
                        <tr>
                            <td>Gender</td>
                            <td>
                                <input type="radio" class="form-check-inline" value="male" name="gender"> Male &nbsp; &nbsp; &nbsp;
                                <input type="radio" class="form-check-inline" value="female" name="gender" > Female
                            </td>
                        </tr>
                        <tr>
                            <td>Country</td>
                            <td>
                                <select id="country" class="form-select">
                                    <option value="India">India</option>
                                    <option value="Nepal">Nepal</option>
                                    <option value="Bangladesh">Bangladesh</option>
                                    <option value="Sri Lanka">Sri Lanka</option>
                                    <option value="Maldiv">Maldiv</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <input type="submit" name="submit"  value="Submit" class="btn btn-primary">
                            </td>
                        </tr>
                    </table>
                </form>
                <div id="response" class="text-danger text-center"></div>
            </div>
        </div>
    </div>
    <script src="../jquery.js"></script>
    <script>
        $(document).ready(function(){
            $("#submit").click(function(e){
                e.preventDefault();
                var name = $("#name").val();
                var age = $("#age").val();

                if(name == "" || age == "" || !$('input:radio[name=gender]').is(':checked')){
                    $("#response").fadeIn();
                    $("#response").html("All fields are required");
                }else{
                    $("#response").html($("#submit_form").serialize())
                }
            })
        });
    </script>
</body>

</html>