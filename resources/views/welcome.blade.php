@extends('master')

@section('style')
<style type="text/css">
    .container-fluid form {
    float: right;
    margin-right: 10%;
    width: 36%;
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
    margin-left: 122px !important;
    line-height: 3rem;
    color: white !important;

}
.navbar{
    border: none;
    margin-bottom: 0px;
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
.signup_section_main_container:after{
    content: ".";
    visibility: hidden;
    display: block;
    height: 0;
    clear: both;
}
section.signup_section_main_container {
    background: linear-gradient(white, #D3D8E8);
}
.col-md-12.signup_section_container {
    display: flex;
}
.signup_section {
    flex-grow: 1;
    flex-basis: 200px;
}
.signup_section_img.signup_section {
    padding-left: 10%;
}
p.signup_section_img_text {
    color: #0e385f;
    font-size: 20px;
    font-weight: bold;
    line-height: 29px;
    margin-top: 40px;
    width: 450px;
    word-spacing: -1px;
}
.signup_section form h1 {
    font-size: 36px;
    font-weight: 600;
    color: #333;
}
.signup_section form h3 {
    color: #1d2129;
    font-size: 19px;
}
p.terms {
    color: #777;
    font-size: 11px;
    width: 316px;
}
p.celebrity {
    border-top: 1px solid #dddfe2;
    color: #666;
    font-size: 13px;
    font-weight: bold;
    margin-top: 10px;
    padding-top: 15px;
}
.sign_up_fullname {
    width: 180px;
    padding: 8px 10px;
    border-color: #bdc7d8;
    border-radius: 5px;
    margin: 0;
    background-color: white;
    border: 1px solid #bdc7d8;
    outline: none;
    font-size: 18px;
}
input.sign_up_credentials {
    width: 377px;
    padding: 8px 10px;
    border-color: #bdc7d8;
    border-radius: 5px;
    margin: 0;
    background-color: white;
    border: 1px solid #bdc7d8;
    outline: none;
    margin-top: 10px;
    font-size: 18px;
}
input.sign_up_fullname.sign_up_surname {
    margin-left: 10px;
}
.signup_section form {
    padding-left: 10%;
}
.signup_section form select {
    font-size: 13px;
    height: 30px;
    padding: 5px;
    border: 1px solid #bdc7d8;
}
label.signup_gender {
    color: #1d2129;
    font-size: 18px;
    font-weight: normal;
    line-height: 18px;
    padding: 0 10px 0 3px;
}
input.form_signup_button {
    font-weight: bold !important;
    letter-spacing: normal;
    text-rendering: optimizelegibility;
    font-size: 19px;
    min-width: 194px;
    padding: 7px 20px;
    text-align: center;
    background: linear-gradient(#67ae55, #578843);
    background-color: #69a74e;
    box-shadow: inset 0 1px 1px #a4e388;
    border-color: #3b6e22 #3b6e22 #2c5115;
    text-shadow: 0 1px 2px rgba(0,0,0,.5);
    border: 1px solid;
    border-radius: 5px;
    color: #fff;
    cursor: pointer;
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
<section class="signup_section_main_container">
    <div class="col-md-12 signup_section_container">
        <div class="signup_section_img signup_section">
            <p class="signup_section_img_text">
                Facebook helps you connect and share with the people in your life.
            </p>
            <img src="img/login_screen.png">
        </div>
        <div class="signup_section">
            <form action="" method="POST">
                <h1>Create an account</h1>
                <h3>It's free and always will be.</h3>
                <input type="text" name="fname" placeholder="First name" class="sign_up_fullname sign_up_firstname">
                <input type="text" name="lname" placeholder="Surname" class="sign_up_fullname sign_up_surname"><br>
                <input type="text" name="email" placeholder="Mobile number or email address" class="sign_up_credentials sign_up_email"><br>
                <input type="password" name="password" placeholder="New Password" class="sign_up_credentials sign_up_password">
                <h3>Birthday</h3>
                <select>
                    <option value="">Day</option>
                    <?php
for($i=1;$i<=31;$i++){
    echo "<option value='".$i."'>".$i."</option>";
}
                    ?>
                </select>
                <select>
                    <option value="">Month</option>
                    <option value="Jan">Jan</option>
                    <option value="Feb">Feb</option>
                    <option value="Mar">Mar</option>
                    <option value="Apr">Apr</option>
                    <option value="May">May</option>
                    <option value="Jun">Jun</option>
                    <option value="July">July</option>
                    <option value="Aug">Aug</option>
                    <option value="Sept">Sept</option>
                    <option value="Oct">Oct</option>
                    <option value="Nov">Nov</option>
                    <option value="Dec">Dec</option>
                </select>
                <select>
                    <option value="">Year</option>
                    <?php
for($i=2018;$i>=1905;$i--){
    echo "<option value='".$i."'>".$i."</option>";
}
                    ?>
                </select>
                <br><br>
                    <input type="radio" name="gender" value="Female" id="female"><label for="female" class="signup_gender">Female</label>
                    <input type="radio" name="gender" value="Male" id="male"><label for="male" class="signup_gender">Male</label>
                    <br><br>
                    <p class="terms">
                        By clicking Sign Up, you agree to our Terms, Data Policy and Cookie Policy. You may receive SMS notifications from us and can opt out at any time.
                    </p>
                    <input type="submit" name="submit" value="Sign Up" class="form_signup_button">
                    <p class="celebrity">Create a Page for a celebrity, band or business.</p>
            </form>
        </div>
    </div>
</section>
@endsection
