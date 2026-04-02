<div class="filter-box kb-project-search-modern">
    <form method="get" action="<?= $this->url->dir() ?>" class="search kb-project-search-form">
        <?= $this->form->hidden('controller', $filters) ?>
        <?= $this->form->hidden('action', $filters) ?>
        <?= $this->form->hidden('plugin', $filters) ?>
        <?= $this->form->hidden('project_id', $filters) ?>

        <div class="input-addon kb-project-search-shell">
            <div class="kb-project-search-input-area">
                <span class="kb-project-search-icon"><i class="fa fa-search"></i></span>
                <?= $this->form->text('search', $filters, array(), array('placeholder="'.t('Filter tasks, people, or categories').'"', 'aria-label="'.t('Filter').'"'), 'input-addon-field kb-project-search-input') ?>
            </div>

            <div class="kb-project-search-controls">
                <div class="input-addon-item kb-project-search-reset">
                    <?= $this->render('app/filters_helper', array('reset' => 'status:open', 'project' => $project)) ?>
                </div>

                <?php if (isset($custom_filters_list) && ! empty($custom_filters_list)): ?>
                <div class="input-addon-item kb-project-search-control">
                    <div class="dropdown kb-project-inline-dropdown">
                        <a href="#" class="dropdown-menu dropdown-menu-link-icon kb-project-inline-trigger" title="<?= t('Custom filters') ?>" aria-label="<?= t('Custom filters') ?>">
                            <i class="fa fa-bookmark fa-fw"></i>
                            <span><?= t('Saved') ?></span>
                            <i class="fa fa-caret-down"></i>
                        </a>
                        <ul>
                            <?php foreach ($custom_filters_list as $filter): ?>
                                <li><a href="#" class="filter-helper" data-<?php if ($filter['append']): ?><?= 'append-' ?><?php endif ?>filter='<?= $this->text->e($filter['filter']) ?>'><?= $this->text->e($filter['name']) ?></a></li>
                            <?php endforeach ?>
                        </ul>
                    </div>
                </div>
                <?php endif ?>

                <?php if (isset($users_list)): ?>
                <div class="input-addon-item kb-project-search-control">
                    <div class="dropdown kb-project-inline-dropdown">
                        <a href="#" class="dropdown-menu dropdown-menu-link-icon kb-project-inline-trigger" title="<?= t('User filters') ?>" aria-label="<?= t('User filters') ?>">
                            <i class="fa fa-user fa-fw"></i>
                            <span><?= t('Users') ?></span>
                            <i class="fa fa-caret-down"></i>
                        </a>
                        <ul>
                            <li><a href="#" class="filter-helper" data-unique-filter="assignee:nobody"><?= t('Not assigned') ?></a></li>
                            <li><a href="#" class="filter-helper" data-unique-filter="assignee:anybody"><?= t('Assigned') ?></a></li>
                            <?php foreach ($users_list as $user): ?>
                                <li><a href="#" class="filter-helper" data-unique-filter='assignee:"<?= $this->text->e($user) ?>"'><?= $this->text->e($user) ?></a></li>
                            <?php endforeach ?>
                        </ul>
                    </div>
                </div>
                <?php endif ?>

                <?php if (isset($categories_list) && ! empty($categories_list)): ?>
                <div class="input-addon-item kb-project-search-control">
                    <div class="dropdown kb-project-inline-dropdown">
                        <a href="#" class="dropdown-menu dropdown-menu-link-icon kb-project-inline-trigger" title="<?= t('Category filters') ?>" aria-label="<?= t('Category filters') ?>">
                            <i class="fa fa-folder-open fa-fw"></i>
                            <span><?= t('Categories') ?></span>
                            <i class="fa fa-caret-down"></i>
                        </a>
                        <ul>
                            <li><a href="#" class="filter-helper" data-unique-filter="category:none"><?= t('No category') ?></a></li>
                            <?php foreach ($categories_list as $category): ?>
                                <li><a href="#" class="filter-helper" data-unique-filter='category:"<?= $this->text->e($category) ?>"'><?= $this->text->e($category) ?></a></li>
                            <?php endforeach ?>
                        </ul>
                    </div>
                </div>
                <?php endif ?>
            </div>
        </div>
    </form>
