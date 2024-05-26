<template>
    <div>
      <Head title="Profile" />
      
      <Yourlayout>
        <main class="container">
          <div class="profile-details">
            <div class="profile-picture">
              <img src="https://assets.bwbx.io/images/users/iqjWHBFdfxIU/i46RzKufITtw/v0/-999x-999.gif" alt="Profile Picture">
            </div>
            <div class="user-info">
              <h2>{{ $page.props.auth.user.name }}</h2>
              <p>{{ $page.props.auth.user.email }}</p>
            </div>
          </div>
          <section class="card-section">
            <h1 class="section-heading">SUGGESTED STORES</h1>
            <div class="cards">
              <div class="card" v-for="(card, index) in cardImages" :key="index">
                <div class="card-content">
                  <img :src="card" alt="Card Image">
                  <h3>{{ cardNames[index] }}</h3>
                  <button @click="follow(cardNames[index])" class="follow-button">Follow</button>
                </div>
              </div>
            </div>
          </section>
        </main>
      </Yourlayout>
    </div>
  </template>
  
  <script setup>
  import Yourlayout from '@/Layouts/Yourlayout.vue';
  import { Head } from '@inertiajs/vue3';
  
  const cardImages = [
    "https://img.freepik.com/premium-vector/luxury-modern-combination-ga-abstract-vector-logo_773411-383.jpg",
    "https://img.freepik.com/premium-vector/letter-logo-with-bag-bag_803633-540.jpg",
    "https://www.logoground.com/uploadthumbs10/dv10y20211854922021-09-243010123Two%20Line%20Letter%20G%20Logo.jpg"
  ];
  
  const cardNames = [
    "APPLE.CM",
    "SHOP.DAISY-PH",
    "KTEEN EXPNSV-BAGS",
  ];
  
  const follow = (storeName) => {
    console.log(`Following ${storeName}`);
  }
  </script>
  
  <style scoped>
  .container {
    padding: 20px;
    max-width: 100%;
  }
  
  .profile-details {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 20px;
    margin-bottom: 40px;
  }
  
  .profile-picture {
    width: 150px;
    height: 150px;
    border-radius: 50%;
    overflow: hidden;
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
  }
  
  .profile-picture img {
    width: 100%;
    height: 100%;
    object-fit: cover;
  }
  
  .user-info {
    text-align: center;
  }
  
  .user-info h2 {
    margin-bottom: 10px;
    font-size: 24px;
    color: #333;
  }
  
  .user-info p {
    margin: 0;
    font-size: 18px;
    color: #666;
  }
  
  .section-heading {
    text-align: center;
    font-size: 28px;
    color: #333;
    text-transform: uppercase;
    letter-spacing: 1px;
    margin-bottom: 30px;
  }
  
  .cards {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 20px;
  }
  
  .card {
    position: relative;
    width: 300px;
    height: 400px;
    background-color: #0a192f;
    border-radius: 20px;
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    overflow: hidden;
    transition: transform 0.3s, box-shadow 0.3s;
  }
  
  .card:before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-image: radial-gradient(circle at 20% 50%, #6bd4fe, transparent 60%), radial-gradient(circle at 75% 75%, #ffafbd, transparent 60%);
    opacity: 0.5;
    z-index: -1;
  }
  
  .card:hover {
    transform: translateY(-10px);
    box-shadow: 0 12px 24px rgba(0, 0, 0, 0.4);
  }
  
  .card-content {
    text-align: center;
    padding: 20px;
  }
  
  .card-content img {
    width: 100%;
    height: auto;
    object-fit: cover;
    border-radius: 10px;
    margin-bottom: 20px;
  }
  
  .card h3 {
    margin: 0;
    font-size: 24px;
    color: #fff;
  }
  
  .card p {
    margin: 0;
    font-size: 18px;
    color: #ccc;
  }
  
  .follow-button {
    padding: 10px 20px;
    font-size: 18px;
    background-color: #00adb5;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
  }
  
  .follow-button:hover {
    background-color: #00838f;
  }
  </style>
  