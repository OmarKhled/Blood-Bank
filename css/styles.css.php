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
  background: #f4f4f4;
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
/*Media quiries*/
@media only screen and (min-device-width:500px) {
  .bld {
  width: 40%;
  height:20rem;
  object-fit:cover;
  box-shadow: 0px 0px 20px 0px #d4d4d4;
  margin-left: 40px;
  margin-right: 40px;
  border-radius: 22px;
}


.cards{display: flex;
    width: 80%;
    margin: 0 auto;
    padding: 2rem;
    flex-wrap: wrap;
justify-content: space-around;}


.sec1,.sec2,.sec3{
  width:15rem; 
    height: fit-content; 
     background-color:white ;
      text-align: center;
      box-shadow: 0px 0px 20px 0px #d4d4d4;
      border-radius:20px;

      margin-top:2rem}

.cards img{width:80%; margin: 4rem 0;}

.txt .lan {
  text-align: <?php if ($lang['mission'] == "Our Mission") {
    echo 'left';
  } else  {
    echo 'right';
  } ?>;
}

.content{
  min-height: 16.8%;
  padding: 120px 0px 50px 0px;
  text-align: center;
}
  .m-navigation {
    display: none;
  }
  .about {
  margin: auto;
  width: 70%;
  display: flex;
  flex-direction: <?php
    if ($lang['mission'] == "Our Mission") {
      echo 'row-reverse';
    } else  {
      echo 'row';
    }
  ?>;
  color:#4f4f4f;
  margin-bottom: 200px;
}

.content{
  min-height: 16.8%;
  padding: 120px 0px 50px 0px;
  text-align: center;
}
.about-2 {
  margin: auto;
  width: 70%;
  display: flex;
  flex-direction: <?php
    if ($lang['mission'] == "Our Mission") {
      echo 'row';
    } else  {
      echo 'row-reverse';
    }
  ?>;
  color:#4f4f4f;
  margin-bottom: 100px;
}
}
@media only screen and (max-device-width:500px) {
  #navbar ul li a{
  font-size: 1.5rem;}
  strong{
    font-size: 2rem;
  }
  #navbar{
    padding: 2rem 2rem;
  }
  .holder a{
    padding: 2rem 2rem 2rem 2rem ; line-height: 5em;
  }
  .navigation {
    display: none
  }
  .m-navigation {
    display: block;
  }

  .cards{display: block;
    width: 80%;
    margin: 0 auto;
    margin-top:-10rem;
    padding: 2rem;
    flex-wrap: wrap;
justify-content: space-around;}


.sec1,.sec2,.sec3{ 
    height: fit-content; 
     background-color:white ;
     display:flex;
     align-items:center;
     justify-content:space-around;
      text-align: center;
      box-shadow: 0px 0px 20px 0px #d4d4d4;
      border-radius:20px;

      margin-top:2rem}

.cards img{width:10rem; margin: 4rem 0;}

  .lan{text-align:center; line-height:4rem; color:#2b2b2b; font-family:Arial, Helvetica, sans-serif;}
   
  .content{
  min-height: 16.8%;
  padding: 4rem;
  text-align: center;
}

  footer {
    font-size: 0.6em;
  }
 
  .about,.about-2{ margin-bottom:15rem} 
  
  .bld {
    position: relative;
    top: 350px;
    width: 40%;
    opacity: 0;
    box-shadow: 0px 0px 20px 0px #d4d4d4;
    margin-left: 40px;
    margin-right: 40px;
    border-radius: 22px;
  }

}
  .bld {
    position: relative;
    top: 350px;
    width: 40%;
    opacity: 0;
    box-shadow: 0px 0px 20px 0px #d4d4d4;
    margin-left: 40px;
    margin-right: 40px;
    border-radius: 22px;
  }

