<?php static $kbBoardModernStylesLoaded = false; ?>
<?php if (! $kbBoardModernStylesLoaded): ?>
<?php $kbBoardModernStylesLoaded = true; ?>
<style>
.kb-board-page,
.kb-public-board-page {
    --kb-board-surface: #ffffff;
    --kb-board-surface-soft: #f8fbff;
    --kb-board-surface-muted: #eef5ff;
    --kb-board-border: rgba(148, 163, 184, 0.20);
    --kb-board-border-strong: rgba(59, 130, 246, 0.22);
    --kb-board-text: #0f172a;
    --kb-board-text-soft: #475569;
    --kb-board-text-muted: #64748b;
    --kb-board-blue-700: #1d4ed8;
    --kb-board-blue-600: #2563eb;
    --kb-board-blue-500: #3b82f6;
    --kb-board-blue-400: #60a5fa;
    --kb-board-gradient: linear-gradient(135deg, #1d4ed8 0%, #3b82f6 100%);
    --kb-board-shadow-sm: 0 14px 32px rgba(15, 23, 42, 0.05);
    --kb-board-shadow-md: 0 22px 52px rgba(15, 23, 42, 0.07);
    --kb-board-shadow-blue: 0 18px 38px rgba(37, 99, 235, 0.12);
    --kb-board-radius-xl: 30px;
    --kb-board-radius-lg: 22px;
    --kb-board-radius-md: 18px;
    --kb-board-radius-sm: 14px;
}

.kb-board-page {
    padding: 0 0 12px;
}

.kb-public-board-page {
    width: min(1480px, calc(100% - 28px));
    margin: 20px auto 34px;
}

.kb-board-shell {
    display: flex;
    flex-direction: column;
    gap: 24px;
    min-width: 0;
}

.kb-board-page .project-header {
    margin-bottom: 0;
}

#board-container.kb-board-surface {
    position: relative;
    padding: 20px;
    border: 1px solid var(--kb-board-border);
    border-radius: var(--kb-board-radius-xl);
    background:
        radial-gradient(circle at top right, rgba(59, 130, 246, 0.08), transparent 20%),
        linear-gradient(180deg, rgba(255, 255, 255, 0.98) 0%, rgba(248, 251, 255, 0.98) 100%);
    box-shadow: var(--kb-board-shadow-md);
    overflow: visible;
}

#board-container.kb-board-surface::before {
    content: "";
    position: absolute;
    inset: 0 0 auto 0;
    height: 4px;
    background: var(--kb-board-gradient);
}

#board-container.kb-board-surface.kb-board-limit {
    border-color: rgba(239, 68, 68, 0.18);
    box-shadow: 0 22px 52px rgba(239, 68, 68, 0.08);
}

.kb-board-empty-alert {
    margin: 0;
}

.kb-board-scroll {
    overflow-x: auto;
    overflow-y: hidden;
    padding: 4px 4px 280px;
    margin: -4px -4px -280px;
}

.kb-board-scroll::-webkit-scrollbar {
    height: 10px;
}

.kb-board-scroll::-webkit-scrollbar-thumb {
    border: 2px solid rgba(255, 255, 255, 0.96);
    border-radius: 999px;
    background: rgba(148, 163, 184, 0.42);
}

#board.kb-board-grid {
    width: max-content;
    min-width: 100%;
    margin-bottom: 0;
    border-collapse: separate;
    border-spacing: 18px 16px;
    table-layout: fixed;
}

#board.kb-board-grid tr.board-swimlane-columns-first {
    visibility: hidden;
    height: 0;
}

#board.kb-board-grid th.board-column-header {
    width: 318px;
    min-width: 318px;
    padding: 0;
    border: 0;
    background: transparent;
    vertical-align: top;
}

#board.kb-board-grid th.board-column-header-first {
    visibility: hidden;
    padding: 0;
}

#board.kb-board-grid td {
    padding: 0;
    border: 0;
    vertical-align: top;
    background: transparent;
    overflow: visible;
}

#board.kb-board-grid th {
    overflow: visible;
}

.kb-board-swimlane-row > th {
    padding: 2px 4px 0;
    border: 0;
    background: transparent;
    box-shadow: none;
}

.kb-board-swimlane-header {
    display: flex;
    align-items: center;
    gap: 12px;
    min-height: 52px;
    color: var(--kb-board-text);
}

.kb-board-swimlane-toggle {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 38px;
    height: 38px;
    border: 1px solid var(--kb-board-border);
    border-radius: 12px;
    background: #ffffff;
    color: var(--kb-board-blue-700);
    box-shadow: 0 8px 18px rgba(15, 23, 42, 0.04);
    text-decoration: none;
}

.kb-board-swimlane-toggle:hover,
.kb-board-swimlane-toggle:focus {
    color: var(--kb-board-blue-700);
    background: #eff6ff;
    border-color: var(--kb-board-border-strong);
    text-decoration: none;
}

