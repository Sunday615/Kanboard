<?= $this->projectHeader->render($project, 'TaskListController', 'show') ?>

<?= $this->render('task_list/modern_styles') ?>

<div class="kb-project-task-list-page">
    <?php if ($paginator->isEmpty()): ?>
        <p class="alert"><?= t('No tasks found.') ?></p>
    <?php elseif (! $paginator->isEmpty()): ?>
        <div class="kb-task-list-shell">
            <div class="kb-task-list-toolbar">
                <?= $this->render('task_list/header', array(
                    'paginator' => $paginator,
                    'project'   => $project,
                    'show_items_selection' => true,
                )) ?>
            </div>

            <div class="table-list kb-task-list-grid">
                <?php foreach ($paginator->getCollection() as $task): ?>
                    <?php
                        $taskAvatars = trim($this->render('task_list/task_avatars', array(
                            'task' => $task,
                        )));
                        $taskIcons = trim($this->render('task_list/task_icons', array(
                            'task' => $task,
                        )));
                        $taskSubtasks = trim($this->render('task_list/task_subtasks', array(
                            'task' => $task,
                        )));
                    ?>
                    <article class="table-list-row kb-task-list-card color-<?= $task['color_id'] ?><?= $task['is_active'] == 0 ? ' is-closed' : '' ?>">
                        <div class="kb-task-list-card-layout">
                            <div class="kb-task-list-card-main">
                                <?= $this->render('task_list/task_title', array(
                                    'task' => $task,
                                    'show_items_selection' => true,
                                    'redirect' => 'list',
                                )) ?>

                                <?= $this->render('task_list/task_details', array(
                                    'task' => $task,
                                )) ?>
                            </div>

                            <div class="kb-task-list-card-side">
                                <?php if ($taskAvatars !== ''): ?>
                                    <?= $taskAvatars ?>
                                <?php endif ?>

                                <?php if ($taskIcons !== ''): ?>
                                    <div class="kb-task-list-metrics-shell">
                                        <?= $taskIcons ?>
                                    </div>
                                <?php endif ?>

                                <?php if ($taskSubtasks !== ''): ?>
                                    <div class="kb-task-list-subtasks-shell">
                                        <?= $taskSubtasks ?>
                                    </div>
                                <?php endif ?>
                            </div>
                        </div>
                    </article>
                <?php endforeach ?>
            </div>

            <div class="kb-task-list-pagination">
                <?= $paginator ?>
            </div>
        </div>
    <?php endif ?>
</div>
