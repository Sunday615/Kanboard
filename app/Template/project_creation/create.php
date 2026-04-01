<section id="main" class="kb-project-create">
    <style>
        /* Try to enlarge common modal wrappers used by Kanboard or similar modal renderers */
        body .modal-page,
        body .modal-box,
        body .modal-container,
        body .modal-dialog,
        body .ui-dialog,
        body .ui-dialog.ui-widget,
        body .ui-dialog.ui-widget-content {
            width: min(1240px, calc(100vw - 56px)) !important;
            max-width: min(1240px, calc(100vw - 56px)) !important;
        }

        body .ui-widget-overlay,
        body .modal-backdrop,
        body .modal-overlay {
            background: rgba(15, 23, 42, 0.54) !important;
            backdrop-filter: blur(4px);
        }

        #main.kb-project-create {
            max-width: 1160px;
            margin: 0 auto;
            padding: 6px 10px 12px;
            background: transparent;
            color: #0f172a;
        }

        #main.kb-project-create .page-header {
            margin: 0 0 26px;
            padding: 0 0 22px;
            border-bottom: 1px solid #e5edf6;
        }

        #main.kb-project-create .page-header h2 {
            margin: 0;
            font-size: clamp(2.2rem, 2.4vw, 2.9rem);
            line-height: 1.02;
            font-weight: 800;
            letter-spacing: -0.04em;
            color: #0f172a;
        }

        #main.kb-project-create .kb-create-shell {
            position: relative;
            padding: 30px;
            border-radius: 28px;
            background:
                radial-gradient(circle at top right, rgba(59, 130, 246, 0.10), transparent 24%),
                radial-gradient(circle at bottom left, rgba(37, 99, 235, 0.08), transparent 28%),
                linear-gradient(180deg, #ffffff 0%, #f8fbff 100%);
            border: 1px solid #e5edf6;
            box-shadow: 0 24px 70px rgba(15, 23, 42, 0.08);
        }

        #main.kb-project-create .kb-create-shell::after {
            content: "";
            position: absolute;
            inset: auto -70px -90px auto;
            width: 220px;
            height: 220px;
            border-radius: 999px;
            background: rgba(59, 130, 246, 0.08);
            filter: blur(14px);
            pointer-events: none;
        }

        #main.kb-project-create .kb-create-topbar {
            position: relative;
            z-index: 1;
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
            gap: 20px;
            margin-bottom: 28px;
        }

        #main.kb-project-create .kb-create-top-copy {
            max-width: 760px;
        }

        #main.kb-project-create .kb-create-kicker {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-height: 34px;
            padding: 0 14px;
            margin-bottom: 14px;
            border-radius: 999px;
            background: #eff6ff;
            border: 1px solid #dbeafe;
            color: #1d4ed8;
            font-size: 0.78rem;
            font-weight: 800;
            letter-spacing: 0.08em;
            text-transform: uppercase;
        }

        #main.kb-project-create .kb-create-lead {
            margin: 0;
            color: #64748b;
            font-size: 1rem;
            line-height: 1.8;
            max-width: 760px;
        }

        #main.kb-project-create .kb-create-status {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            min-height: 48px;
            padding: 0 16px;
            border-radius: 16px;
            background: rgba(255, 255, 255, 0.82);
            border: 1px solid #dbeafe;
            box-shadow: 0 12px 26px rgba(37, 99, 235, 0.08);
            white-space: nowrap;
        }

        #main.kb-project-create .kb-create-status-dot {
            width: 10px;
            height: 10px;
            border-radius: 999px;
            background: linear-gradient(135deg, #2563eb 0%, #1d4ed8 100%);
            box-shadow: 0 0 0 5px rgba(37, 99, 235, 0.10);
            flex-shrink: 0;
        }

        #main.kb-project-create .kb-create-status-text {
            color: #334155;
            font-size: 0.92rem;
            font-weight: 700;
            line-height: 1.4;
        }

        #main.kb-project-create #project-creation-form {
            position: relative;
            z-index: 1;
            display: flex;
            flex-direction: column;
            gap: 22px;
        }

        #main.kb-project-create .kb-create-card {
            background: linear-gradient(180deg, #ffffff 0%, #fcfdff 100%);
            border: 1px solid #e2e8f0;
            border-radius: 24px;
            padding: 28px;
            box-shadow: 0 16px 40px rgba(15, 23, 42, 0.06);
        }

        #main.kb-project-create .kb-create-card.kb-create-card-soft {
            background: linear-gradient(180deg, #f8fbff 0%, #ffffff 100%);
            border-color: #dbeafe;
        }

        #main.kb-project-create .kb-create-section-head {
            margin-bottom: 22px;
        }

        #main.kb-project-create .kb-create-section-label {
            margin: 0 0 8px;
            color: #1d4ed8;
            font-size: 0.78rem;
            font-weight: 800;
            letter-spacing: 0.08em;
            text-transform: uppercase;
        }

        #main.kb-project-create .kb-create-section-title {
            margin: 0;
            color: #0f172a;
            font-size: 1.22rem;
            font-weight: 800;
            line-height: 1.28;
            letter-spacing: -0.02em;
        }

        #main.kb-project-create .kb-create-section-desc {
            margin: 8px 0 0;
            color: #64748b;
            font-size: 0.96rem;
            line-height: 1.8;
            max-width: 780px;
        }

        #main.kb-project-create .kb-create-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 22px 20px;
        }

        #main.kb-project-create .kb-field {
            min-width: 0;
        }

        #main.kb-project-create .kb-field.kb-field-full {
            grid-column: 1 / -1;
        }

        #main.kb-project-create .kb-field > label {
            display: block;
            margin: 0 0 10px;
            color: #1e293b;
            font-size: 0.98rem;
            font-weight: 700;
            line-height: 1.4;
        }

        #main.kb-project-create input[type="text"],
        #main.kb-project-create input[type="number"],
        #main.kb-project-create select,
        #main.kb-project-create textarea {
            width: 100%;
            min-height: 56px;
            border: 1px solid #dbe2ea;
            border-radius: 16px;
            background: #ffffff;
            color: #0f172a;
            box-sizing: border-box;
            padding: 0 18px;
            font-size: 1rem;
            font-weight: 500;
            transition: border-color 0.18s ease, box-shadow 0.18s ease, background-color 0.18s ease, transform 0.18s ease;
        }

        #main.kb-project-create textarea {
            min-height: 120px;
            padding-top: 14px;
            padding-bottom: 14px;
        }

        #main.kb-project-create select {
            padding-right: 46px;
        }

        #main.kb-project-create input[type="text"]:hover,
        #main.kb-project-create input[type="number"]:hover,
        #main.kb-project-create select:hover,
        #main.kb-project-create textarea:hover {
            border-color: #cbd5e1;
        }

        #main.kb-project-create input[type="text"]:focus,
        #main.kb-project-create input[type="number"]:focus,
        #main.kb-project-create select:focus,
        #main.kb-project-create textarea:focus {
            outline: none;
            border-color: #3b82f6;
            box-shadow: 0 0 0 4px rgba(59, 130, 246, 0.12);
            transform: translateY(-1px);
        }

        #main.kb-project-create .form-help {
            margin: 10px 0 0;
            color: #64748b;
            font-size: 0.89rem;
            line-height: 1.7;
            max-width: 680px;
        }

        #main.kb-project-create .kb-checkbox-row {
            display: flex;
            align-items: flex-start;
            padding: 16px 18px;
            border-radius: 18px;
            background: linear-gradient(180deg, #f8fbff 0%, #ffffff 100%);
            border: 1px solid #dbeafe;
            box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.8);
        }

        #main.kb-project-create .kb-checkbox-row label {
            display: inline-flex;
            align-items: flex-start;
            gap: 12px;
            margin: 0;
            color: #334155;
            font-size: 0.97rem;
            font-weight: 600;
            line-height: 1.7;
            cursor: pointer;
        }

        #main.kb-project-create .kb-checkbox-row input[type="checkbox"] {
            width: 18px;
            height: 18px;
            margin-top: 3px;
            flex-shrink: 0;
            accent-color: #2563eb;
            cursor: pointer;
        }

        #main.kb-project-create .js-project-creation-options {
            margin-top: 18px;
            padding: 20px;
            border-radius: 20px;
            background: linear-gradient(180deg, #f8fbff 0%, #ffffff 100%);
            border: 1px solid #dbeafe;
            box-shadow: 0 12px 28px rgba(37, 99, 235, 0.06);
        }

        #main.kb-project-create .js-project-creation-options > .alert {
            margin: 0 0 16px;
            padding: 14px 16px;
            border-radius: 16px;
            border: 1px solid #bfdbfe;
            background: #eff6ff;
            color: #1d4ed8;
            font-size: 0.93rem;
            font-weight: 700;
            line-height: 1.6;
        }

        #main.kb-project-create .kb-option-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 14px;
        }

        #main.kb-project-create .kb-create-action-bar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 16px;
            padding: 22px 24px;
            border-radius: 22px;
            background: linear-gradient(180deg, #ffffff 0%, #f8fbff 100%);
            border: 1px solid #e2e8f0;
            box-shadow: 0 16px 36px rgba(15, 23, 42, 0.06);
        }

        #main.kb-project-create .kb-create-action-copy {
            color: #64748b;
            font-size: 0.92rem;
            line-height: 1.7;
            font-weight: 500;
            max-width: 620px;
        }

        #main.kb-project-create .form-actions {
            display: flex;
            align-items: center;
            gap: 14px;
            margin: 0;
            padding: 0;
        }

        #main.kb-project-create .form-actions .btn,
        #main.kb-project-create .form-actions button[type="submit"],
        #main.kb-project-create .form-actions input[type="submit"] {
            min-height: 54px;
            padding: 0 24px;
            border: 0;
            border-radius: 16px;
            background: linear-gradient(135deg, #2563eb 0%, #1d4ed8 100%);
            color: #ffffff;
            font-size: 1rem;
            font-weight: 800;
            letter-spacing: -0.01em;
            box-shadow: 0 16px 30px rgba(37, 99, 235, 0.20);
            transition: transform 0.18s ease, box-shadow 0.18s ease, opacity 0.18s ease;
        }

        #main.kb-project-create .form-actions .btn:hover,
        #main.kb-project-create .form-actions button[type="submit"]:hover,
        #main.kb-project-create .form-actions input[type="submit"]:hover {
            transform: translateY(-1px);
            box-shadow: 0 20px 36px rgba(37, 99, 235, 0.24);
        }

        #main.kb-project-create .form-actions a {
            color: #2563eb;
            font-size: 0.97rem;
            font-weight: 700;
            text-decoration: none;
        }

        #main.kb-project-create .form-actions a:hover {
            text-decoration: underline;
        }

        #main.kb-project-create .alert.alert-info {
            margin-top: 14px;
            padding: 16px 18px;
            border-radius: 18px;
            border: 1px solid #bfdbfe;
            background: #eff6ff;
            color: #1e40af;
            box-shadow: 0 10px 24px rgba(37, 99, 235, 0.08);
        }

        #main.kb-project-create .alert.alert-info p {
            margin: 0;
            line-height: 1.7;
            font-weight: 600;
        }

        #main.kb-project-create .form-error,
        #main.kb-project-create input.form-error,
        #main.kb-project-create select.form-error,
        #main.kb-project-create textarea.form-error {
            border-color: #f87171 !important;
            box-shadow: 0 0 0 4px rgba(248, 113, 113, 0.10) !important;
        }

        @media (max-width: 980px) {
            #main.kb-project-create {
                max-width: 100%;
                padding-left: 4px;
                padding-right: 4px;
            }

            #main.kb-project-create .kb-create-shell {
                padding: 24px;
            }

            #main.kb-project-create .kb-create-grid,
            #main.kb-project-create .kb-option-grid {
                grid-template-columns: 1fr;
            }

            #main.kb-project-create .kb-create-action-bar {
                flex-direction: column;
                align-items: flex-start;
            }
        }

        @media (max-width: 640px) {
            body .modal-page,
            body .modal-box,
            body .modal-container,
            body .modal-dialog,
            body .ui-dialog,
            body .ui-dialog.ui-widget,
            body .ui-dialog.ui-widget-content {
                width: min(calc(100vw - 24px), 100%) !important;
                max-width: min(calc(100vw - 24px), 100%) !important;
            }

            #main.kb-project-create {
                padding: 0;
            }

            #main.kb-project-create .page-header {
                margin-bottom: 20px;
                padding-bottom: 18px;
            }

            #main.kb-project-create .page-header h2 {
                font-size: 1.9rem;
            }

            #main.kb-project-create .kb-create-shell {
                padding: 16px;
                border-radius: 22px;
            }

            #main.kb-project-create .kb-create-topbar {
                flex-direction: column;
                align-items: flex-start;
                gap: 14px;
                margin-bottom: 22px;
            }

            #main.kb-project-create .kb-create-card,
            #main.kb-project-create .kb-create-action-bar {
                padding: 18px;
                border-radius: 18px;
            }

            #main.kb-project-create input[type="text"],
            #main.kb-project-create input[type="number"],
            #main.kb-project-create select,
            #main.kb-project-create textarea {
                min-height: 50px;
            }

            #main.kb-project-create .form-actions {
                flex-wrap: wrap;
            }
        }
    </style>

    <div class="kb-create-shell">
        <div class="page-header">
            <h2><?= $title ?></h2>
        </div>

        <div class="kb-create-topbar">
            <div class="kb-create-top-copy">
                <div class="kb-create-kicker"><?= t('Modern project setup') ?></div>
                <p class="kb-create-lead">
                    <?= t('Create a new workspace with cleaner spacing, wider content layout, and a more structured form experience.') ?>
                </p>
            </div>

            <div class="kb-create-status">
                <span class="kb-create-status-dot"></span>
                <span class="kb-create-status-text"><?= t('Ready to configure') ?></span>
            </div>
        </div>

        <form id="project-creation-form" method="post" action="<?= $this->url->href('ProjectCreationController', 'save') ?>" autocomplete="off">
            <?= $this->form->csrf() ?>
            <?= $this->form->hidden('is_private', $values) ?>

            <div class="kb-create-card">
                <div class="kb-create-section-head">
                    <p class="kb-create-section-label"><?= t('Project setup') ?></p>
                    <h3 class="kb-create-section-title"><?= t('Basic information') ?></h3>
                    <p class="kb-create-section-desc"><?= t('Create a clean workspace with a clear name, identifier, and task configuration.') ?></p>
                </div>

                <div class="kb-create-grid">
                    <div class="kb-field">
                        <?= $this->form->label(t('Name'), 'name') ?>
                        <?= $this->form->text('name', $values, $errors, array('autofocus', 'required')) ?>
                    </div>

                    <div class="kb-field">
                        <?= $this->form->label(t('Identifier'), 'identifier') ?>
                        <?= $this->form->text('identifier', $values, $errors, array()) ?>
                        <p class="form-help"><?= t('The project identifier is optional and must be alphanumeric, example: MYPROJECT.') ?></p>
                    </div>

                    <div class="kb-field kb-field-full">
                        <div class="kb-checkbox-row">
                            <?= $this->form->checkbox('per_swimlane_task_limits', t('Column task limits apply to each swimlane individually'), 1, false) ?>
                        </div>
                    </div>

                    <div class="kb-field">
                        <?= $this->form->label(t('Task limit'), 'task_limit') ?>
                        <?= $this->form->number('task_limit', $values, $errors, array('min="0"')) ?>
                    </div>
                </div>
            </div>

            <?php if (count($projects_list) > 1): ?>
                <div class="kb-create-card kb-create-card-soft">
                    <div class="kb-create-section-head">
                        <p class="kb-create-section-label"><?= t('Project source') ?></p>
                        <h3 class="kb-create-section-title"><?= t('Create from another project') ?></h3>
                        <p class="kb-create-section-desc"><?= t('Start from scratch or duplicate selected parts from an existing project.') ?></p>
                    </div>

                    <div class="kb-create-grid">
                        <div class="kb-field kb-field-full">
                            <?= $this->form->label(t('Create from another project'), 'src_project_id') ?>
                            <?= $this->form->select('src_project_id', $projects_list, $values, array(), array(), 'js-project-creation-select-options') ?>
                        </div>
                    </div>

                    <div class="js-project-creation-options" <?= isset($values['src_project_id']) && $values['src_project_id'] > 0 ? '' : 'style="display: none"' ?>>
                        <p class="alert"><?= t('Which parts of the project do you want to duplicate?') ?></p>

                        <div class="kb-option-grid">
                            <?php if (! $is_private): ?>
                                <div class="kb-checkbox-row">
                                    <?= $this->form->checkbox('projectPermissionModel', t('Permissions'), 1, true) ?>
                                </div>
                                <div class="kb-checkbox-row">
                                    <?= $this->form->checkbox('projectRoleModel', t('Custom roles'), 1, true) ?>
                                </div>
                            <?php endif ?>

                            <div class="kb-checkbox-row">
                                <?= $this->form->checkbox('categoryModel', t('Categories'), 1, true) ?>
                            </div>
                            <div class="kb-checkbox-row">
                                <?= $this->form->checkbox('tagDuplicationModel', t('Tags'), 1, true) ?>
                            </div>
                            <div class="kb-checkbox-row">
                                <?= $this->form->checkbox('actionModel', t('Actions'), 1, true) ?>
                            </div>
                            <div class="kb-checkbox-row">
                                <?= $this->form->checkbox('customFilterModel', t('Custom filters'), 1, true) ?>
                            </div>
                            <div class="kb-checkbox-row">
                                <?= $this->form->checkbox('projectMetadataModel', t('Metadata'), 1, false) ?>
                            </div>
                            <div class="kb-checkbox-row">
                                <?= $this->form->checkbox('projectTaskDuplicationModel', t('Tasks'), 1, false) ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif ?>

            <div class="kb-create-card">
                <div class="kb-create-section-head">
                    <p class="kb-create-section-label"><?= t('Additional options') ?></p>
                    <h3 class="kb-create-section-title"><?= t('Project configuration') ?></h3>
                    <p class="kb-create-section-desc"><?= t('Use extra project options provided by extensions or plugins below.') ?></p>
                </div>

                <?= $this->hook->render('template:project:creation:form', array('values' => $values, 'errors' => $errors)) ?>
            </div>

            <div class="kb-create-action-bar">
                <div class="kb-create-action-copy">
                    <?= t('Review the project information, then save to create a new workspace with your selected settings.') ?>
                </div>

                <?= $this->modal->submitButtons() ?>
            </div>
        </form>

        <?php if ($is_private): ?>
            <div class="alert alert-info">
                <p><?= t('There is no user management for personal projects.') ?></p>
            </div>
        <?php endif ?>
    </div>
</section>