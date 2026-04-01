<div class="kb-page-shell">
    <div class="kb-page-head">
        <div>
            <p class="kb-page-eyebrow"><?= t('Work queue') ?></p>
            <h1 class="kb-page-title">
                <?= $this->url->link(t('My tasks'), 'DashboardController', 'tasks', array('user_id' => $user['id'])) ?>
            </h1>
            <p class="kb-page-copy"><?= t('All assigned tasks presented with softer cards, better spacing, and a more modern dashboard rhythm.') ?></p>
        </div>
        <span class="kb-page-chip"><?= $paginator->getTotal() ?> <?= t('tasks') ?></span>
    </div>

    <?php if ($paginator->isEmpty()): ?>
        <div class="kb-empty-state">
            <div class="kb-empty-state-icon">
                <i class="fa fa-check-circle" aria-hidden="true"></i>
            </div>
            <h2><?= t('Nothing assigned right now') ?></h2>
            <p><?= t('There is nothing assigned to you.') ?></p>
        </div>
    <?php else: ?>
        <div class="kb-card">
            <div class="kb-card-header">
                <?= $this->render('task_list/header', array(
                    'paginator' => $paginator,
                )) ?>
            </div>

            <div class="table-list">
                <?php foreach ($paginator->getCollection() as $task): ?>
                    <div class="table-list-row color-<?= $task['color_id'] ?>">
                        <?= $this->render('task_list/task_title', array(
                            'task' => $task,
                            'redirect' => 'dashboard-tasks',
                        )) ?>

                        <?= $this->render('task_list/task_details', array(
                            'task' => $task,
                        )) ?>

                        <?= $this->render('task_list/task_avatars', array(
                            'task' => $task,
                        )) ?>

                        <?= $this->render('task_list/task_icons', array(
                            'task' => $task,
                        )) ?>

                        <?= $this->render('task_list/task_subtasks', array(
                            'task' => $task,
                        )) ?>

                        <?= $this->hook->render('template:dashboard:task:footer', array('task' => $task)) ?>
                    </div>
                <?php endforeach ?>
            </div>
        </div>

        <div class="kb-pagination">
            <?= $paginator ?>
        </div>
    <?php endif ?>
</div>
