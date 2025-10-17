<?= $this->extend('template') ?>
<?= $this->section('content') ?>

<div class="container mt-4">
    <h2>Announcements</h2>

    <?php if (! empty(session()->getFlashdata('error'))): ?>
        <div class="alert alert-danger"><?= esc(session()->getFlashdata('error')) ?></div>
    <?php endif; ?>

    <?php if (empty($announcements)): ?>
        <div class="alert alert-info">No announcements yet.</div>
    <?php else: ?>
        <div class="list-group">
            <?php foreach ($announcements as $a): ?>
                <div class="list-group-item mb-2">
                    <h5 class="mb-1"><?= esc($a['title']) ?></h5>
                    <small class="text-muted"><?= esc($a['created_at']) ?></small>
                    <p class="mb-1 mt-2"><?= nl2br(esc($a['content'])) ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</div>

<?= $this->endSection() ?>
