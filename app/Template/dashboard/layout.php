<section id="main" class="kb-app-shell">
    <style>
    .kb-app-shell {
        --kb-bg: #f6f7fb;
        --kb-surface: #ffffff;
        --kb-surface-2: #fbfcff;
        --kb-border: #e8eaf2;
        --kb-border-strong: #d9deea;
        --kb-text: #161c2d;
        --kb-text-soft: #667085;
        --kb-text-muted: #98a2b3;
        --kb-primary: #2563eb;
        --kb-primary-dark: #1d4ed8;
        --kb-primary-soft: #eff6ff;
        --kb-accent: #60a5fa;
        --kb-success: #12b76a;
        --kb-danger: #f04438;
        --kb-warning: #f59e0b;
        --kb-shadow-lg: 0 24px 60px rgba(16, 24, 40, 0.10);
        --kb-shadow-md: 0 14px 30px rgba(16, 24, 40, 0.08);
        --kb-shadow-sm: 0 8px 20px rgba(16, 24, 40, 0.06);
        --kb-radius-xl: 28px;
        --kb-radius-lg: 22px;
        --kb-radius-md: 18px;
        --kb-radius-sm: 14px;
        --kb-sidebar-width: 272px;

        min-height: 100vh;
        background: linear-gradient(180deg, #fbfdff 0%, #f4f8ff 100%);
        color: var(--kb-text);
    }

    .kb-app-shell,
    .kb-app-shell * {
        box-sizing: border-box;
    }

    .kb-app-shell a {
        transition: color 180ms ease, background-color 180ms ease, border-color 180ms ease, box-shadow 180ms ease, transform 180ms ease;
    }

    .kb-app-shell .page-header,
    .kb-app-shell .sidebar,
    .kb-app-shell .table-list-row,
    .kb-app-shell .table-list-header,
    .kb-app-shell .alert,
    .kb-app-shell .btn,
    .kb-app-shell button,
    .kb-app-shell input,
    .kb-app-shell select,
    .kb-app-shell textarea {
        transition: background-color 180ms ease, border-color 180ms ease, box-shadow 180ms ease, color 180ms ease, transform 180ms ease;
    }

    .kb-app-frame {
        min-height: 100vh;
        display: grid;
        grid-template-columns: var(--kb-sidebar-width) minmax(0, 1fr);
        gap: 24px;
        padding: 22px;
    }

    .kb-sidebar-panel {
        min-width: 0;
    }

    .kb-main-panel {
        min-width: 0;
        width: 100%;
        display: flex;
        flex-direction: column;
        gap: 20px;
        align-items: stretch;
    }

    .kb-topbar {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 16px;
        min-height: 76px;
        margin: 0;
        padding: 18px 22px;
        border: 1px solid var(--kb-border);
        border-radius: var(--kb-radius-lg);
        background: rgba(255, 255, 255, 0.9);
        backdrop-filter: blur(8px);
        box-shadow: var(--kb-shadow-sm);
    }

    .kb-topbar-breadcrumb {
        display: flex;
        align-items: center;
        flex-wrap: wrap;
        gap: 8px;
    }

    .kb-topbar-kicker {
        color: var(--kb-text-muted);
        font-size: 0.8rem;
        font-weight: 700;
        letter-spacing: 0.08em;
        text-transform: uppercase;
    }

    .kb-topbar-divider {
        color: #c0c7d4;
        font-size: 0.95rem;
    }

    .kb-topbar-title {
        color: var(--kb-text);
        font-size: 1.15rem;
        font-weight: 800;
        letter-spacing: -0.02em;
    }

    .kb-topbar ul {
        display: flex;
        align-items: center;
        justify-content: flex-end;
        flex-wrap: wrap;
        gap: 10px;
        margin: 0;
        padding: 0;
        list-style: none;
    }

    .kb-topbar ul li {
        margin: 0;
    }

    .kb-topbar ul li a,
    .kb-topbar ul li button,
    .kb-topbar ul li .dropdown-menu-link-icon {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        min-height: 42px;
        padding: 0 14px;
        border: 1px solid var(--kb-border);
        border-radius: 12px;
        background: var(--kb-surface);
        color: var(--kb-text-soft);
        font-size: 0.92rem;
        font-weight: 700;
        text-decoration: none;
        box-shadow: 0 4px 10px rgba(16, 24, 40, 0.04);
    }

    .kb-topbar ul li a:hover,
    .kb-topbar ul li button:hover,
    .kb-topbar ul li .dropdown-menu-link-icon:hover {
        color: var(--kb-primary-dark);
        border-color: #cfd5ff;
        background: #f7f7ff;
        transform: translateY(-1px);
    }

    .kb-content-panel {
        min-width: 0;
        width: 100%;
        max-width: 100%;
        flex: 1 1 auto;
        align-self: stretch;
    }

    .kb-content-panel > * {
        width: 100%;
        max-width: 100%;
    }

    .kb-content-panel > *:first-child {
        margin-top: 0;
    }

    .kb-sidebar {
        display: flex;
        flex-direction: column;
        gap: 22px;
        height: 100%;
        min-height: calc(100vh - 44px);
        padding: 24px 18px;
        border: 1px solid var(--kb-border);
        border-radius: var(--kb-radius-xl);
        background: linear-gradient(180deg, #ffffff 0%, #fbfcff 100%);
        box-shadow: var(--kb-shadow-md);
    }

    .kb-sidebar-brand {
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 4px 4px 2px;
    }

    .kb-sidebar-brand-mark {
        width: 42px;
        height: 42px;
        border-radius: 14px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        background: linear-gradient(135deg, #2563eb 0%, #60a5fa 100%);
        color: #ffffff;
        font-size: 1rem;
        font-weight: 800;
        box-shadow: 0 10px 20px rgba(37, 99, 235, 0.24);
    }

    .kb-sidebar-brand-copy strong {
        display: block;
        color: var(--kb-text);
        font-size: 1.05rem;
        font-weight: 800;
        letter-spacing: -0.02em;
    }

    .kb-sidebar-brand-copy small {
        display: block;
        margin-top: 2px;
        color: var(--kb-text-muted);
        font-size: 0.8rem;
        font-weight: 600;
    }

    .kb-sidebar-section-label {
        padding: 0 10px;
        color: var(--kb-text-muted);
        font-size: 0.76rem;
        font-weight: 800;
        letter-spacing: 0.10em;
        text-transform: uppercase;
    }

    .kb-sidebar ul {
        margin: 0;
        padding: 0;
        list-style: none;
    }

    .kb-sidebar ul li {
        position: relative;
        margin: 6px 0;
    }

    .kb-sidebar ul li::before {
        content: "";
        position: absolute;
        left: 14px;
        top: 50%;
        width: 8px;
        height: 8px;
        border-radius: 999px;
        background: #d0d5dd;
        transform: translateY(-50%);
        pointer-events: none;
        transition: background-color 180ms ease, transform 180ms ease;
    }

    .kb-sidebar ul li a {
        display: flex;
        align-items: center;
        min-height: 46px;
        padding: 10px 14px 10px 34px;
        border: 1px solid transparent;
        border-radius: 14px;
        color: var(--kb-text-soft);
        font-size: 0.96rem;
        font-weight: 700;
        text-decoration: none;
    }

    .kb-sidebar ul li a:hover {
        color: var(--kb-primary-dark);
        background: #f7fbff;
        border-color: #dbeafe;
    }

    .kb-sidebar ul li.active::before,
    .kb-sidebar ul li.current::before,
    .kb-sidebar ul li.selected::before {
        background: var(--kb-primary);
        transform: translateY(-50%) scale(1.2);
    }

    .kb-sidebar ul li.active a,
    .kb-sidebar ul li.current a,
    .kb-sidebar ul li.selected a,
    .kb-sidebar ul li[aria-current="page"] a {
        color: var(--kb-primary-dark);
        background: linear-gradient(135deg, #eff6ff 0%, #dbeafe 100%);
        border-color: #bfdbfe;
        box-shadow: 0 10px 22px rgba(37, 99, 235, 0.10);
    }

    .kb-sidebar-footer {
        margin-top: auto;
        padding: 14px 16px;
        border: 1px solid var(--kb-border);
        border-radius: 16px;
        background: #fafbff;
    }

    .kb-sidebar-footer-title {
        color: var(--kb-text);
        font-size: 0.88rem;
        font-weight: 800;
    }

    .kb-sidebar-footer-copy {
        margin-top: 3px;
        color: var(--kb-text-muted);
        font-size: 0.8rem;
        line-height: 1.55;
    }

    .kb-page-shell {
        display: flex;
        flex-direction: column;
        gap: 18px;
    }

    .kb-page-head {
        display: flex;
        align-items: flex-end;
        justify-content: space-between;
        gap: 16px;
        padding: 0 2px;
    }

    .kb-page-eyebrow {
        margin: 0 0 6px;
        color: var(--kb-text-muted);
        font-size: 0.78rem;
        font-weight: 800;
        letter-spacing: 0.09em;
        text-transform: uppercase;
    }

    .kb-page-title {
        margin: 0;
        color: var(--kb-text);
        font-size: clamp(1.65rem, 2.5vw, 2.2rem);
        line-height: 1.05;
        font-weight: 800;
        letter-spacing: -0.03em;
    }

    .kb-page-title a {
        color: inherit;
        text-decoration: none;
    }

    .kb-page-title a:hover {
        color: var(--kb-primary-dark);
    }

    .kb-page-copy {
        margin: 8px 0 0;
        color: var(--kb-text-soft);
        font-size: 0.96rem;
        line-height: 1.7;
    }

    .kb-page-chip {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        min-height: 36px;
        padding: 0 12px;
        border: 1px solid var(--kb-border);
        border-radius: 999px;
        background: var(--kb-surface);
        color: var(--kb-text-soft);
        font-size: 0.9rem;
        font-weight: 800;
        box-shadow: 0 4px 10px rgba(16, 24, 40, 0.04);
    }

    .kb-card {
        border: 1px solid var(--kb-border);
        border-radius: var(--kb-radius-lg);
        background: var(--kb-surface);
        box-shadow: var(--kb-shadow-sm);
    }

    .kb-card-header {
        padding: 18px 20px;
        border-bottom: 1px solid var(--kb-border);
    }

    .kb-card-body {
        padding: 20px;
    }

    .kb-grid-stats {
        display: grid;
        grid-template-columns: repeat(4, minmax(0, 1fr));
        gap: 16px;
    }

    .kb-stat-box {
        padding: 18px 18px 16px;
        border: 1px solid var(--kb-border);
        border-radius: 18px;
        background: linear-gradient(180deg, #ffffff 0%, #fcfcff 100%);
        box-shadow: 0 6px 14px rgba(16, 24, 40, 0.04);
    }

    .kb-stat-box-label {
        color: var(--kb-text-muted);
        font-size: 0.82rem;
        font-weight: 700;
    }

    .kb-stat-box-value {
        margin-top: 10px;
        color: var(--kb-text);
        font-size: 1.85rem;
        line-height: 1;
        font-weight: 800;
        letter-spacing: -0.03em;
    }

    .kb-stat-box-note {
        margin-top: 8px;
        color: var(--kb-success);
        font-size: 0.84rem;
        font-weight: 700;
    }

    .kb-banner {
        position: relative;
        overflow: hidden;
        padding: 22px 24px;
        border-radius: 22px;
        background: linear-gradient(135deg, #1d4ed8 0%, #2563eb 48%, #60a5fa 100%);
        color: #ffffff;
        box-shadow: 0 24px 44px rgba(37, 99, 235, 0.24);
    }

    .kb-banner::after {
        content: "";
        position: absolute;
        right: -28px;
        top: -16px;
        width: 180px;
        height: 180px;
        border-radius: 999px;
        background: rgba(255, 255, 255, 0.10);
    }

    .kb-banner-kicker {
        position: relative;
        z-index: 1;
        display: inline-flex;
        align-items: center;
        min-height: 30px;
        padding: 0 10px;
        border-radius: 999px;
        background: rgba(255, 255, 255, 0.16);
        font-size: 0.76rem;
        font-weight: 800;
        letter-spacing: 0.08em;
        text-transform: uppercase;
    }

    .kb-banner-title {
        position: relative;
        z-index: 1;
        margin: 12px 0 6px;
        font-size: 1.35rem;
        line-height: 1.25;
        font-weight: 800;
        letter-spacing: -0.02em;
    }

    .kb-banner-copy {
        position: relative;
        z-index: 1;
        margin: 0;
        max-width: 720px;
        color: rgba(255,255,255,0.88);
        font-size: 0.96rem;
        line-height: 1.7;
    }

    .kb-banner-actions {
        position: relative;
        z-index: 1;
        margin-top: 16px;
    }

    .kb-banner-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        min-height: 42px;
        padding: 0 16px;
        border-radius: 12px;
        background: #ffffff;
        color: var(--kb-primary-dark);
        font-size: 0.9rem;
        font-weight: 800;
        text-decoration: none;
        box-shadow: 0 10px 24px rgba(16, 24, 40, 0.14);
    }

    .kb-banner-btn:hover {
        color: #1d4ed8;
        transform: translateY(-1px);
    }

    .kb-table-card .table-list,
    .kb-list-stack.table-list {
        margin: 0;
        border: 0;
        background: transparent;
        box-shadow: none;
    }

    .kb-table-card .table-list-header,
    .kb-list-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 14px;
        padding: 18px 20px;
        border-bottom: 1px solid var(--kb-border);
        background: #ffffff;
        border-radius: 22px 22px 0 0;
    }

    .kb-table-card .table-list-header-count,
    .kb-table-card .table-list-header-menu,
    .kb-list-header-title,
    .kb-list-header-meta {
        color: var(--kb-text-soft);
        font-size: 0.92rem;
        font-weight: 700;
    }

    .kb-table-card .table-list-row,
    .kb-list-row {
        margin: 0 20px 14px;
        padding: 18px 18px 16px;
        border: 1px solid var(--kb-border);
        border-radius: 18px;
        background: linear-gradient(180deg, #ffffff 0%, #fcfcff 100%);
        box-shadow: 0 8px 18px rgba(16, 24, 40, 0.04);
    }

    .kb-table-card .table-list-row:first-of-type,
    .kb-list-row:first-of-type {
        margin-top: 18px;
    }

    .kb-table-card .table-list-row:last-child,
    .kb-list-row:last-child {
        margin-bottom: 20px;
    }

    .kb-table-card .table-list-row:hover,
    .kb-list-row:hover {
        border-color: #d9dcff;
        box-shadow: 0 16px 28px rgba(37, 99, 235, 0.08);
        transform: translateY(-1px);
    }

    .kb-table-card .table-border-left,
    .kb-list-row.table-border-left {
        border-left: 1px solid var(--kb-border) !important;
        position: relative;
    }

    .kb-table-card .table-border-left::before,
    .kb-list-row.table-border-left::before {
        content: "";
        position: absolute;
        left: 0;
        top: 14px;
        bottom: 14px;
        width: 4px;
        border-radius: 999px;
        background: linear-gradient(180deg, #2563eb 0%, #60a5fa 100%);
    }

    .kb-empty-state {
        padding: 42px 24px;
        border: 1px dashed #d7dceb;
        border-radius: 22px;
        background: linear-gradient(180deg, #ffffff 0%, #fbfcff 100%);
        text-align: center;
        box-shadow: var(--kb-shadow-sm);
    }

    .kb-empty-state-icon {
        width: 64px;
        height: 64px;
        margin: 0 auto 14px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        border-radius: 20px;
        background: linear-gradient(135deg, #eff6ff 0%, #dbeafe 100%);
        color: var(--kb-primary-dark);
        font-size: 1.3rem;
        box-shadow: 0 10px 20px rgba(37, 99, 235, 0.10);
    }

    .kb-empty-state h3,
    .kb-empty-state h2 {
        margin: 0;
        color: var(--kb-text);
        font-size: 1.3rem;
        font-weight: 800;
        letter-spacing: -0.02em;
    }

    .kb-empty-state p {
        margin: 10px auto 0;
        max-width: 560px;
        color: var(--kb-text-soft);
        font-size: 0.95rem;
        line-height: 1.7;
    }

    .kb-app-shell .pagination,
    .kb-app-shell .kb-pagination {
        display: flex;
        flex-wrap: wrap;
        gap: 8px;
        margin-top: 16px;
    }

    .kb-app-shell .pagination a,
    .kb-app-shell .pagination span,
    .kb-app-shell .kb-pagination a,
    .kb-app-shell .kb-pagination span {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        min-width: 40px;
        min-height: 40px;
        padding: 0 14px;
        border: 1px solid var(--kb-border);
        border-radius: 12px;
        background: #ffffff;
        color: var(--kb-text-soft);
        font-size: 0.9rem;
        font-weight: 800;
        text-decoration: none;
        box-shadow: 0 4px 10px rgba(16, 24, 40, 0.04);
    }

    .kb-app-shell .pagination a:hover,
    .kb-app-shell .kb-pagination a:hover {
        color: var(--kb-primary-dark);
        border-color: #cfd5ff;
        background: #f7fbff;
    }

    .kb-app-shell .pagination .active,
    .kb-app-shell .pagination .current,
    .kb-app-shell .kb-pagination .active,
    .kb-app-shell .kb-pagination .current {
        background: linear-gradient(135deg, #1d4ed8 0%, #3b82f6 100%);
        border-color: #1d4ed8;
        color: #ffffff;
        box-shadow: 0 12px 22px rgba(37, 99, 235, 0.20);
    }

    .kb-app-shell .alert {
        margin: 0;
        padding: 16px 18px;
        border: 1px solid #dbeafe;
        border-radius: 16px;
        background: #f8fbff;
        color: var(--kb-text-soft);
        box-shadow: 0 8px 18px rgba(37, 99, 235, 0.05);
    }

    .kb-app-shell .dropdown > a,
    .kb-app-shell .dropdown-menu-link-icon {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        min-height: 38px;
        padding: 0 12px;
        border: 1px solid var(--kb-border);
        border-radius: 12px;
        background: #ffffff;
        color: var(--kb-text-soft);
        text-decoration: none;
        font-size: 0.9rem;
        font-weight: 700;
    }

    .kb-app-shell .dropdown > a:hover,
    .kb-app-shell .dropdown-menu-link-icon:hover {
        color: var(--kb-primary-dark);
        border-color: #cfd5ff;
        background: #f7fbff;
    }

    .kb-app-shell .table-list a,
    .kb-app-shell .page-header a,
    .kb-app-shell .sidebar a {
        text-decoration: none;
    }

    .kb-app-shell .table-list strong a,
    .kb-app-shell .task-title a,
    .kb-app-shell .table-list-title,
    .kb-app-shell .task-list-title {
        color: var(--kb-text);
        font-weight: 800;
        letter-spacing: -0.01em;
    }

    .kb-app-shell .table-list strong a:hover,
    .kb-app-shell .task-title a:hover,
    .kb-app-shell .table-list-row a:hover {
        color: var(--kb-primary-dark);
    }

    .kb-app-shell .task-icons i,
    .kb-app-shell .fa {
        color: var(--kb-text-muted);
    }

    .kb-app-shell .table-list-row .task-list-details,
    .kb-app-shell .table-list-row .task-list-subtasks,
    .kb-app-shell .table-list-row .task-list-avatars,
    .kb-app-shell .table-list-row .task-icons {
        margin-top: 12px;
        padding: 14px 14px;
        border: 1px solid #eef1f7;
        border-radius: 14px;
        background: #fbfcff;
    }

    .kb-app-shell .table-list-row .task-list-avatars:empty,
    .kb-app-shell .table-list-row .task-list-subtasks:empty,
    .kb-app-shell .table-list-row .task-icons:empty,
    .kb-app-shell .table-list-row .task-list-details:empty {
        display: none;
    }


    .kb-stretch-content,
    .kb-stretch-content > .kb-page-shell,
    .kb-stretch-content > .kb-overview-page {
        width: 100%;
        max-width: 100%;
        min-width: 0;
        align-self: stretch;
    }

    .kb-stretch-content > .kb-page-shell,
    .kb-stretch-content > .kb-overview-page {
        margin-left: 0;
        margin-right: 0;
    }

    @media (max-width: 1199.98px) {
        .kb-grid-stats {
            grid-template-columns: repeat(2, minmax(0, 1fr));
        }
    }

    @media (max-width: 991.98px) {
        .kb-app-frame {
            grid-template-columns: 1fr;
        }

        .kb-sidebar {
            min-height: auto;
        }

        .kb-topbar {
            flex-direction: column;
            align-items: stretch;
        }

        .kb-topbar ul {
            justify-content: flex-start;
        }
    }

    @media (max-width: 767.98px) {
        .kb-app-frame {
            gap: 18px;
            padding: 14px;
        }

        .kb-topbar,
        .kb-sidebar,
        .kb-card,
        .kb-banner,
        .kb-empty-state {
            border-radius: 18px;
        }

        .kb-grid-stats {
            grid-template-columns: 1fr;
        }

        .kb-topbar,
        .kb-card-header,
        .kb-card-body,
        .kb-banner,
        .kb-table-card .table-list-header,
        .kb-table-card .table-list-row,
        .kb-list-row {
            padding-left: 16px;
            padding-right: 16px;
        }

        .kb-page-head {
            flex-direction: column;
            align-items: flex-start;
        }
    }
    </style>

    <div class="kb-app-frame">
        <aside class="kb-sidebar-panel">
            <?= $this->render($sidebar_template, array('user' => $user)) ?>
        </aside>

        <section class="kb-main-panel">
            <div class="page-header kb-topbar">
                <div class="kb-topbar-breadcrumb">
                    <span class="kb-topbar-kicker"><?= t('Pages') ?></span>
                    <span class="kb-topbar-divider">/</span>
                    <span class="kb-topbar-title"><?= t('Workspace') ?></span>
                </div>

                <ul>
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
                    <li>
                        <?= $this->url->icon('folder', t('Project management'), 'ProjectListController', 'show') ?>
                    </li>
                    <li>
                        <?= $this->modal->medium('dashboard', t('My activity stream'), 'ActivityController', 'user') ?>
                    </li>
                    <?= $this->hook->render('template:dashboard:page-header:menu', array('user' => $user)) ?>
                </ul>
            </div>

            <div class="sidebar-content kb-content-panel kb-stretch-content">
                <?= $content_for_sublayout ?>
            </div>
        </section>
    </div>
</section>
