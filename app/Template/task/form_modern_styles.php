<?php if (empty($GLOBALS['kbTaskFormModernLoaded'])): ?>
<?php $GLOBALS['kbTaskFormModernLoaded'] = true; ?>
<style>
body.kb-modern-ui .kb-task-form-modal {
    display: flex;
    flex-direction: column;
    gap: 18px;
    color: #0f172a;
}

body.kb-modern-ui .kb-task-form-modal .page-header {
    margin: 0;
}

body.kb-modern-ui .kb-task-form-modal .page-header h2 {
    margin: 0;
    padding: 18px 20px;
    border: 1px solid rgba(148, 163, 184, 0.20);
    border-radius: 22px;
    background: linear-gradient(180deg, #ffffff 0%, #f8fbff 100%);
    color: #0f172a;
    font-size: clamp(1.08rem, 1.4vw, 1.32rem);
    line-height: 1.35;
    font-weight: 900;
    letter-spacing: -0.03em;
    box-shadow: 0 14px 28px rgba(15, 23, 42, 0.05);
}

body.kb-modern-ui .kb-task-form-shell {
    width: 100%;
}

body.kb-modern-ui .kb-task-form-grid {
    display: grid;
    grid-template-columns: minmax(0, 1.75fr) minmax(220px, 0.85fr) minmax(220px, 0.85fr);
    gap: 18px;
    align-items: start;
}

body.kb-modern-ui .kb-task-form-grid > * {
    width: auto;
}

body.kb-modern-ui .kb-task-form-column {
    min-width: 0;
    width: auto;
    max-width: none;
    max-height: none;
    overflow: visible;
    padding: 18px;
    border: 1px solid rgba(148, 163, 184, 0.18);
    border-radius: 22px;
    background: linear-gradient(180deg, rgba(255, 255, 255, 0.98) 0%, rgba(248, 251, 255, 0.94) 100%);
    box-shadow: 0 14px 28px rgba(15, 23, 42, 0.05);
}

body.kb-modern-ui .kb-task-form-column-main {
    padding: 20px;
}

body.kb-modern-ui .kb-task-form-actions {
    grid-column: 1 / -1;
    display: flex;
    flex-direction: column;
    gap: 14px;
    padding: 18px 20px;
    border: 1px solid rgba(148, 163, 184, 0.18);
    border-radius: 22px;
    background: linear-gradient(180deg, #ffffff 0%, #f8fbff 100%);
    box-shadow: 0 12px 24px rgba(15, 23, 42, 0.04);
}

body.kb-modern-ui .kb-task-form-modal .task-form-container,
body.kb-modern-ui .kb-task-form-modal .task-form-main-column,
body.kb-modern-ui .kb-task-form-modal .task-form-secondary-column,
body.kb-modern-ui .kb-task-form-modal .task-form-bottom {
    box-sizing: border-box;
}

body.kb-modern-ui .kb-task-form-modal .task-form-main-column,
body.kb-modern-ui .kb-task-form-modal .task-form-secondary-column,
body.kb-modern-ui .kb-task-form-modal .task-form-bottom {
    width: auto;
}

body.kb-modern-ui .kb-task-form-modal .task-form-main-column,
body.kb-modern-ui .kb-task-form-modal .task-form-secondary-column {
    padding-left: 0;
}

body.kb-modern-ui .kb-task-form-modal label {
    display: block;
    margin: 0 0 8px;
    color: #0f172a;
    font-size: 0.9rem;
    font-weight: 800;
}

body.kb-modern-ui .kb-task-form-modal .form-help {
    margin: 8px 0 0;
    color: #64748b;
    font-size: 0.82rem;
    line-height: 1.6;
}

body.kb-modern-ui .kb-task-form-modal input[type="text"],
body.kb-modern-ui .kb-task-form-modal input[type="search"],
body.kb-modern-ui .kb-task-form-modal input[type="email"],
body.kb-modern-ui .kb-task-form-modal input[type="password"],
body.kb-modern-ui .kb-task-form-modal input[type="number"],
body.kb-modern-ui .kb-task-form-modal input[type="date"],
body.kb-modern-ui .kb-task-form-modal select,
body.kb-modern-ui .kb-task-form-modal textarea {
    width: 100% !important;
    max-width: 100% !important;
    border: 1px solid rgba(148, 163, 184, 0.22);
    border-radius: 14px;
    background: linear-gradient(180deg, #ffffff 0%, #fbfdff 100%);
    color: #0f172a;
    box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.94);
    transition: border-color 180ms ease, box-shadow 180ms ease, background-color 180ms ease;
}

body.kb-modern-ui .kb-task-form-modal input[type="text"],
body.kb-modern-ui .kb-task-form-modal input[type="search"],
body.kb-modern-ui .kb-task-form-modal input[type="email"],
body.kb-modern-ui .kb-task-form-modal input[type="password"],
body.kb-modern-ui .kb-task-form-modal input[type="number"],
body.kb-modern-ui .kb-task-form-modal input[type="date"],
body.kb-modern-ui .kb-task-form-modal select {
    min-height: 44px;
    padding: 0 14px;
    font-size: 0.94rem;
    font-weight: 600;
}

body.kb-modern-ui .kb-task-form-modal textarea {
    min-height: 140px;
    padding: 12px 14px;
    font-size: 0.94rem;
    line-height: 1.65;
    resize: vertical;
}

body.kb-modern-ui .kb-task-form-modal input[type="text"]::placeholder,
body.kb-modern-ui .kb-task-form-modal input[type="search"]::placeholder,
body.kb-modern-ui .kb-task-form-modal input[type="email"]::placeholder,
body.kb-modern-ui .kb-task-form-modal input[type="password"]::placeholder,
body.kb-modern-ui .kb-task-form-modal input[type="number"]::placeholder,
body.kb-modern-ui .kb-task-form-modal textarea::placeholder {
    color: #8a98ac;
}

body.kb-modern-ui .kb-task-form-modal input[type="text"]:hover,
body.kb-modern-ui .kb-task-form-modal input[type="search"]:hover,
body.kb-modern-ui .kb-task-form-modal input[type="email"]:hover,
body.kb-modern-ui .kb-task-form-modal input[type="password"]:hover,
body.kb-modern-ui .kb-task-form-modal input[type="number"]:hover,
body.kb-modern-ui .kb-task-form-modal input[type="date"]:hover,
body.kb-modern-ui .kb-task-form-modal select:hover,
body.kb-modern-ui .kb-task-form-modal textarea:hover {
    border-color: rgba(59, 130, 246, 0.34);
    box-shadow: 0 10px 24px rgba(37, 99, 235, 0.06), inset 0 1px 0 rgba(255, 255, 255, 0.94);
}

body.kb-modern-ui .kb-task-form-modal input[type="text"]:focus,
body.kb-modern-ui .kb-task-form-modal input[type="search"]:focus,
body.kb-modern-ui .kb-task-form-modal input[type="email"]:focus,
body.kb-modern-ui .kb-task-form-modal input[type="password"]:focus,
body.kb-modern-ui .kb-task-form-modal input[type="number"]:focus,
body.kb-modern-ui .kb-task-form-modal input[type="date"]:focus,
body.kb-modern-ui .kb-task-form-modal select:focus,
body.kb-modern-ui .kb-task-form-modal textarea:focus {
    border-color: rgba(59, 130, 246, 0.48);
    box-shadow: 0 0 0 4px rgba(59, 130, 246, 0.12);
    outline: none;
}

body.kb-modern-ui .kb-task-form-modal .tag-autocomplete {
    width: 100% !important;
}

body.kb-modern-ui .kb-task-form-modal .assign-me {
    color: #1d4ed8;
    font-size: 0.84rem;
    font-weight: 800;
    text-decoration: none;
    transition: color 180ms ease, opacity 180ms ease;
}

body.kb-modern-ui .kb-task-form-modal .assign-me:hover {
    color: #153ea8;
}

body.kb-modern-ui .kb-task-form-modal .assign-me:focus-visible {
    outline: none;
    color: #153ea8;
}

body.kb-modern-ui .kb-task-form-modal .text-editor {
    margin-top: 0;
}

body.kb-modern-ui .kb-task-form-modal .text-editor-toolbar {
    display: flex;
    flex-wrap: wrap;
    gap: 8px;
    padding: 8px 10px;
    border: 1px solid rgba(148, 163, 184, 0.18);
    border-bottom: 0;
    border-radius: 14px 14px 0 0;
    background: linear-gradient(180deg, #ffffff 0%, #f8fbff 100%);
    transition: border-color 180ms ease, box-shadow 180ms ease;
}

body.kb-modern-ui .kb-task-form-modal .text-editor-toolbar a {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    min-width: 32px;
    min-height: 32px;
    padding: 0 8px;
    border-radius: 10px;
    color: #526277;
    font-size: 0.88rem;
    font-weight: 700;
    text-decoration: none;
    transition: background-color 180ms ease, color 180ms ease, box-shadow 180ms ease;
}

body.kb-modern-ui .kb-task-form-modal .text-editor-toolbar a:hover {
    background: rgba(37, 99, 235, 0.08);
    color: #1d4ed8;
}

body.kb-modern-ui .kb-task-form-modal .text-editor-toolbar a:focus-visible {
    outline: none;
    background: rgba(37, 99, 235, 0.10);
    color: #1d4ed8;
    box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.16);
}

body.kb-modern-ui .kb-task-form-modal .text-editor textarea,
body.kb-modern-ui .kb-task-form-modal .text-editor .text-editor-preview-area {
    width: 100% !important;
    max-width: 100% !important;
    min-height: 220px;
    margin: 0;
    padding: 14px;
    border: 1px solid rgba(148, 163, 184, 0.18);
    border-top: 0;
    border-radius: 0 0 16px 16px;
    background: #ffffff;
    box-shadow: none;
}

body.kb-modern-ui .kb-task-form-modal .text-editor:hover .text-editor-toolbar {
    border-color: rgba(59, 130, 246, 0.30);
}

body.kb-modern-ui .kb-task-form-modal .text-editor textarea:hover,
body.kb-modern-ui .kb-task-form-modal .text-editor .text-editor-preview-area:hover {
    border-color: rgba(59, 130, 246, 0.30);
    box-shadow: 0 10px 24px rgba(37, 99, 235, 0.05);
}

body.kb-modern-ui .kb-task-form-modal .text-editor .text-editor-preview-area {
    overflow: auto;
}

body.kb-modern-ui .kb-task-form-modal .select2-container {
    width: 100% !important;
    display: block;
}

body.kb-modern-ui .kb-task-form-modal .select2-container .select2-selection--single,
body.kb-modern-ui .kb-task-form-modal .select2-container .select2-selection--multiple {
    min-height: 44px;
    border: 1px solid rgba(148, 163, 184, 0.22) !important;
    border-radius: 14px !important;
    background: linear-gradient(180deg, #ffffff 0%, #fbfdff 100%) !important;
    box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.94);
    transition: border-color 180ms ease, box-shadow 180ms ease, background-color 180ms ease;
}

body.kb-modern-ui .kb-task-form-modal .select2-container .select2-selection--single:hover,
body.kb-modern-ui .kb-task-form-modal .select2-container .select2-selection--multiple:hover {
    border-color: rgba(59, 130, 246, 0.34) !important;
    box-shadow: 0 10px 24px rgba(37, 99, 235, 0.06), inset 0 1px 0 rgba(255, 255, 255, 0.94);
}

body.kb-modern-ui .kb-task-form-modal .select2-container.select2-container--focus .select2-selection--single,
body.kb-modern-ui .kb-task-form-modal .select2-container.select2-container--focus .select2-selection--multiple,
body.kb-modern-ui .kb-task-form-modal .select2-container.select2-container--open .select2-selection--single,
body.kb-modern-ui .kb-task-form-modal .select2-container.select2-container--open .select2-selection--multiple {
    border-color: rgba(59, 130, 246, 0.48) !important;
    box-shadow: 0 0 0 4px rgba(59, 130, 246, 0.12) !important;
}

body.kb-modern-ui .kb-task-form-modal .select2-container .select2-selection--single .select2-selection__rendered {
    display: flex;
    align-items: center;
    min-height: 44px;
    padding: 0 42px 0 14px !important;
    color: #0f172a !important;
    font-size: 0.94rem;
    font-weight: 700;
    line-height: 1.2 !important;
}

body.kb-modern-ui .kb-task-form-modal .select2-container .select2-selection--single .select2-selection__arrow {
    height: 44px !important;
    right: 10px !important;
}

body.kb-modern-ui .kb-task-form-modal .select2-container .select2-selection--multiple .select2-selection__rendered {
    display: flex;
    flex-wrap: wrap;
    gap: 6px;
    min-height: 44px;
    padding: 7px 10px !important;
}

body.kb-modern-ui .kb-task-form-modal .select2-container .select2-selection--multiple .select2-selection__choice {
    margin: 0 !important;
    border-radius: 999px !important;
    border: 1px solid rgba(59, 130, 246, 0.16) !important;
    background: linear-gradient(180deg, #f7faff 0%, #edf4ff 100%) !important;
    color: #1d4ed8 !important;
    font-size: 0.78rem !important;
    font-weight: 800 !important;
}

body.kb-modern-ui .kb-task-form-modal .select2-container .select2-selection--multiple .select2-selection__choice__remove {
    color: inherit !important;
}

body.kb-modern-ui .kb-task-form-modal .select2-container .select2-search--inline .select2-search__field {
    min-height: 28px;
    margin: 0 !important;
    padding: 0 4px !important;
}

body.kb-modern-ui .kb-task-form-modal .color-picker-option,
body.kb-modern-ui .select2-results__option .color-picker-option,
body.kb-modern-ui .select2-selection__rendered .color-picker-option {
    display: flex;
    align-items: center;
    gap: 10px;
}

body.kb-modern-ui .kb-task-form-modal .color-picker-square,
body.kb-modern-ui .select2-results__option .color-picker-square,
body.kb-modern-ui .select2-selection__rendered .color-picker-square {
    width: 14px;
    height: 14px;
    margin-right: 0;
    border-radius: 4px;
    border: 1px solid rgba(15, 23, 42, 0.12);
    flex-shrink: 0;
}

body.kb-modern-ui .kb-task-form-modal .color-picker-label,
body.kb-modern-ui .select2-results__option .color-picker-label,
body.kb-modern-ui .select2-selection__rendered .color-picker-label {
    padding-bottom: 0;
}

body.kb-modern-ui .kb-task-form-modal .form-actions,
body.kb-modern-ui .kb-task-form-modal .js-submit-buttons-rendered {
    display: flex;
    align-items: center;
    gap: 12px;
    flex-wrap: wrap;
    padding-top: 0;
}

body.kb-modern-ui .kb-task-form-modal .form-actions a {
    color: #1d4ed8;
    font-size: 0.9rem;
    font-weight: 800;
    text-decoration: none;
    transition: color 180ms ease, opacity 180ms ease;
}

body.kb-modern-ui .kb-task-form-modal .form-actions a:hover {
    color: #153ea8;
}

body.kb-modern-ui .kb-task-form-modal .form-actions .btn,
body.kb-modern-ui .kb-task-form-modal .form-actions button,
body.kb-modern-ui .kb-task-form-modal .form-actions input[type="submit"] {
    transition: transform 180ms ease, box-shadow 180ms ease, filter 180ms ease;
}

body.kb-modern-ui .kb-task-form-modal .form-actions .btn:hover,
body.kb-modern-ui .kb-task-form-modal .form-actions button:hover,
body.kb-modern-ui .kb-task-form-modal .form-actions input[type="submit"]:hover {
    transform: translateY(-1px);
    box-shadow: 0 16px 26px rgba(37, 99, 235, 0.18);
}

body.kb-modern-ui .kb-task-form-actions > label {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    margin: 0;
    color: #526277;
    font-size: 0.88rem;
    font-weight: 700;
    transition: color 180ms ease;
}

body.kb-modern-ui .kb-task-form-actions > label input[type="checkbox"] {
    margin: 0;
}

body.kb-modern-ui .kb-task-form-actions > label:hover {
    color: #0f172a;
}

body.kb-modern-ui .kb-task-form-modal .form-errors,
body.kb-modern-ui .kb-task-form-modal .form-required {
    color: #d92d20;
}

body.kb-modern-ui .kb-task-form-modal .accordion-section {
    border: 1px solid rgba(148, 163, 184, 0.18);
    border-radius: 16px;
    background: linear-gradient(180deg, #ffffff 0%, #fbfdff 100%);
    transition: border-color 180ms ease, box-shadow 180ms ease;
}

body.kb-modern-ui .kb-task-form-modal .accordion-title {
    padding: 14px 16px;
    font-size: 0.92rem;
    font-weight: 800;
    margin: 0;
    cursor: pointer;
    transition: color 180ms ease, background-color 180ms ease;
}

body.kb-modern-ui .kb-task-form-modal .accordion-content {
    margin: 0;
    padding: 0 16px 16px;
}

body.kb-modern-ui .kb-task-form-modal .accordion-section:hover {
    border-color: rgba(59, 130, 246, 0.26);
    box-shadow: 0 12px 24px rgba(37, 99, 235, 0.05);
}

body.kb-modern-ui .kb-task-form-modal .accordion-section:hover .accordion-title {
    color: #1d4ed8;
}

body.kb-modern-ui .select2-results__option {
    transition: background-color 160ms ease, color 160ms ease;
}

body.kb-modern-ui .select2-results__option--highlighted[aria-selected],
body.kb-modern-ui .select2-results__option--highlighted[aria-selected]:hover {
    background: linear-gradient(90deg, rgba(0, 11, 166, 1) 0%, rgba(0, 17, 255, 1) 100%) !important;
    color: #ffffff !important;
}

body.kb-modern-ui .select2-results__option--highlighted[aria-selected] .color-picker-label,
body.kb-modern-ui .select2-results__option--highlighted[aria-selected]:hover .color-picker-label {
    color: #ffffff !important;
}

body.kb-modern-ui .select2-results__option--highlighted[aria-selected] .color-picker-square,
body.kb-modern-ui .select2-results__option--highlighted[aria-selected]:hover .color-picker-square {
    border-color: rgba(255, 255, 255, 0.42);
}

@media (max-width: 1100px) {
    body.kb-modern-ui .kb-task-form-grid {
        grid-template-columns: minmax(0, 1fr);
    }
}

@media (max-width: 767.98px) {
    body.kb-modern-ui .kb-task-form-modal .page-header h2,
    body.kb-modern-ui .kb-task-form-column,
    body.kb-modern-ui .kb-task-form-actions {
        padding-left: 16px;
        padding-right: 16px;
    }

    body.kb-modern-ui .kb-task-form-modal .text-editor-toolbar {
        gap: 6px;
    }
}
</style>
<?php endif; ?>
