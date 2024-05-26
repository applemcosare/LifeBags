<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import DeleteUserForm from './Partials/DeleteUserForm.vue';
import UpdatePasswordForm from './Partials/UpdatePasswordForm.vue';
import UpdateProfileInformationForm from './Partials/UpdateProfileInformationForm.vue';
import { Head } from '@inertiajs/vue3';

defineProps({
    mustVerifyEmail: {
        type: Boolean,
    },
    status: {
        type: String,
    },
});
</script>

<template>
    <div class="container">
        <div class="heading">Profile</div>

        <div class="card">
            <UpdateProfileInformationForm
                :must-verify-email="mustVerifyEmail"
                :status="status"
                class="form-container"
            />
        </div>

        <div class="card">
            <UpdatePasswordForm class="form-container" />
        </div>

        <div class="card">
            <DeleteUserForm class="form-container" />
        </div>
    </div>
</template>

<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import DeleteUserForm from './Partials/DeleteUserForm.vue';
import UpdatePasswordForm from './Partials/UpdatePasswordForm.vue';
import UpdateProfileInformationForm from './Partials/UpdateProfileInformationForm.vue';
import { Head } from '@inertiajs/vue3';

defineProps({
    mustVerifyEmail: {
        type: Boolean,
    },
    status: {
        type: String,
    },
});
</script>

<style scoped>
.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
}

.heading {
    font-size: 24px;
    font-weight: bold;
    color: #333; /* Dark text color */
}

.card {
    background-color: #ffffff; /* White background */
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
    padding: 20px;
    margin-bottom: 20px;
}

.form-container {
    max-width: 500px;
    margin: 0 auto;
}

.input-field {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ccc; /* Light gray border */
    border-radius: 5px;
}

.input-field:focus {
    outline: none;
    border-color: #666; /* Darker gray border on focus */
}

.btn {
    display: inline-block;
    padding: 10px 20px;
    background-color: #4CAF50; /* Green button background */
    color: white;
    text-align: center;
    text-decoration: none;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.btn:hover {
    background-color: #45a049; /* Darker green on hover */
}
</style>

