<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CodeIgniter + Bootstrap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">My Web System</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarNav">
            <!-- Push nav links to the right -->
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link <?= service('uri')->getPath() == '' ? 'active' : '' ?>" href="<?= site_url('/') ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= service('uri')->getPath() == 'about' ? 'active' : '' ?>" href="<?= site_url('about') ?>">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= service('uri')->getPath() == 'contact' ? 'active' : '' ?>" href="<?= site_url('contact') ?>">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-success <?= service('uri')->getPath() == 'login' ? 'active' : '' ?>" href="<?= site_url('/login') ?>">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-primary <?= service('uri')->getPath() == 'register' ? 'active' : '' ?>" href="<?= site_url('/register') ?>">Register</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

    <div class="container mt-4">
        <?= $this->renderSection('content') ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
