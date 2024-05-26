<template>
  <div class="shop-container">
    <h1>Categories</h1>
    <div class="categories">
      <div class="category" @click="filterProducts('Handbags')">Handbags</div>
      <div class="category" @click="filterProducts('Backpacks')">Backpacks</div>
      <div class="category" @click="filterProducts('Travel Bags')">Travel Bags</div>
      <div class="category" @click="filterProducts('Messenger Bags')">Messenger Bags</div>
      <div class="category" @click="filterProducts('Tote Bags')">Tote Bags</div>
    </div>
    <div class="product-grid">
      <div class="product-card" v-for="product in filteredProducts" :key="product.id">
        <div class="product-content">
          <img :src="product.image" :alt="product.name" class="product-image"/>
          <div class="product-details">
            <p class="product-name">{{ product.name }}</p>
            <p class="product-price">{{ product.price }}</p>
          </div>
          <button class="buy-now-button">Buy Now</button>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import { ref } from 'vue';
import Yourlayout from '@/Layouts/Yourlayout.vue';

defineOptions({
  layout: Yourlayout
});

const products = [
  { id: 1, name: "Leather Handbag", price: "₱149.99", image: "https://cf.ltkcdn.net/handbags/images/orig/260648-1600x1030-most-expensive-designer-purse-brands.jpg", category: "Handbags" },
  { id: 2, name: "Canvas Backpack", price: "₱79.99", image: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSeK9KmZtMdZX0H6ZTPh8F1cs2XEfCjKak0kg&s", category: "Backpacks" },
  { id: 3, name: "Travel Duffle Bag", price: "₱99.99", image: "https://www.salonprivemag.com/wp-content/uploads/2023/03/hgfsfhk.jpg", category: "Travel Bags" },
  { id: 4, name: "Leather Messenger Bag", price: "₱129.99", image: "https://3.imimg.com/data3/WX/RT/MY-4737343/dscn5054.jpg", category: "Messenger Bags" },
  { id: 5, name: "Canvas Tote Bag", price: "₱59.99", image: "https://img4.dhresource.com/webp/m/0x0/f3/albu/km/n/13/2afd3320-64b6-4b10-8392-d6e47d05fa4a.jpg", category: "Tote Bags" },
  { id: 6, name: "Stylish Handbag", price: "₱199.99", image: "https://aeworld.com/wp-content/uploads/2018/12/Alberto-Sartori-eco-friendly-leather-ethical-fashion-luxury-4.jpg", category: "Handbags" },
  { id: 7, name: "Vintage Backpack", price: "₱89.99", image: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRIbs7RCWb1RhCFUPxU5kspJ2tmRGn8qlpIpQ&s", category: "Backpacks" },
  { id: 8, name: "Weekender Bag", price: "₱129.99", image: "https://i.pinimg.com/originals/d8/f2/13/d8f2131a691fac39d22d3c3adbba0657.jpg", category: "Travel Bags" },
  { id: 9, name: "Leather Satchel", price: "₱179.99", image: "https://img4.dhresource.com/webp/m/0x0/f3/albu/km/t/24/f6606e65-8a4c-4ee1-956f-2137a72a7e72.jpg", category: "Messenger Bags" },
  { id: 10, name: "Beach Tote Bag", price: "₱49.99", image: "https://miro.medium.com/v2/resize:fit:1400/1*POcstsP5lkF3tJBFofq_PA.jpeg", category: "Tote Bags" },
  // Add more bag products here
];
const selectedCategory = ref(null);

const filteredProducts = ref([]);

const filterProducts = (category) => {
  selectedCategory.value = selectedCategory.value === category ? null : category;
  filteredProducts.value = selectedCategory.value ? products.filter(product => product.category === selectedCategory.value) : products;
};
</script>

<style scoped>
h1 {
  font-size: 40px;
  color: #0c172e; 
  margin-bottom: 50px;
}

.shop-container {
  display: flex;
  flex-direction: column;
  align-items: center;
  padding: 20px;
  font-size: 32px; 
  color: #000000; 
  margin-bottom: 20px; 
}

.categories {
  display: flex;
  justify-content: center;
  margin-bottom: 20px;
}

.category {
  padding: 10px 20px;
  margin: 0 10px;
  border-radius: 5px;
  background-color: #0a192f;
  font-weight: bold;
  color: #fff;
  cursor: pointer;
  transition: background-color 0.3s;
}

.category:hover {
  background-color: #142850;
}

.product-grid {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(250px, 1fr)); /* Adjusting product card width */
  gap: 20px;
  max-width: 1200px;
  align-items: center;
}

.product-card {
  background: #0a192f;
  border-radius: 15px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
  transition: transform 0.3s, box-shadow 0.3s;
  overflow: hidden;
  text-align: center;
  padding: 20px;
  position: relative;
}

.product-card:before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-image: radial-gradient(circle at 30% 80%,  #6bd4fe, transparent 80%), radial-gradient(circle at 80% 80%,  #ffafbd, transparent 60%);
  opacity: 0.5;
  z-index: -1;
}

.product-card:hover {
  transform: translateY(-10px);
  box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
}

.product-content {
  position: relative;
}

.product-image {
  width: 100%;
  height: auto;
  border-bottom: 1px solid #ddd;
  margin-bottom: 20px;
}

.product-details {
  margin-bottom: 10px; /* Adjusting margin */
}

.product-name {
  font-size: 20px; /* Adjusting font size */
  font-weight: bold;
  color: #ffffff;
  margin: 0;
}

.product-price {
  font-size: 18px; /* Adjusting font size */
  color: #ff8a00;
  margin: 0;
}

.buy-now-button {
  background: linear-gradient(90deg, #e2e2e2, #6c95c5);
  color: #fff;
  border: none;
  padding: 8px 16px; /* Adjusting padding */
  border-radius: 15px; /* Adjusting border radius */
  font-size: 14px; /* Adjusting font size */
  cursor: pointer;
  transition: background 0.3s;
}

.buy-now-button:hover {
  background: linear-gradient(90deg, #6c95c5, #e2e2e2);
}
</style>
