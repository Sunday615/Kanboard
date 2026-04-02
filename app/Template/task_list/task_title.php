<div class="kb-task-list-title-wrap">
    <?php if ($this->user->hasProjectAccess('TaskModificationController', 'edit', $task['project_id'])): ?>
        <div class="kb-task-list-title-controls">
            <?php if (isset($show_items_selection)): ?>
                <span class="kb-task-list-selection">
                    <input type="checkbox" data-list-item="selectable" name="tasks[]" value="<?= $task['id'] ?>">
                </span>
            <?php endif ?>
            <div class="kb-task-list-id-pill">
                <?= $this->render('task/dropdown', array('task' => $task, 'redirect' => isset($redirect) ? $redirect : '')) ?>
            </div>
        </div>
    <?php else: ?>
        <strong class="kb-task-list-id-fallback"><?= '#'.$task['id'] ?></strong>
    <?php endif ?>

    <span class="table-list-title kb-task-list-title <?= $task['is_active'] == 0 ? 'status-closed' : '' ?>">
        <?= $this->url->link($this->text->e($task['title']), 'TaskViewController', 'show', array('task_id' => $task['id'])) ?>
    </span>
</div>
