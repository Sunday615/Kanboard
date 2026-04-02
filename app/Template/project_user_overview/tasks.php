<?php if ($paginator->isEmpty()): ?>
    <p class="alert"><?= t('No tasks found.') ?></p>
<?php elseif (! $paginator->isEmpty()): ?>
    <div class="kb-modern-data-table-shell">
        <table class="table-small table-scrolling kb-modern-data-table kb-open-tasks-table">
            <thead>
                <tr>
                    <th class="column-5"><?= $paginator->order(t('Id'), 'tasks.id') ?></th>
                    <th class="column-10"><?= $paginator->order(t('Project'), 'projects.name') ?></th>
                    <th class="column-15"><?= $paginator->order(t('Column'), 'tasks.column_id') ?></th>
                    <th><?= $paginator->order(t('Title'), 'tasks.title') ?></th>
                    <th class="column-15"><?= $paginator->order(t('Assignee'), 'users.username') ?></th>
                    <th class="column-15"><?= $paginator->order(t('Start date'), 'tasks.date_started') ?></th>
                    <th class="column-15"><?= $paginator->order(t('Due date'), 'tasks.date_due') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($paginator->getCollection() as $task): ?>
                <tr>
                    <td class="task-table">
                        <?= $this->url->link('#'.$this->text->e($task['id']), 'TaskViewController', 'show', array('task_id' => $task['id']), false, 'kb-table-id-pill color-'.$task['color_id'], t('View this task')) ?>
                    </td>
                    <td>
                        <?= $this->url->link($this->text->e($task['project_name']), 'BoardViewController', 'show', array('project_id' => $task['project_id'])) ?>
                    </td>
                    <td>
                        <span class="kb-table-badge"><?= $this->text->e($task['column_name']) ?></span>
                    </td>
                    <td>
                        <?= $this->url->link($this->text->e($task['title']), 'TaskViewController', 'show', array('task_id' => $task['id']), false, '', t('View this task')) ?>
                    </td>
                    <td>
                        <?php if ($task['assignee_username']): ?>
                            <?= $this->text->e($task['assignee_name'] ?: $task['assignee_username']) ?>
                        <?php else: ?>
                            <span class="kb-table-muted"><?= t('Unassigned') ?></span>
                        <?php endif ?>
                    </td>
                    <td>
                        <?php if (! empty($task['date_started'])): ?>
                            <?= $this->dt->date($task['date_started']) ?>
                        <?php else: ?>
                            <span class="kb-table-muted">-</span>
                        <?php endif ?>
                    </td>
                    <td>
                        <?php if (! empty($task['date_due'])): ?>
                            <?= $this->dt->datetime($task['date_due']) ?>
                        <?php else: ?>
                            <span class="kb-table-muted">-</span>
                        <?php endif ?>
                    </td>
                </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>

    <div class="kb-admin-pagination">
        <?= $paginator ?>
    </div>
<?php endif ?>
