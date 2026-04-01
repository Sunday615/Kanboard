<?php
$visibleProjects = 0;
$activeTaskGroups = 0;

if (method_exists($project_paginator, 'getCollection')) {
    $visibleProjects = count($project_paginator->getCollection());
}

if (! empty($overview_paginator)) {
    foreach ($overview_paginator as $overviewGroup) {
        if (! $overviewGroup['paginator']->isEmpty()) {
            $activeTaskGroups++;
        }
    }
}
?>

<style>
.kb-dashboard-page {
    --kb-primary: #2563eb;
    --kb-primary-dark: #1d4ed8;
    --kb-primary-soft: #eff6ff;
    --kb-primary-soft-2: #dbeafe;
    --kb-bg: #f4f8fc;
    --kb-surface: #ffffff;
    --kb-surface-muted: #f8fbff;
    --kb-border: #dbe5f1;
    --kb-border-strong: #c9d8ea;
    --kb-text: #0f172a;
    --kb-text-soft: #475569;
    --kb-text-muted: #64748b;
    --kb-success-soft: #ecfeff;
    --kb-radius-xl: 24px;
    --kb-radius-lg: 18px;
    --kb-radius-md: 14px;
    --kb-radius-sm: 12px;
    --kb-shadow-lg: 0 24px 60px rgba(15, 23, 42, 0.10);
    --kb-shadow-md: 0 14px 34px rgba(15, 23, 42, 0.07);
    --kb-shadow-sm: 0 8px 20px rgba(15, 23, 42, 0.05);
    --kb-transition: 180ms ease;

    padding: 1.5rem 0 2.75rem;
    background:
        radial-gradient(circle at top left, rgba(37, 99, 235, 0.05), transparent 22%),
        linear-gradient(180deg, #f8fbff 0%, #f4f8fc 100%);
}

.kb-dashboard-page,
.kb-dashboard-page * {
    box-sizing: border-box;
}

.kb-dashboard-page .card,
.kb-dashboard-page .table-list-row,
.kb-dashboard-page .alert,
.kb-dashboard-page .btn,
.kb-dashboard-page .form-control,
.kb-dashboard-page .input-group-text,
.kb-dashboard-page .pagination a,
.kb-dashboard-page .pagination span {
    transition:
        background-color var(--kb-transition),
        border-color var(--kb-transition),
        color var(--kb-transition),
        box-shadow var(--kb-transition),
        transform var(--kb-transition);
}

.kb-dashboard-page .kb-hero-card {
    position: relative;
    overflow: hidden;
    border: 1px solid rgba(201, 216, 234, 0.9);
    border-radius: 28px;
    background:
        radial-gradient(circle at top right, rgba(37, 99, 235, 0.12), transparent 26%),
        radial-gradient(circle at left bottom, rgba(96, 165, 250, 0.12), transparent 30%),
        linear-gradient(135deg, #ffffff 0%, #f8fbff 48%, #eef5ff 100%);
    box-shadow: var(--kb-shadow-lg);
}

.kb-dashboard-page .kb-hero-card::before {
    content: "";
    position: absolute;
    inset: 0;
    background:
        linear-gradient(135deg, rgba(255,255,255,0.42) 0%, rgba(255,255,255,0) 42%);
    pointer-events: none;
}

.kb-dashboard-page .kb-hero-card::after {
    content: "";
    position: absolute;
    right: -56px;
    bottom: -68px;
    width: 220px;
    height: 220px;
    border-radius: 999px;
    background: rgba(37, 99, 235, 0.10);
    filter: blur(10px);
    pointer-events: none;
}

.kb-dashboard-page .kb-hero-badge {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    min-height: 2.25rem;
    padding: 0.5rem 0.95rem;
    border: 1px solid rgba(37, 99, 235, 0.10);
    border-radius: 999px;
    background: rgba(255, 255, 255, 0.72);
    color: var(--kb-primary-dark);
    font-size: 0.76rem;
    font-weight: 800;
    letter-spacing: 0.10em;
    text-transform: uppercase;
    box-shadow: 0 8px 18px rgba(37, 99, 235, 0.08);
}

.kb-dashboard-page .kb-hero-title {
    margin: 0.9rem 0 0.55rem;
    color: var(--kb-text);
    font-size: clamp(2rem, 3vw, 3.2rem);
    line-height: 1.02;
    font-weight: 800;
    letter-spacing: -0.04em;
}

.kb-dashboard-page .kb-hero-subtitle {
    margin: 0;
    max-width: 700px;
    color: var(--kb-text-muted);
    font-size: 1rem;
    line-height: 1.82;
}

.kb-dashboard-page .kb-stat-card {
    position: relative;
    min-width: 150px;
    height: 100%;
    padding: 1.15rem 1.15rem 1.1rem;
    border: 1px solid rgba(201, 216, 234, 0.85);
    border-radius: 20px;
    background: rgba(255, 255, 255, 0.84);
    backdrop-filter: blur(10px);
    box-shadow: 0 12px 28px rgba(37, 99, 235, 0.08);
}

.kb-dashboard-page .kb-stat-card::before {
    content: "";
    position: absolute;
    inset: 0 0 auto 0;
    height: 4px;
    border-radius: 20px 20px 0 0;
    background: linear-gradient(90deg, #60a5fa 0%, #2563eb 100%);
    opacity: 0.9;
}

.kb-dashboard-page .kb-stat-label {
    margin-bottom: 0.45rem;
    color: var(--kb-text-muted);
    font-size: 0.75rem;
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: 0.10em;
}

.kb-dashboard-page .kb-stat-value {
    color: var(--kb-text);
    font-size: 1.85rem;
    line-height: 1;
    font-weight: 800;
    letter-spacing: -0.04em;
}

.kb-dashboard-page .kb-surface-card {
    border: 1px solid var(--kb-border);
    border-radius: var(--kb-radius-xl);
    background: var(--kb-surface);
    box-shadow: var(--kb-shadow-md);
}

.kb-dashboard-page .kb-search-group {
    overflow: hidden;
    border: 1px solid var(--kb-border);
    border-radius: 18px;
    background: linear-gradient(180deg, #ffffff 0%, #fbfdff 100%);
    box-shadow: inset 0 1px 0 rgba(255,255,255,0.95);
}

.kb-dashboard-page .kb-search-group:hover {
    border-color: var(--kb-border-strong);
}

.kb-dashboard-page .kb-search-group:focus-within {
    border-color: rgba(37, 99, 235, 0.55);
    box-shadow:
        0 0 0 4px rgba(37, 99, 235, 0.10),
        0 10px 25px rgba(37, 99, 235, 0.08);
}

.kb-dashboard-page .kb-search-group .input-group-text {
    border: 0;
    background: transparent;
    color: var(--kb-text-muted);
    padding-left: 1.15rem;
    padding-right: 0.85rem;
    font-size: 1rem;
}

.kb-dashboard-page .kb-search-input.form-control {
    min-height: 3.8rem;
    border: 0;
    background: transparent;
    box-shadow: none;
    color: var(--kb-text);
    font-size: 1rem;
    font-weight: 500;
    padding-left: 0;
}

.kb-dashboard-page .kb-search-input.form-control::placeholder {
    color: #94a3b8;
    font-weight: 500;
}

.kb-dashboard-page .kb-search-filters {
    display: flex;
    align-items: center;
    padding-right: 0.9rem;
}

.kb-dashboard-page .kb-search-filters > * {
    margin-bottom: 0 !important;
}

.kb-dashboard-page .kb-section-head {
    display: flex;
    align-items: flex-end;
    justify-content: space-between;
    gap: 1rem;
    margin-bottom: 1rem;
}

.kb-dashboard-page .kb-section-overline {
    margin: 0 0 0.38rem;
    color: var(--kb-primary-dark);
    font-size: 0.78rem;
    font-weight: 800;
    letter-spacing: 0.11em;
    text-transform: uppercase;
}

.kb-dashboard-page .kb-section-title {
    margin: 0;
    color: var(--kb-text);
    font-size: 1.45rem;
    line-height: 1.2;
    font-weight: 800;
    letter-spacing: -0.03em;
}

.kb-dashboard-page .kb-section-title a {
    color: inherit;
    text-decoration: none;
}

.kb-dashboard-page .kb-section-title a:hover {
    color: var(--kb-primary-dark);
}

.kb-dashboard-page .kb-section-subtitle {
    margin: 0.45rem 0 0;
    color: var(--kb-text-muted);
    font-size: 0.95rem;
    line-height: 1.72;
}

.kb-dashboard-page .kb-legacy-header > *:last-child {
    margin-bottom: 0 !important;
}

.kb-dashboard-page .kb-legacy-header {
    color: var(--kb-text-soft);
}

.kb-dashboard-page .kb-legacy-header .btn,
.kb-dashboard-page .kb-legacy-header button,
.kb-dashboard-page .kb-legacy-header input[type="submit"],
.kb-dashboard-page .kb-legacy-header a.button {
    border-radius: 12px;
}

.kb-dashboard-page .kb-list-stack.table-list {
    display: flex;
    flex-direction: column;
    gap: 1rem;
    background: transparent;
    border: 0;
    box-shadow: none;
    margin-bottom: 0;
}

.kb-dashboard-page .kb-project-row.table-list-row,
.kb-dashboard-page .kb-task-row.table-list-row {
    position: relative;
    overflow: hidden;
    border: 1px solid rgba(219, 229, 241, 0.95);
    border-left: 0 !important;
    border-radius: 20px;
    background: linear-gradient(180deg, #ffffff 0%, #fcfdff 100%);
    box-shadow: var(--kb-shadow-sm);
}

.kb-dashboard-page .kb-project-row.table-list-row::before,
.kb-dashboard-page .kb-task-row.table-list-row::before {
    content: "";
    position: absolute;
    inset: 0 auto 0 0;
    width: 5px;
    background: linear-gradient(180deg, #60a5fa 0%, #2563eb 100%);
}

.kb-dashboard-page .kb-project-row.table-list-row:hover,
.kb-dashboard-page .kb-task-row.table-list-row:hover {
    transform: translateY(-2px);
    border-color: #bfd3ea;
    box-shadow: 0 16px 36px rgba(37, 99, 235, 0.10);
}

.kb-dashboard-page .kb-project-content,
.kb-dashboard-page .kb-task-content {
    padding: 1.25rem 1.3rem 1.2rem 1.5rem;
}

.kb-dashboard-page .kb-project-top {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    gap: 0.65rem;
    margin-bottom: 0.75rem;
}

.kb-dashboard-page .kb-project-id {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    min-height: 2rem;
    padding: 0 0.78rem;
    border: 1px solid #e2e8f0;
    border-radius: 999px;
    background: #f8fafc;
    color: var(--kb-text-soft);
    font-size: 0.82rem;
    font-weight: 800;
}

.kb-dashboard-page .kb-project-title,
.kb-dashboard-page .kb-project-title a {
    color: var(--kb-text);
    font-size: 1.08rem;
    line-height: 1.4;
    font-weight: 800;
    text-decoration: none;
    letter-spacing: -0.02em;
}

.kb-dashboard-page .kb-project-title a:hover {
    color: var(--kb-primary-dark);
}

.kb-dashboard-page .kb-private-badge {
    display: inline-flex;
    align-items: center;
    gap: 0.4rem;
    min-height: 2rem;
    padding: 0 0.78rem;
    border: 1px solid rgba(37, 99, 235, 0.10);
    border-radius: 999px;
    background: var(--kb-primary-soft);
    color: var(--kb-primary-dark);
    font-size: 0.76rem;
    font-weight: 800;
}

.kb-dashboard-page .kb-column-grid {
    display: flex;
    flex-wrap: wrap;
    gap: 0.7rem;
    justify-content: flex-start;
}

.kb-dashboard-page .kb-column-pill {
    display: inline-flex;
    align-items: center;
    gap: 0.55rem;
    min-height: 2.45rem;
    padding: 0.48rem 0.82rem;
    border: 1px solid var(--kb-primary-soft-2);
    border-radius: 999px;
    background: linear-gradient(180deg, #fbfdff 0%, #f4f9ff 100%);
    box-shadow: 0 4px 12px rgba(37, 99, 235, 0.04);
}

.kb-dashboard-page .kb-column-count {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    min-width: 1.8rem;
    height: 1.8rem;
    padding: 0 0.35rem;
    border-radius: 999px;
    background: linear-gradient(135deg, #dbeafe 0%, #bfdbfe 100%);
    color: var(--kb-primary-dark);
    font-size: 0.8rem;
    font-weight: 800;
}

.kb-dashboard-page .kb-column-name {
    color: var(--kb-text-soft);
    font-size: 0.84rem;
    font-weight: 700;
    white-space: nowrap;
}

.kb-dashboard-page .kb-task-row.table-list-row {
    padding: 0;
}

.kb-dashboard-page .kb-task-content {
    display: grid;
    gap: 1rem;
}

.kb-dashboard-page .kb-task-row .table-list-title,
.kb-dashboard-page .kb-task-row .task-list-title,
.kb-dashboard-page .kb-task-row strong a,
.kb-dashboard-page .kb-task-row .task-title a {
    color: var(--kb-text);
    font-weight: 800;
    text-decoration: none;
    letter-spacing: -0.01em;
}

.kb-dashboard-page .kb-task-row a:hover {
    color: var(--kb-primary-dark);
}

.kb-dashboard-page .kb-task-row .task-icons,
.kb-dashboard-page .kb-task-row .task-list-details,
.kb-dashboard-page .kb-task-row .task-list-subtasks,
.kb-dashboard-page .kb-task-row .task-list-avatars {
    margin-top: 0 !important;
}

.kb-dashboard-page .kb-task-row .task-icons i,
.kb-dashboard-page .kb-task-row .fa {
    color: var(--kb-text-muted);
}

.kb-dashboard-page .kb-task-row .task-list-details,
.kb-dashboard-page .kb-task-row .task-list-subtasks,
.kb-dashboard-page .kb-task-row .task-list-avatars,
.kb-dashboard-page .kb-task-row .task-icons {
    padding: 0.75rem 0.9rem;
    border: 1px solid #ebf1f7;
    border-radius: 14px;
    background: #fbfdff;
}

.kb-dashboard-page .kb-empty-state {
    border: 1px dashed #c7d7ea;
    border-radius: 24px;
    background: linear-gradient(180deg, #ffffff 0%, #f7fbff 100%);
    box-shadow: var(--kb-shadow-md);
}

.kb-dashboard-page .kb-empty-icon {
    width: 4.5rem;
    height: 4.5rem;
    margin: 0 auto 1rem;
    border-radius: 999px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    background: linear-gradient(135deg, #eff6ff 0%, #dbeafe 100%);
    color: var(--kb-primary-dark);
    font-size: 1.45rem;
    box-shadow: inset 0 1px 0 rgba(255,255,255,0.75);
}

.kb-dashboard-page .kb-pagination {
    margin-top: 1.1rem;
}

.kb-dashboard-page .kb-pagination a,
.kb-dashboard-page .kb-pagination span {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    min-width: 2.45rem;
    min-height: 2.45rem;
    margin-right: 0.42rem;
    margin-bottom: 0.42rem;
    padding: 0 0.95rem;
    border: 1px solid #dbe5f1;
    border-radius: 999px;
    background: linear-gradient(180deg, #ffffff 0%, #f9fbff 100%);
    color: var(--kb-text-soft);
    font-size: 0.9rem;
    font-weight: 800;
    text-decoration: none;
    box-shadow: 0 8px 18px rgba(15, 23, 42, 0.04);
}

.kb-dashboard-page .kb-pagination a:hover {
    color: var(--kb-primary-dark);
    border-color: #93c5fd;
    background: #eff6ff;
    transform: translateY(-1px);
}

.kb-dashboard-page .kb-pagination .active,
.kb-dashboard-page .kb-pagination .current {
    border-color: var(--kb-primary);
    background: linear-gradient(135deg, #3b82f6 0%, #1d4ed8 100%);
    color: #ffffff;
    box-shadow: 0 12px 24px rgba(37, 99, 235, 0.24);
}

.kb-dashboard-page .alert {
    border: 1px solid #dbeafe;
    border-radius: 18px;
    background: linear-gradient(180deg, #f8fbff 0%, #f3f8ff 100%);
    color: var(--kb-text-soft);
    box-shadow: var(--kb-shadow-sm);
}

.kb-dashboard-page .btn,
.kb-dashboard-page button,
.kb-dashboard-page input[type="submit"],
.kb-dashboard-page a.button {
    border-radius: 12px !important;
    font-weight: 700;
}

.kb-dashboard-page .dropdown-menu,
.kb-dashboard-page .popover,
.kb-dashboard-page .modal-content {
    border-radius: 16px;
}

.kb-dashboard-page .table-list-row .dropdown a,
.kb-dashboard-page .table-list-row .dropdown-menu a {
    text-decoration: none;
}

@media (min-width: 992px) {
    .kb-dashboard-page .kb-project-layout {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 1.5rem;
    }

    .kb-dashboard-page .kb-project-main {
        min-width: 0;
        flex: 1 1 auto;
    }

    .kb-dashboard-page .kb-column-grid {
        justify-content: flex-end;
    }

    .kb-dashboard-page .kb-task-content {
        grid-template-columns: minmax(0, 1.2fr) minmax(0, 1fr);
        align-items: start;
    }
}

@media (max-width: 991.98px) {
    .kb-dashboard-page .kb-hero-card .row {
        row-gap: 1rem;
    }

    .kb-dashboard-page .kb-stat-card {
        min-width: auto;
    }
}

@media (max-width: 767.98px) {
    .kb-dashboard-page {
        padding-top: 1rem;
        padding-bottom: 2rem;
    }

    .kb-dashboard-page .kb-hero-card,
    .kb-dashboard-page .kb-surface-card,
    .kb-dashboard-page .kb-empty-state,
    .kb-dashboard-page .kb-project-row.table-list-row,
    .kb-dashboard-page .kb-task-row.table-list-row {
        border-radius: 18px;
    }

    .kb-dashboard-page .kb-hero-title {
        font-size: 1.95rem;
    }

    .kb-dashboard-page .kb-hero-subtitle {
        font-size: 0.95rem;
        line-height: 1.72;
    }

    .kb-dashboard-page .kb-project-content,
    .kb-dashboard-page .kb-task-content {
        padding: 1rem 1rem 1rem 1.2rem;
    }

    .kb-dashboard-page .kb-search-input.form-control {
        min-height: 3.35rem;
    }

    .kb-dashboard-page .kb-section-title {
        font-size: 1.22rem;
    }

    .kb-dashboard-page .kb-stat-value {
        font-size: 1.65rem;
    }
}
</style>

<?= $this->hook->render('template:dashboard:show:before-filter-box', array('user' => $user)) ?>

<div class="kb-dashboard-page container-xxl">
    <div class="row g-4">
        <div class="col-12">
            <div class="card kb-hero-card border-0">
                <div class="card-body p-4 p-lg-5">
                    <div class="row g-4 align-items-center">
                        <div class="col-lg-8">
                            <span class="kb-hero-badge"><?= t('Workspace Overview') ?></span>
                            <h1 class="kb-hero-title"><?= t('Dashboard') ?></h1>
                            <p class="kb-hero-subtitle">
                                <?= t('Track assigned work, search across your workspace, and stay focused on the projects that matter most.') ?>
                            </p>
                        </div>
                        <div class="col-lg-4">
                            <div class="row g-3">
                                <div class="col-6 col-lg-12 col-xl-6">
                                    <div class="kb-stat-card">
                                        <div class="kb-stat-label"><?= t('Visible projects') ?></div>
                                        <div class="kb-stat-value"><?= $visibleProjects ?></div>
                                    </div>
                                </div>
                                <div class="col-6 col-lg-12 col-xl-6">
                                    <div class="kb-stat-card">
                                        <div class="kb-stat-label"><?= t('Task groups') ?></div>
                                        <div class="kb-stat-value"><?= $activeTaskGroups ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12">
            <div class="card kb-surface-card border-0">
                <div class="card-body p-3 p-lg-4">
                    <form method="get" action="<?= $this->url->dir() ?>" class="search">
                        <?= $this->form->hidden('controller', array('controller' => 'SearchController')) ?>
                        <?= $this->form->hidden('action', array('action' => 'index')) ?>

                        <div class="input-group input-group-lg kb-search-group">
                            <span class="input-group-text">
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </span>
                            <?= $this->form->text(
                                'search',
                                array(),
                                array(),
                                array(
                                    'placeholder="'.t('Search').'"',
                                    'aria-label="'.t('Search').'"'
                                ),
                                'form-control kb-search-input'
                            ) ?>
                            <span class="input-group-text kb-search-filters">
                                <?= $this->render('app/filters_helper') ?>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <?= $this->hook->render('template:dashboard:show:after-filter-box', array('user' => $user)) ?>

        <?php if (! $project_paginator->isEmpty()): ?>
            <div class="col-12">
                <div class="kb-section-head">
                    <div>
                        <p class="kb-section-overline"><?= t('Projects') ?></p>
                        <h2 class="kb-section-title"><?= t('Projects overview') ?></h2>
                        <p class="kb-section-subtitle"><?= t('Quick access to your active workspace and column status.') ?></p>
                    </div>
                </div>

                <div class="card kb-surface-card border-0 mb-3">
                    <div class="card-body p-3 p-lg-4 kb-legacy-header">
                        <?= $this->render('project_list/header', array('paginator' => $project_paginator)) ?>
                    </div>
                </div>

                <div class="table-list kb-list-stack">
                    <?php foreach ($project_paginator->getCollection() as $project): ?>
                        <div class="table-list-row table-border-left kb-project-row">
                            <div class="kb-project-content">
                                <div class="kb-project-layout">
                                    <div class="kb-project-main">
                                        <div class="kb-project-top">
                                            <?php if ($this->user->hasProjectAccess('ProjectViewController', 'show', $project['id'])): ?>
                                                <?= $this->render('project/dropdown', array('project' => $project)) ?>
                                            <?php else: ?>
                                                <span class="kb-project-id"><?= '#'.$project['id'] ?></span>
                                            <?php endif ?>

                                            <?= $this->hook->render('template:dashboard:project:before-title', array('project' => $project)) ?>

                                            <span class="kb-project-title <?= $project['is_active'] == 0 ? 'status-closed' : '' ?>">
                                                <?= $this->url->link($this->text->e($project['name']), 'BoardViewController', 'show', array('project_id' => $project['id'])) ?>
                                            </span>

                                            <?php if ($project['is_private']): ?>
                                                <span class="kb-private-badge" title="<?= t('Personal project') ?>">
                                                    <i class="fa fa-lock" aria-hidden="true"></i>
                                                    <span><?= t('Private') ?></span>
                                                </span>
                                            <?php endif ?>

                                            <?= $this->hook->render('template:dashboard:project:after-title', array('project' => $project)) ?>
                                        </div>
                                    </div>

                                    <div class="kb-column-grid">
                                        <?php foreach ($project['columns'] as $column): ?>
                                            <div class="kb-column-pill" title="<?= t('Task count') ?>">
                                                <span class="kb-column-count"><?= $column['nb_open_tasks'] ?></span>
                                                <span class="kb-column-name"><?= $this->text->e($column['title']) ?></span>
                                            </div>
                                        <?php endforeach ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>

                <div class="kb-pagination">
                    <?= $project_paginator ?>
                </div>
            </div>
        <?php endif ?>

        <div class="col-12">
            <?php if (empty($overview_paginator)): ?>
                <div class="kb-empty-state text-center p-4 p-lg-5">
                    <div class="kb-empty-icon">
                        <i class="fa fa-check-circle" aria-hidden="true"></i>
                    </div>
                    <h2 class="kb-section-title mb-2"><?= t('You are all caught up') ?></h2>
                    <p class="kb-section-subtitle mb-0"><?= t('There is nothing assigned to you right now.') ?></p>
                </div>
            <?php else: ?>
                <?php foreach ($overview_paginator as $result): ?>
                    <?php if (! $result['paginator']->isEmpty()): ?>
                        <section class="mb-4 mb-lg-5">
                            <div class="kb-section-head">
                                <div>
                                    <p class="kb-section-overline"><?= t('Assigned tasks') ?></p>
                                    <h2 class="kb-section-title" id="project-tasks-<?= $result['project_id'] ?>">
                                        <?= $this->url->link($this->text->e($result['project_name']), 'BoardViewController', 'show', array('project_id' => $result['project_id'])) ?>
                                    </h2>
                                    <p class="kb-section-subtitle"><?= t('Tasks currently assigned to you in this project.') ?></p>
                                </div>
                            </div>

                            <div class="card kb-surface-card border-0 mb-3">
                                <div class="card-body p-3 p-lg-4 kb-legacy-header">
                                    <?= $this->render('task_list/header', array(
                                        'paginator' => $result['paginator'],
                                    )) ?>
                                </div>
                            </div>

                            <div class="table-list kb-list-stack">
                                <?php foreach ($result['paginator']->getCollection() as $task): ?>
                                    <div class="table-list-row color-<?= $task['color_id'] ?> kb-task-row">
                                        <div class="kb-task-content">
                                            <div>
                                                <?= $this->render('task_list/task_title', array(
                                                    'task' => $task,
                                                    'redirect' => 'dashboard',
                                                )) ?>
                                            </div>

                                            <div class="d-grid gap-3">
                                                <?= $this->render('task_list/task_details', array(
                                                    'task' => $task,
                                                )) ?>

                                                <?= $this->render('task_list/task_avatars', array(
                                                    'task' => $task,
                                                )) ?>

                                                <?= $this->render('task_list/task_icons', array(
                                                    'task' => $task,
                                                )) ?>

                                                <?= $this->render('task_list/task_subtasks', array(
                                                    'task'    => $task,
                                                    'user_id' => $user['id'],
                                                )) ?>

                                                <?= $this->hook->render('template:dashboard:task:footer', array('task' => $task)) ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach ?>
                            </div>

                            <div class="kb-pagination">
                                <?= $result['paginator'] ?>
                            </div>
                        </section>
                    <?php endif ?>
                <?php endforeach ?>
            <?php endif ?>
        </div>
    </div>
</div>

<?= $this->hook->render('template:dashboard:show', array('user' => $user)) ?>