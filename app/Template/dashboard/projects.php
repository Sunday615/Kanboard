<div class="kb-page-shell">
    <div class="kb-page-head">
        <div>
            <p class="kb-page-eyebrow"><?= t('Workspace') ?></p>
            <h1 class="kb-page-title">
                <?= $this->url->link(t('My projects'), 'DashboardController', 'projects', array('user_id' => $user['id'])) ?>
            </h1>
            <p class="kb-page-copy"><?= t('Browse the projects you belong to with a cleaner, more structured card layout.') ?></p>
        </div>
        <span class="kb-page-chip"><?= $paginator->getTotal() ?> <?= t('total') ?></span>
    </div>

    <?php if ($paginator->isEmpty()): ?>
        <div class="kb-empty-state">
            <div class="kb-empty-state-icon">
                <i class="fa fa-folder-open" aria-hidden="true"></i>
            </div>
            <h2><?= t('No projects found') ?></h2>
            <p><?= t('You are not a member of any project.') ?></p>
        </div>
    <?php else: ?>
        <div class="kb-card">
            <div class="kb-card-header">
                <?= $this->render('project_list/header', array('paginator' => $paginator)) ?>
            </div>

            <div class="table-list">
                <?php foreach ($paginator->getCollection() as $project): ?>
                    <div class="table-list-row table-border-left">
                        <?= $this->render('project_list/project_title', array(
                            'project' => $project,
                        )) ?>

                        <?= $this->render('project_list/project_details', array(
                            'project' => $project,
                        )) ?>

                        <?= $this->render('project_list/project_icons', array(
                            'project' => $project,
                        )) ?>
                    </div>
                <?php endforeach ?>
            </div>
        </div>

        <div class="kb-pagination">
            <?= $paginator ?>
        </div>
    <?php endif ?>
</div>