.kb-board-swimlane-name {
    display: inline-flex;
    align-items: center;
    min-height: 38px;
    padding: 0 14px;
    border-radius: 999px;
    background: linear-gradient(180deg, #ffffff 0%, #f8fbff 100%);
    border: 1px solid var(--kb-board-border);
    color: var(--kb-board-text);
    font-size: 0.86rem;
    font-weight: 900;
    letter-spacing: 0.02em;
    box-shadow: 0 8px 18px rgba(15, 23, 42, 0.04);
}

.kb-board-swimlane-header .tooltip {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 32px;
    height: 32px;
    border-radius: 999px;
    background: #ffffff;
    border: 1px solid var(--kb-board-border);
    color: var(--kb-board-text-soft);
}

.kb-board-swimlane-count {
    display: inline-flex;
    align-items: center;
    min-height: 34px;
    padding: 0 12px;
    border-radius: 999px;
    background: #eff6ff;
    border: 1px solid rgba(59, 130, 246, 0.16);
    color: var(--kb-board-blue-700);
    font-size: 0.78rem;
    font-weight: 800;
}

.board-column-collapsed {
    display: none;
}

.board-column-expanded-header.kb-board-column-shell {
    display: flex;
    align-items: flex-start;
    justify-content: space-between;
    gap: 12px;
    min-height: 84px;
    padding: 16px;
    border: 1px solid var(--kb-board-border);
    border-radius: var(--kb-board-radius-lg);
    background: linear-gradient(180deg, #ffffff 0%, #f8fbff 100%);
    box-shadow: var(--kb-board-shadow-sm);
}

.kb-board-column-main {
    display: flex;
    align-items: center;
    gap: 10px;
    min-width: 0;
    flex: 1 1 auto;
}

.board-column-title.kb-board-column-title {
    display: flex;
    align-items: center;
    gap: 8px;
    min-width: 0;
    flex-wrap: wrap;
}

.board-column-title.kb-board-column-title > .dropdown {
    display: inline-flex;
    align-items: center;
    position: relative;
}

.board-column-title.kb-board-column-title > .dropdown > a.dropdown-menu {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    min-height: 40px;
    max-width: 228px;
    padding: 8px 12px;
    border-radius: 14px;
    border: 1px solid var(--kb-board-border);
    background: #ffffff;
    color: var(--kb-board-text);
    font-size: 0.9rem;
    font-weight: 800;
    line-height: 1.35;
    text-align: left;
    white-space: normal;
    box-shadow: 0 8px 18px rgba(15, 23, 42, 0.04);
    text-decoration: none;
}

.board-column-title.kb-board-column-title > .dropdown > a.dropdown-menu:hover {
    color: var(--kb-board-blue-700);
    border-color: var(--kb-board-border-strong);
    background: #f8fbff;
}

.kb-board-column-sort > a.dropdown-menu {
    min-width: 40px;
    justify-content: center;
    padding: 0 10px;
}

.kb-board-page .dropdown,
.kb-public-board-page .dropdown {
    position: relative;
}

.kb-board-page .dropdown:hover,
.kb-board-page .dropdown.open,
.kb-public-board-page .dropdown:hover,
.kb-public-board-page .dropdown.open {
    z-index: 130;
}

.kb-board-page .dropdown > ul,
.kb-board-page ul.dropdown-submenu-open,
.kb-board-page .dropdown-submenu-open ul,
.kb-public-board-page .dropdown > ul {
    min-width: 250px;
    max-height: min(70vh, 420px);
    overflow-y: auto;
    overflow-x: hidden;
    overscroll-behavior: contain;
    z-index: 120;
}

.kb-board-page .dropdown > ul::-webkit-scrollbar,
.kb-board-page ul.dropdown-submenu-open::-webkit-scrollbar,
.kb-board-page .dropdown-submenu-open ul::-webkit-scrollbar,
.kb-public-board-page .dropdown > ul::-webkit-scrollbar {
    width: 10px;
}

.kb-board-page .dropdown > ul::-webkit-scrollbar-thumb,
.kb-board-page ul.dropdown-submenu-open::-webkit-scrollbar-thumb,
.kb-board-page .dropdown-submenu-open ul::-webkit-scrollbar-thumb,
.kb-public-board-page .dropdown > ul::-webkit-scrollbar-thumb {
    border: 2px solid rgba(255, 255, 255, 0.96);
    border-radius: 999px;
    background: rgba(148, 163, 184, 0.45);
}

.kb-board-page .dropdown > ul,
.kb-board-page .dropdown-menu,
.kb-board-page ul.dropdown-submenu-open,
.kb-board-page .dropdown-submenu-open ul,
.kb-public-board-page .dropdown > ul,
.kb-public-board-page .dropdown-menu,
.kb-public-board-page ul.dropdown-submenu-open,
.kb-public-board-page .dropdown-submenu-open ul {
    min-width: 250px;
    margin-top: 10px;
    padding: 8px !important;
    border: 1px solid var(--kb-board-border-strong) !important;
    border-radius: 18px !important;
    background: linear-gradient(180deg, #ffffff 0%, #f8fbff 100%) !important;
    box-shadow: 0 22px 48px rgba(15, 23, 42, 0.12) !important;
}

.kb-board-page .dropdown > ul li,
.kb-board-page .dropdown-menu li,
.kb-board-page .dropdown-submenu-open li,
.kb-board-page .dropdown-submenu-open ul li,
.kb-public-board-page .dropdown > ul li,
.kb-public-board-page .dropdown-menu li,
.kb-public-board-page .dropdown-submenu-open li,
.kb-public-board-page .dropdown-submenu-open ul li {
    margin: 2px 0 !important;
    padding: 0 !important;
    border: 0 !important;
    background: transparent !important;
}

.kb-board-page .dropdown > ul li > a,
.kb-board-page .dropdown-menu li > a,
.kb-board-page .dropdown-submenu-open li > a,
.kb-board-page .dropdown-submenu-open ul li > a,
.kb-public-board-page .dropdown > ul li > a,
.kb-public-board-page .dropdown-menu li > a,
.kb-public-board-page .dropdown-submenu-open li > a,
.kb-public-board-page .dropdown-submenu-open ul li > a {
    display: flex;
    align-items: center;
    gap: 10px;
    min-height: 44px;
    padding: 0 14px !important;
    border: 1px solid transparent !important;
    border-radius: 12px;
    color: var(--kb-board-text) !important;
    background: transparent !important;
    font-size: 14px;
    font-weight: 600;
    line-height: 1.25;
    text-decoration: none;
    box-shadow: none !important;
    transition: background-color 0.18s ease, border-color 0.18s ease, color 0.18s ease;
}

.kb-board-page .dropdown > ul i,
.kb-board-page .dropdown > ul .fa,
.kb-board-page .dropdown-menu i,
.kb-board-page .dropdown-menu .fa,
.kb-board-page .dropdown-submenu-open i,
.kb-board-page .dropdown-submenu-open .fa,
.kb-public-board-page .dropdown > ul i,
.kb-public-board-page .dropdown > ul .fa,
.kb-public-board-page .dropdown-menu i,
.kb-public-board-page .dropdown-menu .fa,
.kb-public-board-page .dropdown-submenu-open i,
.kb-public-board-page .dropdown-submenu-open .fa {
    color: var(--kb-board-blue-600) !important;
}

.kb-board-page .dropdown > ul li:not(.no-hover):hover,
.kb-board-page .dropdown > ul li:not(.no-hover):focus,
.kb-board-page .dropdown-menu li:not(.no-hover):hover,
.kb-board-page .dropdown-menu li:not(.no-hover):focus,
.kb-board-page .dropdown-submenu-open li:not(.no-hover):hover,
.kb-board-page .dropdown-submenu-open li:not(.no-hover):focus,
.kb-public-board-page .dropdown > ul li:not(.no-hover):hover,
.kb-public-board-page .dropdown > ul li:not(.no-hover):focus,
.kb-public-board-page .dropdown-menu li:not(.no-hover):hover,
.kb-public-board-page .dropdown-menu li:not(.no-hover):focus,
.kb-public-board-page .dropdown-submenu-open li:not(.no-hover):hover,
.kb-public-board-page .dropdown-submenu-open li:not(.no-hover):focus {
    background: transparent !important;
    color: var(--kb-board-blue-700) !important;
}

.kb-board-page .dropdown > ul li:hover > a,
.kb-board-page .dropdown > ul li > a:focus,
.kb-board-page .dropdown-menu li:hover > a,
.kb-board-page .dropdown-menu li > a:focus,
.kb-board-page .dropdown-submenu-open li:hover > a,
.kb-board-page .dropdown-submenu-open li > a:focus,
.kb-board-page .dropdown > ul li:not(.no-hover):hover .dropdown-menu-link-text,
.kb-board-page .dropdown > ul li:not(.no-hover):hover .dropdown-menu-link-icon,
.kb-board-page .dropdown-menu li:not(.no-hover):hover .dropdown-menu-link-text,
.kb-board-page .dropdown-menu li:not(.no-hover):hover .dropdown-menu-link-icon,
.kb-board-page .dropdown-submenu-open li:not(.no-hover):hover .dropdown-menu-link-text,
.kb-board-page .dropdown-submenu-open li:not(.no-hover):hover .dropdown-menu-link-icon,
.kb-public-board-page .dropdown > ul li:hover > a,
.kb-public-board-page .dropdown > ul li > a:focus,
.kb-public-board-page .dropdown-menu li:hover > a,
.kb-public-board-page .dropdown-menu li > a:focus,
.kb-public-board-page .dropdown-submenu-open li:hover > a,
.kb-public-board-page .dropdown-submenu-open li > a:focus,
.kb-public-board-page .dropdown > ul li:not(.no-hover):hover .dropdown-menu-link-text,
.kb-public-board-page .dropdown > ul li:not(.no-hover):hover .dropdown-menu-link-icon,
.kb-public-board-page .dropdown-menu li:not(.no-hover):hover .dropdown-menu-link-text,
.kb-public-board-page .dropdown-menu li:not(.no-hover):hover .dropdown-menu-link-icon,
.kb-public-board-page .dropdown-submenu-open li:not(.no-hover):hover .dropdown-menu-link-text,
.kb-public-board-page .dropdown-submenu-open li:not(.no-hover):hover .dropdown-menu-link-icon {
    background: #000ba6 !important;
    background: linear-gradient(90deg, rgba(0, 11, 166, 1) 0%, rgba(0, 17, 255, 1) 100%) !important;
    border-color: transparent !important;
    color: #ffffff !important;
    box-shadow: 0 14px 28px rgba(0, 17, 255, 0.18) !important;
    transform: none !important;
}

.kb-board-page .dropdown > ul li:hover i,
.kb-board-page .dropdown > ul li:hover .fa,
.kb-board-page .dropdown-menu li:hover i,
.kb-board-page .dropdown-menu li:hover .fa,
.kb-board-page .dropdown-submenu-open li:hover i,
.kb-board-page .dropdown-submenu-open li:hover .fa,
.kb-public-board-page .dropdown > ul li:hover i,
.kb-public-board-page .dropdown > ul li:hover .fa,
.kb-public-board-page .dropdown-menu li:hover i,
.kb-public-board-page .dropdown-menu li:hover .fa,
.kb-public-board-page .dropdown-submenu-open li:hover i,
.kb-public-board-page .dropdown-submenu-open li:hover .fa {
    color: #ffffff !important;
}

.kb-board-column-stats {
    display: flex;
    flex-wrap: wrap;
    justify-content: flex-end;
    gap: 8px;
    min-width: 0;
    margin-left: auto;
}

.kb-board-column-stats > span,
.kb-board-column-stats > a,
.kb-board-column-stats .tooltip {
    display: inline-flex;
    align-items: center;
    min-height: 30px;
    padding: 0 10px;
    border-radius: 999px;
    border: 1px solid rgba(148, 163, 184, 0.16);
    background: #ffffff;
    color: var(--kb-board-text-soft);
    font-size: 0.76rem;
    font-weight: 800;
    text-decoration: none;
}

.kb-board-column-stats .tooltip i,
.kb-board-column-stats a i {
    color: inherit;
}

#board.kb-board-grid th.board-column-header-collapsed {
    width: 92px;
    min-width: 92px;
}

#board.kb-board-grid th.board-column-header-collapsed .board-column-collapsed {
    display: block;
}

#board.kb-board-grid th.board-column-header-collapsed .board-column-expanded {
    display: none;
}

