<?php static $kbModernAdminStylesLoaded = false; ?>
<?php if (! $kbModernAdminStylesLoaded): ?>
<?php $kbModernAdminStylesLoaded = true; ?>
<style>
.kb-admin-entity-page,
.kb-project-user-overview-page {
    --kb-admin-surface: #ffffff;
    --kb-admin-surface-soft: #fbfcff;
    --kb-admin-border: rgba(148, 163, 184, 0.18);
    --kb-admin-border-strong: rgba(76, 111, 255, 0.20);
    --kb-admin-text: #162033;
    --kb-admin-text-soft: #52607a;
    --kb-admin-text-muted: #7a879d;
    --kb-admin-blue-700: #4366f1;
    --kb-admin-blue-600: #4c6fff;
    --kb-admin-gradient: linear-gradient(135deg, #4c6fff 0%, #597bf8 100%);
    --kb-admin-shadow-sm: 0 12px 24px rgba(15, 23, 42, 0.05);
    --kb-admin-shadow-md: 0 18px 40px rgba(15, 23, 42, 0.06);
    margin-top: 18px;
}

.kb-admin-entity-page {
    display: flex;
    flex-direction: column;
    gap: 18px;
}

.kb-admin-toolbar-card,
.kb-admin-search-card,
.kb-admin-list-shell,
.kb-project-user-overview-page > .page-header,
.kb-project-user-overview-page .sidebar,
.kb-project-user-overview-page .sidebar-content > .page-header,
.kb-modern-data-table-shell {
    position: relative;
    border: 1px solid var(--kb-admin-border);
    border-radius: 28px;
    background:
        radial-gradient(circle at top right, rgba(76, 111, 255, 0.07), transparent 24%),
        linear-gradient(180deg, rgba(255, 255, 255, 0.98) 0%, rgba(251, 252, 255, 0.98) 100%);
    box-shadow: var(--kb-admin-shadow-md);
}

.kb-admin-toolbar-card::before,
.kb-admin-list-shell::before,
.kb-project-user-overview-page > .page-header::before,
.kb-project-user-overview-page .sidebar-content > .page-header::before,
.kb-modern-data-table-shell::before {
    content: "";
    position: absolute;
    inset: 0 0 auto 0;
    height: 3px;
    border-radius: 28px 28px 0 0;
    background: var(--kb-admin-gradient);
}

.kb-admin-page-header.page-header,
.kb-project-user-overview-page > .page-header,
.kb-project-user-overview-page .sidebar-content > .page-header {
    margin: 0;
    padding: 18px 20px;
}

.kb-admin-page-header ul,
.kb-project-user-overview-page > .page-header ul {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    gap: 10px 12px;
    margin: 0;
    padding: 0;
    list-style: none;
}

.kb-admin-page-header li,
.kb-project-user-overview-page > .page-header li {
    margin: 0;
}

.kb-admin-page-header a,
.kb-project-user-overview-page > .page-header a {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    min-height: 42px;
    padding: 0 16px;
    border: 1px solid rgba(148, 163, 184, 0.16);
    border-radius: 16px;
    background: rgba(255, 255, 255, 0.82);
    color: var(--kb-admin-text-soft);
    font-size: 0.84rem;
    font-weight: 800;
    text-decoration: none;
    box-shadow: 0 8px 16px rgba(15, 23, 42, 0.04);
}

.kb-admin-page-header a .fa,
.kb-project-user-overview-page > .page-header a .fa {
    color: var(--kb-admin-blue-700);
}

.kb-admin-page-header a:hover,
.kb-project-user-overview-page > .page-header a:hover {
    color: var(--kb-admin-blue-700);
    border-color: var(--kb-admin-border-strong);
    background: #ffffff;
}

.kb-admin-search-card {
    padding: 16px 18px;
}

.kb-admin-search-card .search {
    margin: 0;
}

.kb-admin-search-card .search form,
.kb-admin-search-card .search,
.kb-admin-search-card form {
    margin: 0;
}

.kb-admin-search-card input[type="text"],
.kb-admin-search-card input[type="search"],
.kb-admin-search-card .search input[type="text"] {
    width: 100%;
    min-height: 54px;
    padding: 0 18px;
    border: 1px solid rgba(148, 163, 184, 0.14);
    border-radius: 18px;
    background: rgba(255, 255, 255, 0.84);
    color: var(--kb-admin-text);
    font-size: 1rem;
    box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.92);
}

