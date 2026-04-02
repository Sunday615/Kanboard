<?php static $kbTaskListModernStylesLoaded = false; ?>
<?php if (! $kbTaskListModernStylesLoaded): ?>
<?php $kbTaskListModernStylesLoaded = true; ?>
<style>
.kb-project-task-list-page {
    --kb-list-surface: #ffffff;
    --kb-list-surface-soft: #fbfcff;
    --kb-list-border: rgba(148, 163, 184, 0.18);
    --kb-list-border-strong: rgba(76, 111, 255, 0.20);
    --kb-list-text: #162033;
    --kb-list-text-soft: #52607a;
    --kb-list-text-muted: #7a879d;
    --kb-list-blue-700: #4366f1;
    --kb-list-blue-600: #4c6fff;
    --kb-list-gradient: linear-gradient(135deg, #4c6fff 0%, #597bf8 100%);
    --kb-list-shadow-sm: 0 12px 24px rgba(15, 23, 42, 0.05);
    --kb-list-shadow-md: 0 18px 40px rgba(15, 23, 42, 0.06);
    display: flex;
    flex-direction: column;
    gap: 18px;
    margin-top: 18px;
}

.kb-project-task-list-page .alert {
    margin: 0;
    padding: 20px 22px;
    border: 1px solid var(--kb-list-border);
    border-radius: 24px;
    background: linear-gradient(180deg, rgba(255, 255, 255, 0.98) 0%, rgba(251, 252, 255, 0.98) 100%);
    color: var(--kb-list-text-soft);
    box-shadow: var(--kb-list-shadow-sm);
}

.kb-task-list-shell {
    display: flex;
    flex-direction: column;
    gap: 16px;
}

.kb-task-list-toolbar {
    border: 1px solid var(--kb-list-border);
    border-radius: 28px;
    background:
        radial-gradient(circle at top right, rgba(76, 111, 255, 0.07), transparent 24%),
        linear-gradient(180deg, rgba(255, 255, 255, 0.98) 0%, rgba(251, 252, 255, 0.98) 100%);
    box-shadow: var(--kb-list-shadow-md);
    overflow: hidden;
}

.kb-task-list-toolbar::before {
    content: "";
    display: block;
    height: 3px;
    background: var(--kb-list-gradient);
}

.kb-project-task-list-page .table-list-header.kb-task-list-toolbar-row {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 12px 16px;
    flex-wrap: wrap;
    padding: 18px 20px 20px;
    border: 0;
    background: transparent;
}

.kb-project-task-list-page .table-list-header-count.kb-task-list-count {
    display: inline-flex;
    align-items: center;
    min-height: 42px;
    padding: 0 14px;
    border: 1px solid rgba(148, 163, 184, 0.16);
    border-radius: 16px;
    background: linear-gradient(180deg, #ffffff 0%, #f8fbff 100%);
    color: var(--kb-list-text-soft);
    font-size: 0.88rem;
    font-weight: 800;
    box-shadow: 0 8px 16px rgba(15, 23, 42, 0.04);
}

.kb-project-task-list-page .list-item-links.kb-task-list-selection-links,
.kb-project-task-list-page .list-item-actions.kb-task-list-bulk-actions,
.kb-project-task-list-page .table-list-header-menu.kb-task-list-toolbar-actions {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    flex-wrap: wrap;
    float: none;
    margin-left: 0;
}

.kb-project-task-list-page .list-item-links.kb-task-list-selection-links {
    color: var(--kb-list-text-soft);
    font-size: 0.84rem;
    font-weight: 800;
}

.kb-project-task-list-page .list-item-links.kb-task-list-selection-links a {
    color: var(--kb-list-blue-700);
    text-decoration: none;
}

.kb-project-task-list-page .list-item-links.kb-task-list-selection-links a:hover {
    color: var(--kb-list-blue-600);
}

.kb-project-task-list-page .list-item-actions.kb-task-list-bulk-actions.list-item-action-hidden {
    display: none;
}

.kb-project-task-list-page .table-list-header-menu.kb-task-list-toolbar-actions > a,
.kb-project-task-list-page .list-item-actions.kb-task-list-bulk-actions .dropdown > a {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    min-height: 42px;
    padding: 0 14px;
    border: 1px solid rgba(148, 163, 184, 0.16);
    border-radius: 16px;
    background: rgba(255, 255, 255, 0.84);
    color: var(--kb-list-text-soft);
    font-size: 0.82rem;
    font-weight: 800;
    text-decoration: none;
    box-shadow: 0 8px 16px rgba(15, 23, 42, 0.04);
}

.kb-project-task-list-page .table-list-header-menu.kb-task-list-toolbar-actions > a .fa,
.kb-project-task-list-page .list-item-actions.kb-task-list-bulk-actions .dropdown > a .fa {
    color: var(--kb-list-blue-700);
}

.kb-project-task-list-page .table-list-header-menu.kb-task-list-toolbar-actions > a:hover,
.kb-project-task-list-page .list-item-actions.kb-task-list-bulk-actions .dropdown > a:hover {
    color: var(--kb-list-blue-700);
    border-color: var(--kb-list-border-strong);
    background: #ffffff;
}

.kb-project-task-list-page .kb-task-list-sort.dropdown > a {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    min-height: 42px;
    padding: 0 16px;
    border: 1px solid rgba(148, 163, 184, 0.16);
    border-radius: 16px;
    background: rgba(255, 255, 255, 0.84);
    color: var(--kb-list-text-soft);
    font-size: 0.82rem;
    font-weight: 800;
    text-decoration: none;
    box-shadow: 0 8px 16px rgba(15, 23, 42, 0.04);
}

.kb-project-task-list-page .kb-task-list-sort.dropdown > a strong {
    display: inline-flex;
    align-items: center;
    gap: 8px;
}

.kb-project-task-list-page .kb-task-list-sort.dropdown > a:hover {
    color: var(--kb-list-blue-700);
    border-color: var(--kb-list-border-strong);
    background: #ffffff;
}

.kb-project-task-list-page .dropdown {
    position: relative;
}

.kb-project-task-list-page .dropdown:hover,
.kb-project-task-list-page .dropdown.open {
    z-index: 90;
}

.kb-project-task-list-page .dropdown > ul,
.kb-project-task-list-page ul.dropdown-submenu-open,
.kb-project-task-list-page .dropdown-submenu-open ul {
    min-width: 250px;
    max-height: min(70vh, 420px);
    overflow-y: auto;
    overflow-x: hidden;
    margin-top: 10px;
    padding: 8px !important;
    border: 1px solid var(--kb-list-border-strong) !important;
    border-radius: 18px !important;
    background: linear-gradient(180deg, #ffffff 0%, #fbfcff 100%) !important;
    box-shadow: 0 20px 42px rgba(15, 23, 42, 0.10) !important;
}

.kb-project-task-list-page .dropdown > ul li,
.kb-project-task-list-page .dropdown-submenu-open li,
.kb-project-task-list-page .dropdown-submenu-open ul li {
    margin: 2px 0 !important;
    padding: 0 !important;
    border: 0 !important;
    background: transparent !important;
}

.kb-project-task-list-page .dropdown > ul li > a,
.kb-project-task-list-page .dropdown-submenu-open li > a,
.kb-project-task-list-page .dropdown-submenu-open ul li > a {
    display: flex;
    align-items: center;
    gap: 10px;
    min-height: 44px;
    padding: 0 14px !important;
    border: 1px solid transparent !important;
    border-radius: 12px;
    color: var(--kb-list-text) !important;
    background: transparent !important;
    font-size: 14px;
    font-weight: 600;
    line-height: 1.25;
    text-decoration: none;
    box-shadow: none !important;
}

.kb-project-task-list-page .dropdown > ul li > a:hover,
.kb-project-task-list-page .dropdown-submenu-open li > a:hover,
.kb-project-task-list-page .dropdown-submenu-open ul li > a:hover {
    background: var(--kb-list-gradient) !important;
    border-color: transparent !important;
    color: #ffffff !important;
    box-shadow: 0 14px 28px rgba(76, 111, 255, 0.18) !important;
}

.kb-project-task-list-page .dropdown > ul li > a:hover .fa,
.kb-project-task-list-page .dropdown-submenu-open li > a:hover .fa,
.kb-project-task-list-page .dropdown-submenu-open ul li > a:hover .fa {
    color: #ffffff !important;
}

.kb-task-list-grid.table-list {
    display: grid;
    gap: 16px;
    background: transparent;
    border: 0;
    margin: 0;
}

.kb-task-list-card {
    --kb-task-accent: #8ca0cc;
    --kb-task-border-color: rgba(148, 163, 184, 0.18);
    --kb-task-tint: rgba(140, 160, 204, 0.08);
    --kb-task-glow: rgba(140, 160, 204, 0.14);
    --kb-task-surface-bottom: rgba(250, 252, 255, 0.96);
    --kb-task-shadow-color: rgba(15, 23, 42, 0.05);
    position: relative;
    overflow: hidden;
    isolation: isolate;
    padding: 18px;
    border: 1px solid var(--kb-task-border-color);
    border-radius: 28px;
    background:
        radial-gradient(circle at top right, var(--kb-task-glow) 0%, transparent 42%),
        linear-gradient(180deg, rgba(255, 255, 255, 0.98) 0%, var(--kb-task-surface-bottom) 100%);
    box-shadow: 0 14px 30px var(--kb-task-shadow-color);
    transition: border-color 0.18s ease, box-shadow 0.18s ease, transform 0.18s ease;
}

.kb-task-list-card::before {
    content: "";
    position: absolute;
    inset: 0 20px auto;
    height: 3px;
    border-radius: 999px;
    background: var(--kb-task-accent);
    opacity: 0.9;
}

.kb-task-list-card::after {
    content: "";
    position: absolute;
    inset: 12px;
    border-radius: 22px;
    background: linear-gradient(180deg, rgba(255, 255, 255, 0.16) 0%, var(--kb-task-tint) 100%);
    opacity: 0.82;
    pointer-events: none;
    z-index: 0;
}

.kb-task-list-card > * {
    position: relative;
    z-index: 1;
}

.kb-task-list-card:hover {
    border-color: var(--kb-task-accent);
    box-shadow: 0 18px 38px var(--kb-task-shadow-color);
    transform: translateY(-2px);
}

.kb-task-list-card.is-closed {
    --kb-task-accent: #a6b4c8;
    --kb-task-border-color: rgba(148, 163, 184, 0.22);
    --kb-task-tint: rgba(148, 163, 184, 0.06);
    --kb-task-glow: rgba(148, 163, 184, 0.10);
    --kb-task-surface-bottom: rgba(248, 250, 252, 0.96);
}

.kb-task-list-card.color-yellow { --kb-task-accent: rgb(223, 227, 45); --kb-task-border-color: rgba(223, 227, 45, 0.34); --kb-task-tint: rgba(223, 227, 45, 0.10); --kb-task-glow: rgba(223, 227, 45, 0.16); --kb-task-surface-bottom: rgba(250, 251, 214, 0.94); --kb-task-shadow-color: rgba(223, 227, 45, 0.12); }
.kb-task-list-card.color-blue { --kb-task-accent: rgb(98, 165, 241); --kb-task-border-color: rgba(168, 207, 255, 0.42); --kb-task-tint: rgba(98, 165, 241, 0.10); --kb-task-glow: rgba(98, 165, 241, 0.18); --kb-task-surface-bottom: rgba(225, 238, 255, 0.94); --kb-task-shadow-color: rgba(59, 130, 246, 0.12); }
.kb-task-list-card.color-green { --kb-task-accent: rgb(74, 227, 113); --kb-task-border-color: rgba(74, 227, 113, 0.30); --kb-task-tint: rgba(74, 227, 113, 0.09); --kb-task-glow: rgba(74, 227, 113, 0.15); --kb-task-surface-bottom: rgba(212, 248, 221, 0.94); --kb-task-shadow-color: rgba(34, 197, 94, 0.12); }
.kb-task-list-card.color-purple { --kb-task-accent: rgb(205, 133, 254); --kb-task-border-color: rgba(205, 133, 254, 0.32); --kb-task-tint: rgba(205, 133, 254, 0.10); --kb-task-glow: rgba(205, 133, 254, 0.18); --kb-task-surface-bottom: rgba(236, 206, 255, 0.92); --kb-task-shadow-color: rgba(168, 85, 247, 0.12); }
.kb-task-list-card.color-red { --kb-task-accent: rgb(255, 151, 151); --kb-task-border-color: rgba(255, 151, 151, 0.38); --kb-task-tint: rgba(255, 151, 151, 0.10); --kb-task-glow: rgba(255, 151, 151, 0.18); --kb-task-surface-bottom: rgba(255, 217, 217, 0.92); --kb-task-shadow-color: rgba(239, 68, 68, 0.12); }
.kb-task-list-card.color-orange { --kb-task-accent: rgb(255, 172, 98); --kb-task-border-color: rgba(255, 172, 98, 0.34); --kb-task-tint: rgba(255, 172, 98, 0.10); --kb-task-glow: rgba(255, 172, 98, 0.18); --kb-task-surface-bottom: rgba(255, 228, 201, 0.93); --kb-task-shadow-color: rgba(249, 115, 22, 0.12); }
.kb-task-list-card.color-grey { --kb-task-accent: rgb(160, 174, 192); --kb-task-border-color: rgba(160, 174, 192, 0.30); --kb-task-tint: rgba(160, 174, 192, 0.08); --kb-task-glow: rgba(160, 174, 192, 0.14); --kb-task-surface-bottom: rgba(242, 245, 248, 0.92); --kb-task-shadow-color: rgba(100, 116, 139, 0.10); }
.kb-task-list-card.color-brown { --kb-task-accent: rgb(78, 52, 46); --kb-task-border-color: rgba(78, 52, 46, 0.24); --kb-task-tint: rgba(78, 52, 46, 0.08); --kb-task-glow: rgba(78, 52, 46, 0.14); --kb-task-surface-bottom: rgba(230, 220, 216, 0.92); --kb-task-shadow-color: rgba(120, 72, 48, 0.12); }
.kb-task-list-card.color-deep_orange { --kb-task-accent: rgb(230, 74, 25); --kb-task-border-color: rgba(230, 74, 25, 0.28); --kb-task-tint: rgba(230, 74, 25, 0.10); --kb-task-glow: rgba(230, 74, 25, 0.18); --kb-task-surface-bottom: rgba(255, 206, 190, 0.92); --kb-task-shadow-color: rgba(234, 88, 12, 0.12); }
.kb-task-list-card.color-dark_grey { --kb-task-accent: rgb(69, 90, 100); --kb-task-border-color: rgba(69, 90, 100, 0.24); --kb-task-tint: rgba(69, 90, 100, 0.08); --kb-task-glow: rgba(69, 90, 100, 0.15); --kb-task-surface-bottom: rgba(222, 229, 233, 0.92); --kb-task-shadow-color: rgba(71, 85, 105, 0.12); }
.kb-task-list-card.color-pink { --kb-task-accent: rgb(216, 27, 96); --kb-task-border-color: rgba(216, 27, 96, 0.22); --kb-task-tint: rgba(216, 27, 96, 0.10); --kb-task-glow: rgba(216, 27, 96, 0.18); --kb-task-surface-bottom: rgba(249, 203, 220, 0.92); --kb-task-shadow-color: rgba(236, 72, 153, 0.12); }
.kb-task-list-card.color-teal { --kb-task-accent: rgb(0, 105, 92); --kb-task-border-color: rgba(0, 105, 92, 0.22); --kb-task-tint: rgba(0, 105, 92, 0.09); --kb-task-glow: rgba(0, 105, 92, 0.15); --kb-task-surface-bottom: rgba(197, 233, 229, 0.92); --kb-task-shadow-color: rgba(13, 148, 136, 0.12); }
.kb-task-list-card.color-cyan { --kb-task-accent: rgb(0, 188, 212); --kb-task-border-color: rgba(0, 188, 212, 0.22); --kb-task-tint: rgba(0, 188, 212, 0.09); --kb-task-glow: rgba(0, 188, 212, 0.16); --kb-task-surface-bottom: rgba(211, 243, 247, 0.92); --kb-task-shadow-color: rgba(6, 182, 212, 0.12); }
.kb-task-list-card.color-lime { --kb-task-accent: rgb(175, 180, 43); --kb-task-border-color: rgba(175, 180, 43, 0.28); --kb-task-tint: rgba(175, 180, 43, 0.10); --kb-task-glow: rgba(175, 180, 43, 0.15); --kb-task-surface-bottom: rgba(238, 242, 195, 0.92); --kb-task-shadow-color: rgba(132, 204, 22, 0.12); }
.kb-task-list-card.color-light_green { --kb-task-accent: rgb(104, 159, 56); --kb-task-border-color: rgba(104, 159, 56, 0.28); --kb-task-tint: rgba(104, 159, 56, 0.09); --kb-task-glow: rgba(104, 159, 56, 0.15); --kb-task-surface-bottom: rgba(230, 240, 217, 0.93); --kb-task-shadow-color: rgba(101, 163, 13, 0.12); }
.kb-task-list-card.color-amber { --kb-task-accent: rgb(255, 160, 0); --kb-task-border-color: rgba(255, 160, 0, 0.28); --kb-task-tint: rgba(255, 160, 0, 0.10); --kb-task-glow: rgba(255, 160, 0, 0.18); --kb-task-surface-bottom: rgba(255, 234, 177, 0.92); --kb-task-shadow-color: rgba(245, 158, 11, 0.12); }

.kb-task-list-card-layout {
    display: grid;
    grid-template-columns: minmax(0, 1.35fr) minmax(300px, 0.95fr);
    gap: 18px;
    align-items: start;
}

.kb-task-list-card-main,
.kb-task-list-card-side {
    min-width: 0;
    display: flex;
    flex-direction: column;
}

.kb-task-list-card-main {
    gap: 14px;
}

.kb-task-list-card-side {
    gap: 12px;
    align-items: stretch;
}

.kb-task-list-title-wrap {
    display: flex;
    align-items: center;
    gap: 12px;
    flex-wrap: wrap;
    min-width: 0;
}

.kb-task-list-title-controls {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    flex: 0 0 auto;
}

.kb-task-list-selection {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 18px;
    height: 18px;
}

.kb-task-list-selection input[type="checkbox"] {
    width: 16px;
    height: 16px;
    margin: 0;
    accent-color: var(--kb-list-blue-600);
}

.kb-task-list-id-pill .dropdown {
    display: inline-flex;
}

.kb-task-list-id-pill .dropdown > a,
.kb-task-list-id-fallback {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    min-height: 40px;
    padding: 0 14px;
    border: 1px solid rgba(148, 163, 184, 0.16);
    border-radius: 999px;
    background: rgba(255, 255, 255, 0.78);
    color: var(--kb-list-text);
    font-size: 0.84rem;
    font-weight: 900;
    text-decoration: none;
    box-shadow: 0 8px 16px rgba(15, 23, 42, 0.04);
}

.kb-task-list-id-pill .dropdown > a strong {
    display: inline-flex;
    align-items: center;
    gap: 8px;
}

.kb-task-list-id-pill .dropdown > a:hover {
    color: var(--kb-list-blue-700);
    border-color: var(--kb-list-border-strong);
    background: #ffffff;
}

.table-list-title.kb-task-list-title,
.table-list-title.kb-task-list-title a {
    color: var(--kb-list-text);
    font-size: 1.04rem;
    font-weight: 900;
    line-height: 1.4;
    text-decoration: none;
    letter-spacing: -0.01em;
    word-break: break-word;
}

.table-list-title.kb-task-list-title a:hover {
    color: var(--kb-list-blue-700);
}

.table-list-title.kb-task-list-title.status-closed,
.table-list-title.kb-task-list-title.status-closed a {
    color: var(--kb-list-text-muted);
}

.kb-task-list-details {
    display: flex;
    flex-direction: column;
    gap: 12px;
}

.kb-task-list-path {
    display: flex;
    flex-wrap: wrap;
    gap: 8px;
}

.kb-task-list-path-item {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    min-height: 34px;
    padding: 0 12px;
    border-radius: 999px;
    border: 1px solid rgba(148, 163, 184, 0.14);
    background: rgba(255, 255, 255, 0.70);
    color: var(--kb-list-text-soft);
    font-size: 0.78rem;
    font-weight: 800;
    box-shadow: 0 8px 16px rgba(15, 23, 42, 0.03);
}

.kb-task-list-path-item i {
    color: var(--kb-list-blue-700);
}

.kb-task-list-chips {
    display: flex;
    flex-wrap: wrap;
    gap: 8px;
}

.kb-task-list-chips .table-list-category,
.kb-task-list-chips .task-list-tag {
    --kb-chip-bg: rgba(255, 255, 255, 0.74);
    --kb-chip-border: rgba(148, 163, 184, 0.18);
    --kb-chip-text: var(--kb-list-text-soft);
    display: inline-flex;
    align-items: center;
    min-height: 30px;
    padding: 0 10px;
    border-radius: 999px;
    border: 1px solid var(--kb-chip-border);
    background: var(--kb-chip-bg);
    color: var(--kb-chip-text);
    font-size: 0.74rem;
    font-weight: 800;
    box-shadow: 0 8px 16px rgba(15, 23, 42, 0.03);
}

.kb-task-list-chips .table-list-category a,
.kb-task-list-chips .task-list-tag a {
    color: inherit;
    text-decoration: none;
}

.kb-task-list-chips .table-list-category.color-yellow,
.kb-task-list-chips .task-list-tag.color-yellow { --kb-chip-bg: rgba(223, 227, 45, 0.16); --kb-chip-border: rgba(223, 227, 45, 0.26); --kb-chip-text: #757d15; }
.kb-task-list-chips .table-list-category.color-blue,
.kb-task-list-chips .task-list-tag.color-blue { --kb-chip-bg: rgba(98, 165, 241, 0.16); --kb-chip-border: rgba(98, 165, 241, 0.24); --kb-chip-text: #275fa8; }
.kb-task-list-chips .table-list-category.color-green,
.kb-task-list-chips .task-list-tag.color-green { --kb-chip-bg: rgba(74, 227, 113, 0.15); --kb-chip-border: rgba(74, 227, 113, 0.24); --kb-chip-text: #1f7f3e; }
.kb-task-list-chips .table-list-category.color-purple,
.kb-task-list-chips .task-list-tag.color-purple { --kb-chip-bg: rgba(205, 133, 254, 0.16); --kb-chip-border: rgba(205, 133, 254, 0.24); --kb-chip-text: #7b3fb2; }
.kb-task-list-chips .table-list-category.color-red,
.kb-task-list-chips .task-list-tag.color-red { --kb-chip-bg: rgba(255, 151, 151, 0.16); --kb-chip-border: rgba(255, 151, 151, 0.24); --kb-chip-text: #b54747; }
.kb-task-list-chips .table-list-category.color-orange,
.kb-task-list-chips .task-list-tag.color-orange { --kb-chip-bg: rgba(255, 172, 98, 0.16); --kb-chip-border: rgba(255, 172, 98, 0.24); --kb-chip-text: #b36118; }
.kb-task-list-chips .table-list-category.color-grey,
.kb-task-list-chips .task-list-tag.color-grey,
.kb-task-list-chips .table-list-category.color-dark_grey,
.kb-task-list-chips .task-list-tag.color-dark_grey { --kb-chip-bg: rgba(160, 174, 192, 0.16); --kb-chip-border: rgba(160, 174, 192, 0.24); --kb-chip-text: #59677b; }
.kb-task-list-chips .table-list-category.color-brown,
.kb-task-list-chips .task-list-tag.color-brown { --kb-chip-bg: rgba(78, 52, 46, 0.14); --kb-chip-border: rgba(78, 52, 46, 0.22); --kb-chip-text: #6a463d; }
.kb-task-list-chips .table-list-category.color-deep_orange,
.kb-task-list-chips .task-list-tag.color-deep_orange { --kb-chip-bg: rgba(230, 74, 25, 0.14); --kb-chip-border: rgba(230, 74, 25, 0.22); --kb-chip-text: #a6461d; }
.kb-task-list-chips .table-list-category.color-pink,
.kb-task-list-chips .task-list-tag.color-pink { --kb-chip-bg: rgba(216, 27, 96, 0.14); --kb-chip-border: rgba(216, 27, 96, 0.22); --kb-chip-text: #a82960; }
.kb-task-list-chips .table-list-category.color-teal,
.kb-task-list-chips .task-list-tag.color-teal { --kb-chip-bg: rgba(0, 105, 92, 0.14); --kb-chip-border: rgba(0, 105, 92, 0.22); --kb-chip-text: #176960; }
.kb-task-list-chips .table-list-category.color-cyan,
.kb-task-list-chips .task-list-tag.color-cyan { --kb-chip-bg: rgba(0, 188, 212, 0.14); --kb-chip-border: rgba(0, 188, 212, 0.22); --kb-chip-text: #1e7f90; }
.kb-task-list-chips .table-list-category.color-lime,
.kb-task-list-chips .task-list-tag.color-lime { --kb-chip-bg: rgba(175, 180, 43, 0.14); --kb-chip-border: rgba(175, 180, 43, 0.22); --kb-chip-text: #6f7320; }
.kb-task-list-chips .table-list-category.color-light_green,
.kb-task-list-chips .task-list-tag.color-light_green { --kb-chip-bg: rgba(104, 159, 56, 0.14); --kb-chip-border: rgba(104, 159, 56, 0.22); --kb-chip-text: #537a35; }
.kb-task-list-chips .table-list-category.color-amber,
.kb-task-list-chips .task-list-tag.color-amber { --kb-chip-bg: rgba(255, 160, 0, 0.14); --kb-chip-border: rgba(255, 160, 0, 0.22); --kb-chip-text: #a36514; }

.kb-task-list-avatars {
    display: flex;
    justify-content: flex-end;
}

.kb-task-list-assignee-pill {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    min-height: 42px;
    max-width: 100%;
    padding: 5px 14px 5px 6px;
    border: 1px solid rgba(148, 163, 184, 0.16);
    border-radius: 999px;
    background: rgba(255, 255, 255, 0.74);
    color: var(--kb-list-text);
    font-size: 0.8rem;
    font-weight: 800;
    text-decoration: none;
    box-shadow: 0 8px 16px rgba(15, 23, 42, 0.04);
}

.kb-task-list-assignee-pill .task-avatar-assignee {
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}

.kb-task-list-assignee-pill .avatar-inline,
.kb-task-list-assignee-pill img,
.kb-task-list-assignee-pill .avatar {
    width: 30px;
    height: 30px;
    border-radius: 999px;
    border: 2px solid #ffffff;
    box-shadow: 0 8px 16px rgba(15, 23, 42, 0.08);
}

.kb-task-list-metrics-shell,
.kb-task-list-subtasks-shell {
    padding: 14px;
    border: 1px solid rgba(148, 163, 184, 0.14);
    border-radius: 22px;
    background: rgba(255, 255, 255, 0.54);
    box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.90);
}

.kb-task-list-icons.task-list-icons {
    display: flex;
    flex-wrap: wrap;
    justify-content: flex-end;
    gap: 8px;
}

.kb-task-list-icons.task-list-icons > span,
.kb-task-list-icons.task-list-icons > a,
.kb-task-list-icons.task-list-icons .tooltip,
.kb-task-list-icons.task-list-icons .task-icon-age > span {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    min-height: 30px;
    padding: 0 10px;
    border: 1px solid rgba(148, 163, 184, 0.14);
    border-radius: 999px;
    background: rgba(255, 255, 255, 0.80);
    color: var(--kb-list-text-soft);
    font-size: 0.74rem;
    font-weight: 700;
    text-decoration: none;
    box-shadow: 0 8px 16px rgba(15, 23, 42, 0.03);
}

.kb-task-list-icons.task-list-icons .tooltip:hover,
.kb-task-list-icons.task-list-icons > a:hover {
    color: var(--kb-list-blue-700);
    border-color: rgba(76, 111, 255, 0.18);
}

.kb-task-list-icons.task-list-icons i {
    color: var(--kb-list-blue-700);
}

.kb-task-list-icons.task-list-icons .task-icon-age {
    display: inline-flex;
    flex-wrap: wrap;
    gap: 8px;
}

.kb-task-list-icons.task-list-icons .task-date-overdue {
    color: #b42318;
    border-color: rgba(239, 68, 68, 0.18);
    background: rgba(254, 242, 242, 0.92);
}

.kb-task-list-icons.task-list-icons .task-date-today {
    color: #1d4ed8;
    border-color: rgba(59, 130, 246, 0.18);
    background: rgba(239, 246, 255, 0.92);
}

.kb-task-list-icons.task-list-icons .task-board-closed {
    color: #5b697d;
}

.kb-task-list-icons.task-list-icons .task-priority {
    font-weight: 800;
}

.kb-task-list-subtasks.task-list-subtasks {
    display: grid;
    gap: 8px;
}

.kb-task-list-subtasks.task-list-subtasks .task-list-subtask {
    display: grid;
    grid-template-columns: minmax(0, 1fr) auto auto;
    gap: 10px;
    align-items: center;
    padding: 10px 12px;
    border: 1px solid rgba(148, 163, 184, 0.12);
    border-radius: 16px;
    background: rgba(255, 255, 255, 0.78);
}

.kb-task-list-subtasks.task-list-subtasks .subtask-cell {
    display: flex;
    align-items: center;
    gap: 8px;
    min-width: 0;
    width: auto;
}

.kb-task-list-subtasks.task-list-subtasks .subtask-assignee,
.kb-task-list-subtasks.task-list-subtasks .subtask-time-tracking-cell {
    justify-content: flex-end;
    color: var(--kb-list-text-soft);
    font-size: 0.74rem;
    font-weight: 700;
}

.kb-task-list-pagination {
    display: flex;
    justify-content: center;
    padding-top: 6px;
}

.kb-task-list-pagination .pagination {
    display: inline-flex;
    flex-wrap: wrap;
    gap: 8px;
    padding: 8px;
    border: 1px solid rgba(148, 163, 184, 0.16);
    border-radius: 18px;
    background: rgba(255, 255, 255, 0.80);
    box-shadow: 0 8px 16px rgba(15, 23, 42, 0.03);
}

.kb-task-list-pagination .pagination a,
.kb-task-list-pagination .pagination span {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    min-width: 36px;
    min-height: 36px;
    padding: 0 12px;
    border-radius: 12px;
    color: var(--kb-list-text-soft);
    text-decoration: none;
}

.kb-task-list-pagination .pagination .active,
.kb-task-list-pagination .pagination a:hover {
    background: var(--kb-list-gradient);
    color: #ffffff;
}

@media (max-width: 1040px) {
    .kb-task-list-card-layout {
        grid-template-columns: 1fr;
    }

    .kb-task-list-card-side,
    .kb-task-list-avatars,
    .kb-task-list-icons.task-list-icons {
        align-items: stretch;
        justify-content: flex-start;
    }
}

@media (max-width: 720px) {
    .kb-project-task-list-page {
        gap: 14px;
    }

    .kb-project-task-list-page .table-list-header.kb-task-list-toolbar-row {
        padding: 16px;
    }

    .kb-task-list-card {
        padding: 16px;
        border-radius: 24px;
    }

    .kb-task-list-title-wrap {
        align-items: flex-start;
    }

    .kb-task-list-path-item,
    .kb-task-list-chips .table-list-category,
    .kb-task-list-chips .task-list-tag,
    .kb-task-list-icons.task-list-icons > span,
    .kb-task-list-icons.task-list-icons > a,
    .kb-task-list-icons.task-list-icons .tooltip,
    .kb-task-list-icons.task-list-icons .task-icon-age > span {
        min-height: 28px;
        font-size: 0.72rem;
    }

    .kb-task-list-subtasks.task-list-subtasks .task-list-subtask {
        grid-template-columns: 1fr;
        justify-items: flex-start;
    }

    .kb-task-list-subtasks.task-list-subtasks .subtask-assignee,
    .kb-task-list-subtasks.task-list-subtasks .subtask-time-tracking-cell {
        justify-content: flex-start;
    }
}
</style>
<?php endif ?>
