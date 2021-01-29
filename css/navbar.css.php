
@media only screen and (min-device-width:500px) {
  .m-navigation {
    display: none;
  }
}
@media only screen and (max-device-width:500px) {
  #navbar ul li a{
  font-size: 2rem;}
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
  font-size: 1.7rem;
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
