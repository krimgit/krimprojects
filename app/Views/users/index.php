<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<section class="welcome-row"><div><div class="eyebrow">WORKSPACE / TEAM</div><h1>User accounts</h1><p class="subhead">A quick look at the people who keep the store moving.</p></div><span class="record-total"><strong><?= count($users) ?></strong><small>sample records</small></span></section>
<section class="list-toolbar"><div><h2>Team members <span class="count-chip"><?= count($users) ?></span></h2><p>Sample records from a static PHP array</p></div><div class="list-actions"><span class="search-display">⌕ <span>Search is a future feature</span></span><button class="button button-dark" type="button" title="This activity does not add records">＋ Add member</button></div></section>
<div class="table-card"><table><thead><tr><th>USERNAME</th><th>FULL NAME</th><th>ROLE</th><th>STATUS</th><th></th></tr></thead><tbody>
<?php foreach ($users as $user): ?>
<tr><td><span class="username">@<?= esc($user['username']) ?></span></td><td><div class="person-cell"><span class="person-avatar user-avatar"><?= esc(strtoupper(substr($user['name'], 0, 1))) ?></span><strong><?= esc($user['name']) ?></strong></div></td><td><span class="role-tag"><?= esc($user['role']) ?></span></td><td><span class="status"><i></i> Active</span></td><td><span class="row-more">•••</span></td></tr>
<?php endforeach; ?>
</tbody></table><div class="table-footer"><span>Showing <strong><?= count($users) ?></strong> of <strong><?= count($users) ?></strong> sample team members</span><span class="page-control">‹ <b>1</b> ›</span></div></div>
<div class="footnote"><span class="footnote-mark">i</span> Data is defined in <code>app/Controllers/Users.php</code> and passed into this view.</div>
<?= $this->endSection() ?>
