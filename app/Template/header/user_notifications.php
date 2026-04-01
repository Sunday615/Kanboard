<span class="notification kb-header-notification-wrap kb-header-bell-wrap<?= $this->user->hasNotifications() ? ' is-unread' : '' ?>">
<?php if ($this->user->hasNotifications()): ?>
    <span class="kb-header-notification-dot" aria-hidden="true"></span>
    <?= $this->modal->mediumIcon(
        'bell kb-header-action-trigger web-notification-icon',
        t('Unread notifications'),
        'WebNotificationController',
        'show',
        array('user_id' => $this->user->getId())
    ) ?>
<?php else: ?>
    <?= $this->modal->mediumIcon(
        'bell kb-header-action-trigger',
        t('My notifications'),
        'WebNotificationController',
        'show',
        array('user_id' => $this->user->getId())
    ) ?>
<?php endif ?>
</span>
