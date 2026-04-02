<!-- task row -->
<tr class="board-swimlane board-swimlane-tasks-<?= $swimlane['id'] ?> kb-board-task-row<?= $swimlane['task_limit'] && $swimlane['nb_tasks'] > $swimlane['task_limit'] ? ' board-task-list-limit' : '' ?>">
    <?php foreach ($swimlane['columns'] as $column): ?>
        <?php
            $columnToneCounts = array();

            foreach ($column['tasks'] as $columnTask) {
                if (! empty($columnTask['color_id'])) {
                    if (! isset($columnToneCounts[$columnTask['color_id']])) {
                        $columnToneCounts[$columnTask['color_id']] = 0;
                    }

                    $columnToneCounts[$columnTask['color_id']]++;
                }
            }

            $columnToneClass = '';

            if (! empty($columnToneCounts)) {
                arsort($columnToneCounts);
                $columnToneClass = 'kb-board-tone-'.key($columnToneCounts);
            }
        ?>
        <td class="
            board-column-<?= $column['id'] ?>
            kb-board-column-cell
            <?= $columnToneClass ?>
            <?= $column['task_limit'] > 0 && $column['column_nb_open_tasks'] > $column['task_limit'] ? 'board-task-list-limit' : '' ?>
            "
        >

            <!-- tasks list -->
            <div
                class="board-task-list board-column-expanded kb-board-task-list <?= $columnToneClass ?> <?= $this->projectRole->isSortableColumn($column['project_id'], $column['id']) ? 'sortable-column' : '' ?>"
                data-column-id="<?= $column['id'] ?>"
                data-swimlane-id="<?= $swimlane['id'] ?>"
                data-task-limit="<?= $column['task_limit'] ?>">

                <?php foreach ($column['tasks'] as $task): ?>
                    <?= $this->render($not_editable ? 'board/task_public' : 'board/task_private', array(
                        'project' => $project,
                        'task' => $task,
                        'board_highlight_period' => $board_highlight_period,
                        'not_editable' => $not_editable,
                    )) ?>
                <?php endforeach ?>
            </div>

            <!-- column in collapsed mode (rotated text) -->
            <div class="board-column-collapsed board-task-list kb-board-task-list sortable-column"
                data-column-id="<?= $column['id'] ?>"
                data-swimlane-id="<?= $swimlane['id'] ?>"
                data-task-limit="<?= $column['task_limit'] ?>">
                <div class="board-rotation-wrapper">
                    <div class="board-column-title board-rotation board-toggle-column-view" data-column-id="<?= $column['id'] ?>" title="<?= $this->text->e($column['title']) ?>">
                        <i class="fa fa-plus-square" title="<?= t('Show this column') ?>" role="button" aria-label="<?= t('Show this column') ?>"></i> <?= $this->text->e($column['title']) ?>
                    </div>
                </div>
            </div>
        </td>
    <?php endforeach ?>
</tr>
