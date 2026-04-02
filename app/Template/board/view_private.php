<section id="main" class="kb-board-page">
    <?= $this->render('board/modern_styles') ?>
    <div class="kb-board-shell">
        <?= $this->projectHeader->render($project, 'BoardViewController', 'show', true) ?>

        <?= $this->render('board/table_container', array(
            'project' => $project,
            'swimlanes' => $swimlanes,
            'board_private_refresh_interval' => $board_private_refresh_interval,
            'board_highlight_period' => $board_highlight_period,
        )) ?>
    </div>
</section>
