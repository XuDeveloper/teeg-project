<!-- Page Content -->
<div class="container">
    
<div class="row">
    <div class="col-md-12">
        <h1>My profile</h1>
    </div>
</div>

<div class="row">
    <!-- left column -->
    <div class="col-md-4 col-sm-6 col-xs-12">
      <div class="text-center">
        <img src="https://placeholdit.imgix.net/~text?txtsize=33&txt=profile%20image&w=200&h=200" class="avatar img-circle img-thumbnail" alt="avatar">
        <h6>Upload a different photo...</h6>
        <input type="file" class="text-center center-block well well-sm">
      </div>
    </div>
    <!-- edit form column -->
    <div class="col-md-8 col-sm-6 col-xs-12 personal-info">
      <div class="alert alert-info alert-dismissable">
        <a class="panel-close close" data-dismiss="alert">×</a> 
        <i class="fa fa-coffee"></i>
        This is an <strong>.alert</strong>. Use this to show important messages to the user.
      </div>
      <h3>Personal info</h3>
      <form class="form-horizontal" role="form" action="/account/update_account" method="post">
<!--        <div class="form-group">-->
<!--          <label class="col-lg-3 control-label">First name:</label>-->
<!--          <div class="col-lg-8">-->
<!--            <input class="form-control" value="Jane" type="text">-->
<!--          </div>-->
<!--        </div>-->
<!--        <div class="form-group">-->
<!--          <label class="col-lg-3 control-label">Last name:</label>-->
<!--          <div class="col-lg-8">-->
<!--            <input class="form-control" value="Bishop" type="text">-->
<!--          </div>-->
<!--        </div>-->
<!--        <div class="form-group">-->
<!--          <label class="col-lg-3 control-label">Company:</label>-->
<!--          <div class="col-lg-8">-->
<!--            <input class="form-control" value="" type="text">-->
<!--          </div>-->
<!--        </div>-->
          <?php echo isset($error) && $error ? $error : ''; ?>
          <?php echo validation_errors(); ?>
        <div class="form-group">
          <label class="col-lg-3 control-label">Email:</label>
          <div class="col-lg-8">
            <input class="form-control" value="<?php echo $account['email']; ?>" type="text" name="email" disabled="true">
          </div>
        </div>
<!--        <div class="form-group">-->
<!--          <label class="col-lg-3 control-label">Time Zone:</label>-->
<!--          <div class="col-lg-8">-->
<!--            <div class="ui-select">-->
<!--              <select id="user_time_zone" class="form-control">-->
<!--                <option value="Hawaii">(GMT-10:00) Hawaii</option>-->
<!--                <option value="Alaska">(GMT-09:00) Alaska</option>-->
<!--                <option value="Pacific Time (US & Canada)">(GMT-08:00) Pacific Time (US & Canada)</option>-->
<!--                <option value="Arizona">(GMT-07:00) Arizona</option>-->
<!--                <option value="Mountain Time (US & Canada)">(GMT-07:00) Mountain Time (US & Canada)</option>-->
<!--                <option value="Central Time (US & Canada)" selected="selected">(GMT-06:00) Central Time (US & Canada)</option>-->
<!--                <option value="Eastern Time (US & Canada)">(GMT-05:00) Eastern Time (US & Canada)</option>-->
<!--                <option value="Indiana (East)">(GMT-05:00) Indiana (East)</option>-->
<!--              </select>-->
<!--            </div>-->
<!--          </div>-->
<!--        </div>-->
        <div class="form-group">
          <label class="col-md-3 control-label">Username:</label>
          <div class="col-md-8">
            <input class="form-control" value="<?php echo $account['username']; ?>" type="text" name="username">
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-3 control-label">Password:</label>
          <div class="col-md-8">
            <input class="form-control" value="" type="password" name="pass">
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-3 control-label">Confirm password:</label>
          <div class="col-md-8">
            <input class="form-control" value="" type="password" name="pass_repeat">
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-3 control-label"></label>
          <div class="col-md-8">
            <input class="btn btn-primary" value="Save Changes" type="submit">
            <span></span>
            <input class="btn btn-default" value="Cancel" type="reset">
          </div>
        </div>
      </form>
    </div>
  </div>

</div>
<!-- /.container -->