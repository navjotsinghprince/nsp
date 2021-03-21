const state = {
    user: ""
};
const getters = {};
const actions = {
    GetUser(context, data) {
        context.dispatch("globalState/actionloaderState", true, { root: true });
        const api_url = "api/GetUser";
        axios
            .post(api_url, data)
            .then(response => {
                console.log("My Response==>>>", response.data.data);
                context.commit("UPDATE_USER", response.data.data);
                context.dispatch("globalState/actionloaderState", false, {
                    root: true
                });
            })
            .catch(error => {
                console.log(error);
                context.dispatch("globalState/actionloaderState", false, {
                    root: true
                });
            });
    }
};

const mutations = {
    UPDATE_USER(state, data) {
        state.user = data;
    }
};

export default {
    namespaced: true,
    state,
    getters,
    actions,
    mutations
};
