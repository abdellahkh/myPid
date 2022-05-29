<script>
import Layout from "../Shared/Layout.vue";

export default {
  layout: Layout,
};


</script>

<template>
  <Head title="Shop" />
 Test

</template>

<style scoped>

.product_list {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-evenly;
}
.product_item {
  display: flex;
  width: 300px;
  flex-direction: column;
  margin-bottom: 20px;
  box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
  justify-content: space-between;
}
.item_image {
  margin-bottom: 10px;
}
.item_name {
  padding: 10px;
  font-weight: bold;
}
.item_price,
.item_quantity {
  padding: 10px;
}
.button {
  border-radius: 4px;
  background: #35a2c7;
  color: #fff;
  border: none;
}
.button:hover {
  border: none;
  cursor: pointer;
}
.item_button {
  align-self: flex-start;
  padding: 5px;
  margin: 10px;
}
.product_actions {
  display: flex;
  justify-content: space-between;
  align-items: center;
}
.cart_button,
.remove_button {
  width: 30px;
  height: 30px;
}
.add_button {
  width: 120px;
  height: 42px;
}
.remove_like_button,
.like_button {
  width: 42px;
  height: 42px;
  background-color: transparent;
}
</style>
