    <div class="signup">
      <div class="signup-body">
        <a class="signup-brand" href="<?= base_url(); ?>">
          <img class="img-responsive" src="<?= base_url(); ?>assets/img/logo.svg" alt="Easy School">
        </a>
        <p class="signup-heading">
          <em>Get started with a free account. 30 day free trial, unlimited users, no credit card required.</em>
        </p>
        <div class="signup-divider">
          <div class="divider">
            <div class="divider-content">SIGN-UP</div>
          </div>
        </div>
        <div class="signup-form">
          <?= form_open('/authentication/register', 'data-toggle="validator" method="post"'); ?>
            <div class="row gutter-xs">
              <div class="col-sm-12">
                <div class="form-group">
                  <label for="first-name">School name</label>
                  <?= form_input(array('type'=>'text','name'=>'schoolName','id'=>'schoolName', 'value' => set_value('schoolName'),'class'=>'form-control','spellcheck'=>'false','data-msg-required'=>'Please enter your email.','required'=>'true')); ?>
                </div>
                <?= form_error('schoolName'); ?>
              </div>
            </div>
            <div class="row gutter-xs">
              <div class="col-sm-12">
                <div class="form-group">
                  <label for="email">Email</label>
                  <?= form_input(array('type'=>'email','name'=>'email','id'=>'email', 'value' => set_value('email'),'class'=>'form-control','spellcheck'=>'false','data-msg-required'=>'Please enter your email address.','required'=>'true')); ?>
                </div>
                <?= form_error('email'); ?>
              </div>
            </div>
            <div class="row gutter-xs">
              <div class="col-sm-12">
                <div class="form-group">
                  <label for="password">Password</label>
                  <?= form_input(array('type'=>'password','name'=>'password','id'=>'password','class'=>'form-control','data-msg-minlength'=>'Password must be 6 characters or more.','data-msg-required'=>'Please enter your password.','required'=>'true')); ?>
                  <small class="help-block">6-character minimum; case sensitive.</small>
                  <?= form_error('password'); ?>
                </div>
              </div>
            </div>
            <div class="row gutter-xs">
              <div class="col-xs-12">
                <div class="form-group">
                  <label for="gender">Contact Number</label>
                  <?= form_input(array('type'=>'text','name'=>'contactNumber','id'=>'first-name', 'value' => set_value('contactNumber'),'class'=>'form-control','spellcheck'=>'false','data-msg-required'=>'Please enter your contact number.','required'=>'true')); ?>
                </div>
                <?= form_error('contactNumber'); ?>
              </div>
            </div>
            <div class="row gutter-xs">
              <div class="col-xs-12">
                <div class="form-group">
                  <label class="custom-control custom-control-primary custom-checkbox">
                    <?= form_input(array('type'=>'checkbox','name'=>'agree','id'=>'agree','class'=>'custom-control-input','data-msg-required'=>'In order to use our services, you must agree to the Terms of Service.','required'=>'true')); ?>
                    <span class="custom-control-indicator"></span>
                    <small class="custom-control-label">I agree to the Easy School <a href="#">Terms of Service</a>.</small>
                  </label>
                </div>
              </div>
            </div>
            <button class="btn btn-primary btn-block" type="submit">Sign up</button>
          </form>
        </div>
      </div>
      <div class="signup-footer">
        Already have an account? <a href="<?= base_url()?>authentication/">Log in</a>
      </div>
    </div>