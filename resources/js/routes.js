import Login from './components/Login';
import Register from './components/Register';
import About from './components/About';
import Dashboard from './components/Dashboard';

export default {
    mode: 'history',

    routes: [
        {
            path: '/',
            component: About
        },
        {
            path: '/login',
            component: Login,
            beforeEnter: (to, form, next) => {
                axios.get('/api/authenticated').then(() => {
                    return next({ path: '/dash'});
                }).catch(() => {
                    next();
                })
            }
        },
        {
            path: '/register',
            component: Register
        },
        {
            path: '/dash',
            component: Dashboard
        }
    ]
}