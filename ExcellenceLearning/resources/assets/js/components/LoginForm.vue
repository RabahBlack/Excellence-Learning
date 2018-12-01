<template>
<div class="login-wrapper">

    <div class="page-container">
        <div class="login-container">
            <div class="login-header">
                <div class="login-txt">
                   Log in
                </div>
              
            </div>
            <form action=""> 
                <div class="login-body">
                    <div class="login-body-img">
                        <img src="../../img/cap.png"  height="64" width="64" />
                    </div>
                  <input type="text" name="username" id="username" placeholder="User name / email">
                  <input type="password" name="pwd" id="pwd" placeholder="Password">
                  <a class="forg-pwd">Forgot your password?</a>

                  <input type="button" value="Login">  
                </div>
            </form>
        </div>
    </div>
    </div>
    
</template>

<script>
export default {
  name: "login-form"
};
</script>

<style scoped>
body {
   
   background: #1E77BB;

  }


.page-container {
  height: 100%;
  display: flex;
  flex-direction: row;
  align-items: center;
  justify-content: center;
  padding: 50px;
}

.login-container {
  height: 80%;
  width: 50%;
  box-shadow: 0 0 70px #535353;
  border-radius: 10px;
}

.login-header {
  width: 100%;
  background: #328fd4;
  display: block;
  padding-top: 12px;
  border-radius: 10px 10px 0 0;
}

.login-txt {
  font-size: 24pt;

  color: #d6d6d6;

  padding: 12px;
  width: 100%;
  text-align: center;
  -webkit-clip-path: polygon(0 0, 100% 0, 80% 100%, 0% 100%);
  clip-path: polygon(0 0, 100% 0, 80% 100%, 0% 100%);
  padding-bottom: 26px;
}

.darkside {
  width: 37px;
  height: 37px;
  margin-left: -37px;
  background: #1e77bb;
  -webkit-clip-path: polygon(100% 0, 0 0, 100% 100%);
  clip-path: polygon(100% 0, 0 0, 100% 100%);
}

.login-body {
  padding: 15%;
  display: flex;
  flex-direction: column;
}


.login-body > input {
  margin: 10px;
}

.login-body-img{
    display:flex;
    flex-direction: column;
    justify-content: center;
    align-items:center;
}
input[type="text"],
input[type="password"] {
  padding: 9px;

  background: transparent;
  border: 1px solid #1e77bb;
  font-family: inherit;
  border-radius: 4px;
}

input[type="text"]:focus,
input[type="password"]:focus {
  outline: #673ab7;
  box-shadow: 1px 0 2px #1e77bb;
}

input[type="button"] {
  background: #1e77bb;
  color: #e2e2e2;
  border: none;
  border-radius: 4px;
  font-size: 12pt;
  padding: 12px;
  cursor: pointer;
  box-shadow: 1px 2px 5px #1b1b1b;
}

.forg-pwd {
  color: #1e77bb;
  align-self: center;
  font-size: 9pt;
  padding: 11px;
  cursor: pointer;
}

/* we will add some media queries for small screens*/
@media (max-width: 768px) {
  .login-container {
    width: 80%;
  }

  .login-txt {
    font-size: 24pt;
  }
}

/* the end ***/
</style>
