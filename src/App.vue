<template>
  <div id="app">
    <div class="nav">
    <div id="nav-top">
      <router-link to="/profile" class="nav-profile">Здравствуйте, гость</router-link>
      <router-link to="/">Каталог</router-link> |
      <router-link to="/sellout">Акции</router-link> |
      <router-link to="/news">Новости</router-link> |
      <router-link to="/about">О нас</router-link> |
      <router-link to="/partners">Наши партнёры</router-link> | 
      <router-link to="/partners">Контакты</router-link> 
    </div>
    <div id="nav-down">
        <div class="logo">
          <router-link to="/"><img class="logo" src="@/assets/logo.png"></router-link>
        </div>
        
        <div id="search" class="input-group">
          <input type="text" name="search" value="" placeholder="Поиск" class="input-search">
            <button type="button" class="search-btn">
              Поиск
            </button>
        </div>
        
        <button class="cart">
          <router-link class="basket-link" to="/basket">Товаров 0 (0.00.грн)</router-link> 
        </button>
        <button @click="showingModal = true;">
          добавить товар
        </button>
        <p class="errorMessage" v-if="errorMessage">{{errorMessage}}</p>
			  <p class="successMessage" v-if="successMessage">{{successMessage}}</p>
    </div>
    </div>
    <router-view/>
    <modal/>
    <bottom/>
  </div>
</template>
<script>
import Bottom from "@/components/Bottom.vue"
import Modal from "@/components/Modal.vue"
export default {
  components: {
    Bottom,
    Modal
  },
  data () {
    return {
      showingModal: false,
      showingEditModal: false,
      showingDeleteModal: false,
      errorMessage: "",
      successMessage: "",
      products: [],
      newProduct: {title: "", description: "", price: ""},
      clickedProduct: {}
    }
  },
  mounted() {
    console.log("Hi, admin");
    this.getAllProducts();
  },
  methods: {
    getAllProducts() {
      axios.get("http://localhost:8080/src/api.php?action=read")
      .then(function(response){
        console.log(response);
        if (response.data.error) {
          app.errorMessage = response.data.message;
        } else {
          app.products = response.data.producs;
        }
      });
    },
    addProduct() {
      var formData = app.toFormData(app.newProduct);
      axios.post("http://localhost:8080/src/api.php?action=create", formData)
        .then(function(response){
          console.log(response);
          app.newProduct = {title: "", description: "", price: ""};
          if (response.data.error) {
            app.errorMessage = response.data.message;
          } else {
            app.successMessage = response.data.message;
            app.getAllProducts();
          }
        });
    },
    updateProduct() {
      var formData = app.toFormData(app.newProduct);
      axios.post("http://localhost:8080/src/api.php?action=update", formData)
        .then(function(response){
          console.log(response);
          app.clickedProduct = {}
          if (response.data.error) {
            app.errorMessage = response.data.message;
          } else {
            app.successMessage = response.data.message;
            app.getAllProducts();
          }
        });
    },
    deleteProduct() {
      var formData = app.toFormData(app.newProduct);
      axios.post("http://localhost:8080/src/api.php?action=delete", formData)
        .then(function(response){
          console.log(response);
          app.newProduct = {title: "", description: "", price: ""};
          if (response.data.error) {
            app.errorMessage = response.data.message;
          } else {
            app.successMessage = response.data.message;
            app.getAllProducts();
          }
        });
    },
    selectProduct(product) {
      app.clickedProduct = product;
    },
    toFormData(obj) {
      var form_data = new FormData();
      for (var key in obj) {
        form_data.append(key, obj[key]);
      }
      return form_data;
    },
    clearMessage() {
      app.errorMessage = "";
      app.successMessage = "";
    }
  }
}
</script>

<style>
#app {
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  width: 100%;
}
#nav-top {
  padding: 15px;
  background-color: #47476b;
  color: #f0f0f5;
}
#nav-top a {
  font-weight: bold;
  color: #c2c2d6;
  text-decoration: none;
}
#nav-top a.router-link-exact-active {
  color: white;
}
#nav-down {
  display: grid;
  grid-template-columns: 17% 45% 25%;
  justify-content: center;
  margin-bottom: 10px;
  margin-top: 15px;
}
.nav-profile {
  float: left;
}
.contacts {
  display: inline-block;
  float: right;
  cursor: pointer;
  margin-left: 16%;
}
.input-group {
  position: relative;
  display: flex;
  border-collapse: separate;
  margin: auto;
  width: 100%;
}
.input-search {
  border: 1px solid #f0f0f5;
  width: 70%;
  height: 40px;
  padding-left: 10px;
  border-radius: 6px;
  outline: none;
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}
.search-btn {
  height: 44px;
  border: 1px solid #f0f0f5;
  border-radius: 6px;
  box-shadow: inset 0 1px 0 rgba(255,255,255,.2), 0 1px 2px rgba(0,0,0,.05);
  cursor: pointer;
  touch-action: manipulation;
  z-index: 2;
  margin-left: -3px;
  padding: 8px 24px;
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
  outline: none;
  background-color: #e7e7e7;
  background-image: linear-gradient(to bottom, #eeeeee, #dddddd);
  background-repeat: repeat-x;
  font-size: 1em;
}
.logo {
  width: 50px;
  height: 50px;
  margin: auto;
}
.cart {
  height: 44px;
  width: 210px;
  background-color: #47476b;
  background-image: linear-gradient(to bottom, #47476b, #47476b);
  text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
  border-radius: 6px;
  margin: auto;
  cursor: pointer;
}
.cart:hover {
  border-color: black;
}
.basket-link {
  color: #fff;
}
</style>
