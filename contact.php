<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper {
            width: 800px;
            margin: 50px 0 0 30px;
        }
    </style>
</head>

<body>


    <div class="wrapper">
        <div class="container-fluid">
            <div class="col">
                <div class="col-md-5">
                    <div class="page-header">
                        <h2>Employees Details & Finance </h2>
                    </div>
                    <p> Fill the below details will proper validation to create account in employees database. </p>
                    <form action="insert.php" method="post">
                        <div class="form-group">
                            <label>Empcode</label>
                            <input type="number" name="Empcode" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Empname</label>
                            <input type="text" name="Empname" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>DOB</label>
                            <input type="date" name="DOB" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>DOJ</label>
                            <input type="date" name="DOJ" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Designation</label>
                            <input type="text" name="Designation" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Department</label>
                            <input type="text" name="Department" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Basic</label>
                            <input type="number" name="Basic" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>DA</label>
                            <input type="number" name="DA" class="form-control">
                        </div>


                        <div class="form-group">
                            <label>HRA</label>
                            <input type="number" name="HRA" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Conveyance</label>
                            <input type="number" name="Conveyance" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Salary</label>
                            <input type="number" name="Salary" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>location</label>
                            <input type="text" placeholder= "one" name="location" class="form-control">
                        </div>

                        <input type="submit" class="btn btn-primary" name="submit" value="Submit">
                    </form>
                </div>
            </div>

        </div>
    </div>
</body>

</html>