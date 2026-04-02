<style>
.kb-project-admin-page {
    display: flex;
    flex-direction: column;
    gap: 22px;
}

.kb-project-admin-actions,
.kb-project-admin-search,
.kb-project-admin-toolbar {
    border: 1px solid rgba(148, 163, 184, 0.20);
    border-radius: 24px;
    background: linear-gradient(180deg, #ffffff 0%, #f8fbff 100%);
    box-shadow: 0 16px 34px rgba(15, 23, 42, 0.06);
}

.kb-project-admin-actions {
    padding: 16px 18px;
}

.kb-project-admin-actions ul {
    display: flex;
    align-items: center;
    flex-wrap: wrap;
    gap: 12px;
    margin: 0;
    padding: 0;
    list-style: none;
}

.kb-project-admin-actions li {
    margin: 0;
}

.kb-project-admin-actions a,
.kb-project-admin-actions button {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    min-height: 42px;
    padding: 0 14px;
    border: 1px solid rgba(148, 163, 184, 0.18);
    border-radius: 14px;
    background: linear-gradient(180deg, #ffffff 0%, #f8fbff 100%);
    color: #1d4ed8;
    font-size: 0.9rem;
    font-weight: 800;
    text-decoration: none;
    box-shadow: 0 8px 18px rgba(15, 23, 42, 0.04);
    transition: border-color 180ms ease, box-shadow 180ms ease, background-color 180ms ease, color 180ms ease, transform 180ms ease;
}

.kb-project-admin-actions a:hover,
.kb-project-admin-actions button:hover {
    border-color: rgba(59, 130, 246, 0.24);
    background: linear-gradient(180deg, #fbfdff 0%, #eef5ff 100%);
    color: #1d4ed8;
    box-shadow: 0 14px 28px rgba(0, 17, 255, 0.08);
    transform: translateY(-1px);
}

.kb-project-admin-actions a .fa,
.kb-project-admin-actions button .fa {
    color: currentColor;
    padding-right: 0;
}

.kb-project-admin-search {
    padding: 14px 18px;
}

.kb-project-admin-search form {
    margin: 0;
}

.kb-project-admin-search-field {
    display: flex;
    align-items: center;
    gap: 12px;
    min-height: 52px;
    padding: 0 16px;
    border: 1px solid rgba(148, 163, 184, 0.20);
    border-radius: 16px;
    background: linear-gradient(180deg, #ffffff 0%, #fbfdff 100%);
    box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.94);
    transition: border-color 180ms ease, box-shadow 180ms ease;
}

.kb-project-admin-search-icon {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 20px;
    height: 20px;
    color: #64748b;
    flex: 0 0 auto;
    pointer-events: none;
}

.kb-project-admin-search input[type="text"],
.kb-project-admin-search input[type="search"] {
    flex: 1 1 auto;
    width: 1% !important;
    max-width: none !important;
    min-height: 50px;
    margin: 0;
    padding: 0 !important;
    border: 0;
    border-radius: 0;
    background: transparent;
    color: #0f172a;
    font-size: 0.96rem;
    font-weight: 600;
    box-shadow: none;
}

.kb-project-admin-search input[type="text"]::placeholder,
.kb-project-admin-search input[type="search"]::placeholder {
    color: #8a98ac;
}

.kb-project-admin-search input[type="text"]:hover,
.kb-project-admin-search input[type="search"]:hover {
    border: 0;
    box-shadow: none;
}

.kb-project-admin-search input[type="text"]:focus,
.kb-project-admin-search input[type="search"]:focus {
    border: 0;
    box-shadow: none;
    outline: none;
}

.kb-project-admin-search-field:hover {
    border-color: rgba(59, 130, 246, 0.32);
    box-shadow: 0 10px 24px rgba(37, 99, 235, 0.06), inset 0 1px 0 rgba(255, 255, 255, 0.94);
}

.kb-project-admin-search-field:focus-within {
    border-color: rgba(59, 130, 246, 0.48);
    box-shadow: 0 0 0 4px rgba(59, 130, 246, 0.12);
}

.kb-project-admin-toolbar .table-list-header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 14px 16px;
    flex-wrap: wrap;
    padding: 18px 20px;
    border: 0;
    border-radius: 0;
    background: transparent;
}

.kb-project-admin-toolbar .table-list-header-count {
    display: inline-flex;
    align-items: center;
    min-height: 42px;
    padding: 0 14px;
    border: 1px solid rgba(148, 163, 184, 0.20);
    border-radius: 14px;
    background: linear-gradient(180deg, #ffffff 0%, #f8fbff 100%);
    color: #526277;
    font-size: 0.88rem;
    font-weight: 800;
    box-shadow: 0 8px 18px rgba(15, 23, 42, 0.04);
}

.kb-project-admin-toolbar .table-list-header-menu {
    display: inline-flex;
    align-items: center;
    gap: 10px;
}

.kb-project-admin-grid {
    display: grid;
    gap: 16px;
}

.kb-project-admin-card {
    position: relative;
    overflow: visible;
    padding: 20px 22px;
    border: 1px solid rgba(148, 163, 184, 0.20);
    border-radius: 24px;
    background: linear-gradient(180deg, #ffffff 0%, #fbfdff 100%);
    box-shadow: inset 4px 0 0 #1d4ed8, 0 14px 28px rgba(15, 23, 42, 0.05);
    transition: border-color 180ms ease, box-shadow 180ms ease, transform 180ms ease;
}

.kb-project-admin-card:hover {
    border-color: rgba(59, 130, 246, 0.26);
    box-shadow: inset 4px 0 0 #1d4ed8, 0 20px 38px rgba(0, 17, 255, 0.08);
    transform: translateY(-2px);
}

.kb-project-admin-card.is-closed {
    box-shadow: inset 4px 0 0 #94a3b8, 0 14px 28px rgba(100, 116, 139, 0.06);
}

.kb-project-admin-card.is-closed:hover {
    box-shadow: inset 4px 0 0 #94a3b8, 0 20px 38px rgba(100, 116, 139, 0.08);
}

.kb-project-admin-card-layout {
    display: grid;
    grid-template-columns: minmax(0, 1fr) auto;
    gap: 18px;
    align-items: start;
}

.kb-project-admin-card-main {
    min-width: 0;
    display: flex;
    flex-direction: column;
    gap: 14px;
}

.kb-project-admin-card-title-row {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    gap: 12px;
}

.kb-project-admin-card .dropdown {
    position: relative;
    z-index: 4;
    display: inline-flex;
    flex: 0 0 auto;
}

.kb-project-admin-card .dropdown > a,
.kb-project-admin-card .dropdown > .dropdown-menu-link-icon,
.kb-project-admin-card .dropdown > .active-dropdown-menu,
.kb-project-admin-toolbar .dropdown > a,
.kb-project-admin-toolbar .dropdown > .dropdown-menu-link-icon,
.kb-project-admin-toolbar .dropdown > .active-dropdown-menu {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    min-height: 40px;
    min-width: 92px;
    padding: 0 14px;
    border: 1px solid rgba(148, 163, 184, 0.22);
    border-radius: 999px;
    background: linear-gradient(180deg, rgba(255, 255, 255, 0.98) 0%, rgba(248, 251, 255, 0.95) 100%);
    color: #1d4ed8;
    font-size: 0.84rem;
    font-weight: 900;
    text-decoration: none;
    white-space: nowrap;
    box-shadow: 0 8px 18px rgba(15, 23, 42, 0.05);
    transition: border-color 180ms ease, box-shadow 180ms ease, transform 180ms ease, background-color 180ms ease;
}

.kb-project-admin-card .dropdown > a:hover,
.kb-project-admin-card .dropdown > .dropdown-menu-link-icon:hover,
.kb-project-admin-card .dropdown > .active-dropdown-menu,
.kb-project-admin-toolbar .dropdown > a:hover,
.kb-project-admin-toolbar .dropdown > .dropdown-menu-link-icon:hover,
.kb-project-admin-toolbar .dropdown > .active-dropdown-menu {
    border-color: rgba(59, 130, 246, 0.28);
    background: linear-gradient(180deg, #fbfdff 0%, #eef5ff 100%);
    color: #1d4ed8;
    box-shadow: 0 14px 28px rgba(0, 17, 255, 0.08);
    transform: translateY(-1px);
}

.kb-project-admin-card .dropdown > a strong,
.kb-project-admin-card .dropdown > .dropdown-menu-link-icon strong,
.kb-project-admin-card .dropdown > .active-dropdown-menu strong,
.kb-project-admin-toolbar .dropdown > a strong,
.kb-project-admin-toolbar .dropdown > .dropdown-menu-link-icon strong,
.kb-project-admin-toolbar .dropdown > .active-dropdown-menu strong {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    width: 100%;
    color: inherit;
    font-weight: inherit;
}

.kb-project-admin-card .dropdown > a .fa,
.kb-project-admin-card .dropdown > .dropdown-menu-link-icon .fa,
.kb-project-admin-card .dropdown > .active-dropdown-menu .fa,
.kb-project-admin-toolbar .dropdown > a .fa,
.kb-project-admin-toolbar .dropdown > .dropdown-menu-link-icon .fa,
.kb-project-admin-toolbar .dropdown > .active-dropdown-menu .fa {
    color: currentColor;
    padding-right: 0;
}

.kb-project-admin-card .dropdown > ul,
.kb-project-admin-toolbar .dropdown > ul {
    min-width: 240px;
    margin-top: 10px;
    padding: 8px;
    border: 1px solid rgba(148, 163, 184, 0.20);
    border-radius: 16px;
    background: #ffffff;
    box-shadow: 0 24px 44px rgba(15, 23, 42, 0.16);
    max-height: min(360px, calc(100vh - 72px));
    overflow-y: auto;
    overscroll-behavior: contain;
}

.kb-project-admin-card .dropdown > ul li,
.kb-project-admin-toolbar .dropdown > ul li {
    margin: 0;
    list-style: none;
}

.kb-project-admin-card .dropdown > ul li + li,
.kb-project-admin-toolbar .dropdown > ul li + li {
    margin-top: 4px;
}

.kb-project-admin-card .dropdown > ul a,
.kb-project-admin-card .dropdown > ul .dropdown-menu-link-icon,
.kb-project-admin-toolbar .dropdown > ul a,
.kb-project-admin-toolbar .dropdown > ul .dropdown-menu-link-icon {
    display: flex;
    align-items: center;
    gap: 10px;
    min-height: 42px;
    padding: 10px 12px;
    border-radius: 12px;
    color: #334155;
    text-decoration: none;
    font-size: 0.9rem;
    font-weight: 700;
}

.kb-project-admin-card .dropdown > ul a:hover,
.kb-project-admin-card .dropdown > ul .dropdown-menu-link-icon:hover,
.kb-project-admin-toolbar .dropdown > ul a:hover,
.kb-project-admin-toolbar .dropdown > ul .dropdown-menu-link-icon:hover {
    background: linear-gradient(90deg, rgba(0, 11, 166, 1) 0%, rgba(0, 17, 255, 1) 100%);
    color: #ffffff;
    box-shadow: 0 14px 28px rgba(0, 17, 255, 0.18);
}

.kb-project-admin-card .dropdown > ul a:hover .fa,
.kb-project-admin-card .dropdown > ul .dropdown-menu-link-icon:hover .fa,
.kb-project-admin-toolbar .dropdown > ul a:hover .fa,
.kb-project-admin-toolbar .dropdown > ul .dropdown-menu-link-icon:hover .fa {
    color: #ffffff;
}

.kb-project-admin-id-fallback {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    min-height: 40px;
    min-width: 92px;
    padding: 0 14px;
    border: 1px solid rgba(148, 163, 184, 0.20);
    border-radius: 999px;
    background: linear-gradient(180deg, #ffffff 0%, #f7fbff 100%);
    color: #1d4ed8;
    font-size: 0.84rem;
    font-weight: 900;
    box-shadow: 0 8px 18px rgba(15, 23, 42, 0.04);
    white-space: nowrap;
}

.kb-project-admin-card-title,
.kb-project-admin-card-title a {
    min-width: 0;
    color: #0f172a;
    font-size: 1.12rem;
    line-height: 1.35;
    font-weight: 900;
    letter-spacing: -0.02em;
    text-decoration: none;
}

.kb-project-admin-card-title a:hover {
    color: #1d4ed8;
}

.kb-project-admin-card-title.status-closed,
.kb-project-admin-card-title.status-closed a {
    color: #526277;
}

.kb-project-admin-card-title.status-closed a {
    text-decoration: line-through;
    text-decoration-thickness: 1.5px;
}

.kb-project-admin-card-badge {
    display: inline-flex;
    align-items: center;
    gap: 7px;
    min-height: 34px;
    padding: 0 12px;
    border: 1px solid rgba(148, 163, 184, 0.18);
    border-radius: 999px;
    background: linear-gradient(180deg, #ffffff 0%, #f8fbff 100%);
    color: #526277;
    font-size: 0.8rem;
    font-weight: 800;
    white-space: nowrap;
}

.kb-project-admin-card-badge .fa {
    color: currentColor;
    padding-right: 0;
}

.kb-project-admin-card-badge.is-private {
    border-color: rgba(0, 17, 255, 0.14);
    background: linear-gradient(180deg, #f7faff 0%, #edf4ff 100%);
    color: #1d4ed8;
}

.kb-project-admin-card-badge.is-public {
    border-color: rgba(14, 116, 144, 0.18);
    background: linear-gradient(180deg, #f0fdfa 0%, #ecfeff 100%);
    color: #0f766e;
}

.kb-project-admin-card-badge.is-closed {
    border-color: rgba(148, 163, 184, 0.24);
    background: linear-gradient(180deg, #f8fafc 0%, #f1f5f9 100%);
    color: #475569;
}

.kb-project-admin-card-meta {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
}

.kb-project-admin-card-meta-item {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    min-height: 38px;
    padding: 0 12px;
    border: 1px solid rgba(148, 163, 184, 0.18);
    border-radius: 14px;
    background: linear-gradient(180deg, #ffffff 0%, #f8fbff 100%);
    color: #526277;
    font-size: 0.84rem;
    font-weight: 700;
    line-height: 1.3;
}

.kb-project-admin-card-meta-item .fa {
    color: #1d4ed8;
    padding-right: 0;
}

.kb-project-admin-card-actions {
    display: inline-flex;
    align-items: flex-start;
    justify-content: flex-end;
    flex-wrap: wrap;
    gap: 10px;
}

.kb-project-admin-card-actions a,
.kb-project-admin-card-actions .tooltip {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    min-width: 42px;
    width: 42px;
    height: 42px;
    border: 1px solid rgba(148, 163, 184, 0.20);
    border-radius: 14px;
    background: linear-gradient(180deg, #ffffff 0%, #f8fbff 100%);
    color: #526277;
    text-decoration: none;
    box-shadow: 0 8px 18px rgba(15, 23, 42, 0.04);
    transition: border-color 180ms ease, box-shadow 180ms ease, background-color 180ms ease, color 180ms ease, transform 180ms ease;
}

.kb-project-admin-card-actions a:hover,
.kb-project-admin-card-actions .tooltip:hover {
    border-color: rgba(59, 130, 246, 0.24);
    background: linear-gradient(180deg, #fbfdff 0%, #eef5ff 100%);
    color: #1d4ed8;
    box-shadow: 0 14px 28px rgba(0, 17, 255, 0.08);
    transform: translateY(-1px);
}

.kb-project-admin-card-actions a .fa,
.kb-project-admin-card-actions .tooltip .fa {
    color: currentColor;
    padding-right: 0;
}

.kb-project-admin-empty {
    padding: 42px 32px;
    border: 1px solid rgba(148, 163, 184, 0.20);
    border-radius: 28px;
    background: linear-gradient(180deg, #ffffff 0%, #f8fbff 100%);
    text-align: center;
    box-shadow: 0 18px 36px rgba(15, 23, 42, 0.06);
}

.kb-project-admin-empty .fa {
    color: #1d4ed8;
    font-size: 1.6rem;
}

.kb-project-admin-empty h2 {
    margin: 14px 0 8px;
    color: #0f172a;
    font-size: 1.16rem;
    font-weight: 900;
}

.kb-project-admin-empty p {
    margin: 0;
    color: #64748b;
    font-size: 0.95rem;
    line-height: 1.7;
}

.kb-project-admin-pagination {
    margin-top: 2px;
}

@media (max-width: 991.98px) {
    .kb-project-admin-card-layout {
        grid-template-columns: 1fr;
    }

    .kb-project-admin-card-actions {
        justify-content: flex-start;
    }
}

@media (max-width: 767.98px) {
    .kb-project-admin-page {
        gap: 18px;
    }

    .kb-project-admin-actions,
    .kb-project-admin-search,
    .kb-project-admin-toolbar,
    .kb-project-admin-card {
        border-radius: 20px;
    }

    .kb-project-admin-actions,
    .kb-project-admin-search,
    .kb-project-admin-toolbar .table-list-header,
    .kb-project-admin-card {
        padding-left: 16px;
        padding-right: 16px;
    }

    .kb-project-admin-card-title-row,
    .kb-project-admin-card-meta,
    .kb-project-admin-actions ul {
        gap: 8px;
    }

    .kb-project-admin-card-title,
    .kb-project-admin-card-title a {
        font-size: 1.02rem;
    }
}
</style>

<div class="kb-project-admin-page">
    <div class="kb-project-admin-actions">
        <ul>
            <?= $this->hook->render('template:project-list:menu:before') ?>

            <?php if ($this->user->hasAccess('ProjectCreationController', 'create')): ?>
                <li>
                    <?= $this->modal->medium('plus', t('New project'), 'ProjectCreationController', 'create') ?>
                </li>
            <?php endif ?>

            <?php if ($this->app->config('disable_private_project', 0) == 0): ?>
                <li>
                    <?= $this->modal->medium('lock', t('New personal project'), 'ProjectCreationController', 'createPrivate') ?>
                </li>
            <?php endif ?>

            <?php if ($this->user->hasAccess('ProjectUserOverviewController', 'managers')): ?>
                <li><?= $this->url->icon('user', t('Users overview'), 'ProjectUserOverviewController', 'managers') ?></li>
            <?php endif ?>

            <?= $this->hook->render('template:project-list:menu:after') ?>
        </ul>
    </div>

    <div class="kb-project-admin-search">
        <form method="get" action="<?= $this->url->dir() ?>" class="search">
            <?= $this->form->hidden('controller', array('controller' => 'ProjectListController')) ?>
            <?= $this->form->hidden('action', array('action' => 'show')) ?>
            <div class="kb-project-admin-search-field">
                <span class="kb-project-admin-search-icon">
                    <i class="fa fa-search" aria-hidden="true"></i>
                </span>
                <?= $this->form->text('search', $values, array(), array('placeholder="'.t('Search').'"', 'aria-label="'.t('Search').'"')) ?>
            </div>
        </form>
    </div>

    <?php if ($paginator->isEmpty()): ?>
        <div class="kb-project-admin-empty">
            <i class="fa fa-folder-open" aria-hidden="true"></i>
            <h2><?= t('No projects found') ?></h2>
            <p><?= t('There is no project.') ?></p>
        </div>
    <?php else: ?>
        <div class="kb-project-admin-toolbar">
            <?= $this->render('project_list/header', array('paginator' => $paginator)) ?>
        </div>

        <div class="kb-project-admin-grid">
            <?php foreach ($paginator->getCollection() as $project): ?>
                <?php $hasMeta = $project['owner_id'] > 0 || ! empty($project['start_date']) || ! empty($project['end_date']); ?>
                <?php $hasActions = $this->user->hasAccess('ProjectUserOverviewController', 'managers') || ! empty($project['description']); ?>
                <article class="kb-project-admin-card<?= $project['is_active'] == 0 ? ' is-closed' : '' ?>">
                    <div class="kb-project-admin-card-layout">
                        <div class="kb-project-admin-card-main">
                            <div class="kb-project-admin-card-title-row">
                                <?php if ($this->user->hasProjectAccess('ProjectViewController', 'show', $project['id'])): ?>
                                    <?= $this->render('project/dropdown', array('project' => $project)) ?>
                                <?php else: ?>
                                    <span class="kb-project-admin-id-fallback">#<?= $project['id'] ?></span>
                                <?php endif ?>

                                <?= $this->hook->render('template:dashboard:project:before-title', array('project' => $project)) ?>

                                <span class="kb-project-admin-card-title <?= $project['is_active'] == 0 ? 'status-closed' : '' ?>">
                                    <?= $this->url->link($this->text->e($project['name']), 'BoardViewController', 'show', array('project_id' => $project['id'])) ?>
                                </span>

                                <?php if ($project['is_private']): ?>
                                    <span class="kb-project-admin-card-badge is-private" title="<?= t('Personal project') ?>">
                                        <i class="fa fa-lock" aria-hidden="true"></i>
                                        <span><?= t('Private') ?></span>
                                    </span>
                                <?php endif ?>

                                <?php if ($project['is_public']): ?>
                                    <span class="kb-project-admin-card-badge is-public" title="<?= t('Shared project') ?>">
                                        <i class="fa fa-share-alt" aria-hidden="true"></i>
                                        <span><?= t('Shared') ?></span>
                                    </span>
                                <?php endif ?>

                                <?php if ($project['is_active'] == 0): ?>
                                    <span class="kb-project-admin-card-badge is-closed" title="<?= t('Closed') ?>">
                                        <i class="fa fa-ban" aria-hidden="true"></i>
                                        <span><?= t('Closed') ?></span>
                                    </span>
                                <?php endif ?>

                                <?= $this->hook->render('template:dashboard:project:after-title', array('project' => $project)) ?>
                            </div>

                            <?php if ($hasMeta): ?>
                                <div class="kb-project-admin-card-meta">
                                    <?php if ($project['owner_id'] > 0): ?>
                                        <span class="kb-project-admin-card-meta-item">
                                            <i class="fa fa-user" aria-hidden="true"></i>
                                            <span><?= $this->text->e($project['owner_name'] ?: $project['owner_username']) ?></span>
                                        </span>
                                    <?php endif ?>

                                    <?php if ($project['start_date']): ?>
                                        <span class="kb-project-admin-card-meta-item">
                                            <i class="fa fa-calendar-o" aria-hidden="true"></i>
                                            <span><?= t('Start date:').' '.$this->dt->date($project['start_date']) ?></span>
                                        </span>
                                    <?php endif ?>

                                    <?php if ($project['end_date']): ?>
                                        <span class="kb-project-admin-card-meta-item">
                                            <i class="fa fa-flag-o" aria-hidden="true"></i>
                                            <span><?= t('End date:').' '.$this->dt->date($project['end_date']) ?></span>
                                        </span>
                                    <?php endif ?>
                                </div>
                            <?php endif ?>
                        </div>

                        <?php if ($hasActions): ?>
                            <div class="kb-project-admin-card-actions">
                                <?php if ($this->user->hasAccess('ProjectUserOverviewController', 'managers')): ?>
                                    <?= $this->app->tooltipLink('<i class="fa fa-users"></i>', $this->url->href('ProjectUserOverviewController', 'users', array('project_id' => $project['id']))) ?>
                                <?php endif ?>

                                <?php if (! empty($project['description'])): ?>
                                    <?= $this->app->tooltipMarkdown($project['description']) ?>
                                <?php endif ?>
                            </div>
                        <?php endif ?>
                    </div>
                </article>
            <?php endforeach ?>
        </div>

        <div class="kb-project-admin-pagination">
            <?= $paginator ?>
        </div>
    <?php endif ?>
</div>
