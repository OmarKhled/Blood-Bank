
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
html,body {
  height: 100%
}

/* Navbar */
#navbar {
  background: #fff;
  color:#fff;
  overflow: auto;
  line-height: 1.5rem;
  border-bottom: 3px solid #f4f4f4;
}
#navbar a {
  text-decoration: none;
  color: #4F4F4F;
}
#navbar h1 {
  float: left;
  padding-top: 1.2rem;
  padding-left:0.5rem;
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
  display: block;
  padding: 1.2rem;
  text-align: center;
}
#navbar ul li a:hover ,ul li a.selected {
  background: #f4f4f4;
  color: #0fc9e7;
}
.container{
  margin: auto;
 max-width:69.375rem;
}
#navbar ul li a img{
  display: inline-block;
  width: 47.888%;
}
.language {
  width: 93.52px;
  height: 62.38px;
}
.arabic {
  margin-bottom: 1rem;
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
  width:auto;
  height: auto;
  text-align:center;
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
    input[type=number]{
  display:block;
  width:100%;
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
  width:100%;
  text-align: center;
}
/*Media quirires*/
@media only screen and (max-device-width:600px){
  .box{background-color: #fff; width: 30%;}
  #navbar ul li a{
    font-size: 2rem;}
    strong{font-size: 2rem;}
    #navbar{padding: 2rem 2rem;}
    .holder a{padding: 3rem 2rem 2rem 2rem ; }
  }
  </style>