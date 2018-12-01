<template>
<div class="signin-wrapper">
    <div id="bg">
        <!--it serves like a background-->
    </div>
    <div class="page-container">
        <div class="signin-container">
            <div class="signin-header">
                <div class="signin-txt">
                    Create user
                </div>

            </div>
            <!-- <form action=""> -->
                <div class="signin-body">
                    <div class="login-body-img flex-item">
                        <img src="../../img/cap.png" height="64" width="64" />
                    </div>
                    <div class="flex-item">
                        <input @input="addUser()" type="text" v-model="user.email" name="email" id="email" placeholder="Email">
                        <input type="password" v-model="user.password" name="pwd" id="pwd" placeholder="Password">
                    </div>
                    <div class="flex-item">
                        <select v-model="user.type" class="ui selection dropdown" @input="select">
                              <option value="" disabled>Type</option>

                              <option v-for="(option,i) in options" :value="i">{{option}}</option>
                               
                        </select>
                        {{user.type}}
                    </div>

                    <button class="btn"   v-on:click.native="addUser">Add </button>
                </div>
            <!-- </form> -->
        </div>
    </div>
</div>
</template>

<script>
export default {
    name: "signin-form",
    data() {
        return {
            user: {
                email: '',
                password: '',
                type: 0,
                
            },
            selected: '',
            options: ["Admin", "Enseignant", "Réceptionniste", "Tuteur"],
        };
    },
    methods: {
        addUser() {
            console.log("# ",this.user)

        },
        select($event) {
            console.log(this.user)

        }
    },
    mounted() {
     
    }
};
</script>

<style scoped>
body {
    background: #1e77bb;
}

#bg {
    clip-path: circle(80% at 21% 3%);
    background: #f0f0f0;
    height: 100%;
    width: 100%;
    position: absolute;
    z-index: -1;
}

.page-container {
    height: 100%;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: center;
    padding: 20px;
}

.signin-container {
    height: 80%;
    width: 80%;
    box-shadow: 0 0 70px #535353;
    border-radius: 10px;
}

.signin-header {
    width: 100%;
    background: #328fd4;
    display: block;
    padding-top: 12px;
    border-radius: 10px 10px 0 0;
}

.signin-txt {
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

.signin-body {
    padding: 40px;
    width: 100%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

.flex-item {
    padding: 10px;
}

.signin-body>input,.btn {
    margin: 10px;
    width: 350px;
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
    /* box-shadow: 1px 0 2px #1e77bb; */
}

.btn{
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
    .signin-container {
        width: 80%;
    }
    .signin-txt {
        font-size: 24pt;
    }
}

/* the end ***/
</style>
