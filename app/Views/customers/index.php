<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<section class="welcome-row"><div><div class="eyebrow">DIRECTORY / ACCOUNTS</div><h1>Customer accounts</h1><p class="subhead">The people who make every sale matter.</p></div><span class="record-total"><strong><?= count($customers) ?></strong><small>sample records</small></span></section>
<section class="list-toolbar"><div><h2>All customers <span class="count-chip"><?= count($customers) ?></span></h2><p>Sample records from a static PHP array</p></div><div class="list-actions"><span class="search-display">⌕ <span>Search is a future feature</span></span><button class="button button-dark" type="button" title="This activity does not add records">＋ Add customer</button></div></section>
<div class="table-card"><table><thead><tr><th>CUSTOMER</th><th>EMAIL ADDRESS</th><th>PHONE NUMBER</th><th>STATUS</th><th></th></tr></thead><tbody>
<?php foreach ($customers as $customer): ?>
<tr><td><div class="person-cell"><span class="person-avatar customer-avatar"><?= esc(strtoupper(substr($customer['name'], 0, 1))) ?></span><strong><?= esc($customer['name']) ?></strong></div></td><td><?= esc($customer['email']) ?></td><td><?= esc($customer['phone']) ?></td><td><span class="status"><i></i> Active</span></td><td><span class="row-more">•••</span></td></tr>
<?php endforeach; ?>
</tbody></table><div class="table-footer"><span>Showing <strong><?= count($customers) ?></strong> of <strong><?= count($customers) ?></strong> sample customers</span><span class="page-control">‹ <b>1</b> ›</span></div></div>
<div class="footnote"><span class="footnote-mark">i</span> Data is defined in <code>app/Controllers/Customers.php</code> and passed into this view.</div>
<?= $this->endSection() ?>