#board.kb-board-grid td.board-column-task-collapsed {
    background: transparent;
}

.board-rotation-wrapper {
    position: relative;
    min-height: 250px;
    padding: 12px 0;
    overflow: hidden;
    display: flex;
    align-items: flex-end;
    justify-content: center;
    border: 1px solid var(--kb-board-border);
    border-radius: 20px;
    background: linear-gradient(180deg, #ffffff 0%, #f8fbff 100%);
    box-shadow: var(--kb-board-shadow-sm);
}

.board-rotation {
    white-space: nowrap;
    transform: rotate(90deg);
    transform-origin: 0 100%;
    color: var(--kb-board-text-soft);
    font-weight: 800;
    letter-spacing: 0.01em;
}

.board-rotation i {
    color: var(--kb-board-blue-600);
}

.board-add-icon {
    float: none;
}

.board-add-icon > a,
.board-add-icon .dropdown > a {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 40px;
    height: 40px;
    border-radius: 14px;
    border: 0;
    background: var(--kb-board-gradient);
    color: #ffffff;
    box-shadow: 0 14px 28px rgba(37, 99, 235, 0.18);
    text-decoration: none;
}

.board-add-icon > a:hover,
.board-add-icon .dropdown > a:hover {
    color: #ffffff;
    transform: translateY(-1px);
}

.kb-board-task-row > td {
    position: relative;
}

.kb-board-column-cell .kb-board-task-list {
    min-height: 300px;
}

.kb-board-task-list {
    min-height: 80px;
    padding: 14px;
    border: 1px solid rgba(148, 163, 184, 0.16);
    border-radius: 24px;
    background: linear-gradient(180deg, rgba(248, 251, 255, 0.96) 0%, rgba(241, 245, 255, 0.92) 100%);
    box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.95);
}

