
<div class="table-list-header kb-admin-list-header">
    <div class="table-list-header-count kb-admin-list-count">
        <?php if ($paginator->getTotal() > 1): ?>
            <?= t('%d users', $paginator->getTotal()) ?>
        <?php else: ?>
            <?= t('%d user', $paginator->getTotal()) ?>
        <?php endif ?>
    </div>
    <div class="table-list-header-menu kb-admin-list-menu">
        <?= $this->render('user_list/sort_menu', array('paginator' => $paginator)) ?>
    </div>
</div>
