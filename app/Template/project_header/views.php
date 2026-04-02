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
            gap: 8px;
            list-style: none;
            margin: 0;
            padding: 8px;
            border: 1px solid rgba(15, 23, 42, 0.08);
            border-radius: 18px;
            background: rgba(255, 255, 255, 0.92);
            box-shadow: 0 10px 24px rgba(15, 23, 42, 0.05);
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
            padding: 0 14px;
            border-radius: 12px;
            color: #5b6b90;
            font-weight: 700;
            background: transparent;
        }

        .kb-project-views-modern > li > a:hover {
            color: #0f172a;
            background: rgba(0, 17, 255, 0.05);
        }

        .kb-project-views-modern > li > a:hover * {
            color: inherit !important;
        }

        .kb-project-views-modern > li.active > a,
        .kb-project-views-modern > li.current-menu-item > a {
            color: #ffffff;
            background: linear-gradient(135deg, #1d4ed8 0%, #3b82f6 100%);
            box-shadow: 0 12px 24px rgba(0, 17, 255, 0.16);
        }

        .kb-project-views-modern > li.active > a *,
        .kb-project-views-modern > li.current-menu-item > a * {
            color: inherit !important;
        }
    </style>
<?php endif; ?>