.kb-board-column-cell.board-task-list-limit .kb-board-task-list,
.kb-board-task-row.board-task-list-limit .kb-board-column-cell .kb-board-task-list,
#board-container.kb-board-limit .kb-board-task-list {
    background: linear-gradient(180deg, rgba(255, 248, 248, 0.96) 0%, rgba(255, 255, 255, 0.98) 100%);
    border-color: rgba(239, 68, 68, 0.16);
}

.draggable-placeholder {
    height: 112px;
    margin-bottom: 12px;
    border: 2px dashed rgba(59, 130, 246, 0.32);
    border-radius: 18px;
    background: rgba(219, 234, 254, 0.55);
}

.task-board.kb-board-card {
    --kb-card-accent: #94a3b8;
    --kb-card-border-color: rgba(148, 163, 184, 0.24);
    --kb-card-surface-top: rgba(255, 255, 255, 0.98);
    --kb-card-surface-bottom: rgba(248, 250, 252, 0.92);
    --kb-card-shadow-color: rgba(15, 23, 42, 0.05);
    position: relative;
    margin-bottom: 12px;
    border: 1px solid var(--kb-card-border-color);
    border-radius: 20px;
    background: linear-gradient(180deg, var(--kb-card-surface-top) 0%, var(--kb-card-surface-bottom) 100%);
    padding: 14px;
    word-wrap: break-word;
    font-size: 0.92rem;
    box-shadow: 0 12px 24px var(--kb-card-shadow-color);
    transition: border-color 0.18s ease, box-shadow 0.18s ease, transform 0.18s ease;
    cursor: pointer;
}

.task-board.kb-board-card::before {
    content: "";
    position: absolute;
    inset: 12px auto 12px 0;
    width: 4px;
    border-radius: 999px;
    background: var(--kb-card-accent);
    opacity: 0.95;
}

.task-board.kb-board-card:last-child {
    margin-bottom: 0;
}

