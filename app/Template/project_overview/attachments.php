<details class="accordion-section kb-project-overview-section kb-project-overview-section-attachments" <?= empty($files) && empty($images) ? '' : 'open' ?>>
    <summary class="accordion-title">
        <span class="kb-project-overview-summary-copy">
            <span class="kb-project-overview-summary-title"><?= t('Attachments') ?></span>
            <span class="kb-project-overview-summary-subtitle"><?= t('Files and uploaded references') ?></span>
        </span>
    </summary>
    <div class="accordion-content kb-project-overview-section-content">
        <?php if ($this->user->hasProjectAccess('ProjectFileController', 'create', $project['id'])): ?>
        <div class="buttons-header">
            <?= $this->modal->mediumButton('plus', t('Upload a file'), 'ProjectFileController', 'create', array('project_id' => $project['id'])) ?>
        </div>
        <?php endif ?>

        <?php if (empty($files) && empty($images)): ?>
            <p class="kb-project-overview-empty-state"><?= t('No attachments yet.') ?></p>
        <?php else: ?>
            <div class="kb-project-overview-attachments-stack">
                <?= $this->render('project_overview/images', array('project' => $project, 'images' => $images)) ?>
                <?= $this->render('project_overview/files', array('project' => $project, 'files' => $files)) ?>
            </div>
        <?php endif ?>
    </div>
</details>
