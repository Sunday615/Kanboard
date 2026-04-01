<div class="sidebar kb-sidebar">
    <div class="kb-sidebar-brand">
        <span class="kb-sidebar-brand-mark">KB</span>
        <div class="kb-sidebar-brand-copy">
            <strong><?= t('Kanboard') ?></strong>
            <small><?= t('Workspace dashboard') ?></small>
        </div>
    </div>

    <div class="kb-sidebar-section-label"><?= t('General') ?></div>

    <ul>
        <li data-nav="overview" <?= $this->app->checkMenuSelection('DashboardController', 'show') ?>>
            <?= $this->url->link(t('Overview'), 'DashboardController', 'show', array('user_id' => $user['id'])) ?>
        </li>
        <li data-nav="projects" <?= $this->app->checkMenuSelection('DashboardController', 'projects') ?>>
            <?= $this->url->link(t('My projects'), 'DashboardController', 'projects', array('user_id' => $user['id'])) ?>
        </li>
        <li data-nav="tasks" <?= $this->app->checkMenuSelection('DashboardController', 'tasks') ?>>
            <?= $this->url->link(t('My tasks'), 'DashboardController', 'tasks', array('user_id' => $user['id'])) ?>
        </li>
        <li data-nav="subtasks" <?= $this->app->checkMenuSelection('DashboardController', 'subtasks') ?>>
            <?= $this->url->link(t('My subtasks'), 'DashboardController', 'subtasks', array('user_id' => $user['id'])) ?>
        </li>
        <?= $this->hook->render('template:dashboard:sidebar', array('user' => $user)) ?>
    </ul>

    
</div>
