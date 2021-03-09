const state = {
    showSnackBar: {
        show: false,
        message: "",
        color: ""
    },
  
    loaderState: false,
   
};
const getters = {};
const actions = {
    actionloaderState(context, status) {
        context.commit("SHOW_LOADER", status);
	},
    snackBarState(context, snackProp) {
        context.commit("SHOW_SNACKBAR", {
            show: snackProp.show,
            color: snackProp.color,
            message: snackProp.message
        });
    },
};

const mutations = {
    SHOW_LOADER(state, status) {
        state.loaderState = status;
    },
    SHOW_SNACKBAR(state, snack) {
        state.showSnackBar.message = snack.message;
        state.showSnackBar.color = snack.color;
        state.showSnackBar.show = snack.show;
    },
};

export default {
    namespaced: true,
    state,
    getters,
    actions,
    mutations
};