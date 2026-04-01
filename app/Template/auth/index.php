<div class="auth-minimal-page">
    <div class="auth-minimal-card">
        <div class="auth-minimal-header">
            <div class="auth-minimal-badge">KANBOARD</div>
            <h1 class="auth-minimal-title"><?= t('Sign In') ?></h1>
            <p class="auth-minimal-subtitle"><?= t('Enter your credentials to continue') ?></p>
        </div>

        <?= $this->hook->render('template:auth:login-form:before') ?>

        <?php if (isset($errors['login'])): ?>
            <p class="auth-alert-error"><?= $this->text->e($errors['login']) ?></p>
        <?php endif ?>

        <?php if (! HIDE_LOGIN_FORM): ?>
        <form method="post" action="<?= $this->url->href('AuthController', 'check') ?>" class="auth-minimal-form">

            <?= $this->form->csrf() ?>

            <div class="auth-form-group">
                <?= $this->form->label(t('Username'), 'username', array('class' => 'auth-label')) ?>
                <?= $this->form->text('username', $values, $errors, array(
                    'class="auth-input"',
                    'autofocus',
                    'required',
                    'autocomplete="username"',
                    'placeholder="'.t('Enter your username').'"'
                )) ?>
            </div>

            <div class="auth-form-group">
                <?= $this->form->label(t('Password'), 'password', array('class' => 'auth-label')) ?>
                <div class="auth-password-wrap">
                    <?= $this->form->password('password', $values, $errors, array(
                        'class="auth-input auth-input-password"',
                        'required',
                        'autocomplete="current-password"',
                        'placeholder="'.t('Enter your password').'"',
                        'id="password-field"'
                    )) ?>
                    <button type="button" class="auth-password-toggle" id="password-toggle" aria-label="<?= t('Show password') ?>">
                        <span id="password-toggle-text"><?= t('Show') ?></span>
                    </button>
                </div>
            </div>

            <?php if (isset($captcha) && $captcha): ?>
                <div class="auth-form-group">
                    <?= $this->form->label(t('Enter the text below'), 'captcha', array('class' => 'auth-label')) ?>
                    <div class="auth-captcha-image">
                        <img src="<?= $this->url->href('CaptchaController', 'image') ?>" alt="Captcha">
                    </div>
                    <?= $this->form->text('captcha', array(), $errors, array(
                        'class="auth-input"',
                        'required',
                        'placeholder="'.t('Enter captcha').'"'
                    )) ?>
                </div>
            <?php endif ?>

            <div class="auth-form-row">
                <?php if (REMEMBER_ME_AUTH): ?>
                    <label class="auth-remember">
                        <?= $this->form->checkbox('remember_me', '', 1, true) ?>
                        <span><?= t('Remember Me') ?></span>
                    </label>
                <?php else: ?>
                    <span></span>
                <?php endif ?>

                <?php if ($this->app->config('password_reset') == 1): ?>
                    <div class="auth-forgot">
                        <?= $this->url->link(t('Forgot password?'), 'PasswordResetController', 'create') ?>
                    </div>
                <?php endif ?>
            </div>

            <div class="auth-form-actions">
                <button type="submit" class="auth-submit-btn"><?= t('Sign in') ?></button>
            </div>
        </form>
        <?php endif ?>

        <?= $this->hook->render('template:auth:login-form:after') ?>

        <div class="auth-minimal-footer">
            <div class="auth-footer-check">✓</div>
            <div>
                <div class="auth-footer-title"><?= t('Welcome back!') ?></div>
                <div class="auth-footer-text"><?= t('Redirecting to your dashboard...') ?></div>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    var passwordField = document.getElementById('password-field');
    var passwordToggle = document.getElementById('password-toggle');
    var passwordToggleText = document.getElementById('password-toggle-text');

    if (passwordField && passwordToggle && passwordToggleText) {
        passwordToggle.addEventListener('click', function () {
            var isPassword = passwordField.getAttribute('type') === 'password';
            passwordField.setAttribute('type', isPassword ? 'text' : 'password');
            passwordToggleText.textContent = isPassword ? 'Hide' : 'Show';
        });
    }
});
</script>

<style>

