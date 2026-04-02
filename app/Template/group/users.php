<?= $this->render('app/modern_admin_styles') ?>

<section id="main" class="kb-admin-entity-page kb-group-users-page">
    <div class="kb-admin-toolbar-card">
        <div class="page-header kb-admin-page-header">
            <ul>
                <li><?= $this->url->icon('user', t('All users'), 'UserListController', 'show') ?></li>
                <li><?= $this->url->icon('users', t('View all groups'), 'GroupListController', 'index') ?></li>
                <li><?= $this->modal->medium('plus', t('Add group member'), 'GroupListController', 'associate', array('group_id' => $group['id'])) ?></li>
            </ul>
        </div>
    </div>
    <?php if ($paginator->isEmpty()): ?>
        <p class="alert"><?= t('There is no user in this group.') ?></p>
    <?php else: ?>
        <div class="kb-admin-list-shell">
            <div class="table-list kb-admin-list">
                <?= $this->render('user_list/header', array('paginator' => $paginator)) ?>
                <?php foreach ($paginator->getCollection() as $user): ?>
                    <article class="table-list-row table-border-left kb-admin-entity-card kb-user-card">
                        <div class="kb-admin-user-head">
                            <div class="kb-admin-id-pill">
                                <?= $this->render('group/user_dropdown', array('user' => $user)) ?>
                            </div>
                            <span class="table-list-title kb-admin-entity-title <?= $user['is_active'] == 0 ? 'status-closed' : '' ?>">
                                <?= $this->avatar->small(
                                    $user['id'],
                                    $user['username'],
                                    $user['name'],
                                    $user['email'],
                                    $user['avatar_path'],
                                    'avatar-inline'
                                ) ?>
                                <?= $this->url->link($this->text->e($user['name'] ?: $user['username']), 'UserViewController', 'show', array('user_id' => $user['id'])) ?>
                            </span>
                        </div>

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
</section>
