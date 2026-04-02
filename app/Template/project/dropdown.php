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
            display: inline-flex;
            flex: 0 0 auto;
            min-width: 0;
        }

        .kb-project-switcher-trigger,
        .kb-project-switcher-trigger.active-dropdown-menu {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            flex: 0 0 auto;
            flex-shrink: 0;
            min-height: 42px;
            min-width: 104px;
            padding: 0 16px;
            box-sizing: border-box;
            border-radius: 999px;
            border: 1px solid rgba(148, 163, 184, 0.28);
            background: rgba(255, 255, 255, 0.92);
            color: #1e3a8a;
            text-decoration: none;
            white-space: nowrap;
            box-shadow: 0 10px 24px rgba(15, 23, 42, 0.06);
            transition: border-color 0.18s ease, background-color 0.18s ease, color 0.18s ease, box-shadow 0.18s ease, transform 0.18s ease;
        }

        .kb-project-switcher-trigger strong,
        .kb-project-switcher-trigger.active-dropdown-menu strong {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            width: 100%;
            color: inherit;
            font-size: 13px;
            font-weight: 800;
            line-height: 1;
        }

        .kb-project-switcher-trigger .fa-caret-down,
        .kb-project-switcher-trigger.active-dropdown-menu .fa-caret-down {
            padding-right: 0;
            color: #64748b;
            font-size: 0.82rem;
            transition: color 0.18s ease, transform 0.18s ease;
        }

        .kb-project-switcher-trigger:hover,
        .kb-project-switcher-trigger:focus,
        .kb-project-switcher-trigger:focus-visible,
        .kb-project-switcher-trigger.active-dropdown-menu {
            border-color: rgba(96, 165, 250, 0.42);
            background: #ffffff;
            color: #1d4ed8;
            text-decoration: none;
            box-shadow: 0 14px 28px rgba(37, 99, 235, 0.12);
        }

        .kb-project-switcher-trigger:focus-visible {
            outline: none;
            box-shadow:
                0 0 0 4px rgba(59, 130, 246, 0.14),
                0 14px 28px rgba(37, 99, 235, 0.12);
        }

        .kb-project-switcher-trigger:hover .fa-caret-down,
        .kb-project-switcher-trigger:focus .fa-caret-down,
        .kb-project-switcher-trigger:focus-visible .fa-caret-down,
        .kb-project-switcher-trigger.active-dropdown-menu .fa-caret-down {
            color: inherit;
            transform: translateY(1px);
        }

        .kb-project-switcher-trigger:hover *,
        .kb-project-switcher-trigger:focus *,
        .kb-project-switcher-trigger:focus-visible *,
        .kb-project-switcher-trigger.active-dropdown-menu * {
            color: inherit !important;
        }
    </style>
<?php endif; ?>
