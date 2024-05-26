<template>
  <div class="about-page">
    <h1>About Life Bags</h1>
    <section class="intro">
      <p>Welcome to Life Bags, your ultimate destination for trendy and high-quality bags. At Shopee Bags, we are committed to bringing you a seamless shopping experience, featuring a diverse range of stylish bags for every occasion. Whether you're looking for chic handbags, versatile backpacks, or elegant clutches, Shopee Bags has it all.</p>
    </section>
    
    <section class="categories">
      <h2>Our Bag Categories</h2>
      <ul>
        <li>Hand Bags</li>
        <li>Bagpacks</li>
        <li>Tote Bags</li>
        <li>Backpacks</li>
        <li>Crossbody Bags</li>
        <li>Travel Bags</li>
        <li>Messenger Bags</li>
      </ul>
    </section>
    
    <section class="mission">
      <h2>Our Mission</h2>
      <p>At Shopee Bags, our mission is to provide our customers with a curated selection of trendy and high-quality bags at competitive prices. We carefully curate our collection to meet the diverse needs and preferences of our shoppers, ensuring that each bag is crafted with precision and attention to detail.</p>
    </section>

    <section class="commitment">
      <h2>Our Commitment to Quality</h2>
      <p>We prioritize quality in every bag we offer. Our dedicated team works tirelessly to source the best materials, ensuring that each bag meets our high standards of excellence. With Shopee Bags, you can shop with confidence, knowing that quality is guaranteed.</p>
    </section>
    
    <section class="customer-service">
      <h2>Exceptional Customer Service</h2>
      <p>Customer satisfaction is our top priority. Our support team is always ready to assist you with any questions or concerns. We strive to make your shopping experience as smooth and enjoyable as possible, from browsing our collection to receiving your bag.</p>
    </section>
    
    <div class="unique-element">
      <h2>Our Vision: Elevating Your Style with Trendy Bags</h2>
      <p>At Shopee Bags, we envision revolutionizing the way you accessorize by offering a curated selection of trendy bags. From stylish tote bags for everyday use to fashionable backpacks for your adventures, we aim to elevate your style and provide you with the perfect accessory for every occasion. Discover the latest trends and find your perfect match with Shopee Bags. Elevate your style and make a statement wherever you go with our exclusive collection of bags.</p>
    </div>
  </div>
</template>

<script setup>
import Yourlayout from '@/Layouts/Yourlayout.vue';

defineOptions({
  layout: Yourlayout
});
</script>

<style scoped>
.about-page {
  max-width: 800px;
  margin: 0 auto;
  padding: 20px;
  font-family: 'Roboto', sans-serif;
  color: #252f5a; /* Text color matches dashboard theme */
}

h1 {
  text-align: center;
  margin-bottom: 20px;
  font-size: 2.5em;
  color: #192a56; /* Matches dashboard theme */
}

section {
  margin-bottom: 30px;
}

h2 {
  font-size: 1.8em;
  margin-bottom: 10px;
  color: #192a56; /* Matches dashboard theme */
}

p {
  font-size: 1.1em;
  line-height: 1.6;
}

ul {
  list-style-type: none;
  padding: 0;
}

ul li {
  background-color: #f1f1f1;
  margin: 5px 0;
  padding: 10px;
  border-radius: 5px;
  color: #192a56; /* Matches dashboard theme */
}

.unique-element {
  background: linear-gradient(to right, #192a56, #273c75); /* Background gradient */
  padding: 20px;
  border-radius: 10px;
  margin-top: 30px;
}

.unique-element h2 {
  color: #fff; /* Text color matches dashboard theme */
  font-size: 1.8em;
  margin-bottom: 15px;
}

.unique-element p {
  color: #f1f1f1; /* Text color matches dashboard theme */
  font-size: 1.1em;
  line-height: 1.6;
}
</style>
