<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS for unique buttons -->
    <style>
        body {
            background-color: #f8f9fa;
        }
        .button-container {
            display: flex;
            justify-content: center;
            margin-top: 20vh;
        }
        .custom-button {
            padding: 15px 30px;
            margin: 0 20px;
            font-size: 1.2rem;
            border-radius: 50px;
            text-transform: uppercase;
            text-decoration: none;
            color: white;
            transition: transform 0.3s;
        }
        .pegawai-btn {
            background-color: #007bff;
        }
        .blueray-btn {
            background-color: #28a745;
        }
        .custom-button:hover {
            transform: scale(1.1);
            text-decoration: none;
        }
    </style>
</head>
<body>

    <div class="container text-center">
        <h1 class="mb-4">Welcome to Our Application</h1>
        <div class="button-container">
            <a href="/pegawai" class="custom-button pegawai-btn">Pegawai</a>
            <a href="/blueray" class="custom-button blueray-btn">Blu-ray</a>
        </div>
    </div>

</body>
</html>