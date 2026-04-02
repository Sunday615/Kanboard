<div class="filter-box kb-project-search-modern">
    <form method="get" action="<?= $this->url->dir() ?>" class="search kb-project-search-form">
        <?= $this->form->hidden('controller', $filters) ?>
        <?= $this->form->hidden('action', $filters) ?>
        <?= $this->form->hidden('plugin', $filters) ?>
        <?= $this->form->hidden('project_id', $filters) ?>

        <div class="input-addon kb-project-search-shell">
            <span class="kb-project-search-icon"><i class="fa fa-search"></i></span>
            <?= $this->form->text('search', $filters, array(), array('placeholder="'.t('Filter tasks, people, or categories').'"', 'aria-label="'.t('Filter').'"'), 'input-addon-field kb-project-search-input') ?>
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
            align-items: center;
            gap: 10px;
            min-height: 58px;
            padding: 10px;
            border: 1px solid rgba(15, 23, 42, 0.08);
            border-radius: 18px;
            background: rgba(255, 255, 255, 0.96);
            box-shadow: 0 12px 28px rgba(15, 23, 42, 0.05);
            flex-wrap: wrap;
        }

        .kb-project-search-icon {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 38px;
            height: 38px;
            border-radius: 12px;
            background: rgba(0, 17, 255, 0.08);
            color: #1e40af;
            flex: 0 0 auto;
        }

        .kb-project-search-input {
            border: 0 !important;
            box-shadow: none !important;
            background: transparent !important;
            min-width: 220px;
            flex: 1 1 240px;
            padding-left: 0 !important;
            padding-right: 0 !important;
            font-size: 14px;
            font-weight: 600;
        }

        .kb-project-search-input::placeholder {
            color: #94a3b8;
        }

        .kb-project-search-control,
        .kb-project-search-reset {
            flex: 0 0 auto;
        }

        .kb-project-inline-trigger,
        .kb-project-search-reset a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            min-height: 40px;
            padding: 0 12px;
            border-radius: 12px;
            border: 1px solid rgba(15, 23, 42, 0.06);
            background: #ffffff;
            color: #475569;
            font-size: 13px;
            font-weight: 700;
            box-shadow: 0 6px 16px rgba(15, 23, 42, 0.04);
        }

        .kb-project-inline-trigger:hover,
        .kb-project-search-reset a:hover {
            background: rgba(0, 17, 255, 0.05);
            color: #0f172a;
            border-color: rgba(0, 17, 255, 0.12);
        }

        .kb-project-inline-trigger:hover *,
        .kb-project-search-reset a:hover * {
            color: inherit !important;
        }

        .kb-project-inline-trigger > span {
            color: inherit;
        }

        @media (max-width: 720px) {
            .kb-project-search-shell {
                align-items: stretch;
            }

            .kb-project-search-icon {
                display: none;
            }

            .kb-project-search-input {
                min-width: 100%;
            }
        }
    </style>
<?php endif; ?>
