const state = {
    // showSnackBar: {
    //     show: false,
    //     message: "",
    //     color: ""
    // },
    loaderState: false
};
const getters = {};
const actions = {
    actionloaderState(context, status) {
        context.commit("SHOW_LOADER", status);
    },
    // snackBarState(context, snackProp) {
    //     context.commit("SHOW_SNACKBAR", {
    //         show: snackProp.show,
    //         color: snackProp.color,
    //         message: snackProp.message
    //     });
    // },

    test(context, data) {
        context.dispatch("globalState/actionloaderState", true, { root: true });
        const api_url = "api/GetUser";
        axios
            .post(api_url, data)
            .then(response => {
                // handle success
                console.log("My Response==>>>", response);
                context.dispatch("globalState/actionloaderState", false, {
                    root: true
                });
            })
            .catch(error => {
                // handle error
                console.log(error);
                context.dispatch("globalState/actionloaderState", false, {
                    root: true
                });
            });
    }
};

const mutations = {
    SHOW_LOADER(state, status) {
        state.loaderState = status;
    }
    // SHOW_SNACKBAR(state, snack) {
    //     state.showSnackBar.message = snack.message;
    //     state.showSnackBar.color = snack.color;
    //     state.showSnackBar.show = snack.show;
    // }
};

export default {
    namespaced: true,
    state,
    getters,
    actions,
    mutations
};
