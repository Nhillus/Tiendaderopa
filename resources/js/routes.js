import Home from './components/Home';
import About from './components/About';
import Register from './components/Register';
import Loginm from './components/Loginm';
import Dashboard from './components/Dashboard';
import NotFound from './components/NotFound';
import prueba from './components/prueba';
import loginmc from './components/Loginm-copy';
import git from './components/logingit';


export default{
    mode: 'history',
    linkActiveClass: 'font-semibold',
    routes: [
        {
            path: '/git',
            component: git,
            name: 'git'
        },
        {
            path: '/loginmc',
            component: loginmc,
            name: 'loginmc'
        },
        {
        path: '/login',
            component: prueba,
            name: 'prueba'
        },
        {
            path: '*',
            component: NotFound
        },
        {
            path: '/',
            component: Home,
            name: "Home"
        },
        {
            path: '/about',
            component: About
        },
        {
            path: '/register',
            component: Register
        },
        {
            path: '/Loginm',
            component: Loginm,
            name: 'Loginm'
        },
        {
            path: "/dashboard",
            name: "Dashboard",
            component: Dashboard,
           beforeEnter: (to, form, next) =>{
               axios.get('/api/athenticated').then(()=>{
                   next()
               }).catch(()=>{
                   return next({ name: 'Login'})
               })
           }
       
          }
          
    ]
}