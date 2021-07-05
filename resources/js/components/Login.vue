<template>
    <div class="w-full">
        <div class="p-2 text-2xl text-green-600 font-semibold w-full text-center"><p>Log In</p></div>
        <div class="p-2 w-full">
            <div class="p-2 w-full">
                <label for="email">Email</label><br>
                <input class="w-full bg-gray-100 rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base px-4 py-1" type="text" name="email" placeholder="Enter email" v-model="form.email">
            </div>
        </div>
        <div class="p-2 w-full">
            <label for="password">Password</label><br>
            <input class="w-full bg-gray-100 rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base px-4 py-1" type="password" name="password" placeholder="Enter password" v-model="form.password">
        </div>
        <div class="p-2 w-full text-center">
            <button class="text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg" type="submit" @click.prevent="login">Log In</button>
        </div>
    </div>
</template>
<script>
export default {
    data() {
        return {
            form: {
                email: '',
                password: ''
            }
        }
    },

    methods: {
        login() {
            axios.post('/api/login', this.form).then(() => {
                this.$router.push({ path: '/dash'});
            })
        }
    },

    setup() {
        
    },
}
</script>