.task-board.kb-board-card:hover {
    border-color: var(--kb-card-accent);
    box-shadow: 0 18px 34px var(--kb-card-shadow-color), 0 8px 18px rgba(15, 23, 42, 0.05);
    transform: translateY(-2px);
}

.task-board.kb-board-card.task-board-recent {
    border-width: 1px;
    border-color: var(--kb-card-accent);
    box-shadow: 0 18px 38px var(--kb-card-shadow-color), 0 8px 18px rgba(15, 23, 42, 0.04);
}

.task-board.kb-board-card.task-board-status-closed {
    border-style: solid;
    background: linear-gradient(180deg, rgba(255, 255, 255, 0.96) 0%, rgba(248, 250, 252, 0.92) 100%);
    opacity: 0.82;
}

div.draggable-item-selected.task-board.kb-board-card {
    border-color: var(--kb-card-accent);
    box-shadow: 0 0 0 2px rgba(59, 130, 246, 0.14), 0 14px 32px rgba(15, 23, 42, 0.08);
}

.task-board.kb-board-card.color-yellow {
    --kb-card-accent: rgb(223, 227, 45);
    --kb-card-border-color: rgba(223, 227, 45, 0.38);
    --kb-card-surface-bottom: rgba(245, 247, 196, 0.86);
    --kb-card-shadow-color: rgba(223, 227, 45, 0.12);
}

.task-board.kb-board-card.color-blue {
    --kb-card-accent: rgb(98, 165, 241);
    --kb-card-border-color: rgba(168, 207, 255, 0.48);
    --kb-card-surface-bottom: rgba(219, 235, 255, 0.90);
    --kb-card-shadow-color: rgba(59, 130, 246, 0.12);
}

.task-board.kb-board-card.color-green {
    --kb-card-accent: rgb(74, 227, 113);
    --kb-card-border-color: rgba(74, 227, 113, 0.34);
    --kb-card-surface-bottom: rgba(189, 244, 203, 0.88);
    --kb-card-shadow-color: rgba(34, 197, 94, 0.12);
}

.task-board.kb-board-card.color-purple {
    --kb-card-accent: rgb(205, 133, 254);
    --kb-card-border-color: rgba(205, 133, 254, 0.34);
    --kb-card-surface-bottom: rgba(223, 176, 255, 0.84);
    --kb-card-shadow-color: rgba(168, 85, 247, 0.12);
}

.task-board.kb-board-card.color-red {
    --kb-card-accent: rgb(255, 151, 151);
    --kb-card-border-color: rgba(255, 151, 151, 0.42);
    --kb-card-surface-bottom: rgba(255, 187, 187, 0.84);
    --kb-card-shadow-color: rgba(239, 68, 68, 0.12);
}

.task-board.kb-board-card.color-orange {
    --kb-card-accent: rgb(255, 172, 98);
    --kb-card-border-color: rgba(255, 172, 98, 0.40);
    --kb-card-surface-bottom: rgba(255, 215, 179, 0.88);
    --kb-card-shadow-color: rgba(249, 115, 22, 0.12);
}

.task-board.kb-board-card.color-grey {
    --kb-card-accent: rgb(160, 174, 192);
    --kb-card-border-color: rgba(204, 204, 204, 0.48);
    --kb-card-surface-bottom: rgba(238, 238, 238, 0.86);
    --kb-card-shadow-color: rgba(100, 116, 139, 0.10);
}

.task-board.kb-board-card.color-brown {
    --kb-card-accent: rgb(78, 52, 46);
    --kb-card-border-color: rgba(78, 52, 46, 0.28);
    --kb-card-surface-bottom: rgba(215, 204, 200, 0.88);
    --kb-card-shadow-color: rgba(120, 72, 48, 0.12);
}

.task-board.kb-board-card.color-deep_orange {
    --kb-card-accent: rgb(230, 74, 25);
    --kb-card-border-color: rgba(230, 74, 25, 0.34);
    --kb-card-surface-bottom: rgba(255, 171, 145, 0.86);
    --kb-card-shadow-color: rgba(234, 88, 12, 0.12);
}

.task-board.kb-board-card.color-dark_grey {
    --kb-card-accent: rgb(69, 90, 100);
    --kb-card-border-color: rgba(69, 90, 100, 0.30);
    --kb-card-surface-bottom: rgba(207, 216, 220, 0.88);
    --kb-card-shadow-color: rgba(71, 85, 105, 0.12);
}

.task-board.kb-board-card.color-pink {
    --kb-card-accent: rgb(216, 27, 96);
    --kb-card-border-color: rgba(216, 27, 96, 0.28);
    --kb-card-surface-bottom: rgba(244, 143, 177, 0.86);
    --kb-card-shadow-color: rgba(236, 72, 153, 0.12);
}

.task-board.kb-board-card.color-teal {
    --kb-card-accent: rgb(0, 105, 92);
    --kb-card-border-color: rgba(0, 105, 92, 0.28);
    --kb-card-surface-bottom: rgba(128, 203, 196, 0.88);
    --kb-card-shadow-color: rgba(13, 148, 136, 0.12);
}

.task-board.kb-board-card.color-cyan {
    --kb-card-accent: rgb(0, 188, 212);
    --kb-card-border-color: rgba(0, 188, 212, 0.28);
    --kb-card-surface-bottom: rgba(178, 235, 242, 0.88);
    --kb-card-shadow-color: rgba(6, 182, 212, 0.12);
}

