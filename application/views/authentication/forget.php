<div class="login">
  <div class="login-body">
    <a class="login-brand" href="index-2.html">
      <img class="img-responsive" src="<?= base_url(); ?>assets/img/logo.svg" alt="EasySchool">
    </a>
    <div class="login-form">
      <form data-toggle="validator">
        <div class="form-group">
          <label for="email">Email</label>
          <input id="email" class="form-control" type="email" name="email" spellcheck="false" autocomplete="off" data-msg-required="Please enter your email address." required>
          <p class="help-block">
            <small>If you've forgotten your password, we'll send you an email to reset your password.</small>
          </p>
        </div>
        <button class="btn btn-primary btn-block" type="submit">Send password reset email</button>
      </form>
    </div>
  </div>
  <div class="login-footer">
    Don't have an account? <a href="<?= base_url()?>authentication/register">Sign Up</a>
  </div>
</div>