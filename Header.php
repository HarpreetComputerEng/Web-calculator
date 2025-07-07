<!-- Header.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Programming Lab 7</title>
    <!-- Bootstrap 4 CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .bg-gold {
            background-color: #FFD700; /* Golden color */
        }
    </style>
</head>
<body>
    <!-- Header and Menu -->
    <div class="container-fluid bg-gold text-dark p-3">
        <div class="row">
            <div class="col-12">
                <h1>Computer Engineering Technology - Web Programming</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-right">
                <?php include 'Menu.php'; ?>
            </div>
        </div>
    </div>

    <div class="container mt-4">
