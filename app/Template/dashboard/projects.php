<style>
.kb-projects-page {
    display: flex;
    flex-direction: column;
    gap: 22px;
}

.kb-projects-page .kb-projects-toolbar {
    border: 1px solid rgba(148, 163, 184, 0.20);
    border-radius: 24px;
    background: linear-gradient(180deg, #ffffff 0%, #f8fbff 100%);
    box-shadow: 0 16px 34px rgba(15, 23, 42, 0.06);
}

.kb-projects-page .kb-projects-toolbar .table-list-header {
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

.kb-projects-page .kb-projects-toolbar .table-list-header-count {
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

.kb-projects-page .kb-projects-toolbar .table-list-header-menu {
    display: inline-flex;
    align-items: center;
    gap: 10px;
}

.kb-projects-page .kb-projects-grid {
    display: grid;
    gap: 16px;
}

.kb-projects-page .kb-project-card {
    position: relative;
    overflow: hidden;
    padding: 20px 22px;
    border: 1px solid rgba(148, 163, 184, 0.20);
    border-left: 6px solid #1d4ed8;
    border-radius: 24px;
    background: linear-gradient(180deg, #ffffff 0%, #fbfdff 100%);
    box-shadow: 0 14px 28px rgba(15, 23, 42, 0.05);
    transition: border-color 180ms ease, box-shadow 180ms ease, transform 180ms ease;
}

.kb-projects-page .kb-project-card::before {
    display: none;
}

.kb-projects-page .kb-project-card:hover {
    border-color: rgba(148, 163, 184, 0.20);
    border-left-color: #1d4ed8;
    background: linear-gradient(180deg, #ffffff 0%, #fbfdff 100%);
    box-shadow: 0 18px 34px rgba(15, 23, 42, 0.08);
    transform: translateY(-2px);
}

.kb-projects-page .kb-project-card.is-closed::before {
    display: none;
}

.kb-projects-page .kb-project-card.is-closed {
    border-left-color: #94a3b8;
}

.kb-projects-page .kb-project-card.is-closed:hover {
    border-left-color: #94a3b8;
}

.kb-projects-page .kb-project-card-layout {
    display: grid;
    grid-template-columns: minmax(0, 1fr) auto;
    gap: 18px;
    align-items: start;
}

.kb-projects-page .kb-project-card-main {
    min-width: 0;
    display: flex;
    flex-direction: column;
    gap: 14px;
}

.kb-projects-page .kb-project-card-title-row {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    gap: 12px;
}

.kb-projects-page .kb-project-id-fallback {
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

.kb-projects-page .kb-project-switcher-dropdown {
    flex-shrink: 0;
}

.kb-projects-page .kb-project-switcher-trigger,
.kb-projects-page .kb-project-switcher-trigger.active-dropdown-menu {
    min-width: 92px;
}

.kb-projects-page .kb-project-switcher-trigger:hover,
.kb-projects-page .kb-project-switcher-trigger:focus,
.kb-projects-page .kb-project-switcher-trigger:focus-visible,
.kb-projects-page .kb-project-switcher-trigger.active-dropdown-menu {
    border-color: rgba(148, 163, 184, 0.28) !important;
    background: linear-gradient(180deg, #ffffff 0%, #f7fbff 100%) !important;
    color: #1e3a8a !important;
    box-shadow: 0 8px 18px rgba(15, 23, 42, 0.04) !important;
    transform: none !important;
}

.kb-projects-page .kb-project-switcher-trigger:hover .fa-caret-down,
.kb-projects-page .kb-project-switcher-trigger:focus .fa-caret-down,
.kb-projects-page .kb-project-switcher-trigger:focus-visible .fa-caret-down,
.kb-projects-page .kb-project-switcher-trigger.active-dropdown-menu .fa-caret-down {
    color: #64748b !important;
    transform: none !important;
}

.kb-projects-page .kb-project-card-title,
.kb-projects-page .kb-project-card-title a {
    min-width: 0;
    color: #0f172a;
    font-size: 1.12rem;
    line-height: 1.35;
    font-weight: 900;
    letter-spacing: -0.02em;
    text-decoration: none;
}

.kb-projects-page .kb-project-card-title a:hover {
    color: #1d4ed8;
}

.kb-projects-page .kb-project-card-title.status-closed,
.kb-projects-page .kb-project-card-title.status-closed a {
    color: #526277;
}

.kb-projects-page .kb-project-card-title.status-closed a {
    text-decoration: line-through;
    text-decoration-thickness: 1.5px;
}

.kb-projects-page .kb-project-card-badge {
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

.kb-projects-page .kb-project-card-badge .fa {
    color: currentColor;
    padding-right: 0;
}

.kb-projects-page .kb-project-card-badge.is-private {
    border-color: rgba(0, 17, 255, 0.14);
    background: linear-gradient(180deg, #f7faff 0%, #edf4ff 100%);
    color: #1d4ed8;
}

.kb-projects-page .kb-project-card-badge.is-public {
    border-color: rgba(14, 116, 144, 0.18);
    background: linear-gradient(180deg, #f0fdfa 0%, #ecfeff 100%);
    color: #0f766e;
}

.kb-projects-page .kb-project-card-badge.is-closed {
    border-color: rgba(148, 163, 184, 0.24);
    background: linear-gradient(180deg, #f8fafc 0%, #f1f5f9 100%);
    color: #475569;
}

.kb-projects-page .kb-project-card-meta {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
}

.kb-projects-page .kb-project-card-meta-item {
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

.kb-projects-page .kb-project-card-meta-item .fa {
    color: #1d4ed8;
    padding-right: 0;
}

.kb-projects-page .kb-project-card-actions {
    display: inline-flex;
    align-items: flex-start;
    justify-content: flex-end;
    flex-wrap: wrap;
    gap: 10px;
}

.kb-projects-page .kb-project-card-actions a,
.kb-projects-page .kb-project-card-actions .tooltip {
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

.kb-projects-page .kb-project-card-actions a:hover,
.kb-projects-page .kb-project-card-actions .tooltip:hover {
    border-color: rgba(148, 163, 184, 0.20);
    background: linear-gradient(180deg, #ffffff 0%, #f8fbff 100%);
    color: #526277;
    box-shadow: 0 8px 18px rgba(15, 23, 42, 0.04);
    transform: none;
}

.kb-projects-page .kb-project-card-actions a .fa,
.kb-projects-page .kb-project-card-actions .tooltip .fa {
    color: currentColor;
    padding-right: 0;
}

.kb-projects-page .kb-pagination {
    margin-top: 2px;
}

@media (max-width: 991.98px) {
    .kb-projects-page .kb-project-card-layout {
        grid-template-columns: 1fr;
    }

    .kb-projects-page .kb-project-card-actions {
        justify-content: flex-start;
    }
}

@media (max-width: 767.98px) {
    .kb-projects-page {
        gap: 18px;
    }

    .kb-projects-page .kb-projects-toolbar .table-list-header,
    .kb-projects-page .kb-project-card {
        padding-left: 16px;
        padding-right: 16px;
    }

    .kb-projects-page .kb-project-card-title-row,
    .kb-projects-page .kb-project-card-meta {
        gap: 8px;
    }

    .kb-projects-page .kb-project-card-title,
    .kb-projects-page .kb-project-card-title a {
        font-size: 1.02rem;
    }
}
</style>

<div class="kb-projects-page kb-page-shell">
    <div class="kb-page-head">
        <div>
            <p class="kb-page-eyebrow"><?= t('Workspace') ?></p>
            <h1 class="kb-page-title">
                <?= $this->url->link(t('My projects'), 'DashboardController', 'projects', array('user_id' => $user['id'])) ?>
            </h1>
            <p class="kb-page-copy"><?= t('Browse the projects you belong to with a cleaner, more structured card layout.') ?></p>
        </div>
        <span class="kb-page-chip"><?= $paginator->getTotal() ?> <?= t('total') ?></span>
    </div>

    <?php if ($paginator->isEmpty()): ?>
        <div class="kb-empty-state">
            <div class="kb-empty-state-icon">
                <i class="fa fa-folder-open" aria-hidden="true"></i>
            </div>
            <h2><?= t('No projects found') ?></h2>
            <p><?= t('You are not a member of any project.') ?></p>
        </div>
    <?php else: ?>
        <div class="kb-projects-toolbar">
            <?= $this->render('project_list/header', array('paginator' => $paginator)) ?>
        </div>

        <div class="kb-projects-grid">
            <?php foreach ($paginator->getCollection() as $project): ?>
                <?php $hasMeta = $project['owner_id'] > 0 || ! empty($project['start_date']) || ! empty($project['end_date']); ?>
                <?php $hasActions = $this->user->hasAccess('ProjectUserOverviewController', 'managers') || ! empty($project['description']); ?>
                <article class="kb-project-card<?= $project['is_active'] == 0 ? ' is-closed' : '' ?>">
                    <div class="kb-project-card-layout">
                        <div class="kb-project-card-main">
                            <div class="kb-project-card-title-row">
                                <?php if ($this->user->hasProjectAccess('ProjectViewController', 'show', $project['id'])): ?>
                                    <?= $this->render('project/dropdown', array('project' => $project)) ?>
                                <?php else: ?>
                                    <span class="kb-project-id-fallback">#<?= $project['id'] ?></span>
                                <?php endif ?>

                                <?= $this->hook->render('template:dashboard:project:before-title', array('project' => $project)) ?>

                                <span class="kb-project-card-title <?= $project['is_active'] == 0 ? 'status-closed' : '' ?>">
                                    <?= $this->url->link($this->text->e($project['name']), 'BoardViewController', 'show', array('project_id' => $project['id'])) ?>
                                </span>

                                <?php if ($project['is_private']): ?>
                                    <span class="kb-project-card-badge is-private" title="<?= t('Personal project') ?>">
                                        <i class="fa fa-lock" aria-hidden="true"></i>
                                        <span><?= t('Private') ?></span>
                                    </span>
                                <?php endif ?>

                                <?php if ($project['is_public']): ?>
                                    <span class="kb-project-card-badge is-public" title="<?= t('Shared project') ?>">
                                        <i class="fa fa-share-alt" aria-hidden="true"></i>
                                        <span><?= t('Shared') ?></span>
                                    </span>
                                <?php endif ?>

                                <?php if ($project['is_active'] == 0): ?>
                                    <span class="kb-project-card-badge is-closed" title="<?= t('Closed') ?>">
                                        <i class="fa fa-ban" aria-hidden="true"></i>
                                        <span><?= t('Closed') ?></span>
                                    </span>
                                <?php endif ?>

                                <?= $this->hook->render('template:dashboard:project:after-title', array('project' => $project)) ?>
                            </div>

                            <?php if ($hasMeta): ?>
                                <div class="kb-project-card-meta">
                                    <?php if ($project['owner_id'] > 0): ?>
                                        <span class="kb-project-card-meta-item">
                                            <i class="fa fa-user" aria-hidden="true"></i>
                                            <span><?= $this->text->e($project['owner_name'] ?: $project['owner_username']) ?></span>
                                        </span>
                                    <?php endif ?>

                                    <?php if ($project['start_date']): ?>
                                        <span class="kb-project-card-meta-item">
                                            <i class="fa fa-calendar-o" aria-hidden="true"></i>
                                            <span><?= t('Start date:').' '.$this->dt->date($project['start_date']) ?></span>
                                        </span>
                                    <?php endif ?>

                                    <?php if ($project['end_date']): ?>
                                        <span class="kb-project-card-meta-item">
                                            <i class="fa fa-flag-o" aria-hidden="true"></i>
                                            <span><?= t('End date:').' '.$this->dt->date($project['end_date']) ?></span>
                                        </span>
                                    <?php endif ?>
                                </div>
                            <?php endif ?>
                        </div>

                        <?php if ($hasActions): ?>
                            <div class="kb-project-card-actions">
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

        <div class="kb-pagination">
            <?= $paginator ?>
        </div>
    <?php endif ?>
</div>
