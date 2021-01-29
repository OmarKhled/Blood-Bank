

<style>
/*Coloe Ballet*/
/*
#fcfcfc
#0fc9e7
#3186b2
#4756ca
#39b54a
*/
/* Resst */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
/* Gneral styling */
body {
  font-family: 'Almarai', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  background: #fcfcfc;
}
html,body {
  height: 100%
}
h1, h2, h3 {
  padding-bottom: 1.2rem;
}
a {
  text-decoration: none;
  color: #fff;
}
/*Styles & Media Quiries*/
  <?php include 'navbar.css.php'; ?>

/* Showcase */
.top-container{
  display: flex;
  text-align: center;
  background: no-repeat url("../images/main-bg.jpg") center ;
  background-size: cover;
  height:70%;
  width: 100%;
  overflow: hidden;
  justify-content: center;
  align-items: center;
}
.holder {
  color: #fff;
  font-size: 1.3em;
}
.holder h1{
  font-size: 5rem;
  margin-bottom: 1rem;
}
.primary-text {
  color: red;
}

.invisible {
  visibility:hidden;
}
.btn {
  background:#4756ca;
  padding: 15px 25px;
  cursor: pointer;
  border-radius: 50px;
  border: none;
}
.btn-1 {
  background:#4756ca;
  padding: 15px 25px;
  cursor: pointer;
  margin-top: 20px;
  border-radius: 50px;
  border: none;
}
/*Content*/
.content{
  min-height: 16.8%;
  text-align: center;
}
/*footer*/
footer {
  text-align: center;
  color: #fff;
  background: #3186b2;
  padding: 20px;
}
/*Content*/
.skill-row{
  width:50%;
  margin: 100px auto 100px auto ;
  text-align: left;
  overflow: hidden
}
hr {
  width: 5%;
  display: inline-block;
  border: none;
  border-top: dotted lightgrey 5px;
  margin-bottom: 100px;
}
h2 {
  font-size: 3rem;
}
.laptop-icon {
  width:25%;
  float: left;
  margin-right: 20px;
}
.profile {
  margin: 100px auto;
  width: 35%;
}

.chil {
  width:25%;
  float:right;
  margin-left: 20px;
}

.profile-picture{
  height: 200px;
  margin-top: 10px;
  margin-bottom: 20px;
}
.bottom-container {
  background: #66BFBF;
  padding: 25px;
  text-decoration: none;
}
.bottom-container a{
  color: #11999E;
  text-decoration: none;
  padding: 6px;
}
.bottom-container p{
  font-size: 0.8em;
  margin-top:15px;
  color: #EAF6F6;
}
.contact-me {
    width: 30%;
    margin: 0 auto 100px auto;
}
</style>
