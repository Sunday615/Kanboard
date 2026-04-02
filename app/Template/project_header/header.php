<div class="project-header kb-project-toolbar-modern">
    <?= $this->hook->render('template:project:header:before', array('project' => $project)) ?>

    <div class="kb-project-toolbar-top">
        <div class="kb-project-toolbar-title">
            <span class="kb-project-toolbar-label"><?= t('Project workspace') ?></span>
            <div class="kb-project-toolbar-heading-row">
                <h1><?= $this->text->e($project['name']) ?></h1>
                <span class="kb-project-toolbar-id">#<?= $project['id'] ?></span>
            </div>
        </div>

        <div class="dropdown-component kb-project-toolbar-actions">
            <?= $this->render('project_header/dropdown', array('project' => $project, 'board_view' => $board_view)) ?>
        </div>
    </div>

    <div class="kb-project-toolbar-bottom">
        <div class="views-switcher-component kb-project-toolbar-views">
            <?= $this->render('project_header/views', array('project' => $project, 'filters' => $filters)) ?>
        </div>
        <div class="filter-box-component kb-project-toolbar-search">
            <?= $this->render('project_header/search', array(
                'project' => $project,
                'filters' => $filters,
                'custom_filters_list' => isset($custom_filters_list) ? $custom_filters_list : array(),
                'users_list' => isset($users_list) ? $users_list : array(),
                'categories_list' => isset($categories_list) ? $categories_list : array(),
            )) ?>
        </div>
    </div>

    <?= $this->hook->render('template:project:header:after', array('project' => $project)) ?>
</div>

<?php static $kbProjectHeaderModernLoaded = false; ?>
<?php if (! $kbProjectHeaderModernLoaded): ?>
    <?php $kbProjectHeaderModernLoaded = true; ?>
    <style>
        .kb-project-toolbar-modern {
            display: flex;
            flex-direction: column;
            gap: 22px;
            padding: 22px 24px 26px;
            margin-bottom: 22px;
            border: 1px solid rgba(148, 163, 184, 0.18);
            border-radius: 32px;
            background:
                linear-gradient(180deg, rgba(255, 255, 255, 0.98) 0%, rgba(248, 251, 255, 0.98) 100%);
            box-shadow: 0 18px 40px rgba(15, 23, 42, 0.06);
            position: relative;
            overflow: hidden;
        }

        .kb-project-toolbar-modern::before {
            content: "";
            position: absolute;
            inset: 0 0 auto 0;
            height: 3px;
            background: linear-gradient(135deg, #4c6fff 0%, #597bf8 100%);
        }

        .kb-project-toolbar-top,
        .kb-project-toolbar-bottom {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 18px;
        }

        .kb-project-toolbar-title {
            min-width: 0;
        }

        .kb-project-toolbar-label {
            display: inline-flex;
            align-items: center;
            min-height: 30px;
            padding: 0 12px;
            border-radius: 999px;
            font-size: 11px;
            font-weight: 800;
            letter-spacing: 0.03em;
            text-transform: uppercase;
            color: #4c6fff;
            background: rgba(76, 111, 255, 0.10);
            margin-bottom: 12px;
        }

        .kb-project-toolbar-heading-row {
            display: flex;
            align-items: center;
            gap: 12px;
            flex-wrap: wrap;
        }

        .kb-project-toolbar-heading-row h1 {
            margin: 0;
            color: #162033;
            font-size: clamp(1.75rem, 2.4vw, 2.35rem);
            font-weight: 800;
            letter-spacing: -0.03em;
            line-height: 1.08;
        }

        .kb-project-toolbar-id {
            display: inline-flex;
            align-items: center;
            min-height: 34px;
            padding: 0 12px;
            border-radius: 999px;
            font-size: 13px;
            font-weight: 700;
            color: #ffffff;
            background: linear-gradient(135deg, #4c6fff 0%, #597bf8 100%);
            box-shadow: 0 10px 24px rgba(76, 111, 255, 0.18);
        }

        .kb-project-toolbar-actions {
            flex-shrink: 0;
        }

        .kb-project-toolbar-views {
            min-width: 0;
            flex: 0 0 auto;
        }

        .kb-project-toolbar-search {
            min-width: 360px;
            flex: 1 1 auto;
        }

        @media (max-width: 1100px) {
            .kb-project-toolbar-top,
            .kb-project-toolbar-bottom {
                flex-direction: column;
                align-items: stretch;
            }

            .kb-project-toolbar-search {
                min-width: 0;
            }
        }

        @media (max-width: 640px) {
            .kb-project-toolbar-modern {
                padding: 18px 18px 20px;
                border-radius: 24px;
            }
        }
    </style>
<?php endif; ?>
