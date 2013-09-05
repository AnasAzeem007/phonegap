<!DOCTYPE html>
<html lang="en">
    <head>
    <tal:block metal:use-macro="${APP_TPL}/header.tpl.php/head" />
    </head>
    <body id="login-body">
        <div class="container">
            <div class="form-outer-box">
                <div class="parmanu-logo"></div>
                <form class="form-signin form-group form" id="login" method='post' action='' >
                    <div class="alert alert-danger" tal:condition="error" tal:content="structure error"></div>
                    <h4 class="form-signin-heading">Start your 14 days Free Trial </h4>
                    <div class=" form-group heading-bottom">You'll be up and running in less than a minute. </div>
                    <div class="form-group">
                        <i class="icon-user"> </i><input type="text" class="form-control" id="user_name" name="userName" rel="popover" data-content="Enter your first and last name." data-original-title="Full Name" required="required" placeholder="Your name "/>
                    </div>
                    <div class="form-group">
                        <i class="icon-envelope-alt"> </i><input type="email" class="form-control" id="pwd" name="userPassword" rel="popover" data-content="6 characters or more! Be tricky" data-original-title="Email" required="required" placeholder="Your e-mail "/>
                    </div>
                    <div class="form-group">
                        <i class="icon-lock"> </i><input type="password" class="form-control" id="pwd" name="userPassword" rel="popover" data-content="6 characters or more! Be tricky" data-original-title="Password" required="required" placeholder="Your password "/>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="submit" class="btn-submit" rel="tooltip" title="first tooltip">GET STARTED   <i class=" icon-chevron-sign-right" style=" color:#fff;top:2px;position:relative"> </i></button>
                    </div>
                </form>
                <div class="form-help-text">Already registered? <a href="${URL_CONST_LOGIN}">Please Sign in</a></div>
            </div>
        </div>
    </body>
</html>
