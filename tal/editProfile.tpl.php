<!DOCTYPE html>
<html lang="en">
    <head>
    <tal:block metal:use-macro="${APP_TPL}/header.tpl.php/head" />
</head>
<body id="login-body" style="padding-bottom:0;padding-top:0">
<tal:block metal:use-macro="${APP_TPL}/header.tpl.php/edit-profile-header" />
<div class="container">
    <form class="user-form form-group form " id="login" method='post' action='' style=" margin-top:7% "  role="form">
        <div class="form-header"><h4 class="heading form-group" >Edit your Profile</h4></div>
        <div class="alert alert-danger hide" tal:condition="error" tal:content="structure error"></div>
        <div class="user-form-body">
            <div class="user-left-box">
                <img src="/images/default_user_50x50.jpg" class=" img-circle"/>
            </div>
            <div class="user-right-box">
                <div class=" form-group" >
                    <div class=" form-group">Upload a new photo</div>
                    <div class="desc radio"><input type="file" name='' style="margin-left:-20px"/></div>
                </div>
                <div class="form-group">
                    <i class="icon-user"> </i><input type="email" class="form-control" id="pwd" name="userPassword" rel="popover" data-content="6 characters or more! Be tricky" data-original-title="Email" required="required" placeholder="Your e-mail "/>
                </div>
                <div class="form-group">
                    <i class="icon-envelope-alt"> </i><input type="email" class="form-control" id="pwd" name="userPassword" rel="popover" data-content="6 characters or more! Be tricky" data-original-title="Email" required="required" placeholder="Your e-mail "/>
                </div>
                <div class="form-group">
                    <i class="icon-lock"> </i><input type="password" class="form-control" id="pwd" name="userPassword" rel="popover" data-content="6 characters or more! Be tricky" data-original-title="Password" required="required" placeholder=" password "/>
                </div>
                <div class="form-group">
                    <i class="icon-lock"> </i><input type="password" class="form-control" id="pwd" name="confirmpswd" rel="popover" data-content="6 characters or more! Be tricky" data-original-title="Password" required="required" placeholder="confirm password "/>
                </div>
                <div class="form-group">
                    <button type="submit" name="submit" class="btn-submit form-group" rel="tooltip" title="first tooltip">SAVE CHANGES<i class=" icon-chevron-sign-right" style=" color:#fff;top:2px;position:relative;margin-left:20px "> </i></button>
                    <div class=" align-right " style=" margin-right:4%"><a href="" class="small-text">Cancel</a></div>
                </div>
            </div>
        </div>
    </form>
</div>
</body>
</html>
