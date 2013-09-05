<!DOCTYPE html>
<html lang="en">
    <head>
    <tal:block metal:use-macro="${APP_TPL}/header.tpl.php/head" />
</head>
<body id="login-body" style="padding-bottom:0;padding-top:0">
<tal:block metal:use-macro="${APP_TPL}/header.tpl.php/edit-profile-header" />
<div class="container">
    <div class="msg-box">
        <div class="head-box align-center" ><b>Choose an Account</b></div>
        <div class="border-bottom"><i class="parmanu-horn"></i><span>Account Name</span></div>
        <div class="border-bottom"><i class="parmanu-horn"></i><span>Naman Rampal's Amplify</span></div>
        <div><i class="parmanu-horn"></i><span>Sandeep Rampal's Amplify</span></div>                            
    </div>
    <div class="msg-box">
        <div class="head-box"><i class="icon-warning-sign"></i><b>No Projects Found</b></div>
        <div>You have not been assigned to any projects. Please Contact your administrator directly, who invited you to this account.</div>
        <div>Thanks</div>                                                
    </div>
    <div class="msg-box">
        <div class="head-box"><i class="icon-warning-sign"></i><b>No Projects Found</b></div>
        <div>You are no longer have access to any account. Please contact your administrator directly, who invited you you to this account.</div>
        <div>Thanks</div>                                                
    </div>
</div>
</body>
</html>
