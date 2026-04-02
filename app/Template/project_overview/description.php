<details class="accordion-section kb-project-overview-section kb-project-overview-section-description" <?= empty($project['description']) ? '' : 'open' ?>>
    <summary class="accordion-title">
        <span class="kb-project-overview-summary-copy">
            <span class="kb-project-overview-summary-title"><?= t('Description') ?></span>
            <span class="kb-project-overview-summary-subtitle"><?= t('Project brief and working notes') ?></span>
        </span>
    </summary>
    <div class="accordion-content kb-project-overview-section-content">
        <?php if ($this->user->hasProjectAccess('ProjectEditController', 'show', $project['id'])): ?>
            <div class="buttons-header">
                <?= $this->modal->mediumButton('edit', t('Edit description'), 'ProjectEditController', 'show', array('project_id' => $project['id'])) ?>
            </div>
        <?php endif ?>
        <?php if (empty($project['description'])): ?>
            <p class="kb-project-overview-empty-state"><?= t('No description yet.') ?></p>
        <?php else: ?>
            <article class="markdown">
                <?= $this->text->markdown($project['description']) ?>
            </article>
        <?php endif ?>
    </div>
</details>
