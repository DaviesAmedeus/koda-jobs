

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>KodaJobs - Find Your Dream Job</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .hero {
      background: linear-gradient(to right, #007bff, #0056b3);
      color: white;
      padding: 80px 0;
    }
    .job-card {
      transition: transform 0.2s ease;
    }
    .job-card:hover {
      transform: scale(1.02);
    }
  </style>
</head>
<body>

<!-- Navbar -->
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
    <div class="container">
      <a class="navbar-brand fw-bold" href="/">KodaJobs</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarNav" aria-controls="navbarNav"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item"><a class="nav-link" href="/jobs">Jobs-Listings</a></li>
          <li class="nav-item"><a class="nav-link" href="/companies">Companies</a></li>
        </ul>

        <!-- Auth Buttons -->
        <div class="d-flex">
          <a href="/login" class="btn btn-outline-primary me-2">Login</a>
          <a href="/register" class="btn btn-primary">Register</a>
        </div>
      </div>
    </div>
  </nav>


<!-- Hero -->
<!-- Hero -->
<div class="main">
{{ $slot }}
</div>

<!-- Footer -->
<footer class="bg-light text-center text-muted py-4">
  <div class="container">
    <p>&copy; 2025 KodaJobs. All rights reserved.</p>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
