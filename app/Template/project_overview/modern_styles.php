<?php static $kbProjectOverviewModernStylesLoaded = false; ?>
<?php if (! $kbProjectOverviewModernStylesLoaded): ?>
<?php $kbProjectOverviewModernStylesLoaded = true; ?>
<style>
.kb-project-overview-page {
    --kb-overview-border: rgba(148, 163, 184, 0.18);
    --kb-overview-border-strong: rgba(76, 111, 255, 0.20);
    --kb-overview-surface: #ffffff;
    --kb-overview-surface-soft: #fbfcff;
    --kb-overview-surface-muted: #f3f6ff;
    --kb-overview-text: #162033;
    --kb-overview-text-soft: #52607a;
    --kb-overview-text-muted: #76859d;
    --kb-overview-accent: #4c6fff;
    --kb-overview-gradient: linear-gradient(135deg, #4c6fff 0%, #597bf8 100%);
    --kb-overview-shadow-sm: 0 12px 26px rgba(15, 23, 42, 0.05);
    --kb-overview-shadow-md: 0 18px 36px rgba(15, 23, 42, 0.06);
    --kb-overview-radius-xl: 30px;
    --kb-overview-radius-lg: 24px;
    --kb-overview-radius-md: 20px;
}

.kb-project-overview-shell {
    display: flex;
    flex-direction: column;
    gap: 22px;
    min-width: 0;
}

.kb-project-overview-grid {
    display: grid;
    grid-template-columns: minmax(0, 1.45fr) minmax(300px, 0.95fr);
    gap: 22px;
    align-items: start;
}

.kb-project-overview-attachments-slot,
.kb-project-overview-activity-slot {
    grid-column: 1 / -1;
}

.project-overview-columns {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
    gap: 16px;
}

.project-overview-column {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    gap: 8px;
    min-height: 112px;
    padding: 18px 16px;
    border: 1px solid var(--kb-overview-border);
    border-radius: var(--kb-overview-radius-lg);
    background: linear-gradient(180deg, rgba(255, 255, 255, 0.98) 0%, rgba(251, 252, 255, 0.98) 100%);
    box-shadow: var(--kb-overview-shadow-sm);
    text-align: center;
}

.project-overview-column strong {
    display: block;
    color: var(--kb-overview-text);
    font-size: clamp(1.7rem, 2vw, 2.2rem);
    font-weight: 900;
    line-height: 1;
    letter-spacing: -0.04em;
}

.project-overview-column small {
    display: block;
    color: var(--kb-overview-text-soft);
    font-size: 0.95rem;
    font-weight: 700;
    line-height: 1.35;
}

.kb-project-overview-page .accordion-section {
    margin: 0;
    border: 1px solid var(--kb-overview-border);
    border-radius: var(--kb-overview-radius-xl);
    background: linear-gradient(180deg, rgba(255, 255, 255, 0.98) 0%, rgba(251, 252, 255, 0.98) 100%);
    box-shadow: var(--kb-overview-shadow-sm);
    overflow: hidden;
    transition: border-color 180ms ease, box-shadow 180ms ease, transform 180ms ease;
}

.kb-project-overview-page .accordion-section:hover {
    border-color: var(--kb-overview-border-strong);
    box-shadow: var(--kb-overview-shadow-md);
}

.kb-project-overview-page .accordion-title {
    position: relative;
    display: flex;
    align-items: flex-start;
    justify-content: space-between;
    gap: 16px;
    padding: 22px 62px 22px 24px;
    color: var(--kb-overview-text);
    cursor: pointer;
    list-style: none;
}

.kb-project-overview-page .accordion-title::-webkit-details-marker {
    display: none;
}

.kb-project-overview-page .accordion-title::after {
    content: "\f067";
    font-family: "FontAwesome";
    position: absolute;
    top: 50%;
    right: 22px;
    width: 34px;
    height: 34px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    border-radius: 999px;
    border: 1px solid var(--kb-overview-border);
    background: rgba(255, 255, 255, 0.92);
    color: var(--kb-overview-accent);
    transform: translateY(-50%);
    box-shadow: 0 8px 16px rgba(15, 23, 42, 0.04);
}

.kb-project-overview-page .accordion-section[open] > .accordion-title::after {
    content: "\f068";
}

.kb-project-overview-page .accordion-section[open] > .accordion-title {
    border-bottom: 1px solid rgba(148, 163, 184, 0.10);
}

.kb-project-overview-summary-copy {
    display: flex;
    flex-direction: column;
    gap: 4px;
    min-width: 0;
}

.kb-project-overview-summary-title {
    color: var(--kb-overview-text);
    font-size: 1.02rem;
    font-weight: 800;
    line-height: 1.2;
    letter-spacing: -0.02em;
}

.kb-project-overview-summary-subtitle {
    color: var(--kb-overview-text-muted);
    font-size: 0.85rem;
    font-weight: 600;
    line-height: 1.4;
}

.kb-project-overview-page .accordion-content,
.kb-project-overview-section-content {
    padding: 0 24px 24px;
}

.kb-project-overview-page .buttons-header {
    display: flex;
    justify-content: flex-end;
    margin-bottom: 16px;
}

.kb-project-overview-page .buttons-header a,
.kb-project-overview-page .buttons-header button {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    min-height: 40px;
    padding: 0 16px;
    border: 1px solid var(--kb-overview-border);
    border-radius: 999px;
    background: #ffffff;
    color: var(--kb-overview-text);
    font-weight: 700;
    box-shadow: 0 8px 18px rgba(15, 23, 42, 0.04);
    text-decoration: none;
}

.kb-project-overview-page .buttons-header a:hover,
.kb-project-overview-page .buttons-header button:hover {
    color: var(--kb-overview-accent);
    border-color: var(--kb-overview-border-strong);
    background: #f7f9ff;
}

.kb-project-overview-page .markdown {
    color: var(--kb-overview-text-soft);
    line-height: 1.7;
}

.kb-project-overview-page .markdown h1,
.kb-project-overview-page .markdown h2,
.kb-project-overview-page .markdown h3,
.kb-project-overview-page .markdown strong {
    color: var(--kb-overview-text);
}

.kb-project-overview-empty-state {
    margin: 0;
    padding: 22px 20px;
    border: 1px dashed rgba(148, 163, 184, 0.22);
    border-radius: var(--kb-overview-radius-md);
    background: linear-gradient(180deg, #ffffff 0%, #f7f9ff 100%);
    color: var(--kb-overview-text-muted);
    font-weight: 600;
    text-align: center;
}

.kb-project-overview-info-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
    gap: 14px;
}

.kb-project-overview-info-item {
    display: flex;
    flex-direction: column;
    gap: 8px;
    min-height: 96px;
    padding: 16px 18px;
    border: 1px solid var(--kb-overview-border);
    border-radius: var(--kb-overview-radius-md);
    background: linear-gradient(180deg, #ffffff 0%, #fbfcff 100%);
    box-shadow: 0 10px 20px rgba(15, 23, 42, 0.04);
}

.kb-project-overview-info-label {
    color: var(--kb-overview-text-muted);
    font-size: 0.78rem;
    font-weight: 800;
    letter-spacing: 0.04em;
    text-transform: uppercase;
}

.kb-project-overview-info-value {
    color: var(--kb-overview-text);
    font-size: 1rem;
    font-weight: 800;
    line-height: 1.45;
    word-break: break-word;
}

.kb-project-overview-link-row {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    margin-top: 18px;
}

.kb-project-overview-link-row a {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    min-height: 40px;
    padding: 0 14px;
    border: 1px solid var(--kb-overview-border);
    border-radius: 999px;
    background: #ffffff;
    color: var(--kb-overview-text-soft);
    font-size: 0.88rem;
    font-weight: 700;
    text-decoration: none;
}

.kb-project-overview-link-row a:hover {
    color: var(--kb-overview-accent);
    border-color: var(--kb-overview-border-strong);
    background: #f7f9ff;
}

.kb-project-overview-attachments-stack {
    display: flex;
    flex-direction: column;
    gap: 18px;
}

.kb-project-overview-page .file-thumbnails {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
    gap: 16px;
    margin: 0;
}

.kb-project-overview-page .file-thumbnail {
    border: 1px solid var(--kb-overview-border);
    border-radius: var(--kb-overview-radius-md);
    background: linear-gradient(180deg, #ffffff 0%, #fbfcff 100%);
    box-shadow: 0 10px 22px rgba(15, 23, 42, 0.04);
    overflow: hidden;
}

.kb-project-overview-page .file-thumbnail img {
    display: block;
    width: 100%;
    height: auto;
}

.kb-project-overview-page .file-thumbnail-content {
    display: flex;
    flex-direction: column;
    gap: 10px;
    padding: 14px;
}

.kb-project-overview-page .file-thumbnail-title .dropdown-menu {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 10px;
    min-height: 42px;
    padding: 0 14px;
    border: 1px solid var(--kb-overview-border);
    border-radius: 14px;
    background: #ffffff;
    color: var(--kb-overview-text);
    font-weight: 700;
    text-decoration: none;
}

.kb-project-overview-page .file-thumbnail-title .dropdown-menu:hover,
.kb-project-overview-file-name .dropdown-menu:hover {
    color: var(--kb-overview-accent);
    border-color: var(--kb-overview-border-strong);
    background: #f7f9ff;
}

.kb-project-overview-page .file-thumbnail-description {
    color: var(--kb-overview-text-muted);
    font-size: 0.84rem;
    line-height: 1.5;
}

.kb-project-overview-files-table-wrap {
    overflow-x: auto;
    border: 1px solid var(--kb-overview-border);
    border-radius: var(--kb-overview-radius-lg);
    background: linear-gradient(180deg, #ffffff 0%, #fbfcff 100%);
    box-shadow: 0 10px 22px rgba(15, 23, 42, 0.04);
}

.kb-project-overview-files-table {
    width: 100%;
    min-width: 680px;
    margin: 0;
    border-collapse: separate;
    border-spacing: 0;
}

.kb-project-overview-files-table th {
    padding: 16px 18px;
    color: var(--kb-overview-text-muted);
    font-size: 0.78rem;
    font-weight: 800;
    letter-spacing: 0.04em;
    text-transform: uppercase;
    background: transparent;
    border-bottom: 1px solid rgba(148, 163, 184, 0.12);
    text-align: left;
}

.kb-project-overview-files-table td {
    padding: 16px 18px;
    color: var(--kb-overview-text-soft);
    border-top: 1px solid rgba(148, 163, 184, 0.10);
    background: transparent !important;
    vertical-align: middle;
}

.kb-project-overview-files-table tbody tr:first-child td {
    border-top: 0;
}

.kb-project-overview-file-name {
    display: flex;
    align-items: center;
    gap: 12px;
    min-width: 260px;
}

.kb-project-overview-file-icon {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 36px;
    height: 36px;
    border-radius: 12px;
    border: 1px solid var(--kb-overview-border);
    background: var(--kb-overview-surface-muted);
    color: var(--kb-overview-accent);
    flex: 0 0 auto;
}

.kb-project-overview-file-name .dropdown {
    min-width: 0;
}

.kb-project-overview-file-name .dropdown-menu {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    min-height: 40px;
    padding: 0 12px;
    border: 1px solid var(--kb-overview-border);
    border-radius: 14px;
    background: #ffffff;
    color: var(--kb-overview-text);
    font-weight: 700;
    text-decoration: none;
    box-shadow: 0 8px 18px rgba(15, 23, 42, 0.04);
}

.kb-project-overview-page .dropdown {
    position: relative;
}

.kb-project-overview-page .dropdown > ul {
    min-width: 240px;
    margin-top: 10px;
    padding: 8px !important;
    border: 1px solid var(--kb-overview-border-strong) !important;
    border-radius: 18px !important;
    background: linear-gradient(180deg, #ffffff 0%, #fbfcff 100%) !important;
    box-shadow: 0 18px 36px rgba(15, 23, 42, 0.10) !important;
}

.kb-project-overview-page .dropdown > ul li {
    margin: 2px 0 !important;
    padding: 0 !important;
    border: 0 !important;
    background: transparent !important;
}

.kb-project-overview-page .dropdown > ul li > a {
    display: flex;
    align-items: center;
    gap: 10px;
    min-height: 42px;
    padding: 0 14px !important;
    border: 1px solid transparent !important;
    border-radius: 12px;
    color: var(--kb-overview-text) !important;
    background: transparent !important;
    font-size: 0.9rem;
    font-weight: 600;
    text-decoration: none;
}

.kb-project-overview-page .dropdown > ul li > a:hover,
.kb-project-overview-page .dropdown > ul li > a:focus {
    color: #ffffff !important;
    background: var(--kb-overview-gradient) !important;
    border-color: transparent !important;
    box-shadow: 0 12px 24px rgba(76, 111, 255, 0.18) !important;
}

.kb-project-overview-page .dropdown > ul li > a:hover .fa,
.kb-project-overview-page .dropdown > ul li > a:focus .fa,
.kb-project-overview-page .dropdown > ul li > a:hover *,
.kb-project-overview-page .dropdown > ul li > a:focus * {
    color: inherit !important;
}

.kb-project-overview-activity-feed {
    display: flex;
    flex-direction: column;
    gap: 14px;
}

.kb-project-overview-page .activity-event {
    display: grid;
    grid-template-columns: 52px minmax(0, 1fr);
    gap: 16px;
    margin: 0;
    padding: 18px;
    border: 1px solid var(--kb-overview-border);
    border-radius: var(--kb-overview-radius-lg);
    background: linear-gradient(180deg, #ffffff 0%, #fbfcff 100%);
    box-shadow: 0 10px 20px rgba(15, 23, 42, 0.04);
}

.kb-project-overview-page .activity-content {
    min-width: 0;
    margin-left: 0;
}

.kb-project-overview-page .activity-title {
    display: flex;
    align-items: baseline;
    flex-wrap: wrap;
    gap: 8px 10px;
    margin: 0;
    border: 0;
    color: var(--kb-overview-text);
    font-size: 1rem;
    font-weight: 800;
    line-height: 1.5;
}

.kb-project-overview-page .activity-date {
    margin-left: 0;
    padding: 0 10px;
    border: 1px solid var(--kb-overview-border);
    border-radius: 999px;
    background: #f7f9ff;
    color: var(--kb-overview-text-muted);
    font-size: 0.76rem;
    font-weight: 700;
    line-height: 1.9;
}

.kb-project-overview-page .activity-description {
    margin-top: 10px;
    color: var(--kb-overview-text-soft);
    line-height: 1.6;
}

.kb-project-overview-page .activity-description p {
    margin: 0;
}

.kb-project-overview-page .activity-description ul {
    margin: 8px 0 0 18px;
}

.kb-project-overview-page .activity-task-title {
    margin-bottom: 8px !important;
    color: var(--kb-overview-text-soft);
    font-weight: 700;
}

.kb-project-overview-page .activity-event .avatar {
    margin: 0;
}

.kb-project-overview-page .activity-event .avatar img,
.kb-project-overview-page .activity-event .avatar .avatar-letter {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 52px;
    height: 52px;
    border-radius: 18px;
    color: #ffffff;
    font-size: 1.2rem;
    font-weight: 800;
    box-shadow: 0 12px 24px rgba(76, 111, 255, 0.16);
    object-fit: cover;
}

.kb-project-overview-page .alert {
    border: 1px dashed rgba(148, 163, 184, 0.22);
    border-radius: var(--kb-overview-radius-md);
    background: linear-gradient(180deg, #ffffff 0%, #f7f9ff 100%);
    color: var(--kb-overview-text-muted);
    box-shadow: none;
}

@media (max-width: 1080px) {
    .kb-project-overview-grid {
        grid-template-columns: 1fr;
    }

    .kb-project-overview-attachments-slot,
    .kb-project-overview-activity-slot {
        grid-column: auto;
    }
}

@media (max-width: 720px) {
    .project-overview-columns {
        grid-template-columns: repeat(2, minmax(0, 1fr));
    }

    .kb-project-overview-page .accordion-title {
        padding: 20px 56px 20px 18px;
    }

    .kb-project-overview-page .accordion-content,
    .kb-project-overview-section-content {
        padding: 0 18px 18px;
    }

    .kb-project-overview-page .activity-event {
        grid-template-columns: 1fr;
    }

    .kb-project-overview-page .activity-event .avatar {
        width: 52px;
    }
}
</style>
<?php endif; ?>
