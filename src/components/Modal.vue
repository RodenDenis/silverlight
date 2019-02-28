<template>
    <div class="modal">
        <div class="show-modal" v-if="showingModal">
            <div class="modal-header">
                <p class="left">Добавление нового продукта</p>
                <button class="right" @click="showingModal = false;">Закрыть</button>
            </div>
            <div class="modal-body">
                <table class="form">
                    <tr>
                        <th>Название продукта</th>
                        <th>:</th>
                        <td><input type="text" placeholder="Введите название продукта" v-model="newProduct.title"></td>
                    </tr>
                    <tr>
                        <th>Описание продукта</th>
                        <th>:</th>
                        <td><input type="text" placeholder="Введите описание продукта" v-model="newProduct.description"></td>
                    </tr>
                    <tr>
                        <th>Цена продукта</th>
                        <th>:</th>
                        <td><input type="text" placeholder="Введите цену продукта" v-model="newProduct.price"></td>
                    </tr>
                </table>
                <button @click="showingModal = false; addProduct();">Добавить товар</button>
            </div>
        </div>
    </div>
</template>
