import Vue from "vue";
import Vuex from "vuex";

//Global
import globalState from "./modules/global/globalState";

//Admin
// import admin_login from "./modules/admin/admin_login";
// import helpers from "./modules/helpers";

// Front
import UserInformation from "./modules/frontend/UserInformation";

Vue.use(Vuex);

const store = new Vuex.Store({
    modules: {
        //Global
        globalState,

        // Admin
        // admin_login,

        // Front
        UserInformation
    }
});

export default store;
