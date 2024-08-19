<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body class="bg-dark text-white text-center">
 


    <?php
    include 'config.php';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get user input from the form
        $username = $_POST['username'];
        $number = $_POST['number'];
        $tabel = $_POST['tabel'];

        // Insert user data into the database
        $sql = "INSERT INTO users (username, number, tabel) VALUES ('$username', $number, $tabel)";

        if ($conn->query($sql) === TRUE) {
            // Registration successful, display a notification and redirect to menu
            echo '<div id="notification" class="h1  card-title ">Welcome, ' . $username . '! Registration successful.</div>';
            echo '<div id="notification" class="h1  card-title ">Check Our Tasty Menu</div>';
            echo '<div id="notification" class="h2  card-title ">and order your fodd</div>';
            echo '<script>
            setTimeout(function() {
                document.getElementById("notification").style.display = "none";
                window.location.href = "menu.php";
            }, 1000); // 1000 milliseconds (1 second)
        </script>';
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    }
    ?>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>