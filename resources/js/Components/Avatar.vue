<script>
import { Link } from '@inertiajs/inertia-vue3'
export default {
  data() {
    return {
    showDropdown: false,
    };
    
  },
  computed: {
    username() {
      return this.$page.props.auth?.user?.name;
    },
    email() {
      return this.$page.props.auth?.user?.email; 
    }
  },
  components: {
    Link
  }
};
</script>

<template>

  <div>
    {{ username }}
    <img
    @click = "showDropdown = !showDropdown"
    id="avatar"
    type="button"
    data-dropdown-toggle="userDropdown"
    data-dropdown-placement="bottom-start"
    class="w-10 h-10 rounded-full cursor-pointer"
    src="https://www.diethelmtravel.com/wp-content/uploads/2016/04/bill-gates-wealthiest-person.jpg"
    alt="User dropdown"
  />
  </div>
  

  <!-- Dropdown menu -->
  <div
    id="userDropdown"
    class="
      absolute
      right-0
      z-10
      bg-white
      divide-y divide-gray-100
      rounded
      shadow
      w-44
      dark:bg-gray-700 dark:divide-gray-600
      
    "
    v-show="showDropdown"
  >
    <ul
      class="py-1 text-sm text-gray-700 dark:text-gray-200 divide-y
      divide-red-200"
      aria-labelledby="dropdownInformationButton"
    >
      <li>
        <a
          href="#"
          class="
            block
            px-4
            py-2
            hover:bg-gray-300
            dark:hover:bg-gray-600 dark:hover:text-white
          "
          >Mon profil (to do)</a
        >
      </li>
      <li>
        <a
          href="#"
          class="
            block
            px-4
            py-2
            hover:bg-gray-300
            dark:hover:bg-gray-600 dark:hover:text-white
          "
          >Panneau admin (to do)</a
        >
      </li>
      <li>
        <Link :href="route('logout')" method="post"

          class="
            block
            px-4
            py-2
            hover:bg-gray-300
            text-red-600
            
          "
          >Se déconnecter</Link
        >
      </li>
    </ul>
  </div>
</template>
