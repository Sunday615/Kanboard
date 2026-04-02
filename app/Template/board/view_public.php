<section id="main" class="public-board kb-public-board-page">
   <?= $this->render('board/modern_styles') ?>
   <div class="kb-board-shell">
       <?= $this->render('board/table_container', array(
                'project' => $project,
                'swimlanes' => $swimlanes,
                'board_private_refresh_interval' => $board_private_refresh_interval,
                'board_highlight_period' => $board_highlight_period,
                'not_editable' => true,
        )) ?>
   </div>
</section>
