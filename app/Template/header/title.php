<?php if (empty($GLOBALS['kbModernHeaderAssetsLoaded'])): ?>
<?php $GLOBALS['kbModernHeaderAssetsLoaded'] = true; ?>
<style>
:root {
    --kb-header-bg: #ffffff;
    --kb-header-surface: #ffffff;
    --kb-header-surface-soft: #fbfcff;
    --kb-header-surface-muted: #eef2ff;
    --kb-header-border: rgba(148, 163, 184, 0.18);
    --kb-header-border-strong: rgba(76, 111, 255, 0.20);
    --kb-header-text: #162033;
    --kb-header-text-soft: #52607a;
    --kb-header-text-muted: #76859d;
    --kb-header-primary: #4c6fff;
    --kb-header-primary-dark: #4366f1;
    --kb-header-primary-soft: #eef2ff;
    --kb-header-primary-soft-2: #e7edff;
    --kb-header-accent: #597bf8;
    --kb-header-hover: #f7f9ff;
    --kb-header-shadow-xs: 0 6px 14px rgba(15, 23, 42, 0.05);
    --kb-header-shadow-sm: 0 12px 24px rgba(15, 23, 42, 0.06);
    --kb-header-shadow-md: 0 18px 38px rgba(15, 23, 42, 0.08);
    --kb-header-shadow-lg: 0 24px 52px rgba(15, 23, 42, 0.12);
    --kb-header-radius: 20px;
    --kb-header-radius-sm: 16px;
    --kb-header-radius-pill: 999px;
    --kb-header-hover-gradient: linear-gradient(135deg, #4c6fff 0%, #597bf8 100%);
    --kb-header-soft-gradient: linear-gradient(180deg, #ffffff 0%, #fbfcff 100%);
}

.kb-modern-header-title {
    display: flex;
    align-items: center;
    gap: 14px;
    margin: 0;
    min-height: 54px;
    line-height: 1;
    font-weight: 700;
}

.kb-modern-header-brand {
    flex-shrink: 0;
    display: inline-flex;
    align-items: center;
}

.kb-modern-header-brand a {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    min-width: auto;
    width: auto;
    height: auto;
    padding: 0;
    margin: 0;
    border: 0;
    border-radius: 0;
    background: transparent !important;
    box-shadow: none !important;
    color: inherit;
    text-decoration: none;
    transition: transform 0.18s ease, filter 0.18s ease;
}

.kb-modern-header-brand a:hover {
    transform: translateY(-1px) scale(1.01);
    filter: brightness(1.02);
}

.kb-modern-header-copy {
    display: flex;
    align-items: center;
    gap: 10px;
    min-width: 0;
    flex-wrap: wrap;
}

.kb-modern-header-page-title {
    min-width: 0;
    color: var(--kb-header-text);
    font-size: clamp(1.3rem, 1.6vw, 1.85rem);
    font-weight: 900;
    letter-spacing: -0.03em;
    line-height: 1.18;
}

.kb-modern-header-page-title,
.kb-modern-header-page-title a {
    color: var(--kb-header-text);
    text-decoration: none;
}

.kb-modern-header-page-title a:hover {
    color: var(--kb-header-primary-dark);
}

.kb-modern-header-meta {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    min-height: 32px;
    padding: 0 12px;
    border-radius: var(--kb-header-radius-pill);
    background: var(--kb-header-primary-soft);
    border: 1px solid rgba(76, 111, 255, 0.14);
    color: var(--kb-header-primary-dark);
    font-size: 0.78rem;
    font-weight: 800;
    white-space: nowrap;
    box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.85);
}

.kb-modern-header-meta strong {
    color: var(--kb-header-text);
    font-weight: 900;
}

.kb-modern-header-tooltip {
    display: inline-flex;
    align-items: center;
    justify-content: center;
}

.kb-modern-header-tooltip > * {
    margin: 0 !important;
}

.kb-header-board-shell {
    display: flex;
    align-items: center;
    min-width: 300px;
    max-width: 460px;
    padding: 6px;
    border-radius: 24px;
    background: linear-gradient(180deg, rgba(255, 255, 255, 0.98) 0%, rgba(251, 252, 255, 0.98) 100%);
    border: 1px solid var(--kb-header-border);
    box-shadow: 0 12px 26px rgba(15, 23, 42, 0.05);
    transition: border-color 0.2s ease, box-shadow 0.2s ease, transform 0.2s ease;
}

.kb-header-board-shell:hover,
.kb-header-board-shell:focus-within {
    border-color: rgba(76, 111, 255, 0.18);
    box-shadow: 0 16px 30px rgba(76, 111, 255, 0.10);
}

.kb-header-board-icon {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 46px;
    height: 46px;
    border-radius: 16px;
    background: linear-gradient(180deg, #f0f4ff 0%, #ffffff 100%);
    color: var(--kb-header-primary-dark);
    flex-shrink: 0;
    border: 1px solid rgba(76, 111, 255, 0.12);
    box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.94), 0 8px 16px rgba(76, 111, 255, 0.08);
}

.kb-header-board-icon .fa {
    font-size: 1.05rem;
}

.kb-header-board-field {
    min-width: 0;
    flex: 1 1 auto;
    margin-left: 10px;
    position: relative;
}

.kb-header-board-field input,
.kb-header-board-field select,
.kb-header-board-field .select-dropdown-input,
.kb-header-board-field .js-select-dropdown-input,
.kb-header-board-field .autocomplete-input {
    width: 100%;
    min-height: 46px;
    border: 0 !important;
    background: transparent !important;
    box-shadow: none !important;
    color: var(--kb-header-text) !important;
    font-size: 1rem;
    font-weight: 700;
    padding: 0 42px 0 2px !important;
    line-height: 46px;
}

.kb-header-board-field input::placeholder,
.kb-header-board-field .select-dropdown-input::placeholder,
.kb-header-board-field .js-select-dropdown-input::placeholder,
.kb-header-board-field .autocomplete-input::placeholder {
    color: #94a3b8 !important;
    font-weight: 500;
}

.kb-header-board-field .select-dropdown,
.kb-header-board-field .select-dropdown-input-container,
.kb-header-board-field .autocomplete,
.kb-header-board-field .js-select-dropdown-autocomplete {
    width: 100%;
    position: relative;
}

.kb-header-board-field .select-dropdown-input-container::after,
.kb-header-board-field .autocomplete::after,
.kb-header-board-field .js-select-dropdown-autocomplete::after {
    content: "\f078";
    font-family: "FontAwesome";
    position: absolute;
    top: 50%;
    right: 8px;
    transform: translateY(-50%);
    color: var(--kb-header-text-muted);
    font-size: 0.92rem;
    pointer-events: none;
    transition: color 0.2s ease, transform 0.2s ease;
}

.kb-header-board-shell:focus-within .select-dropdown-input-container::after,
.kb-header-board-shell:focus-within .autocomplete::after,
.kb-header-board-shell:focus-within .js-select-dropdown-autocomplete::after {
    color: var(--kb-header-primary-dark);
    transform: translateY(-50%) rotate(180deg);
}

.kb-header-board-field .dropdown-menu,
.kb-header-board-field .autocomplete-results,
.kb-header-board-field .select-dropdown-results,
.kb-header-board-field ul {
    margin-top: 10px !important;
    padding: 8px !important;
    border-radius: 18px !important;
    border: 1px solid var(--kb-header-border) !important;
    box-shadow: var(--kb-header-shadow-lg) !important;
    background: linear-gradient(180deg, rgba(255, 255, 255, 0.99) 0%, rgba(247, 250, 255, 0.98) 100%) !important;
    backdrop-filter: blur(10px);
    overflow: hidden;
    min-width: 100%;
}

.kb-header-board-field .autocomplete-results li,
.kb-header-board-field .select-dropdown-results li,
.kb-header-board-field ul li {
    list-style: none;
    margin: 0;
    padding: 0;
}

.kb-header-board-field .autocomplete-results li a,
.kb-header-board-field .autocomplete-results li span,
.kb-header-board-field .select-dropdown-results li a,
.kb-header-board-field .select-dropdown-results li span,
.kb-header-board-field ul li a,
.kb-header-board-field ul li span {
    display: flex;
    align-items: center;
    width: 100%;
    min-height: 48px;
    padding: 0 16px;
    border-radius: 12px;
    color: var(--kb-header-text-soft) !important;
    font-size: 0.96rem;
    font-weight: 700;
    line-height: 1.4;
    text-decoration: none !important;
    background: transparent;
    transition: background 0.18s ease, color 0.18s ease, transform 0.18s ease, box-shadow 0.18s ease;
    box-sizing: border-box;
}

.kb-header-board-field .autocomplete-results li a:hover,
.kb-header-board-field .autocomplete-results li span:hover,
.kb-header-board-field .select-dropdown-results li a:hover,
.kb-header-board-field .select-dropdown-results li span:hover,
.kb-header-board-field ul li a:hover,
.kb-header-board-field ul li span:hover,
.kb-header-board-field .autocomplete-results li.active a,
.kb-header-board-field .autocomplete-results li.active span,
.kb-header-board-field .select-dropdown-results li.active a,
.kb-header-board-field .select-dropdown-results li.active span,
.kb-header-board-field ul li.active a,
.kb-header-board-field ul li.active span,
.kb-header-board-field .autocomplete-results li.ui-state-focus a,
.kb-header-board-field .autocomplete-results li.ui-state-focus span,
.kb-header-board-field .select-dropdown-results li.ui-state-focus a,
.kb-header-board-field .select-dropdown-results li.ui-state-focus span {
    color: #ffffff !important;
    background: var(--kb-header-hover-gradient) !important;
    box-shadow: 0 16px 30px rgba(0, 17, 255, 0.18);
    transform: translateX(2px);
}

.kb-header-board-field .autocomplete-results .selected a,
.kb-header-board-field .autocomplete-results .selected span,
.kb-header-board-field .select-dropdown-results .selected a,
.kb-header-board-field .select-dropdown-results .selected span,
.kb-header-board-field ul .selected a,
.kb-header-board-field ul .selected span {
    color: #ffffff !important;
    background: var(--kb-header-hover-gradient) !important;
}

.kb-header-action-trigger {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    min-width: 46px;
    height: 46px;
    padding: 0 15px;
    border-radius: 18px;
    border: 1px solid var(--kb-header-border);
    background: linear-gradient(180deg, #ffffff 0%, #fbfcff 100%);
    color: var(--kb-header-text);
    text-decoration: none;
    box-shadow: 0 10px 22px rgba(15, 23, 42, 0.05);
    transition: transform 0.18s ease, box-shadow 0.18s ease, border-color 0.18s ease, background-color 0.18s ease, color 0.18s ease;
}

.kb-header-action-trigger:hover,
.kb-header-action-trigger:focus {
    color: var(--kb-header-primary-dark);
    border-color: rgba(76, 111, 255, 0.18);
    background: linear-gradient(180deg, #fbfdff 0%, #f1f5ff 100%);
    box-shadow: 0 14px 28px rgba(76, 111, 255, 0.10);
    transform: translateY(-1px);
    text-decoration: none;
}

.kb-header-action-trigger:hover .fa,
.kb-header-action-trigger:focus .fa,
.kb-header-action-trigger:hover .kb-header-caret,
.kb-header-action-trigger:focus .kb-header-caret {
    color: currentColor;
}

.kb-header-menu.active > .kb-header-action-trigger,
.kb-header-menu.open > .kb-header-action-trigger,
.kb-header-menu:focus-within > .kb-header-action-trigger,
.kb-header-action-trigger[aria-expanded="true"],
.kb-header-action-trigger.active-dropdown-menu {
    color: var(--kb-header-primary-dark);
    border-color: rgba(76, 111, 255, 0.18);
    background: linear-gradient(180deg, #fbfdff 0%, #f1f5ff 100%);
    box-shadow: 0 14px 28px rgba(76, 111, 255, 0.10);
    text-decoration: none;
}

.kb-header-menu.active > .kb-header-action-trigger .fa,
.kb-header-menu.open > .kb-header-action-trigger .fa,
.kb-header-menu:focus-within > .kb-header-action-trigger .fa,
.kb-header-action-trigger[aria-expanded="true"] .fa,
.kb-header-action-trigger.active-dropdown-menu .fa,
.kb-header-menu.active > .kb-header-action-trigger .kb-header-caret,
.kb-header-menu.open > .kb-header-action-trigger .kb-header-caret,
.kb-header-menu:focus-within > .kb-header-action-trigger .kb-header-caret,
.kb-header-action-trigger[aria-expanded="true"] .kb-header-caret,
.kb-header-action-trigger.active-dropdown-menu .kb-header-caret {
    color: currentColor;
}

.kb-header-action-trigger .fa {
    font-size: 0.95rem;
    transition: color 0.18s ease;
}

.kb-header-action-trigger .kb-header-caret {
    font-size: 0.78rem;
    opacity: 0.82;
    transition: color 0.18s ease;
}

.kb-header-plus-trigger {
    padding: 0 16px;
    font-weight: 800;
}

.kb-header-create-menu > .kb-header-action-trigger,
.kb-header-create-menu > .active-dropdown-menu {
    background: linear-gradient(180deg, #ffffff 0%, #fbfcff 100%);
    border-color: var(--kb-header-border);
    color: var(--kb-header-text);
    box-shadow: 0 10px 22px rgba(15, 23, 42, 0.05);
}

.kb-header-notification-wrap {
    position: relative;
    display: inline-flex;
    align-items: center;
}

.kb-header-notification-wrap .kb-header-action-trigger {
    width: 46px;
    min-width: 46px;
    padding: 0;
}

.kb-header-notification-wrap .web-notification-icon {
    color: var(--kb-header-text);
}

.kb-header-notification-dot {
    position: absolute;
    top: 4px;
    right: 4px;
    width: 10px;
    height: 10px;
    border-radius: 999px;
    background: #ef4444;
    border: 2px solid #ffffff;
    box-shadow: 0 0 0 3px rgba(239, 68, 68, 0.12);
    z-index: 2;
}

.kb-header-menu.dropdown {
    position: relative;
}

.kb-header-menu > ul {
    min-width: 280px;
    margin-top: 12px;
    padding: 10px;
    border-radius: 20px;
    border: 1px solid var(--kb-header-border);
    background: rgba(255, 255, 255, 0.98);
    backdrop-filter: blur(10px);
    box-shadow: var(--kb-header-shadow-lg);
}

.kb-header-menu > ul li {
    list-style: none;
}

.kb-header-menu > ul li + li {
    margin-top: 4px;
}

.kb-header-menu > ul li a,
.kb-header-menu > ul li button {
    display: flex;
    align-items: center;
    gap: 10px;
    min-height: 46px;
    padding: 10px 14px;
    border-radius: 14px;
    color: var(--kb-header-text);
    font-size: 0.95rem;
    font-weight: 700;
    text-decoration: none;
    transition: background 0.18s ease, color 0.18s ease, transform 0.18s ease, box-shadow 0.18s ease;
}

.kb-header-menu > ul li a:hover,
.kb-header-menu > ul li button:hover {
    background: var(--kb-header-hover-gradient);
    color: #ffffff;
    text-decoration: none;
    transform: translateX(2px);
    box-shadow: 0 14px 26px rgba(0, 17, 255, 0.16);
}

.kb-header-menu > ul li .fa {
    width: 16px;
    text-align: center;
    color: var(--kb-header-text-muted);
    transition: color 0.18s ease;
}

.kb-header-menu > ul li a:hover .fa,
.kb-header-menu > ul li button:hover .fa {
    color: #ffffff;
}

.kb-header-menu > ul .no-hover,
.kb-header-menu > ul .kb-header-user-summary {
    padding: 12px 14px 14px;
    border-radius: 14px;
    background: var(--kb-header-soft-gradient);
    border: 1px solid var(--kb-header-border);
}

.kb-header-user-name {
    margin: 0;
    color: var(--kb-header-text);
    font-size: 0.98rem;
    font-weight: 900;
    line-height: 1.3;
}

.kb-header-user-role {
    margin-top: 4px;
    color: var(--kb-header-text-soft);
    font-size: 0.82rem;
    font-weight: 700;
    line-height: 1.4;
}

.kb-header-menu-divider {
    height: 1px;
    margin: 8px 2px;
    background: var(--kb-header-border);
    border: 0;
}

.kb-header-avatar-trigger .avatar-inline,
.kb-header-avatar-trigger img,
.kb-header-avatar-trigger .avatar {
    width: 28px;
    height: 28px;
    border-radius: 999px;
}


.kb-header-create-menu > ul {
    min-width: 240px;
}

.kb-header-user-menu > ul {
    min-width: 300px;
}

.kb-header-bell-wrap.is-unread .kb-header-action-trigger {
    border-color: rgba(0, 17, 255, 0.18);
    box-shadow: 0 14px 28px rgba(0, 17, 255, 0.12);
}

.kb-header-logo-image {
    display: block;
    max-height: 50px;
    width: auto;
    object-fit: contain;
    border: 1.5px solid rgba(76, 111, 255, 0.24);
    border-radius: 18px;
    background: transparent;
    box-shadow:
        0 0 0 1px rgba(76, 111, 255, 0.06),
        0 0 12px rgba(76, 111, 255, 0.10),
        0 8px 18px rgba(76, 111, 255, 0.08);
    transition: border-color 0.18s ease, box-shadow 0.18s ease, transform 0.18s ease;
}

.kb-modern-header-brand a:hover .kb-header-logo-image {
    border-color: rgba(76, 111, 255, 0.34);
    box-shadow:
        0 0 0 1px rgba(76, 111, 255, 0.10),
        0 0 16px rgba(76, 111, 255, 0.12),
        0 10px 22px rgba(76, 111, 255, 0.12);
}


.kb-header-menu > ul li a .fa:first-child,
.kb-header-menu > ul li button .fa:first-child {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 28px;
    height: 28px;
    border-radius: 10px;
    background: linear-gradient(180deg, #eef4ff 0%, #ffffff 100%);
    border: 1px solid rgba(0, 17, 255, 0.10);
    color: var(--kb-header-primary-dark);
    box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.95);
    padding-right: 0;
    flex-shrink: 0;
}

.kb-header-menu > ul li a:hover .fa:first-child,
.kb-header-menu > ul li button:hover .fa:first-child {
    background: rgba(255, 255, 255, 0.14);
    border-color: rgba(255, 255, 255, 0.18);
}

.kb-header-menu > ul .kb-header-user-summary {
    background: linear-gradient(180deg, #ffffff 0%, #f4f8ff 100%);
    box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.95);
}

.kb-header-user-role {
    color: var(--kb-header-primary-dark);
}

.kb-header-notification-dot {
    background: linear-gradient(180deg, #ff4d6d 0%, #ef4444 100%);
}

.kb-modern-header-tooltip .tooltip,
.kb-modern-header-tooltip a {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 28px;
    height: 28px;
    border-radius: 999px;
    border: 1px solid var(--kb-header-border);
    background: rgba(255, 255, 255, 0.92);
    color: var(--kb-header-text-muted);
    box-shadow: 0 6px 14px rgba(15, 23, 42, 0.04);
}

.kb-modern-header-tooltip .tooltip:hover,
.kb-modern-header-tooltip a:hover {
    color: var(--kb-header-primary-dark);
    border-color: rgba(76, 111, 255, 0.16);
    background: #f7f9ff;
}

@media (max-width: 991.98px) {
    .kb-modern-header-title {
        flex-wrap: wrap;
        gap: 10px;
        align-items: flex-start;
    }

    .kb-header-board-shell {
        min-width: 220px;
        max-width: 100%;
    }
}

@media (max-width: 767.98px) {
    .kb-modern-header-page-title {
        font-size: 1.15rem;
    }

    .kb-header-board-shell {
        min-width: 100%;
    }

    .kb-header-menu > ul {
        min-width: 220px;
    }
}
</style>
<?php endif; ?>

<h1 class="kb-modern-header-title">
   <span class="kb-modern-header-brand">
    <a href="<?= $this->url->href('DashboardController', 'show') ?>" title="<?= t('Dashboard') ?>">
        <img src="<?= $this->url->dir() ?>plugins/ModernTheme/Assets/logo.png" alt="Logo" class="kb-header-logo-image">
    </a>
</span>

    <span class="kb-modern-header-copy">
        <span class="kb-modern-header-page-title">
            <?php if (! empty($project) && ! empty($task)): ?>
                <?= $this->url->link($this->text->e($project['name']), 'BoardViewController', 'show', array('project_id' => $project['id'])) ?>
            <?php else: ?>
                <?= $this->text->e($title) ?>
            <?php endif ?>
        </span>

        <?php if (! empty($project) && $project['task_limit'] && array_key_exists('nb_active_tasks', $project)): ?>
            <span class="kb-modern-header-meta">
                <span><?= t('Tasks') ?></span>
                <strong><?= intval($project['nb_active_tasks']) ?></strong>
                <span>/</span>
                <strong title="<?= t('Task limit') ?>"><?= $this->text->e($project['task_limit']) ?></strong>
            </span>
        <?php endif; ?>

        <?php if (! empty($description)): ?>
            <span class="kb-modern-header-tooltip">
                <?= $this->app->tooltipHTML($description) ?>
            </span>
        <?php endif; ?>
    </span>
</h1>