.task-board.kb-board-card.color-lime {
    --kb-card-accent: rgb(175, 180, 43);
    --kb-card-border-color: rgba(175, 180, 43, 0.34);
    --kb-card-surface-bottom: rgba(230, 238, 156, 0.88);
    --kb-card-shadow-color: rgba(132, 204, 22, 0.12);
}

.task-board.kb-board-card.color-light_green {
    --kb-card-accent: rgb(104, 159, 56);
    --kb-card-border-color: rgba(104, 159, 56, 0.34);
    --kb-card-surface-bottom: rgba(220, 237, 200, 0.90);
    --kb-card-shadow-color: rgba(101, 163, 13, 0.12);
}

.task-board.kb-board-card.color-amber {
    --kb-card-accent: rgb(255, 160, 0);
    --kb-card-border-color: rgba(255, 160, 0, 0.34);
    --kb-card-surface-bottom: rgba(255, 224, 130, 0.88);
    --kb-card-shadow-color: rgba(245, 158, 11, 0.12);
}

.task-board-saving-icon {
    color: var(--kb-board-blue-600);
}

.task-board-collapsed.kb-board-card-collapsed {
    display: flex;
    align-items: center;
    gap: 8px;
    min-height: 40px;
    overflow: hidden;
    white-space: nowrap;
    text-overflow: ellipsis;
    color: var(--kb-board-text-soft);
}

.task-board-collapsed.kb-board-card-collapsed > .dropdown > a,
.task-board-collapsed.kb-board-card-collapsed > a.js-modal-large,
.task-board-collapsed.kb-board-card-collapsed > strong {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    min-height: 30px;
    padding: 0 10px;
    border-radius: 10px;
    background: #f8fbff;
    border: 1px solid rgba(148, 163, 184, 0.16);
    color: var(--kb-board-blue-700);
    font-size: 0.76rem;
    font-weight: 800;
    text-decoration: none;
}

.task-board-expanded.kb-board-card-expanded {
    display: flex;
    flex-direction: column;
    gap: 12px;
}

.task-board-header.kb-board-card-header {
    display: flex;
    align-items: flex-start;
    gap: 10px;
    flex-wrap: wrap;
}

.task-board-header.kb-board-card-header > .dropdown > a,
.task-board-header.kb-board-card-header > a:not(.js-modal-large),
.task-board-header.kb-board-card-header > a.js-modal-large,
.task-board-header.kb-board-card-header > strong {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    min-height: 34px;
    padding: 0 10px;
    border-radius: 12px;
    border: 1px solid rgba(148, 163, 184, 0.16);
    background: rgba(255, 255, 255, 0.82);
    color: var(--kb-board-text);
    font-size: 0.76rem;
    font-weight: 800;
    text-decoration: none;
    box-shadow: none;
}

.task-board-header.kb-board-card-header > .dropdown > a strong {
    display: inline-flex;
    align-items: center;
    gap: 6px;
}

.task-board-header.kb-board-card-header > a.js-modal-large {
    width: 34px;
    padding: 0;
}

.task-board-header.kb-board-card-header > .dropdown > a:hover,
.task-board-header.kb-board-card-header > a:not(.js-modal-large):hover,
.task-board-header.kb-board-card-header > a.js-modal-large:hover {
    color: var(--kb-board-blue-700);
    border-color: rgba(59, 130, 246, 0.24);
    background: rgba(255, 255, 255, 0.96);
}

.kb-board-card-assignee {
    display: inline-flex;
    align-items: center;
    min-height: 34px;
    max-width: 180px;
    padding: 0 10px;
    border-radius: 999px;
    background: rgba(255, 255, 255, 0.78);
    border: 1px solid rgba(148, 163, 184, 0.14);
    color: var(--kb-board-text-soft);
    font-size: 0.78rem;
    font-weight: 700;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}

.task-board-avatars.kb-board-avatar-stack {
    margin-left: auto;
    float: none;
    display: inline-flex;
    align-items: center;
    justify-content: flex-end;
}

.task-board-avatars.kb-board-avatar-stack .avatar-inline,
.task-board-avatars.kb-board-avatar-stack img,
.task-board-avatars.kb-board-avatar-stack .avatar {
    width: 30px;
    height: 30px;
    border-radius: 999px;
    border: 2px solid #ffffff;
    box-shadow: 0 10px 18px rgba(15, 23, 42, 0.08);
}

.task-board-title.kb-board-card-title {
    margin: 0;
}

.task-board-title.kb-board-card-title a {
    display: block;
    color: var(--kb-board-text);
    text-decoration: none;
    font-size: 0.98rem;
    font-weight: 800;
    line-height: 1.45;
    letter-spacing: -0.01em;
    word-break: break-word;
}

.task-board-title.kb-board-card-title a:hover {
    color: var(--kb-board-blue-700);
    text-decoration: none;
}

.task-board-category-container.kb-board-category-wrap {
    margin: 0;
    text-align: left;
}

.task-board-category.kb-board-category {
    --kb-chip-bg: rgba(255, 255, 255, 0.78);
    --kb-chip-border: rgba(148, 163, 184, 0.20);
    --kb-chip-text: var(--kb-board-text-soft);
    display: inline-flex;
    align-items: center;
    min-height: 30px;
    padding: 0 10px;
    border-radius: 999px;
    border: 1px solid var(--kb-chip-border);
    background: var(--kb-chip-bg);
    color: var(--kb-chip-text);
    font-size: 0.76rem;
    font-weight: 800;
}

