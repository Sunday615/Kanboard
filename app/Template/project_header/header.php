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
            gap: 18px;
            padding: 24px 26px;
            margin-bottom: 24px;
            border: 1px solid rgba(15, 23, 42, 0.08);
            border-radius: 30px;
            background:
                linear-gradient(180deg, rgba(255, 255, 255, 0.98) 0%, rgba(247, 250, 255, 0.98) 100%);
            box-shadow: 0 22px 54px rgba(15, 23, 42, 0.08);
            position: relative;
            overflow: hidden;
        }

        .kb-project-toolbar-modern::before {
            content: "";
            position: absolute;
            inset: 0 0 auto 0;
            height: 4px;
            background: linear-gradient(135deg, #1d4ed8 0%, #3b82f6 100%);
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
            font-size: 12px;
            font-weight: 700;
            letter-spacing: 0.03em;
            text-transform: uppercase;
            color: #1e40af;
            background: rgba(0, 17, 255, 0.08);
            margin-bottom: 10px;
        }

        .kb-project-toolbar-heading-row {
            display: flex;
            align-items: center;
            gap: 12px;
            flex-wrap: wrap;
        }

        .kb-project-toolbar-heading-row h1 {
            margin: 0;
            color: #0f172a;
            font-size: clamp(1.45rem, 2vw, 1.95rem);
            font-weight: 800;
            line-height: 1.1;
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
            background: linear-gradient(135deg, #1d4ed8 0%, #3b82f6 100%);
            box-shadow: 0 12px 26px rgba(0, 17, 255, 0.16);
        }

        .kb-project-toolbar-actions {
            flex-shrink: 0;
        }

        .kb-project-toolbar-views {
            min-width: 0;
            flex: 0 0 auto;
        }

        .kb-project-toolbar-search {
            min-width: 320px;
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
                padding: 20px 18px;
                border-radius: 22px;
            }
        }
    </style>
<?php endif; ?>
