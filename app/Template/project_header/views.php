<ul class="views kb-project-views-modern">
    <?= $this->hook->render('template:project-header:view-switcher-before-project-overview', array('project' => $project, 'filters' => $filters)) ?>

    <li <?= $this->app->checkMenuSelection('ProjectOverviewController') ?>>
        <?= $this->url->icon('eye', t('Overview'), 'ProjectOverviewController', 'show', array('project_id' => $project['id'], 'search' => $filters['search']), false, 'view-overview', t('Keyboard shortcut: "%s"', 'v o')) ?>
    </li>

    <?= $this->hook->render('template:project-header:view-switcher-before-board-view', array('project' => $project, 'filters' => $filters)) ?>

    <li <?= $this->app->checkMenuSelection('BoardViewController') ?>>
        <?= $this->url->icon('th', t('Board'), 'BoardViewController', 'show', array('project_id' => $project['id'], 'search' => $filters['search']), false, 'view-board', t('Keyboard shortcut: "%s"', 'v b')) ?>
    </li>

    <?= $this->hook->render('template:project-header:view-switcher-before-task-list', array('project' => $project, 'filters' => $filters)) ?>

    <li <?= $this->app->checkMenuSelection('TaskListController') ?>>
        <?= $this->url->icon('list', t('List'), 'TaskListController', 'show', array('project_id' => $project['id'], 'search' => $filters['search']), false, 'view-listing', t('Keyboard shortcut: "%s"', 'v l')) ?>
    </li>

    <?= $this->hook->render('template:project-header:view-switcher', array('project' => $project, 'filters' => $filters)) ?>
</ul>

<?php static $kbProjectViewsModernLoaded = false; ?>
<?php if (! $kbProjectViewsModernLoaded): ?>
    <?php $kbProjectViewsModernLoaded = true; ?>
    <style>
        .kb-project-views-modern {
            display: inline-flex;
            align-items: center;
            flex-wrap: wrap;
            gap: 6px;
            list-style: none;
            margin: 0;
            padding: 6px;
            border: 1px solid rgba(148, 163, 184, 0.18);
            border-radius: 20px;
            background: linear-gradient(180deg, rgba(255, 255, 255, 0.98) 0%, rgba(249, 251, 255, 0.98) 100%);
            box-shadow: 0 12px 28px rgba(15, 23, 42, 0.05);
        }

        .kb-project-views-modern > li {
            list-style: none;
            margin: 0;
        }

        .kb-project-views-modern > li > a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            min-height: 42px;
            padding: 0 16px;
            border: 1px solid transparent;
            border-radius: 14px;
            color: #62708b;
            font-weight: 700;
            background: transparent;
        }

        .kb-project-views-modern > li > a:hover {
            color: #1f2a44;
            border-color: rgba(148, 163, 184, 0.14);
            background: #f6f8ff;
        }

        .kb-project-views-modern > li > a:hover * {
            color: inherit !important;
        }

        .kb-project-views-modern > li.active > a,
        .kb-project-views-modern > li.current-menu-item > a {
            color: #ffffff;
            border-color: transparent;
            background: linear-gradient(135deg, #4c6fff 0%, #597bf8 100%);
            box-shadow: 0 12px 24px rgba(76, 111, 255, 0.20);
        }

        .kb-project-views-modern > li.active > a *,
        .kb-project-views-modern > li.current-menu-item > a * {
            color: inherit !important;
        }
    </style>
<?php endif; ?>
