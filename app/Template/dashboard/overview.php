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
.kb-overview-page {
    --kb-primary: #3b82f6;
    --kb-primary-dark: #1d4ed8;
    --kb-primary-soft: #eaf0ff;
    --kb-primary-soft-2: #f3f7ff;

    --kb-accent-indigo: #2563eb;
    --kb-accent-violet: #1d4ed8;
    --kb-accent-fuchsia: #3b82f6;
    --kb-accent-sky: #60a5fa;
    --kb-accent-emerald: #38bdf8;

    --kb-border: #dce6ff;
    --kb-border-strong: #c4d5ff;
    --kb-surface: #ffffff;
    --kb-surface-muted: #f6f9ff;
    --kb-surface-soft: #fbfdff;
    --kb-text: #0f172a;
    --kb-text-soft: #475569;
    --kb-text-muted: #64748b;
    --kb-success: #16a34a;

    --kb-gradient-primary: linear-gradient(135deg, #1d4ed8 0%, #3b82f6 100%);
    --kb-gradient-soft: linear-gradient(180deg, #ffffff 0%, #f6f9ff 52%, #eef4ff 100%);
    --kb-gradient-chip: linear-gradient(135deg, rgba(0, 11, 166, 0.10) 0%, rgba(0, 17, 255, 0.14) 100%);
    --kb-gradient-line: linear-gradient(180deg, #1d4ed8 0%, #60a5fa 100%);
    --kb-gradient-metric-1: linear-gradient(135deg, rgba(0, 11, 166, 0.10) 0%, rgba(29, 78, 216, 0.06) 100%);
    --kb-gradient-metric-2: linear-gradient(135deg, rgba(0, 17, 255, 0.10) 0%, rgba(59, 130, 246, 0.06) 100%);
    --kb-gradient-pill: linear-gradient(135deg, #f4f8ff 0%, #edf4ff 100%);

    --kb-shadow-xs: 0 4px 12px rgba(15, 23, 42, 0.04);
    --kb-shadow-sm: 0 10px 24px rgba(15, 23, 42, 0.06);
    --kb-shadow-md: 0 18px 42px rgba(15, 23, 42, 0.08);
    --kb-shadow-lg: 0 24px 60px rgba(15, 23, 42, 0.10);
    --kb-shadow-purple: 0 18px 36px rgba(0, 17, 255, 0.14);

    --kb-radius-xl: 24px;
    --kb-radius-lg: 18px;
    --kb-radius-md: 14px;
    --kb-radius-pill: 999px;

    width: 100%;
    max-width: 100%;
    min-width: 0;
    align-self: stretch;
    display: flex;
    flex-direction: column;
    gap: 24px;
    padding: 6px 0 12px;
}

.kb-overview-page * {
    box-sizing: border-box;
}

.kb-overview-page .kb-page-head {
    display: flex;
    align-items: flex-end;
    justify-content: space-between;
    gap: 18px;
    padding: 6px 2px 0;
}

.kb-overview-page .kb-page-eyebrow {
    margin: 0 0 8px;
    color: var(--kb-primary-dark);
    font-size: 0.78rem;
    font-weight: 800;
    letter-spacing: 0.1em;
    text-transform: uppercase;
}

.kb-overview-page .kb-page-title {
    margin: 0;
    color: var(--kb-text);
    font-size: clamp(1.8rem, 2.6vw, 2.4rem);
    line-height: 1.08;
    font-weight: 900;
    letter-spacing: -0.04em;
}

.kb-overview-page .kb-page-copy {
    max-width: 760px;
    margin: 10px 0 0;
    color: var(--kb-text-soft);
    font-size: 0.98rem;
    line-height: 1.75;
}

.kb-overview-page .kb-page-chip {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    min-height: 42px;
    padding: 0 16px;
    border: 1px solid rgba(0, 17, 255, 0.14);
    border-radius: var(--kb-radius-pill);
    background:
        var(--kb-gradient-chip),
        linear-gradient(180deg, #ffffff 0%, #f5f9ff 100%);
    color: var(--kb-primary-dark);
    font-size: 0.84rem;
    font-weight: 800;
    white-space: nowrap;
    box-shadow: var(--kb-shadow-sm);
}

.kb-overview-page .kb-summary-grid {
    display: grid;
    grid-template-columns: repeat(2, minmax(0, 1fr));
    gap: 18px;
}

.kb-overview-page .kb-metric-card {
    position: relative;
    overflow: hidden;
    padding: 20px 20px 18px;
    border: 1px solid var(--kb-border);
    border-radius: 20px;
    background: var(--kb-gradient-soft);
    box-shadow: var(--kb-shadow-sm);
}

.kb-overview-page .kb-metric-card:nth-child(1) {
    background:
        var(--kb-gradient-metric-1),
        linear-gradient(180deg, #ffffff 0%, #fbfdff 100%);
}

.kb-overview-page .kb-metric-card:nth-child(2) {
    background:
        var(--kb-gradient-metric-2),
        linear-gradient(180deg, #ffffff 0%, #fbfdff 100%);
}

.kb-overview-page .kb-metric-card::before {
    content: "";
    position: absolute;
    inset: 0 auto 0 0;
    width: 5px;
    background: var(--kb-gradient-line);
}

.kb-overview-page .kb-metric-card::after {
    content: "";
    position: absolute;
    right: -40px;
    top: -40px;
    width: 140px;
    height: 140px;
    border-radius: 999px;
    background: radial-gradient(circle, rgba(0, 17, 255, 0.10) 0%, rgba(0, 17, 255, 0) 72%);
    pointer-events: none;
}

.kb-overview-page .kb-metric-top {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 12px;
}

.kb-overview-page .kb-metric-label {
    color: var(--kb-text-muted);
    font-size: 0.84rem;
    font-weight: 800;
    letter-spacing: 0.01em;
}

.kb-overview-page .kb-metric-bullet {
    width: 11px;
    height: 11px;
    border-radius: 999px;
    background: var(--kb-gradient-primary);
    box-shadow: 0 0 0 7px rgba(0, 17, 255, 0.10);
}

.kb-overview-page .kb-metric-value {
    margin-top: 16px;
    color: var(--kb-text);
    font-size: clamp(1.9rem, 2.2vw, 2.3rem);
    line-height: 1;
    font-weight: 900;
    letter-spacing: -0.04em;
}

.kb-overview-page .kb-metric-note {
    margin-top: 10px;
    color: var(--kb-text-soft);
    font-size: 0.86rem;
    font-weight: 700;
}

.kb-overview-page .kb-card {
    border: 1px solid var(--kb-border);
    border-radius: var(--kb-radius-xl);
    background: var(--kb-surface);
    box-shadow: var(--kb-shadow-md);
}

.kb-overview-page .kb-card-body {
    padding: 20px 22px;
}

.kb-overview-page .kb-header-card {
    padding: 18px 22px;
    background: var(--kb-gradient-soft);
}

.kb-overview-page .kb-table-card {
    overflow: hidden;
    background: var(--kb-gradient-soft);
}

.kb-overview-page .kb-search-shell {
    border: 1px solid var(--kb-border);
    border-radius: 20px;
    background: linear-gradient(180deg, #ffffff 0%, #fbfdff 100%);
    box-shadow:
        inset 0 1px 0 rgba(255,255,255,0.95),
        0 8px 20px rgba(15, 23, 42, 0.03);
    transition: border-color 0.18s ease, box-shadow 0.18s ease, transform 0.18s ease;
}

.kb-overview-page .kb-search-shell:hover {
    border-color: rgba(0, 17, 255, 0.18);
    box-shadow:
        inset 0 1px 0 rgba(255,255,255,0.95),
        0 14px 28px rgba(0, 17, 255, 0.05);
}

.kb-overview-page .kb-search-shell:focus-within {
    border-color: rgba(0, 17, 255, 0.34);
    box-shadow:
        0 0 0 4px rgba(0, 17, 255, 0.07),
        0 14px 30px rgba(0, 17, 255, 0.08);
}

.kb-overview-page .kb-search-row {
    display: flex;
    align-items: center;
    min-height: 66px;
}

.kb-overview-page .kb-search-icon {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 56px;
    min-width: 56px;
    color: var(--kb-primary-dark);
    font-size: 1rem;
}

.kb-overview-page .kb-search-input {
    flex: 1 1 auto;
    min-width: 0;
    height: 66px;
    border: 0;
    outline: 0;
    background: transparent;
    color: var(--kb-text);
    font-size: 1rem;
    font-weight: 700;
    box-shadow: none !important;
    padding: 0 6px 0 0;
}

.kb-overview-page .kb-search-input::placeholder {
    color: #94a3b8;
    font-weight: 500;
}

.kb-overview-page .kb-search-tools {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    min-height: 66px;
    padding: 0 16px 0 10px;
    border-left: 1px solid #edf2ff;
    color: var(--kb-text-soft);
}

.kb-overview-page .kb-search-tools > * {
    margin-bottom: 0 !important;
}

.kb-overview-page .kb-section-block {
    display: flex;
    flex-direction: column;
    gap: 14px;
}

.kb-overview-page .kb-section-head {
    display: flex;
    align-items: flex-end;
    justify-content: space-between;
    gap: 16px;
    padding: 2px 2px 0;
}

.kb-overview-page .kb-section-overline {
    margin: 0 0 6px;
    background: linear-gradient(135deg, #1d4ed8 0%, #3b82f6 100%);
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent;
    font-size: 0.76rem;
    font-weight: 900;
    letter-spacing: 0.1em;
    text-transform: uppercase;
}

.kb-overview-page .kb-section-title {
    margin: 0;
    color: var(--kb-text);
    font-size: 1.4rem;
    font-weight: 900;
    letter-spacing: -0.03em;
    line-height: 1.2;
}

.kb-overview-page .kb-section-title a {
    color: inherit;
    text-decoration: none;
}

.kb-overview-page .kb-section-title a:hover {
    color: var(--kb-primary-dark);
}

.kb-overview-page .kb-section-subtitle {
    margin: 8px 0 0;
    color: var(--kb-text-soft);
    font-size: 0.93rem;
    line-height: 1.7;
}

.kb-overview-page .kb-list-stack.table-list {
    display: flex;
    flex-direction: column;
    gap: 16px;
    background: transparent;
    border: 0;
    box-shadow: none;
    margin-bottom: 0;
    padding: 18px;
}

.kb-overview-page .table-list-row {
    position: relative;
    overflow: hidden;
    border: 1px solid var(--kb-border);
    border-left: 0 !important;
    border-radius: 20px;
    background: linear-gradient(180deg, #ffffff 0%, #fcfdff 100%);
    box-shadow: var(--kb-shadow-sm);
    transition: transform 0.18s ease, box-shadow 0.18s ease, border-color 0.18s ease;
}

.kb-overview-page .table-list-row::before {
    content: "";
    position: absolute;
    inset: 0 auto 0 0;
    width: 5px;
    background: var(--kb-gradient-line);
}

.kb-overview-page .table-list-row:hover {
    transform: translateY(-2px);
    border-color: rgba(0, 17, 255, 0.18);
    box-shadow: 0 18px 34px rgba(0, 17, 255, 0.10);
}

.kb-overview-page .kb-project-content,
.kb-overview-page .kb-task-content {
    padding: 20px 20px 20px 24px;
}

.kb-overview-page .kb-project-content {
    display: flex;
    flex-direction: column;
    gap: 16px;
}

.kb-overview-page .kb-project-layout {
    display: flex;
    align-items: flex-start;
    justify-content: space-between;
    gap: 20px;
}

.kb-overview-page .kb-project-main {
    min-width: 0;
    flex: 1 1 auto;
}

.kb-overview-page .kb-project-top {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    gap: 10px;
}

.kb-overview-page .kb-project-id {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    min-height: 32px;
    padding: 0 12px;
    border: 1px solid #dbe6ff;
    border-radius: 999px;
    background: var(--kb-gradient-pill);
    color: var(--kb-text-soft);
    font-size: 0.82rem;
    font-weight: 800;
}

.kb-overview-page .kb-project-title,
.kb-overview-page .kb-project-title a {
    color: var(--kb-text);
    font-size: 1.08rem;
    line-height: 1.4;
    font-weight: 900;
    text-decoration: none;
    letter-spacing: -0.02em;
}

.kb-overview-page .kb-project-title a:hover {
    color: var(--kb-primary-dark);
}

.kb-overview-page .kb-private-badge {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    min-height: 32px;
    padding: 0 12px;
    border: 1px solid rgba(0, 17, 255, 0.14);
    border-radius: 999px;
    background: linear-gradient(135deg, #eef4ff 0%, #f5f9ff 100%);
    color: #1d4ed8;
    font-size: 0.78rem;
    font-weight: 800;
}

.kb-overview-page .kb-column-grid {
    display: flex;
    flex-wrap: wrap;
    justify-content: flex-end;
    gap: 10px;
}

.kb-overview-page .kb-column-pill {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    min-height: 38px;
    padding: 0 13px;
    border: 1px solid #dee8ff;
    border-radius: 999px;
    background: linear-gradient(135deg, #f7faff 0%, #edf4ff 100%);
    box-shadow: inset 0 1px 0 rgba(255,255,255,0.8);
    transition: transform 0.16s ease, border-color 0.16s ease, box-shadow 0.16s ease;
}

.kb-overview-page .kb-column-pill:hover {
    transform: translateY(-1px);
    border-color: rgba(0, 17, 255, 0.18);
    box-shadow: 0 10px 22px rgba(0, 17, 255, 0.08);
}

.kb-overview-page .kb-column-count {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    min-width: 26px;
    height: 26px;
    padding: 0 6px;
    border-radius: 999px;
    background: var(--kb-gradient-primary);
    color: #ffffff;
    font-size: 0.76rem;
    font-weight: 900;
    box-shadow: 0 8px 18px rgba(0, 17, 255, 0.18);
}

.kb-overview-page .kb-column-name {
    color: var(--kb-text-soft);
    font-size: 0.82rem;
    font-weight: 800;
    white-space: nowrap;
}

.kb-overview-page .kb-task-content {
    display: grid;
    grid-template-columns: minmax(0, 1.2fr) minmax(290px, 1fr);
    gap: 18px;
    align-items: start;
}

.kb-overview-page .kb-task-side {
    display: grid;
    gap: 12px;
}

.kb-overview-page .kb-task-side > * {
    min-width: 0;
    margin-top: 0 !important;
    padding: 13px 15px;
    border: 1px solid #e6eeff;
    border-radius: 15px;
    background: linear-gradient(180deg, #ffffff 0%, #fbfdff 100%);
}

.kb-overview-page .kb-empty-state {
    padding: 36px 26px;
    text-align: center;
    border: 1px dashed #cfe0ff;
    border-radius: 24px;
    background: var(--kb-gradient-soft);
    box-shadow: var(--kb-shadow-sm);
}

.kb-overview-page .kb-empty-state-icon {
    width: 72px;
    height: 72px;
    margin: 0 auto 16px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    border-radius: 999px;
    background: linear-gradient(135deg, #eef4ff 0%, #dbe8ff 55%, #f4f8ff 100%);
    color: var(--kb-primary-dark);
    font-size: 1.4rem;
    box-shadow:
        inset 0 1px 0 rgba(255,255,255,0.8),
        0 16px 28px rgba(0, 17, 255, 0.08);
}

.kb-overview-page .kb-empty-state h2 {
    margin: 0 0 8px;
    color: var(--kb-text);
    font-size: 1.34rem;
    font-weight: 900;
    letter-spacing: -0.02em;
}

.kb-overview-page .kb-empty-state p {
    margin: 0;
    color: var(--kb-text-soft);
    font-size: 0.95rem;
    line-height: 1.7;
}

.kb-overview-page .kb-pagination {
    margin-top: 4px;
}

.kb-overview-page .kb-pagination a,
.kb-overview-page .kb-pagination span {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    min-width: 40px;
    min-height: 40px;
    margin-right: 6px;
    margin-bottom: 6px;
    padding: 0 14px;
    border: 1px solid var(--kb-border);
    border-radius: 999px;
    background: #ffffff;
    color: var(--kb-text-soft);
    font-size: 0.88rem;
    font-weight: 800;
    text-decoration: none;
    box-shadow: var(--kb-shadow-xs);
}

.kb-overview-page .kb-pagination a:hover {
    color: var(--kb-primary-dark);
    border-color: #cbdcff;
    background: linear-gradient(135deg, #f7faff 0%, #edf4ff 100%);
}

.kb-overview-page .kb-pagination .active,
.kb-overview-page .kb-pagination .current {
    border-color: var(--kb-primary);
    background: var(--kb-gradient-primary);
    color: #ffffff;
    box-shadow: 0 12px 24px rgba(0, 17, 255, 0.22);
}

/* Make default inner task/project elements cleaner */
.kb-overview-page .task-board,
.kb-overview-page .table-list-row .task-title,
.kb-overview-page .table-list-row .task-title a,
.kb-overview-page .table-list-row .task-meta,
.kb-overview-page .table-list-row .task-assignee,
.kb-overview-page .table-list-row .task-date,
.kb-overview-page .table-list-row .task-icons {
    color: inherit;
}

.kb-overview-page .task-title,
.kb-overview-page .task-title a {
    color: var(--kb-text) !important;
    font-weight: 800;
    line-height: 1.5;
    text-decoration: none;
}

.kb-overview-page .task-title a:hover {
    color: var(--kb-primary-dark) !important;
}

.kb-overview-page .task-icons,
.kb-overview-page .task-meta,
.kb-overview-page .task-date {
    color: var(--kb-text-soft);
}

.kb-overview-page .dropdown,
.kb-overview-page .project-dropdown {
    position: relative;
    z-index: 2;
}



/* Overview width + toolbar alignment */
.kb-overview-page,
.kb-overview-page.kb-page-shell {
    width: 100%;
    max-width: 100%;
}

.kb-overview-page .kb-card > .kb-header-card > * {
    width: 100%;
    max-width: 100%;
}

.kb-overview-page .kb-header-card .table-list-header,
.kb-overview-page .kb-header-card .task-board-header,
.kb-overview-page .kb-header-card .project-list-header,
.kb-overview-page .kb-header-card .task-list-header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 12px 16px;
    flex-wrap: wrap;
}

.kb-overview-page .kb-header-card .table-list-header > *,
.kb-overview-page .kb-header-card .task-board-header > *,
.kb-overview-page .kb-header-card .project-list-header > *,
.kb-overview-page .kb-header-card .task-list-header > * {
    min-width: 0;
}

/* Modern dropdown trigger */
.kb-overview-page .project-dropdown,
.kb-overview-page .dropdown {
    position: relative;
    z-index: 5;
}

.kb-overview-page .project-dropdown > a,
.kb-overview-page .dropdown > a,
.kb-overview-page .project-dropdown .dropdown-menu-link-icon,
.kb-overview-page .dropdown .dropdown-menu-link-icon,
.kb-overview-page .kb-header-card .dropdown > a,
.kb-overview-page .kb-header-card .dropdown .dropdown-menu-link-icon {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    min-height: 40px;
    padding: 0 14px;
    border: 1px solid #d8e3ff;
    border-radius: 12px;
    background: #ffffff;
    color: #334155;
    text-decoration: none;
    font-size: 0.86rem;
    font-weight: 800;
    line-height: 1;
    box-shadow: 0 8px 18px rgba(15, 23, 42, 0.05);
    transition: border-color 0.18s ease, box-shadow 0.18s ease, background-color 0.18s ease, color 0.18s ease, transform 0.18s ease;
}

.kb-overview-page .project-dropdown > a:hover,
.kb-overview-page .dropdown > a:hover,
.kb-overview-page .project-dropdown .dropdown-menu-link-icon:hover,
.kb-overview-page .dropdown .dropdown-menu-link-icon:hover,
.kb-overview-page .project-dropdown.open > a,
.kb-overview-page .dropdown.open > a,
.kb-overview-page .project-dropdown .dropdown-menu-link-icon:focus,
.kb-overview-page .dropdown .dropdown-menu-link-icon:focus {
    border-color: #b8cbff;
    background: #f8fbff;
    color: var(--kb-primary-dark);
    box-shadow: 0 14px 28px rgba(0, 17, 255, 0.10);
    transform: translateY(-1px);
}

.kb-overview-page .project-dropdown > a strong,
.kb-overview-page .dropdown > a strong,
.kb-overview-page .project-dropdown .dropdown-menu-link-icon strong,
.kb-overview-page .dropdown .dropdown-menu-link-icon strong {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    font-weight: 800;
}

.kb-overview-page .project-dropdown > a .fa-caret-down,
.kb-overview-page .dropdown > a .fa-caret-down,
.kb-overview-page .project-dropdown .dropdown-menu-link-icon .fa-caret-down,
.kb-overview-page .dropdown .dropdown-menu-link-icon .fa-caret-down {
    color: #94a3b8;
    font-size: 0.84rem;
    transition: transform 0.18s ease, color 0.18s ease;
}

.kb-overview-page .project-dropdown:hover > a .fa-caret-down,
.kb-overview-page .dropdown:hover > a .fa-caret-down,
.kb-overview-page .project-dropdown.open > a .fa-caret-down,
.kb-overview-page .dropdown.open > a .fa-caret-down,
.kb-overview-page .project-dropdown .dropdown-menu-link-icon:hover .fa-caret-down,
.kb-overview-page .dropdown .dropdown-menu-link-icon:hover .fa-caret-down {
    color: var(--kb-primary-dark);
    transform: translateY(1px);
}

/* Modern dropdown menu */
.kb-overview-page .project-dropdown > ul,
.kb-overview-page .dropdown > ul,
.kb-overview-page .project-dropdown .dropdown-menu,
.kb-overview-page .dropdown .dropdown-menu {
    min-width: 240px;
    margin-top: 10px;
    padding: 8px;
    border: 1px solid #dbe5ff;
    border-radius: 16px;
    background: #ffffff;
    box-shadow: 0 24px 44px rgba(15, 23, 42, 0.16);
}

.kb-overview-page .project-dropdown > ul li,
.kb-overview-page .dropdown > ul li,
.kb-overview-page .project-dropdown .dropdown-menu li,
.kb-overview-page .dropdown .dropdown-menu li {
    margin: 0;
    list-style: none;
}

.kb-overview-page .project-dropdown > ul li + li,
.kb-overview-page .dropdown > ul li + li,
.kb-overview-page .project-dropdown .dropdown-menu li + li,
.kb-overview-page .dropdown .dropdown-menu li + li {
    margin-top: 4px;
}

.kb-overview-page .project-dropdown > ul a,
.kb-overview-page .dropdown > ul a,
.kb-overview-page .project-dropdown .dropdown-menu a,
.kb-overview-page .dropdown .dropdown-menu a,
.kb-overview-page .project-dropdown > ul .dropdown-menu-link-icon,
.kb-overview-page .dropdown > ul .dropdown-menu-link-icon,
.kb-overview-page .project-dropdown .dropdown-menu .dropdown-menu-link-icon,
.kb-overview-page .dropdown .dropdown-menu .dropdown-menu-link-icon {
    display: flex;
    align-items: center;
    gap: 10px;
    min-height: 42px;
    padding: 10px 12px;
    border: 1px solid transparent;
    border-radius: 12px;
    background: transparent;
    color: #334155;
    text-decoration: none;
    font-size: 0.9rem;
    font-weight: 700;
    line-height: 1.35;
    box-shadow: none;
}

.kb-overview-page .project-dropdown > ul a:hover,
.kb-overview-page .dropdown > ul a:hover,
.kb-overview-page .project-dropdown .dropdown-menu a:hover,
.kb-overview-page .dropdown .dropdown-menu a:hover,
.kb-overview-page .project-dropdown > ul .dropdown-menu-link-icon:hover,
.kb-overview-page .dropdown > ul .dropdown-menu-link-icon:hover,
.kb-overview-page .project-dropdown .dropdown-menu .dropdown-menu-link-icon:hover,
.kb-overview-page .dropdown .dropdown-menu .dropdown-menu-link-icon:hover {
    border-color: transparent;
    background: #000ba6;
    background: linear-gradient(90deg, rgba(0, 11, 166, 1) 0%, rgba(0, 17, 255, 1) 100%);
    color: #ffffff;
    box-shadow: 0 14px 28px rgba(0, 17, 255, 0.18);
    transform: none;
}

.kb-overview-page .project-dropdown > ul .fa,
.kb-overview-page .dropdown > ul .fa,
.kb-overview-page .project-dropdown .dropdown-menu .fa,
.kb-overview-page .dropdown .dropdown-menu .fa {
    width: 16px;
    text-align: center;
    color: #64748b;
}

.kb-overview-page .project-dropdown > ul a:hover .fa,
.kb-overview-page .dropdown > ul a:hover .fa,
.kb-overview-page .project-dropdown .dropdown-menu a:hover .fa,
.kb-overview-page .dropdown .dropdown-menu a:hover .fa {
    color: #ffffff;
}

/* Make project row top section easier to scan */
.kb-overview-page .kb-project-top {
    gap: 12px;
}

.kb-overview-page .kb-project-title {
    display: inline-flex;
    align-items: center;
    min-height: 40px;
}

.kb-overview-page .kb-project-main {
    display: flex;
    flex-direction: column;
    gap: 10px;
}

.kb-overview-page .kb-project-layout {
    align-items: center;
}

/* Assigned tasks cards cleaner */
.kb-overview-page .kb-task-content {
    grid-template-columns: minmax(0, 1.5fr) minmax(320px, 0.95fr);
    gap: 20px;
}

.kb-overview-page .kb-task-side {
    align-self: stretch;
    gap: 10px;
}

.kb-overview-page .kb-task-side > * {
    box-shadow: inset 0 1px 0 rgba(255,255,255,0.9);
}

.kb-overview-page .kb-task-row .task-title,
.kb-overview-page .kb-task-row .task-title a {
    font-size: 1rem;
}

@media (max-width: 1199.98px) {
    .kb-overview-page .kb-task-content {
        grid-template-columns: minmax(0, 1fr);
    }
}


@media (max-width: 991.98px) {
    .kb-overview-page .kb-page-head,
    .kb-overview-page .kb-project-layout,
    .kb-overview-page .kb-task-content {
        display: grid;
        grid-template-columns: 1fr;
    }

    .kb-overview-page .kb-column-grid {
        justify-content: flex-start;
    }

    .kb-overview-page .kb-header-card .table-list-header,
    .kb-overview-page .kb-header-card .task-board-header,
    .kb-overview-page .kb-header-card .project-list-header,
    .kb-overview-page .kb-header-card .task-list-header {
        align-items: flex-start;
    }

    .kb-overview-page .project-dropdown > ul,
    .kb-overview-page .dropdown > ul,
    .kb-overview-page .project-dropdown .dropdown-menu,
    .kb-overview-page .dropdown .dropdown-menu {
        min-width: min(280px, calc(100vw - 48px));
    }
}

@media (max-width: 767.98px) {
    .kb-overview-page {
        gap: 20px;
    }

    .kb-overview-page .kb-summary-grid {
        grid-template-columns: 1fr;
    }

    .kb-overview-page .kb-card-body,
    .kb-overview-page .kb-header-card,
    .kb-overview-page .kb-list-stack.table-list {
        padding-left: 16px;
        padding-right: 16px;
    }

    .kb-overview-page .kb-project-content,
    .kb-overview-page .kb-task-content {
        padding: 18px 16px 18px 20px;
    }

    .kb-overview-page .kb-search-row {
        min-height: 60px;
    }

    .kb-overview-page .kb-search-input {
        height: 60px;
        font-size: 0.95rem;
    }

    .kb-overview-page .kb-search-tools {
        min-height: 60px;
        padding-right: 12px;
    }
}
</style>

<?= $this->hook->render('template:dashboard:show:before-filter-box', array('user' => $user)) ?>

<div class="kb-overview-page kb-page-shell">
    <div class="kb-page-head">
        <div>
            <p class="kb-page-eyebrow"><?= t('Workspace') ?></p>
            <h1 class="kb-page-title"><?= t('Dashboard Overview') ?></h1>
            <p class="kb-page-copy">
                <?= t('Track your projects and assigned tasks in a cleaner, more focused overview page.') ?>
            </p>
        </div>
        <span class="kb-page-chip"><?= t('Live workspace') ?></span>
    </div>

    <div class="kb-summary-grid">
        <div class="kb-metric-card">
            <div class="kb-metric-top">
                <span class="kb-metric-label"><?= t('Visible projects') ?></span>
                <span class="kb-metric-bullet"></span>
            </div>
            <div class="kb-metric-value"><?= $visibleProjects ?></div>
            <div class="kb-metric-note"><?= t('Projects in your workspace') ?></div>
        </div>

        <div class="kb-metric-card">
            <div class="kb-metric-top">
                <span class="kb-metric-label"><?= t('Active task groups') ?></span>
                <span class="kb-metric-bullet"></span>
            </div>
            <div class="kb-metric-value"><?= $activeTaskGroups ?></div>
            <div class="kb-metric-note"><?= t('Grouped by project') ?></div>
        </div>
    </div>

    <div class="kb-card">
        <div class="kb-card-body">
            <form method="get" action="<?= $this->url->dir() ?>" class="search">
                <?= $this->form->hidden('controller', array('controller' => 'SearchController')) ?>
                <?= $this->form->hidden('action', array('action' => 'index')) ?>

                <div class="kb-search-shell">
                    <div class="kb-search-row">
                        <span class="kb-search-icon">
                            <i class="fa fa-search" aria-hidden="true"></i>
                        </span>

                        <?= $this->form->text(
                            'search',
                            array(),
                            array(),
                            array(
                                'placeholder="'.t('Search items, tasks, or projects...').'"',
                                'aria-label="'.t('Search').'"'
                            ),
                            'kb-search-input'
                        ) ?>

                        <span class="kb-search-tools">
                            <?= $this->render('app/filters_helper') ?>
                        </span>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <?= $this->hook->render('template:dashboard:show:after-filter-box', array('user' => $user)) ?>

    <?php if (! $project_paginator->isEmpty()): ?>
        <section class="kb-section-block">
            <div class="kb-section-head">
                <div>
                    <p class="kb-section-overline"><?= t('Projects') ?></p>
                    <h2 class="kb-section-title"><?= t('Projects overview') ?></h2>
                    <p class="kb-section-subtitle"><?= t('Quick access to your active workspace and current column counts.') ?></p>
                </div>
            </div>

            <div class="kb-card">
                <div class="kb-header-card">
                    <?= $this->render('project_list/header', array('paginator' => $project_paginator)) ?>
                </div>
            </div>

            <div class="kb-card kb-table-card">
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
                                                <span class="kb-project-id">#<?= $project['id'] ?></span>
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
            </div>

            <div class="kb-pagination">
                <?= $project_paginator ?>
            </div>
        </section>
    <?php endif ?>

    <section class="kb-section-block">
        <?php if (empty($overview_paginator)): ?>
            <div class="kb-empty-state">
                <div class="kb-empty-state-icon">
                    <i class="fa fa-check-circle" aria-hidden="true"></i>
                </div>
                <h2><?= t('You are all caught up') ?></h2>
                <p><?= t('There is nothing assigned to you right now.') ?></p>
            </div>
        <?php else: ?>
            <?php foreach ($overview_paginator as $result): ?>
                <?php if (! $result['paginator']->isEmpty()): ?>
                    <section class="kb-section-block">
                        <div class="kb-section-head">
                            <div>
                                <p class="kb-section-overline"><?= t('Assigned tasks') ?></p>
                                <h2 class="kb-section-title" id="project-tasks-<?= $result['project_id'] ?>">
                                    <?= $this->url->link($this->text->e($result['project_name']), 'BoardViewController', 'show', array('project_id' => $result['project_id'])) ?>
                                </h2>
                                <p class="kb-section-subtitle"><?= t('Tasks currently assigned to you in this project.') ?></p>
                            </div>
                        </div>

                        <div class="kb-card">
                            <div class="kb-header-card">
                                <?= $this->render('task_list/header', array(
                                    'paginator' => $result['paginator'],
                                )) ?>
                            </div>
                        </div>

                        <div class="kb-card kb-table-card">
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

                                            <div class="kb-task-side">
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
                        </div>

                        <div class="kb-pagination">
                            <?= $result['paginator'] ?>
                        </div>
                    </section>
                <?php endif ?>
            <?php endforeach ?>
        <?php endif ?>
    </section>
</div>

<?= $this->hook->render('template:dashboard:show', array('user' => $user)) ?>
