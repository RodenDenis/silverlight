<template>
  <div class="home">
    <div class="shop">
      
      <div class="sort">
        <sort/>
      </div>
      
      <div class="main-content">
      
        <items/>
      </div>
      
    </div>
  </div>
</template>

<script>
import Sort from "@/components/Sort.vue"
import Items from "@/components/Items.vue"

export default {
  components: {
    Sort,
    Items,
   
  }
}
</script>

<style>
.home {
  width: 100%;
  margin: auto;
}
.shop {
  display: grid;
  grid-template-columns: 16% 84%;
}
.sort {
  height: max-content;
  margin-top: 10px;
}
.main-content {
  display: block;
}
</style>


