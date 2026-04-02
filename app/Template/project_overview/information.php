<?php $has_information = $project['owner_id'] > 0 || ! empty($users) || $project['start_date'] || $project['end_date'] || $project['is_public']; ?>
<details class="accordion-section kb-project-overview-section kb-project-overview-section-information" open>
    <summary class="accordion-title">
        <span class="kb-project-overview-summary-copy">
            <span class="kb-project-overview-summary-title"><?= t('Information') ?></span>
            <span class="kb-project-overview-summary-subtitle"><?= t('Ownership, team and access details') ?></span>
        </span>
    </summary>
    <div class="accordion-content kb-project-overview-section-content">
        <?php if (! $has_information): ?>
            <p class="kb-project-overview-empty-state"><?= t('No project information available yet.') ?></p>
        <?php else: ?>
            <div class="kb-project-overview-info-grid">
                <?php if ($project['owner_id'] > 0): ?>
                    <div class="kb-project-overview-info-item">
                        <span class="kb-project-overview-info-label"><?= t('Project owner') ?></span>
                        <span class="kb-project-overview-info-value"><?= $this->text->e($project['owner_name'] ?: $project['owner_username']) ?></span>
                    </div>
                <?php endif ?>

                <?php if (! empty($users)): ?>
                    <?php foreach ($roles as $role => $role_name): ?>
                        <?php if (isset($users[$role])): ?>
                            <div class="kb-project-overview-info-item">
                                <span class="kb-project-overview-info-label"><?= $this->text->e($role_name) ?></span>
                                <span class="kb-project-overview-info-value"><?= $this->text->implode(', ', $users[$role]) ?></span>
                            </div>
                        <?php endif ?>
                    <?php endforeach ?>
                <?php endif ?>

                <?php if ($project['start_date']): ?>
                    <div class="kb-project-overview-info-item">
                        <span class="kb-project-overview-info-label"><?= t('Start date') ?></span>
                        <span class="kb-project-overview-info-value"><?= $this->dt->date($project['start_date']) ?></span>
                    </div>
                <?php endif ?>

                <?php if ($project['end_date']): ?>
                    <div class="kb-project-overview-info-item">
                        <span class="kb-project-overview-info-label"><?= t('End date') ?></span>
                        <span class="kb-project-overview-info-value"><?= $this->dt->date($project['end_date']) ?></span>
                    </div>
                <?php endif ?>
            </div>

            <?php if ($project['is_public']): ?>
                <div class="kb-project-overview-link-row">
                    <?= $this->url->icon('share-alt', t('Public link'), 'BoardViewController', 'readonly', array('token' => $project['token']), false, '', '', true) ?>
                    <?= $this->url->icon('rss-square', t('RSS feed'), 'FeedController', 'project', array('token' => $project['token']), false, '', '', true) ?>
                    <?= $this->url->icon('calendar', t('iCal feed'), 'ICalendarController', 'project', array('token' => $project['token'])) ?>
                </div>
            <?php endif ?>
        <?php endif ?>
    </div>
</details>
