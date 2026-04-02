<section id="main" class="kb-project-shell-modern">
    <?php static $kbProjectModernStylesLoaded = false; ?>
    <?php if (! $kbProjectModernStylesLoaded): ?>
        <?php $kbProjectModernStylesLoaded = true; ?>
        <style>
            .kb-project-shell-modern {
                --kb-bg: #f5f8ff;
                --kb-surface: #ffffff;
                --kb-surface-soft: #f8fbff;
                --kb-line: rgba(15, 23, 42, 0.08);
                --kb-line-strong: rgba(0, 17, 255, 0.14);
                --kb-text: #0f172a;
                --kb-text-soft: #64748b;
                --kb-text-muted: #94a3b8;
                --kb-shadow-soft: 0 10px 30px rgba(15, 23, 42, 0.05);
                --kb-shadow-card: 0 22px 55px rgba(15, 23, 42, 0.08);
                --kb-radius-xl: 28px;
                --kb-radius-lg: 22px;
                --kb-radius-md: 16px;
                --kb-radius-sm: 12px;
                --kb-gradient: linear-gradient(135deg, #1d4ed8 0%, #3b82f6 100%);
                background:
                    radial-gradient(circle at top right, rgba(59, 130, 246, 0.10), transparent 24%),
                    radial-gradient(circle at top left, rgba(37, 99, 235, 0.06), transparent 18%),
                    linear-gradient(180deg, #fbfdff 0%, #f4f8ff 100%);
                min-height: calc(100vh - 72px);
                padding: 28px;
            }

            .kb-project-shell-modern,
            .kb-project-shell-modern * {
                box-sizing: border-box;
            }

            .kb-project-shell-modern .kb-project-frame {
                width: min(1480px, 100%);
                margin: 0 auto;
            }

            .kb-project-shell-modern .sidebar-container.kb-project-body {
                display: grid;
                grid-template-columns: minmax(260px, 308px) minmax(0, 1fr);
                gap: 26px;
                align-items: start;
            }

            .kb-project-shell-modern .kb-project-sidebar-column {
                min-width: 0;
                position: sticky;
                top: 24px;
            }

            .kb-project-shell-modern .sidebar-content.kb-project-content {
                min-width: 0;
                background: linear-gradient(180deg, rgba(255, 255, 255, 0.98) 0%, rgba(250, 252, 255, 0.98) 100%);
                border: 1px solid var(--kb-line);
                border-radius: var(--kb-radius-xl);
                box-shadow: 0 22px 52px rgba(15, 23, 42, 0.06);
                padding: 30px;
                position: relative;
                overflow: hidden;
            }

            .kb-project-shell-modern .sidebar-content.kb-project-content::before {
                content: "";
                position: absolute;
                inset: 0 0 auto 0;
                height: 4px;
                background: var(--kb-gradient);
            }

            .kb-project-shell-modern .sidebar-content.kb-project-content > *:first-child {
                margin-top: 0;
            }

            .kb-project-shell-modern .sidebar-content.kb-project-content > *:last-child {
                margin-bottom: 0;
            }

            .kb-project-shell-modern h1,
            .kb-project-shell-modern h2,
            .kb-project-shell-modern h3,
            .kb-project-shell-modern h4,
            .kb-project-shell-modern h5,
            .kb-project-shell-modern h6 {
                color: var(--kb-text);
                letter-spacing: -0.02em;
                line-height: 1.2;
            }

            .kb-project-shell-modern p,
            .kb-project-shell-modern li,
            .kb-project-shell-modern span,
            .kb-project-shell-modern label,
            .kb-project-shell-modern td,
            .kb-project-shell-modern th,
            .kb-project-shell-modern small {
                color: var(--kb-text-soft);
            }

            .kb-project-shell-modern a {
                color: #0b35ff;
                text-decoration: none;
                transition: color 0.2s ease, opacity 0.2s ease, transform 0.2s ease;
            }

            .kb-project-shell-modern a:hover {
                color: #0018d8;
            }

            .kb-project-shell-modern input[type="text"],
            .kb-project-shell-modern input[type="search"],
            .kb-project-shell-modern input[type="email"],
            .kb-project-shell-modern input[type="password"],
            .kb-project-shell-modern input[type="number"],
            .kb-project-shell-modern input[type="date"],
            .kb-project-shell-modern select,
            .kb-project-shell-modern textarea {
                width: 100%;
                min-height: 48px;
                border-radius: 14px;
                border: 1px solid rgba(15, 23, 42, 0.08);
                background: #ffffff;
                color: var(--kb-text);
                padding: 0 15px;
                box-shadow: 0 2px 10px rgba(15, 23, 42, 0.02);
                transition: border-color 0.2s ease, box-shadow 0.2s ease, background-color 0.2s ease;
            }

            .kb-project-shell-modern textarea {
                min-height: 120px;
                padding-top: 12px;
                padding-bottom: 12px;
                resize: vertical;
            }

            .kb-project-shell-modern input[type="text"]:focus,
            .kb-project-shell-modern input[type="search"]:focus,
            .kb-project-shell-modern input[type="email"]:focus,
            .kb-project-shell-modern input[type="password"]:focus,
            .kb-project-shell-modern input[type="number"]:focus,
            .kb-project-shell-modern input[type="date"]:focus,
            .kb-project-shell-modern select:focus,
            .kb-project-shell-modern textarea:focus {
                outline: none;
                border-color: rgba(0, 17, 255, 0.22);
                box-shadow: 0 0 0 4px rgba(0, 17, 255, 0.09);
            }

            .kb-project-shell-modern button,
            .kb-project-shell-modern .button,
            .kb-project-shell-modern .btn,
            .kb-project-shell-modern input[type="submit"] {
                min-height: 44px;
                border: 0;
                border-radius: 14px;
                padding: 0 18px;
                font-weight: 700;
                letter-spacing: -0.01em;
                color: #ffffff;
                background: var(--kb-gradient);
                box-shadow: 0 12px 28px rgba(0, 17, 255, 0.18);
                transition: transform 0.2s ease, box-shadow 0.2s ease, opacity 0.2s ease;
            }

            .kb-project-shell-modern button:hover,
            .kb-project-shell-modern .button:hover,
            .kb-project-shell-modern .btn:hover,
            .kb-project-shell-modern input[type="submit"]:hover {
                transform: translateY(-1px);
                box-shadow: 0 18px 36px rgba(0, 17, 255, 0.22);
            }

            .kb-project-shell-modern .page-header,
            .kb-project-shell-modern .page-header h2,
            .kb-project-shell-modern .page-header ul {
                margin-top: 0;
            }

            .kb-project-shell-modern .page-header h2,
            .kb-project-shell-modern .page-header h3 {
                margin-bottom: 10px;
            }

            .kb-project-shell-modern table {
                width: 100%;
                border-collapse: separate;
                border-spacing: 0;
            }

            .kb-project-shell-modern table th,
            .kb-project-shell-modern table td {
                padding: 14px 16px;
                border-bottom: 1px solid rgba(15, 23, 42, 0.06);
                text-align: left;
            }

            .kb-project-shell-modern table thead th {
                color: var(--kb-text);
                font-weight: 700;
                background: rgba(0, 17, 255, 0.04);
            }

            .kb-project-shell-modern .dropdown > ul {
                list-style: none;
                margin: 10px 0 0;
                padding: 10px;
                background: rgba(255, 255, 255, 0.98);
                border: 1px solid rgba(15, 23, 42, 0.08);
                border-radius: 18px;
                box-shadow: 0 24px 44px rgba(15, 23, 42, 0.12);
            }

            .kb-project-shell-modern .dropdown > ul > li {
                list-style: none;
                margin: 0;
            }

            .kb-project-shell-modern .dropdown > ul > li > a,
            .kb-project-shell-modern .dropdown > ul > li > span,
            .kb-project-shell-modern .dropdown > ul > li form,
            .kb-project-shell-modern .dropdown > ul > li .filter-display-mode,
            .kb-project-shell-modern .dropdown > ul > li .filter-compact,
            .kb-project-shell-modern .dropdown > ul > li .filter-wide,
            .kb-project-shell-modern .dropdown > ul > li .filter-vert-collapse,
            .kb-project-shell-modern .dropdown > ul > li .filter-vert-expand {
                display: flex;
                align-items: center;
                min-height: 42px;
                padding: 0 12px;
                border-radius: 12px;
                color: var(--kb-text-soft);
            }

            .kb-project-shell-modern .dropdown > ul > li > a:hover,
            .kb-project-shell-modern .dropdown > ul > li > span:hover,
            .kb-project-shell-modern .dropdown > ul > li .filter-display-mode:hover,
            .kb-project-shell-modern .dropdown > ul > li .filter-compact:hover,
            .kb-project-shell-modern .dropdown > ul > li .filter-wide:hover,
            .kb-project-shell-modern .dropdown > ul > li .filter-vert-collapse:hover,
            .kb-project-shell-modern .dropdown > ul > li .filter-vert-expand:hover {
                background: rgba(0, 17, 255, 0.06);
                color: var(--kb-text);
            }

            .kb-project-shell-modern .dropdown > ul > li > a:hover *,
            .kb-project-shell-modern .dropdown > ul > li > span:hover *,
            .kb-project-shell-modern .dropdown > ul > li .filter-display-mode:hover *,
            .kb-project-shell-modern .dropdown > ul > li .filter-compact:hover *,
            .kb-project-shell-modern .dropdown > ul > li .filter-wide:hover *,
            .kb-project-shell-modern .dropdown > ul > li .filter-vert-collapse:hover *,
            .kb-project-shell-modern .dropdown > ul > li .filter-vert-expand:hover * {
                color: inherit !important;
            }

            .kb-project-shell-modern .dropdown > ul > li i.fa {
                width: 18px;
                margin-right: 10px;
            }

            @media (max-width: 1160px) {
                .kb-project-shell-modern .sidebar-container.kb-project-body {
                    grid-template-columns: 1fr;
                }

                .kb-project-shell-modern .kb-project-sidebar-column {
                    position: static;
                }
            }

            @media (max-width: 768px) {
                .kb-project-shell-modern {
                    padding: 18px;
                }

                .kb-project-shell-modern .sidebar-content.kb-project-content {
                    padding: 22px;
                    border-radius: 22px;
                }
            }

            @media (max-width: 540px) {
                .kb-project-shell-modern {
                    padding: 14px;
                }

                .kb-project-shell-modern .sidebar-content.kb-project-content {
                    padding: 18px;
                    border-radius: 18px;
                }
            }
        </style>
    <?php endif; ?>

    <div class="kb-project-frame">
        <?= $this->projectHeader->render($project, 'TaskListController', 'show') ?>

        <section class="sidebar-container kb-project-body">
            <div class="kb-project-sidebar-column">
                <?= $this->render($sidebar_template, array('project' => $project)) ?>
            </div>

            <div class="sidebar-content kb-project-content">
                <?= $content_for_sublayout ?>
            </div>
        </section>
    </div>
</section>
