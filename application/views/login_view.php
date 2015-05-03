    <section class="row container-center">
      <div class="col-md-4 col-md-offset-4">
        <h1 class="signin">Sign In</h1>
        <?php
          $data_user = array(
            'name'        => 'username',
            'id'          => 'username',
            'placeholder' => 'Username',
            'class'       => 'form-control input-lg',
            'required'    => 'required'
          );
          $data_pass = array(
            'name'        => 'password',
            'id'          => 'password',
            'placeholder' => 'Password',
            'type'        => 'password',
            'class'       => 'form-control input-lg',
            'required'    => 'required'
          );
          $data_submit = array(
            'class' => 'class="btn btn-primary"'
          );
          $data_reset = array(
            'class' => 'class="btn btn-default"'
          );
        ?>
        <?php echo form_open('verifylogin'); ?>
        <?php echo form_label('Username: ', 'username'); ?>
        <?php echo form_input($data_user); ?>
        <?php echo br(); ?>
        <?php echo form_label('Password: ', 'password'); ?>
        <?php echo form_input($data_pass); ?>
        <?php echo br(); ?>
        <div class="btn-group" role="group">
        <?php echo form_submit('submit', 'Login', $data_submit['class']); ?>
        <?php echo form_reset('reset', 'Reset', $data_reset['class']); ?>
        </div>
        <?php echo form_close(); ?>
        <?php echo br(); ?>
          <?php echo validation_errors(); ?>
      </div>
    </section>