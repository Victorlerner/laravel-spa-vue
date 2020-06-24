import Vue from 'vue'
import VueRouter from 'vue-router'
import ExampleComponent from './components/ExampleComponent'
import ContactsCreate from './views/ContactsCreate'
import ContactsShow from './views/ContactsShow'
import ContactsEdit from './views/ContactsEdit'
import ContactsIndex from './views/ContactsIndex'
import BirthdaysIndex from './views/BirthdaysIndex'
import Logout from './actions/Logout'

Vue.use(VueRouter)

export default new VueRouter({
    routes: [
        {path: '', component: ExampleComponent,
            meta: {title: 'Home'}
            },
        {path: '/contacts', component: ContactsIndex,
            meta: {title: 'Contacts'}},
        {path: '/contacts/create', component: ContactsCreate,
            meta: {title: 'Contacts Add'}},
        {path: '/contacts/:id', component: ContactsShow,
            meta: {title: 'Details Contact'}},
        {path: '/contacts/:id/edit', component: ContactsEdit,
            meta: {title: 'Edit Contact'}},

        {path: '/birthdays', component: BirthdaysIndex,
            meta: {title: 'This Moth\'s Birthdays'}},
        {path: '/logout', component: Logout,
            meta: {title: 'Logout'}},
    ],
    mode: 'history',
})
