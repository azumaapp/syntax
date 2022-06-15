import Users from './pages/Users'
import Home from './pages/Home'
import Movies from './pages/Movies'

export default [
    {
        path: '/',
        component: Home
    },
    {
        path: '/movies',
        component: Movies
    },
    {
        path: '/users',
        component: Users
    },
]
