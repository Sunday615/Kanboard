<div class="dropdown kb-project-action-dropdown">
    <a href="#" class="dropdown-menu action-menu kb-project-action-trigger" title="<?= t('Configure this project') ?>" aria-label="<?= t('Configure this project') ?>">
        <i class="fa fa-cog"></i>
        <span><?= t('Actions') ?></span>
        <i class="fa fa-caret-down"></i>
    </a>
    <ul>
        <?php if ($board_view): ?>
        <li>
            <span class="filter-display-mode" <?= $this->board->isCollapsed($project['id']) ? '' : 'style="display: none;"' ?>>
                <?= $this->url->icon('expand', t('Expand tasks'), 'BoardAjaxController', 'expand', array('project_id' => $project['id']), false, 'board-display-mode', t('Keyboard shortcut: "%s"', 's')) ?>
            </span>
            <span class="filter-display-mode" <?= $this->board->isCollapsed($project['id']) ? 'style="display: none;"' : '' ?>>
                <?= $this->url->icon('compress', t('Collapse tasks'), 'BoardAjaxController', 'collapse', array('project_id' => $project['id']), false, 'board-display-mode', t('Keyboard shortcut: "%s"', 's')) ?>
            </span>
        </li>
        <li>
            <span class="filter-compact">
                <i class="fa fa-th fa-fw"></i> <a href="#" class="filter-toggle-scrolling" title="<?= t('Keyboard shortcut: "%s"', 'c') ?>"><?= t('Compact view') ?></a>
            </span>
            <span class="filter-wide" style="display: none">
                <i class="fa fa-arrows-h fa-fw"></i> <a href="#" class="filter-toggle-scrolling" title="<?= t('Keyboard shortcut: "%s"', 'c') ?>"><?= t('Horizontal scrolling') ?></a>
            </span>
        </li>
        <li>
            <span class="filter-vert-collapse">
                <i class="fa fa-arrow-up fa-fw"></i> <a href="#" class="filter-vert-toggle-collapse"><?= t('Collapse vertically') ?></a>
            </span>
            <span class="filter-vert-expand" style="display: none">
                <i class="fa fa-arrow-down fa-fw"></i> <a href="#" class="filter-vert-toggle-collapse"><?= t('Expand vertically') ?></a>
            </span>
        </li>
        <?php endif ?>

        <?php if ($this->user->hasProjectAccess('TaskCreationController', 'show', $project['id'])): ?>
            <li>
                <?= $this->modal->large('plus', t('Add a new task'), 'TaskCreationController', 'show', array('project_id' => $project['id'])) ?>
            </li>
        <?php endif ?>

        <li>
            <?= $this->modal->medium('dashboard', t('Activity'), 'ActivityController', 'project', array('project_id' => $project['id'])) ?>
        </li>

        <?php if ($this->user->hasProjectAccess('CustomFilterController', 'index', $project['id'])): ?>
            <li>
                <?= $this->modal->medium('filter', t('Add custom filters'), 'CustomFilterController', 'create', array('project_id' => $project['id'])) ?>
            </li>
        <?php endif ?>

        <?php if ($project['is_public']): ?>
            <li>
                <?= $this->url->icon('share-alt', t('Public link'), 'BoardViewController', 'readonly', array('token' => $project['token']), false, '', '', true) ?>
            </li>
        <?php endif ?>

        <?= $this->hook->render('template:project:dropdown', array('project' => $project)) ?>

        <?php if ($this->user->hasProjectAccess('AnalyticController', 'taskDistribution', $project['id'])): ?>
            <li>
                <?= $this->modal->large('line-chart', t('Analytics'), 'AnalyticController', 'taskDistribution', array('project_id' => $project['id'])) ?>
            </li>
        <?php endif ?>

        <?php if ($this->user->hasProjectAccess('ExportController', 'tasks', $project['id'])): ?>
            <li>
                <?= $this->modal->medium('upload', t('Exports'), 'ExportController', 'tasks', array('project_id' => $project['id'])) ?>
            </li>
        <?php endif ?>

        <?php if ($this->user->hasProjectAccess('TaskImportController', 'tasks', $project['id'])): ?>
            <li>
                <?= $this->modal->medium('download', t('Import tasks'), 'TaskImportController', 'show', array('project_id' => $project['id'])) ?>
            </li>
        <?php endif ?>

        <?php if ($this->user->hasProjectAccess('ProjectViewController', 'show', $project['id'])): ?>
            <li>
                <?= $this->url->icon('cog', t('Configure this project'), 'ProjectViewController', 'show', array('project_id' => $project['id'])) ?>
            </li>
        <?php endif ?>

        <li>
            <?= $this->url->icon('folder', t('Manage projects'), 'ProjectListController', 'show') ?>
        </li>
    </ul>
</div>

<?php static $kbProjectActionDropdownModernLoaded = false; ?>
<?php if (! $kbProjectActionDropdownModernLoaded): ?>
    <?php $kbProjectActionDropdownModernLoaded = true; ?>
    <style>
        .kb-project-action-dropdown {
            position: relative;
        }

        .kb-project-action-trigger {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            min-height: 46px;
            padding: 0 18px;
            border: 1px solid rgba(148, 163, 184, 0.18);
            border-radius: 999px;
            color: #334155;
            background: linear-gradient(180deg, #ffffff 0%, #f9fbff 100%);
            box-shadow: 0 10px 22px rgba(15, 23, 42, 0.05);
            font-weight: 700;
        }

        .kb-project-action-trigger:hover {
            color: #1f2a44;
            border-color: rgba(76, 111, 255, 0.18);
            background: #f7f9ff;
            box-shadow: 0 14px 28px rgba(76, 111, 255, 0.10);
            transform: translateY(-1px);
        }

        .kb-project-action-trigger:hover * {
            color: inherit !important;
        }

        .kb-project-action-trigger .fa:first-child {
            color: #4c6fff;
        }

        .kb-project-action-trigger > span {
            color: inherit;
            font-size: 14px;
            font-weight: 700;
        }
    </style>
<?php endif; ?>