</div>

<?php static $kbProjectSearchModernLoaded = false; ?>
<?php if (! $kbProjectSearchModernLoaded): ?>
    <?php $kbProjectSearchModernLoaded = true; ?>
    <style>
        .kb-project-search-modern {
            width: 100%;
        }

        .kb-project-search-shell {
            display: flex;
            align-items: stretch;
            gap: 14px;
            min-height: 68px;
            padding: 10px;
            border: 1px solid rgba(148, 163, 184, 0.18);
            border-radius: 22px;
            background: linear-gradient(180deg, rgba(255, 255, 255, 0.98) 0%, rgba(249, 251, 255, 0.98) 100%);
            box-shadow: 0 14px 30px rgba(15, 23, 42, 0.05);
            flex-wrap: wrap;
        }

        .kb-project-search-input-area {
            display: flex;
            align-items: center;
            gap: 12px;
            min-width: 0;
            flex: 1 1 360px;
            padding: 0 6px 0 2px;
            border-radius: 18px;
            background: rgba(255, 255, 255, 0.92);
        }

        .kb-project-search-icon {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 36px;
            height: 36px;
            border-radius: 12px;
            background: rgba(76, 111, 255, 0.10);
            color: #4266f5;
            flex: 0 0 auto;
        }

        .kb-project-search-input {
            border: 0 !important;
            box-shadow: none !important;
            background: transparent !important;
            min-width: 180px;
            min-height: 46px;
            flex: 1 1 auto;
            padding-left: 0 !important;
            padding-right: 0 !important;
            font-size: 14px;
            font-weight: 700;
            color: #1f2a44 !important;
        }

        .kb-project-search-input::placeholder {
            color: #94a3b8;
        }

        .kb-project-search-controls {
            display: flex;
            align-items: center;
            gap: 10px;
            flex: 0 0 auto;
            flex-wrap: wrap;
            padding: 8px;
            border-radius: 18px;
            border: 1px solid rgba(148, 163, 184, 0.16);
            background: linear-gradient(180deg, #f7f9fe 0%, #f1f5fd 100%);
            box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.94);
        }

        .kb-project-search-control,
        .kb-project-search-reset {
            flex: 0 0 auto;
        }

        .kb-project-search-reset .dropdown-menu,
        .kb-project-inline-trigger {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            min-height: 40px;
            padding: 0 14px;
            border-radius: 999px;
            border: 1px solid rgba(148, 163, 184, 0.18);
            background: #ffffff;
            color: #4d5c77;
            font-size: 13px;
            font-weight: 700;
            box-shadow: 0 8px 18px rgba(15, 23, 42, 0.04);
        }

        .kb-project-search-reset .dropdown-menu {
            min-width: 54px;
            padding: 0 12px;
        }

        .kb-project-search-reset .dropdown-menu .fa:first-child {
            margin-right: 0;
        }

        .kb-project-search-reset .dropdown-menu .fa-caret-down {
            margin-left: 2px;
        }

        .kb-project-inline-trigger:hover,
        .kb-project-search-reset .dropdown-menu:hover {
            background: #f6f8ff;
            color: #1f2a44;
            border-color: rgba(76, 111, 255, 0.18);
        }

        .kb-project-inline-trigger:hover *,
        .kb-project-search-reset .dropdown-menu:hover * {
            color: inherit !important;
        }

        .kb-project-inline-trigger > span {
            color: inherit;
        }

        @media (max-width: 980px) {
            .kb-project-search-shell {
                gap: 10px;
            }

            .kb-project-search-controls {
                width: 100%;
                justify-content: flex-start;
            }
        }

        @media (max-width: 720px) {
            .kb-project-search-shell {
                align-items: stretch;
            }

            .kb-project-search-input-area,
            .kb-project-search-controls {
                width: 100%;
            }

            .kb-project-search-input {
                min-width: 100%;
            }
        }
    </style>
<?php endif; ?>
