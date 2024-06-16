<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap LandingPage</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-dark bg-primary">
        <div class="container-fluid">
            <span class="navbar-brand mb-0 h1">My LandingPage</span>
            <a href="{{ route('login') }}" class="btn btn-light">Login</a>
        </div>
    </nav>
    <div class="container mt-2">
        <div class="card">
            <div class="card-body">
                <h1 class="card-title text-center">Welcome to LandingPage</h1>
                {{-- <p class="card-text">This is a simple dashboard example using Bootstrap 5.</p> --}}
                <!-- Image provided by Bootstrap -->
                <img src="https://img.freepik.com/free-vector/site-stats-concept-illustration_114360-1434.jpg?t=st=1718169088~exp=1718172688~hmac=7934ef77d4f5ada19238b786e57795b66fb7354cc0277649d70dc0af68a17f62&w=740" class="img-fluid" alt="Bootstrap Logo">
            </div>
        </div>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
