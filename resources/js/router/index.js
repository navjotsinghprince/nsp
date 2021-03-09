import Vue from "vue";
import VueRouter from "vue-router";
Vue.use(VueRouter);

// Admin Imports
// import AdminLogin from "../views/admin/AdminLogin";
// import AdminHome from "../views/admin/AdminHome.vue";

// FrontEnd Routes
import App from "../views/frontend/App";
import FrontendHome from "../views/frontend/Home";
import FrontendAboutMe from "../views/frontend/AboutMe";
import FrontendResume from "../views/frontend/Resume";
import FrontendPortfolio from "../views/frontend/Portfolio";

import FrontendBlog from "../views/frontend/Blog";
import FrontendContact from "../views/frontend/Contact";
import PageNotFound from "../views/frontend/404Page";

const routes = [

  // Admin
 // { path: "/admin", name: "adminLogin", component: AdminLogin },
//  { path: "/adminhome", name: "adminhome", component: AdminHome, meta: { adminRoute: true }},

//Front End Routes
  {
    path: "/",
    component: App,
    // children: [
    //   {
    //     path: "/",
    //     name: "home",
    //     component: FrontendHome,
    //   },
    // ]
  },
  { path: "/", name: "home", component: FrontendHome },
  { path: "/about-me", name: "AboutMe", component: FrontendAboutMe },
  { path: "/resume", name: "Resume", component: FrontendResume },
  { path: "/portfolio", name: "Portfolio", component: FrontendPortfolio },
  { path: "/blogs", name: "Blog", component: FrontendBlog },
  { path: "/contact-us", name: "Contact", component: FrontendContact },
  { path: "*", name: "404Page", component: PageNotFound }
  
];

const router = new VueRouter({
  mode: "history",
//   scrollBehavior(to, from, savedPosition) {
//     if (savedPosition) {
//       return savedPosition;
//     } else {
//       return { x: 0, y: 0 };
//     }
//   },
  routes: routes
});

export default router;
