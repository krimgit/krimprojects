<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= esc($title) ?> | Cornerstone POS</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Manrope:wght@500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/css/site.css') ?>">
</head>
<body>
<div class="app-shell">
    <aside class="sidebar">
        <a class="brand" href="<?= site_url('/') ?>" aria-label="Cornerstone POS home">
            <span class="brand-mark">C</span>
            <span><strong>cornerstone</strong><small>POINT OF SALE</small></span>
        </a>
        <div class="nav-label">WORKSPACE</div>
        <nav class="main-nav" aria-label="Main navigation">
            <a class="nav-link <?= $activePage === 'home' ? 'active' : '' ?>" href="<?= site_url('/') ?>"><span class="nav-icon">⌂</span> Overview</a>
            <a class="nav-link <?= $activePage === 'customers' ? 'active' : '' ?>" href="<?= site_url('customers') ?>"><span class="nav-icon">♙</span> Customers <span class="nav-count">05</span></a>
            <a class="nav-link <?= $activePage === 'users' ? 'active' : '' ?>" href="<?= site_url('users') ?>"><span class="nav-icon">♧</span> Team accounts <span class="nav-count">05</span></a>
            <a class="nav-link <?= $activePage === 'about' ? 'active' : '' ?>" href="<?= site_url('about') ?>"><span class="nav-icon">ⓘ</span> About this project</a>
        </nav>
        <div class="sidebar-bottom">
            <div class="class-card"><span class="class-dot"></span><div><strong>Class project</strong><small>CodeIgniter foundations</small></div></div>
            <div class="profile"><span class="avatar">KG</span><div><strong>Student workspace</strong><small>POS demonstration</small></div><span class="more">•••</span></div>
        </div>
    </aside>
    <main class="main-content">
        <header class="topbar"><div class="breadcrumb">Workspace <span>/</span> <?= esc($title) ?></div><div class="top-actions"><span class="today">●&nbsp; Sample workspace</span><span class="top-avatar">KG</span></div></header>
        <div class="page-wrap">
            <?= $this->renderSection('content') ?>
        </div>
    </main>
</div>
</body>
</html>
