<template>
    <div class="products">
        <div class="cards">
            <div class="product" v-for="product in products" :key="product">
                <a href="/">
                <div class="image">  
                   <img class="item-img" src="@/assets/logo.png">
                </div>
                <div class="item-text">
                   <div class="caption">
                       <h4 class="item-title">{{id}} / {{title}}</h4>
                       <p class="item-text">{{description}}</p>
                       <p class="item-price">{{price}}</p>
                   </div>
                </div>
                </a>
                <button type="button">
                    Купить
                </button>
                <button type="button" @click="showingEditModal = true; selectUser(user)">
                    редактировать
                </button>
                <button type="button" @click="showingDeleteModal = true; selectUser(user)">
                    удалить
                </button>
            </div>
        </div>
    </div>
</template>

<script>

export default {
   
}
</script>

<style>
.products {
    min-height: 500px;
}
.cards {
    display: grid;
    grid-template-columns: repeat(5, 1fr);   
}
.image {
    max-width: 100%;
    height: auto;
}
.product {
    border: 1px solid #eee;
    margin: auto;
    margin-top: 10px;
    margin-left: 10px;
    width: 90%;
    max-height: 385px;
}
a {
    text-decoration: none;
}
.item-button-buy {
    height: 32px;
    width: 100%;
    cursor: pointer;
}
.item-title {
    font-weight: bold;
    font-size: 1.4em;
    margin: 0px;
    color: #23a1d1;
}
.caption {
    box-sizing: border-box;
    word-wrap: break-word;
    height: 140px;
}
.item-text {
    margin-bottom: 0;
    font-weight: 400;
    color: #666;
    font-size: 0.9em;
}
.item-price {
    margin-top: 30px;
    color: #444;
    font-size: 1.3em;
    background-color: #fef2b8;
}
</style>


