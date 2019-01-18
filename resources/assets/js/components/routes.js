import LoginComponent from './Login.vue'
import DashboardComponent from './dashboard/Dashboard.vue'
import AdminComponent from './dashboard/admin/Admin.vue'
import UserComponent from './dashboard/user/User.vue'

const routes = [
  { path: '*', redirect: { name: 'dashboard' } },
  { name: 'login', path: '/', component: LoginComponent },
  // { name: 'dashboard', path: '/dashboard', component: DashboardComponent },
  { name: 'admin', path: '/dashboard/admin', component: DashboardComponent,
    children: [
      {
        name: 'inicio',
        path: '/admin',
        component: DashboardComponent
      },
      {
        name: 'departamentos',
        path: '/departments',
        component: DashboardComponent
      },
      {
        name: 'empleados',
        path: '/employees',
        component: DashboardComponent
      },
    ]
  },
  {name: 'user', path: '/dashboard/user', component: UserComponent},
]

export default routes