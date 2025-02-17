<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .header-container {
            display: flex;
            flex-direction: column;
            width: 100%;
        }

        .header-section {
            width: 100%;
        }

        .blue-section {
            background-color: #10346C; /* Blue */
            height: 1.7vw; /* Responsive height based on viewport width */
        }

        .white-section {
            background-color: #FFFFFF; /* White */
            height: 0.2vw; /* Thin white separator, relative to viewport width */
        }

        .red-section {
            background-color: #E60000; /* Red */
            height: 1.7vw; /* Responsive height based on viewport width */
        }

        .yellow-section {
            background-color: #E3CA22; /* Yellow */
            height: 1.7vw; /* Responsive height based on viewport width */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3); /* Adds a subtle shadow */
        }

        .custom-navbar .navbar-toggler-icon {
            filter: invert(1); /* Makes the toggler icon white */
        }
    </style>
</head>
<body>

<!-- Header with equal color sections and white separators -->
<div class="header-container">
    <div class="header-section blue-section"></div>
    <div class="header-section white-section"></div> <!-- White separator -->
    <div class="header-section red-section"></div>
    <div class="header-section white-section"></div> <!-- White separator -->
    <div class="header-section yellow-section"></div>
</div>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg custom-navbar">
  <div class="container-fluid">
    <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button> -->
    <div class="collapse navbar-collapse" id="navbarNav">
    </div>
  </div>
</nav>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>



</body>
</html>
