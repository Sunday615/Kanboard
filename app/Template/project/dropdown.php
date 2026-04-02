<div class="dropdown kb-project-switcher-dropdown">
    <a href="#" class="dropdown-menu dropdown-menu-link-icon kb-project-switcher-trigger">
        <strong>#<?= $project['id'] ?> <i class="fa fa-caret-down"></i></strong>
    </a>
    <ul>
        <li>
            <?= $this->url->icon('th', t('Board'), 'BoardViewController', 'show', array('project_id' => $project['id'])) ?>
        </li>
        <li>
            <?= $this->url->icon('list', t('Listing'), 'TaskListController', 'show', array('project_id' => $project['id'])) ?>
        </li>
        <li>
            <?= $this->modal->medium('dashboard', t('Activity'), 'ActivityController', 'project', array('project_id' => $project['id'])) ?>
        </li>

        <?php if ($this->user->hasProjectAccess('AnalyticController', 'taskDistribution', $project['id'])): ?>
            <li>
                <?= $this->modal->large('line-chart', t('Analytics'), 'AnalyticController', 'taskDistribution', array('project_id' => $project['id'])) ?>
            </li>
        <?php endif ?>

        <?= $this->hook->render('template:project:dropdown', array('project' => $project)) ?>

        <?php if ($this->user->hasProjectAccess('ProjectEditController', 'show', $project['id'])): ?>
            <li>
                <?= $this->url->icon('cog', t('Configure this project'), 'ProjectViewController', 'show', array('project_id' => $project['id'])) ?>
            </li>
        <?php endif ?>
    </ul>
</div>

<?php static $kbProjectSwitcherModernLoaded = false; ?>
<?php if (! $kbProjectSwitcherModernLoaded): ?>
    <?php $kbProjectSwitcherModernLoaded = true; ?>
    <style>
        .kb-project-switcher-dropdown {
            position: relative;
        }

        .kb-project-switcher-trigger {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-height: 42px;
            padding: 0 14px;
            border-radius: 999px;
            border: 1px solid rgba(0, 17, 255, 0.12);
            background: rgba(255, 255, 255, 0.92);
            color: #1e40af;
            box-shadow: 0 8px 18px rgba(15, 23, 42, 0.05);
        }

        .kb-project-switcher-trigger strong {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            color: inherit;
            font-size: 13px;
            font-weight: 700;
        }

        .kb-project-switcher-trigger:hover {
            border-color: rgba(0, 17, 255, 0.18);
            background: #ffffff;
            color: #1e40af;
        }

        .kb-project-switcher-trigger:hover * {
            color: inherit !important;
        }
    </style>
<?php endif; ?>
