<style>

/* Reset */
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

html, body {
  height: 100%
}

/* Navbar and media quiries */
@media only screen and (min-device-width:500px) {
  .m-navigation {
    display: none;
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
  footer {
    font-size: 0.6em;
  }
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
  position: relative;
  float: none;
}
.drop-menu {
  display: none;
  position: absolute;
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

/* The search box */
h2 {
  color: #4f4f4f;
  margin: 0.67rem 0 1.5rem 0;
  font-size: 150%;
}

.box-again {
  line-height: 1.1em;
  margin: 0 0 0 50px;
  margin-top: 4.125rem;
  padding: 1.5em;
  background: #fff;
  width: auto;
  height: auto;
  text-align: center;
  border-radius: 20px;
}

label {
  display: block;
  text-align: <?php echo $_SESSION['alignment'] ?>;
}

.results-box {
  line-height: 1.1em;
  margin: 0 0 0 50px;
  margin-top: 4.125rem;
  padding: 1.5em 2.9em 1.5em 2.9em;
  background: #fff;
  width: 85%;
  border-radius: 80px 0 80px 0;
  text-align: left;
  font-size: 16px;
}

a {
  text-decoration: none;
  color: #3186b2;
}

input[type=text],
input[type=email],
input[type=tel],
input[type=list],
input[type=number] {
  display: block;
  width: 100%;
  height: 35px;
  font-size: 16px;
  padding: 5px;
  border: 2px #d8d8d8 solid;
  border-radius: 3px;
  background: #fff;
}

.btn-rounded {
  background: #3186b2;
  padding: 3% 15%;
  font-size: 18px;
  border: none;
  color: #fff;
  font-style: bold;
  cursor: pointer;
  border-radius: 50px;
}

p {
  margin-bottom: 10px;
}

.error {
  color: red;
}

.success {
  color: green;
}

/*results*/
.content {
  display: flex;
}

.results {
  margin: 4.3em 1em 0 1em;
  width: 100%;
  text-align: center;
}

/*Donator inf*/
.user-inf {
  margin: 6.125rem 6.5rem;
  display: flex;
}

.user-img {
  width: 20rem;
  padding: 0 20px;
}

.user-txt {
  font-size: 1.5rem;
  padding-top: 1.2rem;
}

/*Media quirires*/
@media only screen and (max-device-width:600px) {
  .box {
    background-color: #fff;
    width: 30%;
  }

  #navbar ul li a {
    font-size: 2rem;
  }

  strong {
    font-size: 2rem;
  }

  #navbar {
    padding: 2rem 2rem;
  }

  .holder a {
    padding: 3rem 2rem 2rem 2rem;
  }
}

</style>
