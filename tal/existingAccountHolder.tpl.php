<!DOCTYPE html>
<html lang="en">
    <head>
    <tal:block metal:use-macro="${APP_TPL}/header.tpl.php/head" />
</head>
<body id="login-body">
<tal:block metal:use-macro="${APP_TPL}/header.tpl.php/header" />
<div class="container">
    <form class="user-form form-group form " id="login" method='post' action='' role="form">
        <div class="form-header"><h4 class="heading form-group" >You already have an account</h4></div>
        <div class="alert alert-danger hide" tal:condition="error" tal:content="structure error"></div>
            <div class="user-form-body">
                <div class="user-left-box">
                    <img src="/images/default_user_50x50.jpg" class=" img-circle"/>
                </div>
                <div class="user-right-box">
                    <div class=" form-group">
                        <div class=" form-group">Hi,<span style=" margin-left:9px">Ankit</span></div>
                        <div class="desc">We have restricted one account per person.</div>
                        <div class="desc">Though you can be a team member of multiple accounts</div>
                    </div>
                    <div class="form-group"><b>Please Login</b></div>
                    <div class="form-group">
                        <i class="icon-envelope-alt"> </i><input type="email" class="form-control" id="pwd" name="userPassword" rel="popover" data-content="6 characters or more! Be tricky" data-original-title="Email" required="required" placeholder="Your e-mail "/>
                    </div>
                    <div class="form-group">
                        <i class="icon-lock"> </i><input type="password" class="form-control" id="pwd" name="userPassword" rel="popover" data-content="6 characters or more! Be tricky" data-original-title="Password" required="required" placeholder=" password "/>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="submit" class="btn-submit form-group" rel="tooltip" title="first tooltip">LOGIN<i class=" icon-chevron-sign-right" style=" color:#fff;top:2px;position:relative;margin-left:20px "> </i></button>
                        <div class=" align-right " style=" margin-right:4%"><a href="" class="small-text">Forgot Password</a></div>
                    </div>
                </div>
            </div>
    </form>
</div>
</body>
</html>
