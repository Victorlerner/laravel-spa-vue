<template>
    <div>
        <contacts-list endpoint="/api/birthdays"/>
    </div>

</template>

<script>
    import ContactsList from '../components/ContactsList'

    export default {
        name: 'ContactsIndex',
        components: {
            ContactsList,
        },

    }
</script>

<style scoped>

</style>
