import LoginComponent from './Login.vue'
import DashboardComponent from './dashboard/Dashboard.vue'
import AdminComponent from './dashboard/admin/Admin.vue'
import UserComponent from './dashboard/user/User.vue'

const routes = [
  {path: '/', component: LoginComponent},
  {path: '/dashboard', component: DashboardComponent},
  {
    name: 'admin', 
    path: '/dashboard/admin', 
    component: AdminComponent,
    children: [
      
    ]
  },
  {name: 'user', path: '/dashboard/user', component: UserComponent},
]

export default routes