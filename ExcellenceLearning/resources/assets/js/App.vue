<template>
<div class="main-page">
   <admin-view></admin-view>

</div>
</template>

<script>
import AdminView from "./components/AdminView.vue";
export default {
    name: "app",
    data() {
        return {};
    },
    components: {
        AdminView
    },
    methods: {
     

    },
    mounted() {}
};
</script>

<style>
body {
    height: 100%;
    width: 100%;
    background: rgb(227, 233, 238);
}
</style>
