<details class="accordion-section kb-project-overview-section kb-project-overview-section-activity" <?= empty($events) ? '' : 'open' ?>>
    <summary class="accordion-title">
        <span class="kb-project-overview-summary-copy">
            <span class="kb-project-overview-summary-title"><?= t('Last activity') ?></span>
            <span class="kb-project-overview-summary-subtitle"><?= t('Recent changes and updates') ?></span>
        </span>
    </summary>
    <div class="accordion-content kb-project-overview-section-content">
        <div class="kb-project-overview-activity-feed">
            <?= $this->render('event/events', array('events' => $events)) ?>
        </div>
    </div>
</details>
