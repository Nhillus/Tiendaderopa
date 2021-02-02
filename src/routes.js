import Home from "./components/home/Home.vue";
import Login from "./components/public/Login.vue";
import Register from "./components/public/Register.vue";
import Lostpass from './components/public/Lostpass.vue';
import Restore from './components/public/Restore.vue';
import Secure from "./components/Secure.vue";

export const routes = [
  { path: "/", name: "home", component: Home },
  { 
    path: "/login",
    name: "login", 
    component: Login, 
    meta: { onlyVisitor : true }  
  },
  { 
    path: "/lostpass",
    name: "lostpass", 
    component: Lostpass, 
    meta: { onlyVisitor : true }  
  },
  { 
    path: "/restore",
    name: "restore", 
    component: Restore, 
    meta: { onlyVisitor : true }
  },
  { 
    path: "/register", 
    name: "register", 
    component: Register, 
    meta: { onlyVisitor : true } 
  },
  {
    path: "/secure",
    name: "secure",
    component: Secure,
    meta: { requiresAuth: true }
  }
];