.auth-minimal-page {
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 32px 16px;
    background:
        radial-gradient(circle at top left, rgba(37, 99, 235, 0.10), transparent 30%),
        radial-gradient(circle at bottom right, rgba(59, 130, 246, 0.12), transparent 28%),
        linear-gradient(180deg, #f8fbff 0%, #eef4ff 100%);
}

.auth-minimal-card {
    width: 100%;
    max-width: 460px;
    background: #ffffff;
    border-radius: 24px;
    padding: 32px 28px 24px;
    box-shadow: 0 24px 80px rgba(15, 23, 42, 0.12);
    border: 1px solid rgba(148, 163, 184, 0.18);
}

.auth-minimal-header {
    text-align: center;
    margin-bottom: 24px;
}

.auth-minimal-badge {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    padding: 6px 12px;
    margin-bottom: 14px;
    border-radius: 999px;
    background: #eff6ff;
    color: #1d4ed8;
    font-size: 12px;
    font-weight: 700;
    letter-spacing: 0.08em;
}

.auth-minimal-title {
    margin: 0;
    font-size: 32px;
    line-height: 1.2;
    font-weight: 700;
    color: #0f172a;
}

.auth-minimal-subtitle {
    margin: 10px 0 0;
    font-size: 15px;
    line-height: 1.6;
    color: #64748b;
}

.auth-minimal-form {
    margin-top: 8px;
}

.auth-form-group {
    margin-bottom: 18px;
}

.auth-label {
    display: block;
    margin-bottom: 8px;
    font-size: 14px;
    font-weight: 600;
    color: #0f172a;
}

.auth-input,
.auth-minimal-form input[type="text"],
.auth-minimal-form input[type="password"] {
    width: 100%;
    height: 50px;
    padding: 0 14px;
    border: 1px solid #dbe2ea;
    border-radius: 14px;
    background: #ffffff;
    font-size: 15px;
    color: #0f172a;
    box-sizing: border-box;
    transition: all 0.2s ease;
}

.auth-input::placeholder,
.auth-minimal-form input[type="text"]::placeholder,
.auth-minimal-form input[type="password"]::placeholder {
    color: #94a3b8;
}

.auth-input:focus,
.auth-minimal-form input[type="text"]:focus,
.auth-minimal-form input[type="password"]:focus {
    outline: none;
    border-color: #3b82f6;
    box-shadow: 0 0 0 4px rgba(59, 130, 246, 0.12);
}

.auth-password-wrap {
    position: relative;
}

.auth-password-wrap .auth-input-password,
.auth-password-wrap input[type="password"],
.auth-password-wrap input[type="text"] {
    padding-right: 78px;
}

.auth-password-toggle {
    position: absolute;
    top: 50%;
    right: 12px;
    transform: translateY(-50%);
    border: 0;
    background: transparent;
    color: #2563eb;
    font-size: 13px;
    font-weight: 700;
    cursor: pointer;
    padding: 4px 6px;
}

.auth-password-toggle:hover {
    color: #1d4ed8;
}

.auth-form-row {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 12px;
    margin: 8px 0 22px;
}

.auth-remember {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    color: #475569;
    font-size: 14px;
    cursor: pointer;
}

.auth-remember input[type="checkbox"] {
    margin: 0;
}

.auth-forgot a {
    color: #2563eb;
    font-size: 14px;
    font-weight: 600;
    text-decoration: none;
}

.auth-forgot a:hover {
    text-decoration: underline;
}

.auth-form-actions {
    margin-top: 4px;
}

.auth-submit-btn {
    width: 100%;
    height: 52px;
    border: 0;
    border-radius: 14px;
    background: linear-gradient(135deg, #2563eb 0%, #1d4ed8 100%);
    color: #ffffff;
    font-size: 15px;
    font-weight: 700;
    cursor: pointer;
    transition: transform 0.16s ease, box-shadow 0.16s ease, opacity 0.16s ease;
    box-shadow: 0 14px 28px rgba(37, 99, 235, 0.25);
}

.auth-submit-btn:hover {
    transform: translateY(-1px);
    box-shadow: 0 18px 34px rgba(37, 99, 235, 0.28);
}

.auth-submit-btn:active {
    transform: translateY(0);
}

.auth-alert-error {
    margin: 0 0 18px;
    padding: 12px 14px;
    border-radius: 12px;
    background: #fef2f2;
    border: 1px solid #fecaca;
    color: #b91c1c;
    font-size: 14px;
    line-height: 1.5;
}

.auth-captcha-image {
    margin-bottom: 10px;
}

.auth-captcha-image img {
    display: block;
    max-width: 100%;
    border-radius: 12px;
    border: 1px solid #e2e8f0;
}

.auth-minimal-footer {
    display: flex;
    align-items: center;
    gap: 12px;
    margin-top: 24px;
    padding-top: 18px;
    border-top: 1px solid #eef2f7;
}

.auth-footer-check {
    width: 34px;
    height: 34px;
    border-radius: 999px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    background: #ecfdf5;
    color: #059669;
    font-weight: 700;
    font-size: 16px;
    flex-shrink: 0;
}

.auth-footer-title {
    font-size: 14px;
    font-weight: 700;
    color: #0f172a;
    margin-bottom: 2px;
}

.auth-footer-text {
    font-size: 13px;
    color: #64748b;
    line-height: 1.5;
}

@media (max-width: 640px) {
    .auth-minimal-card {
        max-width: 100%;
        padding: 26px 18px 20px;
        border-radius: 20px;
    }

    .auth-minimal-title {
        font-size: 28px;
    }

    .auth-form-row {
        flex-direction: column;
        align-items: flex-start;
    }

    .auth-forgot {
        width: 100%;
    }
}
</style>