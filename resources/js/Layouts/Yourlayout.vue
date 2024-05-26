<script setup>
import { Link } from '@inertiajs/vue3';
import Dropdown from '@/Components/Dropdown.vue';
import DropdownLink from '@/Components/DropdownLink.vue';
import NavLink from '@/Components/NavLink.vue';
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';
</script>

<template>
  <div class="content flex-grow">
    <nav class="custom-bg-dark-blue border-b border-gray-200">
      <div class="max-w-7xl mx-auto px-4 py-2 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center">
          <h1 class="text-2xl font-extrabold tracking-tight text-white flex items-center">
            <img src="https://png.pngtree.com/png-clipart/20230213/ourmid/pngtree-blue-shopping-bag-from-paper-material-png-image_6598614.png" alt="Shopee Logo" class="logo mr-2">
            LifeBags
          </h1>
          <div class="hidden sm:flex sm:items-center">
            <NavLink :href="route('dashboard')" :active="route().current('dashboard')" class="text-white hover:text-gray-300 mr-6">
              Dashboard
            </NavLink>
            <Link href="/home" class="text-white hover:text-gray-300 mr-4">Home</Link>
            <Link href="/products" class="text-white hover:text-gray-300 mr-4">Products</Link>
            <Link href="/about" class="text-white hover:text-gray-300">About</Link>
            <Dropdown align="right" width="48" class="ml-4">
              <template #trigger>
                <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-white bg-blue-500 hover:bg-blue-600 focus:outline-none focus:border-blue-700 focus:shadow-outline-blue active:bg-blue-700 transition ease-in-out duration-150">
                  {{ $page.props.auth.user.name }}
                  <svg class="ml-2 -me-0.5 h-4 w-4 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                  </svg>
                </button>
              </template>
              <template #content>
                <DropdownLink :href="route('logout')" method="post" as="button" class="text-left w-full text-white hover:bg-blue-500 hover:text-white">
                  Log Out
                </DropdownLink>
              </template>
            </Dropdown>
          </div>
          <div class="sm:hidden">
            <button @click="showingNavigationDropdown = !showingNavigationDropdown" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
              <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                <path :class="{ hidden: showingNavigationDropdown, 'inline-flex': !showingNavigationDropdown }" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                <path :class="{ hidden: !showingNavigationDropdown, 'inline-flex': showingNavigationDropdown }" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
              </svg>
            </button>
          </div>
        </div>
      </div>
    </nav>
    <header class="bg-white shadow py-6">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <slot name="header" />
      </div>
    </header>
    <main class="px-4 sm:px-6 lg:px-8 py-8">
      <Transition name="page-trans" mode="out-in">
        <slot />
      </Transition>
    </main>
  </div>
</template>

<style scoped>
  .custom-bg-dark-blue {
    background: linear-gradient(to bottom, #0c2340, #00204e);
  }

  .logo {
    height: 40px;
    width: 40px;
  }

  .content {
    flex-grow: 1;
    background: rgba(255, 255, 255, 0.1);
    padding: 20px;
    border-radius: 20px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
  }
</style>
