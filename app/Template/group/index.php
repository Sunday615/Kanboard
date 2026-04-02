<?= $this->render('app/modern_admin_styles') ?>

<div class="kb-admin-entity-page kb-group-directory-page">
    <div class="kb-admin-toolbar-card">
        <div class="page-header kb-admin-page-header">
            <ul>
                <li><?= $this->url->icon('user', t('All users'), 'UserListController', 'show') ?></li>
                <li><?= $this->modal->medium('user-plus', t('New group'), 'GroupCreationController', 'show') ?></li>
            </ul>
        </div>
    </div>

    <div class="kb-admin-search-card">
        <form method="get" action="<?= $this->url->dir() ?>" class="search">
            <?= $this->form->hidden('controller', array('controller' => 'GroupListController')) ?>
            <?= $this->form->hidden('action', array('action' => 'index')) ?>
            <?= $this->form->text('search', $values, array(), array('placeholder="'.t('Search').'"', 'aria-label="'.t('Search').'"')) ?>
        </form>
    </div>

    <?php if ($paginator->isEmpty()): ?>
        <p class="alert"><?= t('There is no group.') ?></p>
    <?php else: ?>
        <div class="kb-admin-list-shell">
            <div class="table-list kb-admin-list">
                <div class="table-list-header kb-admin-list-header">
                    <div class="table-list-header-count kb-admin-list-count">
                        <?php if ($paginator->getTotal() > 1): ?>
                            <?= t('%d groups', $paginator->getTotal()) ?>
                        <?php else: ?>
                            <?= t('%d group', $paginator->getTotal()) ?>
                        <?php endif ?>
                    </div>
                    <div class="table-list-header-menu kb-admin-list-menu">
                        <div class="dropdown kb-admin-sort">
                            <a href="#" class="dropdown-menu dropdown-menu-link-icon"><strong><?= t('Sort') ?> <i class="fa fa-caret-down"></i></strong></a>
                            <ul>
                                <li>
                                    <?= $paginator->order(t('Group ID'), \Kanboard\Model\GroupModel::TABLE.'.id') ?>
                                </li>
                                <li>
                                    <?= $paginator->order(t('Name'), \Kanboard\Model\GroupModel::TABLE.'.name') ?>
                                </li>
                                <li>
                                    <?= $paginator->order(t('External ID'), \Kanboard\Model\GroupModel::TABLE.'.external_id') ?>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <?php foreach ($paginator->getCollection() as $group): ?>
                <article class="table-list-row table-border-left kb-admin-entity-card kb-group-card">
                    <div class="kb-admin-group-head">
                        <div class="kb-admin-id-pill">
                            <?= $this->render('group/dropdown', array('group' => $group)) ?>
                        </div>
                        <span class="table-list-title kb-admin-entity-title">
                            <?= $this->url->link($this->text->e($group['name']), 'GroupListController', 'users', array('group_id' => $group['id'])) ?>
                        </span>
                    </div>

                    <div class="table-list-details kb-admin-entity-details">
                        <span>
                            <?php if ($group['nb_users'] > 1): ?>
                                <?= t('%d users', $group['nb_users']) ?>
                            <?php else: ?>
                                <?= t('%d user', $group['nb_users']) ?>
                            <?php endif ?>
                        </span>

                        <?php if (! empty($group['external_id'])): ?>
                            <span><?= $this->text->e($group['external_id']) ?></span>
                        <?php endif ?>
                    </div>
                </article>
                <?php endforeach ?>
            </div>

            <div class="kb-admin-pagination">
                <?= $paginator ?>
            </div>
        </div>
    <?php endif ?>
</div>
