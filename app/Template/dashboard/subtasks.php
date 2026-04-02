<style>
.kb-subtasks-page {
    display: flex;
    flex-direction: column;
    gap: 22px;
}

.kb-subtasks-page .kb-subtasks-toolbar {
    border: 1px solid rgba(148, 163, 184, 0.20);
    border-radius: 24px;
    background: linear-gradient(180deg, #ffffff 0%, #f8fbff 100%);
    box-shadow: 0 16px 34px rgba(15, 23, 42, 0.06);
}

.kb-subtasks-page .kb-subtasks-toolbar .table-list-header {
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

.kb-subtasks-page .kb-subtasks-toolbar .table-list-header-count {
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

.kb-subtasks-page .kb-subtasks-toolbar .table-list-header-menu {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    flex-wrap: wrap;
    float: none;
    margin-left: 0;
}

.kb-subtasks-page .kb-subtasks-grid {
    display: grid;
    gap: 16px;
}

.kb-subtasks-page .kb-subtask-task-card {
    --kb-subtask-accent: #2563eb;
    --kb-subtask-border-color: rgba(148, 163, 184, 0.20);
    --kb-subtask-surface-bottom: rgba(248, 251, 255, 0.98);
    --kb-subtask-shadow-color: rgba(15, 23, 42, 0.06);

    position: relative;
    overflow: visible;
    padding: 20px 22px;
    border: 1px solid var(--kb-subtask-border-color);
    border-radius: 24px;
    background: linear-gradient(180deg, rgba(255, 255, 255, 0.98) 0%, var(--kb-subtask-surface-bottom) 100%);
    box-shadow: inset 4px 0 0 var(--kb-subtask-accent), 0 14px 28px var(--kb-subtask-shadow-color);
    transition: border-color 180ms ease, box-shadow 180ms ease, transform 180ms ease;
}

.kb-subtasks-page .kb-subtask-task-card:hover {
    box-shadow: inset 4px 0 0 var(--kb-subtask-accent), 0 20px 38px var(--kb-subtask-shadow-color);
    border-color: rgba(59, 130, 246, 0.24);
    transform: translateY(-2px);
}

.kb-subtasks-page .kb-subtask-task-card.color-yellow {
    --kb-subtask-accent: rgb(223, 227, 45);
    --kb-subtask-border-color: rgba(223, 227, 45, 0.32);
    --kb-subtask-surface-bottom: rgba(245, 247, 196, 0.86);
    --kb-subtask-shadow-color: rgba(223, 227, 45, 0.10);
}

.kb-subtasks-page .kb-subtask-task-card.color-blue {
    --kb-subtask-accent: rgb(98, 165, 241);
    --kb-subtask-border-color: rgba(168, 207, 255, 0.42);
    --kb-subtask-surface-bottom: rgba(219, 235, 255, 0.90);
    --kb-subtask-shadow-color: rgba(59, 130, 246, 0.10);
}

.kb-subtasks-page .kb-subtask-task-card.color-green {
    --kb-subtask-accent: rgb(74, 227, 113);
    --kb-subtask-border-color: rgba(74, 227, 113, 0.30);
    --kb-subtask-surface-bottom: rgba(189, 244, 203, 0.88);
    --kb-subtask-shadow-color: rgba(34, 197, 94, 0.10);
}

.kb-subtasks-page .kb-subtask-task-card.color-purple {
    --kb-subtask-accent: rgb(205, 133, 254);
    --kb-subtask-border-color: rgba(205, 133, 254, 0.30);
    --kb-subtask-surface-bottom: rgba(223, 176, 255, 0.84);
    --kb-subtask-shadow-color: rgba(168, 85, 247, 0.10);
}

.kb-subtasks-page .kb-subtask-task-card.color-red {
    --kb-subtask-accent: rgb(255, 151, 151);
    --kb-subtask-border-color: rgba(255, 151, 151, 0.36);
    --kb-subtask-surface-bottom: rgba(255, 187, 187, 0.84);
    --kb-subtask-shadow-color: rgba(239, 68, 68, 0.10);
}

.kb-subtasks-page .kb-subtask-task-card.color-orange {
    --kb-subtask-accent: rgb(255, 172, 98);
    --kb-subtask-border-color: rgba(255, 172, 98, 0.34);
    --kb-subtask-surface-bottom: rgba(255, 215, 179, 0.88);
    --kb-subtask-shadow-color: rgba(249, 115, 22, 0.10);
}

.kb-subtasks-page .kb-subtask-task-card.color-grey {
    --kb-subtask-accent: rgb(160, 174, 192);
    --kb-subtask-border-color: rgba(160, 174, 192, 0.30);
    --kb-subtask-surface-bottom: rgba(238, 238, 238, 0.88);
    --kb-subtask-shadow-color: rgba(100, 116, 139, 0.08);
}

.kb-subtasks-page .kb-subtask-task-card.color-brown {
    --kb-subtask-accent: rgb(78, 52, 46);
    --kb-subtask-border-color: rgba(78, 52, 46, 0.24);
    --kb-subtask-surface-bottom: rgba(215, 204, 200, 0.88);
    --kb-subtask-shadow-color: rgba(120, 72, 48, 0.10);
}

.kb-subtasks-page .kb-subtask-task-card.color-deep_orange {
    --kb-subtask-accent: rgb(230, 74, 25);
    --kb-subtask-border-color: rgba(230, 74, 25, 0.28);
    --kb-subtask-surface-bottom: rgba(255, 171, 145, 0.86);
    --kb-subtask-shadow-color: rgba(234, 88, 12, 0.10);
}

.kb-subtasks-page .kb-subtask-task-card.color-dark_grey {
    --kb-subtask-accent: rgb(69, 90, 100);
    --kb-subtask-border-color: rgba(69, 90, 100, 0.24);
    --kb-subtask-surface-bottom: rgba(207, 216, 220, 0.88);
    --kb-subtask-shadow-color: rgba(71, 85, 105, 0.10);
}

.kb-subtasks-page .kb-subtask-task-card.color-pink {
    --kb-subtask-accent: rgb(216, 27, 96);
    --kb-subtask-border-color: rgba(216, 27, 96, 0.22);
    --kb-subtask-surface-bottom: rgba(244, 143, 177, 0.86);
    --kb-subtask-shadow-color: rgba(236, 72, 153, 0.10);
}

.kb-subtasks-page .kb-subtask-task-card.color-teal {
    --kb-subtask-accent: rgb(0, 105, 92);
    --kb-subtask-border-color: rgba(0, 105, 92, 0.22);
    --kb-subtask-surface-bottom: rgba(128, 203, 196, 0.88);
    --kb-subtask-shadow-color: rgba(13, 148, 136, 0.10);
}

.kb-subtasks-page .kb-subtask-task-card.color-cyan {
    --kb-subtask-accent: rgb(0, 188, 212);
    --kb-subtask-border-color: rgba(0, 188, 212, 0.22);
    --kb-subtask-surface-bottom: rgba(178, 235, 242, 0.88);
    --kb-subtask-shadow-color: rgba(6, 182, 212, 0.10);
}

.kb-subtasks-page .kb-subtask-task-card.color-lime {
    --kb-subtask-accent: rgb(175, 180, 43);
    --kb-subtask-border-color: rgba(175, 180, 43, 0.28);
    --kb-subtask-surface-bottom: rgba(230, 238, 156, 0.88);
    --kb-subtask-shadow-color: rgba(132, 204, 22, 0.10);
}

.kb-subtasks-page .kb-subtask-task-card.color-light_green {
    --kb-subtask-accent: rgb(104, 159, 56);
    --kb-subtask-border-color: rgba(104, 159, 56, 0.28);
    --kb-subtask-surface-bottom: rgba(220, 237, 200, 0.90);
    --kb-subtask-shadow-color: rgba(101, 163, 13, 0.10);
}

.kb-subtasks-page .kb-subtask-task-card.color-amber {
    --kb-subtask-accent: rgb(255, 160, 0);
    --kb-subtask-border-color: rgba(255, 160, 0, 0.28);
    --kb-subtask-surface-bottom: rgba(255, 224, 130, 0.88);
    --kb-subtask-shadow-color: rgba(245, 158, 11, 0.10);
}

.kb-subtasks-page .kb-subtask-task-head {
    display: grid;
    grid-template-columns: minmax(0, 1fr) auto;
    gap: 14px 16px;
    align-items: start;
}

.kb-subtasks-page .kb-subtask-task-main {
    min-width: 0;
    display: flex;
    flex-direction: column;
    gap: 14px;
}

.kb-subtasks-page .kb-subtask-task-title-row {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    gap: 12px;
    min-width: 0;
}

.kb-subtasks-page .kb-subtask-task-title-copy {
    min-width: 0;
    display: flex;
    flex-direction: column;
    gap: 10px;
}

.kb-subtasks-page .kb-subtask-task-card .dropdown {
    position: relative;
    z-index: 4;
    display: inline-flex;
    flex: 0 0 auto;
}

.kb-subtasks-page .kb-subtask-task-card .dropdown > a,
.kb-subtasks-page .kb-subtask-task-card .dropdown > .dropdown-menu-link-icon,
.kb-subtasks-page .kb-subtask-task-card .dropdown > .active-dropdown-menu,
.kb-subtasks-page .kb-subtasks-toolbar .dropdown > a,
.kb-subtasks-page .kb-subtasks-toolbar .dropdown > .dropdown-menu-link-icon,
.kb-subtasks-page .kb-subtasks-toolbar .dropdown > .active-dropdown-menu {
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

.kb-subtasks-page .kb-subtask-task-card .dropdown > a:hover,
.kb-subtasks-page .kb-subtask-task-card .dropdown > .dropdown-menu-link-icon:hover,
.kb-subtasks-page .kb-subtask-task-card .dropdown > .active-dropdown-menu,
.kb-subtasks-page .kb-subtasks-toolbar .dropdown > a:hover,
.kb-subtasks-page .kb-subtasks-toolbar .dropdown > .dropdown-menu-link-icon:hover,
.kb-subtasks-page .kb-subtasks-toolbar .dropdown > .active-dropdown-menu {
    border-color: rgba(59, 130, 246, 0.28);
    background: linear-gradient(180deg, #fbfdff 0%, #eef5ff 100%);
    color: #1d4ed8;
    box-shadow: 0 14px 28px rgba(0, 17, 255, 0.08);
    transform: translateY(-1px);
}

.kb-subtasks-page .kb-subtask-task-card .dropdown > a strong,
.kb-subtasks-page .kb-subtask-task-card .dropdown > .dropdown-menu-link-icon strong,
.kb-subtasks-page .kb-subtask-task-card .dropdown > .active-dropdown-menu strong,
.kb-subtasks-page .kb-subtasks-toolbar .dropdown > a strong,
.kb-subtasks-page .kb-subtasks-toolbar .dropdown > .dropdown-menu-link-icon strong,
.kb-subtasks-page .kb-subtasks-toolbar .dropdown > .active-dropdown-menu strong {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    width: 100%;
    color: inherit;
    font-weight: inherit;
}

.kb-subtasks-page .kb-subtask-task-card .dropdown > a .fa,
.kb-subtasks-page .kb-subtask-task-card .dropdown > .dropdown-menu-link-icon .fa,
.kb-subtasks-page .kb-subtask-task-card .dropdown > .active-dropdown-menu .fa,
.kb-subtasks-page .kb-subtasks-toolbar .dropdown > a .fa,
.kb-subtasks-page .kb-subtasks-toolbar .dropdown > .dropdown-menu-link-icon .fa,
.kb-subtasks-page .kb-subtasks-toolbar .dropdown > .active-dropdown-menu .fa {
    color: currentColor;
    padding-right: 0;
}

.kb-subtasks-page .kb-subtask-task-card .dropdown > ul,
.kb-subtasks-page .kb-subtasks-toolbar .dropdown > ul {
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

.kb-subtasks-page .kb-subtask-task-card .dropdown > ul li,
.kb-subtasks-page .kb-subtasks-toolbar .dropdown > ul li {
    margin: 0;
    list-style: none;
}

.kb-subtasks-page .kb-subtask-task-card .dropdown > ul li + li,
.kb-subtasks-page .kb-subtasks-toolbar .dropdown > ul li + li {
    margin-top: 4px;
}

.kb-subtasks-page .kb-subtask-task-card .dropdown > ul a,
.kb-subtasks-page .kb-subtask-task-card .dropdown > ul .dropdown-menu-link-icon,
.kb-subtasks-page .kb-subtasks-toolbar .dropdown > ul a,
.kb-subtasks-page .kb-subtasks-toolbar .dropdown > ul .dropdown-menu-link-icon {
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

.kb-subtasks-page .kb-subtask-task-card .dropdown > ul a:hover,
.kb-subtasks-page .kb-subtask-task-card .dropdown > ul .dropdown-menu-link-icon:hover,
.kb-subtasks-page .kb-subtasks-toolbar .dropdown > ul a:hover,
.kb-subtasks-page .kb-subtasks-toolbar .dropdown > ul .dropdown-menu-link-icon:hover {
    background: linear-gradient(90deg, rgba(0, 11, 166, 1) 0%, rgba(0, 17, 255, 1) 100%);
    color: #ffffff;
    box-shadow: 0 14px 28px rgba(0, 17, 255, 0.18);
}

.kb-subtasks-page .kb-subtask-task-card .dropdown > ul a:hover .fa,
.kb-subtasks-page .kb-subtask-task-card .dropdown > ul .dropdown-menu-link-icon:hover .fa,
.kb-subtasks-page .kb-subtasks-toolbar .dropdown > ul a:hover .fa,
.kb-subtasks-page .kb-subtasks-toolbar .dropdown > ul .dropdown-menu-link-icon:hover .fa {
    color: #ffffff;
}

.kb-subtasks-page .kb-subtask-id-fallback {
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

.kb-subtasks-page .table-list-title,
.kb-subtasks-page .table-list-title a {
    min-width: 0;
    color: #0f172a;
    font-size: 1.12rem;
    line-height: 1.35;
    font-weight: 900;
    letter-spacing: -0.02em;
    text-decoration: none;
}

.kb-subtasks-page .table-list-title a:hover {
    color: #1d4ed8;
}

.kb-subtasks-page .table-list-title.status-closed,
.kb-subtasks-page .table-list-title.status-closed a {
    color: #526277;
}

.kb-subtasks-page .table-list-title.status-closed a {
    text-decoration: line-through;
    text-decoration-thickness: 1.5px;
}

.kb-subtasks-page .kb-subtask-task-path {
    display: flex;
    flex-wrap: wrap;
    gap: 8px;
}

.kb-subtasks-page .kb-subtask-task-path-item {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    min-height: 36px;
    padding: 0 12px;
    border: 1px solid rgba(148, 163, 184, 0.18);
    border-radius: 14px;
    background: rgba(255, 255, 255, 0.74);
    color: #526277;
    font-size: 0.84rem;
    font-weight: 700;
    line-height: 1.3;
}

.kb-subtasks-page .kb-subtask-task-path-item .fa {
    color: #1d4ed8;
    padding-right: 0;
}

.kb-subtasks-page .kb-subtask-task-context {
    display: flex;
    flex-wrap: wrap;
    gap: 8px;
}

.kb-subtasks-page .kb-subtask-context-chip {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    min-height: 34px;
    padding: 0 12px;
    border: 1px solid rgba(148, 163, 184, 0.18);
    border-radius: 999px;
    background: rgba(255, 255, 255, 0.76);
    color: #526277;
    font-size: 0.8rem;
    font-weight: 800;
    box-shadow: 0 8px 18px rgba(15, 23, 42, 0.04);
}

.kb-subtasks-page .kb-subtask-context-chip .fa {
    color: #1d4ed8;
    padding-right: 0;
}

.kb-subtasks-page .kb-subtask-summary-chip {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    min-height: 38px;
    padding: 0 12px;
    border: 1px solid rgba(148, 163, 184, 0.18);
    border-radius: 999px;
    background: rgba(255, 255, 255, 0.78);
    color: #526277;
    font-size: 0.82rem;
    font-weight: 800;
    box-shadow: 0 8px 18px rgba(15, 23, 42, 0.04);
}

.kb-subtasks-page .kb-subtask-summary-chip .fa {
    color: #1d4ed8;
    padding-right: 0;
}

.kb-subtasks-page .kb-subtasks-panel {
    margin-top: 16px;
    padding: 14px;
    border: 1px solid rgba(148, 163, 184, 0.18);
    border-radius: 18px;
    background: rgba(255, 255, 255, 0.72);
    box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.9);
}

.kb-subtasks-page .kb-subtasks-panel-head {
    display: grid;
    grid-template-columns: minmax(0, 1.3fr) minmax(160px, 0.45fr) minmax(220px, 0.65fr);
    gap: 12px;
    align-items: center;
    padding: 0 2px 12px;
    margin-bottom: 12px;
    border-bottom: 1px dashed rgba(148, 163, 184, 0.34);
    color: #64748b;
    font-size: 0.72rem;
    font-weight: 900;
    letter-spacing: 0.08em;
    text-transform: uppercase;
}

.kb-subtasks-page .kb-subtasks-panel-head span:last-child {
    text-align: right;
}

.kb-subtasks-page .task-list-subtasks {
    display: grid;
    gap: 10px;
    width: 100%;
}

.kb-subtasks-page .task-list-subtask {
    display: grid;
    grid-template-columns: minmax(0, 1.3fr) minmax(160px, 0.45fr) minmax(220px, 0.65fr);
    gap: 12px;
    align-items: center;
    padding: 14px 16px;
    border: 1px solid rgba(148, 163, 184, 0.14);
    border-radius: 16px;
    background: rgba(255, 255, 255, 0.84);
    transition: border-color 180ms ease, box-shadow 180ms ease, transform 180ms ease;
}

.kb-subtasks-page .task-list-subtask:hover {
    border-color: rgba(59, 130, 246, 0.22);
    box-shadow: 0 14px 26px rgba(37, 99, 235, 0.06);
    transform: translateY(-1px);
}

.kb-subtasks-page .subtask-cell {
    display: flex;
    align-items: center;
    gap: 10px;
    width: auto;
    padding: 0;
    border: 0;
    min-width: 0;
}

.kb-subtasks-page .subtask-cell.column-50 {
    font-weight: 700;
    color: #334155;
}

.kb-subtasks-page .subtask-title,
.kb-subtasks-page .subtask-title a {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    min-width: 0;
    max-width: 100%;
    color: #0f172a;
    font-weight: 800;
    text-decoration: none;
    line-height: 1.45;
}

.kb-subtasks-page .subtask-title a,
.kb-subtasks-page .subtask-title .js-modal-confirm,
.kb-subtasks-page .subtask-title .js-subtask-toggle-status {
    padding: 4px 0;
    border-radius: 10px;
    transition: color 180ms ease, opacity 180ms ease;
}

.kb-subtasks-page .subtask-title a:hover {
    color: #1d4ed8;
}

.kb-subtasks-page .subtask-title .fa {
    color: #94a3b8;
    padding-right: 0;
}

.kb-subtasks-page .subtask-title .fa-gears {
    color: #2563eb;
}

.kb-subtasks-page .subtask-title .fa-check-square-o {
    color: #16a34a;
}

.kb-subtasks-page .subtask-assignee {
    justify-content: flex-start;
    color: #334155;
    font-size: 0.88rem;
    font-weight: 800;
}

.kb-subtasks-page .subtask-assignee:not(:empty) {
    display: inline-flex;
    align-items: center;
    min-height: 36px;
    padding: 0 12px;
    border: 1px solid rgba(148, 163, 184, 0.16);
    border-radius: 999px;
    background: rgba(255, 255, 255, 0.82);
    box-shadow: 0 8px 16px rgba(15, 23, 42, 0.04);
}

.kb-subtasks-page .subtask-time-tracking-cell {
    justify-content: flex-end;
    color: #526277;
    font-size: 0.82rem;
}

.kb-subtasks-page .subtask-time-tracking {
    display: inline-flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: flex-end;
    gap: 8px;
    min-height: 38px;
    padding: 0 12px;
    border: 1px solid rgba(148, 163, 184, 0.16);
    border-radius: 999px;
    background: rgba(255, 255, 255, 0.84);
    box-shadow: 0 8px 16px rgba(15, 23, 42, 0.04);
}

.kb-subtasks-page .subtask-timer-toggle {
    display: inline-flex;
    align-items: center;
    gap: 6px;
}

.kb-subtasks-page .subtask-time-tracking a {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    color: #1d4ed8;
    font-weight: 800;
    text-decoration: none;
    transition: color 180ms ease, opacity 180ms ease;
}

.kb-subtasks-page .subtask-time-tracking a:hover {
    color: #153ea8;
}

.kb-subtasks-page .subtask-time-tracking .fa {
    color: currentColor;
    padding-right: 0;
}

.kb-subtasks-page .kb-pagination {
    margin-top: 2px;
}

@media (max-width: 991.98px) {
    .kb-subtasks-page .kb-subtask-task-head {
        grid-template-columns: 1fr;
    }

    .kb-subtasks-page .kb-subtask-summary-chip {
        justify-self: flex-start;
    }

    .kb-subtasks-page .task-list-subtask {
        grid-template-columns: 1fr;
        justify-items: flex-start;
    }

    .kb-subtasks-page .kb-subtasks-panel-head {
        display: none;
    }

    .kb-subtasks-page .subtask-time-tracking-cell,
    .kb-subtasks-page .subtask-assignee,
    .kb-subtasks-page .subtask-time-tracking {
        justify-content: flex-start;
    }
}

@media (max-width: 767.98px) {
    .kb-subtasks-page {
        gap: 18px;
    }

    .kb-subtasks-page .kb-subtasks-toolbar .table-list-header,
    .kb-subtasks-page .kb-subtask-task-card {
        padding-left: 16px;
        padding-right: 16px;
    }

    .kb-subtasks-page .table-list-title,
    .kb-subtasks-page .table-list-title a {
        font-size: 1.02rem;
    }

    .kb-subtasks-page .kb-subtask-task-path,
    .kb-subtasks-page .task-list-subtasks {
        gap: 8px;
    }

    .kb-subtasks-page .kb-subtasks-panel {
        padding: 12px;
    }
}
</style>

<div class="kb-subtasks-page kb-page-shell">
    <div class="kb-page-head">
        <div>
            <p class="kb-page-eyebrow"><?= t('Task details') ?></p>
            <h1 class="kb-page-title">
                <?= $this->url->link(t('My subtasks'), 'DashboardController', 'subtasks', array('user_id' => $user['id'])) ?>
            </h1>
            <p class="kb-page-copy"><?= t('A cleaner subtasks view with the same data and sorting actions, now styled to match the full dashboard theme.') ?></p>
        </div>
        <span class="kb-page-chip"><?= $nb_subtasks ?> <?= t('items') ?></span>
    </div>

    <?php if ($nb_subtasks == 0): ?>
        <div class="kb-empty-state">
            <div class="kb-empty-state-icon">
                <i class="fa fa-check-square-o" aria-hidden="true"></i>
            </div>
            <h2><?= t('No subtasks assigned') ?></h2>
            <p><?= t('There is nothing assigned to you.') ?></p>
        </div>
    <?php else: ?>
        <div class="kb-subtasks-toolbar">
            <div class="table-list-header">
                <div class="table-list-header-count">
                    <?php if ($nb_subtasks > 1): ?>
                        <?= t('%d subtasks', $nb_subtasks) ?>
                    <?php else: ?>
                        <?= t('%d subtask', $nb_subtasks) ?>
                    <?php endif ?>
                </div>
                <div class="table-list-header-menu">
                    <div class="dropdown">
                        <a href="#" class="dropdown-menu dropdown-menu-link-icon"><strong><?= t('Sort') ?> <i class="fa fa-caret-down"></i></strong></a>
                        <ul>
                            <li>
                                <?= $paginator->order(t('Task ID'), \Kanboard\Model\TaskModel::TABLE.'.id') ?>
                            </li>
                            <li>
                                <?= $paginator->order(t('Title'), \Kanboard\Model\TaskModel::TABLE.'.title') ?>
                            </li>
                            <li>
                                <?= $paginator->order(t('Priority'), \Kanboard\Model\TaskModel::TABLE.'.priority') ?>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="kb-subtasks-grid">
            <?php foreach ($paginator->getCollection() as $task): ?>
                <?php $taskSubtasksCount = count($task['subtasks']); ?>
                <article class="kb-subtask-task-card color-<?= $task['color_id'] ?>">
                    <div class="kb-subtask-task-head">
                        <div class="kb-subtask-task-main">
                            <div class="kb-subtask-task-title-row">
                                <?php if ($this->user->hasProjectAccess('TaskModificationController', 'edit', $task['project_id'])): ?>
                                    <?= $this->render('task/dropdown', array('task' => $task)) ?>
                                <?php else: ?>
                                    <span class="kb-subtask-id-fallback">#<?= $task['id'] ?></span>
                                <?php endif ?>

                                <div class="kb-subtask-task-title-copy">
                                    <span class="table-list-title <?= $task['is_active'] == 0 ? 'status-closed' : '' ?>">
                                        <?= $this->url->link($this->text->e($task['title']), 'TaskViewController', 'show', array('task_id' => $task['id'])) ?>
                                    </span>

                                    <div class="kb-subtask-task-path">
                                        <span class="kb-subtask-task-path-item">
                                            <i class="fa fa-folder-open-o" aria-hidden="true"></i>
                                            <span><?= $this->text->e($task['project_name']) ?></span>
                                        </span>
                                        <span class="kb-subtask-task-path-item">
                                            <i class="fa fa-random" aria-hidden="true"></i>
                                            <span><?= $this->text->e($task['swimlane_name']) ?></span>
                                        </span>
                                        <span class="kb-subtask-task-path-item">
                                            <i class="fa fa-columns" aria-hidden="true"></i>
                                            <span><?= $this->text->e($task['column_name']) ?></span>
                                        </span>
                                    </div>

                                    <div class="kb-subtask-task-context">
                                        <?php if (! empty($task['priority'])): ?>
                                            <span class="kb-subtask-context-chip">
                                                <i class="fa fa-flag-o" aria-hidden="true"></i>
                                                <span><?= t('Priority') ?> P<?= $task['priority'] ?></span>
                                            </span>
                                        <?php endif ?>

                                        <?php if (! empty($task['nb_subtasks'])): ?>
                                            <span class="kb-subtask-context-chip">
                                                <i class="fa fa-check-circle-o" aria-hidden="true"></i>
                                                <span><?= $task['nb_completed_subtasks'] ?>/<?= $task['nb_subtasks'] ?> <?= t('Done') ?></span>
                                            </span>
                                        <?php endif ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <span class="kb-subtask-summary-chip">
                            <i class="fa fa-check-square-o" aria-hidden="true"></i>
                            <?php if ($taskSubtasksCount > 1): ?>
                                <?= t('%d subtasks', $taskSubtasksCount) ?>
                            <?php else: ?>
                                <?= t('%d subtask', $taskSubtasksCount) ?>
                            <?php endif ?>
                        </span>
                    </div>

                    <div class="kb-subtasks-panel">
                        <div class="kb-subtasks-panel-head" aria-hidden="true">
                            <span><?= t('Subtask') ?></span>
                            <span><?= t('Assignee') ?></span>
                            <span><?= t('Time spent') ?></span>
                        </div>

                        <?= $this->render('task_list/task_subtasks', array(
                            'task' => $task,
                            'user_id' => $user['id'],
                        )) ?>
                    </div>
                </article>
            <?php endforeach ?>
        </div>

        <div class="kb-pagination">
            <?= $paginator ?>
        </div>
    <?php endif ?>
</div>
