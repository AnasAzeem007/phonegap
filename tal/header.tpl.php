<tal:block metal:define-macro="head">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <link rel="stylesheet" href="/css/bootstrap.css" type="text/css"/>
    <link rel="stylesheet" href="/css/amplify.css" type="text/css"/>
    <link rel="stylesheet" href="/css/login.css" type="text/css"/>
    <link rel="stylesheet" href="/css/font-awesome.min.css" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Lato"/>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'/>

</tal:block>


<tal:block metal:define-macro="header">
    <div class="navbar navbar-fixed-top" >
        <div class="navbar-header">
            <a class="navbar-brand" href="#"><i class="parmanu-small-logo"/></a>
        </div>
    </div> 
</tal:block>
<tal:block metal:define-macro="edit-profile-header">
    <div class="navbar navbar-fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand pull-left" href="#"><i class="parmanu-small-logo"/></a>
        </div>
        <nav class=" pull-right login-nav-bar">
            <a href="" style=" text-decoration:none"><img src="/images/default_user_30x30.jpg" class="img-circle user-img" /> </a>
            <ul>
                <li class="active">
                    <a href=""><b>Ankit kumar</b></a>
                </li>
                <li>
                    <a href="">Edit my Profile</a>
                </li>
                <li>
                    <a href="">Sign up</a>
                </li>
            </ul>
        </nav>

    </div> 
</tal:block>