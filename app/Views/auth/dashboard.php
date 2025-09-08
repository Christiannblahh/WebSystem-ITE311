<!DOCTYPE html>
<html>

<head>
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .dash-wrapper { min-height: 100vh; display: flex; align-items: center; justify-content: center; background: #fafafa; }
        .dash-card { width: 560px; background: #fff; border: 1px solid #e9ecef; border-radius: 16px; padding: 32px; text-align: center; box-shadow: 0 10px 30px rgba(16,24,40,.06); }
        .dash-title { font-weight: 700; font-size: 36px; margin-bottom: 8px; }
        .dash-subtitle { color: #475467; margin-bottom: 22px; }
        .btn-primary { background-color: #1a73e8; border-color: #1a73e8; font-weight: 600; padding: 10px 16px; }
        .btn-primary:hover { background-color: #1669d2; border-color: #1669d2; }
    </style>
</head>

<body>
    <div class="dash-wrapper">
        <div class="dash-card">
            <div class="dash-title">Welcome, <?= esc($name) ?>!</div>
            <div class="dash-subtitle">You are signed in as <strong><?= esc($role) ?></strong>.</div>
            <div class="d-flex gap-2 justify-content-center">
                <a href="<?= site_url('/') ?>" class="btn btn-primary">Go to Home</a>
                <a href="<?= site_url('/logout') ?>" class="btn btn-outline-secondary">Logout</a>
            </div>
        </div>
    </div>
</body>

</html>