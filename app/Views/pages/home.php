<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<section class="welcome-row">
    <div><div class="eyebrow">SUNDAY, OCTOBER 4, 2026</div><h1>Good morning, welcome back.</h1><p class="subhead">Your simple workspace for customer and team accounts.</p></div>
    <a class="button button-dark" href="<?= site_url('customers') ?>">View customers <span>→</span></a>
</section>
<section class="hero-panel">
    <div class="hero-copy"><span class="pill"><span class="pill-dot"></span> YOUR POS STARTS HERE</span><h2>All the essentials.<br><em>One clear view.</em></h2><p>A clean starting point for managing the people behind every sale. Explore the sample customer and staff records below.</p><a class="text-link" href="<?= site_url('about') ?>">Learn about this project <span>↗</span></a></div>
    <div class="hero-art" aria-hidden="true"><div class="art-orbit orbit-one"></div><div class="art-orbit orbit-two"></div><div class="receipt"><div class="receipt-head"><span class="mini-logo">C</span><span>DAILY SUMMARY</span><b>•••</b></div><div class="receipt-line short"></div><div class="receipt-stats"><div><small>CUSTOMERS</small><strong>05</strong></div><div><small>TEAM MEMBERS</small><strong>05</strong></div></div><div class="receipt-row"><span>Records loaded</span><strong>10</strong></div><div class="receipt-row"><span>Data source</span><strong class="live-label">●&nbsp; Static sample</strong></div><div class="receipt-foot"><span>Built with CodeIgniter 4</span><span>↗</span></div></div><div class="spark spark-one">✳</div><div class="spark spark-two">✦</div><div class="art-tag">Simple by design</div></div>
</section>
<section class="section-heading"><div><div class="eyebrow">YOUR WORKSPACE</div><h2>Quick access</h2></div><span class="section-note">Choose a section to explore</span></section>
<section class="quick-grid">
    <a class="quick-card" href="<?= site_url('customers') ?>"><span class="card-icon icon-peach">♙</span><span class="card-arrow">↗</span><div class="eyebrow">DIRECTORY</div><h3>Customer accounts</h3><p>Browse names, contact details, and customer records.</p><div class="card-bottom"><strong>05 sample customers</strong><span>Open list →</span></div></a>
    <a class="quick-card" href="<?= site_url('users') ?>"><span class="card-icon icon-lime">♧</span><span class="card-arrow">↗</span><div class="eyebrow">YOUR PEOPLE</div><h3>User accounts</h3><p>Meet the staff members and see their assigned roles.</p><div class="card-bottom"><strong>05 sample team members</strong><span>Open list →</span></div></a>
    <a class="quick-card about-card" href="<?= site_url('about') ?>"><span class="card-icon icon-lilac">ⓘ</span><span class="card-arrow">↗</span><div class="eyebrow">THE PROJECT</div><h3>About this POS</h3><p>A four-page MVC foundation made with CodeIgniter 4.</p><div class="card-bottom"><strong>Routes · Controllers · Views</strong><span>Read more →</span></div></a>
</section>
<div class="footnote"><span class="footnote-mark">i</span> This learning version uses sample data stored in PHP arrays. No database is connected yet.</div>
<?= $this->endSection() ?>