/* Utilities */
.container{
  margin: auto;
 max-width:69.375rem;
}
/* Navbar */
#navbar {
  background: #fff;
  color:#fff;
  overflow: auto;
  line-height: 1.5rem;

}
#navbar a {
  text-decoration: none;
  color: #4F4F4F;
}
#navbar h1 {
  float: left;
  padding: 1.2rem;
}
#navbar h1 a {
    color: #0fc9e7;
}
#navbar ul {
  list-style: none;
  float: right;
}
#navbar ul li {
  float: left;
}
#navbar ul li a{
  color: #2196f3;
  display: inline-block;
  width: fit-content;
  padding: 1.2rem;
  text-align: center;
}
#navbar ul li a:hover ,ul li a.selected {
  background: #f4f4f4;
  color: #0fc9e7;
}
#navbar ul li a img{
  display: inline-block;

}
.flex {
  display: flex;
}
.floated {
  float: left;
  height: 100%;
}
#navbar ul span li  a{
  font-size: 1.08rem;
  padding: 1.2rem 0.8rem;
  display: inline-block;
  width: fit-content;
  text-align: center;
}
#navbar ul li a:hover, .m-navigation a:hover {
  background: #f4f4f4;
}
#navbar h1 {
  padding: 1.2rem;
}
#navbar ul li a img{
  display: inline-block;
  width: 47.888%;
}

.m-navigation a{
  font-size: 1.4rem;
  padding: 1.2rem 0.8rem;
  line-height: 1rem;
  display: block;
  width: 100%;
  text-align: center;
}
.m-navigation li{
  display: block;
  position: relative;
  float: none;
}
.drop-menu {
  display: none;
  position: absolute;
  width: ;
  line-height: 1.5em;
  background: #fff;
  padding:4px;
}
.drop-menu {
  text-align: center;
}
.m-navigation:hover .drop-menu{
  display: block;
}
.language {
  width: 93.52px;
  height: 62.38px;
}

/* Showcase */
.top-container{
  display: flex;
  text-align: center;
  background: no-repeat url("../images/main-bg.jpg") center ;
  background-size: cover;
  height:75%;
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
  display: inline-block;
  /* background: linear-gradient(90deg,#55e7fc,#4756ca); */
  padding: 15px 25px;
  cursor: pointer;
  border-radius: 50px;
  border: none;
  position: relative;
  overflow: hidden;
  font-weight: 700;
}
/* Hover Button Effect */
.buttons {
  /* display: inline-block; */
 
}
.bubble-button {
  position: absolute;
  background: #fff;
  transform: translate(-50%,-50%);
  pointer-events: none;
  border-radius: 50%;
  animation: animate 1s linear infinite;
}
@keyframes animate {
  0% {
      width: 0px;
      height: 0px;
      opacity: 0.5;
  }
  100%
  {
      width: 800px;
      height: 800px;
      opacity: 0; 
  }
}

.sec1 {
  position: relative;
  bottom: -350px;
  opacity: 0;
}
.sec2 {
  position: relative;
  bottom: -350px;
  opacity: 0;
}
.sec3 {
  position: relative;
  bottom: -350px;
  opacity: 0;
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

/*footer*/
footer {
  text-align: center;
  color: #fff;
  background: #3186b2;
  padding: 20px;
}
/*Content*/
/*.skill-row{
  width:50%;
  margin: 100px auto 100px auto ;
  text-align: left;
  overflow: hidden
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
}*/




/*change font*/

h3{font-size: 2rem; color: rgb(167, 157, 157); font-family: Arial, Helvetica, sans-serif;   text-transform: capitalize; }


.txt {
  font-size: 1.3rem;
  opacity: 0;
  position: relative;
  bottom: -600px;
}
.inf {
  min-height: 500px;
  padding: 100px;
  box-shadow:  0 50rem 50rem rgba(0,0,0,.175)!important;
}
hr {
  width: 5%;
  display: inline-block;
  border-top: dotted lightgrey 5px;
  margin-bottom: 100px;
  margin-top:100px
}

.contact-me {
  text-align: center;
  padding-bottom: 50px;
}
</style>
