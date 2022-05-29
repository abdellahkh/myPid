<template>
 <nav class="flex items-center justify-between flex-wrap bg-red-700 p-4 rounded-b-[14px]">
  <div class="flex items-center flex-shrink-0 text-white mr-6">

    <a href="/homepage" :active="$page.component === 'Homepage'"><ApplicationLogo class="w-10 mr-3" /></a>
    <span class="font-semibold text-xl tracking-tight ml-5">Projet d'intégration de développement</span>
  </div>

  <div class="block lg:hidden">
    <button class="flex items-center px-3 py-2 border rounded text-teal-200 border-teal-400 hover:text-white hover:border-white">
      <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
    </button>
  </div>
  <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
    <div class="text-sm lg:flex-grow">

      <NavLink href="/homepage" :active="$page.component === 'Homepage'">
      <span style="display:flex; align-items:center">
                <HomepageIcon />
                Accueil
            </span>
      </NavLink>

      <NavLink href="/shop" :active="$page.component === 'Shop'">
      <span style="display:flex; align-items:center">
                <ShopIcon />
                Page 2
            </span>
      </NavLink>

      <NavLink href="/news" :active="$page.component === 'News'">
      <span style="display:flex; align-items:center">
                <NewsIcon />
                Page 3
            </span>
      </NavLink>

      <NavLink href="/minichat" :active="$page.component === 'Minichat'">
      <span style="display:flex; align-items:center">
                <MinichatIcon />
                Page 4
            </span>
      </NavLink>



    
    </div>
    <div>
      <a v-if="!$page.props.auth.user" href="/login" class="inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-teal-500 hover:bg-white mt-4 lg:mt-0">Se connecter / S'inscrire</a>
      <p v-else class="text-white "><Avatar /></p>
      
    </div>
  </div>
</nav>

</template>

<script setup>

import { Link } from '@inertiajs/inertia-vue3' 
import ApplicationLogo from '@/Icons/ApplicationLogo.vue'
import HomepageIcon from '@/Icons/HomepageIcon.vue'
import ShopIcon from '@/Icons/ShopIcon.vue'
import NewsIcon from '@/Icons/NewsIcon.vue'
import MinichatIcon from '@/Icons/MinichatIcon.vue'
import NavLink from '@/Shared/NavLink'
import Avatar from '@/Components/Avatar'


</script>