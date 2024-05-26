<template>
  <div class="container mx-auto py-8 px-4 flex flex-col items-center">
    <head>
      <!-- Link for Bootstrap icons -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css">
    </head>
    
    <!-- Header -->
    <div class="flex justify-between w-full mb-8">
      <h1 class="text-2xl md:text-3xl lg:text-4xl text-white font-semibold">List of Products</h1>
      <!-- Link to create new product -->
      <Link :href="'/products/create'" class="btn btn-blue text-sm md:text-base lg:text-lg font-semibold leading-5 text-white bg-blue-500 hover:bg-blue-600 rounded-lg shadow-md">Create New</Link>
    </div>

    <!-- Product Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 justify-items-center">
      <div v-for="product in props.products" :key="product.id" class="card-container">
        <!-- Product Card -->
        <div class="card bg-gradient-to-r from-blue-500 to-blue-700 shadow-xl rounded-lg overflow-hidden">
          <div class="p-4 relative h-full flex flex-col justify-center items-center">
            <!-- Gradient Overlay -->
            <div class="absolute inset-0 opacity-20 rounded-lg bg-gradient-to-r from-blue-500 to-blue-700"></div>
            <!-- Product Details -->
            <div class="relative z-10 flex flex-col justify-center items-center">
              <h2 class="text-lg md:text-xl lg:text-2xl xl:text-3xl font-semibold text-white mb-2">{{ product.name }}</h2>
              <p class="text-gray-300 text-sm md:text-base lg:text-lg xl:text-xl mb-2">{{ product.description }}</p>
              <p class="text-gray-300 font-bold text-sm md:text-base lg:text-lg xl:text-xl mb-1">₱ {{ product.price }}</p>
              <p class="text-gray-300 text-sm md:text-base lg:text-lg xl:text-xl">{{ getCategoryName(product.category_id) }}</p>
              <!-- View Product Button -->
              <Link :href="'/products/' + product.id" class="view-product-btn mt-2">
                <i class="bi bi-box-seam text-white"></i>
              </Link>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import { ref, onMounted } from 'vue';
import { Link } from '@inertiajs/vue3';
import { defineProps } from 'vue';
import Yourlayout from '@/Layouts/Yourlayout.vue';

const props = defineProps({
  products: Array,
  categories: Array,
});

defineOptions({
  layout: Yourlayout
});

const getCategoryName = (id) => {
    const category = props.categories.find(category => category.id === id);
    return category ? category.name : 'Unknown';
};
</script>

<style scoped>

/* Container */
.container {
  background: linear-gradient(45deg, #ffffffd2, #020b3b6b);
  padding: 20px;
  max-width: 100%;
}

/* Header */
.text-white {
  color: #192a56;
}

.btn-blue {
  background-color: #f1f1f1;
}

.btn-blue:hover {
  background-color: #273c75b9;
}

/* Product Card */
.card {
  border-radius: 20px;
}

/* View Product Button */
.view-product-btn {
  background-color: #314375;
  color: white;
  padding: 6px;
  border-radius: 50%;
}

.view-product-btn:hover {
  background-color: #c9cdd6;
}

/* Card Container */
.card-container {
  display: flex;
  flex-direction: column;
  align-items: center;
}

/* Additional CSS */
.grid {
  width: 100%;
}

.card {
  width: 100%;
  max-width: 300px;
}

.btn {
  transition: transform 0.3s ease;
}

.btn:hover {
  transform: translateY(-2px);
}

/* Style for the Create New button */
.btn-create-new {
  padding: 20px 40px; /* Adjust padding to make the button bigger */
}

</style>
