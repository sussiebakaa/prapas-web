<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anime Detail</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="d-flex align-items-center justify-content-center" style="min-height: 100vh;">
    <div class="container">
        <h1>Anime Detail</h1>
        <table class="table">
        <div class="container">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <table class="table">
        <tr>
            <th>Name</th>
            <td>{{ $anime["nama"] }}</td>
        </tr>
        <tr>
            <th>Aired</th>
            <td>{{ $anime["tanggal_rilis"] }}</td>
        </tr>
        <tr>
            <th>Episode</th>
            <td>{{ $anime["jumlah_eps"] }}</td>
        </tr>
        <tr>
            <th>Studio</th>
            <td>{{ $anime["studio"] }}</td>
        </tr>
        <tr>
            <th>Rating</th>
            <td>{{ $anime["rating"] }}</td>
        </tr>
        <tr>
    </table>
    <a href="/Anime/anime" class="btn btn-outline-secondary">Back</a> 
    </div>
    </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.8/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>