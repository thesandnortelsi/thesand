<?php
/**
 * @var \App\View\AppView $this
 */
?>


<body class="error-body no-top">

		<div class="users form">
			<div class="container">
		      <div class="row login-container column-seperation">
		        <div class="col-md-5 col-md-offset-1">
		          <h2>
		        Sign in to The Sand
		      </h2>
		          <p>
		            <!-- Use Facebook, Twitter or your email to sign in. -->
		            <br>
		            <!-- <a href="#">Sign up Now!</a> for a webarch account,It's free and always will be.. -->
		          </p>
		          <br>
		          <!-- <button class="btn btn-block btn-info col-md-8" type="button"><span class="pull-left icon-facebook" style="font-style: italic"></span> <span class="bold">Login with Facebook</span></button>
		          <button class="btn btn-block btn-success col-md-8" type="button"><span class="pull-left icon-twitter" style="font-style: italic"></span>
		            <span class="bold">Login with Twitter</span></button> -->
		        </div>
		        <div class="col-md-5">
		          <br>
		          

		      	<?= $this->Flash->render('auth') ?>
				<?= $this->Form->create(null, ['class' => 'login-form validate', 'id' => 'login-form']) ?>

		            <div class="row">
		              <div class="form-group col-md-10">
		                <!-- <label class="form-label">Username</label> -->
		                <?= $this->Form->control('username', ['label' => 'Usuario', 'class' => 'form-control']) ?>
		              </div>
		            </div>
		            <div class="row">
		              <div class="form-group col-md-10">
		                <!-- <label class="form-label">Password</label> <span class="help"></span> -->
		                <?= $this->Form->control('password', ['label' => 'Contraseña', 'class' => 'form-control']) ?>
		              </div>
		            </div>
		            <div class="row">
		              <div class="control-group col-md-10">
		                <div class="checkbox checkbox check-success">
		                  <!-- <a href="#">Trouble login in?</a>&nbsp;&nbsp; -->
		                  <input id="checkbox1" type="checkbox" value="1">
		                  <label for="checkbox1">Keep me reminded</label>
		                </div>
		              </div>
		            </div>
		            <div class="row">
		              <div class="col-md-10">
		                <!-- <button class="btn btn-primary btn-cons pull-right" type="submit">Login</button> -->
		                <?= $this->Form->button('Login', ['type' => 'submit', 'class'=>'btn btn-primary btn-cons pull-right']); ?>
		              </div>
		            </div>
		          
		        <?= $this->Form->end() ?>

		        </div>
		      </div>
		    </div>
		</div>
</body>