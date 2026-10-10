<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<section class="welcome-row"><div><div class="eyebrow">WORKSPACE / TEAM</div><h1>User accounts</h1><p class="subhead">A quick look at the people who keep the store moving.</p></div><span class="record-total"><strong><?= count($users) ?></strong><small>database records</small></span></section>
<section class="list-toolbar"><div><h2>Team members <span class="count-chip"><?= count($users) ?></span></h2><p>Records retrieved from the users table</p></div><div class="list-actions"><span class="search-display">⌕ <span>Search is a future feature</span></span><button class="button button-dark" type="button" title="This activity does not add records">＋ Add member</button></div></section>
<div class="table-card"><table><thead><tr><th>USERNAME</th><th>FULL NAME</th><th>CREATED</th><th></th></tr></thead><tbody>
<?php foreach ($users as $user): ?>
<tr><td><span class="username">@<?= esc($user['username']) ?></span></td><td><div class="person-cell"><span class="person-avatar user-avatar"><?= esc(strtoupper(substr($user['full_name'], 0, 1))) ?></span><strong><?= esc($user['full_name']) ?></strong></div></td><td><?= esc($user['created_at']) ?></td><td><span class="row-more">•••</span></td></tr>
<?php endforeach; ?>
</tbody></table><div class="table-footer"><span>Showing <strong><?= count($users) ?></strong> database team members</span><span class="page-control">‹ <b>1</b> ›</span></div></div>
<div class="footnote"><span class="footnote-mark">i</span> The controller retrieves these rows through <code>UserModel</code> and Query Builder.</div>
<?= $this->endSection() ?>
