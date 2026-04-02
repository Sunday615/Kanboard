<style>
.kb-sidebar {
    --kb-sidebar-bg: linear-gradient(180deg, #ffffff 0%, #f8fbff 100%);
    --kb-sidebar-surface: #ffffff;
    --kb-sidebar-surface-soft: #f8fbff;
    --kb-sidebar-surface-accent: #eef4ff;
    --kb-sidebar-border: #dbe6f5;
    --kb-sidebar-border-strong: #c9d8ee;
    --kb-sidebar-text: #0f172a;
    --kb-sidebar-text-soft: #334155;
    --kb-sidebar-text-muted: #526277;
    --kb-sidebar-primary: #000ba6;
    --kb-sidebar-primary-strong: #0011ff;
    --kb-sidebar-primary-soft: rgba(0, 17, 255, 0.08);
    --kb-sidebar-primary-soft-strong: rgba(0, 17, 255, 0.14);
    --kb-sidebar-primary-gradient: linear-gradient(90deg, rgba(0, 11, 166, 1) 0%, rgba(0, 17, 255, 1) 100%);
    --kb-sidebar-shadow-sm: 0 10px 28px rgba(15, 23, 42, 0.06);
    --kb-sidebar-shadow-md: 0 18px 40px rgba(15, 23, 42, 0.10);
    --kb-sidebar-shadow-primary: 0 16px 30px rgba(0, 17, 255, 0.18);
    --kb-sidebar-radius: 24px;
    --kb-sidebar-radius-md: 18px;
    --kb-sidebar-radius-sm: 14px;
    position: relative;
    padding: 18px 16px;
    border-radius: var(--kb-sidebar-radius);
    background: var(--kb-sidebar-bg);
    border: 1px solid var(--kb-sidebar-border);
    box-shadow: var(--kb-sidebar-shadow-sm);
    overflow: hidden;
}

.kb-sidebar::before {
    content: "";
    position: absolute;
    top: -120px;
    right: -70px;
    width: 220px;
    height: 220px;
    border-radius: 999px;
    background: radial-gradient(circle, rgba(0, 17, 255, 0.10) 0%, rgba(0, 17, 255, 0) 72%);
    pointer-events: none;
}

.kb-sidebar::after {
    content: "";
    position: absolute;
    bottom: -80px;
    left: -50px;
    width: 180px;
    height: 180px;
    border-radius: 999px;
    background: radial-gradient(circle, rgba(0, 11, 166, 0.08) 0%, rgba(0, 11, 166, 0) 70%);
    pointer-events: none;
}

.kb-sidebar > * {
    position: relative;
    z-index: 1;
}

.kb-sidebar-brand {
    display: flex;
    align-items: center;
    gap: 14px;
    padding: 14px;
    margin-bottom: 18px;
    border-radius: var(--kb-sidebar-radius-md);
    background: linear-gradient(180deg, #ffffff 0%, #f5f9ff 100%);
    border: 1px solid rgba(0, 17, 255, 0.10);
    box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.95), 0 8px 18px rgba(15, 23, 42, 0.05);
}

.kb-sidebar-brand-mark {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 52px;
    height: 52px;
    border-radius: 16px;
    background: var(--kb-sidebar-primary-gradient);
    color: #ffffff;
    font-size: 1rem;
    font-weight: 900;
    letter-spacing: 0.08em;
    box-shadow: var(--kb-sidebar-shadow-primary);
    flex-shrink: 0;
}

.kb-sidebar-brand-copy {
    min-width: 0;
}

.kb-sidebar-brand-copy strong {
    display: block;
    color: var(--kb-sidebar-text);
    font-size: 1rem;
    font-weight: 900;
    line-height: 1.2;
    letter-spacing: -0.02em;
}

.kb-sidebar-brand-copy small {
    display: block;
    margin-top: 4px;
    color: var(--kb-sidebar-text-muted);
    font-size: 0.8rem;
    font-weight: 700;
    line-height: 1.4;
}

.kb-sidebar-section-label {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    margin: 0 8px 10px;
    padding: 0 2px;
    color: var(--kb-sidebar-text-muted);
    font-size: 0.74rem;
    font-weight: 900;
    letter-spacing: 0.12em;
    text-transform: uppercase;
}

.kb-sidebar-section-label::before {
    content: "";
    display: inline-block;
    width: 8px;
    height: 8px;
    border-radius: 999px;
    background: var(--kb-sidebar-primary-gradient);
    box-shadow: 0 0 0 5px rgba(0, 17, 255, 0.08);
}

.kb-sidebar ul {
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex;
    flex-direction: column;
    gap: 8px;
}

.kb-sidebar ul li {
    position: relative;
    margin: 0;
    padding: 0;
}

.kb-sidebar ul li > a,
.kb-sidebar ul li > span,
.kb-sidebar ul li > button {
    display: flex;
    align-items: center;
    gap: 12px;
    min-height: 50px;
    width: 100%;
    padding: 0 14px 0 16px;
    border-radius: var(--kb-sidebar-radius-sm);
    color: var(--kb-sidebar-text-soft);
    font-size: 0.96rem;
    font-weight: 800;
    line-height: 1.35;
    text-decoration: none;
    background: transparent;
    border: 1px solid transparent;
    box-sizing: border-box;
    transition: background 0.2s ease, color 0.2s ease, border-color 0.2s ease, box-shadow 0.2s ease, transform 0.2s ease;
}

.kb-sidebar ul li > a::before,
.kb-sidebar ul li > span::before,
.kb-sidebar ul li > button::before {
    content: "";
    display: inline-flex;
    width: 10px;
    height: 10px;
    border-radius: 999px;
    background: linear-gradient(180deg, #c7d2fe 0%, #93c5fd 100%);
    box-shadow: 0 0 0 4px rgba(148, 163, 184, 0.10);
    flex-shrink: 0;
    transition: transform 0.2s ease, box-shadow 0.2s ease, background 0.2s ease;
}

.kb-sidebar ul li[data-nav="overview"] > a::before,
.kb-sidebar ul li[data-nav="overview"] > span::before,
.kb-sidebar ul li[data-nav="overview"] > button::before {
    background: linear-gradient(180deg, #93c5fd 0%, #60a5fa 100%);
}

.kb-sidebar ul li[data-nav="projects"] > a::before,
.kb-sidebar ul li[data-nav="projects"] > span::before,
.kb-sidebar ul li[data-nav="projects"] > button::before {
    background: linear-gradient(180deg, #a5b4fc 0%, #6366f1 100%);
}

.kb-sidebar ul li[data-nav="tasks"] > a::before,
.kb-sidebar ul li[data-nav="tasks"] > span::before,
.kb-sidebar ul li[data-nav="tasks"] > button::before {
    background: linear-gradient(180deg, #93c5fd 0%, #2563eb 100%);
}

.kb-sidebar ul li[data-nav="subtasks"] > a::before,
.kb-sidebar ul li[data-nav="subtasks"] > span::before,
.kb-sidebar ul li[data-nav="subtasks"] > button::before {
    background: linear-gradient(180deg, #bfdbfe 0%, #3b82f6 100%);
}

.kb-sidebar ul li:hover > a,
.kb-sidebar ul li:hover > span,
.kb-sidebar ul li:hover > button,
.kb-sidebar ul li > a:hover,
.kb-sidebar ul li > span:hover,
.kb-sidebar ul li > button:hover {
    color: var(--kb-sidebar-text);
    background: linear-gradient(180deg, #ffffff 0%, #f3f8ff 100%);
    border-color: rgba(0, 17, 255, 0.12);
    box-shadow: 0 10px 22px rgba(15, 23, 42, 0.06);
    transform: translateX(2px);
    text-decoration: none;
}

.kb-sidebar ul li:hover > a::before,
.kb-sidebar ul li:hover > span::before,
.kb-sidebar ul li:hover > button::before,
.kb-sidebar ul li > a:hover::before,
.kb-sidebar ul li > span:hover::before,
.kb-sidebar ul li > button:hover::before {
    transform: scale(1.08);
    box-shadow: 0 0 0 6px rgba(0, 17, 255, 0.10);
}

.kb-sidebar ul li.active > a,
.kb-sidebar ul li.selected > a,
.kb-sidebar ul li.current > a,
.kb-sidebar ul li.is-active > a,
.kb-sidebar ul li.active > span,
.kb-sidebar ul li.selected > span,
.kb-sidebar ul li.current > span,
.kb-sidebar ul li.is-active > span,
.kb-sidebar ul li.active > button,
.kb-sidebar ul li.selected > button,
.kb-sidebar ul li.current > button,
.kb-sidebar ul li.is-active > button,
.kb-sidebar ul li[aria-current="page"] > a {
    color: var(--kb-sidebar-primary) !important;
    background: linear-gradient(180deg, #eff6ff 0%, #dbeafe 100%);
    border-color: rgba(0, 17, 255, 0.18);
    box-shadow: 0 14px 26px rgba(0, 17, 255, 0.10);
    transform: translateX(2px);
}

.kb-sidebar ul li.active > a::before,
.kb-sidebar ul li.selected > a::before,
.kb-sidebar ul li.current > a::before,
.kb-sidebar ul li.is-active > a::before,
.kb-sidebar ul li.active > span::before,
.kb-sidebar ul li.selected > span::before,
.kb-sidebar ul li.current > span::before,
.kb-sidebar ul li.is-active > span::before,
.kb-sidebar ul li.active > button::before,
.kb-sidebar ul li.selected > button::before,
.kb-sidebar ul li.current > button::before,
.kb-sidebar ul li.is-active > button::before,
.kb-sidebar ul li[aria-current="page"] > a::before {
    background: linear-gradient(180deg, #1d4ed8 0%, #2563eb 100%);
    box-shadow: 0 0 0 6px rgba(59, 130, 246, 0.14);
}

.kb-sidebar ul li.active::after,
.kb-sidebar ul li.selected::after,
.kb-sidebar ul li.current::after,
.kb-sidebar ul li.is-active::after,
.kb-sidebar ul li[aria-current="page"]::after {
    content: "";
    position: absolute;
    top: 50%;
    right: 12px;
    width: 8px;
    height: 8px;
    border-radius: 999px;
    background: rgba(29, 78, 216, 0.95);
    transform: translateY(-50%);
    box-shadow: 0 0 0 6px rgba(59, 130, 246, 0.12);
}

.kb-sidebar .sidebar-collapsed-text,
.kb-sidebar .sidebar-title,
.kb-sidebar .sidebar-section-title {
    color: var(--kb-sidebar-text-muted);
}

@media (max-width: 767.98px) {
    .kb-sidebar {
        padding: 14px;
        border-radius: 20px;
    }

    .kb-sidebar-brand {
        padding: 12px;
    }

    .kb-sidebar-brand-mark {
        width: 46px;
        height: 46px;
        border-radius: 14px;
    }

    .kb-sidebar ul li > a,
    .kb-sidebar ul li > span,
    .kb-sidebar ul li > button {
        min-height: 46px;
        font-size: 0.93rem;
    }
}
</style>

<div class="sidebar kb-sidebar">
    <div class="kb-sidebar-brand">
        <span class="kb-sidebar-brand-mark">KB</span>
        <div class="kb-sidebar-brand-copy">
            <strong><?= t('Kanboard') ?></strong>
            <small><?= t('Workspace dashboard') ?></small>
        </div>
    </div>

    <div class="kb-sidebar-section-label"><?= t('General') ?></div>

    <ul>
        <li data-nav="overview" <?= $this->app->checkMenuSelection('DashboardController', 'show') ?>>
            <?= $this->url->link(t('Overview'), 'DashboardController', 'show', array('user_id' => $user['id'])) ?>
        </li>
        <li data-nav="projects" <?= $this->app->checkMenuSelection('DashboardController', 'projects') ?>>
            <?= $this->url->link(t('My projects'), 'DashboardController', 'projects', array('user_id' => $user['id'])) ?>
        </li>
        <li data-nav="tasks" <?= $this->app->checkMenuSelection('DashboardController', 'tasks') ?>>
            <?= $this->url->link(t('My tasks'), 'DashboardController', 'tasks', array('user_id' => $user['id'])) ?>
        </li>
        <li data-nav="subtasks" <?= $this->app->checkMenuSelection('DashboardController', 'subtasks') ?>>
            <?= $this->url->link(t('My subtasks'), 'DashboardController', 'subtasks', array('user_id' => $user['id'])) ?>
        </li>
        <?= $this->hook->render('template:dashboard:sidebar', array('user' => $user)) ?>
    </ul>
</div>
