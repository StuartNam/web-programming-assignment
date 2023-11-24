<!DOCTYPE html>
<html>
    <head>
        <meta charset = "UTF-8">
        <title> Profile </title>

        <link rel = "stylesheet" href= "https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel = "stylesheet" href = "../assets/css/profile.css">
    </head>

    <body>
        <?php include_once "../includes/header.php"  ?>
        <?php include_once "../includes/nav_bar.php" ?>

        <!-- Body -->
        <div class = "cont padding-0" id = "cont-body">
            <!-- Profile card -->
            <div class = "cont padding-0" id = "cont-profile-card">
                <div class = "" id = "profile-card">
                    <div class = "cont padding-0" id = "profile-card-cont-name">
                        <h1 class = "" id = "profile-card-text-name"> Username </h1>
                    </div>

                    <div class = "cont padding-0" id = "profile-card-cont-phone-number">
                        <p class = "" id = "profile-card-text-phone-number"> Phone number </p>
                    </div>

                    <div class = "cont padding-0" id = "profile-card-cont-email">
                        <p class = "" id = "profile-card-text-email"> Email </p>
                    </div>
                </div>
            </div>

            <div class = "cont padding-0" id = "cont-registration-history">
                <div class = "" id = "registration-history">
                    <div class = "cont" id = "registration-history-cont-text-header">
                        <p id = "registration-history-text-header"> Registration history </p>
                    </div>

                    <div class = "cont container" id = "cont-registration-history-table">
                        <table class = "table fixed-header">
                            <thead>
                                <tr>
                                    <th> ID </th>
                                    <th> Check-in date </th>
                                    <th> Check-out date </th>
                                    <th> Room details </th>
                                    <th class = "col-1"> </th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>John Doe</td>
                                    <td>john@example.com</td>
                                    <td>john@example.com</td>
                                    <td> <button type = "button" class = "btn btn-danger"> Cancel </button> </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Jane Smith</td>
                                    <td>jane@example.com</td>
                                    <td>john@example.com</td>
                                    <td> <button type = "button" class = "btn btn-danger"> Cancel </button> </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Sam Johnson</td>
                                    <td>sam@example.com</td>
                                    <td>john@example.com</td>
                                    <td> <button type = "button" class = "btn btn-danger"> Cancel </button> </td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>John Doe</td>
                                    <td>john@example.com</td>
                                    <td>john@example.com</td>
                                    <td> <button type = "button" class = "btn btn-danger"> Cancel </button> </td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>John Doe</td>
                                    <td>john@example.com</td>
                                    <td>john@example.com</td>
                                    <td> <button type = "button" class = "btn btn-danger"> Cancel </button> </td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>John Doe</td>
                                    <td>john@example.com</td>
                                    <td>john@example.com</td>
                                    <td> <button type = "button" class = "btn btn-danger"> Cancel </button> </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>     
            </div>
        </div>

        <?php include_once "../includes/footer.php"  ?>
    </body>
</html>