.task-board-category.kb-board-category a {
    color: inherit;
    text-decoration: none;
}

.task-board-category.kb-board-category a:hover {
    text-decoration: none;
}

.task-tags.kb-board-tag-list ul {
    display: flex;
    flex-wrap: wrap;
    gap: 8px;
    margin: 0;
    padding: 0;
    list-style: none;
}

.task-tags.kb-board-tag-list li,
.task-tags.kb-board-tag-list .task-tag {
    --kb-chip-bg: rgba(255, 255, 255, 0.74);
    --kb-chip-border: rgba(148, 163, 184, 0.18);
    --kb-chip-text: var(--kb-board-text-soft);
    display: inline-flex;
    align-items: center;
    min-height: 28px;
    margin: 0;
    padding: 0 10px;
    border-radius: 999px;
    border: 1px solid var(--kb-chip-border);
    background: var(--kb-chip-bg);
    color: var(--kb-chip-text);
    font-size: 0.74rem;
    font-weight: 700;
}

.task-board-icons.kb-board-card-meta {
    margin-top: 0;
    padding-top: 12px;
    border-top: 1px solid rgba(148, 163, 184, 0.14);
    text-align: left;
    display: flex;
    flex-direction: column;
    gap: 8px;
}

.task-board-icons .kb-board-meta-row {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    gap: 8px;
    line-height: 1.4;
}

.task-board-icons.kb-board-card-meta .kb-board-meta-row > a,
.task-board-icons.kb-board-card-meta .kb-board-meta-row > span,
.task-board-icons.kb-board-card-meta .kb-board-meta-row > .task-priority,
.task-board-icons.kb-board-card-meta .kb-board-meta-row > .task-board-closed {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    min-height: 30px;
    margin: 0;
    padding: 0 10px;
    border-radius: 999px;
    border: 1px solid rgba(148, 163, 184, 0.14);
    background: rgba(255, 255, 255, 0.74);
    color: var(--kb-board-text-soft);
    font-size: 0.75rem;
    font-weight: 700;
    opacity: 1;
    text-decoration: none;
}

.task-board-icons.kb-board-card-meta .kb-board-meta-row > a i,
.task-board-icons.kb-board-card-meta .kb-board-meta-row > span i {
    color: inherit;
}

.task-board-icons.kb-board-card-meta .kb-board-meta-row > a:hover,
.task-board-icons.kb-board-card-meta .kb-board-meta-row > span.tooltip:hover {
    background: #eff6ff;
    color: var(--kb-board-blue-700);
    font-weight: 700;
}

.task-board-icons.kb-board-card-meta .task-score {
    color: var(--kb-board-blue-700);
}

.task-board-icons.kb-board-card-meta .flag-milestone {
    color: var(--kb-board-blue-600);
}

.task-board-reference.kb-board-pill-reference a {
    color: inherit;
}

.task-date.kb-board-pill-date.task-date-today {
    color: var(--kb-board-blue-700);
    background: #eff6ff;
    border-color: rgba(59, 130, 246, 0.18);
}

.task-date.kb-board-pill-date.task-date-overdue {
    color: #b91c1c;
    background: #fef2f2;
    border-color: rgba(239, 68, 68, 0.18);
}

.task-icon-age.kb-board-age {
    display: inline-flex;
    align-items: stretch;
    overflow: hidden;
    border: 1px solid rgba(148, 163, 184, 0.14);
    border-radius: 999px;
    background: #ffffff;
}

.task-icon-age.kb-board-age span.task-icon-age-total,
.task-icon-age.kb-board-age span.task-icon-age-column {
    display: inline-flex;
    align-items: center;
    min-height: 30px;
    margin: 0;
    padding: 0 8px;
    border: 0;
    color: var(--kb-board-text-soft);
}

.task-icon-age.kb-board-age span.task-icon-age-column {
    border-left: 1px solid rgba(148, 163, 184, 0.14);
    background: #f8fbff;
}

.task-board-closed.kb-board-pill-closed {
    background: #f8fafc;
}

.task-board-category.kb-board-category.color-yellow,
.task-tags.kb-board-tag-list .task-tag.color-yellow {
    --kb-chip-bg: rgba(245, 247, 196, 0.92);
    --kb-chip-border: rgba(223, 227, 45, 0.42);
    --kb-chip-text: #5b6118;
}

.task-board-category.kb-board-category.color-blue,
.task-tags.kb-board-tag-list .task-tag.color-blue {
    --kb-chip-bg: rgba(219, 235, 255, 0.94);
    --kb-chip-border: rgba(168, 207, 255, 0.54);
    --kb-chip-text: #1d4ed8;
}

.task-board-category.kb-board-category.color-green,
.task-tags.kb-board-tag-list .task-tag.color-green {
    --kb-chip-bg: rgba(189, 244, 203, 0.94);
    --kb-chip-border: rgba(74, 227, 113, 0.44);
    --kb-chip-text: #166534;
}

.task-board-category.kb-board-category.color-purple,
.task-tags.kb-board-tag-list .task-tag.color-purple {
    --kb-chip-bg: rgba(223, 176, 255, 0.90);
    --kb-chip-border: rgba(205, 133, 254, 0.44);
    --kb-chip-text: #7e22ce;
}

