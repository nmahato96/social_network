@extends('master')

@section('style')
<style type="text/css">
    .container-fluid form {
    float: right;
    margin-right: 10%;
    width: 33%;
}
.container-fluid form ul {

    margin-top: 3%;
    width: 100%;

}
.label_login {
    margin: 0;
}
.container-fluid form a.forgotten_account {

    padding-top: 0;
    padding-left: 0;
    color: #829dd7;
    font-size: 95%;

}
.label_login {

    margin: 0;
    color: white;
    font-size: 95%;

}
.container-fluid form ul li {

    margin-left: 4%;

}
.login_submit {

    background: #4065b4;
    border: 1px solid #204690;
    color: white;
    font-size: 90%;
    padding: 2px 8px;
    border-radius: 2px;

}
#navbar-brand {

    float: left;
    font-size: 40px;
    font-weight: 700;
    margin: 18px 0px 0px 76px;
        margin-left: 76px;
    margin-left: 180px !important;
    line-height: 3rem;
    color: white !important;

}
.navbar{
    border: none;
}
.navigation_container {

    background-image: linear-gradient(#4e69a2, #3b5998 50%);
    background-color: #3b5998;
    border-bottom: 1px solid #1e2c4a;

}
.login_input {

    border: 1px solid #15233f;
    outline: none;
    border-radius: 1px;
    height: 24px;
    font-size: 13px;
    text-indent: 0.5rem;

}
.login_submit:hover {

    background: #3458a4;

}
.container-fluid a.forgotten_account:hover {

    text-decoration: underline;
    color: #829dd7 !important;

}
</style>
@endsection

@section('navbar')
<nav class="navbar navbar-default">
    <div class="container-fluid navigation_container">
        <div class="navbar-header">
          <a id="navbar-brand" class="navbar-brand" href="#">facebook</a>
      </div>
      <form action="" method="POST">
        {!! csrf_field() !!}
        <ul class="nav navbar-nav">
            <li>
                <p class="label_login">Email or Phone</p>
                <input type="text" name="uname" class="login_input">
            </li>
            <li>
                <p class="label_login">Password</p>
                <input type="password" name="upass" class="login_input">
                <a href="#" class="forgotten_account">Forgotten Account?</a>
            </li>
            <li>
                <p class="label_login" style="opacity: 0;">submit</p>
                <input type="submit" name="" value="Log In" class="login_submit">
            </li>
        </ul>
    </form>
</div>
</nav>
@endsection
