<script setup>
import { Head, Link } from '@inertiajs/vue3';

defineProps({
    canLogin: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
    },
    laravelVersion: {
        type: String,
        required: true,
    },
    phpVersion: {
        type: String,
        required: true,
    },
});
</script>

<template>
    <Head title="Welcome to BAG LIFE" />
    <div class="home">
        <div class="content">
            <img src="https://assets.bwbx.io/images/users/iqjWHBFdfxIU/i46RzKufITtw/v0/-999x-999.gif" alt="" class="center-image" width="400px" >
            <p class="text-center text-5xl font-bold text-blue-500 mt-10">Welcome to BAG LIFE!</p>
            <p class="text-center text-xl font-bold text-blue-300 mt-2">Discover and shop for your favorite bags</p>
            <p class="text-center text-xl font-bold text-blue-700 mt-5 mb-5">Start shopping now!</p>
            <div class="auth-links">
                <div class="auth-links-container">
                    <Link :href="route('login')" class="route-link">Log in</Link>
                    <Link v-if="canRegister" :href="route('register')" class="route-link">Register</Link>
                </div>
            </div>
        </div>
    </div>
</template>

<style>
.home {
    background-image: url('https://t3.ftcdn.net/jpg/06/25/48/46/360_F_625484655_phB4RJR6ld0mFtSma1DyE3hRRNS8iA5y.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
}

.content {
    text-align: center;
    background: rgba(255, 255, 255, 0.192);
    padding: 20px;
    border-radius: 16px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
}

.center-image {
    display: block;
    margin: 0 auto;
}

.auth-links {
    margin-top: 20px;
}

.auth-links-container {
    display: flex;
    justify-content: center;
}

.route-link {
    font-weight: 600;
    margin: 10px;
    padding: 10px 20px;
    border: 2px solid transparent;
    border-radius: 30px;
    transition: all 0.3s ease;
    background-color: #00008B; /* Dark blue */
    color: #fff;
    text-decoration: none;
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.15);
}

.route-link:hover {
    background-color: #fff;
    border-color: #00008B; /* Dark blue */
    color: #00008B; /* Dark blue */
}
</style>
