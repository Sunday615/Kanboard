<?= $this->render('app/modern_admin_styles') ?>

<div class="kb-admin-entity-page kb-user-directory-page">
    <?php if ($this->user->hasAccess('UserCreationController', 'show')): ?>
        <div class="kb-admin-toolbar-card">
            <div class="page-header kb-admin-page-header">
            <ul>
                <li>
                    <?= $this->modal->medium('plus', t('New user'), 'UserCreationController', 'show') ?>
                </li>
                <li>
                    <?= $this->modal->medium('paper-plane', t('Invite people'), 'UserInviteController', 'show') ?>
                </li>
                <li>
                    <?= $this->modal->medium('upload', t('Import'), 'UserImportController', 'show') ?>
                </li>
                <li>
                    <?= $this->url->icon('users', t('View all groups'), 'GroupListController', 'index') ?>
                </li>
            </ul>
            </div>
        </div>
    <?php endif ?>

    <div class="kb-admin-search-card">
        <form method="get" action="<?= $this->url->dir() ?>" class="search">
            <?= $this->form->hidden('controller', array('controller' => 'UserListController')) ?>
            <?= $this->form->hidden('action', array('action' => 'search')) ?>
            <?= $this->form->text('search', $values, array(), array('placeholder="'.t('Search').'"', 'aria-label="'.t('Search').'"')) ?>
        </form>
    </div>

    <?php if ($paginator->isEmpty()): ?>
        <p class="alert"><?= t('No users found.') ?></p>
    <?php elseif (! $paginator->isEmpty()): ?>
        <div class="kb-admin-list-shell">
            <div class="table-list kb-admin-list">
                <?= $this->render('user_list/header', array('paginator' => $paginator)) ?>
                <?php foreach ($paginator->getCollection() as $user): ?>
                    <article class="table-list-row table-border-left kb-admin-entity-card kb-user-card">
                        <?= $this->render('user_list/user_title', array(
                            'user' => $user,
                        )) ?>

                        <?= $this->render('user_list/user_details', array(
                            'user' => $user,
                        )) ?>

                        <?= $this->render('user_list/user_icons', array(
                            'user' => $user,
                        )) ?>
                    </article>
                <?php endforeach ?>
            </div>

            <div class="kb-admin-pagination">
                <?= $paginator ?>
            </div>
        </div>
    <?php endif ?>
</div>
