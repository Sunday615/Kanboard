<div class="kb-header-board-shell kb-header-surface-card">
    <span class="kb-header-board-icon" aria-hidden="true">
        <i class="fa fa-folder-open-o"></i>
    </span>

    <div class="kb-header-board-field">
        <?= $this->app->component('select-dropdown-autocomplete', array(
            'name' => 'boardId',
            'placeholder' => t('Display another project'),
            'ariaLabel' => t('Display another project'),
            'items' => $board_selector,
            'redirect' => array(
                'regex' => 'PROJECT_ID',
                'url' => $this->url->to('BoardViewController', 'show', array('project_id' => 'PROJECT_ID')),
            ),
            'onFocus' => array(
                'board.selector.open',
            )
        )) ?>
    </div>
</div>

<style>
.kb-header-board-field .select-dropdown-chevron {
    display: none !important;
}
</style>
