<style>
.kb-tasks-page {
    display: flex;
    flex-direction: column;
    gap: 22px;
}

.kb-tasks-page .kb-tasks-toolbar {
    border: 1px solid rgba(148, 163, 184, 0.20);
    border-radius: 24px;
    background: linear-gradient(180deg, #ffffff 0%, #f8fbff 100%);
    box-shadow: 0 16px 34px rgba(15, 23, 42, 0.06);
}

.kb-tasks-page .kb-tasks-toolbar .table-list-header {
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

.kb-tasks-page .kb-tasks-toolbar .table-list-header-count {
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

.kb-tasks-page .kb-tasks-toolbar .table-list-header-menu,
.kb-tasks-page .kb-tasks-toolbar .list-item-actions,
.kb-tasks-page .kb-tasks-toolbar .list-item-links {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    flex-wrap: wrap;
    float: none;
    margin-left: 0;
}

.kb-tasks-page .kb-tasks-toolbar .list-item-links {
    color: #526277;
    font-size: 0.84rem;
    font-weight: 800;
}

.kb-tasks-page .kb-tasks-toolbar .list-item-links a {
    color: #1d4ed8;
    text-decoration: none;
}

.kb-tasks-page .kb-tasks-toolbar .list-item-actions.list-item-action-hidden {
    display: none;
}

.kb-tasks-page .kb-tasks-grid {
    display: grid;
    gap: 16px;
}

.kb-tasks-page .kb-task-card {
    --kb-task-accent: #2563eb;
    --kb-task-border-color: rgba(148, 163, 184, 0.20);
    --kb-task-surface-bottom: rgba(248, 251, 255, 0.98);
    --kb-task-shadow-color: rgba(15, 23, 42, 0.06);

    position: relative;
    overflow: hidden;
    padding: 20px 22px;
    border: 1px solid var(--kb-task-border-color);
    border-radius: 24px;
    background: linear-gradient(180deg, rgba(255, 255, 255, 0.98) 0%, var(--kb-task-surface-bottom) 100%);
    box-shadow: inset 4px 0 0 var(--kb-task-accent), 0 14px 28px var(--kb-task-shadow-color);
    transition: border-color 180ms ease, box-shadow 180ms ease, transform 180ms ease;
}

.kb-tasks-page .kb-task-card:hover {
    box-shadow: inset 4px 0 0 var(--kb-task-accent), 0 20px 38px var(--kb-task-shadow-color);
    border-color: rgba(59, 130, 246, 0.24);
    transform: translateY(-2px);
}

.kb-tasks-page .kb-task-card.is-closed {
    --kb-task-accent: #94a3b8;
    --kb-task-border-color: rgba(148, 163, 184, 0.24);
    --kb-task-surface-bottom: rgba(248, 250, 252, 0.98);
    --kb-task-shadow-color: rgba(100, 116, 139, 0.06);
}

.kb-tasks-page .kb-task-card.color-yellow {
    --kb-task-accent: rgb(223, 227, 45);
    --kb-task-border-color: rgba(223, 227, 45, 0.32);
    --kb-task-surface-bottom: rgba(245, 247, 196, 0.86);
    --kb-task-shadow-color: rgba(223, 227, 45, 0.10);
}

.kb-tasks-page .kb-task-card.color-blue {
    --kb-task-accent: rgb(98, 165, 241);
    --kb-task-border-color: rgba(168, 207, 255, 0.42);
    --kb-task-surface-bottom: rgba(219, 235, 255, 0.90);
    --kb-task-shadow-color: rgba(59, 130, 246, 0.10);
}

.kb-tasks-page .kb-task-card.color-green {
    --kb-task-accent: rgb(74, 227, 113);
    --kb-task-border-color: rgba(74, 227, 113, 0.30);
    --kb-task-surface-bottom: rgba(189, 244, 203, 0.88);
    --kb-task-shadow-color: rgba(34, 197, 94, 0.10);
}

.kb-tasks-page .kb-task-card.color-purple {
    --kb-task-accent: rgb(205, 133, 254);
    --kb-task-border-color: rgba(205, 133, 254, 0.30);
    --kb-task-surface-bottom: rgba(223, 176, 255, 0.84);
    --kb-task-shadow-color: rgba(168, 85, 247, 0.10);
}

.kb-tasks-page .kb-task-card.color-red {
    --kb-task-accent: rgb(255, 151, 151);
    --kb-task-border-color: rgba(255, 151, 151, 0.36);
    --kb-task-surface-bottom: rgba(255, 187, 187, 0.84);
    --kb-task-shadow-color: rgba(239, 68, 68, 0.10);
}

.kb-tasks-page .kb-task-card.color-orange {
    --kb-task-accent: rgb(255, 172, 98);
    --kb-task-border-color: rgba(255, 172, 98, 0.34);
    --kb-task-surface-bottom: rgba(255, 215, 179, 0.88);
    --kb-task-shadow-color: rgba(249, 115, 22, 0.10);
}

.kb-tasks-page .kb-task-card.color-grey {
    --kb-task-accent: rgb(160, 174, 192);
    --kb-task-border-color: rgba(160, 174, 192, 0.30);
    --kb-task-surface-bottom: rgba(238, 238, 238, 0.88);
    --kb-task-shadow-color: rgba(100, 116, 139, 0.08);
}

.kb-tasks-page .kb-task-card.color-brown {
    --kb-task-accent: rgb(78, 52, 46);
    --kb-task-border-color: rgba(78, 52, 46, 0.24);
    --kb-task-surface-bottom: rgba(215, 204, 200, 0.88);
    --kb-task-shadow-color: rgba(120, 72, 48, 0.10);
}

.kb-tasks-page .kb-task-card.color-deep_orange {
    --kb-task-accent: rgb(230, 74, 25);
    --kb-task-border-color: rgba(230, 74, 25, 0.28);
    --kb-task-surface-bottom: rgba(255, 171, 145, 0.86);
    --kb-task-shadow-color: rgba(234, 88, 12, 0.10);
}

.kb-tasks-page .kb-task-card.color-dark_grey {
    --kb-task-accent: rgb(69, 90, 100);
    --kb-task-border-color: rgba(69, 90, 100, 0.24);
    --kb-task-surface-bottom: rgba(207, 216, 220, 0.88);
    --kb-task-shadow-color: rgba(71, 85, 105, 0.10);
}

.kb-tasks-page .kb-task-card.color-pink {
    --kb-task-accent: rgb(216, 27, 96);
    --kb-task-border-color: rgba(216, 27, 96, 0.22);
    --kb-task-surface-bottom: rgba(244, 143, 177, 0.86);
    --kb-task-shadow-color: rgba(236, 72, 153, 0.10);
}

.kb-tasks-page .kb-task-card.color-teal {
    --kb-task-accent: rgb(0, 105, 92);
    --kb-task-border-color: rgba(0, 105, 92, 0.22);
    --kb-task-surface-bottom: rgba(128, 203, 196, 0.88);
    --kb-task-shadow-color: rgba(13, 148, 136, 0.10);
}

.kb-tasks-page .kb-task-card.color-cyan {
    --kb-task-accent: rgb(0, 188, 212);
    --kb-task-border-color: rgba(0, 188, 212, 0.22);
    --kb-task-surface-bottom: rgba(178, 235, 242, 0.88);
    --kb-task-shadow-color: rgba(6, 182, 212, 0.10);
}

.kb-tasks-page .kb-task-card.color-lime {
    --kb-task-accent: rgb(175, 180, 43);
    --kb-task-border-color: rgba(175, 180, 43, 0.28);
    --kb-task-surface-bottom: rgba(230, 238, 156, 0.88);
    --kb-task-shadow-color: rgba(132, 204, 22, 0.10);
}

.kb-tasks-page .kb-task-card.color-light_green {
    --kb-task-accent: rgb(104, 159, 56);
    --kb-task-border-color: rgba(104, 159, 56, 0.28);
    --kb-task-surface-bottom: rgba(220, 237, 200, 0.90);
    --kb-task-shadow-color: rgba(101, 163, 13, 0.10);
}

.kb-tasks-page .kb-task-card.color-amber {
    --kb-task-accent: rgb(255, 160, 0);
    --kb-task-border-color: rgba(255, 160, 0, 0.28);
    --kb-task-surface-bottom: rgba(255, 224, 130, 0.88);
    --kb-task-shadow-color: rgba(245, 158, 11, 0.10);
}

.kb-tasks-page .kb-task-card-layout {
    display: grid;
    grid-template-columns: minmax(0, 1.35fr) minmax(300px, 0.95fr);
    gap: 18px;
    align-items: start;
}

.kb-tasks-page .kb-task-card-main {
    min-width: 0;
    display: flex;
    flex-direction: column;
    gap: 14px;
}

.kb-tasks-page .kb-task-card-title-row > div {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    gap: 12px;
    min-width: 0;
}

.kb-tasks-page .kb-task-id-fallback {
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

.kb-tasks-page .kb-task-card .dropdown {
    position: relative;
    z-index: 4;
    display: inline-flex;
    flex: 0 0 auto;
}

.kb-tasks-page .kb-task-card .dropdown > a,
.kb-tasks-page .kb-task-card .dropdown > .dropdown-menu-link-icon,
.kb-tasks-page .kb-task-card .dropdown > .active-dropdown-menu {
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
}

.kb-tasks-page .kb-task-card .dropdown > a:hover,
.kb-tasks-page .kb-task-card .dropdown > .dropdown-menu-link-icon:hover,
.kb-tasks-page .kb-task-card .dropdown > .active-dropdown-menu {
    border-color: rgba(59, 130, 246, 0.28);
    background: linear-gradient(180deg, #fbfdff 0%, #eef5ff 100%);
    color: #1d4ed8;
    box-shadow: 0 14px 28px rgba(0, 17, 255, 0.08);
    transform: translateY(-1px);
}

.kb-tasks-page .kb-task-card .dropdown > a strong,
.kb-tasks-page .kb-task-card .dropdown > .dropdown-menu-link-icon strong,
.kb-tasks-page .kb-task-card .dropdown > .active-dropdown-menu strong {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    width: 100%;
    color: inherit;
    font-weight: inherit;
}

.kb-tasks-page .kb-task-card .dropdown > a .fa,
.kb-tasks-page .kb-task-card .dropdown > .dropdown-menu-link-icon .fa,
.kb-tasks-page .kb-task-card .dropdown > .active-dropdown-menu .fa {
    color: currentColor;
    padding-right: 0;
}

.kb-tasks-page .kb-task-card .dropdown > ul {
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

.kb-tasks-page .kb-task-card .dropdown > ul li {
    margin: 0;
    list-style: none;
}

.kb-tasks-page .kb-task-card .dropdown > ul li + li {
    margin-top: 4px;
}

.kb-tasks-page .kb-task-card .dropdown > ul a,
.kb-tasks-page .kb-task-card .dropdown > ul .dropdown-menu-link-icon {
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

.kb-tasks-page .kb-task-card .dropdown > ul a:hover,
.kb-tasks-page .kb-task-card .dropdown > ul .dropdown-menu-link-icon:hover {
    background: linear-gradient(90deg, rgba(0, 11, 166, 1) 0%, rgba(0, 17, 255, 1) 100%);
    color: #ffffff;
    box-shadow: 0 14px 28px rgba(0, 17, 255, 0.18);
}

.kb-tasks-page .kb-task-card .dropdown > ul a:hover .fa,
.kb-tasks-page .kb-task-card .dropdown > ul .dropdown-menu-link-icon:hover .fa {
    color: #ffffff;
}

.kb-tasks-page .kb-task-card .table-list-title,
.kb-tasks-page .kb-task-card .table-list-title a {
    min-width: 0;
    color: #0f172a;
    font-size: 1.12rem;
    line-height: 1.35;
    font-weight: 900;
    letter-spacing: -0.02em;
    text-decoration: none;
}

.kb-tasks-page .kb-task-card .table-list-title a:hover {
    color: #1d4ed8;
}

.kb-tasks-page .kb-task-card .table-list-title.status-closed,
.kb-tasks-page .kb-task-card .table-list-title.status-closed a {
    color: #526277;
}

.kb-tasks-page .kb-task-card .table-list-title.status-closed a {
    text-decoration: line-through;
    text-decoration-thickness: 1.5px;
}

.kb-tasks-page .kb-task-card-path {
    display: flex;
    flex-wrap: wrap;
    gap: 8px;
}

.kb-tasks-page .kb-task-card-path-item {
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

.kb-tasks-page .kb-task-card-path-item .fa {
    color: #1d4ed8;
    padding-right: 0;
}

.kb-tasks-page .kb-task-card-chips {
    display: flex;
    flex-wrap: wrap;
    gap: 8px;
}

.kb-tasks-page .kb-task-card-chips .table-list-category {
    display: inline-flex;
    align-items: center;
    min-height: 34px;
    padding: 0 12px;
    border-radius: 999px;
    border: 1px solid rgba(148, 163, 184, 0.20);
    background: linear-gradient(180deg, #ffffff 0%, #f8fbff 100%);
    color: #526277;
    font-size: 0.8rem;
    font-weight: 800;
    line-height: 1;
    box-shadow: 0 8px 16px rgba(15, 23, 42, 0.04);
}

.kb-tasks-page .kb-task-card-chips .table-list-category a {
    color: inherit;
    text-decoration: none;
}

.kb-tasks-page .kb-task-card-chips .table-list-category a:hover {
    color: #1d4ed8;
}

.kb-tasks-page .kb-task-card-chips .table-list-category.color-yellow,
.kb-tasks-page .kb-task-card-chips .table-list-category.task-list-tag.color-yellow {
    border-color: rgba(223, 227, 45, 0.28);
    background: rgba(245, 247, 196, 0.92);
}

.kb-tasks-page .kb-task-card-chips .table-list-category.color-blue,
.kb-tasks-page .kb-task-card-chips .table-list-category.task-list-tag.color-blue {
    border-color: rgba(98, 165, 241, 0.28);
    background: rgba(219, 235, 255, 0.92);
}

.kb-tasks-page .kb-task-card-chips .table-list-category.color-green,
.kb-tasks-page .kb-task-card-chips .table-list-category.task-list-tag.color-green {
    border-color: rgba(74, 227, 113, 0.28);
    background: rgba(189, 244, 203, 0.92);
}

.kb-tasks-page .kb-task-card-chips .table-list-category.color-purple,
.kb-tasks-page .kb-task-card-chips .table-list-category.task-list-tag.color-purple {
    border-color: rgba(205, 133, 254, 0.28);
    background: rgba(223, 176, 255, 0.90);
}

.kb-tasks-page .kb-task-card-chips .table-list-category.color-red,
.kb-tasks-page .kb-task-card-chips .table-list-category.task-list-tag.color-red {
    border-color: rgba(255, 151, 151, 0.32);
    background: rgba(255, 214, 214, 0.92);
}

.kb-tasks-page .kb-task-card-chips .table-list-category.color-orange,
.kb-tasks-page .kb-task-card-chips .table-list-category.task-list-tag.color-orange {
    border-color: rgba(255, 172, 98, 0.30);
    background: rgba(255, 228, 201, 0.92);
}

.kb-tasks-page .kb-task-card-chips .table-list-category.color-grey,
.kb-tasks-page .kb-task-card-chips .table-list-category.task-list-tag.color-grey,
.kb-tasks-page .kb-task-card-chips .table-list-category.color-dark_grey,
.kb-tasks-page .kb-task-card-chips .table-list-category.task-list-tag.color-dark_grey {
    border-color: rgba(148, 163, 184, 0.30);
    background: rgba(226, 232, 240, 0.92);
}

.kb-tasks-page .kb-task-card-chips .table-list-category.color-brown,
.kb-tasks-page .kb-task-card-chips .table-list-category.task-list-tag.color-brown,
.kb-tasks-page .kb-task-card-chips .table-list-category.color-deep_orange,
.kb-tasks-page .kb-task-card-chips .table-list-category.task-list-tag.color-deep_orange,
.kb-tasks-page .kb-task-card-chips .table-list-category.color-pink,
.kb-tasks-page .kb-task-card-chips .table-list-category.task-list-tag.color-pink,
.kb-tasks-page .kb-task-card-chips .table-list-category.color-teal,
.kb-tasks-page .kb-task-card-chips .table-list-category.task-list-tag.color-teal,
.kb-tasks-page .kb-task-card-chips .table-list-category.color-cyan,
.kb-tasks-page .kb-task-card-chips .table-list-category.task-list-tag.color-cyan,
.kb-tasks-page .kb-task-card-chips .table-list-category.color-lime,
.kb-tasks-page .kb-task-card-chips .table-list-category.task-list-tag.color-lime,
.kb-tasks-page .kb-task-card-chips .table-list-category.color-light_green,
.kb-tasks-page .kb-task-card-chips .table-list-category.task-list-tag.color-light_green,
.kb-tasks-page .kb-task-card-chips .table-list-category.color-amber,
.kb-tasks-page .kb-task-card-chips .table-list-category.task-list-tag.color-amber {
    background: rgba(255, 255, 255, 0.78);
}

.kb-tasks-page .kb-task-card-side {
    display: grid;
    gap: 12px;
    align-content: start;
}

.kb-tasks-page .kb-task-assignee,
.kb-tasks-page .kb-task-metrics-shell,
.kb-tasks-page .kb-task-subtasks-shell,
.kb-tasks-page .kb-task-card-extra {
    min-width: 0;
    padding: 12px 14px;
    border: 1px solid rgba(148, 163, 184, 0.18);
    border-radius: 16px;
    background: rgba(255, 255, 255, 0.72);
    box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.9);
}

.kb-tasks-page .kb-task-assignee:empty,
.kb-tasks-page .kb-task-card-extra:empty {
    display: none;
}

.kb-tasks-page .kb-task-assignee .task-board-change-assignee,
.kb-tasks-page .kb-task-assignee .kb-task-assignee-static {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    min-width: 0;
    color: #334155;
    text-decoration: none;
}

.kb-tasks-page .kb-task-assignee .task-avatar-assignee {
    color: #526277;
    font-size: 0.9rem;
    font-weight: 800;
}

.kb-tasks-page .kb-task-assignee .avatar-inline,
.kb-tasks-page .kb-task-assignee .avatar-inline img,
.kb-tasks-page .kb-task-assignee .avatar-inline .avatar-letter {
    margin-right: 0;
}

.kb-tasks-page .task-list-icons {
    display: flex;
    flex-wrap: wrap;
    gap: 8px;
    justify-content: flex-end;
    text-align: left;
    line-height: 1.3;
    font-size: 0.82rem;
}

.kb-tasks-page .task-list-icons > span,
.kb-tasks-page .task-list-icons > a,
.kb-tasks-page .task-list-icons > .tooltip {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    min-height: 34px;
    padding: 0 10px;
    border: 1px solid rgba(148, 163, 184, 0.18);
    border-radius: 12px;
    background: rgba(255, 255, 255, 0.82);
    color: #526277;
    text-decoration: none;
    box-shadow: 0 6px 14px rgba(15, 23, 42, 0.04);
    margin-left: 0 !important;
    opacity: 1;
}

.kb-tasks-page .task-list-icons > a:hover,
.kb-tasks-page .task-list-icons > .tooltip:hover {
    border-color: rgba(59, 130, 246, 0.22);
    background: linear-gradient(180deg, #fbfdff 0%, #eef5ff 100%);
    color: #1d4ed8;
}

.kb-tasks-page .task-list-icons i {
    color: currentColor;
    padding-right: 0;
}

.kb-tasks-page .task-list-icons .task-date-overdue {
    color: #b42318;
}

.kb-tasks-page .task-list-icons .task-date-today {
    color: #1d4ed8;
}

.kb-tasks-page .task-list-icons .task-board-closed {
    color: #475569;
}

.kb-tasks-page .task-list-icons .task-priority {
    font-weight: 900;
    color: #1d4ed8;
}

.kb-tasks-page .task-list-icons .task-icon-age {
    padding: 0 !important;
    overflow: hidden;
    gap: 0;
}

.kb-tasks-page .task-list-icons .task-icon-age-total,
.kb-tasks-page .task-list-icons .task-icon-age-column {
    display: inline-flex;
    align-items: center;
    min-height: 34px;
    padding: 0 10px;
    border: 0;
    border-radius: 0;
    background: transparent;
    color: inherit;
    margin-left: 0;
}

.kb-tasks-page .task-list-icons .task-icon-age-column {
    border-left: 1px solid rgba(148, 163, 184, 0.18);
}

.kb-tasks-page .task-list-icons .flag-milestone {
    color: #16a34a;
}

.kb-tasks-page .task-list-subtasks {
    display: grid;
    gap: 8px;
    width: 100%;
}

.kb-tasks-page .task-list-subtask {
    display: grid;
    grid-template-columns: minmax(0, 1fr) auto auto;
    gap: 10px;
    align-items: center;
    padding: 10px 12px;
    border: 1px solid rgba(148, 163, 184, 0.14);
    border-radius: 14px;
    background: rgba(255, 255, 255, 0.76);
}

.kb-tasks-page .subtask-cell {
    display: flex;
    align-items: center;
    gap: 8px;
    width: auto;
    padding: 0;
    border: 0;
    min-width: 0;
}

.kb-tasks-page .subtask-cell.column-50 {
    font-weight: 700;
    color: #334155;
}

.kb-tasks-page .subtask-assignee,
.kb-tasks-page .subtask-time-tracking-cell {
    justify-content: flex-end;
    color: #526277;
    font-size: 0.82rem;
}

.kb-tasks-page .kb-pagination {
    margin-top: 2px;
}

@media (max-width: 1199.98px) {
    .kb-tasks-page .kb-task-card-layout {
        grid-template-columns: 1fr;
    }

    .kb-tasks-page .task-list-icons {
        justify-content: flex-start;
    }
}

@media (max-width: 767.98px) {
    .kb-tasks-page {
        gap: 18px;
    }

    .kb-tasks-page .kb-tasks-toolbar .table-list-header,
    .kb-tasks-page .kb-task-card {
        padding-left: 16px;
        padding-right: 16px;
    }

    .kb-tasks-page .kb-task-card .table-list-title,
    .kb-tasks-page .kb-task-card .table-list-title a {
        font-size: 1.02rem;
    }

    .kb-tasks-page .kb-task-card-path,
    .kb-tasks-page .kb-task-card-chips,
    .kb-tasks-page .task-list-icons {
        gap: 6px;
    }

    .kb-tasks-page .task-list-subtask {
        grid-template-columns: 1fr;
        justify-items: flex-start;
    }

    .kb-tasks-page .subtask-assignee,
    .kb-tasks-page .subtask-time-tracking-cell {
        justify-content: flex-start;
    }
}
</style>

<div class="kb-tasks-page kb-page-shell">
    <div class="kb-page-head">
        <div>
            <p class="kb-page-eyebrow"><?= t('Work queue') ?></p>
            <h1 class="kb-page-title">
                <?= $this->url->link(t('My tasks'), 'DashboardController', 'tasks', array('user_id' => $user['id'])) ?>
            </h1>
            <p class="kb-page-copy"><?= t('All assigned tasks presented with softer cards, better spacing, and a more modern dashboard rhythm.') ?></p>
        </div>
        <span class="kb-page-chip"><?= $paginator->getTotal() ?> <?= t('tasks') ?></span>
    </div>

    <?php if ($paginator->isEmpty()): ?>
        <div class="kb-empty-state">
            <div class="kb-empty-state-icon">
                <i class="fa fa-check-circle" aria-hidden="true"></i>
            </div>
            <h2><?= t('Nothing assigned right now') ?></h2>
            <p><?= t('There is nothing assigned to you.') ?></p>
        </div>
    <?php else: ?>
        <div class="kb-tasks-toolbar">
            <?= $this->render('task_list/header', array(
                'paginator' => $paginator,
            )) ?>
        </div>

        <div class="kb-tasks-grid">
            <?php foreach ($paginator->getCollection() as $task): ?>
                <?php $taskFooter = $this->hook->render('template:dashboard:task:footer', array('task' => $task)); ?>
                <article class="kb-task-card color-<?= $task['color_id'] ?><?= $task['is_active'] == 0 ? ' is-closed' : '' ?>">
                    <div class="kb-task-card-layout">
                        <div class="kb-task-card-main">
                            <div class="kb-task-card-title-row">
                                <div>
                                    <?php if ($this->user->hasProjectAccess('TaskModificationController', 'edit', $task['project_id'])): ?>
                                        <?= $this->render('task/dropdown', array('task' => $task, 'redirect' => 'dashboard-tasks')) ?>
                                    <?php else: ?>
                                        <span class="kb-task-id-fallback">#<?= $task['id'] ?></span>
                                    <?php endif ?>

                                    <span class="table-list-title <?= $task['is_active'] == 0 ? 'status-closed' : '' ?>">
                                        <?= $this->url->link($this->text->e($task['title']), 'TaskViewController', 'show', array('task_id' => $task['id'])) ?>
                                    </span>
                                </div>
                            </div>

                            <div class="kb-task-card-path">
                                <span class="kb-task-card-path-item">
                                    <i class="fa fa-folder-open-o" aria-hidden="true"></i>
                                    <span><?= $this->text->e($task['project_name']) ?></span>
                                </span>
                                <span class="kb-task-card-path-item">
                                    <i class="fa fa-random" aria-hidden="true"></i>
                                    <span><?= $this->text->e($task['swimlane_name']) ?></span>
                                </span>
                                <span class="kb-task-card-path-item">
                                    <i class="fa fa-columns" aria-hidden="true"></i>
                                    <span><?= $this->text->e($task['column_name']) ?></span>
                                </span>
                            </div>

                            <?php if (! empty($task['category_id']) || ! empty($task['tags'])): ?>
                                <div class="kb-task-card-chips">
                                    <?php if (! empty($task['category_id'])): ?>
                                        <span class="table-list-category <?= $task['category_color_id'] ? "color-{$task['category_color_id']}" : '' ?>">
                                            <?php if ($this->user->hasProjectAccess('TaskModificationController', 'edit', $task['project_id'])): ?>
                                                <?= $this->url->link(
                                                    $this->text->e($task['category_name']),
                                                    'TaskModificationController',
                                                    'edit',
                                                    array('task_id' => $task['id']),
                                                    false,
                                                    'js-modal-medium' . (! empty($task['category_description']) ? ' tooltip' : ''),
                                                    t('Change category')
                                                ) ?>
                                                <?php if (! empty($task['category_description'])): ?>
                                                    <?= $this->app->tooltipMarkdown($task['category_description']) ?>
                                                <?php endif ?>
                                            <?php else: ?>
                                                <?= $this->text->e($task['category_name']) ?>
                                            <?php endif ?>
                                        </span>
                                    <?php endif ?>

                                    <?php foreach ($task['tags'] as $tag): ?>
                                        <span class="table-list-category task-list-tag <?= $tag['color_id'] ? "color-{$tag['color_id']}" : '' ?>">
                                            <?= $this->text->e($tag['name']) ?>
                                        </span>
                                    <?php endforeach ?>
                                </div>
                            <?php endif ?>
                        </div>

                        <div class="kb-task-card-side">
                            <?php if (! empty($task['owner_id'])): ?>
                                <div class="kb-task-assignee">
                                    <span
                                        <?php if ($this->user->hasProjectAccess('TaskModificationController', 'edit', $task['project_id'])): ?>
                                            class="task-board-change-assignee"
                                            data-url="<?= $this->url->href('TaskModificationController', 'edit', array('task_id' => $task['id'])) ?>"
                                        <?php else: ?>
                                            class="kb-task-assignee-static"
                                        <?php endif ?>
                                    >
                                        <?= $this->avatar->small(
                                            $task['owner_id'],
                                            $task['assignee_username'],
                                            $task['assignee_name'],
                                            $task['assignee_email'],
                                            $task['assignee_avatar_path'],
                                            'avatar-inline'
                                        ) ?>
                                        <span class="task-avatar-assignee"><?= $this->text->e($task['assignee_name'] ?: $task['assignee_username']) ?></span>
                                    </span>
                                </div>
                            <?php endif ?>

                            <div class="kb-task-metrics-shell">
                                <?= $this->render('task_list/task_icons', array(
                                    'task' => $task,
                                )) ?>
                            </div>

                            <?php if (! empty($task['subtasks'])): ?>
                                <div class="kb-task-subtasks-shell">
                                    <?= $this->render('task_list/task_subtasks', array(
                                        'task' => $task,
                                    )) ?>
                                </div>
                            <?php endif ?>

                            <?php if (trim($taskFooter) !== ''): ?>
                                <div class="kb-task-card-extra">
                                    <?= $taskFooter ?>
                                </div>
                            <?php endif ?>
                        </div>
                    </div>
                </article>
            <?php endforeach ?>
        </div>

        <div class="kb-pagination">
            <?= $paginator ?>
        </div>
    <?php endif ?>
</div>
