<div class="table-list-details kb-task-list-details">
    <div class="kb-task-list-path">
        <span class="kb-task-list-path-item">
            <i class="fa fa-folder-open-o" aria-hidden="true"></i>
            <span><?= $this->text->e($task['project_name']) ?></span>
        </span>
        <span class="kb-task-list-path-item">
            <i class="fa fa-random" aria-hidden="true"></i>
            <span><?= $this->text->e($task['swimlane_name']) ?></span>
        </span>
        <span class="kb-task-list-path-item">
            <i class="fa fa-columns" aria-hidden="true"></i>
            <span><?= $this->text->e($task['column_name']) ?></span>
        </span>
    </div>

    <?php if (! empty($task['category_id']) || ! empty($task['tags'])): ?>
        <div class="kb-task-list-chips">
            <?php if (! empty($task['category_id'])): ?>
                <span class="table-list-category <?= $task['category_color_id'] ? "color-{$task['category_color_id']}" : '' ?>">
                    <?php if ($this->user->hasProjectAccess('TaskModificationController', 'edit', $task['project_id'])): ?>
                        <?= $this->url->link(
                            $this->text->e($task['category_name']),
                            'TaskModificationController',
                            'edit',
                            array('task_id' => $task['id']),
                            false,
                            'js-modal-medium' . (! empty($task['category_description']) ? ' tooltip' : ''),
                            t('Change category')
                        ) ?>
                        <?php if (! empty($task['category_description'])): ?>
                            <?= $this->app->tooltipMarkdown($task['category_description']) ?>
                        <?php endif ?>
                    <?php else: ?>
                        <?= $this->text->e($task['category_name']) ?>
                    <?php endif ?>
                </span>
            <?php endif ?>

            <?php foreach ($task['tags'] as $tag): ?>
                <span class="table-list-category task-list-tag <?= $tag['color_id'] ? "color-{$tag['color_id']}" : '' ?>">
                    <?= $this->text->e($tag['name']) ?>
                </span>
            <?php endforeach ?>
        </div>
    <?php endif ?>
</div>
