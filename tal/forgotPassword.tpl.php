<!DOCTYPE html>
<html lang="en">
    <head>
      <tal:block metal:use-macro="${APP_TPL}/header.tpl.php/head" />
    </head>
    <body id="login-body">
        <div class="container">
            <div class="form-outer-box">
                <div class="parmanu-logo"></div>
                <form class="form-signin form-group form" id="login" method='post' action=''  role="form">
                    <div class="alert alert-danger" tal:condition="error" tal:content="structure error"></div>
                    <h4 class="heading form-group" >Forgot Password</h4>
                    <div class="form-group">
                        <i class="icon-lock"> </i><input type="password" class="form-control" id="pwd" name="userPassword" rel="popover" data-content="6 characters or more! Be tricky" data-original-title="Password" required="required" placeholder="ab@gmail.com "/>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="submit" class="btn-submit form-group" rel="tooltip" title="first tooltip">SUBMIT<i class=" icon-chevron-sign-right" style=" color:#fff;top:2px;position:relative"> </i></button>
                    </div>
                </form>
                <div class="form-help-text ">If you don't have an account.  <a href="${URL_CONST_SIGN_UP}">create here</a></div>
            </div>
        </div>
    </body>
</html>
