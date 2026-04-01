<div class="kb-page-shell">
    <div class="kb-page-head">
        <div>
            <p class="kb-page-eyebrow"><?= t('Task details') ?></p>
            <h1 class="kb-page-title">
                <?= $this->url->link(t('My subtasks'), 'DashboardController', 'subtasks', array('user_id' => $user['id'])) ?>
            </h1>
            <p class="kb-page-copy"><?= t('A cleaner subtasks view with the same data and sorting actions, now styled to match the full dashboard theme.') ?></p>
        </div>
        <span class="kb-page-chip"><?= $nb_subtasks ?> <?= t('items') ?></span>
    </div>

    <?php if ($nb_subtasks == 0): ?>
        <div class="kb-empty-state">
            <div class="kb-empty-state-icon">
                <i class="fa fa-list-check" aria-hidden="true"></i>
            </div>
            <h2><?= t('No subtasks assigned') ?></h2>
            <p><?= t('There is nothing assigned to you.') ?></p>
        </div>
    <?php else: ?>
        <div class="kb-card">
            <div class="table-list-header">
                <div class="table-list-header-count">
                    <?php if ($nb_subtasks > 1): ?>
                        <?= t('%d subtasks', $nb_subtasks) ?>
                    <?php else: ?>
                        <?= t('%d subtask', $nb_subtasks) ?>
                    <?php endif ?>
                </div>
                <div class="table-list-header-menu">
                    <div class="dropdown">
                        <a href="#" class="dropdown-menu dropdown-menu-link-icon"><strong><?= t('Sort') ?> <i class="fa fa-caret-down"></i></strong></a>
                        <ul>
                            <li>
                                <?= $paginator->order(t('Task ID'), \Kanboard\Model\TaskModel::TABLE.'.id') ?>
                            </li>
                            <li>
                                <?= $paginator->order(t('Title'), \Kanboard\Model\TaskModel::TABLE.'.title') ?>
                            </li>
                            <li>
                                <?= $paginator->order(t('Priority'), \Kanboard\Model\TaskModel::TABLE.'.priority') ?>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="table-list">
                <?php foreach ($paginator->getCollection() as $task): ?>
                    <div class="table-list-row color-<?= $task['color_id'] ?>">
                        <?= $this->render('task_list/task_title', array(
                            'task' => $task,
                        )) ?>

                        <?= $this->render('task_list/task_subtasks', array(
                            'task' => $task,
                            'user_id' => $user['id'],
                        )) ?>
                    </div>
                <?php endforeach ?>
            </div>
        </div>

        <div class="kb-pagination">
            <?= $paginator ?>
        </div>
    <?php endif ?>
</div>