.task-board-category.kb-board-category.color-red,
.task-tags.kb-board-tag-list .task-tag.color-red {
    --kb-chip-bg: rgba(255, 187, 187, 0.92);
    --kb-chip-border: rgba(255, 151, 151, 0.48);
    --kb-chip-text: #b91c1c;
}

.task-board-category.kb-board-category.color-orange,
.task-tags.kb-board-tag-list .task-tag.color-orange {
    --kb-chip-bg: rgba(255, 215, 179, 0.92);
    --kb-chip-border: rgba(255, 172, 98, 0.46);
    --kb-chip-text: #c2410c;
}

.task-board-category.kb-board-category.color-grey,
.task-tags.kb-board-tag-list .task-tag.color-grey {
    --kb-chip-bg: rgba(238, 238, 238, 0.94);
    --kb-chip-border: rgba(204, 204, 204, 0.56);
    --kb-chip-text: #475569;
}

.task-board-category.kb-board-category.color-brown,
.task-tags.kb-board-tag-list .task-tag.color-brown {
    --kb-chip-bg: rgba(215, 204, 200, 0.92);
    --kb-chip-border: rgba(78, 52, 46, 0.34);
    --kb-chip-text: #5b3a29;
}

.task-board-category.kb-board-category.color-deep_orange,
.task-tags.kb-board-tag-list .task-tag.color-deep_orange {
    --kb-chip-bg: rgba(255, 171, 145, 0.92);
    --kb-chip-border: rgba(230, 74, 25, 0.36);
    --kb-chip-text: #c2410c;
}

.task-board-category.kb-board-category.color-dark_grey,
.task-tags.kb-board-tag-list .task-tag.color-dark_grey {
    --kb-chip-bg: rgba(207, 216, 220, 0.94);
    --kb-chip-border: rgba(69, 90, 100, 0.34);
    --kb-chip-text: #334155;
}

.task-board-category.kb-board-category.color-pink,
.task-tags.kb-board-tag-list .task-tag.color-pink {
    --kb-chip-bg: rgba(244, 143, 177, 0.92);
    --kb-chip-border: rgba(216, 27, 96, 0.34);
    --kb-chip-text: #be185d;
}

.task-board-category.kb-board-category.color-teal,
.task-tags.kb-board-tag-list .task-tag.color-teal {
    --kb-chip-bg: rgba(128, 203, 196, 0.94);
    --kb-chip-border: rgba(0, 105, 92, 0.32);
    --kb-chip-text: #0f766e;
}

.task-board-category.kb-board-category.color-cyan,
.task-tags.kb-board-tag-list .task-tag.color-cyan {
    --kb-chip-bg: rgba(178, 235, 242, 0.94);
    --kb-chip-border: rgba(0, 188, 212, 0.34);
    --kb-chip-text: #0f766e;
}

.task-board-category.kb-board-category.color-lime,
.task-tags.kb-board-tag-list .task-tag.color-lime {
    --kb-chip-bg: rgba(230, 238, 156, 0.94);
    --kb-chip-border: rgba(175, 180, 43, 0.38);
    --kb-chip-text: #4d5d12;
}

.task-board-category.kb-board-category.color-light_green,
.task-tags.kb-board-tag-list .task-tag.color-light_green {
    --kb-chip-bg: rgba(220, 237, 200, 0.94);
    --kb-chip-border: rgba(104, 159, 56, 0.36);
    --kb-chip-text: #3f6212;
}

.task-board-category.kb-board-category.color-amber,
.task-tags.kb-board-tag-list .task-tag.color-amber {
    --kb-chip-bg: rgba(255, 224, 130, 0.94);
    --kb-chip-border: rgba(255, 160, 0, 0.38);
    --kb-chip-text: #92400e;
}

.kb-board-swimlane-toggle:focus-visible,
.board-add-icon > a:focus-visible,
.board-add-icon .dropdown > a:focus-visible,
.board-column-title.kb-board-column-title > .dropdown > a.dropdown-menu:focus-visible,
.task-board-header.kb-board-card-header > .dropdown > a:focus-visible,
.task-board-header.kb-board-card-header > a:focus-visible,
.task-board-title.kb-board-card-title a:focus-visible {
    outline: none;
    box-shadow: 0 0 0 4px rgba(59, 130, 246, 0.16);
}

@media (max-width: 1200px) {
    #board.kb-board-grid th.board-column-header {
        width: 292px;
        min-width: 292px;
    }
}

@media (max-width: 768px) {
    .kb-public-board-page {
        width: calc(100% - 18px);
    }

    #board-container.kb-board-surface {
        padding: 14px;
        border-radius: 24px;
    }

    #board.kb-board-grid {
        border-spacing: 12px 12px;
    }

    #board.kb-board-grid th.board-column-header {
        width: 268px;
        min-width: 268px;
    }

    .board-column-expanded-header.kb-board-column-shell {
        min-height: 74px;
        padding: 14px;
    }

    .kb-board-task-list {
        padding: 12px;
        border-radius: 20px;
    }

    .task-board.kb-board-card {
        padding: 12px;
        border-radius: 18px;
    }

    .task-board-icons .kb-board-meta-row {
        gap: 6px;
    }
}
</style>
<?php endif; ?>