.kb-admin-search-card input::placeholder {
    color: #94a3b8;
}

.kb-admin-entity-page .alert,
.kb-project-user-overview-page .alert {
    margin: 0;
    padding: 20px 22px;
    border: 1px solid var(--kb-admin-border);
    border-radius: 24px;
    background: linear-gradient(180deg, rgba(255, 255, 255, 0.98) 0%, rgba(251, 252, 255, 0.98) 100%);
    color: var(--kb-admin-text-soft);
    box-shadow: var(--kb-admin-shadow-sm);
}

.kb-admin-list-shell {
    padding: 18px;
    display: flex;
    flex-direction: column;
    gap: 16px;
}

.kb-admin-list.table-list {
    display: grid;
    gap: 14px;
    margin: 0;
    background: transparent;
    border: 0;
}

.kb-admin-list-header.table-list-header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 12px;
    flex-wrap: wrap;
    margin: 0;
    padding: 0;
    border: 0;
    background: transparent;
}

.kb-admin-list-count.table-list-header-count {
    display: inline-flex;
    align-items: center;
    min-height: 42px;
    padding: 0 14px;
    border: 1px solid rgba(148, 163, 184, 0.16);
    border-radius: 16px;
    background: linear-gradient(180deg, #ffffff 0%, #f8fbff 100%);
    color: var(--kb-admin-text-soft);
    font-size: 0.88rem;
    font-weight: 800;
    box-shadow: 0 8px 16px rgba(15, 23, 42, 0.04);
}

.kb-admin-list-menu.table-list-header-menu {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    margin-left: 0;
    float: none;
}

.kb-admin-sort.dropdown > a {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    min-height: 42px;
    padding: 0 16px;
    border: 1px solid rgba(148, 163, 184, 0.16);
    border-radius: 16px;
    background: rgba(255, 255, 255, 0.82);
    color: var(--kb-admin-text-soft);
    font-size: 0.82rem;
    font-weight: 800;
    text-decoration: none;
    box-shadow: 0 8px 16px rgba(15, 23, 42, 0.04);
}

.kb-admin-sort.dropdown > a strong {
    display: inline-flex;
    align-items: center;
    gap: 8px;
}

.kb-admin-sort.dropdown > a:hover {
    color: var(--kb-admin-blue-700);
    border-color: var(--kb-admin-border-strong);
    background: #ffffff;
}

.kb-admin-entity-page .dropdown,
.kb-project-user-overview-page .dropdown {
    position: relative;
}

.kb-admin-entity-page .dropdown:hover,
.kb-admin-entity-page .dropdown.open,
.kb-project-user-overview-page .dropdown:hover,
.kb-project-user-overview-page .dropdown.open {
    z-index: 120;
}

.kb-admin-entity-page .dropdown > ul,
.kb-admin-entity-page ul.dropdown-submenu-open,
.kb-admin-entity-page .dropdown-submenu-open ul,
.kb-project-user-overview-page .dropdown > ul,
.kb-project-user-overview-page ul.dropdown-submenu-open,
.kb-project-user-overview-page .dropdown-submenu-open ul {
    min-width: 250px;
    max-height: min(70vh, 420px);
    overflow-y: auto;
    overflow-x: hidden;
    margin-top: 10px;
    padding: 8px !important;
    border: 1px solid var(--kb-admin-border-strong) !important;
    border-radius: 18px !important;
    background: linear-gradient(180deg, #ffffff 0%, #fbfcff 100%) !important;
    box-shadow: 0 20px 42px rgba(15, 23, 42, 0.10) !important;
}

.kb-admin-entity-page .dropdown > ul li,
.kb-admin-entity-page .dropdown-submenu-open li,
.kb-admin-entity-page .dropdown-submenu-open ul li,
.kb-project-user-overview-page .dropdown > ul li,
.kb-project-user-overview-page .dropdown-submenu-open li,
.kb-project-user-overview-page .dropdown-submenu-open ul li {
    margin: 2px 0 !important;
    padding: 0 !important;
    border: 0 !important;
    background: transparent !important;
}

.kb-admin-entity-page .dropdown > ul li > a,
.kb-admin-entity-page .dropdown-submenu-open li > a,
.kb-admin-entity-page .dropdown-submenu-open ul li > a,
.kb-project-user-overview-page .dropdown > ul li > a,
.kb-project-user-overview-page .dropdown-submenu-open li > a,
.kb-project-user-overview-page .dropdown-submenu-open ul li > a {
    display: flex;
    align-items: center;
    gap: 10px;
    min-height: 44px;
    padding: 0 14px !important;
    border: 1px solid transparent !important;
    border-radius: 12px;
    color: var(--kb-admin-text) !important;
    background: transparent !important;
    font-size: 14px;
    font-weight: 600;
    line-height: 1.25;
    text-decoration: none;
    box-shadow: none !important;
}

.kb-admin-entity-page .dropdown > ul li > a:hover,
.kb-admin-entity-page .dropdown-submenu-open li > a:hover,
.kb-admin-entity-page .dropdown-submenu-open ul li > a:hover,
.kb-project-user-overview-page .dropdown > ul li > a:hover,
.kb-project-user-overview-page .dropdown-submenu-open li > a:hover,
.kb-project-user-overview-page .dropdown-submenu-open ul li > a:hover {
    background: var(--kb-admin-gradient) !important;
    border-color: transparent !important;
    color: #ffffff !important;
    box-shadow: 0 14px 28px rgba(76, 111, 255, 0.18) !important;
}

.kb-admin-entity-page .dropdown > ul li > a:hover .fa,
.kb-admin-entity-page .dropdown-submenu-open li > a:hover .fa,
.kb-admin-entity-page .dropdown-submenu-open ul li > a:hover .fa,
.kb-project-user-overview-page .dropdown > ul li > a:hover .fa,
.kb-project-user-overview-page .dropdown-submenu-open li > a:hover .fa,
.kb-project-user-overview-page .dropdown-submenu-open ul li > a:hover .fa {
    color: #ffffff !important;
}

.kb-admin-entity-card.table-list-row {
    display: grid;
    grid-template-columns: minmax(0, 1.15fr) minmax(0, 1fr) auto;
    gap: 14px 18px;
    align-items: center;
    margin: 0;
    padding: 18px;
    border: 1px solid rgba(148, 163, 184, 0.16);
    border-radius: 26px;
    background:
        radial-gradient(circle at top right, rgba(76, 111, 255, 0.06), transparent 40%),
        linear-gradient(180deg, rgba(255, 255, 255, 0.98) 0%, rgba(251, 252, 255, 0.98) 100%);
    box-shadow: 0 12px 24px rgba(15, 23, 42, 0.04);
    border-left: 1px solid rgba(148, 163, 184, 0.16) !important;
    transition: border-color 0.18s ease, box-shadow 0.18s ease, transform 0.18s ease;
}

.kb-admin-entity-card.table-list-row:hover {
    border-color: rgba(76, 111, 255, 0.18);
    box-shadow: 0 16px 30px rgba(15, 23, 42, 0.06);
    transform: translateY(-1px);
}

.kb-admin-user-head,
.kb-admin-group-head {
    display: flex;
    align-items: center;
    gap: 12px;
    flex-wrap: wrap;
    min-width: 0;
}

.kb-admin-id-pill .dropdown {
    display: inline-flex;
}

.kb-admin-id-pill .dropdown > a,
.kb-admin-id-fallback {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    min-height: 40px;
    padding: 0 14px;
    border: 1px solid rgba(148, 163, 184, 0.16);
    border-radius: 999px;
    background: rgba(255, 255, 255, 0.82);
    color: var(--kb-admin-text);
    font-size: 0.84rem;
    font-weight: 900;
    text-decoration: none;
    box-shadow: 0 8px 16px rgba(15, 23, 42, 0.04);
}

.kb-admin-id-pill .dropdown > a strong {
    display: inline-flex;
    align-items: center;
    gap: 8px;
}

.kb-admin-id-pill .dropdown > a:hover {
    color: var(--kb-admin-blue-700);
    border-color: var(--kb-admin-border-strong);
    background: #ffffff;
}

.table-list-title.kb-admin-entity-title,
.table-list-title.kb-admin-entity-title a {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    min-width: 0;
    color: var(--kb-admin-text);
    font-size: 1.02rem;
    font-weight: 900;
    line-height: 1.35;
    text-decoration: none;
}

.table-list-title.kb-admin-entity-title a:hover {
    color: var(--kb-admin-blue-700);
}

.table-list-title.kb-admin-entity-title .avatar-inline,
.table-list-title.kb-admin-entity-title img,
.table-list-title.kb-admin-entity-title .avatar {
    width: 32px;
    height: 32px;
    border-radius: 999px;
    border: 2px solid #ffffff;
    box-shadow: 0 8px 16px rgba(15, 23, 42, 0.08);
}

.kb-admin-entity-details.table-list-details {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    gap: 8px;
    margin: 0;
    color: var(--kb-admin-text-soft);
}

.kb-admin-entity-details.table-list-details > span,
.kb-admin-entity-details.table-list-details > a,
.kb-admin-entity-details .table-list-category {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    min-height: 32px;
    padding: 0 12px;
    border: 1px solid rgba(148, 163, 184, 0.14);
    border-radius: 999px;
    background: rgba(255, 255, 255, 0.78);
    color: var(--kb-admin-text-soft);
    font-size: 0.78rem;
    font-weight: 800;
    text-decoration: none;
    box-shadow: 0 8px 16px rgba(15, 23, 42, 0.03);
}

.kb-admin-role-chip.table-list-category {
    background: rgba(76, 111, 255, 0.10);
    border-color: rgba(76, 111, 255, 0.16);
    color: var(--kb-admin-blue-700);
}

.kb-admin-entity-details a {
    color: inherit;
    text-decoration: none;
}

.kb-admin-entity-details a:hover {
    color: var(--kb-admin-blue-700);
}

.kb-admin-icon-row.table-list-icons {
    display: inline-flex;
    align-items: center;
    justify-content: flex-end;
    flex-wrap: wrap;
    gap: 8px;
}

.kb-admin-icon-row.table-list-icons > span,
.kb-admin-icon-row.table-list-icons > a {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    min-width: 32px;
    min-height: 32px;
    padding: 0 10px;
    border: 1px solid rgba(148, 163, 184, 0.14);
    border-radius: 999px;
    background: rgba(255, 255, 255, 0.82);
    color: var(--kb-admin-text-soft);
    box-shadow: 0 8px 16px rgba(15, 23, 42, 0.03);
}

.kb-admin-icon-row.table-list-icons i {
    color: var(--kb-admin-blue-700);
}

.kb-admin-pagination,
.kb-project-user-overview-page .kb-admin-pagination {
    display: flex;
    justify-content: center;
    padding-top: 4px;
}

.kb-admin-pagination .pagination,
.kb-project-user-overview-page .kb-admin-pagination .pagination {
    display: inline-flex;
    flex-wrap: wrap;
    gap: 8px;
    padding: 8px;
    border: 1px solid rgba(148, 163, 184, 0.16);
    border-radius: 18px;
    background: rgba(255, 255, 255, 0.82);
    box-shadow: 0 8px 16px rgba(15, 23, 42, 0.03);
}

.kb-admin-pagination .pagination a,
.kb-admin-pagination .pagination span,
.kb-project-user-overview-page .kb-admin-pagination .pagination a,
.kb-project-user-overview-page .kb-admin-pagination .pagination span {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    min-width: 36px;
    min-height: 36px;
    padding: 0 12px;
    border-radius: 12px;
    color: var(--kb-admin-text-soft);
    text-decoration: none;
}

.kb-admin-pagination .pagination a:hover,
.kb-admin-pagination .pagination .active,
.kb-admin-pagination .pagination .current,
.kb-project-user-overview-page .kb-admin-pagination .pagination a:hover,
.kb-project-user-overview-page .kb-admin-pagination .pagination .active,
.kb-project-user-overview-page .kb-admin-pagination .pagination .current {
    background: var(--kb-admin-gradient);
    color: #ffffff;
}

.kb-project-user-overview-page {
    display: flex;
    flex-direction: column;
    gap: 20px;
}

.kb-project-user-overview-page .sidebar-container {
    display: grid;
    grid-template-columns: 270px minmax(0, 1fr);
    gap: 22px;
    align-items: start;
}

.kb-project-user-overview-page .sidebar {
    padding: 18px;
}

.kb-project-user-overview-page .sidebar > .js-select-dropdown-autocomplete {
    display: block;
    margin-bottom: 16px;
}

.kb-project-user-overview-page .sidebar br {
    display: none;
}

.kb-project-user-overview-page .sidebar ul {
    display: grid;
    gap: 8px;
    margin: 0;
    padding: 0;
    list-style: none;
}

.kb-project-user-overview-page .sidebar li {
    margin: 0;
}

.kb-project-user-overview-page .sidebar li a {
    display: flex;
    align-items: center;
    min-height: 42px;
    padding: 0 14px;
    border: 1px solid rgba(148, 163, 184, 0.14);
    border-radius: 16px;
    background: rgba(255, 255, 255, 0.78);
    color: var(--kb-admin-text-soft);
    font-size: 0.84rem;
    font-weight: 800;
    text-decoration: none;
    box-shadow: 0 8px 16px rgba(15, 23, 42, 0.03);
}

.kb-project-user-overview-page .sidebar li.active a {
    background: var(--kb-admin-gradient);
    border-color: transparent;
    color: #ffffff;
    box-shadow: 0 14px 28px rgba(76, 111, 255, 0.18);
}

.kb-project-user-overview-page .sidebar li:not(.active) a:hover {
    color: var(--kb-admin-blue-700);
    border-color: var(--kb-admin-border-strong);
    background: #ffffff;
}

.kb-project-user-overview-page .sidebar-content {
    min-width: 0;
    display: flex;
    flex-direction: column;
    gap: 16px;
}

.kb-project-user-overview-page .sidebar-content > .page-header h2 {
    margin: 0;
    color: var(--kb-admin-text);
    font-size: 1.75rem;
    font-weight: 900;
    line-height: 1.2;
}

.kb-modern-data-table-shell {
    padding: 18px;
    overflow: hidden;
}

.kb-modern-data-table {
    width: 100%;
    margin: 0;
    border-collapse: separate;
    border-spacing: 0 10px;
    table-layout: fixed;
}

.kb-modern-data-table thead th {
    padding: 0 14px 10px;
    border: 0;
    background: transparent;
    color: var(--kb-admin-blue-700);
    font-size: 0.78rem;
    font-weight: 900;
    line-height: 1.3;
    text-transform: none;
}

.kb-modern-data-table thead th a {
    color: inherit;
    text-decoration: none;
}

.kb-modern-data-table tbody td {
    padding: 14px;
    border-top: 1px solid rgba(148, 163, 184, 0.14);
    border-bottom: 1px solid rgba(148, 163, 184, 0.14);
    background: rgba(255, 255, 255, 0.86);
    color: var(--kb-admin-text);
    vertical-align: middle;
}

.kb-modern-data-table tbody td:first-child {
    border-left: 1px solid rgba(148, 163, 184, 0.14);
    border-radius: 18px 0 0 18px;
}

.kb-modern-data-table tbody td:last-child {
    border-right: 1px solid rgba(148, 163, 184, 0.14);
    border-radius: 0 18px 18px 0;
}

.kb-modern-data-table tbody tr:hover td {
    background: rgba(247, 250, 255, 0.96);
}

.kb-modern-data-table td a {
    color: var(--kb-admin-blue-700);
    text-decoration: none;
}

.kb-modern-data-table td a:hover {
    color: var(--kb-admin-blue-600);
}

.kb-modern-data-table .kb-table-id-pill {
    --kb-table-pill-bg: rgba(255, 255, 255, 0.78);
    --kb-table-pill-border: rgba(148, 163, 184, 0.16);
    --kb-table-pill-text: var(--kb-admin-text);
    display: inline-flex;
    align-items: center;
    justify-content: center;
    min-height: 36px;
    padding: 0 12px;
    border: 1px solid var(--kb-table-pill-border);
    border-radius: 999px;
    background: var(--kb-table-pill-bg);
    color: var(--kb-table-pill-text);
    font-size: 0.82rem;
    font-weight: 900;
    text-decoration: none;
    box-shadow: 0 8px 16px rgba(15, 23, 42, 0.03);
}

.kb-modern-data-table .kb-table-id-pill.color-yellow { --kb-table-pill-bg: rgba(223, 227, 45, 0.16); --kb-table-pill-border: rgba(223, 227, 45, 0.28); --kb-table-pill-text: #757d15; }
.kb-modern-data-table .kb-table-id-pill.color-blue { --kb-table-pill-bg: rgba(98, 165, 241, 0.16); --kb-table-pill-border: rgba(98, 165, 241, 0.26); --kb-table-pill-text: #275fa8; }
.kb-modern-data-table .kb-table-id-pill.color-green { --kb-table-pill-bg: rgba(74, 227, 113, 0.15); --kb-table-pill-border: rgba(74, 227, 113, 0.24); --kb-table-pill-text: #1f7f3e; }
.kb-modern-data-table .kb-table-id-pill.color-purple { --kb-table-pill-bg: rgba(205, 133, 254, 0.16); --kb-table-pill-border: rgba(205, 133, 254, 0.24); --kb-table-pill-text: #7b3fb2; }
.kb-modern-data-table .kb-table-id-pill.color-red { --kb-table-pill-bg: rgba(255, 151, 151, 0.16); --kb-table-pill-border: rgba(255, 151, 151, 0.24); --kb-table-pill-text: #b54747; }
.kb-modern-data-table .kb-table-id-pill.color-orange { --kb-table-pill-bg: rgba(255, 172, 98, 0.16); --kb-table-pill-border: rgba(255, 172, 98, 0.24); --kb-table-pill-text: #b36118; }
.kb-modern-data-table .kb-table-id-pill.color-grey,
.kb-modern-data-table .kb-table-id-pill.color-dark_grey { --kb-table-pill-bg: rgba(160, 174, 192, 0.16); --kb-table-pill-border: rgba(160, 174, 192, 0.24); --kb-table-pill-text: #59677b; }
.kb-modern-data-table .kb-table-id-pill.color-brown { --kb-table-pill-bg: rgba(78, 52, 46, 0.14); --kb-table-pill-border: rgba(78, 52, 46, 0.22); --kb-table-pill-text: #6a463d; }
.kb-modern-data-table .kb-table-id-pill.color-deep_orange { --kb-table-pill-bg: rgba(230, 74, 25, 0.14); --kb-table-pill-border: rgba(230, 74, 25, 0.22); --kb-table-pill-text: #a6461d; }
.kb-modern-data-table .kb-table-id-pill.color-pink { --kb-table-pill-bg: rgba(216, 27, 96, 0.14); --kb-table-pill-border: rgba(216, 27, 96, 0.22); --kb-table-pill-text: #a82960; }
.kb-modern-data-table .kb-table-id-pill.color-teal { --kb-table-pill-bg: rgba(0, 105, 92, 0.14); --kb-table-pill-border: rgba(0, 105, 92, 0.22); --kb-table-pill-text: #176960; }
.kb-modern-data-table .kb-table-id-pill.color-cyan { --kb-table-pill-bg: rgba(0, 188, 212, 0.14); --kb-table-pill-border: rgba(0, 188, 212, 0.22); --kb-table-pill-text: #1e7f90; }
.kb-modern-data-table .kb-table-id-pill.color-lime { --kb-table-pill-bg: rgba(175, 180, 43, 0.14); --kb-table-pill-border: rgba(175, 180, 43, 0.22); --kb-table-pill-text: #6f7320; }
.kb-modern-data-table .kb-table-id-pill.color-light_green { --kb-table-pill-bg: rgba(104, 159, 56, 0.14); --kb-table-pill-border: rgba(104, 159, 56, 0.22); --kb-table-pill-text: #537a35; }
.kb-modern-data-table .kb-table-id-pill.color-amber { --kb-table-pill-bg: rgba(255, 160, 0, 0.14); --kb-table-pill-border: rgba(255, 160, 0, 0.22); --kb-table-pill-text: #a36514; }

.kb-modern-data-table .kb-table-badge {
    display: inline-flex;
    align-items: center;
    min-height: 32px;
    padding: 0 12px;
    border: 1px solid rgba(148, 163, 184, 0.14);
    border-radius: 999px;
    background: rgba(255, 255, 255, 0.78);
    color: var(--kb-admin-text-soft);
    font-size: 0.78rem;
    font-weight: 800;
    box-shadow: 0 8px 16px rgba(15, 23, 42, 0.03);
}

.kb-modern-data-table .kb-table-muted {
    color: var(--kb-admin-text-muted);
}

.kb-modern-data-table .dashboard-table-link {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 32px;
    height: 32px;
    margin-right: 8px;
    border: 1px solid rgba(148, 163, 184, 0.14);
    border-radius: 12px;
    background: rgba(255, 255, 255, 0.82);
    color: var(--kb-admin-blue-700);
    box-shadow: 0 8px 16px rgba(15, 23, 42, 0.03);
}

.kb-modern-data-table .dashboard-project-stats {
    display: flex;
    flex-wrap: wrap;
    gap: 8px;
}

.kb-modern-data-table .dashboard-project-stats strong,
.kb-modern-data-table .dashboard-project-stats span {
    display: inline-flex;
    align-items: center;
    min-height: 30px;
    padding: 0 10px;
    border-radius: 999px;
    background: rgba(255, 255, 255, 0.78);
    border: 1px solid rgba(148, 163, 184, 0.14);
    color: var(--kb-admin-text-soft);
    font-size: 0.76rem;
    font-weight: 800;
}

.kb-modern-data-table .dashboard-project-stats strong {
    color: var(--kb-admin-blue-700);
}

@media (max-width: 1100px) {
    .kb-admin-entity-card.table-list-row {
        grid-template-columns: 1fr;
        justify-items: flex-start;
    }

    .kb-admin-icon-row.table-list-icons {
        justify-content: flex-start;
    }

    .kb-project-user-overview-page .sidebar-container {
        grid-template-columns: 1fr;
    }
}

@media (max-width: 760px) {
    .kb-admin-entity-page,
    .kb-project-user-overview-page {
        gap: 14px;
    }

    .kb-admin-toolbar-card,
    .kb-admin-search-card,
    .kb-admin-list-shell,
    .kb-modern-data-table-shell {
        border-radius: 24px;
    }

    .kb-admin-page-header.page-header,
    .kb-project-user-overview-page > .page-header,
    .kb-project-user-overview-page .sidebar-content > .page-header,
    .kb-modern-data-table-shell,
    .kb-admin-list-shell {
        padding: 16px;
    }

    .kb-admin-entity-card.table-list-row {
        padding: 16px;
    }

    .kb-modern-data-table {
        display: block;
        overflow-x: auto;
        white-space: nowrap;
    }
}
</style>
<?php endif ?>
