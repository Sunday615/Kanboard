<?php if ($paginator->isEmpty()): ?>
    <p class="alert"><?= t('No project') ?></p>
<?php else: ?>
    <div class="kb-modern-data-table-shell">
        <table class="table-fixed table-scrolling kb-modern-data-table kb-project-role-table">
            <thead>
                <tr>
                    <th class="column-20"><?= $paginator->order(t('User'), 'users.username') ?></th>
                    <th class="column-25"><?= $paginator->order(t('Project'), 'projects.name') ?></th>
                    <th><?= t('Columns') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($paginator->getCollection() as $project): ?>
                <tr>
                    <td>
                        <?= $this->text->e($this->user->getFullname($project)) ?>
                    </td>
                    <td>
                        <?= $this->url->link('<i class="fa fa-th"></i>', 'BoardViewController', 'show', array('project_id' => $project['id']), false, 'dashboard-table-link', t('Board')) ?>
                        <?= $this->url->link('<i class="fa fa-cog fa-fw"></i>', 'ProjectViewController', 'show', array('project_id' => $project['id']), false, 'dashboard-table-link', t('Project settings')) ?>

                        <?= $this->text->e($project['project_name']) ?>
                    </td>
                    <td class="dashboard-project-stats">
                        <?php foreach ($project['columns'] as $column): ?>
                            <strong title="<?= t('Task count') ?>"><span class="ui-helper-hidden-accessible"><?= t('Task count') ?> </span><?= $column['nb_open_tasks'] ?></strong>
                            <span><?= $this->text->e($column['title']) ?></span>
                        <?php endforeach ?>
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
