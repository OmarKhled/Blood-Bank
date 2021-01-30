
<style media>

/*Coloe Ballet*/
/*
#fcfcfc
#0fc9e7
#3186b2
#4756ca
#39b54a
*/

/*--- Reset ---*/
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
/* Gneral styling */
body {
  font-family: 'Almarai', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  background: #f4f4f4;
  width: 100%;
  text-align: center;
}
html,body {
  height: 100%
}
h2 {
  margin: 0.67rem 0 1.5rem 0;
  font-size: 1.9rem;
  color: #4f4f4f;
}
a {
  text-decoration: none;
  color: #3186b2;
}
/*--- Registration page ---*/
.box {
  line-height: 1.1em;
  margin: auto;
  margin-top: 4.125rem;
  padding: 1.5em;
  background: #fff;
  width:20%;
  border-radius: 20px;
  text-align: center;
}
.box label{
  display: block;
  text-align: <?php echo $_COOKIE['alignment'] ?>;
  font-size: 18px;
  color: #333;
}
label {

}
input[type=text],
 input[type=email],
  input[type=tel],
   input[type=list],
    input[type=number], select{
  display:block;
  width:100%;
  height: 35px;
  font-size: 16px;
  padding: 5px;
  margin-bottom: 18px;
  border: 2px #d8d8d8 solid;
  border-radius: 3px;
  text-align: <?php echo $_SESSION['alignment'] ?>;
  background: #fff;
}
.btn {
  background: #3186b2;
  padding: 15px 20px;
  font-size: 18px;
  border: none;
  color: #fff;
  font-style: bold;
  width: 100%;
  cursor: pointer;
  border-radius: 7px;
}
.btn-rounded {
  background: #3186b2;
  padding: 10px 30px;
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
/*Media quiries*/
@media only screen
  and (max-device-width: 600px)  {
    .box label{font-size: 25px; font-weight: bold;}
    input[type=text],
 input[type=email],
  input[type=tel],
   input[type=list],
    input[type=number], select{height: 60px; }
     .box{width: 50%; line-height: 2rem; }
             .btn{font-size: 2em;}
             .btn-rounded{font-size: 2em;}
             .box p {
               font-size: 1.4rem;
             }
   }
   @media (max-device-width: 1250px)  {
       .box label{font-size: 25px; font-weight: bold;}
       input[type=text],
    input[type=email],
     input[type=tel],
      input[type=list],
       input[type=number], select{height: 60px; }
        .box{width: 30%; line-height: 2rem; }
        .btn{font-size: 2em;}
        .btn-rounded{font-size: 2em;}
        .box p {
          font-size: 1.4rem;
        }
      }


   @media only screen
  and (max-device-width: 450px)  {
    ::placeholder{font-size: 20px; font-weight: bold;}
    .box label{font-size: 30px; font-weight: bold;}
    input[type=text],
 input[type=email],
  input[type=tel],
   input[type=list],
    input[type=number], select{height: 80px; }
     .box{width: 50%; line-height: 2rem; }
             .btn{font-size: 2em;}
             .btn-rounded{font-size: 2em;}
   }
   .box p {
     font-size: 1.4rem;
   }

</style>
