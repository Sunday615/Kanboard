<section id="main" class="kb-project-overview-page">
    <?= $this->render('project_overview/modern_styles') ?>
    <div class="kb-project-overview-shell">
        <?= $this->projectHeader->render($project, 'ProjectOverviewController', 'show') ?>
        <?= $this->render('project_overview/columns', array('project' => $project, 'columns' => $columns)) ?>

        <div class="kb-project-overview-grid">
            <div class="kb-project-overview-description-slot">
                <?= $this->hook->render('template:project-overview:before-description', array('project' => $project)) ?>
                <?= $this->render('project_overview/description', array('project' => $project)) ?>
            </div>

            <div class="kb-project-overview-information-slot">
                <?= $this->render('project_overview/information', array('project' => $project, 'users' => $users, 'roles' => $roles)) ?>
            </div>

            <div class="kb-project-overview-attachments-slot">
                <?= $this->render('project_overview/attachments', array('project' => $project, 'images' => $images, 'files' => $files)) ?>
            </div>

            <div class="kb-project-overview-activity-slot">
                <?= $this->render('project_overview/activity', array('project' => $project, 'events' => $events)) ?>
            </div>
        </div>
    </div>
</section>
