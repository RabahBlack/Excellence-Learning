<template>
<div class="admin-view">
    <div class="logo">
        Excellence Learning
    </div>
    <div class="top-menu">
        <Menu mode="horizontal" theme="primary" active-name="1">
            <MenuItem name="1">
            <Icon type="ios-home" /> Home
            </MenuItem>
            <MenuItem name="2">
            <Icon type="ios-people" /> People
            </MenuItem>
            <Submenu name="3">
                <template slot="title">
                    <Icon type="ios-stats" /> Stats
                </template>

            </Submenu>
            <MenuItem name="4">
            <Icon type="ios-construct" /> Setting
            </MenuItem>
        </Menu>

    </div>
    <div class="sidebar">
        <Menu active-name="1-2" :open-names="['1']" width="280px">
            <Submenu name="1">
                <template slot="title">
                    <Icon type="ios-analytics" /> Gestion des enseignants
                </template>
                <MenuItem name="1-1" @click.native="goto('/formens')" >Nouvel enseignant</MenuItem>
                <MenuItem name="1-2" @click.native="goto('/listens')">Liste des enseignants</MenuItem>
            </Submenu>
            <Submenu name="2">
                <template slot="title">
                    <Icon type="ios-filing" /> Gestion des réceptionnistes
                </template>
                <MenuItem name="2-1">Option 5</MenuItem>
                <MenuItem name="2-2">Option 6</MenuItem>

            </Submenu>
            <Submenu name="4">
                <template slot="title">
                    <Icon type="ios-cog" /> Gestion des articles
                </template>
                <MenuItem name="4-1">Option 9</MenuItem>
                <MenuItem name="4-2">Option 10</MenuItem>
                <MenuItem name="4-3">Option 11</MenuItem>
                <MenuItem name="4-4">Option 12</MenuItem>
            </Submenu>
        </Menu>
    </div>
    <div class="content">
        <router-view/>
    </div>
</div>
</template>

<script>

export default {
    components: {
      
    },
    methods:{
         goto(page) {
           
      for (var i = 0; i < this.$router.options.routes.length; i++) {
        if (this.$router.options.routes[i].path == page) {
          this.$router.options.routes[i].isActive = true;
        } else {
          this.$router.options.routes[i].isActive = false;
        }
      }

      this.$router.push(page);
    }
    }
}
</script>

<style>
.admin-view {
    height: 100%;
    display: grid;
    grid-template-areas: "logo menu" "sidebar content";
    grid-template-columns: 281px auto;
}

.ivu-menu .ivu-menu-light .ivu-menu-vertical {
    height: 100%;
}

.logo {
    grid-area: logo;
    font-size: 22pt;
    padding: 10px;
    text-align: center;
    font-family: Painter PERSONAL USE ONLY;
}

.top-menu {
    grid-area: menu
}

.sidebar {
    grid-area: sidebar;
    height: 900px;
    background: #fff;
    width: 280px;
}

.content {
    width: 100%;
    height: 100%;
    padding: 20px;
}
</style>
